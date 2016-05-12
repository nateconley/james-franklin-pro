<?php get_header(); ?>

<?php the_post(); ?>

<div class="container">
	<div class="page-info">
		<h2><?php the_title(); ?></h2>
		<p><?php the_content(); ?></p>
	</div>


</div>



<?php get_footer(); ?>