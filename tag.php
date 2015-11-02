<?php get_header(); ?>

<div class="main">
  <div class="container">

    <div class="content">
      <h1>Tag Archives: <?php single_tag_title(); ?></h1>
<<<<<<< HEAD
      <p>Tag Archives page woo hoo</p>
=======
>>>>>>> fbda1a155187c32175d9b0d2310a250a8904f65b
      <?php get_template_part( 'loop', 'tag' ); ?>
    </div> <!-- /.content -->

    <?php get_sidebar(); ?>

  </div><!-- /.container -->
</div><!-- /.main -->

<?php get_footer(); ?>