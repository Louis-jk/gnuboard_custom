<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

include_once(G5_LIB_PATH . '/thumbnail.lib.php');
include_once(G5_THEME_PATH . '/header.sub.php');
add_stylesheet('<link rel="stylesheet" href="' . $board_skin_url . '/style.css">', 0);
?>

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
                    <li><a href="<?php echo G5_URL ?>/bbs/board.php?bo_table=sub0302" target="_self">제품소개1</a></li>
                    <li><a href="<?php echo G5_URL ?>/bbs/board.php?bo_table=sub0301_01" target="_self">제품소개2</a></li>
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