<?php
include_once('./_common.php');

$g5['title'] = "대표인사말";

// include_once('../_head.php');
include_once(G5_THEME_PATH . '/header.sub.php');
?>

<!-- 콘텐츠 시작 { -->


<div id="container02">

    <div class="sub_page sub0102">
        <div class="sub0102_wrap">
            <div class="left">
                <strong>오페라문화사랑은 충청인의 긍지</strong>
                <p>안녕하세요. 충청오페라단 양기철 단장입니다.

                    1989년 (오페라 문화사랑은 충청인의 긍지) 사명감 하나로 순수민간예술단체 충청오페라단을 충남대전에서 창립하여 지난 30년간 충청인의 긍지를 가지고 오페라문화의 인식을 위해 많은 오페라공연활동을 통해 지역예술발전과 함께 충청지역의 역사, 인물, 문화, 예술작품을 원작으로 창작오페라 제작공연 시대를 맞이하고 있어 지역예술발전에 기여하고 있는 오페라단입니다.

                    지역성악인들과 음악애호가, 기업과 관계기관의 많은 참여와 지원 속에서 충청지역 오페라음악발전에 크나큰 보탬이 되었으면 합니다.
                    오페라문화 사랑은 충청인의 긍지입니다.
                    여러분들의 많은 관심과 사랑을 부탁드립니다. </p>
            </div>
            <div class="right"><img src="<?php echo G5_THEME_IMG_URL ?>/sub0102_img.png"></div>
        </div>

    </div>


    <script>
        $(document).ready(function() {
            $('#snb > li:nth-child(1)').addClass("active");
            $('#snb > li:nth-child(1) > ul > li:nth-child(2)').addClass("active");
        });
    </script>

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