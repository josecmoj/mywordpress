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
</head>
<body <?php body_class() ?>>
	
	<div class="container">
		<header class="layout-header">
			<hgroup>
				<h1><?php echo get_bloginfo('name') ?></h1>
				<h2><?php echo get_bloginfo('description') ?></h2>
			</hgroup>
		</header>
	</div>
	
	<div class="container">
		<div class="layout-body">
			<div class="layout-content" role="main">
				<?= $this->child() ?>
			</div>
			
			<aside class="layout-sidebar" role="complementary">
				<?= $this->insert( 'partials::sidebar' ) ?>
			</aside>
		</div>
	</div>
	
	<div class="container">
		<footer class="layout-footer">
			Copyright &copy; <?= date('Y') ?>. All rights reserved.
		</footer>
	</div>
	
	
	<?php Assets::js() ?>
	
</body>
</html>
