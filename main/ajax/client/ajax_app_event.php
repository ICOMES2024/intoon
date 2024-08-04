<?php include_once("../../common/common.php");?>
<?php
// error_reporting(E_ALL);
// ini_set("display_errors", 1);
if($_POST["flag"]==="submit"){
    $member_idx = $_SESSION["USER"]["idx"];

    //1. 로그인 확인하기
    $search_name_query = "
                    SELECT  CONCAT(last_name,' ',first_name) AS `name`
                    FROM request_registration
                    WHERE register = {$member_idx} AND status IN (2,5)
                                ";
    $search_name = sql_fetch($search_name_query);

    if (!$search_name) {
        $res = [
            'code' => 402,
            'msg' => "non-member"
        ];
        echo json_encode($res);
        exit;
    } else {
        $user_name =  $search_name['name'];
        $comment = $_POST["comment"];
        $quiz_num = $_POST["quizNum"];

        //2. 중복 참여 제외 (!!! 수정필요 !!! 첫번째 이벤트 q1 !!!)
        $search_member_query = "
                    SELECT *
                    FROM comments
                    WHERE member_idx = {$member_idx} AND is_deleted = 'N' AND quiz_num = 'q1'
                    ";
        $search_member = sql_fetch($search_member_query);
        if ($search_member) {
            $res = [
                'code' => 401,
                'msg' => "duplicate participation error"
            ];
            echo json_encode($res);
            exit;
        }else{

            //3. DB에 insert 시키기 (!!! quiz_num 수정 필요 !!!)
            $comments_insert_query = "
            INSERT comments
            SET
                member_idx = {$member_idx},
                username = '{$user_name}',
                comment =  '{$comment}',
                register_date = NOW(),
                is_deleted = 'N',
                quiz_num = 'q1'
            ";

            $insert_comments = sql_query($comments_insert_query);

            if (!$insert_comments) {
                $res = [
                    'code' => 401,
                    'msg' => "insert-error"
                ];
                echo json_encode($res);
                exit;
            } else {
                $res = [
                    'code' => 200,
                    'msg' => "success"
                ];
                echo json_encode($res);
                exit;
            }
        } 
    }
} 

//[240628] 댓글 조회
else if ($_POST["flag"]==="commnets"){
    $search_comments_query = "
            SELECT  *
            FROM comments
            WHERE is_deleted = 'N'
            ORDER BY register_date DESC
                ";
    $search_comments = get_data($search_comments_query);
    
    if (!$search_comments) {
        $res = [
            'code' => 401,
            'msg' => "select-error"
        ];
        echo json_encode($res);
        exit;
    } else {
        $res = [
            'code' => 200,
            'msg' => "success",
            'data' =>  $search_comments
        ];
        echo json_encode($res);
        exit;
    }
}


//[240628] 내 댓글 조회 !!!
else if ($_POST["flag"]==="my_commnet"){
    $member_idx = $_POST["user_idx"];

    $search_my_comments_query = "
            SELECT  *
            FROM comments
            WHERE is_deleted = 'N' AND member_idx = {$member_idx} AND quiz_num = 'q1'
                ";
    $search_my_comments = get_data($search_my_comments_query);
    
    if (!$search_my_comments) {
        $res = [
            'code' => 401,
            'msg' => "select-error"
        ];
        echo json_encode($res);
        exit;
    } else {
        $res = [
            'code' => 200,
            'msg' => "success",
            'data' =>  $search_my_comments
        ];
        echo json_encode($res);
        exit;
    }
}



//[240628] 댓글 삭제
else if ($_POST["flag"]==="comment_delete"){
    $comment_idx = $_POST["comment_idx"];

    $remove_comment_query = "
                UPDATE comments
                SET 
                    is_deleted = 'Y'
                WHERE idx = {$comment_idx};
                ";
    $remove_comment = sql_query($remove_comment_query);
    
    if (!$remove_comment) {
        $res = [
            'code' => 401,
            'msg' => "remove-error"
        ];
        echo json_encode($res);
        exit;
    } else {
        $res = [
            'code' => 200,
            'msg' => "success"
        ];
        echo json_encode($res);
        exit;
    }
}
?>
