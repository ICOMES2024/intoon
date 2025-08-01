<?php include_once('./include/head.php');?>

<?php
    $nation_query = "SELECT
                                *
                            FROM nation
                            ORDER BY 
                            idx = 25 DESC, nation_en ASC";
    $nation_list_query = $nation_query;
    $nation_list = get_data($nation_list_query);
?>
<script src="./js/script/client/onsite_registration.js"></script>
<style>
	.ksola_signup, .non_ksola_signup {
		display:none;
	}
	.ksola_signup.on, .non_ksola_signup.on {
		display:revert;
	}
	.radio_list li:not(:first-child){
		margin-top:8px;
	}
	.section_div {
		margin-top:60px;
	}
    .korea_only, .korea_radio, .non_korea_radio{
        display:none;
    }
    .korea_only.on, .korea_radio.on, .non_korea_radio.on{
        display:revert;
    }
    .mo_korea_only, .korea_radio, .non_korea_radio{
        display:none;
    }
    .mo_korea_only.on, .korea_radio.on, .non_korea_radio.on{
        display:revert;
    }

	@media screen and (max-width:700px) {
		.mobile_table th, .mobile_table td{
			white-space: inherit;
			padding: 4px !important
	}
		.mobile_table th,  .mobile_table td {
			width: 100%;
			display: block;
			border-top: none;
		}
		.mobile_table tr:first-child th {
			border-top: 1px solid #ddd;
		}
		.mobile_table td p, .mobile_table td label, .mobile_table td input[type="text"] {
			font-size: 12px;
		}
	
}

.mobile_table select, .mobile_table input{
	width: 80%;
}

</style>

