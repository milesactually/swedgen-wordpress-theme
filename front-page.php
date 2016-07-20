<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Swedgen
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div id="landing-1" class="landing-section" role="complementary">
			    <div class="widget-area">
			        <?php dynamic_sidebar( 'landing-1' ); ?>
			    </div><!-- .widget-area -->
			</div><!-- #landing-1 -->
			<div id="landing-2" class="landing-section" role="complementary">
			    <div class="widget-area">
			        <?php dynamic_sidebar( 'landing-2' ); ?>
			    </div><!-- .widget-area -->
			</div><!-- #landing-2 -->
			<div id="landing-3" class="landing-section" role="complementary">
			    <div class="widget-area">
			        <?php dynamic_sidebar( 'landing-3' ); ?>
			    </div><!-- .widget-area -->
			</div><!-- #landing-3 -->
			<div id="landing-4" class="landing-section" role="complementary">
			    <div class="widget-area">
			        <?php dynamic_sidebar( 'landing-4' ); ?>
			    </div><!-- .widget-area -->
			</div><!-- #landing-4 -->
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
//get_sidebar();
get_footer();
