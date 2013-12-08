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
	<link rel="icon" type="image/png" href="<?= img('assets/favicon_64.png') ?>" />
	<link rel="apple-touch-icon" type="image/png" href="<?= img('assets/favicon_57.png') ?>" />
	<link rel="apple-touch-icon" type="image/png" href="<?= img('assets/favicon_114.png') ?>" sizes="114x114" />
	<link rel="apple-touch-icon" type="image/png" href="<?= img('assets/favicon_72.png') ?>" sizes="72x72" />
	<link rel="apple-touch-icon" type="image/png" href="<?= img('assets/favicon_144.png') ?>" sizes="144x144" />
	<link rel="shortcut icon" href="<?= img('assets/favicon.ico') ?>">
	-->
	
	<!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	<?php Assets::css() ?>
	
	<!--
	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-XXXXXXXX-X', 'berkley.school.nz');
		ga('send', 'pageview');
	</script>
	-->
</head>
<body <?php body_class(); ?>>
