<?php
	include_once('./include/head.php');
	include_once('./include/header.php');

	if($admin_permission["auth_apply_registration"] == 0){
		echo '<script>alert("권한이 없습니다.");history.back();</script>';
	}

	$id = isset($_GET["id"]) ? $_GET["id"] : "";
	$name = isset($_GET["name"]) ? $_GET["name"] : "";
	$attendance_type = isset($_GET["attendance_type"]) ? $_GET["attendance_type"] : "";
	$s_date = isset($_GET["s_date"]) ? $_GET["s_date"] : "";
	$e_date = isset($_GET["e_date"]) ? $_GET["e_date"] : "";

	$where = "";
	
	if($id != "") {
		$where .= " AND rr.email LIKE '%".$id."%' ";
	}

	if($name != "") {
		$where .= " AND CONCAT(rr.first_name,' ',rr.last_name) LIKE '%".$name."%' ";
	}

	if($attendance_type != "") {
		$where .= " AND rr.attendance_type = ".$attendance_type." ";
	}

	if($s_date != "") {
		$where .= " AND DATE(rr.register_date) >= '".$s_date."' ";
	}

	if($e_date != "") {
		$where .= " AND DATE(rr.register_date) <= '".$e_date."' ";
	}
	

	$registration_list_query =  "
									SELECT
										rr.idx AS registration_idx, rr.email, rr.phone, CONCAT(rr.first_name,' ',rr.last_name) AS `name`, DATE_FORMAT(rr.register_date, '%y-%m-%d') AS register_date, rr.etc2,
										rr.member_type, rr.member_other_type,
										CONCAT(m.first_name_kor,' ',m.last_name_kor) AS kor_name,
										(
											CASE rr.registration_type
												#WHEN '2' THEN 'Online + Offline'
												WHEN '1' THEN 'Online'
												WHEN '0' THEN 'On-site'
												ELSE '-'
											END
										) AS registration_type_text,
										(
											CASE rr.attendance_type
												WHEN '0' THEN 'Committee'
												WHEN '1' THEN 'Speaker'
												WHEN '2' THEN 'Chairperson'
												WHEN '3' THEN 'Panel'
												WHEN '4' THEN 'Participants'
												ELSE '-'
											END
										) AS attendance_type_text,
										(
											CASE rr.is_score
												WHEN '1' THEN 'Applied'
												WHEN '0' THEN 'Not applied'
												ELSE '-'
											END
										) AS is_score_text,
										(
											CASE
												WHEN rr.status = '0'
												THEN '등록취소'
												WHEN rr.status = '1'
												THEN '결제대기'
												WHEN rr.status = '2'
												THEN '결제완료'
												WHEN rr.status = '3'
												THEN '환불대기'
												WHEN rr.status = '4'
												THEN '환불완료'
												ELSE '-'
											END
										) AS payment_status,
										(
											CASE
												WHEN rr.payment_methods = '0' THEN 'Credit card'
												WHEN rr.payment_methods = '1' THEN 'Bank transfer'
											END
										) AS payment_methods,
										rr.etc1, rr.licence_number, rr.specialty_number, rr.nutritionist_number,
										rr.welcome_reception_yn, rr.day2_breakfast_yn, rr.day2_luncheon_yn, rr.day3_breakfast_yn, rr.day3_luncheon_yn,
										IFNULL(rr.promotion_code, '-') AS promotion_code, IFNULL(rr.recommended_by, '-') AS recommended_by, 
										n.nation_ko, n.nation_en,
										m.idx AS member_idx,
										m.affiliation, m.department,
										m.affiliation_kor, m.department_kor,
										m.nation_no,
										m.date_of_birth,
										rr.banquet_yn,
										total_price_kr,
										total_price_us,
										member_status,
										IFNULL(rr.register_path, '-') AS register_path, 
										IFNULL(rr.conference_info, '-') AS conference_info,
										m.ksola_member_status
									FROM request_registration  rr
									INNER JOIN (
										SELECT
											idx,
											first_name_kor, last_name_kor,
											affiliation, department, affiliation_kor, department_kor,
											nation_no,
											(
												CASE
													WHEN ksola_member_status = 0 THEN '비회원'
													WHEN ksola_member_status = 1 THEN '정회원'
													WHEN ksola_member_status = 2 THEN '평생회원'
													WHEN ksola_member_status = 3 THEN '인터넷회원'
												END
											) AS ksola_member_status,
											date_of_birth,
											is_deleted
										FROM member
										WHERE is_deleted = 'N'
									) AS m
									ON rr.register = m.idx
									LEFT JOIN nation n
									ON rr.nation_no = n.idx
									LEFT JOIN(
										SELECT
											idx,
											total_price_kr,
											total_price_us
										FROM payment
									) AS p
									ON p.idx = rr.payment_no
									WHERE rr.is_deleted = 'N'
									{$where}
									ORDER BY rr.idx DESC
								";
	// status 상태(0:등록취소, 1:결제대기, 2:결제완료, 3:환불대기, 4:환불완료)	
	$registration_list = get_data($registration_list_query);

	$html = '<table id="datatable" class="list_table">';
	$html .= '<thead>';
	$html .= '<tr class="tr_center">';
	$html .= '<th style="background-color:#C5E0B4; border-style: solid; border-width:thin;" colspan="3">Registration</th>';
	$html .= '<th style="background-color:#C5E0B4; border-style: solid; border-width:thin;" colspan="15">Participants Inforatmion</th>';
	$html .= '<th style="background-color:#C5E0B4; border-style: solid; border-width:thin;" colspan="4">평점신청(Korean Only)</th>';
	$html .= '<th style="background-color:#C5E0B4; border-style: solid; border-width:thin;" colspan="7">Payment Information</th>';
	$html .= '<th style="background-color:#C5E0B4; border-style: solid; border-width:thin;" colspan="5">Others</th>';
	$html .= '<th style="background-color:#C5E0B4; border-style: solid; border-width:thin;"></th>';
	$html .= '</tr>';
	$html .= '<tr class="tr_center">';
	$html .= '<th style="background-color:#C5E0B4; border-style: solid; border-width:thin;">No</th>';
	$html .= '<th style="background-color:#C5E0B4; border-style: solid; border-width:thin;">Registration No.</th>';
	$html .= '<th style="background-color:#C5E0B4; border-style: solid; border-width:thin;">Date of Registration</th>';
	$html .= '<th style="background-color:#C5E0B4; border-style: solid; border-width:thin;">ID(E-mail)</th>';
	$html .= '<th style="background-color:#C5E0B4; border-style: solid; border-width:thin;">국내/국외</th>';
	$html .= '<th style="background-color:#C5E0B4; border-style: solid; border-width:thin;">Country</th>';
	$html .= '<th style="background-color:#C5E0B4; border-style: solid; border-width:thin;">KSSO 회원 여부</th>';
	$html .= '<th style="background-color:#C5E0B4; border-style: solid; border-width:thin;">Name</th>';
	$html .= '<th style="background-color:#C5E0B4; border-style: solid; border-width:thin;">성함</th>';
	$html .= '<th style="background-color:#C5E0B4; border-style: solid; border-width:thin;">Affiliation(Institution)</th>';
	$html .= '<th style="background-color:#C5E0B4; border-style: solid; border-width:thin;">소속</th>';
	$html .= '<th style="background-color:#C5E0B4; border-style: solid; border-width:thin;">Affiliation(Department)</th>';
	$html .= '<th style="background-color:#C5E0B4; border-style: solid; border-width:thin;">부서</th>';
	$html .= '<th style="background-color:#C5E0B4; border-style: solid; border-width:thin;">Phone Number</th>';
	$html .= '<th style="background-color:#C5E0B4; border-style: solid; border-width:thin;">Type of Participation</th>';
	$html .= '<th style="background-color:#C5E0B4; border-style: solid; border-width:thin;">Category</th>';
	$html .= '<th style="background-color:#C5E0B4; border-style: solid; border-width:thin;">Category (Others)</th>';
	$html .= '<th style="background-color:#C5E0B4; border-style: solid; border-width:thin;">Date of Birth</th>';
	$html .= '<th style="background-color:#C5E0B4; border-style: solid; border-width:thin;">의사면허번호</th>';
	$html .= '<th style="background-color:#C5E0B4; border-style: solid; border-width:thin;">전문의번호</th>';
	$html .= '<th style="background-color:#C5E0B4; border-style: solid; border-width:thin;">영양사자격번호</th>';
	$html .= '<th style="background-color:#C5E0B4; border-style: solid; border-width:thin;">운동사 신청(Y/N)</th>';
	$html .= '<th style="background-color:#C5E0B4; border-style: solid; border-width:thin;">결제상태</th>';
	$html .= '<th style="background-color:#C5E0B4; border-style: solid; border-width:thin;">등록비</th>';
	$html .= '<th style="background-color:#C5E0B4; border-style: solid; border-width:thin;">결제일</th>';
	$html .= '<th style="background-color:#C5E0B4; border-style: solid; border-width:thin;">결제 방식</th>';
	$html .= '<th style="background-color:#C5E0B4; border-style: solid; border-width:thin;">결제금액</th>';
	$html .= '<th style="background-color:#C5E0B4; border-style: solid; border-width:thin;">Promotion Code</th>';
	$html .= '<th style="background-color:#C5E0B4; border-style: solid; border-width:thin;">추천인</th>';
	$html .= '<th style="background-color:#C5E0B4; border-style: solid; border-width:thin;">Welcome Reception</th>';
	$html .= '<th style="background-color:#C5E0B4; border-style: solid; border-width:thin;">Day 2 Breakfast</th>';
	$html .= '<th style="background-color:#C5E0B4; border-style: solid; border-width:thin;">Day 3 Luncheon</th>';
	$html .= '<th style="background-color:#C5E0B4; border-style: solid; border-width:thin;">Day 3 Breakfast</th>';
	$html .= '<th style="background-color:#C5E0B4; border-style: solid; border-width:thin;">Day 3 Luncheon</th>';
	$html .= '<th style="background-color:#C5E0B4; border-style: solid; border-width:thin;">Where did you get the information about the conference?</th>';
	$html .= '</tr>';
	$html .= '</thead>';
	$html .= '<tbody>';
	
	foreach($registration_list as $rk => $rl){
		$member_status = ($rl["member_status"] == 0) ? "N" : "Y";
		$register_no = !empty($rl["registration_idx"]) ? "ICOMES2023-".$rl["registration_idx"] : "-";
		$nation_type = ($rl["nation_no"] == 25) ? "국내" : "국외";

		if(empty($rl["banquet_yn"])) {
			$banquet_yn = 'N';
		} else {
			$banquet_yn = $rl["banquet_yn"];
		}

		$etc2 = array('N', 'N', 'N');
		$etc2s = explode(',', $rl["etc2"]);

		if(in_array("1", $etc2s)) {
			$etc2[0] = 'Y';
		}
		if(in_array("3", $etc2s)) {
			$etc2[1] = 'Y';
		}
		if(in_array("4", $etc2s)) {
			$etc2[2] = 'Y';
		}

		if(empty($rl["etc2"]) && $rl['is_score_text'] == 'Applied') {
			$etc2[0] = 'Y';
			$etc2[1] = 'Y';
			$etc2[2] = 'Y';
		}

		$price = "";

		if($rl["payment_status"] == "등록취소" || $rl["payment_status"] == "결제대기") {
			if($rl["nation_ko"] == "대한민국") {
				if(!empty($rl["total_price_kr"])) {
					$price = "0원";
				}
			} else {
				if(!empty($rl["total_price_us"])) {
					$price = "USD 0";
				}
			}
		} else {
			if($rl["nation_ko"] == "대한민국") {
				if(!empty($rl["total_price_kr"])) {
					$price = $rl["total_price_kr"]."원";
				} else {
					$price = "0원";
				}
			} else {
				if(!empty($rl["total_price_us"])) {
					$price = "USD ".$rl["total_price_us"];
				} else {
					$price = "USD 0";
				}
			}
		}

		$register_path = "";
		/*
		if($rl["register_path"] == "ICOMES 2022 promotional mail") {
			$register_path = "ICOMES 2022 프로모션 메일";
		} else if ($rl["register_path"] == "ICOMES 2022 website") {
			$register_path = "ICOMES 2022 웹사이트";
		} else if ($rl["register_path"] == "Bulletin board on the website of the relevant society") {
			$register_path = "해당 학회 홈페이지 게시판";
		} else if ($rl["register_path"] == "Korean Society of Obesity website bulletin board") {
			$register_path = "대한비만학회 홈페이지 게시판";
		} else if ($rl["register_path"] == "Recommendation from an acquaintance") {
			$register_path = "지인의 추천";
		} else if ($rl["register_path"] == "Professor recommendation") {
			$register_path = "교수의 추천";
		} else if ($rl["register_path"] == "Medical newspaper") {
			$register_path = "의료 신문";
		} else if ($rl["register_path"] == "Pharmaceutical company") {
			$register_path = "제약 회사";
		} else if ($rl["register_path"] == "Other (subjective)") {
			$register_path = "기타 주관적 ".$rl["etc1"];
		} else {
			$register_path = "-";
		}
		*/
		$conference_info = ($rl['conference_info'] != '-') ? str_replace('*', ',', $rl['conference_info']) : '-';		
		
		$licence_number = $rl['licence_number'] ?? 'Not applicable';
		$specialty_number = $rl['specialty_number'] ?? 'Not applicable';
		$nutritionist_number = $rl['nutritionist_number'] ?? 'Not applicable';

		$is_exercise = ($rl['member_type'] == "Exercise Specialist") ? 'Y' : 'N';

		$html .= '<tr class="tr_center">';
		$html .= '<td style="text-align:center; border-style: solid; border-width:thin;">'.($rk + 1).'</td>';
		$html .= '<td style="border-style: solid; border-width:thin;">'.$register_no.'</td>';
		$html .= '<td style="text-align:center; border-style: solid; border-width:thin;">'.$rl["register_date"].'</td>';
		$html .= '<td style="border-style: solid; border-width:thin;">'.$rl["email"].'</td>';
		$html .= '<td style="border-style: solid; border-width:thin;">'.$nation_type.'</td>';
		$html .= '<td style="border-style: solid; border-width:thin;">'.$rl["nation_en"].'</td>';
		$html .= '<td style="border-style: solid; border-width:thin;">'.$rl["ksola_member_status"].'</td>';
		$html .= '<td style="border-style: solid; border-width:thin;">'.$rl["name"].'</td>';
		$html .= '<td style="border-style: solid; border-width:thin;">'.$rl["kor_name"].'</td>';
		$html .= '<td style="border-style: solid; border-width:thin;">'.$rl["affiliation"].'</td>';
		$html .= '<td style="border-style: solid; border-width:thin;">'.$rl["affiliation_kor"].'</td>';
		$html .= '<td style="border-style: solid; border-width:thin;">'.$rl["department"].'</td>';
		$html .= '<td style="border-style: solid; border-width:thin;">'.$rl["department_kor"].'</td>';
		$html .= '<td style="border-style: solid; border-width:thin;">'.$rl["phone"].'</td>';
		$html .= '<td style="border-style: solid; border-width:thin;">'.$rl["attendance_type_text"].'</td>';
		$html .= '<td style="border-style: solid; border-width:thin;">'.$rl["member_type"].'</td>';
		$html .= '<td style="border-style: solid; border-width:thin;">'.$rl["member_other_type"].'</td>';
		$html .= '<td style="border-style: solid; border-width:thin;">'.$rl["date_of_birth"].'</td>';
		$html .= '<td style="text-align:center; border-style: solid; border-width:thin; mso-number-format:\@">'.strval($licence_number).'</td>';
		$html .= '<td style="text-align:center; border-style: solid; border-width:thin; mso-number-format:\@">'.strval($specialty_number).'</td>';
		$html .= '<td style="text-align:center; border-style: solid; border-width:thin; mso-number-format:\@">'.strval($nutritionist_number).'</td>';
		$html .= '<td style="text-align:center; border-style: solid; border-width:thin;">'.$is_exercise.'</td>';
		$html .= '<td style="border-style: solid; border-width:thin;">'.$rl["payment_status"].'</td>';
		$html .= '<td style="border-style: solid; border-width:thin;">'.$price.'</td>';
		$html .= '<td style="border-style: solid; border-width:thin;">'.$rl["register_date"].'</td>';
		$html .= '<td style="border-style: solid; border-width:thin;">'.$rl["payment_methods"].'</td>';
		$html .= '<td style="border-style: solid; border-width:thin;">'.$price.'</td>';
		$html .= '<td style="border-style: solid; border-width:thin;">'.$rl["promotion_code"].'</td>';
		$html .= '<td style="border-style: solid; border-width:thin;">'.$rl["recommended_by"].'</td>';
		$html .= '<td style="text-align:center; border-style: solid; border-width:thin;">'.$rl["welcome_reception_yn"].'</td>';
		$html .= '<td style="text-align:center; border-style: solid; border-width:thin;">'.$rl["day2_breakfast_yn"].'</td>';
		$html .= '<td style="text-align:center; border-style: solid; border-width:thin;">'.$rl["day2_luncheon_yn"].'</td>';
		$html .= '<td style="text-align:center; border-style: solid; border-width:thin;">'.$rl["day3_breakfast_yn"].'</td>';
		$html .= '<td style="text-align:center; border-style: solid; border-width:thin;">'.$rl["day3_luncheon_yn"].'</td>';
		$html .= '<td style="border-style: solid; border-width:thin;">'.$conference_info.'</td>';
		$html .= '</tr>';
	}
	$html .= '</tbody>';
	$html .= '</table>';

	$html = str_replace("'", "\'", $html);
	$html = str_replace("\n", "", $html);

	$count = count($registration_list);
