<?php
	// main
	$img_col_name = check_device() ? "mo_" : "pc_";
	$img_col_name .= $language."_img";
	$banner_query =	"SELECT
						b.idx,
						CONCAT(fi_img.path, '/', fi_img.save_name) AS fi_img_url
					FROM banner AS b
					LEFT JOIN `file` AS fi_img
						ON fi_img.idx = b.".$img_col_name."
					WHERE b.".$img_col_name." > 0";
	$banner = get_data($banner_query);
	$banner_cnt = count($banner);

	// event
	$info_query =	"SELECT
						ie.title AS event_title,
						ie.period_event_start,
						ie.period_event_end,
						igv.name_".$language." AS venue_name
					FROM info_event AS ie
					,info_general_venue igv";
	$info = sql_fetch($info_query);

	//key date
	$key_date_query =	"SELECT
							`key_date`,
							contents_".$language." AS contents
						FROM key_date
						WHERE `type` = 'poster'
						#AND DATE(`key_date`) >= DATE(NOW())
						AND DATE(`key_date`) <> '0000-00-00'
						ORDER BY `key_date`
						LIMIT 4";
	$key_date = get_data($key_date_query);
	$key_date_cnt = count($key_date);

	//2021_06_23 HUBDNC_KMJ NOTICE 쿼리
	$notice_list_query = "SELECT
							idx,
							title_en,
							title_ko,
							DATE_FORMAT(register_date, '%Y-%m-%d') AS date_ymd
						FROM board
						WHERE `type` = 1
						AND is_deleted = 'N'
						ORDER BY register_date DESC
						LIMIT 5";
	$notice_list = get_data($notice_list_query) ?? [];
	$total_notice = count($notice_list);

	//230519 HUBDNC_NYM Newsletter 쿼리
	$newsletter_list_query = "	SELECT
									idx,
									title_en,
									title_ko,
									DATE_FORMAT(register_date, '%Y-%m-%d') AS date_ymd
								FROM board
								WHERE `type` = 0
								AND is_deleted = 'N'
								ORDER BY register_date DESC
								LIMIT 5";
	$newsletter_list = get_data($newsletter_list_query) ?? [];	
	$total_newsletter = count($newsletter_list) ?? 0;
?>

<style>
	body {background-color:rgba(234,234,234,0.45);}
	.index_sponsor_wrap {display:block;}
</style>

<section class="main_section">
	<div class="section_bg">
		<div class="container">
			<!-- <img src="https://image.webeon.net/icomes2024/main/2024_img_vsl_text_2.png" class="pc_only img_vsl_text" alt="">
			<img src="https://image.webeon.net/icomes2024/main/2024_main_img.png" class="pc_only main_img" alt=""> -->
			<img src="https://image.webeon.net/icomes2024/main/2024_icomes_main_v2.png" class="pc_only main_img"/>
			<div class="mb_only img_vsl_text" style="">
			</div>
			<!-- 상단 타이틀 -->
			<div class="txt_wrap">
			</div>
		</div>
		<div class="main_btn_wrap">
			<button type="button" class="btn_circle_arrow"></button>
		</div>
		<div class="dates_area">
			<p class="kst">*KST (UTC+9)</p>
			<ul>
				<li>
					<a href="/main/abstract_submission_guideline.php">
						<h2>June 20 <span>(Thu)</span></h2>
						<!-- <i><img src="/main/img/icons/icon_report.svg" alt=""></i> -->
						<p>Abstract Submission<br/>Deadline</p>
					</a>
				</li>
				<li>
					 <a href="/main/abstract_submission_guideline.php"> 
						<h2>End of Every Month <span>(until June)</span></h2>
						 <!-- <i><img src="/main/img/icons/icon_letter.svg" alt=""></i>  -->
						<p style="margin-top: 10px;">Notification of<br/>Acceptance</p>
					</a>
				</li>
				<li>
					<a href="/main/registration_guidelines.php">
						<h2>June 16 <span>(Sun)</span></h2>
						<!-- <i><img src="/main/img/icons/icon_calendar.svg" alt=""></i> -->
						<p>Early-bird Registration <br/>Deadline</p>
					</a>
				</li>
				<li>
					 <a href="/main/abstract_submission_award.php"> 
						<!-- <h2>2 Jun</h2>  -->
						<h2>Awards &amp;<br/>Grants</h2>
						<i><img src="https://image.webeon.net/icomes2024/main/img_trophy.svg" alt=""></i>
					</a>
				</li>
			</ul>
		</div>
	</div>
