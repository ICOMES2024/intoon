<?php include_once('./include/head.php');?>
<?php include_once('./include/app_header.php');?>
<?php $member_idx = isset($_SESSION["USER"]["idx"]) ? $_SESSION["USER"]["idx"] : null; ?>

<?php
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


<style>
    .my_event{
        position: relative;
    }

    .del_btn{
        position: absolute;
        bottom: 8px;
        right: 8px;
        border: 1px solid #DDD;
    }
</style>
<!-- HUBDNCLHJ : app survey 페이지 -->
<section class="container app_survey app_version app_comment" style="padding-bottom: 100px !important;">
	<div class="app_title_box">
		<h2 class="app_title">
        Comment EVENT
			<button type="button" class="app_title_prev" onclick="javascript:window.location.href='./app_index.php';">
				<img src="https://image.webeon.net/icomes2024/app/2024_icon_arrow_prev_wh.svg" alt="이전페이지로 이동">
			</button>
		</h2>
		<div class="app_menu_box">
            <ul class="app_menu_tab langth_2">
                    <li><a href="./app_event_guidelines.php">Comment Event<br/>Guidelines</a></li>
                    <li class="on event"><a href="./app_event.php">Question</a></li>
                </ul>
        </div>
	</div>
	<div class="inner">
		<div class="contents_box">
				<div class="event_img">
                    <img src="https://image.webeon.net/icomes2024/app_event/2024_app_quiz-03.png" alt="event_img"/>
				</div>
                <div class="input_wrap">
                        <input class="comment" placeholder="Please write down the correct answer"/>
                        <button class="submit">Submit</button>
                    </div>
                <div class="mycomment_wrap"></div>
				<div class="event_container">
                    <div class="event_wrap">
                    </div>
                   
				</div>
		</div>
	</div>
</section>
<script>
    const member_idx =  <?php echo json_encode($member_idx); ?>;
    const myEventBox = document.querySelector(".my_event");
    const eventWrap = document.querySelector(".event_wrap");
    const mycommentWrap = document.querySelector('.mycomment_wrap')
    //console.log(member_idx);

	$(document).ready(function(){
        $(".app_header").removeClass("simple");
        getUserComment();
    })

    function getUserComment(){
        getMyComments();
        getComments();
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
                      //console.log(res.data)
                      showMyComments(res.data[0]);
                    } 
                    else {
                      
                    }
                }
            });
    }

    function showMyComments(data){
        if(!member_idx){
            mycommentWrap.innerHTML = "";
        }else{     
            // eventWrap.innerHTML += `<div class="my_event">${data.comment}<br/>${data.register_date}<br/><button class='del_btn' onclick="deleteComment(${data.idx})">Delete</button></div>`

            mycommentWrap.innerHTML += `<div class="my_event">
                                        <div class='mycomment_header'>
                                            <div class="my_comment"><img src='https://image.webeon.net/icomes2024/app/2024_hamberver.svg'/>Comment</div>
                                            <div class="date">${data.register_date}</div>
                                        </div>
                                        <div class="mycomment_body">
                                            ${data.comment}
                                        </div>
                                    </div>`
        }
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
                    console.log(res)
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
    const commentInput = document.querySelector(".comment");

    //input 조건문
    commentInput.addEventListener('input', ()=>{
        commentInput.value = commentInput.value.replace(/[\'\"\\;\\\\]/g, "");
    })

    submitButton.addEventListener("click", ()=>{
        const commentValue = commentInput.value;

        if(commentValue.length > 100){
            alert("Please write in 100 characters or less.");
            return;
        }

        // [240709] sujeong !!! 수정 필요 !!! 첫번째 이벤트 q1
        const quizNum = 'q3';
        
        if(commentValue === ""){
            alert("Please write your comment!")
        }else if(commentValue.length >= 100){
            alert("Please write within 100 characters.")
        }else{
            $.ajax({
                url: PATH + "ajax/client/ajax_app_event.php",
                type: "POST",
                data: {
                    flag: "submit",
                    comment: commentValue,
                    quizNum : quizNum
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

    function getHint(){
   
    }

    function deleteComment(idx){
        if(window.confirm('Do you want to delete the comment?')){
        $.ajax({
                url: PATH + "ajax/client/ajax_app_event.php",
                type: "POST",
                data: {
                    flag: "comment_delete",
                    comment_idx : idx
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
    }

</script>

<?php include_once('./include/app_footer.php');?>