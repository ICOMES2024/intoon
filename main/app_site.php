<?php include_once('./include/head.php'); ?>
<?php 
    include_once('./include/app_header.php');
?>

<!-- HUBDNCAJY : App - Site 페이지 -->
<section class="container app_version app_happening app_scientific">
<div class="app_title_box">
		<h2 class="app_title">KSSO<button type="button" class="app_title_prev" onclick="javascript:window.location.href='./app_index.php';"><img src="https://image.webeon.net/icomes2024/app/2024_icon_arrow_prev_wh.svg" alt="이전페이지로 이동"></button></h2>
	</div>
	<div class="contents_box">
		<div class="schedule_area">
			<ul class="site_ul">
				<li><a href="https://www.kosso.or.kr/eng/" target="_blank"><img src="https://image.webeon.net/icomes2024/app/2024_site_01.png"/></a></li>
				<li><a href="https://www.jomes.org/main.html" target="_blank"><img src="https://image.webeon.net/icomes2024/app/2024_site_02.png"/></a></li>
				<li><a href="https://youtube.com/@allobesity" target="_blank"><img src="https://image.webeon.net/icomes2024/app/2024_site_03.png"/></a></li> 
				<li><a href="https://www.instagram.com/ksso_official/" target="_blank"><img src="https://image.webeon.net/icomes2024/app/2024_site_04.png"/></a></li>
				<li><a href="https://www.kosso.or.kr/board/view.html?num=1884&start=0&code=notice_list&comm=&key=&keyword=%BE%DB&left=&left_comm=" target="_blank"><img src="https://image.webeon.net/icomes2024/app/2024_site_05.png"/></a></li>
			</ul>
		</div>
	</div>
</section>
<script>
	$(document).ready(function(){
        $(".app_header").removeClass("simple");
    })
</script>

<script>

	function openUrl(num){
		let url = "";
		if(num === 5){
			url = "https://www.kosso.or.kr/board/view.html?num=1884&start=0&code=notice_list&comm=&key=&keyword=%BE%DB&left=&left_comm="
		}
		//window.location.href = url;
		window.open(url)
	}
	
</script>

<?php include_once('./include/app_footer.php');?>