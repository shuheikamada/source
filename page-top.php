<?php
/*
Template Name: トップページ改修用
*/
?>
<link rel="stylesheet" type="text/css" href="https://stg.aoyama.2xx.jp/wp-content/themes/aoyamagakuin/css-page-top/top.css">
<?php get_template_part('header-top'); ?>
<?php get_template_part('partials/important-dev'); ?>

<?php
	$active = get_field('active','33748');
	if($active):
?>
		<section class="exam">
		<a href="<?php the_field('admission_url','33748'); ?>" class="exam__btn">
			<?php the_field('admission_text','33748'); ?>
		</a>
		</section>
<?php
	endif;
?>
		<!-- aoyama people -->
		<section>
			<h4 class="newsbox_title section_title-top" data-scroll="once"><?php the_field('Interview見出し_英'); ?></h4>
			<p class="section_text-top" data-scroll="once"><?php the_field('Interview見出し_日'); ?></p>
			<div class="section_inner section_inner-wide">
				<div class="peoplebox">
					<div class="peoplebox_body">
					</div>

					<!--青山ピープル01 Start-->
					<div class="peoplebox_item peoplebox_item-green peoplebox_item-upper" data-scroll="once" >
						<a href="<?php the_field('people01_リンク先'); ?>"<?php if(get_field('people01_別ウインドウ') == true){?> target="_blank"<?php } ?>>

							<div class="peoplebox_image sp-none" style="background:url(<?php the_field('people01_画像'); ?>) center center / cover no-repeat;"></div>
							<div class="peoplebox_image pc-none" style="background:url(<?php the_field('people01_sp画像'); ?>) center center / cover no-repeat;"></div>
							<div class="peopleinfo01">
								<p class="topic <?php the_field('people01_左帯サブタイトル（上）の背景色'); ?>"><?php the_field('people01_左帯のサブタイトル（上）'); ?></p>
								<p class="title01 <?php the_field('people01_左帯タイトルの背景色'); ?>"><?php the_field('people01_左帯のタイトル'); ?></p>
								<p class="title02 <?php the_field('people01_左帯サブタイトル（下）の背景色'); ?>"><?php the_field('people01_左帯のサブタイトル（下）'); ?></p>
							</div>
							<div class="peopleinfo02">
								<p class="topic <?php the_field('people01_右帯サブタイトル（上）の背景色'); ?>"><?php the_field('people01_右帯のサブタイトル（上）'); ?></p>
								<p class="title01 <?php the_field('people01_右帯タイトルの背景色'); ?>"><?php the_field('people01_右帯のタイトル'); ?></p>
								<p class="title02 <?php the_field('people01_右帯サブタイトル（下）の背景色'); ?>"><?php the_field('people01_右帯のサブタイトル（下）'); ?></p>
							</div>
							<div class="peopleinfo03">
								<p class="name sub"><?php the_field('people01_下帯サブタイトル'); ?></p>
								<p class="name"><?php the_field('people01_下帯タイトル'); ?></p>
							</div>
						</a>
					</div>
					<!--青山ピープル01 End-->

						<!--青山ピープル02 Start-->
						<div class="peoplebox_item peoplebox_item-green peoplebox_item-upper" data-scroll="once" >
							<a href="<?php the_field('people02_リンク先'); ?>"<?php if(get_field('people02_別ウインドウ') == true){?> target="_blank"<?php } ?>>
								<div class="rectangle"></div>
								<span class="border"></span>
								<div class="peoplebox_image sp-none" style="background:url(<?php the_field('people02_画像'); ?>) center center / cover no-repeat;"></div>
								<div class="peoplebox_image pc-none" style="background:url(<?php the_field('people02_sp画像'); ?>) center center / cover no-repeat;"></div>
								<div class="peopleinfo01">
									<p class="topic <?php the_field('people02_左帯サブタイトル（上）の背景色'); ?>"><?php the_field('people02_左帯のサブタイトル（上）'); ?></p>
									<p class="title01 <?php the_field('people02_左帯タイトルの背景色'); ?>"><?php the_field('people02_左帯のタイトル'); ?></p>
									<p class="title02 <?php the_field('people02_左帯サブタイトル（下）の背景色'); ?>"><?php the_field('people02_左帯のサブタイトル（下）'); ?></p>
								</div>
								<div class="peopleinfo02">
									<p class="topic <?php the_field('people02_右帯サブタイトル（上）の背景色'); ?>"><?php the_field('people02_右帯のサブタイトル（上）'); ?></p>
									<p class="title01 <?php the_field('people02_右帯タイトルの背景色'); ?>"><?php the_field('people02_右帯のタイトル'); ?></p>
									<p class="title02 <?php the_field('people02_people02_右帯サブタイトル（下）の背景色'); ?>"><?php the_field('people02_右帯のサブタイトル（下）'); ?></p>
								</div>
								<div class="peopleinfo03">
									<p class="name sub"><?php the_field('people02_下帯サブタイトル'); ?></p>
									<p class="name"><?php the_field('people02_下帯タイトル'); ?></p>
								</div>
							</a>
						</div>
						<!--青山ピープル02 End-->
						<!--青山ピープル03 Start-->
						<div class="peoplebox_item peoplebox_item-green peoplebox_item-lower" data-scroll="once" >
							<a href="<?php the_field('people03_リンク先'); ?>"<?php if(get_field('people03_別ウインドウ') == true){?> target="_blank"<?php } ?>>
								<div class="rectangle"></div>
								<span class="border"></span>
								<div class="peoplebox_image sp-none" style="background:url(<?php the_field('people03_画像'); ?>) center center / cover no-repeat;"></div>
								<div class="peoplebox_image pc-none" style="background:url(<?php the_field('people03_sp画像'); ?>) center center / cover no-repeat;"></div>
								<div class="peopleinfo01">
									<p class="topic <?php the_field('people03_左帯サブタイトル（上）の背景色'); ?>"><?php the_field('people03_左帯サブタイトル（上）'); ?></p>
									<p class="title01 <?php the_field('people03_左帯タイトルの背景色'); ?>"><?php the_field('people03_左帯のタイトル'); ?></p>
									<p class="title02 <?php the_field('people03_左帯サブタイトル（下）の背景色'); ?>"><?php the_field('people03_左帯サブタイトル（下）'); ?></p>
								</div>
								<div class="peopleinfo02 peopleinfo02">
									<p class="topic <?php the_field('people03_右帯サブタイトル（上）の背景色'); ?>"><?php the_field('people03_右帯のサブタイトル（上）'); ?></p>
									<p class="title01 <?php the_field('people03_右帯タイトルの背景色'); ?>"><?php the_field('people03_右帯のタイトル'); ?></p>
									<p class="title02 <?php the_field('people03_右帯サブタイトル（下）の背景色'); ?>"><?php the_field('people03_右帯のサブタイトル（下）'); ?></p>
								</div>
								<div class="peopleinfo03">
									<p class="name sub"><?php the_field('people03_下帯サブタイトル'); ?></p>
									<p class="name"><?php the_field('people03_下帯タイトル'); ?></p>
								</div>
							</a>
						</div>
						<!--青山ピープル03 End-->


						<!--青山ピープル04 Start-->
						<div class="peoplebox_item peoplebox_item-green peoplebox_item-lower" data-scroll="once" >
							<a href="<?php the_field('people04_リンク先'); ?>"<?php if(get_field('people04_別ウインドウ') == true){?> target="_blank"<?php } ?>>
								<div class="rectangle"></div>
								<span class="border"></span>
								<div class="peoplebox_image sp-none" style="background:url(<?php the_field('people04_画像'); ?>) center center / cover no-repeat;"></div>
								<div class="peoplebox_image pc-none" style="background:url(<?php the_field('people04_sp画像'); ?>) center center / cover no-repeat;"></div>
								<div class="peopleinfo01">
									<p class="topic <?php the_field('people04_左帯サブタイトル（上）の背景色'); ?>"><?php the_field('people04_左帯のサブタイトル（上）'); ?></p>
									<p class="title01 <?php the_field('people04_左帯タイトルの背景色'); ?>"><?php the_field('people04_左帯のタイトル'); ?></p>
									<p class="title02 <?php the_field('people04_左帯サブタイトル（下）の背景色'); ?>"><?php the_field('people04_左帯のサブタイトル（下）'); ?></p>
								</div>
								<div class="peopleinfo02">
									<p class="topic <?php the_field('people04_右帯サブタイトル（上）の背景色'); ?>"><?php the_field('people04_右帯のサブタイトル（上）'); ?></p>
									<p class="title01 <?php the_field('people04_右帯タイトルの背景色'); ?>"><?php the_field('people04_右帯のタイトル'); ?></p>
									<p class="title02 <?php the_field('people04_右帯サブタイトル（下）の背景色'); ?>"><?php the_field('people04_右帯のサブタイトル（下）'); ?></p>
								</div>
								<div class="peopleinfo03">
									<p class="name sub"><?php the_field('people04_下帯サブタイトル'); ?></p>
									<p class="name"><?php the_field('people04_下帯タイトル'); ?></p>
								</div>
							</a>
						</div>
						<!--青山ピープル04 End-->

					<!--青山ピープル05 Start-->
					<div class="peoplebox_item peoplebox_item-green peoplebox_item-lower" data-scroll="once" >
						<a href="<?php the_field('people05_リンク先'); ?>"<?php if(get_field('people05_別ウインドウ') == true){?> target="_blank"<?php } ?>>
							<div class="rectangle"></div>
							<span class="border"></span>
							<div class="peoplebox_image sp-none" style="background:url(<?php the_field('people05_画像'); ?>) center center / cover no-repeat;"></div>
							<div class="peoplebox_image pc-none" style="background:url(<?php the_field('people05_sp画像'); ?>) center center / cover no-repeat;"></div>
							<div class="peopleinfo01">
								<p class="topic <?php the_field('people05_左帯サブタイトル（上）の背景色'); ?>"><?php the_field('people05_左帯のサブタイトル（上）'); ?></p>
								<p class="title01 <?php the_field('people05_左帯タイトルの背景色'); ?>"><?php the_field('people05_左帯のタイトル'); ?></p>
								<p class="title02 <?php the_field('people05_左帯サブタイトル（下）の背景色'); ?>"><?php the_field('people05_左帯のサブタイトル（下）'); ?></p>
							</div>
							<div class="peopleinfo02">
								<p class="topic <?php the_field('people05_右帯サブタイトル（上）の背景色'); ?>"><?php the_field('people05_右帯のサブタイトル（上）'); ?></p>
								<p class="title01 <?php the_field('people05_右帯タイトルの背景色'); ?>"><?php the_field('people05_右帯のタイトル'); ?></p>
								<p class="title02 <?php the_field('people05_右帯サブタイトル（下）の背景色'); ?>"><?php the_field('people05_右帯のサブタイトル（下）'); ?></p>
							</div>
							<div class="peopleinfo03">
								<p class="name sub"><?php the_field('people05_下帯サブタイトル'); ?></p>
								<p class="name"><?php the_field('people05_下帯タイトル'); ?></p>
							</div>
						</a>
					</div>
					<!--青山ピープル05 End-->
				</div>
			</div>
		</section>
		<!-- / aoyama people -->

		<section class="special-contents">
			<div class="section_inner section_inner-wide">

				<h4 class="newsbox_title section_title-top" data-scroll="once"><?php the_field('SpecialContents見出し_英'); ?></h4>
				<p class="section_text-top" data-scroll="once"><?php the_field('SpecialContents見出し_日'); ?></p>
				<div class="specialbox">

					<?php if(have_rows('SC_LOOP')): ?>
					<?php while(have_rows('SC_LOOP')): the_row(); ?>
						<div class="specialbox_list" style="background-image: url(<?php the_sub_field('SC_BG_PC'); ?>)">
							<a href="<?php the_sub_field('SC_URL'); ?>">
								<div class="overlay"></div>
								<span class="specialbox_more arrowmore">MORE</span>
								<div class="specialbox_item" data-scroll="once">
								<?php if(get_sub_field('左上英字見出し')):?>
									<div class="left-index"><?php the_sub_field('左上英字見出し'); ?></div>
								<?php endif;?>
									<div class="item-blue"><?php the_sub_field('SC_タイトル'); ?></div>
								</div>
							</a>
						</div>

					<?php endwhile; ?>
					<?php endif; ?>


				</div>
			</div>
		</section>

				<!-- moviebox -->
				<section class="aogaku-movie">
					<div class="section_inner section_inner-wide">
						<div class="moviebox">
							<div class="moviebox_bg">
								<video src="<?php the_field('背景動画'); ?>" preload="auto" muted autoplay loop poster="<?php the_field('背景動画ポスターフレーム'); ?>"></video>
							</div>
							<h4 class="moviebox_title section_title-top" data-scroll="once"><?php the_field('動画見出し_英'); ?></h4>
							<p class="section_text-top wh" data-scroll="once"><?php the_field('動画見出し_日'); ?></p>
							<div class="moviebox_list">
								<div class="mainview" data-scroll="once">
									<iframe width="750" height="315" src="https://www.youtube.com/embed/<?php the_field('動画ID_01'); ?>?rel=0" frameborder="0" allow="encrypted-media" allowfullscreen data-num="1"></iframe>
								</div>
								<div class="subview_wrapeer" data-scroll="once">
									<div class="subview first" data-url="https://www.youtube.com/embed/<?php the_field('動画ID_01'); ?>?rel=0&autoplay=1" data-num="1" style="background:url(<?php the_field('動画ID_背景01'); ?>) center center / cover no-repeat;"></div>
									<div class="subview" data-url="https://www.youtube.com/embed/<?php the_field('動画ID_02'); ?>?rel=0&autoplay=1" data-num="2" style="background:url(<?php the_field('動画ID_背景02'); ?>) center center / cover no-repeat;"></div>
									<div class="subview" data-url="https://www.youtube.com/embed/<?php the_field('動画ID_03'); ?>?rel=0&autoplay=1" data-num="3" style="background:url(<?php the_field('動画ID_背景03'); ?>) center center / cover no-repeat;"></div>
									<div class="subview" style="background:url(<?php the_field('動画ID_背景04'); ?>) center center / cover no-repeat;"><a href="<?php the_field('動画リンク先'); ?>"><span>WATCH  MORE</span></a></div>
								</div>
								<a href="<?php the_field('動画リンク先'); ?>" class="arrowmore pc-none">WATCH MORE</a>
							</div>
						</div>
					</div>
				</section>
				<!-- / moviebox -->

				<!-- newsbox -->
				<section class="news">
					<div class="section_inner section_inner-wide">
						<div class="newsbox">
							<h4 class="newsbox_title section_title-top" data-scroll="once"><?php the_field('NEWS見出し_英'); ?></h4>
							<p class="newsbox_text section_text-top" data-scroll="once"><?php the_field('NEWS見出し_日'); ?></p>
							<div class="newsbox_list">
								<?php $ii = 0; ?>
								<?php
								$args = array(
								'post_type'=>array('post00','post01','post02','post03','post04','post05','post06','post07','undergraduate_test','faculty103','faculty104','faculty105','faculty111','faculty112','faculty113','faculty114','center101','center102','center103','center104'),
								'category_name' => 'news',
								'meta_key' => 'TOPページへの表示',
								'meta_value' => '1',
								'posts_per_page' => 6
								);
								$q = new WP_Query( $args );
								if ( $q->have_posts() ) : while ( $q->have_posts() ) : $q->the_post()
								?>
								<?php if ( has_post_thumbnail() ) {
									$image_id = get_post_thumbnail_id ();
									$image_url = wp_get_attachment_image_src ($image_id, true);
									$img = $image_url[0];
								} else {
								$img = get_bloginfo( 'template_directory' ) . '/images/campuslife/subjectbox_bg01.jpg';
								} ?>
								<div class="newsbox_item <?php if($ii == 0) {?>newsbox_item-wide<?php } ?>" data-scroll="once">
									<a href="<?php the_permalink(); ?>">
										<div class="newsbox_image" style="background:url(<?php if($ii == 0) { the_field('1stimage'); }else{ echo $img;}?>) center center / cover no-repeat;"></div>
										<div class="overlay"></div>
										<div class="wrapper">
											<p class="date"><?php the_time('Y.n.j'); ?></p>
