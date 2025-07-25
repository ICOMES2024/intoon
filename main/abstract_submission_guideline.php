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
<section class="abstract_submission_guideline container">
    <h1 class="page_title">Submission Guidelines</h1>
    <div class="inner">
        <ul class="tab_green long abstract_submission">
            <li class="on"><a href="./abstract_submission_guideline.php">Submission Guidelines</a></li>
            <li><a class="online_submission_alert" href="./abstract_submission.php">Online Submission</a></li>
            <!-- <li><a href="./abstract_submission_oral.php">Oral Presenters</a></li> -->
            <!-- <li><a href="./abstract_submission_exhibition.php">Poster Exhibition</a></li> -->

            <!--[240205] sujeong / 학회팀 요청 주석 -->
            <!-- <li><a href="./comingsoon.php">Awards & Grants</a></li> -->
            <!-- <li><a href="./abstract_submission_award.php">Awards & Grants</a></li> -->
        </ul>
        <div class="section section1">
            <div>
                <div class="text_box">
                    <ul class="center_t text_box20">
                        <li>The ICOMES 2024 organizing committee cordially invites you to submit abstracts<br/>for <span class="purple_txt bold">oral presentations, guided poster presentations</span> and <span class="purple_txt bold">poster exhibitions.</span></li>
                        <li>All abstracts must be submitted via the online submission system.