</section>

<!-- Plenary Speakers -->
 <div class="speakers_wrap">
	<div class="container">
		<h3 class="title">Plenary &amp; Keynote Lecture Speakers</h3>
		<div class="">
			<div class="main_speaker_wrap">
				<div>
					<img src="https://image.webeon.net/icomes2024/main/2024_main_speaker_1-6.png"/>
				</div>
				<div>
					<img src="https://image.webeon.net/icomes2024/main/2024_main_speaker_2-6.png"/>
				</div>
				<div>
					<img src="https://image.webeon.net/icomes2024/main/2024_main_speaker_3-6.png"/>
				</div>
				<div>
					<img src="https://image.webeon.net/icomes2024/main/2024_main_speaker_4-6.png"/>
				</div>
				<div>
					<img src="https://image.webeon.net/icomes2024/main/2024_main_speaker_5-6.png"/>
				</div>
				<div>
					<img src="https://image.webeon.net/icomes2024/main/2024_main_speaker_6-6.png"/>
				</div>
				<div>
					<img src="https://image.webeon.net/icomes2024/main/2024_main_speaker_7-6.png"/>
				</div>
			</div>
			<!-- <div class="main_btn_wrap">
				<button type="button" class="btn_circle_arrow"></button>
			</div> -->
		</div>
	</div>
</div>
<!-- Key dates & News,Notice -->
<section style="background-color: #FFF;">
	<div class="container">
		<div class="noti_wrap">
			<!-- 2022년 버전에 뉴스레터 없어서 테스트 텍스트로 넣어놓음 -->
			<div class="noti_area">
				<h3 class="title">Newsletter<a href="/main/board_newsletter.php" class="moreview_btn">+</a></h3>
				<ul>
				<?php
					if ($total_newsletter > 0) {
						foreach ($newsletter_list AS $newsletter) {
				?>
							<li><a href="/main/board_newsletter_detail.php?no=<?= $newsletter["idx"] ?>"><p><?= $newsletter["title_en"] ?></p><span><?= $newsletter["date_ymd"] ?? "-" ?></span></a></li>
				<?php
						}
					} else {
				?>
						<li>
							<div class='no_data'>Will be updated</div>
						</li>
				<?php
					}
				?>
				</ul>
			</div>
			<!-- 2022년 버전에 공지사항 없어서 테스트 텍스트로 넣어놓음 -->
			<div class="noti_area">
				<h3 class="title">Notice<a href="/main/board_notice.php" class="moreview_btn">+</a></h3>
				<ul>
					<?php if(count($notice_list) > 0) { ?>
						<?php 
							for($i = 0; $i < count($notice_list); $i++) { 
								$notice = $notice_list[$i];
						?>
							<li><a href="/main/board_notice_detail.php?no=<?= $notice["idx"] ?>&i=<?= $total_notice - $i ?>"><p><?= $notice["title_en"] ?? "" ?></p><span><?= $notice["date_ymd"] ?? "" ?></span></a></li>
						<?php } ?>
					<?php } else { ?>
						<li>
							<div class='no_data'>Will be updated</div>
						</li>
					<?php } ?>
				</ul>
			</div>
		</div>
	</div>
</section>
<!-- fixed_btn : register > 실제 등록 가능기간이기 전까지 주석처리 ()
<button type="button" class="btn_fixed_triangle"><span>Register<br>Now</span></button>-->
<!-- page loading bar 주석-->
<div class="page_loading">
	<video id="vid_auto" preload="auto" muted="muted" volume="0" playsinline autoplay onended="myFunction()"></video>
</div>
<!-- 2023 팝업 -->
<!--
<div class="popup pop_2023" style="display:block;">
	<div class="pop_bg"></div>
	<div class="pop_contents">
		<img src="/main/img/pop_2023_bg.png" class="bg" alt="">
		<img src="/main/img/pop_2023_line.png" class="line" alt="">
		<div class="pop_text_box">
			<h1>
				<p>See you on the next</p>
				<p>ICoLA 2023</p>
				<p>Seoul, Korea</p>
			</h1>
			<div class="btns">
				<button>September 14(Thu) - 16(Sat), 2023</button>
			</div>
		</div>
		<div class="close_area clearfix2">
			<div>
				<input type="checkbox" id="today_check" class="checkbox input required">
				<label for="today_check">Do not open this window for 24 hours.</label>
			</div>
			<a href="javascript:;" class="">Close <img src="/main/img/main_pop_close.png" alt=""></a>
		</div>	
	</div>
</div>
-->

