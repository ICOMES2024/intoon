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
					  }else{
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
                    }
				  });
		</script>';


?>



<section class="container program_detail">
    <h1 class="page_title">Scientific Program</h1>
    <div class="inner">
        <ul class="tab_green long centerT detail_program">
            <li id="tab1" class="on"><a href="javascript:;">Sep.5 (Thu)</a></li>
            <li id="tab2"><a href="javascript:;">Sep.6 (Fri)</a></li>
            <li id="tab3"><a href="javascript:;">Sep.7 (Sat)</a></li>
        </ul>
        <div class="tab_wrap">
            <div class="tab_cont on">
                <!-- <img class="coming" src="./img/coming.png" /> -->
                <ul class="tab_li">
                    <li id="tab1" class="on"><a href="javascript:;">Room1</a></li>
                    <li id="tab2"><a href="javascript:;">Room2</a></li>
                    <li id="tab3"><a href="javascript:;">Room3</a></li>
                </ul>

            <!-- !!! Day 1 - Room 1 -->
                <div class="tab_wrap">
                    <div class="tab_cont on">
                        <ul class="program_detail_ul">
                        <li name="committee_1">
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="skyblue_bg">
                                                <td>15:00-16:30</td>
                                                <td>
                                                    <p class="font_20 bold">Committee Session 1</p>
                                                    <!-- <p><span class="bold">Chairperson : Bom Taeck Kim</span> (Ajou
                                                        University, Republic of Korea)</p> -->
                                                    <!-- <button class="btn gray2_btn program_detail_btn">Preview</button> -->
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
                                                                    <td>15:00-15:30</td>
                                                                    <td class="bold"></td>
                                                                    <td class="text_r">
                                                                        <p class="bold"></p>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>15:30-16:00</td>
                                                                    <td class="bold"></td>
                                                                    <td class="text_r">
                                                                        <p class="bold"></p>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>16:00-16:30</td>
                                                                    <td class="bold"></td>
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
                            
                            <li name="committee_2">
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="skyblue_bg">
                                                <td>16:30-18:00</td>
                                                <td>
                                                    <p class="font_20 bold">Committee Session 2</p>
                                                    <!-- <p><span class="bold">Chairperson : Bom Taeck Kim</span> (Ajou
                                                        University, Republic of Korea)</p> -->
                                                    <!-- <button class="btn gray2_btn program_detail_btn">Preview</button> -->
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
                                                                    <td>16:30-17:00</td>
                                                                    <td class="bold"></td>
                                                                    <td class="text_r">
                                                                        <p class="bold"></p>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>17:00-17:30</td>
                                                                    <td class="bold"></td>
                                                                    <td class="text_r">
                                                                        <p class="bold"></p>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>17:30-18:00</td>
                                                                    <td class="bold"></td>
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

                            <li name="break" class="border_bottom_70">
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="light_gray_bg">
                                                <td>18:00-18:10</td>
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
                                            <tr class="dark_sky_bg">
                                                <td>18:10-18:40</td>
                                                <td>
                                                    <p class="font_20 bold">Satellite Symposium 1</p>
                                                    <p><span class="bold">Chairperson : Suk Chon</span> (Kyung Hee University, Korea)</p>
                                                    <!-- <button class="btn gray2_btn program_detail_btn">Preview</button> -->
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
                                                                <!-- <tr>
                                                                    <td>18:00-18:30</td>
                                                                    <td class="bold">
                                                                        Empagliflozin, Treatment of T2D patients
                                                                        Considering Renal Function
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Yong-ho Lee</p>(Yonsei
                                                                        University, Republic of Korea)
                                                                    </td>
                                                                </tr> -->
                                                                <tr>
                                                                    <td>18:10-18:40</td>
                                                                    <td class="bold">
                                                                    Insulin Therapy Optimization: Unlocking the Potential for Better Diabetes Treatment
                                                                     </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Eun Young Lee</p>(The Catholic University of Korea, Korea)
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
                                            <tr class="dark_sky_bg">
                                                <td>18:40-19:10</td>
                                                <td>
                                                    <p class="font_20 bold">Satellite Symposium 2</p>
                                                    <p><span class="bold">Chairperson : Changhyun Lee</span> (Seoul National University, Korea)</p>
                                                    <!-- <button class="btn gray2_btn program_detail_btn">Preview</button> -->
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
                                                                    <td>18:40-19:10</td>
                                                                    <td class="bold"></td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Se Hee Min</p>(University of Ulsan, Korea)
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
                        </ul>
                    </div>

             <!-- !!! Day 1 - Room 2 -->
                    <div class="tab_cont">
                        <ul class="program_detail_ul">
                        
                            <li name="joint_symposium_1">
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="violet_bg">
                                                <td>15:00-16:30</td>
                                                <td>
                                                    <p class="font_20 bold">Joint Symposium KSSO-JKT (Clinical)</p>
                                                    <p>
                                                        <span class="bold">Chairpersons : Cheol-Young Park</span> (Sungkyunkwan University, Korea), <br><span class="bold">Wen-Yuan Lin</span> (China Medical University, Taiwan)
                                                    </p>
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
                                                                    <td>15:00-15:30</td>
                                                                    <td class="bold">
                                                                    Noninvasive Approaches to Monitor Liver Fibrosis in Metabolic-Associated Steatotic Liver Disease
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Hye Won Lee</p>(Yonsei University, Korea)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>15:30-16:00</td>
                                                                    <td class="bold">Effects of Exercise Intervention in Subjects with Steatotic Liver Disease</td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Chun-Jen Liu</p>(National Taiwan University, Taiwan)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>16:00-16:30</td>
                                                                    <td class="bold">
                                                                    MASLD and Cardio-Renal-Metabolic Syndrome
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Masato Furuhashi</p>(Sapporo Medical University, Japan)
                                                                    </td>
                                                                </tr>
                                                                <!-- <tr>
                                                                    <td>17:45-18:00</td>
                                                                    <td class="bold">
                                                                    Panel Discussion 
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold"></p>
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
                         
                            <li name="joint_symposium_2">
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="violet_bg">
                                                <td>16:30-18:00</td>
                                                <td>
                                                    <p class="font_20 bold">Joint Symposium KSSO-JKT (Basic)</p>
                                                    <p>
                                                        <span class="bold">Chairpersons : Ki Woo Kim</span> (Yonsei University, Korea), <br><span class="bold">Jun Wada</span> (Okayama University, Japan)
                                                    </p>
                                                    <!-- <button class="btn gray2_btn program_detail_btn">Preview</button> -->
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
                                                                    <td>16:30-17:00</td>
                                                                    <td class="bold">
                                                                    Molecular Pathophysiology Underlying MASH Complicated by Diabetes
                                                                    </td></td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Hisanori Goto</p>(Kanazawa University, Japan)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>17:00-17:30</td>
                                                                    <td class="bold">
                                                                    Effects of Exercise Intervention in Obese Mice with Steatotic Liver Disease
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Chia-Wen Lu</p>(National Taiwan University, Taiwan)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>17:30-18:00</td>
                                                                    <td class="bold">
                                                                    Therapeutic Approaches for Non-Alcoholic Steatohepatitis Utilizing Diverse Metabolites
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Eun Hee Koh</p>(University of Ulsan, Korea)
                                                                    </td>
                                                                </tr>
                                                                <!-- <tr>
                                                                    <td>16:15-16:30</td>
                                                                    <td class="bold">
                                                                    Panel Discussion 
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold"></p>
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
                                                <td>18:00-18:10</td>
                                                <td>
                                                    <p class="font_20 bold">Break</p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li> 
                            <li name="satellite_symposium_3">
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="dark_sky_bg">
                                                <td>18:10-18:40</td>
                                                <td>
                                                    <p class="font_20 bold">Satellite Symposium 3</p>
                                                    <p><span class="bold">Chairperson : Bom Taeck Kim</span> (Ajou University, Korea)</p>
                                                    <!-- <button class="btn gray2_btn program_detail_btn">Preview</button> -->
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
                                                                    <td>18:10-18:40</td>
                                                                    <td class="bold"></td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Jung Hwan Park</p>(Hanyang University, Korea)
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
                            <li name="special_session">
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="violet_bg">
                                                <td>18:40-19:10</td>
                                                <td>
                                                    <p class="font_20 bold">Special Session for Publication</p>
                                                    <p><span class="bold">Chairperson : You-Cheol Hwang</span> (Kyung Hee University, Korea)</p>
                                                    <!-- <button class="btn gray2_btn program_detail_btn">Preview</button> -->
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
                                                                    <td>18:40-19:10</td>
                                                                    <td class="bold"></td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Claire Greenhill</p>(Nature Reviews Endocrinology, UK)
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
                        </ul>
                    </div>

                <!-- Day 1 - Room 3 -->
                    <div class="tab_cont">
                        <ul class="program_detail_ul">
                        <li name="jomes">
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="skyblue_bg">
                                                <td>15:00-16:10</td>
                                                <td>
                                                    <p class="font_20 bold">Best Articles in JOMES</p>
                                                    <p><span class="bold">Chairpersons : You-Cheol Hwang</span> (Kyung Hee University, Korea)
                                                    , <br/><span class="bold">Yong-Ho Lee</span> (Yonsei University, Korea)
                                                </p>
                                                    <!-- [↓] 확정 시 까지 버튼 숨김 -->
                                                    <!-- <button class="btn gray2_btn program_detail_btn">Preview </button> -->
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="program_detail_td">
                                                  
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
                                                                <!-- <tr>
                                                                    <td>15:10-15:25</td>
                                                                    <td class="bold">
                                                                        학회에서 바라는 비만 관리를 위한 정부 정책 방향
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">김경곤</p>(대한비만학회 부회장)
                                                                    </td>
                                                                </tr> -->
                                                                <tr>
                                                                    <td>15:00-15:15</td>
                                                                    <td class="bold">
                                                                    2023 Obesity Fact Sheet: Prevalence of Obesity and Abdominal Obesity in Adults, Adolescents, and Children in Korea from 2012 to 2021
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Su-Min Jeong</p>(Seoul National University, Korea)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>15:15-15:30</td>
                                                                    <td class="bold">
                                                                    Association between Sleep Duration and Metabolic Disorders among Filipino Immigrant Women: The Filipino Women’s Diet and Health Study (FiLWHEL)
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Jung Eun Lee</p>(Seoul National University, Korea)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>15:30-15:45</td>
                                                                    <td class="bold">
                                                                    Effects of Cardiorespiratory Fitness on Cardiovascular Disease Risk Factors and Telomere Length by Age and Obesity
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Yun-A Shin</p>(Dankook University, Korea)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>15:45-16:00</td>
                                                                    <td class="bold">
                                                                    Temporal Trends of the Prevalence of Abdominal Obesity and Metabolic Syndrome in Korean Children and Adolescents between 2007 and 2020
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Jieun Lee</p>(Inje University, Korea)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>16:00-16:10</td>
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
                       
                            <li name="joint_symposium">
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="violet_bg">
                                                <td>16:20-17:50</td>
                                                <td>
                                                    <p class="font_20 bold">Joint Symposium KSSO-KSoLA-KDA</p>
                                                    <p><span class="bold">Chairpersons : Cheol-Young Park</span> (Sungkyunkwan University, Korea)
                                                    , <br/><span class="bold">Woo Je Lee</span> (University of Ulsan, Korea)
                                                </p>
                                                    <!-- <button class="btn gray2_btn program_detail_btn">Preview</button> -->
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
                                                                    <td>16:20-16:45</td>
                                                                    <td class="bold">
                                                                    Interim Report for 2024 Update of Clinical Practice Guidelines for Obesity by the Korean Society for the Study of Obesity
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Seo Young Kang</p>(Eulji University, Korea)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>16:45-17:10</td>
                                                                    <td class="bold"></td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Dong-Hyuk Cho</p>(Korea University, Korea)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>17:10-17:35</td>
                                                                    <td class="bold">
                                                                    The Impact of Anti-Obesity Agents on Glucose Metabolism
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Jae-Han Jeon</p>(Kyungpook National University, Korea)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>17:35-17:50</td>
                                                                    <td class="bold">
                                                                        Panel Discussion
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Jong Chan Youn</p>(The Catholic University of Korea, Korea),<br/>
                                                                        <p class="bold">Jun Sung Moon</p>(Yeungnam University, Korea),<br/>
                                                                        <p class="bold">Eun Young Lee</p>(The Catholic University of Korea, Korea)
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
                                                <td>18:00-18:10</td>
                                                <td>
                                                    <p class="font_20 bold">Break</p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                            <li name="welcome_cocktail_party">
                                <div class="table_wrap detail_table_common x_scroll border_bottom_70">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="white_yellow_bg">
                                                <td>19:00-21:00</td>
                                                <td>
                                                    <p class="font_20 bold mb_0">Textbook Launch Ceremony & Welcome Reception</p>
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

                <!-- !!! Day 2 - Room 1 -->
                <div class="tab_wrap">
                    <div class="tab_cont on">
                        <ul class="program_detail_ul">
                        <li name="breakfast_symposium_1">
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="light_sky_bg">
                                                <td>07:30-08:20</td>
                                                <td>
                                                    <p class="font_20 bold">Breakfast Symposium 1</p>
                                                    <p><span class="bold">Chairperson : Kiyoung Lee</span> (Gachon University, Korea)</p>
                                                    <!-- <button class="btn gray2_btn program_detail_btn">Preview</button> -->
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
                                                                    The Ideal Combination therapy for T2D Including Original Dapagliflozin
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Jae-Han Jeon</p>(Kyungbook National University, Korea)
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
                            <li name="keynote_lecture_1">
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="keynote_bg">
                                                <td>08:30-09:10</td>
                                                <td>
                                                    <p class="font_20 bold">Keynote Lecture 1</p>
                                                     <p><span class="bold">Chairperson : Min-Seon Kim</span> (University of Ulsan, Korea)</p> 
                                                    <button class="btn gray2_btn program_detail_btn">Preview</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="program_detail_td">
                                                    <p class="bold">Organizer : Ki Woo Kim (Yonsei University, College of Dentistry, Korea)</p>
                                                    <ul>
                                                        <li>In this session, Dr. Elmquist, Dean of Research at UT-Southwestern Medical Center and Director of the Center for Hypothalamic Research, will introduce a new platform for identifying key factors in obesity and metabolic regulation through the hypothalamus. He will explain the identified factors and present the latest research on how these factors influence whole-body homeostasis. This presentation will provide crucial insights into the mechanisms of hypothalamic function and the regulation of obesity and metabolic disorders, greatly benefiting conference attendees.
                                                        </li>
                                                        <li>
                                                            <span class="font_inherit bold">• References</span><br />
                                                            1. Coordination of metabolism, arousal, and reward by orexin/hypocretin neurons<br />2. Leptin and brain-adipose crosstalks</li>
                                                    </ul>
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
                                                                    SF-1 Targets in the Hypothalamus: Novel Pathways Regulating Energy Balance
