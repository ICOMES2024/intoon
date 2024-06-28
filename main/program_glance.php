
<?php 
	include_once('./include/head.php'); 
	// HUBDNCHYJ : app 일 경우 전용 헤더 app_header 사용필요 
	$session_user = $_SESSION['USER'] ?? NULL;
	$session_app_type = (!empty($_SESSION['APP']) ? 'Y' : 'N');


		include_once('./include/header.php');
	

	$add_section_class = (!empty($session_user) && $session_app_type == 'Y') ? 'app_version' : '';
?>

<style>
	section.app_version .inner {
		padding-top:0 !important;
	}
</style>

<!-- HUBDNCHYJ : App 일 경우 padding/margin을 조정하는 app_version 클래스가 container에 들어가야 함 -->
<section class="container program_glance">

		<h1 class="page_title">Program at a Glance</h1>


    <div class="inner">
        <div class="program_wrap section">
            <div class="scroll_table">

				<ul class="tab_green long centerT program_glance">
					<li class="on"><a href="javascript:;">All Days <br/>September 5 (Thu) ~ 7 (Sat)</a></li>
					<li><a href="javascript:;">Sep.5 (Thu)</a></li>
					<li><a href="javascript:;">Sep.6 (Fri)</a></li>
					<li><a href="javascript:;">Sep.7 (Sat)</a></li>
				</ul>

				<div class="rightT mb20">

				<!-- <button class="btn blue_btn nowrap not_yet"><img src="https://image.webeon.net/icomes2024/logo/icon_download_white.svg" alt="">Program at a Glance Download</button> -->
				<!-- [240118] sujeong / not_yet 버튼으로 변경 -->
					<!-- <button onclick="javascript:window.open('./download/2023 ICOMES_Program at a glance_0901.pdf')"
						class="btn blue_btn nowrap"><img src="./img/icons/icon_download_white.svg" alt="">Program at a Glance Download</button> -->
				</div>

				<div class="program_table_wrap">
					<p class="text_r bold mb10">*KST (UTC+9)</p>
					<table class="program_table main-table">
						<colgroup>
							<col class="program_time">
							<col class="program_first_col">
							<col class="program_first_col">
						</colgroup>
						<thead>
							<tr>
								<th class="font_big program_time program_room">Time/Location</th>
								<th class="program_room">Room 1</th>
								<th class="program_room">Room 2</th>
								<th class="program_room">Room 3</th>
								<th class="program_room">Room 4</th>
								<th class="program_room">Room 5</th>
								<th class="program_room">Room 6</th>
								<th class="program_room">Room 7</th>
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
								<td class="skyblue_bg pointer" name="committee_session_1" data-id="3">
									Committee Session 
									<input type="hidden" name="e" value="room3">
								</td>
								<td class="violet_bg pointer" name="joint_symposium_1" data-id="2">
									Joint Symposium<br>KSSO-JKT (Basic)
									<input type="hidden" name="e" value="room2">
								</td>
								<td class="skyblue_bg pointer" name="jomes_session" data-id="1">
									Best Articles in JOMES
									<input type="hidden" name="e" value="room1">
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
								<!-- [240423] sujeong / 학회팀 요청 주석 -->
								<td class="skyblue_bg pointer" name="committee_session_2" data-id="67">
									Committee Session 
									<input type="hidden" name="e" value="room3">
								</td>
                                <td class="violet_bg pointer" name="joint_symposium_2" data-id="5">
									Joint Symposium<br>KSSO-JKT (Clinical)
									<input type="hidden" name="e" value="room2">
								</td>
								<!-- [240423] sujeong / 학회팀 요청 주석 -->
								<td class="violet_bg pointer" name="joint_symposium_3" data-id="68">
									Joint Symposium
									<input type="hidden" name="e" value="room2">
								</td>
                                <!-- <td class="light_gray_bg_2">
									기자간담회
									<input type="hidden" name="e" value="room3">
								</td> -->
								<td class="light_gray_bg"></td>
								<td class="light_gray_bg"></td>
								<td class="light_gray_bg"></td>
								<td class="light_gray_bg"></td>
							</tr>
                            <tr>
								<td rowspan="2">
									<div class="colons_div">18:10-19:10</div>
								</td>
								<td class="dark_sky_bg pointer" name="satellite_symposium_1" data-id="7">
									Satellite<br />Symposium 1
									<input type="hidden" name="e" value="room1">
								</td>
								<td class="dark_sky_bg pointer" name="satellite_symposium_3" data-id="8">
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
								<td class="dark_sky_bg pointer" name="satellite_symposium_2" data-id="9">
									Satellite<br />Symposium 2
									<input type="hidden" name="e" value="room1">
								</td>
								<td class="violet_bg pointer" name="satellite_symposium_4" data-id="69">
									Special Session<br />for Publication
									<input type="hidden" name="e" value="room1">
								</td>
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
								<td class="white_yellow_bg pointer" name="welcome_cocktail_party" data-id="10" style="letter-spacing: -0.8px;"> 
									Textbook Publication Inauguration Ceremony & Welcome Cocktail Party
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
								<td class="light_sky_bg pointer" name="breakfast_symposium_1" data-id="11">
									Breakfast<br />Symposium 1
									<input type="hidden" name="e" value="room1">
								</td>
								<td class="light_sky_bg pointer" name="breakfast_symposium_2" data-id="12">
									Breakfast<br />Symposium 2
									<input type="hidden" name="e" value="room2">
								</td>
								<td class="light_sky_bg pointer" name="breakfast_symposium_3" data-id="13">
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
								<td colspan="3" class="dark_pink_bg pointer" name="keynote_lecture_1" data-id="14">
									Keynote Lecture 1 
									<p class="bold">A Novel Platform to Identify Hypothalamic Targets Regulating Energy Balance and Metabolism</p>
									<p>Joel K. Elmquist</p>
									<p>UT Southwestern Medical Center, USA</p>
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
								<td class="dark_green_bg pointer" name="symposium_1" data-id="15">
									Symposium 1 <p>Precision Medicine for Obesity and Diabetes </p>
									<input type="hidden" name="e" value="room1">
								</td>
								<td class="dark_green_bg pointer" name="symposium_2" data-id="16">
									Symposium 2 <p>Gut, Brain, and Obesity</p>
									<input type="hidden" name="e" value="room2">
								</td>
								<td class="dark_green_bg pointer" name="symposium_3" data-id="17">
									Symposium 3 <p> Possibilities and Prospects of Digital Therapeutics for Metabolic Diseases</p>
									<input type="hidden" name="e" value="room3">
								</td>
								<td class="dark_green_bg pointer" name="symposium_4" data-id="18">
									Symposium 4 <p>International Collaboration</p>
									<input type="hidden" name="e" value="room4">
								</td>
								<td class="dark_sky_bg pointer" name="sponsored_session_1" data-id="19">
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
								<td colspan="3" class="white_yellow_bg pointer" name="opening_address" data-id="20">
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
								<td colspan="3" class="dark_pink_bg pointer" name="keynote_lecture_2" data-id="21">
									Keynote Lecture 2
									<p class="bold">GLP-1 Based Therapy of Obesity</p>
									<p>Michael A. Nauck</p>
									<p>Ruhr-University Bochum, Germany</p>
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
								<td class="light_sky_bg pointer" name="luncheon_symposium_1" data-id="22">
									Luncheon<br />Symposium 1
									<input type="hidden" name="e" value="room1">
								</td>
								<td class="light_sky_bg pointer" name="luncheon_symposium_2" data-id="23">
									Luncheon<br />Symposium 2
									<input type="hidden" name="e" value="room2">
								</td>
								<td class="light_sky_bg pointer" name="luncheon_symposium_3" data-id="24">
									Luncheon<br />Symposium 3
									<input type="hidden" name="e" value="room3">
								</td>
								<td class="light_sky_bg pointer" name="luncheon_symposium_4" data-id="25">
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
								<td class="dark_pink_bg pointer" name="keynote_lecture_8" colspan="3" data-id="70">
									Keynote Lecture
									<!-- <p class="bold">Management of Obesity from Cardiometabolic Perspective</p>
									<p>Ania Jastreboff</p>
									<p>Yale University, USA</p> -->
									<input type="hidden" name="e" value="room1">
								</td>
								<td class="dark_orange_bg pointer" name="oral_presentation_1" data-id="26">
									Oral presentation 1
									<input type="hidden" name="e" value="room4">
								</td>
								<td class="dark_orange_bg pointer" name="oral_presentation_2" data-id="27">
									Oral presentation 2
									<input type="hidden" name="e" value="room5">
								</td>
								<td class="dark_orange_bg pointer" name="guided_poster_presentation_1" data-id="28">
									Guided Poster Presentation 1
									<input type="hidden" name="e" value="room7">
									</td>
								<td></td>
							</tr>
							<tr>
								<td>
									<div class="colons_div">14:00-15:30</div>
								</td>
								<td class="dark_green_bg pointer" name="symposium_5" data-id="29">
									Symposium 5 <p>Current Perspectives on Health Inequity in Obesity</p>
									<input type="hidden" name="e" value="room1">
								</td>
								<td class="dark_green_bg pointer" name="symposium_6" data-id="30">
									Symposium 6 <p>Holistic Approach to Obesity Management: Exploring Exercise, Metabolism, and Muscle Health</p>
									<input type="hidden" name="e" value="room2">
								</td>
								<td class="dark_green_bg pointer" name="symposium_7" data-id="31">
									Symposium 7 <p>Lipid Remodeling and Adipocyte Biology in Metabolic Health and Disease</p>
									<input type="hidden" name="e" value="room3">
								</td>
								<td class="dark_green_bg pointer" name="symposium_8" data-id="32">
									Symposium 8 <p></p>
									<input type="hidden" name="e" value="room4">
								</td>
								<td class="dark_sky_bg pointer" name="sponsored_session_2" data-id="33">
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
								<td colspan="3" class="dark_pink_bg pointer" name="keynote_lecture_3" data-id="34">
									Keynote Lecture 3
									<p class="bold">Management of Youth Type 2 Diabetes: New Pharmacotherapeutic Modalities</p>
									<p>Silva Arslanian</p>
									<p>University of Pittsburgh, USA</p>
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
								<td class="dark_green_bg pointer" name="symposium_9" data-id="35">
									Symposium 9 <p>Obesity and Cardiovascular Health</p>
									<input type="hidden" name="e" value="room1">
								</td>
								<td class="dark_green_bg pointer" name="symposium_10" data-id="36">
									Symposium 10 <p>Obesity and Cancer</p>
									<input type="hidden" name="e" value="room2">
								</td>
								<td class="dark_green_bg pointer" name="symposium_11" data-id="37">
									Symposium 11 <p>Perspectives in Digital Nutrition Care for Obesity </p>
									<input type="hidden" name="e" value="room3">
								</td>
								<td class="dark_green_bg pointer" name="symposium_12" data-id="38">
									Symposium 12 <p>Childhood Obesity is a Chronic Disease Demanding Specific Health Care</p>
									<input type="hidden" name="e" value="room4">
								</td>
								<td class="violet_bg pointer" name="joint_symposium_4" data-id="39">
									Joint Symposium<br>KSSO-EASO
									<input type="hidden" name="e" value="room5">
								</td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td class="break_time">
									<div class="colons_div">18:00-18:05</div>
								</td>
								<td colspan="7" class="light_gray_bg break_time">Break</td>
							</tr>
							<tr>
								<td class="break_time">
									<div class="colons_div">18:05-18:40</div>
								</td>
								<td class="dark_pink_bg pointer" name="easo_presidential" data-id="66" colspan="3">
									EASO Presidential Lecture
									<p>Volkan Yumuk</p>
									<p>Turkish Association for the Study of Obesity, Turkey</p>
									<input type="hidden" name="e" value="room1">
								</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td>
									<div class="colons_div">18:40-</div>
								</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td class="white_yellow_bg " name="congress_banquet_ceremony" data-id="40">
									Congress Banquet 
									<p><span class="red_txt">*</span>Invited Only</p>
									<input type="hidden" name="e" value="room6">
								</td>
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
								<td class="light_sky_bg pointer" name="breakfast_symposium_4" data-id="41">
									Breakfast<br />Symposium 4
									<input type="hidden" name="e" value="room1">
								</td>
								<td class="light_sky_bg pointer" name="breakfast_symposium_5" data-id="42">
									Breakfast<br />Symposium 5
									<input type="hidden" name="e" value="room2">
								</td>
								<td class="light_sky_bg pointer" name="breakfast_symposium_6" data-id="43">
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
								<td class="dark_pink_bg pointer" name="keynote_lecture_4" colspan="3" data-id="44">
									Keynote Lecture 4
									<p class="bold">Cardiometabolic Health: Importance of Lifestyle Vital Signs</p>
									<p>Jean-Pierre Després</p>
									<p>VITAM - Research Centre on Sustainable Health, Canada</p>
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
								<td class="dark_green_bg pointer" name="symposium_13" data-id="45">
									Symposium 13 <p>Obesity Related Comorbidity-Fatty Liver</p>
									<input type="hidden" name="e" value="room1">
								</td>
								<td class="dark_green_bg pointer" name="symposium_14" data-id="46">
									Symposium 14 <p>Understanding Aging Skeletal Muscle and Dynamics</p>
									<input type="hidden" name="e" value="room2">
								</td>
								<td class="dark_green_bg pointer" name="symposium_15" data-id="47">
									Symposium 15 <p>Diet Quality and Weight Regulation</p>
									<input type="hidden" name="e" value="room3">
								</td>
								<td class="dark_green_bg pointer" name="symposium_16" data-id="48">
									Symposium 16 <p>International Collaboration </p>
									<input type="hidden" name="e" value="room4">
								</td>
								<td class="dark_sky_bg pointer" name="sponsored_session_3" data-id="49">
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
								<td class="dark_pink_bg pointer" name="presidential_lecture" colspan="3" data-id="50">
								Presidential Lecture
								<p>Cheol-Young Park</p>
								<p>Sungkyunkwan University, Korea</p>
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
								<td class="light_sky_bg pointer" name="luncheon_symposium_5" data-id="51">
									Luncheon<br />Symposium 5
									<input type="hidden" name="e" value="room1">
								</td>
								<td class="light_sky_bg pointer" name="luncheon_symposium_6" data-id="52">
									Luncheon<br />Symposium 6
									<input type="hidden" name="e" value="room2">
								</td>
								<td class="light_sky_bg pointer" name="luncheon_symposium_7" data-id="53">
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
								<td class="dark_pink_bg pointer" name="ksso_scientific_session" colspan="3" data-id="71">
								KSSO Scientific Session
									<!-- <p class="bold">Diversity in the Definition of Obesity</p>
									<p>Soo Lim</p>
									<p>Seoul National University, Korea</p> -->
									<input type="hidden" name="e" value="room1">
								</td>
								<td class="dark_orange_bg pointer" name="oral_presentation_3" data-id="54">
									Oral Presentation 3
									<input type="hidden" name="e" value="room4">
								</td>
								<td class="dark_orange_bg pointer" name="oral_presentation_4" data-id="55">
									Oral Presentation 4
									<input type="hidden" name="e" value="room5">
								</td>
								<td class="dark_orange_bg pointer" name="guided_poster_presentation_2" data-id="56">
									Guided Poster Presentation 2
									<input type="hidden" name="e" value="room7">
									</td>
								<td></td>
							</tr>
							<tr>
								<td>
									<div class="colons_div">13:50-14:30</div>
								</td>
								<td class="dark_pink_bg pointer" name="keynote_lecture_5" colspan="3" data-id="57">
									Keynote Lecture 5
									<p class="bold">How Muscle Mass and Metabolism Affects Energy Metabolism and Functional Capacity</p>
									<p>William Evans</p>
									<p>University of California, Berkeley, USA</p>
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
								<td class="dark_pink_bg pointer" name="keynote_lecture_6" colspan="3" data-id="58">
									Keynote Lecture 6
									<p class="bold">Human Adipose Tissue Metabolism: What Happens with Obesity</p>
									<p>Michael D. Jensen</p>
									<p>Mayo College of Medicine,USA</p>
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
								<td class="dark_green_bg pointer" name="symposium_17" data-id="59">
									Symposium 17 
									<p>Incretin Therapy from MARS, Bariatric Surgery from VENUS</p>
									<input type="hidden" name="e" value="room1">
								</td>
								<td class="dark_green_bg pointer" name="symposium_18" data-id="60">
									Symposium 18 
									<p>Cracking the Neural Code: Understanding Obesity through the Hypothalamus, Brain Stem, and Vagus Pathways</p>
									<input type="hidden" name="e" value="room2">
								</td>
								<td class="dark_green_bg pointer" name="symposium_19" data-id="61">
									Symposium 19 
									<p>Expanding Horizons in Pediatric Obesity</p>
									<input type="hidden" name="e" value="room3">
								</td>
								<td class="dark_green_bg pointer" name="symposium_20" data-id="62">
									Symposium 20
									<p>Exercise and Cardiometabolic Dysfunction</p>
									<input type="hidden" name="e" value="room4">
								</td>
								<td class="violet_bg pointer best_jomes" name="joint_symposium_5" data-id="63">
									Joint Symposium<br>KSSO-TOS<p>Real Word Experience of anti-obesity medications</p>
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
								<td class="dark_pink_bg pointer" name="keynote_lecture_7" colspan="3" data-id="64">
									Keynote Lecture 7
									<p class="bold">Semaglutide, a Second-Generation Obesity Medication for the Treatment and Prevention of Cardiometabolic Disease</p>
									<p>W. Timothy Garvey</p>
									<p>University of Alabama at Birmingham, USA</p>
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
								<td class="white_yellow_bg pointer" name="closing_ceremony" colspan="3" data-id="65">
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


