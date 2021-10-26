
		<section id="section-noticias" class="section">
			<div class="container">
				<h2 class="line-below">Noticias</h2>
				<div class="posts">
				
				<?php 
				$count = 0;
				$args = array('post_type'=>array('post'));
						query_posts($args);
				if ( have_posts() ) : while ( have_posts() ) : the_post(); 
						?>
					<div class="post-item">
						<div class="content">
							<div class="img">
							<?php
								
							
							?>
								<img src="<?php echo getPostThumbnailId($post); ?>" alt="">
							</div>
							<div class="post-description">
								<div class="post-info">
									<div class="name">
										<i class="fas fa-user"></i>
										<span><?php the_author(); ?></span>
									</div>
									<div class="date">
										<i class="fas fa-calendar"></i>
										<span><?php echo get_the_date(); ?></span>
									</div>
								</div>
								<div class="post-title">
									<h3><?php the_title(); ?></h3>
								</div>
							</div>
						</div>
					</div>
					
			<?php 
				$count++;
				if($count == 3 )
					break;
				
			endwhile; endif; ?>
			
				</div>
				<div class="action">
					<a href="/noticias" class="button">
						<span>Ver todas las Noticias</span>
					</a>
				</div>
			</div>
		</section>