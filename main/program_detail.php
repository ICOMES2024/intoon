<?php include_once('./include/head.php'); ?>
<?php include_once('./include/header.php'); ?>



<?php

$type = $_GET['type'];
$e = $_GET['e'];
$day = $_GET['day'];
$e_num = $e[-1];
$d_num = $day[-1];

$name = $_GET['name'];

//echo 'asdasd', $e_num;

//kcode == 116 새로고침

echo '<script type="text/javascript">
				  $(document).ready(function(){
					  //탭 활성화
					  //큰탭
					  $(".tab_green li").removeClass("on");
					  if ("' . $day . '" === "") {
						$(".tab_green li:first-child").addClass("on");
					  }
					  $(".tab_green li:nth-child(' . $d_num . ')").addClass("on");
					  $(".tab_green + .tab_wrap > .tab_cont").removeClass("on");
					  $(".tab_green + .tab_wrap > .tab_cont:nth-child(' . $d_num . ')").addClass("on");
					  //작은탭
					  $(".tab_green + .tab_wrap .tab_cont .tab_li li").removeClass("on");
					  $(".tab_green + .tab_wrap .tab_cont .tab_li li:nth-child(' . $e_num . ')").addClass("on");
					  $(".tab_green + .tab_wrap .tab_cont .tab_cont").removeClass("on");
					  $(".tab_green + .tab_wrap .tab_cont .tab_cont:nth-child(' . $e_num . ')").addClass("on");

					  window.onkeydown = function() {
					  	var kcode = event.keyCode;
						if(kcode == 116) {
							history.replaceState({}, null, location.pathname);
							window.scrollTo({top:0, left:0, behavior:"auto"});
						}
					  }

					  //스크롤 위치 & 액션
					  $(".program_detail_ul li").each(function(){
						if("' . $name . '" === $(this).attr("name")) {
							var this_top = $(this).offset().top;
							$("html, body").animate({scrollTop: this_top - 400}, 1000);
							console.log("scrollTop: ", this_top - 150)
						}
					  });

				  });
		</script>';


?>



