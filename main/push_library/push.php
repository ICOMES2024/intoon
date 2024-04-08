<?php
// error_reporting(E_ALL);
// ini_set("display_errors", 1);
require_once ('/var/www/icomes.or.kr/main/plugin/google-api-php-client-main/vendor/autoload.php');
class Push
{
    //[240214] sujeong / api key 전송 방식에서 token 전송 방식으로 수정 / device 상관 X 
    static function fcmMultiPushV2($title, $message, $device, $to_list, $data, $body_key="", $body_args=[""], $img_path=""){

        $url    = 'https://fcm.googleapis.com/v1/projects/icomes2023/messages:send';

        putenv('GOOGLE_APPLICATION_CREDENTIALS=/var/www/icomes.or.kr/main/push_library/icomes2023_key.json');
        
        $scope = 'https://www.googleapis.com/auth/firebase.messaging';
        
        $client = new Google_Client();
        
        $client->useApplicationDefaultCredentials();
        
        $client->setScopes($scope);
        
        $auth_key = $client->fetchAccessTokenWithAssertion();
        //echo $auth_key['access_token'];
        $token = $auth_key['access_token'];

        $headers = array(
            'Authorization: Bearer '.  $token,
            'Content-Type: application/json'
        );     
            for($a = 0; $a < count($to_list); $a++) {
                $fields = array(
                    'token'  => $to_list[$a],
                    'notification'  => array('title'=> $title,'body'=> $message)
                );

            $message_json = array('message'=>$fields);
            //print_r($message_json);
            self::sendAsync($url, $headers, $message_json);
            }
    }
    //기존 방식
    static function fcmPushV2($title, $message, $device, $to_list, $data, $body_key="", $body_args=[""], $img_path=""){

        $url    = 'https://fcm.googleapis.com/fcm/send';

        //Release
        $apiKey = 'AAAAOFisJcs:APA91bFNWr79zZanpCGByw0p6eLWXc-anZK_WitbuM1nZ4k8gcXm3JLfxXQQBg5LNpyyivQlrg1fOzQ_vduwQi0L5xkRPuZsGOVLuTw1auqc6uTe9U2Ha6rqXiJ-uO3QVjAfp9dlmSq0';

        $headers = array(
            'Authorization: key='.$apiKey,
            'Content-Type: application/json'
        );

        if($device =='android'){

            $data['title'] = $title;
            $data['body']  = $message;
            $data['sound'] = 'default';

            $fields = array(
                'to'  => $to_list,
                'data'=> $data,
                'notification' => array('title'=> $title,'body'=> $message,'sound'=>'default')
            );

            self::sendAsync($url, $headers, $fields);

        }else{
            // for($a = 0; $a < count($to_list); $a++){
            $fields = array(
                "to"                => $to_list,
                "content-available" => true,
                "mutable_content"   => true,
                "priority"          => "high",
                "data"              => array('data'=>$data,"media_type"=>"image"),
                "notification"      => array('title'=>$title,'body'=>$message,'sound'=>'default','body_loc_key'=>$body_key,'body_loc_args'=>$body_args)
            );
            self::sendAsync($url, $headers, $fields);
// }
        }
    }

    static function sendAsync($url, $headers, $fields){
        // Open connection
        $ch = curl_init();

        // Set the url, number of POST vars, POST data
        curl_setopt( $ch, CURLOPT_URL, $url);
        curl_setopt( $ch, CURLOPT_POST, true );
        curl_setopt( $ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
        curl_setopt( $ch, CURLOPT_POSTFIELDS, json_encode( $fields ) );

        //create the multiple cURL handle
        $mh = curl_multi_init();

        //add the two handles
        curl_multi_add_handle($mh,$ch);

        //execute the multi handle
        do {
            $status = curl_multi_exec($mh, $active);
            if ($active) {
                curl_multi_select($mh);
            }
        } while ($active && $status == CURLM_OK);

        //close the handles
        curl_multi_remove_handle($mh, $ch);
        curl_multi_close($mh);
    }

}