<!-- program modal -->
<div class="modal_background" onclick="modal_close()" style="display: none;"></div>
<div class="detail_modal" style="display: none;">
    <button class="modal_close" onclick="modal_close()"><img src="./img/icons/icon_x.png" /></button>
	<div class="modal_container">
		<div class="modal_header">
			<h3 class="modal_title title"></h3>
			<div class="modal_sub_header">
				<div>
                    <p class="modal_title_day"></p>
					<p class="modal_title_time"></p>
					<p class="modal_title_room"></p>
				</div>
				<div>
					<!-- <p class="program_modal_chair"></p> -->
					
					<!-- [240607] sujeong / 학회팀 요청 모달 오픈 & 좌장 미확정 주석처리 -->
					<p class="program_modal_chair">Chairperson : </p>
					<p class="program_modal_person"></p>
				</div>
			</div>
            <p class="modal_preview"></p>
		</div>
		<div class="content_container">	
		</div>
	</div>
</div>
<!-- //program modal -->

<!-- HUBDNCHYJ : App 일때만 노출되는 팝업 입니다. -->

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


//[240417] sujeong / 클릭 이벤트 주석 처리 / 모달창 띄울 예정
function table_location(event, _this, e, day, this_name) {
	var session_app_type = $("[name=session_app_type]").val();
	clickProgramTd(event);
	// if (session_app_type != "" && session_app_type == 'N') {
	// 	window.location.href = "./program_detail.php?day=" + day + "&e=" + e + "&name=" + this_name;
	// } else {
	//     window.location.href = "./app_program_detail.php?day=" + day + "&e=" + e + "&name=" + this_name;
	// }
}


    /** program_modal */
    
    function clickProgramTd(e){
            let id = e.target.dataset.id;
            /** td 내부 선택할 경우 */
            if(!id){
                id = e.target.parentElement.dataset.id;
            }
     
    
    $.ajax({
        url: PATH + "ajax/client/ajax_program_detail.php",
        type: "POST",
        data: {
            flag: "modal",
            idx: id
        },
        dataType: "JSON",
        success: function (res) {
            if (res.code == 200) {
                show_modal(res.data) 
            } else {
                return;
            }
        }
    });
        }
   

