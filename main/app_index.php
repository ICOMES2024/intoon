<?php
	include_once('./include/head.php');
	include_once('./include/app_header.php');
?>
<?php
    if(empty($_SESSION["USER"])){
        echo "
			<script>
				if (typeof(window.AndroidScript) != 'undefined' && window.AndroidScript != null) {
					window.AndroidScript.logout();
				}
			
				if (window.webkit?.messageHandlers!=null) {
					try{
						window.webkit.messageHandlers.logout.postMessage('');
					} catch (err){
						console.log(err);
					}
				}
			</script>
        ";
    }

	$_SESSION["APP"] = "Phone";
?>

<style>
	html {background: url("https://image.webeon.net/icomes2024/app/2024_img_app_vsl5.png") no-repeat left bottom /cover;}
	html, body {min-height:100%;}
	.rolling_wrap {display:block;}
</style>

<!-- HUBDNCLHJ : app loading 페이지 -->
<section class="container app_version main">
	<div class="app_vsl">
		<img src="https://image.webeon.net/icomes2024/app/2024_img_app_vsl_text2.svg" class="text" alt="">
	</div>
	<div class="app_main_inner">
		<ul class="app_index_menu">
			<li>
				<a href="/main/app_welcome.php">
					<img src="https://image.webeon.net/icomes2024/app/2024_app_menu01.svg" alt="">
					<!-- <span>ICOMES 2023</span> -->
				</a>
			</li>
			<li>
				<a href="/main/app_program_glance.php">
					<img src="https://image.webeon.net/icomes2024/app/2024_app_menu02.svg" alt="">
					<!-- <span>PROGRAM</span> -->
				</a>
			</li>
			<li>
				<a href="/main/app_abstract.php">
					<img src="https://image.webeon.net/icomes2024/app/2024_app_menu03.svg" alt="">
					<!-- <span>ABSTRACT</span> -->
				</a>
			</li>
			<li>
				<a href="/main/app_invited_speakers.php">
					<img src="https://image.webeon.net/icomes2024/app/2024_app_menu04.svg" alt="">
					<!-- <span>INVITED<br/>SPEAKERS</span> -->
				</a>
			</li>
			<li>
				<a href="/main/app_happening_now.php">
					<img src="https://image.webeon.net/icomes2024/app/2024_app_menu05.svg" alt="">
					<!-- <span>HAPPENING<br/>NOW</span> -->
				</a>
			</li>
			<li>
				<a href="/main/app_floor_plan.php">
					<img src="https://image.webeon.net/icomes2024/app/2024_app_menu06.svg" alt="">
					<!-- <span>FLOOR PLAN</span> -->
				</a>
			</li>
			<li>
				<a href="/main/app_stamp_guidelines.php">
					<img src="https://image.webeon.net/icomes2024/app/2024_app_menu07.svg" alt="">
					<!-- <span>SPONSORSHIP</span> -->
				</a>
			</li>
			<li>
				<a href="/main/app_notice.php">
					<img src="https://image.webeon.net/icomes2024/app/2024_app_menu08.svg" alt="">
					<!-- <span>NOTICE</span> -->
				</a>
			</li>
			<!-- <li>
				<a href="https://www.kosso.or.kr/">
					<img src="./img/icons/app_menu09.svg" alt="">
					<span>KSSO</span>
				</a>
			</li> -->
			<li>
				<a href="https://www.jomes.org/" target="_blank">
					<img src="https://image.webeon.net/icomes2024/app/2024_app_menu09.svg" alt="">
					<!-- <span>JOMES</span> -->
				</a>
			</li>
		</ul>
	</div>
</section>