<img src="https://image.webeon.net/icomes2024/icomes/2024_onsite_header.png" class="onsite_header" alt="">
<section class="container window_open onsite_register">
	<div class="">
		<div class="term_wrap">
			<h3 class="title">Use of Personal Information</h3>
			<div class="term_box">
			<strong>Purpose</strong>
					<p>The Korean Society for the Study of Obesity (KSSO) provides online pre-registration services for ICOMES 2024. Based on your personal information, you can sign up for the conference and complete the payment for registration.</p>
					<strong>Collecting Personal Information</strong>
					<p>ICOMES 2024 requires you to provide your personal information to complete pre-registration online. You will be asked to enter your name, ID (email), password, date of birth, institution/organization, department, mobile, and telephone number.</p>
					<strong>Storing Personal Information</strong>
					<p>ICOMES 2024 will continue to store your personal information to provide you with useful services, such as conference updates and newsletters.</p>
			</div>
			<div class="term_label text_l">
				<input type="checkbox" class="checkbox input required" data-name="terms 1" id="terms1" name="terms1" value="Y">
				<label for="terms1" class="terms1_label">I agree to the collection <br class="mb_only"/>and use of my personal information. </label>
			</div>	
		</div>
		<div class="section_div">
			<h3 class="title">Participant Information<span class="mini_alert"><span class="red_txt font_inherit">*</span>All requested field (<span class="red_txt font_inherit">*</span>) should be completed.</span></h3>
			<div class="table_wrap detail_table_common x_scroll">
				<table class="table detail_table mobile_table">
					<colgroup>
						<col class="col_th"/>
						<col width="*"/>
					</colgroup>
					<tbody>
						<tr>
							<th><span class="red_txt">*</span> Country</th>
							<td>
								<div class="max_normal">
									<select id="nation_no" name="nation_no" class="required" onChange="calc_fee()">
										<option value="" selected hidden>Choose</option>
									<?php
										foreach($nation_list AS $n) {
											if($language == "ko") {
												$nation = $n["nation_ko"];
											} else {
												$nation = $n["nation_en"];
											}
									?>
										<option data-nt="<?= $n['nation_tel']; ?>" value="<?=$n["idx"]?>" <?=$select_option?>><?=$nation?></option>
									<?php
										}
									?>
									</select>
								</div>
							</td>
						</tr>
						<tr class="korea_radio">
							<th class="nowrap"><span class="red_txt">*</span> 대한비만학회(KSSO) 회원 여부</th>
							<td>
								<div class="label_wrap">
									<input type="radio" class="new_radio" name="user" id="user1" value="1">
									<label for="user1"><i></i>회원</label>
									<input checked type="radio" class="new_radio" name="user" id="user2" value="0">
									<label for="user2"><i></i>비회원</label>
                                    <input type="hidden" name="ksso_member_check">
                                    <input type="hidden" name="ksso_member_type">
								</div>
							</td>
						</tr>
						<tr class="ksola_signup">
							<th style="background-color:transparent"></th>
							<td>
								<p>대한비만학회 회원 정보로 간편 가입</p>
								<ul class="simple_join clearfix">
									<li>
										<label for="">KSSO ID<span class="red_txt">*</span></label>
										<input class="email_id" name="kor_id" type="text" maxlength="60">
									</li>
									<li>
										<label for="">KSSO PW<span class="red_txt">*</span></label>
										<input class="passwords" name="kor_pw" type="password" maxlength="60">
									</li>
									<li>
										<button onclick="kor_api()" type="button" class="btn">회원인증</button>
									</li>
								</ul>
								<div class="clearfix2">
									<div>
										<input type="checkbox" class="checkbox" id="privacy">
										<label for="privacy">
											제 3자 개인정보 수집에 동의합니다.
										</label>
									</div>
									<a href="https://www.kosso.or.kr/join/search_id.html" target="_blank" class="id_pw_find">KSSO 회원 ID/PW 찾기</a>
								</div>
							</td>
						</tr>
			
						<tr class="non_korea_radio">
							<th class="nowrap"><span class="red_txt">*</span> KSSO Membership Status</th>
							<td>
								<div class="label_wrap">
									<input type="radio" class="new_radio" name="user1" id="user3" value="1">
									<label for="user3"><i></i>Member </label>
									<input type="radio" class="new_radio" name="user1" id="user4" value="0" checked>
									<label for="user4"><i></i>Non-Member</label>
                                    <input type="hidden" name="ksso_member_check">
                                    <input type="hidden" name="ksso_member_type">
								</div>
							</td>
						</tr>
						<tr class="non_ksola_signup">
							<th style="background-color:transparent"></th>
							<td>
								<p></p>
								<ul class="simple_join clearfix">
									<li>
										<label for="">KSSO ID<span class="red_txt">*</span></label>
										<input class="email_id" name="non_kor_id" type="text" maxlength="60">
									</li>
									<li>
										<label for="">KSSO PW<span class="red_txt">*</span></label>
										<input class="passwords" name="non_kor_pw" type="password" maxlength="60">
									</li>
									<li></li>
								</ul>
									<div>
										<input type="checkbox" class="checkbox" id="privacy1">
										<label for="privacy1">
											I agree to the collection of personal information by third parties.
										</label>
									</div>
								<div class="onsite_non_kor_box">
									<button onclick="non_kor_api()" type="button" class="btn">Membership Verification</button>
									<a href="https://eng.kosso.or.kr/account/join_1.php" target="_blank" class="id_pw_find center_t">Find KSSO membership ID/PW</a>
								</div>
							</td>
						</tr>
			

						<tr>
							<th><span class="red_txt">*</span> ID(email)</th>
							<td>
								<div class="max_long responsive_float">
									<input type="text" name="email" class="required" maxlength="50">
								</div>
								<span class="mini_alert brown_txt">Please make sure you have entered your ID correctly as you can't modify it later.</span>
							</td>
						</tr>
						<tr>
							<th><span class="red_txt">*</span> Password</th>
							<td>
								<div class="max_long">
									<input class="passwords" type="password" name="password" class="required" placeholder="Password" maxlength="60">
								</div>
							</td>
						</tr>
						<tr>
							<th><span class="red_txt">*</span> Verify Password</th>
							<td>
								<div class="max_long">
									<input class="passwords" type="password" name="password2" class="required" placeholder="Re-type Password" maxlength="60">
								</div>
							</td>
						</tr>
						<!-- Name -->
						<tr>
							<th><span class="red_txt">*</span> Name</th
							>
							<td class="name_td clearfix">
								<div class="max_normal">
									<input name="first_name" type="text" placeholder="First name" maxlength="60">
								</div>
								<div class="max_normal">
									<input name="last_name" type="text" placeholder="Last name" maxlength="60">
								</div>
							</td>
						</tr>
						<tr class="korea_only">
							<th><span class="red_txt">*</span> 성명</th>
							<td class="name_td clearfix">
								<div class="max_normal">
									<input name="first_name_kor" type="text" placeholder="이름" maxlength="60">
								</div>
								<div class="max_normal">
									<input name="last_name_kor" type="text" placeholder="성" maxlength="60">
								</div>
							</td>
						</tr>
						<tr>
							<th><span class="red_txt">*</span> Affiliation (Institute)</th>
							<td>
								<div class="max_long">
									<input type="text" name="affiliation" maxlength="100">
								</div>
							</td>
						</tr>
						<tr class="korea_only">
							<th><span class="red_txt">*</span>소속</th>
							<td>
								<div class="max_long">
									<input type="text" name="affiliation_kor" maxlength="100">
								</div>
							</td>
						</tr>
						<!-- Department -->
						<tr>
							<th><span class="red_txt">*</span> Department</th>
							<td>
								<div class="max_long">
									<input type="text" name="department" maxlength="100">
								</div>
							</td>
						</tr>
						<tr class="korea_only">
							<th><span class="red_txt">*</span>부서</th>
							<td>
								<div class="max_long">
									<input type="text" name="department_kor" maxlength="100">
								</div>
							</td>
						</tr>
						<tr>
							<th rowspan = "2"><span class="red_txt">*</span>Mobile Phone Number</th>
							<td>
								<div class="max_normal phone">
									<input class="numbers" name="nation_tel" type="text" maxlength="60" readonly>
									<input name="phone" id="phone" type="text" maxlength="15">
								</div>
							</td>
						</tr>
						<tr>
							<td class="font_small brown_txt">Please enter your phone number including the country codes.<br/>(Example: 82 1012341234)</td>
						</tr>
						<!--2022-05-09 추가사항-->
						<tr>
							<th><span class="red_txt">*</span>Date of Birth</th>
							<td>
								<div class="max_normal">
									<input name="date_of_birth" pattern="^[0-9]+$"  type="text" placeholder="dd-mm-yyyy" id="datepicker" onKeyup="birthChk(this)"/>
									<!-- <span class="mini_alert red_txt red_alert">good</span> -->
								</div>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
		<div class="section_div">
			<h3 class="title">Registration Information</h3>
			<div class="table_wrap detail_table_common x_scroll">
				<table class="table detail_table mobile_table">
					<colgroup>
						<col class="col_th"/>
						<col width="*"/>
					</colgroup>
					<tbody>
						<tr>
							<th><span class="red_txt">*</span> Type of Participation</th>
							<td>
								<div class="max_normal">
									<select id="participation_type" name="participation_type" class="required" onChange="calc_fee()">
                                        <option value="" selected hidden>Choose</option>
                                        <?php
                                        $participation_arr = array("Participants", "Committee", "Speaker", "Chairperson", "Panel", "Sponsor", "Press", "정책 세션");
                                        foreach($participation_arr as $a_arr) {
                                            $selected = $prev["attendance_type"] == $a_arr ? "selected" : "";

                                            echo '<option value="'.$a_arr.'" '.$selected.'>'.$a_arr.'</option>';
                                        }
                                        ?>
									</select>
								</div>
							</td>
						</tr>
						<tr>
							<th><span class="red_txt">*</span> Type of Occupation</th>
							<td>
								<ul class="max_normal flex_hide">
                                    <li>
                                        <select id="occupation" name="occupation" class="required">
                                            <option value="" selected hidden>Choose</option>
                                            <?php
                                            $occupation_arr = array( "Medical", "Food & Nutrition", "Exercise","Sponsor","Press","Others");

                                            foreach($occupation_arr as $a_arr) {
                                                $selected = $prev["occupation_type"] === $a_arr ? "selected" : "";

                                                echo '<option value="'.$a_arr.'" '.$selected.'>'.$a_arr.'</option>';
                                            }
                                            ?>
                                        </select>
                                    </li>
                                    <!-- 'Other' 선택시, ▼ li.hide_input에 'on' 클래스 추가 -->
                                    <li class="hide_input <?=$prev["occupation_type"] === "Others" ? "on" : ""?>">
                                        <input type="hidden" name="occupation_prev_input" value="<?=$prev["occupation_other_type"] ?? ""?>"/>
                                        <input type="text" id="occupation_input" name="occupation_input" value="<?=$prev["occupation_other_type"] ?? ""?>">
                                    </li>
								</ul>
							</td>
						</tr>
						<tr>
							<th><span class="red_txt">*</span> Category</th>
							<td>
								<ul class="max_normal flex_hide">
                                    <li>
                                        <select id="category" name="category" class="required" onChange="calc_fee()" style="width: 80%;">
                                            <option value="" selected hidden>Choose</option>
                                            <?php
                                            $category_arr = array("Certified M.D.", "Professor", "Fellow", "Resident", "Researcher", "Nutritionist", "Exercise Specialist", "Nurse", "Pharmacist", "Military Surgeon(군의관)", "Public Health Doctor", "Sponsor", "Student", "Press","Others");

                                            foreach($category_arr as $a_arr) {
                                                $selected = $prev["member_type"] == $a_arr ? "selected" : "";

                                                echo '<option value="'.$a_arr.'" '.$selected.'>'.$a_arr.'</option>';
                                            }
                                            ?>
                                        </select>
                                    </li>
                                    <!-- 'Other' 선택시, ▼ li.hide_input에 'on' 클래스 추가 -->
                                    <li class="hide_input <?=$prev["member_type"] === "Others" ? "on" : ""?>">
                                        <input type="hidden" name="title_prev_input" value="<?=$prev["member_other_type"] ?? ""?>"/>
                                        <input type="text" id="title_input" name="title_input" value="<?=$prev["member_other_type"] ?? ""?>">
                                    </li>
								</ul>
							</td>
						</tr>
						<tr class="korea_only">
							<th><span class="red_txt">*</span>대한의사협회 평점 신청</th>
							<td>
								<div class="label_wrap">
									<input type="radio" class="new_radio" name="review" id="review1" value="1">
									<label for="review1"><i></i>신청함</label>
									<input checked="" type="radio" class="new_radio" name="review" id="review2" value="0">
									<label for="review2"><i></i>신청 안 함</label>
								</div>
							</td>
						</tr>
						<tr class="review_sub_list">
							<th>의사 면허번호</th>
							<td>
								<div class="max_normal">
									<input type="text" name="licence_number" id="licence_number">
								</div>
							</td>
						</tr>
						<tr class="review_sub_list">
							<th>전문의 번호</th>
							<td>
								<div class="max_normal">
									<input type="text" name="specialty_number" id="specialty_number">
								</div>
							</td>
						</tr>
						<tr class="korea_only">
							<th><span class="red_txt">*</span>내과전공의 외부학술회의 평점신청</th>
							<td>
								<div class="label_wrap">
									<input type="radio" class="new_radio" name="review3" id="review3" value="1">
									<label for="review3"><i></i>신청함</label>
									<input checked="" type="radio" class="new_radio" name="review3" id="review4" value="0">
									<label for="review4"><i></i>신청 안 함</label>
								</div>
							</td>
						</tr>
						<tr class="korea_only">
							<th><span class="red_txt">*</span>한국영양교육평가원 평점신청</th>
							<td>
								<div class="label_wrap">
									<input type="radio" class="new_radio" name="review1" id="review5" value="1">
									<label for="review5"><i></i>신청함</label>
									<input checked type="radio" class="new_radio" name="review1" id="review6" value="0">
									<label for="review6"><i></i>신청 안 함</label>
								</div>
							</td>
						</tr>
						<tr class="review_sub_list_1 ">
							<th>영양사 면허번호</th>
							<td>
								<div class="max_normal">
									<input type="text" name="nutritionist_number" id="nutritionist_number">
								</div>
							</td>
						</tr>
						<tr class="review_sub_list_1 ">
							<th>임상영양사 자격번호</th>
							<td>
								<div class="max_normal">
									<input type="text" name="dietitian_number" id="dietitian_number">
								</div>
							</td>
						</tr>
						
						<tr class="korea_only">
							<th><span class="red_txt">*</span>운동사 평점신청</th>
							<td>
								<div class="label_wrap">
									<input type="radio" class="new_radio" name="review2" id="review7" value="1">
									<label for="review7"><i></i>신청함</label>
									<input checked="" type="radio" class="new_radio" name="review2" id="review8" value="0">
									<label for="review8"><i></i>신청 안 함</label>
								</div>
							</td>
						</tr>
						<tr class="korea_only">
							<th><span class="red_txt">*</span>내과분과전문의 시험/갱신 평점신청 </th>
							<td>
								<div class="label_wrap">
									<input type="radio" class="new_radio" name="review4" id="review9" value="1">
									<label for="review9"><i></i>신청함</label>
									<input checked="" type="radio" class="new_radio" name="review4" id="review10" value="0">
									<label for="review10"><i></i>신청 안 함</label>
								</div>
							</td>
						</tr>
						<tr class="review_sub_list_2">
							<th>내과전문의 면허번호</th>
							<td>
								<div class="max_normal">
									<input type="text" name="etc5" id="etc5">
								</div>
							</td>
						</tr>
						<tr>
							<th><span class="red_txt">*</span> Others</th>
							<td>
								<ul class="radio_list">
                                    <?php
                                        $others_arr = array(
												"Satellite Symposium",
												"Welcome Reception",
												"Day 2 Breakfast Symposium",
												"Day 2 Luncheon Symposium",
												"Day 3 Breakfast Symposium",
												"Day 3 Luncheon Symposium"
										);

                                        for($i = 1; $i <= count($others_arr); $i++) {
                                            $content = $others_arr[$i-1];
                                            $checked = "";

                                            if($content && in_array($content, $prev_list)){
                                                $checked = "checked";
                                            }

                                            echo "
                                            <li>
                                                <input type='checkbox' class='checkbox' id='others".$i."' name='others' value='".$others_arr[$i-1]."' ".$checked.">
                                                <label for='others".$i."'>
                                                    <i></i>".$others_arr[$i-1]."
                                                </label>
                                            </li>
                                            ";

                                        }
                                    ?>
								</ul>
							</td>
						</tr>
                        <tr>
                            <th><span class="red_txt">*</span> Special Request for Food</th>
                            <td>
                                <ul class="chk_list info_check_list flex_center type2">
                                    <?= $prev["special_request_food"] === '0' ? "selected" : "" ?>
                                    <li>
                                        <input type="radio" class='checkbox' id="special_request1" name='special_request' value="0" <?= $prev["special_request_food"] === '0' ? "checked" : "" ?>/>
                                        <label for="special_request1"><i></i>Not Applicable</label>
                                    </li>
                                    <li>
                                        <input type="radio" class='checkbox' id="special_request2" name='special_request' value="1" <?= $prev["special_request_food"] === '1' ? "checked" : "" ?>/>
                                        <label for="special_request2"><i></i>Vegetarian</label>
                                    </li>
                                    <li>
                                        <input type="radio" class='checkbox' id="special_request3" name='special_request' value="2" <?= $prev["special_request_food"] === '2' ? "checked" : "" ?>/>
                                        <label for="special_request3"><i></i>Halal</label>
                                    </li>
                                </ul>
                            </td>
                        </tr>
						<tr>
							<th><span class="red_txt">*</span> Where did you get the information about the ICOMES 2024?</th>
							<td>
								<ul class="radio_list">
                                    <?php
                                        $conference_info_arr = array(
                                            "Website of the Korean Society for the Study of Obesity",
                                            "Promotional email from the Korean Society for the Study of Obesity",
                                            "Advertising email or the bulletin board <br/>from the relevant society",
                                            "Information about affiliated companies/organizations",
                                            "Invited as a speaker, moderator, and panelist",
                                            "Recommended by a professor",
                                            "Recommended by acquaintances",
                                            "Pharmaceutical company",
                                            "Medical community (MEDI:GATE, Dr.Ville, etc.)",
                                            "Medical news and journals"
                                        );

                                        $prev_list = explode("*", $prev["conference_info"] ?? "");

                                        for($i = 1; $i <= count($conference_info_arr); $i++) {
                                            $content = $conference_info_arr[$i-1];
                                            $checked = "";

                                            if($content && in_array($content, $prev_list)){
                                                $checked = "checked";
                                            }

                                            echo "
                                            <li>
                                                <input type='checkbox' class='checkbox' id='list".$i."' name='list' value='".$conference_info_arr[$i-1]."' ".$checked.">
                                                <label for='list".$i."'>
                                                    <i></i>".$conference_info_arr[$i-1]."
                                                </label>
                                            </li>
                                            ";

                                        }
                                    ?>
								</ul>
							</td>
						</tr>
						<tr>
                            <th><span class="red_txt">*</span> Payment Methods</th>
                            <td>
                                <ul class="chk_list info_check_list flex_center type2">
                                    <li>
                                        <input type="radio" class='checkbox' id="card" name='payment_method' value="1"/>
                                        <label for="card"><i></i>Credit card</label>
                                    </li>
                                    <li>
                                        <input type="radio" class='checkbox' id="bank" name='payment_method' value="2"/>
                                        <label for="bank"><i></i>Wire transfer</label>
                                    </li>
                                </ul>
                            </td>
                        </tr>
					</tbody>
				</table>
			</div>
		</div>
		<div class="section_div">
			<h3 class="title">Registration fee</h3>
			<div class="table_wrap detail_table_common x_scroll">
				<table class="table detail_table mobile_table">
					<colgroup>
						<col class="col_th"/>
						<col width="*"/>
					</colgroup>
					<tbody>
						<tr>
							<th>Total</th>
							<td><input type="text" id="reg_fee" name="reg_fee" style="border: none; background: transparent;" placeholder="0" readonly value="<?=$prev["calc_fee"] || $prev["calc_fee"] == 0 ? number_format($prev["calc_fee"]) : ""?>"></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
		<div class="pager_btn_wrap half">
			<button id="submit" type="button" class="btn green_btn" onclick="submit()">Submit</button>
		</div>
	</div>
