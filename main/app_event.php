<?php include_once('./include/head.php');?>
<?php include_once('./include/app_header.php');?>

<!-- HUBDNCLHJ : app survey 페이지 -->
<section class="container app_survey app_version">
	<div class="app_title_box">
		<h2 class="app_title">
			LIVE EVENT
			<button type="button" class="app_title_prev" onclick="javascript:window.location.href='./app_index.php';">
				<img src="https://image.webeon.net/icomes2024/app/2024_icon_arrow_prev_wh.svg" alt="이전페이지로 이동">
			</button>
		</h2>
	</div>
	<div class="inner">
		<div class="contents_box">
				<div class="survey_box box_top">
						<p class="center_t">
							<span class="bold">ICOMES 2024 <br/> live event</span>
						</p>
				</div>
				<div class="event_container">
                    <div class="event_wrap">
                        <div class="event_box">신수정 | 2024-06-27 13:14:58</div>
                        <div class="event_box">신수정 | 2024-06-27 13:14:58</div>
                        <div class="event_box">신수정 | 2024-06-27 13:14:58</div>
                        <div class="event_box">신수정 | 2024-06-27 13:14:58</div>
                        <div class="event_box">신수정 | 2024-06-27 13:14:58</div>
                        <div class="event_box">신수정 | 2024-06-27 13:14:58</div>
                        <div class="event_box">신수정 | 2024-06-27 13:14:58</div>
                        <div class="event_box">신수정 | 2024-06-27 13:14:58</div>
                        <div class="event_box">신수정 | 2024-06-27 13:14:58</div>
                        <div class="event_box">신수정 | 2024-06-27 13:14:58</div>
                        <div class="event_box">신수정 | 2024-06-27 13:14:58</div>
                        <div class="event_box">신수정 | 2024-06-27 13:14:58</div>
                        <div class="event_box">신수정 | 2024-06-27 13:14:58</div>
                        <div class="event_box">신수정 | 2024-06-27 13:14:58</div>
                        <div class="event_box">신수정 | 2024-06-27 13:14:58</div>
                        <div class="event_box">신수정 | 2024-06-27 13:14:58</div>
                        <div class="event_box">신수정 | 2024-06-27 13:14:58</div>
                        <div class="event_box">신수정 | 2024-06-27 13:14:58</div>
                        <div class="event_box">신수정 | 2024-06-27 13:14:58</div>
                    </div>
                    <div class="input_wrap">
                        <input class="comment" placeholder="Please write your thoughts!"/>
                        <button class="submit">Submit</button>
                    </div>
				</div>
		</div>
	</div>
</section>
<script>
	$(document).ready(function(){
        $(".app_header").removeClass("simple");
    })

    const submitButton = document.querySelector('.submit');

    submitButton.addEventListener("click", ()=>{
        const comment = document.querySelector(".comment").value
        if(comment === ""){
            alert("Please write your comment!")
        }else{
            $.ajax({
                url: PATH + "ajax/client/ajax_app_event.php",
                type: "POST",
                data: {
                    flag: "submit",
                    comment: comment
                },
                dataType: "JSON",
                success: function(res) {
                    if (res.code == 200) {
                    } else {
                        alert("error");
                        return false;
                    }
                }
            });
        }
    })

</script>

<?php include_once('./include/app_footer.php');?>