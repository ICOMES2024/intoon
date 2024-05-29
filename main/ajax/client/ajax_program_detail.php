<?php include_once("../../common/common.php");?>

<?php

if($_POST["flag"]==="modal"){
    $program_idx = $_POST["idx"];
    $select_query = "
    SELECT p.idx, p.program_name,  p.chairpersons,  p.preview, ppc.title, pp.program_place_name,
        DATE_FORMAT(p.start_time, '%Y-%m-%d %H:%i') as start_time, DATE_FORMAT(p.end_time, '%H:%i') as end_time,
        program_idx, pc.contents_title, isp.first_name, isp.last_name, isp.affiliation, pc.speaker,
        date_format(pc.start_time, '%H:%i') as contents_start_time, date_format(pc.end_time, '%H:%i') as contents_end_time
        FROM program as p
        LEFT JOIN program_contents pc ON p.idx = pc.program_idx
        LEFT JOIN invited_speaker isp ON isp.idx = pc.speaker_idx
        LEFT JOIN program_place pp ON pp.idx = p.program_place_idx
        LEFT JOIN program_category ppc ON ppc.idx = p.program_category_idx
        WHERE p.idx = {$program_idx}
        ORDER BY contents_start_time;
                ";

    $push_list = get_data($select_query);

if(!empty($push_list)){
    $res = [
        'code' => 200,
        'msg' => "success",
        'data' => $push_list 
    ];
    echo json_encode($res);
    exit;
}else {
    $res = [
        'code' => 400,
        'msg' => "error",
        'data' => null
    ];
    echo json_encode($res);
    exit;
}
}
else if($_POST["flag"]==="detail"){
    $category_idx = $_POST["idx"];
    $select_query = "
    SELECT p.idx, p.program_name,  p.chairpersons,  p.preview, ppc.title, pp.program_place_name,
        DATE_FORMAT(p.start_time, '%Y-%m-%d %H:%i') as start_time, DATE_FORMAT(p.end_time, '%H:%i') as end_time,
        program_idx, pc.contents_title, isp.first_name, isp.last_name, isp.affiliation, pc.speaker,
        date_format(pc.start_time, '%H:%i') as contents_start_time, date_format(pc.end_time, '%H:%i') as contents_end_time
        FROM program_category AS ppc
        LEFT JOIN program p ON ppc.idx = p.program_category_idx
        LEFT JOIN program_contents pc ON p.idx = pc.program_idx
        LEFT JOIN invited_speaker isp ON isp.idx = pc.speaker_idx
        LEFT JOIN program_place pp ON pp.idx = p.program_place_idx
        WHERE ppc.idx = {$category_idx}
        ORDER BY contents_start_time;
                ";

    $push_list = get_data($select_query);

    // 그룹화할 배열 초기화
    $groupedData = [];

    foreach ($push_list as $item) {
        // program_idx를 그룹화의 기준으로 사용
        $programIdx = $item['idx'];

        // 그룹이 없다면 초기화
        if (!isset($groupedData[$programIdx])) {
            $groupedData[$programIdx] = [];
        }

        // 데이터 추가
        $groupedData[$programIdx][] = $item;
    }

if(!empty($push_list)){
    $res = [
        'code' => 200,
        'msg' => "success",
        'data' => $groupedData 
    ];
    echo json_encode($res);
    exit;
}else {
    $res = [
        'code' => 400,
        'msg' => "error",
        'data' => null
    ];
    echo json_encode($res);
    exit;
}
}

else if($_POST["flag"]==="detail_2"){
    $category_idx = $_POST["idx"];
    $select_query = "
    SELECT p.idx, p.program_name,  p.chairpersons,  p.preview, ppc.title, pp.program_place_name, p.program_tag_name, p.preview,
        DATE_FORMAT(p.start_time, '%Y-%m-%d %H:%i') as start_time, DATE_FORMAT(p.end_time, '%H:%i') as end_time,
        program_idx, pc.contents_title, isp.first_name, isp.last_name, isp.affiliation, pc.speaker,
        date_format(pc.start_time, '%H:%i') as contents_start_time, date_format(pc.end_time, '%H:%i') as contents_end_time
        FROM program_category AS ppc
        LEFT JOIN program p ON ppc.idx = p.program_category_idx
        LEFT JOIN program_contents pc ON p.idx = pc.program_idx
        LEFT JOIN invited_speaker isp ON isp.idx = pc.speaker_idx
        LEFT JOIN program_place pp ON pp.idx = p.program_place_idx
        WHERE ppc.idx = {$category_idx}
        ORDER BY contents_start_time;
                ";

    $push_list = get_data($select_query);
    // 그룹화할 배열 초기화
    $groupedData = [];

    foreach ($push_list as $item) {
        // program_place_name을 그룹화의 기준으로 사용
        $programPlaceName = $item['program_place_name'];

        // 그룹이 없다면 초기화
        if (!isset($groupedData[$programPlaceName])) {
            $groupedData[$programPlaceName] = [];
        }

        // 데이터 추가
        $groupedData[$programPlaceName][] = $item;
    }

    // 최종 그룹화된 배열 초기화
    $groupedData2 = [];

    foreach ($groupedData as $programPlaceName => $itemList) {
        // program_place_name을 기준으로 한 배열을 만들고 초기화
        $programPlaceArray = [];

        foreach ($itemList as $item) {
            // idx를 그룹화의 기준으로 사용
            $idx = $item['idx'];

            // 그룹이 없다면 초기화
            if (!isset($programPlaceArray[$idx])) {
                $programPlaceArray[$idx] = [];
            }

            // 데이터 추가
            $programPlaceArray[$idx][] = $item;
        }

        // program_place_name을 기준으로 한 배열을 최종 그룹화된 배열에 추가
        $groupedData2[$programPlaceName] = $programPlaceArray;
    }

if(!empty($push_list)){
    $res = [
        'code' => 200,
        'msg' => "success",
        'data' => $groupedData2 
    ];
    echo json_encode($res);
    exit;
}else {
    $res = [
        'code' => 400,
        'msg' => "error",
        'data' => null
    ];
    echo json_encode($res);
    exit;
}
}
?>