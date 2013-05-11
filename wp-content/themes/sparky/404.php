<?php partial('head') ?>
<?php partial('header') ?>
	
	<section id="body">
		<role id="content" role="main">
			
			<h1>Page not found!</h1>
			<p>The page you're looking for does not exist, or has been moved.</p>
			
			<section class="search">
				<p><?php get_search_form(); ?></p>
			</section> <!-- end search section -->
			
		</role>
		
		<?php partial('sidebar') ?>
		
	</section>
	
<?php partial('footer') ?>
<?php partial('foot'); ?>