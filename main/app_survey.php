<?php include_once('./include/head.php');?>
<?php include_once('./include/app_header.php');?>

<!-- HUBDNCLHJ : app survey 페이지 -->
<section class="container app_survey app_version">
	<div class="app_title_box">
		<h2 class="app_title">
			survey
			<button type="button" class="app_title_prev" onclick="javascript:window.location.href='./app_index.php';">
				<img src="https://image.webeon.net/icomes2024/app/2024_icon_arrow_prev_wh.svg" alt="이전페이지로 이동">
			</button>
		</h2>
	</div>
	<div class="inner">
		<div class="contents_box">
			<div class="app_contents_wrap">
				<div class="survey_box box_top">
					<a href="https://docs.google.com/forms/d/1JuDGFzbgqBlPP3F9xCPoOtzFs1Y-9na9qh3BvWFcvMY/edit" target="_blank">
						<img src="./img/icons/icon_survey_en.svg" alt="">
						<p class="center_t">
							<span class="bold">ICOMES 2024</span><br/>
							Satisfaction and<br/>Feedback Survey
						</p>
						<button href="javascript:;" class="lang">English</button>
					</a>
				</div>
				<!-- <div class="survey_box box_bottom">
					<a href="https://forms.gle/zfJbNAyNxggE7NxX9/" target="_blank">
						<img src="./img/icons/icon_survey_kr.svg" alt="">
						<p class="center_t">
							<span class="bold">ICOMES 2024</span><br/>
							만족도 및<br/>피드백 설문조사
						</p>
						<button href="javascript:;" class="lang">한국어</button>
					</a>
				</div> -->
			</div>
		</div>
	</div>
</section>
<script>
	$(document).ready(function(){
        $(".app_header").removeClass("simple");
    })
</script>

<?php include_once('./include/app_footer.php');?>