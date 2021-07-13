<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title></title>

	<!-- テスト用CSS設定 START -->
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css-page-top/reset.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css-page-top/common.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css-page-top/module.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css-page-top/waslidemenu.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css-page-top/font-awesome.min.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Anton&family=Noto+Sans+JP:wght@400;700;900&family=Roboto:wght@500;700;900&family=Lato:wght@700&family=Fjalla+One&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/print.css">
	<link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo('template_url'); ?>/favicon.ico">
	<script src="<?php bloginfo('template_url'); ?>/js/jquery-3.2.1.min.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/navigation.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/scroll.js"></script>

	<script src="<?php bloginfo('template_url'); ?>/js/sidebar.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/modal.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/toggle.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/btn.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/main.js"></script>
	<!-- 追加JS -->
	<script src="<?php bloginfo('template_url'); ?>/js/jquery.waslidemenu.js"></script>



	<!-- テスト用CSS設定 END -->


	<!-- 固定用CSS設定 START -->

	<script src="<?php bloginfo('template_url'); ?>/js/scroll-animation.min.js" async></script>

<?php wp_deregister_script('jquery'); ?>
<?php wp_head(); ?>
</head>

<body id="<?php echo esc_attr( $post->post_name ); ?>" class="top">


	<div id="fb-root"></div>
	<script>
		(function(d, s, id) {
			var js, fjs = d.getElementsByTagName(s)[0];
			if (d.getElementById(id)) return;
			js = d.createElement(s);
			js.id = id;
			js.src = 'https://connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v2.12';
			fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));
	</script>
	<!-- ヘッダー -->

			<?php if ( is_user_logged_in() ) :?>

			<?php endif; ?>
			<header id="header">



<?php
					$args = array(
						'post_type' => 'emergency',
						'posts_per_page' => 5,
						'post_status' => 'publish',
						'orderby' => 'date',
						'order'   => 'DESC',
					);
					$query = new WP_Query( $args );
?>
<?php if( $query->have_posts() ) : ?>


	<style>
	<?php if(is_page_template('page-2nd.php')) : ?>

		/* KV2ND: 2020MODULE ON */
		<?php if( have_rows('第二階層モジュール') ):  ?>
		<?php while ( have_rows('第二階層モジュール') ) : the_row(); //値のループ ?>
			<?php if( get_row_layout() == 'コンテンツセット' ): while ( have_rows('コンテンツセット') ) : the_row(); //値のループ ?>
				<?php if( get_row_layout() == 'module-2nd-a' ): ?>

				/* KV2ND: 2020MODULE CSS */
				@media screen and (min-width: 1199px){
					.sidebar{
						top: 0px!important;
					}
				}
				@media screen and (min-width: 1099px) and (max-width: 1198px){
					.sidebar{
						top: 0px!important;
					}
				}
				@media screen and (min-width: 899px) and (max-width: 1098px){
					.sidebar{
						top: 0px!important;
					}
				}
				@media screen and (min-width: 799px) and (max-width: 898px){
					.sidebar{
						top: 0px!important;
					}
				}
				@media screen and (max-width: 425px){
					.emergency_icon{
						display:none;
					}
					.emergency-text{
						width:100%;
						margin-bottom: 10px;
						font-family: 'NotoSansJP-bold', sans-serif;
						font-weight: bold;
					}
					.emergency-date{
						font-family: 'NotoSansJP-Regular', sans-serif;
						font-weight: 100;
					}
				}
				<?php endif; ?>
			<?php endwhile; endif; ?>
		<?php endwhile; else: ?>
		/* KV2ND: 2020MODULE OFF */
			/* KV2ND: 2020MODULE OFF CSS */

		@media screen and (min-width: 1199px){
			.sidebar{
				top: 300px!important;
			}
		}
		@media screen and (min-width: 1099px) and (max-width: 1198px){
			.sidebar{
				top: 300px!important;
			}
		}
		@media screen and (min-width: 899px) and (max-width: 1098px){
			.sidebar{
				top: 275px!important;
			}
		}
		@media screen and (min-width: 799px) and (max-width: 898px){
			.sidebar{
				top: 250px!important;
			}
		}
		@media screen and (max-width: 425px){
			.emergency_icon{
				display:none;
			}
			.emergency-text{
				width:100%;
				margin-bottom: 10px;
				font-family: 'NotoSansJP-bold', sans-serif;
				font-weight: bold;
			}
			.emergency-date{
				font-family: 'NotoSansJP-Regular', sans-serif;
				font-weight: 100;
			}
		}
		<?php endif; ?>

	<?php else: ?>
	/* KV3RD: */
	/* KV3R:  CSS */
	@media screen and (min-width: 1199px){
		.sidebar{
			top: 200px!important;
		}
	}
	@media screen and (min-width: 1099px) and (max-width: 1198px){
		.sidebar{
			top: 200px!important;
		}
	}
	@media screen and (min-width: 899px) and (max-width: 1098px){
		.sidebar{
			top: 175px!important;
		}
	}
	@media screen and (min-width: 799px) and (max-width: 898px){
		.sidebar{
			top: 150px!important;
		}
	}
	@media screen and (max-width: 425px){
		.emergency_icon{
			display:none;
		}
		.emergency-text{
			width:100%;
			margin-bottom: 10px;
			font-family: 'NotoSansJP-bold', sans-serif;
			font-weight: bold;
		}
		.emergency-date{
			font-family: 'NotoSansJP-Regular', sans-serif;
			font-weight: 100;
		}
	}

	<?php endif; ?>
	</style>
  	<div id="emergency" class="emergency">
			<div class="emergency_inner">
				<div class="emergency_icon">
					<img src="<?php bloginfo('template_url'); ?>/images/common/icon_info.svg">
				</div>
				<div class="wrapper">
					<?php while ( $query->have_posts() ) : $query->the_post(); ?>
					<a href="<?php the_permalink(); ?>" class="text"><p class="emergency-text"><span class="emergency-date"><?php echo get_the_date( 'Y.m.d' ); ?>：</span><?php the_title(); ?></p></a>
				<?php endwhile; ?>
				</div>
			</div>
		</div>
