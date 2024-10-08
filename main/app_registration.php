<?php include_once('./include/head.php');?>
<?php include_once('./include/app_header.php');?>

<?php
 // [240419] sujeong / APP 로그인 페이지 /window confirm 창으로 수정 !!!
 if (empty($_SESSION["USER"])) {
    echo "
            <script>
                if (typeof(window.AndroidScript) != 'undefined' && window.AndroidScript != null) {
                    window.AndroidScript.logout();
                    if(window.confirm('Login required. Would you like to log in?')){ 
                        window.location.href = '/main/app_login.php';
                    }else{
                        window.history.back();
                    }
                }
            
            
                    try{
                        if (window.webkit?.messageHandlers!=null) {
                            window.webkit.messageHandlers.logout.postMessage('');
                            if(window.confirm('Login required. Would you like to log in?')){ 
                                window.location.href = '/main/app_login.php';
                            }else{
                                window.history.back();
                            }
                        }
                    } catch (err){
                        console.log(err);
                    }
            </script>
        ";
    }
    $user_idx = $member["idx"] ?? -1;

    // [22.04.25] 미로그인시 처리
    if($user_idx <= 0) {
        echo "<script>alert('Need to login'); location.replace(PATH+'app_login.php');</script>";
        exit;
    }
    
    $member_idx = $_SESSION["USER"]["idx"];
    $sql_info = "
                    SELECT
                        m.first_name, m.last_name, m.first_name_kor, m.last_name_kor, n.nation_en, m.affiliation, m.department, m.nation_no, qr.idx AS r_idx, m.is_deleted, qr.*
                    FROM member m
                    LEFT JOIN nation n ON m.nation_no = n.idx
                    LEFT JOIN (
                        SELECT rr.*
                        FROM request_registration rr
                        WHERE status IN (2,5)
                        AND is_deleted = 'N'
                        ORDER BY idx ASC
                        LIMIT 9999
                    ) AS qr ON qr.register = m.idx
                    WHERE m.idx = {$member_idx}
                    AND m.is_deleted = 'N'
                    ";
    $member_data = sql_fetch($sql_info);


    $select_user_registration_query = "
            SELECT
                reg.idx, reg.banquet_yn, reg.email, reg.nation_no, reg.first_name, reg.last_name, reg.affiliation, reg.phone, reg.department, reg.member_type, reg.occupation_type, DATE(reg.register_date) AS register_date, DATE_FORMAT(reg.register_date, '%m-%d-%Y %H:%i:%s') AS register_date2, reg.status, reg.is_score, reg.is_score1, reg.is_score2, reg.is_score3,reg.is_score4,
                reg.attendance_type, reg.etc5, reg.licence_number, reg.specialty_number, reg.nutritionist_number, reg.dietitian_number,
                reg.conference_info, reg.etc4, reg.welcome_reception_yn, reg.day2_breakfast_yn, reg.day2_luncheon_yn, reg.day3_breakfast_yn, reg.day3_luncheon_yn, reg.special_request_food, reg.promotion_code_number,
                reg.payment_methods, reg.price, nation.nation_en, IF(nation.nation_tel = 82, 1, 0) AS is_korea,
                (
                    CASE
                        WHEN reg.ksso_member_status IS NULL OR reg.ksso_member_status = 0 THEN 'Non-member'
                        WHEN reg.ksso_member_status > 0 THEN 'Member'
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
            ORDER BY reg.register_date DESC
        ";

        $registration_list = sql_fetch($select_user_registration_query);
    //[240315] sujeong / 등록번호 4자리수 만들기
    $register_no = "";
    if($member_data["r_idx"]< 10){
        $register_no = !empty($member_data["r_idx"]) ? "ICOMES2024-000" .$member_data["r_idx"] : "-";
    }else if($member_data["r_idx"] >= 10 && $member_data["r_idx"] < 100){
        $register_no = !empty($member_data["r_idx"]) ? "ICOMES2024-00" . $member_data["r_idx"] : "-";
    }else if($member_data["r_idx"] >= 100 && $member_data["r_idx"] < 1000){
        $register_no = !empty($member_data["r_idx"]) ? "ICOMES2024-0" . $member_data["r_idx"] : "-";
    }else if($member_data["r_idx"] >= 1000 ){
        $register_no = !empty($member_data["r_idx"]) ? "ICOMES2024-" . $member_data["r_idx"] : "-";
    }

    $attendance_type = $member_data["attendance_type"] ?? "-";
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
            case 7:
                $attendance_type = "Abstract Presenter";
                break;
            case 8:
                $attendance_type = "On-site 정책세션";
                break;
            case 10:
                $attendance_type = "Sponsor(free)";
                break;
            case 11:
                $attendance_type = "KSSO";
                break;
            default:
                $attendance_type = "";
        }

        
    // Others
    $satellite_yn = $member_data["etc4"] ?? "N";
    $welcome_reception_yn = $member_data["welcome_reception_yn"] ?? "N";
    $day2_breakfast_yn = $member_data["day2_breakfast_yn"] ?? "N";
    $day2_luncheon_yn = $member_data["day2_luncheon_yn"] ?? "N";
    $day3_breakfast_yn = $member_data["day3_breakfast_yn"] ?? "N";
    $day3_luncheon_yn = $member_data["day3_luncheon_yn"] ?? "N";

    // Special Requset for Food
    $special_request = $member_data["special_request_food"] ?? "";
    $special_request_food = "";
    if($special_request === '0'){
        $special_request_food = "Not Applicable";
    } else if($special_request === '1'){
        $special_request_food = "Vegetarian";
    } else if($special_request === '2'){
        $special_request_food = "Halal";
    } else {
        $special_request_food = "-";
    }

    $other_html = "";

    if($satellite_yn === "Y"){
        $other_html .= "
                        <label for='other1'><i></i>• Satellite Symposium <br/>– September 5(Thu)</label>
                        ";
    }
    if($welcome_reception_yn === "Y"){
        $other_html .= $other_html != "" ? "<br/>" : "";
        $other_html .= "
                        <label for='other1'><i></i>• Welcome Reception <br/>– September 5(Thu)</label>
                        ";
    }
    if($day2_breakfast_yn === "Y"){
        $other_html .= $other_html != "" ? "<br/>" : "";
        $other_html .= "
                        <label for='other2'><i></i>• Day 2 Breakfast Symposium <br/>– September 6(Fri)</label>
                        ";
    }
    if($day2_luncheon_yn === "Y"){
        $other_html .= $other_html != "" ? "<br/>" : "";
        $other_html .= "
                        <label for='other3'><i></i>• Day 2 Luncheon Symposium <br/>– September 6(Fri)</label>
                        ";
    }
    if($day3_breakfast_yn === "Y"){
        $other_html .= $other_html != "" ? "<br/>" : "";
        $other_html .= "
                        <label for='other4'><i></i>• Day 3 Breakfast Symposium <br/>– September 7(Sat)</label>
                        ";
    }
    if($day3_luncheon_yn === "Y"){
        $other_html .= $other_html != "" ? "<br/>" : "";
        $other_html .= "
                        <label for='other5'><i></i>• Day 3 Luncheon Symposium <br/>– September 7(Sat)</label>
                        ";
    }

    if($other_html == "") $other_html = "-";

    // Conference Info
    $info_html = "";
    $info = explode("*", $member_data["conference_info"] ?? "");

    for($a = 0; $a < count($info); $a++){
        if($info[$a]){
            $info_html .= $info_html != "" ? "<br/>" : "";
            $info_html .= "
                            <label for='conference".$a."'><i></i>• ".$info[$a]."</label>
                            ";
        }
    }

    if($info_html == "") $info_html = "-";

    // 결제정보
    $payment_methods = $registration_list["payment_methods"];
    $payment_methods = $payment_methods == 1 ? "bank" : "card";

    if($payment_methods == "card"){
        if($registration_list["price"] == 0){
            $payment_methods = "Free";
        }else{
            $payment_methods = "Credit card";
        }
    }else{
        $payment_methods = "Wire Transfer";
    }


