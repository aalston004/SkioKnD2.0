<?php get_header(); ?>

      <div class="jumbotron">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>        
          <?php the_content(); ?>
        <?php endwhile; endif; ?>
      </div>

      <div class="row marketing">
        <div class="col-lg-6">
          <?php if (dynamic_sidebar('front-left')); ?>
        </div>

        <div class="col-lg-6">
          <?php if (dynamic_sidebar('front-right')); ?>
        </div>
      </div>

<?php get_footer(); ?>  