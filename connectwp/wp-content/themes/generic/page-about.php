<?php get_header(); ?>
	
<section id="left">
	<p><img src="connectwp/wp-content/themes/generic/library/images/img21.png" width="250" height="250"></p>
	<p><img src="connectwp/wp-content/themes/generic/library/images/img19.png" width="250" height="250"></p>
	<p><img src="connectwp/wp-content/themes/generic/library/images/img11.png" width="250" height="250"></p>
</section>

<section id="content">

	<?php while ( have_posts() ) : the_post(); // Start the loop ?>
		<?php the_content(); ?>
	<?php endwhile; // End the loop ?>

	<ul id="testimonials">
		<?php global $post;
		$myposts = get_posts(array('posts_per_page' => 1000, 'category' => 5, 'orderby' => 'post_date', 'order' => 'ASC'));
		foreach($myposts as $post){
			setup_postdata($post); ?>
			<li><?php the_content(); ?></li>
		<?php }
		wp_reset_postdata(); ?>
	</ul>

</section>
	
<?php get_footer(); ?>