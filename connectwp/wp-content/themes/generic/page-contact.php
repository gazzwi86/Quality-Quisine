<?php get_header(); ?>
	
<section id="left">
	<p><img src="connectwp/wp-content/themes/generic/library/images/img25.png" width="250" height="250"></p>
	<p><img src="connectwp/wp-content/themes/generic/library/images/img18.png" width="250" height="250"></p>
</section>

<section id="content">

	<?php while ( have_posts() ) : the_post(); // Start the loop ?>
		<?php the_content(); ?>
	<?php endwhile; // End the loop ?>

</section>
	
<?php get_footer(); ?>