<?php get_header(); ?>

<section id="left">
	<ul id="small_menu">
		<?php 
		$current_id = get_the_ID();
		global $post;
		$myposts = get_posts(array('posts_per_page' => 1000, 'category' => 3, 'orderby' => 'post_date', 'order' => 'ASC'));
		foreach($myposts as $post){
			setup_postdata($post);
			$this_id = get_the_ID();
			$class = '';
			if($this_id == $current_id){
				$class = 'active';
			}
			$thumb = get_the_post_thumbnail();
			if($thumb){ ?>
				<li>
					<a href="<?php echo get_permalink(); ?>" class="<?php echo $class ?>">
						<?php the_post_thumbnail('mini'); ?> <span><?php the_title(); ?></span>
					</a>
				</li>
			<?php }
		}
		wp_reset_postdata(); ?>
	</ul>
</section>

<section id="content">
	<?php while ( have_posts() ) : the_post(); ?>
		<h2><?php the_title(); ?></h2>
		<?php the_content(); ?>
	<?php endwhile; ?>
</section>

<?php get_footer(); ?>  