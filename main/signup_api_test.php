<?php 
include_once("./common/common.php");
include_once("./common/locale.php");

try {
    // 사용자 데이터 수집
    $data = array(
        'id' => $_POST['id'],
        'pw' => urlencode($_POST['password'])
    );


    $json = http_build_query($data);

    // cURL 설정 및 실행
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "http://3.36.138.44/pro_inc/check_mem.php");
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $json);

    $response = curl_exec($ch);
    $status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    if($status_code == 200) {
        $response_data = json_decode($response, true);
        if ($response_data['code'] == 200) {
            return_value(200, "회원정보 조회 성공", [
                "value" => $response_data,
                "ksola_member_check" => $data['id']
            ]);
        } else {
            return_value($response_data['code'], $response_data['msg'], ["value" => $response]);
        }
    } else {
        echo "Error 내용: ".$response;
    }

} catch(Throwable $tw) {
    return_value(300, "저장하는 중 오류가 발생했습니다.", ['error' => $tw->getMessage()]);
}

// 공통 응답 함수
function return_value($code, $msg, $arr=array()){
    $arr["code"] = $code;
    $arr["msg"] = $msg;
    echo json_encode($arr);
    exit;
}
?>


<?php 
/*
function checkMember($apiUrl, $memberId, $memberPw) {
    // 요청할 데이터
    $data = array(
        'id' => $memberId,
        'pw' => $memberPw
    );

    // cURL 세션 초기화
    $ch = curl_init($apiUrl);

    // 옵션 설정
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data)); 

    // API 요청 보내기
    $response = curl_exec($ch);

    // 에러 처리
    if (curl_errno($ch)) {
        $error_msg = curl_error($ch);
        curl_close($ch);
        return array('code' => 500, 'msg' => $error_msg);
    }

    // 응답 상태 코드 확인
    $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    if ($httpcode !== 200) {
        curl_close($ch);
        return array('code' => $httpcode, 'msg' => 'HTTP Error', 'response' => $response);
    }

    // 응답 받기
   // $result = json_decode($response, true);

    // cURL 세션 닫기
    curl_close($ch);

    return $response;
}

// 예시로 사용할 데이터
$apiUrl = "http://3.36.138.44/pro_inc/check_mem.php";
$memberId = "gelila2@naver.com";
$memberPw = "a12345";

// API 호출
$result = checkMember($apiUrl, $memberId, $memberPw);

// 결과 출력
echo '<pre>';
print_r($result);
echo '</pre>';

*/

?>
