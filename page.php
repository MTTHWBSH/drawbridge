<?php get_header(); ?>



<?php if(is_front_page()): ?>
	
		<!-- MAIN CONTENT -->
		
		<div class="content-left">
			
			<!-- ABOUT -->
			<section class="about">
			
			
			<?php if (have_posts()) : ?>
			
				<?php while (have_posts()) : the_post(); ?>
				
				
					<h1 class="title"><?php the_title(); ?></h1>
					<hr class="title">
					
					<p><?php the_content(); ?></p>
				
				<?php endwhile; ?>
			
			<?php else : ?>
			
			
				<p>Sorry, the page requested couldn't be found.</p>
			
			
			<?php endif; ?>
						
			</section>
				
		</div><!-- <div class="content-left"> -->
		
		<?php get_sidebar(); ?>
	




<?php else: ?>
	
		<!-- MAIN CONTENT -->
		
		<div class="content-post">
		
			<?php if (have_posts()) : ?>
			
				<?php while (have_posts()) : the_post(); ?>
				
				
					<h1 class="title"><?php the_title(); ?></h1>
					<hr class="title">
					
					<p><?php the_content(); ?></p>
				
				<?php endwhile; ?>
			
			<?php else : ?>
			
			
				<p>Sorry, the page requested couldn't be found.</p>
			
			
			<?php endif; ?>
						
			
		</div><!-- <div class="content-post"> -->
  
  

<?php endif; ?>  
  
  
 
<?php get_footer(); ?>