and Metabolism
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Joel K. Elmquist</p>(UT Southwestern Medical Center, USA)
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
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="dark_green_bg">
                                                <td>09:20-10:50</td>
                                                <td>
                                                    <p class="font_20 bold">Symposium 1 : Precision Medicine for Obesity and Diabetes </p>
                                                    <p><span class="bold">Chairpersons : Leonie Kaye Heilbronn</span> (University of Adelaide, Australia), <br><span class="bold">Soon-Jib Yoo</span> (The Catholic University of Korea, Korea)</p>
                                                    <button class="btn gray2_btn program_detail_btn">Preview</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="program_detail_td">
                                                    <p class="bold">Organizer: Seung-Hwan Lee (The Catholic University of Korea, Korea), Jae Hyun Bae (Korea University, Korea)</p>
                                                    <ul>
                                                        <li>This session will explore the role, current status, and future prospects of precision medicine in managing obesity and diabetes. Jean-Pierre Després from VITAM – Research Centre on Sustainable Health, Canada, will discuss obesity phenotypes and their implications. Yoon Jung Park from Ewha Womans University, Korea, will cover weight management strategies using nutrigenomics. Joonyub Lee from The Catholic University of Korea will present precision diabetes care through integrative life-log data and digital twin technology.</li>
                                                        <li>
                                                            <span class="font_inherit bold">• References</span><br />
                                                            1. Piché ME, Tchernof A, Després JP. Obesity Phenotypes, Diabetes, and Cardiovascular Diseases. Circ Res. 2020;126(11):1477-1500<br />
                                                            2. Shon J, Han Y, Song S, Kwon SY, Na K, Lindroth AM, Park YJ. Anti-obesity effect of butyrate links to modulation of gut microbiome and epigenetic regulation of muscular circadian clock. J Nutr Biochem. 2024;127:109590<br />
                                                            3. Lee J, Yu J, Yoon KH. Opening the Precision Diabetes Care through Digital Healthcare. Diabetes Metab J. 2023;47(3):307-314

                                                        </li>
                                                    </ul>
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
                                                                    Obesity Phenotypes and Precision Medicine
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Jean-Pierre Després</p>(VITAM – Research Centre on Sustainable Health, Canada)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>09:45-10:10</td>
                                                                    <td class="bold">
                                                                    Nutrigenomics of Obesity and Weight Management
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Yoon Jung Park</p>(Ewha Womans University, Korea)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>10:10-10:35</td>
                                                                    <td class="bold">
                                                                    Precision Diabetes Care through Integrative Life-Log Data
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Joonyub Lee</p>(The Catholic University of Korea, Korea)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>10:35-10:50</td>
                                                                    <td class="bold">
                                                                        Panel Discussion
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Tae Nyun Kim</p>(Inje University, Korea),<br>
                                                                        <p class="bold">Jae Hyun Bae</p>(Korea University, Korea)
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
                                <div class="table_wrap detail_table_common x_scroll border_bottom_70">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="white_yellow_bg">
                                                <td>11:00-11:10</td>
                                                <td>
                                                    <p class="font_20 bold mb0">Opening Address</p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                            <li name="keynote_lecture_2">
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="plenary_bg">
                                                <td>11:10-11:50</td>
                                                <td>
                                                    <p class="font_20 bold">Plenary Lecture 1</p>
                                                    <p><span class="bold">Chairperson : Jeong Taek Woo</span> (Kyung Hee University, Korea)</p>
                                                    <!-- <button class="btn gray2_btn program_detail_btn">Preview</button> -->
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="program_detail_td">
                                                    <p class="bold">Organizer: Soo Lim (Seoul National University,
                                                        Republic of Korea)</p>
                                                    <ul>
                                                        <li>Matthias Blüher is Head of the Obesity Outpatient Clinic for
                                                            Adults at the University of Leipzig Department of Medicine
                                                            in Leipzig, Germany. He is Professor of Molecular
                                                            Endocrinology, with board certifications in Internal
                                                            Medicine, Endocrinology and Diabetology. From 2006 to 2012,
                                                            Professor Blüher served as Head of the Clinical Research
                                                            Group ‘Atherobesity,’ and since 2013, he has been Speaker of
                                                            the Collaborative Research Center on obesity mechanisms.
                                                        </li>
                                                        <li>Professor Blüher has won several awards, including the
                                                            Obesity Research Award of the German Society for the Study
                                                            of Obesity, the Ferdinand-Bertram-Prize of the German
                                                            Diabetes Association, and the Rising Star Lecture at the
                                                            44th European Association for the Study of Diabetes (EASD)
                                                            meeting. More recently, he received the Hans Christian
                                                            Hagedorn Award from the German Diabetes Association in 2011
                                                            and the Minkowski Award from the EASD in 2015.</li>
                                                        <li>
                                                            <span class="font_inherit bold">• References</span><br />
                                                            1. Blüher M, Aras M, Aronne LJ, Batterham RL, Giorgino F, Ji
                                                            L, Pietiläinen KH, Schnell O, Tonchevska E, Wilding JPH. New
                                                            insights into the treatment of obesity. Diabetes Obes Metab.
                                                            2023 Apr 13. doi: 10.1111/dom.15077.<br />
                                                            2. Blüher M. Metabolically Healthy Obesity. Endocr Rev. 2020
                                                            May 1;41(3):bnaa004.
                                                        </li>
                                                    </ul>
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
                                                                        GLP-1 Based Therapy of Obesity
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Michael A. Nauck</p>
                                                                        (Ruhr-University Bochum, Germany)
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
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="light_sky_bg">
                                                <td>12:00-13:00</td>
                                                <td>
                                                    <p class="font_20 bold">Luncheon Symposium 1</p>
                                                    <p><span class="bold">Chairperson : Hyung Joon Yoo</span> (CM Hospital, Korea)</p>
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
                                                                    Optimal Combination Therapy for Diabetes Management
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Bukyung Kim</p>(Kosin University, Korea)
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
                            <li name="keynote_lecture_8">
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="special_bg">
                                                <td>13:00-13:40</td>
                                                <td>
                                                    <p class="font_20 bold">Special Scientific Session 1</p>
                                                    <!-- <p><span class="bold">Chairperson : Sung Soo Kim</span> (Chungnam
                                                        National University, Republic of Korea)</p> -->
                                                    <!-- <button class="btn gray2_btn program_detail_btn">Preview</button> -->
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="program_detail_td">
                                                    <p class="bold">Organizer: Soo Lim (Seoul National University,
                                                        Republic of Korea)</p>
                                                    <ul>
                                                        <li>Matthias Blüher is Head of the Obesity Outpatient Clinic for
                                                            Adults at the University of Leipzig Department of Medicine
                                                            in Leipzig, Germany. He is Professor of Molecular
                                                            Endocrinology, with board certifications in Internal
                                                            Medicine, Endocrinology and Diabetology. From 2006 to 2012,
                                                            Professor Blüher served as Head of the Clinical Research
                                                            Group ‘Atherobesity,’ and since 2013, he has been Speaker of
                                                            the Collaborative Research Center on obesity mechanisms.
                                                        </li>
                                                        <li>Professor Blüher has won several awards, including the
                                                            Obesity Research Award of the German Society for the Study
                                                            of Obesity, the Ferdinand-Bertram-Prize of the German
                                                            Diabetes Association, and the Rising Star Lecture at the
                                                            44th European Association for the Study of Diabetes (EASD)
                                                            meeting. More recently, he received the Hans Christian
                                                            Hagedorn Award from the German Diabetes Association in 2011
                                                            and the Minkowski Award from the EASD in 2015.</li>
                                                        <li>
                                                            <span class="font_inherit bold">• References</span><br />
                                                            1. Blüher M, Aras M, Aronne LJ, Batterham RL, Giorgino F, Ji
                                                            L, Pietiläinen KH, Schnell O, Tonchevska E, Wilding JPH. New
                                                            insights into the treatment of obesity. Diabetes Obes Metab.
                                                            2023 Apr 13. doi: 10.1111/dom.15077.<br />
                                                            2. Blüher M. Metabolically Healthy Obesity. Endocr Rev. 2020
                                                            May 1;41(3):bnaa004.
                                                        </li>
                                                    </ul>
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
                                                                    <td>13:00-13:30</td>
                                                                    <td class="bold">
                                                                    Nutrients-Stimulated Hormone-Based Pharmacotherapy for the Treatment of Obesity: Sparks from the Pipeline!
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Ania Jastreboff</p>
                                                                        (Yale University, USA)
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
                            <li name="symposium_5">
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="dark_green_bg">
                                                <td>14:00-15:30</td>
                                                <td>
                                                    <p class="font_20 bold">Symposium 5 : Current Perspectives on Health Inequity in Obesity</p>
                                                    <p><span class="bold">Chairpersons : Young Seol Kim</span> (Kyung Hee University, Korea), <br><span class="bold">Kyung-Hee Park</span> (Hallym University, Korea)</p>
													<!-- <button class="btn gray2_btn program_detail_btn">Preview</button> -->
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="program_detail_td">
                                                    <p class="bold">Organizer: Kyung Hee Park (Hallym University,
                                                        Republic of Korea), Jin-Wook Kim (Hippocrata Clinic), Yoon Jeong
                                                        Cho (Daegu Catholic University, Republic of Korea)</p>
                                                    <ul>
                                                        <li>The development of new drugs for treating obesity is
                                                            ongoing, and more potent medications are being introduced.
                                                            Among them, semaglutide and tirzepatide will soon be
                                                            available in Korea, and their efficacy has been proven based
                                                            on various clinical trials. In Symposium 5, we will discuss
                                                            the efficacy of semaglutide and tirzepatide, as well as
                                                            expectations and side effects associated with their use. In
                                                            line with this, we will explore the safety and status of
                                                            drug abuse when using anti-obesity drugs, which should be
                                                            considered as important as their efficacy. This symposium
                                                            will provide an opportunity for us to collectively
                                                            contemplate the direction for optimal treatment in this
                                                            field.</li>
                                                        <li>
                                                            <span class="font_inherit bold">• References</span><br />
                                                            1. J Obes Metab Syndr. 2023 Jun 30; 32(2): 121–129.
                                                            Diagnosis of Obesity: 2022 Update of Clinical Practice
                                                            Guidelines for Obesity by the Korean Society for the Study
                                                            of Obesity<br />
                                                            2. Lancet Diabetes Endocrinol 2022; 10: 193–206. Semaglutide
                                                            once a week in adults with overweight or obesity, with or
                                                            without type 2 diabetes in an east Asian population (STEP
                                                            6): a randomised, double-blind, double-dummy,
                                                            placebo-controlled, phase 3a trial<br />
                                                            3. Diabetes Obes Metab. 2023 Apr;25(4):1056-1067. Safety and
                                                            efficacy analyses across age and body mass index subgroups
                                                            in East Asian participants with type 2 diabetes in the phase
                                                            3 tirzepatide studies (SURPASS programme)<br />
                                                            4. Diabetes Obes Metab.2021;23:1232–1241.Cardiovascular
                                                            safety of evogliptin in patients with type 2 diabetes: A
                                                            nationwide cohort study.
                                                        </li>
                                                    </ul>
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
                                                                    Obesity Related Health Disparities - A Specific Case of Low- and Middle-Income Countries
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Monika Chaudhary</p>(Johns Hopkins University, USA)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>14:25-14:50</td>
                                                                    <td class="bold">
                                                                    The Food Insecurity - Obesity Paradox and Strategies to Address Food Insecurity
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Seul Ki Choi</p>(University of Seoul, Korea)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>14:50-15:15</td>
                                                                    <td class="bold">
                                                                    Managing Weight in Urban Neighborhoods: Qualitative Case Studies
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Seunghyun Yoo</p>(Seoul National University, Korea)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>15:15-15:30</td>
                                                                    <td class="bold">
                                                                        Panel Discussion
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Kyunghee Jung-Choi</p>(Ewha Womans University, Korea), <br>
                                                                        <p class="bold">Sang Min Park</p>(Seoul National University, Korea)
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
                                                <td>15:30-15:40</td>
                                                <td>
                                                    <p class="font_20 bold">Break</p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                            <li name="keynote_lecture_3">
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="plenary_bg">
                                                <td>15:40-16:20</td>
                                                <td>
                                                    <p class="font_20 bold">Plenary Lecture 2</p>
                                                    <p><span class="bold">Chairperson : Kee-Hyoung Lee</span> (Korea University, Korea)</p>
                                                    <button class="btn gray2_btn program_detail_btn">Preview</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="program_detail_td">
                                                    <p class="bold">Organizer : Yong Hee Hong (Soonchunhyang University, Korea)</p>
                                                    <ul>
                                                        <li>Prof. Silva Arslanian is one of the global leaders in research on pediatric obesity and type 2 diabetes. She is a pediatric endocrinologist and a scientific director of the Center for Pediatric Research in Obesity and Metabolism at the University of Pittsburgh. She is the recipient of several prestigious awards, the latest being the 2023 American Diabetes Association Outstanding Achievement Award. In this keynote lecture, she will introduce new pharmacotherapeutic modalities for youth-onset type 2 diabetes, which has recently been on the rise globally as well as in Korea.</li>
                                                    </ul>
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
                                                                    Management of Youth Type 2 Diabetes: New Pharmacotherapeutic Modalities
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Silva Arslanian</p>(University of Pittsburgh, USA)
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
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="dark_green_bg">
                                                <td>16:30-18:00</td>
                                                <td>
                                                    <p class="font_20 bold">Symposium 9 : Obesity and Cardiovascular Health
                                                    </p>
                                                    <p><span class="bold">Chairpersons : Yoon-Sok Chung</span> (Ajou University, Korea), <br><span class="bold">Do Thi Ngoc Diep</span> (Vietnam Nutrition Association, Vietnam)
                                                    </p>
                                                    <!-- <button class="btn gray2_btn program_detail_btn">Preview</button> -->
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="program_detail_td">
                                                    <p class="bold">Organizer: Yun-Hee Lee (Seoul National University,
                                                        Republic of Korea)</p>
                                                    <ul>
                                                        <li>The topic of this session is “Obesity in special
                                                            conditions”. Beyond recognizing obesity as the same disease
                                                            condition, we would like to have time to look at cases with
                                                            various accompanying diseases. The first speaker, Dicky L.
                                                            Tahapary, will discuss the diagnosis and treatment of obese
                                                            patients with diabetes. The second speaker, Wen-Yuan Lin,
                                                            will introduce studies related to obesity with sarcopenia.
                                                            The last speaker, Professor Tae Nyun Kim, will discuss the
                                                            new concept of osteoporosis-sarcopenic obesity.</li>
                                                    </ul>
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
                                                                    Reconsidering the Role of Mitochondria in Nutrient Sensing
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Richard Kibbey</p>(Yale University, USA)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>16:55-17:20</td>
                                                                    <td class="bold">
                                                                    Bariatric Surgery in Patients with Advanced Heart Failure
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Kyung-Hee Kim</p>(Incheon Sejong Hospital, Korea)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>17:20-17:45</td>
                                                                    <td class="bold">
                                                                    Body Composition and Its Associations with Disease Risk: Measures, Assessment Techniques, and Future Directions
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Jonathan Bennett</p>(University of Hawaii Cancer Center, USA)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>17:45-18:00</td>
                                                                    <td class="bold">Panel Discussion</td>
                                                                    <td class="text_r">
                                                                        <!-- <p class="bold">Bumjo Oh</p>(Seoul National
                                                                        University, Republic of Korea), <br>
                                                                        <p class="bold">Hyon-Seung Yi</p>(Chungnam
                                                                        National University, Republic of Korea) -->
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
                            <li name="easo_presidential_lecture">
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="dark_pink_bg">
                                                <td>18:05-18:40</td>
                                                <td>
                                                    <p class="font_20 bold">EASO Presidential Lecture</p>
                                                    <p><span class="bold">Chairperson : Sung Rae Kim</span> (The Catholic University of Korea, Korea)</p>
                                                    <!-- <button class="btn gray2_btn program_detail_btn">Preview</button> -->
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="program_detail_td">
                                                    <p class="bold">Organizer : Jang Won Son (The Catholic University of
                                                        Korea, Republic of Korea)</p>
                                                    <ul>
                                                        <li>Professor Thiruma V. Arumugam, a distinguished researcher in
                                                            the fields of physiology and pharmacology at La Trobe
                                                            University, Australia, is pushing the boundaries of
                                                            neuroscience and metabolism. In his upcoming lecture, he
                                                            will discuss how his work on intermittent metabolic
                                                            switching has enhanced our comprehension of its effect on
                                                            brain health, paving the way for potential therapeutic
                                                            interventions.</li>
                                                        <li>His recent publication in Theranostics, titled
                                                            "Time-restricted feeding modulates the DNA methylation
                                                            landscape, attenuates hallmark neuropathology and cognitive
                                                            impairment in a mouse model of vascular dementia," has
                                                            presented novel insights into the therapeutic potential of
                                                            intermittent metabolic switching, offering promising
                                                            strategies for managing and potentially reversing cognitive
                                                            impairment in dementia.</li>
                                                        <li>Further expanding our understanding, Professor Arumugam's
                                                            article in Cell Metabolism, "Hallmarks of Brain Aging:
                                                            Adaptive and Pathological Modification by Metabolic States,"
                                                            continues to revolutionize our perspective on the role of
                                                            metabolism in brain aging.</li>
                                                    </ul>
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
                                                                    <td>18:05-18:35</td>
                                                                    <td class="bold">
                                                                    Management of Obesity in Older Adults
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Volkan Yumuk</p>(Istanbul University-Cerrahpaşa, Turkey)
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
                        </ul>
                    </div>
                    <!-- !!! Day2 - Room2 -->
                    <div class="tab_cont">
                        <ul class="program_detail_ul">
                            <li name="breakfast_symposium_2">
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="light_sky_bg ">
                                                <td>07:30-08:20</td>
                                                <td>
                                                    <p class="font_20 bold">Breakfast Symposium 2</p>
                                                    <p><span class="bold">Chairperson : Chul Sik Kim</span> (Yonsei University, Korea)</p>
                                                    <!-- <button class="btn gray2_btn program_detail_btn">Preview</button> -->
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
                                                                    Efficacy and Safety of Naltrexone-Bupropion in Korean Adults with Obesity: Post-Marketing Surveillance Study
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Young Sang Lyu</p>(Chosun University, Korea)
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
                            <li name="keynote_lecture_1_2">
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="keynote_bg">
                                                <td>08:30-09:10</td>
                                                <td>
                                                    <p class="font_20 bold">Keynote Lecture 1</p>
                                                    <p><span class="bold">Chairperson : Min-Seon Kim</span> (University of Ulsan, Korea)</p> 
                                                    <button class="btn gray2_btn program_detail_btn">Preview</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="program_detail_td">
                                                <p class="bold">Organizer : Ki Woo Kim (Yonsei University, College of Dentistry, Korea)</p>
                                                    <ul>
                                                        <li>In this session, Dr. Elmquist, Dean of Research at UT-Southwestern Medical Center and Director of the Center for Hypothalamic Research, will introduce a new platform for identifying key factors in obesity and metabolic regulation through the hypothalamus. He will explain the identified factors and present the latest research on how these factors influence whole-body homeostasis. This presentation will provide crucial insights into the mechanisms of hypothalamic function and the regulation of obesity and metabolic disorders, greatly benefiting conference attendees.
                                                        </li>
                                                        <li>
                                                            <span class="font_inherit bold">• References</span><br />
                                                            1. Coordination of metabolism, arousal, and reward by orexin/hypocretin neurons<br />2. Leptin and brain-adipose crosstalks</li>
                                                    </ul>
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
                                                                    SF-1 Targets in the Hypothalamus: Novel Pathways Regulating Energy Balance
