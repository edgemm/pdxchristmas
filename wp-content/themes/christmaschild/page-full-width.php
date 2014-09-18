<?php /*
Template Name: Full Width
*/ ?>
<?php get_header(); ?>
	
		<?php if(!is_front_page()):?>
		
		<?php endif; ?>		
				 
		<div id="content" class="clearfix full">
		<?php while (have_posts()) : the_post(); ?>			    
			<div <?php post_class('clearfix'); ?>>						
				<?php the_content(); ?>				
			</div>				
			<?php comments_template('', true); ?>			
		<?php endwhile; ?>					    	
		</div>
		
<?php get_footer(); ?>