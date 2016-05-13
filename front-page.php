<?php get_header(); ?>

<?php the_post(); ?>

	<img class="hero-image" src="
	<?php 
		$hero_image = get_field('hero_image');
		echo $hero_image['url'];
	?>
	" />

<div class="container">

	<div class="front-page-info">
		<h1><?php echo bloginfo('title'); ?></h1>
		<h2><?php echo bloginfo('description'); ?></h2>
	</div>
	<hr>

	<div class="front-page-iframe iframe-wrapper">
		<h4 class="video-title">Watch the introduction here:</h4>
		<?php echo get_field('youtube_link'); ?>
	</div>

</div>

<?php get_footer(); ?>