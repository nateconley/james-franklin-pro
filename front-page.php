<?php get_header(); ?>

<?php the_post(); ?>

	<img class="hero-image" src="
	<?php 
		$hero_image = get_field('hero_image');
		echo $hero_image['url'];
	?>
	" />


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

	<p><?php the_content(); ?></p>

	<div class="call-to-action">
		<h4 class="btn">CONTACT ME</h4>
	</div>

	<div class="front-page-iframe iframe-wrapper">
		<h4 class="video-title">Watch the introduction here:</h4>
		<?php echo get_field('youtube_link'); ?>
	</div>

</div>

<?php get_footer(); ?>