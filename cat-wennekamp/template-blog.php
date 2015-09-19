<?php 

/*
 * Template name: Blog
 */

get_header(); 

?>
<div class="banner_img">
	<div id="blogs_map"></div>
</div>

<div class="page_header">
	<ul class="blog_filter">
		<li>
			<button class="filter_button" id="no_filter">all</button>
		</li>
	<?php

	$categories = get_categories();
	$portfolio_cat = get_cat_ID('Portfolio');

	foreach ( $categories as $category ) :

		if ( $category->slug !== 'uncategorized' && $category->slug !== 'portfolio' && $category->category_parent != $portfolio_cat ) :
	?>
		<li>
			<button class="filter_button" data-target="<?php echo $category->slug; ?>"><?php echo $category->name; ?></button>
		</li>
	<?php 

		endif; 

	endforeach; 

	?>
	</ul>
</div>

<div class="content-wrapper">

<ul class="blog_grid">
<?php

$blog_args = array( 'posts_per_page' => -1 );
$posts = get_posts( $blog_args );

foreach ( $posts as $post ) : setup_postdata( $post );

	$post_categories = get_the_category();
	$featured_img = wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) );
	$location = get_field('project_location'); 
	$excerpt = get_field('post_excerpt');

	if (! in_category( array('Uncategorized') ) ) :
?>
<li class="post_thumbnail <?php foreach ( $post_categories as $category ) : echo $category->slug . ' '; endforeach; ?>">
	<a href="<?php the_permalink(); ?>">
		<?php if ( $featured_img ) : ?>
		<div class="square_img_wrap" style="background:url(<?php echo $featured_img; ?>) center center no-repeat; background-size:cover;">
			<div class="inner"></div>
		</div>
		<?php endif; ?>
		<p class="homepage-blog-title"><?php the_title(); ?></p>
		<p class="subheader">
			<span class="post_category"><?php echo $post_categories[0]->name; ?></span>
			<?php if ( $location ) : ?><span class="post_location"><?php echo $location; ?></span><?php endif; ?>
		</p>
		<p class="post_excerpt"><?php echo $excerpt; ?></p>
	</a>
</li>
<?php endif; endforeach; ?>
</ul>

<?php get_footer(); ?>