<?php include_once('./include/head.php');?>
<?php include_once('./include/header.php');?>
<?php
	$nation_query = "SELECT
							*
						FROM nation
						ORDER BY 
						idx = 25 DESC, nation_en ASC";
	$nation_list_query = $nation_query;
	$nation_list = get_data($nation_list_query);

	$user_info = $member;

	if($user_info["phone"]) {
		$_arr_phone = explode("-",$user_info["phone"]);
		$nation_tel = $_arr_phone[0];
		$phone = implode("-",array_splice($_arr_phone, 1));
	}

	if($user_info["telephone"]) {
		$_arr_telephone = explode("-",$user_info["telephone"]);
		$nation_tel = $_arr_telephone[0];
		//$telephone = implode("-",array_splice($_arr_telephone, 1));
	}

	// [22.04.25] 미로그인시 처리
	if(!$user_info) {
		echo "<script>alert('Need to login'); location.replace(PATH+'login.php');</script>";
		exit;
	}

	//var_dump($user_info); exit;

	$user_idx = $member["idx"] ?? -1;

	$sql_during =	"SELECT
						IF(DATE(NOW()) >= '2023-09-07', 'Y', 'N') AS yn
					FROM info_event";
	$during_yn = sql_fetch($sql_during)['yn'];

	$only_sql = "SELECT
					MAX(rr.idx) AS idx
				FROM request_registration AS rr
				LEFT JOIN member AS mb
					ON mb.idx = rr.register
				LEFT JOIN payment AS pa
					ON pa.idx = rr.payment_no
				WHERE rr.register = {$user_idx}
				AND rr.is_deleted = 'N'
				AND rr.`status` = 2
				GROUP BY rr.idx";

	$only_idx = sql_fetch($only_sql)['idx'];

	$score_sql = "SELECT
						*
					FROM score_second
					WHERE mb_idx = '{$user_idx}'";

	$score_detail = sql_fetch($score_sql);
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

.ksola_signup, .non_ksola_signup {
		display:none;
	}
	.mo_ksola_signup, .mo_non_ksola_signup  {
		display:none;
	}
	.ksola_signup.on, .non_ksola_signup.on {
		display:revert;
	}
	.mo_ksola_signup.on, .mo_non_ksola_signup.on {
		display:revert;
	}

	.join_btn{
		width: 190px;
		border: 1px solid #DDD;
		font-weight: 700;
		display: flex;
		align-items: center;
		justify-content: center; 
		margin-top: 12px;
		background-color: #FFF;
		padding: 8px;
		border-radius: 4px;
		cursor: pointer;
	}

	.join_btn:hover{
		background-color: #DDD;
	}

	table .btn{
		height: 30px !important;
	}
</style>
<script>

	//이메일 중복 체크 한국으로 체크시
function email_check(email) {
	$.ajax({
		url : PATH+"ajax/client/ajax_member.php", 
		type : "POST", 
		data :  {
			flag : "ksso_id_check",
			email : email
		},
		dataType : "JSON", 
		success : function(res){
			if(res.code == 200) {
			} else if(res.code == 400) {
				alert("이미 사용된 ID입니다.");
				return false;
			} else {
				
				return false;
			}
		}
	});
}


function mo_non_kor_api() {
	var kor_id = $("input[name=mo_non_kor_id]").val().trim();
	var kor_pw = $("input[name=mo_non_kor_pw]").val().trim();
	//제 3자 개인정보 수집에 동의 여부
	var privacy = $("#mo_privacy1").is(":checked");

	if(!kor_id) {
		//$(".mo_red_api").eq(0).html("format_id");
		alert("Invalid id");
		return;
	}
	if(!kor_pw) {
		//$(".mo_red_api").eq(0).html("Invalid_password");
		alert("Invalid password");
		return;
	}
	
	if(privacy == false) {
		alert("Please agree to the collection of personal information.");
		$(".mo_red_api").eq(0).html("Please agree to the collection of personal information.");
		return;
	}

	var data = {
		'id' : kor_id,
		'pw' : kor_pw 
	};


	$.ajax({
		url			: 'signup_api_eng.php',
		type		: "POST",
		data		: data,
		dataType	: "JSON",
		success		: success,
		fail		: fail,
		error		: error
	});

	function success(res) {
		var kor_sign = JSON.parse(res.value);
		console.log(kor_sign); 
		var user_row = kor_sign.user_row;

		if(kor_sign.code == 100){
			alert('The information you provided does not match our registration records.')
		}else if(kor_sign.code == 300){
			alert('The information you provided does not match our registration records.')
		}else if(kor_sign.code == 200){
			const user_value = kor_sign.value
			if(user_value.status && user_value.status == '승인'){
				$("input[name=ksola_member_check]").val(user_value.email);
				//alert('Membership Verified')
				ksola_member_status = 1;

				const data = {
					email : $("[name=email]").val(),
					ksola_member_status : ksola_member_status,
					ksola_member_check : user_value.email
				}

			if( ksola_member_status != 0 && window.confirm("Would you like to authenticate as a KSSO member with your current ID for ICOMES 2024?")){
				$.ajax({
					url:"/main/ajax/client/ajax_member.php",
					type: "POST",
					data: {
						flag: "memeber_update",
						data
					},
					dataType: "JSON",
					success: function (res) {
						// console.log(res)
						if (res.code == 200) {
							alert('Membership Verified')
							$('#mo_membership_status3').prop('checked',true);
							$('#mo_membership_status4').prop('checked',false);
							return;
						} else {
						
							return;
						}
					}
				});
			}
			}else if (!user_value.status && user_value.code == 'N7'){
				alert('This account is already bring used')
			}
			else{
				alert('Your membership approval is currently pending.')
				// $("input[name=ksola_member_status]").val(0);
			}
		}
	}
	function fail(res) {
		alert("Failed.\nPlease try again later.");
		return false;
	}
	function error(res) {
		alert("An error has occurred. \nPlease try again later.");
		return false;
	}
}




