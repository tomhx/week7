<footer>
  <div class="ftop">

  	<div class="weare pink">

  		<img src="<?php the_field('logo'); ?>">	

  		<p><?php the_field('motto'); ?></p>

  	</div>

  	<div class="subscribe pink ">
  		<?php es_subbox( $namefield = "YES", $desc = "", $group = "" ); ?>
  	</div>
  	<div class="instagram pink">
  		<p><?php the_field('company_address'); ?></p>
  	</div>

  </div>
  <div class="fbottom">
  	<div class="created">
  		<p>Created & designed by <a href="http://www.tomhaxell.com">Tom Haxell</a> and <a href="http://.tiffanydanielle.ca">Tiffany Nogueira</a></p>
  	</div>
  	<div class="socialicons">
  		<a href="<?php the_field('twitter_url'); ?>"><i class="fa fa-twitter-square"></i></a>
  		<a href=" <?php the_field('facebook_url'); ?>"><i class="fa fa-facebook-square"></i></a>
  		<a href=" <?php the_field('instagram_url'); ?>"><i class="fa fa-instagram"></i></a>
  	</div>
  </div>


</footer>

<script>
/* Google Analytics! */
 var _gaq=[["_setAccount","UA-XXXXX-X"],["_trackPageview"]]; // Change UA-XXXXX-X to be your site's ID
 (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
 g.src=("https:"==location.protocol?"//ssl":"//www")+".google-analytics.com/ga.js";
 s.parentNode.insertBefore(g,s)}(document,"script"));
</script>

<?php wp_footer(); ?>
</body>
</html>