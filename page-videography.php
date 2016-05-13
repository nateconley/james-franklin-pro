<?php get_header(); ?>

<?php the_post(); ?>


<div class="page-info">
	<div class="inner-page-info">
		<h1><?php the_title(); ?></h1>
		<?php the_content(); ?>
	</div>
</div>

<div class="container">

	<h2 class="section-header">Pricing:</h2>
	 
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



<?php get_footer(); ?>