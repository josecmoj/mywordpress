<?php partial('head') ?>
	
<div id="container">
	
	<?php partial('header') ?>
	
	<section id="body">
		<div id="content" role="main">
			
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<section class="entry-content clearfix">
					<?php the_content(); ?>
				</section>
			<?php endwhile; endif; ?>
			
		</div>
		
		<?php partial('sidebar') ?>
		
	</section>
	
	<?php partial('footer') ?>
	
</div>
	
<?php partial('foot'); ?>