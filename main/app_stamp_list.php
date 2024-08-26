<!-- [240314] hub 스탬프 투어 소스 코드 파일 추가(기존 -> X ) !@#$^ -->
<?php include_once('./include/head.php');?>
<?php include_once('./include/app_header.php');

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
?>

<?php 
	$loginNo  = $_SESSION["USER"]["idx"] ?? 0;

	$sql = "SELECT 
				b.grade, COUNT(b.idx) AS total_cnt, SUM(IF(b.is_required = 1, 1, 0)) AS total_require_cnt, SUM(IF(l.idx IS NULL, 0, 1)) AS stamp_cnt,  SUM(IF(b.is_required = 1 AND l.idx IS NOT NULL, 1, 0)) AS require_cnt
			FROM e_booth AS b
			LEFT JOIN (
				SELECT idx, booth_idx FROM e_booth_log WHERE member_idx = {$loginNo}
			)AS l
			ON b.idx = l.booth_idx
			WHERE b.is_deleted = 'N' AND b.grade != 1
			GROUP BY b.grade";

	$boothDBList = get_data($sql);

	$sql2 = "SELECT 
				SUM(IF(l.idx IS NULL, 0, 1)) AS stamp_cnt
			FROM e_booth AS b
			LEFT JOIN (
				SELECT idx, booth_idx FROM e_booth_log WHERE member_idx = 1
			)AS l
			ON b.idx = l.booth_idx
			WHERE b.is_deleted = 'N' AND b.grade = 1
			GROUP BY b.grade
	";

	$poster_count = get_data($sql2);

	$myStampCnt = 0;
	$boothList = [];

	for($a = 0; $a < count($boothDBList); $a++){
		$grade = $boothDBList[$a]["grade"] ?? -1;
		$cnt = $boothDBList[$a]["stamp_cnt"] ?? 0;

		if($cnt > 0){
			$myStampCnt += $cnt;
		}

		$boothList[$grade] = array(
			"cnt" => $cnt,
			"total_require_cnt" => ($boothDBList[$a]["total_require_cnt"] ?? 0),
			"require_cnt" => ($boothDBList[$a]["require_cnt"] ?? 0)
		);
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
				alert('세션 연결이 끊어졌습니다.');
				window.location.replace('./app_login.php');
				return
			}

			if(!booth || isNaN(booth)){
				alert('지원하지 않는 QR Code 규칙입니다.');
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
						window.location.reload();
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
			});
		}

		window.setQRCode = setQRCode;
	})

</script>

<!-- HUBDNCAJY : App - STAMP TOUR > Tour Map 페이지 -->
<section class="container app_version app_tour_map" style="padding-bottom:90px !important;"> <!-- 23.06.14 HUBDNCAJY : .layout_type2 클래스 삭제 -->
	<div class="app_title_box">
		<h2 class="app_title">STAMP TOUR<button type="button" class="app_title_prev" onclick="javascript:history.back();"><img src="https://image.webeon.net/icomes2024/app/2024_icon_arrow_prev_wh.svg" alt="이전페이지로 이동"></button></h2>
		<div class="app_menu_box">
			<ul class="app_menu_tab langth_3">
				<li class="event"><a href="./app_stamp_guidelines.php">Stamp Tour Guidelines</a></li>
				<li class="event"><a href="./app_my_stamp.php">Stamp List<br/>(Scanner)</a></li>
				<li class="on event"><a href="./app_stamp_list.php">My Stamp</a></li>
			</ul>
		</div>
	</div>
	<div class="inner">
		<div class="contents_box">
		<input type="hidden" name="mn" value="<?=$_SESSION["USER"]["idx"]?>"/>
			<div class="app_contents_wrap type2">
				<div class="gift_wrap">
					<div class="gift_top">
						Mandatory Requirement <br/>for Gift Exchange
					</div>
					<div class="gift_bottom">
						<div class="jomes">JOMES <p>1</p></div>
						<div class="diamond">Diamond <p>1</p></div>
						<div class="platinum">Platinum <p>3</p></div>
						<div class="gold">Gold <p>6</p></div>
					</div>
				</div>
                <ul class="stamp_list">
					<?php
						foreach($boothList as $k => $v){
							$boothType = $k;
							$boothInfo = gradeBoothInfo($boothType);
							
							$totalReqCnt = $v['total_require_cnt'] ?? 0;
							$reqCnt = $v['require_cnt'] ?? 0;

							$isCrown = $totalReqCnt > 0 && $totalReqCnt == $reqCnt ? true : false;
							
					?>
						<li class="<?= $boothInfo['medal_class'] ?> <?= $isCrown ? 'open' : '' ?>">
							<p><?=$boothInfo["name"]?></p>
							<?php if($isCrown){?>
								<!-- <i><img src="./img/crown.png" class="info_icon"/></i> -->
							<?php }?>
							<div class="<?=$boothInfo["name"]?>"><h4><?=number_format($v['cnt'])?></h4></div>
						</li>
					<?php
						}
					?>

                </ul>
				<!-- <div class="stamps_crown_info clearfix">
					<img src="./img/crown.png" class="info_icon"/>
					<p class="info_text">Once you have visited the required number of booths, the crown will be displayed.</p>
				</div> -->
               <!-- <div class="stamps_count">
                     <p>Remaining Booths for Lucky Draw <p><span><?= number_format($myStampCnt) ?></span></p></p> 
                    <p>Remaining Booths for Lucky Draw <p><span class="lunck_count"></span></p></p>
                </div>-->
				<div class="lucky_box">
					<div class="lucky_ball lunck_count"></div>
					<div class="lucky_top">
						Remaining Booths for Lucky Draw
					</div>
					<div class="lucky_bottom">
						<div class="require_booth">
							<div class="jomes">JOMES <p>1</p></div>
							<div class="diamond">Diamond <p>1</p></div>
							<div class="platinum">Platinum <p>3</p></div>
							<div class="gold">Gold <p>6</p></div>
						</div>
						<div>+</div>
						<div class="red_box">
							<span class="silver_t">Silver</span> & <span class="bronze_t">Bronze</span> more than 5
						</div>
						<div>+</div>
						<div class="blue_box">
							<span class="">Poster Zone</span>
						</div>
					</div>
				</div>
			</div> 
		</div>
	</div>
	<!-- <div class="qr_code_fixed">
		<a href="javascript:;">	
			<p class="qr_code_fixed_txt">Please scan the <span>QR CODE</span> of each booth.</p>
			<div class="qr_code_fixed_wrap">SCANNER</div>
		</a>	
	</div> -->

	<!-- 이벤트 완료 모달 -->
	<div onclick="closeModal()" class="modal_background" style="display: none;"></div>
	<div class="stamp_modal" style="display: none;">
		<img onclick="closeModal()" class="close_btn" src="https://image.webeon.net/icomes2024/app/icon_x.png" />
		<p class="bold center_t">Booth Tour Success!</p>
		<p class="center_t">* Please collect your souvenir at the Gift Distribution Counter (6F).</p>
		<div class="close_area modal clearfix2">
			<div>
				<input type="checkbox" id="today_check" class="checkbox input required">
				<label for="today_check">Do not open this window for 24 hours.</label>
			</div>
		</div>	
	</div>
