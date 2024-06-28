
<?php
	include_once('./include/head.php');
	include_once('./include/header.php');

    $sql =	"
                SELECT *
                FROM comments
                WHERE is_deleted = 'N'
                ORDER BY register_date
                ";
    $list = get_data($sql);


    
	$html = '<table id="datatable" class="list_table">';
	$html .= '<thead>';
	$html .= '<tr class="tr_center">';
	$html .= '<th style="background-color:#C5E0B4; border-style: solid; border-width:thin;">No</th>';
	$html .= '<th style="background-color:#C5E0B4; border-style: solid; border-width:thin;">등록일시</th>';
	$html .= '<th style="background-color:#C5E0B4; border-style: solid; border-width:thin;">댓글</th>';
	$html .= '<th style="background-color:#C5E0B4; border-style: solid; border-width:thin;">성함</th>';
	$html .= '</tr>';
	$html .= '</thead>';
	$html .= '<tbody>';
	
    $number = 1;
	foreach($list as $l){

		$html .= '<tr class="tr_center">';
		$html .= '<td style="text-align:center; border-style: solid; border-width:thin;">'.$number.'</td>';
		$html .= '<td style="text-align:center; border-style: solid; border-width:thin;">'.$l["register_date"].'</td>';
		$html .= '<td style="border-style: solid; border-width:thin;">'.$l["comment"].'</td>';
		$html .= '<td style="border-style: solid; border-width:thin;">'.$rl["username"].'</td>';
		$html .= '</tr>';

        $number++;
	}

	$html .= '</tbody>';
	$html .= '</table>';

	$html = str_replace("'", "\'", $html);
	$html = str_replace("\n", "", $html);

	$count = count($registration_list);
?>
<style>
	.register_btn {float: right;}
</style> 
	<section class="list app_notice">
		<div class="container">
			<div class="title clearfix">
				<?php
                    if($admin_permission["auth_board_notice"] > 1){
				?>
					<h1 class="font_title">Live Event</h1>
                    <button type="button" class="btn excel_download_btn" onclick="javascript:fnExcelReport('Event', html);">엑셀 다운로드</button>
				<?php
                }
				?>
			</div>
		
			<div class="contwrap">
                <div class="flex_between title_wrap">
    				<p class="table_title">List</p>
                    <button type="button" class="btn app_add_notice_btn" onclick="location.href='./app_notice_detail.php'">Notice 등록</button>
                </div>
<!-- 				<table id="datatable" class="list_table"> -->
				<table id="datatable" class="list_table app">
					<colgroup>
						<col width="10%">
						<col width="60%">
						<col width="10%">
						<col width="20%">
					</colgroup>
					<thead>
						<tr class="tr_center">
                            <th>NO.</th>
							<th>등록일시</th>
							<th>comment</th>
							<th>성함</th>
							<th>삭제</th>
						</tr>
					</thead>
					<tbody>
                    <?php
                        $i = 1;
                        foreach ($list as $l) {
                    ?>
						<tr class="tr_center">
                            <td><?php echo $i; ?></td>
 						    <td><?=$l["register_date"]?></td>
							<td class="notice_title"><p class="ellipsis"><?=$l["comment"]?></p></td>
							<td><a href="./member_detail.php?idx=<?=$l["member_idx"]?>">username</a></td>
							<td><button onclick="delete_comment(<?php echo $l['idx']; ?>)">삭제</button></td>	
						</tr>
					</tbody>
                    <?php
                        $i++;
                    }
                    ?>
				</table>
			</div>

	</section>
    <script src="./js/common.js?v=0.2"></script>
<script>
	var html = '<?=$html?>';

	function delete_comment(idx) {
		if(confirm("댓글을 삭제하시겠습니까?")) {
			$.ajax({
				url : "/main/ajax/client/ajax_app_event.php",
				type : "POST",
				data : {
					flag : "comment_delete",
					comment_idx : idx
				},
				dataType : "JSON",
				success : function(res){
					if(res.code == 200) {
						alert("댓글 삭제가 완료되었습니다.");
						location.reload();
					} else if(res.code == 400) {
						// alert("초록 삭제에 실패하였습니다.");
						// return false;
					} else {
						// alert("일시적으로 요청이 거절되었습니다.");
						// return false;
					}
				}
			});
		}
	}
</script>

<?php include_once('./include/footer.php');?>
