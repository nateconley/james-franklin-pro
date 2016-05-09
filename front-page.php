<?php get_header(); ?>

<?php the_post(); ?>

<div class="hero-background">
	<img class="hero-image" src="
	<?php 
		$hero_image = get_field('hero_image');
		echo $hero_image['url'];
	?>
	" />
</div>

<div class="container">

	<h2><?php echo get_bloginfo( 'description' ); ?></h2>

	

	<div class="front-page-iframe iframe-wrapper">
		<?php echo get_field('youtube_link'); ?>
	</div>


</div>

<?php get_footer(); ?>