</section>
<script>
	const jomes = document.querySelector(".JOMES")
	const diamond = document.querySelector(".Diamond");
	const platinum = document.querySelector(".Platinum");
	const gold = document.querySelector(".Gold");
	
	const sliver = document.querySelector(".Silver");
	const bronze = document.querySelector(".Bronze");

	const poster = '<?php echo isset($poster_count['stamp_cnt']) ? $poster_count['stamp_cnt'] : 0; ?>'

	const luckyCountTag = document.querySelector(".lunck_count");

	const modalBackground = document.querySelector('.modal_background');
	const modalBox = document.querySelector('.stamp_modal');
	const closeBtn = document.querySelector('.close_btn')

	window.onload = () =>{
		getLuckyNum();
	}

	function getLuckyNum(){

		let luckyCount = 0;
		//필수 스탬프 숫자
		const requireNum = 11;
		//태깅한 필수 스탬프 숫자
		const checkRequireNum = Number(jomes.innerText) + Number(diamond.innerText) +  Number(platinum.innerText) +  Number(gold.innerText);
		//필수에서 부족한 숫자
		luckyCount += requireNum - checkRequireNum;

		if(requireNum === checkRequireNum){
			showModal();
		}

		//선택 스탬프 숫자
		const silverNum = 5;
		//태깅한 선택 스탬프 숫자
		const checkSilverNum =  Number(sliver.innerText) + Number(bronze.innerText);

		//선택 스탬프 숫자보다 많이 태깅한 경우
		if(checkSilverNum >= silverNum){
			luckyCount += 0;
		}//선택 스탬프 숫자보다 적게 태깅한 경우
		else if(checkSilverNum < silverNum){
			luckyCount += silverNum - checkSilverNum;
		}

		let posterNum = 1;
		if(Number(poster) == 1){
			posterNum = 0;
		}else{
			posterNum = 1;
		}
		
		luckyCount += posterNum;

		luckyCountTag.innerText = luckyCount;
	}

	function showModal(){
		const cookiedata = document.cookie;
		if(cookiedata.indexOf("close=Y")<0){
            modalBackground.style.display = "";
			modalBox.style.display = "";
        }	
	}

	function closeModal(){
		if($("#today_check").is(":checked") == true){
            setCookie("close","Y",1);   //기간( ex. 1은 하루, 7은 일주일)
        }
		modalBackground.style.display = "none";
		modalBox.style.display = "none";
	}

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

</script>
<script>
	$(document).ready(function(){
        $(".app_header").removeClass("simple");
		//$(".app_footer_img").addClass("footer_gray");

		if($('.Silver').text() == 6){
			$('.silver').addClass("open");
		}

		if($('.Bronze').text() == 9){
			$('.bronze').addClass("open");
		}
    })
</script>

<?php include_once('./include/app_footer.php');?>