?>
	<section class="list">
		<div class="container">
			<div class="title clearfix">
				<h1 class="font_title">Registration</h1>
				<button type="button" class="btn floatR" onclick="javascript:window.open('./member_list.php?for=offline');">네임택 보기</button>
				<button type="button" class="btn excel_download_btn" onclick="javascript:fnExcelReport('Registration', html);">엑셀 다운로드</button>
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
								<!-- <th>Online/Offline</th> -->
								<!-- <td> -->
								<!-- 	<select name="attendance_type"> -->
								<!-- 		<option value="" <?=$attendance_type == "" ? "selected" : ""?>>전체</option> -->
								<!-- 		<option value="1" <?=$attendance_type == "1" ? "selected" : ""?>>Online</option> -->
								<!-- 		<option value="0" <?=$attendance_type == "0" ? "selected" : ""?>>Offline</option> -->
								<!-- 	</select> -->
								<!-- </td> -->
								<th>등록일</th>
								<td class="input_wrap"><input type="text" value="<?= $s_date; ?>" name="s_date" class="datepicker-here" data-language="en" data-date-format="yyyy-mm-dd" data-type="date"> <span>~</span> <input type="text" value="<?= $e_date; ?>" name="e_date" class="datepicker-here" data-language="en" data-date-format="yyyy-mm-dd" data-type="date"></td>
								<td></td>
								<td class="select_wrap clearfix2">
									
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
					<thead>
						<tr class="tr_center">
							<th>Registration No.</th>
							<th>결제상태</th>
							<th>ID(Email)</th>
							<th>Member Type</th>
							<th>참석유형</th>
							<th>Country</th>
							<th>KSSO 회원여부</th>
							<th>Name</th>
							<th>Affiliation(Institution)</th>
							<th>Phone Number</th>
							<th>Type of Participation</th>
							<th>Category</th>
							<th>평점신청여부</th>
							<th>등록일</th>
						</tr>
					</thead>
					<tbody>
					<?php
						if(!$registration_list) {
							echo "<tr><td class='no_data' colspan='8'>No Data</td></td>";
						} else {
							foreach($registration_list as $list) {
								$register_no = !empty($list["registration_idx"]) ? "ICOMES2023-".$list["registration_idx"] : "-";
					?>
								<tr class="tr_center">
									<td><?= $register_no; ?></td>
									<td class="<?=$list["payment_status"] == "결제대기" ? "red_color" : "blue_color"?>"><?=isset($list["payment_status"]) ? $list["payment_status"] : "-" ?></td>
									<td><a href="./member_detail.php?idx=<?=isset($list["member_idx"]) ? $list["member_idx"] : "" ?>"><?=isset($list["email"]) ? $list["email"] : "-" ?></a></td>
									<td><?=isset($list["member_type"]) ? $list["member_type"] : "-" ?></td>
									<td><?=isset($list["attendance_type_text"]) ? $list["attendance_type_text"] : "-"?></td>
									<td><?=isset($list["nation_ko"]) ? $list["nation_ko"] : "-" ?></td>
									<td><?=$list["ksola_member_status"]?></td>
									<td><a href="./registration_detail.php?idx=<?=isset($list["registration_idx"]) ? $list["registration_idx"] : ""?>"><?=isset($list["name"]) ? $list["name"] : "-" ?></a></td>
									<td><?=$list["affiliation"]?></td>
									<td><?=$list["phone"]?></td>
									<td><?=$list["attendance_type_text"]?></td>
									<td><?=$list["member_type"]?></td>
									<td><?=isset($list["is_score_text"]) ? $list["is_score_text"] : "-"?></td>
									<td><?=isset($list["register_date"]) ? $list["register_date"] : "-"?></td>
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
<script src="./js/common.js?v=0.2"></script>
<script>
	var html = '<?=$html?>';
</script>
<?php include_once('./include/footer.php');?>