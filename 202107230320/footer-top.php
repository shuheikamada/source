
		<!-- フッター -->
		<footer class="footer">
			<div class="footer_inner">
				<div class="footer_lists">
					<div class="footer_list_upper flexbox">
						<?php if(have_rows('フッタ最上部リンク',13684)): ?>
						<?php while(have_rows('フッタ最上部リンク',13684)): the_row(); ?>
						<div class="footer_item footer_item-title"><a href="<?php the_sub_field('リンク'); ?>"><?php the_sub_field('項目'); ?></a></div>
						<?php endwhile;?>
						<?php endif;?>
					</div>

					<div class="footer_list_middle flexbox sp-none">
						<?php if(have_rows('フッターリンクリスト',13684)): ?>
						<?php while(have_rows('フッターリンクリスト',13684)): the_row(); ?>

						<div class="footer_list_column">
							<?php if(have_rows('カラム')): ?>
							<?php while(have_rows('カラム')): the_row(); ?>
							<div class="footer_item footer_item-link">

								<a href="<?php the_sub_field('リンク'); ?>">
									<?php the_sub_field('項目'); ?>
								</a>
							</div>
							<?php endwhile;?>
							<?php endif;?>
						</div>


						<?php endwhile;?>
						<?php endif;?>


					</div>
				</div>

				<div class="footer_copy" style="background:url(<?php bloginfo('template_url'); ?>/images/common/footer.png) center center / cover no-repeat;">
					<ul class="footer_infoList">

						<li class="footer_infoItem"><a href="<?php the_sub_field('リンク'); ?>"<?php if(get_sub_field('別ウインドウ') == true){?> target="_blank"<?php } ?>><?php the_sub_field('項目'); ?></a></li>
					</ul>
					<ul class="sns_list">
						<li class="sns_item"><a href="<?php the_field('facebook_url', 13684); ?>" target="_blank"><i class="fa fa-facebook"></i></a></li>
						<li class="sns_item"><a href="<?php the_field('twitter_url', 13684); ?>" target="_blank"><i class="fa fa-twitter"></i></a></li>
						<li class="sns_item"><a href="<?php the_field('youtube_url', 13684); ?>" target="_blank"><i class="fa fa-youtube-play"></i></a></li>
						<li class="sns_item"><a href="<?php the_field('instagram_url', 13684); ?>" target="_blank"><i class="fa fa-instagram"></i></a></li>
					</ul>
					<ul class="footer_list_bottom flex">
						<div class="footer_list">
							<div class="footer_item footer_item-title"><a href="/research/">青山学院大学について</a></div>
							<div class="footer_item footer_item-en"><a href="/research/">ABOUT AGU</a></div>
						</div>

						<div class="footer_list">
							<div class="footer_item footer_item-title"><a href="/research/">学部・大学院</a></div>
							<div class="footer_item footer_item-en"><a href="/research/">EDUCATION</a></div>
						</div>

						<div class="footer_list">
							<div class="footer_item footer_item-title"><a href="/research/">学生生活</a></div>
							<div class="footer_item footer_item-en"><a href="/research/">CAMPUS LIFE</a></div>
						</div>

						<div class="footer_list">
							<div class="footer_item footer_item-title"><a href="/research/">研究・産学連携</a></div>
							<div class="footer_item footer_item-en"><a href="/research/">RESEARCH</a></div>
						</div>

						<div class="footer_list">
							<div class="footer_item footer_item-title"><a href="/research/">国際交流・留学</a></div>
							<div class="footer_item footer_item-en"><a href="/research/">INTERNATIONAL</a></div>
						</div>

						<div class="footer_list">
							<div class="footer_item footer_item-title"><a href="/research/">入試・入学情報</a></div>
							<div class="footer_item footer_item-en"><a href="/research/">ADMISSIONS</a></div>
						</div>

						<div class="footer_list">
							<div class="footer_item footer_item-title"><a href="/research/">就職・キャリア</a></div>
							<div class="footer_item footer_item-en"><a href="/research/">CAREER</a></div>
						</div>
					</ul>
					<div class="sp-field">
						<h5 class="footer_logo"><img src="<?php bloginfo('template_url'); ?>/images/common/footer_new_logo.svg" alt="青山学院大学" class="footer_logoImage lazy"></h5>
						<p class="footer_copyright">Copyright © AOYAMA GAKUIN UNIVERSITY<br>All Rights Reserved.</p>
					</div>
				</div>
			</div>
		</footer>
	</main>

	<!-- /フッター -->
	<?php wp_footer(); ?>
	<script src="<?php bloginfo('template_url'); ?>/js/jquery-3.2.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.lazyload/1.9.1/jquery.lazyload.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/top-combine.min.js"></script>

	<!-- 追加JS -->
	<script src="<?php bloginfo('template_url'); ?>/js/jquery.waslidemenu.js" defer></script>
	<script src="<?php bloginfo('template_url'); ?>/js/scroll-animation.min.js" defer></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js" defer></script>



	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css">


<script>


$(function(){
		$("img.lazy").lazyload();
    $('.kv_slider').slick({
				//lazyLoad: 'ondemand',
        accessibility: false,
        fade: true,
        autoplay: true,
        infinite: true,
        dots: true,
        arrows: true,
        autoplaySpeed: 3000,
        speed: 3000,
    });
  });

</script>
</body>

</html>
