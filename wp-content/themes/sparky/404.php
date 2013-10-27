<?php partial('head') ?>
<?php partial('header') ?>

<div id="container">
	
	<section id="body">
		<div id="content" role="main">
			
			<h1>Page not found!</h1>
			<p>The page you're looking for does not exist, or has been moved.</p>
			
			<section class="search">
				<p><?php get_search_form(); ?></p>
			</section> <!-- end search section -->
			
		</div>
		
		<?php partial('sidebar') ?>
		
	</section>
	
</div>

<?php partial('footer') ?>
<?php partial('foot'); ?>