<?php
	include_once('./include/head.php');

	$session_user = $_SESSION['USER'] ?? NULL;
	$session_app_type = (!empty($_SESSION['APP']) ? 'N' : 'N');

	//230714 HUBDNC 앱 로그인 시 파라미터 추가 된 부분
		include_once('./include/header.php');

	//$language
	$sql_info = "SELECT
						overview_welcome_msg_" . $language . " AS welcome_msg,
						CONCAT(fi_sign.path, '/', fi_sign.save_name) AS fi_sign_url
					FROM info_general as ig
					left join `file` as fi_sign
						on fi_sign.idx = ig.overview_welcome_sign_" . $language . "_img";
	$info = sql_fetch($sql_info);

	$add_section_class = (!empty($session_user) && $session_app_type == 'Y') ? '' : '';
?>

<!-- app일때 section에 app_version 클래스 추가 -->
<section class="container welcome <?= $add_section_class; ?>">
	<!-- HUBDNCLHJ : app 메뉴 탭 주석 해제 -->
<?php
	if(!empty($session_user) && $session_app_type == 'Y') {
?>
		<div class="app_title_box">
			<h2 class="app_title">ICOMES 2024<button type="button" class="app_title_prev" onclick="javascript:window.location.href='./app_index.php';"><img src="/main/img/icons/icon_arrow_prev_wh.svg" alt="이전페이지로 이동"></button></h2>
			<ul class="app_menu_tab">
				<li class="on"><a href="./welcome.php">Welcome Message</a></li>
				<li><a href="./organizing_committee.php">Organization</a></li>
				<li><a href="./app_overview.php">Overview</a></li>
				<li><a href="./venue.php">Venue</a></li>
			</ul>
		</div>
<?php
	} 
?>

    <div>
		<h1 class="page_title">Welcome Message for ICOMES 2024
			<img class="welcome_line" src="https://image.webeon.net/icomes2024/icomes/2024%20ICOMES_welcome_line.png" alt="line"/>
		</h1>
        <div class="inner">
            <div>
				<!-- <h1 class="welcome_title"></h1> -->
				<h3 class="title icon_none">Dear Esteemed Colleagues</h3>
				<p class="welcome_txt">
					We are pleased to welcome you to the <span>I</span>nternational <span>C</span>ongress on <span>O</span>besity and <span>ME</span>tabolic <span>S</span>yndrome 2024 (ICOMES 2024), themed <span>‘Integrating Cutting-Edge Insights in Obesity Management.’</span> The conference will take place from September 5 (Thursday) to September 7 (Saturday), 2024, at the CONRAD Seoul, Korea.<br/><br/>Held annually, ICOMES gathers professionals from diverse fields to develop comprehensive strategies for diagnosing and treating obesity, aiming to improve the quality of life for those affected. Over the past decade, ICOMES has grown into one of Asia's largest obesity-focused conferences, striving to lead the region and influence the global community.<br/><br/>Thanks to your steadfast support, the Scientific Committee has worked diligently to develop a scientific program developing an <span>‘Integrating Cutting-Edge Insights’</span> encompassing the latest research in obesity management.<br/><br/>This year, we are honored to introduce a distinguished group of Plenary & Keynote Lecture speakers who will share their invaluable expertise: Joel K. Elmquist (USA), William Evans (USA), Jean-Pierre Després (Canada), Michael A. Nauck (Germany), Michael D. Jensen (USA), W. Timothy Garvey (USA). <br/><br/>We hope all participants will deepen their knowledge of obesity understanding and treatment through engaging discussions with distinguished speakers and fellow colleagues.<br/><br/>ICOMES serves as a vital platform to shape a brighter future for patients worldwide. We encourage you to actively engage, network, and spark transformative discussions that will drive significant advancements in obesity-related research and patient care.<br/><br/>We eagerly anticipate your active participation and presence at ICOMES 2024.<br/><br/><br/>Thank you.<br/><br/><br/>Sincerely, 

				</p>
			</div>
            <div class="head_profile">
				<div class="headman">
					<div class="headman_l"><img src="https://image.webeon.net/icomes2024/icomes/2024_ICOMES_chair-1-2.png" alt=""></div>
					<div class="headman_r">
						<!-- <h5>Name</h5>
						<h1>Sung Soo Kim, M.D., Ph.D</h1>
						<h5>Chairman</h5>
						<p>Korea Society for Study of Obesity</p>
						<div class="headman_sign"><img src="./img/headman_sign1.png" alt=""></div> -->
					</div>
				</div>
				<div class="headman">
					<div class="headman_l"><img src="https://image.webeon.net/icomes2024/icomes/2024_ICOMES_chair-2-1.png" alt=""></div>
					<div class="headman_r">
						<!-- <h5>Name</h5> -->
						<!-- <h1>Cheol-Young Park, M.D., Ph.D</h1>
						<h5>President</h5>
						<p>Korea Society for Study of Obesity</p>
						<div class="headman_sign"><img src="./img/headman_sign2_1.png" alt=""></div> -->
					</div>
				</div>
			</div>
        </div>
    </div>
</section>

<?php 
  
        include_once('./include/footer.php');

?>