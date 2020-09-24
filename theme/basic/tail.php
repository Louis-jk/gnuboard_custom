<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH . '/tail.php');
    return;
}
?>

</div>
<div id="aside">
    <?php echo outlogin('theme/basic'); // 외부 로그인, 테마의 스킨을 사용하려면 스킨을 theme/basic 과 같이 지정 
    ?>
    <?php echo poll('theme/basic'); // 설문조사, 테마의 스킨을 사용하려면 스킨을 theme/basic 과 같이 지정 
    ?>
</div>
</div>

</div>
<!-- } 콘텐츠 끝 -->

<hr>

<!-- 하단 시작 { -->
<div id="ft">
    <div class="ft_link">
        <div id="ft_wr">
            <div class="ft_link_a">
                <a href="http://localhost:81/dmonster/bbs/content.php?co_id=provision">이용약관</a>
                <a href="http://localhost:81/dmonster/bbs/content.php?co_id=privacy">개인정보처리방침</a>
                <a href="http://localhost:81/dmonster/bbs/content.php?co_id=company">회사소개</a>
                <a href="http://localhost:81/dmonster/page/sub0104.php">오시는길</a>
            </div>
            <div class="sns_link">
                <a href="http://dmonster1007.cafe24.com/sub0104.php#"><span class="sound_only">페이스북 바로가기</span><img src="http://localhost:81/dmonster/theme/basic/img/sns_f.png"></a>
                <a href="http://dmonster1007.cafe24.com/sub0104.php#"><span class="sound_only">네이버 블로그 바로가기</span><img src="http://localhost:81/dmonster/theme/basic/img/sns_n.png"></a>
            </div>
        </div>
    </div>

    <div id="ft_wr">
        <div class="ft_wrap">
            <div id="ft_catch"><img src="http://localhost:81/dmonster/theme/basic/img/ft_logo.png" alt="그누보드5"></div>
            <div class="ft_text">
                <p>믿음기획 | 대표 : 심정희 | 대표번호 : 010-7741-3928 | magickr123@naver.com
                    서울특별시 강남구 역삼로 215 남국빌딩 2층</p>
                <p class="copy">Copyright (c) 믿음기획. All Rights Reserved.</p>
            </div>
        </div>
    </div>


    <button type="button" id="top_btn">
        <span class="sound_only">상단으로</span>
    </button>
    <script>
        $(function() {
            $("#top_btn").on("click", function() {
                $("html, body").animate({
                    scrollTop: 0
                }, '500');
                return false;
            });
        });
    </script>



    <!-- } 하단 끝 -->

    <script>
        $(function() {
            // 폰트 리사이즈 쿠키있으면 실행
            font_resize("container", get_cookie("ck_font_resize_rmv_class"), get_cookie("ck_font_resize_add_class"));
        });
    </script>






    <!-- <div style='float:left; text-align:center;'>RUN TIME : 0.044979810714722<br></div> -->
    <!-- ie6,7에서 사이드뷰가 게시판 목록에서 아래 사이드뷰에 가려지는 현상 수정 -->
    <!--[if lte IE 7]>
<script>
$(function() {
    var $sv_use = $(".sv_use");
    var count = $sv_use.length;

    $sv_use.each(function() {
        $(this).css("z-index", count);
        $(this).css("position", "relative");
        count = count - 1;
    });
});
</script>
<![endif]-->



    <!-- } 하단 끝 -->

    <script>
        $(function() {
            // 폰트 리사이즈 쿠키있으면 실행
            font_resize("container", get_cookie("ck_font_resize_rmv_class"), get_cookie("ck_font_resize_add_class"));
        });
    </script>

    </body>

    </html>

    <?php
    include_once(G5_THEME_PATH . "/tail.sub.php");
    ?>