<br/>Please read the guidelines before submitting your abstract(s).</li>
                        <!--
						<li class="f_bold">• If you are selected by submitting an abstract, 100% of the registration fee can be reduced.</li>
						<li>• The reduction is based on the payment of the pre-registration fee, and only the submitter will receive a refund within 2 weeks after the congress.</li>
						-->
                    </ul>
                </div>
                <div class="text_center btn_box mt25">
                     <a href="https://image.webeon.net/icomes2024/download/ICOMES2024_Abstract_template.docx" class="btn long_btn" target="_blank" download><img src="https://image.webeon.net/icomes2024/logo/icon_download_white.svg" alt="">Abstract Form Download</a> 
                    <a href="./abstract_submission.php" class="btn long_btn yellow_btn online_submission_alert">Go to Abstract Submission</a>
                </div>
        
            </div>
            <!-- <div class="details"> -->
            <!-- 	<?= htmlspecialchars_decode(strip_tags($info['note_msg'])) ?> -->
            <!-- </div> -->
            <?php
            if (count($key_date) > 0) {
                $weekday = ["일", "월", "화", "수", "목", "금", "토"];
            ?>
                <!--keydate start-->
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
            </div>
            <!--keydate end-->
            <?php
            }
            ?>
            <!--Presentation Type start-->
            <!--<div>
                <div class="section_title_wrap2">
                    <h3 class="title"><?= $locale("presentation_type") ?></h3>
                </div>
                <div class="text_box">
                    When you submit the abstract, select the possibility regarding the Oral presentation on the abstract
                    submission page. It will be posted in the form of an Poster or given the oral presentation according
                    to the selection.
                    <div>
                        <button type="button">Oral Presentation</button>
                        <button type="button">Poster Exhibition</button>
                    </div>
                </div>
            </div>-->
            <!--Presentation Type end-->
            <!--Steps for Abstract Submission start-->
            <div>
                <div class="section_title_wrap2">
                    <h3 class="title"><?= $locale("steps_for_abstract_submission") ?></h3>
                </div>
				<div class="steps_area five_steps">
					<ul class="clearfix">
						<li>
							<p>Step 1</p>
							<p class="sm_txt">Sign up and log in to the ICOMES 2024 website.</p>
						</li>
						<li>
							<p>Step 2</p>
							<p class="sm_txt">Read the submission guidelines and download the abstract form.</p>
						</li>
						<li>
							<p>Step 3</p>
							<p class="sm_txt">Fill out the abstract form and submit an abstract.</p>
						</li>
						<li>
							<p>Step 4</p>
							<p class="sm_txt">Enter the author's information and abstract section, including the type of presentation, topic categories, and title.</p>
						</li>
						<li>
							<p>Step 5</p>
							<p class="sm_txt">Complete and confirm submission.</p>
						</li>
					</ul>
				</div>
            </div>
            <!--Steps for Abstract Submission end-->
            <!--Topic Categories start-->
            <div>
                <!-- <div class="section_title_wrap2">
                    <h3 class="title"><?= $locale("topic_categories") ?></h3>
                </div> -->
                <div class="top_text_box">
                    Topic Categories
                </div>
                <div class="text_box text_box20">
                    <ul>
                        <li class="f_bold"><span class="bold">1. </span>Behavior and Public Health for Obesity</li>
                        <li class="f_bold"><span class="bold">2. </span>Nutrition, Education and Exercise for Obesity
                        </li>
                        <li class="f_bold"><span class="bold">3. </span>Epidemiology of Obesity and Metabolic Syndrome
                        </li>
                        <li class="f_bold"><span class="bold">4. </span>Digital Therapeutics and Big Data Study</li>
                        <li class="f_bold"><span class="bold">5. </span>Diabetes and Obesity</li>
                        <li class="f_bold"><span class="bold">6. </span>Dyslipidemia, Hypertension and Obesity</li>
                        <li class="f_bold"><span class="bold">7. </span>Other Comorbidities of Obesity and Metabolic
                            Syndrome</li>
                        <li class="f_bold"><span class="bold">8. </span>Pathophysiology of Obesity and Metabolic
                            Syndrome</li>
                        <li class="f_bold"><span class="bold">9. </span>Therapeutics of Obesity and Metabolic Syndrome
                        </li>
                        <li class="f_bold"><span class="bold">10. </span>Metabolic and Bariatric Surgery</li>
                        <li class="f_bold"><span class="bold">11. </span>Obesity and Metabolic Syndrome in Children and
                            Adolescents</li>
                    </ul>
                </div>
            </div>
            <!--Topic Categories end-->
            <!--Instructions start-->
            <div>
                <div class="section_title_wrap2">
                    <h3 class="title"><?= $locale("instructions") ?></h3>
                </div>
                <div class="table_wrap detail_table_common x_scroll">
                    <table class="c_table detail_table table20">
                        <colgroup>
                            <col class="submission_col type2">
                            <col>
                        </colgroup>
                        <tr>
                            <th class="center_t border_right">Presentation Type </th>
                            <td>
                                <p class="purple_txt bold">•  Oral Presentation</p>
                                <p class="purple_txt bold">•  Guided Poster Presentation</p>
                                <p class="purple_txt bold">•  Poster Exhibition <br />
                                    <span>(*Scientific Committee may change the presentation type by review.)</span>
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <th class="center_t border_right">Language</th>
                            <td>English</td>
                        </tr>
                        <tr>
                            <th class="center_t border_right">Length of Title</th>
                            <td>No longer than 30 words</td>
                        </tr>
                        <tr>
                            <th class="center_t border_right">Method of Submission</th>
                            <td>Online submission via the website.</td>
                        </tr>
                        <tr>
                            <th class="center_t border_right">Format</th>
                            <td>
                                <p>Download and use the official abstract form.<br />Contain 4 sections: background, methods & materials, results, and conclusions.<br />(Keywords are optional.)</p>
                            </td>
                        </tr>
                        <tr>
                            <th class="center_t border_right">Length of body</th>
                            <td>No longer than 300 words</td>
                        </tr>
                        <tr>
                            <th class="center_t border_right">Figure / Table</th>
                            <td>
                                <p>- 1 figure in 1 abstract: <span class="dark_yellow_txt bold">Allowed</span></p>
                                <p>- 1 table in 1 abstract: <span class="dark_yellow_txt bold">Allowed</span></p>
                                <p>- 1 figure & 1 table in 1 abstract:  <span class="dark_yellow_txt bold">Not allowed</span><br />
                                    (*Each figure or table will be counted as 50 words.)
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <th class="center_t border_right">Modification</th>
                            <td>Abstract review or modification will be available until the abstract submission deadline.<br/>If submitted abstracts are under evaluation for acceptance, modification is prohibited.<br/>If you need to make any changes, please email the secretariat. </td>
                        </tr>
                        <tr>
                            <th class="center_t border_right">Withdrawal</th>
                            <td>Request to the secretariat via email (<a href="mailto:icomes_abstracts@into-on.com" class="link">icomes_abstracts@into-on.com</a>)</td>
                        </tr>
                    </table>
                </div>
            </div>
            <!--Instructions end-->
			<!--Originality & Eligibility start-->
            <div>
                <div class="section_title_wrap2">
                    <h3 class="title">Originality & Eligibility</h3>
                </div>
                <div class="text_box indent">
                    <ul class="indent_ul">
                        <li>• If the submission does not comply with the prescribed format or deviates from the basic purpose of this congress, it may be rejected at the discretion of the Scientific Committee.</li>
                        <li>• The subject of the abstract is limited to unpublished research results, and editing of content previously presented at other conferences is not accepted for submission.</li>
                        <li>• The submitted and accepted abstracts may be published on the website, application, abstract book(PDF), and other printed materials of the Korean Society for the Study of Obesity.</li>
						<li>• If any related issue arises, please contact the congress secretariat at <a href="mailto:icomes@into-on.com" class="link">icomes@into-on.com.</a></li>
                    </ul>
                </div>
            </div>
            <!--Notification of Acceptance start-->
            <div>
                <div class="section_title_wrap2">
                    <h3 class="title"><?= $locale("notification_of_acceptance") ?></h3>
                </div>
                <div class="text_box indent">
                    <ul class="indent_ul">
                        <li>• Following the evaluation of all abstract submissions by the Scientific Committee, the presenting author and the corresponding author will receive an email notification regarding the acceptance of their submission.</li>
                        <li>• It is mandatory for all presenters to complete the registration process and pay the full registration fee by the registration deadline of <span class="bold purple_txt">August 8, 2024</span>.
                        The registration fee will be fully refunded after the conference.</li>
                        <li>• If the submission deadline changes, the acceptance notification will also change. The secretariat will be notified via ICOMES website or newsletter.</li>
                    </ul>
                </div>
            </div>
            <!--Notification of Acceptance end-->
            <!--Withdrawal Policy start-->
            <div>
                <div class="section_title_wrap2">
                    <h3 class="title"><?= $locale("withdrawal_policy") ?></h3>
                </div>
                <div class="text_box indent">
                    <ul class="indent_ul">
                        <li>• Failure to register by the presenter registration deadline will result in the automatic withdrawal of the accepted abstract from the final program.</li>
                        <li>• To request the withdrawal of an abstract, send an email to the ICOMES 2024 secretariat (<a href="mailto:icomes_abstracts@into-on.com" class="link font_inherit">icomes_abstracts@into-on.com</a>) at your earliest convenience.</li>
                    </ul>
                </div>
            </div>
            <!--Withdrawal Policy end-->
            <!--Contact for Abstract start-->
            <!--
			<div>
                <div class="section_title_wrap2">
                    <h3 class="title"><?= $locale("contact_for_abstract") ?></h3>
                </div>
                <div class="text_box contact">
                    <ul class="devide_ul">
                        <li><span class="green_t bold">TEL :</span> +82-2-2285-2582</li>
                        <li><span class="green_t bold">E-mail :</span> icomes_abstracts@into-on.com</li>
                    </ul>
                </div>
            </div>
			-->
            <!--Contact for Abstract end-->
        </div>
        <!--//section1-->

    </div>
    <!-- <button type="button" class="fixed_btn" onclick="window.location.href='./abstract_submission.php';"><?= $locale("abstract_submission_btn") ?></button> -->
</section>

<?php include_once('./include/footer.php'); ?>