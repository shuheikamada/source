<?php if(get_field('重要ニュース2表示設定')): ?>

</style>
	<?php $args = array(
		'post_type' => 'information',
		'paged' => $paged
	); ?>
	<?php $the_query = get_posts( $args );
	if($the_query) : ?>
			<!-- admissionbox -->
			<section class="section">
				<div class="section_inner section_inner-wide">
					<div class="admissionbox" data-scroll="once">
						<div class="admissionbox_title">
	<?php
	$get_page_id = get_page_by_path('home');
	$page_id = $get_page_id->ID;
	?>
							<p class="admissionbox_title-en"><?php the_field('重要ニュース2見出し_英'); ?></p>
							<p class="admissionbox_title-ja"><?php the_field('重要ニュース2見出し_日'); ?></p>
						</div>
	<?php
	foreach ( $the_query as $post ) : setup_postdata( $post ); ?>
						<div class="admissionbox_table">
							<ul class="table_list">
								<li class="table_item">
									<ul class="contents_list">
									<?php while ( have_rows('入試情報') ) : the_row(); //値のループ ?>
										<li class="contents_item">

											<div class="th"><h5>IMPORTANT</h5><?php the_sub_field('タイトル'); ?></div>
											<div class="td">
											<?php while ( have_rows('項目') ) : the_row(); //値のループ ?>
											<?php if(get_sub_field('リンク先')) : ?>
												<a href="<?php the_sub_field('リンク先'); ?>"<?php if(get_sub_field('別ウインドウ') == true){?> target="_blank"<?php } ?>><?php the_sub_field('テキスト'); ?></a>
												<?php else : ?>
												<?php the_sub_field('テキスト'); ?><br><br>
												<?php endif; ?>
												<?php endwhile; ?>
											</div>

										</li>
										<?php endwhile; ?>
									</ul>
								</li>
							</ul>
						</div>
	<?php endforeach; ?>
					</div>
				</div>

				<a href="<?php the_field('admission_url','33748'); ?>" class="exam-link-btn">
					<?php the_field('admission_text','33748'); ?>
				</a>

			</section>
			<!-- / admissionbox -->
	<?php else : ?>
	<?php endif;
	wp_reset_postdata(); ?>
<?php endif; ?>
