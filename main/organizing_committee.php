<?php
include_once('./include/head.php');
include_once('./include/header.php');

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

<section class="container organizing">
    <div>
        <h1 class="page_title">Organization</h1>
        <div class="inner">
            <h3 class="title"><!-- <?= $locale("organizing_committee") ?> -->Organizing Committee</h3>
            <div class="table_wrap">
                <table class="c_table2 center_table fixed_table">
                    <colgroup>
                        <col width="*">
                        <col width="200px">
                        <col width="*">
                        <col width="*">
                    </colgroup>
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Name</th>
                            <th>Affiliation</th>
                            <th>Specialty</th>
                        </tr>
                    </thead>
                    <tbody class="cat1">
                        <!-- <img class="coming" src="./img/coming.png" /> -->
                        <tr>
                            <th>Chairman</th>
                            <td>Sung Soo Kim</td>
                            <td>Chungnam National University</td>
                            <td>Family Medicine</td>
                        </tr>
                        <tr>
                            <th rowspan="3">Vice-chairman</th>
                            <td>Kyoung-Kon Kim</td>
                            <td>Gachon University</td>
                            <td>Family Medicine</td>
                        </tr>
                        <tr>
                            <td>Eun Mi Kim</td>
                            <td>Kangbuk Samsung Hospital</td>
                            <td>Nutrition Team</td>
                        </tr>
                        <tr>
                            <td>Yoon-A Shin</td>
                            <td>Dankook University</td>
                            <td>International Sports Studies</td>
                        </tr>
                        <tr>
                            <th>President</th>
                            <td>Cheol-Young Park</td>
                            <td>Sungkyunkwan University</td>
                            <td>Endocrinology</td>
                        </tr>
                        <tr>
                            <th>General Affairs</th>
                            <td>Sang Mo Hong</td>
                            <td>Hanyang University</td>
                            <td>Endocrinology</td>
                        </tr>
                        <tr>
                            <th rowspan="7">Vice-Secretary General</th>
                            <td>Kyung-Soo Kim</td>
                            <td>Cha University</td>
                            <td>Internal Medicine</td>
                        </tr>
                        <tr>
                            <td>Yun-Kyung Cho</td>
                            <td>University of Ulsan</td>
                            <td>Endocrinology</td>
                        </tr>
                        <tr>
                            <td>Young-Sang Lyu</td>
                            <td>Chosun University</td>
                            <td>Endocrinology</td>
                        </tr>
                        <tr>
                            <td>Kye young Park</td>
                            <td>Hanyang University</td>
                            <td>Family Medicine</td>
                        </tr>
                        <tr>
                            <td>Jae Hyun Bae</td>
                            <td>Korea University</td>
                            <td>Endocrinology</td>
                        </tr>
                        <tr>
                            <td>Jun Hwa Hong</td>
                            <td>Eulji University</td>
                            <td>Endocrinology</td>
                        </tr>
                        <tr>
                            <td>Byoungduck Han</td>
                            <td>Korea University</td>
                            <td>Family Medicine</td>
                        </tr>
                        <tr>
                            <th>Academic Affairs</th>
                            <td>Soo Lim</td>
                            <td>Seoul National University</td>
                            <td>Endocrinology</td>
                        </tr>
                        <tr>
                            <th>Publications</th>
                            <td>You-Cheol Hwang</td>
                            <td>Kyung Hee University</td>
                            <td>Endocrinology</td>
                        </tr>
                        <tr>
                            <th>Training</th>
                            <td>Jee Hyun Kang</td>
                            <td>Konyang University</td>
                            <td>Family Medicine</td>
                        </tr>
                        <tr>
                            <th>Research (Clinical)</th>
                            <td>Jang Won Son</td>
                            <td>Catholic University of Korea</td>
                            <td>Endocrinology</td>
                        </tr>
                        <tr>
                            <th>Research (Basic)</th>
                            <td>Ki Woo Kim</td>
                            <td>Yonsei University</td>
                            <td>Dentistry</td>
                        </tr>
                        <tr>
                            <th>Education</th>
                            <td>Hae-Jin Ko</td>
                            <td>Kyungpook National University</td>
                            <td>Family Medicine</td>
                        </tr>
                        <tr>
                            <th>Public Relations</th>
                            <td>Yang Im Hur</td>
                            <td>CHA University</td>
                            <td>Family Medicine</td>
                        </tr>
                        <tr>
                            <th>Strategic Planning</th>
                            <td>Sang Yong Kim</td>
                            <td>Chosun University</td>
                            <td>Endocrinology</td>
                        </tr>
                        <tr>
                            <th>External Affairs and Policy</th>
                            <td>Jeong Hwan Park</td>
                            <td>Hanyang University</td>
                            <td>Endocrinology</td>
                        </tr>
                        <tr>
                            <th>Treasurer</th>
                            <td>Kiyoung Lee</td>
                            <td>Gachon University</td>
                            <td>Endocrinology</td>
                        </tr>
                        <tr>
                            <th>Information</th>
                            <td>Yoon Jeong Cho</td>
                            <td>Daegu Catholic University</td>
                            <td>Family Medicine</td>
                        </tr>
                        <tr>
                            <th>International Relations</th>
                            <td>Chang Hee Jung</td>
                            <td>University of Ulsan</td>
                            <td>Endocrinology</td>
                        </tr>
                        <tr>
                            <th>Private Practice</th>
                            <td>Changhyun Lee</td>
                            <td>Seoul Happiness internal medicine clinic</td>
                            <td>Gastroenterology</td>
                        </tr>
                        <tr>
                            <th>Health Insurance and Legislation</th>
                            <td>Ga Eun Nam</td>
                            <td>Korea University</td>
                            <td>Family Medicine</td>
                        </tr>
                        <tr>
                            <th>IT Integrated Metabolic Syndrome</th>
                            <td>Sang Youl Rhee</td>
                            <td>Kyung Hee University</td>
                            <td>Endocrinology</td>
                        </tr>
                        <tr>
                            <th>Clinical Guidelines</th>
                            <td>Hyuk tae Kwon</td>
                            <td>Seoul National University</td>
                            <td>Family Medicine</td>
                        </tr>
                        <tr>
                            <th>Food and Nutrition</th>
                            <td>Jeong Hyun Lim</td>
                            <td>Seoul National University Hospital</td>
                            <td>Food Service and Nutrition Care</td>
                        </tr>
                        <tr>
                            <th>Exercise</th>
                            <td>Jong Hee Kim</td>
                            <td>Hanyang University</td>
                            <td>Physical Education</td>
                        </tr>
                        <tr>
                            <th>Behavioral Therapy</th>
                            <td>Chang Woo Han</td>
                            <td>Hanyang University</td>
                            <td>Psychiatry</td>
                        </tr>
                        <tr>
                            <th>Bariatric Surgery</th>
                            <td>Sang-Moon Han</td>
                            <td>Seoul Medical Center</td>
                            <td>Surgery</td>
                        </tr>
                        <tr>
                            <th>Childhood and Adolescence</th>
                            <td>Hong, Yong Hee</td>
                            <td>Soonchunhyang University</td>
                            <td>Pediatrics</td>
                        </tr>
                        <tr>
                            <th>Committee of Big Data</th>
                            <td>Kyung Do Han</td>
                            <td>Soongsil University</td>
                            <td>Statistics and Actuarial Science</td>
                        </tr>
                        <tr>
                            <th>Handbook of Obesity TFT</th>
                            <td>Hyuk-Sang Kwon</td>
                            <td>Catholic University of Korea</td>
                            <td>Endocrinology</td>
                        </tr>
                        <tr>
                            <th rowspan="2">Audit</th>
                            <td>Jun Goo Kang</td>
                            <td>Hallym University</td>
                            <td>Endocrinology</td>
                        </tr>
                        <tr>
                            <td>Chung, Sochung</td>
                            <td>Konkuk University</td>
                            <td>Pediatrics</td>
                        </tr>
                        </tr>
                    </tbody>
                </table>
            </div>
			<h3 class="title">Scientific Program Committee</h3>
            <div class="table_wrap">
                <table class="c_table2">
                    <colgroup>
                        <col width="18%">
                        <col width="20%">
                        <col width="62%">
                    </colgroup>
					<thead>
						<tr>
							<th>Title</th>
							<th>Name</th>
							<th>Affiliation</th>
							<th>Specialty</th>
						</tr>
					</thead>
                    <tbody class="cat2">
                        <!-- <img class="coming" src="./img/coming.png" /> -->
                        <tr>
                            <th>Director</th>
                            <td>Soo Lim</td>
                            <td>Seoul National University</td>
							<td>Endocrinology</td>
                        </tr>
                        <tr>
                            <th>Coordinator</th>
                            <td>Jang Won Son</td>
                            <td>The Catholic University of Korea</td>
							<td>Endocrinology</td>
                        </tr>
                        <tr>
                            <th rowspan="2">Assistant Coordinator</th>
                            <td>Jun Hwa Hong</td>
                            <td>Eulji University</td>
                            <td>Endocrinology</td>
                        </tr>
                        <tr>
                            <td>Jin-Wook Kim</td>
                            <td>Hippocrata Clinic</td>
                            <td>Family Medicine</td>
                        </tr>
                        <tr>
                            <th rowspan="21">Members</th>
                            <td>Jun Sung Moon</td>
                            <td>Yeungnam University</td>
							<td>Internal Medicine</td>
                        </tr>
                        <tr>
                            <td>Seung-Hwan Lee</td>
                            <td>The Catholic University of Korea</td>
							<td>Endocrinology</td>
                        </tr>
                        <tr>
                            <td>Changhee Jung</td>
                            <td>University of Ulsan</td>
							<td>Endocrinology</td>
                        </tr>
                        <tr>
                            <td>Ji Won Yoon</td>
                            <td>Seoul National University</td>
							<td>Internal Medicine</td>
                        </tr>
                        <tr>
                            <td>Jae Hyun Bae</td>
                            <td>Korea University</td>
							<td>Endocrinology</td>
                        </tr>
                        <tr>
                            <td>Kyung Ae Lee</td>
                            <td>Jeonbuk National University</td>
							<td>Endocrinology</td>
                        </tr>
                        <tr>
                            <td>Kyung Hee Park</td>
                            <td>Hallym University</td>
							<td>Family Medicine</td>
                        </tr>
                        <tr>
                            <td>Ga Eun Nam</td>
                            <td>Korea University</td>
							<td>Family Medicine</td>
                        </tr>
                        <tr>
                            <td>Bumjo Oh</td>
                            <td>Seoul National University</td>
							<td>Family Medicine</td>
                        </tr>
                        <tr>
                            <td>Yoon Jeong Cho</td>
                            <td>Daegu Catholic University</td>
							<td>Family Medicine</td>
                        </tr>
                        <tr>
                            <td>Hyuk tae Kwon</td>
                            <td>Seoul National University</td>
							<td>Family Medicine</td>
                        </tr>
                        <tr>
                            <td>Hye Yeon Koo</td>
                            <td>Seoul National University</td>
							<td>Family Medicine</td>
                        </tr>
                        <tr>
                            <td>Hyung Jin Choi</td>
                            <td>Seoul National University</td>
							<td>Anatomy and Cell Biology</td>
                        </tr>
                        <tr>
                            <td>Yun Hee Lee</td>
                            <td>Seoul National University</td>
							<td>Pharmacy</td>
                        </tr>
                        <tr>
                            <td>Hyunjung Lim</td>
                            <td>Kyung Hee University</td>
							<td>Medical Nutrition</td>
                        </tr>
                        <tr>
                            <td>Oh Yoen KIM</td>
                            <td>Dong-A University</td>
							<td>Food Science and Nutrition</td>
                        </tr>
                        <tr>
                            <td>SuJin Song</td>
                            <td>Hannam University</td>
							<td>Food And Nutrition</td>
                        </tr>
                        <tr>
                            <td>Il-Young Kim</td>
                            <td>Gachon University</td>
							<td>Molecular Medicine</td>
                        </tr>
                        <tr>
                            <td>Jae Hyun Kim</td>
                            <td>Seoul National University</td>
							<td>Pediatrics</td>
                        </tr>
                        <tr>
                            <td>Min Chul Lee</td>
                            <td>CHA University</td>
							<td>Sports Medicine</td>
                        </tr>
                        <tr>
                            <td>Sewon Lee</td>
                            <td>Incheon National University</td>
							<td>Sport Science</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

<?php include_once('./include/footer.php'); ?>