//한국 회원 인증시 api호출
function mo_kor_api() {
	var kor_id = $("input[name=mo_kor_id]").val().trim();
	var kor_pw = $("input[name=mo_kor_pw]").val().trim();
	//제 3자 개인정보 수집에 동의 여부
	var privacy = $("#mo_privacy").is(":checked");

	if(!kor_id) {
		//$(".mo_red_api").eq(0).html("format_id");
		alert("Invalid id");
		return;
	}
	if(!kor_pw) {
		//$(".mo_red_api").eq(0).html("Invalid_password");
		alert("Invalid password");
		return;
	}
	
	if(privacy == false) {
		alert("Please agree to the collection of personal information.");
		$(".mo_red_api").eq(0).html("Please agree to the collection of personal information.");
		return;
	}

	var data = {
		'id' : kor_id,
		'password' : kor_pw 
	};

	$.ajax({
		url			: "signup_api.php",
		type		: "POST",
		data		: data,
		dataType	: "JSON",
		success		: success,
		fail		: fail,
		error		: error
	});

	function success(res) {
		//console.dir(res); return; // null
		var kor_sign = JSON.parse(res.value);
		var user_row = kor_sign.user_row;

		if(kor_sign.code == "N1") {
			alert("아이디를 입력해주세요.");
			//$(".mo_red_api").eq(0).html("아이디를 입력해주세요.");
		} else if(kor_sign.code == "N2") {
			alert("비밀번호를 입력해주세요.");
			//$(".mo_red_api").eq(0).html("비밀번호를 입력해주세요.");
		} else if(kor_sign.code == "N3") {
			alert("가입되지 않은 아이디입니다.");
			//$(".mo_red_api").eq(0).html("가입되지 않은 아이디입니다.");
		} else if(kor_sign.code == "N4") {
			alert("잘못된 비밀번호 입니다.");
			//$(".mo_red_api").eq(0).html("잘못된 비밀번호 입니다.");
		} else if(kor_sign.code == "N5") {
			alert("탈퇴된 아이디 입니다.");
			//$(".mo_red_api").eq(0).html("탈퇴된 아이디 입니다.");
		} else if(kor_sign.code == "N7") {
			alert("이미 인증된 계정입니다.");
			$("[name=kor_id]").val("");
			$("[name=kor_pw]").val("");
			$("#privacy").prop("checked", false);
			$("[name=kor_id]").focus();
		} 
			else if(kor_sign.code == "N6") {
			
			//alert("회원님은 대한비만학회 " + user_row.user_type + " 입니다.");
			//이거 실행했을 때도 이메일 중복체크
			var check_email= email_check(user_row.id);
			if(check_email == false) {
				return;
			}

			$("input[name=ksola_member_type]").val(user_row.user_type);			
			$("input[name=ksola_member_check]").val(user_row.id);
			let ksola_member_status = 0;

			if(user_row.user_type == "인터넷회원"){
					ksola_member_status = 3;
				}else if(user_row.user_type == "평생회원"){
					ksola_member_status = 2;
				}else if(user_row.user_type == "정회원"){
					ksola_member_status = 1;
				}else {
					ksola_member_status = 0;
				}

			const data = {
				email : $("[name=mo_email]").val(),
				ksola_member_status : ksola_member_status,
				ksola_member_check : user_row.id
			}
			if(ksola_member_status != 0 && window.confirm("회원님은 대한비만학회 " + user_row.user_type + " 입니다. \n현재 ID로 ICOMES 2024에 KSSO 회원 인증을 하시겠습니까?")){
				$.ajax({
					url:"/main/ajax/client/ajax_member.php",
					type: "POST",
					data: {
						flag: "memeber_update",
						data
					},
					dataType: "JSON",
					success: function (res) {
						// console.log(res)
						if (res.code == 200) {
							alert("회원인증이 완료되었습니다.")
							$('#mo_membership_status1').prop('checked',true);
							$('#mo_membership_status2').prop('checked',false);
							return;
						} else {
						
							return;
						}
					}
				});
		}
		}
	}

	function fail(res) {
		alert("Failed.\nPlease try again later.");
		return false;
	}

	function error(res) {
		alert("An error has occurred. \nPlease try again later.");
		return false;
	}
}


function non_kor_api(){
	var kor_id = $("input[name=non_kor_id]").val().trim();
	var kor_pw = $("input[name=non_kor_pw]").val().trim();
	//제 3자 개인정보 수집에 동의 여부
	var privacy = $("#privacy1").is(":checked");

	if(!kor_id) {
		alert("Invalid id");
		//$(".red_api").eq(0).html("format_id");
		return;
	}
	if(!kor_pw) {
		alert("Invalid password");
		//$(".red_api").eq(0).html("format_password");
		return;
	}
	
	if(privacy == false) {
		alert("Please agree to the collection of personal information.");
		$(".red_api").eq(0).html("Please agree to the collection of personal information.");
		return;
	}

	var data = {
		'id' : kor_id,
		'pw' : kor_pw 
	};

	$.ajax({
		url			: 'signup_api_eng.php',
		type		: "POST",
		data		: data,
		dataType	: "JSON",
		success		: success,
		fail		: fail,
		error		: error
	});

	function success(res) {
		var kor_sign = JSON.parse(res.value);
		console.log(kor_sign); 
		var user_row = kor_sign.user_row;

		if(kor_sign.code == 100){
			alert('The information you provided does not match our registration records.')
		}else if(kor_sign.code == 300){
			alert('The information you provided does not match our registration records.')
		}else if(kor_sign.code == 200){
			const user_value = kor_sign.value
			if(user_value.status == '승인'){
				$("input[name=ksola_member_check]").val(user_value.email);
				//alert('Membership Verified')

				ksola_member_status = 1;

				const data = {
					email : $("[name=email]").val(),
					ksola_member_status : ksola_member_status,
					ksola_member_check : user_value.email
				}

			if( ksola_member_status != 0 && window.confirm("Would you like to authenticate as a KSSO member with your current ID for ICOMES 2024?")){
			$.ajax({
                url:"/main/ajax/client/ajax_member.php",
                type: "POST",
                data: {
                    flag: "memeber_update",
                    data
                },
                dataType: "JSON",
                success: function (res) {
                    // console.log(res)
                    if (res.code == 200) {
						alert('Membership Verified')
						$('#membership_status3').prop('checked',true);
						$('#membership_status4').prop('checked',false);
                        return;
                    } else {
                       
                        return;
                    }
                }
            });
		}
			}
		}else if (!user_value.status && user_value.code == 'N7'){
				alert('This account is already bring used')
			}
			
			else{
				alert('Your membership approval is currently pending.')
				// $("input[name=ksola_member_status]").val(0);
			}
		}
	}
	function fail(res) {
		alert("Failed.\nPlease try again later.");
		return false;
	}
	function error(res) {
		alert("An error has occurred. \nPlease try again later.");
		return false;
	}
}

	
function kor_api() {
	var kor_id = $("input[name=kor_id]").val().trim();
	var kor_pw = $("input[name=kor_pw]").val().trim();
	//제 3자 개인정보 수집에 동의 여부
	var privacy = $("#privacy").is(":checked");

	if(!kor_id) {
		alert("Invalid id");
		//$(".red_api").eq(0).html("format_id");
		return;
	}
	if(!kor_pw) {
		alert("Invalid password");
		//$(".red_api").eq(0).html("format_password");
		return;
	}
	
	if(privacy == false) {
		alert("Please agree to the collection of personal information.");
		$(".red_api").eq(0).html("Please agree to the collection of personal information.");
		return;
	}

	var data = {
		'id' : kor_id,
		'password' : kor_pw 
	};

	$.ajax({
		url			: "signup_api.php",
		type		: "POST",
		data		: data,
		dataType	: "JSON",
		success		: success,
		fail		: fail,
		error		: error
	});

	function success(res) {
		var kor_sign = JSON.parse(res.value);
		console.log(kor_sign); 
		var user_row = kor_sign.user_row;
		//alert(user_row.user_type); return;

		if(kor_sign.code == "N1") {
			alert("아이디를 입력해주세요.");
		} else if(kor_sign.code == "N2") {
			alert("비밀번호를 입력해주세요.");
		} else if(kor_sign.code == "N3") {
			alert("가입되지 않은 아이디입니다.");
		} else if(kor_sign.code == "N4") {
			alert("잘못된 비밀번호 입니다.");
		} else if(kor_sign.code == "N5") {
			alert("탈퇴된 아이디 입니다.");
		} else if(kor_sign.code == "N7") {
			alert("이미 인증된 계정입니다.");
			$("[name=kor_id]").val("");
			$("[name=kor_pw]").val("");
			$("#privacy").prop("checked", false);
			$("[name=kor_id]").focus();
		} else if(kor_sign.code == "N6") {
			
			//alert("회원님은 대한비만학회 " + user_row.user_type + " 입니다.");
			//이거 실행했을 때도 이메일 중복체크
			var check_email= email_check(user_row.id);
			if(check_email == false) {
				return;
			}

			$("input[name=ksola_member_type]").val(user_row.user_type);			
			$("input[name=ksola_member_check]").val(user_row.id);
			let ksola_member_status = 0;

			if(user_row.user_type == "인터넷회원"){
					ksola_member_status = 3;
				}else if(user_row.user_type == "평생회원"){
					ksola_member_status = 2;
				}else if(user_row.user_type == "정회원"){
					ksola_member_status = 1;
				}else {
					ksola_member_status = 0;
				}

			const data = {
				email : $("[name=email]").val(),
				ksola_member_status : ksola_member_status,
				ksola_member_check : user_row.id
			}
			if( ksola_member_status != 0 && window.confirm("회원님은 대한비만학회 " + user_row.user_type + " 입니다. \n현재 ID로 ICOMES 2024에 KSSO 회원 인증을 하시겠습니까?")){
			$.ajax({
                url:"/main/ajax/client/ajax_member.php",
                type: "POST",
                data: {
                    flag: "memeber_update",
                    data
                },
                dataType: "JSON",
                success: function (res) {
                    // console.log(res)
                    if (res.code == 200) {
						alert("회원인증이 완료되었습니다.")
						$('#membership_status1').prop('checked',true);
						$('#membership_status2').prop('checked',false);
                        return;
                    } else {
                       
                        return;
                    }
                }
            });
		}
		}
	}

	function fail(res) {
		alert("Failed.\nPlease try again later.");
		return false;
	}

	function error(res) {
		alert("An error has occurred. \nPlease try again later.");
		return false;
	}
}

