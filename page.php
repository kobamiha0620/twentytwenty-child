<?php
/**
 * The template for displaying single posts and pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();
?>

<main id="page" class="page">

	<!-- ニュースー一覧ページ -->
	<?php if (is_page('news')): ?>
	<?php get_template_part( 'template-parts/page-news' ); ?>

	<!-- メンバー一覧ページ -->
	<?php elseif(is_page('members')): ?>
		<?php get_template_part( 'template-parts/page-members' ); ?>

	<?php elseif(is_page('inquiery')): ?>
		<?php get_template_part( 'template-parts/page-inquiery' ); ?>

	<?php elseif(is_page('about')): ?>
	<?php get_template_part( 'template-parts/page-about' ); ?>

	<?php else: ?>
		<?php

		if ( have_posts() ) {

			while ( have_posts() ) {
				the_post();

				get_template_part( 'template-parts/content', get_post_type() );
			}
		}

		?>
	<?php endif; ?>

	



</main><!-- #site-content -->

<?php #get_template_part( 'template-parts/footer-menus-widgets' ); ?>

<?php get_footer(); ?>


