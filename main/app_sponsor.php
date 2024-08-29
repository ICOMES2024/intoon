<?php include_once('./include/head.php'); ?>
<?php 
    include_once('./include/app_header.php');
?>

<style>
    .grade_wrap li a.daewon, .grade_wrap li a.lilly {transform:scale(1) !important;}
</style>

<!-- app일 시 section에 app_version 클래스 추가 -->
<section class="container sponsor app_version">
	<!-- HUBDNCLHJ : app 메뉴 탭 -->

	<div class="app_title_box">
		<h2 class="app_title">Sponsorship<button type="button" class="app_title_prev" onclick="javascript:window.location.href='./app_index.php';"><img src="https://image.webeon.net/icomes2024/app/2024_icon_arrow_prev_wh.svg" alt="이전페이지로 이동"></button></h2>
		<div class="app_menu_box ">
			<ul class="app_menu_tab langth_2">
			<li class="on"><a href="./app_sponsor.php">Sponsorship</a></li>
			<li><a href="./app_sponsor_exhibition.php">Exhibition</a></li>
			</ul>
		</div>
	</div>

	<!-- HUBDNCLHJ : APP일시 h1.page_title 주석처리 후 app 메뉴 탭 주석해제 -->

	<div class="app_contents_box">
		<div class="sponsor_grade">
		<p class="grade_title purple_bg">Diamond</p>
                <ul class="grade_wrap length_1">
                    <li class="grade_diamond">
                        <a href="https://www.novonordisk.com/" class="novo_nordisk_page" target="_blank">novo nordisk</a>
                    </li>
                </ul>
                <p class="grade_title green_bg05">Platinum</p>
                <ul class="grade_wrap length_1">
                    <li>
                        <a href="https://www.alvogen.com/" class="alvogen" target="_blank">Alvogen</a>
                    </li>
                    <li>
                        <a href="https://www.hanmipharm.com/ehanmi/handler/Home-Start" class="hanmi_pharm" target="_blank">Hanmi Pharm</a>
                    </li>
                    <li>
                        <a href="http://www.ckdpharm.com/en/home" class="chong_kun_dang" target="_blank">Chong Kun Dang</a>
                    </li>
                </ul>
            <p class="grade_title gold_bg">Gold</p>
            <ul class="grade_wrap length_3 no_padding_bottom">
                <li class="small">
                    <a href="https://eng.handok.com/eng/" class="handok" target="_blank">HANDOK</a>
                </li>
                <li class="small">
                    <a href="http://eng.yuhan.co.kr/Main/" class="yuhan" target="_blank">YUHAN</a>
                </li>
                <li class="small">
                    <a href="http://en.donga-st.com/Main.da" class="dong_a" target="_blank">Dong-A ST</a>
                </li>
                <!--[240205] sujoeng 배열 맞추기 위해 PC -> 3 / 4 -->
                <div class="length_3 pc_only">
                    <li class="small">
                        <a href="https://www.inno-n.com/eng" class="inno_n" target="_blank">inno N</a>
                    </li>
                    <li class="small">
                        <a href="https://www.daewoong.co.kr/en/main/index" class="daewoong_1" target="_blank">DAEWOONG</a>
                    </li>
                    <li class="small">
                        <a href="https://www.lilly.co.kr/" class="lilly" target="_blank">Lilly</a>
                    </li>
                </div>
                  <!--[240205] sujoeng 배열 맞추기 위해 mobile -> 2 -->
                    <li class="small mb_only">
                        <a href="https://www.inno-n.com/eng" class="inno_n" target="_blank">inno N</a>
                    </li>
                    <li class="small mb_only">
                        <a href="https://m.daewoong.co.kr/en/main/index" class="daewoong_1" target="_blank">DAEWOONG</a>
                    </li>
                    <li class="small mb_only">
                        <a href="https://www.lilly.co.kr/" class="lilly" target="_blank">Lilly</a>
                    </li>

            </ul>
            <p class="grade_title silver_bg">Silver</p>
            <ul class="grade_wrap length_3 no_padding_bottom">
                <li class="small">
                        <a href="https://www.astrazeneca.com/" class="astra_zeneca" target="_blank">Astra Zeneca</a>
                    </li>
                <li class="small">
                    <a href="https://www.lgchem.com/main/index" class="lg_chem" target="_blank">LG Chem</a>
                </li>
                <li class="small">
                    <a href="https://www.celltrionph.com/en-us/home/index" class="celltrion" target="_blank">CELLTRION</a>
                </li>
            
            <div class="length_3 pc_only">
                <li class="small">
                    <a href="https://www.sanofi.com/en/our-company" class="sanofi" target="_blank">sanofi</a>
                </li>
                <li class="small">
                    <a href="https://www.boryung.co.kr/en/" class="boryung" target="_blank">BORYUNG</a>
                </li>
                <li class="small">
                    <a href="https://eng.ekdp.com/main.do" class="kwangdong" target="_blank">Kwangdong</a>
                </li>
            </div>
                <li class="small mb_only">
                    <a href="https://www.sanofi.com/en/our-company" class="sanofi" target="_blank">sanofi</a>
                </li>
                <li class="small mb_only">
                    <a href="https://www.boryung.co.kr/en/" class="boryung" target="_blank">BORYUNG</a>
                </li>
                <li class="small mb_only">
                    <a href="https://eng.ekdp.com/main.do" class="kwangdong" target="_blank">Kwangdong</a>
                </li>
                </ul>  
            <p class="grade_title bronze_bg">Bronze</p>
            <ul class="grade_wrap length_4">
                <li>
                    <a href="https://www.gccorp.com/eng/index" class="gc_biopharma" target="_blank">GC Niopharma</a>
                </li>
                <li>
                    <a href="http://ajupharm.co.kr/en/index.html" class="aju_pharm" target="_blank">AJU PHARM</a>
                </li>
                <li>
                    <a href="https://www.daiichisankyo.com/" class="daiichi_sankyo" target="_blank">Daiichi Sankyo</a>
                </li>
            
                <li>
                    <a href="https://www.organon.com/" class="organon" target="_blank">ORGANON</a>
                </li>
            
                <div class="sponsor length_5">
                    <li>
                        <a href="https://www.boehringer-ingelheim.com/" class="boehringer" target="_blank">Boehringer INgelheim</a>
                    </li>
                    <li>
                        <a href="http://www.dalimpharm.co.kr/en_index.html" class="dalimbiotech" target="_blank">dalimbiotech</a>
                    </li>
                    <li class="small">
                        <a href="https://www.daewonpharm.com/eng/main/index.jsp" class="daewon" target="_blank">Daewon</a>
                    </li>
                    <li>
                        <a href="https://daewoongbio.co.kr/daewoongbiokr/main/main.web" class="daewoong_2" target="_blank">DAEWOONG</a>
                    </li>
                    <li>
                        <a href="https://www.jw-pharma.co.kr/pharma/en/main.jsp" class="jw_pharm" target="_blank">jw Pharmaceutical</a>
                    </li>
                </div>
            </ul>
		</div>
	</div>
</section>


<!-- <div class="popup app_pop" style="display:block;">
    <div class="pop_bg"></div>
    <div class="pop_contents">
		<img src="/main/img/app_pop_stamp_tour_event.png" alt="">
    </div>
</div> -->
<script>
	$(document).ready(function(){
        $(".app_header").removeClass("simple");
    })
</script>

<?php 
        // mo일때
        include_once('./include/app_footer.php'); 
?>