</script>

<section class="container form_section mypage">
    <h1 class="page_title">Mypage</h1>
	<div class="inner">
		<ul class="tab_green">
			<li class="on"><a href="./mypage.php">Account</a></li>
			<li><a href="./mypage_registration.php">Registration</a></li>
			<li><a href="./mypage_abstract.php">Abstract</a></li>
		</ul>
		<div>
			<!-- 230824 다운로드 버튼 추가 -->
            <?php
                if($_SESSION["USER"]["regi_status"]==2 || $_SESSION["USER"]["regi_status"]==5){
            ?>
			<!-- <div class="down_btns">
				<button class="btn blue_btn nowrap book"><img src="https://image.webeon.net/icomes2024/logo/icon_download_white.svg" alt="">
                    <a href="http://184a8b4a1a076d93.kinxzone.com/Abstractbook.pdf" target="_blank">Abstract Book Download</a>
                </button>
				<button class="btn blue_btn nowrap book"><img src="https://image.webeon.net/icomes2024/logo/icon_download_white.svg" alt="">
                    <a href="http://184a8b4a1a076d93.kinxzone.com/Programbook.pdf" target="_blank">Program Book Download</a>
                </button>
			</div> -->
            <?php
                }
            ?>
			<form class="table_wrap" name="modify_form">
			<div class="pc_only">
				<table class="table detail_table">
					<colgroup>
						<col class="col_th">
						<col width="*">
					</colgroup>
					<tbody>
						<tr>
							<th><?=$locale("id")?></th>
							<td>
								<div class="max_normal">
									<input type="text" name="email" value="<?=$user_info["email"]?>" readonly>
								</div>
							</td>
						</tr>
						<tr>
							<th class="nowrap"><?=$locale("password")?></th>
							<td>
								<div class="max_normal">
									<input class="passwords" type="password" id="password" name="password" placeholder="Password">
								</div>
							</td>
						</tr>
						<tr>
							<th class="nowrap">Verify password</th>
							<td>
								<div class="max_normal">
									<input class="passwords" type="password" id="re_password" name="re_password" placeholder="Re-type password">
								</div>
							</td>
						</tr>
						<tr name="country_tr" id="country_tr">
							<th class="nowrap"><span class="red_txt">*</span><?=$locale("country")?></th>
							<td>
								<div class="max_normal">
									<select name="nation_no" class="required" id="nation_no" onChange="country_chk(this)">
										<option value="" selected hidden>Choose </option>
									<?php
										foreach($nation_list AS $list) {
											$nation = $language == "en" ? $list["nation_en"] : $list["nation_ko"];
											if($user_info["nation_no"] == $list["idx"]) {
												echo "<option value='".$list["idx"]."' selected>".$nation."</option>";
											} else {
												echo "<option value='".$list["idx"]."'>".$nation."</option>";
											}
										}
									?>
									</select>
								</div>
							</td>
						</tr>
						<?php 
							if($user_info["nation_no"] == "25"){
								if($user_info["ksola_member_status"] == "1" || $user_info["ksola_member_status"] == "2"){
									$mem_chk = "checked";
									$mem_chk2 = "";
								}else{
									$mem_chk = "";
									$mem_chk2 = "checked";
								}
						?>
								<tr name="ksola_tr" id="ksola_tr"> 
									<th class="nowrap">대한비만학회 회원 여부</th> 
									<td>
										<div class="max_normal">
											<input type="checkbox" class="checkbox" id="membership_status1" disabled <?=$mem_chk ?>> 
											<label for="membership_status1"><i></i>회원</label> 
											<input type="checkbox" class="checkbox" id="membership_status2" disabled <?=$mem_chk2 ?>> 
											<label for="membership_status2"><i></i>비회원</label> 
											<button type="button" class="btn" id="user_check">대한비만학회 회원 인증하기</button>
										</div> 
									</td> 
								 </tr>
							<tr class="ksola_signup">
							<th style="background-color:transparent"></th>
							<td>
								<p>대한비만학회 회원 인증하기</p>
								
								<ul class="simple_join clearfix">
									<li>
										<label for="ksso_id">KSSO ID<span class="red_txt">*</span></label>
										<input id="ksso_id" class="email_id" name="kor_id" type="text" maxlength="60">
									</li>
									<li>
										<label for="ksso_pw">KSSO PW<span class="red_txt">*</span></label>
										<input id="ksso_pw" class="passwords" name="kor_pw" type="password" maxlength="60">
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
											<!-- <a href="javascript:;" class="term2_btn red_txt"> Details ></a> -->
										</label>
									</div>
									<a href="https://eng.kosso.or.kr/account/find_info.php" target="_blank" class="id_pw_find">Find KSSO membership ID/PW</a>
								</div>
								<input hidden name="ksola_member_type"/>
								<input hidden name="ksola_member_check" value="<?=$user_info["ksola_member_check"]?>" />
							</td>
						</tr> 
						<?php 
							}else{ 
								if($user_info["ksola_member_status"] == "1" || $user_info["ksola_member_status"] == "2"){
									$mem_chk = "checked";
									$mem_chk2 = "";
								}else{
									$mem_chk = "";
									$mem_chk2 = "checked";
								}
								?>
							<tr name="non_ksola_tr" id="non_ksola_tr"> 
									<th class="nowrap">KSSO Membership Status</th> 
									<td>
										<div class="max_normal">
											<input type="checkbox" class="checkbox" id="membership_status3" disabled <?=$mem_chk ?>> 
											<label for="membership_status3"><i></i>Member </label> 
											<input type="checkbox" class="checkbox" id="membership_status4" disabled <?=$mem_chk2 ?>> 
											<label for="membership_status4"><i></i>Non-Member</label> 
											<button type="button" class="btn" id="user_check1" style="height:40px;">Membership Verification</button>
										</div> 
									</td> 
								 </tr>
							<tr class="non_ksola_signup">
							<th style="background-color:transparent"></th>
							<td>
								<p>Membership Verification</p>
								<a href="https://eng.kosso.or.kr/account/join_1.php"  class="join_btn" target="_blank">Join KSSO as a Member</a>
								<ul class="simple_join clearfix">
									<li>
										<label for="ksso_id">KSSO ID<span class="red_txt">*</span></label>
										<input id="ksso_id" class="email_id" name="non_kor_id" type="text" maxlength="60">
									</li>
									<li>
										<label for="ksso_pw">KSSO PW<span class="red_txt">*</span></label>
										<input id="ksso_pw" class="passwords" name="non_kor_pw" type="password" maxlength="60">
									</li>
									<li>
										<button onclick="non_kor_api()" type="button" class="btn" style="height:46px !important;">Membership Verification</button>
									</li>
								</ul>
								<div class="clearfix2">
									<div>
										<input type="checkbox" class="checkbox" id="privacy1">
										<label for="privacy1">
											I agree to the collection of personal information by third parties.
											<!-- <a href="javascript:;" class="term2_btn red_txt"> Details ></a> -->
										</label>
									</div>
									<a href="https://www.kosso.or.kr/join/search_id.html" target="_blank" class="id_pw_find" style="text-align: center;">Find KSSO membership ID/PW</a>
								</div>
								<input hidden name="ksola_member_type"/>
								<input hidden name="ksola_member_check" value="<?=$user_info["ksola_member_check"]?>" />
							</td>
						</tr>	
						<?php 	} ?>
						<tr id='name_tr' name="name_tr">
							<th class="nowrap"><span class="red_txt">*</span><?=$locale("name")?></th>
							<td>
								<div class="max_normal">
									<ul class="half_ul">
										<li><input type="text" name="first_name" class="required" value="<?=$user_info["first_name"]?>" placeholder="First Name"></li>	
										<li><input type="text" name="last_name" class="required" value="<?=$user_info["last_name"]?>" placeholder="Last Name"></li>	
									</ul>
								</div>
							</td>
						</tr>
						<?php if($user_info['nation_no'] == "25"){ ?>
							<tr class="korea_only" name="name_tr_kor" id="name_tr_kor">
								<th><span class="red_txt">*</span>성명</th>
								<td>
									<div class="max_normal">
										<ul class="half_ul">
											<li><input name="first_name_kor" type="text" placeholder="이름" maxlength="60" value="<?=$user_info["first_name_kor"]?>"></li>	
											<li><input name="last_name_kor" type="text" placeholder="성" maxlength="60" value="<?=$user_info["last_name_kor"]?>"></li>	
										</ul>
									</div>
								</td>
							</tr>
						<?php }?>
						<tr>
							<th class="nowrap"><span class="red_txt">*</span>Title</th>
							<td class="title_td clearfix">
								<div class="max_normal">
									<select name="title" class="required" id="title">
										<option value="0" <?= (($user_info["title_option"] == 0) ? 'selected' : ''); ?>>Professor</option>
										<option value="1" <?= (($user_info["title_option"] == 1) ? 'selected' : ''); ?>>Dr.</option>
										<option value="2" <?= (($user_info["title_option"] == 2) ? 'selected' : ''); ?>>Mr.</option>
										<option value="3" <?= (($user_info["title_option"] == 3) ? 'selected' : ''); ?>>Ms.</option>
										<option value="4" <?= (($user_info["title_option"] == 4) ? 'selected' : ''); ?>>Others</option>
									</select>
								</div>
								<div class="max_normal <?= (($user_info["title_option"] == 4) ? 'hide_input on' : 'hide_input'); ?>">
									<input type="text" id="title_input" name="title_input" value="<?= (($user_info["title_option"] == 4) ? $user_info["title"] : ""); ?>">
								</div>
							</td>
						</tr>
						<tr name="affiliation_tr" id="affiliation_tr">
							<th class="nowrap" ><span class="red_txt">*</span><?=$locale("affiliation")?></th>
							<td>
								<div class="max_normal">
									<input type="text" name="affiliation" value="<?=$user_info['affiliation']?>">
								</div>
							</td>
						</tr>
						<?php if($user_info['nation_no'] == "25"){ ?>
							<tr class="korea_only" id="affiliation_tr_kor" name="affiliation_tr_kor">
								<th><span class="red_txt">*</span>소속</th>
								<td>
									<div class="max_normal">
										<input type="text" name="affiliation_kor" value="<?= $user_info['affiliation_kor']?>">
									</div>
								</td>
							</tr>
						<?php }?>
						<tr id="department_tr" name="department_tr">
							<th class="nowrap"><span class="red_txt">*</span><?=$locale("department")?></th>
							<td>
								<div class="max_normal">
									<input type="text" name="department" value="<?=$user_info["department"]?>">
								</div>
							</td>
						</tr>
						<?php if($user_info['nation_no'] == "25"){ ?>
							<tr class="korea_only" id="department_tr_kor" name="department_tr_kor">
								<th><span class="red_txt">*</span>부서</th>
								<td>
									<div class="max_normal">
										<input type="text" name="department_kor" value="<?=$user_info["department_kor"]?>">
									</div>
								</td>
							</tr>
						<?php }?>
						<tr>
							<th class="nowrap"><span class="red_txt">*</span>Mobile Phone Number</th>
							<td>
								<div class="max_normal phone">
									<input class="numbers" name="nation_tel" type="text" maxlength="60" value="<?=$nation_tel?>" readonly>
									<input name="phone" id="phone" type="text" maxlength="15" value="<?= $phone ?>">
								</div>
							</td>
						</tr>
						<tr>
							<th class="nowrap">Telephone Number</th>
							<td class="flex">
								<input class="tel_number tel_phone" name="tel_nation_tel" type="text" maxlength="60" value="<?=$nation_tel?>" readonly>
								<input class="tel_numbers tel_phone" name="telephone1" type="text" maxlength="60" value="<?= $_arr_telephone[1] ?>">
								<input class="tel_numbers tel_phone2" name="telephone2" type="text" maxlength="60" value="<?= $_arr_telephone[2] ?>">
							</td>
						</tr>
						<tr>
							<th><span class="red_txt">*</span>Date of Birth</th>
							<td>
								<div class="max_normal">
									<input maxlength="10" name="date_of_birth" type="text" onKeyup="birthChk(this)" placeholder="DD-MM-YYYY" id="datepicker" value="<?=$user_info["date_of_birth"]?>">
								</div>
							</td>
						</tr>
					</tbody>
				</table>	
				<div class="btn_wrap">
					<button type="button" class="btn green_btn long_btn submit_btn" id="pc_submit"><?=$locale("edit_btn")?></button>
				</div>
			</div>
			<div class="mb_only">
				<ul class="sign_list">
					<li>
						<p class="label"><?=$locale("id")?></p>
						<div>
							<input type="text" name="mo_email" value="<?=$user_info["email"]?>" readonly>
						</div>
					</li>
					<li>
						<p class="label"><?=$locale("password")?></p>
						<div>
							<input class="passwords" type="password" id="mo_password" name="mo_password" placeholder="Password">
						</div>
					</li>
					<li>
						<p class="label">Verify password</p>
						<div>
							<input class="passwords" type="password" id="mo_re_password" name="mo_re_password" placeholder="Re-type password">
						</div>
					</li>
					<li>
						<p class="label"><span class="red_txt">*</span><?=$locale("country")?></p>
						<div><select name="mo_nation_no" id="mo_nation_no" class="required" onChange="country_chk(this)">
								<option value="" selected hidden>Choose </option>
							<?php
								foreach($nation_list AS $list) {
									$nation = $language == "en" ? $list["nation_en"] : $list["nation_ko"];
									if($user_info["nation_no"] == $list["idx"]) {
										echo "<option value='".$list["idx"]."' selected>".$nation."</option>";
									} else {
										echo "<option value='".$list["idx"]."'>".$nation."</option>";
									}
								}
							?>
							</select>
						</div>
					</li>
					<?php 
						if($user_info["nation_no"] != "25"){
							if($user_info["ksola_member_status"] == "1" || $user_info["ksola_member_status"] == "2"){
								$mem_chk = "checked";
								$mem_chk2 = "";
							}else{
								$mem_chk = "";
								$mem_chk2 = "checked";
							}
					?>
							<li id="non_ksola_li">
								<p class="label">KSSO Membership Status</p>
								<div>
									<input type="checkbox" class="checkbox" id="mo_membership_status3" disabled <?=$mem_chk ?>>
									<label for="membership_status3"><i></i>Member</label>
									<input type="checkbox" class="checkbox" id="mo_membership_status4" disabled <?=$mem_chk2 ?>>
									<label for="membership_status4"><i></i>Non-Member</label>
									<button type="button" class="btn" id="mo_user_check1" style="height: 36px;">Membership Verification</button>
								</div>
							</li>
							<li class="mo_non_ksola_signup">
								<p>Membership Verification</p>
								<a href="https://eng.kosso.or.kr/account/join_1.php" class="join_btn" target="_blank">Join KSSO as a Member</a>
								<ul class="simple_join clearfix">
									<li>
										<label for="ksso_id">KSSO ID<span class="red_txt">*</span></label>
										<input id="ksso_id" class="email_id" name="mo_non_kor_id" type="text" maxlength="60">
									</li>
									<li>
										<label for="ksso_pw">KSSO PW<span class="red_txt">*</span></label>
										<input id="ksso_pw" class="passwords" name="mo_non_kor_pw" type="password" maxlength="60">
									</li>
									<li>
										<button onclick="mo_non_kor_api()" type="button" class="btn" style="height: 36px;">Membership Verification</button>
									</li>
								</ul>
								<div class="clearfix2">
									<div>
										<input type="checkbox" class="checkbox" id="mo_privacy1">
										<label for="mo_privacy1">
										I agree to the collection of personal information by third parties.
											<!-- <a href="javascript:;" class="term2_btn red_txt"> Details ></a> -->
										</label>
									</div>
									<a href="https://eng.kosso.or.kr/account/join_1.php" target="_blank" class="id_pw_find">Find KSSO membership ID/PW</a>
								</div>
								<input hidden name="ksola_member_type"/>
								<input hidden name="ksola_member_check" value='<?$user_info["ksola_member_check"]?>'/>
							</li>
					<?php
						}else{ 
							if($user_info["ksola_member_status"] == "1" || $user_info["ksola_member_status"] == "2"){
								$mem_chk = "checked";
								$mem_chk2 = "";
							}else{
								$mem_chk = "";
								$mem_chk2 = "checked";
							}
							?>
							<li id="ksola_li">
								<p class="label">대한비만학회 회원 여부</p>
								<div>
									<input type="checkbox" class="checkbox" id="mo_membership_status1" disabled <?=$mem_chk ?>>
									<label for="membership_status1"><i></i>회원</label>
									<input type="checkbox" class="checkbox" id="mo_membership_status2" disabled <?=$mem_chk2 ?>>
									<label for="membership_status2"><i></i>비회원</label>
									<button type="button" class="btn" id="mo_user_check">대한비만학회 회원 인증하기</button>
								</div>
							</li>
							<li class="mo_ksola_signup">
								<p>대한비만학회 회원 인증하기</p>
								<ul class="simple_join clearfix">
									<li>
										<label for="ksso_id">KSSO ID<span class="red_txt">*</span></label>
										<input id="ksso_id" class="email_id" name="mo_kor_id" type="text" maxlength="60">
									</li>
									<li>
										<label for="ksso_pw">KSSO PW<span class="red_txt">*</span></label>
										<input id="ksso_pw" class="passwords" name="mo_kor_pw" type="password" maxlength="60">
									</li>
									<li>
										<button onclick="mo_kor_api()" type="button" class="btn">회원인증</button>
									</li>
								</ul>
								<div class="clearfix2">
									<div>
										<input type="checkbox" class="checkbox" id="mo_privacy">
										<label for="mo_privacy">
											제 3자 개인정보 수집에 동의합니다.
											<!-- <a href="javascript:;" class="term2_btn red_txt"> Details ></a> -->
										</label>
									</div>
									<a href="https://www.kosso.or.kr/join/search_id.html" target="_blank" class="id_pw_find">KSSO 회원 ID/PW 찾기</a>
								</div>
								<input hidden name="ksola_member_type"/>
								<input hidden name="ksola_member_check" value='<?$user_info["ksola_member_check"]?>'/>
							</li>
					<?php	}?>
					<li>
						<p class="label"><span class="red_txt">*</span><?=$locale("name")?></p>
						<div>
							<ul class="half_ul">
								<li>
									<input type="text" name="mo_first_name" class="required" value="<?=$user_info["first_name"]?>" placeholder="First Name">
								</li>
								<li>
									<input type="text" name="mo_last_name" class="required" value="<?=$user_info["last_name"]?>" placeholder="Last Name">
								</li>
							</ul>
						</div>
					</li>
					<?php 
						if($user_info['nation_no'] == "25"){ 
					?>
							<li class="mo_korea_only">
								<p class="label"><span class="red_txt">*</span>성명</p>
								<div>
									<ul class="half_ul">
										<li>
											<input name="mo_first_name_kor" type="text" placeholder="이름" value="<?=$user_info["first_name_kor"]?>" maxlength="60">
										</li>
										<li>
											<input name="mo_last_name_kor" type="text" placeholder="성" value="<?=$user_info["last_name_kor"]?>" maxlength="60">
										</li>
									</ul>
								</div>
							</li>
					<?php
						}
					?>
					<li>
						<p class="label"><span class="red_txt">*</span>Title</p>
						<div>
							<ul class="half_ul">
								<li>
									<select name="mo_title" class="required" id="mo_title">
										<option value="0" <?= (($user_info["title_option"] == 0) ? 'selected' : ''); ?>>Professor</option>
										<option value="1" <?= (($user_info["title_option"] == 1) ? 'selected' : ''); ?>>Dr.</option>
										<option value="2" <?= (($user_info["title_option"] == 2) ? 'selected' : ''); ?>>Mr.</option>
										<option value="3" <?= (($user_info["title_option"] == 3) ? 'selected' : ''); ?>>Ms.</option>
										<option value="4" <?= (($user_info["title_option"] == 4) ? 'selected' : ''); ?>>Others</option>
									</select>
								</li>
								<li class="<?= (($user_info["title_option"] == 4) ? 'hide_input on' : 'hide_input'); ?>">
									<input type="text" id="mo_title_input" name="mo_title_input" value="<?= (($user_info["title_option"] == 4) ? $user_info["title"] : ""); ?>">
								</li>
						</div>
					</li>
					<li>
						<p class="label"><span class="red_txt">*</span><?=$locale("affiliation")?></p>
						<div>
							<input type="text" name="mo_affiliation" value="<?=$user_info["affiliation"]?>">
						</div>
					</li>
					<?php 
						if($user_info['nation_no'] == "25"){ 
					?>
							<li class="mo_korea_only">
								<p class="label"><span class="red_txt">*</span>소속</p>
								<div>
									<input type="text" name="mo_affiliation_kor" value="<?= $user_info['affiliation_kor']?>">
								</div>
							</li>
					<?php
						}
					?>
					<li>
						<p class="label"><span class="red_txt">*</span><?=$locale("department")?></p>
						<div>
							<input type="text" name="mo_department" value="<?=$user_info["department"]?>">
						</div>
					</li>
					<?php 
						if($user_info['nation_no'] == "25"){ 
					?>
							<li class="mo_korea_only">
								<p class="label"><span class="red_txt">*</span>부서</p>
								<div>
									<input type="text" name="mo_department_kor" value="<?= $user_info['department_kor']?>">
								</div>
							</li>
					<?php
						}
					?>
					<li>
						<p class="label"><span class="red_txt">*</span><?=$locale("phone")?></p>
						<div class="phone_form clearfix">
							<input class="numbers" name="mo_nation_tel" type="text" value="<?=$nation_tel?>">
							<input name="mo_phone" type="text" value="<?= $phone ?>">
						</div>
					</li>
					<li>
						<p class="label">Telephone Number</p>
						<div class="phone_form clearfix flex">
							<input class="tel_number tel_phone" name="mo_tel_nation_tel" type="text" maxlength="60" value="<?=$nation_tel?>">
							<input class="tel_numbers tel_phone" name="mo_telephone1" type="text" maxlength="60" value="<?= $_arr_telephone[1] ?>">
							<input class="tel_numbers tel_phone2" name="mo_telephone2" type="text" maxlength="60" value="<?= $_arr_telephone[2] ?>">
						</div>
					</li>
					<li>
						<p class="label"><span class="red_txt">*</span>Date of Birth</p>
						<div>
							<input maxlength="10" name="mo_date_of_birth" type="text" placeholder="YYYY-MM-DD" id="mb_datepicker" onKeyup="birthChk(this)" value="<?=$user_info["date_of_birth"]?>">
						</div>
					</li>
				</ul>
				<div class="btn_wrap">
					<button type="button" class="btn green_btn long_btn submit_btn" id="mo_submit"><?=$locale("edit_btn")?></button>
				</div>
			</div>
			<input type="hidden" name="ksola_member_check"  value='<?$user_info["ksola_member_check"]?>'>
		</form>
			<input type="hidden" name="nation_tel" value="<?= $nation_tel ?>">	
			<input type="hidden" name="check_type" value="1">	
		</div>
	</div>