and Metabolism
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Joel K. Elmquist</p>(UT Southwestern Medical Center, USA)
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
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="dark_green_bg">
                                                <td>09:20-10:50</td>
                                                <td>
                                                    <p class="font_20 bold">Symposium 2 : Gut, Brain, and Obesity</p>
                                                     <p><span class="bold">Chairpersons : Wen-Yuan Lin</span> (China Medical University, Taiwan), 
                                                     <br><span class="bold">Kae Won Cho</span> (Soonchunhyang University, Korea)</p>
                                                    <button class="btn gray2_btn program_detail_btn">Preview</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="program_detail_td">
                                                    <p class="bold">Organizer : Jang Won Son (The Catholic University of Korea, Korea), Kyung Ae Lee (Jeonbuk National University, Korea)</p>
                                                    <ul>
                                                        <li>This insightful symposium will feature groundbreaking research on the intricate interactions between the gut microbiota, peripheral organs, and the central nervous system in the context of obesity and metabolic regulation. Prof. Chih-Yen Chen from National Yang Ming Chiao Tung University in Taiwan, will discuss on gut hormone, brain, and obesity, Prof. Teppei Fujikawa from UT Southwestern Medical Center in the USA, will present his research on decoding VMH regulation of food intake in adults, and last but not least, Prof. Ki Woo Kim from Yonsei University in Korea, will explore how a microbiota-derived short chain fatty acid targets the hypothalamus and regulates energy balance.

                                                        </li>
                                                    </ul>
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
                                                                    Gut Hormone, Brain, and Obesity
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Chih-Yen Chen</p>(National Yang Ming Chiao Tung University, Taiwan)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>09:45-10:10</td>
                                                                    <td class="bold">
                                                                    Decoding VMH Regulation of Food Intake in Adults
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Teppei Fujikawa</p>(UT Southwestern Medical Center, USA)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>10:10-10:35</td>
                                                                    <td class="bold">
                                                                    A Microbiota-Derived Short Chain Fatty Acid Targets the Hypothalamus and Regulates Energy Balance
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Ki Woo Kim</p>
                                                                        (Yonsei University, Korea)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>10:35-10:50</td>
                                                                    <td class="bold">Panel Discussion</td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Obin Kwon</p>(Seoul National University, Korea), <br>
                                                                        <p class="bold">Jaemin Lee</p>(DGIST, Korea)
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
                            <li name="opening_address_2">
                                <div class="table_wrap detail_table_common x_scroll border_bottom_70">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="white_yellow_bg">
                                                <td>11:00-11:10</td>
                                                <td>
                                                    <p class="font_20 bold mb0">Opening Address</p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                            <li name="keynote_lecture_2_2">
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="plenary_bg">
                                                <td>11:10-11:50</td>
                                                <td>
                                                    <p class="font_20 bold">Plenary Lecture 1</p>
                                                    <p><span class="bold">Chairperson : Jeong Taek Woo</span> (Kyung Hee University, Korea)</p>
                                                    <!-- <button class="btn gray2_btn program_detail_btn">Preview</button> -->
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="program_detail_td">
                                                    <p class="bold">Organizer: Soo Lim (Seoul National University,
                                                        Republic of Korea)</p>
                                                    <ul>
                                                        <li>Matthias Blüher is Head of the Obesity Outpatient Clinic for
                                                            Adults at the University of Leipzig Department of Medicine
                                                            in Leipzig, Germany. He is Professor of Molecular
                                                            Endocrinology, with board certifications in Internal
                                                            Medicine, Endocrinology and Diabetology. From 2006 to 2012,
                                                            Professor Blüher served as Head of the Clinical Research
                                                            Group ‘Atherobesity,’ and since 2013, he has been Speaker of
                                                            the Collaborative Research Center on obesity mechanisms.
                                                        </li>
                                                        <li>Professor Blüher has won several awards, including the
                                                            Obesity Research Award of the German Society for the Study
                                                            of Obesity, the Ferdinand-Bertram-Prize of the German
                                                            Diabetes Association, and the Rising Star Lecture at the
                                                            44th European Association for the Study of Diabetes (EASD)
                                                            meeting. More recently, he received the Hans Christian
                                                            Hagedorn Award from the German Diabetes Association in 2011
                                                            and the Minkowski Award from the EASD in 2015.</li>
                                                        <li>
                                                            <span class="font_inherit bold">• References</span><br />
                                                            1. Blüher M, Aras M, Aronne LJ, Batterham RL, Giorgino F, Ji
                                                            L, Pietiläinen KH, Schnell O, Tonchevska E, Wilding JPH. New
                                                            insights into the treatment of obesity. Diabetes Obes Metab.
                                                            2023 Apr 13. doi: 10.1111/dom.15077.<br />
                                                            2. Blüher M. Metabolically Healthy Obesity. Endocr Rev. 2020
                                                            May 1;41(3):bnaa004.
                                                        </li>
                                                    </ul>
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
                                                                    GLP-1 Based Therapy of Obesity
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Michael A. Nauck</p>
                                                                        (Ruhr-University Bochum, Germany)
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
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="light_sky_bg">
                                                <td>12:00-13:00</td>
                                                <td>
                                                    <p class="font_20 bold">Luncheon Symposium 2</p>
                                                    <p><span class="bold">Chairperson : Gyeong-Su Kim</span> (The Catholic University of Korea, Korea)</p>
                                                    <!-- <button class="btn gray2_btn program_detail_btn">Preview</button> -->
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
                                                                    DPP-IV Inhibitor and SGLT2 Inhibitor Combination Therapy for the Treatment of T2DM
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Joonyub Lee</p>(The Catholic University of Korea, Korea)
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
                            <li name="keynote_lecture_8_2">
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="special_bg">
                                                <td>13:00-13:40</td>
                                                <td>
                                                    <p class="font_20 bold">Special Scientific Session 1</p>
                                                    <!-- <p><span class="bold">Chairperson : Sung Soo Kim</span> (Chungnam
                                                        National University, Republic of Korea)</p> -->
                                                    <!-- <button class="btn gray2_btn program_detail_btn">Preview</button> -->
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="program_detail_td">
                                                    <p class="bold">Organizer: Soo Lim (Seoul National University,
                                                        Republic of Korea)</p>
                                                    <ul>
                                                        <li>Matthias Blüher is Head of the Obesity Outpatient Clinic for
                                                            Adults at the University of Leipzig Department of Medicine
                                                            in Leipzig, Germany. He is Professor of Molecular
                                                            Endocrinology, with board certifications in Internal
                                                            Medicine, Endocrinology and Diabetology. From 2006 to 2012,
                                                            Professor Blüher served as Head of the Clinical Research
                                                            Group ‘Atherobesity,’ and since 2013, he has been Speaker of
                                                            the Collaborative Research Center on obesity mechanisms.
                                                        </li>
                                                        <li>Professor Blüher has won several awards, including the
                                                            Obesity Research Award of the German Society for the Study
                                                            of Obesity, the Ferdinand-Bertram-Prize of the German
                                                            Diabetes Association, and the Rising Star Lecture at the
                                                            44th European Association for the Study of Diabetes (EASD)
                                                            meeting. More recently, he received the Hans Christian
                                                            Hagedorn Award from the German Diabetes Association in 2011
                                                            and the Minkowski Award from the EASD in 2015.</li>
                                                        <li>
                                                            <span class="font_inherit bold">• References</span><br />
                                                            1. Blüher M, Aras M, Aronne LJ, Batterham RL, Giorgino F, Ji
                                                            L, Pietiläinen KH, Schnell O, Tonchevska E, Wilding JPH. New
                                                            insights into the treatment of obesity. Diabetes Obes Metab.
                                                            2023 Apr 13. doi: 10.1111/dom.15077.<br />
                                                            2. Blüher M. Metabolically Healthy Obesity. Endocr Rev. 2020
                                                            May 1;41(3):bnaa004.
                                                        </li>
                                                    </ul>
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
                                                                    <td>13:00-13:30</td>
                                                                    <td class="bold">
                                                                    Nutrients-Stimulated Hormone-Based Pharmacotherapy for the Treatment of Obesity: Sparks from the Pipeline!
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Ania Jastreboff</p>
                                                                        (Yale University, USA)
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
                            <li name="symposium_6">
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="dark_green_bg">
                                                <td>14:00-15:30</td>
                                                <td>
                                                    <p class="font_20 bold">Symposium 6 : Holistic Approach to Obesity Management: Exploring Exercise, Metabolism, and Muscle Health
                                                    </p>
                                                    <p>
                                                        <span class="bold">Chairpersons : Yun-A Shin</span> (Dankook University, Korea),<br />
                                                        <span class="bold">Minchul Lee</span> (CHA University, Korea)
                                                    </p>
                                                    <button class="btn gray2_btn program_detail_btn">Preview</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="program_detail_td">
                                                <p class="bold">Organizer : Sewon Lee (Incheon National University, Korea), Minchul Lee (CHA University, Korea)</p>
                                                    <ul>
                                                        <li>Symposium 6 aims to comprehensively explore the roles of exercise-induced mitochondrial controls in skeletal muscle, novel strategies in managing NAFLD focusing on muscle metabolism and exercise, and the impact of exercise intervention on sarcopenia and menopause in women. By taking a holistic approach, this symposium delves into various aspects of obesity management, examining the interplay between exercise, metabolism, and muscle health.</li>
                                                        <!-- <li>Professor Blüher has won several awards, including the
                                                            Obesity Research Award of the German Society for the Study
                                                            of Obesity, the Ferdinand-Bertram-Prize of the German
                                                            Diabetes Association, and the Rising Star Lecture at the
                                                            44th European Association for the Study of Diabetes (EASD)
                                                            meeting. More recently, he received the Hans Christian
                                                            Hagedorn Award from the German Diabetes Association in 2011
                                                            and the Minkowski Award from the EASD in 2015.</li>
                                                        <li>
                                                            <span class="font_inherit bold">• References</span><br />
                                                            1. Blüher M, Aras M, Aronne LJ, Batterham RL, Giorgino F, Ji
                                                            L, Pietiläinen KH, Schnell O, Tonchevska E, Wilding JPH. New
                                                            insights into the treatment of obesity. Diabetes Obes Metab.
                                                            2023 Apr 13. doi: 10.1111/dom.15077.<br />
                                                            2. Blüher M. Metabolically Healthy Obesity. Endocr Rev. 2020
                                                            May 1;41(3):bnaa004.
                                                        </li> -->
                                                    </ul>
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
                                                                    Exercise-Induced Mitochondrial Controls in Skeletal Muscle
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Yuho Kim</p>(University of Massachusetts-Lowell, USA)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>14:25-14:50</td>
                                                                    <td class="bold">
                                                                        Lifestyle Strategies in the Management of MAFLD: The Role of Muscle Metabolism and Exercise
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Sechang Oh</p>(R Professional University of Rehabilitation, Japan)
                                                                    </td>

                                                                </tr>
                                                                <tr>
                                                                    <td>14:50-15:15</td>
                                                                    <td class="bold">
                                                                    Sarcopenia, Menopause, and Exercise Intervention in Women
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Young-Min Park</p>(Incheon National University, Korea)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>15:15-15:30</td>
                                                                    <td class="bold">Panel Discussion</td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Hyo Youl Moon</p>(Seoul National University, Korea),<br>
                                                                        <p class="bold">Kwangseok Hong</p>(Chung-Ang University, Korea)
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
                                                <td>15:30-15:40</td>
                                                <td>
                                                    <p class="font_20 bold">Break</p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                            <li name="keynote_lecture_3_2">
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="plenary_bg">
                                                <td>15:40-16:20</td>
                                                <td>
                                                    <p class="font_20 bold">Plenary Lecture 2</p>
                                                    <p><span class="bold">Chairperson : Kee-Hyoung Lee</span> (Korea University, Korea)</p>
                                                    <button class="btn gray2_btn program_detail_btn">Preview</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="program_detail_td">
                                                <p class="bold">Organizer : Yong Hee Hong (Soonchunhyang University, Korea)</p>
                                                    <ul>
                                                        <li>Prof. Silva Arslanian is one of the global leaders in research on pediatric obesity and type 2 diabetes. She is a pediatric endocrinologist and a scientific director of the Center for Pediatric Research in Obesity and Metabolism at the University of Pittsburgh. She is the recipient of several prestigious awards, the latest being the 2023 American Diabetes Association Outstanding Achievement Award. In this keynote lecture, she will introduce new pharmacotherapeutic modalities for youth-onset type 2 diabetes, which has recently been on the rise globally as well as in Korea.</li>
                                                    </ul>
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
                                                                    Management of Youth Type 2 Diabetes: New Pharmacotherapeutic Modalities
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Silva Arslanian</p>(University of Pittsburgh, USA)
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
                            <li name="symposium_10">
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="dark_green_bg">
                                                <td>16:30-18:00</td>
                                                <td>
                                                    <p class="font_20 bold">Symposium 10 : Obesity and Cancer</p>
                                                    <p><span class="bold">Chairpersons : Hyuk-Sang Kwon</span> (The Catholic University of Korea, Korea)
                                                    , <br><span class="bold">Elaine Rush</span> (Auckland University of Technology, New Zealand)
                                                    </p> 
													<!-- <button class="btn gray2_btn program_detail_btn">Preview</button> -->
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="program_detail_td">
													<p class="bold">Organizer: Hyung Jin Choi (Seoul National University, Republic of Korea)</p>
													<ul>
														<li>In this session, we will delve into the intricate interplay between neuropsychology and obesity. Dr. Yun Ha Jeong from the Korea Brain Research Institute will discuss the impact of obesity and HDL concentration on the pathology of Alzheimer's disease (AD). Through an analysis of AD pathological changes in 5XFAD mice after obesity induction through a high-fat diet, Dr. Jeong presents a noteworthy phenomenon where the increase in HDL and APOA-I serum levels mitigates AD features, offering a potential avenue for novel therapeutic strategies.</li>
														<li>Subsequently, Professor Kwang Wei Tham from  Singapore Woodlands Health will elucidate how weight-related biases affect the physical, mental health, and obesity management of individuals. Lastly, Professor Youn Huh from Eulji University will explore the link between type 2 diabetes and dementia, emphasizing the growing relevance of preventing and managing these conditions, and discussing how type 2 diabetes escalates dementia risks, urging the derivation of preventive strategies based on research findings in light of the increasing prevalence of both diseases.</li>
													</ul>
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
                                                                    Body Mass Index and Cancer Risk Among Adults With and Without Cardiometabolic Diseases
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Emma Fontvieille</p>(International Agency for Research on Cancer, IARC/WHO, France)
                                                                    </td>
                                                                </tr> 
                                                                <tr>
                                                                    <td>16:55-17:20</td>
                                                                    <td class="bold">
                                                                    Metabolic Health and Risk of Breast Cancer: A Focus on Impact of Body Composition and Waist Circumference
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Mai Thi Xuan Tran</p>(Hanyang University, Korea)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>17:20-17:45</td>
                                                                    <td class="bold">
                                                                    Lifestyle, Obesity, and Cancer
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Wonsock Kim</p>(Eulji University, Korea)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>17:45-18:00</td>
                                                                    <td class="bold">Panel Discussion</td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Young-Sang Kim</p>(CHA University, Korea),<br />
                                                                        <p class="bold">Dong Wook Shin</p>(Sungkyunkwan University, Korea)
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
                            <li name="easo_presidential_lecture_1">
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="dark_pink_bg">
                                                <td>18:05-18:40</td>
                                                <td>
                                                    <p class="font_20 bold">EASO Presidential Lecture</p>
                                                    <p><span class="bold">Chairperson : Sung Rae Kim</span> (The Catholic University of Korea, Korea)</p>
                                                    <!-- <button class="btn gray2_btn program_detail_btn">Preview</button> -->
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="program_detail_td">
                                                    <p class="bold">Organizer : Jang Won Son (The Catholic University of
                                                        Korea, Republic of Korea)</p>
                                                    <ul>
                                                        <li>Professor Thiruma V. Arumugam, a distinguished researcher in
                                                            the fields of physiology and pharmacology at La Trobe
                                                            University, Australia, is pushing the boundaries of
                                                            neuroscience and metabolism. In his upcoming lecture, he
                                                            will discuss how his work on intermittent metabolic
                                                            switching has enhanced our comprehension of its effect on
                                                            brain health, paving the way for potential therapeutic
                                                            interventions.</li>
                                                        <li>His recent publication in Theranostics, titled
                                                            "Time-restricted feeding modulates the DNA methylation
                                                            landscape, attenuates hallmark neuropathology and cognitive
                                                            impairment in a mouse model of vascular dementia," has
                                                            presented novel insights into the therapeutic potential of
                                                            intermittent metabolic switching, offering promising
                                                            strategies for managing and potentially reversing cognitive
                                                            impairment in dementia.</li>
                                                        <li>Further expanding our understanding, Professor Arumugam's
                                                            article in Cell Metabolism, "Hallmarks of Brain Aging:
                                                            Adaptive and Pathological Modification by Metabolic States,"
                                                            continues to revolutionize our perspective on the role of
                                                            metabolism in brain aging.</li>
                                                    </ul>
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
                                                                    <td>18:05-18:35</td>
                                                                    <td class="bold">
                                                                    Management of Obesity in Older Adults
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Volkan Yumuk</p>(Istanbul University-Cerrahpaşa, Turkey)
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
                        </ul>
                    </div>

                    <!-- !!! Day2 - Room 3 -->
                    <div class="tab_cont">
                        <ul class="program_detail_ul">
                            <li name="breakfast_symposium_3">
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="light_sky_bg">
                                                <td>07:30-08:20</td>
                                                <td>
                                                    <p class="font_20 bold">Breakfast Symposium 3</p>
                                                    <p><span class="bold">Chairperson : Sang Yeoup Lee</span> (Pusan National University, Korea)</p>
                                                    <!-- <button class="btn gray2_btn program_detail_btn">Preview</button> -->
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
                            <li name="keynote_lecture_1_3">
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="keynote_bg">
                                                <td>08:30-09:10</td>
                                                <td>
                                                    <p class="font_20 bold">Keynote Lecture 1</p>
                                                    <p><span class="bold">Chairperson : Min-Seon Kim</span> (University of Ulsan, Korea)</p> 
                                                    <button class="btn gray2_btn program_detail_btn">Preview</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="program_detail_td">
                                                <p class="bold">Organizer : Ki Woo Kim (Yonsei University, College of Dentistry, Korea)</p>
                                                    <ul>
                                                        <li>In this session, Dr. Elmquist, Dean of Research at UT-Southwestern Medical Center and Director of the Center for Hypothalamic Research, will introduce a new platform for identifying key factors in obesity and metabolic regulation through the hypothalamus. He will explain the identified factors and present the latest research on how these factors influence whole-body homeostasis. This presentation will provide crucial insights into the mechanisms of hypothalamic function and the regulation of obesity and metabolic disorders, greatly benefiting conference attendees.
                                                        </li>
                                                        <li>
                                                            <span class="font_inherit bold">• References</span><br />
                                                            1. Coordination of metabolism, arousal, and reward by orexin/hypocretin neurons<br />2. Leptin and brain-adipose crosstalks</li>
                                                    </ul>
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
                                                                    SF-1 Targets in the Hypothalamus: Novel Pathways Regulating Energy Balance
                                                                    and Metabolism
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Joel K. Elmquist</p>(UT Southwestern Medical Center, USA)
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
                            <li name="symposium_3">
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="dark_green_bg">
                                                <td>09:20-10:50</td>
                                                <td>
                                                    <p class="font_20 bold">Symposium 3 : Possibilities and Prospects of Digital Therapeutics for Metabolic Diseases</p>
                                                    <p>
                                                        <span class="bold">Chairpersons : Won-Young Lee</span>(Sungkyunkwan University, Korea)
                                                        <!-- ,<br />
                                                        <span class="bold">Sang-Yong Kim</span> (Chosun University,
                                                        Republic of Korea) -->
                                                    </p>
                                                    <button class="btn gray2_btn program_detail_btn">Preview</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="program_detail_td">
                                                    <p class="bold">Organizer : Sang Youl Rhee (Kyung Hee University, Korea)</p>
                                                    <ul>
                                                        <li>This session will explore how digital therapeutics can contribute to treating and managing metabolic diseases. Prof. Sang Youl Rhee from Kyung Hee University will discuss the possibilities of digital therapeutics, Prof. Hyung Jin Choi from Seoul National University will delve into the psychological basis of their effectiveness, and Dr. Min Kyu Han from Kakao Healthcare will suggest ways to integrate digital therapeutics into conventional medical settings.
                                                        </li>
                                                    </ul>
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
                                                                    Possibility of Digital Therapeutics for Treatment and Management of Metabolic Diseases
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Sang Youl Rhee</p>(Kyung Hee University, Korea)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>09:45-10:10</td>
                                                                    <td class="bold">
                                                                    Psychological Basis for the Effectiveness of Digital Therapeutics for Metabolic Diseases
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Hyung Jin Choi</p>(Seoul National University, Korea)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>10:10-10:35</td>
                                                                    <td class="bold">
                                                                    Suggestions for Integrating Digital Therapeutics into Conventional Medical Settings
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Min Kyu Han</p>(Kakao Healthcare Corp., Korea)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>10:35-10:50</td>
                                                                    <td class="bold">Panel Discussion</td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Young Sang Lyu</p>(Chosun University, Korea),
                                                                        <p class="bold">Byoungduck Han</p>(Korea University, Korea)
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
                            <li class="opening_address_3">
                                <div class="table_wrap detail_table_common x_scroll border_bottom_70">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="white_yellow_bg">
                                                <td>11:00-11:10</td>
                                                <td>
                                                    <p class="font_20 bold mb0">Opening Address</p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                            <li name="keynote_lecture_2_3">
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="plenary_bg">
                                                <td>11:10-11:50</td>
                                                <td>
                                                    <p class="font_20 bold">Plenary Lecture 1</p>
                                                    <p><span class="bold">Chairperson : Jeong Taek Woo</span> (Kyung Hee University, Korea)</p>
                                                    <!-- <button class="btn gray2_btn program_detail_btn">Preview</button> -->
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="program_detail_td">
                                                    <p class="bold">Organizer: Soo Lim (Seoul National University,
                                                        Republic of Korea)</p>
                                                    <ul>
                                                        <li>Matthias Blüher is Head of the Obesity Outpatient Clinic for
                                                            Adults at the University of Leipzig Department of Medicine
                                                            in Leipzig, Germany. He is Professor of Molecular
                                                            Endocrinology, with board certifications in Internal
                                                            Medicine, Endocrinology and Diabetology. From 2006 to 2012,
                                                            Professor Blüher served as Head of the Clinical Research
                                                            Group ‘Atherobesity,’ and since 2013, he has been Speaker of
                                                            the Collaborative Research Center on obesity mechanisms.
                                                        </li>
                                                        <li>Professor Blüher has won several awards, including the
                                                            Obesity Research Award of the German Society for the Study
                                                            of Obesity, the Ferdinand-Bertram-Prize of the German
                                                            Diabetes Association, and the Rising Star Lecture at the
                                                            44th European Association for the Study of Diabetes (EASD)
                                                            meeting. More recently, he received the Hans Christian
                                                            Hagedorn Award from the German Diabetes Association in 2011
                                                            and the Minkowski Award from the EASD in 2015.</li>
                                                        <li>
                                                            <span class="font_inherit bold">• References</span><br />
                                                            1. Blüher M, Aras M, Aronne LJ, Batterham RL, Giorgino F, Ji
                                                            L, Pietiläinen KH, Schnell O, Tonchevska E, Wilding JPH. New
                                                            insights into the treatment of obesity. Diabetes Obes Metab.
                                                            2023 Apr 13. doi: 10.1111/dom.15077.<br />
                                                            2. Blüher M. Metabolically Healthy Obesity. Endocr Rev. 2020
                                                            May 1;41(3):bnaa004.
                                                        </li>
                                                    </ul>
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
                                                                    GLP-1 Based Therapy of Obesity
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Michael A. Nauck</p>
                                                                        (Ruhr-University Bochum, Germany)
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
                            <li name="luncheon_symposium_3">
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="light_sky_bg">
                                                <td>12:00-13:00</td>
                                                <td>
                                                    <p class="font_20 bold">Luncheon Symposium 3</p>
                                                    <p><span class="bold">Chairperson : Yong Sung Kim</span> (Design Hospital, Korea)</p>
                                                    <!-- <button class="btn gray2_btn program_detail_btn">Preview</button> -->
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
                                                                    The Earlier Use of SGLT2i, The Better Clinical Outcome in Obese T2D
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Jun Hwa Hong</p>(Eulji University, Korea)
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
                            <li name="keynote_lecture_8_3">
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="special_bg">
                                                <td>13:00-13:40</td>
                                                <td>
                                                    <p class="font_20 bold">Special Scientific Session 1 </p>
                                                    <!-- <p><span class="bold">Chairperson : Sung Soo Kim</span> (Chungnam
                                                        National University, Republic of Korea)</p> -->
                                                    <!-- <button class="btn gray2_btn program_detail_btn">Preview</button> -->
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="program_detail_td">
                                                    <p class="bold">Organizer: Soo Lim (Seoul National University,
                                                        Republic of Korea)</p>
                                                    <ul>
                                                        <li>Matthias Blüher is Head of the Obesity Outpatient Clinic for
                                                            Adults at the University of Leipzig Department of Medicine
                                                            in Leipzig, Germany. He is Professor of Molecular
                                                            Endocrinology, with board certifications in Internal
                                                            Medicine, Endocrinology and Diabetology. From 2006 to 2012,
                                                            Professor Blüher served as Head of the Clinical Research
                                                            Group ‘Atherobesity,’ and since 2013, he has been Speaker of
                                                            the Collaborative Research Center on obesity mechanisms.
                                                        </li>
                                                        <li>Professor Blüher has won several awards, including the
                                                            Obesity Research Award of the German Society for the Study
                                                            of Obesity, the Ferdinand-Bertram-Prize of the German
                                                            Diabetes Association, and the Rising Star Lecture at the
                                                            44th European Association for the Study of Diabetes (EASD)
                                                            meeting. More recently, he received the Hans Christian
                                                            Hagedorn Award from the German Diabetes Association in 2011
                                                            and the Minkowski Award from the EASD in 2015.</li>
                                                        <li>
                                                            <span class="font_inherit bold">• References</span><br />
                                                            1. Blüher M, Aras M, Aronne LJ, Batterham RL, Giorgino F, Ji
                                                            L, Pietiläinen KH, Schnell O, Tonchevska E, Wilding JPH. New
                                                            insights into the treatment of obesity. Diabetes Obes Metab.
                                                            2023 Apr 13. doi: 10.1111/dom.15077.<br />
                                                            2. Blüher M. Metabolically Healthy Obesity. Endocr Rev. 2020
                                                            May 1;41(3):bnaa004.
                                                        </li>
                                                    </ul>
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
                                                                    <td>13:00-13:30</td>
                                                                    <td class="bold">
                                                                    Nutrients-Stimulated Hormone-Based Pharmacotherapy for the Treatment of Obesity: Sparks from the Pipeline!
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Ania Jastreboff</p>
                                                                        (Yale University, USA)
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
                            <li name="symposium_7">
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="dark_green_bg">
                                                <td>14:00-15:30</td>
                                                <td>
                                                    <p class="font_20 bold">Symposium 7 : Lipid Remodeling and Adipocyte Biology in Metabolic Health and Disease</p>
                                                    <p><span class="bold">Chairpersons : Yun-Hee Lee</span> (Seoul National University, Korea)
                                                        , <br><span class="bold">Dae Ho Lee</span> (Gachon University, Korea)
                                                    </p>
                                                    <button class="btn gray2_btn program_detail_btn">Preview</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="program_detail_td">
                                                    <p class="bold">Organizer : Yun-Hee Lee (Seoul National University, College of Pharmacy)</p>
                                                    <ul>
                                                        <li>This session brings together leading scientists to explore the complex interplay between adipose tissue biology, lipid metabolism, and metabolic diseases, offering insights into potential therapeutic strategies for obesity-related conditions. The first talk introduces the "Role of Lipid Droplets in Health and Cardiometabolic Disease”. The second presentation lipomatosis and its implications for aging and vascular health. Lastly, we will explore "The Functional Relevance of a Microbiome-Derived SCFA in Reprogramming Hepatic Lipid Metabolism” 
                                                        </li>
                                                    </ul>
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
                                                                    Role of Lipid Droplets in Health and Cardiometabolic Disease
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Emilio Mottillo</p>
                                                                        (Henry Ford Hospital, USA)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>14:25-14:50</td>
                                                                    <td class="bold">
                                                                    Stromal Transdifferentiation Drives Lipomatosis and Induces Extensive Vascular Remodeling in the Aging Human Lymph Node
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Maria Ulvmar</p>(Uppsala University, Sweden)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>14:50-15:15</td>
                                                                    <td class="bold">
                                                                    The Functional Relevance of a Microbiome-Derived SCFA in Reprogramming Hepatic Lipid Metabolism
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Dong Wook Choi</p>(Korea University, Korea)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>15:15-15:30</td>
                                                                    <td class="bold">
                                                                        Panel Discussion
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Ja Hyun Koo</p>(Seoul National University, Korea),<br />
                                                                        <p class="bold">Ki Yong Hong</p>(Seoul National University, Korea)
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
                                                <td>15:30-15:40</td>
                                                <td>
                                                    <p class="font_20 bold">Break</p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                            <li name="keynote_lecture_3_3">
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="plenary_bg">
                                                <td>15:40-16:20</td>
                                                <td>
                                                    <p class="font_20 bold">Plenary Lecture 2</p>
                                                    <p><span class="bold">Chairperson : Kee-Hyoung Lee</span> (Korea University, Korea)</p>
                                                    <button class="btn gray2_btn program_detail_btn">Preview</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="program_detail_td">
                                                <p class="bold">Organizer : Yong Hee Hong (Soonchunhyang University, Korea)</p>
                                                    <ul>
                                                        <li>Prof. Silva Arslanian is one of the global leaders in research on pediatric obesity and type 2 diabetes. She is a pediatric endocrinologist and a scientific director of the Center for Pediatric Research in Obesity and Metabolism at the University of Pittsburgh. She is the recipient of several prestigious awards, the latest being the 2023 American Diabetes Association Outstanding Achievement Award. In this keynote lecture, she will introduce new pharmacotherapeutic modalities for youth-onset type 2 diabetes, which has recently been on the rise globally as well as in Korea.</li>
                                                    </ul>
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
                                                                    Management of Youth Type 2 Diabetes: New Pharmacotherapeutic Modalities
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Silva Arslanian</p>(University of Pittsburgh, USA)
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
                            <li name="symposium_11">
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="dark_green_bg">
                                                <td>16:30-18:00</td>
                                                <td>
                                                    <p class="font_20 bold">Symposium 11 : Perspectives in Digital Nutrition Care for Obesity </p>
                                                     <p><span class="bold">Chairpersons : Jeong Hyun Lim</span> (Seoul National University, Korea)
                                                   , <br><span class="bold">Yoonju Song</span> (The Catholic University of Korea, Korea) 
                                                    <button class="btn gray2_btn program_detail_btn">Preview</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="program_detail_td">
                                                <p class="bold">Organizer : Jeong Hyun Lim (Seoul National University, Korea), SuJin Song (Hannam University, Korea), Oh Yoen Kim (Dong-A University, Korea), Hyunjung Lim (Kyung Hee University, Korea)</p>
                                                    <ul>
                                                        <li>In this session, we will discuss the effective application of digital health care and telenutrition for the prevention and management of obesity. The first speaker, Prof. Wen Peng of Qinghai University, will review relevant studies conducted in Asia, and the second speaker, Prof. Melissa Ventura Marra of West Virginia University, will introduce the effects of telenutrition based on the results of clinical studies in the United States. The last speaker, Dr. Shin Ok Park of Noom Korea, will give a lecture on the pros and cons of applying telenutrition in weight management and future prospects.

                                                        </li>
                                                        <li>
                                                            <span class="font_inherit bold">• References</span><br />
                                                            1. Liang F, Yang X, Peng W, Zhen S, Cao W, Li Q, Xiao Z, Gong M, Wang Y, Gu D. Applications of digital health approaches for cardiometabolic diseases prevention and management in the Western Pacific region. Lancet Reg Health West Pac. 2023;43:100817
                                                            <br />2. Ventura Marra M, Lilly CL, Nelson KR, Woofter DR, Malone J. A Pilot Randomized Controlled Trial of a Telenutrition Weight Loss Intervention in Middle-Aged and Older Men with Multiple Risk Factors for Cardiovascular Disease. Nutrients. 2019;11(2):229</li>
                                                    </ul>
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
                                                                    Applications of Digital Health and Nutrition Approaches for Obesity Prevention and Management in the Western Pacific Region
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Wen Peng</p>(Qinghai University, China)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>16:55-17:20</td>
                                                                    <td class="bold">
                                                                    Exploring the Landscape of Telenutrition in Obesity Management
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Melissa Ventura-Marra</p>(West Virginia University, USA)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>17:20-17:45</td>
                                                                    <td class="bold">
                                                                    Telenutrition for Weight Management: Benefits, Limits, and Future Perspectives</td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Shinok Park</p>(Noom Korea, Korea)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>17:45-18:00</td>
                                                                    <td class="bold">
                                                                        Panel Discussion
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <!-- <p class="bold">Oh Yoen Kim</p>(Dong-A
                                                                        University, Republic of Korea),<br />
                                                                        <p class="bold">Min-Jeong Shin</p>(Korea
                                                                        University, Republic of Korea) -->
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
                            <li name="easo_presidential_lecture_2">
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="dark_pink_bg">
                                                <td>18:05-18:40</td>
                                                <td>
                                                    <p class="font_20 bold">EASO Presidential Lecture</p>
                                                    <p><span class="bold">Chairperson : Sung Rae Kim</span> (The Catholic University of Korea, Korea)</p>
                                                    <!-- <button class="btn gray2_btn program_detail_btn">Preview</button> -->
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="program_detail_td">
                                                    <p class="bold">Organizer : Jang Won Son (The Catholic University of
                                                        Korea, Republic of Korea)</p>
                                                    <ul>
                                                        <li>Professor Thiruma V. Arumugam, a distinguished researcher in
                                                            the fields of physiology and pharmacology at La Trobe
                                                            University, Australia, is pushing the boundaries of
                                                            neuroscience and metabolism. In his upcoming lecture, he
                                                            will discuss how his work on intermittent metabolic
                                                            switching has enhanced our comprehension of its effect on
                                                            brain health, paving the way for potential therapeutic
                                                            interventions.</li>
                                                        <li>His recent publication in Theranostics, titled
                                                            "Time-restricted feeding modulates the DNA methylation
                                                            landscape, attenuates hallmark neuropathology and cognitive
                                                            impairment in a mouse model of vascular dementia," has
                                                            presented novel insights into the therapeutic potential of
                                                            intermittent metabolic switching, offering promising
                                                            strategies for managing and potentially reversing cognitive
                                                            impairment in dementia.</li>
                                                        <li>Further expanding our understanding, Professor Arumugam's
                                                            article in Cell Metabolism, "Hallmarks of Brain Aging:
                                                            Adaptive and Pathological Modification by Metabolic States,"
                                                            continues to revolutionize our perspective on the role of
                                                            metabolism in brain aging.</li>
                                                    </ul>
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
                                                                    <td>18:05-18:35</td>
                                                                    <td class="bold">
                                                                    Management of Obesity in Older Adults
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Volkan Yumuk</p>(Istanbul University-Cerrahpaşa, Turkey)
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
                        </ul>
                    </div>

                    <!-- !!! Day2 - Room 4 -->
                    <div class="tab_cont">
                        <ul class="program_detail_ul">
                            <li name="symposium_4">
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="dark_green_bg">
                                                <td>09:20-10:50</td>
                                                <td>
                                                    <p class="font_20 bold">Symposium 4 : International Collaboration 1</p>
                                                    <p><span class="bold">Chairpersons : Kun-Ho Yoon</span> (The Catholic University of Korea, Korea)
                                                    , <br><span class="bold">Michele Mae Ann Yuen</span> (Queen Mary Hospital, Hong Kong, China)
                                                    </p>
                                                    <!-- <button class="btn gray2_btn program_detail_btn">Preview</button> -->
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="program_detail_td">
                                                    <p class="bold">Organizer : Chang Hee Jung (University of Ulsan,
                                                        Republic of Korea)</p>
                                                    <ul>
                                                        <li>Numerous studies have been conducted on the association
                                                            between the decline in muscle mass, known as sarcopenia, and
                                                            cardio-metabolic diseases. Recently, there has been a
                                                            growing interest in the quality of muscles, as research
                                                            findings suggest that muscle quality is important in various
                                                            aspects, in addition to muscle mass reduction.</li>
                                                        <li>Myosteatosis, an important factor determining muscle
                                                            quality, has emerged as a risk factor for new
                                                            cardio-metabolic diseases beyond sarcopenia. In this
                                                            session, we aim to explore the prevalence of myosteatosis
                                                            and its relationship with cardio-metabolic diseases.
                                                            Furthermore, we aim to investigate its significance by
                                                            comparing it with the accumulation of other ectopic fats.
                                                        </li>
                                                        <li>
                                                            <span class="font_inherit bold">• References</span><br>
                                                            1. Age-related changes in muscle quality and development of
                                                            diagnostic cutoff points for myosteatosis in lumbar skeletal
                                                            muscles <br>
                                                            measured by CT scan Clin Nutr. 2021 Jun;40(6):4022-4028.<br>
                                                            2. Association between sarcopenic obesity and poor muscle
                                                            quality based on muscle quality map and abdominal computed
                                                            tomography. Obesity (Silver Spring). 2023
                                                            Jun;31(6):1547-1557.<br>
                                                            Fat Distribution Patterns and Future Type 2 Diabetes
                                                            Diabetes. 2022 Sep 1;71(9):1937-1945
                                                        </li>
                                                    </ul>
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
                                                                    Sex Differences in Adipose Tissue Metabolism as It Relates to Risk of Diabetes
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Michael D. Jensen</p>(Mayo College of Medicine, USA)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>09:45-10:10</td>
                                                                    <td class="bold">
                                                                    The Role of GIP/or Glucagon Receptor Agonism in the Treatment of Obesity
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Michael A. Nauck</p>(Ruhr-University Bochum, Germany)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>10:10-10:35</td>
                                                                    <td class="bold">
                                                                    Treatment of Metabolic Syndrome Complications with Adiponectin Therapeutics
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Gary Sweeney</p>(York University, Canada)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>10:35-10:50</td>
                                                                    <td class="bold">Panel Discussion</td>
                                                                    <td class="text_r">
                                                                        <!-- <p class="bold">Yun-Hee Lee</p>(Seoul National
                                                                        University, Republic of Korea), <br>
                                                                        <p class="bold">Kye-Yeung Park</p>(Hanyang
                                                                        University, Republic of Korea) -->
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
                            <li name="luncheon_symposium_4">
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="light_sky_bg">
                                                <td>12:00-13:00</td>
                                                <td>
                                                    <p class="font_20 bold">Luncheon Symposium 4</p>
                                                    <p><span class="bold">Chairperson : Hyun Ho Shin</span> (Asan Chungmu Hospital, Korea)</p>
                                                    <!-- <button class="btn gray2_btn program_detail_btn">Preview</button> -->
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
                                                                       Real World Evidence of Phentermine Plus Topiramate ER in Korean : Efficacy and Safety
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Kyoung Min Kim</p>(Yonsei University, Korea)
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
                            <li name="oral_presentation_1">
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="dark_orange_bg">
                                                <td>13:00-14:00</td>
                                                <td>
                                                    <p class="font_20 bold">Oral Presentation 1</p>
                                                    <p>
                                                        <span class="bold">Chairpersons : Yeong Sook Yoon</span> (Inje University, Korea)
                                                        , <br><span class="bold">Yang-Im Hur</span> (CHA University, Korea)
                                                    </p>
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
                                                                    <td>13:00-13:10</td>
                                                                    <td class="bold">
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold"></p>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>13:10-13:20</td>
                                                                    <td class="bold"></td>
                                                                    <td class="text_r">
                                                                        <p class="bold"></p>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>13:20-13:30</td>
                                                                    <td class="bold">
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold"></p>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>13:30-13:40</td>
                                                                    <td class="bold"></td>
                                                                    <td class="text_r">
                                                                        <p class="bold"></p>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>13:40-13:50</td>
                                                                    <td class="bold"></td>
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
                            <li name="symposium_8">
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="dark_green_bg">
                                                <td>14:00-15:30</td>
                                                <td>
                                                    <p class="font_20 bold">Symposium 8 : Medical Condition Change After Bariatric Surgery</p>
                                                    <p><span class="bold">Chairpersons : In Ju Kim</span> (Pusan National University, Korea), <br><span
                                                            class="bold">Sung Il Choi</span> (Kyung Hee University, Korea)</p>
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
                                                                    Cardiovascular Disease and Hypertension Change After Bariatric Surgery
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Kanokkan Tepmalai</p>(Chiang Mai University, Thailand)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>14:25-14:50</td>
                                                                    <td class="bold">
                                                                    Gastrointestinal Motility and Function Change After Bariatric Surgery
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Jong-Han Kim</p>(Korea University, Korea)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>14:50-15:15</td>
                                                                    <td class="bold">
                                                                    Bariatric Surgery and its Impact on Cancer Risk Reduction
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Moon-Won Yoo</p>(University of Ulsan, Korea)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>15:15-15:30</td>
                                                                    <td class="bold">Panel Discussion</td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Sungbae Lee</p>(Incheon Sejong Hospital, Korea)
                                                                        <!-- , <br> <p class="bold">Sol Lee</p>(Seoul Medical
                                                                        Center, Republic of Korea) -->
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
                            <li name="symposium_12">
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="dark_green_bg">
                                                <td>16:30-18:00</td>
                                                <td>
                                                    <p class="font_20 bold">Symposium 12 : Childhood Obesity is a Chronic Disease Demanding Specific Health Care
