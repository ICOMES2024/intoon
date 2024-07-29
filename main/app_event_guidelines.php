<?php include_once('./include/head.php');?>
<?php include_once('./include/app_header.php');?>
<?php $member_idx = isset($_SESSION["USER"]["idx"]) ? $_SESSION["USER"]["idx"] : null; ?>
<!-- HUBDNCLHJ : app survey 페이지 -->
<section class="container app_survey app_version">
	<div class="app_title_box">
		<h2 class="app_title">
			LIVE EVENT
			<button type="button" class="app_title_prev" onclick="javascript:window.location.href='./app_index.php';">
				<img src="https://image.webeon.net/icomes2024/app/2024_icon_arrow_prev_wh.svg" alt="이전페이지로 이동">
			</button>
		</h2>
		<div class="app_menu_box">
			<ul class="app_menu_tab langth_2">
					<li class="on event"><a href="./app_event_guidelines.php">Comment Event Guidelines</a></li>
					<li><a href="./app_event.php">Question </a></li>
				</ul>
		</div>
	</div>
	<div class="inner">
    <div class="contents_box">
			<div class="app_contents_wrap type3">   
                <!-- [240717] sujeong / 임시!!! 스탬프 투어 가이드로!!! 댓글 이벤트 가이드로 변경해야 함  -->
				<img style="width: 100%;" src="https://image.webeon.net/icomes2024/app/2024_event_guide.png"/>
			</div> 
		</div>
	</div>
</section>

<?php include_once('./include/app_footer.php');?>