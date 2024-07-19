<?php include_once('./include/head.php');?>
<?php include_once('./include/app_header.php');?>

<?php

$select_notice_query = "
                            SELECT idx, type, title_en, pin
                            FROM board
                            WHERE is_deleted='N'
                            AND type=4
                            ORDER BY register_date DESC
                        ";
$notice_list = get_data($select_notice_query);

$total_notice = count($notice_list) ?? 0;

?>

<!-- HUBDNCAJY : App - Notice 페이지 -->
<section class="container app_version">
	<div class="app_title_box">
			<h2 class="app_title">NOTICE<button type="button" class="app_title_prev" onclick="javascript:window.location.href='./app_index.php';"><img src="https://image.webeon.net/icomes2024/app/2024_icon_arrow_prev_wh.svg" alt="이전페이지로 이동"></button></h2>
			<div class="app_menu_box">
				<ul class="app_menu_tab langth_2">
					<li><a href="./app_notice.php">NOTICE</a></li>
					<li class="on"><a href="./app_newsletter.php">Newsletter</a></li>
				</ul>
			</div>
		</div>
	<div class="inner">
		<div class="contents_box">
			<div class="app_contents_wrap type3">
				<ul class="app_notice_ul">
					<!-- 고정 게시글인 li에 .fin 클래스 추가 -->
                    <?php
						if ($total_notice > 0) {
							foreach ($notice_list as $notice){
								if($notice['pin']==='Y'){
                    ?>
									<li class="fin" value="<?=$notice['idx']?>">
										<a href="javascript:;">
											<?=$notice['title_en']?>
										</a>
									</li>
                    <?php
								}
							}
                    ?>
                    <?php
							foreach ($notice_list as $notice){
								if($notice['pin']==='N'){
                    ?>
									<li class="" value="<?=$notice['idx']?>">
										<a href="javascript:;">
											<?=$notice['title_en']?>
										</a>
									</li>
                    <?php
								}
							}
						} else {
                    ?>
							<li style="border-bottom:none;"><div class='no_data'>Will be updated</div></li>
					<?php
						}
					?>
				</ul>
			</div> 
		</div>
	</div>
</section>

<script>
	$(document).ready(function(){

        $(".app_header").removeClass("simple");

		$(".app_notice_ul > li").click(function(){
            let idx=$(this).val();

			if (!idx) {
				return;
			}

			window.location.href="./app_newsletter_detail.php?idx="+idx;
		});
	});
</script>

<?php include_once('./include/app_footer.php');?>