<?php endif; ?>
	<?php wp_reset_postdata(); ?>
		<input id="toggle_search" type="checkbox">
		<input id="toggle_burger" type="checkbox">
		<div id="header-box">
			<div id="header-left">
				<h1 id="logo"><a href="/"><img src="<?php bloginfo('template_url'); ?>/images/common/new-logo.svg" height="45" alt="青山学院大学"></a></h1>
			</div>
			<div id="header-center">
				<nav id="category-nav">
					<?php if(!is_home()|| is_front_page()) : ?>
					<?php $navcat = get_field('category'); ?>
					<ul>
						<li><a href="/outline/"<?php if($navcat == "01") : ?>class="select"<?php endif; ?>>青山学院大学について<small>ABOUT AGU</small></a></li>
						<li><a href="/faculty/"<?php if($navcat == "02") : ?>class="select"<?php endif; ?>>学部・大学院<small>EDUCATION</small></a></li>
						<li><a href="/campuslife/"<?php if($navcat == "03") : ?>class="select"<?php endif; ?>>学生生活<small>CAMPUS LIFE</small></a></li>
						<li><a href="/research/"<?php if($navcat == "04") : ?>class="select"<?php endif; ?>>研究・産学連携<small>RESEARCH</small></a></li>
						<li><a href="/international/"<?php if($navcat == "05") : ?>class="select"<?php endif; ?>>国際交流・留学<small>INTERNATIONAL</small></a></li>
						<li><a href="/admission/"<?php if($navcat == "06") : ?>class="select"<?php endif; ?>>入試・入学情報<small>ADMISSIONS</small></a></li>
						<li><a href="/life/employment/"<?php if($navcat == "07") : ?>class="select"<?php endif; ?>>就職・キャリア<small>CAREER</small></a></li>
					</ul>
					<?php else: ?>
						<ul>
							<li><a href="/outline/">青山学院大学について<small>ABOUT AGU</small></a></li>
							<li><a href="/faculty/">学部・大学院<small>EDUCATION</small></a></li>
							<li><a href="/campuslife/">学生生活<small>CAMPUS LIFE</small></a></li>
							<li><a href="/research/">研究・産学連携<small>RESEARCH</small></a></li>
							<li><a href="/international/">国際交流・留学<small>INTERNATIONAL</small></a></li>
							<li><a href="/admission/">入試・入学情報<small>ADMISSIONS</small></a></li>
							<li><a href="/life/employment/">就職・キャリア<small>CAREER</small></a></li>
						</ul>
					<?php endif; ?>
				</nav>
			</div>
			<div id="header-right">
				<nav id="main-nav">
					<ul>
						<!-- <li class="toggle-aoyama-style toggle-aoyama-vision">
							<label><span>青山ヴィジョン</span></label>
						</li> -->
						<li class="toggle-aoyama-style">
							<label><span>青山学院</span></label>
						</li>
						<li class="toggle-language">
							<label><span>LANGUAGE</span></label>
						</li>
						<li class="toggle-search">
							<label for="toggle_search"><span>SEARCH</span></label>
						</li>
						<li class="toggle-burger">
							<label for="toggle_burger"><span>MENU</span></label>
						</li>
					</ul>
				</nav>
			</div>
		</div>
		<nav id="global">
