<?php include_once('./include/head.php'); ?>
<?php include_once('./include/header.php'); ?>
<section class="container login_form form_layout find_password login bg style_2023">
	<!-- <a href="./index.php" class="logo"><img src="./img/logo.png"></a> -->
	<h1 class="page_title">Find Password
		<p class="red_txt">Please enter your email.</p>
	</h1>
	<div>
		<form name="find_password_form" onsubmit="return false;">
			<ul>
				<li>
					<input class="find_pw" type="text" name="email" placeholder="<?= $locale("id") ?>">
				</li>
			</ul>
			<button type="button" class="btn submit_btn gray_line_btn pw_btn find_pw"><?= $locale("get_temporary_password_btn") ?></button>
			<button type="button" class="btn login_btn main_btn login_2024 find_pw" onclick="javascript:window.location.href='./login.php';"><?= $locale("login") ?></button>
		</form>
	</div>
</section>

<div class="loading">
	<img src="./img/icons/loading.gif" />
</div>

<script>
	var alreadyProcess = false; // 더블 클릭 방지

	$(document).ready(function() {

		// 비밀번호 찾기 Enter
		$("input[name=email]").on("keyup", function(key) {
			if (key.keyCode == 13) {
				$(".submit_btn").trigger("click");
			}
		});

		// 비밀번호 찾기 버튼
		$(".submit_btn").on("click", function() {
			var email = $("input[name=email]").val();

			if (email == "" || email == "undefined" || email == null) {
				alert(locale(language.value)("check_email"));
				return false;
			}

			if (alreadyProcess) {
				return false;
			}

			alreadyProcess = true;

			$(".loading").show();
			$("body").css("overflow-y", "hidden");

			$.ajax({
				//url: PATH + "ajax/client/ajax_gmail.php",
				url: PATH + "ajax/client/ajax_gmail.php",
				type: "POST",
				data: {
					flag: "find_password",
					email: email
				},
				dataType: "JSON",
				success: function(res) {

					//console.log(res);
					if (res.code == 200) {
						alert(locale(language.value)("send_mail_success"));
					} else if (res.code == 401) {
						alert(locale(language.value)("not_exist_email"));
						return false;
					} else if (res.code == 400) {
						alert(locale(language.value)("error_find_password"));
						return false;
					} else {
						alert(locale(language.value)("reject_msg"));
						return false;
					}
				},
				complete: function() {
					$(".loading").hide();
					$("body").css("overflow-y", "auto");

					alreadyProcess = false;
				}
			});

		});

	});
</script>

<?php include_once('./include/footer.php'); ?>