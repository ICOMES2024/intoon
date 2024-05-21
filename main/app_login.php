<?php
	include_once('./include/head.php');
?>
<?php
    if(($_SESSION["USER"])!=[]){
//        echo "<script>location.href='/main/app_index.php'</script>";
        echo "<script>location.replace('/main/app_index.php')</script>";
    }
?>
<script src="./js/script/client/app_login.js"></script>
<style>
	html, body {overflow:hidden; background: #000f32 url("../img/app_login_bg2.jpg") no-repeat center bottom /cover;}
	.app_main_box {min-height:700px;}
    .app_main_backBtn{position: absolute; left:5%; top:2%; width:50px; padding:10px;}
    .app_main_backBtn img{ width:100%; }
</style>

<!-- HUBDNCLHJ : app login 페이지 -->
<section class="container app_main app_login app_version">
	<div class="app_main_inner">
		<div class="app_main_box">
            <div class="app_main_backBtn">
                
            <!-- a href="/main/app_index.php"><img src="https://image.webeon.net/icomes2024/app/app_main_backBtn.png" alt=""></a -->
            <img src="https://image.webeon.net/icomes2024/app/app_main_backBtn.png" alt="">
            </div>
			<div class="app_main_txt">
				<img src="https://image.webeon.net/icomes2024/app/2024_app_main_txt.svg" alt="">
				<!-- <p>Sep. 7(Thu) ~ Sep. 9(Sat)</p>
				<p>CONRAD Seoul Hotel, Korea</p> -->
			</div>
			<div class="app_login_box">
				<p>* Please log in using the same ID you used to register on the ICOMES 2024 website.</p>
				<ul>
					<li>
						<input type="text" name="email" placeholder="ID(email)">
					</li>
					<li>
						<input type="password" name="password" placeholder="Password">
					</li>
				</ul>
				<a href="./app_find_password.php" class="app_find_password">Find password</a>
				<button type="button" class="btn app_login_btn">Log in</button>
			</div>
		</div>
	</div>
</section>

<script>
$(document).ready(function(){
//	var varUA = navigator.userAgent.toLowerCase();
//	if ( varUA.indexOf('android') > -1) {
//		alert("Please update the app.")
//	}

    let icomes_device = null;
    let icomes_token = null;

    $('input').on('keyup', function(e){
        if(e.keyCode == '13'){
            login();
        }
    });
    $(".app_login_btn").on("click", function(){
        login();
    });

    $('.app_main_backBtn').on('click', function() {
        history.go(-2); // confirm 창 없이 바로 2단계 전 페이지로 이동
    });


    if (typeof(window.AndroidScript) != "undefined" && window.AndroidScript != null) {
        try{
            window.AndroidScript.getDeviceToken();
        } catch (err){
            alert(err);
        }
        //[240314] hub 스탬프 투어 소스 코드 수정 !@#$^
    } else if (window.webkit && window.webkit?.messageHandlers!=null) {
    // } else if (window.webkit && window.webkit.messageHandlers!=null) {
        try{
            window.webkit.messageHandlers.getDeviceToken.postMessage('');
        } catch (err){
            console.log(err);
        }
    }

    getDeviceTokenCallback = (device, deviceToken) => {
        icomes_device = device;
        icomes_token = deviceToken;
    }


	//[240509] APP 버전 체크 코드
    if (typeof(window.AndroidScript) != "undefined" && window.AndroidScript != null) {
        try{
            window.AndroidScript.checkAppVersion();
        } catch (err){
           window.alert("ICOMES App has been updated.")
           window.location.href = "https://play.google.com/store/apps/details?id=com.intoon.icomes";
          
        }
        //[240314] hub 스탬프 투어 소스 코드 수정 !@#$^
    } else if (window.webkit && window.webkit?.messageHandlers!=null) {
        try{
            window.webkit.messageHandlers.checkAppVersion.postMessage('');
        } catch (err){
            window.alert("ICOMES App has been updated.")
            window.location.href = "https://apps.apple.com/kr/app/icomes/id6450940155"; 
        }
    }

    checkAppVersionCallback = (appVersion) =>{
        const AOSver = 1.5;
		const IOSver = 1.6;

        if (typeof(window.AndroidScript) != "undefined" && window.AndroidScript != null) {
            if(parseFloat(appVersion) < AOSver){
                window.alert("ICOMES App has been updated.")
                window.location.href = "https://play.google.com/store/apps/details?id=com.intoon.icomes";
                
            }
        //[240314] hub 스탬프 투어 소스 코드 수정 !@#$^
    } else if (window.webkit && window.webkit?.messageHandlers!=null) {
        if(parseFloat(appVersion) < IOSver){
            alert("ICOMES App has been updated.")
            window.location.href = "https://apps.apple.com/kr/app/icomes/id6450940155";
        }
    }
    }

    function login (){
        let email = $("input[name=email]").val();
        let password = $("input[name=password]").val();

        if(email == "") {
            alert(locale(language.value)("check_email"));
            return false;
        } else if(password == "") {
            alert(locale(language.value)("check_password"));
            return false;
        }

        $.ajax({
            url : "./ajax/client/ajax_member.php",
            type : "POST",
            data : {
                flag : "app_login",
                flag2 : "app",
                email : email,
                password : password,
                icomes_device : icomes_device,
                icomes_token : icomes_token
            },
            dataType : "JSON",
            success : function(res){
                if(res.code == 200) {
                    var href_path = "/main/app_index.php";

                    var from = "<?=$_GET['from']?>";
                    if (from != "") {
                        href_path += "/"+from
                    }

                    var toDate = new Date();
                    toDate.setHours(toDate.getHours() + ((23-toDate.getHours()) + 9));
                    toDate.setMinutes(toDate.getMinutes() + (60-toDate.getMinutes()));
                    toDate.setSeconds(0);
                    document.cookie = "member_idx=" + res.idx + "; path=/; expires=" + toDate.toGMTString() + ";";

                    if (typeof(window.AndroidScript) != "undefined" && window.AndroidScript != null) {
                        window.AndroidScript.login(res.idx);
                    } else if (window.webkit && window.webkit.messageHandlers!=null) {
                        try{
                            window.webkit.messageHandlers.login.postMessage(res.idx);
                        } catch (err){
                            console.log(err);
                        }
                    }

                    // loginCallback = (res) => {
                    //     const result = Json.parse(res)
                    // }

                    location.href = href_path;
                } else if(res.code == 400) {
                    alert(locale(language.value)("not_matching_email"));
                    return false;
                } else if(res.code == 401) {
                    alert(locale(language.value)("not_matching_password"));
                    return false;
                } else if(res.code == 402) {
                    //alert(locale(language.value)("not_certified_email"));
                    alert("An account confirmation email has been sent to the email address you set during registration. Please check the email sent and verify your account.");
                    return false;
                } else {
                    alert(locale(language.value)("reject_msg"));
                }
            }
        });
    }

});
</script>