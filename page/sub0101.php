<?php
include_once('./_common.php');

$g5['title'] = "회사소개";

include_once(G5_THEME_URL . '/head.php');
include_once(G5_THEME_PATH . '/header.sub.php');
?>

<!-- 콘텐츠 시작 { -->


<div id="container02">

    <div class="sub_page sub0101">
        <div class="sub0101">
            <div class="sub0101_img"><img src="<?php echo G5_THEME_IMG_URL ?>/sub0101_img.png">
                <p>(주) 제이케이바이오테크 대표이사<b>강희완</b></p>
            </div>
            <div class="sub0101_text">
                <h4>세계의 <b>생물공학분야</b>는 기초와 응용분야에서 <b>괄목할만한 성장</b>을 이루고 있습니다. </h4>
                <p>특히, 국가핵심미래성장동력 사업으로 적극적인 지원을 힘입어 우리나라의 생명공학분야는 눈부신 발전을 거듭 하고 있습니다. 그러나, 국내 생명공학의 급속한 발전에도 불구하고 연구산물을 산업화로 연계하는 실질적 이용이 미흡한 실정에 있습니다.
                    (주)JK바이오테크는 수년간의 생명공학연구를 토대로 얻어진 감각과 기술로 모든 연구자들이 함께 참여하는 연구네트워크를 통하여 생명공학의 새로운 가치 창출의 비전을 품고 창립되었습니다.
                    세계최초로 동물, 식물, 미생물의 핵산지문에 모두 사용할 수 있는 Universal PCR fingerprinting Kit를 시작으로 세균, 곰팡이의 종간, 종내 감별 Kit 등 유전자원의 DNA 다양성검정 분자마커 생산 및 분석서비스 산업을 수행하고 있으며 세계최초로 목질진흙 “:상황버섯” 안정생산 균주개발과 관련 가공품 생산과 약리활성물질 개발연구에 힘쓰고 있습니다.
                    ㈜제이케이바이오테크는 창조경제에 걸맞게 벤처기업의 연구개발로 얻어진 신기술과 산업소재를 고 부가가치의 실용화 산물을 창조하는 기업으로 거듭 날 수 있도록 노력 하겠습니다.
                    많은 성원과 연구자들의 참여 부탁드립니다.</p>
                <div class="sign">(주) 제이케이바이오테크 대표이사<b>강희완</b></div>
            </div>
        </div>
    </div>

</div>


</div>
<!-- } 콘텐츠 끝 -->

<hr>

<div class="close_menu"><i class="fa fa-times" id="mobile_menu_close"></i></div>
<div id="aside">

    <div class="mobile_menu">
        <ul>
            <li>
                <a target="_self" class="gnb_1da">회사소개</a>
                <i class="fa fa-angle-down"></i>
                <ul>
                    <li><a href="<?php echo G5_URL ?>/page/sub0101.php" target="_self">회사소개</a></li>
                    <li><a href="<?php echo G5_URL ?>/page/sub0102.php" target="_self">대표인사말</a></li>
                    <li><a href="<?php echo G5_URL ?>/page/sub0103.php" target="_self">연혁</a></li>
                    <li><a href="<?php echo G5_URL ?>/page/sub0104.php" target="_self">오시는길</a></li>
                </ul>
            </li>
            <li>
                <a target="_self" class="gnb_1da">사업영역</a>
                <i class="fa fa-angle-down"></i>
                <ul>
                    <li><a href="<?php echo G5_URL ?>/page/sub0201.php" target="_self">사업영역1</a></li>
                    <li><a href="<?php echo G5_URL ?>/page/sub0202.php" target="_self">사업영역2</a></li>
                </ul>
            </li>
            <li>
                <a target="_self" class="gnb_1da">제품소개</a>
                <i class="fa fa-angle-down"></i>
                <ul>
                    <li><a href="<?php echo G5_URL ?>/bbs/board.php?bo_table=sub0301" target="_self">제품소개1</a></li>
                    <li><a href="<?php echo G5_URL ?>/bbs/board.php?bo_table=sub0302" target="_self">제품소개2</a></li>
                </ul>
            </li>
            <li>
                <a target="_self" class="gnb_1da">온라인문의</a>
                <i class="fa fa-angle-down"></i>
                <ul>
                    <li><a href="<?php echo G5_URL ?>/bbs/board.php?bo_table=sub0401" target="_self">온라인문의</a></li>
                </ul>
            </li>
            <li>
                <a target="_self" class="gnb_1da">커뮤니티</a>
                <i class="fa fa-angle-down"></i>
                <ul>
                    <li><a href="<?php echo G5_URL ?>/bbs/board.php?bo_table=sub0501" target="_self">공지사항</a></li>
                    <li><a href="<?php echo G5_URL ?>/bbs/board.php?bo_table=sub0502" target="_self">보도자료</a></li>
                    <li><a href="<?php echo G5_URL ?>/bbs/board.php?bo_table=sub0503" target="_self">자유게시판</a></li>
                    <li><a href="<?php echo G5_URL ?>/bbs/board.php?bo_table=sub0504" target="_self">Q&amp;A게시판</a></li>
                </ul>
            </li>
        </ul>
    </div>

    <script type="text/javascript">
        <!--
        $(document).ready(function() {
            $(".mobile_menu > ul > li").click(function() {
                $(this).find('ul').toggle(100);
            });

            $("#mobile_menu_close").click(function() {
                $("#aside").animate({
                    "left": "-315px"
                }, 200);
                $(".aside_bk").hide();
                $(".close_menu").animate({
                    "left": "-100px"
                }, 200);
            });
            $("#mobile_open").click(function() {
                $("#aside").animate({
                    "left": "0px"
                }, 200);
                $(".aside_bk").show();
                $(".close_menu").animate({
                    "left": "280px"
                }, 200);
            });

        });
        //
        -->
    </script>

    <script>
        $(document).ready(function() {
            $('#snb > li:nth-child(1)').addClass("active");
            $('#snb > li:nth-child(1) > ul > li:nth-child(1)').addClass("active");
        });
    </script>

</div>
</div>

<?php
include_once('../_tail.php');
?>