</section>
<script src="./js/script/client/member.js"></script>
<script>
$(document).ready(function() {
    // <!-- $('.book').on('click', function(event) {
    //     event.preventDefault();
    //     alert('Updates are planned.');
    //     return false;
    // }); -->

	$('#user_check').on("click", ()=>{
		$(".ksola_signup").toggleClass("on");
	})

	$('#mo_user_check').on("click", ()=>{
		$(".mo_ksola_signup").toggleClass("on");
	})
	

	$('#user_check1').on("click", ()=>{
		$(".non_ksola_signup").toggleClass("on");
	})

	$('#mo_user_check1').on("click", ()=>{
		$(".mo_non_ksola_signup").toggleClass("on");
	})

    //비밀번호 입력 시 비밀번호 필수값으로 전환
    $("#password, #re_password").on("change", function() {
        $(this).attr("name", $(this).attr("id"));
        $("#password, #re_password").addClass("required");
    });

	// Title 변경 시
	$("select[name=title], select[name=mo_title]").on("change", function(){
		var _target_val = parseInt($(this).val());
		if (_target_val == 4) {
			$("[name=title_input], [name=mo_title_input]").show();
			$("[name=title_input], [name=mo_title_input]").parent().addClass("on");
		} else {
			$("[name=title_input], [name=mo_title_input]").hide();
			$("[name=title_input], [name=mo_title_input]").parent().removeClass("on");
		}
	});

	$(".korean_only").on("click", function(){
		var url = "./pre_registration_korean_only.php";
		window.open(url,"Registration Receipt","width=793, height=2000, top=30, left=30");
	});

	$("input[name=first_name_kor], input[name=last_name_kor], input[name=mo_first_name_kor], input[name=mo_last_name_kor]").on("keyup", function() {
		const regexp = /[a-z0-9]|[ \[\]{}()<>?|`~!@#$%^&*-_+=,.;:\"'\\]/g;
		v = $(this).val();
		if (regexp.test(v)) {
			alert("한글만 입력가능 합니다.");
			$(this).val(v.replace(regexp, ''));
		}
	});

	$("input[name=affiliation_kor], input[name=department_kor], input[name=mo_affiliation_kor], input[name=mo_department_kor]").on("keyup", function() {
		const regexp = /[a-z0-9]|[ \[\]{}()<>?|`~$%+=,.;:\"'\\]/g;
		v = $(this).val();
		if (regexp.test(v)) {
			alert("한글만 입력가능 합니다.");
			$(this).val(v.replace(regexp, ''));
		}
	});

	$("input[name=phone], input[name=mo_phone]").keyup(function (event) {
		const regexp = /[^0-9]/g;
		v = $(this).val();
		if (regexp.test(v)) {
			$(this).val(v.replace(regexp, ''));
		}
	});

	$(document).on("click", "#pc_submit", function(){
		//var formData = $("form[name=modify_form]").serializeArray();
		var nation_no = document.getElementById("nation_no").value;
		var nation_tel = $("input[name=nation_tel]").val();

		var pw = $("input[name=password]").val();
		var pw2= $("input[name=re_password]").val();
		
		if (pw || pw2) {
			check = pw_check(1, "password", "re_password");
			if(check == false) return;
			check = pw_check(2, "password", "re_password");
			if(check == false) return;
		}

		var first_name = $("input[name=first_name]").val();
		var last_name = $("input[name=last_name]").val();

		check = name_check("first_name");
		if(check == false) return;
		check = name_check("last_name");
		if(check == false) return;

		var country = $("#nation_no option:selected").text();

		var title = $("#title option:selected").val();
		
		check = name_check("affiliation");
		if(check == false) return;
		var affiliation = $("input[name=affiliation]").val();

		check = name_check("department");
		if(check == false) return;
		var department = $("input[name=department]").val();

		check = name_check("phone");
		if(check == false) return;
		var phone = $("input[name=phone]").val();
		//var resultPhone = $("[name=nation_mobile] :selected").text().trim();
		var resultPhone = nation_tel+'-'+phone;
		
		/*
		check = name_check("telephone_num1");
		if(check == false) return;
		*/
		var tele1 = $("input[name=telephone1]").val();
		/*
		check = name_check("telephone_num2");
		if(check == false) return;
		*/
		var tele2 = $("input[name=telephone2]").val();

		//var resultTel = $("[name=nation_tel] :selected").text().trim();
		//var resultTel = nation_tel+'-'+tele1+'-'+tele2;
		// TelePhone
		var resultTel = "";
		
		if (!tele1 && tele2) {
			check = name_check("telephone1");
			if(check == false) return;
		} else if (tele1 && !tele2) {
			check = name_check("telephone2");
			if(check == false) return;
		}

		if (tele1 && tele2) {		
			resultTel = nation_tel+'-'+tele1+'-'+tele2;
		} else {
			resultTel = "";
		}
		console.log(resultTel);
		var date_of_birth = $("input[name=date_of_birth]").val();
		if(date_of_birth == null || date_of_birth == ""){
			alert("Invalid date of birth");
			return;
		}
		var regex = /[^0123456789-]/g;
		if(regex.test(date_of_birth)){
			alert("Please enter only numbers in the date_of_birth field");
			return;
		}
		var regex2 = /^(\d{2})-(\d{2})-(\d{4})$/;
		if(!regex2.test(date_of_birth)){
			alert("Please check date_of_birth format \nex 01-01-1999");
			return;
		}

		// kor
		if(nation_no == "25"){
			var first_name_kor = $("input[name=first_name_kor]").val();
			var last_name_kor = $("input[name=last_name_kor]").val();
			check = name_check("first_name_kor");
			if(check == false) return;
			check = name_check("last_name_kor");
			if(check == false) return;

			var affiliation_kor = $("input[name=affiliation_kor]").val();
			check = name_check("affiliation_kor");
			if(check == false) return;

			var department_kor = $("input[name=department_kor]").val();
			check = name_check("department_kor");
			if(check == false) return;	
			
			const membership_status1 = $("#membership_status1").prop("checked");
			const mo_membership_status1 = $("#mo_membership_status1").prop("checked");

			const membership_status3 = $("#membership_status3").prop("checked");
			const mo_membership_status3 = $("#mo_membership_status3").prop("checked");

			var ksola_member_type = $("input[name=ksola_member_type]").val();	
			var ksola_member_check = $("input[name=ksola_member_check]").val();	

			if(membership_status1 || mo_membership_status1 || membership_status3 || mo_membership_status3){
				ksola_member_status = 1;
			}else{
				if(ksola_member_type == "인터넷회원"){
					ksola_member_status = 3;
				}else if(ksola_member_type == "평생회원"){
					ksola_member_status = 2;
				}else if(ksola_member_type == "정회원"){
					ksola_member_status = 1;
				}else {
					ksola_member_status = 0;
				}
			}	
		}
		var titleInput = $("[name=title_input]").val();
		if ((title == 4) && titleInput == "") {
			alert("Invalid title others");
			return;
		}
		var email = $("[name=email]").val();

		var formData = {
			"email"					: email,
			"nation_no"				: nation_no,
			"first_name"			: first_name,
			"last_name"				: last_name,
			"affiliation"			: affiliation,
			"department"			: department,
			"nation_tel"			: nation_tel,
			"phone"					: resultPhone,
			"date_of_birth"			: date_of_birth,
			"title"					: title,
			"title_input"			: titleInput,
			"telephone"				: resultTel
		};

		if (pw && pw2) {
			formData['password'] = pw;
		}
		
		if (nation_no == "25") {
			formData['first_name_kor']	= first_name_kor;
			formData['last_name_kor']	= last_name_kor;
			formData['department_kor']	= department_kor;
			formData['affiliation_kor']	= affiliation_kor;
			formData['ksola_member_status']	= ksola_member_status;
			formData['ksola_member_check']	= ksola_member_check;
		}
		/*
		var process = inputCheck(formData, checkType);
		var data = process.data;

		var status = process.status;
		
        if(status) {
		*/
		console.log(formData);
            if(confirm(locale(language.value)("account_modify_msg"))) {
                $.ajax({
                    url : PATH+"ajax/client/ajax_member.php",
                    type : "POST",
                    data : {
                        flag : "update",
                        data : formData
                    },
                    dataType : "JSON",
                    success : function(res){
                        if(res.code == 200) {
                            alert(locale(language.value)("complet_account_modify"));
                            location.reload();
                        } else if(res.code == 400) {
                            alert(locale(language.value)("error_account_modify"));
                            return false;
                        } else {
                            alert(locale(language.value)("reject_msg"))
                            return false;
                        }
                    }
                });
		    }
        /*}*/
	});
	$(document).on("click", "#mo_submit", function(){
		var nation_no = document.getElementById("nation_no").value;
		var nation_tel = $("input[name=nation_tel]").val();
		
		var pw = $("input[name=mo_password]").val();
		var pw2= $("input[name=mo_re_password]").val();
		
		if (pw || pw2) {
			check = pw_check(1, "mo_password", "mo_re_password");
			if(check == false) return;
			check = pw_check(2, "mo_password", "mo_re_password");
			if(check == false) return;
		}

		var first_name = $("input[name=mo_first_name]").val();
		var last_name = $("input[name=mo_last_name]").val();

		check = name_check("mo_first_name");
		if(check == false) return;
		check = name_check("mo_last_name");
		if(check == false) return;

		var country = $("#mo_nation_no option:selected").text();

		var title = $("#mo_title option:selected").val();
		
		check = name_check("mo_affiliation");
		if(check == false) return;
		var affiliation = $("input[name=mo_affiliation]").val();

		check = name_check("mo_department");
		if(check == false) return;
		var department = $("input[name=mo_department]").val();

		check = name_check("mo_phone");
		if(check == false) return;
		var phone = $("input[name=mo_phone]").val();
		//var resultMobilePhone = $("[name=mo_nation_mobile] :selected").text().trim();
		var resultMobilePhone = nation_tel+'-'+phone;
		/*
		check = name_check("mo_telephone_num1");
		if(check == false) return;
		*/
		var tele1 = $("input[name=mo_telephone1]").val();
		/*
		check = name_check("mo_telephone_num2");
		if(check == false) return;
		*/
		var tele2 = $("input[name=mo_telephone2]").val();
		//var resultMobileTel = $("[name=mo_nation_tel] :selected").text().trim();
		// TelePhone
		var resultMobileTel = "";
		
		if (!tele1 && tele2) {
			check = name_check("telephone1");
			if(check == false) return;
		} else if (tele1 && !tele2) {
			check = name_check("telephone2");
			if(check == false) return;
		}

		if (tele1 && tele2) {		
			resultMobileTel = nation_tel+'-'+tele1+'-'+tele2;
		} else {
			resultMobileTel = "";
		}

		var date_of_birth = $("input[name=mo_date_of_birth]").val();
		if(date_of_birth == null || date_of_birth == ""){
			alert("Invalid date of birth");
			return;
		}

		var regex = /[^0123456789-]/g;
		if(regex.test(date_of_birth)){
			alert("Please enter only numbers in the date_of_birth field");
			return;
		}

		var regex2 = /^(\d{2})-(\d{2})-(\d{4})$/;
		if(!regex2.test(date_of_birth)){
			alert("Please check date_of_birth format \nex 01-01-1999");
			return;
		}

		// kor
		if(nation_no == "25"){
			var first_name_kor = $("input[name=mo_first_name_kor]").val();
			var last_name_kor = $("input[name=mo_last_name_kor]").val();
			check = name_check("mo_first_name_kor");
			if(check == false) return;
			check = name_check("mo_last_name_kor");
			if(check == false) return;

			var affiliation_kor = $("input[name=mo_affiliation_kor]").val();
			check = name_check("mo_affiliation_kor");
			if(check == false) return;

			var department_kor = $("input[name=mo_department_kor]").val();
			check = name_check("mo_department_kor");
			if(check == false) return;

			const membership_status1 = $("#membership_status1").prop("checked");
			const mo_membership_status1 = $("#mo_membership_status1").prop("checked");

			const membership_status3 = $("#membership_status3").prop("checked");
			const mo_membership_status3 = $("#mo_membership_status3").prop("checked");

			var ksola_member_type = $("input[name=ksola_member_type]").val();	
			var ksola_member_check = $("input[name=ksola_member_check]").val();	

			if(membership_status1 || mo_membership_status1 || membership_status3 || mo_membership_status3){
				ksola_member_status = 1;
			}else{
				if(ksola_member_type == "인터넷회원"){
					ksola_member_status = 3;
				}else if(ksola_member_type == "평생회원"){
					ksola_member_status = 2;
				}else if(ksola_member_type == "정회원"){
					ksola_member_status = 1;
				}else {
					ksola_member_status = 0;
				}
			}	
		}
		var titleInput = $("[name=title_input]").val();
		if ((title == 4) && titleInput == "") {
			alert("Invalid title others");
			return;
		}
		var email = $("[name=email]").val();

		var formData = {
			"email"					: email,
			"nation_no"				: nation_no,
			"first_name"			: first_name,
			"last_name"				: last_name,
			"affiliation"			: affiliation,
			"department"			: department,
			"nation_tel"			: nation_tel,
			"phone"					: resultMobilePhone,
			"date_of_birth"			: date_of_birth,
			"title"					: title,
			"title_input"			: titleInput,
			"telephone"				: resultMobileTel,
		};

		if (pw && pw2) {
			formData['password'] = pw;
		}
		
		if (nation_no == "25") {
			formData['first_name_kor']	= first_name_kor;
			formData['last_name_kor']	= last_name_kor;
			formData['department_kor']	= department_kor;
			formData['affiliation_kor']	= affiliation_kor;
			formData['ksola_member_status']	= ksola_member_status;
			formData['ksola_member_check']	= ksola_member_check;
		}

		/*
		var process = inputCheck(formData,checkType);
		var data = process.data;

		var status = process.status;
        if(status) {
		*/
            if(confirm(locale(language.value)("account_modify_msg"))) {
                $.ajax({
                    url : PATH+"ajax/client/ajax_member.php",
                    type : "POST",
                    data : {
                        flag : "update",
                        data : formData
                    },
                    dataType: "JSON",
                    success: function(res) {
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
        //}
	});

});

function country_chk(obj){

	if(obj.value == "25"){
		var html = '';
		html +=	'<tr class="korea_only" id="name_tr_kor" name="name_tr_kor">';
		html += '<th><span class="red_txt">*</span>성명</th>';
		html +=	'<td>';
		html += '<div class="max_normal">';
		html += '<ul class="half_ul">';
		html += '<li><input name="first_name_kor" type="text" placeholder="이름" maxlength="60" value="<?=$user_info["first_name_kor"]?>"></li>';
		html +=	'<li><input name="last_name_kor" type="text" placeholder="성" maxlength="60" value="<?=$user_info["last_name_kor"]?>"></li>';
		html += '</ul>';
		html += '</div>';
		html += '</td>';
		html += '</tr>';
		//var target = document.getElementById("name_tr");
		$("#name_tr").after(html);

		html = '<tr id="ksola_tr" name="ksola_tr">';
		html += '<th class="nowrap">대한비만학회 회원 여부</th>';
		html += '<td>';
		html += '<div class="max_normal">';
		html += '<input type="checkbox" class="checkbox" id="membership_status1" disabled <?=$mem_chk ?>> ';
		html += '<label for="membership_status1"><i></i>회원</label> ';
		html += '<input type="checkbox" class="checkbox" id="membership_status2" disabled <?=$mem_chk2 ?>> ';
		html += '<label for="membership_status2"><i></i>비회원</label> ';
		html += '</div> ';
		html += '</td> ';	
		html += '</tr> ';	
		$("#country_tr").after(html);

		html = '<tr class="korea_only" name="affiliation_tr_kor" id="affiliation_tr_kor">';
		html += '<th><span class="red_txt">*</span>소속</th>';
		html += '<td>';
		html += '<div class="max_normal">';
		html += '<input type="text" name="affiliation_kor" value="<?= $user_info["affiliation_kor"]?>">';
		html += '</div>';
		html += '</td>';
		html += '</tr>';
		$("#affiliation_tr").after(html);

		html = '<tr class="korea_only" name="department_tr_kor" id="department_tr_kor">';
		html += '<th><span class="red_txt">*</span>부서</th>';
		html += '<td>';
		html += '<div class="max_normal">';
		html += '<input type="text" name="department_kor" value="<?= $user_info["department_kor"]?>">';
		html += '</div>';
		html += '</td>';
		html += '</tr>';
		$("#department_tr").after(html);
		$(".mo_korea_only").show();
		$("#ksola_li").show();
	}else{
		$(".mo_korea_only").hide();
		$("#ksola_li").hide();
		$("#name_tr_kor").remove();
		$("#ksola_tr").remove();
		$("#affiliation_tr_kor").remove();
		$("#department_tr_kor").remove();
	}
}


function pw_check(i, password, password2) {
	var pw1 = $("input[name="+password+"]").val();
	var pw1_len = pw1.trim().length;
	pw1 = (typeof(pw1) != "undefined") ? pw1 : null;
	
	var pw2 = $("input[name="+password2+"]").val();
	var pw2_len = pw2.trim().length;
	pw2 = (typeof(pw2) != "undefined") ? pw2 : null;

	if(i==1) {
		if(!pw1 || pw1_len <= 0) {
			$("input[name="+password+"]").focus();
			alert("Invalid passwrod");
			return false;
		}
	} else {
		if(!pw2 || pw2_len <= 0) {
			$("input[name="+password2+"]").focus();
			alert("Invalid passwrod");
			return false;
		}
	}
	if(pw1_len > 0 && pw2_len > 0) {
		if(pw1 !== pw2) {
			$("input[name="+password+"]").focus();
			alert("inconsistency passwrod");
			return false;
		}
	}
}

function name_check(name, mo) {
	var first_name = $("input[name="+name+"]").val();
	console.log(first_name + name);
	var first_name_len = first_name.trim().length;
	first_name = (typeof(first_name) != "undefined") ? first_name : null;

	if(!first_name || first_name_len <= 0) {
		$("input[name="+name+"]").focus();
		if(mo === "mo") {
			name = name.replace("mo_", "");
		}
		if(name === "short_input") {
			alert("Invalid Others");
		} else {
			if(name == "first_name") {
				name = "first name";
			} else if(name == "last_name") {
				name = "last name";
			} else if(name == "name_kor") {
				name = "name (KOR)";
			} else if(name == "affiliation_kor") {
				name = "affiliation (KOR)";
			} else if(name == "licence_number") {
				name = "licence number";
			} else if(name == "nutritionist_number") {
				name = "nutritionist number";
			} else if(name == "specialty_number") {
				name = "specialty number";
			} 
			alert("Invalid "+name);
		}
		return false;
	}
	return true;
}
function birthChk(input) {

	var value = input.value.replace(/[^0-9]/g, "").substr(0,8); // 입력된 값을 숫자만 남기고 모두 제거
    if (value.length === 8) {
      var regex = /^(\d{2})(\d{2})(\d{4})$/;
      var formattedValue = value.replace(regex, "$1-$2-$3");
      input.value = formattedValue;
    }else{
		input.value = value;
    }

}
</script>
<?php include_once('./include/footer.php');?>