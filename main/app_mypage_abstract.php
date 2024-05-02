<?php include_once('./include/head.php');?>
<?php include_once('./include/app_header.php');?>
<?php
 // [240419] sujeong / APP 로그인 페이지 /window confirm 창으로 수정 !!!
	if (empty($_SESSION["USER"])) {
		echo "
				<script>
					if (typeof(window.AndroidScript) != 'undefined' && window.AndroidScript != null) {
						window.AndroidScript.logout();
						if(window.confirm('Login required. Would you like to log in?')){ 
                            window.location.href = '/main/app_login.php';
                        }else{
                            window.history.back();
                        }
					}
				
				
						try{
							if (window.webkit?.messageHandlers!=null) {
								window.webkit.messageHandlers.logout.postMessage('');
								if(window.confirm('Login required. Would you like to log in?')){ 
									window.location.href = '/main/app_login.php';
								}else{
									window.history.back();
								}
							}
						} catch (err){
							console.log(err);
						}
				</script>
			";
	}
    $user_idx = $member["idx"] ?? -1;
	
	// [22.04.25] 미로그인시 처리
	if($user_idx <= 0) {
		echo "<script>alert('Need to login'); location.replace(PATH+'app_login.php');</script>";
		exit;
	}

	$my_abstract_query = "
			SELECT 
				ra.idx, ra.submission_code, ra.nation_no, ra.first_name, ra.last_name, ra.affiliation, ra.email, ra.phone, ra.abstract_title, DATE_FORMAT(ra.register_date, '%Y-%m-%d') AS register_date, f.path, f.save_name, f.original_name
			FROM request_abstract AS ra
			LEFT JOIN file AS f ON f.idx = ra.abstract_file
			WHERE ra.register = {$user_idx} AND ra.parent_author IS NULL AND ra.is_deleted = 'N'
			ORDER BY ra.idx
	";									

	$my_abstract_list = get_data($my_abstract_query);

	$total_count = count($my_abstract_list);

?>

<section class="container mypage app_version">
	<div class="app_title_box">
			<h2 class="app_title">
				My Page
				<button type="button" class="app_title_prev" onclick="javascript:history.back();"><img src="https://image.webeon.net/icomes2024/app/2024_icon_arrow_prev_wh.svg" alt="이전페이지로 이동"></button>
			</h2>
			<ul class="app_menu_tab langth_2">
				<li><a href="./app_registration.php">Registration</a></li>
				<li class="on"><a href="./app_mypage_abstract.php">Abstract</a></li>
				<!-- <li><a href="./app_schedule.php">My Schedule</a></li> -->
			</ul>
		</div>
	<div class="inner">
		<div class="contents_box">
			<div class="contents_wrap_my_page">
				<p class="mypage_abstract_txt">Review of Submission</p>
				
				<?php 
				if(count($my_abstract_list) == 0){?>
					<p>No Data.</p>
				<?php }else if(count($my_abstract_list) >= 1){
					foreach($my_abstract_list as $i => $submission) { ?>

					<table class="mypage_abstract_table">
					
						<tr class="centerT">
							<th>No.</th>
							<td><?= $i + 1 ?></td>
						</tr>
						<tr class="centerT">
							<th>Submission No.</th>
							<td><?= $submission["submission_code"] ?></td>
						</tr>
						<tr class="centerT">
							<th>Title</th>
							<td><?= $submission["abstract_title"] ?></td>
						</tr>
						<tr class="centerT">
							<th>Date of Submission</th>
							<td><?= $submission["register_date"] ?></td>
						</tr>
						<tr class="centerT">
							<th>File</th>
							<td><a target="_blank" href="https://docs.google.com/gview?url=https://icomes.or.kr<?php echo  $submission["path"]. $submission["save_name"] ?>&embedded=true"><?= $submission["original_name"] ?></a></td>
						</tr>
					</table>
					<?php } 	}?>
			</div>			
		</div> 
	</div>
</section>
<script>
	$(document).ready(function(){
        $(".app_header").removeClass("simple");
    })
</script>

<?php include_once('./include/app_footer.php');?>