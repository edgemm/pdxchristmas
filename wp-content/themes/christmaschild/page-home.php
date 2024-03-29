<?php /*
Template Name: Home
*/ ?>
<?php get_header(); ?>
<div id="content" class="full grid">

<?php $home_project_count = intval(of_get_option('ttrust_home_project_count')); ?>
<?php if($home_project_count > 0) : ?>	
<?php endif; ?>

<?php $featured_page_count = intval(of_get_option('ttrust_featured_pages_count')); ?>
<?php if($featured_page_count > 0) : ?>
<div id="featuredPages" class="full homeSection clearfix">			
		
	<?php
	query_posts( array(
		'ignore_sticky_posts' => 1,  
		'meta_key' => '_ttrust_featured_value',
		'meta_value' => 'true',  			
    	'posts_per_page' => $featured_page_count,
    	'post_type' => array(				
		'page'					
		)
	));
	?>
	<div class="thumbs clearfix">
	<?php while (have_posts()) : the_post(); ?>			    
		<div <?php post_class('small'); ?>>	
			<a class="thumb" href="<?php the_permalink() ?>" rel="bookmark" ><?php the_post_thumbnail("ttrust_one_third_cropped", array('class' => 'thumb', 'alt' => ''.get_the_title().'', 'title' => ''.get_the_title().'')); ?></a>			
			<h2><a href="<?php the_permalink() ?>" rel="bookmark" ><?php the_title(); ?></a></h2>			
			
			<?php the_excerpt(); ?>					
		</div>
	<?php endwhile; ?>
	<?php wp_reset_query();	?>
	</div>
</div>
<?php endif; ?>
<div align="center">

<a class="fb_share" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fmhpdxmas.com%2F', 'facebook-share-dialog', 'width=626,height=436'); return false;" href="#">Share</a><p>Share this page on Facebook to invite folks to Christmas Eve!</p>

</div>
</div>

<?php get_footer(); ?>	