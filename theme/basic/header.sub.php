<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

/*
if (G5_IS_MOBILE) {
	include_once(G5_THEME_MOBILE_PATH . '/head.php');
	return;
}
*/

include_once(G5_THEME_PATH . '/head.sub.php');
include_once(G5_LIB_PATH . '/latest.lib.php');
include_once(G5_LIB_PATH . '/outlogin.lib.php');
include_once(G5_LIB_PATH . '/poll.lib.php');
include_once(G5_LIB_PATH . '/visit.lib.php');
include_once(G5_LIB_PATH . '/connect.lib.php');
include_once(G5_LIB_PATH . '/popular.lib.php');
include_once(G5_THEME_PATH . '/head.php');
?>

<!-- 콘텐츠 시작 { -->
<div id="wrapper02">

	<!-- clone -->

	<!-- 서브탑 -->
	<div class="sub_top">
		<div class="sub_top_text">
			<strong>
				<!-- SNB // -->
				<div id="snb">
					<li class="snb company">
						<div class="sub_top_tit">회사소개</div>
					</li>
					<li class="snb">
						<div class="sub_top_tit">사업영역</div>
					</li>
					<li class="snb bo_tablesub0301 sub0301_01 sub0302">
						<div class="sub_top_tit">제품소개</div>
					</li>
					<li class="snb bo_tablesub0401  bo_tablesub0401 sub0401">
						<div class="sub_top_tit">온라인문의</div>
					</li>
					<li class="snb bo_tablesub0501 sub0501 sub0502 sub0503 bo_tablesub0504">
						<div class="sub_top_tit">커뮤니티</div>
					</li>
				</div>
				<!-- // SNB -->


			</strong>
			<p>어제보다 더 나은 내일을 위해 AR로 세상을 바꾸는 회사,
				증강현실 기술기업 버넥트는 고객의 요구에 맞는 최고의 Solution을 제공합니다.</p>
		</div>

		<!-- 서브탑 -->
	</div>

	<!-- // clone -->

	<div id="container_wr">

		<!-- SNB // -->
		<!-- 테스트 -->
		<ul id="snb" class="sub_menu">
			<li class="snb companyInfo">
				<!-- <h2><a href="/sub0101.php" target="_self"><b>회사소개</b></a></h2> -->
				<h2>회사소개</h2>
				<em class="snb2dDown"><i class="fa fa-angle-down"></i><u class="fa fa-angle-up"></u></em>
				<ul class="snb2dul">
					<li class="snb2d snb2d_"><a href="<?php echo G5_URL ?>/page/sub0101.php" target="_self"><b>
								<!-- <i class="fa fa-angle-right"></i> --> 회사소개</b></a></li>
					<li class="snb2d snb2d_"><a href="<?php echo G5_URL ?>/page/sub0102.php" target="_self"><b>
								<!-- <i class="fa fa-angle-right"></i> --> 대표인사말</b></a></li>
					<li class="snb2d snb2d_"><a href="<?php echo G5_URL ?>/page/sub0103.php" target="_self"><b>
								<!-- <i class="fa fa-angle-right"></i> --> 연혁</b></a></li>
					<li class="snb2d snb2d_"><a href="<?php echo G5_URL ?>/page/sub0104.php" target="_self"><b>
								<!-- <i class="fa fa-angle-right"></i> --> 오시는길</b></a></li>
				</ul>
			</li>
			<li class="snb businessArea">
				<!-- <h2><a href="/sub0101.php" target="_self"><b>회사소개</b></a></h2> -->
				<h2>사업영역</h2>
				<em class="snb2dDown"><i class="fa fa-angle-down"></i><u class="fa fa-angle-up"></u></em>
				<ul class="snb2dul">
					<li class="snb2d snb2d_"><a href="<?php echo G5_URL ?>/page/sub0201.php" target="_self"><b>
								<!-- <i class="fa fa-angle-right"></i> --> 사업영역1</b></a></li>
					<li class="snb2d snb2d_"><a href="<?php echo G5_URL ?>/page/sub0202.php" target="_self"><b>
								<!-- <i class="fa fa-angle-right"></i> --> 사업영역2</b></a></li>
				</ul>
			</li>
			<li class="snb sub0301_01 sub0302">
				<!-- <h2><a href="/sub0101.php" target="_self"><b>회사소개</b></a></h2> -->
				<h2>제품소개</h2>
				<em class="snb2dDown"><i class="fa fa-angle-down"></i><u class="fa fa-angle-up"></u></em>
				<ul class="snb2dul">
					<li class="snb2d snb2d_ sub0302"><a href="<?php echo G5_URL ?>/bbs/board.php?bo_table=sub0302" target="_self"><b>
								<!-- <i class="fa fa-angle-right"></i> --> 제품소개1</b></a></li>
					<li class="snb2d snb2d_ sub0301_01"><a href="<?php echo G5_URL ?>/bbs/board.php?bo_table=sub0301_01" target="_self"><b>
								<!-- <i class="fa fa-angle-right"></i> --> 제품소개2</b></a></li>
				</ul>
			</li>
			<li class="snb faqArea sub0401">
				<!-- <h2><a href="/sub0101.php" target="_self"><b>회사소개</b></a></h2> -->
				<h2>온라인문의</h2>
				<em class="snb2dDown"><i class="fa fa-angle-down"></i><u class="fa fa-angle-up"></u></em>
				<ul class="snb2dul">
					<li class="snb2d snb2d_ sub0401"><a href="<?php echo G5_URL ?>/bbs/board.php?bo_table=sub0401" target="_self"><b>
								<!-- <i class="fa fa-angle-right"></i> --> 온라인문의</b></a></li>
				</ul>
			</li>
			<li class="snb faqArea sub0501 sub0502 sub0503 sub0504">
				<!-- <h2><a href="/sub0101.php" target="_self"><b>회사소개</b></a></h2> -->
				<h2>커뮤니티</h2>
				<em class="snb2dDown"><i class="fa fa-angle-down"></i><u class="fa fa-angle-up"></u></em>
				<ul class="snb2dul">
					<li class="snb2d snb2d_ sub0501"><a href="<?php echo G5_URL ?>/bbs/board.php?bo_table=sub0501" target="_self"><b>
								<!-- <i class="fa fa-angle-right"></i> --> 공지사항</b></a></li>
					<li class="snb2d snb2d_ sub0502"><a href="<?php echo G5_URL ?>/bbs/board.php?bo_table=sub0502" target="_self"><b>
								<!-- <i class="fa fa-angle-right"></i> --> 보도자료</b></a></li>
					<li class="snb2d snb2d_ sub0503"><a href="<?php echo G5_URL ?>/bbs/board.php?bo_table=sub0503" target="_self"><b>
								<!-- <i class="fa fa-angle-right"></i> --> 자유게시판</b></a></li>
					<li class="snb2d snb2d_ sub0504"><a href="<?php echo G5_URL ?>/bbs/board.php?bo_table=sub0504" target="_self"><b>
								<!-- <i class="fa fa-angle-right"></i> --> Q&A게시판</b></a></li>
				</ul>
			</li>
		</ul>

		<div id="container">
			<!-- <?php if (!defined("_INDEX_")) { ?><h2 id="container_title"><span title="<?php echo get_text($g5['title']); ?>"><?php echo get_head_title($g5['title']); ?></span></h2><?php } ?> -->