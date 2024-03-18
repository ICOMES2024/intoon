
<?php include_once('./include/head.php'); ?>
<?php include_once('./include/header.php'); ?>
<?php
$nation_query = "SELECT
							*
						FROM nation
						ORDER BY 
						idx = 25 DESC, nation_en ASC";
$nation_list_query = $nation_query;
$nation_list = get_data($nation_list_query);

$user_info = $member;

// [22.04.25] 미로그인시 처리
if (!$user_info) {
	echo "<script>alert('로그인이 필요합니다.'); location.replace(PATH+'login.php');</script>";
	exit;
}

//var_dump($user_info); exit;

$user_idx = $member["idx"] ?? -1;

// $registration_idx = $_GET["idx"] ?? NULL;

$sql_during =	"SELECT
						IF(DATE(NOW()) >= '2023-09-07', 'Y', 'N') AS yn
					FROM info_event";
$during_yn = sql_fetch($sql_during)['yn'];

$only_sql = " SELECT
				reg.idx, reg.email, reg.nation_no, reg.first_name, reg.last_name, reg.affiliation, reg.phone, reg.department, reg.member_type, reg.occupation_type, DATE(reg.register_date) AS register_date, DATE_FORMAT(reg.register_date, '%m-%d-%Y %H:%i:%s') AS register_date2, reg.status, reg.is_score, reg.is_score1, reg.is_score2, 
				reg.attendance_type, reg.licence_number, reg.specialty_number, reg.nutritionist_number, reg.dietitian_number, reg.date_of_birth, reg.conference_info,
				reg.etc4, reg.welcome_reception_yn, reg.day2_breakfast_yn, reg.day2_luncheon_yn, reg.day3_breakfast_yn, reg.day3_luncheon_yn, reg.special_request_food,
				reg.payment_methods, reg.price, nation.nation_en, IF(nation.nation_tel = 82, 1, 0) AS is_korea,
				(
					CASE
						WHEN reg.ksso_member_status IS NULL OR reg.ksso_member_status = 0 THEN '비회원'
						WHEN reg.ksso_member_status > 0 THEN '회원'
					END
				) AS ksso_member_status,
				p.idx AS payment_idx, p.`type` AS payment_type, p.total_price_kr, p.total_price_us,
				p.etc2, DATE_FORMAT(p.register_date, '%Y-%m-%d %H:%i:%s') AS payment_register_date
				FROM request_registration reg
				LEFT JOIN payment p
				ON reg.payment_no = p.idx
				LEFT JOIN (
				SELECT idx, nation_en, nation_tel FROM nation
				)AS nation
				ON reg.nation_no = nation.idx
				WHERE reg.register = {$user_idx}
				AND reg.is_deleted = 'N'
                AND reg.status != 4";

//AND reg.status != 4 추가
$data = sql_fetch($only_sql);

$registration_idx = $data['idx'];

if($registration_idx < 10){
	$register_no = !empty($registration_idx) ? "ICOMES2024-000" .$registration_idx : "-";
}else if($registration_idx >= 10 && $registration_idx < 100){
	$register_no = !empty($registration_idx) ? "ICOMES2024-00" . $registration_idx : "-";
}else if($registration_idx >= 100 && $registration_idx < 1000){
	$register_no = !empty($registration_idx) ? "ICOMES2024-0" . $registration_idx : "-";
}else if($registration_idx >= 1000 ){
	$register_no = !empty($registration_idx) ? "ICOMES2024-" . $registration_idx : "-";
}

if (!$data) {
	echo "<script>alert('등록 정보를 찾을 수 없습니다.');location.replace(PATH+'mypage.php');</script>";
	exit;
}

$attendance_type = $data["attendance_type"] ?? "-";
switch($attendance_type) {
	case 0:
		$attendance_type = "Committee";
		break;
	case 1:
		$attendance_type = "Speaker";
		break;
	case 2:
		$attendance_type = "Chairperson";
		break;
	case 3:
		$attendance_type = "Panel";
		break;
	case 4:
		$attendance_type = "Participants";
		break;
	case 5:
		$attendance_type = "Sponsor";
		break;
	case 6:
		$attendance_type = "Press";
		break;
}

