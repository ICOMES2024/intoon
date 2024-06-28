<?php include_once('./include/head.php');?>
<?php include_once('./include/app_header.php');?>
<?php $member_idx = isset($_SESSION["USER"]["idx"]) ? $_SESSION["USER"]["idx"] : null; ?>
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
    const member_idx =  <?php echo json_encode($member_idx); ?>;
    const myEventBox = document.querySelector(".my_event");
    const eventWrap = document.querySelector(".event_wrap");
    console.log(member_idx);

	$(document).ready(function(){
        $(".app_header").removeClass("simple");
        getUserComment();
    })

    function getUserComment(){

        if(!member_idx){
            myEventBox.innerHTML = "";
        }else{
            getMyComments();
        }
    }

    function getMyComments(){
        $.ajax({
                url: PATH + "ajax/client/ajax_app_event.php",
                type: "POST",
                data: {
                    flag: "my_commnet",
                    user_idx : member_idx
                },
                dataType: "JSON",
                success: function(res) {
                    if (res.code == 200) {
                       // console.log(res.data)
                      showMyComments(res.data[0]);
                    } 
                    else {
                      
                    }
                }
            });
    }

    function showMyComments(data){
        eventWrap.innerHTML += `<div class="my_event"> **My Comments <br/>${data.username} <br/>${data.comment}<br/>${data.register_date}</div>`
        getComments();
    }

    function getComments(){
        $.ajax({
                url: PATH + "ajax/client/ajax_app_event.php",
                type: "POST",
                data: {
                    flag: "commnets"
                },
                dataType: "JSON",
                success: function(res) {
                    //console.log(res)
                    if (res.code == 200) {
                      showComments(res.data);
                    } 
                    else {
                      
                    }
                }
            });
    }

    function showComments(dataList){
        dataList.map((data)=>{
            eventWrap.innerHTML += `<div class="event_box">${data.username.slice(0,4)}*** | ${data.register_date}</div>`
        })  
    }

    //제출하기 버튼 눌렀을 때 
    const submitButton = document.querySelector('.submit');
    const comment = document.querySelector(".comment")

    //input 조건문
    comment.addEventListener('input', ()=>{
        comment.value = comment.value.replace(/[\'\"\\;\\\\]/g, "");
    })

    submitButton.addEventListener("click", ()=>{
        const commentValue = comment.value;
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