<?php
include_once('./include/head.php');

$session_user = $_SESSION['USER'] ?? NULL;
$session_app_type = (!empty($_SESSION['APP']) ? 'Y' : 'N');

include_once('./include/app_header.php');

$sql_title =    "SELECT
						GROUP_CONCAT(title) AS title_concat
					FROM (
						SELECT 
							title_" . $language . " AS title
						FROM info_general_commitee
						WHERE is_deleted = 'N'
						AND title_" . $language . " <> ''
						GROUP BY title_" . $language . "
						ORDER BY idx
					) AS res";
$titles = explode(',', sql_fetch($sql_title)['title_concat']);
?>
<!-- [240314] sujeong / app_organizing_committee page 추가 -->
<!-- app일 시 section에 app_version 클래스 추가 -->
<section class="container organizing app_version">
	<!-- HUBDNCLHJ : app 메뉴 탭 -->
        <div class="app_title_box">
            <h2 class="app_title">ICOMES 2024<button type="button" class="app_title_prev" onclick="javascript:window.location.href='./app_index.php';"><img src="https://image.webeon.net/icomes2024/app/2024_icon_arrow_prev_wh.svg" alt="이전페이지로 이동"></button></h2>
        <div class="app_menu_box">
                <ul class="app_menu_tab">
                    <li><a href="./app_welcome.php">Welcome Message</a></li>
                    <!-- <li><a href="./app_welcome.php" class="get_ready_alert">Welcome Message</a></li> -->
                    <li class="on"><a href="./app_organizing_committee.php">Organization</a></li>
                    <li><a href="./app_overview.php">Overview</a></li>
                    <li><a href="./app_venue.php">Venue</a></li>
                </ul>
            </div>
        </div>
    <div>
    <div class="inner">
            <h3 class="title">Organizing Committee</h3>
            <div class="table_wrap">
                <table class="c_table2 center_table fixed_table">
                    <colgroup>
                        <col width="26%">
                        <col width="200px">
                        <col width="*">
                    </colgroup>
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Name</th>
                            <th>Affiliation</th>
                        </tr>
                    </thead>
                    <tbody class="cat1">
                        <tr>
                            <th>Chairman</th>
                            <td>Sung Rae Kim</td>
                            <td>Catholic University of Korea</td>
                        </tr>
                        <tr>
                            <th rowspan="4">Vice-Chairman</th>
                            <td>Kyoung-Kon Kim</td>
                            <td>Gachon University</td>
                        </tr>
                        <tr>
                            <td>Yoon-A Shin</td>
                            <td>Dankook University</td>
                        </tr>
                        <tr>
                            <td>Yoon-Ju Song</td>
                            <td>Catholic University of Korea</td>
                        </tr>
                        <tr>
                            <td>Kae Won Cho</td>
                            <td>Soonchunhyang University</td>
                        </tr>
                        <tr>
                            <th>President</th>
                            <td>Cheol-Young Park</td>
                            <td>Sungkyunkwan University</td>
                        </tr>
                        <tr>
                            <th>General Affairs</th>
                            <td>Sang Mo Hong</td>
                            <td>Hanyang University</td>
                        </tr>
                        <tr>
                            <th rowspan="7">Vice-Secretary General</th>
                            <td>Kyung-Soo Kim</td>
                            <td>CHA University</td>
                        </tr>
                        <tr>
                            <td>Yun Kyung Cho</td>
                            <td>University of Ulsan</td>
                        </tr>
                        <tr>
                            <td>Young Sang Lyu</td>
                            <td>Chosun University</td>
                        </tr>
                        <tr>
                            <td>Kye-Yeung Park</td>
                            <td>Hanyang University</td>
                        </tr>
                        <tr>
                            <td>Jae Hyun Bae</td>
                            <td>Seoul National University</td>
                        </tr>
                        <tr>
                            <td>Jun Hwa Hong</td>
                            <td>Eulji University</td>
                        </tr>
                        <tr>
                            <td>Byoungduck Han</td>
                            <td>Korea University</td>
                        </tr>
                        <tr>
                            <th>Academic Affairs</th>
                            <td>Soo Lim</td>
                            <td>Seoul National University</td>
                        </tr>
                        <tr>
                            <th>Publications</th>
                            <td>You-Cheol Hwang</td>
                            <td>Kyung Hee University</td>
                        </tr>
                        <tr>
                            <th>Training</th>
                            <td>Jee Hyun Kang</td>
                            <td>Konyang University</td>
                        </tr>
                        <tr>
                            <th>Research (Clinical)</th>
                            <td>Jang Won Son</td>
                            <td>Catholic University of Korea</td>
                        </tr>
                        <tr>
                            <th>Research (Basic)</th>
                            <td>Ki Woo Kim</td>
                            <td>Yonsei University</td>
                        </tr>
                        <tr>
                            <th>Education</th>
                            <td>Hae-Jin Ko</td>
                            <td>Kyungpook National University</td>
                        </tr>
                        <tr>
                            <th>Public Relations</th>
                            <td>Yang Im Hur</td>
                            <td>CHA University</td>
                        </tr>
                        <tr>
                            <th>Strategic Planning</th>
                            <td>Sang Yong Kim</td>
                            <td>Chosun University</td>
                        </tr>
                        <tr>
                            <th>External Affairs and Policy</th>
                            <td>Jeong Hwan Park</td>
                            <td>Hanyang University</td>
                        </tr>
                        <tr>
                            <th>Treasurer</th>
                            <td>Kiyoung Lee</td>
                            <td>Gachon University</td>
                        </tr>
                        <tr>
                            <th>Information</th>
                            <td>Yoon Jeong Cho</td>
                            <td>Daegu Catholic University</td>
                        </tr>
                        <tr>
                            <th>International Relations</th>
                            <td>Chang Hee Jung</td>
                            <td>University of Ulsan</td>
                        </tr>
                        <tr>
                            <th>Private Practice</th>
                            <td>Changhyun Lee</td>
                            <td>Seoul Happiness internal medicine clinic</td>
                        </tr>
                        <tr>
                            <th>Health Insurance and Legislation</th>
                            <td>Ga Eun Nam</td>
                            <td>Korea University</td>
                        </tr>
                        <tr>
                            <th>IT Integrated Metabolic Syndrome</th>
                            <td>Sang Youl Rhee</td>
                            <td>Kyung Hee University</td>
                        </tr>
                        <tr>
                            <th>Clinical Guidelines</th>
                            <td>Hyuk tae Kwon</td>
                            <td>Seoul National University</td>
                        </tr>
                        <tr>
                            <th>Food and Nutrition</th>
                            <td>Jeong Hyun Lim</td>
                            <td>Seoul National University Hospital</td>
                        </tr>
                        <tr>
                            <th>Exercise</th>
                            <td>Jong Hee Kim</td>
                            <td>Hanyang University</td>
                        </tr>
                        <tr>
                            <th>Behavioral Therapy</th>
                            <td>Chang Woo Han</td>
                            <td>Myong-Ji Hospital</td>
                        </tr>
                        <tr>
                            <th>Bariatric Surgery</th>
                            <td>Sang-Moon Han</td>
                            <td>Seoul Medical Center</td>
                        </tr>
                        <tr>
                            <th>Childhood and Adolescence</th>
                            <td>Hong, Yong Hee</td>
                            <td>Soonchunhyang University</td>
                        </tr>
                        <tr>
                            <th>Big Data</th>
                            <td>Kyung Do Han</td>
                            <td>Soongsil University</td>
                        </tr>
                        <tr>
                            <th>Ethics</th>
                            <td>Jong Hwa Kim</td>
                            <td>Sejong Hospital</td>
                        </tr>
                        <tr>
                            <th>Examination</th>
                            <td>Jung Hwan Kim</td>
                            <td>Eulji University</td>
                        </tr>
                        <tr>
                            <th rowspan="2">Audit</th>
                            <td>Jun Goo Kang</td>
                            <td>Hallym University</td>
                        </tr>
                        <tr>
                            <td>Chung, Sochung</td>
                            <td>Konkuk University</td>
                        </tr>
                    </tbody>
                </table>
            </div>
           
			<h3 class="title">Scientific Program Committee</h3>
            <div class="table_wrap">
                <table class="c_table2">
                    <colgroup>
                        <col width="26%">
                        <col width="200px">
                        <col width="*">
                    </colgroup>
					<thead>
						<tr>
							<th>Title</th>
							<th>Name</th>
							<th>Affiliation</th>
						</tr>
					</thead>
                    <tbody class="cat2">
                        <tr>
                            <th>Director</th>
                            <td>Soo Lim</td>
                            <td>Seoul National University</td>
                        </tr>
                        <tr>
                            <th>Coordinator</th>
                            <td>Jang Won Son</td>
                            <td>The Catholic University of Korea</td>
                        </tr>
                        <tr>
                            <th rowspan="2">Assistant Coordinator</th>
                            <td>Jun Hwa Hong</td>
                            <td>Eulji University</td>
                        </tr>
                        <tr>
                            <td>Jin-Wook Kim</td>
                            <td>Hippocrata Clinic</td>
                        </tr>
                        <tr>
                            <th rowspan="21">Members</th>
                            <td>Jun Sung Moon</td>
                            <td>Yeungnam University</td>
                        </tr>
                        <tr>
                            <td>Seung-Hwan Lee</td>
                            <td>The Catholic University of Korea</td>
                        </tr>
                        <tr>
                            <td>Chang Hee Jung</td>
                            <td>University of Ulsan</td>
                        </tr>
                        <tr>
                            <td>Ji Won Yoon</td>
                            <td>Seoul National University</td>
                        </tr>
                        <tr>
                            <td>Jae Hyun Bae</td>
                            <td>Seoul National University</td>
                        </tr>
                        <tr>
                            <td>Kyung Ae Lee</td>
                            <td>Jeonbuk National University</td>
                        </tr>
                        <tr>
                            <td>Kyung Hee Park</td>
                            <td>Hallym University</td>
                        </tr>
                        <tr>
                            <td>Ga Eun Nam</td>
                            <td>Korea University</td>
                        </tr>
                        <tr>
                            <td>Bumjo Oh</td>
                            <td>Seoul National University</td>
                        </tr>
                        <tr>
                            <td>Yoon Jeong Cho</td>
                            <td>Daegu Catholic University</td>
                        </tr>
                        <tr>
                            <td>Hyuktae Kwon</td>
                            <td>Seoul National University</td>
                        </tr>
                        <tr>
                            <td>Hye Yeon Koo</td>
                            <td>Seoul National University</td>
                        </tr>
                        <tr>
                            <td>Hyung Jin Choi</td>
                            <td>Seoul National University</td>
                        </tr>
                        <tr>
                            <td>Yun Hee Lee</td>
                            <td>Seoul National University</td>
                        </tr>
                        <tr>
                            <td>Hyunjung Lim</td>
                            <td>Kyung Hee University</td>
                        </tr>
                        <tr>
                            <td>Oh Yoen Kim</td>
                            <td>Dong-A University</td>
                        </tr>
                        <tr>
                            <td>SuJin Song</td>
                            <td>Hannam University</td>
                        </tr>
                        <tr>
                            <td>Il-Young Kim</td>
                            <td>Gachon University</td>
                        </tr>
                        <tr>
                            <td>Jae Hyun Kim</td>
                            <td>Seoul National University</td>
                        </tr>
                        <tr>
                            <td>Min Chul Lee</td>
                            <td>CHA University</td>
                        </tr>
                        <tr>
                            <td>Sewon Lee</td>
                            <td>Incheon National University</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <h3 class="title">International Advisory Board</h3>
            <div class="table_wrap">
                <table class="c_table2">
                    <colgroup>
                        <col width="26%">
                        <col width="*">
                    </colgroup>
					<thead>
						<tr>
							<th>Country</th>
							<th>Name</th>
                            <th>Association</th>
						</tr>
					</thead>
                    <tbody class="cat2">
                        <tr>
                            <td>Austrailia</td>
                            <td>Leonie Kaye Heiboronn</td>
                            <td>ANZOS<br/>(The Australian and New Zealand Obesity Society)</td>
                        </tr>
                        <tr>
                            <td>Hong Kong</td>
                            <td>Andrea Luk</td>
                            <td>HKASO<br/>(Hong Kong Association for the Study of Obesity)</td>
                        </tr>
                        <tr>
                            <td>Hong Kong</td>
                            <td>Michele Mae Ann Yuen</td>
                            <td>HKOS<br/>(Hong Kong Obesity Society)</td>
                        </tr>
                        <tr>
                            <td>India</td>
                            <td>Banshi Saboo</td>
                            <td>AiAARO<br/>(All India Association for Advancing Research in Obesity)</td>
                        </tr>
                        <tr>
                            <td>Japan</td>
                            <td>Geeta Appannah</td>
                            <td>JASSO<br/>(Japan Society for the Study of Obesity)</td>
                        </tr>
                        <tr>
                            <td>Malaysia</td>
                            <td>Geeta Appannah</td>
                            <td>MASO<br/>(Malaysian Association for the Study of Obesity)</td>
                        </tr>
                        <tr>
                            <td>New Zealand</td>
                            <td>Elaine Rush</td>
                            <td>ANZOS<br/>(The Australian and New Zealand Obesity Society)</td>
                        </tr>
                        <tr>
                            <td>Philippines</td>
                            <td>Nemencio A Nicodemus, Jr</td>
                            <td>PASOO<br/>(Philippine Association for the Study of Overweight and Obesity)</td>
                        </tr>
                        <tr>
                            <td>Taiwan</td>
                            <td>Wen-Yuan Lin</td>
                            <td>TMASO<br/>(Taiwan Medical Association for the Study of Obesity)</td>
                        </tr>
                        <tr>
                            <td>Vietnam</td>
                            <td>Do Thi Ngoc Diep</td>
                            <td>VINUTAS<br/>(Vietnam Nutrition Association)</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
<script>
	$(document).ready(function(){
        $(".app_header").removeClass("simple");
    })
</script>

<?php 
    include_once('./include/app_footer.php'); 
?>