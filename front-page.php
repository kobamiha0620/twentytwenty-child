<?php get_header(); ?>

<main id="front" class="front">



	<?php if( get_field('img_fv') ): ?>
		<img src="<?php the_field('img_fv'); ?>" alt="トップ画像">
	<?php endif; ?>

	<!-- <div class="front__fvbottom">
			<div id="particles-js"></div>
		</div> -->

	

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
