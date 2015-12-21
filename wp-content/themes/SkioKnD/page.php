<?php get_header(); ?>

     
      <div class="row marketing">
        <div class="col-lg-6">
          <?php if (have_posts()) : while (have_posts()) : the_post; ?>            
            <div class="page-header">
              <h1><?php the_title(); ?></h1>
            </div>
            <?php the_content(); ?>

          <?php endwhile; else: ?>
            <div class="page-header">
              <h1>Error!</h1>
            </div>
            <p>No content available</p>

          <?php endif; ?>
        </div>

        <div class="col-lg-6">
          <h4>Subheading</h4>
          <p>Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum.</p>

          <h4>Subheading</h4>
          <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Cras mattis consectetur purus sit amet fermentum.</p>

          <h4>Subheading</h4>
          <p>Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
        </div>
      </div>

<?php get_footer(); ?>  