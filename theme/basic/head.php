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
?>

<!-- 상단 시작 { -->
<div id="hd">
	<h1 id="hd_h1"><?php echo $g5['title'] ?></h1>
	<div id="skip_to_container"><a href="#container">본문 바로가기</a></div>

	<?php
	if (defined('_INDEX_')) { // index에서만 실행
		include G5_BBS_PATH . '/newwin.inc.php'; // 팝업레이어
	}
	?>
	<!-- <div id="tnb">
    	<div class="inner">
			<ul id="hd_qnb">
	            <li><a href="<?php echo G5_BBS_URL ?>/faq.php">FAQ</a></li>
	            <li><a href="<?php echo G5_BBS_URL ?>/qalist.php">Q&A</a></li>
	            <li><a href="<?php echo G5_BBS_URL ?>/new.php">새글</a></li>
	            <li><a href="<?php echo G5_BBS_URL ?>/current_connect.php" class="visit">접속자<strong class="visit-num"><?php echo connect('theme/basic'); // 현재 접속자수, 테마의 스킨을 사용하려면 스킨을 theme/basic 과 같이 지정  
																														?></strong></a></li>
	        </ul>
		</div>
    </div> -->
	<div id="hd_wrapper">
		<div id="logo">
			<span id="mobile_open"><i class="fa fa-bars" aria-hidden="true"></i><span class="sound_only">전체메뉴열기</span></span>
			<a href="<?php echo G5_URL ?>/"><img class="none_hover" src="<?php echo G5_IMG_URL ?>/logo.png" alt="디몬스터템플릿2" title=""><img class="hover" src="<?php echo G5_IMG_URL ?>/ft_logo.png" alt="디몬스터템플릿2"></a>
		</div>

		<nav id="gnb">
			<h2>메인메뉴</h2>
			<div class="gnb_wrap">
				<ul id="gnb_1dul">
					<li class="gnb_1dli" style="z-index:999">
						<a href="<?php echo G5_URL ?>/page/sub0101.php" target="_self" class="gnb_1da">회사소개</a>
						<ul class="gnb_2dull">
							<li><a href="<?php echo G5_URL ?>/page/sub0101.php" target="_self" class="gnb_2da">회사소개</a></li>
							<li><a href="<?php echo G5_URL ?>/page/sub0102.php" target="_self" class="gnb_2da">대표인사말</a></li>
							<li><a href="<?php echo G5_URL ?>/page/sub0103.php" target="_self" class="gnb_2da">연혁</a></li>
							<li><a href="<?php echo G5_URL ?>/page/sub0104.php" target="_self" class="gnb_2da">오시는길</a></li>
						</ul>
					</li>
					<li class="gnb_1dli" style="z-index:998">
						<a href="<?php echo G5_URL ?>/page/sub0201.php" target="_self" class="gnb_1da">사업영역</a>
						<ul class="gnb_2dull">
							<li><a href="<?php echo G5_URL ?>/page/sub0201.php" target="_self" class="gnb_2da">사업영역1</a></li>
							<li><a href="<?php echo G5_URL ?>/page/sub0202.php" target="_self" class="gnb_2da">사업영역2</a></li>
						</ul>
					</li>
					<li class="gnb_1dli" style="z-index:997">
						<a href="<?php echo G5_URL ?>/bbs/board.php?bo_table=sub0302" target="_self" class="gnb_1da">제품소개</a>
						<ul class="gnb_2dull">
							<li><a href="<?php echo G5_URL ?>/bbs/board.php?bo_table=sub0302" target="_self" class="gnb_2da">제품소개1</a></li>
							<li><a href="<?php echo G5_URL ?>/bbs/board.php?bo_table=sub0301_01" target="_self" class="gnb_2da">제품소개2</a></li>
						</ul>
					</li>
					<li class="gnb_1dli" style="z-index:996">
						<a href="<?php echo G5_URL ?>/bbs/board.php?bo_table=sub0401" target="_self" class="gnb_1da">온라인문의</a>
						<ul class="gnb_2dull">
							<li><a href="<?php echo G5_URL ?>/bbs/board.php?bo_table=sub0401" target="_self" class="gnb_2da">온라인문의</a></li>
						</ul>
					</li>
					<li class="gnb_1dli" style="z-index:995">
						<a href="<?php echo G5_URL ?>/bbs/board.php?bo_table=sub0501" target="_self" class="gnb_1da">커뮤니티</a>
						<ul class="gnb_2dull">
							<li><a href="<?php echo G5_URL ?>/bbs/board.php?bo_table=sub0501" target="_self" class="gnb_2da">공지사항</a></li>
							<li><a href="<?php echo G5_URL ?>/bbs/board.php?bo_table=sub0502" target="_self" class="gnb_2da">보도자료</a></li>
							<li><a href="<?php echo G5_URL ?>/bbs/board.php?bo_table=sub0503" target="_self" class="gnb_2da">자유게시판</a></li>
							<li><a href="<?php echo G5_URL ?>/bbs/board.php?bo_table=sub0504" target="_self" class="gnb_2da">Q&amp;A게시판</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</nav>

		<?php
		// 로그인 유무에 상단 메뉴 변경
		$loginOut = '';
		if ($is_member) {
			$loginOut = "<li><a href='" . G5_URL . "/adm/index.php'>Admin</a></li>";
			$loginOut .= "<li><a href='" . G5_URL . "/bbs/logout.php'>Logout</a></li>";
		} else {
			$loginOut = "<li><a href='" . G5_URL . "/bbs/register.php'>Join</a></li>";
			$loginOut .= "<li><a href='" . G5_URL . "/bbs/login.php'>Login</a></li>";
		}
		?>

		<div id="tnb">
			<ul>
				<li><a href="<?php echo G5_URL ?>/">Home</a></li>
				<li><a href="<?php echo G5_URL ?>/page/sub0104.php">Contact US </a></li>
				<?php echo $loginOut ?>
			</ul>
		</div>

	</div>


	<script>
		$(document).ready(function() {
			$('#gnb').hover(
				function() {
					$("#hd").addClass('hover');
				},
				function() {
					$("#hd").removeClass('hover');
				}
			);
		});
		$(window).scroll(function() {
			var scroll = $(window).scrollTop();
			if (scroll >= 200) {
				$("#hd").addClass("fixed");
			} else {
				$("#hd").removeClass("fixed");
			}
		});
	</script>
</div>
<!-- } 상단 끝 -->


<hr>