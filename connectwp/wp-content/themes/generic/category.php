<?php get_header(); ?>

<?php if(is_active_sidebar('Left')){ ?>
	<section id="left">
		<?php dynamic_sidebar('Left'); ?>
	</section>
<?php } ?>

<section id="content">
	<h2><?php single_cat_title(); ?></h2>
	<?php 
	while ( have_posts()) : the_post(); // Start the loop ?>
		<article>
			<h3><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h3>
			<span class="date"><?php the_time('l, F jS, Y') ?></span>
			<?php 
			$thumb = get_the_post_thumbnail($post_id);
			if($thumb){ ?>
				<div class="thumb"><?php the_post_thumbnail('thumbnail');?></div>
			<?php } ?>
			<?php the_excerpt(); ?>
			<a href="<?php echo get_permalink(); ?>" class="read-more">Read more</a>
		</article>
	<?php endwhile; // End the loop ?>
	<?php connect_pagination('',2,1,'Next &raquo;','&laquo; Previous'); ?>
</section>

<?php get_footer(); ?>  