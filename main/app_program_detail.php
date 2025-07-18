<?php include_once('./include/head.php'); ?>
<?php include_once('./include/app_header.php'); ?>

<script src="./js/script/client/app_program_detail.js?v=0.21"></script>
<style>
    /*230830 안재현 로딩화면 추가 */
    .loading_list{text-align: center; padding:30%; border-bottom:none !important;}
    .loading_list img{width:40px;}
</style>

<?php
 // [240419] sujeong / APP 로그인 페이지 /window confirm 창으로 수정 !!! 
 //[240523] sujeong / APP 즐겨찾기 숨기기 + 로그인 불필요하도록 / js 버전 변경하기!!(현재 0.91)
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

$type = $_GET['type'];
$day = $_GET['day'] ?? '';
$name = $_GET['name'] ?? '';
$e = $_GET['e'] ?? '';
$e_num = $e[-1];
$d_num = $day[-1] ?? '1';

// echo $e_num;
// echo $d_num;

//kcode == 116 새로고침

$option_room = "";
switch ($e){
    case "room1" : case "Room1" : $option_room = "1";
    break;
    case "room2" : case "Room2" : $option_room = "2";
    break;
    case "room3" : case "Room3" : $option_room = "3";
    break;
    case "room4" : case "Room4" : $option_room = "4";
    break;
    case "room5" : case "Room5" : $option_room = "5";
    break;
    case "room6" : case "Room6" : $option_room = "6";
    break;
    case "room7" : case "Room7" : $option_room = "7";
    break;
    case "Room1~3" : $option_room = "8";
    break;
    case "Room1~2" : $option_room = "9";
    break;
}

echo '<script type="text/javascript">
              $(document).ready(function(){
                  //탭 활성화 -> app_prograam_detail.js 에서 핸들링
                 
                  window.onkeydown = function() {
                    var kcode = event.keyCode;
                    if(kcode == 116) {
                        history.replaceState({}, null, location.pathname);
                        window.scrollTo({top:0, left:0, behavior:"auto"});
                    }
                  }

                  //스크롤 위치 & 액션 원본
                  /*$(".program_detail_ul li").each(function(){
                    if("' . $name . '" === $(this).attr("name")) {
                        var this_top = $(this).offset().top;
                        $("html, body").animate({scrollTop: this_top - 70}, 1000);
                        console.log("scrollTop: ", this_top - 150)
                    }
                  });*/
              });
		</script>';

?>

