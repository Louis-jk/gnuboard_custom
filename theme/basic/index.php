<?php
define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
	include_once(G5_THEME_MOBILE_PATH . '/index.php');
	return;
}
include_once(G5_LIB_PATH . '/latest.lib.php');
include_once(G5_THEME_PATH . '/head.php');
?>

<!-- 커스텀 Clone -->

<!-- 콘텐츠 시작 { -->

<div id="wrapper02">
	<div id="container">

		<div class="test">
			<ul class="bxslider">
				<li>
					<div class="slide_text">
						<div class="slide_tit eng">
							<em class="animated fadeInDown">VIRTUAL CONNECTION TOWARD</em>
							<strong class="animated flipInX"><b>ANYWHERE</b> AUGMENTATION</strong>
						</div>
						<p class="animated fadeInUp">어제보다 더 나은 내일을 위해 AR로 세상을 바꾸는 회사,
							증강현실 기술기업 버넥트는 고객의 요구에 맞는 최고의 Solution을 제공합니다.</p>
						<a class="slide_btn eng animated fadeIn" href="<?php echo G5_URL ?>/#"><b>More Detail</b><img src="<?php echo G5_IMG_URL ?>/aLink_arrow02.png"></a>
					</div>
				</li>
				<li>
					<div class="slide_text">
						<div class="slide_tit eng">
							<em class="animated fadeInDown">VIRTUAL CONNECTION TOWARD</em>
							<strong class="animated flipInX"><b>ANYWHERE</b> AUGMENTATION</strong>
						</div>
						<p class="animated fadeInUp">어제보다 더 나은 내일을 위해 AR로 세상을 바꾸는 회사,
							증강현실 기술기업 버넥트는 고객의 요구에 맞는 최고의 Solution을 제공합니다.</p>
						<a class="slide_btn eng animated fadeIn" href="<?php echo G5_URL ?>/#"><b>More Detail</b><img src="<?php echo G5_IMG_URL ?>/aLink_arrow02.png"></a>
					</div>
				</li>
			</ul>
		</div>

		<script type="text/javascript">
			$(document).ready(function() {
				var main = $('.bxslider').bxSlider({
					mode: 'fade',
					auto: true, //자동으로 슬라이드 
					controls: false, //좌우 화살표	
					autoControls: false, //stop,play 
					pager: true, //페이징 
					//pagerType: 'short',
					pause: 6000,
					autoDelay: 6000,
					speed: 800,
				});
			});
		</script>

		<script type="text/javascript">
			$(document).ready(function() {
				var main = $('.cont01_bxslider').bxSlider({
					mode: 'horizontal',
					auto: true, //자동으로 슬라이드 
					controls: false, //좌우 화살표	
					autoControls: false, //stop,play 
					pager: true, //페이징 
					//pagerType: 'short',
					pause: 6000,
					autoDelay: 6000,
					speed: 800,
					infiniteLoop: true,
				});
			});
		</script>


		<div class="cont01">
			<div id="container_1200">
				<div class="cont_tit_wrap" data-sb="fadeInUp">
					<h3 class="eng"><strong>Dmonster</strong> Service</h3>
					<p>어제보다 더 나은 내일을 위해 AR로 세상을 바꾸는 회사,
						증강현실 기술기업 버넥트는 고객의 요구에 맞는 최고의 Solution을 제공합니다.</p>
				</div>
				<div class="cont01_wrap">
					<div class="left" data-sb="fadeInDown">
						<div class="left_top">
							<div class="btn01 cont01_col">
								<a href="<?php echo G5_URL ?>/page/sub0101.php">
									<h4 class="eng cont01_num">01</h4>
									<strong class="eng">Company</strong>
									<p>어제보다 더 나은 내일을 위해
										AR로 세상을 바꾸는 회사</p>
									<img class="icon" src="<?php echo G5_IMG_URL ?>/cont01_icon01.png">
								</a>
							</div>
							<div class="btn02 cont01_col">
								<a href="<?php echo G5_URL ?>/page/sub0201.php">
									<h4 class="eng cont01_num">02</h4>
									<strong class="eng">Business</strong>
									<p>어제보다 더 나은 내일을 위해
										AR로 세상을 바꾸는 회사</p>
									<img class="icon" src="<?php echo G5_IMG_URL ?>/cont01_icon02.png">
								</a>
							</div>
						</div>
						<div class="left_bottom">
							<div class="btn03 cont01_col"><img src="<?php echo G5_IMG_URL ?>/cont01_img01.png"></div>
						</div>
					</div>
					<div class="right" data-sb="fadeInUp">
						<div class="cont01_slide cont01_col">
							<div class="cont_slide_tit">
								<p class="eng">VIRTUAL CONNECTION <b>TOWARD</b></p>
								<strong>어제보다 더 나은 내일을 위해
									AR로 세상을 바꾸는 회사</strong>
							</div>
							<ul class="cont01_bxslider">
								<li>
									<a href="#">
										<span class="main_more"><img src="<?php echo G5_THEME_IMG_URL ?>/aLink_arrow02.png">
											<p>more</p>
										</span>
										<img class="icon" src="<?php echo G5_THEME_IMG_URL ?>/cont01_product01.png" title="">
									</a>
								</li>
								<li>
									<a href="#">
										<span class="main_more"><img src="<?php echo G5_THEME_IMG_URL ?>/aLink_arrow02.png">
											<p>more</p>
										</span>
										<img class="icon" src="<?php echo G5_THEME_IMG_URL ?>/cont01_product02.png" title="">
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>





		<div class="cont02" data-sb="fadeIn">
			<div id="container_1200">
				<div class="cont_tit_wrap" data-sb="fadeInUp">
					<h3 class="eng"><strong>Dmonster</strong> Service</h3>
					<p>어제보다 더 나은 내일을 위해 AR로 세상을 바꾸는 회사,
						증강현실 기술기업 버넥트는 고객의 요구에 맞는 최고의 Solution을 제공합니다.</p>
				</div>
				<div class="cont02_wrap" data-sb="fadeInDown">

					<style>
						.product_lt .slick-initialized .slick-slide {
							padding: 0 5px;
						}

						.product_lt .slick-initialized .slick-slide img {
							width: 100%;
						}

						.product_lt .slick-dots {
							bottom: -10px;
							position: relative;
						}

						.product_lt .slick-dots li {
							width: 10px;
							height: 10px;
						}

						.product_lt .slick-dots li button {
							width: 10px;
							height: 10px;
						}

						.product_lt .slick-dots li.slick-active button:before {
							color: #01a982;
							font-size: 12px;
							background: #fff;
						}

						.product_lt .slick-dots li button:before {
							content: '';
							width: 10px;
							height: 10px;
							background: #777;
							border-radius: 15em
						}

						.slick-prev,
						.slick-next {
							width: 60px;
							height: 120px;
						}

						.product_lt .slick-next {
							right: -40px;
						}
					</style>

					<!-- 테스트 -->

					<?php echo latest('pic_basic_slide', "sub0302", 10, 40); ?>

					<!-- //테스트 -->

				</div>
			</div>
		</div>

	</div>


</div>
<!--  콘텐츠 끝 -->

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

</div>
</div>

<div class="aside_bk"></div>

<!-- // 커스텀 Clone -->


<?php
include_once(G5_THEME_PATH . '/tail.php');
?>