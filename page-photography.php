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
	<div class="pricing-container">
		<div class="pricing-table">
			<div class="pricing-header">
				<h3 class="title">PHOTOGRAPHY</h3>
				<h3 class="price">$125</h3>
			</div>
			<ul>
				<li>One Camera</li>
				<li>One Location</li>
				<li>Two Hours</li>
				<li>Ten Edits</li>
				<li>Additional Locations - $30 per 100 miles</li>
				<li>Additional Hours - $20 per hour</li>
			</ul>
		</div>
	</div>

	<h2 class="section-header">Example Work:</h2>
	<div class="image-gallery">
		<?php
			$args = [
				'post_type' => 'photography_image'
			];

			$the_query = new WP_Query( $args );

			if ( $the_query->have_posts() ) {
				while ( $the_query->have_posts() ) {
					$the_query->the_post();
					echo '<a href="' . get_field( 'photo' ) . '" data-lightbox="photography" >';
					echo '<img src=' . get_field( 'photo' ) . ' />';
					echo '</a>';
				}
			}
		?>
	</div>

</div>

<?php wp_reset_postdata(); ?>


<?php get_footer(); ?>