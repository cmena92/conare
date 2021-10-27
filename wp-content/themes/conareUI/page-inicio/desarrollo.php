<section id="section-desarrollo" class="section">
			<div class="container">
				<h2 class="line-below"><?= $titulo_trabajos_home ?></h2>
				<div class="items">
				
				<?php
						$args = array('post_type'=>array('trabajos'));
						query_posts($args);
						$count = 0;
						if ( have_posts() ) : while ( have_posts() ) : the_post();
						$image = get_field('imagen_trabadesa_home');
						?>				
						
					<div class="item">
						<img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="">
						<div class="description">
							<h3><?php the_title(); ?></h3>
							<p><?php the_excerpt(); ?></p>
						</div>
					</div>
					
					
						
						<?php 
						
						$count++;
				if($count == 3 )
					break;
				
				endwhile; endif; ?>
				</div>
			</div>
		</section>