<?php /*
Template Name: Full Width Home
*/ ?>
<?php get_header(); ?>
	
		<?php if(!is_front_page()):?>
			<div id="pageHead">
				<h1><?php the_title(); ?></h1>
				<?php $page_description = get_post_meta($post->ID, "_ttrust_page_description_value", true); ?>
				<?php if ($page_description) : ?>
					<p><?php echo $page_description; ?></p>
				<?php endif; ?>
			</div>
		<?php endif; ?>		
				 
		<div id="content" class="clearfix full">
		<?php while (have_posts()) : the_post(); ?>			    
			<div <?php post_class('clearfix'); ?>>						
				<?php the_content(); ?>				
			</div>				
			<?php comments_template('', true); ?>			
		<?php endwhile; ?>					    	
		</div>
		<div align="center">

<a class="fb_share" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fmhpdxmas.com%2F', 'facebook-share-dialog', 'width=626,height=436'); return false;" href="#">Share</a><p>Share this page on Facebook to invite folks to Christmas Eve!</p><br><br>

</div>
<?php get_footer(); ?>