<?php
	include_once('./include/head.php');
	include_once('./include/header.php');

	if($admin_permission["auth_apply_poster"] == 0){
		echo '<script>alert("권한이 없습니다.");history.back();</script>';
	}

	$id = isset($_GET["id"]) ? $_GET["id"] : "";
	$name = isset($_GET["name"]) ? $_GET["name"] : "";
	$title = isset($_GET["title"]) ? $_GET["title"] : "";
	$s_date = isset($_GET["s_date"]) ? $_GET["s_date"] : "";
	$e_date = isset($_GET["e_date"]) ? $_GET["e_date"] : "";

	$where = "";
	
	if($id != "") {
		$where .= " AND ra.email LIKE '%".$id."%' ";
	}

	if($name != "") {
		$where .= " AND CONCAT(ra.first_name,' ',ra.last_name) LIKE '%".$name."%' ";
	}

	if($title != "") {
		$where .= " AND ra.abstract_title LIKE '%".$title."%' ";
	}

	if($s_date != "") {
		$where .= " AND DATE(ra.register_date) >= '".$s_date."' ";
	}

	if($e_date != "") {
		$where .= " AND DATE(ra.register_date) <= '".$e_date."' ";
	}

	$abstract_list_query =  "
								SELECT
									ra.submission_code, ra.idx AS abstract_idx, ra.abstract_title, DATE_FORMAT(ra.register_date, '%y-%m-%d') AS register_date, ra.oral_presentation,
									m.idx AS member_idx, m.email, m.name, m.nation,
									f.original_name AS abstract_file_name, CONCAT(f.path,'/',f.save_name) AS path,
									c.title_en AS category,
									(
										CASE ra.presentation_type
											WHEN 0 THEN 'Oral Presentation'
											WHEN 1 THEN 'Poster Exhibition'
											WHEN 2 THEN 'Guided Poster Presentation'
											WHEN 3 THEN 'Any of them'
											ELSE ''
										END
									) AS presentation_type_text
								FROM request_abstract ra
								LEFT JOIN (
									SELECT
										m.idx, m.email, CONCAT(m.first_name,' ',m.last_name) AS name, n.nation_ko AS nation, is_deleted
									FROM member m
									JOIN nation n
									ON m.nation_no = n.idx
									) AS m
								ON ra.register = m.idx
								LEFT JOIN info_poster_abstract_category c
								ON ra.abstract_category = c.idx
								LEFT JOIN file f
								ON ra.abstract_file = f.idx
								WHERE ra.is_deleted = 'N'
								AND ra.parent_author IS NULL
								AND ra.`type` = 0
								AND m.is_deleted = 'N'
								{$where}
								ORDER BY ra.register_date DESC
							";


	$abstract_list = get_data($abstract_list_query);

	// 엑셀 다운로드
	$html = '<table id="datatable" class="list_table">';
	$html .= '<thead>';
	$html .= '<tr class="tr_center">';
	$html .= '<th>논문번호</th>';
	$html .= '<th>ID(Email)</th>';
	$html .= '<th>Country</th>';
	$html .= '<th>Name</th>';
	$html .= '<th>Title</th>';
	$html .= '<th>파일명</th>';
	$html .= '<th>카테고리</th>';
	//$html .= '<th>Oral</th>';
	$html .= '<th>Preferred Presentation Type</th>';
	$html .= '<th>등록일</th>';
	$html .= '</tr>';
	$html .= '</thead>';
	$html .= '<tbody>';

	foreach($abstract_list as $al){
		$html .= '<tr class="tr_center">';
		$html .= '<td>'.$al["submission_code"].'</td>';
		$html .= '<td>'.$al["email"].'</td>';
		$html .= '<td>'.$al["nation"].'</td>';
		$html .= '<td>'.$al["name"].'</td>';
		$html .= '<td>'.$al["abstract_title"].'</td>';
		$html .= '<td>'.$al["abstract_file_name"].'</td>';
		$html .= '<td>'.$al["category"].'</td>';
		//$html .= '<td>'.$al["oral_presentation"].'</td>';
		$html .= '<td>'.$al["presentation_type_text"].'</td>';
		$html .= '<td>'.$al["register_date"].'</td>';
		$html .= '</tr>';
	}
	$html .= '</tbody>';
	$html .= '</table>';

	$html = str_replace("'", "\'", $html);
	$html = str_replace("\n", "", $html);

	$count= count($abstract_list);
