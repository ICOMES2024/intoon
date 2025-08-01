<?php include_once('./include/head.php');?>
<?php include_once('./include/app_header.php');

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
?>
<script src="./js/script/client/app_setting.js"></script>

<!-- HUBDNCLHJ : app setting 페이지 -->
<section class="container app_setting app_version">
	<div class="app_title_box">
		<h2 class="app_title">
			Setting
			<button type="button" class="app_title_prev" onclick="javascript:window.location.href='./app_index.php';">
				<img src="https://image.webeon.net/icomes2024/app/2024_icon_arrow_prev_wh.svg" alt="이전페이지로 이동">
			</button>
		</h2>
		<p class="app_setting_desc">ICOMES 2024 event information and real-time information can be received by mobile app push.</p>
	</div>
	<div class="inner">
		<div class="contents_box">
			<div class="app_push_area">
				<p>PUSH</p>
				<div class="app_push_wrapper">
					<input type="checkbox" id="app_push_switch">
					<label for="app_push_switch" class="app_push_switch_label">
						<span class="app_push_btn"></span>
					</label>
				</div>
			</div>
			<p class="app_setting_desc">If your iOS user does not receive the PUSH notification, please proceed as follows: iPhone > Settings > Notification > ICOMES 2024. Change the notification permission to ‘ON’</p>
		</div>
	</div>
	<button class="btn app_logout_btn">LOGOUT</button>
</section>
<script>
    $(".app_logout_btn").on("click", function() {
        $.ajax({
            url: "./ajax/client/ajax_member.php",
            type: "POST",
            data: {
                flag: "app_logout"
            },
            dataType: "JSON",
            success: function() {
                if (typeof(window.AndroidScript) != 'undefined' && window.AndroidScript != null) {
                    window.AndroidScript.logout();
                    window.location.href = '/main/app_login.php';
                }

                if (webkit.messageHandlers!=null) {
                    try{
                        window.webkit.messageHandlers.logout.postMessage('');
                        window.location.href = '/main/app_login.php';
                    } catch (err){
                        console.log(err);
                    }
                }
            },
            error: function() {
                alert("일시적으로 로그아웃 요청이 거절되었습니다.");
            }
        });
    });
</script>
<script>
	$(document).ready(function(){
        $(".app_header").removeClass("simple");
    })
</script>

<?php include_once('./include/app_footer.php');?>