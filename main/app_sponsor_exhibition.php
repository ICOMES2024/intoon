<?php include_once('./include/head.php'); ?>
<?php
    $session_user = $_SESSION['USER'] ?? NULL;
    $session_app_type = (!empty($_SESSION['APP']) ? 'Y' : 'N');

    include_once('./include/app_header.php');

?>

<!-- app일 시 section에 app_version 클래스 추가 -->
<section class="container sponsor app_tour_map exhibition app_version">
	<!-- HUBDNCLHJ : app 메뉴 탭 -->

	<div class="app_title_box">
		<h2 class="app_title">Sponsorship<button type="button" class="app_title_prev" onclick="javascript:window.location.href='./app_index.php';"><img src="https://image.webeon.net/icomes2024/app/2024_icon_arrow_prev_wh.svg" alt="이전페이지로 이동"></button></h2>
		<div class="app_menu_box ">
			<ul class="app_menu_tab langth_2">
			<li><a href="./app_floor_plan.php">Floor Plan</a></li>
			<li class="on"><a href="./app_sponsor_exhibition.php">Exhibition</a></li>
			</ul>
		</div>
	</div>
    <!-- 앱 뷰 -->
	<div class="inner">
		<div class="contents_box">
			<ul class="app_tab min_tab fix_cont">
				<li class="on"><a href="javascript:;">3F</a></li>
				<li><a href="javascript:;">5F</a></li>
				<li><a href="javascript:;">6F</a></li>
			</ul>
			
			<div class="app_contents_wrap type2">
				<div class="floor floor_3 on">
					<div class="floor_map">
						<!-- <img src="/main/img/floor_map_3f.png" alt=""> -->
						<img src="/main/img/img_exhibition_app_floor_3.png" alt="">
					</div>
					<div class="floor_table_wrap">
						<table class="floor_table">
							<colgroup>
								<col width="120px"/>
								<col />
							</colgroup>
							<thead>
								<tr>
									<th>Booth No.</th>
									<th>Company Name</th>
								</tr>
							</thead>
							<tbody>
								<tr class="level_green">
									<td>1</td>
									<td>KSSO</td>
								</tr>
								<tr class="level_green">
									<td>2</td>
									<td>JOMES</td>
								</tr>
								<tr class="level_yellow">
									<td>3-4</td>
									<td>Chong Kun Dang</td>
								</tr>
								<tr class="level_yellow">
									<td>5-6</td>
									<td>Yuhan</td>
								</tr>
								<tr class="level_yellow">
									<td>7-8</td>
									<td>Handok</td>
								</tr>
								<tr class="level_yellow">
									<td>9-10</td>
									<td>MSD</td>
								</tr>
								<tr class="level_yellow">
									<td>11-12</td>
									<td>Dong-A ST</td>
								</tr>
								<tr class="level_yellow">
									<td>13-14</td>
									<td>Daewoong</td>
								</tr>
								<tr class="level_pink">
									<td>15-18</td>
									<td>Alvogen</td>
								</tr>
								<tr class="level_cyan">
									<td>19-21</td>
									<td>Novo Nordisk</td>
								</tr>
								<tr class="level_yellow">
									<td>22-23</td>
									<td>Hanmi Pharm.</td>
								</tr>
								<tr class="level_yellow">
									<td>24-25</td>
									<td>AstraZeneca</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<div class="floor floor_5">
					<div class="floor_map">
						<!-- <img src="/main/img/floor_map_5f.png" alt=""> -->
						<img src="/main/img/img_exhibition_app_floor_5.png" alt="">
					</div>
					<div class="floor_table_wrap">
						<table class="floor_table">
							<colgroup>
								<col width="120px"/>
								<col />
							</colgroup>
							<thead>
								<tr>
									<th>Booth No.</th>
									<th>Company Name</th>
								</tr>
							</thead>
							<tbody>
								<tr class="level_brown">
									<td>26-27</td>
									<td>Kwangdong</td>
								</tr>
								<tr class="level_skyblue">
									<td>28</td>
									<td>SELVAS Healthcare</td>
								</tr>
								<tr class="level_yellow">
									<td>29-30</td>
									<td>inno.N</td>
								</tr>
								<tr class="level_gray">
									<td>31-32</td>
									<td>Celltrion</td>
								</tr>
								<tr class="level_brown">
									<td>33-34</td>
									<td>Daiichi-Sankyo</td>
								</tr>
								<tr class="level_brown">
									<td>35-36</td>
									<td>Aju Pharm</td>
								</tr>
								<tr class="level_gray">
									<td>37-38</td>
									<td>GC Biopharma</td>
								</tr>
								<tr class="level_brown">
									<td>39-40</td>
									<td>Daewon</td>
								</tr>
								<tr class="level_gray">
									<td>41-42</td>
									<td>Sanoﬁ</td>
								</tr>
								<tr class="level_gray">
									<td>43-44</td>
									<td>LG Chem</td>
								</tr>
								<tr class="level_brown">
									<td>45-46</td>
									<td>Oraganon</td>
								</tr>
								<tr class="level_skyblue">
									<td>47</td>
									<td>Bukwang</td>
								</tr>
								<tr class="level_skyblue">
									<td>48</td>
									<td>Otsuka</td>
								</tr>
								<tr class="level_brown">
									<td>49-50</td>
									<td>Boryung</td>
								</tr>
								<tr class="level_skyblue">
									<td>51</td>
									<td>EOFLOW</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<div class="floor floor_6">
					<div class="floor_map">
						<!-- <img src="/main/img/floor_map_6f.png" alt=""> -->
						<img src="/main/img/img_exhibition_app_floor_6.png" alt="">
					</div>
					<div class="floor_table_wrap">
						<table class="floor_table">
							<colgroup>
								<col width="120px"/>
								<col />
							</colgroup>
							<thead>
								<tr>
									<th>Booth No.</th>
									<th>Company Name</th>
								</tr>
							</thead>
							<tbody>
								<tr class="level_brown">
									<td>52-53</td>
									<td>Biily</td>
								</tr>
								<tr class="level_brown">
									<td>54-55</td>
									<td>Lilly</td>
								</tr>
								<tr class="level_skyblue">
									<td>56</td>
									<td>KUKJE PHARM CO.,LTD</td>
								</tr>
								<tr class="level_brown">
									<td>57-58</td>
									<td>Dalimbiotech</td>
								</tr>
								<tr class="level_skyblue">
									<td>59</td>
									<td>VIATRIS</td>
								</tr>
								<tr class="level_brown">
									<td>60-61</td>
									<td>JW Pahrmacutical</td>
								</tr>
								<tr class="level_skyblue">
									<td>62</td>
									<td>Novartis</td>
								</tr>
								<tr class="level_skyblue">
									<td>63</td>
									<td>Nexpharm Korea</td>
								</tr>
							</tbody>
						</table>
						<table class="floor_table">
							<thead>
								<tr>
									<th>Event Zone</th>
								</tr>
							</thead>
							<tbody>
								<tr class="level_peach">
									<td>Souvenir Exchange</td>
								</tr>
								<tr class="level_lightpink">
									<td>Caricature Booth</td>
								</tr>
								<tr class="level_lime">
									<td>Photo Zone</td>
								</tr>
							</tbody>
						</table>
						<table class="floor_table">
							<thead>
								<tr>
									<th>Barista Coffee</th>
								</tr>
							</thead>
							<tbody>
								<tr class="level_lightyellow">
									<td>Coffee Booth</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div> 
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
	$(document).ready(function() {
		$(window).resize(function() {
			if ($(window).width() > 480) {
				$(".sponsor_exhibition .clearfix2 > img").each(function() {
					var img_height = $(this).height();
					$(this).siblings("table").css("min-height", img_height)
					$(this).siblings(".in_clear").css("min-height", img_height)
					var div_height = $(this).siblings(".in_clear").height();
					$(this).siblings(".in_clear").find("table").css("min-height", div_height)
					//console.log(div_min_height);
				});
			}
		});
		$(window).trigger("resize");
	});

	// Tour Map 층별 탭
	$(".app_tour_map .app_tab li").click(function(){
		var i = $(this).index();
		$(".app_contents_wrap").children(".floor").removeClass("on");
		$(".app_contents_wrap").children(".floor").eq(i).addClass("on");
	});
</script>
<script>
	$(document).ready(function(){
        $(".app_header").removeClass("simple");
    })
</script>

<?php 
  
    include_once('./include/app_footer.php'); 
    
?>