</p>
                                                    <p><span class="bold">Chairpersons : Il Tae Hwang</span> (Hallym University, Korea), 
                                                    <br><span class="bold">Kye Sik Shim</span> (Kyung Hee University, Korea)
                                                </p>
                                                    <button class="btn gray2_btn program_detail_btn">Preview </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="program_detail_td">
                                                    <p class="bold">Organizer: Jaehyun Kim (Seoul National University, Korea), Yong Hee Hong (Soonchunhyang University, Korea)</p>
                                                    <ul>
                                                        <li>Pediatric obesity is a chronic disease that requires long-term management throughout life and must be managed according to the special characteristics of children and adolescents. First, we would like to find out how the prevention and management of obesity in children and adolescents is performing in Korea and how it should be managed. Next, we will figure out nutritional intervention strategies for obesity in children and adolescents and the role of nutritionists, and finally, we will look at adolescent obesity, which is difficult to manage and requires a complex approach from multiple aspects.
                                                        </li>
                                                        <li>
                                                            <span class="font_inherit bold">• References</span><br />
                                                            1. Bensignor MO, Arslanian S, Vajravelu ME. Semaglutide for management of obesity in adolescents: efficacy, safety, and considerations for clinical practice. Curr Opin Pediatr. 2024 May 16. doi: 10.1097/MOP.0000000000001365.<br />2. Hannon TS, Arslanian SA. Obesity in Adolescents. N Engl J Med. 2023 Jul 20;389(3):251-261

                                                        </li>
                                                    </ul>
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
                                                                    Pediatric Obesity Prevention and Management in Korea: How to Do It in the Real World?
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Sochung Chung</p>(Konkuk University, Korea)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>16:55-17:20</td>
                                                                    <td class="bold">
                                                                    Nutritional Intervention Strategies for Childhood Obesity: The Role of the Dietitian
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Mary Easaw</p>(Cardiac Vascular Sentral Kuala Lumpur, Malaysia)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>17:20-17:45</td>
                                                                    <td class="bold">
                                                                    Adolescent Obesity: Complexities of Chronic Disease
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Silva Arslanian</p>(University of Pittsburgh, USA)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>17:45-18:00</td>
                                                                    <td class="bold">
                                                                        Panel Discussion
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Yeo-Jin Hong</p>(Korea University, Korea)
                                                                         ,<br />
                                                                        <p class="bold">Hwal Rim Jeong</p>(Soonchunhyang University, Korea)
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
                        </ul>
                    </div>

                    <!-- !!! Day2 - Room5 -->
                    <div class="tab_cont">
                        <ul class="program_detail_ul">
                            <li name="sponsored_session_1">
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="light_sky_bg">
                                                <td>09:20-10:50</td>
                                                <td>
                                                    <p class="font_20 bold">Sponsored Session 1 : SELECT the Outcome Beyond Weight Loss</p>
                                                    <p><span class="bold">Chairpersons : Jae-Heon Kang</span> (Sungkyunkwan University, Korea), 
                                                    <br><span class="bold">Sang Yong Kim</span> (Chosun University, Korea)</p>
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
                                                                    SELECTing the Clinical Outcome of Semaglutide 2.4mg from its Physiological Benefits
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Filip K. Knop</p>(University of Copenhagen, Denmark)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>09:50-10:20</td>
                                                                    <td class="bold">
                                                                    STEPping Forward: Managing Weight for East Asian Population with Obesity
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Sang Yeoup Lee</p>(Pusan National University, Korea)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>10:20-10:50</td>
                                                                    <td class="bold">
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Darae Kim</p>(Sungkyunkwwan University, Korea)
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
                            <li name="oral_presentation_2">
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="dark_orange_bg">
                                                <td>13:00-14:00</td>
                                                <td>
                                                    <p class="font_20 bold">Oral Presentation 2</p>
                                                    <p>
                                                        <span class="bold">Chairpersons : Jung Hwan Park</span> (Hanyang University, Korea)
                                                        , <br><span class="bold">Jun Hwa Hong</span> (Eulji university, Korea)
                                                    </p>
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
                                                                    <td>13:00-13:10</td>
                                                                    <td class="bold"></td>
                                                                    <td class="text_r">
                                                                        <p class="bold"></p>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>13:10-13:20</td>
                                                                    <td class="bold"></td>
                                                                    <td class="text_r">
                                                                        <p class="bold"></p>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>13:20-13:30</td>
                                                                    <td class="bold"></td>
                                                                    <td class="text_r">
                                                                        <p class="bold"></p>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>13:30-13:40</td>
                                                                    <td class="bold">
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold"></p>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>13:40-13:50</td>
                                                                    <td class="bold">
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
                            <li name="sponsored_session_2">
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="light_sky_bg">
                                                <td>14:00-15:30</td>
                                                <td>
                                                    <p class="font_20 bold">Sponsored Session 2 : Obesity Management with Combination Phentermine Plus Topiramate from Strategy to Practice</p>
                                                    <p><span class="bold">Chairpersons : Ji A Seo</span> (Korea University, Korea), <br> <span class="bold">Bumjo Oh</span>(Seoul National University, Korea)</p>
                                                    <!-- <button class="btn gray2_btn program_detail_btn">Preview</button> -->
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
                                                                    A FAQ-Based Approach to Prescription of Combination Phentermine Plus Topiramate
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Jee-Hyun Kang</p>(Konyang University, Korea)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>14:30-15:00</td>
                                                                    <td class="bold">
                                                                    Weight Maintenance Strategy for Obesity Drug Therapy; Combination Phentermine Plus Topiramate
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Yoon Jeong Cho</p>(Daegu Catholic University, Korea)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>15:00-15:30</td>
                                                                    <td class="bold">
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Jong Han Choi</p>(Konkuk University, Korea)
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
                            <li name="joint_symposium_3">
                                <div class="table_wrap detail_table_common x_scroll border_bottom_70">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="violet_bg">
                                                <td>16:30-18:00</td>
                                                <td>
                                                    <p class="font_20 bold mb0">Joint Symposium KSSO-EASO</p>
                                                    <p><span class="bold">Chairpersons : Volkan Yumuk</span> (Istanbul University-Cerrahpaşa, Turkey), <br><span class="bold">Cheol-Young Park</span> (Sungkyunkwan University, Korea)</p>
													<!-- <button class="btn gray2_btn program_detail_btn">Preview</button> -->
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
                                                                    <td>16:30-17:00</td>
                                                                    <td class="bold">
                                                                    ACTION Teens: Barriers for Adolescents Living with Obesity to Weight Management in the UK
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Jason Halford</p> (University of Leeds, UK)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>17:00-17:30</td>
                                                                    <td class="bold">
                                                                    Ectopic Fat Dynamics: Unraveling the Interplay Between Myosteatosis and Cardio-Metabolic Health
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Chang Hee Jung</p> (University of Ulsan, Korea)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>17:30-18:00</td>
                                                                    <td class="bold">
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Barbara McGowan</p> (Guy's and St Thomas' NHS Foundation Trust, UK)
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
                        </ul>
                    </div>

                    <!-- !!! Day2 - Room6 -->
                    <div class="tab_cont">
                        <ul class="program_detail_ul">
                            <li name="guided_poster_presentation_1">
                                <div class="table_wrap detail_table_common x_scroll border_bottom_70">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="dark_orange_bg">
                                                <td>13:00-13:35</td>
                                                <td>
                                                    <p class="font_20 bold mb0">Guided Poster Presentation 1</p>
                                                    <p><span class="bold">Chairperson : Ga Eun Nam</span> (Korea University, Korea)</p>
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
                                                                    <td>13:00-13:07</td>
                                                                    <td class="bold"></td>
                                                                    <td class="text_r">
                                                                        <p class="bold"></p>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>13:07-13:14</td>
                                                                    <td class="bold"></td>
                                                                    <td class="text_r">
                                                                        <p class="bold"></p>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>13:14-13:21</td>
                                                                    <td class="bold"></td>
                                                                    <td class="text_r">
                                                                        <p class="bold"></p>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>13:21-13:28</td>
                                                                    <td class="bold"></td>
                                                                    <td class="text_r">
                                                                        <p class="bold"></p>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>13:28-13:35</td>
                                                                    <td class="bold"></td>
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
                        </ul>
                    </div>
                   

                    <!-- !!! Day2 - Room7 -->
                    <div class="tab_cont">
                        <ul class="program_detail_ul">
                            <li name="congress_banquet_ceremony">
                                <div class="table_wrap detail_table_common x_scroll border_bottom_70">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="white_yellow_bg">
                                                <td>18:40-</td>
                                                <td>
                                                    <p class="font_20 bold mb0">Congress Banquet <span
                                                            class="font_inherit red_txt">*</span>Invited Only</p>
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
                    <!-- <li><a href="javascript:;">Room7</a></li> -->
                </ul>
                <!-- Day3 - Room1 -->
                <div class="tab_wrap">
                    <div class="tab_cont on">
                        <ul class="program_detail_ul">
                            <li name="breakfast_symposium_4">
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="light_sky_bg">
                                                <td>07:30-08:20</td>
                                                <td>
                                                    <p class="font_20 bold">Breakfast Symposium 4</p>
                                                    <p><span class="bold">Chairperson : Sung Ho Han</span> (Dong-A University, Korea)</p>
                                                    <!-- <button class="btn gray2_btn program_detail_btn">Preview</button> -->
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
                                                                    TRUE-BUDDY Combination Therapy: Benefits for Beta Cells, Insulin Resistance and Diabetic Complications
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Chang Hee Jung</p>(University of Ulsan, Korea)
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
                            <li name="keynote_lecture_4">
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="keynote_bg">
                                                <td>08:30-09:10</td>
                                                <td>
                                                    <p class="font_20 bold">Keynote Lecture 2</p>
                                                    <p><span class="bold">Chairperson : Hye Soon Park</span> (University of Ulsan, Korea)</p>
                                                    <!-- <button class="btn gray2_btn program_detail_btn">Preview</button> -->
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="program_detail_td">
                                                    <p class="bold">Organizer: Jae Geun Kim (Incheon National
                                                        University, Republic of Korea)</p>
                                                    <ul>
                                                        <li>Professor Tamas Horvath is Chair of the Department of
                                                            Comparative Medicine at Yale University School of Medicine
                                                            in the United States and one of the leading researchers in
                                                            the field of study on the hypothalamic control of energy
                                                            homeostasis. In particular, his research on the regulation
                                                            of synaptic plasticity by AgRP neurons in hypothalamic
                                                            neuronal circuitries is one of his most noteworthy
                                                            accomplishments. In this session, Professor Horvath will
                                                            introduce the role of hypothalamic AgRP neurons that can be
                                                            applied to obesity treatment.</li>
                                                        <li>
                                                            <span class="font_inherit bold">• References</span><br />
                                                            1. Hunger-promoting AgRP neurons trigger an
                                                            astrocyte-mediated feed-forward autoactivation loop in mice.
                                                            J Clin Invest. 2021 <br />
                                                            2. AgRP neurons control compulsive exercise and survival in
                                                            an activity-based anorexia model. Nature Metabolism. 2020.
                                                        </li>
                                                    </ul>
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
                                                                    Cardiometabolic Health: Importance of Lifestyle Vital Signs
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Jean-Pierre Després</p>(VITAM - Research Centre on Sustainable Health, Canada)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>09:00-09:10</td>
                                                                    <td class="bold">
                                                                        Q&A
                                                                    </td>
                                                                    <td class="text_r">

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
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="dark_green_bg">
                                                <td>09:20-10:50</td>
                                                <td>
                                                    <p class="font_20 bold">Symposium 13 : Obesity Related Comorbidity-Fatty Liver</p>
                                                    <p><span class="bold">Chairpersons : Chang Beom Lee</span> (Hanyang University, Korea), 
                                                    <br><span class="bold">Geeta Appannah</span> (University Putra Malaysia, Malaysia)</p>
                                                    <!-- <button class="btn gray2_btn program_detail_btn">Preview</button> -->
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="program_detail_td">
                                                    <p class="bold">Organizer : Jun Hwa Hong (Eulji University, Republic
                                                        of Korea)</p>
                                                    <ul>
                                                        <li>In this session, we will explore the relationship between
                                                            fatty liver associated with obesity and its diverse
                                                            complications. Considering the recently increasing
                                                            prevalence and growing interest in treatment of chronic
                                                            kidney disease due to the introduction of SGLT2i, Professor
                                                            Sang-Man Jin from Sungkyunkwan University School of Medicine
                                                            will present data analyzing non-alcoholic fatty liver
                                                            disease (NAFLD) and metabolic dysfunction-associated fatty
                                                            liver disease (MAFLD) in relation to the cause of incident
                                                            chronic kidney disease.</li>
                                                        <li>Professor Ming-Hua Zheng from China will analyze and present
                                                            differences in implications for cardiovascular risk based on
                                                            the cause of fatty liver. Particularly, Professor Bo-Kyung
                                                            Koo from Seoul National University College of Medicine will
                                                            explore data on factors related to the prognosis of
                                                            cardiovascular and kidney disease, given the diverse impacts
                                                            that complications in NAFLD patients have on cardiovascular
                                                            and kidney conditions as well as liver condition.</li>
                                                        <li> We hope this session will assist you in managing the
                                                            complications associated with MAFLD.</li>
                                                        <li>
                                                            <span class="font_inherit bold">• References</span><br>
                                                            1. MAFLD and NAFLD in the prediction of incident chronic
                                                            kidney disease. Sci Rep. 2023 Jan 31;13(1):1796.<br>
                                                            2. Metabolic dysfunction-associated fatty liver disease and
                                                            implications for cardiovascular risk and disease prevention.
                                                            Cardiovasc Diabetol. 2022 Dec 3;21(1):270.
                                                        </li>
                                                    </ul>
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
                                                                    Impact of Adipocyte Death on Steatotic Liver Disease (SLD)
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Seung-Jin Kim</p>
                                                                        (Kangwon National University, Korea)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>09:45-10:10</td>
                                                                    <td class="bold">
                                                                    GDF15 and Fatty Liver
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Hua Wang</p>
                                                                        (First Affiliated Hospital of Anhui Medical University, China)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>10:10-10:35</td>
                                                                    <td class="bold">
                                                                    TZD and SGLT2i Combination for Fatty Liver Management
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Jun Hwa Hong </p>
                                                                        (Eulji University, Korea)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>10:35-10:50</td>
                                                                    <td class="bold">Panel Discussion</td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Bo Kyung Koo</p>(Seoul National University, Korea),<br/>
                                                                        <p class="bold">Youn Huh</p>(Eulji University, Korea)
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
                            <li name="presidential_lecture">
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="dark_pink_bg">
                                                <td>11:00-11:40</td>
                                                <td>
                                                    <p class="font_20 bold">Presidential Lecture</p>
                                                    <p><span class="bold">Chairperson : Kwang-Won Kim</span> (Gachon University, Korea)</p>
                                                    <!-- <button class="btn gray2_btn program_detail_btn">Preview</button> -->
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="program_detail_td">
                                                    <p class="bold">Organizer: Soo Lim (Seoul National University,
                                                        Republic of Korea), Jun Hwa Hong (Eulji University, Republic of
                                                        Korea)</p>
                                                    <ul>
                                                        <li>The interplay between adipose tissue's function as an energy
                                                            reservoir and an endocrine organ is crucial for maintaining
                                                            metabolic health. A key player in this dynamic balance is
                                                            leptin, a hormone whose regulation is tightly linked to fat
                                                            mass. Here we will discuss the multifaceted role of
                                                            LATS1/2-YAP/TAZ signaling in regulating adipocyte plasticity
                                                            and leptin production to maintain metabolic homeostasis.
                                                        </li>
                                                        <li>
                                                            <span class="font_inherit bold">• References</span><br>
                                                            1. Sethi, J.K. and A.J. Vidal-Puig, Thematic review series:
                                                            adipocyte biology. Adipose tissue function and plasticity
                                                            orchestrate nutritional adaptation. J Lipid Res, 2007.
                                                            48(6): p. 1253-62.<br>
                                                            2. Halder, G. and R.L. Johnson, Hippo signaling: growth
                                                            control and beyond. Development, 2011. 138(1): p. 9-22.
                                                        </li>
                                                    </ul>
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
                                                                    Obesity and Fatty Liver: Common but Ignored
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Cheol-Young Park</p>(Sungkyunkwan University, Korea)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>11:30-11:40</td>
                                                                    <td class="bold">
                                                                        Q&A
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
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="light_sky_bg">
                                                <td>11:50-12:50</td>
                                                <td>
                                                    <p class="font_20 bold">Luncheon Symposium 5</p>
                                                    <p><span class="bold">Chairperson : Seung Joon Oh</span> (Kyung Hee University, Korea)</p>
                                                    <!-- <button class="btn gray2_btn program_detail_btn">Preview</button> -->
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
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">W. Timothy Garvey</p>(University of Alabama at Birmingham, USA)
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
                            <li name="ksso_scientific_session">
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="special_bg">
                                                <td>12:50-13:30</td>
                                                <td>
                                                    <p class="font_20 bold">Special Scientific Session 2</p>
                                                    <!-- <p><span class="bold">Chairperson : Sung Soo Kim</span> (Chungnam
                                                        National University, Republic of Korea)</p> -->
                                                    <!-- <button class="btn gray2_btn program_detail_btn">Preview</button> -->
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="program_detail_td">
                                                    <p class="bold">Organizer: Soo Lim (Seoul National University,
                                                        Republic of Korea)</p>
                                                    <ul>
                                                        <li>Matthias Blüher is Head of the Obesity Outpatient Clinic for
                                                            Adults at the University of Leipzig Department of Medicine
                                                            in Leipzig, Germany. He is Professor of Molecular
                                                            Endocrinology, with board certifications in Internal
                                                            Medicine, Endocrinology and Diabetology. From 2006 to 2012,
                                                            Professor Blüher served as Head of the Clinical Research
                                                            Group ‘Atherobesity,’ and since 2013, he has been Speaker of
                                                            the Collaborative Research Center on obesity mechanisms.
                                                        </li>
                                                        <li>Professor Blüher has won several awards, including the
                                                            Obesity Research Award of the German Society for the Study
                                                            of Obesity, the Ferdinand-Bertram-Prize of the German
                                                            Diabetes Association, and the Rising Star Lecture at the
                                                            44th European Association for the Study of Diabetes (EASD)
                                                            meeting. More recently, he received the Hans Christian
                                                            Hagedorn Award from the German Diabetes Association in 2011
                                                            and the Minkowski Award from the EASD in 2015.</li>
                                                        <li>
                                                            <span class="font_inherit bold">• References</span><br />
                                                            1. Blüher M, Aras M, Aronne LJ, Batterham RL, Giorgino F, Ji
                                                            L, Pietiläinen KH, Schnell O, Tonchevska E, Wilding JPH. New
                                                            insights into the treatment of obesity. Diabetes Obes Metab.
                                                            2023 Apr 13. doi: 10.1111/dom.15077.<br />
                                                            2. Blüher M. Metabolically Healthy Obesity. Endocr Rev. 2020
                                                            May 1;41(3):bnaa004.
                                                        </li>
                                                    </ul>
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
                                                                    <td>12:50-13:20</td>
                                                                    <td class="bold">
                                                                    Clinical Implication of GLP-1 Receptor Agonists and SGLT2 Inhibitors from a Cardiometabolic Perspective
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Soo Lim</p>
                                                                        (Seoul National University, Korea)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>13:20-13:30</td>
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
                            <li name="keynote_lecture_5">
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="plenary_bg">
                                                <td>13:50-14:30</td>
                                                <td>
                                                    <p class="font_20 bold">Plenary Lecture 3</p>
                                                    <p><span class="bold">Chairperson : Kwan Woo Lee</span> (Ajou University, Korea)</p>
                                                    <button class="btn gray2_btn program_detail_btn">Preview</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="program_detail_td">
                                                    <p class="bold">Organizer: Il-Young Kim (Gachon University School of Medicine, Korea)</p>
                                                    <ul>
                                                        <li>Prof. William Evans is widely respected as the world’s foremost authority in human muscle aging research. He was the first to describe the condition called sarcopenia, the age-related loss of muscle mass and strength. Muscle plays a central role in physiological metabolism beyond its role in physical function and various clinical conditions such as cancer, diabetes, insulin resistance, and obesity. Particularly in the context of weight management, muscle plays a key role in energy metabolism as loss of muscle mass with advancing age results in a substantial decrease in basal metabolic rate. In this keynote lecture, Prof. Evans will discuss the importance of muscle mass and metabolism on energy metabolism and functional capacity. Furthermore, Prof. Evans will introduce new methods for the evaluation of muscle mass that now enable demonstration of the importance of muscle mass and its association with poor functional status, risk of disability, hip fracture, and mortality.
                                                        </li>
                                                        <li>
                                                            <span class="font_inherit bold">• References</span><br />
                                                            1. Evans WJ, Cawthon PM. D(3)Creatine Dilution as a Direct, Non-invasive and Accurate Measurement of Muscle Mass for Aging Research. Calcif Tissue Int. 2023<br />2. Cawthon PM, Blackwell T, Cummings SR, et al. Muscle mass assessed by D3-Creatine dilution method and incident self-reported disability and mortality in a prospective observational study of community dwelling ol0der men. J Gerontol A Biol Sci Med Sci. 2020 <br />3. Orwoll ES, Peters KE, Hellerstein M, Cummings SR, Evans WJ, Cawthon PM. The Importance of Muscle Versus Fat Mass in Sarcopenic Obesity: A Re-evaluation Using D3-Creatine Muscle Mass Versus DXA Lean Mass Measurements. J Gerontol A Biol Sci Med Sci. 2020 </li>
                                                    </ul>
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
                                                                    <td class="bold">How Muscle Mass and Metabolism Affects Energy Metabolism and Functional Capacity</td>
                                                                    <td class="text_r">
                                                                        <p class="bold">William Evans</p>(University of California, Berkeley, USA)
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
                            <li name="keynote_lecture_6">
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="keynote_bg">
                                                <td>14:30-15:10</td>
                                                <td>
                                                    <p class="font_20 bold">Keynote Lecture 3</p>
                                                    <p><span class="bold">Chairperson : Moon-Kyu Lee</span> (Eulji University, Korea)</p>
                                                    <!-- <button class="btn gray2_btn program_detail_btn">Preview</button> -->
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="program_detail_td">
                                                    <p class="bold">Organizer: Soo Lim (Seoul National University,
                                                        Republic of Korea)</p>
                                                    <ul>
                                                        <li>Obesity is not only a serious disease in itself, but also a
                                                            health risk factor that causes various diseases, so
                                                            governmental plan and policy cooperation are needed. Korean
                                                            government established and announced the first national
                                                            obesity management comprehensive plan in 2018 to provide an
                                                            opportunity to raise public awareness of the importance of
                                                            obesity prevention and management and to monitor the
                                                            pregress. In this lecture, I would like to introduce the
                                                            past, present and future of Korea's national obesity
                                                            strategy.</li>
                                                    </ul>
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
                                                                    Human Adipose Tissue Metabolism: What Happens with Obesity
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Michael D. Jensen</p>(Mayo College of Medicine,USA)
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
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="dark_green_bg">
                                                <td>15:20-16:50</td>
                                                <td>
                                                    <p class="font_20 bold">Symposium 17 : Incretin Therapy from MARS, Bariatric Surgery from VENUS</p>
                                                    <!-- <p><span class="bold">Chairpersons : Cheol-Young Park</span>
                                                        (Sungkyunkwan University, Republic of Korea), <br><span
                                                            class="bold">Chang Hee Jung</span> (Univeristy of Ulsan,
                                                        Republic of Korea)</p> -->
                                                    <!-- <button class="btn gray2_btn program_detail_btn">Preview</button> -->
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
                                                                    Incretin-Based Therapy Before Bariatric Surgery: Will It Be Helpful?
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Mi-Kyung Kim</p>(Keimyung University, Korea)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>15:45-16:10</td>
                                                                    <td class="bold">
                                                                    Incretin-Based Therapy after Bariatric-Metabolic Surgery: When and How Long?
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Po-Chih Chang</p>(National Sun Yat-Sen University, Taiwan)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>16:10-16:35</td>
                                                                    <td class="bold">Incretin-Based Therapy—Will It Be Better Than Bariatric Surgery Alone</td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Barbara McGowan</p>(Guy's and St Thomas' NHS Foundation Trust, UK)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>16:35-16:50</td>
                                                                    <td class="bold">Panel Discussion</td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Kyung-Soo Kim</p>(CHA University, Korea),<br>
                                                                        <p class="bold">Jun Sung Moon</p>(Yeungnam University, Korea)
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
                                                <td>16:50-17:00</td>
                                                <td>
                                                    <p class="font_20 bold">Break</p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                            <li name="keynote_lecture_7">
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="plenary_bg">
                                                <td>17:00-17:40</td>
                                                <td>
                                                    <p class="font_20 bold">Plenary Lecture 4</p>
                                                    <p><span class="bold">Chairperson : Kyu Rae Lee</span> (Gachon University, Korea)</p>
                                                    <!-- <button class="btn gray2_btn program_detail_btn">Preview</button> -->
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
                                                                    Semaglutide, a Second-Generation Obesity Medication for the Treatment and Prevention of Cardiometabolic Disease
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">W. Timothy Garvey</p>(University of Alabama at Birmingham, USA)
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
                                <div class="table_wrap detail_table_common x_scroll border_bottom_70">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="white_yellow_bg">
                                                <td>17:40-18:00</td>
                                                <td>
                                                    <p class="font_20 bold mb0">Closing & Award Ceremony</p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                        </ul>
                    </div>

                <!-- Day3 - Room2 -->
                    <div class="tab_cont">
                        <ul class="program_detail_ul">
                            <li name="breakfast_symposium_5">
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="light_sky_bg">
                                                <td>07:30-08:20</td>
                                                <td>
                                                    <p class="font_20 bold">Breakfast Symposium 5</p>
                                                    <p><span class="bold">Chairperson : Sung-Hoon Kim</span> (Mizmedi Hospital, Korea)</p>
                                                    <!-- <button class="btn gray2_btn program_detail_btn">Preview</button> -->
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
                                                                        Revolutionizing Obesity Care
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Jang Won Son</p>(The Catholic University of Korea, Korea)
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
                            <li name="keynote_lecture_4_2">
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="keynote_bg">
                                                <td>08:30-09:10</td>
                                                <td>
                                                    <p class="font_20 bold">Keynote Lecture 2</p>
                                                    <p><span class="bold">Chairperson : Hye Soon Park</span> (University of Ulsan, Korea)</p>
                                                    <!-- <button class="btn gray2_btn program_detail_btn">Preview</button> -->
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="program_detail_td">
                                                    <p class="bold">Organizer: Soo Lim (Seoul National University,
                                                        Republic of Korea)</p>
                                                    <ul>
                                                        <li>Obesity is not only a serious disease in itself, but also a
                                                            health risk factor that causes various diseases, so
                                                            governmental plan and policy cooperation are needed. Korean
                                                            government established and announced the first national
                                                            obesity management comprehensive plan in 2018 to provide an
                                                            opportunity to raise public awareness of the importance of
                                                            obesity prevention and management and to monitor the
                                                            pregress. In this lecture, I would like to introduce the
                                                            past, present and future of Korea's national obesity
                                                            strategy.</li>
                                                    </ul>
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
                                                                    Cardiometabolic Health: Importance of Lifestyle Vital Signs
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Jean-Pierre Després</p>(VITAM - Research Centre on Sustainable Health, Canada)
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
                            <li name="symposium_14">
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="dark_green_bg">
                                                <td>09:20-10:50</td>
                                                <td>
                                                    <p class="font_20 bold">Symposium 14 : Understanding Aging Skeletal Muscle and Dynamics </p>
                                                    <p><span class="bold">Chairpersons : Kijin Kim</span> (Keimyung University, Korea), 
                                                    <br><span class="bold">Jae Myoung Suh</span> (KAIST, Korea)
                                                    </p>
                                                    <button class="btn gray2_btn program_detail_btn">Preview</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="program_detail_td">
                                                    <p class="bold">Organizer: Il-Young Kim (Gachon University, Korea), Seung-Hwan Lee (The Catholic University of Korea, Korea)</p>
                                                    <ul>
                                                        <li>Sarcopenia is the age-associated loss of muscle mass and strength and is characterized by anabolic resistance, i.e., blunted anabolic response (muscle protein synthesis) to exercise or nutrition, which (in)directly affects other clinical conditions. To discover effective therapeutics, it is of important 1) to understand dysregulated dynamics of aging muscle proteome and 2) to acutely assess muscle mass to evaluate the efficacy of therapeutic candidates, both of which were largely underappreciated over the past decades. In this symposium, these issues will be discussed by two world’s foremost authorities, Prof. Evans (for direct muscle mass) and Prof. Hellerstein (for dynamics of muscle proteome), respectively. Lastly, Prof. Kim will discuss anabolic resistance to exercise in aging muscle and the potential therapeutic effect of balanced essential amino acids. 
                                                        </li>
                                                        <li>
                                                            <span class="font_inherit bold">• References</span><br />
                                                            1. Evans WJ, Simplified definition of sarcopenia: muscle mass/body weight, The Journal of Nutrition, Health and Aging 2024<br />
                                                            2. Shankaran M et al., Circulating protein synthesis rates reveal skeletal muscle proteome dynamics, J Clin Invest 2016
                                                            <br />
                                                            3. Jang et al., Free essential amino acid feeding improves endurance during resistance training via DRP1-dependent mitochondrial remodelling. JCSM 2024
                                                        </li>
                                                    </ul>
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
                                                                    Sarcopenia: New Insights for a Unified Definition
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">William Evans</p>(University of California, Berkeley, USA)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>09:45-10:10</td>
                                                                    <td class="bold">
                                                                    Understanding Skeletal Muscle Mass, Protein Dynamics, Regulation and Function Using New Tracer Techniques
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Marc Hellerstein</p>
                                                                        (University of California, Berkeley, USA)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>10:10-10:35</td>
                                                                    <td class="bold">
                                                                    Overcoming Anabolic Resistance to Exercise in Sarcopenia: Role of Free Essential Amino Acids
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Il-Young Kim</p>(Gachon University, Korea)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>10:35-10:50</td>
                                                                    <td class="bold">Panel Discussion</td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Seung-Hwan Lee</p>(The Catholic University of Korea, Korea)
                                                                        , <br><p class="bold">Justin Y. Jeon</p>(Yonsei University, Korea)
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
                            <li name="presidential_lecture_2">
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="dark_pink_bg">
                                                <td>11:00-11:40</td>
                                                <td>
                                                    <p class="font_20 bold">Presidential Lecture</p>
                                                    <p><span class="bold">Chairperson : Kwang-Won Kim</span> (Gachon University, Korea)</p>
                                                    <!-- <button class="btn gray2_btn program_detail_btn">Preview</button> -->
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="program_detail_td">
                                                    <p class="bold">Organizer: Soo Lim (Seoul National University,
                                                        Republic of Korea), Jun Hwa Hong (Eulji University, Republic of
                                                        Korea)</p>
                                                    <ul>
                                                        <li>The interplay between adipose tissue's function as an energy
                                                            reservoir and an endocrine organ is crucial for maintaining
                                                            metabolic health. A key player in this dynamic balance is
                                                            leptin, a hormone whose regulation is tightly linked to fat
                                                            mass. Here we will discuss the multifaceted role of
                                                            LATS1/2-YAP/TAZ signaling in regulating adipocyte plasticity
                                                            and leptin production to maintain metabolic homeostasis.
                                                        </li>
                                                        <li>
                                                            <span class="font_inherit bold">• References</span><br>
                                                            1. Sethi, J.K. and A.J. Vidal-Puig, Thematic review series:
                                                            adipocyte biology. Adipose tissue function and plasticity
                                                            orchestrate nutritional adaptation. J Lipid Res, 2007.
                                                            48(6): p. 1253-62.<br>
                                                            2. Halder, G. and R.L. Johnson, Hippo signaling: growth
                                                            control and beyond. Development, 2011. 138(1): p. 9-22.
                                                        </li>
                                                    </ul>
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
                                                                    Obesity and Fatty Liver: Common but Ignored
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Cheol-Young Park</p>(Sungkyunkwan University, Korea)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>11:30-11:40</td>
                                                                    <td class="bold">
                                                                        Q&A
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
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="light_sky_bg">
                                                <td>11:50-12:50</td>
                                                <td>
                                                    <p class="font_20 bold">Luncheon Symposium 6</p>
                                                    <p><span class="bold">Chairperson : Sung-Soo Kim</span> (Chungnam National University, Korea)</p>
                                                    <!-- <button class="btn gray2_btn program_detail_btn">Preview</button> -->
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
                                                                    The Review of Combination Phentermine Plus Topiramate for Chronic Weight Management
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Kyung Soo Kim </p>(CHA University, Korea)
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
                            <li name="ksso_scientific_session_1">
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="special_bg">
                                                <td>12:50-13:30</td>
                                                <td>
                                                    <p class="font_20 bold">Special Scientific Session 2</p>
                                                    <!-- <p><span class="bold">Chairperson : Sung Soo Kim</span> (Chungnam
                                                        National University, Republic of Korea)</p> -->
                                                    <!-- <button class="btn gray2_btn program_detail_btn">Preview</button> -->
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="program_detail_td">
                                                    <p class="bold">Organizer: Soo Lim (Seoul National University,
                                                        Republic of Korea)</p>
                                                    <ul>
                                                        <li>Matthias Blüher is Head of the Obesity Outpatient Clinic for
                                                            Adults at the University of Leipzig Department of Medicine
                                                            in Leipzig, Germany. He is Professor of Molecular
                                                            Endocrinology, with board certifications in Internal
                                                            Medicine, Endocrinology and Diabetology. From 2006 to 2012,
                                                            Professor Blüher served as Head of the Clinical Research
                                                            Group ‘Atherobesity,’ and since 2013, he has been Speaker of
                                                            the Collaborative Research Center on obesity mechanisms.
                                                        </li>
                                                        <li>Professor Blüher has won several awards, including the
                                                            Obesity Research Award of the German Society for the Study
                                                            of Obesity, the Ferdinand-Bertram-Prize of the German
                                                            Diabetes Association, and the Rising Star Lecture at the
                                                            44th European Association for the Study of Diabetes (EASD)
                                                            meeting. More recently, he received the Hans Christian
                                                            Hagedorn Award from the German Diabetes Association in 2011
                                                            and the Minkowski Award from the EASD in 2015.</li>
                                                        <li>
                                                            <span class="font_inherit bold">• References</span><br />
                                                            1. Blüher M, Aras M, Aronne LJ, Batterham RL, Giorgino F, Ji
                                                            L, Pietiläinen KH, Schnell O, Tonchevska E, Wilding JPH. New
                                                            insights into the treatment of obesity. Diabetes Obes Metab.
                                                            2023 Apr 13. doi: 10.1111/dom.15077.<br />
                                                            2. Blüher M. Metabolically Healthy Obesity. Endocr Rev. 2020
                                                            May 1;41(3):bnaa004.
                                                        </li>
                                                    </ul>
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
                                                                    <td>12:50-13:20</td>
                                                                    <td class="bold">
                                                                    Clinical Implication of GLP-1 Receptor Agonists and SGLT2 Inhibitors from a Cardiometabolic Perspective
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Soo Lim</p>
                                                                        (Seoul National University, Korea)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>13:20-13:30</td>
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
                            <li name="keynote_lecture_5_2">
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="plenary_bg">
                                                <td>13:50-14:30</td>
                                                <td>
                                                    <p class="font_20 bold">Plenary Lecture 3</p>
                                                    <p><span class="bold">Chairperson : Kwan Woo Lee</span> (Ajou University, Korea)</p>
                                                    <button class="btn gray2_btn program_detail_btn">Preview</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="program_detail_td">
                                                <p class="bold">Organizer: Il-Young Kim (Gachon University School of Medicine, Korea)</p>
                                                        <ul>
                                                        <li>Prof. William Evans is widely respected as the world’s foremost authority in human muscle aging research. He was the first to describe the condition called sarcopenia, the age-related loss of muscle mass and strength. Muscle plays a central role in physiological metabolism beyond its role in physical function and various clinical conditions such as cancer, diabetes, insulin resistance, and obesity. Particularly in the context of weight management, muscle plays a key role in energy metabolism as loss of muscle mass with advancing age results in a substantial decrease in basal metabolic rate. In this keynote lecture, Prof. Evans will discuss the importance of muscle mass and metabolism on energy metabolism and functional capacity. Furthermore, Prof. Evans will introduce new methods for the evaluation of muscle mass that now enable demonstration of the importance of muscle mass and its association with poor functional status, risk of disability, hip fracture, and mortality.
                                                        </li>
                                                        <li>
                                                            <span class="font_inherit bold">• References</span><br />
                                                            1. Evans WJ, Cawthon PM. D(3)Creatine Dilution as a Direct, Non-invasive and Accurate Measurement of Muscle Mass for Aging Research. Calcif Tissue Int. 2023<br />2. Cawthon PM, Blackwell T, Cummings SR, et al. Muscle mass assessed by D3-Creatine dilution method and incident self-reported disability and mortality in a prospective observational study of community dwelling ol0der men. J Gerontol A Biol Sci Med Sci. 2020 <br />3. Orwoll ES, Peters KE, Hellerstein M, Cummings SR, Evans WJ, Cawthon PM. The Importance of Muscle Versus Fat Mass in Sarcopenic Obesity: A Re-evaluation Using D3-Creatine Muscle Mass Versus DXA Lean Mass Measurements. J Gerontol A Biol Sci Med Sci. 2020 </li>
                                                    </ul>
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
                                                                    <td class="bold">How Muscle Mass and Metabolism Affects Energy Metabolism and Functional Capacity</td>
                                                                    <td class="text_r">
                                                                        <p class="bold">William Evans</p>(University of California, Berkeley, USA)
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
                            <li name="keynote_lecture_6_2">
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="keynote_bg">
                                                <td>14:30-15:10</td>
                                                <td>
                                                    <p class="font_20 bold">Keynote Lecture 3</p>
                                                    <p><span class="bold">Chairperson : Moon-Kyu Lee</span> (Eulji University, Korea)</p>
                                                    <!-- <button class="btn gray2_btn program_detail_btn">Preview</button> -->
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="program_detail_td">
                                                    <p class="bold">Organizer: Soo Lim (Seoul National University,
                                                        Republic of Korea)</p>
                                                    <ul>
                                                        <li>Obesity is not only a serious disease in itself, but also a
                                                            health risk factor that causes various diseases, so
                                                            governmental plan and policy cooperation are needed. Korean
                                                            government established and announced the first national
                                                            obesity management comprehensive plan in 2018 to provide an
                                                            opportunity to raise public awareness of the importance of
                                                            obesity prevention and management and to monitor the
                                                            pregress. In this lecture, I would like to introduce the
                                                            past, present and future of Korea's national obesity
                                                            strategy.</li>
                                                    </ul>
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
                                                                    Human Adipose Tissue Metabolism: What Happens with Obesity
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Michael D. Jensen</p>(Mayo College of Medicine,USAa)
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
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="dark_green_bg">
                                                <td>15:20-16:50</td>
                                                <td>
                                                    <p class="font_20 bold">Symposium 18 : Cracking the Neural Code: Understanding Obesity through the Hypothalamus, Brain Stem, and Vagus Pathways</p>
                                                    <p><span class="bold">Chairpersons : Ki Woo Kim</span> (Yonsei University, Korea), 
                                                    <br><span class="bold">Hyung Jin Choi</span> (Seoul National University, Korea)</p>
                                                    <button class="btn gray2_btn program_detail_btn">Preview</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="program_detail_td">
                                                <p class="bold">Organizer : Hyung Jin Choi (Seoul National University, Korea)</p>
                                                    <ul>
                                                        <li>The brainstem and hypothalamus intricately orchestrate physiological processes, including appetite regulation and body weight maintenance, by modulating the hunger and satiety. Prof. Jo-Eun Son will elucidate the hypothalamus's mechanism in the genetic determinants of human obesity, Prof. Chen Ran will reveal on the neural encoding of internal senses within the brainstem, and Prof. Zhan Cheng will discuss the function of brainstem catecholaminergic neurons in the regulation of energy homeostasis.</li>
                                                        <li>
                                                            <span class="font_inherit bold">• References</span><br />
                                                            1. 2021 Nature Metabolism. Irx3 and Irx5 in Ins2-Cre+ cells regulate hypothalamic postnatal neurogenesis and leptin response<br/>
