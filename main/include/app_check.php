<!-- //<?php 
//[240408] sujeong / 기존코드 -> app_check_pre.php - IOS try-catch문 추가 // 모든 페이지 login 풀기 위해 주석
// if (empty($_SESSION["USER"])) {
//     echo "
//             <script>
//                 if (typeof(window.AndroidScript) != 'undefined' && window.AndroidScript != null) {
//                     window.AndroidScript.logout();
//                     window.location.href = '/main/app_login.php';
//                 }
            
               
//                     try{
// 						if (window.webkit?.messageHandlers!=null) {
// 							window.webkit.messageHandlers.logout.postMessage('');
// 							window.location.href = '/main/app_login.php';
// 						}
//                     } catch (err){
//                         console.log(err);
//                     }
//             </script>
//         ";
// }
// ?> -->
<script>
    // if (!empty($_SESSION["USER"])){
            if (typeof(window.AndroidScript) != "undefined" && window.AndroidScript != null) {
            try{
                window.AndroidScript.getDeviceToken();
            } catch (err){
                alert(err);
            }
        } else if (window.webkit && window.webkit.messageHandlers!=null) {
            try{
                window.webkit.messageHandlers.getDeviceToken.postMessage('');
            } catch (err){
                console.log(err);
            }
        }

        getDeviceTokenCallback = (device, deviceToken) => {

            $.ajax({
                url: "./ajax/client/ajax_app_check.php",
                type: "POST",
                data: {
                    flag: "updateDeviceToken",
                    device: device,
                    deviceToken: deviceToken
                },
                dataType: "JSON",
                success: function (res) {
                    //alert("hello");
                }
            });
        }
    // }
    
</script>