<?php get_header(); ?>
	
<section id="left">
	<p><img src="connectwp/wp-content/themes/generic/library/images/img5.png" width="250" height="250"></p>
	<p><img src="connectwp/wp-content/themes/generic/library/images/img15.png" width="250" height="250"></p>
	<p><img src="connectwp/wp-content/themes/generic/library/images/img33.png" width="250" height="250"></p>
	<p><img src="connectwp/wp-content/themes/generic/library/images/img25.png" width="250" height="250"></p>
	<p><img src="connectwp/wp-content/themes/generic/library/images/img29.png" width="250" height="250"></p>
	<p><img src="connectwp/wp-content/themes/generic/library/images/img39.png" width="250" height="250"></p>
	<p><img src="connectwp/wp-content/themes/generic/library/images/img26.png" width="250" height="250"></p>
</section>

<section id="content">

	<?php while ( have_posts() ) : the_post(); // Start the loop ?>
		<?php the_content(); ?>
	<?php endwhile; // End the loop ?>

	<ul id="testimonials">
		<?php global $post;
		$myposts = get_posts(array('posts_per_page' => 1000, 'category' => 4));
		foreach($myposts as $post){
			setup_postdata($post); ?>
			<li><?php the_content(); ?></li>
		<?php }
		wp_reset_postdata(); ?>
	</ul>

</section>
	
<?php get_footer(); ?>