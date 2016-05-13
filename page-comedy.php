<?php get_header(); ?>

<?php the_post(); ?>

<div class="page-info">
	<div class="inner-page-info">
		<h1><?php the_title(); ?></h1>
		<?php the_content(); ?>
	</div>
</div>

<div class="container">


	<h2 class="section-header">Example Work:</h2>

	<?php
		$args = [
			'post_type' => 'youtube_video',
			'category_name' => 'comedy'
		];

		$the_query = new WP_Query( $args );

		if ( $the_query->have_posts() ) {
			while ( $the_query->have_posts() ) {
				$the_query->the_post();
				echo '<h4 class="video-title">';
				echo get_the_title();
				echo '</h4>';
				echo '<div class="iframe-wrapper">';
				echo get_field('youtube_link');
				echo '</div>';
			}
		}

	?>




</div>



<?php get_footer(); ?>