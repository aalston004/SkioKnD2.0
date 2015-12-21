<?php
/**
 * Template Name: Page Full Width
 * The template for displaying pages that are full width.
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Skio_KnD
 */

get_header(); ?>

	<div class="container">
		<div class="row">
			<div class ="col-md-12">
				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'template-parts/content', 'page-full-width' ); ?>

					<?php
						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;
					?>

				<?php endwhile; // End of the loop. ?>
			</div><!-- added for grid -->
		</div><!-- was #main -->
	</div><!-- was #primary -->

<?php get_footer(); ?>
