<?php include_once('./include/head.php');?>
<?php include_once('./include/app_header.php');?>

<!-- HUBDNCAJY : App - Overview 페이지 -->
<section class="container app_version app_overview">
	<div class="app_title_box">
		<h2 class="app_title">
			ICOMES 2024
			<button type="button" class="app_title_prev" onclick="javascript:window.location.href='./app_index.php';"><img src="https://image.webeon.net/icomes2024/app/2024_icon_arrow_prev_wh.svg" alt="이전페이지로 이동"></button>
		</h2>
		<ul class="app_menu_tab">
			<li><a href="./app_welcome.php">Welcome Message</a></li>
			<!-- <li><a href="./app_welcome.php" class="get_ready_alert">Welcome Message</a></li> -->
			<li><a href="./app_organizing_committee.php">Organization</a></li>
			<li class="on"><a href="./app_overview.php">Overview</a></li>
			<li><a href="./app_venue.php">Venue</a></li>
		</ul>
	</div>
	<div class="inner">
		<div class="contents_box">
			<div class="app_contents_wrap type3">
				<ul class="app_overview_ul">
					<li>
						<p>Title</p>
						<div>
							<b>ICOMES 2024</b>
							<span class="small_txt">(2024 International Congress on Obesity and MEtabolic Syndrome)</span>
						</div>
					</li>
					<li>
						<p>Date</p>
						<div>September 5 (Thu) ~ 7 (Sat), 2024</div>
					</li>
					<li>
						<p>Venue</p>
						<div>Conrad Seoul Hotel, Seoul, Republic of Korea</div>
					</li>
					<li>
						<p>Organized By</p>
						<div>
							<!-- <?= htmlspecialchars_decode($info['overview_organized']) ?> (KSSO) -->
							Korean Society for the Study of Obesity (KSSO)
						</div>
					</li>
					<!-- [240313] sujeong / theme 미정 주석 -->
					<li>
						<p>Theme</p>
						<div>Integrating Cutting-Edge Insights in Obesity Management</div>
					</li>
					<li>
						<p>Official Language</p>
						<div>
							<!-- <?= htmlspecialchars_decode($info['overview_official_language']) ?> -->
							English
						</div>
					</li>
					<li>
						<p>Secretariat</p>
						<div>
							A-Block Richensia 4F, 341 Baekbeom-ro, Yongsan-gu, Seoul 04315, Korea
							<br/>Tel : +82-2-2285-2582 / Email : icomes@into-on.com
						</div>
					</li>
					<!-- <li class="fin">
						<a href="javascript:;">
							ICOMES 2023 Welcome Cocktail Party begins soon! 
						</a>
					</li> -->
				</ul>
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