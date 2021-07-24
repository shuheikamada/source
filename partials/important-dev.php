<?php if(get_field('重要ニュース表示設定')): ?>
	<?php $args = array(
		'post_type' => 'top_important_news',
		'paged' => $paged
	); ?>
	<?php $the_query = get_posts( $args );
	if($the_query) : ?>

			<!-- Important News Start -->
			<section>
				<div class="section_inner section_inner-wide">
					<div class="admissionbox" data-scroll="once">
						<div class="admissionbox_title">
	<?php
	$get_page_id = get_page_by_path('home');
	$page_id = $get_page_id->ID;
	?>
							<p class="admissionbox_title-en"><?php the_field('重要ニュース見出し_英'); ?></p>
							<p class="admissionbox_title-ja"><?php the_field('重要ニュース見出し_日'); ?></p>
						</div>
	<?php
	foreach ( $the_query as $post ) : setup_postdata( $post ); ?>

						<div class="admissionbox_table">
							<ul class="table_list">
								<li class="table_item">
									<ul class="contents_list">

										<li class="contents_item">

											<div class="th"><h5><?php the_field('重要ニュースリスト見出し','33748'); ?></h5><p><?php the_field('タイトル'); ?></p></div>
											<div class="td">
												<div class="td-inner">
												<?php while ( have_rows('項目') ) : the_row(); //値のループ ?>
												<?php if(get_sub_field('リンク先')) : ?>
													<a href="<?php the_sub_field('リンク先'); ?>"<?php if(get_sub_field('別ウインドウ') == true){?> target="_blank"<?php } ?>><?php the_sub_field('テキスト'); ?></a>
													<?php else : ?>
													<?php the_sub_field('テキスト'); ?><br><br>
													<?php endif; ?>
													<?php endwhile; ?>
												</div>
											</div>

										</li>
									</ul>
								</li>
							</ul>
						</div>
	<?php endforeach; ?>
					</div>
				</div>
			</section>
			<!-- /  Important News End -->
		<?php else : ?>
	<?php endif;
	wp_reset_postdata(); ?>
<?php endif; ?>
