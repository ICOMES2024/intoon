<?php include_once('./include/head.php');?>
<?php include_once('./include/app_header.php');?>

<!-- HUBDNCAJY : App - STAMP TOUR > Stamp Tour Guidelines 페이지 -->
<section class="container app_version app_stamp_guidelines">
	<div class="app_title_box">
		<h2 class="app_title">STAMP TOUR<button type="button" class="app_title_prev" onclick="javascript:history.back();"><img src="https://image.webeon.net/icomes2024/app/2024_icon_arrow_prev_wh.svg" alt="이전페이지로 이동"></button></h2>
		<div class="app_menu_box">
			<ul class="app_menu_tab langth_3">
				<li class="on event"><a href="./app_stamp_guidelines.php">Stamp Tour Guidelines</a></li>
				<li class="event"><a href="./app_my_stamp.php">Stamp List<br/>(Scanner)</a></li>
				<!-- [240314] hub 스탬프 투어 소스 코드 수정 !@#$^ -->
				<li class="event"><a href="./app_stamp_list.php">My Stamp</a></li>
				<!-- <li><a href="./app_tour_map.php">Tour Map</a></li> -->
			</ul>
		</div>
	</div>
	<div class="inner">
		<div class="contents_box">
			<div class="app_contents_wrap type3">
				<img class="guide_img" src="https://image.webeon.net/icomes2024/app/2024_app_pop_stamp_tour_event-6.png"/>
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