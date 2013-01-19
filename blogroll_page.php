<?php 
/* 
Template Name: Custom Blog Roll Page 
*/ 
?>

<?php get_header(); ?>
  	
  	  <div id="main">
  	
  	<!-- MAIN CONTENT -->
		
		<div class="content-post">
		
<?php query_posts('showposts=3'); ?>
               	<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?> 


				<h1 class="title"><?php the_title(); ?></h1>
				<hr class="title">
				<p class="bi-line">posted by <a href="#"><?php the_author() ?></a> - <?php the_time('F jS, Y') ?></p>

				<p><?php the_content(); ?></p>
				
				<hr class="end-post">
				
	<?php endwhile; ?>

<?php else : ?>


	<p>Sorry, there is no post to display</p>


<?php endif; ?>

<p><?php previous_posts_link('Newer Posts'); ?></p>
<p><?php next_posts_link('Older Posts'); ?></p>
								
					
		</div><!-- <div class="content-post"> -->
		
  </div><!-- <div id="main"> -->  
 
<?php get_footer(); ?>