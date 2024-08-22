<?php
$member_idx = $_SESSION["USER"]["idx"];

//[240702] sujeong / 기존코드 - app notice -> type 3
// $select_notice_query = "
//                             SELECT idx, type, title_en
//                             FROM board
//                             WHERE is_deleted='N'
//                             AND type=3
//                         ";


//[240702] sujeong / 수정코드 - app newsletter -> type 4
$select_notice_query = "
						SELECT idx, type, title_en
						FROM board
						WHERE is_deleted='N'
						AND type=3
					";

$notice_list = get_data($select_notice_query);

//[240417] sujeong / app login 페이지 구분 위해
if(empty($member_idx)){
	$schedule = "";
}else{
	$select_schedule_query = "
		SELECT p.idx, program_name, program_date, start_time
		FROM program p
		LEFT JOIN(
			SELECT s.idx, member_idx, s.program_idx, s.register_date, s.is_deleted
			FROM schedule s
			WHERE member_idx='{$member_idx}'
			AND s.is_deleted = 'N'
		)s on s.program_idx=p.idx
		WHERE p.is_deleted = 'N'
		AND s.idx IS NOT NULL
		AND NOW()>=start_time - interval 10 minute
		AND NOW()<=start_time + interval 1 minute
		ORDER BY program_date ASC, start_time ASC
	";
	$schedule = sql_fetch($select_schedule_query);
}

?>

<!-- 사용자 App footer -->
<footer class="app_footer">
	<div class="rolling_wrap">
        <?php
            if(!empty($schedule)){
        ?>
            <div class="schedule">
                <a href="javascript:void(0);">[My schedule] <?=$schedule['program_name']?> will start in 10 minutes.</a>
            </div>
        <?php
        }
        ?>
        <?php
            if(!empty($notice_list)){
        ?>
		<div class="notice">
			<div style="height:20px; overflow:hidden;">
				<ul>
                    <?php
                        foreach ($notice_list as $notice){
                    ?>
							<!-- [240702] sujeong / 기존 코드 -> 제목 앞에 [NOTICE] & app notice detail 로 이동 -->
							<!-- <li><a href="/main/app_notice_detail.php?idx=<?=$notice['idx']?>">[NOTICE] <?=$notice['title_en']?> </a></li> -->
							 <!-- [240702] sujeong / 현재 코드 -> 제목 앞에 [NOTICE] 제거 & app newsletter detail 로 이동 -->
							<li><a href="/main/app_notice_detail.php?idx=<?=$notice['idx']?>"><?=$notice['title_en']?> </a></li>
                    <?php
						}
                    ?>
				</ul>
			</div>
        <?php
        }
        ?>
		</div>
	</div>
	<div class="ft_inner">
		<img class="app_footer_img" alt="footer" src="https://image.webeon.net/icomes2024/app/2024_app_footer.svg"/>
		<ul class="ft_menu">
			<li>
				<a href="/main/app_index.php"></a>
			</li>
			<li>
				<a href="/main/app_program_glance.php"></a>
			</li>
			<li class="round_menu">
				<a href="/main/app_qr_code.php">
				</a>
			</li>
			<li>
				<a href="/main/app_schedule.php"></a>
			</li>
			<li>
				<!-- [240328] sujeong / app_my_page -->
				<!-- <a href="/main/app_registration.php"><img src="/main/img/icons/icon_ft_schedule.svg" alt=""><span>MY PAGE</span></a> -->
				<a href="/main/app_registration.php"></a>
			</li>
		</ul>
	</div>
	<input type="hidden" name="total_notice" value="<?= count($notice_list); ?>">
</footer>

<script src="/main/js/jquery.vticker.js"></script>
<script>
	$(document).ready(function(){
		var total_notice = parseInt($("[name=total_notice]").val());
		if (total_notice > 0) {
			$('.notice > div').vTicker();
		}
	});
</script>