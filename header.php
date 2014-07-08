<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta http-equiv="content-type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
    <meta name="description" content="<?php echo esc_attr(get_bloginfo('description')); ?>" />
    <title><?php wp_title('&laquo;', true, 'right'); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='//fonts.googleapis.com/css?family=Exo+2' rel='stylesheet' type='text/css'>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">	
	<link rel="css/stylesheet/less" type="text/css" href="footer.less" />
	<link rel="css/stylesheet/less" type="text/css" href="basic.less" />
	<link rel="css/stylesheet" type="text/css" href="style.css" />
	<link rel="css/stylesheet" type="text/css" href="style2.css" />
	<link rel="css/stylesheet" type="text/css" href="style3.css" />
	<link rel="css/stylesheet" type="text/css" href="style4.css" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <script src="//cdnjs.cloudflare.com/ajax/libs/less.js/1.7.3/less.min.js" type="text/javascript"></script>
	<script src="//code.jquery.com/jquery-2.1.0.min.js"></script>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	