<section class="container program_detail">
    <h1 class="page_title">Scientific Program</h1>
    <div class="inner">
        <ul class="tab_green long centerT detail_program">
            <li id="tab1" class="on"><a href="javascript:;">Sep.7(Thu)
                </a></li>
            <li id="tab2"><a href="javascript:;">Sep.8(Fri)
                </a></li>
            <li id="tab3"><a href="javascript:;">Sep.9(Sat)
                </a></li>
        </ul>
        <div class="tab_wrap">
            <div class="tab_cont on">
                <!-- <img class="coming" src="./img/coming.png" /> -->
                <ul class="tab_li">
                    <li id="tab1" class="on"><a href="javascript:;">Room1</a></li>
                    <li id="tab2"><a href="javascript:;">Room2</a></li>
                    <li id="tab3"><a href="javascript:;">Room3</a></li>
					<!--
                    <li id="tab3"><a href="javascript:;">Room4</a></li>
                    <li id="tab3"><a href="javascript:;">Room5</a></li>
                    <li id="tab3"><a href="javascript:;">Room6</a></li>
                    <li id="tab3"><a href="javascript:;">Room7</a></li>
					-->
                </ul>
                <div class="tab_wrap">
                    <div class="tab_cont on">
                        <ul class="program_detail_ul">
                            <li name="pre_congress_symposium_1">
								<!--
                                <div class="clearfix2 caption">
                                    <span>Sep.7(Thu)</span>
                                    <span>Room1(3F)</span>
                                </div> -->
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="purple_bg">
                                                <td>17:00-18:30</td>
                                                <td>
                                                    <p class="font_20 bold">Pre-congress Symposium 1</p>
                                                    <!-- <p><span class="bold">Chairperson : Young Kil Choi</span> (Kyung Hee University, Korea)</p> -->
													<!-- [↓] 확정 시 까지 버튼 숨김 -->
													<!-- <button class="btn gray2_btn program_detail_btn">Preview </button> -->
                                                </td>
                                            </tr>
											<tr>
												<td colspan="2" class="program_detail_td">
													will be updated.
												</td>
											</tr>
											<!-- <tr>
												<td colspan="2">
													<span class="bold">Chairperson</span> : Tae sun park (Jeonbuk National University, Korea), Jee-Hyun Kang (Konyang University, Korea)
												</td>
											</tr> -->
                                            <tr>
                                                <td colspan="2">
                                                    <div>
                                                        <table class="c_table detail_table padding_0">
                                                            <colgroup>
                                                                <col class="col_date">
                                                                <col>
                                                            </colgroup>
                                                            <tbody>
                                                                <tr>
                                                                    <td>17:00-17:20</td>
                                                                    <td class="bold">
                                                                        <!-- Effectiveness of Information and Communications Technology-based Interventions for Obesity and Metabolic Syndrome -->
                                                                    </td>
                                                                    <td>
                                                                        <!-- <p class="bold">Sang Youl Rhee</p>
                                                                        																		(Kyung Hee University, Korea) -->
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>17:20-17:40</td>
                                                                    <td class="bold">
                                                                        <!-- Female Obesity -->
                                                                    </td>
                                                                    <td>
                                                                        <!-- <p class="bold">Yoon Jeong Cho</p>
                                                                        																		(Daegu Catholic University, Korea) -->
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>17:40-18:00</td>
                                                                    <td class="bold">
                                                                        <!-- Obesity and Healthy Life Expectancy -->
                                                                    </td>
                                                                    <td>
                                                                        <!-- <p class="bold">Ye Seul Yang</p>
                                                                        																		(The Catholic University of Korea, Korea) -->
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <!-- <td rowspan="3">18:00-18:30</td> -->
                                                                    <td>18:00-18:30</td>
                                                                    <!-- <td rowspan="3" class="bold"> -->
                                                                    <td class="bold">
                                                                        Panel Discussion
                                                                    </td>
                                                                    <td>
                                                                        <!-- <p class="bold">Suk Chon</p>
                                                                        																		(Kyung Hee University, Korea) -->
                                                                    </td>
                                                                </tr>
                                                                <!-- <tr>
                                                                    <td>
                                                                        <p class="bold">Beom-Taek Kim</p>
                                                                																		(Ajou University, Korea)
                                                                    </td>
                                                                </tr> -->
																<!-- <tr>
																                                                                    <td>
																                                                                        <p class="bold">Ji Hi Haam</p>
																		(CHA University, Korea)
																                                                                    </td>
																                                                                </tr> -->
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
							<li name="break" class="border_bottom_70">
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="light_gray_bg">
                                                <td>18:30-19:00</td>
                                                <td>
                                                    <p class="font_20 bold">Break</p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                            <li name="satellite_symposium_1">
								<!--
                                <div class="clearfix2 caption">
                                    <span>Sep.7(Thu)</span>
                                    <span>Room1(3F)</span>
                                </div>
								-->
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="sky_bg">
                                                <td>19:00-19:30</td>
                                                <td>
                                                    <p class="font_20 bold">Satellite Symposium 1</p>
                                                    <!-- <p><span class="bold">Chairperson : Seung Joon Oh </span>(Kyung Hee University, Korea)</p> -->
													<!-- [↓] 확정 시 까지 버튼 숨김 -->
													<!-- <button class="btn gray2_btn program_detail_btn">Preview </button> -->
                                                </td>
                                            </tr>
											<tr>
												<td colspan="2" class="program_detail_td">
													will be updated.
												</td>
											</tr>
                                            <tr>
                                                <td colspan="2">
                                                    <div>
                                                        <table class="c_table detail_table padding_0">
                                                            <colgroup>
                                                                <col class="col_date">
                                                                <col>
                                                            </colgroup>
                                                            <tbody>
                                                                <tr>
                                                                    <td>19:00-19:30</td>
                                                                    <td class="bold">
                                                                        TBD
                                                                    </td>
                                                                    <td></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                            <li name="satellite_symposium_2">
								<!--
                                <div class="clearfix2 caption">
                                    <span>Sep.7(Thu)</span>
                                    <span>Room1(3F)</span>
                                </div>
								-->
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="sky_bg">
                                                <td>19:30-20:00</td>
                                                <td>
                                                    <p class="font_20 bold">Satellite Symposium 2</p>
                                                    <!-- <p><span class="bold">Chairperson : Seung Joon Oh </span>(Kyung Hee University, Korea)</p> -->
													<!-- [↓] 확정 시 까지 버튼 숨김 -->
													<!-- <button class="btn gray2_btn program_detail_btn">Preview </button> -->
                                                </td>
                                            </tr>
											<tr>
												<td colspan="2" class="program_detail_td">
													will be updated.
												</td>
											</tr>
                                            <tr>
                                                <td colspan="2">
                                                    <div>
                                                        <table class="c_table detail_table padding_0">
                                                            <colgroup>
                                                                <col class="col_date">
                                                                <col>
                                                            </colgroup>
                                                            <tbody>
                                                                <tr>
                                                                    <td>19:30-20:00</td>
                                                                    <td class="bold">TBD</td>
                                                                    <td></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="tab_cont">
                        <ul class="program_detail_ul">
                            <li name="pre_congress_symposium_2">
								<!--
                                <div class="clearfix2 caption">
                                    <span>Sep.7(Thu)</span>
                                    <span>Room2(3F)</span>
                                </div> 
								-->
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="purple_bg">
                                                <td>17:00-18:30</td>
                                                <td>
                                                    <p class="font_20 bold">Pre-congress Symposium 2</p>
                                                   <!--  <p>
                                                        <span class="bold">Chairperson : Tae Sun Park</span> (Jeonbuk
                                                        National University, Korea) /
                                                        <span class="bold">Jee-Hyun Kang</span> (Konyang University,
                                                        Korea)
                                                    </p> -->
													<!-- [↓] 확정 시 까지 버튼 숨김 -->
													<!-- <button class="btn gray2_btn program_detail_btn">Preview </button> -->
                                                </td>
                                            </tr>
											<tr>
												<td colspan="2" class="program_detail_td">
													will be updated.
												</td>
											</tr>
                                            <tr>
                                                <td colspan="2">
                                                    <div>
                                                        <table class="c_table detail_table padding_0">
                                                            <colgroup>
                                                                <col class="col_date">
                                                                <col>
                                                            </colgroup>
                                                            <tbody>
                                                                <tr>
                                                                    <td>17:00-17:20</td>
                                                                    <td class="bold">
                                                                        <!-- Effectiveness of Information and Communications
                                                                        Technology-based Interventions for Obesity and
                                                                        Metabolic Syndrome -->
                                                                    </td>
                                                                    <td>
                                                                        <!-- <p class="bold">Sang Youl Rhee</p>(Kyung Hee
                                                                        University, Korea) -->
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>17:20-17:40</td>
                                                                    <td class="bold">
                                                                        <!-- Female Obesity -->
                                                                    </td>
                                                                    <td>
                                                                        <!-- <p class="bold">Yoon Jeong Cho</p>(Daegu
                                                                        Catholic University, Korea) -->
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>17:40-18:00</td>
                                                                    <td class="bold">
                                                                        <!-- Obesity and Healthy Life Expectancy -->
                                                                    </td>
                                                                    <td>
                                                                        <!-- <p class="bold">Ye Seul Yang</p>(The Catholic
                                                                        University of Korea, Korea) -->
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <!-- <td rowspan="3">18:00-18:30</td> -->
                                                                    <td>18:00-18:30</td>
                                                                    <!-- <td rowspan="3" class="bold"> -->
                                                                    <td class="bold">
                                                                        Panel Discussion
                                                                    </td>
                                                                    <td>
                                                                        <!-- <p class="bold">Suk Chon</p>(Kyung Hee
                                                                        University, Korea) -->
                                                                    </td>
                                                                </tr>
                                                                <!-- <tr>
                                                                    <td>
                                                                        <p class="bold">Beom-Taek Kim</p>(Ajou
                                                                        University, Korea)
                                                                    </td>
                                                                </tr> -->
                                                                <!-- <tr>
                                                                    <td>
                                                                        <p class="bold">Ji Hi Haam</p>(CHA University,
                                                                        Korea)
                                                                    </td>
                                                                </tr> -->
                                                                <!-- <tr>
                                                                    <td>18:30-19:00(30”)</td>
                                                                    <td class="bold" colspan="2">
                                                                        Break
                                                                    </td>
                                                                </tr> -->
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
							<li name="break" class="border_bottom_70">
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="light_gray_bg">
                                                <td>18:30-19:00</td>
                                                <td>
                                                    <p class="font_20 bold">Break</p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                            <li name="satellite_symposium_3">
								<!--
                                <div class="clearfix2 caption">
                                    <span>Sep.7(Thu)</span>
                                    <span>Room2(3F)</span>
                                </div>
								-->
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="sky_bg">
                                                <td>19:00-19:30</td>
                                                <td>
                                                    <p class="font_20 bold">Satellite Symposium 3</p>
                                                    <!-- <p><span class="bold">Chairperson : Minsu Park</span> (Seoul ND
                                                        Clinic, Korea)</p> -->
													<!-- [↓] 확정 시 까지 버튼 숨김 -->
													<!-- <button class="btn gray2_btn program_detail_btn">Preview </button> -->
                                                </td>
                                            </tr>
											<tr>
												<td colspan="2" class="program_detail_td">
													will be updated.
												</td>
											</tr>
                                            <tr>
                                                <td colspan="2">
                                                    <div>
                                                        <table class="c_table detail_table padding_0">
                                                            <colgroup>
                                                                <col class="col_date">
                                                                <col>
                                                            </colgroup>
                                                            <tbody>
                                                                <tr>
                                                                    <td>19:00-19:30</td>
                                                                    <td class="bold">TBD</td>
                                                                    <td></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="tab_cont">
                        <ul class="program_detail_ul">
                            <li name="welcome_cocktail_party">
								<!--
                                <div class="clearfix2 caption">
                                    <span>Sep.7(Thu)</span>
                                    <span>Room3(3F)</span>
                                </div>
								-->
                                <div class="table_wrap detail_table_common x_scroll border_bottom_70">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="yellow_bg">
                                                <td>18:30-21:00</td>
                                                <td>
                                                    <p class="font_20 bold mb_0">Welcome Cocktail Party</p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="tab_cont">
                <ul class="tab_li">
                    <li id="tab1" class="on"><a href="javascript:;">Room1</a></li>
                    <li id="tab2"><a href="javascript:;">Room2</a></li>
                    <li id="tab3"><a href="javascript:;">Room3</a></li>
                    <li id="tab3"><a href="javascript:;">Room4</a></li>
                    <li id="tab3"><a href="javascript:;">Room5</a></li>
                    <li id="tab3"><a href="javascript:;">Room6</a></li>
                    <li id="tab3"><a href="javascript:;">Room7</a></li>
                </ul>
                <div class="tab_wrap">
                    <div class="tab_cont on">
                        <ul class="program_detail_ul">
                            <li name="breakfast_symposium_1">
								<!--
                                <div class="clearfix2 caption">
                                    <span>Sep.8(Fri)</span>
                                    <span>Room1(3F)</span>
                                </div>
								-->
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="sky_bg">
                                                <td>07:30-08:20</td>
                                                <td>
                                                    <p class="font_20 bold">Breakfast Symposium 1</p>
                                                   <!--  <p><span class="bold">Chairperson : Won Jun Kim</span> (University
                                                        of Ulsan, Korea)</p> -->
													<!-- [↓] 확정 시 까지 버튼 숨김 -->
													<!-- <button class="btn gray2_btn program_detail_btn">Preview </button> -->
                                                </td>
                                            </tr>
											<tr>
												<td colspan="2" class="program_detail_td">
													will be updated.
												</td>
											</tr>
                                            <tr>
                                                <td colspan="2">
                                                    <div>
                                                        <table class="c_table detail_table padding_0">
                                                            <colgroup>
                                                                <col class="col_date">
                                                                <col>
                                                            </colgroup>
                                                            <tbody>
                                                                <tr>
                                                                    <td>07:30-08:20</td>
                                                                    <td class="bold">
                                                                        <!-- Perspective in T2DM Patients with NAFLD:
                                                                        Pioglitazone -->
                                                                    </td>
                                                                    <td>
                                                                        <!-- <p class="bold">Yeon Kyung Choi</p>(Kyungpook
                                                                        National University, Korea) -->
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
							<li name="break" class="border_bottom_70">
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="light_gray_bg">
                                                <td>08:20-08:30</td>
                                                <td>
                                                    <p class="font_20 bold">Break</p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                            <li name="plenary_lecture_1">
								<!--
                                <div class="clearfix2 caption">
                                    <span>Sep.8(Fri)</span>
                                    <span>Room1(3F)</span>
                                </div>
								-->
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="pink_bg">
                                                <td>08:30-09:10</td>
                                                <td>
                                                    <p class="font_20 bold">Plenary Lecture 1</p>
                                                    <!-- <p><span class="bold">Chairperson : Youngkil Choi</span> (Kyung Hee University, Korea)</p> -->
													<!-- <button class="btn gray2_btn program_detail_btn">Preview </button> -->
                                                </td>
                                            </tr>
											<tr>
												<td colspan="2" class="program_detail_td">
													Professor Thiruma V. Arumugam, a distinguished researcher in the fields of physiology and pharmacology at La Trobe University, Australia, is pushing the boundaries of neuroscience and metabolism. In his upcoming lecture, he will discuss how his work on intermittent metabolic switching has enhanced our comprehension of its effect on brain health, paving the way for potential therapeutic interventions.<br>
													His recent publication in Theranostics, titled "Time-restricted feeding modulates the DNA methylation landscape, attenuates hallmark neuropathology and cognitive impairment in a mouse model of vascular dementia," has presented novel insights into the therapeutic potential of intermittent metabolic switching, offering promising strategies for managing and potentially reversing cognitive impairment in dementia.<br>
													Further expanding our understanding, Professor Arumugam's article in Cell Metabolism, "Hallmarks of Brain Aging: Adaptive and Pathological Modification by Metabolic States," continues to revolutionize our perspective on the role of metabolism in brain aging.
												</td>
											</tr>
                                            <tr>
                                                <td colspan="2" class="on">
                                                    <div>
                                                        <table class="c_table detail_table padding_0">
                                                            <colgroup>
                                                                <col class="col_date">
                                                                <col>
                                                            </colgroup>
                                                            <tbody>
                                                                <tr>
                                                                    <td>08:30-09:00</td>
                                                                    <td class="bold">
                                                                        Intermittent Metabolic Switching and Brain Health
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Thiruma V. Arumugam</p>(La Trobe University, Australia)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>09:00-09:10</td>
                                                                    <td class="bold">Q&A</td>
                                                                    <td class="text_r"></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
							<li name="break" class="border_bottom_70">
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="light_gray_bg">
                                                <td>09:10-09:20</td>
                                                <td>
                                                    <p class="font_20 bold">Break</p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                            <li name="symposium_1">
								<!--
                                <div class="clearfix2 caption">
                                    <span>Sep.8(Fri)</span>
                                    <span>Room1(3F)</span>
                                </div>
								-->
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="green_bg">
                                                <td>09:20-10:50</td>
                                                <td>
                                                    <p class="font_20 bold">Symposium 1 : Obesity and Cancer</p>
                                                    <!-- <p>
                                                        <span class="bold">Chairperson : Dooman Kim</span> (Hallym
                                                        University, Korea) /
                                                        <span class="bold">Kyung-Soo Kim</span> (The Catholic University
                                                        of Korea, Korea)
                                                    </p> -->
													<!-- [↓] 확정 시 까지 버튼 숨김 -->
													<!-- <button class="btn gray2_btn program_detail_btn">Preview </button> -->
                                                </td>
                                            </tr>
											<tr>
												<td colspan="2" class="program_detail_td">
													will be updated.
												</td>
											</tr>
                                            <tr>
                                                <td colspan="2" class="on">
                                                    <div>
                                                        <table class="c_table detail_table padding_0">
                                                            <colgroup>
                                                                <col class="col_date">
                                                                <col>
                                                            </colgroup>
                                                            <tbody>
                                                                <tr>
                                                                    <td>09:20-09:45</td>
                                                                    <td class="bold">
                                                                        Obesity and the Risk of Cancer
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Yun Kyung Cho</p>(University of Ulsan, Republic of Korea)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>09:45-10:10</td>
                                                                    <td class="bold">
                                                                        Dynamic Regulation of Mitochondrial Metabolism in Metabolic Disease
                                                                    </td>
                                                                    <td class="text_r">
																		<p class="bold">Haejin Yoon</p>(UNIST, Republic of Korea)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>10:10-10:35</td>
                                                                    <td class="bold">
                                                                        Obesity Care in Cancer Survivors
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Annie Anderson</p>(University of Dundee, UK)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>10:35-10:50</td>
                                                                    <td class="bold">
                                                                        Panel Discussion
                                                                    </td>
                                                                    <td>
                                                                        <!-- <p class="bold">Hae-Jin Ko</p>(Kyungpook
                                                                        National University, Korea) -->
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
							<li name="break" class="border_bottom_70">
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="light_gray_bg">
                                                <td>10:50-11:00</td>
                                                <td>
                                                    <p class="font_20 bold">Break</p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                            <li name="opening_address">
								<!--
                                <div class="clearfix2 caption">
                                    <span>Sep.8(Fri)</span>
                                    <span>Room1(3F)</span>
                                </div>
								-->
                                <div class="table_wrap detail_table_common x_scroll border_bottom_70">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="yellow_bg">
                                                <td>11:00-11:10</td>
                                                <td>
                                                    <p class="font_20 bold mb0">Opening Address</p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                            <li name="keynote_lecture_1">
								<!--
                                <div class="clearfix2 caption">
                                    <span>Sep.8(Fri)</span>
                                    <span>Room1(3F)</span>
                                </div>
								-->
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="pink_bg">
                                                <td>11:10-11:50</td>
                                                <td>
                                                    <p class="font_20 bold">Keynote Lecture 1</p>
                                                    <!-- <p><span class="bold">Chairperson : Chang Beom Lee</span> (Hanyang University, Korea)</p> -->
													<!-- [↓] 확정 시 까지 버튼 숨김 -->
													<!-- <button class="btn gray2_btn program_detail_btn">Preview </button> -->
                                                </td>
                                            </tr>
											<tr>
												<td colspan="2" class="program_detail_td">
													will be updated.
												</td>
											</tr>
                                            <tr>
                                                <td colspan="2" class="on">
                                                    <div>
                                                        <table class="c_table detail_table padding_0">
                                                            <colgroup>
                                                                <col class="col_date">
                                                                <col>
                                                            </colgroup>
                                                            <tbody>
                                                                <tr>
                                                                    <td>11:10-11:40</td>
                                                                    <td class="bold">
                                                                        Adipose Tissue – A Treasure Box for Discoveries
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Matthias Blüher</p>
                                                                        (University of Leipzig, Germany)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>11:40-11:50</td>
                                                                    <td class="bold">Q&A</td>
                                                                    <td class="text_r"></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
							<li name="break" class="border_bottom_70">
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="light_gray_bg">
                                                <td>11:50-12:00</td>
                                                <td>
                                                    <p class="font_20 bold">Break</p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                            <li name="luncheon_symposium_1">
								<!--
                                <div class="clearfix2 caption">
                                    <span>Sep.8(Fri)</span>
                                    <span>Room1(3F)</span>
                                </div>
								-->
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="sky_bg">
                                                <td>12:00-13:00</td>
                                                <td>
                                                    <p class="font_20 bold">Luncheon Symposium 1</p>
                                                    <!-- <p><span class="bold">Chairperson : Hyung Joon Yoo</span> (CM
                                                        Hospital, Korea)</p> -->
													<!-- [↓] 확정 시 까지 버튼 숨김 -->
													<!-- <button class="btn gray2_btn program_detail_btn">Preview </button> -->
                                                </td>
                                            </tr>
											<tr>
												<td colspan="2" class="program_detail_td">
													will be updated.
												</td>
											</tr>
                                            <tr>
                                                <td colspan="2" class="on">
                                                    <div>
                                                        <table class="c_table detail_table padding_0">
                                                            <colgroup>
                                                                <col class="col_date">
                                                                <col>
                                                            </colgroup>
                                                            <tbody>
                                                                <tr>
                                                                    <td>12:00-13:00</td>
                                                                    <td class="bold">
                                                                        <!-- New Insight on GLP-1 RAs in Managing Obesity -->TBD
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Eun Young Lee</p>(The Catholic University of Korea, Republic of Korea)
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
							<li name="break" class="border_bottom_70">
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="light_gray_bg">
                                                <td>13:00-14:00</td>
                                                <td>
                                                    <p class="font_20 bold">Break</p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                            <!-- <li name="poster_exhibition_d2">
                                <div class="clearfix2 caption">
                                    <span>Sep.8(Fri)</span>
                                </div>
                                <div class="table_wrap detail_table_common x_scroll border_bottom_70">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="green_bg">
                                                <td>13:00-14:00</td>
                                                <td>
                                                    <p class="font_20 bold mb0">Poster Exhibition</p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li> -->
                            <li name="symposium_5">
								<!--
                                <div class="clearfix2 caption">
                                    <span>Sep.8(Fri)</span>
                                    <span>Room1(3F)</span>
                                </div>
								-->
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="green_bg">
                                                <td>14:00-15:30</td>
                                                <td>
                                                    <p class="font_20 bold">Symposium 5 : Emerging Anti-obesity Drugs: Expectations and Apprehensions</p>
                                                    <!-- <p>
                                                    	<span class="bold">Chairperson : Jang Won Son</span> (The
                                                        Catholic University of Korea, Korea) /
                                                        <span class="bold">Yang Hyun Kim</span> (Korea University,
                                                        Korea) 
                                                    </p> -->
													<!-- [↓] 확정 시 까지 버튼 숨김 -->
													<!-- <button class="btn gray2_btn program_detail_btn">Preview </button> -->
                                                </td>
                                            </tr>
											<tr>
												<td colspan="2" class="program_detail_td">
													will be updated.
												</td>
											</tr>
                                            <tr>
                                                <td colspan="2" class="on">
                                                    <div>
                                                        <table class="c_table detail_table padding_0">
                                                            <colgroup>
                                                                <col class="col_date">
                                                                <col>
                                                            </colgroup>
                                                            <tbody>
                                                                <tr>
                                                                    <td>14:00-14:25</td>
                                                                    <td class="bold">
																		Step Up Your Weight Management with Semaglutide
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Bom Taeck Kim</p>(Ajou University, Republic of Korea)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>14:25-14:50</td>
                                                                    <td class="bold">
																		<!-- Safety and Abuse of Antiobesity Drugs -->TBD
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Ju Young Shin</p>
																		(Sungkyunkwan University, Republic of Korea)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>14:50-15:15</td>
                                                                    <td class="bold">
                                                                        The Metabolic Effects of Tirzepatide, especially in East-Asian Patients from the SURPASS Program
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Robert J. Heine</p>(Eli Lilly, USA)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <!-- <td rowspan="2">15:00-15:30</td> -->
                                                                    <td>15:15-15:30</td>
                                                                    <td class="bold">
																		Panel Discussion 
                                                                    </td>
                                                                    <td>
                                                                        <!-- <p class="bold">Kyung-Hee Park</p>(Hallym
                                                                        University, Korea) -->
                                                                    </td>
                                                                </tr>
                                                                <!-- <tr>
                                                                    <td>
                                                                        <p class="bold">Jae-Han Jeon</p>(Kyungpook
                                                                        National University, Korea)
                                                                    </td>
                                                                </tr> -->
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
							<li name="break" class="border_bottom_70">
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="light_gray_bg">
                                                <td>15:30-15:40</td>
                                                <td>
                                                    <p class="font_20 bold">Break</p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                            <li name="plenary_lecture_2">
								<!--
                                <div class="clearfix2 caption">
                                    <span>Sep.8(Fri)</span>
                                    <span>Room1(3F)</span>
                                </div>
								-->
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="pink_bg">
                                                <td>15:40-16:20</td>
                                                <td>
                                                    <p class="font_20 bold">Plenary Lecture 2</p>
                                                    <!-- <p><span class="bold">Chairperson : Soo Lim</span> (Seoul National University, Korea)</p> -->
													<!-- [↓] 확정 시 까지 버튼 숨김 -->
													<!-- <button class="btn gray2_btn program_detail_btn">Preview </button> -->
                                                </td>
                                            </tr>
											<tr>
												<td colspan="2" class="program_detail_td">
													will be updated.
												</td>
											</tr>
                                            <tr>
                                                <td colspan="2" class="on">
                                                    <div>
                                                        <table class="c_table detail_table padding_0">
                                                            <colgroup>
                                                                <col class="col_date">
                                                                <col>
                                                            </colgroup>
                                                            <tbody>
                                                                <tr>
                                                                    <td>15:40-16:10</td>
                                                                    <td class="bold">
                                                                        Understanding Human Metabolic Dysregulation In Vivo Using Stable Isotope Tracers: More than 50 Years of Experience
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Robert R. Wolfe</p>(University of Arkansas for Medical Sciences, USA)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>16:10-16:20</td>
                                                                    <td class="bold">Q&A</td>
                                                                    <td class="text_r"></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
							<li name="break" class="border_bottom_70">
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="light_gray_bg">
                                                <td>16:20-16:30</td>
                                                <td>
                                                    <p class="font_20 bold">Break</p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                            <li name="symposium_9">
								<!--
                                <div class="clearfix2 caption">
                                    <span>Sep.8(Fri)</span>
                                    <span>Room1(3F)</span>
                                </div>
								-->
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="green_bg">
                                                <td>16:30-18:00</td>
                                                <td>
                                                    <p class="font_20 bold">Symposium 9 : Obesity in Special Conditions</p>
                                                    <!-- <p>
                                                        <span class="bold">Chairperson : Young-Sung Suh</span> (Keimyung
                                                        University, Korea) /
                                                        <span class="bold">Kyung-Hee Park</span> (Hallym University,
                                                        Korea)
                                                    </p> -->
													<!-- [↓] 확정 시 까지 버튼 숨김 -->
													<!-- <button class="btn gray2_btn program_detail_btn">Preview </button> -->
                                                </td>
                                            </tr>
											<tr>
												<td colspan="2" class="program_detail_td">
													will be updated.
												</td>
											</tr>
                                            <tr>
                                                <td colspan="2" class="on">
                                                    <div>
                                                        <table class="c_table detail_table padding_0">
                                                            <colgroup>
                                                                <col class="col_date">
                                                                <col>
                                                            </colgroup>
                                                            <tbody>
                                                                <tr>
                                                                    <td>16:30-16:55</td>
                                                                    <td class="bold">
                                                                        <!-- Treatment of Adolescent Obesity: New Therapeutic
                                                                        Options -->
																		Diabesity: From Disease Mechanism to Clinical Management
                                                                    </td>
                                                                    <td class="text_r">
																		<p class="bold">Dicky L. Tahapary</p>(Cardiovascular and Research Centre-IMERI(Indonesia Medical Education and Research Institute), Indonesia)
                                                                        <!-- <p class="bold">Nick Finer</p>(University
                                                                        College London, UK) -->
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>16:55-17:20</td>
                                                                    <td class="bold">
                                                                        <!-- The Truth about Menopause and Weight Gain: How
                                                                        to Manage Obesity in Perimenopausal Women -->
																		Sarcopenia and Obesity
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <!-- <p class="bold">Jee-Hyun Kang</p>(Konyang
                                                                        University, Korea) -->
																		<p class="bold">Wen-Yuan Lin</p>(China Medical University and Hospital, Taiwan)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>17:20-17:45</td>
                                                                    <td class="bold">
                                                                        <!-- Obesity in Older Adults: Sarcopenia and Low
                                                                        Muscle Mass -->
																		TBD
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Tae Nyun Kim</p>(Inje University, Republic of Korea)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <!-- <td rowspan="2">17:30-18:00</td> -->
                                                                    <td>17:45-18:00</td>
                                                                    <!-- <td rowspan="2" class="bold">Panel Discussion</td> -->
                                                                    <td class="bold">Panel Discussion</td>
                                                                    <td>
                                                                        <!-- <p class="bold">Bumjo Oh</p>(Seoul National
                                                                        University, Korea) -->
                                                                    </td>
                                                                </tr>
                                                                <!-- <tr>
                                                                    <td>
                                                                        <p class="bold">Hye Yeon Koo</p>(Seoul National
                                                                        University, Korea)
                                                                    </td>
                                                                </tr> -->
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
							<!-- <li name="break" class="border_bottom_70">
									<div class="table_wrap detail_table_common x_scroll">
										<table class="c_table detail_table">
											<colgroup>
												<col class="col_date">
												<col>
											</colgroup>
											<tbody>
												<tr class="light_gray_bg">
													<td>18:00-18:30</td>
													<td>
														<p class="font_20 bold">Break</p>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</li> -->
                        </ul>
                    </div>
                    <div class="tab_cont">
                        <ul class="program_detail_ul">
                            <li name="breakfast_symposium_2">
								<!--
                                <div class="clearfix2 caption">
                                    <span>Sep.8(Fri)</span>
                                    <span>Room2(3F)</span>
                                </div>
								-->
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="sky_bg">
                                                <td>07:30-08:20</td>
                                                <td>
                                                    <p class="font_20 bold">Breakfast Symposium 2</p>
                                                    <!-- <p><span class="bold">Chairperson : Jae Hyuk Lee</span> (Hanyang University, Korea)</p> -->
													<!-- [↓] 확정 시 까지 버튼 숨김 -->
													<!-- <button class="btn gray2_btn program_detail_btn">Preview </button> -->
                                                </td>
                                            </tr>
											<tr>
												<td colspan="2" class="program_detail_td">
													will be updated.
												</td>
											</tr>
                                            <tr>
                                                <td colspan="2">
                                                    <div>
                                                        <table class="c_table detail_table padding_0">
                                                            <colgroup>
                                                                <col class="col_date">
                                                                <col>
                                                            </colgroup>
                                                            <tbody>
                                                                <tr>
                                                                    <td>07:30-08:20</td>
                                                                    <td class="bold">
                                                                        <!-- The Combination of DPP-4 Inhibitor Plus SGLT2
                                                                        Inhibitor as Attractive Treatment Option: From
                                                                        Rationale to Clinical Aspects -->
                                                                    </td>
                                                                    <td>
                                                                        <!-- <p class="bold">Suk Chon</p>(Kyung Hee
                                                                        University, Korea) -->
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
							<li name="break" class="border_bottom_70">
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="light_gray_bg">
                                                <td>08:20-08:30</td>
                                                <td>
                                                    <p class="font_20 bold">Break</p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                            <li name="plenary_lecture_1_2">
								<!--
                                <div class="clearfix2 caption">
                                    <span>Sep.8(Fri)</span>
                                    <span>Room2(3F)</span>
                                </div>
								-->
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="pink_bg">
                                                <td>08:30-09:10</td>
                                                <td>
                                                    <p class="font_20 bold">Plenary Lecture 1</p>
                                                    <!-- <p><span class="bold">Chairperson : Youngkil Choi</span> (Kyung Hee University, Korea)</p> -->
													<!-- <button class="btn gray2_btn program_detail_btn">Preview </button> -->
                                                </td>
                                            </tr>
											<tr>
												<td colspan="2" class="program_detail_td">
													Professor Thiruma V. Arumugam, a distinguished researcher in the fields of physiology and pharmacology at La Trobe University, Australia, is pushing the boundaries of neuroscience and metabolism. In his upcoming lecture, he will discuss how his work on intermittent metabolic switching has enhanced our comprehension of its effect on brain health, paving the way for potential therapeutic interventions.<br>
													His recent publication in Theranostics, titled "Time-restricted feeding modulates the DNA methylation landscape, attenuates hallmark neuropathology and cognitive impairment in a mouse model of vascular dementia," has presented novel insights into the therapeutic potential of intermittent metabolic switching, offering promising strategies for managing and potentially reversing cognitive impairment in dementia.<br>
													Further expanding our understanding, Professor Arumugam's article in Cell Metabolism, "Hallmarks of Brain Aging: Adaptive and Pathological Modification by Metabolic States," continues to revolutionize our perspective on the role of metabolism in brain aging.
												</td>
											</tr>
                                            <tr>
                                                <td colspan="2" class="on">
                                                    <div>
                                                        <table class="c_table detail_table padding_0">
                                                            <colgroup>
                                                                <col class="col_date">
                                                                <col>
                                                            </colgroup>
                                                            <tbody>
                                                                <tr>
                                                                    <td>08:30-09:00</td>
                                                                    <td class="bold">
                                                                        Intermittent Metabolic Switching and Brain Health
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Thiruma V. Arumugam</p>(La Trobe University, Australia)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>09:00-09:10</td>
                                                                    <td class="bold">Q&A</td>
                                                                    <td class="text_r"></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
							<li name="break" class="border_bottom_70">
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="light_gray_bg">
                                                <td>09:10-09:20</td>
                                                <td>
                                                    <p class="font_20 bold">Break</p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                            <li name="symposium_2">
								<!--
                                <div class="clearfix2 caption">
                                    <span>Sep.8(Fri)</span>
                                    <span>Room2(3F)</span>
                                </div>
								-->
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="green_bg">
                                                <td>09:20-10:50</td>
                                                <td>
                                                    <p class="font_20 bold">Symposium 2 : Obesity and Neurodegenerative Diseases</p>
                                                    <!-- <p>
                                                        <span class="bold">Chairperson : Changhee Jung</span>
                                                        (University of Ulsan, Korea) /
                                                        <span class="bold">Wook Song</span> (Seoul National University,
                                                        Korea)
                                                    </p> -->
													<!-- [↓] 확정 시 까지 버튼 숨김 -->
													<!-- <button class="btn gray2_btn program_detail_btn">Preview </button> -->
                                                </td>
                                            </tr>
											<tr>
												<td colspan="2" class="program_detail_td">
													will be updated.
												</td>
											</tr>
                                            <tr>
                                                <td colspan="2" class="on">
                                                    <div>
                                                        <table class="c_table detail_table padding_0">
                                                            <colgroup>
                                                                <col class="col_date">
                                                                <col>
                                                            </colgroup>
                                                            <tbody>
                                                                <tr>
                                                                    <td>09:20-09:45</td>
                                                                    <td class="bold">
                                                                        Dietary Restriction and Vascular Dementia
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Thiruma V. Arumugam</p>(La Trobe University, Australia)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>09:45-10:10</td>
                                                                    <td class="bold">
                                                                        Role of Adiponectin Signaling in Alzheimer's Disease
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Dong Gyu Jo</p>(Sungkyunkwan University, Republic of Korea)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>10:10-10:35</td>
                                                                    <td class="bold">
                                                                        The Impact of Adiposity and Cognitive Function: Closer than You Think
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <!-- <p class="bold">Bong-Soo Kim</p>(Hallym
                                                                        University, Korea) -->
																		<p class="bold">Theresia Handayani Mina</p>(Nanyang Technological University, Singapore)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <!-- <td rowspan="2">10:20-10:50</td> -->
                                                                    <td>10:35-10:50</td>
                                                                    <!-- <td rowspan="2" class="bold">Panel Discussion</td> -->
                                                                    <td class="bold">Panel Discussion</td>
                                                                    <td class="text_r">
                                                                        <!-- <p class="bold">Jang Won Son</p>(The Catholic
                                                                        University of Korea, Korea) -->
                                                                    </td>
                                                                </tr>
                                                                <!-- <tr>
                                                                    <td>
                                                                        <p class="bold">Ara Koh</p>(Postech, Korea)
                                                                    </td>
                                                                </tr> -->
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
							<li name="break" class="border_bottom_70">
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="light_gray_bg">
                                                <td>10:50-11:00</td>
                                                <td>
                                                    <p class="font_20 bold">Break</p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                            <li name="opening_address_2">
								<!--
                                <div class="clearfix2 caption">
                                    <span>Sep.8(Fri)</span>
                                    <span>Room2(3F)</span>
                                </div>
								-->
                                <div class="table_wrap detail_table_common x_scroll border_bottom_70">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="yellow_bg">
                                                <td>11:00-11:10</td>
                                                <td>
                                                    <p class="font_20 bold mb0">Opening Address</p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                            <li name="keynote_lecture_1_2">
								<!--
                                <div class="clearfix2 caption">
                                    <span>Sep.8(Fri)</span>
                                    <span>Room2(3F)</span>
                                </div>
								-->
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="pink_bg">
                                                <td>11:10-11:50</td>
                                                <td>
                                                    <p class="font_20 bold">Keynote Lecture 1</p>
                                                    <!-- <p><span class="bold">Chairperson : Chang Beom Lee</span> (Hanyang University, Korea)</p> -->
													<!-- [↓] 확정 시 까지 버튼 숨김 -->
													<!-- <button class="btn gray2_btn program_detail_btn">Preview </button> -->
                                                </td>
                                            </tr>
											<tr>
												<td colspan="2" class="program_detail_td">
													will be updated.
												</td>
											</tr>
                                            <tr>
                                                <td colspan="2" class="on">
                                                    <div>
                                                        <table class="c_table detail_table padding_0">
                                                            <colgroup>
                                                                <col class="col_date">
                                                                <col>
                                                            </colgroup>
                                                            <tbody>
                                                                <tr>
                                                                    <td>11:10-11:40</td>
                                                                    <td class="bold">
                                                                        Adipose Tissue – A Treasure Box for Discoveries
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Matthias Blüher</p>
                                                                        (University of Leipzig, Germany)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>11:40-11:50</td>
                                                                    <td class="bold">Q&A</td>
                                                                    <td class="text_r"></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
							<li name="break" class="border_bottom_70">
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="light_gray_bg">
                                                <td>11:50-12:00</td>
                                                <td>
                                                    <p class="font_20 bold">Break</p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                            <li name="luncheon_symposium_2">
								<!--
                                <div class="clearfix2 caption">
                                    <span>Sep.8(Fri)</span>
                                    <span>Room2(3F)</span>
                                </div>
								-->
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="sky_bg">
                                                <td>12:00-13:00</td>
                                                <td>
                                                    <p class="font_20 bold">Luncheon Symposium 2</p>
                                                    <!-- <p><span class="bold">Chairperson : Yongseong Kim</span> (Design Hospital, Korea)</p> -->
													<!-- [↓] 확정 시 까지 버튼 숨김 -->
													<!-- <button class="btn gray2_btn program_detail_btn">Preview </button> -->
                                                </td>
                                            </tr>
											<tr>
												<td colspan="2" class="program_detail_td">
													will be updated.
												</td>
											</tr>
                                            <tr>
                                                <td colspan="2">
                                                    <div>
                                                        <table class="c_table detail_table padding_0">
                                                            <colgroup>
                                                                <col class="col_date">
                                                                <col>
                                                            </colgroup>
                                                            <tbody>
                                                                <tr>
                                                                    <td>12:00-13:00</td>
                                                                    <td class="bold">
                                                                        <!-- How to Find the Optimal Combination Therapy for
                                                                        Patients with Type 2 Diabetes -->
                                                                    </td>
                                                                    <td>
                                                                        <!-- <p class="bold">Il Seong Nam-Goong</p>
                                                                        (University of Ulsan, Korea) -->
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
							<li name="break" class="border_bottom_70">
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="light_gray_bg">
                                                <td>13:00-14:00</td>
                                                <td>
                                                    <p class="font_20 bold">Break</p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                            <!-- <li>
                                <div class="clearfix2 caption">
                                    <span>Sep.8(Fri)</span>
                                </div>
                                <div class="table_wrap detail_table_common x_scroll border_bottom_70">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="green_bg">
                                                <td>13:00-14:00</td>
                                                <td>
                                                    <p class="font_20 bold mb0">Poster Exhibition</p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li> -->

                            <li name="symposium_6">
								<!--
                                <div class="clearfix2 caption">
                                    <span>Sep.8(Fri)</span>
                                    <span>Room2(3F)</span>
                                </div>
								-->
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="green_bg">
                                                <td>14:00-15:30</td>
                                                <td>
                                                    <p class="font_20 bold">Symposium 6</p>
                                                    <!-- <p>
                                                        <span class="bold">Chairperson : Kijin Kim</span> (Keimyung
                                                        University, Korea) /
                                                        <span class="bold">Sewon Lee</span> (Incheon National
                                                        University, Korea)
                                                    </p> -->
													<!-- [↓] 확정 시 까지 버튼 숨김 -->
													<!-- <button class="btn gray2_btn program_detail_btn">Preview </button> -->
                                                </td>
                                            </tr>
											<tr>
												<td colspan="2" class="program_detail_td">
													will be updated.
												</td>
											</tr>
                                            <tr>
                                                <td colspan="2" class="on">
                                                    <div>
                                                        <table class="c_table detail_table padding_0">
                                                            <colgroup>
                                                                <col class="col_date">
                                                                <col>
                                                            </colgroup>
                                                            <tbody>
                                                                <tr>
                                                                    <td>14:00-14:25</td>
                                                                    <td class="bold">
                                                                        <!-- Effects of Exercise and Cerebral Glucose Metabolism as a Strategy for Preventing Cognitive Impairment Associated with Diabetes -->TBD
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Hideaki Soya</p>(University of Tsukuba, Japan)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>14:25-14:50</td>
                                                                    <td class="bold">
                                                                        <!-- The Proinflammatory Effects of Chronic Excessive Exercise -->TBD
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <!-- <p class="bold">Adelino Sanchez Ramos da Silva</p>(University of Sao Paulo, Brazil) -->
																		TBD
                                                                    </td>
																	
                                                                </tr>
                                                                <tr>
                                                                    <td>14:50-15:15</td>
                                                                    <td class="bold">
                                                                        TBD
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Jung Gi Hong</p>(CHA University, Republic of Korea)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <!-- <td rowspan="2">15:00-15:30</td> -->
                                                                    <td>15:15-15:30</td>
                                                                    <!-- <td rowspan="2" class="bold">Panel Discussion</td> -->
                                                                    <td class="bold">Panel Discussion</td>
                                                                    <td>
                                                                        <!-- <p class="bold">Hyuntae Park</p>(Dong-A
                                                                        University, Korea) -->
                                                                    </td>
                                                                </tr>
                                                                <!-- <tr>
                                                                    <td>
                                                                        <p class="bold">Justin Y. Jeon</p>(Yonsei
                                                                        University, Korea)
                                                                    </td>
                                                                </tr> 
                                                                <tr>
                                                                    <td>15:30-15:40</td>
                                                                    <td class="bold" colspan="2">
                                                                        Break
                                                                    </td>
                                                                </tr> -->
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
							<li name="break" class="border_bottom_70">
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="light_gray_bg">
                                                <td>15:30-15:40</td>
                                                <td>
                                                    <p class="font_20 bold">Break</p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                            <li>
								<!--
                                <div class="clearfix2 caption">
                                    <span>Sep.8(Fri)</span>
                                    <span>Room2(3F)</span>
                                </div>-->
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="pink_bg">
                                                <td>15:40-16:20</td>
                                                <td>
                                                    <p class="font_20 bold">Plenary Lecture 2</p>
                                                    <!-- <p>
                                                        <span class="bold">Chairperson : Soo Lim</span> (Seoul National
                                                        University, Korea)
                                                    </p> -->
													<!-- [↓] 확정 시 까지 버튼 숨김 -->
													<!-- <button class="btn gray2_btn program_detail_btn">Preview </button> -->
                                                </td>
                                            </tr>
											<tr>
												<td colspan="2" class="program_detail_td">
													will be updated.
												</td>
											</tr>
                                            <tr>
                                                <td colspan="2" class="on">
                                                    <div>
                                                        <table class="c_table detail_table padding_0">
                                                            <colgroup>
                                                                <col class="col_date">
                                                                <col>
                                                            </colgroup>
                                                            <tbody>
                                                                <tr>
                                                                    <td>15:40-16:10</td>
                                                                    <td class="bold">
                                                                        Understanding Human Metabolic Dysregulation In Vivo Using Stable Isotope Tracers: More than 50 Years of Experience
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Robert R. Wolfe</p>(University of Arkansas for Medical Sciences, USA)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>16:10-16:20</td>
                                                                    <td class="bold">Q&A</td>
                                                                    <td class="text_r"></td>
                                                                </tr>
																<!--
                                                                <tr>
                                                                    <td>16:20-16:30</td>
                                                                    <td class="bold" colspan="2">
                                                                        Break
                                                                    </td>
                                                                </tr>
																-->
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
							<li name="break" class="border_bottom_70">
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="light_gray_bg">
                                                <td>16:20-16:30</td>
                                                <td>
                                                    <p class="font_20 bold">Break</p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                            <li name="symposium_10">
								<!--
                                <div class="clearfix2 caption">
                                    <span>Sep.8(Fri)</span>
                                    <span>Room2(3F)</span>
                                </div>
								-->
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="green_bg">
                                                <td>16:30-18:00</td>
                                                <td>
                                                    <p class="font_20 bold">Symposium 10 : Neuropsychological Aspect of Obesity</p>
                                                    <!-- <p>
                                                        <span class="bold">Chairperson : Sung Soo Kim</span> (Chungnam
                                                        National University, Korea) /
                                                        <span class="bold">Sangmo Hong</span> (Hanyang University,
                                                        Korea)
                                                    </p> -->
													<!-- [↓] 확정 시 까지 버튼 숨김 -->
													<!-- <button class="btn gray2_btn program_detail_btn">Preview </button> -->
                                                </td>
                                            </tr>
											<tr>
												<td colspan="2" class="program_detail_td">
													will be updated.
												</td>
											</tr>
                                            <tr>
                                                <td colspan="2"  class="on">
                                                    <div>
                                                        <table class="c_table detail_table padding_0">
                                                            <colgroup>
                                                                <col class="col_date">
                                                                <col>
                                                            </colgroup>
                                                            <tbody>
                                                                <tr>
                                                                    <td>16:30-16:55</td>
                                                                    <td class="bold">
                                                                        The Effect of Obesity and HDL Concentration on AD Pathology
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Yun Ha Jeong</p>(Korea Brain Research Institute (KBRI), Republic of Korea)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>16:55-17:20</td>
                                                                    <td class="bold">
                                                                        Weight Bias and Stigma: The Occult Peril in Obesity Managements
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Kwang Wei Tham</p>(Woodlands Health, Singapore)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>17:20-17:45</td>
                                                                    <td class="bold">
                                                                        <!-- New Clinical Uses of GLP-1 Agonist -->
																		<!-- Therapeutic Potentials of Anti-diabetic Drugs for Alzheimer's Disease -->TBD
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Vasileios Papaliagkas</p>(International Hellenic University, Greece)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <!-- <td rowspan="2">17:30-18:00</td> -->
                                                                    <td>17:45-18:00</td>
                                                                    <!-- <td rowspan="2" class="bold">Panel Discussion</td> -->
                                                                    <td class="bold">Panel Discussion</td>
                                                                    <td>
                                                                        <!-- <p class="bold">Ji Won Yoon</p>(Seoul National
                                                                        University, Korea) -->
                                                                    </td>
                                                                </tr>
                                                                <!-- <tr>
                                                                    <td>
                                                                        <p class="bold">Kye-Yeung Park</p>(Hanyang
                                                                        University, Korea)
                                                                    </td>
                                                                </tr>
																<tr>
                                                                    <td>18:00-18:30</td>
                                                                    <td class="bold" colspan="2">
                                                                        Break
                                                                    </td>
                                                                </tr> -->
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
							<!-- <li name="break" class="border_bottom_70">
									<div class="table_wrap detail_table_common x_scroll">
										<table class="c_table detail_table">
											<colgroup>
												<col class="col_date">
												<col>
											</colgroup>
											<tbody>
												<tr class="light_gray_bg">
													<td>18:00-18:30</td>
													<td>
														<p class="font_20 bold">Break</p>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</li> -->
                        </ul>
                    </div>
                    <div class="tab_cont">
                        <ul class="program_detail_ul">
							<li name="breakfast_symposium_3">
								<!--
                                <div class="clearfix2 caption">
                                    <span>Sep.8(Fri)</span>
                                    <span>Room3(3F)</span>
                                </div>
								-->
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="sky_bg">
                                                <td>07:30-08:20</td>
                                                <td>
                                                    <p class="font_20 bold">Breakfast Symposium 3</p>
                                                    <!-- <p><span class="bold">Chairperson : Jae Hyuk Lee</span> (Hanyang University, Korea)</p> -->
													<!-- [↓] 확정 시 까지 버튼 숨김 -->
													<!-- <button class="btn gray2_btn program_detail_btn">Preview </button> -->
                                                </td>
                                            </tr>
											<tr>
												<td colspan="2" class="program_detail_td">
													will be updated.
												</td>
											</tr>
                                            <tr>
                                                <td colspan="2">
                                                    <div>
                                                        <table class="c_table detail_table padding_0">
                                                            <colgroup>
                                                                <col class="col_date">
                                                                <col>
                                                            </colgroup>
                                                            <tbody>
                                                                <tr>
                                                                    <td>07:30-08:20</td>
                                                                    <td class="bold">
                                                                        <!-- The Combination of DPP-4 Inhibitor Plus SGLT2
                                                                        Inhibitor as Attractive Treatment Option: From
                                                                        Rationale to Clinical Aspects -->
                                                                    </td>
                                                                    <td>
                                                                        <!-- <p class="bold">Suk Chon</p>(Kyung Hee
                                                                        University, Korea) -->
                                                                    </td>
                                                                </tr>
																<!--
                                                                <tr>
                                                                    <td>08:20-08:30</td>
                                                                    <td class="bold" colspan="2">
                                                                        Break
                                                                    </td>
                                                                </tr>
																-->
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
							<li name="break" class="border_bottom_70">
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="light_gray_bg">
                                                <td>08:20-08:30</td>
                                                <td>
                                                    <p class="font_20 bold">Break</p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                            <li>
								<!--
                                <div class="clearfix2 caption">
                                    <span>Sep.8(Fri)</span>
                                    <span>Room3(3F)</span>
                                </div>
								-->
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="pink_bg">
                                                <td>08:30-09:10</td>
                                                <td>
                                                    <p class="font_20 bold">Plenary Lecture 1</p>
                                                    <!-- <p><span class="bold">Chairperson : Youngkil Choi</span> (Kyung Hee University, Korea)</p> -->
													<!-- <button class="btn gray2_btn program_detail_btn">Preview </button> -->
                                                </td>
                                            </tr>
											<tr>
												<td colspan="2" class="program_detail_td">
													Professor Thiruma V. Arumugam, a distinguished researcher in the fields of physiology and pharmacology at La Trobe University, Australia, is pushing the boundaries of neuroscience and metabolism. In his upcoming lecture, he will discuss how his work on intermittent metabolic switching has enhanced our comprehension of its effect on brain health, paving the way for potential therapeutic interventions.<br>
													His recent publication in Theranostics, titled "Time-restricted feeding modulates the DNA methylation landscape, attenuates hallmark neuropathology and cognitive impairment in a mouse model of vascular dementia," has presented novel insights into the therapeutic potential of intermittent metabolic switching, offering promising strategies for managing and potentially reversing cognitive impairment in dementia.<br>
													Further expanding our understanding, Professor Arumugam's article in Cell Metabolism, "Hallmarks of Brain Aging: Adaptive and Pathological Modification by Metabolic States," continues to revolutionize our perspective on the role of metabolism in brain aging.
												</td>
											</tr>
                                            <tr>
                                                <td colspan="2" class="on">
                                                    <div>
                                                        <table class="c_table detail_table padding_0">
                                                            <colgroup>
                                                                <col class="col_date">
                                                                <col>
                                                            </colgroup>
                                                            <tbody>
                                                                <tr>
                                                                    <td>08:30-09:00</td>
                                                                    <td class="bold">
                                                                        Intermittent Metabolic Switching and Brain Health
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Thiruma V. Arumugam</p>(La Trobe University, Australia)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>09:00-09:10</td>
                                                                    <td class="bold">Q&A</td>
                                                                    <td class="text_r"></td>
                                                                </tr>
																<!--
                                                                <tr>
                                                                    <td>09:10-09:20</td>
                                                                    <td class="bold" colspan="2">
                                                                        Break
                                                                    </td>
                                                                </tr>
																-->
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
							<li name="break" class="border_bottom_70">
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="light_gray_bg">
                                                <td>09:10-09:20</td>
                                                <td>
                                                    <p class="font_20 bold">Break</p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                            <li name="symposium_3">
								<!--
                                <div class="clearfix2 caption">
                                    <span>Sep.8(Fri)</span>
                                    <span>Room3(3F)</span>
                                </div>
								-->
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="green_bg">
                                                <td>09:20-10:50</td>
                                                <td>
                                                    <p class="font_20 bold">Symposium 3 : Digital Therapeutics</p>
                                                    <!-- <p>
                                                        <span class="bold">Chairperson : Min-Seon Kim</span> (University
                                                        of Ulsan, Korea) /
                                                        <span class="bold">Ja-Hyun Baik</span> (Korea University, Korea)
                                                    </p> -->
													<!-- [↓] 확정 시 까지 버튼 숨김 -->
													<!-- <button class="btn gray2_btn program_detail_btn">Preview </button> -->
                                                </td>
                                            </tr>
											<tr>
												<td colspan="2" class="program_detail_td">
													will be updated.
												</td>
											</tr>
                                            <tr>
                                                <td colspan="2" class="on">
                                                    <div>
                                                        <table class="c_table detail_table padding_0">
                                                            <colgroup>
                                                                <col class="col_date">
                                                                <col>
                                                            </colgroup>
                                                            <tbody>
                                                                <tr>
                                                                    <td>09:20-09:45</td>
                                                                    <td class="bold">
                                                                        <!-- Neural Mechanism of Hunger-gated Food-seeking
                                                                        and Interacting -->TBD
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Ki-Hyun Jeon</p>(Seoul National University, Republic of Korea)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>09:45-10:10</td>
                                                                    <td class="bold">
                                                                        <!-- Ontogeny of Hunger -->TBD
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Laura Falvey</p>(Reset Health, UK)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>10:10-10:35</td>
                                                                    <td class="bold">
                                                                        <!-- Hypothalamic Glucagon Like Peptide-1 Regulates
                                                                        Food Intake and Glucose Metabolism -->TBD
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Sang Youl Rhee</p>(Kyung Hee University, Republic of Korea)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <!-- <td rowspan="3">10:20-10:50</td> -->
                                                                    <td>10:35-10:50</td>
                                                                    <!-- <td rowspan="3" class="bold">Panel Discussion</td> -->
                                                                    <td class="bold">Panel Discussion</td>
                                                                    <td>
                                                                        <!-- <p class="bold">Ki Woo Kim</p>(Yonsei
                                                                        University, Korea) -->
                                                                    </td>
                                                                </tr>
                                                                <!-- <tr>
                                                                    <td>
                                                                        <p class="bold">Jong-Woo Sohn</p>(KIST, Korea)
                                                                    </td>
                                                                </tr> -->
                                                                <!-- <tr>
                                                                    <td>
                                                                        <p class="bold">Jae Geun Kim</p>(Incheon
                                                                        National University, Korea)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>10:50-11:00</td>
                                                                    <td class="bold" colspan="2">
                                                                        Break
                                                                    </td>
                                                                </tr> -->
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
							<li name="break" class="border_bottom_70">
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="light_gray_bg">
                                                <td>10:50-11:00</td>
                                                <td>
                                                    <p class="font_20 bold">Break</p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                            <li>
								<!--
                                <div class="clearfix2 caption">
                                    <span>Sep.8(Fri)</span>
                                    <span>Room3(3F)</span>
                                </div>
								-->
                                <div class="table_wrap detail_table_common x_scroll border_bottom_70">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="yellow_bg">
                                                <td>11:00-11:10</td>
                                                <td>
                                                    <p class="font_20 bold mb0">Opening Address</p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                            <li>
								<!--
                                <div class="clearfix2 caption">
                                    <span>Sep.8(Fri)</span>
                                    <span>Room3(3F)</span>
                                </div>
								-->
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="pink_bg">
                                                <td>11:10-11:50</td>
                                                <td>
                                                    <p class="font_20 bold">Keynote Lecture 1</p>
                                                    <!-- <p><span class="bold">Chairperson : Chang Beom Lee</span> (Hanyang University, Korea)</p> -->
													<!-- [↓] 확정 시 까지 버튼 숨김 -->
													<!-- <button class="btn gray2_btn program_detail_btn">Preview </button> -->
                                                </td>
                                            </tr>
											<tr>
												<td colspan="2" class="program_detail_td">
													will be updated.
												</td>
											</tr>
                                            <tr>
                                                <td colspan="2" class="on">
                                                    <div>
                                                        <table class="c_table detail_table padding_0">
                                                            <colgroup>
                                                                <col class="col_date">
                                                                <col>
                                                            </colgroup>
                                                            <tbody>
                                                                <tr>
                                                                    <td>11:10-11:40</td>
                                                                    <td class="bold">
                                                                        Adipose Tissue – A Treasure Box for Discoveries
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Matthias Blüher</p>
                                                                        (University of Leipzig, Germany)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>11:40-11:50</td>
                                                                    <td class="bold">Q&A</td>
                                                                    <td class="text_r"></td>
                                                                </tr>
																<!--
                                                                <tr>
                                                                    <td>11:50-12:00</td>
                                                                    <td class="bold" colspan="2">
                                                                        Break
                                                                    </td>
                                                                </tr>
																-->
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
							<li name="break" class="border_bottom_70">
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="light_gray_bg">
                                                <td>11:50-12:00</td>
                                                <td>
                                                    <p class="font_20 bold">Break</p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                            <li name="luncheon_symposium_3">
								<!--
                                <div class="clearfix2 caption">
                                    <span>Sep.8(Fri)</span>
                                    <span>Room3(3F)</span>
                                </div>
								-->
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="sky_bg">
                                                <td>12:00-13:00</td>
                                                <td>
                                                    <p class="font_20 bold">Luncheon Symposium 3</p>
                                                    <!-- <p><span class="bold">Chairperson : Kyu Rae Lee</span> (Gachon
                                                        University, Korea)</p> -->
													<!-- [↓] 확정 시 까지 버튼 숨김 -->
													<!-- <button class="btn gray2_btn program_detail_btn">Preview </button> -->
                                                </td>
                                            </tr>
											<tr>
												<td colspan="2" class="program_detail_td">
													will be updated.
												</td>
											</tr>
                                            <tr>
                                                <td colspan="2" class="on">
                                                    <div>
                                                        <table class="c_table detail_table padding_0">
                                                            <colgroup>
                                                                <col class="col_date">
                                                                <col>
                                                            </colgroup>
                                                            <tbody>
                                                                <tr>
                                                                    <td>12:00-13:00</td>
                                                                    <td class="bold">
                                                                        <!-- Is There a More Effective Treatment for Obese
                                                                        Patients Who have Increased Due to COVID-19? -->TBD
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Soo Kyoung Kim</p>(Gyeongsang National University, Republic of Korea)
                                                                    </td>
                                                                </tr>
																<!--
																<tr>
                                                                    <td>13:00-14:00</td>
                                                                    <td class="bold" colspan="2">
                                                                        Break
                                                                    </td>
                                                                </tr> -->
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
							<li name="break" class="border_bottom_70">
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="light_gray_bg">
                                                <td>13:00-14:00</td>
                                                <td>
                                                    <p class="font_20 bold">Break</p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                            <!-- <li>
                                <div class="clearfix2 caption">
                                    <span>Sep.8(Fri)</span>
                                </div>
                                <div class="table_wrap detail_table_common x_scroll border_bottom_70">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="green_bg">
                                                <td>13:00-14:00</td>
                                                <td>
                                                    <p class="font_20 bold mb0">Poster Exhibition</p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li> -->
                            <li name="symposium_7">
								<!--
                                <div class="clearfix2 caption">
                                    <span>Sep.8(Fri)</span>
                                    <span>Room3(3F)</span>
                                </div>
								-->
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="green_bg">
                                                <td>14:00-15:30</td>
                                                <td>
                                                    <p class="font_20 bold">Symposium 7 : Metabolic Signaling in Obesity-related Diseases</p>
                                                    <!-- <p>
                                                        <span class="bold">Chairperson : Cheol-Young Park</span>
                                                        (Sungkyunkwan University, Korea) /
                                                        <span class="bold">Yun-Hee Lee</span> (Seoul National
                                                        University, Korea)
                                                    </p> -->
													<!-- [↓] 확정 시 까지 버튼 숨김 -->
													<!-- <button class="btn gray2_btn program_detail_btn">Preview </button> -->
                                                </td>
                                            </tr>
											<tr>
												<td colspan="2" class="program_detail_td">
													will be updated.
												</td>
											</tr>
                                            <tr>
                                                <td colspan="2" class="on">
                                                    <div>
                                                        <table class="c_table detail_table padding_0">
                                                            <colgroup>
                                                                <col class="col_date">
                                                                <col>
                                                            </colgroup>
                                                            <tbody>
                                                                <tr>
                                                                    <td>14:00-14:25</td>
                                                                    <td class="bold">
                                                                       Uncovering Novel GPCR Pathways for the Treatment of Obesity and Type 2 Diabetes
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Zach Gerhart-Hines</p>(University of Copenhagen, Denmark)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>14:25-14:50</td>
                                                                    <td class="bold">
                                                                        The Double-edged Role of the NLRP3 Inflammasome in Adipose Tissue
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <!-- <p class="bold">Christian Wolfrum</p>(ETH
                                                                        Zürich, Schwerzenbach, Germany) -->
																		<p class="bold">Eun-Hee Koh</p>(University of Ulsan, Republic of Korea)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>14:50-15:15</td>
                                                                    <td class="bold">
                                                                        Microbiota in Obesity-related Metabolic Diseases in Mouse Models
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Je Kyung Seong</p>(Seoul National University, Republic of Korea)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>15:15-15:30</td>
                                                                    <td class="bold">
																		Panel Discussion
                                                                    </td>
																	<td></td>
																</tr>
																<!-- <tr> -->
                                                                    <!-- <td> -->
                                                                    <!-- <p class="bold">Yun-Hee Lee</p>(Seoul National University, Korea) -->
                                                                    <!-- <p class="bold">Chang-Myung Oh</p>(Gwangju Institute of Science and Technology (GIST), Korea) -->
                                                                    <!-- </td>
                                            </tr> -->
                                                                    <!-- <tr> -->
                                                                    <!-- 	<td> -->
                                                                    <!-- 		<p class="bold">Chang-Myung Oh</p>(Gwangju Institute of Science and Technology (GIST), Korea) -->
                                                                    <!-- 	</td> -->
                                                                    <!-- </tr> -->
                                                                    <!-- <tr> -->
                                                                    <!-- 	<td>15:30-15:40</td> -->
                                                                    <!-- 	<td class="bold" colspan="2"> -->
                                                                    <!-- 		Break -->
                                                                    <!-- 	</td> -->
                                                                    <!-- </tr> -->
																<!--
																<tr>
                                                                    <td>15:30-15:40</td>
                                                                    <td class="bold" colspan="2">
                                                                        Break
                                                                    </td>
                                                                </tr>
																-->
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
							<li name="break" class="border_bottom_70">
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="light_gray_bg">
                                                <td>15:30-15:40</td>
                                                <td>
                                                    <p class="font_20 bold">Break</p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                            <li>
								<!--
                                <div class="clearfix2 caption">
                                    <span>Sep.8(Fri)</span>
                                    <span>Room3(3F)</span>
                                </div>
								-->
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="pink_bg">
                                                <td>15:40-16:20</td>
                                                <td>
                                                    <p class="font_20 bold">Plenary Lecture 2</p>
                                                    <!-- <p>
                                                        <span class="bold">Chairperson : Soo Lim</span> (Seoul National
                                                        University, Korea)
                                                    </p> -->
													<!-- [↓] 확정 시 까지 버튼 숨김 -->
													<!-- <button class="btn gray2_btn program_detail_btn">Preview </button> -->
                                                </td>
                                            </tr>
											<tr>
												<td colspan="2" class="program_detail_td">
													will be updated.
												</td>
											</tr>
                                            <tr>
                                                <td colspan="2" class="on">
                                                    <div>
                                                        <table class="c_table detail_table padding_0">
                                                            <colgroup>
                                                                <col class="col_date">
                                                                <col>
                                                            </colgroup>
                                                            <tbody>
                                                                <tr>
                                                                    <td>15:40-16:10</td>
                                                                    <td class="bold">
                                                                        Understanding Human Metabolic Dysregulation In Vivo Using Stable Isotope Tracers: More than 50 Years of Experience
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Robert R. Wolfe</p>(University of Arkansas for Medical Sciences, USA)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>16:10-16:20</td>
                                                                    <td class="bold">Q&A</td>
                                                                    <td class="text_r"></td>
                                                                </tr>
																<!--
                                                                <tr>
                                                                    <td>16:20-16:30</td>
                                                                    <td class="bold" colspan="2">
                                                                        Break
                                                                    </td>
                                                                </tr>
																-->
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
							<li name="break" class="border_bottom_70">
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="light_gray_bg">
                                                <td>16:20-16:30</td>
                                                <td>
                                                    <p class="font_20 bold">Break</p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                            <li name="symposium_11">
								<!--
                                <div class="clearfix2 caption">
                                    <span>Sep.8(Fri)</span>
                                    <span>Room3(3F)</span>
                                </div>
								-->
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="green_bg">
                                                <td>16:30-18:00</td>
                                                <td>
                                                    <p class="font_20 bold">Symposium 11 : Social and Environmental Determinants: Nutritional View of Obesity</p>
                                                    <!-- <p>
                                                        <span class="bold">Chairperson : Kyeong Sook Yim</span> (The
                                                        University of Suwon, Korea) /
                                                        <span class="bold">YoonJu Song</span> (The Catholic University
                                                        of Korea, Korea)
                                                    </p> -->
													<!-- [↓] 확정 시 까지 버튼 숨김 -->
													<!-- <button class="btn gray2_btn program_detail_btn">Preview </button> -->
                                                </td>
                                            </tr>
											<tr>
												<td colspan="2" class="program_detail_td">
													will be updated.
												</td>
											</tr>
                                            <tr>
                                                <td colspan="2" class="on">
                                                    <div>
                                                        <table class="c_table detail_table padding_0">
                                                            <colgroup>
                                                                <col class="col_date">
                                                                <col>
                                                            </colgroup>
                                                            <tbody>
                                                                <tr>
                                                                    <td>16:30-16:55</td>
                                                                    <td class="bold">
                                                                        <!-- Nutrition Focused Interventions to Address Social Determinants of Obesity in the US -->TBD
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Seung-Yeon Lee</p>(University of Cincinnati, USA)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>16:55-17:20</td>
                                                                    <td class="bold">
                                                                        <!-- Influence of Social and Environmental Factors on Obesity -->TBD
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Ji-Yun Hwang</p>(Sangmyung University, Republic of Korea)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>17:20-17:45</td>
                                                                    <td class="bold">
                                                                        Socioeconomic Inequalities in Obesity
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Hyeon-Chang Kim</p>(Yonsei University, Republic of Korea)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td >17:45-18:00</td>
                                                                    <td class="bold">
                                                                        Panel Discussion
                                                                    </td>
                                                                    <td>
                                                                        <!-- <p class="bold">Sung Nim Han</p>(Seoul National
                                                                        University, Korea) -->
                                                                    </td>
                                                                </tr>
                                                                <!-- <tr>
                                                                    <td>
                                                                        <p class="bold">Sang Woon Choi</p>(CHA
                                                                        University, Korea)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>10:50-11:00</td>
                                                                    <td class="bold" colspan="2">
                                                                        Break
                                                                    </td>
                                                                </tr> -->
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
							<!-- <li name="break" class="border_bottom_70">
									<div class="table_wrap detail_table_common x_scroll">
										<table class="c_table detail_table">
											<colgroup>
												<col class="col_date">
												<col>
											</colgroup>
											<tbody>
												<tr class="light_gray_bg">
													<td>18:00-18:30</td>
													<td>
														<p class="font_20 bold">Break</p>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</li> -->
                        </ul>
                    </div>
                    <div class="tab_cont">
                        <ul class="program_detail_ul">
                            <li name="symposium_4">
								<!--
                                <div class="clearfix2 caption">
                                    <span>Sep.8(Fri)</span>
                                    <span>Room4(5F)</span>
                                </div>
								-->
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="green_bg">
                                                <td>09:20-10:50</td>
                                                <td>
                                                    <p class="font_20 bold">Symposium 4 : The Myosteatosis: Novel Aspect of Sarcopenia and Obesity</p>
                                                    <!-- <p>
                                                        <span class="bold">Chairperson : Kyoung-Kon Kim</span> (Gachon
                                                        University, Korea) /
                                                        <span class="bold">Mohd Ismail Noor</span> (University
                                                        Kebangsaan Malaysia, Malaysia)
                                                    </p> -->
													<!-- [↓] 확정 시 까지 버튼 숨김 -->
													<!-- <button class="btn gray2_btn program_detail_btn">Preview </button> -->
                                                </td>
                                            </tr>
											<tr>
												<td colspan="2" class="program_detail_td">
													will be updated.
												</td>
											</tr>
                                            <tr>
                                                <td colspan="2" class="on">
                                                    <div>
                                                        <table class="c_table detail_table padding_0">
                                                            <colgroup>
                                                                <col class="col_date">
                                                                <col>
                                                            </colgroup>
                                                            <tbody>
                                                                <tr>
                                                                    <td>09:20-09:45</td>
                                                                    <td class="bold">
                                                                        Age-Related Prevalence of Visceral Fat Obesity, Low Muscle Mass, and Myosteatosis
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Hong-Kyu Kim</p>(University of Ulsan, Republic of Korea)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>09:45-10:10</td>
                                                                    <td class="bold">
                                                                        Clinical Implications of Myosteatosis in Cardiometabolic Health
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Chang-hee Jung</p>(University of Ulsan, Republic of Korea)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>10:10-10:35</td>
                                                                    <td class="bold">
                                                                        New Insights into Fat Distribution: An Integrated Analysis of Hepatic, Pancreatic, Muscular, and Visceral Fat
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Hajime Yamazaki</p>(Kyoto University, Japan)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <!-- <td rowspan="2">10:20-10:50</td> -->
                                                                    <td>10:35-10:50</td>
                                                                    <!-- <td rowspan="2" class="bold">Panel Discussion</td> -->
                                                                    <td class="bold">Panel Discussion</td>
                                                                    <td class="text_r">
                                                                        <!-- <p class="bold">Seo Young Kang</p>(University of
                                                                        Ulsan, Korea) -->
                                                                    </td>
                                                                </tr>
                                                                <!-- <tr>
                                                                    <td>
                                                                        <p class="bold">Jung Ha Park</p>(Jeju National
                                                                        University, Korea)
                                                                    </td>
                                                                </tr> -->
                                                                <!-- <tr>
                                                                    <td>10:50-13:00</td>
                                                                    <td class="bold" colspan="2">
                                                                        Break
                                                                    </td>
                                                                </tr> -->

                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                            <li name="oral_presentation_1">
								<!--
                                <div class="clearfix2 caption">
                                    <span>Sep.8(Fri)</span>
                                    <span>Room4(5F)</span>
                                </div>
								-->
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="light_orange_bg">
                                                <td>13:00-14:00</td>
                                                <td>
                                                    <p class="font_20 bold">Oral Presentatoin 1</p>
                                                    <!-- <p>
                                                        <span class="bold">Chairperson : Yeongsook Yoon</span> (Inje
                                                        Univeristy, Korea) /
                                                        <span class="bold">Jin Wook Kim</span> (Eulji University, Korea)
                                                    </p> -->
													<!-- [↓] 확정 시 까지 버튼 숨김 -->
													<!-- <button class="btn gray2_btn program_detail_btn">Preview </button> -->
                                                </td>
                                            </tr>
											<tr>
												<td colspan="2" class="program_detail_td">
													will be updated.
												</td>
											</tr>
                                            <tr>
                                                <td colspan="2">
                                                    <div>
                                                        <table class="c_table detail_table padding_0">
                                                            <colgroup>
                                                                <col class="col_date">
                                                                <col>
                                                            </colgroup>
                                                            <tbody>
                                                                <tr>
                                                                    <td>13:00-13:10</td>
                                                                    <td class="bold"><!-- Morphological Changes in Skeletal
                                                                        Muscles with Age and the Preventive Effect of
                                                                        Endurance Exercise on Sarcopenic Overweight --></td>
                                                                    <td>
                                                                        <!-- <p class="bold">Fujue Ji</p>(Hanyang University,
                                                                        China) -->
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>13:10-13:20</td>
                                                                    <td class="bold"><!-- Factors Associated with Healthy
                                                                        Metabolic Transition Among Overweight/Obese
                                                                        Non-Shift Workers --></td>
                                                                    <td>
                                                                        <!-- <p class="bold">Fatin Hanani Mazri</p>
                                                                        (University Kebangsaan Malaysia, Malaysia) -->
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>13:20-13:30</td>
                                                                    <td class="bold"><!-- Title Effect of Walking Steps
                                                                        Measured by a Wearable Activity Tracker on
                                                                        Improving Components of Metabolic Syndrome: A
                                                                        Prospective Study --></td>
                                                                    <td>
                                                                        <!-- <p class="bold">Jae Min Park</p>(Yonsei
                                                                        University, Korea) -->
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>13:30-13:40</td>
                                                                    <td class="bold"><!-- Metabolic Syndrome and Dietary
                                                                        Intake are Associated with Health-related
                                                                        Quality of Life in Kidney Transplant Recipients
                                                                        in Vietnam --></td>
                                                                    <td>
                                                                        <!-- <p class="bold">Nguyen ThuHa</p>(Universiti
                                                                        Kebangsaan Malaysia, Malaysia) -->
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>13:40-13:50</td>
                                                                    <td class="bold"><!-- Mobile Health Intervention on
                                                                        Glycemic Control and Quality of Life in Type 1
                                                                        Diabetes Mellitus --></td>
                                                                    <td>
                                                                        <!-- <p class="bold">Md Azharuddin</p>(Jamia Hamdard
                                                                        University, India) -->
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>13:50-14:00</td>
                                                                    <td class="bold"><!-- Mobile Health Intervention on
                                                                        Glycemic Control and Quality of Life in Type 1
                                                                        Diabetes Mellitus --></td>
                                                                    <td>
                                                                        <!-- <p class="bold">Md Azharuddin</p>(Jamia Hamdard
                                                                        University, India) -->
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                            <li name="symposium_8">
								<!--
                                <div class="clearfix2 caption">
                                    <span>Sep.8(Fri)</span>
                                    <span>Room4(5F)</span>
                                </div>
								-->
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="green_bg">
                                                <td>14:00-15:30</td>
                                                <td>
                                                    <p class="font_20 bold">Symposium 8</p>
                                                    <!-- <p>
                                                        <span class="bold">Chairperson : Sang Kuon Lee</span> (The
                                                        Catholic University of Korea, Korea) /
                                                        <span class="bold">Yoon Baek Choi</span> (University of Ulsan,
                                                        Korea)
                                                    </p> -->
													<!-- [↓] 확정 시 까지 버튼 숨김 -->
													<!-- <button class="btn gray2_btn program_detail_btn">Preview </button> -->
                                                </td>
                                            </tr>
											<tr>
												<td colspan="2" class="program_detail_td">
													will be updated.
												</td>
											</tr>
                                            <tr>
                                                <td colspan="2">
                                                    <div>
                                                        <table class="c_table detail_table padding_0">
                                                            <colgroup>
                                                                <col class="col_date">
                                                                <col>
                                                            </colgroup>
                                                            <tbody>
                                                                <tr>
                                                                    <td>14:00-14:20</td>
                                                                    <td class="bold">
                                                                        <!-- Overview of Semaglutide 2.4 mg (STEP) Clinical
                                                                        Trial Program -->
                                                                    </td>
                                                                    <td>
                                                                        <!-- <p class="bold">David C. W. Lau</p>(University
                                                                        of Calgary, Canada) -->
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>14:20-14:40</td>
                                                                    <td class="bold">
                                                                        <!-- GLP-1 Analogues Versus Bariatric and Metabolic
                                                                        Surgery; Physician’s View -->
                                                                    </td>
                                                                    <td>
                                                                        <!-- <p class="bold">Sang Yeoup Lee</p>(Pusan
                                                                        National University, Korea) -->
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>14:40-15:00</td>
                                                                    <td class="bold">
                                                                        <!-- GLP-1 Analogues Versus Bariatric and Metabolic
                                                                        Surgery; Surgeon’s View -->
                                                                    </td>
                                                                    <td>
                                                                        <!-- <p class="bold">Yong Jin Kim</p>(H Plus Yangji
                                                                        Hospital, Korea) -->
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <!-- <td rowspan="2">15:00-15:30</td> -->
                                                                    <td>15:00-15:30</td>
                                                                    <!-- <td rowspan="2" class="bold">Panel Discussion</td> -->
                                                                    <td class="bold">Panel Discussion</td>
                                                                    <td>
                                                                        <!-- <p class="bold">Youngsuk Park</p>(Seoul National
                                                                        University, Korea) -->
                                                                    </td>
                                                                </tr>
                                                                <!-- <tr>
                                                                    <td>
                                                                        <p class="bold">Yoona Chung</p>(H Plus Yangji
                                                                        Hospital, Korea)
                                                                    </td>
                                                                </tr> -->
                                                                <!-- <tr> -->
                                                                <!--     <td> -->
                                                                <!--         <p class="bold">TBA</p> -->
                                                                <!--     </td> -->
                                                                <!-- </tr> -->
                                                                <!-- <tr>
                                                                    <td>15:30-16:30</td>
                                                                    <td class="bold" colspan="2">
                                                                        Break
                                                                    </td>
                                                                </tr> -->
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                            <li name="symposium_12">
								<!--
                                <div class="clearfix2 caption">
                                    <span>Sep.8(Fri)</span>
                                    <span>Room4(5F)</span>
                                </div>
								-->
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="green_bg">
                                                <td>16:30-18:00</td>
                                                <td>
                                                    <p class="font_20 bold">Symposium 12 : Obesity : Transition from Adolescence to Young Adult</p>
                                                    <!-- <p>
                                                        <span class="bold">Chairperson : Eun-Jung Rhee</span>
                                                        (Sungkyunkwan University, Korea) /
                                                        <span class="bold">Kyung Mook Choi</span> (Korea University,
                                                        Korea)
                                                    </p> -->
													<!-- [↓] 확정 시 까지 버튼 숨김 -->
													<!-- <button class="btn gray2_btn program_detail_btn">Preview </button> -->
                                                </td>
                                            </tr>
											<tr>
												<td colspan="2" class="program_detail_td">
													will be updated.
												</td>
											</tr>
                                            <tr>
                                                <td colspan="2" class="on">
                                                    <div>
                                                        <table class="c_table detail_table padding_0">
                                                            <colgroup>
                                                                <col class="col_date">
                                                                <col>
                                                            </colgroup>
                                                            <tbody>
                                                                <tr>
                                                                    <td>16:30-16:55</td>
                                                                    <td class="bold">
                                                                        <!-- Why Should Adolescence & Young Adult Obesity Be A Priority? -->TBD
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Dughyun Choi</p>(Soonchunhyang University, Republic of Korea)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>16:55-17:20</td>
                                                                    <td class="bold">
																		<!-- Technology for Adolescence Obesity & T2DM  -->TBD
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Min Sun Kim</p>(Chonbuk National University, Republic of Korea)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>17:20-17:45</td>
                                                                    <td class="bold">
                                                                        Emerging Biomarkers of Type 2 Diabetes in Obese Youth vs Adult
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Joon Young Kim</p>(Syracuse University, USA)
                                                                    </td>
                                                                </tr>
																<tr>
                                                                    <td>17:45-18:00</td>
                                                                    <td class="bold">
                                                                        Panel Discussion
                                                                    </td>
                                                                    <td></td>
                                                                </tr>
                                                                <!-- <tr>
                                                                    <td rowspan="4">17:30-18:00</td>
                                                                    <td rowspan="4" class="bold">
                                                                        Panel Discussion
                                                                    </td>
                                                                    <td>
                                                                        <p class="bold">Bo Kyung Koo</p>(Seoul National
                                                                        University, Korea)
                                                                    </td>
                                                                </tr> -->
                                                                <!-- <tr>
                                                                    <td>
                                                                        <p class="bold">Chang Hee Jung</p>(University of
                                                                        Ulsan, Korea)
                                                                    </td>
                                                                </tr> -->
                                                                <!-- <tr>
                                                                    <td>
                                                                        <p class="bold">Da Young Lee</p>(Korea
                                                                        University, Korea)
                                                                    </td>
                                                                </tr> -->
                                                                <!-- <tr>
                                                                    <td>
                                                                        <p class="bold">Ga Eun Nam</p>(Korea University,
                                                                        Korea)
                                                                    </td>
                                                                </tr> -->
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                            <!-- <li>
                                <div class="clearfix2 caption">
                                    <span>Sep.8(Fri)</span>
                                </div>
                                <div class="table_wrap detail_table_common x_scroll border_bottom_70">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="green_bg">
                                                <td>17:30-18:00</td>
                                                <td>
                                                    <p class="font_20 bold mb0">Poster Exhibition</p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li> -->
                        </ul>
                    </div>
                    <div class="tab_cont">
                        <ul class="program_detail_ul">
                            <li name="sponsored_session_1">
								<!--
                                <div class="clearfix2 caption">
                                    <span>Sep.8(Fri)</span>
                                    <span>Room5(6F)</span>
                                </div>
								-->
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="sky_bg">
                                                <td>09:20-10:50</td>
                                                <td>
                                                    <p class="font_20 bold">Sponsored Session 1 : Journey to the Combination Phentermine plus Topiramate ER from Clinical Trials to Practice</p>
                                                    <!-- <p>
                                                        <span class="bold">Chairperson : Kiyoung Lee</span>
                                                        (Gachon
                                                        University, Korea) /
                                                        <span class="bold">Yang Im Hur</span> (CHA
                                                        University, Korea)
                                                    </p> -->
													<!-- [↓] 확정 시 까지 버튼 숨김 -->
													<!-- <button class="btn gray2_btn program_detail_btn">Preview </button> -->
                                                </td>
                                            </tr>
											<tr>
												<td colspan="2" class="program_detail_td">
													will be updated.
												</td>
											</tr>
                                            <tr>
                                                <td colspan="2" class="on">
                                                    <div>
                                                        <table class="c_table detail_table padding_0">
                                                            <colgroup>
                                                                <col class="col_date">
                                                                <col>
                                                            </colgroup>
                                                            <tbody>
                                                                <tr>
                                                                    <td>09:20-09:50</td>
                                                                    <td class="bold">
                                                                        <!-- The Role of Dapagliflozin in T2D ;
                                                                        DECLARE
                                                                        (Cardiorenal Benefit on T2D; from Prevention to
                                                                        Treatment)  -->TBD</td>
                                                                    <td class="text_r">
                                                                        <!-- <p class="bold">Eun-Jung Rhee</p>
                                                                        (Sungkyunkwan
                                                                        University, Korea) -->TBD
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>09:50-10:20</td>
                                                                    <td class="bold">
                                                                        <!-- The Role of Dapagliflozin in Heart
                                                                        Failure;
                                                                        DAPA-HF -->TBD
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Kyoung Min Kim</p>(Yonsei University, Republic of Korea)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>10:20-10:50</td>
                                                                    <td class="bold">
                                                                        <!-- The Role of Dapagliflozin in Chronic
                                                                        Kidney
                                                                        Disease; DAPA-CKD -->TBD
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">So Hyun Chun</p>(Sungkyunkwan University, Republic of Korea)
                                                                    </td>
                                                                </tr>
                                                                <!-- <tr>
                                                                    <td>10:50-15:40</td>
                                                                    <td class="bold" colspan="2">
                                                                        Break
                                                                    </td>
                                                                </tr> -->
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                            <li name="oral_presentation_2">
								<!--
                                <div class="clearfix2 caption">
                                    <span>Sep.8(Fri)</span>
                                    <span>Room5(6F)</span>
                                </div>
								-->
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="light_orange_bg">
                                                <td>13:00-14:00</td>
                                                <td>
                                                    <p class="font_20 bold">Oral Presentatoin 2</p>
                                                    <!-- <p>
                                                        <span class="bold">Chairperson : Hae-Jin Ko</span>
                                                        (Kyungpook
                                                        National University, Korea) /
                                                        <span class="bold">Beom-Taek Kim</span> (Ajou
                                                        University, Korea)
                                                    </p> -->
													<!-- [↓] 확정 시 까지 버튼 숨김 -->
													<!-- <button class="btn gray2_btn program_detail_btn">Preview </button> -->
                                                </td>
                                            </tr>
											<tr>
												<td colspan="2" class="program_detail_td">
													will be updated.
												</td>
											</tr>
                                            <tr>
                                                <td colspan="2">
                                                    <div>
                                                        <table class="c_table detail_table padding_0">
                                                            <colgroup>
                                                                <col class="col_date">
                                                                <col>
                                                            </colgroup>
                                                            <tbody>
                                                                <tr>
                                                                    <td>13:00-13:10</td>
                                                                    <td class="bold"><!-- Predicted Inflammatory
                                                                        Status and
                                                                        Non-alcoholic Fatty Liver Disease
                                                                        among Korean
                                                                        Adults --></td>
                                                                    <td>
                                                                        <!-- <p class="bold">Akinkunmi Okekunle
                                                                        </p>(Seoul
                                                                        National University, Nigeria) -->
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>13:10-13:20</td>
                                                                    <td class="bold"><!-- Macrophage-Specific
                                                                        Connexin 43
                                                                        Knockout Protects Mice from
                                                                        Obesity-Induced
                                                                        Inflammation and Metabolic
                                                                        Dysfunction --></td>
                                                                    <td>
                                                                        <!-- <p class="bold">CheolJun Choi</p>
                                                                        (Seoul National
                                                                        University, Korea) -->
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>13:20-13:30</td>
                                                                    <td class="bold"><!-- MicroRNA 302a Modulates
                                                                        Cholesterol
                                                                        Homeostasis and Atherosclerosis --></td>
                                                                    <td>
                                                                        <!-- <p class="bold">William Boisvert</p>
                                                                        (University
                                                                        of Hawaii, USA) -->
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>13:30-13:40</td>
                                                                    <td class="bold"><!-- Vutiglabridin Modulates
                                                                        Paraoxonase-2 and Reduces Body
                                                                        Weight in a
                                                                        Manner Complementary to Semaglutide
                                                                        in DIO Mouse -->
                                                                    </td>
                                                                    <td>
                                                                        <!-- <p class="bold">HyungSoon Park</p>
                                                                        (Glaceum
                                                                        incorporation, Korea) -->
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>13:40-13:50</td>
                                                                    <td class="bold"><!-- Protective Effect of
                                                                        Hesperidin
                                                                        Against High Fat Diet Induced Obese
                                                                        Diabetic
                                                                        Wistar Rats via Reduction of
                                                                        Cytokines and Nrf2
                                                                        Pathway --></td>
                                                                    <td>
                                                                        <!-- <p class="bold">Vikas Kumar</p>(King
                                                                        Abdulaziz
                                                                        University, India) -->
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>13:50-14:00</td>
                                                                    <td class="bold"><!-- Semaglutide 2.4 mg and
                                                                        Intensive
                                                                        Behavioral Therapy in Subjects With
                                                                        Overweight
                                                                        or Obesity (STEP 3) --></td>
                                                                    <td>
                                                                        <!-- <p class="bold">Yousun Ha</p>(Novo
                                                                        Nordisk
                                                                        Pharma Korea, UK) -->
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                            <li name="sponsored_session_2">
								<!--
                                <div class="clearfix2 caption">
                                    <span>Sep.8(Fri)</span>
                                    <span>Room5(6F)</span>
                                </div>
								-->
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="sky_bg">
                                                <td>14:00-15:30</td>
                                                <td>
                                                    <p class="font_20 bold">Sponsored Session 2</p>
                                                    <!-- <p>
                                                        <span class="bold">Chairperson : Sung Hoon Yu</span>
                                                        (Hanyang
                                                        University, Korea) /
                                                        <span class="bold">Jung Hwan Park</span> (Hanyang
                                                        University,
                                                        Korea)
                                                    </p> -->
													<!-- [↓] 확정 시 까지 버튼 숨김 -->
													<!-- <button class="btn gray2_btn program_detail_btn">Preview </button> -->
                                                </td>
                                            </tr>
											<tr>
												<td colspan="2" class="program_detail_td">
													will be updated.
												</td>
											</tr>
                                            <tr>
                                                <td colspan="2" class="on">
                                                    <div>
                                                        <table class="c_table detail_table padding_0">
                                                            <colgroup>
                                                                <col class="col_date">
                                                                <col>
                                                            </colgroup>
                                                            <tbody>
                                                                <tr>
                                                                    <td>14:00-14:30</td>
                                                                    <td class="bold">
                                                                        <!-- Phentermine/Topiramate for the
                                                                        Treatment of
                                                                        Adolescent -->TBD
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <!-- <p class="bold">Hyun Wook Chae</p>
                                                                        (Yonsei
                                                                        University, Korea) -->TBD
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>14:30-15:00</td>
                                                                    <td class="bold">
                                                                        Role of DPP4-I under the Latest Treatment Trend
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Eun Roh</p>(Hallym University, Republic of Korea)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>15:00-15:30</td>
                                                                    <td class="bold">
                                                                        <!-- Case Sharing of Empowering Weight
                                                                        Management
                                                                        Using Phentermine/Topiramate ER -->TBD
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <!-- <p class="bold">Yu-Jin Kwon</p>
                                                                        (Yonsei
                                                                        University, Korea) -->TBD
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                            <li name="obesity_treatment_guidelines_symposium">
                                <!-- <div class="clearfix2 caption">
                                    <span>Sep.8(Fri)</span>
                                    <span>Room5(6F)</span>
                                </div> -->
                                <div class="table_wrap detail_table_common x_scroll border_bottom_70">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="purple_bg">
                                                <td>16:30-18:00</td>
                                                <td>
                                                    <p class="font_20 bold mb0">Obesity Treatment Guidelines Symposium : Behind the Scenes: The Journey of Evolution and Revising Obesity Guidelines</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">
                                                    <div>
                                                        <table class="c_table detail_table padding_0">
                                                            <colgroup>
                                                                <col class="col_date">
                                                                <col>
                                                            </colgroup>
                                                            <tbody>
                                                                <tr>
                                                                    <td>16:30-16:55</td>
                                                                    <td class="bold">
                                                                        TBD
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Yasushi Ishigaki</p>(Iwate Medical University, Japan)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>16:55-17:20</td>
                                                                    <td class="bold">
                                                                        TBD
                                                                    </td>
                                                                    <td class="text_r">
                                                                        TBD
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>17:20-17:45</td>
                                                                    <td class="bold">
                                                                        TBD
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Jee Hyun Kang</p>(Konyang University, Republic of Korea)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>17:45-18:00</td>
                                                                    <td class="bold">
                                                                        Panel Discussion
                                                                    </td>
                                                                    <td></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="tab_cont">
                        <ul class="program_detail_ul">
                            <li name="joint_symposium_EASO">
								<!--
                                <div class="clearfix2 caption">
                                    <span>Sep.8(Fri)</span>
                                </div>
								-->
                                <div class="table_wrap detail_table_common x_scroll border_bottom_70">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="purple_bg">
                                                <td>09:20-10:50</td>
                                                <td>
                                                    <p class="font_20 bold mb0">Joint Symposium EASO</p>
                                                </td>
                                            </tr>
											<tr>
												<td colspan="2" class="program_detail_td">
													will be updated.
												</td>
											</tr>
											<tr>
                                                <td colspan="2">
                                                    <div>
                                                        <table class="c_table detail_table padding_0">
                                                            <colgroup>
                                                                <col class="col_date">
                                                                <col>
                                                            </colgroup>
                                                            <tbody>
                                                                <tr>
                                                                    <td>09:20-09:50</td>
                                                                    <td class="bold"></td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>09:50-10:20</td>
                                                                    <td class="bold"></td>
                                                                    <td></td>
                                                                </tr>
																<tr>
                                                                    <td>10:20-10:50</td>
                                                                    <td class="bold"></td>
                                                                    <td></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
							<li name="joint_symposium_AOASO_1">
								<!--
                                <div class="clearfix2 caption">
                                    <span>Sep.8(Fri)</span>
                                </div>
								-->
                                <div class="table_wrap detail_table_common x_scroll border_bottom_70">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="purple_bg">
                                                <td>14:00-15:30</td>
                                                <td>
                                                    <p class="font_20 bold mb0">Joint Symposium KSSO-AOASO</p>
                                                </td>
                                            </tr>
											<tr>
												<td colspan="2" class="program_detail_td">
													will be updated.
												</td>
											</tr>
											<tr>
                                                <td colspan="2" class="on">
                                                    <div>
                                                        <table class="c_table detail_table padding_0">
                                                            <colgroup>
                                                                <col class="col_date">
                                                                <col>
                                                            </colgroup>
                                                            <tbody>
                                                                <tr>
                                                                    <td>14:00-14:25</td>
                                                                    <td class="bold">TBD</td>
                                                                    <td class="text_r"><p class="bold">Geeta Appannah</p>(University Putra Malaysia, Malaysia)</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>14:25-14:50</td>
                                                                    <td class="bold">TBD</td>
                                                                    <td class="text_r"><p class="bold">Do Thi Ngoc Diep</p>(Vietnam)</td>
                                                                </tr>
																<tr>
                                                                    <td>14:50-15:15</td>
                                                                    <td class="bold">TBD</td>
                                                                    <td class="text_r"><p class="bold">Hae-Jin Ko</p>(Kyungpook National University, Republic of Korea)</td>
                                                                </tr>
																<tr>
                                                                    <td>15:15-15:30</td>
                                                                    <td class="bold">Panel Discussion</td>
                                                                    <td></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
							<li name="congress_banquet_ceremony">
								<!--
                                <div class="clearfix2 caption">
                                    <span>Sep.8(Fri)</span>
                                    <span>Room6(5F)</span>
                                </div>
								-->
                                <div class="table_wrap detail_table_common x_scroll border_bottom_70">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="yellow_bg">
                                                <td>18:30-21:30</td>
                                                <td>
                                                    <p class="font_20 bold mb0">Congress Banquet <span class="font_inherit red_txt">*</span>Invited Only</p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                            <!-- <li name="it_융합_대사증후군_위원회_세션">
                                <div class="clearfix2 caption">
                                    <span>Sep.8(Fri)</span>
                                    <span>Room6(5F)</span>
                                </div>
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="sky_bg">
                                                <td>16:30-18:00</td>
                                                <td>
                                                    <p class="font_20 bold">IT Convergence Metabolic
                                                        Syndrome Committee
                                                        (K) : Introduction of the Weight Management
                                                        Application of the
                                                        KSSO</p>
                                                    <p>
                                                        <span class="bold">Chairperson : Young Seol
                                                            Kim</span> (Kyung
                                                        Hee University, Korea) /
                                                        <span class="bold">Seon Mee Kim</span> (Korea
                                                        University, Korea)
                                                    </p>
                            													<button class="btn gray2_btn program_detail_btn">Preview </button>
                                                </td>
                                            </tr>
                            											<tr>
                            												<td colspan="2" class="program_detail_td">
                            													will be updated.
                            												</td>
                            											</tr>
                                            <tr>
                                                <td colspan="2">
                                                    <div>
                                                        <table class="c_table detail_table padding_0">
                                                            <colgroup>
                                                                <col class="col_date">
                                                                <col>
                                                            </colgroup>
                                                            <tbody>
                                                                <tr>
                                                                    <td>16:30-16:50</td>
                                                                    <td class="bold">
                                                                        Possibility of IT-based Technology
                                                                        for Treatment
                                                                        and Management of Obesity and
                                                                        Metabolic Syndrome
                                                                    </td>
                                                                    <td>
                                                                        <p class="bold">Sunyoung Kim</p>
                                                                        (Kyung Hee
                                                                        University, Korea)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>16:50-17:10</td>
                                                                    <td class="bold">
                                                                        Limitations of IT-based Technology
                                                                        for Treatment
                                                                        and Management of Obesity and
                                                                        Metabolic Syndrome
                                                                    </td>
                                                                    <td>
                                                                        <p class="bold">Hun-Sung Kim</p>(The
                                                                        Catholic
                                                                        University of Korea, Korea)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>17:10-17:30</td>
                                                                    <td class="bold">
                                                                        Introduction of the Weight
                                                                        Management
                                                                        Application of the KSSO
                                                                    </td>
                                                                    <td>
                                                                        <p class="bold">Doo-ah Choi</p>
                                                                        (Huraypositive,
                                                                        Korea)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>17:30-17:50</td>
                                                                    <td class="bold">
                                                                        Development Direction of the Weight
                                                                        Management
                                                                        Application of the KSSO
                                                                    </td>
                                                                    <td>
                                                                        <p class="bold">Bo-Yeon Kim</p>
                                                                        (Soonchunhyang
                                                                        University, Korea)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>17:50-18:00</td>
                                                                    <td class="bold" colspan="2">
                                                                        Discussion
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li> -->
                        </ul>
                    </div>
                    <div class="tab_cont">
                        <ul class="program_detail_ul">
                            <li name="guided_poster_presentation_1">
								<!--
                                <div class="clearfix2 caption">
                                    <span>Sep.8(Fri)</span>
                                    <span>Room7(6F)</span>
                                </div>
								-->
                                <div class="table_wrap detail_table_common x_scroll border_bottom_70">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="light_orange_bg">
                                                <td>13:00-14:00</td>
                                                <td>
                                                    <p class="font_20 bold mb0">Guided Poster Presentation 1
                                                    </p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="tab_cont">
                <ul class="tab_li">
                    <li class="on"><a href="javascript:;">Room1</a></li>
                    <li><a href="javascript:;">Room2</a></li>
                    <li><a href="javascript:;">Room3</a></li>
                    <li><a href="javascript:;">Room4</a></li>
                    <li><a href="javascript:;">Room5</a></li>
                    <li><a href="javascript:;">Room6</a></li>
                    <li><a href="javascript:;">Room7</a></li>
                </ul>
                <div class="tab_wrap">
                    <div class="tab_cont on">
                        <ul class="program_detail_ul">
                            <li name="breakfast_symposium_4">
								<!--
                                <div class="clearfix2 caption">
                                    <span>Sep.9(Sat)</span>
                                    <span>Room1(3F)</span>
                                </div>
								-->
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="sky_bg">
                                                <td>07:30-08:20</td>
                                                <td>
                                                    <p class="font_20 bold">Breakfast Symposium 4</p>
                                                    <!-- <p><span class="bold">Chairperson : Jae-Heon Kang</span>
                                                        (Sungkyunkwan University, Korea)</p> -->
													<!-- [↓] 확정 시 까지 버튼 숨김 -->
													<!-- <button class="btn gray2_btn program_detail_btn">Preview </button> -->
                                                </td>
                                            </tr>
											<tr>
												<td colspan="2" class="program_detail_td">
													will be updated.
												</td>
											</tr>
                                            <tr>
                                                <td colspan="2" class="on">
                                                    <div>
                                                        <table class="c_table detail_table padding_0">
                                                            <colgroup>
                                                                <col class="col_date">
                                                                <col>
                                                            </colgroup>
                                                            <tbody>
                                                                <tr>
                                                                    <td>07:30-08:20</td>
                                                                    <td class="bold">
                                                                        Thiazolidinediones and SGLT2i: A Rational Combination Based on T2DM Pathophysiology
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Jun Hwa Hong</p>(Eulji University, Republic of Korea)
                                                                    </td>
                                                                </tr>
																<!--
                                                                <tr>
                                                                    <td>08:20-08:30</td>
                                                                    <td class="bold" colspan="2">
                                                                        Break
                                                                    </td>
                                                                </tr> -->
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
							<li name="break" class="border_bottom_70">
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="light_gray_bg">
                                                <td>08:20-08:30</td>
                                                <td>
                                                    <p class="font_20 bold">Break</p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                            <li name="plenary_lecture_3">
								<!--
                                <div class="clearfix2 caption">
                                    <span>Sep.9(Sat)</span>
                                    <span>Room1(3F)</span>
                                </div>
								-->
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="pink_bg">
                                                <td>08:30-09:10</td>
                                                <td>
                                                    <p class="font_20 bold">Plenary Lecture 3</p>
                                                    <!-- <p>
                                                        <span class="bold">Chairperson : Kwang-Won Kim</span> (Gachon
                                                        University, Korea)
                                                    </p> -->
													<!-- [↓] 확정 시 까지 버튼 숨김 -->
													<!-- <button class="btn gray2_btn program_detail_btn">Preview </button> -->
                                                </td>
                                            </tr>
											<tr>
												<td colspan="2" class="program_detail_td">
													will be updated.
												</td>
											</tr>
                                            <tr>
                                                <td colspan="2" class="on">
                                                    <div>
                                                        <table class="c_table detail_table padding_0">
                                                            <colgroup>
                                                                <col class="col_date">
                                                                <col>
                                                            </colgroup>
                                                            <tbody>
                                                                <tr>
                                                                    <td>08:30-09:00</td>
                                                                    <td class="bold">
                                                                        The Role of Hunger-promoting Hypothalamic Neurons in Obesity Therapeutics
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Tamas Horvath</p>(Yale University, USA)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>09:00-09:10</td>
                                                                    <td class="bold" colspan="2">
                                                                        Q&A
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
							<li name="break" class="border_bottom_70">
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="light_gray_bg">
                                                <td>09:10-09:20</td>
                                                <td>
                                                    <p class="font_20 bold">Break</p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                            <li name="symposium_13">
								<!--
                                <div class="clearfix2 caption">
                                    <span>Sep.9(Sat)</span>
                                    <span>Room1(3F)</span>
                                </div>
								-->
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="green_bg">
                                                <td>09:20-10:50</td>
                                                <td>
                                                    <p class="font_20 bold">Symposium 13 : Health Consequences of Obesity</p>
                                                    <!-- <p>
                                                        <span class="bold">Chairperson : Sung Rae Kim</span> (The
                                                        Catholic University of Korea, Korea) /
                                                        <span class="bold">JungHwan Kim</span> (Eulji University, Korea)
                                                    </p> -->
													<!-- [↓] 확정 시 까지 버튼 숨김 -->
													<!-- <button class="btn gray2_btn program_detail_btn">Preview </button> -->
                                                </td>
                                            </tr>
											<tr>
												<td colspan="2" class="program_detail_td">
													will be updated.
												</td>
											</tr>
                                            <tr>
                                                <td colspan="2" class="on">
                                                    <div>
                                                        <table class="c_table detail_table padding_0">
                                                            <colgroup>
                                                                <col class="col_date">
                                                                <col>
                                                            </colgroup>
                                                            <tbody>
                                                                <tr>
                                                                    <td>09:20-09:45</td>
                                                                    <td class="bold">
                                                                        MAFLD and NAFLD in the Prediction of Incident Chronic Kidney Disease
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Sang-Man Jin</p>(Sungkyunkwan University, Republic of Korea)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>09:45-10:10</td>
                                                                    <td class="bold">
                                                                        MAFLD versus NAFLD and the Risk of Cardiovascular Disease
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Ming-Hua Zheng</p>(Wenzhou Medical University, China)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>10:10-10:35</td>
                                                                    <td class="bold">
                                                                        Determinants of the Prognosis of NAFLD
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <!-- <p class="bold">Erika B. Parente</p>(University
                                                                        of Helsinki, Brazil) -->
																		<p class="bold">Bo Kyung Koo</p>(Seoul National University, Republic of Korea)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <!-- <td rowspan="2">10:20-10:50</td> -->
                                                                    <td>10:35-10:50</td>
                                                                    <!-- <td rowspan="2" class="bold">Panel Discussion</td> -->
                                                                    <td class="bold">Panel Discussion</td>
                                                                    <td>
                                                                        <!-- <p class="bold">Jun Hwa Hong</p>(Eulji
                                                                        University, Korea) -->
                                                                    </td>
                                                                </tr>
                                                                <!-- <tr>
                                                                    <td>
                                                                        <p class="bold">Yun Kyung Cho</p>(University of
                                                                        Ulsan, Korea)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>10:50-11:00</td>
                                                                    <td class="bold" colspan="2">
                                                                        Break
                                                                    </td>
                                                                </tr> -->
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
							<li name="break" class="border_bottom_70">
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="light_gray_bg">
                                                <td>10:50-11:00</td>
                                                <td>
                                                    <p class="font_20 bold">Break</p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                            <li name="keynote_lecture_2">
								<!--
                                <div class="clearfix2 caption">
                                    <span>Sep.9(Sat)</span>
                                    <span>Room1(3F)</span>
                                </div>
								-->
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="pink_bg">
                                                <td>11:00-11:40</td>
                                                <td>
                                                    <p class="font_20 bold">Keynote Lecture 2</p>
                                                    <!-- <p><span class="bold">Chairperson : Jeong-Taek Woo</span> (Kyung Hee
                                                        University, Korea)</p> -->
													<!-- [↓] 확정 시 까지 버튼 숨김 -->
													<!-- <button class="btn gray2_btn program_detail_btn">Preview </button> -->
                                                </td>
                                            </tr>
											<tr>
												<td colspan="2" class="program_detail_td">
													will be updated.
												</td>
											</tr>
                                            <tr>
                                                <td colspan="2" class="on">
                                                    <div>
                                                        <table class="c_table detail_table padding_0">
                                                            <colgroup>
                                                                <col class="col_date">
                                                                <col>
                                                            </colgroup>
                                                            <tbody>
                                                                <tr>
                                                                    <td>11:00-11:30</td>
                                                                    <td class="bold">
                                                                        <!-- Chrono-nutrition: Time Restricted Eating to
                                                                        Improve Metabolic Health -->TBD
                                                                    </td>
                                                                    <td class="text_r">
                                                                       <p class="bold">Jae Myoung Suh</p>(KAIST, Republic of Korea)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>11:30-11:40</td>
                                                                    <td class="bold">
                                                                        <!-- Chrono-nutrition: Time Restricted Eating to
                                                                        Improve Metabolic Health -->Q&A
                                                                    </td>
                                                                    <td>
                                                                       <p class="bold"></p>
                                                                    </td>
                                                                </tr>
																<!--
																<tr>
                                                                    <td>11:40-11:50</td>
                                                                    <td class="bold" colspan="2">
                                                                        Break
                                                                    </td>
                                                                </tr>
																-->
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
							<li name="break" class="border_bottom_70">
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="light_gray_bg">
                                                <td>11:40-11:50</td>
                                                <td>
                                                    <p class="font_20 bold">Break</p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                            <li name="luncheon_symposium_4">
								<!--
                                <div class="clearfix2 caption">
                                    <span>Sep.9(Sat)</span>
                                    <span>Room1(3F)</span>
                                </div>
								-->
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="sky_bg">
                                                <td>11:50-12:50</td>
                                                <td>
                                                    <p class="font_20 bold">Luncheon Symposium 4</p>
                                                   <!--  <p><span class="bold">Chairperson : Hyun Ho Shin</span> (Asan
                                                        Chungmu Hospital, Korea)</p> -->
													<!-- [↓] 확정 시 까지 버튼 숨김 -->
													<!-- <button class="btn gray2_btn program_detail_btn">Preview </button> -->
                                                </td>
                                            </tr>
											<tr>
												<td colspan="2" class="program_detail_td">
													will be updated.
												</td>
											</tr>
                                            <tr>
                                                <td colspan="2" class="on">
                                                    <div>
                                                        <table class="c_table detail_table padding_0">
                                                            <colgroup>
                                                                <col class="col_date">
                                                                <col>
                                                            </colgroup>
                                                            <tbody>
                                                                <tr>
                                                                    <td>11:50-12:50</td>
                                                                    <td class="bold">
                                                                        <!-- Phentermine/Topiramate Extended Release for the
                                                                        Treatment of Obesity
                                                                        : A Randomized, Placebo-Controlled Trial -->TBD
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Sung Hoon Yu</p>(Hanyang University, Republic of Korea)
                                                                    </td>
                                                                </tr>
																<!--
                                                                <tr>
                                                                    <td>12:50-13:50</td>
                                                                    <td class="bold" colspan="2">
                                                                        Break
                                                                    </td>
                                                                </tr>
																-->
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
							<li name="break" class="border_bottom_70">
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="light_gray_bg">
                                                <td>12:50-13:50</td>
                                                <td>
                                                    <p class="font_20 bold">Break</p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                            <!-- <li name="poster_exhibition_d3">
                                <div class="clearfix2 caption">
                                    <span>Sep.9(Sat)</span>
                                </div>
                                <div class="table_wrap detail_table_common x_scroll border_bottom_70">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="green_bg">
                                                <td>12:50-13:50</td>
                                                <td>
                                                    <p class="font_20 bold mb0">Poster Exhibition</p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li> -->
                            <li name="keynote_lecture_3">
								<!--
                                <div class="clearfix2 caption">
                                    <span>Sep.9(Sat)</span>
                                    <span>Room1(3F)</span>
                                </div>
								-->
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="pink_bg">
                                                <td>13:50-14:30</td>
                                                <td>
                                                    <p class="font_20 bold">Keynote Lecture 3</p>
                                                    <!-- <p><span class="bold">Chairperson : Hye Soon Park</span> (University of Ulsan, Korea)</p> -->
													<!-- [↓] 확정 시 까지 버튼 숨김 -->
													<!-- <button class="btn gray2_btn program_detail_btn">Preview </button> -->
                                                </td>
                                            </tr>
											<tr>
												<td colspan="2" class="program_detail_td">
													will be updated.
												</td>
											</tr>
                                            <tr>
                                                <td colspan="2" class="on">
                                                    <div>
                                                        <table class="c_table detail_table padding_0">
                                                            <colgroup>
                                                                <col class="col_date">
                                                                <col>
                                                            </colgroup>
                                                            <tbody>
                                                                <tr>
                                                                    <td>13:50-14:20</td>
                                                                    <td class="bold">Brainstem Circuits that Control Ingestion</td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Zachary Knight</p>(University of California, San Francisco, USA)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>14:20-14:30</td>
                                                                    <td class="bold">Q&A</td>
                                                                    <td class="text_r"></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                            <li name="keynote_lecture_4">
								<!--
                                <div class="clearfix2 caption">
                                    <span>Sep.9(Sat)</span>
                                    <span>Room1(3F)</span>
                                </div>
								-->
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="pink_bg">
                                                <td>14:30-15:10</td>
                                                <td>
                                                    <p class="font_20 bold">Keynote Lecture 4</p>
                                                    <!-- <p><span class="bold">Chairperson : Kwan Woo Lee</span> (Ajou University, Korea)</p> -->
													<!-- [↓] 확정 시 까지 버튼 숨김 -->
													<!-- <button class="btn gray2_btn program_detail_btn">Preview </button> -->
                                                </td>
                                            </tr>
											<tr>
												<td colspan="2" class="program_detail_td">
													will be updated.
												</td>
											</tr>
                                            <tr>
                                                <td colspan="2" class="on">
                                                    <div>
                                                        <table class="c_table detail_table padding_0">
                                                            <colgroup>
                                                                <col class="col_date">
                                                                <col>
                                                            </colgroup>
                                                            <tbody>
                                                                <tr>
                                                                    <td>14:30-15:00</td>
                                                                    <td class="bold">
                                                                        National Obesity Strategy in Korea: Past, Present and Future
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Jae-Heon Kang</p>(Sungkyunkwan University, Republic of Korea)
                                                                    </td>
                                                                </tr>
																<tr>
                                                                    <td>15:00-15:10</td>
                                                                    <td class="bold">Q&A</td>
                                                                    <td class="text_r"></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
							<li name="break" class="border_bottom_70">
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="light_gray_bg">
                                                <td>15:10-15:20</td>
                                                <td>
                                                    <p class="font_20 bold">Break</p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                            <li name="symposium_17">
								<!--
                                <div class="clearfix2 caption">
                                    <span>Sep.9(Sat)</span>
                                    <span>Room1(3F)</span>
                                </div>
								-->
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="green_bg">
                                                <td>15:20-16:50</td>
                                                <td>
                                                    <p class="font_20 bold">Symposium 17 : The Power of Synergy: Optimizing Anti-obesity Treatment with Combination Pharmacotherapy</p>
                                                    <!-- <p>
                                                        <span class="bold">Chairperson : Soon Jib Yoo</span> (The
                                                        Catholic University of Korea, Korea) /
                                                        <span class="bold">Sang Woo Oh</span> (Dongguk University,
                                                        Korea)
                                                    </p> -->
													<!-- [↓] 확정 시 까지 버튼 숨김 -->
													<!-- <button class="btn gray2_btn program_detail_btn">Preview </button> -->
                                                </td>
                                            </tr>
											<tr>
												<td colspan="2" class="program_detail_td">
													will be updated.
												</td>
											</tr>
                                            <tr>
                                                <td colspan="2" class="on">
                                                    <div>
                                                        <table class="c_table detail_table padding_0">
                                                            <colgroup>
                                                                <col class="col_date">
                                                                <col>
                                                            </colgroup>
                                                            <tbody>
                                                                <tr>
                                                                    <td>15:20-15:45</td>
                                                                    <td class="bold">
                                                                        Unveiling the New Wave: A Comprehensive Overview of Emerging Anti-Obesity Medications
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Jang Won Son</p>(The Catholic University of Korea, Republic of Korea)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>15:45-16:10</td>
                                                                    <td class="bold">
                                                                        <!-- Upcoming New Combinations of Anti-Obesity Drugs -->
																		TBD
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Jennifer Strande</p>(AMGEN, USA)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>16:10-16:35</td>
                                                                    <td class="bold">TBD</td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Se Hee Min</p>(Univeristy of Ulsan, Republic of Korea)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>16:35-16:50</td>
                                                                    <td class="bold">Panel Discussion</td>
                                                                    <td class="text_r"></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
							<li name="break" class="border_bottom_70">
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="light_gray_bg">
                                                <td>16:50-17:00</td>
                                                <td>
                                                    <p class="font_20 bold">Break</p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                            <li name="plenary_lecture_4">
								<!--
                                <div class="clearfix2 caption">
                                    <span>Sep.9(Sat)</span>
                                    <span>Room1(3F)</span>
                                </div>
								-->
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="pink_bg">
                                                <td>17:00-17:40</td>
                                                <td>
                                                    <p class="font_20 bold">Plenary Lecture 4</p>
                                                    <!-- <p><span class="bold">Chairperson : Moon-Kyu Lee</span> (Eulji University, Korea)</p> -->
													<!-- [↓] 확정 시 까지 버튼 숨김 -->
													<!-- <button class="btn gray2_btn program_detail_btn">Preview </button> -->
                                                </td>
                                            </tr>
											<tr>
												<td colspan="2" class="program_detail_td">
													will be updated.
												</td>
											</tr>
                                            <tr>
                                                <td colspan="2" class="on">
                                                    <div>
                                                        <table class="c_table detail_table padding_0">
                                                            <colgroup>
                                                                <col class="col_date">
                                                                <col>
                                                            </colgroup>
                                                            <tbody>
                                                                <tr>
                                                                    <td>17:00-17:30</td>
                                                                    <td class="bold">
                                                                        <!-- Relationships of SGLT-2 Treatment with Body
                                                                        Weight -->TBD
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">John Wilding</p>(University of Liverpool, UK)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>17:30-17:40</td>
                                                                    <td class="bold">Q&A</td>
																	<td class="text_r"></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
							<li name="closing_ceremony">
								<!--
                                <div class="clearfix2 caption">
                                    <span>Sep.9(Sat)</span>
                                    <span>Room1(3F)</span>
                                </div>
								-->
                                <div class="table_wrap detail_table_common x_scroll border_bottom_70">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="yellow_bg">
                                                <td>17:40-18:00</td>
                                                <td>
                                                    <p class="font_20 bold mb0">Closing Ceremony</p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="tab_cont">
                        <ul class="program_detail_ul">
                            <li name="breakfast_symposium_5">
								<!--
                                <div class="clearfix2 caption">
                                    <span>Sep.9(Sat)</span>
                                    <span>Room2(3F)</span>
                                </div>
								-->
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="sky_bg">
                                                <td>07:30-08:20</td>
                                                <td>
                                                    <p class="font_20 bold">Breakfast Symposium 5</p>
                                                    <!-- <p>
                                                        <span class="bold">Chairperson : Dae Jung Kim</span> (Ajou
                                                        University, Korea)
                                                    </p> -->
													<!-- [↓] 확정 시 까지 버튼 숨김 -->
													<!-- <button class="btn gray2_btn program_detail_btn">Preview </button> -->
                                                </td>
                                            </tr>
											<tr>
												<td colspan="2" class="program_detail_td">
													will be updated.
												</td>
											</tr>
                                            <tr>
                                                <td colspan="2">
                                                    <div>
                                                        <table class="c_table detail_table padding_0">
                                                            <colgroup>
                                                                <col class="col_date">
                                                                <col>
                                                            </colgroup>
                                                            <tbody>
                                                                <tr>
                                                                    <td>07:30-08:20</td>
                                                                    <td class="bold">
                                                                        <!-- Early & Lower for Longer ; A to Z about Treating
                                                                        Dyslipidemia in Diabetes Patients -->
                                                                    </td>
                                                                    <td>
                                                                        <!-- <p class="bold">Su Jin Jeong</p>(Sejong General
                                                                        Hospital, Korea) -->
                                                                    </td>
                                                                </tr>
																<!--
                                                                <tr>
                                                                    <td>08:20-08:30</td>
                                                                    <td class="bold" colspan="2">
                                                                        Break
                                                                    </td>
                                                                </tr>
																-->
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
							<li name="break" class="border_bottom_70">
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="light_gray_bg">
                                                <td>08:20-08:30</td>
                                                <td>
                                                    <p class="font_20 bold">Break</p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                            <li name="plenary_lecture_3_2">
								<!--
                                <div class="clearfix2 caption">
                                    <span>Sep.9(Sat)</span>
                                    <span>Room2(3F)</span>
                                </div>
								-->
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="pink_bg">
                                                <td>08:30-09:10</td>
                                                <td>
                                                    <p class="font_20 bold">Plenary Lecture 3</p>
                                                    <!-- <p><span class="bold">Chairperson : Kwang-Won Kim</span> (Gachon University, Korea)</p> -->
													<!-- [↓] 확정 시 까지 버튼 숨김 -->
													<!-- <button class="btn gray2_btn program_detail_btn">Preview </button> -->
                                                </td>
                                            </tr>
											<tr>
												<td colspan="2" class="program_detail_td">
													will be updated.
												</td>
											</tr>
                                            <tr>
                                                <td colspan="2" class="on">
                                                    <div>
                                                        <table class="c_table detail_table padding_0">
                                                            <colgroup>
                                                                <col class="col_date">
                                                                <col>
                                                            </colgroup>
                                                            <tbody>
                                                                <tr>
                                                                    <td>08:30-09:00</td>
                                                                    <td class="bold">
                                                                        The Role of Hunger-promoting Hypothalamic Neurons in Obesity Therapeutics
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Tamas Horvath</p>(Yale University, USA)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>09:00-09:10</td>
                                                                    <td class="bold" colspan="2">
                                                                        Q&A
                                                                    </td>
                                                                </tr>
																<!--
                                                                <tr>
                                                                    <td>09:10-09:20</td>
                                                                    <td class="bold" colspan="2">
                                                                        Break
                                                                    </td>
                                                                </tr>
																-->
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
							<li name="break" class="border_bottom_70">
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="light_gray_bg">
                                                <td>09:10-09:20</td>
                                                <td>
                                                    <p class="font_20 bold">Break</p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                            <li name="symposium_14">
								<!--
                                <div class="clearfix2 caption">
                                    <span>Sep.9(Sat)</span>
                                    <span>Room2(3F)</span>
                                </div>
								-->
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="green_bg">
                                                <td>09:20-10:50</td>
                                                <td>
                                                    <p class="font_20 bold">Symposium 14 : Promoting Healthy Muscle and Liver Metabolism</p>
                                                    <!-- <p>
                                                        <span class="bold">Chairperson : Il-Young Kim</span> (Gachon University, Korea) /
                                                        <span class="bold">Sang-Yong Kim</span> (Chosun University,
                                                        Korea)
                                                    </p> -->
													<!-- [↓] 확정 시 까지 버튼 숨김 -->
													<!-- <button class="btn gray2_btn program_detail_btn">Preview </button> -->
                                                </td>
                                            </tr>
											<tr>
												<td colspan="2" class="program_detail_td">
													will be updated.
												</td>
											</tr>
                                            <tr>
                                                <td colspan="2" class="on">
                                                    <div>
                                                        <table class="c_table detail_table padding_0">
                                                            <colgroup>
                                                                <col class="col_date">
                                                                <col>
                                                            </colgroup>
                                                            <tbody>
                                                                <tr>
                                                                    <td>09:20-09:45</td>
                                                                    <td class="bold">
                                                                        The Role of Muscle in Weight Management
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Robert R. Wolfe</p>(University of Arkansas for Medical Sciences, USA)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>09:45-10:10</td>
                                                                    <td class="bold">
                                                                        TBD
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Melanie Cree-Green</p>(University of Colorado Anschutz, USA)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>10:10-10:35</td>
                                                                    <td class="bold">
                                                                        Roles of Dietary Essential Amino Acids and Exercise for Muscle and Metabolic Health
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Il-Young Kim</p>(Gachon University, Republic of Korea)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <!-- <td rowspan="2">10:30-10:50</td> -->
                                                                    <td>10:35-10:50</td>
                                                                    <!-- <td rowspan="2" class="bold">Panel Discussion</td> -->
                                                                    <td class="bold">Panel Discussion</td>
                                                                    <td>
                                                                        <!-- <p class="bold">Tae-Nyun Kim</p> (Inje
                                                                        University, Korea) -->
                                                                    </td>
                                                                </tr>
                                                                <!-- <tr>
                                                                    <td>
                                                                        <p class="bold">Jae Myoung Suh</p> (KAIST, USA)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>10:50-11:00</td>
                                                                    <td colspan="2" class="bold">
                                                                        Break
                                                                    </td>
                                                                </tr> -->
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
							<li name="break" class="border_bottom_70">
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="light_gray_bg">
                                                <td>10:50-11:00</td>
                                                <td>
                                                    <p class="font_20 bold">Break</p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                            <li name="keynote_lecture_2_2">
								<!--
                                <div class="clearfix2 caption">
                                    <span>Sep.9(Sat)</span>
                                    <span>Room2(3F)</span>
                                </div>
								-->
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="pink_bg">
                                                <td>11:00-11:40</td>
                                                <td>
                                                    <p class="font_20 bold">Keynote Lecture 2</p>
                                                    <!-- <p>
                                                        <span class="bold">Chairperson : Jeong-Taek Woo</span> (Kyung Hee University, Korea)
                                                    </p> -->
													<!-- [↓] 확정 시 까지 버튼 숨김 -->
													<!-- <button class="btn gray2_btn program_detail_btn">Preview </button> -->
                                                </td>
                                            </tr>
											<tr>
												<td colspan="2" class="program_detail_td">
													will be updated.
												</td>
											</tr>
                                            <tr>
                                                <td colspan="2" class="on">
                                                    <div>
                                                        <table class="c_table detail_table padding_0">
                                                            <colgroup>
                                                                <col class="col_date">
                                                                <col>
                                                            </colgroup>
                                                            <tbody>
                                                                <tr>
                                                                    <td>11:00-11:30</td>
                                                                    <td class="bold">
                                                                        <!-- Chrono-nutrition: Time Restricted Eating to
                                                                        Improve Metabolic Health -->TBD
                                                                    </td>
                                                                    <td class="text_r">
                                                                       <p class="bold">Jae Myoung Suh</p>(KAIST, Republic of Korea)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>11:30-11:40</td>
                                                                    <td class="bold">
                                                                        <!-- Chrono-nutrition: Time Restricted Eating to
                                                                        Improve Metabolic Health -->Q&A
                                                                    </td>
                                                                    <td>
                                                                       <p class="bold"></p>
                                                                    </td>
                                                                </tr>
																<!--
                                                                <tr>
                                                                    <td>11:40-11:50</td>
                                                                    <td class="bold" colspan="2">
                                                                        Break
                                                                    </td>
                                                                </tr>
																-->
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
							<li name="break" class="border_bottom_70">
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="light_gray_bg">
                                                <td>11:40-11:50</td>
                                                <td>
                                                    <p class="font_20 bold">Break</p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                            <li name="luncheon_symposium_5">
								<!--
                                <div class="clearfix2 caption">
                                    <span>Sep.9(Sat)</span>
                                    <span>Room2(3F)</span>
                                </div>
								-->
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="sky_bg">
                                                <td>11:50-12:50</td>
                                                <td>
                                                    <p class="font_20 bold">Luncheon Symposium 5</p>
                                                    <!-- <p><span class="bold">Chairperson : Sang Yeoup Lee</span> (Pusan National University, Korea)</p> -->
													<!-- [↓] 확정 시 까지 버튼 숨김 -->
													<!-- <button class="btn gray2_btn program_detail_btn">Preview </button> -->
                                                </td>
                                            </tr>
											<tr>
												<td colspan="2" class="program_detail_td">
													will be updated.
												</td>
											</tr>
                                            <tr>
                                                <td colspan="2">
                                                    <div>
                                                        <table class="c_table detail_table padding_0">
                                                            <colgroup>
                                                                <col class="col_date">
                                                                <col>
                                                            </colgroup>
                                                            <tbody>
                                                                <tr>
                                                                    <td>11:50-12:50</td>
                                                                    <td class="bold">
                                                                        <!-- New Paradigm of Glycemic Variability: EVERGREEN
                                                                        Study -->
                                                                    </td>
                                                                    <td>
                                                                        <!-- <p class="bold">Yun Kyung Cho</p>(University of
                                                                        Ulsan, Korea) -->
                                                                    </td>
                                                                </tr>
																<!--
																<tr>
                                                                    <td>12:50-13:50</td>
                                                                    <td class="bold" colspan="2">
                                                                        Break
                                                                    </td>
                                                                </tr>
																-->
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
							<li name="break" class="border_bottom_70">
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="light_gray_bg">
                                                <td>12:50-13:50</td>
                                                <td>
                                                    <p class="font_20 bold">Break</p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                            <!-- <li>
                                <div class="clearfix2 caption">
                                    <span>Sep.9(Sat)</span>
                                </div>
                                <div class="table_wrap detail_table_common x_scroll border_bottom_70">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="green_bg">
                                                <td>12:50-13:50</td>
                                                <td>
                                                    <p class="font_20 bold mb0">Poster Exhibition</p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li> -->

                            <li name="keynote_lecture_3_2">
								<!--
                                <div class="clearfix2 caption">
                                    <span>Sep.9(Sat)</span>
                                    <span>Room2(3F)</span>
                                </div>
								-->
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="pink_bg">
                                                <td>13:50-14:30</td>
                                                <td>
                                                    <p class="font_20 bold">Keynote Lecture 3</p>
                                                    <!-- <p>
                                                        <span class="bold">Chairperson : Hye Soon Park</span>
                                                        (University of Ulsan, Korea)
                                                    </p> -->
													<!-- [↓] 확정 시 까지 버튼 숨김 -->
													<!-- <button class="btn gray2_btn program_detail_btn">Preview </button> -->
                                                </td>
                                            </tr>
											<tr>
												<td colspan="2" class="program_detail_td">
													will be updated.
												</td>
											</tr>
                                            <tr>
                                                <td colspan="2" class="on">
                                                    <div>
                                                        <table class="c_table detail_table padding_0">
                                                            <colgroup>
                                                                <col class="col_date">
                                                                <col>
                                                            </colgroup>
                                                            <tbody>
                                                                <tr>
                                                                    <td>13:50-14:20</td>
                                                                    <td class="bold">Brainstem Circuits that Control Ingestion</td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Zachary Knight</p>(University of California, San Francisco, USA)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>14:20-14:30</td>
                                                                    <td class="bold">Q&A</td>
                                                                    <td class="text_r"></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                            <li name="keynote_lecture_4_2">
								<!--
                                <div class="clearfix2 caption">
                                    <span>Sep.9(Sat)</span>
                                    <span>Room2(3F)</span>
                                </div>
								-->
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="pink_bg">
                                                <td>14:30-15:10</td>
                                                <td>
                                                    <p class="font_20 bold">Keynote Lecture 4</p>
                                                    <!-- <p>
                                                        <span class="bold">Chairperson : Kwan Woo Lee</span> (Ajou
                                                        University, Korea)
                                                    </p> -->
													<!-- [↓] 확정 시 까지 버튼 숨김 -->
													<!-- <button class="btn gray2_btn program_detail_btn">Preview </button> -->
                                                </td>
                                            </tr>
											<tr>
												<td colspan="2" class="program_detail_td">
													will be updated.
												</td>
											</tr>
                                            <tr>
                                                <td colspan="2" class="on">
                                                    <div>
                                                        <table class="c_table detail_table padding_0">
                                                            <colgroup>
                                                                <col class="col_date">
                                                                <col>
                                                            </colgroup>
                                                            <tbody>
                                                                <tr>
                                                                    <td>14:30-15:00</td>
                                                                    <td class="bold">
                                                                        National Obesity Strategy in Korea: Past, Present and Future
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Jae-Heon Kang</p>(Sungkyunkwan University, Republic of Korea)
                                                                    </td>
                                                                </tr>
																<tr>
                                                                    <td>15:00-15:10</td>
                                                                    <td class="bold">Q&A</td>
                                                                    <td class="text_r"></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
							<li name="break" class="border_bottom_70">
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="light_gray_bg">
                                                <td>15:10-15:20</td>
                                                <td>
                                                    <p class="font_20 bold">Break</p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                            <li name="symposium_18">
								<!--
                                <div class="clearfix2 caption">
                                    <span>Sep.9(Sat)</span>
                                    <span>Room2(3F)</span>
                                </div>
								-->
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="green_bg">
                                                <td>15:20-16:50</td>
                                                <td>
                                                    <p class="font_20 bold">Symposium 18 : Neuroscience</p>
                                                    <!-- <p>
                                                        <span class="bold">Chairperson : Sang Youl Rhee </span> (Kyung Hee University, Korea) /
                                                        <span class="bold">Hyuk-Sang Kwon</span> (The Catholic
                                                        University of Korea, Korea)
                                                    </p> -->
													<!-- [↓] 확정 시 까지 버튼 숨김 -->
													<!-- <button class="btn gray2_btn program_detail_btn">Preview </button> -->
                                                </td>
                                            </tr>
											<tr>
												<td colspan="2" class="program_detail_td">
													will be updated.
												</td>
											</tr>
                                            <tr>
                                                <td colspan="2" class="on">
                                                    <div>
                                                        <table class="c_table detail_table padding_0">
                                                            <colgroup>
                                                                <col class="col_date">
                                                                <col>
                                                            </colgroup>
                                                            <tbody>
                                                                <tr>
                                                                    <td>15:20-15:45</td>
                                                                    <td class="bold">
                                                                        Mapping Appetite Circuits with Molecular Connectomics
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Michael Krashes</p>(National Institute of Diabetes and Digestive and Kidney Diseases(NIDDK), USA)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>15:45-16:10</td>
                                                                    <td class="bold">
                                                                        Feeding Regulation by Tuberal Nucleus Somatostatin Neurons
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Yu Fu</p>
                                                                        (Institute of Molecular and Cell Biology (IMCB), Singapore)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>16:10-16:35</td>
                                                                    <td class="bold">
                                                                        TBD
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Changjoon Lee</p>(Institute for Basic Science (IBS), Republic of Korea)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>16:35-16:50</td>
                                                                    <td class="bold">
                                                                        Panel Discussion
                                                                    </td>
                                                                    <td>
                                                                        <!-- <p class="bold">Sang Youl Rhee</p>(Kyung Hee
                                                                        University, Korea)
                                                                        <p class="bold">Byoungduck Han</p>(Korea
                                                                        University, Korea) -->
                                                                    </td>
                                                                </tr>
                                                                <!-- <tr>
                                                                    <td>
                                                                        <p class="bold">Byoungduck Han</p>(Korea
                                                                        University, Korea)
                                                                    </td>
                                                                </tr>
																<tr>
                                                                    <td>17:30-17:40</td>
                                                                    <td class="bold" colspan="2">
                                                                        Break
                                                                    </td>
                                                                </tr> -->
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
							<li name="break" class="border_bottom_70">
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="light_gray_bg">
                                                <td>15:10-15:20</td>
                                                <td>
                                                    <p class="font_20 bold">Break</p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                            <li name="plenary_lecture_4_2">
								<!--
                                <div class="clearfix2 caption">
                                    <span>Sep.9(Sat)</span>
                                    <span>Room2(3F)</span>
                                </div>
								-->
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="pink_bg">
                                                <td>17:00-17:40</td>
                                                <td>
                                                    <p class="font_20 bold">Plenary Lecture 4</p>
                                                    <!-- <p><span class="bold">Chairperson : Moon-Kyu Lee</span> (Eulji University, Korea)</p> -->
													<!-- [↓] 확정 시 까지 버튼 숨김 -->
													<!-- <button class="btn gray2_btn program_detail_btn">Preview </button> -->
                                                </td>
                                            </tr>
											<tr>
												<td colspan="2" class="program_detail_td">
													will be updated.
												</td>
											</tr>
                                            <tr>
                                                <td colspan="2" class="on">
                                                    <div>
                                                        <table class="c_table detail_table padding_0">
                                                            <colgroup>
                                                                <col class="col_date">
                                                                <col>
                                                            </colgroup>
                                                            <tbody>
                                                                <tr>
                                                                    <td>17:00-17:30</td>
                                                                    <td class="bold">
                                                                        <!-- Relationships of SGLT-2 Treatment with Body
                                                                        Weight -->TBD
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">John Wilding</p>(University of Liverpool, UK)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>17:30-17:40</td>
                                                                    <td class="bold">Q&A</td>
																	<td class="text_r"></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
							<li name="closing_ceremony_2">
								<!--
                                <div class="clearfix2 caption">
                                    <span>Sep.9(Sat)</span>
                                    <span>Room2(3F)</span>
                                </div>
								-->
                                <div class="table_wrap detail_table_common x_scroll border_bottom_70">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="yellow_bg">
                                                <td>17:40-18:00</td>
                                                <td>
                                                    <p class="font_20 bold mb0">Closing Ceremony</p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="tab_cont">
                        <ul class="program_detail_ul">
							<li name="breakfast_symposium_6">
								<!--
                                <div class="clearfix2 caption">
                                    <span>Sep.9(Sat)</span>
                                    <span>Room2(3F)</span>
                                </div>
								-->
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="sky_bg">
                                                <td>07:30-08:20</td>
                                                <td>
                                                    <p class="font_20 bold">Breakfast Symposium 6</p>
                                                    <!-- <p>
                                                        <span class="bold">Chairperson : Dae Jung Kim</span> (Ajou
                                                        University, Korea)
                                                    </p> -->
													<!-- [↓] 확정 시 까지 버튼 숨김 -->
													<!-- <button class="btn gray2_btn program_detail_btn">Preview </button> -->
                                                </td>
                                            </tr>
											<tr>
												<td colspan="2" class="program_detail_td">
													will be updated.
												</td>
											</tr>
                                            <tr>
                                                <td colspan="2" class="on">
                                                    <div>
                                                        <table class="c_table detail_table padding_0">
                                                            <colgroup>
                                                                <col class="col_date">
                                                                <col>
                                                            </colgroup>
                                                            <tbody>
                                                                <tr>
                                                                    <td>07:30-08:20</td>
                                                                    <td class="bold">
                                                                        <!-- Early & Lower for Longer ; A to Z about Treating
                                                                        Dyslipidemia in Diabetes Patients -->TBD
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Yeoree Yang</p>(The Catholic University of Korea, Republic of Korea)
                                                                    </td>
                                                                </tr>
																<!--
                                                                <tr>
                                                                    <td>08:20-08:30</td>
                                                                    <td class="bold" colspan="2">
                                                                        Break
                                                                    </td>
                                                                </tr>
																-->
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
							<li name="break" class="border_bottom_70">
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="light_gray_bg">
                                                <td>08:20-08:30</td>
                                                <td>
                                                    <p class="font_20 bold">Break</p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                            <li name="plenary_lecture_3_3">
								<!--
                                <div class="clearfix2 caption">
                                    <span>Sep.9(Sat)</span>
                                    <span>Room3(3F)</span>
                                </div>
								-->
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="pink_bg">
                                                <td>08:30-09:10</td>
                                                <td>
                                                    <p class="font_20 bold">Plenary Lecture 3</p>
                                                    <!-- <p><span class="bold">Chairperson : Kwang-Won Kim</span> (Gachon University, Korea)</p> -->
													<!-- [↓] 확정 시 까지 버튼 숨김 -->
													<!-- <button class="btn gray2_btn program_detail_btn">Preview </button> -->
                                                </td>
                                            </tr>
											<tr>
												<td colspan="2" class="program_detail_td">
													will be updated.
												</td>
											</tr>
                                            <tr>
                                                <td colspan="2" class="on">
                                                    <div>
                                                        <table class="c_table detail_table padding_0">
                                                            <colgroup>
                                                                <col class="col_date">
                                                                <col>
                                                            </colgroup>
                                                            <tbody>
                                                                <tr>
                                                                    <td>08:30-09:00</td>
                                                                    <td class="bold">
                                                                        The Role of Hunger-promoting Hypothalamic Neurons in Obesity Therapeutics
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Tamas Horvath</p>(Yale University, USA)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>09:00-09:10</td>
                                                                    <td class="bold" colspan="2">
                                                                        Q&A
                                                                    </td>
                                                                </tr>
																<!--
                                                                <tr>
                                                                    <td>09:10-09:20</td>
                                                                    <td class="bold" colspan="2">
                                                                        Break
                                                                    </td>
                                                                </tr>
																-->
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
							<li name="break" class="border_bottom_70">
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="light_gray_bg">
                                                <td>09:10-09:20</td>
                                                <td>
                                                    <p class="font_20 bold">Break</p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                            <li name="symposium_15">
								<!--
                                <div class="clearfix2 caption">
                                    <span>Sep.9(Sat)</span>
                                    <span>Room3(3F)</span>
                                </div>
								-->
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="green_bg">
                                                <td>09:20-10:50</td>
                                                <td>
                                                    <p class="font_20 bold">Symposium 15 : Community-based Nutrition Interventions and Approaches for Vulnerable Groups</p>
                                                   <!--  <p>
                                                        <span class="bold">Chairperson : Oran Kwon</span> (Ehwa Womans University, Korea) /
                                                        <span class="bold">Young Min Cho</span> (Seoul National
                                                        University, Korea)
                                                    </p> -->
													<!-- [↓] 확정 시 까지 버튼 숨김 -->
													<!-- <button class="btn gray2_btn program_detail_btn">Preview </button> -->
                                                </td>
                                            </tr>
											<tr>
												<td colspan="2" class="program_detail_td">
													will be updated.
												</td>
											</tr>
                                            <tr>
                                                <td colspan="2" class="on">
                                                    <div>
                                                        <table class="c_table detail_table padding_0">
                                                            <colgroup>
                                                                <col class="col_date">
                                                                <col>
                                                            </colgroup>
                                                            <tbody>
                                                                <tr>
                                                                    <td>09:20-09:45</td>
                                                                    <td class="bold">
                                                                        Integrating Frailty and Malnutrition Screening into Community Care for Older Adults and Their Caregivers
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Shirley Y. Chao</p>(Massachusetts Executive Office of Elder Affairs, USA)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>09:45-10:10</td>
                                                                    <td class="bold">
                                                                        <!-- Community-based Strategies to Decrease Health Disparities and Improve Nutritional Status for US Low-income Population -->TBD
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Seung Eun Jung</p>(The University of Alabama. USA)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>10:10-10:35</td>
                                                                    <td class="bold">
                                                                        <!-- Nutrition Management Strategies for the Elderly and the Disabled in Social Welfare Facilities -->TBD
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Minsun Jeon</p>(Chungnam National University, Republic of Korea)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>10:35-10:50</td>
                                                                    <td class="bold">
                                                                        Panel Discussion
                                                                    </td>
                                                                    <td></td>
                                                                </tr>
																<!--
																<tr>
                                                                    <td>18:00-18:30</td>
                                                                    <td class="bold" colspan="2">
                                                                        Break
                                                                    </td>
                                                                </tr>
																-->
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
							<li name="break" class="border_bottom_70">
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="light_gray_bg">
                                                <td>10:50-11:00</td>
                                                <td>
                                                    <p class="font_20 bold">Break</p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                            <li name="keynote_lecture_2_3">
								<!--
                                <div class="clearfix2 caption">
                                    <span>Sep.9(Sat)</span>
                                    <span>Room3(3F)</span>
                                </div>
								-->
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="pink_bg">
                                                <td>11:00-11:40</td>
                                                <td>
                                                    <p class="font_20 bold">Keynote Lecture 2</p>
                                                   <!--  <p><span class="bold">Chairperson : Jeong-Taek Woo</span> (Kyung Hee University, Korea)</p> -->
												   <!-- [↓] 확정 시 까지 버튼 숨김 -->
													<!-- <button class="btn gray2_btn program_detail_btn">Preview </button> -->
                                                </td>
                                            </tr>
											<tr>
												<td colspan="2" class="program_detail_td">
													will be updated.
												</td>
											</tr>
                                            <tr>
                                                <td colspan="2" class="on">
                                                    <div>
                                                        <table class="c_table detail_table padding_0">
                                                            <colgroup>
                                                                <col class="col_date">
                                                                <col>
                                                            </colgroup>
                                                            <tbody>
                                                                <tr>
                                                                    <td>11:00-11:30</td>
                                                                    <td class="bold">
                                                                        <!-- Chrono-nutrition: Time Restricted Eating to
                                                                        Improve Metabolic Health -->TBD
                                                                    </td>
                                                                    <td class="text_r">
                                                                       <p class="bold">Jae Myoung Suh</p>(KAIST, Republic of Korea)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>11:30-11:40</td>
                                                                    <td class="bold">
                                                                        <!-- Chrono-nutrition: Time Restricted Eating to
                                                                        Improve Metabolic Health -->Q&A
                                                                    </td>
                                                                    <td class="text_r">
                                                                       <p class="bold"></p>
                                                                    </td>
                                                                </tr>
																<!--
                                                                <tr>
                                                                    <td>11:40-11:50</td>
                                                                    <td class="bold" colspan="2">
                                                                        Break
                                                                    </td>
                                                                </tr>
																-->
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
							<li name="break" class="border_bottom_70">
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="light_gray_bg">
                                                <td>11:40-11:50</td>
                                                <td>
                                                    <p class="font_20 bold">Break</p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                            <li name="luncheon_symposium_6">
								<!--
                                <div class="clearfix2 caption">
                                    <span>Sep.9(Sat)</span>
                                    <span>Room3(3F)</span>
                                </div>
								-->
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="sky_bg">
                                                <td>11:50-12:50</td>
                                                <td>
                                                    <p class="font_20 bold">Luncheon Symposium 6</p>
                                                    <!-- <p><span class="bold">Chairperson : Ga Eun Nam</span> (Korea University, Korea)</p> -->
													<!-- [↓] 확정 시 까지 버튼 숨김 -->
													<!-- <button class="btn gray2_btn program_detail_btn">Preview </button> -->
                                                </td>
                                            </tr>
											<tr>
												<td colspan="2" class="program_detail_td">
													will be updated.
												</td>
											</tr>
                                            <tr>
                                                <td colspan="2" class="on">
                                                    <div>
                                                        <table class="c_table detail_table padding_0">
                                                            <colgroup>
                                                                <col class="col_date">
                                                                <col>
                                                            </colgroup>
                                                            <tbody>
                                                                <tr>
                                                                    <td>11:50-12:50</td>
                                                                    <td class="bold">
                                                                        <!-- Utilizing CGM to Empower T2 DM Obese Patients
                                                                        For Better Glycemic Management -->TBD
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Sang Youl Rhee</p>(Kyung Hee University, Republic of Korea)
                                                                    </td>
                                                                </tr>
																<!--
																<tr>
                                                                    <td>12:50-13:50</td>
                                                                    <td class="bold" colspan="2">
                                                                        Break
                                                                    </td>
                                                                </tr>
																-->
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
							<li name="break" class="border_bottom_70">
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="light_gray_bg">
                                                <td>12:50-13:50</td>
                                                <td>
                                                    <p class="font_20 bold">Break</p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                            <!-- <li>
                                <div class="clearfix2 caption">
                                    <span>Sep.9(Sat)</span>
                                </div>
                                <div class="table_wrap detail_table_common x_scroll border_bottom_70">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="green_bg">
                                                <td>12:50-13:50</td>
                                                <td>
                                                    <p class="font_20 bold mb0">Poster Exhibition</p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li> -->
                            <li>
								<!--
                                <div class="clearfix2 caption">
                                    <span>Sep.9(Sat)</span>
                                    <span>Room3(3F)</span>
                                </div>
								-->
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="pink_bg">
                                                <td>13:50-14:30</td>
                                                <td>
                                                    <p class="font_20 bold">Keynote Lecture 3</p>
                                                    <!-- <p><span class="bold">Chairperson : Hye Soon Park</span> (University of Ulsan, Korea)</p> -->
													<!-- [↓] 확정 시 까지 버튼 숨김 -->
													<!-- <button class="btn gray2_btn program_detail_btn">Preview </button> -->
                                                </td>
                                            </tr>
											<tr>
												<td colspan="2" class="program_detail_td">
													will be updated.
												</td>
											</tr>
                                            <tr>
                                                <td colspan="2" class="on">
                                                    <div>
                                                        <table class="c_table detail_table padding_0">
                                                            <colgroup>
                                                                <col class="col_date">
                                                                <col>
                                                            </colgroup>
                                                            <tbody>
                                                                <tr>
                                                                    <td>13:50-14:20</td>
                                                                    <td class="bold">Brainstem Circuits that Control Ingestion</td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Zachary Knight</p>(University of California, San Francisco, USA)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>14:20-14:30</td>
                                                                    <td class="bold">Q&A</td>
                                                                    <td class="text_r"></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                            <li>
								<!--
                                <div class="clearfix2 caption">
                                    <span>Sep.9(Sat)</span>
                                    <span>Room3(3F)</span>
                                </div>
								-->
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="pink_bg">
                                                <td>14:30-15:10</td>
                                                <td>
                                                    <p class="font_20 bold">Keynote Lecture 4</p>
                                                    <!-- <p><span class="bold">Chairperson : Kwan Woo Lee</span> (Ajou University, Korea)</p> -->
													<!-- [↓] 확정 시 까지 버튼 숨김 -->
													<!-- <button class="btn gray2_btn program_detail_btn">Preview </button> -->
                                                </td>
                                            </tr>
											<tr>
												<td colspan="2" class="program_detail_td">
													will be updated.
												</td>
											</tr>
                                            <tr>
                                                <td colspan="2" class="on">
                                                    <div>
                                                        <table class="c_table detail_table padding_0">
                                                            <colgroup>
                                                                <col class="col_date">
                                                                <col>
                                                            </colgroup>
                                                            <tbody>
                                                                <tr>
                                                                    <td>14:30-15:00</td>
                                                                    <td class="bold">
                                                                        National Obesity Strategy in Korea: Past, Present and Future
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Jae-Heon Kang</p>(Sungkyunkwan University, Republic of Korea)
                                                                    </td>
                                                                </tr>
																<tr>
                                                                    <td>15:00-15:10</td>
                                                                    <td class="bold">Q&A</td>
                                                                    <td class="text_r"></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
							<li name="break" class="border_bottom_70">
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="light_gray_bg">
                                                <td>15:10-15:20</td>
                                                <td>
                                                    <p class="font_20 bold">Break</p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                            <li name="symposium_19">
								<!--
                                <div class="clearfix2 caption">
                                    <span>Sep.9(Sat)</span>
                                    <span>Room3(3F)</span>
                                </div>
								-->
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="green_bg">
                                                <td>15:20-16:50</td>
                                                <td>
                                                    <p class="font_20 bold">Symposium 19 : Diversity and Challenges of Pediatric Obesity</p>
                                                    <!-- <p>
                                                        <span class="bold">Chairperson : Sochung Chung</span> (Konkuk University, Korea) /
                                                        <span class="bold">Young-Jun Rhie</span> (Korea University,
                                                        Korea)
                                                    </p> -->
													<!-- [↓] 확정 시 까지 버튼 숨김 -->
													<!-- <button class="btn gray2_btn program_detail_btn">Preview </button> -->
                                                </td>
                                            </tr>
											<tr>
												<td colspan="2" class="program_detail_td">
													will be updated.
												</td>
											</tr>
                                            <tr>
                                                <td colspan="2" class="on">
                                                    <div>
                                                        <table class="c_table detail_table padding_0">
                                                            <colgroup>
                                                                <col class="col_date">
                                                                <col>
                                                            </colgroup>
                                                            <tbody>
                                                                <tr>
                                                                    <td>15:20-15:45</td>
                                                                    <td class="bold">
                                                                        <!-- Explore the Latest Data of Pediatric Obesity; Update of AAP Guidelines (2023)  -->TBD
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Ja Hyang Cho</p>(Kyung Hee University, Republic of Korea)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>15:45-16:10</td>
                                                                    <td class="bold">
                                                                        <!-- ACTION TEENS: Rationale and Methodology -->
																		TBD
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Antje Korner</p>(University of Leipzig, Germany)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>16:10-16:35</td>
                                                                    <td class="bold">
                                                                        Childhood Obesity and Mental Health
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Jeewon Lee</p>(Soonchunhayng University, Republic of Korea)
                                                                    </td>
                                                                </tr>
																<tr>
                                                                    <td>17:00-17:30</td>
                                                                    <td class="bold">
                                                                        Panel Discussion
                                                                    </td>
                                                                    <td>
                                                                    </td>
                                                                </tr>
																<!--
                                                                <tr>
                                                                    <td>17:30-17:40</td>
                                                                    <td class="bold" colspan="2">
                                                                        Break
                                                                    </td>
                                                                </tr>
																-->
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
							<li name="break" class="border_bottom_70">
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="light_gray_bg">
                                                <td>15:10-15:20</td>
                                                <td>
                                                    <p class="font_20 bold">Break</p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                            <li>
								<!--
                                <div class="clearfix2 caption">
                                    <span>Sep.9(Sat)</span>
                                    <span>Room3(3F)</span>
                                </div>
								-->
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="pink_bg">
                                                <td>14:30-15:10</td>
                                                <td>
                                                    <p class="font_20 bold">Plenary Lecture 4</p>
                                                    <!-- <p><span class="bold">Chairperson : Moon-Kyu Lee</span> (Eulji University, Korea)</p> -->
													<!-- [↓] 확정 시 까지 버튼 숨김 -->
													<!-- <button class="btn gray2_btn program_detail_btn">Preview </button> -->
                                                </td>
                                            </tr>
											<tr>
												<td colspan="2" class="program_detail_td">
													will be updated.
												</td>
											</tr>
                                            <tr>
                                                <td colspan="2" class="on">
                                                    <div>
                                                        <table class="c_table detail_table padding_0">
                                                            <colgroup>
                                                                <col class="col_date">
                                                                <col>
                                                            </colgroup>
                                                            <tbody>
                                                                <tr>
                                                                    <td>17:00-17:30</td>
                                                                    <td class="bold">
                                                                        <!-- Relationships of SGLT-2 Treatment with Body
                                                                        Weight -->TBD
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">John Wilding</p>(University of Liverpool, UK)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>17:30-17:40</td>
                                                                    <td class="bold">Q&A</td>
																	<td class="text_r"></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
							<li name="closing_ceremony_3">
								<!--
                                <div class="clearfix2 caption">
                                    <span>Sep.9(Sat)</span>
                                    <span>Room1(3F)</span>
                                </div>
								-->
                                <div class="table_wrap detail_table_common x_scroll border_bottom_70">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="yellow_bg">
                                                <td>17:40-18:00</td>
                                                <td>
                                                    <p class="font_20 bold mb0">Closing Ceremony</p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="tab_cont">
                        <ul class="program_detail_ul">
                            <li name="symposium_16">
								<!--
                                <div class="clearfix2 caption">
                                    <span>Sep.9(Sat)</span>
                                    <span>Room4(5F)</span>
                                </div>
								-->
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="green_bg">
                                                <td>09:20-10:50</td>
                                                <td>
                                                    <p class="font_20 bold">Symposium 16 : International Collaboration</p>
                                                    <!-- <p>
                                                        <span class="bold">Chairperson : Tae Kyung Lee</span> (Chuncheon National Hospital, Korea) /
                                                        <span class="bold">Sang Kyu Lee</span> (Hallym University,
                                                        Korea)
                                                    </p> -->
													<!-- [↓] 확정 시 까지 버튼 숨김 -->
													<!-- <button class="btn gray2_btn program_detail_btn">Preview </button> -->
                                                </td>
                                            </tr>
											<tr>
												<td colspan="2" class="program_detail_td">
													will be updated.
												</td>
											</tr>
                                            <tr>
                                                <td colspan="2" class="on">
                                                    <div>
                                                        <table class="c_table detail_table padding_0">
                                                            <colgroup>
                                                                <col class="col_date">
                                                                <col>
                                                            </colgroup>
                                                            <tbody>
                                                                <tr>
                                                                    <td>09:20-09:45</td>
                                                                    <td class="bold">
                                                                        Impact of Sleep Disturbance on Obesity and Energy Homeostasis
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Alice PS Kong</p>(The Chinese University of Hong Kong, Hong Kong)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>09:45-10:10</td>
                                                                    <td class="bold">
                                                                        Guidelines for the Management of Obesity as a Disease: Japanese Update
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Koutaro Yokote</p>(Chiba University, Japan)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>10:10-10:35</td>
                                                                    <td class="bold">
                                                                        <!-- A Pilot Study of the Effect of Transcranial
                                                                        Direct Current Stimulation (tDCS) on Food
                                                                        Craving and Eating in Individuals with
                                                                        Overweight and Obesity -->TBD
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <!-- <p class="bold">Jo-Eun Jeong</p>(The Catholic
                                                                        University of Korea, Korea) -->TBD
                                                                    </td>
                                                                </tr>
																<tr>
                                                                    <td>10:35-10:50</td>
                                                                    <td class="bold">
                                                                        Panel Discussion
                                                                    </td>
                                                                    <td class="text_r">
                                                                    </td>
                                                                </tr>
																<!--
                                                                <tr>
                                                                    <td>10:50-11:00</td>
                                                                    <td class="bold" colspan="2">
                                                                        Break
                                                                    </td>
                                                                </tr>
																-->
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
							<!--
							<li name="break" class="border_bottom_70">
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="light_gray_bg">
                                                <td>10:50-11:00</td>
                                                <td>
                                                    <p class="font_20 bold">Break</p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
							-->
                            <li name="oral_presentation_3">
								<!--
                                <div class="clearfix2 caption">
                                    <span>Sep.9(Sat)</span>
                                    <span>Room4(5F)</span>
                                </div>
								-->
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="light_orange_bg">
                                                <td>12:50-13:50</td>
                                                <td>
                                                    <p class="font_20 bold">Oral Presentation 3</p>
                                                    <!-- <p>
                                                        <span class="bold">Chairperson : Jinkyung Cho</span> (Korea
                                                        Institute of Sport Science, Korea) /
                                                        <span class="bold">You-Cheol Hwang</span> (Kyung Hee University,
                                                        Korea)
                                                    </p> -->
													<!-- [↓] 확정 시 까지 버튼 숨김 -->
													<!-- <button class="btn gray2_btn program_detail_btn">Preview </button> -->
                                                </td>
                                            </tr>
											<tr>
												<td colspan="2" class="program_detail_td">
													will be updated.
												</td>
											</tr>
                                            <tr>
                                                <td colspan="2">
                                                    <div>
                                                        <table class="c_table detail_table padding_0">
                                                            <colgroup>
                                                                <col class="col_date">
                                                                <col>
                                                            </colgroup>
                                                            <tbody>
                                                                <tr>
                                                                    <td>12:50-13:00</td>
                                                                    <td class="bold">
                                                                       <!--  Lifestyle Factors Associated to Adiposity Among
                                                                        Adult Women in Malaysia -->
                                                                    </td>
                                                                    <td>
                                                                        <!-- <p class="bold">Norsham Juliana</p>(University
                                                                        Sains Islam Malaysia, Malaysia) -->
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>13:00-13:10</td>
                                                                    <td class="bold">
                                                                        <!-- Associations Between Physical Activity Level,
                                                                        Physical Fitness, Energy Intake, Macronutrients
                                                                        Intake and Muscle-Fat Ratio among the Primary
                                                                        School Children in Malaysia -->
                                                                    </td>
                                                                    <td>
                                                                        <!-- <p class="bold"> Mun Hong Joseph Cheah</p>
                                                                        (University Putra Malaysia, Malaysia) -->
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>13:10-13:20</td>
                                                                    <td class="bold">
                                                                       <!--  12-OAHSA is a Component of Olive Oil and
                                                                        Mitigates Obesity-induced Inflammation -->
                                                                    </td>
                                                                    <td>
                                                                        <!-- <p class="bold">Shindy Soedono</p>(Soonchunhyang
                                                                        University, Indonesia) -->
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>13:20-13:30</td>
                                                                    <td class="bold">
                                                                        <!-- Semaglutide 2.4 mg Induces Weight Loss and
                                                                        Improves Body Composition Across Age Groups in
                                                                        Adults With Overweight or Obesity: Post-Hoc
                                                                        Analysis of the STEP 1 Trial -->
                                                                    </td>
                                                                    <td>
                                                                        <!-- <p class="bold">Sidi Mohamed El Amine Taha
                                                                            Dahaoui</p>(Novo Nordisk Pharma Korea,
                                                                        Algeria) -->
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>13:30-13:40</td>
                                                                    <td class="bold">
                                                                        <!-- Study of Gastric Bypass Versus Gastric
                                                                        Restrictive Surgery in Obese Patients with Type
                                                                        2 Diabetes -->
                                                                    </td>
                                                                    <td>
                                                                        <!-- <p class="bold">Pardeep Kumar</p>(Shri MMVD
                                                                        Institute, India) -->
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>13:40-13:50</td>
                                                                    <td class="bold">
                                                                        <!-- A Phased Study of Bariatric Surgery in Variable
                                                                        Obesity Phenotypes -->
                                                                    </td>
                                                                    <td>
                                                                       <!--  <p class="bold">Sukrat Sinha</p>(Manipal
                                                                        University, India) -->
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
							<li name="symposium_20">
								<!--
                                <div class="clearfix2 caption">
                                    <span>Sep.9(Sat)</span>
                                    <span>Room4(5F)</span>
                                </div>
								-->
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="green_bg">
                                                <td>15:20-16:50</td>
                                                <td>
                                                    <p class="font_20 bold">Symposium 20</p>
                                                    <!-- <p>
                                                        <span class="bold">Chairperson : Tae Kyung Lee</span> (Chuncheon National Hospital, Korea) /
                                                        <span class="bold">Sang Kyu Lee</span> (Hallym University,
                                                        Korea)
                                                    </p> -->
													<!-- [↓] 확정 시 까지 버튼 숨김 -->
													<!-- <button class="btn gray2_btn program_detail_btn">Preview </button> -->
                                                </td>
                                            </tr>
											<tr>
												<td colspan="2" class="program_detail_td">
													will be updated.
												</td>
											</tr>
                                            <tr>
                                                <td colspan="2">
                                                    <div>
                                                        <table class="c_table detail_table padding_0">
                                                            <colgroup>
                                                                <col class="col_date">
                                                                <col>
                                                            </colgroup>
                                                            <tbody>
                                                                <tr>
                                                                    <td>15:20-15:45</td>
                                                                    <td class="bold">
                                                                        <!-- Alterations in Brain and Behavior Contributing
                                                                        to Obesity -->
                                                                    </td>
                                                                    <td>
                                                                        <!-- <p class="bold">Carrie R. Ferrario</p>
                                                                        (University of Michigan, USA) -->
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>15:45-16:10</td>
                                                                    <td class="bold">
                                                                        <!-- How to Recover from Food Addiction as a New
                                                                        Piece of the Obesity Framework -->
                                                                    </td>
                                                                    <td>
                                                                        <!-- <p class="bold">Carolyn C. Ross</p>(University
                                                                        of Arizona, USA) -->
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>16:10-16:35</td>
                                                                    <td class="bold">
                                                                        <!-- A Pilot Study of the Effect of Transcranial
                                                                        Direct Current Stimulation (tDCS) on Food
                                                                        Craving and Eating in Individuals with
                                                                        Overweight and Obesity -->
                                                                    </td>
                                                                    <td>
                                                                        <!-- <p class="bold">Jo-Eun Jeong</p>(The Catholic
                                                                        University of Korea, Korea) -->
                                                                    </td>
                                                                </tr>
																<tr>
                                                                    <td>16:35-16:50</td>
                                                                    <td class="bold">
                                                                        Panel Discussion
                                                                    </td>
                                                                    <td>
                                                                    </td>
                                                                </tr>
                                                                <!-- <tr>
                                                                    <td>10:50-11:00</td>
                                                                    <td class="bold" colspan="2">
                                                                        Break
                                                                    </td>
                                                                </tr> -->
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                            <!-- <li name="jomes_session">
                                <div class="clearfix2 caption">
                                    <span>Sep.9(Sat)</span>
                                    <span>Room4(5F)</span>
                                </div>
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="sky_bg">
                                                <td>16:00-17:00</td>
                                                <td>
                                                    <p class="font_20 bold">Best Article in JOMES</p>
                                                    <p>
                                                        <span class="bold">Chairperson : Eun-Jung Rhee</span>
                                                        (Sungkyunkwan University, Korea) /
                                                        <span class="bold">Won-Young Lee</span> (Sungkyunkwan
                                                        University, Korea)
                                                    </p>
                            													<button class="btn gray2_btn program_detail_btn">Preview </button>
                                                </td>
                                            </tr>
                            											<tr>
                            												<td colspan="2" class="program_detail_td">
                            													will be updated.
                            												</td>
                            											</tr>
                                            <tr>
                                                <td colspan="2">
                                                    <div>
                                                        <table class="c_table detail_table padding_0">
                                                            <colgroup>
                                                                <col class="col_date">
                                                                <col>
                                                            </colgroup>
                                                            <tbody>
                                                                <tr>
                                                                    <td>16:00-16:15</td>
                                                                    <td class="bold">
                                                                        Effect of Sodium-Glucose Cotransporter 2
                                                                        Inhibitors on Weight Reduction in Overweight and
                                                                        Obese Populations without Diabetes: A Systematic
                                                                        Review and a Meta-Analysis
                                                                    </td>
                                                                    <td>
                                                                        <p class="bold">Yun Kyung Cho</p>(University of
                                                                        Ulsan, Korea)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>16:15-16:30</td>
                                                                    <td class="bold">
                                                                        Impact of COVID-19 and Associated Preventive
                                                                        Measures on Cardiometabolic Risk Factors in
                                                                        South Korea
                                                                    </td>
                                                                    <td>
                                                                        <p class="bold">Soo Lim</p>(Seoul National
                                                                        University, Korea)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>16:30-16:45</td>
                                                                    <td class="bold">
                                                                        Factors Associated with Body Weight Gain among
                                                                        Korean Adults during the COVID-19 Pandemic
                                                                    </td>
                                                                    <td>
                                                                        <p class="bold">Yang Im Hur</p>(CHA University,
                                                                        Korea)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>16:45-17:00</td>
                                                                    <td class="bold">
                                                                        Award
                                                                    </td>
                                                                    <td>
                                                                        <p class="bold"></p>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li> -->
                        </ul>
                    </div>
                    <div class="tab_cont">
                        <ul class="program_detail_ul">
                            <li name="sponsored_session_3">
								<!--
                                <div class="clearfix2 caption">
                                    <span>Sep.9(Sat)</span>
                                    <span>Room5(6F)</span>
                                </div>
								-->
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="sky_bg">
                                                <td>09:20-10:50</td>
                                                <td>
                                                    <p class="font_20 bold">Sponsored Session 3 : Is Semaglutide Changing the Paradigm Of Obesity Management?</p>
                                                   <!--  <p>
                                                        <span class="bold">Chairperson : Dae Jung Kim</span> (Ajou
                                                        University, Korea)
                                                        <span class="bold">Chairperson : Dae Jung Kim</span> (Ajou
                                                        University, Korea) /
                                                        <span class="bold">Seung-Hwan Lee</span> (The Catholic
                                                        University of Korea, Korea)
                                                    </p> -->
													<!-- [↓] 확정 시 까지 버튼 숨김 -->
													<!-- <button class="btn gray2_btn program_detail_btn">Preview </button> -->
                                                </td>
                                            </tr>
											<tr>
												<td colspan="2" class="program_detail_td">
													will be updated.
												</td>
											</tr>
                                            <tr>
                                                <td colspan="2">
                                                    <div>
                                                        <table class="c_table detail_table padding_0">
                                                            <colgroup>
                                                                <col class="col_date">
                                                                <col>
                                                            </colgroup>
                                                            <tbody>
                                                                <tr>
                                                                    <td>09:20-09:50</td>
                                                                    <td class="bold">
                                                                        <!-- Obesity and White Adipose Tissue- Links to
                                                                        Comorbidities -->
                                                                    </td>
                                                                    <td>
                                                                        <!-- <p class="bold"> Mikael Ryden</p>(Karolinska
                                                                        University, Sweden) -->
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>09:50-10:20</td>
                                                                    <td class="bold">
                                                                        <!-- Benefits Beyond Weight Loss with GLP-1RA -->
                                                                    </td>
                                                                    <td>
                                                                        <!-- <p class="bold">Chang Hee Jung</p>(University of
                                                                        Ulsan, Korea) -->
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>10:20-10:50</td>
                                                                    <td class="bold">
                                                                        <!-- GLP-1RA for Obesity Management, How can We
                                                                        Maximize Its Clinical Value? -->
                                                                    </td>
                                                                    <td>
                                                                        <!-- <p class="bold">Hyuktae Kwon</p>(Seoul National
                                                                        University, Korea) -->
                                                                    </td>
                                                                </tr>
                                                               <!--  <tr>
                                                                    <td>10:50-11:00</td>
                                                                    <td class="bold" colspan="2">
                                                                        Break
                                                                    </td>
                                                                </tr> -->
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                            <li name="oral_presentation_4">
								<!--
                                <div class="clearfix2 caption">
                                    <span>Sep.9(Sat)</span>
                                    <span>Room5(6F)</span>
                                </div>
								-->
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="light_orange_bg">
                                                <td>12:50-13:50</td>
                                                <td>
                                                    <p class="font_20 bold">Oral Presentation 4</p>
                                                    <!-- <p>
                                                        <span class="bold">Chairperson : Young-Jun Rhie</span> (Korea University, Korea) /
                                                        <span class="bold">Joung Hee Lee</span> (Kunsan National
                                                        University, Korea)
                                                    </p> -->
													<!-- [↓] 확정 시 까지 버튼 숨김 -->
													<!-- <button class="btn gray2_btn program_detail_btn">Preview </button> -->
                                                </td>
                                            </tr>
											<tr>
												<td colspan="2" class="program_detail_td">
													will be updated.
												</td>
											</tr>
                                            <tr>
                                                <td colspan="2">
                                                    <div>
                                                        <table class="c_table detail_table padding_0">
                                                            <colgroup>
                                                                <col class="col_date">
                                                                <col>
                                                            </colgroup>
                                                            <tbody>
                                                                <tr>
                                                                    <td>12:50-13:00</td>
                                                                    <td class="bold"><!-- Prevalence of Obesity and
                                                                        Overweight Children in South Korea During
                                                                        COVID-19: Korean National Health and Nutrition
                                                                        Examination Survey 2018-2020 --></td>
                                                                    <td>
                                                                        <!-- <p class="bold">Ji Won Park</p>(Korea
                                                                        University, Korea) -->
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>13:00-13:10</td>
                                                                    <td class="bold"><!-- The COVID-19 Pandemics Affects
                                                                        Prevalence of Obesity and Metabolic Syndrome of
                                                                        Children and Adolescents in Korea using the
                                                                        KNHANES 2019-2020 --></td>
                                                                    <td>
                                                                        <!-- <p class="bold">Jung Eun Choi</p>(Ewha Womans
                                                                        University, Korea) -->
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>13:10-13:20</td>
                                                                    <td class="bold"><!-- Comparison of siMS Score by
                                                                        Sociodemographic Characteristics and Nutritional
                                                                        Status among Children aged 6.0-12.9 years in
                                                                        Malaysia --></td>
                                                                    <td>
                                                                       <!--  <p class="bold">Kuan Chiet Teh</p>(University
                                                                        Kebangsaan Malaysia, Malaysia) -->
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>13:20-13:30</td>
                                                                    <td class="bold"><!-- 6-month Outcome of an Adapted US
                                                                        Clinic-community Model to an Online Intervention
                                                                        for Childhood Obesity in Singapore- a Pilot
                                                                        Randomized Controlled Trial  --></td>
                                                                    <td>
                                                                        <!-- <p class="bold">Elaine Chew</p>(Duke University,
                                                                        Singapore) -->
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>13:30-13:40</td>
                                                                    <td class="bold"><!-- Study of Relationship Between Rates
                                                                        of Mental Health Evaluation among Adolescents
                                                                        Receiving Sleeve Gastrectomy in Jaipur City,
                                                                        India --></td>
                                                                    <td>
                                                                        <!-- <p class="bold">Vikas Sharma</p>(SN Medical
                                                                        College, India) -->
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>13:40-13:50</td>
                                                                    <td class="bold"></td>
                                                                    <td>
                                                                        <!-- <p class="bold">TBA</p>() -->
                                                                    </td>
                                                                </tr>
                                                                <!-- <tr>
                                                                    <td>17:30-17:40</td>
                                                                    <td class="bold" colspan="2">Break</td>
                                                                </tr> -->
                                                                <!-- <tr>
                                                                    <td>17:40-18:00</td>
                                                                    <td class="bold" colspan="2">Closing & Award
                                                                        Ceremony</td>
                                                                </tr> -->
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
							<li name="jomes_session">
								<!--
                                <div class="clearfix2 caption">
                                    <span>Sep.9(Sat)</span>
                                    <span>Room4(5F)</span>
                                </div>
								-->
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="sky_bg">
                                                <td>15:20-16:30</td>
                                                <td>
                                                    <p class="font_20 bold">Best Article in JOMES</p>
                                                    <!-- <p>
                                                        <span class="bold">Chairperson : Eun-Jung Rhee</span>
                                                        (Sungkyunkwan University, Korea) /
                                                        <span class="bold">Won-Young Lee</span> (Sungkyunkwan
                                                        University, Korea)
                                                    </p> -->
													<!-- [↓] 확정 시 까지 버튼 숨김 -->
													<!-- <button class="btn gray2_btn program_detail_btn">Preview </button> -->
                                                </td>
                                            </tr>
											<tr>
												<td colspan="2" class="program_detail_td">
													will be updated.
												</td>
											</tr>
                                            <tr>
                                                <td colspan="2" class="on">
                                                    <div>
                                                        <table class="c_table detail_table padding_0">
                                                            <colgroup>
                                                                <col class="col_date">
                                                                <col>
                                                            </colgroup>
                                                            <tbody>
                                                                <tr>
                                                                    <td>15:20-15:35</td>
                                                                    <td class="bold">
                                                                        Obesity Fact Sheet in Korea, 2021: Trends in Obesity Prevalence and Obesity-Related Comorbidity Incidence Stratified by Age from 2009 to 2019
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Ye Seul Yang</p>(Seoul National University, Republic of Korea))
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>15:35-15:50</td>
                                                                    <td class="bold">
                                                                        Reference Values for Waist Circumference and Waist–Height Ratio in Korean Children and Adolescents
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Jieun Lee</p>(Inje University, Republic of Korea)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>15:50-16:05</td>
                                                                    <td class="bold">
                                                                       Maintaining Physical Activity Is Associated with Reduced Major Adverse Cardiovascular Events in People Newly Diagnosed with Diabetes
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Kyoung Hwa Ha</p>(Ajou University, Republic of Korea)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>16:05-16:20</td>
                                                                    <td class="bold">
                                                                        Updated Meta-Analysis of Studies from 2011 to 2021 Comparing the Effectiveness of Intermittent Energy Restriction and Continuous Energy Restriction
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Kyoung-Kon Kim</p>(Gachon University, Republic of Korea)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>16:20-16:30</td>
                                                                    <td class="bold">
                                                                        Award Ceremony
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold"></p>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                            <!-- <li name="closing_award_ceremony">
                                <div class="clearfix2 caption">
                                    <span>Sep.9(Sat)</span>
                                    <span>Room5(6F)</span>
                                </div>
                                <div class="table_wrap detail_table_common x_scroll border_bottom_70">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="light_green_bg">
                                                <td>17:40-18:00</td>
                                                <td>
                                                    <p class="font_20 bold mb0">Closing & Award Ceremony - Korea Society for Study of Obesity President Chang Beom Lee</p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li> -->
                        </ul>
                    </div>
                    <div class="tab_cont">
                        <ul class="program_detail_ul">
                            <!-- <li name="poster_exhibition_d3_r6">
                                <div class="clearfix2 caption">
                                    <span>Sep.9(Sat)</span>
                                </div>
                                <div class="table_wrap detail_table_common x_scroll border_bottom_70">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="green_bg">
                                                <td>12:50-13:50</td>
                                                <td>
                                                    <p class="font_20 bold mb0">Poster Exhibition</p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li> -->
							<li name="joint_symposium_TOS">
								<!--
                                <div class="clearfix2 caption">
                                    <span>Sep.9(Sat)</span>
                                </div>
								-->
                                <div class="table_wrap detail_table_common x_scroll border_bottom_70">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="purple_bg">
                                                <td>09:20-10:50</td>
                                                <td>
                                                    <p class="font_20 bold mb0">Joint Symposium TOS</p>
                                                </td>
                                            </tr>
											<tr>
												<td colspan="2" class="program_detail_td">
													will be updated.
												</td>
											</tr>
											<tr>
                                                <td colspan="2">
                                                    <div>
                                                        <table class="c_table detail_table padding_0">
                                                            <colgroup>
                                                                <col class="col_date">
                                                                <col>
                                                            </colgroup>
                                                            <tbody>
                                                                <tr>
                                                                    <td>09:20-09:50</td>
                                                                    <td class="bold"></td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>09:50-10:20</td>
                                                                    <td class="bold"></td>
                                                                    <td></td>
                                                                </tr>
																<tr>
                                                                    <td>10:20-10:50</td>
                                                                    <td class="bold"></td>
                                                                    <td></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
							<!--
							<li name="plenary_oral">
                                <div class="clearfix2 caption">
                                    <span>Sep.9(Sat)</span>
                                </div>
                                <div class="table_wrap detail_table_common x_scroll border_bottom_70">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="purple_bg">
                                                <td>16:00-17:30</td>
                                                <td>
                                                    <p class="font_20 bold mb0">Plenary Oral (가안)</p>
                                                </td>
                                            </tr>
											<tr>
												<td colspan="2" class="program_detail_td">
													will be updated.
												</td>
											</tr>
											<tr>
                                                <td colspan="2">
                                                    <div>
                                                        <table class="c_table detail_table padding_0">
                                                            <colgroup>
                                                                <col class="col_date">
                                                                <col>
                                                            </colgroup>
                                                            <tbody>
                                                                <tr>
                                                                    <td><!-- 09:20-09:50</td>
                                                                    <td class="bold"></td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td><!-- 09:50-10:20</td>
                                                                    <td class="bold"></td>
                                                                    <td></td>
                                                                </tr>
                                            					<tr>
                                                                    <td><!-- 10:20-10:50</td>
                                                                    <td class="bold"></td>
                                                                    <td></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
							-->
                        </ul>
                    </div>
                    <div class="tab_cont">
                        <ul class="program_detail_ul">
                            <li name="guided_poster_presentation_2">
								<!--
                                <div class="clearfix2 caption">
                                    <span>Sep.9(Sat)</span>
                                    <span>Room7(6F)</span>
                                </div>
								-->
                                <div class="table_wrap detail_table_common x_scroll border_bottom_70">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="light_orange_bg">
                                                <td>12:50-13:50</td>
                                                <td>
                                                    <p class="font_20 bold mb0">Guided Poster Presentation 2</p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- </div> -->
        </div>
