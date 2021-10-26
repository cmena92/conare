
		
		<section id="section-agenda" class="section">
			<div class="container">
				<div class="content">
					<div class="left">
						<h2>Agenda</h2>
						<?php
						$image = 'vacio';
						$args = array('post_type'=>array('agenda'));
						query_posts($args);
						$count = 0;
						if ( have_posts() ) : while ( have_posts() ) : the_post();
						if($image == 'vacio'){
							$image = get_field('imagen_agenda');							
						}

						?>						
					
						<div class="date">
							<p><?php the_title(); ?></p>
							<span><?php 
								$fecha = get_field('inicio_actividad_agenda');
								if($fecha)
								echo $fecha.' - '.get_field('cierre_actividad_agenda');	;									
									?></span>
						</div>
						<p class="separate"></p>
						
						<?php 
						
						$count++;
				if($count == 2 )
					break;
				
				endwhile; endif; ?>
						
					</div>
					<div class="right">
						<div class="img">
							<img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="">
						</div>
					</div>
				</div>
				<div class="action">
					<a href="/agenda" class="button"><span>Ver Agenda</span></a>
				</div>
			</div>
		</section>