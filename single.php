<?php get_header(); ?>
  	
  	  <div id="main">
  	
  	<!-- MAIN CONTENT -->
		
		<div class="content-post">
		
<?php if (have_posts()) : ?>

	<?php while (have_posts()) : the_post(); ?>


				<h1 class="title"><?php the_title(); ?></h1>
				<hr class="title">

				<p><?php the_content(); ?></p>
				
	<?php endwhile; ?>

<?php else : ?>


	<p>Sorry, there is no post to display</p>


<?php endif; ?>
								
					
		</div><!-- <div class="content-post"> -->
		
  </div><!-- <div id="main"> -->  
 
<?php get_footer(); ?>