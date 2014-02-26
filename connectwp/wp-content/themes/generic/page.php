<?php get_header(); ?>
	
<?php if(is_active_sidebar('Top')){ ?>
	<section id="top">
		<?php dynamic_sidebar('Top'); ?>
	</section>
<?php } ?>

<section id="content">

	<?php while ( have_posts() ) : the_post(); // Start the loop ?>
		<?php the_content(); ?>
	<?php endwhile; // End the loop ?>

</section>
	
<?php get_footer(); ?>