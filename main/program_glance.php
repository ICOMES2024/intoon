<?php include_once('./include/head.php'); ?>
<!-- HUBDNCHYJ : app 일 경우 전용 헤더 app_header 사용필요 -->
<?php include_once('./include/header.php'); ?>

<!-- HUBDNCHYJ : App 일 경우 padding/margin을 조정하는 app_version 클래스가 container에 들어가야 함 -->
<section class="container program_glance">
	<!-- HUBDNCHYJ : App 일 경우 타이틀 영역 입니다. -->
	<!-- <div class="app_title_box"> -->
	<!-- 	<h2 class="app_title">Program</h2> -->
	<!-- 	<ul class="app_menu_tab langth_2"> -->
	<!-- 		<li class="on"><a href="./program_glance.php">Program at a Glance</a></li> -->
	<!-- 		<li><a href="./program_detail.php">Scientific Program</a></li> -->
	<!-- 	</ul> -->
	<!-- </div> -->
    <h1 class="page_title">Program at a Glance</h1>
	<!-- HUBDNCHYJ : App 에서는 이 클래스 사용하시면 됩니다. -->
	<!-- <ul class="app_tab program"> -->
	<!-- 	<li class="row2 on"><a href="javascript:;">All Days</a></li> -->
	<!-- 	<li><a href="javascript:;">Sep.7(Thu)</a></li> -->
	<!-- 	<li><a href="javascript:;">Sep.8(Fri)</a></li> -->
	<!-- 	<li><a href="javascript:;">Sep.9(Sat)</a></li> -->
	<!-- </ul> -->
    <div class="inner">
        <div class="program_wrap section">
            <div class="scroll_table">
                <ul class="tab_green long centerT program_glance">
					<li class="on"><a href="javascript:;">All Days<br/>September 7 (Thu) ~ 9 (Sat)</a></li>
					<li><a href="javascript:;">Sep.7 (Thu)</a></li>
					<li><a href="javascript:;">Sep.8 (Fri)</a></li>
					<li><a href="javascript:;">Sep.9 (Sat)</a></li>
				</ul>
				<!-- HUBDNCHYJ : App 일때 하위 마크업 주석처리 필요 -->
				<div class="rightT mb20">
                    <button onclick="javascript:window.open('./download/2023 ICOMES_Program at a glance_0622.pdf')"
                        class="btn blue_btn nowrap"><img src="./img/icons/icon_download_white.svg" alt="">Program at a Glance Download</a>
                </div>
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
								<th colspan="8" class="font_big day_tbody day_1">Day 1 - 2023.9.7 (Thu)</th>
							</tr>
						</thead>
						<!---------- DAY 1 ---------->
						<tbody name="day" class="day_tbody day_1">
							<tr>
								<td>17:00-18:30</td>
								<td class="purple_bg pointer" name="pre_congress_symposium_1">
									Pre-congress<br />Symposium 1
									<input type="hidden" name="e" value="room1">
								</td>
								<td class="purple_bg pointer" name="pre_congress_symposium_2">
									Pre-congress<br />Symposium 2
									<input type="hidden" name="e" value="room2">
								</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td>18:30-19:00</td>
								<td colspan="2" class="light_gray_bg">Break</td>
								<td rowspan="4" class="yellow_bg pointer" name="welcome_cocktail_party">
									Welcome<br />Cocktail Party
									<input type="hidden" name="e" value="room3">
								</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td>19:00-19:30</td>
								<td class="sky_bg pointer" name="satellite_symposium_1">
									Satellite<br />Symposium 1
									<input type="hidden" name="e" value="room1">
								</td>
								<td class="sky_bg pointer" name="satellite_symposium_3">
									Satellite<br />Symposium 3
									<input type="hidden" name="e" value="room2">
								</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td>19:30-20:00</td>
								<td class="sky_bg pointer" name="satellite_symposium_1">
									Satellite<br />Symposium 2
									<input type="hidden" name="e" value="room1">
								</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td>20:00-21:00</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
						</tbody>
						<!---------- DAY 2 ---------->
						<thead>
							<tr>
								<th colspan="8" class="font_big day_tbody day_2">Day 2 - 2023.9.8 (Fri)</th>
							</tr>
						</thead>
						<tbody name="day" class="day_tbody day_2">
							<tr>
								<td>07:30-08:20</td>
								<td class="sky_bg pointer" name="breakfast_symposium_1">
									Breakfast<br />Symposium 1
									<input type="hidden" name="e" value="room1">
								</td>
								<td class="sky_bg pointer" name="breakfast_symposium_2">
									Breakfast<br />Symposium 2
									<input type="hidden" name="e" value="room2">
								</td>
								<td class="sky_bg pointer" name="breakfast_symposium_3">
									Breakfast<br />Symposium 3
									<input type="hidden" name="e" value="room3">
								</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td>08:20-08:30</td>
								<td colspan="7" class="light_gray_bg">Break</td>
							</tr>
							<tr>
								<td>08:30-09:10</td>
								<td colspan="3" class="pink_bg pointer" name="plenary_lecture_1">
									Plenary Lecture 1 
									<p class="bold">Intermittent Metabolic Switching and Brain Health</p>
									<p>Thiruma V. Arumugam (La Trobe University, Australia)</p>
									<input type="hidden" name="e" value="room1">
								</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td>09:10-09:20</td>
								<td colspan="7" class="light_gray_bg">Break</td>
							</tr>
							<tr>
								<td>09:20-10:50</td>
								<td class="green_bg pointer" name="symposium_1">
									Symposium 1 <p>Obesity and Cancer</p>
									<input type="hidden" name="e" value="room1">
								</td>
								<td class="green_bg pointer" name="symposium_2">
									Symposium 2 <p>Obesity and Neurodegenerative Diseases</p>
									<input type="hidden" name="e" value="room2">
								</td>
								<td class="green_bg pointer" name="symposium_3">
									Symposium 3 <p>Digital Therapeutics</p>
									<input type="hidden" name="e" value="room3">
								</td>
								<td class="green_bg pointer" name="symposium_4">
									Symposium 4 <p>The Myosteatosis: Novel Aspect of Sarcopenia and Obesity</p>
									<input type="hidden" name="e" value="room4">
								</td>
								<td class="sky_bg pointer" name="sponsored_session_1">Sponsored Session 1 
									<p>Journey to the Combination Phentermine plus Topiramate ER from Clinical Trials to Practice</p>
									<input type="hidden" name="e" value="room5">
								</td>
								<td class="purple_bg pointer" name="joint_symposium_easo">
									Joint Symposium EASO
									<input type="hidden" name="e" value="room6">
								</td>
								<td></td>
							</tr>
							<tr>
								<td>10:50-11:00</td>
								<td colspan="7" class="light_gray_bg">Break</td>
							</tr>
							<tr>
								<td>11:00-11:10</td>
								<td colspan="3" class="yellow_bg pointer" name="opening_address">
									Opening Address
									<input type="hidden" name="e" value="room1">
								</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td>11:10-11:50</td>
								<td colspan="3" class="pink_bg pointer" name="keynote_lecture_1">
									Keynote Lecture 1 
									<p class="bold">Adipose Tissue – A Treasure Box for Discoveries</p>
									<p>Matthias Blüher (University of Leipzig, Germany)</p>
									<input type="hidden" name="e" value="room1">
								</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td>11:50-12:00</td>
								<td colspan="7" class="light_gray_bg">Break</td>
							</tr>
							<tr>
								<td>12:00-13:00</td>
								<td class="sky_bg pointer" name="luncheon_symposium_1">
									Luncheon<br />Symposium 1
									<input type="hidden" name="e" value="room1">
								</td>
								<td class="sky_bg pointer" name="luncheon_symposium_2">
									Luncheon<br />Symposium 2
									<input type="hidden" name="e" value="room2">
								</td>
								<td class="sky_bg pointer" name="luncheon_symposium_3">
									Luncheon<br />Symposium 3
									<input type="hidden" name="e" value="room3">
								</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td>13:00-14:00</td>
								<!-- <td colspan="3" class="green_bg" name="poster_exhibition_d2"> -->
								<!-- 	<!-- 	Poster Exhibition -->
								<!-- 	<input type="hidden" name="e" value="room1"> -->
								<!-- </td> -->
								<td></td>
								<td></td>
								<td></td>
								<td class="light_orange_bg pointer" name="oral_presentation_1">
									Oral presentation 1
									<input type="hidden" name="e" value="room4">
								</td>
								<td class="light_orange_bg pointer" name="oral_presentation_2">
									Oral presentation 2
									<input type="hidden" name="e" value="room5">
								</td>
								<!-- <td class="green_bg" name="poster_exhibition_d2_r6"> -->
								<!-- 	<!-- 	Poster Exhibition -->
								<!-- 	<input type="hidden" name="e" value="room6"> -->
								<!-- </td> -->
								<td></td>
								<td class="light_orange_bg pointer" name="guided_poster_presentation_1">
									Guided Poster<br />Presentation 1
									<input type="hidden" name="e" value="room7">
								</td>
							</tr>
							<tr>
								<td>14:00-15:30</td>
								<td class="green_bg pointer" name="symposium_5">
									Symposium 5 <p>Emerging Anti-obesity Drugs: Expectations and Apprehensions</p>
									<input type="hidden" name="e" value="room1">
								</td>
								<td class="green_bg pointer" name="symposium_6">
									Symposium 6 <p>TBD</p>
									<input type="hidden" name="e" value="room2">
								</td>
								<td class="green_bg pointer" name="symposium_7">
									Symposium 7 <p>Metabolic Signaling in Obesity-Related Diseases</p>
									<input type="hidden" name="e" value="room3">
								</td>
								<td class="green_bg pointer" name="symposium_8">
									Symposium 8 <p>TBD</p>
									<input type="hidden" name="e" value="room4">
								</td>
								<td class="sky_bg pointer" name="sponsored_session_2">
									Sponsored Session 2
									<input type="hidden" name="e" value="room5">
								</td>
								<td class="purple_bg pointer" name="joint_symposium_aoaso_1">
									Joint Symposium <br/>KSSO-AOASO
									<input type="hidden" name="e" value="room6">
									</td>
								<td></td>
							</tr>
							<tr>
								<td>15:30-15:40</td>
								<td colspan="7" class="light_gray_bg">Break</td>
							</tr>
							<tr>
								<td>15:40-16:20</td>
								<td colspan="3" class="pink_bg pointer" name="plenary_lecture_2">
									Plenary Lecture 2 
									<p class="bold">Understanding Human Metabolic Dysregulation In Vivo Using Stable Isotope Tracers: More than 50 Years of Experience</p>
									<p>Robert R. Wolfe  <br/>(University of Arkansas for Medical Sciences, USA)</p>
									<input type="hidden" name="e" value="room1">
								</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td>16:20-16:30</td>
								<td colspan="7" class="light_gray_bg">Break</td>
							</tr>
							<tr>
								<td>16:30-18:00</td>
								<td class="green_bg pointer" name="symposium_9">
									Symposium 9 <p>Obesity in Special Conditions</p>
									<input type="hidden" name="e" value="room1">
								</td>
								<td class="green_bg pointer" name="symposium_10">
									Symposium 10 <p>Neuropsychological Aspect of Obesity</p>
									<input type="hidden" name="e" value="room2">
								</td>
								<td class="green_bg pointer" name="symposium_11">
									Symposium 11 <p>Social and Environmental Determinants: Nutritional View of Obesity</p>
									<input type="hidden" name="e" value="room3">
								</td>
								<td class="green_bg pointer" name="symposium_12">
									Symposium 12 <p>Obesity: Transition from Adolescence to Young Adult</p>
									<input type="hidden" name="e" value="room4">
								</td>
								<!--<td class="purple_bg" name="joint_symposium_aoaso_2">Joint Symposium<br/>AOASO 2</td>-->
								<!-- <td class="yellow_bg pointer" name="it_융합_대사증후군_위원회_세션"> -->
								<!-- 	IT Convergence Metabolic Syndrome Committee <span class="red_t">(K)</span> -->
								<!-- 	Introduction of the Weight Management Application of the KSSO -->
								<!-- 	<input type="hidden" name="e" value="room6"> -->
								<!-- </td> -->
								<td class="purple_bg pointer" name="obesity_treatment_guidelines_symposium">
									Obesity Treatment Guidelines Symposium <p>Behind the Scenes: The Journey of Evolution and Revising Obesity Guidelines</p>
									<input type="hidden" name="e" value="room5">
								</td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td>18:00-18:30</td>
								<td colspan="7" class="light_gray_bg">Break</td>
							</tr>
							<tr>
								<td>18:30-21:30</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td class="yellow_bg pointer" name="congress_banquet_ceremony">
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
								<th colspan="8" class="font_big day_tbody day_3">Day 3 - 2023.9.9 (Sat)</th>
							</tr>
						</thead>
						<tbody name="day" class="day_tbody day_3">
							<tr>
								<td>07:30-08:20</td>
								<td class="sky_bg pointer" name="breakfast_symposium_4">
									Breakfast<br />Symposium 4
									<input type="hidden" name="e" value="room1">
								</td>
								<td class="sky_bg pointer" name="breakfast_symposium_5">
									Breakfast<br />Symposium 5
									<input type="hidden" name="e" value="room2">
								</td>
								<td class="sky_bg pointer" name="breakfast_symposium_6">
									Breakfast<br />Symposium 6
									<input type="hidden" name="e" value="room3">
								</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td>08:20-08:30</td>
								<td colspan="7" class="light_gray_bg">Break</td>
							</tr>
							<tr>
								<td>08:30-09:10</td>
								<td class="pink_bg pointer" name="plenary_lecture_3" colspan="3">
									Plenary Lecture 3 
									<p class="bold">The Role of Hunger-promoting Hypothalamic Neurons in Obesity Therapeutics</p>
									<p>Tamas Horvath (Yale University, USA)</p>
									<input type="hidden" name="e" value="room1">
								</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td>09:10-09:20</td>
								<td colspan="7" class="light_gray_bg">Break</td>
							</tr>
							<tr>
								<td>09:20-10:50</td>
								<td class="green_bg pointer" name="symposium_13">
									Symposium 13 <p>Health Consequences of Obesity</p>
									<input type="hidden" name="e" value="room1">
								</td>
								<td class="green_bg pointer" name="symposium_14">
									Symposium 14 <p>Promoting Healthy Muscle and Liver Metabolism</p>
									<input type="hidden" name="e" value="room2">
								</td>
								<td class="green_bg pointer" name="symposium_15">
									Symposium 15 <p>Community-based Nutrition Interventions and Approaches for Vulnerable Groups</p>
									<input type="hidden" name="e" value="room3">
								</td>
								<td class="green_bg pointer" name="symposium_16">
									Symposium 16 <p>International Collaboration</p>
									<input type="hidden" name="e" value="room4">
								</td>
								<td class="sky_bg pointer" name="sponsored_session_3">
									Sponsored Session 3 <p>Is Semaglutide Changing the Paradigm Of Obesity Management?</p>
									<input type="hidden" name="e" value="room5">
								</td>
								<td class="purple_bg pointer" name="joint_symposium_tos">
									Joint Symposium TOS
									<input type="hidden" name="e" value="room6">
								</td>
								<td></td>
							</tr>
							<tr>
								<td>10:50-11:00</td>
								<td colspan="7" class="light_gray_bg">Break</td>
							</tr>
							<tr>
								<td>11:00-11:40</td>
								<td class="pink_bg pointer" name="keynote_lecture_2" colspan="3">
									Keynote Lecture 2
									<p>Jae Myoung Suh (KAIST, Republic of Korea)</p>
									<input type="hidden" name="e" value="room1">
								</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td>11:40-11:50</td>
								<td colspan="7" class="light_gray_bg">Break</td>
							</tr>
							<tr>
								<td>11:50-12:50</td>
								<td class="sky_bg pointer" name="luncheon_symposium_4">
									Luncheon<br />Symposium 4
									<input type="hidden" name="e" value="room1">
								</td>
								<td class="sky_bg pointer" name="luncheon_symposium_5">
									Luncheon<br />Symposium 5
									<input type="hidden" name="e" value="room2">
								</td>
								<td class="sky_bg pointer" name="luncheon_symposium_6">
									Luncheon<br />Symposium 6
									<input type="hidden" name="e" value="room3">
								</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td>12:50-13:50</td>
								<!-- <td colspan="3" class="green_bg" name="poster_exhibition_d3"> -->
								<!-- 	Poster Exhibition -->
								<!-- 	<input type="hidden" name="e" value="room1"> -->
								<!-- </td> -->
								<td></td>
								<td></td>
								<td></td>
								<td class="light_orange_bg pointer" name="oral_presentation_3">
									Oral Presentation 3
									<input type="hidden" name="e" value="room4">
								</td>
								<td class="light_orange_bg pointer" name="oral_presentation_4">
									Oral Presentation 4
									<input type="hidden" name="e" value="room5">
								</td>
								<!-- <td class="green_bg" name="poster_exhibition_d3_r6"> -->
								<!-- 	Poster Exhibition -->
								<!-- 	<input type="hidden" name="e"> -->
								<!-- </td> -->
								<td></td>
								<td class="light_orange_bg pointer" name="guided_poster_presentation_2">
									Guided Poster<br />Presentation 2
									<input type="hidden" name="e" value="room7">
								</td>
							</tr>
							<tr>
								<td>13:50-14:30</td>
								<td class="pink_bg pointer" name="keynote_lecture_3" colspan="3">
									Keynote Lecture 3 
									<p class="bold">Brainstem Circuits that Control Ingestion</p>
									<p>Zachary Knight (University of California, San Francisco, USA)</p>
									<input type="hidden" name="e" value="room1">
								</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<!-- <tr> -->
							<!-- 	<td>14:20-14:30</td> -->
							<!-- 	<td colspan="7" class="light_gray_bg">Break</td> -->
							<!-- </tr> -->
							<!-- <tr> -->
							<!-- 	<td>14:30-15:10</td> -->
							<!-- 	<td class="pink_bg pointer" name="plenary_lecture_4" colspan="3"> -->
							<!-- 		Plenary Lecture 4 -->
							<!-- 		<input type="hidden" name="e" value="room1"> -->
							<!-- 	</td> -->
							<!-- 	<td></td> -->
							<!-- 	<td></td> -->
							<!-- 	<td></td> -->
							<!-- 	<td></td> -->
							<!-- </tr> -->
							<!-- <tr> -->
							<!-- 	<td>15:10-15:20</td> -->
							<!-- 	<td colspan="7" class="light_gray_bg">Break</td> -->
							<!-- </tr> -->
							<tr>
								<td>14:30-15:10</td>
								<!-- <td>15:20-15:50</td> -->
								<td class="pink_bg pointer" name="keynote_lecture_4" colspan="3">
									Keynote Lecture 4
									<p class="bold">National Obesity Strategy in Korea: Past, Present and Future</p>
									<p>Jae-Heon Kang (Sungkyunkwan University, Republic of Korea)</p>
									<input type="hidden" name="e" value="room1">
								</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td>15:10-15:20</td>
								<td colspan="7" class="light_gray_bg">Break</td>
							</tr>
							<tr>
								<td>15:20-16:50</td>
								<td class="green_bg pointer" name="symposium_17">
									Symposium 17 
									<p>The Power of Synergy: Optimizing Anti-Obesity Treatment with Combination Pharmacotherapy</p>
									<input type="hidden" name="e" value="room1">
								</td>
								<td class="green_bg pointer" name="symposium_18">
									Symposium 18 
									<p>Neuroscience</p>
									<input type="hidden" name="e" value="room2">
								</td>
								<td class="green_bg pointer" name="symposium_19">
									Symposium 19 
									<p>Diversity and Challenges of Pediatric Obesity</p>
									<input type="hidden" name="e" value="room3">
								</td>
								<td class="green_bg pointer" name="symposium_20">
									Symposium 20
									<p>Basic Exercise with Obesity</p>
									<input type="hidden" name="e" value="room4">
								</td>
								<td class="sky_bg pointer best_jomes" name="jomes_session">
									Best Article in JOMES
									<input type="hidden" name="e" value="room5">
								</td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td>16:50-17:00</td>
								<td colspan="7" class="light_gray_bg">Break</td>
							</tr>
							<tr>
								<td>17:00-17:40</td>
								<td class="pink_bg pointer" name="plenary_lecture_4" colspan="3">
									Plenary Lecture 4
									<p class="bold">Current and Future in Obesity Management</p>
									<p>John Wilding (Liverpool University, UK)</p>
									<input type="hidden" name="e" value="room1">
								</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td>17:40-18:00</td>
								<td class="yellow_bg pointer" name="closing_ceremony" colspan="3">
									Closing Ceremony
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
<div class="popup hold_pop"> <!-- style="display:block;" -->
	<div class="pop_bg"></div>
	<div class="pop_contents transparent center_t">
		<img src="./img/icons/icon_resize.png" alt="">
		<p class="white_t center_t">Touch on a session to check the details. <br/>Use your fingers to zoom in/out</p>
	</div>
</div>

<script>
$(document).ready(function() {
	/*$("td.pointer").click(function() {
        var e = $(this).find("input[name=e]").val();
        var day = $(this).parents("tbody[name=day]").attr("class");
        var target = $(this)
        var this_name = $(this).attr("name");

        table_location(event, target, e, day, this_name);
    });*/
	$("td.pointer").click(function() {
        var e = $(this).find("input[name=e]").val();
        var day = $(this).parents("tbody[name=day]").attr("class");
        var target = $(this)
        var this_name = $(this).attr("name");

        table_location(event, target, e, day, this_name);
    });
	$(".tab_green li, .app_tab li").click(function(){
		var this_index = $(this).index();
		if (!this_index == 1){
			$(".day_tbody").show();
		}else {
			$(".day_tbody").hide();
			$(".day_tbody.day_"+this_index+"").show();
		}

	});
});

function table_location(event, _this, e, day, this_name) {
    window.location.href = "./program_detail.php?day=" + day + "&e=" + e + "&name=" + this_name;
    // window.location.href = "./app_program_detail.php?day=" + day + "&e=" + e + "&name=" + this_name;
}
</script>

<?php include_once('./include/footer.php'); ?>