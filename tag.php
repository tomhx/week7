<?php get_header(); ?>

<div class="main">
  <div class="container">

    <div class="content">
      <h1>Tag Archives: <?php single_tag_title(); ?></h1>
      <p>Tag Archives page woo hoo</p>
      <?php get_template_part( 'loop', 'tag' ); ?>
    </div> <!-- /.content -->

    <?php get_sidebar(); ?>

  </div><!-- /.container -->
</div><!-- /.main -->

<?php get_footer(); ?>