2021 Science Advances. Ectopic expression of Irx3 and Irx5 in the paraventricular nucleus of the hypothalamus contributes to defects in Sim1 haploinsufficiency 
<br />2. 2022 Nature. A brainstem map for visceral sensations <br/>3. 2024 Nature Neuroscience. Fasting-activated ventrolateral medulla neurons regulate T cell homing and suppress autoimmune disease in mice<br/>2023 Cell Reports. AgRP neurons are not indispensable for body weight maintenance in adult mice

                                                        </li>
                                                    </ul>
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
                                                                    Hypothalamic Function of IRX3 and IRX5, Genetic Determinants of Human Obesity
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Joe Eun Son</p>(Kyungpook National University, Korea)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>15:45-16:10</td>
                                                                    <td class="bold">
                                                                    The Coding of Internal Senses in the Brainstem
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Chen Ran</p>
                                                                        (The Scripps Research Institute, USA)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>16:10-16:35</td>
                                                                    <td class="bold">
                                                                    Roles of Brainstem Catecholaminergic Neurons in Control of Energy Homeostasis
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Cheng Zhan</p>(University of Science and Technology of China, China)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>16:35-16:50</td>
                                                                    <td class="bold">
                                                                        Panel Discussion
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Yong Taek Jeong</p>(Korea University, Korea),<br/>
                                                                        <p class="bold">Chan Hee Lee</p>(Hallym University, Korea)
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
                                                <td>16:50-17:00</td>
                                                <td>
                                                    <p class="font_20 bold">Break</p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                            <li name="keynote_lecture_7_2">
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="plenary_bg">
                                                <td>17:00-17:40</td>
                                                <td>
                                                    <p class="font_20 bold">Plenary Lecture 4</p>
                                                    <p><span class="bold">Chairperson : Kyu Rae Lee</span> (Gachon University, Korea)</p>
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
                                                                    Semaglutide, a Second-Generation Obesity Medication for the Treatment and Prevention of Cardiometabolic Disease
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">W. Timothy Garvey</p>(University of Alabama at Birmingham, USA)
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
                                <div class="table_wrap detail_table_common x_scroll border_bottom_70">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="white_yellow_bg">
                                                <td>17:40-18:00</td>
                                                <td>
                                                    <p class="font_20 bold mb0">Closing & Award Ceremony</p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <!-- !!! Day3 - Room3 -->
                    <div class="tab_cont">
                        <ul class="program_detail_ul">
                            <li name="breakfast_symposium_6">
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="light_sky_bg">
                                                <td>07:30-08:20</td>
                                                <td>
                                                    <p class="font_20 bold">Breakfast Symposium 6</p>
                                                    <p><span class="bold">Chairperson : Keun-Mi Lee</span> (Yeungnam University, Korea)</p>
                                                    <!-- <button class="btn gray2_btn program_detail_btn">Preview</button> -->
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
                                                                    TRUE-BUDDY Combination Therapy: Benefits for Beta Cells, Insulin Resistance and Diabetic Complications
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Seung-Hwan Lee</p>(The Catholic University of Korea, Korea)
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
                            <li name="keynote_lecture_4_3">
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="keynote_bg">
                                                <td>08:30-09:10</td>
                                                <td>
                                                    <p class="font_20 bold">Keynote Lecture 2</p>
                                                    <p><span class="bold">Chairperson : Hye Soon Park</span> (University of Ulsan, Korea)</p>
                                                    <!-- <button class="btn gray2_btn program_detail_btn">Preview</button> -->
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="program_detail_td">
                                                    <p class="bold">Organizer: Jae Geun Kim (Incheon National
                                                        University, Republic of Korea)</p>
                                                    <ul>
                                                        <li>Professor Tamas Horvath is Chair of the Department of
                                                            Comparative Medicine at Yale University School of Medicine
                                                            in the United States and one of the leading researchers in
                                                            the field of study on the hypothalamic control of energy
                                                            homeostasis. In particular, his research on the regulation
                                                            of synaptic plasticity by AgRP neurons in hypothalamic
                                                            neuronal circuitries is one of his most noteworthy
                                                            accomplishments. In this session, Professor Horvath will
                                                            introduce the role of hypothalamic AgRP neurons that can be
                                                            applied to obesity treatment.</li>
                                                        <li>
                                                            <span class="font_inherit bold">• References</span><br />
                                                            1. Hunger-promoting AgRP neurons trigger an
                                                            astrocyte-mediated feed-forward autoactivation loop in mice.
                                                            J Clin Invest. 2021 <br />
                                                            2. AgRP neurons control compulsive exercise and survival in
                                                            an activity-based anorexia model. Nature Metabolism. 2020.
                                                        </li>
                                                    </ul>
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
                                                                    Cardiometabolic Health: Importance of Lifestyle Vital Signs
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Jean-Pierre Després</p>(VITAM - Research Centre on Sustainable Health, Canada)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>09:00-09:10</td>
                                                                    <td class="bold">
                                                                        Q&A
                                                                    </td>
                                                                    <td class="text_r">

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
                            <li name="symposium_15">
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="dark_green_bg">
                                                <td>09:20-10:50</td>
                                                <td>
                                                    <p class="font_20 bold">Symposium 15 : Diet Quality and Weight Regulation</p>
                                                    <p><span class="bold">Chairpersons : Doo-Man Kim</span> (Hallym University, Korea)
                                                         , <br><span class="bold">Eun Mi Kim</span> (Sungkyunkwan University, Korea) 
                                                    </p>
                                                    <!-- <button class="btn gray2_btn program_detail_btn">Preview</button> -->
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="program_detail_td">
                                                    <p class="bold">Organizer: Hyunjung Lim (Kyung Hee University),
                                                        Sujin Song (Hannam University), Oh Yoen Kim (Dong-A University)
                                                    </p>
                                                    <ul>
                                                        <li>Obesity is no longer an individual or family problem but is
                                                            recognized as a disease that society must solve together. It
                                                            is also pointed out as a cause of socially enormous economic
                                                            loss and class polarization. This session introduces
                                                            community-based nutrition interventions and approaches for
                                                            obesity management in vulnerable groups. The first speaker
                                                            Dr. Shirley Y. Chao from the Massachusetts Executive Office
                                                            of Elder Affairs in the USA will lecture on ‘Integrating
                                                            Frailty and Malnutrition Screening into Community Care for
                                                            Older Adults and Their Caregivers.' The second speaker
                                                            Professor Seung Eun Jung from the University of Alabama in
                                                            the USA will introduce 'Community-based Strategies to
                                                            Decrease Health Disparities and Improve Nutritional Status
                                                            for US Low-income Population.' Lastly, Professor Minsun Jeon
                                                            of Chungnam National University in the Republic of Korea
                                                            lectures on 'Nutrition Management Strategies for the Elderly
                                                            and the Disabled in Social Welfare Facilities' and discusses
                                                            obesity management in vulnerable groups in this session.
                                                        </li>
                                                        <li>
                                                            <span class="font_inherit bold">• References</span><br />
                                                            1. Chao S, Corish CA, Keller H, Rasmussen H, Arensberg MB,
                                                            Dwyer JT.<br />Are you prepared for the decade of healthy
                                                            aging 2020-2030? A panel summary from the academy of
                                                            nutrition and dietetics 2020 food & nutrition conference &
                                                            expo virtual event, Nutrition Today 56(4):183-192, 2021.
                                                            <br />
                                                            2. Jung SE, Shin YH, Kim H, Hermann J, Bice C. Identifying
                                                            Underlying Beliefs About Fruit and Vegetable Consumption
                                                            Among Low-Income Older Adults: An Elicitation Study Based on
                                                            the Theory of Planned Behavior, J Nutr Educ Behav.
                                                            49(9):717-723, 2017<br />
                                                            3. Han S, Jeon M Development and Application of Nutrition
                                                            Education Program for the Elderly in Low Income Korean
                                                            Journal of Human Ecology. 28(2):171-183, 2019.
                                                        </li>
                                                    </ul>
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
                                                                    Functional Supplements: Their Fat Controls and Molecular Mechanisms
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Yuri Kim</p>(Ewha Womans University, Korea)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>09:45-10:10</td>
                                                                    <td class="bold">
                                                                        Optimal Diets for Body Weight Management
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Yang Hu</p>(Harvard T.H. Chan School of Public Health, USA)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>10:10-10:35</td>
                                                                    <td class="bold">
                                                                    Trends in Diet Quality and Cardiometabolic Risk Factors Among Korean Adults
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Hannah Oh</p>(Korea University, Korea)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>10:35-10:50</td>
                                                                    <td class="bold">
                                                                        Panel Discussion
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">SuJin Song</p>(Hannam University, Korea),<br />
                                                                        <p class="bold">Hyun Ju You</p>(Seoul National University, Korea)
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
                            <li name="presidential_lecture_3">
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="dark_pink_bg">
                                                <td>11:00-11:40</td>
                                                <td>
                                                    <p class="font_20 bold">Presidential Lecture</p>
                                                    <p><span class="bold">Chairperson : Kwang-Won Kim</span> (Gachon University, Korea)</p>
                                                    <!-- <button class="btn gray2_btn program_detail_btn">Preview</button> -->
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="program_detail_td">
                                                    <p class="bold">Organizer: Soo Lim (Seoul National University,
                                                        Republic of Korea), Jun Hwa Hong (Eulji University, Republic of
                                                        Korea)</p>
                                                    <ul>
                                                        <li>The interplay between adipose tissue's function as an energy
                                                            reservoir and an endocrine organ is crucial for maintaining
                                                            metabolic health. A key player in this dynamic balance is
                                                            leptin, a hormone whose regulation is tightly linked to fat
                                                            mass. Here we will discuss the multifaceted role of
                                                            LATS1/2-YAP/TAZ signaling in regulating adipocyte plasticity
                                                            and leptin production to maintain metabolic homeostasis.
                                                        </li>
                                                        <li>
                                                            <span class="font_inherit bold">• References</span><br>
                                                            1. Sethi, J.K. and A.J. Vidal-Puig, Thematic review series:
                                                            adipocyte biology. Adipose tissue function and plasticity
                                                            orchestrate nutritional adaptation. J Lipid Res, 2007.
                                                            48(6): p. 1253-62.<br>
                                                            2. Halder, G. and R.L. Johnson, Hippo signaling: growth
                                                            control and beyond. Development, 2011. 138(1): p. 9-22.
                                                        </li>
                                                    </ul>
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
                                                                    Obesity and Fatty Liver: Common but Ignored
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Cheol-Young Park</p>(Sungkyunkwan University, Korea)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>11:30-11:40</td>
                                                                    <td class="bold">
                                                                        Q&A
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
                            <li name="luncheon_symposium_7">
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="light_sky_bg">
                                                <td>11:50-12:50</td>
                                                <td>
                                                    <p class="font_20 bold">Luncheon Symposium 7</p>
                                                    <!-- <p><span class="bold">Chairperson : Ho-Young Son</span> (The
                                                        Catholic University of Korea, Republic of Korea)</p> -->
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
                                                                    SGLT2i: Beyond Glucose Lowering Effects
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Yong-Ho Lee</p>(Yonsei University, Korea)
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
                            <li name="ksso_scientific_session_2">
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="special_bg">
                                                <td>12:50-13:30</td>
                                                <td>
                                                    <p class="font_20 bold">Special Scientific Session 2</p>
                                                    <!-- <p><span class="bold">Chairperson : Sung Soo Kim</span> (Chungnam
                                                        National University, Republic of Korea)</p> -->
                                                    <!-- <button class="btn gray2_btn program_detail_btn">Preview</button> -->
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="program_detail_td">
                                                    <p class="bold">Organizer: Soo Lim (Seoul National University,
                                                        Republic of Korea)</p>
                                                    <ul>
                                                        <li>Matthias Blüher is Head of the Obesity Outpatient Clinic for
                                                            Adults at the University of Leipzig Department of Medicine
                                                            in Leipzig, Germany. He is Professor of Molecular
                                                            Endocrinology, with board certifications in Internal
                                                            Medicine, Endocrinology and Diabetology. From 2006 to 2012,
                                                            Professor Blüher served as Head of the Clinical Research
                                                            Group ‘Atherobesity,’ and since 2013, he has been Speaker of
                                                            the Collaborative Research Center on obesity mechanisms.
                                                        </li>
                                                        <li>Professor Blüher has won several awards, including the
                                                            Obesity Research Award of the German Society for the Study
                                                            of Obesity, the Ferdinand-Bertram-Prize of the German
                                                            Diabetes Association, and the Rising Star Lecture at the
                                                            44th European Association for the Study of Diabetes (EASD)
                                                            meeting. More recently, he received the Hans Christian
                                                            Hagedorn Award from the German Diabetes Association in 2011
                                                            and the Minkowski Award from the EASD in 2015.</li>
                                                        <li>
                                                            <span class="font_inherit bold">• References</span><br />
                                                            1. Blüher M, Aras M, Aronne LJ, Batterham RL, Giorgino F, Ji
                                                            L, Pietiläinen KH, Schnell O, Tonchevska E, Wilding JPH. New
                                                            insights into the treatment of obesity. Diabetes Obes Metab.
                                                            2023 Apr 13. doi: 10.1111/dom.15077.<br />
                                                            2. Blüher M. Metabolically Healthy Obesity. Endocr Rev. 2020
                                                            May 1;41(3):bnaa004.
                                                        </li>
                                                    </ul>
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
                                                                    <td>12:50-13:20</td>
                                                                    <td class="bold">
                                                                    Clinical Implication of GLP-1 Receptor Agonists and SGLT2 Inhibitors from a Cardiometabolic Perspective
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Soo Lim</p>
                                                                        (Seoul National University, Korea)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>13:20-13:30</td>
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
                            <li name="keynote_lecture_5_3">
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="plenary_bg">
                                                <td>13:50-14:30</td>
                                                <td>
                                                    <p class="font_20 bold">Plenary Lecture 3</p>
                                                    <p><span class="bold">Chairperson : Kwan Woo Lee</span> (Ajou University, Korea)</p>
                                                    <button class="btn gray2_btn program_detail_btn">Preview</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="program_detail_td">
                                                <p class="bold">Organizer: Il-Young Kim (Gachon University School of Medicine, Korea)</p>
                                                        <ul>
                                                        <li>Prof. William Evans is widely respected as the world’s foremost authority in human muscle aging research. He was the first to describe the condition called sarcopenia, the age-related loss of muscle mass and strength. Muscle plays a central role in physiological metabolism beyond its role in physical function and various clinical conditions such as cancer, diabetes, insulin resistance, and obesity. Particularly in the context of weight management, muscle plays a key role in energy metabolism as loss of muscle mass with advancing age results in a substantial decrease in basal metabolic rate. In this keynote lecture, Prof. Evans will discuss the importance of muscle mass and metabolism on energy metabolism and functional capacity. Furthermore, Prof. Evans will introduce new methods for the evaluation of muscle mass that now enable demonstration of the importance of muscle mass and its association with poor functional status, risk of disability, hip fracture, and mortality.
                                                        </li>
                                                        <li>
                                                            <span class="font_inherit bold">• References</span><br />
                                                            1. Evans WJ, Cawthon PM. D(3)Creatine Dilution as a Direct, Non-invasive and Accurate Measurement of Muscle Mass for Aging Research. Calcif Tissue Int. 2023<br />2. Cawthon PM, Blackwell T, Cummings SR, et al. Muscle mass assessed by D3-Creatine dilution method and incident self-reported disability and mortality in a prospective observational study of community dwelling ol0der men. J Gerontol A Biol Sci Med Sci. 2020 <br />3. Orwoll ES, Peters KE, Hellerstein M, Cummings SR, Evans WJ, Cawthon PM. The Importance of Muscle Versus Fat Mass in Sarcopenic Obesity: A Re-evaluation Using D3-Creatine Muscle Mass Versus DXA Lean Mass Measurements. J Gerontol A Biol Sci Med Sci. 2020 </li>
                                                    </ul>
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
                                                                    <td class="bold">How Muscle Mass and Metabolism Affects Energy Metabolism and Functional Capacity</td>
                                                                    <td class="text_r">
                                                                        <p class="bold">William Evans</p>(University of California, Berkeley, USA)
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
                            <li name="keynote_lecture_6_3">
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="keynote_bg">
                                                <td>14:30-15:10</td>
                                                <td>
                                                    <p class="font_20 bold">Keynote Lecture 3</p>
                                                    <p><span class="bold">Chairperson : Moon-Kyu Lee</span> (Eulji University, Korea)</p>
                                                    <!-- <button class="btn gray2_btn program_detail_btn">Preview</button> -->
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="program_detail_td">
                                                    <p class="bold">Organizer: Soo Lim (Seoul National University,
                                                        Republic of Korea)</p>
                                                    <ul>
                                                        <li>Obesity is not only a serious disease in itself, but also a
                                                            health risk factor that causes various diseases, so
                                                            governmental plan and policy cooperation are needed. Korean
                                                            government established and announced the first national
                                                            obesity management comprehensive plan in 2018 to provide an
                                                            opportunity to raise public awareness of the importance of
                                                            obesity prevention and management and to monitor the
                                                            pregress. In this lecture, I would like to introduce the
                                                            past, present and future of Korea's national obesity
                                                            strategy.</li>
                                                    </ul>
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
                                                                    Human Adipose Tissue Metabolism: What Happens with Obesity
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Michael D. Jensen</p>(Mayo College of Medicine,USA)
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
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="dark_green_bg">
                                                <td>15:20-16:50</td>
                                                <td>
                                                    <p class="font_20 bold">Symposium 19 : Expanding Horizons in Pediatric Obesity</p>
                                                    <p><span class="bold">Chairpersons : Sochung Chung</span> (Konkuk University, Korea)
                                                    , <br><span class="bold">Junga Lee</span> (Kyung Hee University, Korea)
                                                    </p>
                                                    <button class="btn gray2_btn program_detail_btn">Preview</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="program_detail_td">
                                                <p class="bold">Organizer : Jaehyun Kim (Seoul National University, Korea), Yong Hee Hong (Soonchunhyang University, Korea)</p>
                                                        <ul>
                                                        <li>In childhood and adolescent obesity, individual and family factors, lifestyle habits, as well as the given environment and school play an important role. This session will examine the status, necessity, and effectiveness of physical activity in schools, and explore strategies for managing obesity in children and adolescents in terms of social work, such as vulnerable groups and health inequalities. Lastly, in a situation where exposure to various social media is rapidly increasing in Korea, we will examine obesity management and education using social media that was studied among American college students, and examine its effectiveness and applicability. It is hoped that this session will provide an expanded perspective and insight into childhood and adolescent obesity.</li>
                                                        <li>
                                                            <span class="font_inherit bold">• References</span><br />
                                                            1. Exploring Service Use Disparities among Suicidal Black Youth in a Suicide Prevention Care Coordination Intervention. J Racial Ethn Health Disparities. 2023;10(5):2231-2243<br />2. Examining the effectiveness of a family-focused training to prevent youth suicide. Family Relations, 2023;72(1), 325–346<br />3. Examining College Students’ Willingness to Consume Local Foods Utilizing the Health Belief Model with the Addition of Social Influence and Self-identity.  Journal of Hunger and Environmental Nutrition. 2023;18(5): 736-752<br />4. A Multi Theory-Based Investigation of College Students' Underlying Beliefs About Local Food Consumption. J Nutr Educ Behav. 2020 Oct;52(10):907-917

                                                            </li>
                                                    </ul>
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
                                                                    The Effects of Physical Activity on Obesity and Health in Adolescents
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Jihyun Ahn</p>(Kyeongin High School, Korea)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>15:45-16:10</td>
                                                                    <td class="bold">
                                                                    Understanding Pediatric Obesity from a Social Work Perspective
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Eunji Nam</p>(Incheon National University, Korea)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>16:10-16:35</td>
                                                                    <td class="bold">
                                                                    The Effectiveness of Social Media Nutrition Education for Promoting Locally Grown Fruit and Vegetable Consumption Among College Students
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Seung Eun Jung</p>(The University of Alabama, USA)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>16:35-16:50</td>
                                                                    <td class="bold">
                                                                        Panel Discussion
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Jisun Park</p>(Inha University, Korea)<br />
                                                                        <p class="bold">Kyoung Huh</p>(Kium Pediatric Hospital, Korea)
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
                                                <td>16:50-17:00</td>
                                                <td>
                                                    <p class="font_20 bold">Break</p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                            <li name="keynote_lecture_7_3">
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="plenary_bg">
                                                <td>17:00-17:40</td>
                                                <td>
                                                    <p class="font_20 bold">Plenary Lecture 4</p>
                                                    <p><span class="bold">Chairperson : Kyu Rae Lee</span> (Gachon University, Korea)</p>
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
                                                                    Semaglutide, a Second-Generation Obesity Medication for the Treatment and Prevention of Cardiometabolic Disease
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">W. Timothy Garvey</p>(University of Alabama at Birmingham, USA)
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
                                <div class="table_wrap detail_table_common x_scroll border_bottom_70">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="white_yellow_bg">
                                                <td>17:40-18:00</td>
                                                <td>
                                                    <p class="font_20 bold mb0">Closing & Award Ceremony</p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                        </ul>
                    </div>
                    
                    <!-- !!! Day3 - Room4 -->
                    <div class="tab_cont">
                        <ul class="program_detail_ul">
                            <li name="symposium_16">
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="dark_green_bg">
                                                <td>09:20-10:50</td>
                                                <td>
                                                    <p class="font_20 bold">Symposium 16 : International Collaboration 2</p>
                                                    <p><span class="bold">Chairpersons : Eun-Jung Rhee</span> (Sungkyunkwan University, Korea)
                                                        , <br><span class="bold">Chang Hee Jung</span> (University of Ulsan, Korea)
                                                    </p>
                                                    <!-- <button class="btn gray2_btn program_detail_btn">Preview</button> -->
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
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Dror Dicker</p>(Tel Aviv University, Israel)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>09:45-10:10</td>
                                                                    <td class="bold">
                                                                    GLP1+Glucagon Dual Agonist
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Erika Bezerra Parente</p>(Boehringer Ingelheim, Germany)
                                                                        </td>
                                                                    </tr>
                                                                <tr>
                                                                    <td>10:10-10:35</td>
                                                                    <td class="bold">
                                                                    </td>
                                                                    <td class="text_r">
                                                                    <p class="bold">W. Timothy Garvey</p>(University of Alabama at Birmingham, USA)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>10:35-10:50</td>
                                                                    <td class="bold">
                                                                        Panel Discussion
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <!-- <p class="bold">Ji Won Yoon</p>(Seoul National University, Republic of Korea), <br>
                                                                        <p class="bold">Jin Hwa Kim</p>(Chosun University, Republic of Korea)  -->
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
                            <li name="oral_presentation_3">
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="dark_orange_bg">
                                                <td>12:50-13:50</td>
                                                <td>
                                                    <p class="font_20 bold">Oral Presentation 3</p>
                                                    <p>
                                                        <span class="bold">Chairpersons : Bo Kyung Koo</span> (Seoul National University, Korea), <br><span
                                                            class="bold">Jun Sung Moon</span> (Yeungnam University, Korea)
                                                    </p>
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
                                                                    <td>12:50-13:00</td>
                                                                    <td class="bold"></td>
                                                                    <td class="text_r">
                                                                        <p class="bold"></p>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>13:00-13:10</td>
                                                                    <td class="bold"></td>
                                                                    <td class="text_r">
                                                                        <p class="bold"></p>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>13:10-13:20</td>
                                                                    <td class="bold"></td>
                                                                    <td class="text_r">
                                                                        <p class="bold"></p>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>13:20-13:30</td>
                                                                    <td class="bold"></td>
                                                                    <td class="text_r">
                                                                        <p class="bold"></p>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>13:30-13:40</td>
                                                                    <td class="bold"></td>
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
                            <li name="symposium_20">
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="dark_green_bg">
                                                <td>15:20-16:50</td>
                                                <td>
                                                    <p class="font_20 bold">Symposium 20 : Exercise and Cardiometabolic Dysfunction
                                                    </p>
                                                    <p><span class="bold">Chairpersons : Jong-Hee Kim</span> (Hanyang University, Korea)
                                                    , <br> <span class="bold">Sewon Lee</span> (Incheon National University, Korea)
                                                </p>
                                                    <!-- <button class="btn gray2_btn program_detail_btn">Preview</button> -->
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
                                                                    Impact of Progressive Dynamic Resistance Training on Skeletal Muscle and Vascular Function in Older Adults
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Oh Sung Kwon</p>(University of Connecticut, USA)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>15:45-16:10</td>
                                                                    <td class="bold">
                                                                    Sleep, Metabolic Diseases, and the Role of Physical Activity in Middle and Older Individuals
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Jaehoon Seol</p>(University of Tsukuba, Japan)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>16:10-16:35</td>
                                                                    <td class="bold">
                                                                    Exercise Recommendation Algorithm for Improving Functional Movement: Focusing on Individuals with Obesity
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Min-Hwa Suk</p>(Hanyang University, Korea)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>16:35-16:50</td>
                                                                    <td class="bold">
                                                                        Panel Discussion
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Kyeongho Byun</p>(Incheon National University, Korea), <br>
                                                                        <p class="bold">Seungyong Lee</p>(Incheon National University, Korea)
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
                        </ul>
                    </div>

                    <!-- !!! Day3 - Room5 -->
                    <div class="tab_cont">
                        <ul class="program_detail_ul">
                            <li name="sponsored_session_3">
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="light_sky_bg">
                                                <td>09:20-10:50</td>
                                                <td>
                                                    <p class="font_20 bold">Sponsored Session 3 : Optimization of Glycemic Control in Obese Diabetes Patients With CGM</p>
                                                    <p><span class="bold">Chairpersons : Young Sung Suh</span> (Keimyung University, Korea)
                                                    , <br><span class="bold">Kyoung Kon Kim</span> (Gachon University, Korea)
                                                </p>
                                                    <!-- <button class="btn gray2_btn program_detail_btn">Preview</button> -->
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
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Jun Sung Moon</p>(Yeungnam University, Korea)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>09:50-10:20</td>
                                                                    <td class="bold">
                                                                    Life Style Modification with CGM, How To Do?
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Sun-Joon Moon</p>(Sungkyunkwan University, Korea)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>10:20-10:50</td>
                                                                    <td class="bold">
                                                                    The Expanding Role of CGM in Wellness: From Glycemic Control to Holistic Health
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Jae Hyun Bae</p>(Korea University, Korea)
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
                            <li name="oral_presentation_4">
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="dark_orange_bg">
                                                <td>12:50-13:50</td>
                                                <td>
                                                    <p class="font_20 bold">Oral Presentation 4</p>
                                                    <p>
                                                        <span class="bold">Chairpersons : Oh Yoen Kim</span> (Dong-A University, Korea)
                                                      , <br><span class="bold">Bo-Yeon Kim</span> (Soonchunhyang University, Korea)
                                                    </p>
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
                                                                    <td>12:50-13:00</td>
                                                                    <td class="bold"></td>
                                                                    <td class="text_r">
                                                                        <p class="bold"></p>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>13:00-13:10</td>
                                                                    <td class="bold">
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold"></p>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>13:10-13:20</td>
                                                                    <td class="bold"></td>
                                                                    <td class="text_r">
                                                                        <p class="bold"></p>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>13:20-13:30</td>
                                                                    <td class="bold">
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold"></p>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>13:30-13:40</td>
                                                                    <td class="bold"></td>
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
                            <li name="jomes_session">
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="violet_bg">
                                                <td>15:20-16:50</td>
                                                <td>
                                                    <p class="font_20 bold">Joint Symposium KSSO-TOS : Real Word Experience of Anti-Obesity Medications</p>
                                                    <p><span class="bold">Chairpersons : Marc-Andre Cornier</span> (Medical University of South Carolina, USA), <br><span class="bold">Soo Lim</span> (Seoul National University, Korea)</p>
                                                    <!-- <button class="btn gray2_btn program_detail_btn">Preview</button> -->
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
                                                                    <td>15:20-15:50</td>
                                                                    <td class="bold">
                                                                    Real-World Experience with Novel Anti-Obesity Medications
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Marc-Andre Cornier</p>(Medical University of South Carolina, USA)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>15:50-16:20</td>
                                                                    <td class="bold">
                                                                    GLP1 Receptor Agonists from Asian Perspective
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Yumi Kang</p>(Harvard Medical School, USA)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>16:20-16:50</td>
                                                                    <td class="bold">
                                                                    Real World Mental Health Implications of Anti-Obesity Medication Use
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Robyn Pashby</p>(Health Psychology Partners, USA)
                                                                    </td>
                                                                </tr>
                                                                <!-- <tr>
                                                                    <td>16:35-16:50</td>
                                                                    <td class="bold">
                                                                    Panel Discussion
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold"></p>
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
                        </ul>
                    </div>

                    <!-- !!!Day3 - Room6 -->
                    <div class="tab_cont">
                        <ul class="program_detail_ul">
                            <li name="guided_poster_presentation_2">
                                <div class="table_wrap detail_table_common x_scroll border_bottom_70">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="dark_orange_bg">
                                                <td>12:50-13:25</td>
                                                <td>
                                                    <p class="font_20 bold mb0">Guided Poster Presentation 2</p>
                                                    <p><span class="bold">Chairpersons : Kyung-Soo Kim</span> (CHA University, Korea)</p>
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
                                                                    <td>12:50-12:57</td>
                                                                    <td class="bold">
                                                                      
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold"></p>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>12:57-13:04</td>
                                                                    <td class="bold">
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold"></p>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>13:04-13:11</td>
                                                                    <td class="bold">
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold"></p>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>13:11-13:18</td>
                                                                    <td class="bold">
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold"></p>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>13:18-13:25</td>
                                                                    <td class="bold">
                                                                        
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
                        </ul>
                    </div>
                   

                     <!-- !!!Day3 - Room7 -->
                     <div class="tab_cont">
                        <ul class="program_detail_ul">
                            
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
    $(".program_detail_ul .detail_table_common > table > tbody > tr:first-child").next("tr").next("tr")
        .children("td").children("div").css("display", "none");
    $(".program_detail_ul .detail_table_common > table > tbody > tr:first-child").next("tr").next("tr")
        .children("td.on").children("div").css("display", "block");

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