<?php
/*
Template Name: トップページ改修用
*/
?>

<?php get_template_part('header-top'); ?>
<?php get_template_part('partials/important-new'); ?>
<?php
$pageid = get_the_ID();
?>
<?php
	$active = get_field('active');
	if($active):
?>
		<section class="exam">
		<a href="<?php the_field('admission_url');?>" class="exam__btn">
			<?php the_field('admission_text'); ?>
		</a>
		</section>
<?php
	endif;
?>
		<!-- aoyama people -->
		<section>
			<h4 class="newsbox_title section_title-top" data-scroll="once"><?php the_field('Interview見出し_英'); ?></h4>
<?php if(get_field('Interview見出し_日')): ?>
			<p class="section_text-top" data-scroll="once"><?php the_field('Interview見出し_日'); ?></p>
<?php endif;?>
			<div class="section_inner section_inner-wide">
				<div class="peoplebox">
					<div class="peoplebox_body">
					</div>

					<!--青山ピープル01 Start-->
					<div class="peoplebox_item peoplebox_item-green peoplebox_item-upper" data-scroll="once" >
						<a href="<?php the_field('people01_リンク先'); ?>"<?php if(get_field('people01_別ウインドウ') == true){?> target="_blank"<?php } ?>>
							<div class="peoplebox_image pc-none">
								<img
								data-original="<?php the_field('people01_画像'); ?>"
								alt="people1"
								class="lazy"
								loading="lazy">
							</div>
							<div class="peoplebox_image sp-none">
								<img
								data-original="<?php the_field('people01_sp画像'); ?>"
								alt="people1"
								class="lazy"
								loading="lazy">
							</div>

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
								<div class="peoplebox_image sp-none">
									<img
									data-original="<?php the_field('people02_画像'); ?>"
									alt="people2"
									class="lazy"
									loading="lazy">
								</div>
								<div class="peoplebox_image pc-none">
									<img
									data-original="<?php the_field('people02_sp画像'); ?>"
									alt="people2"
									class="lazy"
									loading="lazy">
								</div>
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
								<div class="peoplebox_image sp-none">
									<img
									data-original="<?php the_field('people03_画像'); ?>"
									alt="people3"
									class="lazy"
									loading="lazy">
								</div>
								<div class="peoplebox_image pc-none">
									<img
									data-original="<?php the_field('people03_sp画像'); ?>"
									alt="people3"
									class="lazy"
									loading="lazy">
								</div>
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
								<div class="peoplebox_image sp-none">
									<img
									data-original="<?php the_field('people04_画像'); ?>"
									alt="people4"
									class="lazy"
									loading="lazy">
								</div>
								<div class="peoplebox_image pc-none">
									<img
									data-original="<?php the_field('people04_sp画像'); ?>"
									alt="people4"
									class="lazy"
									loading="lazy">
								</div>
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
							<div class="peoplebox_image sp-none">
								<img
								data-original="<?php the_field('people05_画像'); ?>"
								alt="people5"
								class="lazy"
								loading="lazy">
							</div>
							<div class="peoplebox_image pc-none">
								<img
								data-original="<?php the_field('people05_sp画像'); ?>"
								alt="people5"
								class="lazy"
								loading="lazy">
							</div>
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
<?php if(get_field('SpecialContents見出し_日')): ?>
				<p class="section_text-top" data-scroll="once"><?php the_field('SpecialContents見出し_日'); ?></p>
<?php endif;?>
				<div class="specialbox">

					<?php if(have_rows('SC_LOOP')): ?>
					<?php while(have_rows('SC_LOOP')): the_row(); ?>
						<div class="specialbox_list">
							<a href="<?php the_sub_field('SC_URL'); ?>">
								<img
								data-original="<?php the_sub_field('SC_BG_PC');?>"
								alt="newsimage"
								class="lazy"
								loading="lazy">
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
							<?php if(wp_is_mobile()): ?>
								<img
								data-original="<?php the_field('背景動画ポスターフレーム'); ?>"
								alt="movie"
								class="lazy"
								loading="lazy"
								>
							<?php else:?>
								<video src="<?php the_field('背景動画'); ?>" preload="auto" muted autoplay loop poster="<?php the_field('背景動画ポスターフレーム'); ?>"></video>
							<?php endif;?>
							</div>
							<h4 class="moviebox_title section_title-top" data-scroll="once"><?php the_field('動画見出し_英'); ?></h4>
