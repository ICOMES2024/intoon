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
	html, body {
		min-height:100%;
		-webkit-touch-callout: none;
		 -webkit-user-select: none; 
		-khtml-user-select: none;
		-moz-user-select: none;
		-ms-user-select: none;
		user-select: none; 
	}
	.rolling_wrap {display:block;}
	.slick-slider{padding:0 !important;}
</style>

<!-- HUBDNCLHJ : app loading 페이지 -->
<section class="container app_version main">
	<!-- <div class="app_vsl"> -->
		<div class="app_main_wrap">
			<!-- <img src="https://image.webeon.net/icomes2024/app/2024_img_app_vsl_text2.svg" class="text" alt=""> -->
			<!-- [240523] sujeong / 학회팀 요청 순서 수정 -->
			<li>
					<img src="https://image.webeon.net/icomes2024/app/ICOMES2024_APP_lectures-01.png" class="text" alt="">
			</li>		
			<li class="pointer" name="presidential_lecture_1">
				<img src="https://image.webeon.net/icomes2024/app/ICOMES2024_APP_lectures-02.png" class="text" alt="">
				<input type="hidden" name="e" value="room1~3">
				<input type="hidden" name="day" value="day_3">
			</li>
			<li class="pointer"  name="easo_presidential">
					<img src="https://image.webeon.net/icomes2024/app/ICOMES2024_APP_lectures-03.png" class="text" alt="">
					<input type="hidden" name="e" value="room1~3">
					<input type="hidden" name="day" value="day_2">
			</li>
			<li class="pointer"  name="keynote_lecture_2">
					<img src="https://image.webeon.net/icomes2024/app/ICOMES2024_APP_lectures-04.png" class="text" alt="">
					<input type="hidden" name="e" value="room1~3">
					<input type="hidden" name="day" value="day_2">
			</li>
			<li class="pointer"  name="keynote_lecture_3">
					<img src="https://image.webeon.net/icomes2024/app/ICOMES2024_APP_lectures-05.png" class="text" alt="">
					<input type="hidden" name="e" value="room1~3">
					<input type="hidden" name="day" value="day_2">
			</li>
			<li class="pointer"  name="keynote_lecture_5" >
					<img src="https://image.webeon.net/icomes2024/app/ICOMES2024_APP_lectures-06.png" class="text" alt="">
					<input type="hidden" name="e" value="room1~3">
					<input type="hidden" name="day" value="day_3">
			</li>
			<li class="pointer"  name="keynote_lecture_7">
					<img src="https://image.webeon.net/icomes2024/app/ICOMES2024_APP_lectures-07.png" class="text" alt="">
					<input type="hidden" name="e" value="room1~3">
					<input type="hidden" name="day" value="day_3">
			</li>
			<li class="pointer" name="keynote_lecture_1"  >
					<img src="https://image.webeon.net/icomes2024/app/ICOMES2024_APP_lectures-08-1.png" class="text" alt="">
					<input type="hidden" name="e" value="room1~3">
					<input type="hidden" name="day" value="day_2">
			</li>
			<li class="pointer"  name="keynote_lecture_4" >
					<img src="https://image.webeon.net/icomes2024/app/ICOMES2024_APP_lectures-09.png" class="text" alt="">
					<input type="hidden" name="e" value="room1~3">
					<input type="hidden" name="day" value="day_3">
			</li>
			<li class="pointer"  name="keynote_lecture_6">
					<img src="https://image.webeon.net/icomes2024/app/ICOMES2024_APP_lectures-10.png" class="text" alt="">
					<input type="hidden" name="e" value="room1~3">
					<input type="hidden" name="day" value="day_3">
			</li>
			<li class="pointer" name="keynote_lecture_8"  >
					<img src="https://image.webeon.net/icomes2024/app/ICOMES2024_APP_lectures-11-1.png" class="text" alt="">
					<input type="hidden" name="e" value="room1~3">
					<input type="hidden" name="day" value="day_2">
			</li>
			<li class="pointer"  name="ksso_scientific_session" >
					<img src="https://image.webeon.net/icomes2024/app/ICOMES2024_APP_lectures-12-1.png" class="text" alt="">
					<input type="hidden" name="e" value="room1~3">
					<input type="hidden" name="day" value="day_3">
			</li>
		</div>
	<!-- </div> -->
	<div class="app_main_inner">
		<ul class="app_index_menu">
			<li class="app_menu_img">
				<a href="/main/app_welcome.php" >
					<img src="https://image.webeon.net/icomes2024/app/2024_app_menu01.svg" alt="">
				<!-- <a href="/main/app_organizing_committee.php" > -->
                <!-- overview 로 번경 -->   
					<!-- <span>ICOMES 2023</span> -->
				</a>
			</li>
			<li class="app_menu_img">
				<a href="/main/app_program_glance.php">
					<img src="https://image.webeon.net/icomes2024/app/2024_app_menu02.svg" alt="">
					<!-- <span>PROGRAM</span> -->
				</a>
			</li>
			<li class="app_menu_img">
				<a href="/main/app_abstract.php" class="">
					<img src="https://image.webeon.net/icomes2024/app/2024_app_menu03.svg" alt="">
				<!-- <a href="/main/app_abstract.php" class="get_ready_alert"> -->
					<!-- <span>ABSTRACT</span> -->
                    <!-- 추후 get_ready_alert 삭제 -->
				</a>
			</li>
			<li class="app_menu_img">
				<a href="/main/app_invited_speakers.php" class="">
					<img src="https://image.webeon.net/icomes2024/app/2024_app_menu04.svg" alt="">
				<!-- <a href="/main/app_invited_speakers.php" class="get_ready_alert"> -->
					<!-- <span>INVITED<br/>SPEAKERS</span> -->
				</a>
			</li>
			<li class="app_menu_img">
				<a href="/main/app_happening_now.php" class="get_ready_alert">
					<img src="https://image.webeon.net/icomes2024/app/2024_app_menu05.svg" alt="">
					<!-- <span>HAPPENING<br/>NOW</span> -->
				</a>
			</li>
			<li class="app_menu_img">
				<a href="/main/app_floor_plan.php" class="get_ready_alert">
					<img src="https://image.webeon.net/icomes2024/app/2024_app_menu06.svg" alt="">
					<!-- <span>FLOOR PLAN</span> -->
				</a>
			</li>
			<li class="app_menu_img">
				<a href="/main/app_stamp_guidelines.php" class="get_ready_alert">
					<img src="https://image.webeon.net/icomes2024/app/2024_app_menu07.svg" alt="">
					<!-- <span>Booth Tour</span> -->
				</a>
			</li>
			<li class="app_menu_img">
				<a href="/main/app_newsletter.php">
					<img src="https://image.webeon.net/icomes2024/app/2024_app_menu08.svg" alt="">
				<!-- <a href="/main/app_notice.php"> -->
					<!-- <span>NOTICE</span> -->
				</a>
			</li>
			<li class="app_menu_img">
				<a href="/main/app_site.php">
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
		// $(".app_header").addClass("simple");
		$(".app_nav_btn img").attr("src", "https://image.webeon.net/icomes2024/app/2024_icon_hamburger2.svg");

        const imgList = document.querySelectorAll(".app_menu_img");

		imgList.forEach((menuImg) => {
			menuImg.addEventListener("touchstart", (e) => {
			
				//console.log(e.target.childNodes[1].src);
				let ImgUrl = e.target.childNodes[1].src;
				if(ImgUrl.includes("app_menu01")){
					e.target.childNodes[1].src = "https://image.webeon.net/icomes2024/app/2024_app_menu01-1.png"
				}
				else if(ImgUrl.includes("app_menu02")){
					e.target.childNodes[1].src = "https://image.webeon.net/icomes2024/app/2024_app_menu02-1.png"
				}
				else if(ImgUrl.includes("app_menu03")){
					e.target.childNodes[1].src = "https://image.webeon.net/icomes2024/app/2024_app_menu03-1.png"
				}
				else if(ImgUrl.includes("app_menu04")){
					e.target.childNodes[1].src = "https://image.webeon.net/icomes2024/app/2024_app_menu04-1.png"
				}
				else if(ImgUrl.includes("app_menu05")){
					e.target.childNodes[1].src = "https://image.webeon.net/icomes2024/app/2024_app_menu05-1.png"
				}
				else if(ImgUrl.includes("app_menu06")){
					e.target.childNodes[1].src = "https://image.webeon.net/icomes2024/app/2024_app_menu06-1.png"
				}
				else if(ImgUrl.includes("app_menu07")){
					e.target.childNodes[1].src = "https://image.webeon.net/icomes2024/app/2024_app_menu07-1.png"
				}
				else if(ImgUrl.includes("app_menu08")){
					e.target.childNodes[1].src = "https://image.webeon.net/icomes2024/app/2024_app_menu08-1.png"
				}
				else if(ImgUrl.includes("app_menu09")){
					e.target.childNodes[1].src = "https://image.webeon.net/icomes2024/app/2024_app_menu09-1.png"
				}
			});

			menuImg.addEventListener("drag", (e) => {
				
				//console.log(e.target.childNodes[1].src);
				let ImgUrl = e.target.childNodes[1].src;
				if(ImgUrl.includes("app_menu01")){
					e.target.childNodes[1].src = "https://image.webeon.net/icomes2024/app/2024_app_menu01.svg"
				}
				else if(ImgUrl.includes("app_menu02")){
					e.target.childNodes[1].src = "https://image.webeon.net/icomes2024/app/2024_app_menu02.svg"
				}
				else if(ImgUrl.includes("app_menu03")){
					e.target.childNodes[1].src = "https://image.webeon.net/icomes2024/app/2024_app_menu03.svg"
				}
				else if(ImgUrl.includes("app_menu04")){
					e.target.childNodes[1].src = "https://image.webeon.net/icomes2024/app/2024_app_menu04.svg"
				}
				else if(ImgUrl.includes("app_menu05")){
					e.target.childNodes[1].src = "https://image.webeon.net/icomes2024/app/2024_app_menu05.svg"
				}
				else if(ImgUrl.includes("app_menu06")){
					e.target.childNodes[1].src = "https://image.webeon.net/icomes2024/app/2024_app_menu06.svg"
				}
				else if(ImgUrl.includes("app_menu07")){
					e.target.childNodes[1].src = "https://image.webeon.net/icomes2024/app/2024_app_menu07.svg"
				}
				else if(ImgUrl.includes("app_menu08")){
					e.target.childNodes[1].src = "https://image.webeon.net/icomes2024/app/2024_app_menu08.svg"
				}
				else if(ImgUrl.includes("app_menu09")){
					e.target.childNodes[1].src = "https://image.webeon.net/icomes2024/app/2024_app_menu09.svg"
				}

			});

			menuImg.addEventListener("touchend", (e) => {
				//console.log(e.target.childNodes[1].src);
				let ImgUrl = e.target.childNodes[1].src;
				if(ImgUrl.includes("app_menu01")){
					e.target.childNodes[1].src = "https://image.webeon.net/icomes2024/app/2024_app_menu01.svg"
				}
				else if(ImgUrl.includes("app_menu02")){
					e.target.childNodes[1].src = "https://image.webeon.net/icomes2024/app/2024_app_menu02.svg"
				}
				else if(ImgUrl.includes("app_menu03")){
					e.target.childNodes[1].src = "https://image.webeon.net/icomes2024/app/2024_app_menu03.svg"
				}
				else if(ImgUrl.includes("app_menu04")){
					e.target.childNodes[1].src = "https://image.webeon.net/icomes2024/app/2024_app_menu04.svg"
				}
				else if(ImgUrl.includes("app_menu05")){
					e.target.childNodes[1].src = "https://image.webeon.net/icomes2024/app/2024_app_menu05.svg"
				}
				else if(ImgUrl.includes("app_menu06")){
					e.target.childNodes[1].src = "https://image.webeon.net/icomes2024/app/2024_app_menu06.svg"
				}
				else if(ImgUrl.includes("app_menu07")){
					e.target.childNodes[1].src = "https://image.webeon.net/icomes2024/app/2024_app_menu07.svg"
				}
				else if(ImgUrl.includes("app_menu08")){
					e.target.childNodes[1].src = "https://image.webeon.net/icomes2024/app/2024_app_menu08.svg"
				}
				else if(ImgUrl.includes("app_menu09")){
					e.target.childNodes[1].src = "https://image.webeon.net/icomes2024/app/2024_app_menu09.svg"
				}

			});
		});

	//수정필요~~~!!!
	/* td 클릭 시 페이지 이동 */
	$("li.pointer").click(function() {
        var e = $(this).find("input[name=e]").val();
        var day = $(this).find("input[name=day]").val();
        var target = $(this)
        var this_name = $(this).attr("name");

        table_location(event, target, e, day, this_name);
    });


	//[240418] sujeong / 이동 주석
	function table_location(event, _this, e, day, this_name) {
		window.location.href = "./app_program_detail.php?day=" + day + "&e=" + e + "&name=" + this_name;
	}


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
           alert("ICOMES App has been updated.")
           window.location.href = "https://play.google.com/store/apps/details?id=com.intoon.icomes";
        }
        //[240314] hub 스탬프 투어 소스 코드 수정 !@#$^
    } else if (window.webkit && window.webkit?.messageHandlers!=null) {
    // } else if (window.webkit && window.webkit.messageHandlers!=null) {
        try{
            window.webkit.messageHandlers.checkAppVersion.postMessage('');
        } catch (err){
            alert("ICOMES App has been updated.")
            window.location.href = "https://apps.apple.com/kr/app/icomes/id6450940155";
           
        }
    }

    checkAppVersionCallback = (appVersion) =>{
		const AOSver = 1.5;
		const IOSver = 1.6;

        if (typeof(window.AndroidScript) != "undefined" && window.AndroidScript != null) {
            if(parseFloat(appVersion) < AOSver){
                alert("ICOMES App has been updated.")
                window.location.href = "https://play.google.com/store/apps/details?id=com.intoon.icomes";     
            }
        //[240314] hub 스탬프 투어 소스 코드 수정 !@#$^
    } else if (window.webkit && window.webkit?.messageHandlers!=null) {
    // } else if (window.webkit && window.webkit.messageHandlers!=null) {
        if(parseFloat(appVersion) < IOSver){
            alert("ICOMES App has been updated.")
            window.location.href = "https://apps.apple.com/kr/app/icomes/id6450940155";
        }
    }
    }
    

});

	//webView.evaluateJavaScript("document.documentElement.style.webkitUserSelect='none'")


</script>

<?php
	include_once('./include/app_footer.php');
?>