<!-- [240314] hub 스탬프 투어 소스 코드 파일 추가(기존 -> app_my_stamp_pre.php) !@#$^ -->
<?php include_once('./include/head.php');?>
<?php include_once('./include/app_header.php');?>

<?php 
 // [240419] sujeong / APP 로그인 페이지 /window confirm 창으로 수정 !!!
	if (empty($_SESSION["USER"])) {
		echo "
				<script>
					if (typeof(window.AndroidScript) != 'undefined' && window.AndroidScript != null) {
						window.AndroidScript.logout();
						if(window.confirm('Login required. Would you like to log in?')){ 
                            window.location.href = '/main/app_login.php';
                        }else{
                            window.history.back();
                        }
					}
				
				
						try{
							if (window.webkit?.messageHandlers!=null) {
								window.webkit.messageHandlers.logout.postMessage('');
								if(window.confirm('Login required. Would you like to log in?')){ 
									window.location.href = '/main/app_login.php';
								}else{
									window.history.back();
								}
							}
						} catch (err){
							console.log(err);
						}
				</script>
			";
	}
	$loginNo  = $_SESSION["USER"]["idx"] ?? 0;

	$sql = "SELECT 
				b.idx, b.`name`, b.grade, b.stamp_count, b.logo_card_path, b.booth, b.location,
				IF(l.idx IS NULL, 0, 1) AS is_stamp
			FROM e_booth AS b
			LEFT JOIN (
				SELECT idx, booth_idx FROM e_booth_log WHERE member_idx = {$loginNo}
			)AS l
			ON b.idx = l.booth_idx
			WHERE b.is_deleted = 'N'
			ORDER BY b.grade ASC, IF(b.`order` IS NULL, 0, 1) DESC, b.`order` ASC, b.idx DESC";

	$boothDBList = get_data($sql);

	$myStampCnt = 0;
	$boothList = [];

	for($a = 0; $a < count($boothDBList); $a++){
		$grade = $boothDBList[$a]["grade"] ?? -1;
		$isStamp = $boothDBList[$a]["is_stamp"] ?? 0;

		if($isStamp == 1){
			$myStampCnt += 1;
		}

		if(array_key_exists($grade, $boothList) !== true){
			$boothList[$grade] = [];
		}

		array_push($boothList[$grade], $boothDBList[$a]);
	}
?>

<script>
	$(document).ready(function(){
		
		//qrcode scan 클릭시
		$(".qr_code_fixed").on("click", function(){
			if (typeof(window.AndroidScript) != "undefined" && window.AndroidScript != null) {
				try{
					window.AndroidScript.qrScan();
				} catch (err){
					alert('QR 코드가 지원되지 않는 버전입니다. Android를 최신버전으로 업데이트 받아주세요.');
				}
			} else if (window.webkit && window.webkit?.messageHandlers != null) {
				try{
					window.webkit.messageHandlers.openQrCode.postMessage('');
				} catch (err){
					alert('QR 코드가 지원되지 않는 버전입니다. IOS를 최신버전으로 업데이트 받아주세요.');
				}
			} else {
				alert('QR 코드가 지원되지 않는 버전입니다.');
			}
		});

		// qrcode scan 완료시

		function setQRCode(agent, code){
			const booth = code.startsWith('ICOMES2024-STAMP-') ? parseInt(code.replace('ICOMES2024-STAMP-', '')) : undefined
			const memberNo = $("input[name=mn]").val() ?? "";

			if(!memberNo){
				alert('Session connection has been lost.');
				// alert('세션 연결이 끊어졌습니다.');
				window.location.replace('./app_login.php');
				return
			}

			if(!booth || isNaN(booth)){
				alert('This QR Code not supported.');
				// alert('지원하지 않는 QR Code 규칙입니다.');
				return
			}

			$.ajax({
				url : `./ajax/client/ajax_event.php?flag=stamp_v2&booth_idx=${booth}&member=${memberNo}&useragent=${agent}`,
				type : "GET",
				param : {
					flag : "stamp_v2",
					booth_idx : booth,
					member: memberNo,
					useragent : agent
				},
				dataType : "JSON",
				success : function(res){
					if(res.code == 200) {
						const dom = $(`.e_booth[data-id=${booth}]`)
						
						//let cnt = parseInt($(".stamp_collect .red_txt").text().replace(/[^0-9]/gi, ""))
						//cnt = isNaN(cnt) ? 0 : cnt

						dom.addClass("complete_stamp");
						dom.find('a').css('background-image', `url('https://image.webeon.net/icomes2024/app_sponsor/2024_logo${booth}-4.png')`);
						
						//$(".stamp_collect .red_txt").text(cnt + 1);

						window.scrollTo({top: (dom.offset().top - 200), left:0, behavior:'smooth'});

						alert(`Complete ${res["0"].company_name}.`)
					} else if(res.code == 400) {
						alert(locale(language.value)("not_matching_email"));
						return false;
					} else if(res.code == 402) {
						alert(locale(language.value)("invalid_e_booth"));
						return false;
					} else if(res.code == 403) {
						alert(locale(language.value)("already_exist_stamp"));
						return false;
					}
				}
			})
		}

		window.setQRCode = setQRCode;
	});
	

