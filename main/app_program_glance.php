<?php 
	include_once('./include/head.php'); 
	// HUBDNCHYJ : app 일 경우 전용 헤더 app_header 사용필요 
	$session_user = $_SESSION['USER'] ?? NULL;
	$session_app_type = (!empty($_SESSION['APP']) ? 'Y' : 'N');

	include_once('./include/app_header.php');

	$add_section_class = (!empty($session_user) && $session_app_type == 'Y') ? 'app_version' : '';
?>

<style>
	section.app_version .inner {
		padding-top:0 !important;
	}
</style>

<!-- HUBDNCHYJ : App 일 경우 padding/margin을 조정하는 app_version 클래스가 container에 들어가야 함 -->
<section class="container program_glance app_version">
	<!-- HUBDNCHYJ : App 일 경우 타이틀 영역 입니다. -->

		<div class="app_title_box">
			<h2 class="app_title">Program<button type="button" class="app_title_prev" onclick="javascript:window.location.href='./app_index.php';"><img src="/main/img/icons/icon_arrow_prev_wh.svg" alt="이전페이지로 이동"></button></h2>
			<ul class="app_menu_tab langth_2">
				<li class="on"><a href="./app_program_glance.php">Program at a Glance</a></li>
				<li><a href="./app_program_detail.php">Scientific Program</a></li>
			</ul>
		</div>
	<!-- HUBDNCHYJ : App 에서는 이 클래스 사용하시면 됩니다. -->
		<div class="app_tab_wrap fix_cont">
			<ul class="app_tab program glance">
				<li class="row2 all_days on"><a href="javascript:;">All Days</a></li>
				<li><a href="javascript:;">Sep.5(Thu)</a></li>
				<li><a href="javascript:;">Sep.6(Fri)</a></li>
				<li style="margin-right:5px;"><a href="javascript:;">Sep.7(Sat)</a></li>
			</ul>
		</div>

    <div class="inner">
        <div class="program_wrap section">
            <div class="scroll_table">
				<!-- HUBDNCHYJ : App 일때 하위 마크업 주석처리 필요 -->
				<div class="program_table_wrap">
					<table class="program_table main-table">
						<colgroup>
							<col class="program_first_col">
							<col class="program_first_col">
						</colgroup>
						<thead>
							<tr>
								<th class="font_big">Time/Location</th>
								<th>Room 1<br> </th>
								<th>Room 2</th>
								<th>Room 3</th>
								<th>Room 4</th>
								<th>Room 5</th>
								<th>Room 6</th>
								<th>Room 7</th>
							</tr>
							<tr>
								<th colspan="8" class="dark_gray_bg font_big day_tbody day_1">
									<!-- <div class="dots_div">Day 1 - 2024<img src="./img/icons/icon_dots.svg" class="dots_img" />9<img src="./img/icons/icon_dots.svg" class="dots_img" />5 (Thu)</div> -->
									<div class="dots_div">Day 1 - Thursday, September 5, 2024</div>
								</th>
							</tr>
						</thead>
						<!---------- DAY 1 ---------->
						<tbody name="day" class="day_tbody day_1">
							<tr>
								<td>
									<div class="colons_div">15:00-16:30</div>
								</td>
								<td class="yellow_green_bg pointer" name="jomes">
									Best Article in JOMES<p>편집위원회</p>
									<input type="hidden" name="e" value="room1">
								</td>
								<td class="violet_bg pointer" name="joint">
									Joint Symposium<p>KSSO-JKT 기초</p>
									<input type="hidden" name="e" value="room2">
								</td>
								<td class="skyblue_bg pointer" name="committee">
									Committee Session <p> 대외협력</p>
									<input type="hidden" name="e" value="room3">
								</td>
								<td class="light_gray_bg"></td>
								<td class="light_gray_bg"></td>
								<td class="light_gray_bg"></td>
								<td class="light_gray_bg"></td>
							</tr>
							<tr>
								<td class="break_time">
									<div class="colons_div">16:30-16:40</div>
								</td>
								<td colspan="3" class="light_gray_bg break_time">Break</td>
                                <td class="break_time light_gray_bg"></td>
                                <td class="break_time light_gray_bg"></td>
                                <td class="break_time light_gray_bg"></td>
                                <td class="break_time light_gray_bg"></td>
							</tr>
							<tr>
								<td>
									<div class="colons_div">16:40-18:10</div>
								</td>
                                <td class="light_yellow_bg pointer" name="pre_congress_symposium_2">
									Obesity Treatment Guidelines Symposium<p></p>
									<input type="hidden" name="e" value="room1">
								</td>
                                <td class="violet_bg pointer" name="joint">
									Joint Symposium<p>KSSO-JKT 임상</p>
									<input type="hidden" name="e" value="room2">
								</td>
                                <td class="light_gray_bg_2">
									기자간담회
									<input type="hidden" name="e" value="room3">
								</td>
								<td class="light_gray_bg"></td>
								<td class="light_gray_bg"></td>
								<td class="light_gray_bg"></td>
								<td class="light_gray_bg"></td>
							</tr>
                            <tr>
								<td rowspan="2">
									<div class="colons_div">18:10-19:10</div>
								</td>
								<td class="dark_sky_bg pointer" name="satellite_symposium_1">
									Satellite<br />Symposium 1
									<input type="hidden" name="e" value="room1">
								</td>
								<td class="dark_sky_bg pointer" name="satellite_symposium_3">
									Satellite<br />Symposium 3
									<input type="hidden" name="e" value="room2">
								</td>
								<td></td>
								<td class="light_gray_bg"></td>
								<td class="light_gray_bg"></td>
								<td class="light_gray_bg"></td>
								<td class="light_gray_bg"></td>
							</tr>
							<tr>
								<!-- <td>
									<div class="colons_div">18:30-19:00</div>
								</td> -->
								<td class="dark_sky_bg pointer" name="satellite_symposium_2">
									Satellite<br />Symposium 2
									<input type="hidden" name="e" value="room1">
								</td>
								
								<td></td>
								<td></td>
								<td class="light_gray_bg"></td>
								<td class="light_gray_bg"></td>
								<td class="light_gray_bg"></td>
								<td class="light_gray_bg"></td>
							</tr>
							<tr>
								<td>
									<div class="colons_div">19:10-21:00</div>
								</td>
								<td></td>
								<td></td>
								<td class="white_yellow_bg pointer" name="welcome_cocktail_party">
									Welcome<br />Cocktail Party
									<input type="hidden" name="e" value="room3">
								</td>
								<td class="light_gray_bg"></td>
								<td class="light_gray_bg"></td>
								<td class="light_gray_bg"></td>
								<td class="light_gray_bg"></td>
							</tr>
						</tbody>
						<!---------- DAY 2 ---------->
						<thead>
							<tr>
								<th colspan="8" class="dark_gray_bg font_big day_tbody day_2">
									<!-- <div class="dots_div">Day 2 - 2023<img src="./img/icons/icon_dots.svg" class="dots_img" />9<img src="./img/icons/icon_dots.svg" class="dots_img" />6 (Fri)</div> -->
									<div class="dots_div">Day 2 - Friday, September 6, 2024</div>
								</th>
							</tr>
						</thead>
						<tbody name="day" class="day_tbody day_2">
							<tr>
								<td>
									<div class="colons_div">07:30-08:20</div>
								</td>
								<td class="light_sky_bg pointer" name="breakfast_symposium_1">
									Breakfast<br />Symposium 1
									<input type="hidden" name="e" value="room1">
								</td>
								<td class="light_sky_bg pointer" name="breakfast_symposium_2">
									Breakfast<br />Symposium 2
									<input type="hidden" name="e" value="room2">
								</td>
								<td class="light_sky_bg pointer" name="breakfast_symposium_3">
									Breakfast<br />Symposium 3
									<input type="hidden" name="e" value="room3">
								</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td class="break_time">
									<div class="colons_div">08:20-08:30</div>
								</td>
								<td colspan="7" class="light_gray_bg break_time">Break</td>
							</tr>
							<tr>
								<td>
									<div class="colons_div">08:30-09:10</div>
								</td>
								<td colspan="3" class="dark_pink_bg pointer" name="key_lecture_1">
									Keynote Lecture 1 
									<!-- <p class="bold">Intermittent Metabolic Switching and Brain Health</p>
									<p>Thiruma V. Arumugam (La Trobe University, Australia)</p> -->
									<input type="hidden" name="e" value="room1">
								</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td class="break_time">
									<div class="colons_div">09:10-09:20</div>
								</td>
								<td colspan="7" class="light_gray_bg break_time">Break</td>
							</tr>
							<tr>
								<td>
									<div class="colons_div">09:20-10:50</div>
								</td>
								<td class="dark_green_bg pointer" name="symposium_1">
									Symposium 1 <p>Precision Medicine for Obesity</p>
									<input type="hidden" name="e" value="room1">
								</td>
								<td class="dark_green_bg pointer" name="symposium_2">
									Symposium 2 <p></p>
									<input type="hidden" name="e" value="room2">
								</td>
								<td class="dark_green_bg pointer" name="symposium_3">
									Symposium 3 <p>Possibilities and prospects of digital therapeutics for metabolic diseases</p>
									<input type="hidden" name="e" value="room3">
								</td>
								<td class="dark_green_bg pointer" name="symposium_4">
									Symposium 4 <p></p>
									<input type="hidden" name="e" value="room4">
								</td>
								<td class="dark_sky_bg pointer" name="sponsored_session_1">
									Sponsored Session 1 
									<!-- <p>Journey to the Combination Phentermine plus Topiramate ER from Clinical Trials to Practice</p> -->
									<input type="hidden" name="e" value="room5">
								</td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td class="break_time">
									<div class="colons_div">10:50-11:00</div>
								</td>
								<td colspan="7" class="light_gray_bg break_time">Break</td>
							</tr>
							<tr>
								<td>
									<div class="colons_div">11:00-11:10</div>
								</td>
								<td colspan="3" class="white_yellow_bg pointer" name="opening_address">
									Opening Address
									<input type="hidden" name="e" value="room1">
								</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td>
									<div class="colons_div">11:10-11:50</div>
								</td>
								<td colspan="3" class="dark_pink_bg pointer" name="keynote_lecture_2">
									Keynote Lecture 2
									<!-- <p class="bold">Adipose Tissue – A Treasure Box for Discoveries</p>
									<p>Matthias Blüher (University of Leipzig, Germany)</p> -->
									<input type="hidden" name="e" value="room1">
								</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td class="break_time">
									<div class="colons_div">11:50-12:00</div>
								</td>
								<td colspan="7" class="light_gray_bg break_time">Break</td>
							</tr>
							<tr>
								<td>
									<div class="colons_div">12:00-13:00</div>
								</td>
								<td class="light_sky_bg pointer" name="luncheon_symposium_1">
									Luncheon<br />Symposium 1
									<input type="hidden" name="e" value="room1">
								</td>
								<td class="light_sky_bg pointer" name="luncheon_symposium_2">
									Luncheon<br />Symposium 2
									<input type="hidden" name="e" value="room2">
								</td>
								<td class="light_sky_bg pointer" name="luncheon_symposium_3">
									Luncheon<br />Symposium 3
									<input type="hidden" name="e" value="room3">
								</td>
								<td class="light_sky_bg pointer" name="luncheon_symposium_4">
									Luncheon<br />Symposium 4
									<input type="hidden" name="e" value="room4">
								</td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td>
									<div class="colons_div">13:00-14:00</div>
								</td>
								<td></td>
								<td></td>
								<td></td>
								<td class="dark_orange_bg pointer" name="oral_presentation_1">
									Oral presentation 1
									<input type="hidden" name="e" value="room4">
								</td>
								<td class="dark_orange_bg pointer" name="oral_presentation_2">
									Oral presentation 2
									<input type="hidden" name="e" value="room5">
								</td>
								<td></td>
								<td class="dark_orange_bg pointer" name="guided_poster_presentation_1">
									Guided Poster1
									<input type="hidden" name="e" value="room7">
								</td>
							</tr>
							<tr>
								<td>
									<div class="colons_div">14:00-15:30</div>
								</td>
								<td class="dark_green_bg pointer" name="symposium_5">
									Symposium 5 <p></p>
									<input type="hidden" name="e" value="room1">
								</td>
								<td class="dark_green_bg pointer" name="symposium_6">
									Symposium 6 <p></p>
									<input type="hidden" name="e" value="room2">
								</td>
								<td class="dark_green_bg pointer" name="symposium_7">
									Symposium 7 <p></p>
									<input type="hidden" name="e" value="room3">
								</td>
								<td class="dark_green_bg pointer" name="symposium_8">
									Symposium 8 <p></p>
									<input type="hidden" name="e" value="room4">
								</td>
								<td class="dark_sky_bg pointer" name="sponsored_session_2">
									Sponsored Session 2 <p></p>
									<input type="hidden" name="e" value="room5">
								</td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td class="break_time">
									<div class="colons_div">15:30-15:40</div>
								</td>
								<td colspan="7" class="light_gray_bg break_time">Break</td>
							</tr>
							<tr>
								<td>
									<div class="colons_div">15:40-16:20</div>
								</td>
								<td colspan="3" class="dark_pink_bg pointer" name="keynote_lecture_2">
									Keynote Lecture 3
									<input type="hidden" name="e" value="room1">
								</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td class="break_time">
									<div class="colons_div">16:20-16:30</div>
								</td>
								<td colspan="7" class="light_gray_bg break_time">Break</td>
							</tr>
							<tr>
								<td>
									<div class="colons_div">16:30-18:00</div>
								</td>
								<td class="dark_green_bg pointer" name="symposium_9">
									Symposium 9 <p></p>
									<input type="hidden" name="e" value="room1">
								</td>
								<td class="dark_green_bg pointer" name="symposium_10">
									Symposium 10 <p></p>
									<input type="hidden" name="e" value="room2">
								</td>
								<td class="dark_green_bg pointer" name="symposium_11">
									Symposium 11 <p></p>
									<input type="hidden" name="e" value="room3">
								</td>
								<td class="dark_green_bg pointer" name="symposium_12">
									Symposium 12 <p></p>
									<input type="hidden" name="e" value="room4">
								</td>
								<td class="violet_bg pointer" name="joint">
									Joint Symposium<p> KSSO-EASO</p>
									<input type="hidden" name="e" value="room5">
								</td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td>
									<div class="colons_div">18:00-</div>
								</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td class="white_yellow_bg pointer" name="congress_banquet_ceremony">
									Congress Banquet 
									<p><span class="red_txt">*</span>Invited Only</p>
									<input type="hidden" name="e" value="room6">
								</td>
								<td></td>
							</tr>
						</tbody>
						<!---------- DAY 3 ---------->
						<thead>
							<tr>
								<th colspan="8" class="dark_gray_bg font_big day_tbody day_3">
									<div class="dots_div">Day 3 - Saturday, September 7, 2024</div>
								</th>
							</tr>
						</thead>
						<tbody name="day" class="day_tbody day_3">
							<tr>
								<td>
									<div class="colons_div">07:30-08:20</div>
								</td>
								<td class="light_sky_bg pointer" name="breakfast_symposium_4">
									Breakfast<br />Symposium 4
									<input type="hidden" name="e" value="room1">
								</td>
								<td class="light_sky_bg pointer" name="breakfast_symposium_5">
									Breakfast<br />Symposium 5
									<input type="hidden" name="e" value="room2">
								</td>
								<td class="light_sky_bg pointer" name="breakfast_symposium_6">
									Breakfast<br />Symposium 6
									<input type="hidden" name="e" value="room3">
								</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td class="break_time">
									<div class="colons_div">08:20-08:30</div>
								</td>
								<td colspan="7" class="light_gray_bg break_time">Break</td>
							</tr>
							<tr>
								<td>
									<div class="colons_div">08:30-09:10</div>
								</td>
								<td class="dark_pink_bg pointer" name="key_lecture_4" colspan="3">
									Keynote Lecture 4
									<!-- <p class="bold">The Role of Hunger-promoting Hypothalamic Neurons in Obesity Therapeutics</p>
									<p>Tamas Horvath (Yale University, USA)</p> -->
									<input type="hidden" name="e" value="room1">
								</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td class="break_time">
									<div class="colons_div">09:10-09:20</div>
								</td>
								<td colspan="7" class="light_gray_bg break_time">Break</td>
							</tr>
							<tr>
								<td>
									<div class="colons_div">09:20-10:50</div>
								</td>
								<td class="dark_green_bg pointer" name="symposium_13">
									Symposium 13 <p></p>
									<input type="hidden" name="e" value="room1">
								</td>
								<td class="dark_green_bg pointer" name="symposium_14">
									Symposium 14 <p>Understanding aging skeletal muscle and dynamics</p>
									<input type="hidden" name="e" value="room2">
								</td>
								<td class="dark_green_bg pointer" name="symposium_15">
									Symposium 15 <p></p>
									<input type="hidden" name="e" value="room3">
								</td>
								<td class="dark_green_bg pointer" name="symposium_16">
									Symposium 16 <p></p>
									<input type="hidden" name="e" value="room4">
								</td>
								<td class="dark_sky_bg pointer" name="sponsored_session_3">
									Sponsored Session 3 <p></p>
									<input type="hidden" name="e" value="room5">
								</td>
                                <td></td>
								<td></td>
							</tr>
							<tr>
								<td class="break_time">
									<div class="colons_div">10:50-11:00</div>
								</td>
								<td colspan="7" class="light_gray_bg break_time">Break</td>
							</tr>
							<tr>
								<td>
									<div class="colons_div">11:00-11:40</div>
								</td>
								<td class="dark_pink_bg pointer" name="presidential_lecture" colspan="3">
								Presidential Lecture<p class="bold"></p>
									<p></p>
									<input type="hidden" name="e" value="room1">
								</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td class="break_time">
									<div class="colons_div">11:40-11:50</div>
								</td>
								<td colspan="7" class="light_gray_bg break_time">Break</td>
							</tr>
							<tr>
								<td>
									<div class="colons_div">11:50-12:50</div>
								</td>
								<td class="light_sky_bg pointer" name="luncheon_symposium_5">
									Luncheon<br />Symposium 5
									<input type="hidden" name="e" value="room1">
								</td>
								<td class="light_sky_bg pointer" name="luncheon_symposium_6">
									Luncheon<br />Symposium 6
									<input type="hidden" name="e" value="room2">
								</td>
								<td class="light_sky_bg pointer" name="luncheon_symposium_7">
									Luncheon<br />Symposium 7
									<input type="hidden" name="e" value="room3">
								</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td>
									<div class="colons_div">12:50-13:50</div>
								</td>
								<td></td>
								<td></td>
								<td></td>
								<td class="dark_orange_bg pointer" name="oral_presentation_3">
									Oral Presentation 3
									<input type="hidden" name="e" value="room4">
								</td>
								<td class="dark_orange_bg pointer" name="oral_presentation_4">
									Oral Presentation 4
									<input type="hidden" name="e" value="room5">
								</td>
								<td></td>
								<td class="dark_orange_bg pointer" name="guided_poster_presentation_2">
									Guided Poster 2
									<input type="hidden" name="e" value="room7">
								</td>
							</tr>
							<tr>
								<td>
									<div class="colons_div">13:50-14:30</div>
								</td>
								<td class="dark_pink_bg pointer" name="keynote_lecture_5" colspan="3">
									Keynote Lecture 5
									<p class="bold"></p>
									<p></p>
									<input type="hidden" name="e" value="room1">
								</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td>
									<div class="colons_div">14:30-15:10</div>
								</td>
								<td class="dark_pink_bg pointer" name="keynote_lecture_6" colspan="3">
									Keynote Lecture 6
									<p class="bold"></p>
									<p></p>
									<input type="hidden" name="e" value="room1">
								</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td class="break_time">
									<div class="colons_div">15:10-15:20</div>
								</td>
								<td colspan="7" class="light_gray_bg break_time">Break</td>
							</tr>
							<tr>
								<td>
									<div class="colons_div">15:20-16:50</div>
								</td>
								<td class="dark_green_bg pointer" name="symposium_17">
									Symposium 17 
									<p></p>
									<input type="hidden" name="e" value="room1">
								</td>
								<td class="dark_green_bg pointer" name="symposium_18">
									Symposium 18 
									<p>Cracking the Neural Code: Understanding Obesity through the Hypothalamus, Brain Stem, and Vagus Pathways</p>
									<input type="hidden" name="e" value="room2">
								</td>
								<td class="dark_green_bg pointer" name="symposium_19">
									Symposium 19 
									<p></p>
									<input type="hidden" name="e" value="room3">
								</td>
								<td class="dark_green_bg pointer" name="symposium_20">
									Symposium 20
									<p>Exercise and Cardiometabolic dysfunction</p>
									<input type="hidden" name="e" value="room4">
								</td>
								<td class="violet_bg pointer best_jomes" name="jomes_session">
									Joint Symposium<p>KSSO-TOS</p>
									<input type="hidden" name="e" value="room5">
								</td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td class="break_time">
									<div class="colons_div">16:50-17:00</div>
								</td>
								<td colspan="7" class="light_gray_bg break_time">Break</td>
							</tr>
							<tr>
								<td>
									<div class="colons_div">17:00-17:40</div>
								</td>
								<td class="dark_pink_bg pointer" name="keynote_lecture_7" colspan="3">
									Keynote Lecture 7
									<p class="bold"></p>
									<p></p>
									<input type="hidden" name="e" value="room1">
								</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td>
									<div class="colons_div">17:40-18:00</div>
								</td>
								<td class="white_yellow_bg pointer" name="closing_ceremony" colspan="3">
									Closing & Award Ceremony
									<input type="hidden" name="e" value="room1">
								</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
						</tbody>
					</table>
				</div>
            </div>
        </div>
        <!--//section1-->

    </div>