<?php
$ntitle = get_the_title();
if(wp_is_mobile()){
$abbntitle = mb_strimwidth($ntitle, 0, 110, "...", 'UTF-8');
}else{
$abbntitle = mb_strimwidth($ntitle, 0, 190, "...", 'UTF-8');
}
?>
											<p class="text"><span><?=$abbntitle;?></span></p>
										</div>
									</a>
								</div>
								<?php $ii++; ?>
								<?php endwhile;wp_reset_query();?>
								<?php endif; ?>
								<div class="newsbox_item" data-scroll="once">
									<a href="/news/">
										<p class="more">READ MORE</p>
									</a>
								</div>
							</div>
						</div>
					</div>
				</section>
				<!-- / newsbox -->


		<!-- eventbox -->
		<div class="eventbox_top" style="background:url(<?php bloginfo('template_url'); ?>/images/eventbox-top-r2.png) center center / cover no-repeat;"></div>
		<section class="event">
			<div class="section_inner section_inner-wide">
				<div class="eventbox eventbox-top">
					<h4 class="section_title-top wh" data-scroll="once"><?php the_field('EVENT見出し_英'); ?></h4>
					<p class="section_text-top wh" data-scroll="once"><?php the_field('EVENT見出し_日'); ?></p>
					<ul class="eventbox_list">

						<?php
						$args = array(
						'post_type'=>array('post00','post01','post02','post03','post04','post05','post06','post07','undergraduate_test','faculty103','faculty104','faculty105','faculty111','faculty112','faculty113','faculty114','center101','center102','center103','center104'),
						'category_name' => 'event',
						'meta_key' => '開催日',
						'orderby' => 'meta_value',
						'order' => 'DESC',
						'meta_query' => [
							'key'     => 'TOPページへの表示',
							'value'   => '1',
						],
						'posts_per_page' => 7
						);
						$q = new WP_Query( $args );
						if ( $q->have_posts() ) : while ( $q->have_posts() ) : $q->the_post()
						?>
						<?php if ( has_post_thumbnail() ) {
							$image_id = get_post_thumbnail_id ();
							$image_url = wp_get_attachment_image_src ($image_id, true);
							$img = $image_url[0];
						} else {
						$img = get_bloginfo( 'template_directory' ) . '/images/campuslife/subjectbox_bg01.jpg';
						} ?>

						<li class="eventbox_item eventbox_item-event" data-scroll="once">
							<a href="<?php the_permalink(); ?>" class="eventbox_link" style="background:url(<?php echo $img;?>) center center / cover no-repeat;">
								<div class="overlay"></div>
								<div class="eventbox_wrapper">
									<p class="eventbox_text">
										<?php
										$etitle = get_the_title();
										$abbetitle = mb_strimwidth($etitle, 0, 140, "...", 'UTF-8');
										?>
										<?=$abbetitle;?>
									</p>
									<p class="eventbox_date">
										<?php if(get_field('開催日')): ?>
												<?php the_field('開催日'); ?>
													<?php if(get_field('開催日 (開催終了日)')): ?>
														<?php
														$edate = get_field('開催日 (開催終了日)');
														$datef = substr($edate, 5);
														?>
														<?php echo ' - '.$datef; ?>

													<?php endif; ?>
										<?php else: ?>
											<?php echo get_the_date( 'Y.m.d' ); ?>
										<?php endif; ?>
									</p>
								</div>
							</a>
						</li>

						<?php endwhile;wp_reset_query();?>
						<?php endif; ?>
						<li class="eventbox_item eventbox_item-event" data-scroll="once">
							<a href="/event/" class="eventbox_link">
								<div class="more">READ MORE</div>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</section>
		<div class="eventbox_bottom" style="background:url(<?php bloginfo('template_url'); ?>/images/eventbox-bottom.png) center center / cover no-repeat;"></div>
		<!-- / eventbox -->

		<!-- columnbox -->
		<section class="tilemenu">
			<div class="columnbox_top" style="background:url(https://stg.aoyama.2xx.jp/wp-content/themes/aoyamagakuin/images/columnbox-top.png) center center / cover no-repeat;"></div>
			<div class="section_inner section_inner-wide">
				<div class="tilemenu">

					<div class="tilemenu_list">
						<?php if(have_rows('middle-menu-loop')): ?>
						<?php while(have_rows('middle-menu-loop')): the_row(); ?>
							<div class="tilemenu_box" style="background-image: url(<?php the_sub_field('background-img'); ?>)">
								<a href="<?php the_sub_field('url'); ?>">
									<div class="overlay"></div>
									<div class="tilemenu_item" data-scroll="once">
										<div class="eng"><?php the_sub_field('eng'); ?></div>
										<div class="jp"><?php the_sub_field('jp'); ?></div>
									</div>
								</a>
							</div>

						<?php endwhile; ?>
						<?php endif; ?>
						<div class="tilemenu_box dummy"></div>
					</div>

				</div>
			</div>
<div class="columnbox_bottom" style="background:url(https://stg.aoyama.2xx.jp/wp-content/themes/aoyamagakuin/images/columnbox-bottom.png) center center / cover no-repeat;"></div>
		</section>

		<section class="media pc-none">
			<div class="section_inner section_inner-wide">
				<h4 class="section_title-top" data-scroll="once">SOCIAL MEDIA</h4>
				<div class="flexbox">
					<a href="https://www.facebook.com/AoyamaGakuinU/" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/facebook.png"></a>
					<a href="https://twitter.com/AoyamaGakuinU" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/twitter.png"></a>
					<a href="https://www.youtube.com/channel/UCb0FZ7wO98F8GDIhN6kqHvg" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/youtube.png"></a>
					<a href="https://www.instagram.com/aoyamagakuinuniversity/" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/instagram.png"></a>
				</div>
			</div>
		</section>

		<!-- / columnbox -->

		<?php get_template_part('partials/instagram-dev'); ?>

<?php get_footer('top'); ?>