?>
	<section class="list">
		<div class="container">
			<div class="title clearfix">
				<h1 class="font_title">Poster Abstract Submission</h1>
				<button class="btn excel_download_btn" onclick="javascript:fnExcelReport('Poster Abstract Submission', html);">엑셀 다운로드</button>
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
							<tr>
								<th>Title</th>
								<td>
									<input type="text" name="title" data-type="string" value="<?= $title; ?>">
								</td>
								<th>등록일</th>
								<td class="input_wrap"><input type="text" name="s_date" value="<?= $s_date; ?>" class="datepicker-here" data-language="en" data-date-format="yyyy-mm-dd" data-type="date"> <span>~</span> <input type="text" value="<?= $e_date; ?>" name="e_date" class="datepicker-here" data-language="en" data-date-format="yyyy-mm-dd" data-type="date"></td>
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
							<th>논문번호</th>
							<th>ID(Email)</th>
							<th>Country</th>
							<th>Name</th>
							<th>Title</th>
							<th>파일명</th>
							<th>카테고리</th>
							<th>Preferred Presentation Type</th>
							<!-- <th>oral</th>
							<th>좋아요수 / 댓글수</th> -->
							<th>등록일</th>
							<th>삭제</th>
						</tr>
					</thead>
					<tbody>
					<?php
						if(!$abstract_list) {
							echo "<tr><td class='no_data' colspan='9'>No Data</td></tr>"; //좋아요 및 댓글기능 미개발로 colspan 8 -> 7로 변경
						} else {
							foreach($abstract_list as $list) {
								$ext = strtolower(end(explode(".",$list["abstract_file_name"])));
					?>
						<tr class="tr_center">
							<td><?=$list["submission_code"]?></td>
							<td><a href="./member_detail.php?idx=<?=$list["member_idx"]?>"><?=$list["email"]?></a></td>
							<td><?=$list["nation"]?></td>
							<td><?=$list["name"]?></td>
							<td><a href="./abstract_application_detail.php?idx=<?=$list["abstract_idx"]?>"><?=$list["abstract_title"]?></a></td>
						<?php if($ext == "pdf") { ?>
							<td><a href="./pdf_viewer.php?path=<?=$list["path"]?>" target="_blank"><?=$list["abstract_file_name"]?></a></td>
						<?php } else { ?>
							<td><a href="<?=$list["path"]?>" download><?=$list["abstract_file_name"]?></a></td>
						<?php } ?>
							<td><?=$list["category"]?></td>
							<td><?=$list["presentation_type_text"]?></td>
							<!-- <td><?=$list["oral_presentation"] == 0 ? "No" : "Yes"?></td>
							<td>13 / 32</td> -->
							<td><?=$list["register_date"]?></td>
							<td><a href="javascript:;" onclick="delete_submission('<?=$list["abstract_idx"]?>')">삭제</a></td>
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
	var html = '<?=$html?>';

	function delete_submission(idx) {
		if(confirm("초록을 삭제하시겠습니까?")) {
			$.ajax({
				url : "/main/ajax/client/ajax_submission.php",
				type : "POST",
				data : {
					flag : "submission_delete",
					idx : idx
				},
				dataType : "JSON",
				success : function(res){
					if(res.code == 200) {
						alert("초록 삭제가 완료되었습니다.");
						location.reload();
					} else if(res.code == 400) {
						alert("초록 삭제에 실패하였습니다.");
						return false;
					} else {
						alert("일시적으로 요청이 거절되었습니다.");
						return false;
					}
				}
			});
		}
	}
</script>
<script src="./js/common.js?v=0.1"></script>
<?php include_once('./include/footer.php');?>