<?php get_header();  ?>

<div class="main">
  <div class="container">

    <div class="content">
<<<<<<< HEAD
      <p>This is the page page</p>

=======
>>>>>>> fbda1a155187c32175d9b0d2310a250a8904f65b
      <?php // Start the loop ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <h2><?php the_title(); ?></h2>
        <?php the_content(); ?>

      <?php endwhile; // end the loop?>
    </div> <!-- /,content -->

    <?php get_sidebar(); ?>

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>