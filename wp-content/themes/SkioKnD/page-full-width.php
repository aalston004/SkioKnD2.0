<?php
/**
 * Template Name: Page Full Width
 * The template for displaying pages that are full width.
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Skio_KnD
 */

get_header(); ?>

			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	          <div class="page-title">
	            <h1><?php the_title(); ?></h1>
	          </div>

		<div class="row marketing">
	        <div class="col-lg-12">
	          	<?php the_content(); ?>

	        	<?php endwhile; else: ?>
	          
	          <div class="page-header">
	            <h1>Error</h1>
	          </div>

	          <p>No content available</p>

	        <?php endif; ?>
		</div><!-- was #main -->
	</div><!-- was #primary -->

<?php get_footer(); ?>
