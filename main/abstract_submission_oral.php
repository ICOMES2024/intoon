<?php
include_once('./include/head.php');
include_once('./include/header.php');

// key date
$sql_key_date =    "SELECT
						idx, `key_date`, contents_" . $language . " AS contents
					FROM key_date
					WHERE `type` = 'lecture'
					AND `key_date` <> '0000-00-00'
					ORDER BY idx";

$key_date = get_data($sql_key_date);

// info
$sql_info = "SELECT
					note_msg_" . $language . " AS note_msg,
					formatting_guidelines_" . $language . " AS formatting_guidelines,
					how_to_modify_" . $language . " AS how_to_modify
				FROM info_lecture";
$info = sql_fetch($sql_info);

?>
<section class="abstract_submission_guideline container abstract_presentation_guideline">
    <h1 class="page_title">Presentation Guidelines</h1>
    <div class="inner">
        <ul class="tab_green long presentation">
            <li class="on"><a href="./abstract_submission_oral.php">Oral Presentation</a></li>
            <li><a href="./abstract_submission_poster.php">Guided Poster Presentation</a></li>
            <li><a href="./abstract_submission_exhibition.php">Poster Exhibition</a></li>
        </ul>
        <div class="section section1">
            <?php
            if (count($key_date) > 0) {
                $weekday = ["일", "월", "화", "수", "목", "금", "토"];
            ?>
            <!--List of Accepted Abstract-->
            <!-- <div>
                <div class="section_title_wrap2">
                    <h3 class="title">List of Accepted Abstract</h3>
                </div>
                <div class="list_accepted_abstract_btn">
					<button type="button" onClick="javascript:window.open('./download/Oral Presentation_0830.pdf')"><img src="./img/icons/download_w.svg" />Oral Presentation</button>
					<button type="button" onClick="javascript:window.open('./download/Guided Poster Presentation_0824.pdf')"><img src="./img/icons/download_w.svg" />Guided Poster Presentation</button>
					<button type="button" onClick="javascript:window.open('./download/Poster Exhibition_0824.pdf')"><img src="./img/icons/download_w.svg" />Poster Exhibition</button>
                </div>
            </div> -->
            <!--keydate-->
            <div>
                    <div class="section_title_wrap2">
                        <h3 class="title" style="padding-bottom: 0;"><!--<?= $locale("keydate") ?>-->Key Dates</h3>
                        <p class="text_r bold">*KST (UTC+9)</p>
                    </div>

					<div class="abstract_key_dates">
					<div class="key_date">
                    </div>
					<div class="key_date">
                        <h4>Abstract Submission Deadline</h4>
						<div>
							<h3>20</h3>
							<div>
								<p>Thursday,</p>
								<h6>Jun</h6>
							</div>
						</div>
					</div>
					<div class="key_date">
                        <h4>Notification of Abstract Acceptance</h4>
						<div>
							<h3>10</h3>
							<div>
								<p>Wednesday,</p>
								<h6>July</h6>
							</div>
						</div>
						<p><span class="star">*</span> Details regarding presentation type and guidelines will be provided.</p>
						<p><span class="star">*</span> Abstracts submitted by June 20 will be notified of acceptance <br/>&nbsp;&nbsp;&nbsp;on July 10.</p>
					</div>
					<div class="key_date">
                    <h4>Registration Deadline for Approved<br/>Abstract Presenters</h4>  
						<div>
							<h3>08</h3>
							<div>
								<p>Thursday,</p>
								<h6>August</h6>
							</div>
						</div>
					</div>
					<div class="key_date">
                    <h4>Late-breaking Abstract Submission Deadline</h4> 
					<div>
							<h3>01</h3>
							<div>
								<p>Thursday,</p>
								<h6>August</h6>
							</div>
						</div>
						<p><span class="star">*</span> Late-breaking abstracts can only be submitted as poster exhibitions.</p>
                        <p><span class="star">*</span> Late-breaking abstracts may not be eligible for Travel Grants.</p>
					</div>
					<div class="key_date">
                    <h4>Notification of Late-breaking Abstract<br/>Acceptance</h4> 
						<div>
							<h3>07</h3>
							<div>
								<p>Wednesday,</p>
								<h6>August</h6>
							</div>
						</div>
					</div>
					
				</div>
                <!-- <div class="table_wrap detail_table_common">
                    <table class="c_table detail_table">
                        <colgroup>
                            <col class="submission_col">
                            <col>
                        </colgroup>
                        <tr>
								<th>Abstract Submission<br class="br_mb_only"> System Open</th>
								<td class="f_bold">Mid-February</td>
							</tr>
							<tr>
								<th class="close_th">Abstract Submission<br class="br_mb_only"> Deadline</th>
								<td><span class="font_inherit f_bold red_t">June 20 (Thu)</span></td>
							</tr>
							<tr>
                                <th>Notification of<br class="br_mb_only"> Abstract Acceptance</th>
								<td><span class="font_inherit f_bold">July 10 (Wed)</span><br>*Details regarding presentation type and guidelines will be provided.<br>*Abstracts submitted by June 20 will be notified of acceptance on July 10.</td>
							</tr>
                            <tr>
                                <th class="">Late-breaking-Abstract Submission<br class="br_mb_only"> Deadline</th>
                                <td><span class="font_inherit f_bold red_t">July 11 (Thu)</span><p>*Late-breaking abstracts can only be submitted as poster exhibitions.</p></td>
                            </tr>
                            <tr>
								<th>Notification of<br class="br_mb_only"> Late-breaking Abstract Acceptance</th>
                                 <td><span class="font_inherit f_bold">July 30 (Tue)</span></td>
							</tr>
							<tr>
								<th>Registration Deadline for<br class="br_mb_only"> Approved Abstract Presenters</th>
								<td>August 1 (Thu)</td>
							</tr>
                    </table>
                </div> -->
            </div>
			<!--session information-->
            <div>
                <div class="section_title_wrap2">
                    <h3 class="title">Session Information</h3>
                </div>
                <div class="table_wrap detail_table_common x_scroll table18">
                     <table class="c_table">
                        <colgroup>
                            <col class="submission_col">
                            <col>
                        </colgroup>
                        <tr>
                            <th class="centerT f_bold text_center">Session</th>
                            <th class="centerT f_bold skyblue_bg_th">Oral Presentation 1</th>
                            <th class="centerT f_bold skyblue_bg_th">Oral Presentation 2</th>
                            <th class="centerT f_bold darkblue_bg_th">Oral Presentation 3</th>
                            <th class="centerT f_bold darkblue_bg_th">Oral Presentation 4</th>
                        </tr>
						<tr>
							<td class="text_center bold">Date & Time</td>
							<td class="text_center" colspan="2"><span class="bold">12:50 - 14:00</span><br>Sep. 6 (Fri)</td>
							<td class="text_center" colspan="2"><span class="bold">12:40 – 13:50</span><br>Sep. 7 (Sat)</td>
							
						</tr>
						<tr>
							<td class="text_center bold">Location</td>
							<td class="text_center">Room 4, 5F</td>
							<td class="text_center">Room 5, 5F</td>
							<td class="text_center">Room 4, 5F</td>
							<td class="text_center">Room 5, 5F</td>
						</tr>
                    </table>
                </div>
            </div>
			<!--Language & Length of Presentation-->
			<div>
				<div class="section_title_wrap2">
					<h3 class="title">Language & Length of Presentation</h3>
				</div>
				<div class="text_box indent text_box20">
					<ul>
						<li>• Language: <span class="purple_txt bold">English</span></li>
						<li>• Each presenter will be given <span class="purple_txt bold">10 minutes.</span> (7 minutes talk / 3 minutes Q&A)</li>
					</ul>
				</div>
			</div>
			<!--Preview Room-->
			<div>
				<div class="section_title_wrap2">
					<h3 class="title">Preview Room</h3>
					<p>
						Prior to their session, it is mandatory for all presenters to visit the preview room to verify and upload their presentation files.
					</p>
				</div>
				<div class="table_wrap detail_table_common">
                       <table class="c_table detail_table table18">
                           <colgroup>
                               <col>
                               <col>
                               <col>
                           </colgroup>
                           <tr>
                               <th></th>
                               <th class="f_bold text_center">Sep. 6 (Fri)</th>
                               <th class="f_bold text_center">Sep. 7 (Sat)</th>
                           </tr>
						<!-- <tr>
							<td class="text_center">Location</td>
							<td class="text_center" colspan="2">Park Studio, 5F</td>
						</tr> -->
						<tr>
							<td class="text_center">Operating Hour</td>
							<td class="text_center">07:30 - 18:00</td>
							<td class="text_center">07:30 - 17:00</td>
						</tr>
                       </table>
                   </div>
			</div>
			<!--Presentation Material-->
			<div>
				<div class="section_title_wrap2">
					<h3 class="title">Presentation Material</h3>
				</div>
				<div class="text_box indent text_box20">
					<ul>
						<li>• Please use MS Office PowerPoint.</li>
						<li>• We recommend the slide ratio to be 16:9.</li>
						<li>• Pre-submission of presentation materials is not necessary. You can check and edit the material in the preview room.</li>
						<li>• Pre-submitted materials should also be checked in the preview room before your presentation.</li>
						<li>• Save the presentation materials on a USB and submit them in the preview room one hour before your session.</li>
						<li>• If you have videos or voice files in your materials, please bring each file additionally in case it does not work.</li>
						<li>• If you use fonts that are not offered by MS, please save the font file in the file.</li>
						<li>• If you are a MacBook user, please bring Apple adapters (connecting cables).</li>
						<li>• Operating staff will be assigned to each room to assist you with any technical issues.</li>
					</ul>
				</div>
				<div class="text_center btn_box mt25">
                <a href="https://image.webeon.net/icomes2024/template/(ICOMES)Oral_Presentation_Template.pptx" target="_blank" class="btn long_btn" download><img src="https://image.webeon.net/icomes2024/logo/icon_download_white.svg" alt="">Presentation Template Download</a>

                </div>
			</div>
            <?php
            }
            ?>
        </div>
    </div>
</section>



<?php include_once('./include/footer.php'); ?>