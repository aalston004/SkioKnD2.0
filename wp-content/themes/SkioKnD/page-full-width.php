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
		<div class="col-md-9">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<div class="page header">
					<h1><?php the_title(); ?></h1>
				</div>

				<?php the_content(); ?>
				<?php endwhile; else; ?>

				<div class="page header">
					<h1><?php the_title(); ?></h1>
				</div>

				<p>No content availible</p>

				<?php endif; ?>


		</div>
	</div>
</div>


<?php get_footer(); ?>
