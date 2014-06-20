<?php
get_header(); ?>
	
	<div class="row two-thirds column">
	<?php
	while (have_posts()) : the_post();
		get_template_part('content', 'page');
	endwhile;
	?>
	</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>