?>
<style>
	/*2022-04-13 ldh 추가*/
	.form_btn {
		font-size: 18px;
		height: 50px;
		width: 100%;
		color: #fff;
		border-radius: 30px;
		margin-top: 100px;
	}

	/*2022-09-08 ldh 추가*/
	.mypage .tab_green2 {
		text-align: center;
		white-space: nowrap;
	}

	.tab_green2 {
		display: flex;
		justify-content: center;
		margin-bottom: 37px;
	}

	.tab_green2 li.on {
		border-bottom: 2px solid #10BF99;
	}

	.tab_green2 li:not(:last-of-type) {
		margin-right: 40px;
	}

	.mypage .tab_green2 li {
		display: inline-block;
	}

	.tab_green2 li a {
		font-size:
			/*30px*/
			24px;
		font-weight: 400;
		color: #CCCCCC;
	}

	.tab_green2 li.on a {
		font-weight: bold;
		color: #10BF99;
	}
	label {
		margin-right: 10px;
	}
</style>

<section class="container form_section mypage">
	<h1 class="page_title">Modifying Registration</h1>
	<div class="inner">
		<div>
			<form class="table_wrap" name="modify_form">
				<div class="x_scroll">
					<table class="table detail_table abstract_table">
						<colgroup>
							<col width="25%">
							<col width="*">
						</colgroup>
						<tbody>
							<tr>
								<th>Registration No.</th>
								<td>
									<div class="max_normal">
										<input type="text" name="register_no" value="<?= $register_no  ?>" readonly>
									</div>
								</td>
							</tr>
							<tr>
								<th>Name</th>
								<td>
									<div class="max_normal">
										<input type="text" name="name" value="<?=  $data['first_name']." ". $data['last_name']   ?>" readonly>
									</div>
								</td>
							</tr>
							<tr>
								<th>Country</th>
								<td>
									<div class="max_normal">
									<?php
										foreach($nation_list AS $list) {
											$nation = $list["nation_en"]; 
											if($user_info["nation_no"] == $list["idx"]) { ?>
												<input type="text" name="nation" value="<?=  $nation;   ?>" readonly>
										<?php	} 
										}
									?>
										
									</div>
								</td>
							</tr>
							<tr>
								<th>Affiliation</th>
								<td>
									<div class="max_normal">
										<input type="text" name="affiliation" value="<?= $data['affiliation']   ?>" readonly>
									</div>
								</td>
							</tr>
							<?php
							if ($user_info["nation_no"] == "25") {
								if ($user_info["ksola_member_status"] == "1" || $user_info["ksola_member_status"] == "2") {
									$mem_chk = "checked";
									$mem_chk2 = "";
								} else {
									$mem_chk = "";
									$mem_chk2 = "checked";
								}
							?>
								<tr name="ksola_tr" id="ksola_tr">
									<th class="nowrap">Member of KSSO</th>
									<td>
										<div class="max_normal">
											<input type="checkbox" class="checkbox" id="membership_status1" disabled <?= $mem_chk ?>>
											<label for="membership_status1"><i></i>Member</label>
											<input type="checkbox" class="checkbox" id="membership_status2" disabled <?= $mem_chk2 ?>>
											<label for="membership_status2"><i></i>Non-Member</label>
										</div>
									</td>
								</tr>
							<?php
							}
							?>

							<tr>
								<th>Type of Participation</th>
								<td>
									<div class="max_normal">
										<input type="text" name="name" value="<?= $attendance_type  ?>" readonly>
									</div>
								</td>
							</tr>
							<tr>
								<th>Type of Occupation</th>
								<td>
									<div class="max_normal">
										<input type="text" name="name" value="<?= $data['occupation_type']   ?>" readonly>
									</div>
								</td>
							</tr>
							<tr>
								<th>Category</th>
								<td>
									<div class="max_normal">
										<input type="text" name="member_type" value="<?=  $data['member_type'];  ?>" readonly>
									</div>
								</td>
							</tr>
							<?php
							if ($user_info["nation_no"] == "25") {
							if ($data["is_score"] == "0" || $data["is_score"] == "1") {
									$is_score = "checked";
									$is_score2 = "";
								} else {
									$is_score = "";
									$is_score2 = "checked";
								}
								?>
							<tr>
								<th>대한의사협회 평점신청</th>
								<td>
									<div class='radio_wrap'>
										<ul class='flex'>
											<li>
												<input type='radio' class='new_radio registration_check' id='radio1'
													name='is_score' value='1' <?= ($data["is_score"] == 1 ? "checked" : "") ?>>
												<label for='radio1'><i></i>필요</label>
											</li>
											<li>
												<input type='radio' class='new_radio registration_check' id='radio2'
													name='is_score' value='0' <?= ($data["is_score"] == 0 ? "checked" : "") ?>>
												<label for='radio2'><i></i>불필요
												</label>
											</li>
										</ul>
									</div>
								</td>
							</tr>
							<tr class="review">
								<th>의사 면허번호</th>
								<td>
									<div class="max_normal review">
										<input type="text" name="licence_number" value="<?= $data['licence_number']   ?>" >
									</div>
								</td>
							</tr>
							<tr class="review">
								<th>전문의 번호</th>
								<td>
									<div class="max_normal ">
										<input type="text" name="specialty_number" value="<?= $data['specialty_number']   ?>" >
									</div>
								</td>
							</tr>
							<tr>
								<th>한국영양교육평가원 평점신청</th>
								<td>
									<div class='radio_wrap'>
										<ul class='flex'>
											<li>
												<input type='radio' class='new_radio registration_check' id='radio3'
													name='is_score1' value='1' <?= ($data["is_score1"] == 1 ? "checked" : "") ?>>
												<label for='radio3'><i></i>필요</label>
											</li>
											<li>
												<input type='radio' class='new_radio registration_check' id='radio4'
													name='is_score1' value='0' <?= ($data["is_score1"] == 0 ? "checked" : "") ?>>
												<label for='radio4'><i></i>불필요
												</label>
											</li>
										</ul>
									</div>
								</td>
							</tr>
							<tr class="review1">
								<th>영양사 면허번호</th>
								<td>
									<div class="max_normal ">
										<input type="text" name="nutritionist_number" value="<?= $data['nutritionist_number']   ?>" >
									</div>
								</td>
							</tr>
							<tr class="review1">
								<th>임상영양사 자격번호</th>
								<td>
									<div class="max_normal ">
										<input type="text" name="dietitian_number" value="<?= $data['dietitian_number']   ?>" >
									</div>
								</td>
							</tr>
							<tr>
								<th>운동사 평점 신청</th>
								<td>
									<div class='radio_wrap'>
										<ul class='flex'>
											<li>
												<input type='radio' class='new_radio registration_check' id='radio5'
													name='is_score2' value='1' <?= ($data["is_score2"] == 1 ? "checked" : "") ?>>
												<label for='radio5'><i></i>필요</label>
											</li>
											<li>
												<input type='radio' class='new_radio registration_check' id='radio6'
													name='is_score2' value='0' <?= ($data["is_score2"] == 0 ? "checked" : "") ?>>
												<label for='radio6'><i></i>불필요
												</label>
											</li>
										</ul>
									</div>
								</td>
							</tr>
							<?php } ?>
							
							<tr>
								<th>Others</th>
								<td>
									<div class="max_normal">
									<table class="c_table detail_table" id="othersList_table" name=" othersList_table">
                                <colgroup>
                                    <col class="submission_col">
                                    <col>
                                </colgroup>
                                <tbody id="othersList">
                                    <?php
                                        $others_arr = array(
											"Satellite Symposium",
											"Welcome Reception",
											"Day 2 Breakfast Symposium",
											"Day 2 Luncheon Symposium",
											"Day 3 Breakfast Symposium",
											"Day 3 Luncheon Symposium"
                                        );
                                        $other_date_arr = array(
                                            "September 5(Thu)",
												"September 5(Thu)",
												"September 6(Fri)",
												"September 6(Fri)",
												"September 7(Sat)",
												"September 7(Sat)"
                                        );

                                        $prev_data_arr = [];
										if($data["etc4"] == "Y"){
											array_push($prev_data_arr ,1);
										}
										if($data["welcome_reception_yn"] == "Y"){
											array_push($prev_data_arr ,2);
										}
										if($data["day2_breakfast_yn"] == "Y"){
											array_push($prev_data_arr ,3);
										}
										if($data["day2_luncheon_yn"] == "Y"){
											array_push($prev_data_arr ,4);
										}
										if($data["day3_breakfast_yn"] == "Y"){
											array_push($prev_data_arr ,5);
										}
										if($data["day3_luncheon_yn"] == "Y"){
											array_push($prev_data_arr ,6);
										}
                                      

                                        for ($i = 1; $i <= count($others_arr); $i++) {
                                            $valueType = "";
                                            $content = $others_arr[$i - 1];

                                            $is_yes = in_array($i, $prev_data_arr);

                                            echo "<tr style='border:none;'>
													<th style='background-color:#FFF;border:none;' class='border_r_none'>" . $others_arr[$i - 1] . "</th>
													<th style='background-color:#FFF;border:none;'>" . $other_date_arr[$i - 1] . "</th>
													<td style='background-color:#FFF;border:none;'>
														<div class='radio_wrap' id='focus_others' tabindex='0'>
															<ul class='flex'>
																<li>
																	<input type='radio' id='yes" . $i . "' class='new_radio' name='others" . $i . "' value='" . $others_arr[$i - 1] . $other_date_arr[$i - 1] . "' " . ($is_yes ? "checked" : "") . ">
																	<label for='yes" . $i . "'>
																		<i></i> Yes
																	</label>
																</li>
																<li>
																<input type='radio' id='no" . $i . "' class='new_radio' name='others" . $i . "' value='" . $others_arr[$i - 1] . $other_date_arr[$i - 1] . "' " . ($is_yes ? "" : "checked") . ">
																	<label for='no" . $i . "'>
																		<i></i> No
																	</label>
																</li>
															</ul>
														</div>
													</td>
												</tr>";
                                        }
                                        ?>
                                			</tbody>
                            			</table>
									</div>
								</td>
							</tr>

							<tr>
								<th>Special Request for Food</th>
								<td>
									<div class="max_normal ">
									<ul class="chk_list info_check_list flex_center type2">
                         
                            <li>
                                <input type="radio" class='checkbox' id="special_request1" name='special_request' checked
                                    value="0" <?= $data["special_request_food"] === '0' ? "checked" : "" ?> />
                                <label for="special_request1"><i></i>Not Applicable</label>
                            </li>
                            <li>
                                <input type="radio" class='checkbox' id="special_request2" name='special_request'
                                    value="1" <?= $data["special_request_food"] === '1' ? "checked" : "" ?> />
                                <label for="special_request2"><i></i>Vegetarian</label>
                            </li>
                            <li>
                                <input type="radio" class='checkbox' id="special_request3" name='special_request'
                                    value="2" <?= $data["special_request_food"] === '2' ? "checked" : "" ?> />
                                <label for="special_request3"><i></i>Halal</label>
                            </li>
                        </ul>
									</div>
								</td>
							</tr>
							<tr>
								<th>Where did you get the information about the conference?</th>
								<td>
									<div>
									<ul class="chk_list info_check_list">
                            <?php
                                $conference_info_arr = array(
									"Website of the Korea Society of Obesity",
									"Promotional email from the Korea Society of Obesity",
									"Advertising email or the bulletin board from the relevant society",
									"Information about affiliated companies/organizations",
									"Invited as a speaker, moderator, and panelist",
									"Recommended by a professor",
									"Recommended by acquaintances",
									"Pharmaceutical company",
									"Medical community (MEDI:GATE, Dr.Ville, etc.)",
									"Medical news and journals"
                                );

                                $prev_list = explode("*", $data["conference_info"] ?? "");

                                for ($i = 1; $i <= count($conference_info_arr); $i++) {
                                    $content = $conference_info_arr[$i - 1];
                                    $checked = "";

                                    if ($content && in_array($content, $prev_list)) {
                                        $checked = "checked";
                                    }

                                    echo "
										<li>
											<input type='checkbox' class='checkbox' id='list" . $i . "' name='list' value='" . $conference_info_arr[$i - 1] . "' " . $checked . ">
											<label for='list" . $i . "'>
												<i></i>" . $conference_info_arr[$i - 1] . "
											</label>
										</li>
										";
                                }
                                ?>

                        </ul>
									</div>
								</td>
							</tr>
							<tr>
								<th>Registration Fee</th>
								<td>
									<div class="max_normal ">
										<?php 
										$fee = "";
										if($user_info["nation_no"] == "25"){
											$fee = "KRW";
										}else{
											$fee = "USD";
										}?>
										<input type="text" name="fee" value="<?= $fee." " . number_format($data['price'])?>" readonly>
									</div>
								</td>
							</tr>
						</tbody>
					</table>
					<div class="btn_wrap">
						<button type="button" class="btn green_btn long_btn submit_btn" id="pc_submit">Modify</button>
					</div>
				</div>
				
				<input type="hidden" name="ksola_member_check">
			</form>
			<input type="hidden" name="nation_tel" value="<?= $nation_tel ?>">
			<input type="hidden" name="check_type" value="1">
		</div>
	</div>
