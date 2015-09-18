<?php 

get_header(); 

if ( have_posts() ) : 

	while ( have_posts() ) : the_post();

		$featured_img = wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) );

		if ( has_post_thumbnail() ) :

?>

<div class="banner_img" style="background:url(<?php echo $featured_img; ?>); background-size:cover;"></div>

<?php endif; ?>

<div class="post_wrapper">
	<div class="post_header">
		<h1><?php the_title(); ?></h1>
		<ul class="post_categories">
			<?php wp_list_categories('title_li='); ?>
		</ul>
	</div>
	<?php the_content(); ?>
</div>

<?php

	endwhile; 

endif;

get_footer();

?>