</section>

<script>
	$(document).ready(function(){

	//면허 번호 input 숨기기
		$(".review_sub_list").addClass("hidden");
		$(".review_sub_list_1").addClass("hidden");
		$(".review_sub_list_2").addClass("hidden");

		//대한의사협회 평점 신청
		$('input[name=review]').on("change", function() {
			if($('input[name=review]:checked').val() == '1'){
				$(".review_sub_list").removeClass("hidden");
			}else{
				// init
				$(".review_sub_list input[type=text]").val("");
				$(".review_sub_list input[type=checkbox]").prop("checked", false);

				if(!$(".review_sub_list").hasClass("hidden")){
					$(".review_sub_list").addClass("hidden");
				}
			}
		});

		//한국영양교육평가원 평점신청
		$('input[name=review1]').on("change", function() {
			if($('input[name=review1]:checked').val() == '1'){
				$(".review_sub_list_1").removeClass("hidden");
			}else{
				// init
				$(".review_sub_list_1 input[type=text]").val("");
				$(".review_sub_list_1 input[type=checkbox]").prop("checked", false);

				if(!$(".review_sub_list_1").hasClass("hidden")){
					$(".review_sub_list_1").addClass("hidden");
				}
			}
		});


				//한국영양교육평가원 평점신청
			$('input[name=review4]').on("change", function() {
			if($('input[name=review4]:checked').val() == '1'){
				$(".review_sub_list_2").removeClass("hidden");
			}else{
				// init
				$(".review_sub_list_2 input[type=text]").val("");
				$(".review_sub_list_2 input[type=checkbox]").prop("checked", false);

				if(!$(".review_sub_list_2").hasClass("hidden")){
					$(".review_sub_list_2").addClass("hidden");
				}
			}
		});

        $("select[name=nation_no]").change(function(){

            var value = $(this).val();

            if (value == 25){

                $(".korea_only").addClass("on");
                $(".korea_radio").addClass("on");

				$(".non_korea_radio").removeClass("on");

            } else {
                $(".korea_radio").removeClass("on");
                $(".korea_only").removeClass("on");
                $(".ksola_signup").removeClass("on");

				$(".non_korea_radio").addClass("on");


                remove_value();
                $("#user2").prop('checked', true);
            }

            var nt = $("#nation_no option:selected").data("nt");
            $("input[name=nation_tel]").val(nt);
            $("input[name=tel_nation_tel]").val(nt);


            $("input[name=ksso_member_type]").val('');
            $("input[name=ksso_member_check]").val('');

        });

        $("input[name='user']:radio").change(function (){
            calc_fee();
        });

        $("#user1").change(function(){
			if($("#user1").prop('checked') == true) {
				$(".ksola_signup").addClass("on");
			}
		});
		$("#user2").change(function(){
			if($("#user2").prop('checked') == true) {
				$(".ksola_signup").removeClass("on");
				$("input[name=ksola_member_type]").val("");
			}
		});

		$("#user3").change(function(){
			if($("#user3").prop('checked') == true) {
				$(".non_ksola_signup").addClass("on");
			}
		});
		$("#user4").change(function(){
			if($("#user4").prop('checked') == true) {
				$(".non_ksola_signup").removeClass("on");
				$("input[name=ksola_member_type]").val("");
			}
		});

        $("select[name=category]").on("change", function(){
            const val = $(this).val();
            const prevTitle = $("input[name=title_prev_input]").val() ?? "";

            if(val == 'Others'){
                if(!$(this).parent("li").next('.hide_input').hasClass("on")){
                    $(this).parent("li").next('.hide_input').addClass("on");
                }
            }else{
                $(this).parent("li").next('.hide_input').removeClass("on");
                $("input[name=title_input]").val(prevTitle);
            }
        });

        $("select[name=occupation]").on("change", function(){
            const val2 = $(this).val();
            const prevTitle2 = $("input[name=occupation_prev_input]").val() ?? "";

            if(val2 == 'Others'){
                if(!$(this).parent("li").next('.hide_input').hasClass("on")){
                    $(this).parent("li").next('.hide_input').addClass("on");
                }
            }else{
                $(this).parent("li").next('.hide_input').removeClass("on");
                $("input[name=occupation_input]").val(prevTitle2);
            }
        });
	});
</script>