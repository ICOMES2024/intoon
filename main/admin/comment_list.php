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
				c.idx, 
				c.username, 
				c.comment, 
				c.quiz_num, 
				c.register_date,
				c.is_prize,
				m.first_name,
				m.last_name,
				m.first_name_kor,
				m.last_name_kor,
				m.member_idx,
				m.email
			FROM 
				comments AS c
			LEFT JOIN 
				(SELECT idx AS member_idx, first_name, last_name, first_name_kor, last_name_kor, email FROM member) AS m
			ON 
				c.member_idx = m.member_idx
			WHERE 
				c.is_deleted = 'N'
			ORDER BY 
				c.register_date;
";
	$logList = get_data($sql);


	// 엑셀 다운로드
	$html = '<table id="datatable" class="list_table">';
	$html .= '<thead>';
	$html .= '<tr class="tr_center">';
	$html .= '<th>NO</th>';
	$html .= '<th>ID(Email)</th>';
	$html .= '<th>First Name</th>';
	$html .= '<th>Last Name</th>';
	$html .= '<th>성명(국문)</th>';
	$html .= '<th>문제</th>';
	$html .= '<th>댓글</th>';
	$html .= '<th>등록날짜</th>';
	$html .= '<th>채택유무</th>';
	$html .= '</tr>';
	$html .= '</thead>';
	$html .= '<tbody>';

	$num = 0;
 	foreach($logList as $memberNo => $member){
        $num = (int)$num+1;
		$html .= '<tr class="tr_center">';
		$html .= '<td>'.$num.'</td>';
		$html .= '<td>'.$member["email"].'</td>';
		$html .= '<td>'.$member["first_name"].'</td>';
		$html .= '<td>'.$member["last_name"].'</td>';
		$html .= '<td>'.$member["last_name_kor"]."".$member["first_name_kor"].'</td>';
		$html .= '<td>'.$member["quiz_num"].'</td>';
		$html .= '<td>'.$member["comment"].'</td>';
		$html .= '<td>'.$member["register_date"].'</td>';
		$html .= '<td style="text-align:center;">'.$member["is_prize"].'</td>';
        $html .= '</tr>';
	}
	$html .= '</tbody>';
	$html .= '</table>';

	$html = str_replace("'", "\'", $html);
	$html = str_replace("\n", "", $html);
	$count= count($logList);
?>
	<section class="list">
		<div class="container">
			<div class="title clearfix">
				<h1 class="font_title">Comment Event</h1>
                <button class="btn excel_download_btn" onclick="javascript:fnExcelReport('Comment Event', html);">엑셀 다운로드</button>
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
							<th>당첨 유무</th>
							<th>Name</th>
							<th>성명(국문)</th>
							<th>문제</th>
							<th>댓글</th>
							<th>등록일</th>
						</tr>
					</thead>
					<tbody>
					<?php
						if(!$logList) {
							echo "<tr><td class='no_data' colspan='9'>No Data</td></tr>"; 
						} else {
							foreach($logList as $memberNo => $member) {
					?>
						<tr class="tr_center">
							<td><a href="./member_detail.php?idx=<?=$member["member_idx"]?>"><?=$member["email"]?></a></td>
							<td>
								<select class='result_select' style="width:100px;">
									<option value="N" <?= $member["is_prize"] == 'N' ? 'selected' : '' ?>>N</option>
									<option value="Y" <?= $member["is_prize"] == 'Y' ? 'selected' : '' ?>>Y</option>
								</select>
								<button class='save_btn btn' data-id="<?=$member["idx"]?>">Save</button>
							</td>
							<td><?=$member["last_name"]." ".$member["first_name"]?></td>
							<td><?=$member["last_name_kor"]."".$member["first_name_kor"]?></td> <!-- 국문 -->	
							<td><?=$member["quiz_num"]?></td>
							<td><?=$member["comment"]?></td>
							<td><?=$member["register_date"]?></td>
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
    window.onload = () => {
        document.querySelector('#datatable').addEventListener('click', function(event) {
            if (event.target.classList.contains('save_btn')) {
                var parentTd = event.target.closest('td');
                var selectElement = parentTd.querySelector('.result_select');
                var selectedValue = selectElement.value;
                //console.log('check Selected value1:', selectedValue);

                var commentId = event.target.getAttribute('data-id');
                //console.log('check Selected value2:', commentId);

                saveSelectedValue(commentId, selectedValue);
            }
        });

    /***hyojun 동적생성 인식못함 ***/
    /* 
	window.onload = () => {
    document.querySelectorAll('.save_btn').forEach(function(button) {
        button.addEventListener('click', function(event) {
            var parentTd = event.target.closest('td');
            var selectElement = parentTd.querySelector('.result_select');
            var selectedValue = selectElement.value;
            console.log('check Selected value1:', selectedValue);

            var commentId = event.target.getAttribute('data-id');
            console.log('check Selected value2:', commentId);

            saveSelectedValue(commentId, selectedValue);
        });
    });
    */

    function saveSelectedValue(commentId, selectedValue) {
        console.log('Saving member ID:', commentId, 'with value:', selectedValue); 
        $.ajax({
            url: "../ajax/admin/ajax_event.php",
            type: "POST",
            data: {
                flag: "result",
                commentId: commentId,
                value: selectedValue 
            },
            dataType: "JSON",
            success: function(data) {
                if (data.code == 200) {
                    // Handle success case
                    alert("결과가 성공적으로 저장되었습니다.");
                } else {
                    alert("결과 변경 요청이 거절되었습니다. 관리자에게 문의해주세요.");
                }
            },
            error: function() {
                alert("오류가 발생했습니다. 다시 시도해주세요.");
            },
            complete: function() {
                // 로딩창 닫기
            }
        });
    }
};

</script>
<script src="./js/common.js?v=0.1"></script>
<?php include_once('./include/footer.php');?>