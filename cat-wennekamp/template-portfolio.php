<?php 

/*
 * Template name: Portfolio
 */

get_header(); 

$fashion_args = array( 'category_name' => 'Fashion', 'posts_per_page' => 9 );
$advertising_args = array( 'category_name' => 'Advertising', 'posts_per_page' => 9 );
$celebrity_args = array( 'category_name' => 'Celebrity', 'posts_per_page' => 9 );
// $video_args = array();

$fashion_portfolio = get_posts( $fashion_args );
$advertising_portfolio = get_posts( $advertising_args );
$celebrity_portfolio = get_posts( $celebrity_args );

?>


<div class="content-wrapper">

<ul class="fashion_portfolio">
	
<?php

if ( $fashion_portfolio ) :

	foreach ( $fashion_portfolio as $post ) : setup_postdata( $post );

		$featured_img = wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) );

?>

	<li>
		<?php if ( $featured_img ) : ?>
		<div class="square_img_wrap" style="background:url(<?php echo $featured_img; ?>) center center no-repeat; background-size:cover;">
			<div class="inner"></div>
		</div>
		<?php endif; ?>
	</li>

<?php 
	
	endforeach; 

endif;

?>

</ul>

<ul class="advertising_portfolio">

<?php

if ( $advertising_portfolio ) :

	foreach ( $advertising_portfolio as $post ) : setup_postdata( $post );

		$featured_img = wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) );

?>

	<li>
		<?php if ( $featured_img ) : ?>
		<div class="square_img_wrap" style="background:url(<?php echo $featured_img; ?>) center center no-repeat; background-size:cover;">
			<div class="inner"></div>
		</div>
		<?php endif; ?>
	</li>

<?php 
	
	endforeach; 

endif;

?>

</ul>

<ul class="celebrity_portfolio">
<?php 

if ( $celebrity_portfolio ) :

	foreach ( $celebrity_portfolio as $post ) : setup_postdata( $post );

		$featured_img = wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) );

?>

	<li>
		<?php if ( $featured_img ) : ?>
		<div class="square_img_wrap" style="background:url(<?php echo $featured_img; ?>) center center no-repeat; background-size:cover;">
			<div class="inner"></div>
		</div>
		<?php endif; ?>
	</li>

<?php 
	
	endforeach; 

endif;

?>
</ul>

<?php

get_footer(); 

?>