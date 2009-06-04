<?php get_header(); ?>
        
       
<div id="post_content" class="column span-14">   <!-- start home_content -->

<h3><?php the_title(); ?></h3>        

        <?php if (have_posts()) : ?>
			
        <?php while (have_posts()) : the_post(); ?>
        
        	<div class="column span-11 first">
        		            	
            	<?php the_content('<p>Continue reading this post</p>'); ?>

				<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
				
				<?php edit_post_link('Edit this entry.','<p>','</p>'); ?>				
            	
            </div>
            
        <?php endwhile; endif; ?>    
            
            <?php get_sidebar(); ?>     
            
        
        </div>   <!-- start home_content -->
        
        
<?php get_footer(); ?>
