<?php get_header(); ?>

<?php the_post(); ?>


	<img class="hero-image" src="
	<?php 
		$hero_image = get_field('hero_image');
		echo $hero_image['url'];
	?>
	" />

<div class="container">

	<div class="front-page-iframe iframe-wrapper">
		<?php echo get_field('youtube_link'); ?>
	</div>

</div>

<?php get_footer(); ?>