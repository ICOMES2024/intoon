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
?>

<style>
	html {background: url("./img/img_app_vsl5.jpg") no-repeat left bottom /cover;}
	html, body {min-height:100%;}
	.rolling_wrap {display:block;}
</style>

<!-- HUBDNCLHJ : app loading 페이지 -->
<section class="container app_version main">
	<div class="app_vsl">
		<img src="./img/img_app_vsl_text2.svg" class="text" alt="">
	</div>
	<div class="app_main_inner">
		<ul class="app_index_menu">
			<li>
				<a href="/main/app_welcome.php">
					<img src="./img/icons/app_menu01.svg" alt="">
					<span>ICOMES 2023</span>
				</a>
			</li>
			<li>
				<a href="/main/app_program_glance.php">
					<img src="./img/icons/app_menu02.svg" alt="">
					<span>PROGRAM</span>
				</a>
			</li>
			<li>
				<a href="/main/app_abstract.php">
					<img src="./img/icons/app_menu03.svg" alt="">
					<span>ABSTRACT</span>
				</a>
			</li>
			<li>
				<a href="/main/app_invited_speakers.php">
					<img src="./img/icons/app_menu04.svg" alt="">
					<span>INVITED<br/>SPEAKERS</span>
				</a>
			</li>
			<li>
				<a href="/main/app_happening_now.php">
					<img src="./img/icons/app_menu05.svg" alt="">
					<span>HAPPENING<br/>NOW</span>
				</a>
			</li>
			<li>
				<a href="/main/app_floor_plan.php">
					<img src="./img/icons/app_menu06.svg" alt="">
					<span>FLOOR PLAN</span>
				</a>
			</li>
			<li>
				<a href="/main/app_stamp_guidelines.php">
					<img src="./img/icons/app_menu07.svg" alt="">
					<span>SPONSORSHIP</span>
				</a>
			</li>
			<li>
				<a href="/main/app_notice.php">
					<img src="./img/icons/app_menu08.svg" alt="">
					<span>NOTICE</span>
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
					<img src="./img/icons/app_menu09_1.svg" alt="">
					<span>JOMES</span>
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
		$(".app_nav_btn img").attr("src", "/main/img/icons/icon_hamburger2.svg");


	//[240423] sujeong / 로그인 없이 토큰 받기
	let icomes_device = null;
    let icomes_token = null;

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
		saveToken();
    }

	function saveToken(){
		$.ajax({
            url : "./ajax/client/ajax_member.php",
            type : "POST",
            data : {
                flag : "app_index",
                icomes_device : icomes_device,
                icomes_token : icomes_token
            },
            dataType : "JSON",
            success : function(res){
                if(res.code == 200) {
                 
                } 
            }
        });
	}


	});

	//webView.evaluateJavaScript("document.documentElement.style.webkitUserSelect='none'")


</script>

<?php
	include_once('./include/app_footer.php');
?>