//모달 보여주기
function show_modal(data) {
    const detailModal = document.querySelector(".detail_modal");
    const background = document.querySelector(".modal_background");
    const contentsWrap =  document.querySelector(".content_container");

    detailModal.style.display = "";
    background.style.display = "";

    contentsWrap.innerHTML = "";
    writeModal(data)
}

//모달 창 닫기
function modal_close() {
    const detailModal = document.querySelector(".detail_modal")
    const background = document.querySelector(".modal_background")
    const contentsWrap =  document.querySelector(".content_container");

    detailModal.style.display = "none";
    background.style.display = "none";
    contentsWrap.innerHTML = "";
}

//모달 안 내용 채우기
function writeModal(data){
    
    const modalTitle = document.querySelector(".modal_title");
    const modalTitleDay = document.querySelector(".modal_title_day");
    const modalTitleTime = document.querySelector(".modal_title_time");
    const modalTitleRoom = document.querySelector(".modal_title_room");
    const modalChairPerson = document.querySelector(".program_modal_person");
    const contentsWrap =  document.querySelector(".content_container");
    const modalPreview = document.querySelector(".modal_preview")

    let title = "";
    let subTitle = "";
    let titleDay = "";
    let titleTime = "";
    let titleRoom = "";
    let chairpersonHtml = "";
    let preview = "";


    data.map((t, i)=>{
   
        const contents = document.createElement("div")
        title = t.title;
        subTitle = t.program_name;
        titleRoom = t.program_place_name;
        if(t.preview !== ""){
            preview = t.preview;
        }
        const startDay = t.start_time?.split(" ")[0];
        const startTime = t.start_time?.split(" ")[1];
        const speakerName = t.speaker?.split("(")[0];
        const speakerOrg = t.speaker?.split("(")[1]?.split(")")[0];

        const [year, month, day] = startDay.split("-");
        const monthName = "September";

        let dayName;
  
        switch (day) {
        case '05':
            dayName = 'Thursday';
            break;
        case '06':
            dayName = 'Friday';
            break;
        case '07':
            dayName = 'Saturday';
            break;
        default:
            dayName = '';
            break;
        }
        const dayNumber = parseInt(day, 10);

        titleDay = `• ${dayName}, ${monthName} ${dayNumber}, ${year}`;
        // titleDay = `• ${startDay?.split("-")[1]}월 ${startDay?.split("-")[2]}일`;
        
        // titleDay = `${startDay?.split("-")[0]}년 ${startDay?.split("-")[1]}월 ${startDay?.split("-")[2]}일`;
        titleTime = "• " + startTime + '~' + t.end_time;
        contents.className = "content";

        //좌장 한 명일 경우
        // if(!t.chairpersons?.includes(",")){
        //     const chairperson = t.chairpersons?.split("(")[0];
        //     const chairperson_org = t.chairpersons?.split("(")[1]?.split(")")[0];

        //     chairpersonHtml = `<span class="bold">${chairperson}</span>(${chairperson_org})`;
        // }
        // //좌장 두 명일 경우
        // else if(t.chairpersons?.includes(",")){
        //     const first_chairperson = t.chairpersons.split("(")[0];
        //     const first_chairperson_org = t.chairpersons.split("(")[1].split(")")[0];

        //     const second_chairperson = t.chairpersons.split("(")[1].split(", ")[1];
        //     const second_chairperson_org = t.chairpersons.split("(")[2].split(")")[0]

        //    chairpersonHtml = `<span class="bold">${first_chairperson}</span>(${first_chairperson_org}),<br class="mb_only"/><span class="bold">${second_chairperson}</span>(${second_chairperson_org})`;
        // }
		if(t.chairpersons){
			chairpersonHtml = `<span class="bold">${t.chairpersons}</span>`;
		}else{
			chairpersonHtml = `<span class="bold">TBD</span>`;
		}

        /**speaker가 있을 경우 */
        if(t.speaker){
             /**speaker가 한 명일 경우 */
            if(t.speaker?.split(',').length <= 3){
                contents.innerHTML =  `
                                        <div class="content_time">${t.contents_start_time} - ${t.contents_end_time}</div>
                                        <div>${t.contents_title}</div>
                                        <div class="content_1 content_person">
                                            <b>${speakerName}</b>
                                            <p>${speakerOrg ? speakerOrg : 'TBD'}</p>
                                        </div>
                                    `
            }
            /**speaker가 여러 명일 경우 */
            else if(t.speaker?.split(',').length > 3){
                /***240222 hyojun수정 심사위원일경우 시간 X***/
                if(t.contents_title =="심사위원")
                {
                    contents.innerHTML =  `
                                        <div class="content_time"></div>
                                        <div>${t.contents_title}</div>
                                        <div class="content_1 content_person">
                                            <p>${t.speaker}</p>
                                        </div>
                                    `
                }
                else
                {
                    contents.innerHTML =  `
                                        <div class="content_time">${t.contents_start_time}-${t.contents_end_time}</div>
                                        <div>${t.contents_title}</div>
                                        <div class="content_1 content_person">
                                            <p>${t.speaker}</p>
                                        </div>
                                    `
                }
            }
        }
         /**speaker가 없을 경우 */
        else{
            contents.innerHTML =  `
                                    <div class="content_time">${t.contents_start_time}-${t.contents_end_time}</div>
                                    <div>${t.contents_title}</div>
                                    <div>
                                        <p> </p>
                                    </div>
                                `
        }
        contentsWrap.append(contents)
    })

    modalTitle.innerText = subTitle;
    // modalSubTitle.innerText = subTitle;
    modalTitleDay.innerText = titleDay;
    modalTitleTime.innerHTML = titleTime;
    modalTitleRoom.innerText = "• "+ titleRoom;

	//[240607] sujeong / 학회팀 요청 모달 오픈 & 좌장 미확정 주석처리
    modalChairPerson.innerHTML = chairpersonHtml;
    modalPreview.innerText = preview;
}

</script>

<?php 

        include_once('./include/footer.php');

?>