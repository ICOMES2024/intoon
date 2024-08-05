<?php
	include_once('./include/head.php');
	include_once('./include/header.php');

	if($admin_permission["auth_apply_poster"] == 0){
		echo '<script>alert("권한이 없습니다.");history.back();</script>';
	}

	$id = $_GET["id"] ?? "";
	$name = $_GET["name"] ?? "";
	$title = $_GET["title"] ?? "";
	$s_date = $_GET["s_date"] ?? "";
	$e_date = $_GET["e_date"] ?? "";
	$submission_code = $_GET["submission_code"] ?? "";
	$name_kor = $_GET["name_kor"] ?? "";
	$category -  $_GET["category"] ?? "";

	$where = "";
	
	if($id != "") {
		$where .= " AND ra.email LIKE '%".$id."%' ";
	}

	if($name != "") {
		$where .= " AND CONCAT(ra.first_name,' ',ra.last_name) LIKE '%".$name."%' ";
	}

	if($title != "") {
		$where .= " AND ra.abstract_title LIKE '%".$title."%' ";
	}

	if($s_date != "") {
		$where .= " AND DATE(ra.register_date) >= '".$s_date."' ";
	}

	if($e_date != "") {
		$where .= " AND DATE(ra.register_date) <= '".$e_date."' ";
	}

	if($submission_code != "") {
		$where .= " AND ra.submission_code LIKE '%". trim($submission_code) ."%' ";
	}

	if($name_kor != "") {
		$where .= " AND CONCAT(m.last_name_kor,m.first_name_kor) LIKE '%".$name_kor."%' ";
	}
	
	if($category != "") {
		$where .= " AND ra.abstract_category = ". $category ."";
	}

	$abstract_list_query =  "
								SELECT
                                    ra.submission_code, ra.idx AS abstract_idx, ra.abstract_title, ra.etc1, ra.etc2, ra.etc3,
                                    DATE_FORMAT(ra.register_date, '%y-%m-%d') AS register_date, ra.oral_presentation, ra.abstract_category AS category_num,
                                    m.idx AS member_idx, m.email, m.name, m.nation_ko, m.nation_en, m.affiliation, m.department,
                                    f.original_name AS abstract_file_name, CONCAT(f.path,'/',f.save_name) AS path, CONCAT(m.last_name_kor,m.first_name_kor) AS name_kor,
                                    c.title_en AS category,
                                    (
                                        CASE ra.presentation_type
                                            WHEN 0 THEN 'Oral Presentation'
                                            WHEN 1 THEN 'Poster Exhibition'
                                            WHEN 2 THEN 'Guided Poster Presentation'
                                            WHEN 3 THEN 'Any of Them'
                                            ELSE ''
                                            END
                                        ) AS presentation_type_text,
                                    (SELECT IF(presenting_author='N' AND corresponding_author='N','Co_author',
                                    IF(presenting_author='Y','Presenting Author', IF(corresponding_author='Y' ,'Corresponding Author', NULL)))) AS author_type,
                                    CONCAT(ra.first_name,' ',ra.last_name) AS ra_name, n.nation_en AS ra_country,
                                    ra.affiliation AS 'ra_affiliation', ra.email AS ra_email, ra.phone AS ra_phone,
                                    ra.presenting_author, ra.corresponding_author,
                                    IFNULL(ra.parent_author, ra.idx) AS parent_author
                                FROM request_abstract ra
                                         LEFT JOIN (
                                    SELECT
                                        m.idx, m.email, CONCAT(m.first_name,' ',m.last_name) AS name, m.last_name_kor, m.first_name_kor, 
                                        n.nation_ko AS nation_ko, n.nation_en AS nation_en, affiliation, department, is_deleted
                                    FROM member m
                                             JOIN nation n
                                                  ON m.nation_no = n.idx
                                ) AS m
                                                   ON ra.register = m.idx
                                         LEFT JOIN info_poster_abstract_category c
                                                   ON ra.abstract_category = c.idx
                                         LEFT JOIN file f
                                                   ON ra.abstract_file = f.idx
                                         LEFT JOIN nation n ON ra.nation_no=n.idx
                                WHERE ra.is_deleted = 'N'
                                  AND ra.parent_author IS NULL
                                  AND ra.`type` = 0
                                  AND m.is_deleted = 'N'
                                  {$where}
                                ORDER BY ra.register_date DESC
							";

    $request_abstract_list_query = "
                                SELECT
                                    (SELECT IF(presenting_author='N' AND corresponding_author='N','Co_author',
                                               IF(presenting_author='Y','Presenting Author', IF(corresponding_author='Y' ,'Corresponding Author', NULL)))) AS author_type,
                                    CONCAT(ra.first_name,' ',ra.last_name) AS ra_name, n.nation_en AS ra_country,
                                    ra.affiliation AS 'ra_affiliation', ra.email AS 'ra_email', ra.phone AS 'ra_phone',
                                    ra.presenting_author, ra.corresponding_author,
                                    IFNULL(ra.parent_author, ra.idx) AS parent_author
                                FROM request_abstract ra
                                         LEFT JOIN (
                                    SELECT
                                        m.idx, m.email, CONCAT(m.first_name,' ',m.last_name) AS name, n.nation_en AS nation, m.affiliation, m.department, is_deleted
                                    FROM member m
                                             JOIN nation n
                                                  ON m.nation_no = n.idx
                                ) AS m
                                                   ON ra.register = m.idx
                                         LEFT JOIN info_poster_abstract_category c
                                                   ON ra.abstract_category = c.idx
                                         LEFT JOIN file f
                                                   ON ra.abstract_file = f.idx
                                         LEFT JOIN nation n ON ra.nation_no=n.idx
                                WHERE ra.is_deleted = 'N'
                                  AND ra.`type` = 0
                                  AND m.is_deleted = 'N'
                                  AND ra.parent_author IS NOT NULL
                                ORDER BY ra.register_date DESC
                            ";

    $request_abstract_count_query = "
                                SELECT COUNT(IFNULL(parent_author, idx)) AS count
                                FROM request_abstract
                                WHERE is_deleted = 'N'
                                GROUP BY IFNULL(parent_author, idx)
                                ORDER BY count DESC
                                LIMIT 1                                 
                            ";
	//[240326] sujeong / 별 세기
	//1. presenting_author = 'Y'
	$pre_star_query = "
				SELECT
					MAX(star_count) AS max_star_count
				FROM
					(
						SELECT
							CHAR_LENGTH(affiliation) - CHAR_LENGTH(REPLACE(affiliation, '★', '')) AS star_count
						FROM
							request_abstract
						WHERE presenting_author = 'Y'
				) AS counts;
	";

	//2. corresponding_author = 'Y'					
	$cor_star_query = "
			SELECT
				MAX(star_count) AS max_star_count
			FROM
				(
					SELECT
						CHAR_LENGTH(affiliation) - CHAR_LENGTH(REPLACE(affiliation, '★', '')) AS star_count
					FROM
						request_abstract
					WHERE corresponding_author = 'Y'
			) AS counts;
	";

	//3. presenting_author = 'N' AND corresponding_author = 'N' AND parent_author null이 아닐 때
	$cor_star_query = "
			SELECT
					parent_author,
					MAX(CASE WHEN rn = 1 THEN affiliation END) AS affiliation1,
					MAX(CASE WHEN rn = 2 THEN affiliation END) AS affiliation2,
					MAX(CASE WHEN rn = 3 THEN affiliation END) AS affiliation3,
					MAX(CASE WHEN rn = 4 THEN affiliation END) AS affiliation4,
					MAX(CASE WHEN rn = 5 THEN affiliation END) AS affiliation5,
					MAX(CASE WHEN rn = 6 THEN affiliation END) AS affiliation6,
					MAX(CASE WHEN rn = 7 THEN affiliation END) AS affiliation7,
					MAX(CASE WHEN rn = 8 THEN affiliation END) AS affiliation8,
					MAX(CASE WHEN rn = 9 THEN affiliation END) AS affiliation9,
					MAX(CASE WHEN rn = 10 THEN affiliation END) AS affiliation10
				FROM (
					SELECT
						parent_author,
						affiliation,
						@row_number := IF(@parent_author = parent_author, @row_number + 1, 1) AS rn,
						@parent_author := parent_author
					FROM
						(SELECT * FROM request_abstract ORDER BY parent_author, affiliation) AS sorted
					CROSS JOIN
						(SELECT @row_number := 0, @parent_author := '') AS vars
					WHERE
						presenting_author = 'N' AND corresponding_author = 'N' AND parent_author IS NOT NULL
				) AS subquery
				WHERE
					rn <= 10
				GROUP BY
			parent_author;
	";

	//4. 제출저자 parent_author IS NULL
	$author_star_query = "
			SELECT
				MAX(star_count) AS max_star_count
			FROM
				(
					SELECT
						CHAR_LENGTH(affiliation) - CHAR_LENGTH(REPLACE(affiliation, '★', '')) AS star_count
					FROM
						request_abstract
					WHERE parent_author IS NULL
			) AS counts;
	";

	//5. max-star
	$max_star_query = "
			SELECT
				MAX(star_count) AS max_star_count
			FROM
				(
					SELECT
						CHAR_LENGTH(affiliation) - CHAR_LENGTH(REPLACE(affiliation, '★', '')) AS star_count
					FROM
						request_abstract
					
			) AS counts;
	";

	$abstract_list = get_data($abstract_list_query);
    $request_abstract_list = get_data($request_abstract_list_query);
    $request_abstract_count = sql_fetch($request_abstract_count_query)['count'];
	$co_star_list = get_data($cor_star_query);
	
	//[240326] sujeong / 별 세기
	//1. presenting_author = 'Y'
	$count_pre_star = sql_fetch($pre_star_query)['max_star_count'];

	//2. corresponding_author = 'Y'
	$count_cor_star = sql_fetch($cor_star_query)['max_star_count'];
	
	//3. presenting_author = 'N' AND corresponding_author = 'N' AND parent_author null이 아닐 때
	$count_co_star_list = array_fill(0, $request_abstract_count, 0);
	// 각 요소별로 최고 ★의 수 계산
	for ($i = 0; $i < $request_abstract_count; $i++) {
		// 각 요소의 affiliation1부터 affiliation10까지 순회하면서 ★의 개수 세기
		for ($j = 1; $j < $request_abstract_count; $j++) {
			$affiliation_key = "affiliation" . $j;
			$affiliation = $co_star_list[$i][$affiliation_key];
			
			// affiliation이 존재할 때만 ★의 개수 세기
			if (!empty($affiliation)) {
				// ★의 개수 세기
				$star_count = substr_count($affiliation, '★');
				
				// 최고 ★의 수 업데이트
				$count_co_star_list[$j - 1] = max($count_co_star_list[$j - 1], $star_count);
			}
		}
	}

	//4. 제출저자 parent_author IS NULL
	$count_author_star = sql_fetch($author_star_query)['max_star_count'];

	//5. max star
	$count_max_star = sql_fetch($max_star_query)['max_star_count'];

	
	//[240325] sujeong / 초록 제출자 등록여부 체크 함수
	function get_register($reg_num){
		$request_registration_query = "
								SELECT request_registration.register
								FROM request_registration
								WHERE request_registration.register = {$reg_num}
		";
		$request_registration = get_data($request_registration_query);
		return count($request_registration);	
	};

	

	// 엑셀 다운로드
	$html = '<table id="datatable" class="list_table">';
	$html .= '<thead>';
	$html .= '<tr class="tr_center">';
	$html .= '<th>NO</th>';
	$html .= '<th>Date of Submission</th>';
	$html .= '<th>Submission No.</th>';
	$html .= '<th>초록채택번호</th>';
	$html .= '<th>사전 등록 여부</th>';
	$html .= '<th>심사 여부</th>';
    $html .= '<th>메모</th>';
	$html .= '<th>ID(Email)</th>';
	$html .= '<th>Country</th>';
	$html .= '<th>Name</th>';
    $html .= '<th>Affiliation (Institution)</th>';
    $html .= '<th>Affiliation (Department)</th>';
	$html .= '<th>Preferred Presentation Type</th>';
	$html .= '<th>Topic Category</th>';
	$html .= '<th>Title</th>';
	$html .= '<th>File</th>';
	$html .= '<th>Memo</th>';
	$html .= '<th>Presenting Author Name</th>';
	$html .= '<th colspan='. $count_pre_star  .'>Presenting Author Affiliation</th>';
	$html .= '<th>Presenting Author E-mail</th>';
	$html .= '<th>Corresponding Author Name</th>';
	$html .= '<th>Corresponding Author E-mail</th>';
    for($i=1;$i<=$request_abstract_count;$i++){
        $html .= '<th>Author No</th>';
        $html .= '<th>Author Type</th>';
        $html .= '<th>Name</th>';
        $html .= '<th>Country</th>';
        $html .= '<th colspan='. $count_max_star  .'>Affiliation (Department of Institution)</th>';
        $html .= '<th>E-mail</th>';
        $html .= '<th>Phone Number</th>';
    }
	$html .= '</tr>';
	$html .= '</thead>';
	$html .= '<tbody>';

    $presenting_author_name="";
    $presenting_author_email="";
    $corresponding_author_name="";
    $corresponding_author_email="";

    $resultData = [];

    foreach ($abstract_list as $num => $al) {
        $no = (int)$num+1;

        $al_ra_name = $al["ra_name"];
        $al_ra_email = $al["ra_email"];
        $al_ra_affiliation = $al["ra_affiliation"];

        $resultData[$no] = [
            'presenting_author_name' => null,
            'presenting_author_email' => null,
            'presenting_author_affiliation' => null,
            'corresponding_author_name' => null,
            'corresponding_author_email' => null,
        ];

        if($al["presenting_author"]==='Y') {
            $resultData[$no]['presenting_author_name'] = $al_ra_name;
            $resultData[$no]['presenting_author_email'] = $al_ra_email;
            $resultData[$no]['presenting_author_affiliation'] = $al_ra_affiliation;
        }

        if($al["corresponding_author"]==='Y'){
            $resultData[$no]['corresponding_author_name'] = $al_ra_name;
            $resultData[$no]['corresponding_author_email'] = $al_ra_email;
        }

        foreach ($request_abstract_list as $ral){

            $ral_ra_name = $ral["ra_name"];
            $ral_ra_email = $ral["ra_email"];
            $ral_ra_affiliation = $ral["ra_affiliation"];

            if($al["parent_author"]===$ral["parent_author"]){
                if($ral["presenting_author"]==='Y'){
                    $resultData[$no]['presenting_author_name'] = $ral_ra_name;
                    $resultData[$no]['presenting_author_email'] = $ral_ra_email;
                    $resultData[$no]['presenting_author_affiliation'] = $ral_ra_affiliation;
                }

                if($ral["corresponding_author"]==='Y'){
                    $resultData[$no]['corresponding_author_name'] = $ral_ra_name;
                    $resultData[$no]['corresponding_author_email'] = $ral_ra_email;
                }
            }
        }
    }

 	foreach($abstract_list as $num => $al){
        $no = (int)$num+1;
		$html .= '<tr class="tr_center">';
		$html .= '<td>'.$no.'</td>';
		$html .= '<td>'.$al["register_date"].'</td>';
		$html .= '<td>'.$al["submission_code"].'</td>';
		$html .= '<td>'.$al["etc3"].'</td>';

		//[240220] sujeong / 초록 제출자 등록 여부 파악하기
		$reg_count = get_register($al["member_idx"]);
		if($reg_count == 0){
			$registration_yn = 'N';
		}else if ($reg_count > 0){
			$registration_yn = 'Y';
		}

		$html .= '<td>'.$registration_yn.'</td>';
		$html .= '<td>'.$al["etc1"].'</td>';
        $html .= '<td>'.$al["etc2"].'</td>';
		$html .= '<td>'.$al["email"].'</td>';
		$html .= '<td>'.$al["nation_en"].'</td>';
		$html .= '<td>'.$al["name"].'</td>';
		$html .= '<td>'.$al["affiliation"].'</td>';
		$html .= '<td>'.$al["department"].'</td>';
		$html .= '<td>'.$al["presentation_type_text"].'</td>';
		$html .= '<td>'.$al["category"].'</td>';
		$html .= '<td>'.$al["abstract_title"].'</td>';
		$html .= '<td>'.$al["abstract_file_name"].'</td>';
		$html .= '<td>'.$al["etc2"].'</td>';

		$html .= '<td>'.$resultData[$no]['presenting_author_name'].'</td>';

		//[240326] sujeong / 세로로 쪼개기
		$count_pre = substr_count($resultData[$no]["presenting_author_affiliation"], '★'); //현재 별 개수
		$pre_list = explode('★', $resultData[$no]["presenting_author_affiliation"]); // 별로 자른 배열

		if($count_pre < $count_pre_star){
			for($i = 0; $i < $count_pre; $i++){
				$html .= '<td>'.$pre_list[$i].'</td>';
			}
			for($j = 0; $j < $count_pre_star - $count_pre; $j++ ){
				$html .= '<td></td>';
			}
		}else{
			for($i = 0; $i < $count_pre; $i++){
				$html .= '<td>'.$pre_list[$i].'</td>';
			}
		}

		//$html .= '<td>'.str_replace('★','</td><td>',$resultData[$no]["presenting_author_affiliation"]).'</td>';

		$html .= '<td>'.$resultData[$no]['presenting_author_email'].'</td>';
		$html .= '<td>'.$resultData[$no]['corresponding_author_name'].'</td>';
		$html .= '<td>'.$resultData[$no]['corresponding_author_email'].'</td>';

        $html .= '<td>'.'1'.'</td>';
        $html .= '<td>'.$al["author_type"].'</td>';
        $html .= '<td>'.$al["ra_name"].'</td>';
        $html .= '<td>'.$al["ra_country"].'</td>';

		//[240326] sujeong / 세로로 쪼개기
		$count_star = substr_count($al["ra_affiliation"], '★'); //현재 별 개수
		$star_list = explode('★', $al["ra_affiliation"]); // 별로 자른 배열

		if($count_star < $count_max_star){
			for($i = 0; $i < $count_star; $i++){
				$html .= '<td>'.$star_list[$i].'</td>';
			}
			for($j = 0; $j < $count_max_star - $count_star; $j++ ){
				$html .= '<td></td>';
			}
		}else{
			for($i = 0; $i < $count_max_star; $i++){
				$html .= '<td>'.$star_list[$i].'</td>';
			}
		}

        //$html .= '<td>'.str_replace('★','<br>',$al["ra_affiliation"]).'</td>';
        $html .= '<td>'.$al["ra_email"].'</td>';
        $html .= '<td>'.$al["ra_phone"].'</td>';

        $ra_author_No=2;

        foreach ($request_abstract_list as $ral){
            if($al["parent_author"]===$ral["parent_author"]){
                $html .= '<td>'.$ra_author_No.'</td>';
                $html .= '<td>'.$ral["author_type"].'</td>';
                $html .= '<td>'.$ral["ra_name"].'</td>';
                $html .= '<td>'.$ral["ra_country"].'</td>';

				//[240326] sujeong / 세로로 쪼개기
				$count_star_2 = substr_count($ral["ra_affiliation"], '★'); //현재 별 개수
				$star_list_2 = explode('★', $ral["ra_affiliation"]); // 별로 자른 배열

				if($count_star_2 < $count_max_star){
					for($i = 0; $i < $count_star_2; $i++){
						$html .= '<td>'.$star_list_2[$i].'</td>';
					}
					for($j = 0; $j < $count_max_star - $count_star_2; $j++ ){
						$html .= '<td></td>';
					}
				}else{
					for($i = 0; $i < $count_max_star; $i++){
						$html .= '<td>'.$star_list_2[$i].'</td>';
					}
				}

                //$html .= '<td>'.str_replace('★','<br>',$ral["ra_affiliation"]).'</td>';
                $html .= '<td>'.$ral["ra_email"].'</td>';
                $html .= '<td>'.$ral["ra_phone"].'</td>';
                ++$ra_author_No;
            }
        }
        $html .= '</tr>';
	}
	$html .= '</tbody>';
	$html .= '</table>';

	$html = str_replace("'", "\'", $html);
	$html = str_replace("\n", "", $html);
	$count= count($abstract_list);
