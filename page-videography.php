<?php get_header(); ?>

<?php the_post(); ?>

<div class="page-info">
	<div class="inner-page-info">
		<h1><?php the_title(); ?></h1>
		<?php the_content(); ?>
	</div>
</div>

<?php wp_reset_postdata(); ?>

<div class="container">

	<h2 class="section-header">Pricing:</h2>






	<div class="pricing-table">
		<div class="pricing-header">
			<h3 class="title">VIDEOGRAPHY</h3>
			<h3 class="price">$75 per hour</h3>
		</div>
		<ul>
			<li>$125 per hour editing</li>
		</ul>
	</div>



	<div class="pricing-table">
		<div class="pricing-header">
			<h3 class="title">WEDDINGS</h3>
			<h3 class="price">$900</h3>
		</div>
		<ul>
			<li>Two Cameras</li>
			<li>Eight Hours</li>
			<li>DVD Included</li>
			<li>Additional Camera Man - $75 per hour</li>
			<li>$100 Deposit to Save the Date</li>
		</ul>
	</div>




	<h2 class="section-header">Example Work:</h2>

	<?php
		$args = [
			'post_type' => 'youtube_video',
			'category_name' => 'videography'
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