<?php get_header(); ?>

<?php if(is_active_sidebar('Left')){ ?>
	<section id="left">
		<?php dynamic_sidebar('Left'); ?>
	</section>
<?php } ?>

<section id="content">
	<?php while ( have_posts() ) : the_post(); // Start the loop ?>
		<h2><?php the_title(); ?></h2>
		<?php the_content(); ?>
	<?php endwhile; // End the loop ?>
</section>

<?php get_footer(); ?>  