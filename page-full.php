<?php

/*
	Template Name: Full Page, No Sidebar
*/

get_header();  ?>

<!-- <div class="main">
  <div class="container">


    <?php // Start the loop ?>
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

      <h2><?php the_title(); ?></h2>
      <?php the_content(); ?>

    <?php endwhile; // end the loop?>
  </div> <!-- /.container -->
<!-- </div>  --><!-- /.main --> 

    <section class='about'>
      <h2><?php the_field('headline'); ?></h2>
      <p> the_field('about_us'); </p>
    </section> <!-- /about -->

<!-- FEATURED PRODUCTS SECTION -->

<section class='featured'>
	<div class="container">
		<div class="left">
			<img src="  " alt="">
		</div>
		<div class="right">
			<img src="  " alt="">
		</div>
		
	</div>
</section>

<?php get_footer(); ?>