<?php if(get_field('動画見出し_日')): ?>
							<p class="section_text-top wh" data-scroll="once"><?php the_field('動画見出し_日'); ?></p>
<?php endif; ?>
							<div class="moviebox_list">
								<div class="mainview" data-scroll="once">
									<?php
										$ytbg = get_field('動画サムネイル_01');

										if($ytbg == ""){
											$ytbg = "https://i.ytimg.com/vi/".get_field('動画ID_01')."/mqdefault.jpg";
										}
									?>
									<img
									data-original="<?=$ytbg;?>"
									alt="news"
									class="lazy yt-thumb"
									loading="lazy"
									data-id="<?php the_field('動画ID_01'); ?>"
									>
									<svg height="100%" version="1.1" viewBox="0 0 68 48" width="100%"><path class="ytp-large-play-button-bg" d="M66.52,7.74c-0.78-2.93-2.49-5.41-5.42-6.19C55.79,.13,34,0,34,0S12.21,.13,6.9,1.55 C3.97,2.33,2.27,4.81,1.48,7.74C0.06,13.05,0,24,0,24s0.06,10.95,1.48,16.26c0.78,2.93,2.49,5.41,5.42,6.19 C12.21,47.87,34,48,34,48s21.79-0.13,27.1-1.55c2.93-0.78,4.64-3.26,5.42-6.19C67.94,34.95,68,24,68,24S67.94,13.05,66.52,7.74z" fill="#212121"></path><path d="M 45,24 27,14 27,34" fill="#fff"></path></svg>
								</div>

								<div class="subview_wrapeer" data-scroll="once">
									<?php
										$ytbg = get_field('動画サムネイル_01');

										if($ytbg == ""){
											$ytbg = "https://i.ytimg.com/vi/".get_field('動画ID_01')."/mqdefault.jpg";
										}
									?>
									<div class="subview small-thumb first" data-id="<?php the_field('動画ID_01'); ?>">
										<img
										data-original="<?=$ytbg;?>"
										alt="news"
										class="lazy yt-thumb"
										loading="lazy"
										data-num="1" data-id="<?php the_field('動画ID_01'); ?>"
										>
									</div>
									<?php
										$ytbg = get_field('動画サムネイル_02');
										if($ytbg == ""){
											$ytbg = "https://i.ytimg.com/vi/".get_field('動画ID_02')."/mqdefault.jpg";
										}
									?>
									<div class="subview small-thumb" data-id="<?php the_field('動画ID_02'); ?>">
										<img
										data-original="<?=$ytbg;?>"
										alt="news"
										class="lazy yt-thumb"
										loading="lazy"
										data-num="2" data-id="<?php the_field('動画ID_02'); ?>"
										>
									</div>
									<?php
										$ytbg = get_field('動画サムネイル_03');
										if($ytbg == ""){
											$ytbg = "https://i.ytimg.com/vi/".get_field('動画ID_03')."/mqdefault.jpg";
										}
									?>
									<div class="subview small-thumb" data-id="<?php the_field('動画ID_03'); ?>">
										<img
										data-original="<?=$ytbg;?>"
										alt="news"
										class="lazy yt-thumb"
										loading="lazy"
										data-num="3" data-id="<?php the_field('動画ID_03'); ?>"
										>
									</div>

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
<?php if(get_field('NEWS見出し_日')): ?>
							<p class="newsbox_text section_text-top" data-scroll="once"><?php the_field('NEWS見出し_日'); ?></p>
