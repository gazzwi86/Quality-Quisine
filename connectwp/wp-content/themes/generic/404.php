<?php get_header(); ?>

<?php if(is_active_sidebar('Left')){ ?>
	<section id="left">
		<?php dynamic_sidebar('Left'); ?>
	</section>
<?php } ?>

<section id="content">
	<h2>Page Not Found</h2>
	<p>Sorry, the page you requested could not be found.  Please check the address and try again.</p>
</section>

<?php get_footer(); ?>  