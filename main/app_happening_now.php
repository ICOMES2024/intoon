<?php include_once('./include/head.php');?>
<?php include_once('./include/app_header.php');?>
<?php
// $today = "2024-09-07";
// $todayTime = "2024-09-07 13:55:34";
$today = date("Y-m-d");
$todayTime = date("Y-m-d H:i:s");

$select_program_query = "
                            SELECT p.idx, program_name, program_tag_name, chairpersons, program_place_idx, pp.program_place_name ,program_date, 
                                   date_format(start_time, '%H:%i') as start_time, date_format(end_time, '%H:%i') as end_time,
								   DATE_FORMAT(p.start_time, '%Y-%m-%d %H:%i:%s') as program_start_time, DATE_FORMAT(p.end_time, '%Y-%m-%d %H:%i:%s') as program_end_time,
                                   (CASE
                                       WHEN program_date = '2024-09-05' THEN 'day_1'
                                       WHEN program_date = '2024-09-06' THEN 'day_2'
                                       WHEN program_date = '2024-09-07' THEN 'day_3'
                                       ELSE ''
                                       END
                                   ) as day
                            FROM program p
                            LEFT JOIN program_place pp on p.program_place_idx = pp.idx
                            WHERE p.is_deleted = 'N'
                            AND program_date = '{$today}'
                            ORDER BY program_date, start_time ASC, program_name ASC
                            ";
$program_list = get_data($select_program_query);

?>

<!-- HUBDNCAJY : App - HAPPENING NOW 페이지 -->
<section class="container app_version app_happening app_scientific">
<div class="app_title_box">
		<h2 class="app_title">
			HAPPENING NOW
			<button type="button" class="app_title_prev" onclick="javascript:window.location.href='./app_index.php';"><img src="https://image.webeon.net/icomes2024/app/2024_icon_arrow_prev_wh.svg" alt="이전페이지로 이동"></button>
		</h2>
	</div>
	<div class="contents_box">
		<div class="schedule_area">
			<!-- 진행중인 세션 있을 시 화면 -->
			<ul class="program_detail_ul">
                <?php
                    if($program_list !== array()){
						
						//오늘 진행 중인 세션 모두 출력
                        foreach ($program_list as $program){
							// $str_now = date("Y-m-d H:i:s", strtotime($todayTime));
							$str_now = date("Y-m-d H:i:s", strtotime($todayTime));
							$str_start = date("Y-m-d H:i:s", strtotime('-10 minutes', strtotime($program['program_start_time'])));
							$str_end = date("Y-m-d H:i:s", strtotime($program['program_end_time']));
							
							//[231218] sujeong 추가 / 현재 시간 진행 중 -> 파란 배경
							if($str_start <= $str_now && $str_end >= $str_now ){ ?>
								<li name="<?=$program['program_tag_name']?>" class="<?=$program['day']?> now_time" >
									<div class="main">
										<button class="detail_btn"></button>
										<p class="title"><?=$program['program_name']?></p>
										<?php
											if($program['chairpersons']!==null){
										?>
										<p class="chairperson"><span class="bold">Chairpersons:</span> <?=$program['chairpersons']?></p>
										<?php
										}
										?>
										<div class="info">
											<span class="time"><?=$program['start_time']?>-<?=$program['end_time']?></span>
											<span class="branch"><?=$program['program_place_name']?></span>
										</div>
									</div>
									<input type="hidden" name="e" value="<?=$program['program_place_name']?>">
								</li>
							<?php }else{  ?>
								<li name="<?=$program['program_tag_name']?>" class="<?=$program['day']?>">
									<div class="main">
										<button class="detail_btn"></button>
										<p class="title"><?=$program['program_name']?></p>
										<?php
											if($program['chairpersons']!==null){
										?>
										<p class="chairperson"><span class="bold">Chairpersons:</span> <?=$program['chairpersons']?></p>
										<?php
										}
										?>
										<div class="info">
											<span class="time"><?=$program['start_time']?>-<?=$program['end_time']?></span>
											<span class="branch"><?=$program['program_place_name']?></span>
										</div>
									</div>
									<input type="hidden" name="e" value="<?=$program['program_place_name']?>">
								</li>
								<?php	}?>
                <?php
                    }
                }
                ?>
                <?php
                if($program_list === array()){
                ?>
			</ul>
			<!-- 진행중인 세션 없을 시 화면 -->
			<div class="no_data">
				<img src="/main/img/icons/icon_alarm_clock2.svg" alt="">
				<p>To be<br>announced</p>
			</div>
            <?php
            }
            ?>
		</div>
	</div>
</section>

<script>
	$(document).ready(function() {
		$(".program_detail_ul > li").click(function() {
			var e = $(this).find("input[name=e]").val();
			var day = $(this).attr("class");
			var target = $(this)
			var this_name = $(this).attr("name");

			table_location(event, target, e, day, this_name);
		});

		function table_location(event, _this, e, day, this_name) {
			//window.location.href = "./program_detail.php?day=" + day + "&e=" + e + "&name=" + this_name;
			window.location.href = "./app_program_detail.php?day=" + day + "&e=" + e + "&name=" + this_name;
		};
    });

	const program = document.querySelector('.now_time');
	
	if(program){
		focusTable(program)
	}
    


	function focusTable(timeDiv) {
    // 요소의 뷰포트 내 위치를 가져옵니다.
    const rect = timeDiv.getBoundingClientRect();
    const absoluteElementTop = rect.top + window.pageYOffset;
    
    // offset 값을 중간보다 위로 위치하도록 조정 (추가로 100px 위로 위치하게 조정)
    const offset = (window.innerHeight / 2 - rect.height / 2) - 175; // 원하는 픽셀 값을 더하거나 빼면 됨

    // 중간보다 위로 조정된 절대 위치를 계산합니다.
    const scrollToPosition = absoluteElementTop - offset;

    // 조정된 위치로 스크롤합니다.
    window.scrollTo({ top: scrollToPosition, behavior: 'smooth' });
}

</script>

<?php include_once('./include/app_footer.php');?>