<?php endif;?>
							<div class="newsbox_list">
								<?php $ii = 0; ?>
								<?php
								$args = array(
								'post_type'=>array('post00','post01','post02','post03','post04','post05','post06','post07','undergraduate_test','faculty103','faculty104','faculty105','faculty111','faculty112','faculty113','faculty114','center101','center102','center103','center104'),
								'category_name' => 'news',
								'meta_key' => 'TOPページへの表示',
								'meta_value' => '1',
								'post_status' => 'publish',
								'posts_per_page' => 6
								);
								$q = new WP_Query( $args );
								if ( $q->have_posts() ) : while ( $q->have_posts() ) : $q->the_post()
								?>
								<?php if ( has_post_thumbnail() ) {
									$image_id = get_post_thumbnail_id ();
									$image_url = wp_get_attachment_image_src ($image_id, 'large');
									$img = $image_url[0];
								} else {
								$img = get_bloginfo( 'template_directory' ) . '/images/campuslife/subjectbox_bg01.jpg';
								} ?>
								<div class="newsbox_item <?php if($ii == 0) {?>newsbox_item-wide<?php } ?>" data-scroll="once">
									<a href="<?php the_permalink(); ?>">
										<div class="newsbox_image">
											<?php
												if($ii ==0){
 													$newsimage = get_field('1stimage');
												}else{
													$newsimage = $img;
												}
 											?>
											<img
											data-original="<?=$newsimage; ?>"
											alt="news"
											class="lazy"
											loading="lazy">
										</div>
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
<?php if(get_field('EVENT見出し_日')): ?>
					<p class="section_text-top wh" data-scroll="once"><?php the_field('EVENT見出し_日'); ?></p>
<?php endif;?>
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
						'post_status' => 'publish',
						'posts_per_page' => 7
						);
						$q = new WP_Query( $args );
						if ( $q->have_posts() ) : while ( $q->have_posts() ) : $q->the_post()
						?>
						<?php if ( has_post_thumbnail() ) {
							$image_id = get_post_thumbnail_id ();
							$image_url = wp_get_attachment_image_src ($image_id, 'large');
							$img = $image_url[0];
						} else {
						$img = get_bloginfo( 'template_directory' ) . '/images/campuslife/subjectbox_bg01.jpg';
						} ?>

						<li class="eventbox_item eventbox_item-event" data-scroll="once">
							<img
							data-original="<?=$img; ?>"
							alt="event"
							class="lazy"
							loading="lazy">
							<a href="<?php the_permalink(); ?>" class="eventbox_link">

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
			<div class="columnbox_top"></div>
			<div class="section_inner section_inner-wide">
				<div class="tilemenu">

					<div class="tilemenu_list">
						<?php if(have_rows('middle-menu-loop')): ?>
						<?php while(have_rows('middle-menu-loop')): the_row(); ?>
							<div class="tilemenu_box">
								<img
								data-original="<?=get_sub_field('background-img'); ?>"
								alt="tile"
								class="lazy tilemenu_img"
								loading="lazy">
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
<div class="columnbox_bottom"></div>
		</section>

		<section class="media pc-none">
			<div class="section_inner section_inner-wide">
				<div class="flexbox">
					<a href="<?php the_field('facebook_url', 13684); ?>" target="_blank">
						<img
						data-original="<?php bloginfo('template_url'); ?>/images/facebook.svg"
						alt="facebook"
						class="lazy"
						loading="lazy" style="width:30.1847px; height:56.7858px;">
					</a>
					<a href="<?php the_field('twitter_url', 13684); ?>" target="_blank">
						<img
						alt="twitter"
						data-original="<?php bloginfo('template_url'); ?>/images/twitter.svg"
						class="lazy"
						loading="lazy" style="width:46.1213px; height:37.4818px;">
					</a>
					<a href="<?php the_field('youtube_url', 13684); ?>" target="_blank">
						<img
						data-original="<?php bloginfo('template_url'); ?>/images/youtube.svg"
						alt="youtube"
						class="lazy"
						loading="lazy" style="width:46.0413px; height:32.3303px;">
					</a>
					<a href="<?php the_field('instagram_url', 13684); ?>" target="_blank">
						<img
						data-original="<?php bloginfo('template_url'); ?>/images/instagram@2x.png"
						alt="instagram"
						class="lazy"
						loading="lazy" style="width: 56px;height: 56px;">

					</a>
				</div>
			</div>
		</section>

		<!-- / columnbox -->

		<?php get_template_part('partials/instagram-new'); ?>

<?php get_footer(''); ?>
