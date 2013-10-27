<?php partial('head') ?>
<?php partial('header') ?>

<div class="container">
	
	<section id="body">
		<div id="content" role="main">
			
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<section class="entry-content">
					<h1><?php the_title() ?></h1>
					
					<?php the_content(); ?>
				</section>
			<?php endwhile; endif; ?>
			
		</div>
		
		<?php partial('sidebar') ?>
		
	</section>
	
</div>

<?php partial('footer') ?>
<?php partial('foot'); ?>