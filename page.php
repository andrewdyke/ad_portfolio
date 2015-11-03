<?php get_header();  ?>

<div class="main">
  <div class="container">

    <div class="content">

    <h1>SOMETING</h1>
      <?php // Start the loop ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <h2><?php the_title(); ?></h2>
        <?php the_content(); ?>

      <?php endwhile; // end the loop?>

      <h2>Featured Work</h2>

      <?php $portfolioQuery = new WP_Query(
        array(
          'post_type'=>'portfolio',
          'cat'=>3,
          'orderby'=>'RAND'
          )
      ); ?>

      <?php if ($portfolioQuery->have_posts()): ?>
        <?php while($portfolioQuery->have_posts()): $portfolioQuery->the_post(); ?>
        <!-- Stuff Goes Here -->
          <div class="featured">
            <h3><?php the_title(); ?></h3>
            <?php the_post_thumbnail('medium'); ?>
            <p><?php the_field('short_description'); ?></p>
          </div>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
      <?php endif; ?>

    </div> <!-- /.content -->

    <?php get_sidebar(); ?>

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>