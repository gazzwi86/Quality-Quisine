<?php get_header(); ?>

<section id="content">
	<?php while ( have_posts() ) : the_post(); ?>
		<?php the_content(); ?>
	<?php endwhile; ?>

	<ul id="menu_options">
		<?php global $post;
		$myposts = get_posts(array('posts_per_page' => 1000, 'category' => 3, 'orderby' => 'post_date', 'order' => 'ASC'));
		foreach($myposts as $post){
			setup_postdata($post);
			$thumb = get_the_post_thumbnail();
			if($thumb){ ?>
				<li>
					<a href="<?php echo get_permalink(); ?>">
						<?php the_post_thumbnail(); ?>
						<h4><?php the_title(); ?></h4>
					</a>
				</li>
			<?php }
		}
		wp_reset_postdata(); ?>
	</ul>
</section>

<?php get_footer(); ?>  