<?php include_once("../../common/common.php");?>
<?php
if($_POST["flag"] == "onsite") {
    $data = isset($_POST["data"]) ? $_POST["data"] : "";

    // ksso 회원 상태(0:비회원, 1:정회원, 2:평생회원)
    $ksso_member_status = $data["ksso_member_status"] ?? "0";
    // ksso 회원 id
    $ksso_member_check = $data["ksso_member_check"] ?? "";

    // member
    $nation_no = $data["nation_no"] ?? "";
    $email = $data["email"] ?? "";
    $password = $data["password"] ?? "";
    $password_hash = password_hash($password, PASSWORD_DEFAULT);
    $first_name = $data["first_name"] ?? "";
    $first_name_kor = $data["first_name_kor"] ?? "";
    $last_name = $data["last_name"] ?? "";
    $last_name_kor = $data["last_name_kor"] ?? "";
    $affiliation = $data["affiliation"] ?? "";
    $affiliation_kor = $data["affiliation_kor"] ?? "";
    $department = $data["department"] ?? "";
    $department_kor = $data["department_kor"] ?? "";
    $phone = $data["phone"] ?? "";
    $date_of_birth = $data["date_of_birth"] ?? "";

    // registration
    $participation_type = $data["participation_type"] ?? "";

    switch($participation_type){
        case "Committee":
            $attendance_type = 0;
            break;
        case "Speaker":
            $attendance_type = 1;
            break;
        case "Chairperson":
            $attendance_type = 2;
            break;
        case "Panel":
            $attendance_type = 3;
            break;
        case "Participants":
            $attendance_type = 4;
            break;
        case "Sponsor":
            $attendance_type = 5;
            break;
    }
    $occupation = $data["occupation"] ?? "";
    $occupation_other_type = $data["occupation_other_type"] ?? "";
    $member_type = $data["member_type"] ?? "";
    $member_other_type = $data["member_other_type"] ?? "";
    $is_score = $data["is_score"] ?? "";
    $licence_number = $data["licence_number"] ?? "";
    $nutritionist_number = $data["nutritionist_number"] ?? "";
    $dietitian_number = $data["dietitian_number"] ?? "";

    $welcome_reception_yn = $data["welcome_reception_yn"] !== null ? "Y" : "N";
    $day2_breakfast_yn    = $data["day2_breakfast_yn"] !== null ? "Y" : "N";
    $day2_luncheon_yn     = $data["day2_luncheon_yn"] !== null ? "Y" : "N";
    $day3_breakfast_yn    = $data["day3_breakfast_yn"] !== null ? "Y" : "N";
    $day3_luncheon_yn     = $data["day3_luncheon_yn"] !== null ? "Y" : "N";
    $conference_info = implode("*", $data["conference_info_arr"]);
    $price = $data["price"] ?? "";

    $insert_member_query =	"
                                INSERT member
                                SET
                                    nation_no = {$nation_no},
                                    email = '{$email}',
                                    password = '{$password_hash}',
                                    last_name = '{$last_name}',
                                    first_name = '{$first_name}',
                                    affiliation = '{$affiliation}',
                                    department = '{$department}',
                                    phone = '{$phone}', 
                                    date_of_birth = '{$date_of_birth}',
                                    terms_access = 'Y',
                                    terms_access_date = NOW(),
                                    privacy_access = 'Y',
                                    privacy_access_date = NOW(),
                                    email_certified = 'Y',
                                    ksola_member_status = '{$ksso_member_status}'
                            ";

    // 국내 일 때
    if($nation_no == 25) {
        $insert_member_query .= ", last_name_kor = '{$last_name_kor}' ";
        $insert_member_query .= ", first_name_kor = '{$first_name_kor}' ";
        $insert_member_query .= ", affiliation_kor = '{$affiliation_kor}' ";
        $insert_member_query .= ", department_kor = '{$department_kor}' ";
    }

    if($ksso_member_status == 1 || $ksso_member_status == 2) {
        $insert_member_query .= ", ksola_member_check = '{$ksso_member_check}' ";
    }

    sql_query($insert_member_query);
    $insert_member =  sql_insert_id();

    $member_idx = $insert_member;

    $insert_registration_query =	"
                                        INSERT request_registration
                                        SET
                                            status = 5,
                                            attendance_type = '{$attendance_type}',
                                            is_score = '{$is_score}',
                                            ksso_member_status = '{$ksso_member_status}',
                                            email = '{$email}',
                                            nation_no = '{$nation_no}',
                                            last_name = '{$last_name}',
                                            first_name = '{$first_name}',
                                            phone = '{$phone}',
                                            affiliation = '{$affiliation}',
                                            department = '{$department}',
                                            member_type = '{$member_type}',
                                            occupation_type = '{$occupation}',
                                            register_path = 'onsite',
                                            register = '{$member_idx}',
                                            conference_info = '{$conference_info}',
                                            welcome_reception_yn = '{$welcome_reception_yn}',
                                            day2_breakfast_yn = '{$day2_breakfast_yn}',
                                            day2_luncheon_yn = '{$day2_luncheon_yn}',
                                            day3_breakfast_yn = '{$day3_breakfast_yn}',
                                            day3_luncheon_yn = '{$day3_luncheon_yn}',
                                            payment_methods = 2,
                                            price = '{$price}'
                                    ";

    if(!empty($member_other_type)){
        $insert_registration_query .= ", member_other_type = '{$member_other_type}' ";
    } else {
        $insert_registration_query .= ", member_other_type = NULL ";
    }

    if(!empty($occupation_other_type)){
        $insert_registration_query .= ", occupation_other_type = '{$occupation_other_type}' ";
    } else {
        $insert_registration_query .= ", occupation_other_type = NULL ";
    }

    if(!empty($licence_number)){
        $insert_registration_query .= ", licence_number = '{$licence_number}' ";
    }
    if(!empty($nutritionist_number)){
        $insert_registration_query .= ", nutritionist_number = '{$nutritionist_number}' ";
    }
    if(!empty($dietitian_number)){
        $insert_registration_query .= ", dietitian_number = '{$dietitian_number}' ";
    }

    $insert_registration = sql_query($insert_registration_query);

    if($insert_registration) {
        $res = [
            code => 200,
            msg => "onsite_registration success"
        ];
        echo json_encode($res);
    } else {
        $res = [
            code => 400,
            msg => "onsite_registration error"
        ];
        echo json_encode($res);
    }
    exit;
} else if($_POST["flag"] == "calc_fee"){

    $ksso_member_status = $_POST["ksso_member_status"];
    $category = $_POST["category"];
    $country = $_POST["country"] ?? "";

    $result = calcFee($ksso_member_status,$category, $country);

    if($result>=0) {
        $res = [
            code => 200,
            msg => "success",
            data => $result,
            country => $country
        ];
        echo json_encode($res);
        exit;

    } else {
        $res = [
            code => 400,
            msg => "error",
        ];
        echo json_encode($res);
        exit;

    }
}

function calcFee($ksso_member_status, $category, $country){

    // 카테고리별 상품금액 조회
    $calc_fee_query =	"
								SELECT
									on_member_usd, on_guest_usd, on_member_krw, on_guest_krw
								FROM info_event_price
								WHERE type_en = '{$category}';
							";

    $calc_fee = sql_fetch($calc_fee_query);

    if($country == 25){
        if($ksso_member_status >= 1){
            $result = $calc_fee["on_member_krw"];
        }else{
            $result = $calc_fee["on_guest_krw"];
        }
    }else{
        if(($ksso_member_status && !isset($calc_fee["on_member_usd"])) || (!$ksso_member_status && !isset($calc_fee["on_guest_usd"]))){
            echo json_encode(array("code"=>403, "msg"=>"Not invalid price type"));
            exit;
        }

        if($ksso_member_status >= 1){
            $result = $calc_fee["on_member_usd"];
        }else{
            $result = $calc_fee["on_guest_usd"];
        }
    }

    return $result;
}

?>