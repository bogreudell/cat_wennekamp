<?php 

get_header();

$module_1_header = get_field('module_1_header');
$module_1_subheader = get_field('module_1_subheader');
$module_1_thumbnail = get_field('module_1_thumbnail');
$module_1_url = get_field('module_1_url');
$module_1_thumbnail_url = $module_1_thumbnail['url'];
$module_1_thumbnail_title = $module_1_thumbnail['title'];

$module_2_header = get_field('module_2_header');
$module_2_subheader = get_field('module_2_subheader');
$module_2_thumbnail = get_field('module_2_thumbnail');
$module_2_url = get_field('module_2_url');
$module_2_thumbnail_url = $module_2_thumbnail['url'];
$module_2_thumbnail_title = $module_2_thumbnail['title'];

$module_3_header = get_field('module_3_header');
$module_3_subheader = get_field('module_3_subheader');
$module_3_thumbnail = get_field('module_3_thumbnail');
$module_3_url = get_field('module_3_url');
$module_3_thumbnail_url = $module_3_thumbnail['url'];
$module_3_thumbnail_title = $module_3_thumbnail['title'];

?>

<div class="content-wrapper">

<ul class="homepage-modules">
	<li>
		<?php if ( $module_1_url ) : ?><a href="<?php echo $module_1_url; ?>"><?php endif; ?>
			<p class="homepage-blog-title"><?php echo $module_1_header; ?></p>
			<p class="subheader"><?php echo $module_1_subheader; ?></p>
			<div class="square-img-wrap" style="background:url(<?php echo $module_1_thumbnail_url; ?>) center center no-repeat; background-size:cover;">
				<div class="inner"></div>
			</div>
		<?php if ( $module_1_url ) : ?></a><?php endif; ?>
	</li>
	<li>
		<?php if ( $module_2_url ) : ?><a href="<?php echo $module_2_url; ?>"><?php endif; ?>
			<p class="homepage-blog-title"><?php echo $module_2_header; ?></p>
			<p class="subheader"><?php echo $module_2_subheader; ?></p>
			<div class="square-img-wrap" style="background:url(<?php echo $module_2_thumbnail_url; ?>) center center no-repeat; background-size:cover;">
				<div class="inner"></div>
			</div>
		<?php if ( $module_2_url ) : ?></a><?php endif; ?>
	</li>
	<li>
		<?php if ( $module_3_url ) : ?><a href="<?php echo $module_3_url; ?>"><?php endif; ?>
			<p class="homepage-blog-title"><?php echo $module_3_header; ?></p>
			<p class="subheader"><?php echo $module_3_subheader; ?></p>
			<div class="square-img-wrap" style="background:url(<?php echo $module_3_thumbnail_url; ?>) center center no-repeat; background-size:cover;">
				<div class="inner"></div>
			</div>
		<?php if ( $module_3_url ) : ?></a><?php endif; ?>
	</li>
</ul>


<?php get_footer(); ?>