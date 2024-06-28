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
				<div class="event_img">
                    <img src="https://image.webeon.net/icomes2024/app/2024_app_event.png" alt="event_img"/>
				</div>
				<div class="event_container">
                    <div class="event_wrap">
                        <div class="event_box"></div>
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
        getComments();
    })

    function getComments(){
        $.ajax({
                url: PATH + "ajax/client/ajax_app_event.php",
                type: "POST",
                data: {
                    flag: "commnets"
                },
                dataType: "JSON",
                success: function(res) {
                    if (res.code == 200) {
                      //console.log(res)
                      showComments(res.data);
                    } 
                    else {
                      
                    }
                }
            });
    }

    function showComments(dataList){
        const eventWrap = document.querySelector(".event_wrap");

        dataList.map((data)=>{
            eventWrap.innerHTML += `<div class="event_box">${data.username.slice(0,4)}*** | ${data.register_date}</div>`
        })  
    }

    //제출하기 버튼 눌렀을 때 
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
                        alert("Event participation is complete.")
                        window.location.reload();
                    } 
                    //로그인 안 한 경우
                    else if(res.code == 402){
                        if(window.confirm('Login required. Would you like to log in?')){ 
                            window.location.href = '/main/app_login.php';
                        }else{
                            window.history.back();
                        }
                    }
                    //이벤트 중복 참여한 경우
                    else if(res.code == 401){
                        alert('You have already participated in the event.')
                    }
                    else {
                        alert("error");
                        return false;
                    }
                }
            });
        }
    })

</script>

<?php include_once('./include/app_footer.php');?>