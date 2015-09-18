<?php 

/*
 * Template name: About
 */

get_header(); 

$page_header = get_field('page_header'); 

if ( $page_header ) : ?>

<div class="page_header">
	<?php echo get_field('page_header'); ?>
</div>

<?php endif; ?>


<div class="content-wrapper">

<?php if ( have_posts() ) : while ( have_posts() ) : the_post();

the_content();

endwhile; endif;

get_footer(); 

?>