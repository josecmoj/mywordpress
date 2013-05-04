<?php partial('head') ?>
	
<div id="container">
	
	<?php partial('header') ?>
	
	<section id="body">
		<role id="content" role="main">
			
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<section class="entry-content">
					<?php the_content(); ?>
				</section>
			<?php endwhile; endif; ?>
			
		</role>
		
		<?php partial('sidebar') ?>
		
	</section>
	
	<?php partial('footer') ?>
	
</div>
	
<?php partial('foot'); ?>