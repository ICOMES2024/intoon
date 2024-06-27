<?php
include_once('./include/head.php');

$session_user = $_SESSION['USER'] ?? NULL;
$session_app_type = (!empty($_SESSION['APP']) ? 'Y' : 'N');

//230714 HUBDNC 앱 로그인 시 파라미터 추가 된 부분

include_once('./include/app_header.php');


$language = isset($_SESSION["language"]) ? $_SESSION["language"] : "en";
$locale = locale($language);

$_page_config = array(
    "m1" => [
        "welcome",
        "organizing_committee",
        "overview",
        "venue",
        "photo"
    ],
    "m2" => [
        "program_glance",
        "program_detail",
        "invited_speaker"
    ],
    "m3" => [
        "poster_abstract_submission",
        "abstract_submission",
        "abstract_submission2",
        "abstract_submission3",
        "eposter",
        "lecture_note_submission",
        "lecture_submission",
        "lecture_submission2",
        "lecture_submission3",
        "oral_presenters",
        "eposter_presenters"
    ],
    "m4" => [
        "registration_guidelines",
        "registration",
        "registration2",
        "registration3"
    ],
    "m5" => [
        "sponsor_information",
        "application",
        "application_complete"
    ],
    "m6" => [
        "accommodation",
        "attraction_historic",
        "useful_information"
    ]
);

$_page = str_replace(".php", "", end(explode("/", $_SERVER["REQUEST_URI"])));

//초록 마감 기간
$sql_during =    "SELECT
						IF(DATE(NOW()) BETWEEN period_poster_start AND period_poster_end, 'Y', 'N') AS yn
					FROM info_event";
$during_yn = sql_fetch($sql_during)['yn'];

//오늘 날짜 구하기 d_day 구하기
$today = date("Y. m. d");
$d_day = new DateTime("2023-09-07");

$current_date = new DateTime();
$current_date->format('Y-m-d');

$intvl = $current_date->diff($d_day);
$d_days = $intvl->days + 1;

$sql_info =    "SELECT
					CONCAT(fi_img.path, '/', fi_img.save_name) AS fi_img_url,
					igv.name_" . $language . " AS `name`,
					igv.address_" . $language . " AS address,
					igv.tel_" . $language . " AS tel,
					igv.homepage_en,
					igv.homepage_ko
				FROM info_general_venue AS igv
				LEFT JOIN `file` AS fi_img
					ON fi_img.idx = igv." . $language . "_img";
$info = sql_fetch($sql_info);
?>
<!-- [240314] sujeong / app_venue page 추가 -->
<!-- [240314] sujeong / 지도 아래 교통편 내용 삭제 -->
<section class="container venue app_version">
	<!-- HUBDNCLHJ : app 메뉴 탭 -->

    <div class="app_title_box">
        <h2 class="app_title">ICOMES 2024<button type="button" class="app_title_prev" onclick="javascript:window.location.href='./app_index.php';"><img src="https://image.webeon.net/icomes2024/app/2024_icon_arrow_prev_wh.svg" alt="이전페이지로 이동"></button></h2>
        <ul class="app_menu_tab">
            <li><a href="./app_welcome.php">Welcome Message</a></li>
            <!-- <li><a href="./app_welcome.php" class="get_ready_alert">Welcome Message</a></li> -->
            <li><a href="./app_organizing_committee.php">Organization</a></li>
            <li><a href="./app_overview.php">Overview</a></li>
            <li class="on"><a href="./app_venue.php">Venue</a></li>
        </ul>
    </div>    
    <!-- <h1 class="page_title">Venue</h1>  -->

	<!-- HUBDNCLHJ : app에선 타이틀 Conrad Seoul>Venue로 변경 됨(위 h1.page_title{Venue} 주석해제 후 아래 h1.page_title{Conrad Seoul} 주석처리). 메뉴 위치 이동 됨. 노출되는 컨텐츠 [호텔 이름과 주소, 연락처]+[지도]. -->

    <div class="inner">
        <!-- 호텔 이름과 주소, 연락처 -->
        <div class="section section1">
            <div>
                <!-- <div class="img_wrap" style="background: center / cover no-repeat url('<?= $info['fi_img_url'] ?>')">
						<img src="<?= $info['fi_img_url'] ?>" alt="hotel img">
					 </div> -->
                <div class="img_wrap">
					<img src="https://image.webeon.net/icomes2024/venue/conrad_seoul.jpg" alt="conrad seoul">
                </div>
				<ul class="app_overview_ul app_venue_info">
					<li>
						<p>Conrad Seoul</p>
						<div class="flex_top">
							<p>Address</p>
							<p><?= $info['address'] ?></p>
						</div>
						<div class="flex_top">
							<p>Tel</p>
							<p><?= $info['tel'] ?></p>
						</div>
						<div class="flex_top">
							<p>Website</p>
							<p><a href="https://www.conradseoul.co.kr/hub/en/main.do" class="link" target="_blank">www.conradseoul.co.kr</a></p>
						</div>
					</li>
				</ul>
            </div>
        </div>
		<!-- 지도 -->
		<div class="section section2">
			<h3 class="title">Location</h3>
			<div class="map_area" id="map"></div>
		</div>

        <!-- 교통편 / end -->
    </div>
</section>

<script>

window.initMap = function () {
  const map = new google.maps.Map(document.getElementById("map"), {
    center: { lat: 37.5253, lng: 126.9266 },
    zoom: 15,
  });

  /*const malls = [
    { label: "C", name: "코엑스몰", lat: 37.5115557, lng: 127.0595261 },
    { label: "G", name: "고투몰", lat: 37.5062379, lng: 127.0050378 },
    { label: "D", name: "동대문시장", lat: 37.566596, lng: 127.007702 },
    { label: "I", name: "IFC몰", lat: 37.5251644, lng: 126.9255491 },
    { label: "L", name: "롯데월드타워몰", lat: 37.5125585, lng: 127.1025353 },
    { label: "M", name: "명동지하상가", lat: 37.563692, lng: 126.9822107 },
    { label: "T", name: "타임스퀘어", lat: 37.5173108, lng: 126.9033793 },
  ];
  malls.forEach(({ label, name, lat, lng }) => {
    const marker = new google.maps.Marker({
      position: { lat, lng },
      label,
      map,
    });
  });*/
};

</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAG07_wEQCuA6ATw57sOmlXHl49_hR1_mA&callback=initMap"
  ></script>

<!--
<script type="text/javascript" src="//dapi.kakao.com/v2/maps/sdk.js?appkey=855afe12d2495e8a68f985bd09c52bc5"></script>
<script>
	var container = document.getElementById('map'); //지도를 담을 영역의 DOM 레퍼런스
	var options = { //지도를 생성할 때 필요한 기본 옵션
		center: new kakao.maps.LatLng(37.525609, 126.925992), //지도의 중심좌표.
		level: 2 //지도의 레벨(확대, 축소 정도)
	};

	var map = new kakao.maps.Map(container, options);
</script>
-->
<script>
	$(document).ready(function(){
        $(".app_header").removeClass("simple");
    })
</script>

<?php 

include_once('./include/app_footer.php'); 

?>