</script>

<!-- HUBDNCAJY : App - STAMP TOUR > My Stamp 페이지 -->
<section class="container app_version app_my_stamp">
	<div class="app_title_box">
		<h2 class="app_title">STAMP TOUR<button type="button" class="app_title_prev" onclick="javascript:history.back();"><img src="https://image.webeon.net/icomes2024/app/2024_icon_arrow_prev_wh.svg" alt="이전페이지로 이동"></button></h2>
		<div class="app_menu_box">
			<ul class="app_menu_tab langth_3">
				<li><a href="./app_stamp_guidelines.php">Stamp Tour Guidelines</a></li>
				<li class="on event"><a href="./app_my_stamp.php">Stamp List<br/>(Scanner)</a></li>
				<li><a href="./app_stamp_list.php">My Stamp</a></li>
			</ul>
		</div>
	</div>
	<div class="inner">
		<input type="hidden" name="mn" value="<?=$_SESSION["USER"]["idx"]?>"/>
		<div class="contents_box">
			<div class="stamp_count">
				<div class="stamp_collect">
					<!-- [240419] sujeong / 학회팀 요청 주석 /총 스탬프 카운트 -->
					<!-- <p class="f_bold">Count of stamps collected: <span class="f_inherit red_txt"><?= number_format($myStampCnt) ?></span></p> -->
<!-- 					<button type="button" class="refresh_btn"><img src="./img/icons/icon_refresh.png" alt="새로고침"></button> -->
				</div>
			</div>
			<div class="sponsor_grade">
				<?php
					// [240314] hub 스탬프 투어 소스 코드 !@#$^
					// image 서버로 url 수정 필요 !!!
					function imageUrlManager($str){
						// $url = "https://icomes.or.kr/main";
						$url = "https://image.webeon.net/icomes2024/sponsor";

						if(strrpos($str, "http", -strlen($str)) !== false ||  strrpos($str, "https", -strlen($str)) !== false){
							return $str;
						}else{
							return $url.$str;
						}
					}

					foreach($boothList as $k => $v){
						$boothType = $k;

						$boothInfo = gradeBoothInfo($boothType);
			
						echo "<p class='grade_title app ".$boothInfo["class"]."'>".$boothInfo["name"]."</p>";
						if(count($v) == 3){
							echo "<ul class='grade_wrap app length_1'>";
						}else{
							echo "<ul class='grade_wrap app length_".count($v)."'>";
						}

						for($a = 0; $a < count($v); $a++){
							$booth = $v[$a];
							$companyName = $booth["name"];
							$complate = $booth["is_stamp"] ?? 0;

							echo "<li class='e_booth ".($complate == 1 ? "complete_stamp" : "")."' data-id='".$booth["idx"]."'>";
				?>
								<a href="javascript:;" class="<?=strtolower($companyName)?>" style="background-image: url('<?=imageUrlManager($booth["logo_card_path"])?>')"><?=$companyName?></a>
				<?php
							if($booth["location"] || $booth["booth"]){
								$str = [];

								if($booth["location"]) array_push($str, "Location: ".$booth["location"]);
								// if($booth["booth"]) array_push($str, "Booth No: ".$booth["booth"]);

								echo "<div class='location'>".implode("<br/>", $str)."</div>";
							}else{
								echo "<div></div>";
							}
							echo "</li>";
						}
						echo "</ul>";
					}

					if(count($boothList) < 1){
				?>
					<!-- 부스 정보가 없을 때 노데이터 처리 -->
				<?php }?>

			</div>
		</div>
	</div>
	<div class="qr_code_fixed">
		<a href="javascript:;">	
		<p class="qr_code_fixed_txt">Please scan the <span>QR CODE</span> of each booth.</p>
			<!-- <p class="qr_code_fixed_txt">Please scan the <span>QR CODE</span> of each loacation</p> -->
			<!-- <p class="qr_code_fixed_txt">“Click here to scan!”</p> -->
			<div class="qr_code_fixed_wrap">SCANNER</div>
		</a>	
	</div>
</section>

<!-- Stamp Tour > My Stamp 최종 완료 팝업 -->
<div class="pop_wrap stamp_complete_pop">
	<div class="pop_dim"></div>	
	<div class="pop_cont transparent">
		<p class="white_t center_t">Thank you for your participation!</p>
	</div>
</div>
<script>
	$(document).ready(function(){
        $(".app_header").removeClass("simple");

		//[240726] sujeong / 학회팀 요청 / 모두 찍었을 경우 pop up 
		if($(".complete_stamp").length == 26){
			$(".stamp_complete_pop").addClass("on");
		}

		const completedList = document.querySelectorAll('.complete_stamp');

		completedList.forEach((completed)=>{
			const boothNum = completed.dataset.id;
			completed.children[0].style = `background-image : url('https://image.webeon.net/icomes2024/app_sponsor/2024_logo${boothNum}-4.png')`
		})
    })
</script>
<?php include_once('./include/app_footer.php');?>