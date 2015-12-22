<?php
/**
 * Template Name: Test Full Width Temp (bs)
 * The template for displaying pages that are full width.
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Skio_KnD
 */

get_header(); ?>

      <div class="jumbotron">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>        
          <?php the_content(); ?>
        <?php endwhile; endif; ?>
      </div>

      <div class="row marketing">
        <div class="col-lg-12">
          <?php if (dynamic_sidebar('front-left')); ?>
        </div>
      </div>

<?php get_footer(); ?>  