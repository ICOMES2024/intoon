<!-- [240314] hub 스탬프 투어 소스 파일 추가 !@#$^ -->
<?php
	include_once('./include/head.php');
	include_once('./include/header.php');

	if($admin_permission["auth_apply_poster"] == 0){
		echo '<script>alert("권한이 없습니다.");history.back();</script>';
	}

	$id = $_GET["id"] ?? "";
	$name = $_GET["name"] ?? "";

	if($id != ""){
		$where .= " AND m.email LIKE '%".$id."%' ";
	}

	if($name != ""){
		$where .= " AND CONCAT(m.first_name, ' ', m.last_name) LIKE '%".$name."%' ";
	}

	// 회원정보
	$sql = "SELECT
				m.idx, m.email, m.last_name, m.first_name, m.last_name_kor, m.first_name_kor
			FROM member AS m
			WHERE m.is_deleted = 'N'
			{$where}
		   ";
	$memberList = get_data($sql);
	$memberMap = [];

	for($a = 0; $a < count($memberList); $a++){
		$member = $memberList[$a];
		$no = $member["idx"];

		$member["stamp_cnt"] = 0;
		$memberMap[$no] = $member;
	}

	// 스탬프 및 부스정보
	$sql = "	
			SELECT 
				b.idx, b.name, b.grade, l.member_idx
			FROM e_booth AS b
			LEFT JOIN (
				SELECT booth_idx, member_idx FROM e_booth_log WHERE member_idx
			)AS l
			ON b.idx = l.booth_idx
			WHERE b.is_deleted = 'N'";
	$logList = get_data($sql);
	$boothMap = [];

	for($a = 0; $a < count($logList); $a++){
		$log = $logList[$a];
		$boothNo  = $log["idx"];
		$memberNo = $log["member_idx"]; 

		
		if(!array_key_exists($boothNo, $boothMap)){
			$boothMap[$boothNo] = array(
				"name"  => $log["name"],
				"grade" => $log["name"],
				"attend" => []
			);
		}

		if($memberNo){
			if(array_key_exists($memberNo, $memberMap)){
				$memberMap[$memberNo]["stamp_cnt"] += 1;
			}

			array_push($boothMap[$boothNo]["attend"], $memberNo);
		}
	}

	// 엑셀 다운로드
	$html = '<table id="datatable" class="list_table">';
	$html .= '<thead>';
	$html .= '<tr class="tr_center">';
	$html .= '<th>NO</th>';
	$html .= '<th>ID(Email)</th>';
	$html .= '<th>First Name</th>';
	$html .= '<th>Last Name</th>';
	$html .= '<th>성명(국문)</th>';
	$html .= '<th>스탬프 총 개수</th>';

    foreach($boothMap as $booth){
		$html .= '<th>'.$booth['name'].'</th>';
    }

	$html .= '</tr>';
	$html .= '</thead>';
	$html .= '<tbody>';

	$num = 0;
 	foreach($memberMap as $memberNo => $member){
        $num = (int)$num+1;
		$html .= '<tr class="tr_center">';
		$html .= '<td>'.$num.'</td>';
		$html .= '<td>'.$member["email"].'</td>';
		$html .= '<td>'.$member["first_name"].'</td>';
		$html .= '<td>'.$member["last_name"].'</td>';
		$html .= '<td>'.$member["last_name_kor"]."".$member["first_name_kor"].'</td>';
		$html .= '<td>'.number_format($member["stamp_cnt"]).'</td>';

		foreach($boothMap as $booth){
			$attend = in_array($memberNo ,$booth["attend"]) ? true : false;

			$html .= '<th>'.($attend ? 'O' : 'X').'</th>';
        }
        $html .= '</tr>';
	}
	$html .= '</tbody>';
	$html .= '</table>';

	$html = str_replace("'", "\'", $html);
	$html = str_replace("\n", "", $html);
	$count= count($memberList);
?>
	<section class="list">
		<div class="container">
			<div class="title clearfix">
				<h1 class="font_title">Stamp Tour</h1>
                <button class="btn excel_download_btn" onclick="javascript:fnExcelReport('Stamp Tour', html);">엑셀 다운로드</button>
			</div>
			<div class="contwrap centerT has_fixed_title">
				<form name="search_form">
					<table>
						<colgroup>
							<col width="10%">
							<col width="40%">
							<col width="10%">
							<col width="40%">
						</colgroup>
						<tbody>
							<tr>
								<th>ID(Email)</th>
								<td>
									<input type="text" name="id" value="<?= $id; ?>">
								</td>
								<th>Name</th>
								<td class="select_wrap clearfix2">
									<input type="text" name="name" data-type="string" value="<?= $name; ?>">
								</td>
							</tr>
						</tbody>
					</table>
					<button type="button" class="btn search_btn">검색</button>
				</form>
			</div>
			<div class="contwrap">
				<p class="total_num">총 <?=number_format($count)?>개</p>
				<table id="datatable" class="list_table">
					<thead>
						<tr class="tr_center">
							<th>ID(Email)</th>
							<th>First Name</th>
							<th>Last Name</th>
							<th>성명(국문)</th>
							<th>스탬프 총 개수</th>
							<?php
							foreach($boothMap as $booth){
								echo '<th>'.$booth['name'].'</th>';
							}

							
							?>
						</tr>
					</thead>
					<tbody>
					<?php
						if(!$memberList) {
							echo "<tr><td class='no_data' colspan='9'>No Data</td></tr>"; //좋아요 및 댓글기능 미개발로 colspan 8 -> 7로 변경
						} else {
							foreach($memberMap as $memberNo => $member) {
					?>
						<tr class="tr_center">
							<td><a href="./member_detail.php?idx=<?=$member["idx"]?>"><?=$member["email"]?></a></td>
							<td><?=$member["first_name"]?></td>
							<td><?=$member["last_name"]?></td>
							<td><?=$member["last_name_kor"]."".$member["first_name_kor"]?></td> <!-- 국문 -->
							<td><?=number_format($member["stamp_cnt"] ?? 0)?></td>
							<?php
								foreach($boothMap as $booth){
									$attend = in_array($memberNo ,$booth["attend"]) ? true : false;

									echo '<td>'.($attend ? 'O' : 'X').'</td>';
								}	
							?>
						</tr>
					<?php
							}
						}
					?>
					</tbody>
				</table>
			</div>
		</div>
	</section>
<script>
	var html = `<?=$html?>`;
</script>
<script src="./js/common.js?v=0.1"></script>
<?php include_once('./include/footer.php');?>