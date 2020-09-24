<?php
include_once('./_common.php');

$g5['title'] = "오시는길";

add_stylesheet('<link href="' . G5_THEME_CSS_URL . '/custom/roughmapLander.css" rel="stylesheet">', 0);

// include_once('../_head.php');
include_once(G5_THEME_PATH . '/header.sub.php');
?>

<!-- 콘텐츠 시작 { -->


<div id="container02">


    <div class="sub_page sub0104">
        <table class="sub0104_tbl" width="100%" border="0" cellpadding="0" cellspacing="0">
            <tbody>
                <tr>
                    <th rowspan="3" class="frist" width="50%">Contact Us </th>
                    <th width="10%">주소</th>
                    <td width="40%">충청남도 당진시 원구룡길 91-6 (구룡동)</td>
                </tr>
                <tr>
                    <th>대표전화</th>
                    <td>041-356-7220</td>
                </tr>
            </tbody>
        </table>

        <!--
		* 카카오맵 - 약도서비스
		* 한 페이지 내에 약도를 2개 이상 넣을 경우에는
		* 약도의 수 만큼 소스를 새로 생성, 삽입해야 합니다.
	-->
        <!-- 1. 약도 노드 -->
        <div id="daumRoughmapContainer1558659433979" class="root_daum_roughmap root_daum_roughmap_landing map_area os_mac" style="width:100%;">
            <div class="wrap_map" style="height: 460px;">
                <div class="map" style="overflow: hidden; background: url(&quot;http://t1.daumcdn.net/mapjsapi/images/bg_tile.png&quot;);">
                    <div style="position: absolute; left: 0px; top: 0px; width: 100%; height: 100%; touch-action: none; cursor: url(&quot;http://i1.daumcdn.net/dmaps/apis/cursor/openhand.cur.ico&quot;) 7 5, url(&quot;http://i1.daumcdn.net/dmaps/apis/cursor/openhand.cur.ico&quot;), default;">
                        <div style="position: absolute;">
                            <div style="position: absolute; z-index: 0;"></div>
                            <div style="position: absolute; z-index: 1; left: 0px; top: 0px;"><img src="<?php echo G5_THEME_IMG_URL ?>/379.png" alt="" draggable="false" style="position: absolute; user-select: none; -webkit-user-drag: none; min-width: 0px; min-height: 0px; max-width: none; max-height: none; left: -43px; top: 224px; opacity: 1; transition-property: opacity; transition-duration: 0.2s; transition-timing-function: ease; width: 256px; height: 256px;"><img src="<?php echo G5_THEME_IMG_URL ?>/380.png" alt="" draggable="false" style="position: absolute; user-select: none; -webkit-user-drag: none; min-width: 0px; min-height: 0px; max-width: none; max-height: none; left: 213px; top: 224px; opacity: 1; transition-property: opacity; transition-duration: 0.2s; transition-timing-function: ease; width: 256px; height: 256px;"><img src="<?php echo G5_THEME_IMG_URL ?>/381.png" alt="" draggable="false" style="position: absolute; user-select: none; -webkit-user-drag: none; min-width: 0px; min-height: 0px; max-width: none; max-height: none; left: 469px; top: 224px; opacity: 1; transition-property: opacity; transition-duration: 0.2s; transition-timing-function: ease; width: 256px; height: 256px;"><img src="<?php echo G5_THEME_IMG_URL ?>/382.png" alt="" draggable="false" style="position: absolute; user-select: none; -webkit-user-drag: none; min-width: 0px; min-height: 0px; max-width: none; max-height: none; left: 725px; top: 224px; opacity: 1; transition-property: opacity; transition-duration: 0.2s; transition-timing-function: ease; width: 256px; height: 256px;"><img src="<?php echo G5_THEME_IMG_URL ?>/383.png" alt="" draggable="false" style="position: absolute; user-select: none; -webkit-user-drag: none; min-width: 0px; min-height: 0px; max-width: none; max-height: none; left: 981px; top: 224px; opacity: 1; transition-property: opacity; transition-duration: 0.2s; transition-timing-function: ease; width: 256px; height: 256px;"><img src="<?php echo G5_THEME_IMG_URL ?>/384.png" alt="" draggable="false" style="position: absolute; user-select: none; -webkit-user-drag: none; min-width: 0px; min-height: 0px; max-width: none; max-height: none; left: 1237px; top: 224px; opacity: 1; transition-property: opacity; transition-duration: 0.2s; transition-timing-function: ease; width: 256px; height: 256px;"><img src="<?php echo G5_THEME_IMG_URL ?>/379(1).png" alt="" draggable="false" style="position: absolute; user-select: none; -webkit-user-drag: none; min-width: 0px; min-height: 0px; max-width: none; max-height: none; left: -43px; top: -32px; opacity: 1; transition-property: opacity; transition-duration: 0.2s; transition-timing-function: ease; width: 256px; height: 256px;"><img src="<?php echo G5_THEME_IMG_URL ?>/380(1).png" alt="" draggable="false" style="position: absolute; user-select: none; -webkit-user-drag: none; min-width: 0px; min-height: 0px; max-width: none; max-height: none; left: 213px; top: -32px; opacity: 1; transition-property: opacity; transition-duration: 0.2s; transition-timing-function: ease; width: 256px; height: 256px;"><img src="<?php echo G5_THEME_IMG_URL ?>/381(1).png" alt="" draggable="false" style="position: absolute; user-select: none; -webkit-user-drag: none; min-width: 0px; min-height: 0px; max-width: none; max-height: none; left: 469px; top: -32px; opacity: 1; transition-property: opacity; transition-duration: 0.2s; transition-timing-function: ease; width: 256px; height: 256px;"><img src="<?php echo G5_THEME_IMG_URL ?>/382(1).png" alt="" draggable="false" style="position: absolute; user-select: none; -webkit-user-drag: none; min-width: 0px; min-height: 0px; max-width: none; max-height: none; left: 725px; top: -32px; opacity: 1; transition-property: opacity; transition-duration: 0.2s; transition-timing-function: ease; width: 256px; height: 256px;"><img src="<?php echo G5_THEME_IMG_URL ?>/383(1).png" alt="" draggable="false" style="position: absolute; user-select: none; -webkit-user-drag: none; min-width: 0px; min-height: 0px; max-width: none; max-height: none; left: 981px; top: -32px; opacity: 1; transition-property: opacity; transition-duration: 0.2s; transition-timing-function: ease; width: 256px; height: 256px;"><img src="<?php echo G5_THEME_IMG_URL ?>/384(1).png" alt="" draggable="false" style="position: absolute; user-select: none; -webkit-user-drag: none; min-width: 0px; min-height: 0px; max-width: none; max-height: none; left: 1237px; top: -32px; opacity: 1; transition-property: opacity; transition-duration: 0.2s; transition-timing-function: ease; width: 256px; height: 256px;"><img src="<?php echo G5_THEME_IMG_URL ?>/379(2).png" alt="" draggable="false" style="position: absolute; user-select: none; -webkit-user-drag: none; min-width: 0px; min-height: 0px; max-width: none; max-height: none; left: -43px; top: -288px; opacity: 1; transition-property: opacity; transition-duration: 0.2s; transition-timing-function: ease; width: 256px; height: 256px;"><img src="<?php echo G5_THEME_IMG_URL ?>/380(2).png" alt="" draggable="false" style="position: absolute; user-select: none; -webkit-user-drag: none; min-width: 0px; min-height: 0px; max-width: none; max-height: none; left: 213px; top: -288px; opacity: 1; transition-property: opacity; transition-duration: 0.2s; transition-timing-function: ease; width: 256px; height: 256px;"><img src="<?php echo G5_THEME_IMG_URL ?>/381(2).png" alt="" draggable="false" style="position: absolute; user-select: none; -webkit-user-drag: none; min-width: 0px; min-height: 0px; max-width: none; max-height: none; left: 469px; top: -288px; opacity: 1; transition-property: opacity; transition-duration: 0.2s; transition-timing-function: ease; width: 256px; height: 256px;"><img src="<?php echo G5_THEME_IMG_URL ?>/382(2).png" alt="" draggable="false" style="position: absolute; user-select: none; -webkit-user-drag: none; min-width: 0px; min-height: 0px; max-width: none; max-height: none; left: 725px; top: -288px; opacity: 1; transition-property: opacity; transition-duration: 0.2s; transition-timing-function: ease; width: 256px; height: 256px;"><img src="<?php echo G5_THEME_IMG_URL ?>/383(2).png" alt="" draggable="false" style="position: absolute; user-select: none; -webkit-user-drag: none; min-width: 0px; min-height: 0px; max-width: none; max-height: none; left: 981px; top: -288px; opacity: 1; transition-property: opacity; transition-duration: 0.2s; transition-timing-function: ease; width: 256px; height: 256px;"><img src="<?php echo G5_THEME_IMG_URL ?>/384(2).png" alt="" draggable="false" style="position: absolute; user-select: none; -webkit-user-drag: none; min-width: 0px; min-height: 0px; max-width: none; max-height: none; left: 1237px; top: -288px; opacity: 1; transition-property: opacity; transition-duration: 0.2s; transition-timing-function: ease; width: 256px; height: 256px;"></div>
                            <div style="position: absolute; z-index: 1;"></div>
                            <div style="width: 1200px; height: 460px; position: absolute; z-index: 1;"></div>
                            <div style="position: absolute; z-index: 1;"><svg version="1.1" style="stroke: none; stroke-dashoffset: 0.5; stroke-linejoin: round; fill: none; transform: translateZ(0px); position: absolute; width: 6000px; height: 2300px; left: -2400px; top: -920px;" viewBox="0 0 6000 2300">
                                    <defs></defs>
                                </svg></div>
                            <div style="position: absolute; z-index: 1; width: 100%; height: 0px; transform: translateZ(0px);">
                                <div style="position: absolute; margin: -48px 0px 0px -18px; z-index: 2; left: 600px; top: 230px;"><img draggable="false" src="<?php echo G5_THEME_IMG_URL ?>/marker_map01.png" alt="" title="" style="min-width: 0px; min-height: 0px; max-width: 99999px; max-height: none; border: 0px; display: block; position: absolute; user-select: none; -webkit-user-drag: none; clip: rect(0px, 45px, 50px, 0px); top: 0px; left: 0px; width: 45px; height: 50px;"></div>
                                <div style="position: absolute; z-index: 3; white-space: nowrap; margin: -28px 0px 0px -48px; left: 600px; top: 230px;">
                                    <div class="roughmap_maker_label" style="top: -57px; left: -2.25px;"><a href="https://map.kakao.com/?urlX=413336&amp;urlY=922611&amp;itemId=9476762&amp;q=%EC%B6%A9%EC%B2%AD%EC%98%A4%ED%8E%98%EB%9D%BC%EB%8B%A8&amp;srcid=9476762&amp;map_type=TYPE_MAP&amp;from=roughmap" target="_blank"><span class="roughmap_lebel_text">충청오페라단</span></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div style="position: absolute; cursor: default; z-index: 1; margin: 0px 6px; height: 19px; line-height: 14px; bottom: 0px; color: rgb(0, 0, 0); right: 0px;">
                        <div style="color: rgb(0, 0, 0); text-align: center; font-size: 10px; float: right;">
                            <div style="float: left; margin: 2px 3px 0px 4px; height: 6px; transition: width 0.1s ease 0s; border-top: none rgb(0, 0, 0); border-right: 2px solid rgb(0, 0, 0); border-bottom: 2px solid rgb(0, 0, 0); border-left: 2px solid rgb(0, 0, 0); border-image: initial; width: 46px;"></div>
                            <div style="float: left; margin: 0px 4px 0px 0px; font-family: AppleSDGothicNeo-Regular, 돋움, dotum, sans-serif; font-weight: bold; color: rgb(0, 0, 0);">100m</div>
                        </div>
                        <div style="margin: 0px 4px; float: right;"><a target="_blank" href="http://map.kakao.com/" title="Kakao 지도로 보시려면 클릭하세요." style="float: left; width: 32px; height: 10px;"><img src="<?php echo G5_THEME_IMG_URL ?>/m_bi_b.png" alt="Kakao 지도로 이동" style="float: left; width: 32px; height: 10px; border: none;"></a>
                            <div style="font: 11px / 11px Arial, Tahoma, Dotum, sans-serif; float: left;"></div>
                        </div>
                    </div>
                    <div style="cursor: auto; position: absolute; z-index: 2; left: 0px; top: 0px;"></div>
                </div><span class="map_border border1"></span><span class="map_border border2"></span><span class="map_border border3"></span><span class="map_border border4"></span>
                <div class="wrap_btn_zoom"><button class="btn_zoom_in hide_text"><span class="img_zoom">확대</span></button><button class="btn_zoom_out hide_text"><span class="img_zoom">축소</span></button><button class="btn_zoom_reset hide_text"><span class="img_zoom">초기화</span></button></div>
            </div>
            <div class="wrap_controllers hide"><a class="tit_controllers" href="https://map.kakao.com/" target="_blank"><img src="<?php echo G5_THEME_IMG_URL ?>/logo_kakaomap.png" width="72" height="16" alt="카카오맵" style="display:block;width:72px;height:16px"></a>
                <div class="wrap_btn_roadview"><a class="txt" target="_blank" href="https://map.kakao.com/?from=roughmap&amp;srcid=9476762&amp;confirmid=9476762&amp;q=%EC%B6%A9%EC%B2%AD%EC%98%A4%ED%8E%98%EB%9D%BC%EB%8B%A8&amp;rv=on">로드뷰</a><span class="txt_bar"></span><a class="txt" target="_blank" href="https://map.kakao.com/?from=roughmap&amp;eName=%EC%B6%A9%EC%B2%AD%EC%98%A4%ED%8E%98%EB%9D%BC%EB%8B%A8&amp;eX=413336&amp;eY=922611">길찾기</a><span class="txt_bar"></span><a class="txt" target="_blank" href="https://map.kakao.com/?map_type=TYPE_MAP&amp;from=roughmap&amp;srcid=9476762&amp;itemId=9476762&amp;q=%EC%B6%A9%EC%B2%AD%EC%98%A4%ED%8E%98%EB%9D%BC%EB%8B%A8&amp;urlX=413336&amp;urlY=922611">지도 크게 보기</a></div>
            </div>
        </div>

        <!-- 2. 설치 스크립트 -->
        <script charset="UTF-8" class="daum_roughmap_loader_script" src="<?php echo G5_THEME_IMG_URL ?>/roughmapLoader.js.다운로드"></script>
        <script charset="UTF-8" src="<?php echo G5_THEME_IMG_URL ?>/roughmapLander.js.다운로드"></script>

        <!-- 3. 실행 스크립트 -->
        <script charset="UTF-8">
            new daum.roughmap.Lander({
                "timestamp": "1558659433979",
                "key": "tmrq",
                "mapHeight": "460"
            }).render();
        </script>
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
                    <li><a href="http://dmonster1007.cafe24.com/sub0101.php" target="_self">회사소개</a></li>
                    <li><a href="http://dmonster1007.cafe24.com/sub0102.php" target="_self">대표인사말</a></li>
                    <li><a href="http://dmonster1007.cafe24.com/sub0103.php" target="_self">연혁</a></li>
                    <li><a href="http://dmonster1007.cafe24.com/sub0104.php" target="_self">오시는길</a></li>
                </ul>
            </li>
            <li>
                <a target="_self" class="gnb_1da">사업영역</a>
                <i class="fa fa-angle-down"></i>
                <ul>
                    <li><a href="http://dmonster1007.cafe24.com/sub0201.php" target="_self">사업영역1</a></li>
                    <li><a href="http://dmonster1007.cafe24.com/sub0202.php" target="_self">사업영역2</a></li>
                </ul>
            </li>
            <li>
                <a target="_self" class="gnb_1da">제품소개</a>
                <i class="fa fa-angle-down"></i>
                <ul>
                    <li><a href="http://dmonster1007.cafe24.com/bbs/board.php?bo_table=sub0301" target="_self">제품소개1</a></li>
                    <li><a href="http://dmonster1007.cafe24.com/bbs/board.php?bo_table=sub0302" target="_self">제품소개2</a></li>
                </ul>
            </li>
            <li>
                <a target="_self" class="gnb_1da">온라인문의</a>
                <i class="fa fa-angle-down"></i>
                <ul>
                    <li><a href="http://dmonster1007.cafe24.com/bbs/board.php?bo_table=sub0401" target="_self">온라인문의</a></li>
                </ul>
            </li>
            <li>
                <a target="_self" class="gnb_1da">커뮤니티</a>
                <i class="fa fa-angle-down"></i>
                <ul>
                    <li><a href="http://dmonster1007.cafe24.com/bbs/board.php?bo_table=sub0501" target="_self">공지사항</a></li>
                    <li><a href="http://dmonster1007.cafe24.com/bbs/board.php?bo_table=sub0502" target="_self">보도자료</a></li>
                    <li><a href="http://dmonster1007.cafe24.com/bbs/board.php?bo_table=sub0503" target="_self">자유게시판</a></li>
                    <li><a href="http://dmonster1007.cafe24.com/bbs/board.php?bo_table=sub0504" target="_self">Q&amp;A게시판</a></li>
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
            $('#snb > li:nth-child(1) > ul > li:nth-child(4)').addClass("active");
        });
    </script>

</div>
</div>

<?php
include_once('../_tail.php');
?>