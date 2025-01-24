<div class="footer_wrap">
    <!-- 220323 HUBDNC LJH 추가 -->
    <div class="fixed_btn_clone"></div>
    <div class="fixed_btn_wrap">
        <ul class="toolbar_wrap">
            <li>
                <a href="/main/program_glance.php">
                    <img src="https://image.webeon.net/icomes2024/logo/2024_tool_program-2.svg" alt="">
                </a>
            </li>
            <?php
            if ($_SESSION["USER"]["regi_status"] == 2 || $_SESSION["USER"]["regi_status"] == 5) {
            ?>

             <!-- <li>
                <button type="button" onClick="location.href='/main/registration_guidelines.php'">
                    <img src="https://image.webeon.net/icomes2024/logo/2024_tool_regist-2.svg" alt="">
                </button>
            </li>
            <li>
                <button type="button" onClick="location.href='/main/abstract_submission_guideline.php'">
                    <img src="https://image.webeon.net/icomes2024/logo/2024_tool_abstract-2.svg" alt="">
                </button>
            </li> -->
            <!-- [240205] sujeong / 프로그램북, 초록집 다운로드 주석 -->
            <!--[230824] 다운로드 버튼 추가 / 파일 전달X-->
             <li>
                <a href="https://184a8b4a1a076d93.kinxzone.com/Abstract.pdf" class="type2 pink" target="_blank">
                    <i><img src="https://image.webeon.net/icomes2024/logo/icon_download_abstract.svg" alt=""></i>
                    Abstract Book <br />Download
                </a>
            </li>
           <!-- <li>
                <a class="type2 violet not_yet">
                    <i><img src="https://image.webeon.net/icomes2024/logo/icon_download_program.svg" alt=""></i>
                    Program Book <br />Download
                </a>
            </li> -->
            <!-- <li>
                <a href="http://184a8b4a1a076d93.kinxzone.com/Abstractbook.pdf" target="_blank" class="type2 pink">
                    <i><img src="/main/img/icons/icon_download_abstract.svg" alt=""></i>
                    Abstract Book <br />Download
                </a>
            </li>
            <li>
                <a href="http://184a8b4a1a076d93.kinxzone.com/Programbook.pdf" target="_blank" class="type2 violet">
                    <i><img src="/main/img/icons/icon_download_program.svg" alt=""></i>
                    Program Book <br />Download
                </a>
            </li> -->
            <?php
            } else {
            ?>
            <!-- <li>
                <button type="button" onClick="location.href='/main/registration_guidelines.php'">
                    <img src="https://image.webeon.net/icomes2024/logo/2024_tool_regist-2.svg" alt="">
                </button>
            </li>
            <li>
                <button type="button" onClick="location.href='/main/abstract_submission_guideline.php'">
                    <img src="https://image.webeon.net/icomes2024/logo/2024_tool_abstract-2.svg" alt="">
                </button>
            </li> -->
            <?php
            }
            ?>
            <?php
            if ($_SESSION["USER"]["idx"] == "") {
            ?>
               <li>
                <button type="button" onClick="location.href='/main/registration_guidelines.php'">
                    <img src="https://image.webeon.net/icomes2024/logo/2024_tool_regist-2.svg" alt="">
                </button>
            </li>
            <li>
                <button type="button" onClick="location.href='/main/abstract_submission_guideline.php'">
                    <img src="https://image.webeon.net/icomes2024/logo/2024_tool_abstract-2.svg" alt="">
                </button>
            </li>
            <li><button type="button" onClick="alert('Need to login.')"><img src="https://image.webeon.net/icomes2024/logo/2024_tool_mypage-2.svg"
                            alt=""></button></li>
            <?php
            } else {
            ?>
            <li><button type="button" onClick="location.href='/main/mypage_registration.php'"><img
                            src="https://image.webeon.net/icomes2024/logo/2024_tool_mypage-2.svg" alt=""></button></li>
            <?php
            }
            ?>

        </ul>
        <button type="button" class="btn_top"><img src="https://image.webeon.net/icomes2024/logo/2024_icon_top_btn.svg" alt=""></button>
    </div>
    <!-- 220323 HUBDNC LJH 추가 : 끝 -->
    <!--
    <div class="sponsor_logo-wrap container">
        <ul class="s_logo_list">
            <li><img src="./img/sponsor/logo01.png" alt=""></li>
            <li><img src="./img/sponsor/logo02.png" alt=""></li>
            <li><img src="./img/sponsor/logo03.png" alt=""></li>
            <li><img src="./img/sponsor/logo04.png" alt=""></li>
            <li><img src="./img/sponsor/logo05.png" alt=""></li>
            <li><img src="./img/sponsor/logo06.png" alt=""></li>
            <li><img src="./img/sponsor/logo07.png" alt=""></li>
            <li><img src="./img/sponsor/logo08.png" alt=""></li>
            <li><img src="./img/sponsor/logo09.png" alt=""></li>
            <li><img src="./img/sponsor/logo10.png" alt=""></li>
            <li><img src="./img/sponsor/logo11.png" alt=""></li>
            <li><img src="./img/sponsor/logo12.png" alt=""></li>
            <li><img src="./img/sponsor/logo13.png" alt=""></li>
            <li><img src="./img/sponsor/logo14_1.png" style="max-height:20px;" alt=""></li>
            <li><img src="./img/sponsor/logo15.png" alt=""></li>
            <li><img src="./img/sponsor/logo16.png" alt=""></li>
            <li><img src="./img/sponsor/logo17.png" alt=""></li>
            <li><img src="./img/sponsor/logo18.png" alt=""></li>
            <li><img src="./img/sponsor/logo19.png" alt=""></li>
            <li><img src="./img/sponsor/logo20.png" alt=""></li>
            <li><img src="./img/sponsor/logo21.png" alt=""></li>
            <li><img src="./img/sponsor/logo22.png" alt=""></li>
            <li><img src="./img/sponsor/logo23.png" alt=""></li>
        </ul>
    </div> -->
    <div class="sponsor_logo-wrap container">
            <ul class="s_logo_list">
                <li><a href="https://www.novonordisk.com/" class="novo_nordisk"></a></li>
                <li><a href="https://www.alvogen.com/" class="alvogen"></a></li>
                <li><a href="https://www.hanmipharm.com/ehanmi/handler/Home-Start" class="hanmi_pharm"></a></li>
                <li><a href="http://www.ckdpharm.com/en/home" class="chong_kun_dang"></a></li>
                <li><a href="https://eng.handok.com/eng/" class="handok"></a></li>
                <li><a href="http://eng.yuhan.co.kr/Main/" class="yuhan"></a></li>
                <li><a href="http://en.donga-st.com/Main.da" class="dong_a"></a></li>
                <li><a href="https://www.inno-n.com/eng" class="inno_n"></a></li>
                <li><a href="https://www.daewoong.co.kr/en/main/index" class="daewoong_1"></a></li>
                <li><a href="https://www.lilly.co.kr/" class="lilly"></a></li>
                <li><a href="https://www.astrazeneca.com/" class="astra_zeneca"></a></li>
                <li><a href="https://www.lgchem.com/main/index" class="lg_chem"></a></li>
                <li><a href="https://www.celltrionph.com/en-us/home/index" class="celltrion"></a></li>
                <li><a href="https://www.sanofi.com/en/our-company" class="sanofi"></a></li>
                <li><a href="https://www.boryung.co.kr/en/" class="boryung"></a></li>
                <li><a href="https://eng.ekdp.com/main.do" class="kwangdong"></a></li>
                <li><a href="https://www.gccorp.com/eng/index" class="gc_biopharma"></a></li>
                <li><a href="http://ajupharm.co.kr/en/index.html" class="aju_pharm"></a></li>
                <li><a href="https://www.daiichisankyo.com/" class="daiichi_sankyo"></a></li>
                <li><a href="https://www.organon.com/" class="organon"></a></li>
                <li><a href="https://www.boehringer-ingelheim.com/" class="boehringer"></a></li>
                <li><a href="http://www.dalimpharm.co.kr/en_index.html" class="dalimbiotech"></a></li>
                <li><a href="https://www.daewonpharm.com/eng/main/index.jsp" class="daewon"></a></li>
                <li><a href="https://daewoongbio.co.kr/daewoongbiokr/main/main.web" class="daewoong_2"></a></li>
                <li><a href="https://www.jw-pharma.co.kr/pharma/en/main.jsp" class="jw_pharm"></a></li>
                <!-- <li><a href="https://www.msd.com/" class="msd">MSD</a></li> -->
            </ul>
    </div>
    <footer class="footer">
        <div class="container">
            <br>
            <!--<h5>Supported by</h5>-->
            <div class="f_bottom clearfix">
                <div class="footer_l">
                    <div class="clearfix">
                        <!-- <img src="https://image.webeon.net/icomes2024/logo/fl01.png" alt="">
                        <img src="https://image.webeon.net/icomes2024/logo/fl02.png" alt=""> -->
                        <img src="https://image.webeon.net/icomes2024/logo/2024_footer_ksso_logo.svg" alt="">
                        <img src="https://image.webeon.net/icomes2024/logo/2024_footer_icomes_logo.svg" alt="">
                        <!-- [240201] sujeong / 학회팀 요청 주석 -->
                        <img class="pointer" onclick="goVisitSeoul()" src="https://image.webeon.net/icomes2024/logo/fl03.png" alt="">
                        <!-- <a href="https://www.visitseoul.net/index"><img style="margin-top: 35px;"
                                src="https://image.webeon.net/icomes2024/logo/fl03.png" alt=""></a>-->
                        <img class="pointer" onclick="goKnto()" src="https://image.webeon.net/icomes2024/logo/2024_footer_korea_logo.svg" alt=""> 
                        <!-- <img class="pointer" onclick="goKnto()" src="https://image.webeon.net/icomes2024/logo/fl04.png" alt="">  -->
                      
                    </div>
                </div>
                <div class="footer_c">
                    <!-- <p>Organized by</p> -->
                    <p>Korean Society for the Study of Obesity (KSSO)</p>
                    <ul>
                        <li>Room 1010, Renaissance tower, 14 Mallijae-ro, Mapo-gu, Seoul, Korea</li>
                        <li>T. 82-2-364-0886,0887</li>
                        <li>F. 82-2-364-0883</li>
                        <li>E. <a href="mailto:webmaster@kosso.or.kr"
                                class="font_inherit link">webmaster@kosso.or.kr</a></li>
                        <li>W. <a href="https://www.kosso.or.kr" class="font_inherit link">https://www.kosso.or.kr</a>
                        </li>
                    </ul>
                    <!--
                    <ul>
                        <li>Tel. 82-2-6941-0888, 82-2-364-0886,0887 / Fax. 82-2-364-0883</li>
                        <li>Email. webmaster@kosso.or.kr / kosso@kosso.or.kr</li>
                        <li>Business Registration Number. 121-82-61144</li>
                    </ul>
                    <ul>
                        <li><span class="bold">President.</span> Chang Beom Lee</li>
                        <li>Room 1010, Renaissance tower, 14 Mallijae-ro, Mapo-gu, Seoul, Kore</li>
                    </ul>
					-->
                </div>
                <div class="footer_r">
                    <!-- <p>Conference Secretariat</p> -->
                    <p>Secretariat of ICOMES 2024</p>
                    <ul>
                        <li>A-Block Richensia 4F, 341 Baekbeom-ro, Yongsan-gu, Seoul 04315, Korea</li>
                        <li>T. 82-2-2285-2582</li>
                        <li>F. 82-2-2285-2530</li>
                        <li>E. <a href="mailto:icomes@into-on.com" class="font_inherit link">icomes@into-on.com</a></li>
                    </ul>
                    <!--
                    <ul>
                        <li>Tel. +82-2-2285-2582  | Fax : 82-2-2285-2530
                            <br />Email : icomes@into-on.com
                        </li>
                        <li><br /></li>
                        <li>A-Block Richensia 4F, 341 Baekbeom-ro,
                            <br /> Yongsan-gu, Seoul, Korea
                        </li>
                        <li>Tel : +82-2-2285-2582 ㅣEmail : icomes@into-on.com</li>
                    </ul>
					-->
                </div>
            </div>
        </div>
    </footer>
</div>

<div class="popup term3">
    <div class="pop_bg"></div>
    <div class="pop_contents">
        <button type="button" class="pop_close"><img src="/main/img/icons/pop_close.png"></button>
        <h3 class="pop_title">Terms</h3>
        <?= $locale("terms") ?>
    </div>
</div>


<div class="popup term4">
    <div class="pop_bg"></div>
    <div class="pop_contents">
        <button type="button" class="pop_close"><img src="/main/img/icons/pop_close.png"></button>
        <h3 class="pop_title">Conditions</h3>
        <?= $locale("privacy") ?>
    </div>
</div>
<script>
$('.term3_btn').on('click', function() {
    $('.term3').show();
})
$('.term4_btn').on('click', function() {
        $('.term4').show();
    })
   function goKnto(){
     window.location.href = "https://knto.or.kr/index";
   }
   function goVisitSeoul(){
     window.location.href = "https://www.visitseoul.net/index";
   }
//    $('.type2').on('click', function(event) {
//         event.preventDefault();
//         alert('Updates are planned.');
//         return false;
//     }) 
</script>