?>
	<section class="list">
		<div class="container">
			<div class="title clearfix">
				<h1 class="font_title">Poster Abstract Submission</h1>
                <button class="btn excel_download_btn" onclick="javascript:fnExcelReport('Poster Abstract Submission', html);">엑셀 다운로드</button>
                <button class="btn excel_download_btn" onclick="javascript:window.location.href='/main/common/lib/zipArchive.php'">전체 파일 다운로드</button>
			</div>
			<div class="contwrap centerT has_fixed_title">
				<form name="search_form">
					<table>
						<colgroup>
							<col width="10%">
							<col width="40%">
							<col width="10%">
							<col width="40%">
						</colgroup>
						<tbody>
							<tr>
								<th>ID(Email)</th>
								<td>
									<input type="text" name="id" value="<?= $id; ?>">
								</td>
								<th>Name</th>
								<td class="select_wrap clearfix2">
									<input type="text" name="name" data-type="string" value="<?= $name; ?>">
								</td>
							</tr>
							<tr>
								<th>Title</th>
								<td>
									<input type="text" name="title" data-type="string" value="<?= $title; ?>">
								</td>
								<th>등록일</th>
								<td class="input_wrap"><input type="text" name="s_date" value="<?= $s_date; ?>" class="datepicker-here" data-language="en" data-date-format="yyyy-mm-dd" data-type="date"> <span>~</span> <input type="text" value="<?= $e_date; ?>" name="e_date" class="datepicker-here" data-language="en" data-date-format="yyyy-mm-dd" data-type="date"></td>
							</tr>
							<tr>
								<th>제출코드</th>
								<td class="input_wrap">
									<input type="text" name="submission_code" value="<?= $submission_code; ?>"/>
								</td>
								<th>한국어 이름</th>
								<td><input type="text" name="name_kor" value="<?= $name_kor; ?>"/></td>
							</tr>
							<tr>
								<th>초록 카테고리</th>
								<td colspan="3">
									<select name="category">
										<option value="">카테고리를 선택해주세요.</option>
										<option value="1">1. Behavior and Public Health for Obesity</option>
										<option value="2">2. Nutrition, Education and Exercise for Obesity</option>
										<option value="3">3. Epidemiology of Obesity and Metabolic Syndrome</option>
										<option value="4">4. Digital Therapeutics and Big Data Study</option>
										<option value="5">5. Diabetes and Obesity</option>
										<option value="6">6. Dyslipidemia, Hypertension and Obesity</option>
										<option value="7">7. Other Comorbidities of Obesity and Metabolic Syndrome</option>
										<option value="8">8. Pathophysiology of Obesity and Metabolic Syndrome</option>
										<option value="9">9. Therapeutics of Obesity and Metabolic Syndrome</option>
										<option value="10">10. Metabolic and Bariatric Surgery</option>
										<option value="11">11. Obesity and Metabolic Syndrome in Children and Adolescents</option>
									</select>
								</td>
							</tr>
						</tbody>
					</table>
					<button type="button" class="btn search_btn">검색</button>
				</form>
			</div>
			<div class="contwrap">
				<p class="total_num">총 <?=number_format($count)?>개</p>
				<table id="datatable" class="list_table">
						<colgroup>
							<col width="10%">
							<col width="5%">
							<col width="5%">
							<col>
						</colgroup>
					<thead>
						<tr class="tr_center">
							<th>논문번호</th>
							<th>채택번호</th>
							<th>사전등록</th>
							<th>심사</th>
							<th>메모</th>
							<th>ID(Email)</th>
							<th>Country</th>
							<th>Name</th>
							<th class="long_txt_container">Title</th>
							<th class="long_txt_container">파일명</th>
							<th>카테고리</th>
							<th>Preferred Presentation Type</th>
							<!-- <th>oral</th>
							<th>좋아요수 / 댓글수</th> -->
							<th>등록일</th>
							<th>삭제</th>
						</tr>
					</thead>
					<tbody>
					<?php
						if(!$abstract_list) {
							echo "<tr><td class='no_data' colspan='9'>No Data</td></tr>"; //좋아요 및 댓글기능 미개발로 colspan 8 -> 7로 변경
						} else {
							foreach($abstract_list as $list) {
								$ext = strtolower(end(explode(".",$list["abstract_file_name"])));
					?>
						<tr class="tr_center">
							<td><?=$list["submission_code"]?></td>

							<!-- [240325] sujeong / 초록 제출자 등록 여부 파악하기 -->
							<?php 
							$reg_count = get_register($list["member_idx"]);

							if($reg_count == 0){
								$registration_yn = 'N';
							}else if ($reg_count > 0){
								$registration_yn = 'Y';
							} 
							?>
							<td><?php echo $list["etc3"]?></td>
							<td><?php echo $registration_yn; ?></td>
							<td><?php echo $list["etc1"]?></td>
							<td><?php if($list["etc2"]){
								echo "Y";
								}else{
								echo "N";
								}?></td>
							<td><a href="./member_detail.php?idx=<?=$list["member_idx"]?>"><?=$list["email"]?></a></td>
							<td><?=$list["nation_ko"]?></td>
							<td><?=$list["name"]?></td>
							<td class="long_txt_container"><a class="long_txt_box" href="./abstract_application_detail.php?idx=<?=$list["abstract_idx"]?>"><?=$list["abstract_title"]?></a></td>
						<?php if($ext === "pdf") { ?>
							<td class="long_txt_container"><a class="long_txt_box" href="./pdf_viewer.php?path=<?=$list["path"]?>" target="_blank"><?=$list["abstract_file_name"]?></a></td>
						<?php } else { ?>
							<!-- [240610] sujeong / 기존 - 다운로드시 초록 제출코드 제목 -->
							<!-- <td class="long_txt_container"><a class="long_txt_box" href="<?=$list["path"]?>" download="<?=$list["submission_code"]?>"><?=$list["abstract_file_name"]?></a></td> -->

							<td class="long_txt_container"><a class="long_txt_box" href="<?=$list["path"]?>" download="<?=$list["submission_code"]?>"><?=$list["abstract_file_name"]?></a></td>
						<?php } ?>
							<td><?=$list["category"]?></td>
							<td><?=$list["presentation_type_text"]?></td>
							<!-- <td><?=$list["oral_presentation"] == 0 ? "No" : "Yes"?></td>
							<td>13 / 32</td> -->
							<td><?=$list["register_date"]?></td>
							<td>
								<a href="javascript:;" onclick="delete_submission(<?php echo $list['abstract_idx']; ?>)">삭제</a>
							</td>
						</tr>
					<?php
							}
						}
					?>
					</tbody>
				</table>
				
			</div>
		</div>
	</section>
<script>
	var html = '<?=$html?>';

	function delete_submission(idx) {
		if(confirm("초록을 삭제하시겠습니까?")) {
			$.ajax({
				url : "/main/ajax/client/ajax_submission.php",
				type : "POST",
				data : {
					flag : "submission_delete",
					idx : idx
				},
				dataType : "JSON",
				success : function(res){
					if(res.code == 200) {
						alert("초록 삭제가 완료되었습니다.");
						location.reload();
					} else if(res.code == 400) {
						alert("초록 삭제에 실패하였습니다.");
						return false;
					} else {
						alert("일시적으로 요청이 거절되었습니다.");
						return false;
					}
				}
			});
		}
	}
</script>
<script src="./js/common.js?v=0.3"></script>
<?php include_once('./include/footer.php');?>