</section>

<script>
    $(document).ready(function() {
		// 모든 세션의 내용 숨김처리 후, 펼칠 세션의 td에 on 클래스를 붙여 해당 세션의 내용만 펼칩니다.
		$(".program_detail_ul .detail_table_common > table > tbody > tr:first-child").next("tr").next("tr").children("td").children("div").css("display", "none");
		$(".program_detail_ul .detail_table_common > table > tbody > tr:first-child").next("tr").next("tr").children("td.on").children("div").css("display", "block");

        $(".program_detail_ul .detail_table_common > table > tbody > tr:first-child").click(function() {
            $(this).next("tr").next("tr").children("td.on").children("div").slideToggle();
        });
		
		// $(".program_detail_ul .detail_table_common > table > tbody > tr:first-child").click(function() {
        //     $(this).next("tr").next("tr").children("td").children("div").slideToggle();
        // });

        $(".tab_green li, .tab_li li").click(function() {
            var i = $(this).index();
            $(this).parent("ul").next(".tab_wrap").children(".tab_cont").removeClass("on");
            $(this).parent("ul").next(".tab_wrap").children(".tab_cont").eq(i).addClass("on");
            $(this).siblings("li").removeClass("on");
            $(this).addClass("on");
        });

        $(".program_detail_btn").click(function(event) {
            event.preventDefault();
            event.stopPropagation();
            $(this).parents("tr").next("tr").find(".program_detail_td").toggleClass("on");
        });
        //$('.toggle_title').click(function(e) {
        //	if($(this).hasClass('has_contents')){
        //		e.preventDefault();
        //		var notthis = $('.toggle_contents_wrap2 .has_contents .active').not(this);
        //		notthis.toggleClass('active').next('.toggle_contents2').slideToggle(300);
        //		$(this).toggleClass('active').next().slideToggle("fast");
        //	}
        //});
        //$('.tab_area2 li').on('click',function(){
        //	var idx = $(this).index();
        //	$('.tab_area2 li').removeClass('active');
        //	$(this).addClass('active');
        //	$('.tab_contents').hide();
        //	$('.tab_contents').eq(idx).show();
        //})
        // $('.toggle_title').addClass('active');
        // $('.toggle_contents2').attr('style','display:block;');

        // var hash_parts = location.hash.split('&', 2); 
        // var tab        = hash_parts[0]; 
        // var anc        = hash_parts[1];
        // var tabId      = tab;
        // var idx = $(tabId).index();

        // if(tab){
        //     $('.tab_area2 li').removeClass('active');
        //     $(tabId).addClass('active');
        //     $('.tab_contents').hide();
        //     $('.tab_contents').eq(idx).show();
        //     $('html, body').animate({'scrollTop': ($(anc).offset().top-223)}, 1000); // Animated scroll to anchor.
        //     
        // }
        //var i = 1;
        // $('li.date').each(function(){ 
        //    if ($(this).html() == '　'){
        //        $(this).addClass('no_cont')
        //    }
        // });
    });
</script>

<?php include_once('./include/footer.php'); ?>