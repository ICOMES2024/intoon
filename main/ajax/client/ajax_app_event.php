<?php include_once("../../common/common.php");?>
<?php
if($_POST["flag"]==="submit"){
    $member_idx = $_SESSION["USER"]["idx"];

    $search_name_query = "
                                SELECT  CONCAT(last_name,' ',first_name) AS `name`
                                FROM member
                                WHERE idx = {$member_idx}
                                ";
    $search_name = sql_query($search_name_query);
    if (!$search_name) {
        $res = [
            code => 402,
            msg => "non-member"
        ];
        echo json_encode($res);
        exit;
    } else {
        
    }
} 
?>
