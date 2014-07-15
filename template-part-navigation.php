<div>
<?php // Breadcrumb navigation
if (is_page() && !is_front_page() || is_single() || is_category()) {
echo '<ul class="breadcrumb widgethouse"><li><a href="https://worldcraze.com" class="glyphicon glyphicon-home colorhouse"></a></li>';
echo '<li><a href="/">Blog</a></li>';
if (is_page()) {
$ancestors = get_post_ancestors($post);

if ($ancestors) {
$ancestors = array_reverse($ancestors);

foreach ($ancestors as $crumb) {
echo '<li><a href="'.get_permalink($crumb).'">'.get_the_title($crumb).'</a></li>';
}
}
}

if (is_single()) {
$category = get_the_category();
echo '<li><a href="'.get_category_link($category[0]->cat_ID).'"
>'.$category[0]->cat_name.'</a></li>';
	}

	if (is_category()) {
		$category = get_the_category();
		echo '<li class="active">'.$category[0]->cat_name.'</li>';
	}

 // Current page
	if (is_page() || is_single()) {
		echo '<li class="active">'.get_the_title().'</li>';
	}
	echo '</ul>';
} elseif (is_front_page()) {
 // Front page
	echo '<ul class="breadcrumb widgethouse">';
	echo '<li><a href="https://worldcraze.com" class="glyphicon glyphicon-home colorhouse"></a></li>';
	echo '<li class="active">Blog</li>';
	echo '</ul>';
}
?></div>