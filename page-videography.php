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





<div class="container">

	<h2 class="section-header">Pricing:</h2>
	<div class="pricing-container">

		<div class="pricing-table">
			<div class="pricing-header">
				<h3 class="title">EVENT HIGHLIGHT VIDEO*</h3>
				<h3 class="price">$650</h3>
			</div>
			<ul>
				<li>Wedding, Quinceañera, etc.</li>
				<li>One Camera</li>
				<li>Eight Hours</li>
				<li>4-10 minute highlight video depending on event and song selection</li>
				<li>$75/hour after initial eight</li>
				<li>USB Drive</li>
				<li>$100 Deposit to Save the Date</li>
				<li>Request a Photographer for Professional Pictures!</li>
				<li>Friends and Family Reference Discount - $50 off or one extra hour free</li>
				<li>*not a full coverage video</li>
			</ul>
		</div>
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

<?php wp_reset_postdata(); ?>

<?php get_footer(); ?>