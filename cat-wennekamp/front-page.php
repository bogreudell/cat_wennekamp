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

<ul class="homepage-modules">
	<li>
		<a href="<?php echo $module_1_url; ?>">
			<p class="homepage-blog-title"><?php echo $module_1_header; ?></p>
			<p class="subheader"><?php echo $module_1_subheader; ?></p>
			<div class="square-img-wrap" style="background:url(<?php echo $module_1_thumbnail_url; ?>) center center no-repeat; background-size:cover;">
				<div class="inner"></div>
			</div>
		</a>
	</li>
	<li>
		<a href="<?php echo $module_2_url; ?>">
			<p class="homepage-blog-title"><?php echo $module_2_header; ?></p>
			<p class="subheader"><?php echo $module_2_subheader; ?></p>
			<div class="square-img-wrap" style="background:url(<?php echo $module_2_thumbnail_url; ?>) center center no-repeat; background-size:cover;">
				<div class="inner"></div>
			</div>
		</a>
	</li>
	<li>
		<a href="<?php echo $module_3_url; ?>">
			<p class="homepage-blog-title"><?php echo $module_3_header; ?></p>
			<p class="subheader"><?php echo $module_3_subheader; ?></p>
			<div class="square-img-wrap" style="background:url(<?php echo $module_3_thumbnail_url; ?>) center center no-repeat; background-size:cover;">
				<div class="inner"></div>
			</div>
		</a>
	</li>
</ul>

<div id="instafeed-wrap">
	<div id="instafeed-banner" class="homepage-blog-title">Follow Cat on Instagram</div>
	<div id="instafeed"></div>	
</div>


<?php get_footer(); ?>