?>

<!-- HUBDNCLHJ : app qr_code 페이지 -->
<section class="container app_version">
	<div class="app_title_box">
        <h2 class="app_title">
			My Page
			<button type="button" class="app_title_prev" onclick="javascript:history.back();"><img src="https://image.webeon.net/icomes2024/app/2024_icon_arrow_prev_wh.svg" alt="이전페이지로 이동"></button>
		</h2>
        <div class="app_menu_box">
            <ul class="app_menu_tab langth_2">
                <li class="on"><a href="./app_registration.php">Registration</a></li>
                <li><a href="./app_mypage_abstract.php">Abstract</a></li>
                <!-- <li><a href="./app_schedule.php">My Schedule</a></li> -->
            </ul>
        </div>
	</div>
	<div class="inner">
		<div class="contents_box">
			<div class="contents_wrap">
                <p class="mypage_registration_txt">Registration Information</p>
                <table class="mypage_registration_table">
                    <colgroup>
                        <col width="30%">
                        <col>
                    </colgroup>
                    <tr>
                        <th>Registration No.</th>
                        <td><?php echo $register_no; ?></td>
                    </tr>
                    <tr>
                        <th>Registration Date</th>
                        <td><?php echo $member_data['register_date']; ?></td>
                    </tr>
                    <tr>
                        <th>Name</th>
                        <td><?php echo $member_data['last_name'] ." " .$member_data['first_name']; ?></td>
                    </tr>
                    <tr>
                        <th>Country</th>
                        <td><?php echo $member_data['nation_en'] ?></td>
                    </tr>
                    <tr>
                        <th>Affiliation</th>
                        <td><?php echo $member_data['department'].", " .$member_data['affiliation'] ?></td>
                    </tr>
                    <tr>
                        <th>Phone Number</th>
                        <td><?php echo $member_data['phone'] ?></td>
                    </tr>
                    <tr>
                        <th>Member of KSSO</th>
                        <td><?=$member_data["ksso_member_status"] == 1 ? "Memeber" : "Non-Memeber"?></td>
                    </tr>
                    <tr>
                        <th>Type of<br/>Participation</th>
                        <td><?=$attendance_type?></td>
                    </tr>
                    <tr>
                        <th>Type of<br/>Occupation</th>
                        <td><?=$member_data["occupation_type"]?></td>
                    </tr>
                    <tr>
                        <th>Category</th>
                        <td><?=$member_data["member_type"]?></td>
                    </tr>
                    <?php if($member_data["nation_no"] == 25){?>
                            <tr>
                                <th>대한의사협회 평점신청</th>
                                <td><?=$member_data["is_score"] == 1 ? "필요" : "불필요"?></td>
                            </tr>
                            <tr>
                                <th>의사 면허번호</th>
                                <td><?=$member_data["licence_number"] ?? "Not applicable"?></td>
                            </tr>
                            <tr>
                                <th>전문의 번호</th>
                                <td><?=$member_data["specialty_number"] ?? "Not applicable"?></td>
                            </tr>
                            <tr>
                                <th>한국영양교육평가원 <br/>평점신청</th>
                                <td><?=$member_data["is_score1"] == 1 ? "필요" : "불필요"?></td>
                            </tr>
                            <tr>
                                <th>영양사 면허번호</th>
                                <td><?=$member_data["nutritionist_number"] ?? "Not applicable"?></td>
                            </tr>
                            <tr>
                                <th>임상영양사 면허번호</th>
                                <td><?=$member_data["dietitian_number"] ?? "Not applicable"?></td>
                            </tr>
                            <tr>
                                <th>운동사 평점신청</th>
                                <td><?=$member_data["is_score2"] == 1 ? "필요" : "불필요"?></td>
                            </tr>
                            <tr>
                                <th>내과전공의 외부학술회의 평점신청</th>
                                <td><?=$member_data["is_score3"] == 1 ? "필요" : "불필요"?></td>
                            </tr>
                            <tr>
                                <th>내과전문의 번호</th>
                                <td><?=$member_data["etc5"] ?? "Not applicable"?></td>
                            </tr>
                            <tr>
                                <th>내과분과전문의 시험/갱신 평점신청</th>
                                <td><?=$member_data["is_score4"] == 1 ? "필요" : "불필요"?></td>
                            </tr>
                    <?php }?>
                    <tr>
                        <th>Others</th>
                        <td><?=$other_html?></td>
                    </tr>
                    <tr>
                        <th>Special Request <br/>for Food</th>
                        <td><?=$special_request_food?></td>
                    </tr>
                    <tr>
                        <th>Where did you get the information about the conference?</th>
                        <td><?=$info_html?></td>
                    </tr>
                    <!-- Credit Card 선택 시 -->
                    <tr class="tr_bg">
                        <th>Registration fee</th>
                        <td><?=$registration_list["is_korea"] == 1 ? "KRW" : "USD"?> <?=$registration_list["price"] || $registration_list["price"] == 0 ? number_format($registration_list["price"]) : "-"?></td>
                    </tr>
                    <tr class="tr_bg">
                        <th>Total fee</th>
                        <td><?=$registration_list["is_korea"] == 1 ? "KRW" : "USD"?> <?=$registration_list["price"] || $registration_list["price"] == 0 ? number_format($registration_list["price"]) : "-"?></td>
                    </tr>
                    <?php if(!empty($registration_list["promotion_code_number"])){ ?>
                        <tr class="tr_bg">
                        <th>Promotion Code</th>
                        <td><?=$registration_list["promotion_code_number"]?></td>
                    </tr>
                    <?php } ?>
                    <tr class="tr_bg">
                        <th>Payment Method</th>
                        <td>
                            <label for="">
                                <i></i>• 
                                <?=$payment_methods?>
                            </label>
                        </td>
                    </tr>
                </table>
              <!-- <?php print_r($member_data); ?> -->
            </div>
		</div>
	</div>
</section>
<script>
	$(document).ready(function(){
        $(".app_header").removeClass("simple");
    })
</script>

<?php include_once('./include/app_footer.php');?>