</section>
<script src="./js/script/client/member.js"></script>
<script>

	$(".review").addClass("hidden");
	
	window.onload = ()=>{
		// alert("사전 등록 접수가 마감되었습니다.");
		// window.history.back();
		// window.location.href = "/main/index.php";
		// return;
		checkIsScore();
	}

		$('input[name=is_score]').on("change", function() {
        if ($('input[name=is_score]:checked').val() == '1') {
            $(".review").removeClass("hidden");
        } else {
            // init
            $(".review_sub_list input[type=text]").val("");
            $(".review_sub_list input[type=checkbox]").prop("checked", false);

            if (!$(".review").hasClass("hidden")) {
                $(".review").addClass("hidden");
            }
        }
    });

	$('input[name=is_score1]').on("change", function() {
        if ($('input[name=is_score1]:checked').val() == '1') {
            $(".review1").removeClass("hidden");
        } else {
            // init
            $(".review_sub_list input[type=text]").val("");
            $(".review_sub_list input[type=checkbox]").prop("checked", false);

            if (!$(".review1").hasClass("hidden")) {
                $(".review1").addClass("hidden");
            }
        }
    });


	// $('#nutritionist_number').on("input", ()=>{
    //     $("#date_of_birth").show();
    // })

    // $('#dietitian_number').on("input", ()=>{
    //     $("#date_of_birth").show();
    // })

    // if($('#nutritionist_number').val() !== ""){
    //     $("#date_of_birth").show();
    // }
    
    // if($('#dietitian_number').val() !== ""){
    //     $("#date_of_birth").show();
    // }

	/**유입 경로 체크시 다른 체크 풀기 */
	$("input[name=list]").on("change", function() {
        const checked = $(this).is(":checked");
        if (checked) {
			$("input[name='list']").not(this).prop("checked", false);
        }
    });

