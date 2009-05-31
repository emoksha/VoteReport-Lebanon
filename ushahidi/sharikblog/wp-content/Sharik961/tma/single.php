<?php get_header(); ?>

		
		<!-- end top banner --> 
        
        <div id="home_content" class="column span-14">   <!-- start home_content -->
        
            <div id="home_left" class="column span-7 first">   <!-- start home_left -->
	
		        <?php if (have_posts()) : ?>

		        <?php while (have_posts()) : the_post(); ?>
            
            		<h2 class="post_cat"><?php $cat = get_the_category(); $cat = $cat[0]; echo $cat->cat_name; ?></h2>

	            	<h3 class="post_name" id="post-<?php the_ID(); ?>"><?php the_title(); ?></h3>

	            	<div class="post_meta">
	            		By <?php the_author_posts_link(); ?> <span class="dot">&sdot;</span> <?php the_time('F j, Y'); ?> <span class="dot">&sdot;</span> <?php if(function_exists('wp_email')) { ?> <?php email_link(); ?> <span class="dot">&sdot;</span> <?php } ?> <?php if(function_exists('wp_print')) { ?> <?php print_link(); ?> <span class="dot">&sdot;</span> <?php } ?> <a href="#comments">Post a comment</a>
	            	</div>

					<div class="post_meta">
	            		<?php the_tags('<span class="filedunder"><strong>Filed Under</strong></span> &nbsp;', ', ', ''); ?>
	            	</div>

					<div class="post_text">

	            		<?php the_content('<p>Continue reading this post</p>'); ?>

						<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>

						<?php edit_post_link('Edit this entry.','<p>','</p>'); ?>

					</div>


					<div id="comments">   <!-- start comments -->

						<div id="commenthead">

							<h2 class="post_comm">Discussion</h2>

							<?php if ('open' == $post-> comment_status) {
								// Both Comments and Pings are open ?>							
								<h3 class="mast5"><?php comments_number('No comments', 'One comment', '% comments'); ?> for &#8220;<?php the_title(); ?>&#8221;</h3>	

							<?php } else {
								// Neither Comments, nor Pings are open ?>
								<h3 class="mast5">Comments are disallowed for this post.</h3>

							<?php } ?>

						</div>


						<?php comments_template(); ?>

					</div>   <!-- end comments --></div>
					
				<?php endwhile; else: ?>

				<p>Lost? Go back to the <a href="<?php echo get_option('home'); ?>/">home page</a>.</p>

				<?php endif; ?>	
            
            
            <div id="home_right" class="column span-7 last">
            
					
				<div class="column span-5 first">
            
					<h3 class="mast">Recent Posts</h3>
					
					<?php $the_query = new WP_Query('cat=-' .$catid. '&showposts=5&offset=1&orderby=post_date&order=desc');
			
					while ($the_query->have_posts()) : $the_query->the_post();

					$do_not_duplicate = $post->ID; ?>
					
					<div class="home_recent_post">
					
						<?php if ( get_post_meta($post->ID, 'thumb_home_img', true) ) { ?>
						
						<?php } else { ?>
							
		
						<?php } ?>
	
						
						<div class="home_recent_title" id="post-<?php the_ID(); ?>">
							<a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a>
						</div>
						
						<div class="home_recent_date">
							<?php the_time('F j, Y'); ?>
						</div>
						
						<!--<div class="home_recent_auth">
							By <?php the_author(); ?>
						</div> -->
						
					</div>
					
					<?php endwhile; ?>
					
					
					<?php include('ad_home.php'); ?>
					
					<?php if ( !function_exists('dynamic_sidebar')
					        || !dynamic_sidebar('MiddleColumn') ) : ?>
					
					<div id="side_tag_cloud">
            
						<h3 class="mast">Browse</h3>
						
						<?php wp_tag_cloud(''); ?>
            		
            		</div>					
					
					<?php endif; ?>
            	
            	</div>
            
                <?php get_sidebar(); ?>         
            	
            
            </div>
        
        </div>   <!-- end home_content -->        
        
<?php get_footer(); ?>     
