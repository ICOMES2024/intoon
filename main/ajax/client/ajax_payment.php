<?php include_once("../../common/common.php")?>
<?php
	if($_POST["flag"] == "payment_eximbay") {

		$insert_payment_query2 =	"
									INSERT payment_test
									SET
										value = '".json_encode($_POST)."'
									";
		$insert2 = sql_query($insert_payment_query2);


		$user_idx = $_SESSION["USER"]["idx"];

		$rescode = $_POST["rescode"];
		$fgkey = $_POST["fgkey"];
		$payment_no = $_POST["ref"];
		$authcode = $_POST["authcode"];
		$total_price = $_POST["amt"];
		$payment_type = $_POST["paymethod"];
		$currency = $_POST["cur"];
		$resdt = $_POST["resdt"];
		$resmsg = $_POST["resmsg"];

		switch($payment_type) {
			case "P101" :
				$payment_type_name = "VISA";
				$payment_type_number = 0;
				break;
			case "P102" :
				$payment_type_name = "MasterCard";
				$payment_type_number = 0;
				break;
			case "P103" :
				$payment_type_name = "AMEX";
				$payment_type_number = 0;
				break;
			case "P104" :
				$payment_type_name = "JCB";
				$payment_type_number = 0;
				break;

			case "P105" :
				$payment_type_name = "UnionPay 비인증";
				$payment_type_number = 0;
				break;
			case "P106" :
				$payment_type_name = "Diners";
				$payment_type_number = 0;
				break;
			case "P107" :
				$payment_type_name = "Discover";
				$payment_type_number = 0;
				break;
			case "P001" :
				$payment_type_name = "Paypal";
				$payment_type_number = 3;
				break;
		}

		$registration_no = "";
		if(strpos($payment_no,"N")){
			$registration_no = intval(explode("N",$payment_no)[1]);
		}

		//if($rescode == "0000" && strtolower($resmsg) === "success.") {
		if($rescode == "0000") {
			$insert_payment_query =	"
									INSERT payment
									SET
										`type` = 1,
										payment_no = '{$payment_no}',
										access_no = '{$authcode}',
										fgkey = '{$fgkey}',
										payment_type_name = '{$payment_type_name}',
										payment_type = {$payment_type_number},
										payment_date = '{$resdt}',
										payment_status = 2,
										deposit_price = '{$total_price}',
										balance_price = 0,
										register = '{$user_idx}',
										register_date = NOW(),
										etc2 = '".json_encode($_POST)."'
									";
			if($currency == "USD") {
				$insert_payment_query .=	" , total_price_us = '{$total_price}' ";
			} else if($currency == "KRW") {
				$tax = $total_price * 0.1;
				$supply_price = $total_price - $tax;
				$insert_payment_query .=	" 
											, payment_price_kr = {$supply_price}
											, tax_kr = {$tax}
											, total_price_kr = {$total_price}
											";
			}
		}

		$insert = sql_query($insert_payment_query);

		if($insert) {
			$sql = "SELECT LAST_INSERT_ID() AS last_idx";
			$payment_idx = sql_fetch($sql)['last_idx'];

			if($registration_no != ""){
				$update_request =	"
									UPDATE request_registration 
									SET
										status = 2,
										payment_no = {$payment_idx}
									WHERE idx = {$registration_no}
									AND payment_no IS NULL
									AND is_deleted = 'N'
									";

				sql_query($update_request);
			}

			$user_idx = $_SESSION["USER"]["idx"];
			$check_user_query =	"
										SELECT
											idx, email, first_name, last_name, title
										FROM member
										WHERE idx = {$user_idx}
										AND is_deleted = 'N'
									";
		
			$check_user = sql_fetch($check_user_query);

			$name = $check_user["last_name"]." ".$check_user["first_name"];
			$email = $check_user["email"];

			$regustration_query = "SELECT
										idx, attendance_type, is_score, nation_no, phone,
										member_type, ksso_member_status, registration_type, affiliation, department,
										licence_number, specialty_number, nutritionist_number, academy_number, register_path,
										etc4, welcome_reception_yn, day2_breakfast_yn, day2_luncheon_yn, day3_breakfast_yn, day3_luncheon_yn, 
										conference_info, price,
										DATE_FORMAT(register_date, '%m-%d-%Y %h:%i:%s') AS register_date
									FROM request_registration
									WHERE idx= {$registration_no}";

			$data = sql_fetch($regustration_query);

			$data["name_title"] = $check_user["title"] ?? "";
			$data["pay_type"] = "card";
			$data["payment_date"] = date("Y-m-d H:i:s");

			//mailer("en", "payment", $name , $email, "[ICOMES] Payment Confirmation", date("Y-m-d H:i:s"), "", "", 1, "", "", "", "", "", "", "", $data);

			echo json_encode(array(
					"code"=>200,
					"msg"=>"success",
					"name"=>$name,
					"email"=>$email,
					"data"=>$data,
					"flag"=>"payment_inicis"
			));
			exit;
		} else {
			echo json_encode(array(
				"code"=>400,
				"msg"=>"error"
			));
			exit;
		}
	} else if($_POST["flag"] == "payment_inicis") {
		
		$moid			= $_POST["moid"];
		$tid			= $_POST["tid"];
		$method			= $_POST["method"];
		$price			= $_POST["price"];
		$payment_date	= $_POST["payment_date"];
		$register		= $_SESSION["USER"]["idx"];

		$registration_no = "";
		if(strpos($moid,"N")){
			$registration_no = intval(explode("N",$moid)[1]);
		}

		//데이터베이스 저장
		$insert_payment_query = "INSERT payment
								SET
									`type` = 0,
									payment_no = '{$moid}',
									access_no = '{$tid}',
									payment_type = 0,
									payment_type_name = '', 
									deposit_price = {$price},
									balance_price = 0,
									payment_status = 2,
									payment_price_kr = ".($price - ($price*0.1))." ,
									tax_kr = ".($price*0.1).",
									total_price_kr = {$price},
									payment_date = '{$payment_date}',
									register = {$register},
									register_date = NOW(),
									etc2 = '".json_encode($_POST)."'
								";
		$res = sql_query($insert_payment_query);

		if($res) {
			$sql = "SELECT LAST_INSERT_ID() AS last_idx";
			$payment_idx = sql_fetch($sql)['last_idx'];

			if($registration_no != ""){
				$update_request =	"
									UPDATE request_registration 
									SET
										`status` = 2, 
										payment_no = {$payment_idx}
									WHERE idx = {$registration_no}
									#AND payment_no IS NULL
									AND is_deleted = 'N'
									";

				sql_query($update_request);
			}

			$user_idx = $_SESSION["USER"]["idx"];
			$check_user_query =	"
										SELECT
											idx, email, first_name, last_name, title
										FROM member
										WHERE idx = {$user_idx}
										AND is_deleted = 'N'
									";
		
			$check_user = sql_fetch($check_user_query);

			$name = $check_user["last_name"]." ".$check_user["first_name"];
			$email = $check_user["email"];

			$regustration_query = "SELECT
										idx, attendance_type, is_score, nation_no, phone,
										member_type, ksso_member_status, registration_type, affiliation, department,
										licence_number, specialty_number, nutritionist_number, academy_number, register_path,
										etc4, welcome_reception_yn, day2_breakfast_yn, day2_luncheon_yn, day3_breakfast_yn, day3_luncheon_yn, 
										conference_info, price,
										DATE_FORMAT(register_date, '%m-%d-%Y %h:%i:%s') AS register_date
									FROM request_registration
									WHERE idx= {$registration_no}";

			$data = sql_fetch($regustration_query);

			$data["name_title"] = $check_user["title"] ?? "";
			$data["pay_type"] = "card";
			$data["payment_date"] = date("Y-m-d H:i:s");

			//mailer("en", "payment", $name , $email, "[ICOMES] Payment Confirmation", date("Y-m-d H:i:s"), "", "", 1, "", "", "", "", "", "", "", $data);

			echo json_encode(array(
					"code"=>200,
					"msg"=>"success",
					"name"=>$name,
					"email"=>$email,
					"data"=>$data,
					"flag"=>"payment_inicis"
			));
			exit;
		} else {
			echo json_encode(array(
				"code"=>400,
				"msg"=>"error"
			));
			exit;
		}
	}
?>