<script>
  (function() {
    var cx = '015456245027213990632:5z_pbtjgvc8';
    var gcse = document.createElement('script');
    gcse.type = 'text/javascript';
    gcse.async = true;
    gcse.src = 'https://cse.google.com/cse.js?cx=' + cx;
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(gcse, s);
  })();
</script>

			<form id="nav-search" name="nav_search_text" method="get" action="/search-result.html">
				<input name="q" type="text" placeholder="キーワードを入力" autofocus="">
				<input name="sa" type="submit" value="ENTER">
				<input type="hidden" name="ie" value="UTF-8" />
			</form>

		</nav>
	</header>
	<div id="sp-logo">
		<h1><a href="/"><img src="<?php bloginfo('template_url'); ?>/images/common/logo.svg" height="45" alt="青山学院大学"></a></h1>
	</div>
	<!-- /ヘッダー -->

	<!-- モーダル -->
	<div id="modal_aoyama_style" class="modal">
		<div class="modal-overlay">
			<label class="close close_modal_aoyama_style"></label>
			<div class="modal-wrap">
				<div id="gakuin-links">
					<div class="vision-box"> <a href="https://www.aoyamagakuin.jp" class="ssc vision00" target="_blank">青山学院<small>AOYAMA GAKUIN</small></a> <a href="http://www.aoyama.ac.jp" class="ssc vision01" target="_blank">青山学院大学<small>AOYAMA GAKUIN UNIVERSITY</small></a> <a href="http://www.luce.aoyama.ac.jp/"
						  class="ssc vision02" target="_blank">青山学院女子短期大学<small>AOYAMA GAKUIN WOMEN'S JUNIOR COLLEGE</small></a> </div>
					<div class="vision-box"> <a href="http://www.agh.aoyama.ed.jp" class="ssc vision03" target="_blank">青山学院高等部<small>AOYAMA GAKUIN SENIOR HIGH SCHOOL</small></a> <a href="http://www.jh.aoyama.ed.jp" class="ssc vision04">青山学院中等部<small>AOYAMA GAKUIN JUNIOR HIGH SCHOOL</small></a>						</div>
					<div class="vision-box"> <a href="http://www.age.aoyama.ed.jp" class="ssc vision05" target="_blank">青山学院初等部<small>AOYAMA GAKUIN ELEMENTARY SCHOOL</small></a> <a href="http://www.kinder.aoyama.ed.jp" class="ssc vision06" target="_blank">青山学院幼稚園<small>AOYAMA GAKUIN KINDERGARTEN</small></a>						</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /モーダル -->

	<!-- モーダル2 -->
	<div id="modal_language" class="modal">
		<div class="modal-overlay">
			<label class="close close_modal_language"></label>
			<div class="modal-wrap">
				<div id="gakuin-links">
					<div class="vision-box">
					<?php if( have_rows('言語メニュー', 'option') ): while ( have_rows('言語メニュー', 'option') ) : the_row(); ?>
						<a href="<?php the_sub_field('言語リンク', 'option'); ?>" class="ssc ssc2 vision_none"><?php the_sub_field('言語名', 'option'); ?></a>
					<?php endwhile; endif;?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /モーダル -->


	<!-- ハンバーガー -->
	<div id="modal_burger" class="modal">
		<div class="modal-overlay">
			<label for="toggle_burger" class="close close_modal_burger"></label>
			<div class="modal-wrap">
				<nav class="navBox sp-none">
					<div class="navBox03">
						<ul class="navBox03_list">
							<li class="navBox03_item navBox03_item-title"><a href="/outline/">青山学院大学について</a></li>
							<?php $get_page_id = get_page_by_path('sidebar01'); $page_id = $get_page_id->ID; ?>

							<?php while(have_rows('第２階層',$page_id)): the_row(); ?>
							<?php while(have_rows('大カテゴリ',$page_id)): the_row(); ?>
							<?php while(have_rows('第３階層',$page_id)): the_row(); ?>
							<li class="navBox03_item"><a href="<?php the_sub_field('ページurl'); ?>"><?php the_sub_field('第３階層名',$page_id); ?></a></li>
							<?php endwhile; ?>
							<?php endwhile; ?>
							<?php endwhile; ?>


							<li class="navBox03_item navBox03_item-title" style="margin-top: 20px;"><a href="/research/">研究・産学連携</a></li>
							<?php $get_page_id = get_page_by_path('sidebar04'); $page_id = $get_page_id->ID; ?>
							<?php while(have_rows('第２階層',$page_id)): the_row(); ?>
							<?php while(have_rows('大カテゴリ',$page_id)): the_row(); ?>
							<?php while(have_rows('第３階層',$page_id)): the_row(); ?>
							<li class="navBox03_item"><a href="<?php the_sub_field('ページurl'); ?>"><?php the_sub_field('第３階層名',$page_id); ?></a></li>
							<?php endwhile; ?>
							<?php endwhile; ?>
							<?php endwhile; ?>
							</ul>
							<ul class="navBox03_list">
							<li class="navBox03_item navBox03_item-title"><a href="/faculty/">学部・大学院</a></li>
							<?php $get_page_id = get_page_by_path('sidebar02a'); $page_id = $get_page_id->ID; ?>
							<?php while(have_rows('第２階層',$page_id)): the_row(); ?>
							<?php while(have_rows('大カテゴリ',$page_id)): the_row(); ?>
							<?php while(have_rows('第３階層',$page_id)): the_row(); ?>
							<li class="navBox03_item"><a href="<?php the_sub_field('ページurl'); ?>"><?php the_sub_field('第３階層名',$page_id); ?></a></li>
							<?php endwhile; ?>
							<?php endwhile; ?>
							<?php endwhile; ?>
							<?php $get_page_id = get_page_by_path('sidebar02b'); $page_id = $get_page_id->ID; ?>
							<?php while(have_rows('第２階層',$page_id)): the_row(); ?>
							<?php while(have_rows('大カテゴリ',$page_id)): the_row(); ?>
							<?php while(have_rows('第３階層',$page_id)): the_row(); ?>
							<li class="navBox03_item"><a href="<?php the_sub_field('ページurl'); ?>"><?php the_sub_field('第３階層名',$page_id); ?></a></li>
							<?php endwhile; ?>
							<?php endwhile; ?>
							<?php endwhile; ?>
							<li class="navBox03_item navBox03_item-title" style="margin-top: 20px;"><a href="/international/">国際交流・留学</a></li>
							<?php $get_page_id = get_page_by_path('sidebar05'); $page_id = $get_page_id->ID; ?>
							<?php while(have_rows('第２階層',$page_id)): the_row(); ?>
							<?php while(have_rows('大カテゴリ',$page_id)): the_row(); ?>
							<?php while(have_rows('第３階層',$page_id)): the_row(); ?>
							<li class="navBox03_item"><a href="<?php the_sub_field('ページurl'); ?>"><?php the_sub_field('第３階層名',$page_id); ?></a></li>
							<?php endwhile; ?>
							<?php endwhile; ?>
							<?php endwhile; ?>
							</ul>

							<ul class="navBox03_list">
							<li class="navBox03_item navBox03_item-title"><a href="/campuslife/">学生生活</a></li>
							<?php $get_page_id = get_page_by_path('sidebar03'); $page_id = $get_page_id->ID; ?>
							<?php while(have_rows('第２階層',$page_id)): the_row(); ?>
							<?php while(have_rows('大カテゴリ',$page_id)): the_row(); ?>
							<?php while(have_rows('第３階層',$page_id)): the_row(); ?>
							<li class="navBox03_item"><a href="<?php the_sub_field('ページurl'); ?>"><?php the_sub_field('第３階層名',$page_id); ?></a></li>
							<?php endwhile; ?>
							<?php endwhile; ?>
							<?php endwhile; ?>

							<li class="navBox03_item navBox03_item-title" style="margin-top: 20px;"><a href="/admission/">入試・入学情報</a></li>
							<?php $get_page_id = get_page_by_path('sidebar06'); $page_id = $get_page_id->ID; ?>
							<?php while(have_rows('第２階層',$page_id)): the_row(); ?>
							<?php while(have_rows('大カテゴリ',$page_id)): the_row(); ?>
							<?php while(have_rows('第３階層',$page_id)): the_row(); ?>
							<li class="navBox03_item"><a href="<?php the_sub_field('ページurl'); ?>"><?php the_sub_field('第３階層名',$page_id); ?></a></li>
							<?php endwhile; ?>
							<?php endwhile; ?>
							<?php endwhile; ?>

							<li class="navBox03_item navBox03_item-title" style="margin-top: 20px;"><a href="/life/employment/">就職・キャリア</a></li>
							<?php $get_page_id = get_page_by_path('sidebar07'); $page_id = $get_page_id->ID; ?>
							<?php while(have_rows('第２階層',$page_id)): the_row(); ?>
							<?php while(have_rows('大カテゴリ',$page_id)): the_row(); ?>
							<?php while(have_rows('第３階層',$page_id)): the_row(); ?>
							<li class="navBox03_item"><a href="<?php the_sub_field('ページurl'); ?>"><?php the_sub_field('第３階層名',$page_id); ?></a></li>
							<?php endwhile; ?>
							<?php endwhile; ?>
							<?php endwhile; ?>

							<?php $get_page_id = get_page_by_path('header-submenu'); $page_id = $get_page_id->ID; $subi = 0; ?>
							<?php while(have_rows('サブメニュー',$page_id)): the_row(); ?>
							<li class="navBox03_item"<?php if($subi == 0){ ?> style="margin-top: 20px;"<?php } ?>><a href="<?php the_sub_field('リンク先'); ?>"><?php the_sub_field('タイトル'); ?></a></li>
							<?php $subi++; ?>
							<?php endwhile; ?>
						</ul>
						<ul class="navBox01_list">
							<li class="navBox01_item"><a href="/target/for_prospective_students/"><span>FOR PROSPECTIVE STUDENTS</span>受験生の皆様へ</a></li>
							<li class="navBox01_item"><a href="/target/for_internal_students/"><span>FOR STUDENTS</span>在学生の皆様へ</a></li>
							<li class="navBox01_item"><a href="/target/for_almni/"><span>FOR GRADUATES</span>卒業生の皆様へ</a></li>
							<li class="navBox01_item"><a href="/target/for_guardians/"><span>FOR PARENTS</span>保証人の皆様へ</a></li>
							<li class="navBox01_item"><a href="/target/for_company/"><span>FOR THE PUBLIC</span>企業・一般の皆様へ</a></li>
							<li class="navBox01_item"><a href="/target/for_research_institute/"><span>FOR RESERCHERS</span>研究機関・研究者の皆様へ</a></li>
							<li class="navBox01_item"><a href="/target/for_press/"><span>FOR THE PRESS</span>報道関係者の皆様へ</a></li>
							<li class="navBox01_item"><a href="/inquiry/"><span>INQUIRY</span>お問い合わせ・窓口</a></li>
							<!-- <li class="navBox01_item"><a href="/en/"><span>ENGLISH SITE</span>英語サイト</a></li> -->
							<!-- <li class="navBox01_item toggle-language"><a href="javascript:void(0)"><span>LANGUAGE</span>言語</a></li> -->
						</ul>
					</div>
				</nav>
				<?php get_template_part('sp-header'); ?>

			</div>
		</div>
	</div>
	<!-- /ハンバーガー -->

	<style>
	.kv.kv-top .kv_wrapper {
	    opacity: 0;
			display: none;
		}
	.kv_slider {
	animation: kvFadeIn 2s ease 0s 1 normal;
	-webkit-animation: kvFadeIn 2s ease 0s 1 normal;
	}
	@keyframes kvFadeIn {
	    0% {opacity: 0}
	    100% {opacity: 1}
	}
	@-webkit-keyframes kvFadeIn {
	    0% {opacity: 0}
	    100% {opacity: 1}
	}
	@media screen and (max-width:799px) {
		.kv_slider {
		width: 100%;
		max-height: 250px;
		}
	}
	</style>
	<main class="wh top">
		<!-- kv top page-->
		<section class="top-slider">
			<div class="section_inner section_inner-wide">
				<div class="kv_slider">
					<?php while(have_rows('メインビジュアル')): the_row(); ?>
					<div class="slide-wrap">
						<a href="<?php the_sub_field('kv-link-01'); ?>" target="<?php the_sub_field('kv-link-option'); ?>">
							<div class="slide-image" style="background-image: url(<?php the_sub_field('画像'); ?>);"></div>

							<div class="kv_text-wrap <?php the_sub_field('text-position'); ?> <?php the_sub_field('text-color'); ?>">

									<h2 class="kv_title"><?php the_sub_field('kv-title-01'); ?></h2>
									<?php if(get_sub_field('kv-title-02')):?>
										<div class="kv_text"><p class="arrow"><?php the_sub_field('kv-title-02'); ?></p></div>
									<?php endif; ?>
							</div>

						</a>
					</div>
					<?php endwhile; ?>
				</div>
			</div>
		</section>
