<?php  

/*
  Template Name: Home Page
*/

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php  wp_title('|', true, 'right'); ?></title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

  <!-- fonts -->
  <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700|Quattrocento+Sans:400,700' rel='stylesheet' type='text/css'>
  <?php // Load our CSS ?>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

<!--   //loads all of the css and javascript from plug ins and stuff -->
  <?php wp_head(); ?>

  <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
</head>


<body <?php body_class(); ?>>

  <header class="header">
    <header class="main">
      <div class="container topnav">
        <div class="logo"> 
          <img src="<?php the_field('logo');?>">
        </div>
        <h1>
          <a href="<?php echo home_url( '/' ); ?>" title="<?php bloginfo( 'name', 'display' ); ?>" rel="home">
            <?php bloginfo( 'name' ); ?>
          </a>
        </h1>
        
        <nav class="main">
          <ul>
            <?php wp_nav_menu( array(
              'container' => false,
              'theme_locations' => 'primary'
            )); ?>
          </ul>
        </nav>
      </div> <!-- container --> 
    </header><!--/main-->

    <header class="hero">
      <div class="feature">
        <div class="inside">
        </div> <!-- /inside -->
        <div class="outside">
          <h2><?php the_field('headline'); ?></h2>
        </div>
      </div> <!-- /feature -->
    </header> <!-- /hero -->
  </header> <!-- /header -->  
  

<!-- ABOUT SECTION -->
  <section class='about'>
    <div class="about">
      <h2><?php the_field('section_head'); ?> </h2>
      <p><?php the_field('about_us'); ?></p>
    </div>
  </section> <!-- /about -->


<!-- FEATURED PRODUCT SECTION -->
  <section class="featured">
    <div class="container clearfix">
      <h2>Featured Products</h2>  
      <div class="photo left">
          <img src="<?php the_field('featured_product1'); ?>">
      </div> <!-- /left -->
      <div class="photo right">
          <img src="<?php the_field('featured_product2'); ?>">
      </div> <!-- /left -->


      <div class="photo left">
          <img src="<?php the_field('featured_product3'); ?>">
      </div> <!-- /left -->
      <div class="photo right">
          <img src="<?php the_field('featured_product4'); ?>">
      </div> <!-- /left -->
    </div> <!-- /container -->
  </section> <!-- /featured -->


<?php get_footer(); ?>








