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
			WHERE b.is_deleted = 'N'
			GROUP BY b.grade";

	$boothDBList = get_data($sql);

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
<section class="container app_version app_tour_map"> <!-- 23.06.14 HUBDNCAJY : .layout_type2 클래스 삭제 -->
	<div class="app_title_box">
		<h2 class="app_title">STAMP TOUR<button type="button" class="app_title_prev" onclick="javascript:history.back();"><img src="/main/img/icons/icon_arrow_prev_wh.svg" alt="이전페이지로 이동"></button></h2>
		<ul class="app_menu_tab langth_3">
			<li><a href="./app_stamp_guidelines.php">Stamp Tour Guidelines</a></li>
			<li><a href="./app_my_stamp.php">My Stamp</a></li>
			<li class="on"><a href="./app_stamp_list.php">Stamp List</a></li>
		</ul>
	</div>
	<div class="container_inner">
		<div class="contents_box">
			<div class="app_contents_wrap type2">
                <ul class="stamp_list">
					<?php
						foreach($boothList as $k => $v){
							$boothType = $k;
							$boothInfo = gradeBoothInfo($boothType);
							
							$totalReqCnt = $v['total_require_cnt'] ?? 0;
							$reqCnt = $v['require_cnt'] ?? 0;

							$isCrown = $totalReqCnt > 0 && $totalReqCnt == $reqCnt ? true : false;
							
					?>
						<li class="<?=$boothInfo["medal_class"]?>">
							<p><?=$boothInfo["name"]?></p>
							<?php if($isCrown){?>
								<i><img src="./img/crown.png" class="info_icon"/></i>
							<?php }?>
							<div class="<?=$boothInfo["name"]?>"><?=number_format($v['cnt'])?></div>
						</li>
					<?php
						}
					?>

					<!--
                    <li class="poster">
                        <p>Poster Zone</p>
                        <div>1</div>
                    </li>
                    <li class="platinum">
                        <p>Platinum</p>
                        <div>1</div>
                    </li>
                    <li class="gold">
                        <p>Gold</p>
                        <div>1</div>
                    </li>
                    <li class="silver">
                        <p>silver</p>
                        <div>1</div>
                    </li>
                    <li class="bronze">
                        <p>Bronze</p>
                        <div>1</div>
                    </li>
					-->
                </ul>
				<div class="stamps_crown_info clearfix">
					<img src="./img/crown.png" class="info_icon"/>
					<p class="info_text">Once you have visited the required number of booths, the crown will be displayed.</p>
				</div>
                <div class="stamps_count">
                    <!-- <p>Remaining Booths for Lucky Draw <p><span><?= number_format($myStampCnt) ?></span></p></p> -->
                    <p>Remaining Booths for Lucky Draw <p><span class="lunck_count"></span></p></p>
                </div>
			</div> 
		</div>
	</div>
	<div class="qr_code_fixed">
		<a href="javascript:;">	
		<p class="qr_code_fixed_txt">Scan the <span>QR CODE</span> at each booth.</p>
			<!-- <p class="qr_code_fixed_txt">Please scan the <span>QR CODE</span> of each loacation</p> -->
			<p class="qr_code_fixed_txt">“Click here to scan!”</p>
			<div class="qr_code_fixed_wrap">SCANNER</div>
		</a>	
	</div>
</section>
<script>
	const diamond = document.querySelector(".Diamond");
	const platinum = document.querySelector(".Platinum");
	const gold = document.querySelector(".Gold");
	
	const sliver = document.querySelector(".Silver");
	const bronze = document.querySelector(".Bronze");

	const luckyCountTag = document.querySelector(".lunck_count");

	window.onload = () =>{getLuckyNum()}

	function getLuckyNum(){
		let luckyCount = 0;
		//필수 스탬프 숫자
		const requireNum = 10;
		//태깅한 필수 스탬프 숫자
		const checkRequireNum = Number(diamond.innerText) +  Number(platinum.innerText) +  Number(gold.innerText);
		//필수에서 부족한 숫자
		luckyCount += requireNum - checkRequireNum;

		//선택 스탬프 숫자
		const silverNum = 6;
		//태깅한 선택 스탬프 숫자
		const checkSilverNum =  Number(sliver.innerText) + Number(bronze.innerText);

		//선택 스탬프 숫자보다 많이 태깅한 경우
		if(checkSilverNum >= silverNum){
			luckyCount += 0;
		}
		//선택 스탬프 숫자보다 적게 태깅한 경우
		else if(checkSilverNum < silverNum){
			luckyCount += silverNum - checkSilverNum;
		}

		luckyCountTag.innerText = luckyCount;
	}

</script>

<?php include_once('./include/app_footer.php');?>