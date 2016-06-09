<?php get_header(); ?>

<?php the_post(); ?>

<div class="page-info">
	<div class="inner-page-info">
		<h1><?php the_title(); ?></h1>
		<?php the_content(); ?>
	</div>
</div>

<?php wp_reset_postdata(); ?>

	<div class="call-to-action">
		<h4 class="btn">CONTACT ME</h4>
	</div>

<div class="contact-overlay close-contact"></div>
<div class="contact-modal">
	<ul>
		<li>
			<a href="mailto:jamesfranklinpro@gmail.com">
				<i class="fa fa-envelope"></i>
				<p>jamesfranklinpro@gmail.com</p>
			</a>
		</li>
		<li>
			<a href="tel:5594335779">
				<i class="fa fa-phone"></i>
				<p>559-433-5779</p>
			</a>
		</li>
		<li>
			<a href="" class="close-contact">close</a>
		</li>
	</ul>
</div>
</div>



<div class="container">

	<h2 class="section-header">Pricing:</h2>
	<div class="pricing-container">
		<div class="pricing-table">
			<div class="pricing-header">
				<h3 class="title">PHOTOGRAPHY</h3>
				<h3 class="price">$100</h3>
			</div>
			<ul>
				<li>One Camera</li>
				<li>One Location</li>
				<li>Two Hours</li>
				<li>Ten Edits</li>
				<li>Additional Locations - $25</li>
				<li>Additional Hours - $20 per hour</li>
				<li>Friends, Family, and Reference Discount - $25</li>
			</ul>
		</div>
	</div>

	<h2 class="section-header">Example Work:</h2>
	<div class="fotorama" data-nav="thumbs"
	data-width="100%" data-maxheight="100%">
		<?php
			$args = [
				'post_type' => 'photography_image'
			];

			$the_query = new WP_Query( $args );

			if ( $the_query->have_posts() ) {
				while ( $the_query->have_posts() ) {
					$the_query->the_post();
					echo '<img src="' . get_field( 'photo' ) . '">';
				}
			}
		?>
	</div>

</div>

<?php wp_reset_postdata(); ?>


<?php get_footer(); ?>