<!-- ICOMES 2023 Main 팝업
<div class="popup last_breaking_pop">
    <div class="pop_bg"></div>
    <div class="pop_contents">
		<a href="/main/abstract_submission.php"><img src="/main/img/Last_Breaking_popup_230731.png" alt=""></a>
        <div class="pop_bottoms">
			<button type="button" class="pop_close bold">Close</button>
        </div>
    </div>
</div>
 -->

<!-- 2023/08/16 팝업 -->
<!-- <div class="popup notification_pop" style="display:block;">
    <div class="pop_bg"></div>
    <div class="pop_contents">
		<div class="top">Notification of Acceptance</div>
		<div class="inner">
			<ul>
				<li>
					<button type="button" onClick="javascript:window.open('/main/download/Oral Presentation_0824.pdf')">Oral Presentation List<img src="/main/img/icons/download_w2.svg" /></button>			
				</li>
				<li>
					<button type="button" onClick="javascript:window.open('/main/download/Guided Poster Presentation_0824.pdf')">Guided Poster Presentation List<img src="/main/img/icons/download_w2.svg" /></button>			
				</li>
				<li>
					<button type="button" onClick="javascript:window.open('/main/download/Poster Exhibition_0824.pdf')">Poster Exhibition List<img src="/main/img/icons/download_w2.svg" /></button>
				</li>
			</ul>
		</div>
		<div class="close_area">
			<div>
				<input type="checkbox" id="today_check" name="hidden" class="checkbox input required">
				<label for="today_check">Do not open this window for 24 hours.</label>
			</div>
			<a href="javascript:;" class="pop_close" onclick="closeWin()">Close <img src="/main/img/main_pop_close.png" alt=""></a>
		</div>	
    </div>
</div> -->

<!-- 230831 팝업 1/2 -->
<!-- <div class="popup main_pop application_pop" style="display:block;">
    <div class="pop_bg"></div>
    <div class="pop_contents">
		<img src="/main/img/230831_pop01.png" alt="">
		<div class="close_area">
			<div>
				<input type="checkbox" id="today_check2" name="hidden" class="checkbox input required">
				<label for="today_check2">Do not open this window for 24 hours.</label>
			</div>
			<a href="javascript:;" class="pop_close" onclick="closeWin()">Close <img src="/main/img/main_pop_close.png" alt=""></a>
		</div>	
    </div>
</div>

230831 팝업 2/2
<div class="popup main_pop symposium_pop" style="display:block;">
    <div class="pop_bg"></div>
    <div class="pop_contents">
		<img src="/main/img/230831_pop02.png" alt="">
		<a href="https://forms.gle/dvj5zCac9edUhBjR8" target="_blank">
            <img src="/main/img/230831_pop02_btn.png" alt="" class="main_pop_btn">        
        </a>
		<div class="close_area">
			<div>
				<input type="checkbox" id="today_check1" name="hidden" class="checkbox input required">
				<label for="today_check1">Do not open this window for 24 hours.</label>
			</div>
			<a href="javascript:;" class="pop_close" onclick="closeWin()">Close <img src="/main/img/main_pop_close.png" alt=""></a>
		</div>	
    </div>
</div> -->


<!-- <script>
    // 쿠키 가져오기
    var getCookie = function (cname) {
        var name = cname + "=";
        var ca = document.cookie.split(';');
        for(var i=0; i<ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0)==' ') c = c.substring(1);
            if (c.indexOf(name) != -1) return c.substring(name.length,c.length);
        }
        return "";
    }

    // 24시간 기준 쿠키 설정하기  
    var setCookie = function (cname, cvalue, exdays) {
        var todayDate = new Date();
        todayDate.setTime(todayDate.getTime() + (exdays*24*60*60*1000));    
        var expires = "expires=" + todayDate.toUTCString(); // UTC기준의 시간에 exdays인자로 받은 값에 의해서 cookie가 설정 됩니다.
        document.cookie = cname + "=" + cvalue + "; " + expires;
    }

    var couponClose = function(){
        if($("#today_check").is(":checked") == true){
            setCookie("close","Y",1);   //기간( ex. 1은 하루, 7은 일주일)
        }
        $(".notification_pop").hide();
    }
    
    $(document).ready(function(){
        var cookiedata = document.cookie;
        if(cookiedata.indexOf("close=Y")<0){
            $(".notification_pop").show();
        }else{
            $(".notification_pop").hide();
        }
        $(".notification_pop .pop_close").click(function(){
            couponClose();
        });
    });
</script>
 -->