$(document).on("click", "#pc_submit", function() {
		const licence_number = $('input[name=licence_number]').val();
		const specialty_number = $('input[name=specialty_number]').val();
		const nutritionist_number = $('input[name=nutritionist_number]').val();
		const dietitian_number = $('input[name=dietitian_number]').val();

		const prev_no = <?php echo $data['idx']; ?>;

		let review = "";
		let review1 = "";
		let review2 = "";
		
		let others1 = "";
		let others2 = "";
		let others3 = "";
		let others4 = "";
		let others5 = "";
		let others6 = "";

		let special_request = "";

		let conference_info_arr = [];

		const anyChecked = $("input[name='list']:checked").length > 0;

        if (!anyChecked) {
            alert("유입경로를 선택하세요.");
			return;
        }

		/**is_score */
		if($("#radio1").is(":checked") && !$("#radio2").is(":checked")){
			review = "1";
		}
		else if(!$("#radio1").is(":checked") && $("#radio2").is(":checked")){
			 review = "0";
		}

		/**is_score1 */
		if($("#radio3").is(":checked") && !$("#radio4").is(":checked")){
			review1 = "1";
		}
		else if(!$("#radio3").is(":checked") && $("#radio4").is(":checked")){
			 review1 = "0";
		}

		/**is_score2 */
		if($("#radio5").is(":checked") && !$("#radio6").is(":checked")){
			review2 = "1";
		}
		else if(!$("#radio5").is(":checked") && $("#radio6").is(":checked")){
			 review2 = "0";
		}

		/**others 1 */
		if($("#yes1").is(":checked") && !$("#no1").is(":checked")){
			 others1 = "Satellite Symposium";
		}
		else if(!$("#yes1").is(":checked") && $("#no1").is(":checked")){
			 others1 = "no";
		}
		/**others 2 */
		if($("#yes2").is(":checked") && !$("#no2").is(":checked")){
			 others2 = "Welcome Reception";
		}
		else if(!$("#yes2").is(":checked") && $("#no2").is(":checked")){
			 others2 = "no";
		}
		/**others 3 */
		if($("#yes3").is(":checked") && !$("#no3").is(":checked")){
			 others3 = "Day 2 Breakfast Symposium";
		}
		else if(!$("#yes3").is(":checked") && $("#no3").is(":checked")){
			 others3 = "no";
		}
		/**others 4 */
		if($("#yes4").is(":checked") && !$("#no4").is(":checked")){
			 others4 = "Day 2 Luncheon Symposium";
		}
		else if(!$("#yes4").is(":checked") && $("#no4").is(":checked")){
			 others4 = "no";
		}
		/**others 5 */
		if($("#yes5").is(":checked") && !$("#no5").is(":checked")){
			 others5 = "Day 3 Breakfast Symposium";
		}
		else if(!$("#yes5").is(":checked") && $("#no5").is(":checked")){
			 others5 = "no";
		}
		/**others 6 */
		if($("#yes6").is(":checked") && !$("#no6").is(":checked")){
			 others6 = "Day 3 Luncheon  Symposium";
		}
		else if(!$("#yes6").is(":checked") && $("#no6").is(":checked")){
			 others6 = "no";
		}

		/**특이식단 */
		/** 해당 없음 */
		if($("#special_request1").is(":checked") && !$("#special_request2").is(":checked") && !$("#special_request3").is(":checked") ){
			 special_request = "0";
		}
		// Vegetarian
		else if(!$("#special_request1").is(":checked") && $("#special_request2").is(":checked") && !$("#special_request3").is(":checked") ){
			 special_request = "1";
		}
		// halal
		else if(!$("#special_request1").is(":checked") && !$("#special_request2").is(":checked") && $("#special_request3").is(":checked") ){
			 special_request = "2";
		}

		//유입경로
		if($("#list1").is(":checked")){
			conference_info_arr = ["Website of the Korea Society of Obesity"];
		}
		else if($("#list2").is(":checked")){
			conference_info_arr = ["Promotional email from the Korea Society of Obesity"];
		}
		else if($("#list3").is(":checked")){
			conference_info_arr = ["Advertising email or the bulletin board from the relevant society"];
		}
		else if($("#list4").is(":checked")){
			conference_info_arr = ["Information about affiliated companies/organizations"];
		}
		else if($("#list5").is(":checked")){
			conference_info_arr = ["Invited as a speaker, moderator, and panelist"];
		}
		else if($("#list6").is(":checked")){
			conference_info_arr = ["Recommended by a professor"];
		}
		else if($("#list7").is(":checked")){
			conference_info_arr = ["Recommended by acquaintances"];
		}
		else if($("#list8").is(":checked")){
			conference_info_arr = ["Pharmaceutical company"];
		}
		else if($("#list9").is(":checked")){
			conference_info_arr = ["Medical community (MEDI:GATE, Dr.Ville, etc.)"];
		}
		else if($("#list10").is(":checked")){
			conference_info_arr = ["Medical news and journals"];
		}

			var formData = {
				"licence_number": licence_number,
				"specialty_number": specialty_number,
				"nutritionist_number": nutritionist_number,
				"dietitian_number": dietitian_number,
				"prev_no": prev_no,
				"rating": review,
				"rating1": review1,
				"rating2": review2,
				"others1": others1,
				"others2": others2,
				"others3": others3,
				"others4": others4,
				"others5": others5,
				"others6": others6,
				"special_request": special_request,
				"conference_info_arr":conference_info_arr
			};

		

			if (confirm(locale(language.value)("account_modify_msg"))) {
				$.ajax({
					url: PATH + "ajax/client/ajax_registration.php",
					type: "POST",
					data: {
						flag: "update",
						data: formData
					},
					dataType: "JSON",
					success: function(res) {
						console.log(res)
						if (res.code == 200) {
							alert(locale(language.value)("complet_account_modify"));
							location.reload();
						} else if (res.code == 400) {
							alert(locale(language.value)("error_account_modify"));
							return false;
						} else {
							alert(locale(language.value)("reject_msg"))
							return false;
						}
					}
				});
			}
		});

	function checkIsScore(){
		if($("#radio1").is(":checked")){
			$(".review").removeClass("hidden");
		}
		if($("#radio2").is(":checked")){
			$(".review").addClass("hidden");
		}

		if($("#radio3").is(":checked")){
			$(".review1").removeClass("hidden");
		}
		if($("#radio4").is(":checked")){
			$(".review1").addClass("hidden");
		}
	}

	function birthChk(input) {

		var value = input.value.replace(/[^0-9]/g, "").substr(0, 8); // 입력된 값을 숫자만 남기고 모두 제거
		if (value.length === 8) {
			var regex = /^(\d{4})(\d{2})(\d{2})$/;
			var formattedValue = value.replace(regex, "$1-$2-$3");
			input.value = formattedValue;
		} else {
			input.value = value;
		}

	}
</script>
<?php include_once('./include/footer.php'); ?>