<?php get_header(); ?>

<main id="front" class="front">


	<?php if( !get_field('img_fv02') ): ?>
	<img src="<?php the_field('img_fv'); ?>" alt="トップ画像">
	<?php else: ?>
	<!-- Slider main container -->
	<div class="topSwiper">
		<!-- Additional required wrapper -->
		<div class="swiper-wrapper">
			<!-- １枚目の画像があるかどうかの表示 -->
			<?php if( get_field('img_fv') ): ?>

			<?php if( get_field('img_fv-sp') && get_field('img_link01')): ?>
			<!-- ①画像とSP画像とリンク -->
			<div class="swiper-slide">
				<a href="<?php the_field('img_link01'); ?>">
					<picture>
						<source srcset="<?php the_field('img_fv-sp'); ?>" media="(max-width: 768px)" type="image/png">
						<img src="<?php the_field('img_fv'); ?>" alt="①画像とSP画像とリンク">
					</picture>
				</a>
			</div>
			<?php elseif( get_field('img_fv-sp') && !get_field('img_link01')): ?>
			<!-- ②画像とSP画像 -->
			<div class="swiper-slide">
				<picture>
					<source srcset="<?php the_field('img_fv-sp'); ?>" media="(max-width: 768px)" type="image/png">
					<img src="<?php the_field('img_fv'); ?>" alt="②画像とSP画像">
				</picture>
			</div>

			<?php elseif( !get_field('img_fv-sp') && get_field('img_link01')): ?>
			<!-- ③画像とリンク -->
			<div class="swiper-slide">
				<a href="<?php the_field('img_link01'); ?>">
					<img src="<?php the_field('img_fv'); ?>" alt="③画像とリンク ">
				</a>
			</div>

			<?php else: ?>
			<!-- ④画像のみ -->
			<div class="swiper-slide">
				<img src="<?php the_field('img_fv'); ?>" alt="④画像のみ">
			</div>
			<?php endif; ?>

			<?php endif; ?>
			<!-- 1枚目の画像終了 -->




			<!-- ２枚目の画像があるかどうかの表示 -->
			<?php if( get_field('img_fv02') ): ?>

			<?php if( get_field('img_fv02-sp') && get_field('img_link02')): ?>
			<!-- ①画像とSP画像とリンク -->
			<div class="swiper-slide">
				<a href="<?php the_field('img_link02'); ?>">
					<picture>
						<source srcset="<?php the_field('img_fv02-sp'); ?>" media="(max-width: 768px)" type="image/png">
						<img src="<?php the_field('img_fv02'); ?>" alt="①画像とSP画像とリンク">
					</picture>
				</a>
			</div>
			<?php elseif( get_field('img_fv02-sp') && !get_field('img_link02')): ?>
			<!-- ②画像とSP画像 -->
			<div class="swiper-slide">
				<picture>
					<source srcset="<?php the_field('img_fv02-sp'); ?>" media="(max-width: 768px)" type="image/png">
					<img src="<?php the_field('img_fv02'); ?>" alt="②画像とSP画像">
				</picture>
			</div>

			<?php elseif( !get_field('img_fv02-sp') && get_field('img_link02')): ?>
			<!-- ③画像とリンク -->
			<div class="swiper-slide">
				<a href="<?php the_field('img_link02'); ?>">
					<img src="<?php the_field('img_fv02'); ?>" alt="③画像とリンク ">
				</a>
			</div>

			<?php else: ?>
			<!-- ④画像のみ -->
			<div class="swiper-slide">
				<img src="<?php the_field('img_fv02'); ?>" alt="④画像のみ">
			</div>
			<?php endif; ?>

			<?php endif; ?>
			<!-- 2枚目の画像終了 -->



			<!-- 3枚目の画像があるかどうかの表示 -->
			<?php if( get_field('img_fv03') ): ?>

			<?php if( get_field('img_fv03-sp') && get_field('img_link03')): ?>
			<!-- ①画像とSP画像とリンク -->
			<div class="swiper-slide">
				<a href="<?php the_field('img_link03'); ?>">
					<picture>
						<source srcset="<?php the_field('img_fv03-sp'); ?>" media="(max-width: 768px)" type="image/png">
						<img src="<?php the_field('img_fv03'); ?>" alt="①画像とSP画像とリンク">
					</picture>
				</a>
			</div>
			<?php elseif( get_field('img_fv03-sp') && !get_field('img_link03')): ?>
			<!-- ②画像とSP画像 -->
			<div class="swiper-slide">
				<picture>
					<source srcset="<?php the_field('img_fv03-sp'); ?>" media="(max-width: 768px)" type="image/png">
					<img src="<?php the_field('img_fv03'); ?>" alt="②画像とSP画像">
				</picture>
			</div>

			<?php elseif( !get_field('img_fv03-sp') && get_field('img_link03')): ?>
			<!-- ③画像とリンク -->
			<div class="swiper-slide">
				<a href="<?php the_field('img_link03'); ?>">
					<img src="<?php the_field('img_fv03'); ?>" alt="③画像とリンク ">
				</a>
			</div>

			<?php else: ?>
			<!-- ④画像のみ -->
			<div class="swiper-slide">
				<img src="<?php the_field('img_fv03'); ?>" alt="④画像のみ">
			</div>
			<?php endif; ?>

			<?php endif; ?>
			<!-- 3枚目の画像終了 -->



			<!-- 4枚目の画像があるかどうかの表示 -->
			<?php if( get_field('img_fv04') ): ?>

			<?php if( get_field('img_fv04-sp') && get_field('img_link04')): ?>
			<!-- ①画像とSP画像とリンク -->
			<div class="swiper-slide">
				<a href="<?php the_field('img_link04'); ?>">
					<picture>
						<source srcset="<?php the_field('img_fv04-sp'); ?>" media="(max-width: 768px)" type="image/png">
						<img src="<?php the_field('img_fv04'); ?>" alt="①画像とSP画像とリンク">
					</picture>
				</a>
			</div>
			<?php elseif( get_field('img_fv04-sp') && !get_field('img_link04')): ?>
			<!-- ②画像とSP画像 -->
			<div class="swiper-slide">
				<picture>
					<source srcset="<?php the_field('img_fv04-sp'); ?>" media="(max-width: 768px)" type="image/png">
					<img src="<?php the_field('img_fv04'); ?>" alt="②画像とSP画像">
				</picture>
			</div>

			<?php elseif( !get_field('img_fv04-sp') && get_field('img_link04')): ?>
			<!-- ③画像とリンク -->
			<div class="swiper-slide">
				<a href="<?php the_field('img_link04'); ?>">
					<img src="<?php the_field('img_fv04'); ?>" alt="③画像とリンク ">
				</a>
			</div>

			<?php else: ?>
			<!-- ④画像のみ -->
			<div class="swiper-slide">
				<img src="<?php the_field('img_fv04'); ?>" alt="④画像のみ">
			</div>
			<?php endif; ?>

			<?php endif; ?>
			<!-- 4枚目の画像終了 -->

			<!-- 5枚目の画像があるかどうかの表示 -->
			<?php if( get_field('img_fv05') ): ?>

			<?php if( get_field('img_fv05-sp') && get_field('img_link05')): ?>
			<!-- ①画像とSP画像とリンク -->
			<div class="swiper-slide">
				<a href="<?php the_field('img_link05'); ?>">
					<picture>
						<source srcset="<?php the_field('img_fv05-sp'); ?>" media="(max-width: 768px)" type="image/png">
						<img src="<?php the_field('img_fv05'); ?>" alt="①画像とSP画像とリンク">
					</picture>
				</a>
			</div>
			<?php elseif( get_field('img_fv05-sp') && !get_field('img_link05')): ?>
			<!-- ②画像とSP画像 -->
			<div class="swiper-slide">
				<picture>
					<source srcset="<?php the_field('img_fv05-sp'); ?>" media="(max-width: 768px)" type="image/png">
					<img src="<?php the_field('img_fv05'); ?>" alt="②画像とSP画像">
				</picture>
			</div>

			<?php elseif( !get_field('img_fv05-sp') && get_field('img_link05')): ?>
			<!-- ③画像とリンク -->
			<div class="swiper-slide">
				<a href="<?php the_field('img_link05'); ?>">
					<img src="<?php the_field('img_fv05'); ?>" alt="③画像とリンク ">
				</a>
			</div>

			<?php else: ?>
			<!-- ④画像のみ -->
			<div class="swiper-slide">
				<img src="<?php the_field('img_fv05'); ?>" alt="④画像のみ">
			</div>
			<?php endif; ?>

			<?php endif; ?>
			<!-- 5枚目の画像終了 -->



			<!-- 6枚目の画像があるかどうかの表示 -->
			<?php if( get_field('img_fv06') ): ?>

			<?php if( get_field('img_fv06-sp') && get_field('img_link06')): ?>
			<!-- ①画像とSP画像とリンク -->
			<div class="swiper-slide">
				<a href="<?php the_field('img_link06'); ?>">
					<picture>
						<source srcset="<?php the_field('img_fv06-sp'); ?>" media="(max-width: 768px)" type="image/png">
						<img src="<?php the_field('img_fv06'); ?>" alt="①画像とSP画像とリンク">
					</picture>
				</a>
			</div>
			<?php elseif( get_field('img_fv06-sp') && !get_field('img_link06')): ?>
			<!-- ②画像とSP画像 -->
			<div class="swiper-slide">
				<picture>
					<source srcset="<?php the_field('img_fv06-sp'); ?>" media="(max-width: 768px)" type="image/png">
					<img src="<?php the_field('img_fv06'); ?>" alt="②画像とSP画像">
				</picture>
			</div>

			<?php elseif( !get_field('img_fv06-sp') && get_field('img_link06')): ?>
			<!-- ③画像とリンク -->
			<div class="swiper-slide">
				<a href="<?php the_field('img_link06'); ?>">
					<img src="<?php the_field('img_fv06'); ?>" alt="③画像とリンク ">
				</a>
			</div>

			<?php else: ?>
			<!-- ④画像のみ -->
			<div class="swiper-slide">
				<img src="<?php the_field('img_fv06'); ?>" alt="④画像のみ">
			</div>
			<?php endif; ?>

			<?php endif; ?>
			<!-- 6枚目の画像終了 -->



			<!-- 7枚目の画像があるかどうかの表示 -->
			<?php if( get_field('img_fv07') ): ?>

			<?php if( get_field('img_fv07-sp') && get_field('img_link07')): ?>
			<!-- ①画像とSP画像とリンク -->
			<div class="swiper-slide">
				<a href="<?php the_field('img_link07'); ?>">
					<picture>
						<source srcset="<?php the_field('img_fv07-sp'); ?>" media="(max-width: 768px)" type="image/png">
						<img src="<?php the_field('img_fv07'); ?>" alt="①画像とSP画像とリンク">
					</picture>
				</a>
			</div>
			<?php elseif( get_field('img_fv07-sp') && !get_field('img_link07')): ?>
			<!-- ②画像とSP画像 -->
			<div class="swiper-slide">
				<picture>
					<source srcset="<?php the_field('img_fv07-sp'); ?>" media="(max-width: 768px)" type="image/png">
					<img src="<?php the_field('img_fv07'); ?>" alt="②画像とSP画像">
				</picture>
			</div>

			<?php elseif( !get_field('img_fv07-sp') && get_field('img_link07')): ?>
			<!-- ③画像とリンク -->
			<div class="swiper-slide">
				<a href="<?php the_field('img_link07'); ?>">
					<img src="<?php the_field('img_fv07'); ?>" alt="③画像とリンク ">
				</a>
			</div>

			<?php else: ?>
			<!-- ④画像のみ -->
			<div class="swiper-slide">
				<img src="<?php the_field('img_fv07'); ?>" alt="④画像のみ">
			</div>
			<?php endif; ?>

			<?php endif; ?>
			<!-- 7枚目の画像終了 -->



			<!-- 8枚目の画像があるかどうかの表示 -->
			<?php if( get_field('img_fv08') ): ?>

			<?php if( get_field('img_fv08-sp') && get_field('img_link08')): ?>
			<!-- ①画像とSP画像とリンク -->
			<div class="swiper-slide">
				<a href="<?php the_field('img_link08'); ?>">
					<picture>
						<source srcset="<?php the_field('img_fv08-sp'); ?>" media="(max-width: 768px)" type="image/png">
						<img src="<?php the_field('img_fv08'); ?>" alt="①画像とSP画像とリンク">
					</picture>
				</a>
			</div>
			<?php elseif( get_field('img_fv08-sp') && !get_field('img_link08')): ?>
			<!-- ②画像とSP画像 -->
			<div class="swiper-slide">
				<picture>
					<source srcset="<?php the_field('img_fv08-sp'); ?>" media="(max-width: 768px)" type="image/png">
					<img src="<?php the_field('img_fv08'); ?>" alt="②画像とSP画像">
				</picture>
			</div>

			<?php elseif( !get_field('img_fv08-sp') && get_field('img_link08')): ?>
			<!-- ③画像とリンク -->
			<div class="swiper-slide">
				<a href="<?php the_field('img_link08'); ?>">
					<img src="<?php the_field('img_fv08'); ?>" alt="③画像とリンク ">
				</a>
			</div>

			<?php else: ?>
			<!-- ④画像のみ -->
			<div class="swiper-slide">
				<img src="<?php the_field('img_fv08'); ?>" alt="④画像のみ">
			</div>
			<?php endif; ?>

			<?php endif; ?>
			<!-- 8枚目の画像終了 -->





		</div>
		<!-- If we need pagination -->
		<!-- <div class="swiper-pagination"></div> -->

		<!-- If we need navigation buttons -->
		<div class="swiper-button-prev"></div>
		<div class="swiper-button-next"></div>

	</div>
	<?php endif; ?>

	</div>
	<!-- topSwiper -->



	<?php get_template_part( 'template-parts/front-bnr' ); ?>

	<?php get_template_part( 'template-parts/front-news' ); ?>

	<?php get_template_part( 'template-parts/front-schedule' ); ?>

	<?php get_template_part( 'template-parts/front-youtube' ); ?>

	<?php get_template_part( 'template-parts/front-twitter' ); ?>

</main><!-- #site-content -->


<?php #get_template_part( 'template-parts/footer-menus-widgets' ); ?>

<script src="http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
<!--自作のJS-->
<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/flower.js"></script>



<?php
get_footer();