</section>

<!-- HUBDNCHYJ : App 일때만 노출되는 팝업 입니다. -->
<?php
	if (!empty($session_app_type) && $session_app_type == 'Y') {
	// mo일때
?>
		<div class="popup hold_pop" style="display:block;"> <!-- -->
			<div class="pop_bg"></div>
			<div class="pop_contents transparent center_t">
				<img src="./img/icons/icon_resize.png" alt="">
				<p class="white_t center_t">Touch on a session to check the details. <br/>Use your fingers to zoom in/out</p>
			</div>
		</div>
<?php
	}
?>
<input type="hidden" name="session_app_type" value="<?= $session_app_type ?>">
<script>
$(document).ready(function() {
	/*$(window).resize(function(){
		if ($(window).width() <= 480) {
			var table_width = 1200 * 0.71;
			var table_height = $(".program_table").height() * 0.71;
			$(".program_table_wrap").css({"height":table_height});

			console.log(table_width);
			// $(".program_table_wrap").css({"width":table_width, "height":table_height});
		} else {
			$(".program_table_wrap").css({"width":"auto", "height":"auto"});
		}
	});
	$(window).trigger("resize");*/

	$(".hold_pop .pop_contents").click(function(){
		$(".hold_pop").hide();
	});

	/* td 클릭 시 페이지 이동 */
	$("td.pointer").click(function() {
        var e = $(this).find("input[name=e]").val();
        var day = $(this).parents("tbody[name=day]").attr("class");
        var target = $(this)
        var this_name = $(this).attr("name");

        table_location(event, target, e, day, this_name);
    });

	/* tab 클릭 시 랜더링 변경 */
	$(".tab_green li, .app_tab li").click(function(){
		var this_index = $(this).index();
		if (!this_index == 1){
			$(".day_tbody").show();
		}else {
			$(".day_tbody").hide();
			$(".day_tbody.day_"+this_index+"").show();
		}

	});


	// Program At a Glance 줌 스크립트

	var height_array = [];
	var tbody_height;
	var table_width = $(".program_table").outerWidth();

	$(".program_table tbody").each(function(){
		tbody_height = $(this).outerHeight();
		height_array.push(tbody_height)

		$(".app_tab.glance li").click(function(){
			var i = $(this).index()-1;
			$(".program_table").css({"width":"auto", "height":"auto"})
			// $(".program_table").css({"width":table_width, "height":height_array[i]})
			$(".program_table td, .program_table th").css({"font-size":"8px", "line-height":"12px"})
			$(".program_table td p").css({"font-size":"6px", "line-height":"10px"})

			// $(".program_table").trigger("touchmove");

			//alert(table_width)
			//alert(table_Height)
			//alert(table_font_size)
			//alert(table_font_size_p)
			console.log(height_array[i]);

		}); 
	});

	//pinch 진행 상태
	let scaling  = false;
	//pinch 초기 거리
	let setDist = 0;

	$(document).on("touchstart", ".program_table", function(event){
		//터치 이벤트의 터치 포인트 수가 2개
		if(event.originalEvent.touches.length  === 2){
			scaling  = true;
		}
	})

	var table_font_size = $(".program_table td").css("font-size");
	var table_font_size_p = $(".program_table td p").css("font-size")
	var table_line_height = $(".program_table td").css("line-height");

	//APP 줌 이벤트
	$(document).on("touchmove", ".program_table", function(event){
		if(scaling){

			//두 점사이 계산
			var dist = Math.hypot(
				event.originalEvent.touches[0].pageX - event.originalEvent .touches[1].pageX,
				event.originalEvent.touches[1].pageY - event.originalEvent.touches[1].pageY
			);

			dist = Math.floor(dist/20);

			if(setDist == 0) setDist = dist;

			fontSize = $(".program_table td").css("font-size");
			fontSizeP = $(".program_table td p").css("font-size")
			imgWidth = $(".program_table")[0].clientWidth;
			imgHeight = $(".program_table")[0].clientHeight;
			// alert(parseInt(fontSize))

			//화면 확대 (이전 거리보다 거리가 멀어질 때)
			if(setDist < dist){
				if (parseInt(fontSize) <= 16) {
					$(this).css("width", 1.1*parseFloat(imgWidth));
					$(this).css("height", 0.8*parseFloat(imgHeight));
					$(this).find("td").css({"font-size": 1.1*parseFloat(fontSize), "line-height": 2+parseFloat(fontSize)+"px"});
					$(this).find("th").css({"font-size": 1.1*parseFloat(fontSize), "line-height": 2+parseFloat(fontSize)+"px"});
					$(this).find("td").find("p").css({"font-size": 1.1*parseFloat(fontSizeP), "line-height": 2+parseFloat(fontSizeP)+"px"});
					setDist = dist;
				}
			} 
			
			//화면 축소 (이전 거리보다 거리가 가까워 질때)
			else if(setDist > dist){
				if (parseInt(fontSize) >= 8)	{
					$(this).css("width", 0.9*parseFloat(imgWidth));
					$(this).css("height", 0.5*parseFloat(imgHeight));
					$(this).find("td").css({"font-size": 0.9*parseFloat(fontSize), "line-height": 2+parseFloat(fontSize)+"px"});
					$(this).find("th").css({"font-size": 0.9*parseFloat(fontSize), "line-height": 2+parseFloat(fontSize)+"px"});
					$(this).find("td").find("p").css({"font-size": 0.9*parseFloat(fontSizeP), "line-height": 2+parseFloat(fontSizeP)+"px"});
					setDist = dist;
				}
			}
		}
	})

});

//[240418] sujeong / 이동 주석
function table_location(event, _this, e, day, this_name) {
	var session_app_type = $("[name=session_app_type]").val();
	if (session_app_type != "" && session_app_type == 'N') {
		//window.location.href = "./program_detail.php?day=" + day + "&e=" + e + "&name=" + this_name;
	} else {
	    //window.location.href = "./app_program_detail.php?day=" + day + "&e=" + e + "&name=" + this_name;
	}
}
</script>

<?php 
   include_once('./include/app_footer.php');
?>