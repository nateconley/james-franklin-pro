<?php get_header(); ?>

<?php the_post(); ?>

<div class="page-info">
	<div class="inner-page-info">
		<h1><?php the_title(); ?></h1>
		<?php the_content(); ?>
	</div>
</div>

	<div class="call-to-action">
		<h4 class="btn">CONTACT ME</h4>
	</div>

<div class="contact-modal">
	<div class="contact-info">
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


	<h2 class="section-header">Example Work:</h2>

	<?php
		$args = [
			'post_type' => 'youtube_video',
			'category_name' => 'acting'
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