<?php
    $member_idx         = $_SESSION["USER"]["idx"];

    $row_sql = "";

    switch ($day){
        case "day_tbody day_1" : case "day_1" : $day = "2024-09-05";
            break;
        case "day_tbody day_2" : case "day_2" : $day = "2024-09-06";
            break;
        case "day_tbody day_3" : case "day_3" : $day = "2024-09-07";
            break;
    }

    if($_GET===[]){
        $row_sql .= " AND program_date = '2024-09-05' ";
    }

    if($day != ""){
        $row_sql .= " AND program_date = '$day' ";
    }

    if($e != ""){
        if($option_room == 1 || $option_room == 2 || $option_room == 3){
            $row_sql .= " AND program_place_idx IN ($option_room, 8) ";
        } else if($option_room == 8){
            $row_sql .= "";
        } else {
            $row_sql .= " AND program_place_idx IN ($option_room) ";
        }
    }

    $select_place_sql = " SELECT idx, program_place_name FROM program_place WHERE idx!=8 AND idx!=9";
    $place_list = get_data($select_place_sql);

    $select_category_sql = " SELECT idx, title FROM program_category WHERE idx!=18 ORDER BY sort_num ASC";
    $category_list = get_data($select_category_sql);
    $abstract_category_list= ['5','6','7','8','9','10','11','12','13','14','15','16','17','18','19','20', '21'];

    $select_program_query = "
                            SELECT @rownum := @rownum+1 AS rownum, P.*
                            FROM (
                                     SELECT p.idx, program_name, program_tag_name, chairpersons, preview, program_place_idx, pp.program_place_name ,program_category_idx, program_date,
                                            date_format(start_time, '%H:%i') as start_time, date_format(end_time, '%H:%i') as end_time, start_time as _start_time,
                                            (CASE
                                                 WHEN s.idx IS NULL THEN 'N'
                                                 ELSE 'Y'
                                                END
                                                ) as schedule_check, path
                                     FROM program p
                                     LEFT JOIN (SELECT va.program_idx, path FROM viewer_abstract va) va ON va.program_idx=p.idx
                                     LEFT JOIN program_place pp on p.program_place_idx = pp.idx
                                     LEFT JOIN(
                                         SELECT s.idx, member_idx, s.program_idx, s.register_date, s.is_deleted
                                         FROM schedule s
                                         WHERE member_idx={$member_idx}
                                           AND is_deleted='N'
                                     )s on s.program_idx=p.idx
                                     JOIN (SELECT @rownum := 0) AS R
                                     WHERE p.is_deleted = 'N'
                                     {$row_sql}
                                     ORDER BY _start_time ASC, CAST(SUBSTRING_INDEX(program_tag_name, '_', -1) AS SIGNED), program_tag_name
                                 ) P
                            ";

    $program_list = get_data($select_program_query);

    $select_contents_query = "
                             SELECT pc.idx, program_idx, contents_title, isp.idx AS speaker_idx, first_name, last_name, affiliation, nation, pc.speaker,
                                    date_format(start_time, '%H:%i') as start_time, date_format(end_time, '%H:%i') as end_time
                             FROM program_contents pc
                             LEFT JOIN (
                                SELECT isp.idx, program_contents_idx, first_name, last_name, nation, affiliation
                                FROM invited_speaker isp
                                WHERE isp.is_deleted='N'
                             ) isp ON isp.idx = pc.speaker_idx
                             WHERE is_deleted = 'N'
                             ORDER BY start_time
                            ";
    $contents_list = get_data($select_contents_query);

    $resultObj = [];
	$room_list = [];
    foreach($program_list as $pl){
        $pl_idx = $pl['idx'];

        $resultObj[$pl['rownum']] = [
            'idx' => $pl_idx,
            'program_name' => $pl['program_name'],
            'program_tag_name' => $pl['program_tag_name'],
            'chairpersons' => $pl['chairpersons'],
            'preview' => $pl['preview'],
            'program_place_name' => $pl['program_place_name'],
            'program_category_idx' => $pl['program_category_idx'],
            'program_date' => $pl['program_date'],
            'start_time' => $pl['start_time'],
            'end_time' => $pl['end_time'],
            'contents' => [],
            'schedule_check' => $pl['schedule_check'],
            'path' => $pl['path']
        ];

        foreach ($contents_list as $cl){
            $program_idx = $cl['program_idx'];
            $cl_info = [
                'cl_idx' => $cl['idx'],
                'program_idx' => $program_idx,
                'contents_title' => $cl['contents_title'],
                'speaker_idx' => $cl['speaker_idx'],
                'first_name' => $cl['first_name'],
                'last_name' => $cl['last_name'],
                'affiliation' => $cl['affiliation'],
                'nation' => $cl['nation'],
                'speaker' => $cl['speaker'],
                'start_time' => $cl['start_time'],
                'end_time' => $cl['end_time']
            ];

            if($pl_idx === $program_idx){
                $resultObj[$pl['rownum']]['contents'][]=$cl_info;
            }
        }
		
		if (!in_array($pl['program_place_name'], $room_list)) {
			$room_list[] = $pl['program_place_name'];
		}
    }
?>
  
