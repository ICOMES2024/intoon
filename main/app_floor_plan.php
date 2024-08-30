<?php
	include_once('./include/head.php');
	include_once('./include/app_header.php');

	$room = $_GET['room'];
?>

<section class="container app_floor_plan app_version">
	<div class="app_title_box">
		<h2 class="app_title">
			Floor Plan
			<button type="button" class="app_title_prev" onclick="javascript:history.back();"><img src="https://image.webeon.net/icomes2024/app/2024_icon_arrow_prev_wh.svg" alt="이전페이지로 이동"></button>
		</h2>
		<div class="app_menu_box ">
			<ul class="app_menu_tab langth_2">
			<li class="on"><a href="./app_floor_plan.php">Floor Plan</a></li>
			<!-- <li><a href="" class="get_ready_alert">Exhibition</a></li> -->
			<li><a href="./app_sponsor_exhibition.php">Exhibition</a></li>
			</ul>
		</div>
	</div>
	<div class="inner">
		<div class="contents_box">
		<!--
			<div class="floor_area">
				<img src="./img/img_floor_test.jpg" alt="">
				<div class="a_wrap">
					<a href="javascript:;"></a>
					<a href="javascript:;"></a>
					<a href="javascript:;"></a>
				</div>
			</div>
		-->
		<div class="floor_area">
			<img src="https://image.webeon.net/icomes2024/venue/2024_floor_plan_3f-1.png" alt="">
			<div class="a_wrap floor_3">
				<a href="javascript:;">
					<!-- <img src="/main/img/location.svg" style="width:100px;" class="location_pin <?=$room?>"/> -->
					<div class="map_marker <?= ($room == 'Room1' || $room == 'Room1~3') ? 'Room1' : '' ?>">
						 <div class='pin bounce'></div>
						 <div class='pulse'></div>
					 </div>
				</a>
					<ul class="pop_text">
                        <li class="floor_pop_title">[Room 1]</li>
						<li class="floor_pop_title">September 5 (Thu)</li>
						<li>- Symposium on Health Insurance Coverage for Obesity Treatment</li>
						<li>- Satellite Symposium 1,2</li>
						<li class="floor_pop_title">September 6 (Fri)</li>
						<li>- Plenary Lecture 1,2</li>
						<li>- Keynote Lecture 1</li>
						<li>- EASO Presidential Lecture</li>
						<li>- Special Scientific Lecture 1</li>
						<li>- Symposium 1,5,9</li>
						<li>- Breakfast Symposium 1</li>
						<li>- Luncheon Symposium 1</li>
						<li>- Opening Address</li>
						<li class="floor_pop_title">September 7 (Sat)</li>
                        <li>- Plenary Lecture 3,4</li>
                        <li>- Keynote Lecture 2,3</li>
                        <li>- Presidential Lecture</li>
						<li>- Special Scientific Lecture 2</li>
                        <li>- Symposium 13,17</li>
                        <li>- Breakfast Symposium 4</li>
                        <li>- Luncheon Symposium 5</li>
                        <li>- Closing & Award Ceremony</li>
					</ul>
					<a href="javascript:;">
						<div class="map_marker <?= ($room == 'Room2' || $room == 'Room1~3') ? 'Room2' : '' ?>">
							<div class='pin bounce'></div>
							<div class='pulse'></div>
						</div>
					</a>
					<ul class="pop_text">
                        <li class="floor_pop_title">[Room 2]</li>
						<li class="floor_pop_title">September 5 (Thu)</li>
                        <li>- Joint Symposium-JKT (Clinical)</li>
                        <li>- Joint Symposium-JKT (Basic)</li>
                        <li>- Satellite Symposium 3</li>
                        <li>- Special Session for Publication</li>
						<li class="floor_pop_title">September 6 (Fri)</li>
						<li>- Plenary Lecture 1,2</li>
						<li>- Keynote Lecture 1</li>
						<li>- EASO Presidential Lecture</li>
						<li>- Special Scientific Lecture 1</li>
                        <li>- Symposium 2,6,10</li>
                        <li>- Breakfast Symposium 2</li>
                        <li>- Luncheon Symposium 2</li>
                        <li>- Opening Address</li>
						<li class="floor_pop_title">September 7 (Sat)</li>
						<li>- Plenary Lecture 3,4</li>
                        <li>- Keynote Lecture 2,3</li>
                        <li>- Presidential Lecture</li>
						<li>- Special Scientific Lecture 2</li>
                        <li>- Symposium 14,18</li>
                        <li>- Breakfast Symposium 5</li>
                        <li>- Luncheon Symposium 6</li>
                        <li>- Closing & Award Ceremony</li>
					</ul>
					<a href="javascript:;">
						<div class="map_marker <?= ($room == 'Room3' || $room == 'Room1~3') ? 'Room3' : '' ?>">
							<div class='pin bounce'></div>
							<div class='pulse'></div>
						</div>
					</a>
					<ul class="pop_text">
                        <li class="floor_pop_title">[Room 3]</li>
						<li class="floor_pop_title">September 5 (Thu)</li>
                        <li>- Best Articles in JOMES</li>
                        <li>- Joint Symposium KSSO-KSoLA-KDA</li>
                        <li>- Welcome Reception</li>
						<li class="floor_pop_title">September 6 (Fri)</li>
						<li>- Plenary Lecture 1,2</li>
						<li>- Keynote Lecture 1</li>
						<li>- EASO Presidential Lecture</li>
						<li>- Special Scientific Lecture 1</li>
                        <li>- Symposium 3,7,11</li>
                        <li>- Breakfast Symposium 3</li>
                        <li>- Luncheon Symposium 3</li>
                        <li>- Opening Address</li>
						<li class="floor_pop_title">September 7 (Sat)</li>
						<li>- Plenary Lecture 3,4</li>
                        <li>- Keynote Lecture 2,3</li>
                        <li>- Presidential Lecture</li>
						<li>- Special Scientific Lecture 2</li>
                        <li>- Symposium 15,19</li>
                        <li>- Breakfast Symposium 6</li>
                        <li>- Luncheon Symposium 7</li>
                        <li>- Closing & Award Ceremony</li>
					</ul>
				</div>
                <div class="a_wrap center_bottom">
					<a href="javascript:;"></a>
					<ul class="pop_text">
                        <li class="floor_pop_title">[Registration Desk]</li>
						<!-- <li class="floor_pop_title">September 5 (Thu)</li>
                        <li>- Operating Hours: 14:00-19:30</li>
						<li class="floor_pop_title">September 6 (Fri)</li>
                        <li>- Operating Hours: 07:00-18:30</li>
						<li class="floor_pop_title">September 7 (Sat)</li>
                        <li>- Operating Hours: 07:00-18:30</li> -->
					</ul>
				</div>
				<!-- <div class="a_wrap right_bottom">
					<a href="javascript:;"></a>
					<ul class="pop_text">
				                        <li class="floor_pop_title">[Preview Room]</li>
				                        <li class="floor_pop_title">September 7 (Thu)</li>
				                        <li>- Operating Hours: 14:00-19:00<br>* Closed on September 8th and September 9th.</li>
					</ul>
				</div> -->
			</div>
			<div class="floor_area">
				<img src="https://image.webeon.net/icomes2024/venue/2024_floor_plan_5f-1.png" alt="">
				<div class="a_wrap floor_5">
					<div class="inner_a_wrap">
						<!-- <a href="javascript:;"></a>
                        <ul class="pop_text">
                            <li></li>
                        </ul> -->
						<a href="javascript:;"></a>
						<ul class="pop_text">
                            <li class="floor_pop_title">[Preview Room]</li>
                            <li class="floor_pop_title">September 6 (Fri)</li>
                            <li>Operating Hours: 07:30 - 18:00</li>
                            <li class="floor_pop_title">September 7 (Sat)</li>
                            <li>Operating Hours: 07:30 - 17:00<br>* Closed on September 7th.</li>
						</ul>
					</div>
					<a href="javascript:;">
						<div class="map_marker <?= ($room == 'Room4') ? 'Room4' : '' ?>">
							<div class='pin bounce'></div>
							<div class='pulse'></div>
						</div>
					</a>
					<ul class="pop_text">
                        <li class="floor_pop_title">[Room 4]</li>
                        <li class="floor_pop_title">September 6 (Fri)</li>
                        <li>- Symposium 4,8,12</li>
                        <li>- Oral Presentation 1</li>
                        <li>- Luncheon Symposium 4</li>
                        <li class="floor_pop_title">September 7 (Sat)</li>
                        <li>- Symposium 16,20</li>
                        <li>- Oral Presentation 3</li>
                        <li>- Luncheon Symposium 8</li>
					</ul>
					<a href="javascript:;">
						<div class="map_marker <?= ($room == 'Room5') ? 'Room5' : '' ?>">
							<div class='pin bounce'></div>
							<div class='pulse'></div>
						</div>
					</a>
					<ul class="pop_text">
                        <li class="floor_pop_title">[Room 5]</li>
                        <li class="floor_pop_title">September 6 (Fri)</li>
                        <li>- Sponsored Session 1,2</li>
                        <li>- Oral Presentation 2</li>
                        <li>- Joint Symposium KSSO-EASO</li>
                        <li class="floor_pop_title">September 7 (Sat)</li>
                        <li>- Sponsored Session 3</li>
                        <li>- Oral Presentation 4</li>
                        <li>- Joint Symposium KSSO-TOS</li>
					</ul>
				</div>
			</div>
			<div class="floor_area">
				<img src="https://image.webeon.net/icomes2024/venue/2024_floor_plan_6f-1.png" alt="">
				<div class="a_wrap floor_6_1">
					<a href="javascript:;">
						<div class="map_marker <?= ($room == 'Room7') ? 'Room7' : '' ?>">
							<div class='pin bounce'></div>
							<div class='pulse'></div>
						</div>
					</a>
					<ul class="pop_text">
                        <li class="floor_pop_title">[Room 7]</li>
                        <li class="floor_pop_title">September 6 (Fri)</li>
                        <li>- Congress Banquet (Invited Only)</li>
						<!-- <li class="floor_pop_title">September 7 (Sat)</li>
                        <li>- Guided Poster Presentation 2</li> -->
					</ul>
				</div>
				<div class="a_wrap floor_6_2">
					<!-- <a href="javascript:;"></a>
                    <ul class="pop_text">
                                            <li></li>
                    </ul>
                    <a href="javascript:;"></a>
                    <ul class="pop_text">
                                            <li></li>
                    </ul> -->
					<!-- <a href="javascript:;"></a>
					<ul class="pop_text">
                     <li class="floor_pop_title">[VIP Room]</li> 
                        <li class="floor_pop_title">September 8 (Fri)</li>
                        <li>- Exhibition Hours: 07:30-18:00</li>
                        <li class="floor_pop_title">September 9 (Sat)</li>
                        <li>- Exhibition Hours: 07:30-17:00</li> 
					</ul> -->
				</div>
				<div class="a_wrap floor_6_3">
					<a href="javascript:;"></a>
					<ul class="pop_text">
                        <li class="floor_pop_title">[Exhibition]</li>
                        <!-- <li class="floor_pop_title">September 8 (Fri)</li>
                        <li>- Exhibition Hours: 07:30-18:00</li>
                        <li class="floor_pop_title">September 9 (Sat)</li>
                        <li>- Exhibition Hours: 07:30-17:00</li> -->
					</ul>
					<a href="javascript:;"></a>
					<ul class="pop_text">
                        <li class="floor_pop_title">[Exhibition]</li>
                        <!-- <li class="floor_pop_title">September 8 (Fri)</li>
                        <li>- Exhibition Hours: 07:30-18:00</li>
                        <li class="floor_pop_title">September 9 (Sat)</li>
                        <li>- Exhibition Hours: 07:30-17:00</li> -->
					</ul>
					<a href="javascript:;">
						<div class="map_marker <?= ($room == 'Room6') ? 'Room6' : '' ?>">
							<div class='pin bounce'></div>
							<div class='pulse'></div>
						</div>
					</a>
					<ul class="pop_text">
                        <li class="floor_pop_title">[Poster Zone]</li>
                        <li class="floor_pop_title">September 6 (Fri)</li>
                        <li>- Guided Poster Presentation 1</li>
						<li class="floor_pop_title">September 7 (Sat)</li>
                        <li>- Guided Poster Presentation 2</li>
					</ul>
					<a href="javascript:;">
						<div class="map_marker <?= ($room == 'Room6') ? 'Room6' : '' ?>">
							<div class='pin bounce'></div>
							<div class='pulse'></div>
						</div>
					</a>
					<ul class="pop_text">
                        <li class="floor_pop_title">[Poster Zone]</li>
                        <li class="floor_pop_title">September 6 (Fri)</li>
                        <li>- Guided Poster Presentation 1</li>
						<li class="floor_pop_title">September 7 (Sat)</li>
                        <li>- Guided Poster Presentation 2</li>
					</ul>
					<a href="javascript:;"></a>
					<ul class="pop_text">
                        <li class="floor_pop_title">[Secretariat]</li>
						<!-- <li class="floor_pop_title">September 7 (Thu)</li>
                        <li>- Operating Hours: 14:00-19:00</li>
                        <li class="floor_pop_title">September 8 (Fri)</li>
                        <li>- Operating Hours: 07:30-18:00</li>
                        <li class="floor_pop_title">September 9 (Sat)</li>
                        <li>- Operating Hours: 07:30-17:00</li> -->
					</ul>
				</div>
				<div class="a_wrap floor_6_center">
					<a href="javascript:;"></a>
					<ul class="pop_text">
					    <li class="floor_pop_title">[Souvenir Exchange]</li>
						<!-- <li class="floor_pop_title">September 8 (Fri)</li>
					    <li>- Operating Hours: 07:30-18:00</li>
						<li class="floor_pop_title">September 9 (Sat)</li>
					    <li>- Operating Hours: 07:30-17:00</li> -->
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>

<script>
	$(document).ready(function(){
		// var div_height = $(".a_wrap > a").outerHeight();

        $(".app_header").removeClass("simple");

		$(window).resize(function(){
			$(".a_wrap > a").each(function(){
				var div_height = $(this).outerHeight();
				$(this).siblings("div").outerHeight(div_height);
			});
		});
		$(window).trigger("resize");
		
		$(".a_wrap a").click(function(){
			$(".floor_location_3f_room1").addClass("on");
			var pop_text = $(this).next(".pop_text").clone();
			$(".floor_location_3f_room1 .pop_cont > *").remove();
			$(".floor_location_3f_room1 .pop_cont").append(pop_text);
		});

		const room = '<?php echo $room; ?>';

		if(room){
			// const marker = document.querySelector(`.${room}`)
			const marker = $(`.${room}`)

			window.scrollTo({top: (marker.offset().top - 250), left:0, behavior:'smooth'});
		}

	});
</script>

<?php
	include_once('./include/popup_app.php');
	include_once('./include/app_footer.php');
?>