<?php get_header(); ?>


	<section class="s page_bunner" style="background-image: url(<?php the_field('bunner_background'); ?>;">
		<div class="c_container">
			<div class="page_bunner_wrap">
				<div class="page_bunner_wrap_logo">
					<a href="" class="page_bunner_wrap_link">
						<img src="<?php echo esc_url( get_theme_mod( 'f5_bunner_logo' ) ); ?>" alt="Logo bunner">
					</a>
				</div>
				<div class="page_bunner_wrap_title">
					<?php echo get_theme_mod( 'f5_bunner_header' ); ?>
				</div>
				<div class="page_bunner_wrap_desc">
					<p>
						<?php echo get_theme_mod( 'f5_bunner_text' ); ?>
					</p>
				</div>
			</div>
		</div>
	</section>
	<section class="s page_surtified">
		<?php echo get_post_meta('Proudly','title')?>
		<div class="c_container">
			<div class="page_surtified_wrap">
				<h3 class="page_surtified_wrap_head">
					<?php the_field('proudly_heading'); ?>
				</h3>
				
				<a href="javascript: void(0)" class="btn_l_m">Learn More</a>
				<h4 class="page_surtified_wrap_h4">
					<?php the_field('proudly_subhead'); ?>
				</h4>
				<div class="page_surtified_wrap_desc">
					<?php the_field('proudly_tet'); ?>
				</div>
			</div>
		</div>
	</section>
	<section class="s page_chooseus" id="chooseus">
		<div class="c_container">
			<h2 class="c_container_heading">
				why choose us?
			</h2>
			<div class="page_chooseus_wrap">
				<p class="page_chooseus_wrap_desc">
					<?php the_field('choose_subtitle'); ?>
				</p>
				<ul class="df_aic_jcsb page_chooseus_wrap_items">
					<?php foreach( getChoose_us() as $posts ) : ?>
						<li class="page_chooseus_wrap_item">
							<div class="page_chooseus_wrap_head df_aic">
								<img src="<?php echo get_the_post_thumbnail_url( $posts->ID); ?>">
								<span><?php echo $posts->post_title; ?></span>
							</div>
							<p class="page_chooseus_wrap_item_desc">
								<?php echo $posts->post_content; ?>
							</p>
						</li>
						<?php endforeach; ?>
					</ul>   
		</div>
		</div>
	</section>
	<section class="s page_LD" id="differance">
		<div class="c_container">
			<h2 class="c_container_heading black">
				the l-d difference
			</h2>
			<ul class="page_LD_list">
				<?php foreach( getLD() as $review ): ?>
								<li class="c_LD_item page_LD_list_item">
									<h3 class="c_LD_item_h3 page_LD_list_h3">
										<span><?php echo $review['heading'] ?></span>
									</h3>
									<div class="c_LD_item_content page_LD_list_content">
										<div class="c_LD_item_content_desc page_LD_list_desc">
											<p>
												<?php echo $review['content'] ?>
											</p>
										</div>
										<div class="c_LD_item_content_img page_LD_list_img">
											<img src="<?php echo $review['imgof_post'] ?>">
										</div>
									</div>
								</li>
				 <?php endforeach; ?>
			</ul>
		</div>
	</section>
	<section class="s page_review" id="reviews">
		<div class="c_container">
			<h2 class="c_container_heading" id="review">
				our clients review
			</h2>
			<div class="page_review_wrap">
				<div class="page_review_wrap_slide">
					<ul class="owl-carousel slider page_review_wrap_items">
						<?php foreach( getReview() as $posts ): ?>
							<li class="page_review_wrap_item">
								<div class="page_review_wrap_item_wrap">
									<h3 class="page_review_wrap_name">
										<span><?php echo $posts->post_title; ?></span>
									</h3>
									<div class="page_review_wrap_comment">
										<p>
										<?php echo $posts->post_content; ?>
										</p>
								</div>
							</div>
						</li>
						<?php endforeach; ?>
					</ul>
				</div>
			</div>
		</div>
	</section>
	<section class="s page_lean" id="Lean">
		<div class="c_container">
			<h2 class="c_container_heading black" id="lean">
				LEAN SUPPLY CHAIN = HIGHER PROFITS
			</h2>
			<div class="page_lean_wrap">
				 <?php foreach( getLean() as $posts ): ?>
							<div class="page_lean_wrap_item">
								<div class="page_lean_wrap_img">
									<img src="<?php echo get_the_post_thumbnail_url( $posts->ID); ?>">
								</div>
								<div class="page_lean_wrap_heeading">
									<h3>
										<?php echo $posts->post_title; ?>
									</h3>
								</div>
								<div class="page_lean_wrap_desc">
									<p>
										<?php echo $posts->post_content; ?>
									</p>
								</div>
							</div>
						<?php endforeach; ?>
			</div>
		</div>
	</section>
	<section class="s page_started" id="quote">
		<div class="c_container">
			<h2 class="c_container_heading black">
				ready to get started?
			</h2>
			<div class="c_started page_started_wrap">
				<div class="c_started_heading page_started_wrap_head">
					<p>
						<?php the_field('get_started_content') ?>       
					</p>
				</div>
				<?php echo do_shortcode('[contact-form-7 id="110" title="Контактная форма 1"]') ?>
			</div>
		</div>
	</section>

<?php get_footer(); ?>