<script>
	$(document).ready(function(){
//		var varUA = navigator.userAgent.toLowerCase();
//		if ( varUA.indexOf('android') > -1) {
//			alert("Please update the app.")
//		}
		$(".app_header").addClass("simple");
		$(".app_nav_btn img").attr("src", "https://image.webeon.net/icomes2024/app/2024_icon_hamburger2.svg");

        

	//[240423] sujeong / 로그인 없이 토큰 받기
	// let icomes_device = null;
    // let icomes_token = null;

	// if (typeof(window.AndroidScript) != "undefined" && window.AndroidScript != null) {
    //     try{
    //         window.AndroidScript.getDeviceToken();
    //     } catch (err){
    //         alert(err);
    //     }
    //     //[240314] hub 스탬프 투어 소스 코드 수정 !@#$^
    // } else if (window.webkit && window.webkit?.messageHandlers!=null) {
    // // } else if (window.webkit && window.webkit.messageHandlers!=null) {
    //     try{
    //         window.webkit.messageHandlers.getDeviceToken.postMessage('');
    //     } catch (err){
    //         console.log(err);
    //     }
    // }

    // getDeviceTokenCallback = (device, deviceToken) => {
    //     icomes_device = device;
    //     icomes_token = deviceToken;
	// 	saveToken();
    // }

	// function saveToken(){
	// 	$.ajax({
    //         url : "./ajax/client/ajax_member.php",
    //         type : "POST",
    //         data : {
    //             flag : "app_index",
    //             icomes_device : icomes_device,
    //             icomes_token : icomes_token
    //         },
    //         dataType : "JSON",
    //         success : function(res){
    //             if(res.code == 200) {
    //                 var href_path = "/main/app_index.php";

    //                     var from = "<?=$_GET['from']?>";
    //                     if (from != "") {
    //                         href_path += "/"+from
    //                     }

    //                     var toDate = new Date();
    //                     toDate.setHours(toDate.getHours() + ((23-toDate.getHours()) + 9));
    //                     toDate.setMinutes(toDate.getMinutes() + (60-toDate.getMinutes()));
    //                     toDate.setSeconds(0);
    //                     document.cookie = "member_idx=" + 0 + "; path=/; expires=" + toDate.toGMTString() + ";";

    //                     if (typeof(window.AndroidScript) != "undefined" && window.AndroidScript != null) {
    //                         window.AndroidScript.login(res.idx);
    //                     } else if (window.webkit && window.webkit.messageHandlers!=null) {
    //                         try{
    //                             window.webkit.messageHandlers.login.postMessage(res.idx);
    //                         } catch (err){
    //                             console.log(err);
    //                         }
    //                     }

    //                     // loginCallback = (res) => {
    //                     //     const result = Json.parse(res)
    //                     // }

    //                     location.href = href_path;
    //             } 
    //         }
    //     });
	// }

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
    // } else if (window.webkit && window.webkit.messageHandlers!=null) {
        try{
            window.webkit.messageHandlers.checkAppVersion.postMessage('');
        } catch (err){
            window.alert("ICOMES App has been updated.")
            window.location.href = "https://apps.apple.com/kr/app/icomes2023/id6450940155";
           
        }
    }

    checkAppVersionCallback = (appVersion) =>{
		const AOSver = 1.4;
		const IOSver = 1.5;

        if (typeof(window.AndroidScript) != "undefined" && window.AndroidScript != null) {
            if(parseFloat(appVersion) < AOSver){
                window.alert("ICOMES App has been updated.")
                window.location.href = "https://play.google.com/store/apps/details?id=com.intoon.icomes";
                
            }
        //[240314] hub 스탬프 투어 소스 코드 수정 !@#$^
    } else if (window.webkit && window.webkit?.messageHandlers!=null) {
    // } else if (window.webkit && window.webkit.messageHandlers!=null) {
        if(parseFloat(appVersion) < IOSver){
            alert("ICOMES App has been updated.")
            window.location.href = "https://apps.apple.com/kr/app/icomes2023/id6450940155";
        }
    }
    }



	 });

	//webView.evaluateJavaScript("document.documentElement.style.webkitUserSelect='none'")


</script>

<?php
	include_once('./include/app_footer.php');
?>