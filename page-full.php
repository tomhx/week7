<?php 

// Template Name: Page Full

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
  <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <header class="header">
    <header class="main">
      <div class="container topnav">
        <div class="logo"> <img src=" <?php wp_get_attachment_url('logo'); ?>" alt="our Logo"> </div>
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
          <?php get_template_part('loop', 'headline'); ?>
        </div> <!-- /inside -->
      </div> <!-- /feature -->
    </header> <!-- /hero -->
  </header> <!-- /header -->  
  
  <section class='about'>
  <div class="about">
  </div>
    <h2><?php the_field('section_head'); ?> </h2>
    <p><?php the_field('about_us'); ?></p>
  </section> <!-- /about -->
  <section class="featurePhotos">
    <div class="feature1"></div>
    <div class="feature2"></div>
    <div class="feature3"></div>
    <div class="feature4"></div>
  </section> <!-- /featurePhotos -->
<?php get_footer(); ?>