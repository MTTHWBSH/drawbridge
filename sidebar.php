		<!-- SIDEBAR CONTENT -->
		
		<aside>

		<div class="title">
		<h1 class="title">Media</h1>
		</div>
		



		
<?php query_posts('showposts=3'); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
		<ul class="sidebar">
		<li><a href="<?php the_permalink() ?>"><?php the_title() ?></a></li>
		</ul>
		
		<?php endwhile; ?>
		
		<?php else : ?>
		
		<p>Sorry, no posts to display</p>
		
		<?php endif; ?>
		
		<p><a href="#">Older Media</a></p>
						
		</aside>