<section class="container app_version app_scientific app_program_detail">
    <input type="hidden" name="scroll_target" value="<?=$name?>"/>
    <input type="hidden" name="day" value="<?=$day?>"/>
    <input type="hidden" name="e_num" value="<?=$e_num?>"/>
    <input type="hidden" name="d_num" value="<?=$d_num?>"/>
    <input type="hidden" name="init_room" value="<?=$option_room?>"/>
	<div class="app_title_box">
		<h2 class="app_title">
			PROGRAM
			<button type="button" class="app_title_prev" onclick="javascript:history.back();"><img src="https://image.webeon.net/icomes2024/app/2024_icon_arrow_prev_wh.svg" alt="이전페이지로 이동"></button>
		</h2>
			<div class="app_menu_box">
                <ul class="app_menu_tab langth_2">
                    <li><a href="./app_program_glance.php">Program at a Glance</a></li>
                    <li class="on"><a href="./app_program_detail.php">Scientific Program</a></li>
                </ul>
	    </div>
    </div>
    <form name="select_form">
	<ul class="app_tab program center_t fix_cont">
		<li value="1"><a href="javascript:;">Sep.5(Thu)</a></li>
		<li value="2"><a href="javascript:;">Sep.6(Fri)</a></li>
		<li value="3"><a href="javascript:;">Sep.7(Sat)</a></li>
        <input type="hidden" name="program_date">
	</ul>
    <div class="inner">
        <div class="tab_wrap">
            <div class="tab_cont on">
                <ul class="app_sort_form app_half_ul fix_cont_sub select_day_program">
					<li>
						<select name="option_room" id="option_room" class="sort_select" onchange="selectProgram();">
							<option value="" hidden>Select Room</option>
							<option value="" class="day1 day2 day3">All</option>
                            <option value="1" class="day1 day2 day3">Room1</option>
                            <option value="2" class="day1 day2 day3">Room2</option>
                            <option value="3" class="day1 day2 day3">Room3</option>
                            <option value="4" class="day2 day3">Room4</option>
                            <option value="5" class="day2 day3">Room5</option>
                            <option value="6" class="day2 day3">Room6</option>
                            <option value="7" class="day2">Room7</option>
						</select>
					</li>
					<li>
						<select name="option_category" id="option_category" class="" onchange="selectProgram();">
                            <option value="" hidden>Select Category</option>
                            <option value="" class="day1 day2 day3">All</option>

                            <option value="5" class="day2 day3">Pleanary Lecture</option>
                            <option value="6" class="day2 day3">Keynote Lecture</option>
                            <option value="20" class="day2 day3">Presidential Lecture</option>
                            <option value="22" class="day2 day3">Special Scientific Lecture</option>
                            <option value="8" class="day2 day3">Symposium</option>
                            <option value="15" class="day1 day2 day3">Joint Symposium</option>
                            <option value="21" class="day1 day2 day3">Special Session</option>
                            <option value="11" class="day2 day3">Breakfast Symposium</option>
                            <option value="12" class="day2 day3">Luncheon Symposium</option>
                            <option value="13" class="day1">Satellite Symposium</option>
                            <option value="14" class="day2 day3">Sponsored Session</option>
                            <option value="16" class="day2 day3">Oral Presentation</option>
                            <option value="17" class="day2 day3">Guided Poster Presentation</option>
                            <option value="3" class="day1">Welcome Reception</option>
                            <option value="1" class="day2">Opening Address</option>
                            <option value="4" class="day2">Congress Banquet</option>
                            <option value="2" class="day3">Closing & Award Ceremony</option>
                            
                            <!-- <option value="7" class="day1">Best Articles in JOMES</option> -->
                            <!-- <option value="10" class="day1">Pre-congress Symposium</option> -->
                            <!-- <option value="19" class="day1">Committee Session</option> -->
						</select>
					</li>
				</ul>
                </form>
                <div class="tab_wrap on">
                    <div class="tab_cont on">
                        <ul class="program_detail_ul">
                            <li class="loading_list">
                                <img src="/main/img/icons/loading.gif">
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="popup bottom program_alarm_pop">
	<div class="pop_bg"></div>	
	<div class="pop_contents">
		<ul class="list_style_none">
			<li>Do you want to set an alarm 10 minutes before the start?</li>
			<li class="is_alarm_y">Yes</li>
			<li class="is_alarm_n">No</li>
		</ul>
	</div>
</div>

<div class="popup bottom alarm_message_pop">
    <div class="pop_bg"></div>
    <div class="pop_contents">
        <!-- 팝업창 문구 -->
        <span class="tags"></span>
    </div>
</div>

<script>
    $(document).ready(function() {

        $(".app_header").removeClass("simple");

		$(".main .right_tag, .preview_btn, .branch").click(function(event) {
            event.stopPropagation();
        });

        $(".program_detail_btn").click(function(event) {
            event.preventDefault();
            event.stopPropagation();
            $(this).parents("tr").next("tr").find(".program_detail_td").toggleClass("on");
        });

		$(".popup.bottom .pop_contents li").click(function(){
			// $(this).parents(".popup").hide();
            $('.program_alarm_pop').show();
		});

		// $(".sort_select").change(function(){
		// 	var i = $(this).val();
		// 	if (i === "all"){
		// 		$(this).parents(".tab_cont").find(".tab_cont").addClass("on");
		// 	} else {
		// 		i = (i - 1);
		// 		$(this).parents(".tab_cont").find(".tab_cont").removeClass("on");
		// 		$(this).parents(".tab_cont").find(".tab_cont").eq(i).addClass("on");
		// 		// console.log(i)
		// 	}
		// });
		// $(".chairperson").parent("div").append("<button class='preview_btn'>Preview</button>");

		$(".preview_btn").on("click", function(event){
			event.preventDefault();
            event.stopPropagation();
			$(this).parent(".main").siblings(".detail_text").stop().slideToggle();	
			$(this).toggleClass("on");	
		});

        $(".app_scientific .info button").click(function(event){
            Schedule(event);
        });

        $(".right_tag").click(function(event){
            event.preventDefault();
        });

        $(".branch").click(function(event){
            event.preventDefault();
        });

        // $(document).on("click", ".branch", function(event) {
        //     event.preventDefault();
        //     event.stopPropagation();
        //     console.log("hello");
        //     //window.location.href = `/main/app_floor_plan.php?room=${$(this).data("id")}`;
        // });
    });

</script>

<style>
	div.detail button.preview_btn {display: none;}
	.app_scientific .preview_btn.on {background-image: url('./img/icons/icon_minus_white.svg');}
</style>
<?php include_once('./include/app_footer.php'); ?>
