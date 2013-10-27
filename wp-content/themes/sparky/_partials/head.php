<!DOCTYPE html>
<!--[if IE 8]>         <html class="lt-ie10 lt-ie9 ie8"> <![endif]-->
<!--[if IE 9]>         <html class="lt-ie10 ie9"> <![endif]-->
<!--[if gt IE 9]><!--> <html> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title><?php Sparky::title() ?></title>
	<meta name="description" content="<?php Sparky::description() ?>">
	<meta name="viewport" content="width=device-width">
	
	<?php wp_head(); ?>
	
	<!--
	<link rel="icon" type="image/png" href="">
	<link rel="apple-touch-icon" type="image/png" href="">
	<link rel="apple-touch-icon" type="image/png" href="" sizes="114x114">
	<link rel="apple-touch-icon" type="image/png" href="" sizes="72x72">
	<link rel="apple-touch-icon" type="image/png" href="" sizes="144x144">
	<link rel="shortcut icon" href="">
	-->
	
	<!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	<?php Assets::css() ?>
</head>
<body <?php body_class(); ?>>
