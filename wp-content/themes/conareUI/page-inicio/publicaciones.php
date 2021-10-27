<?php 
	if( have_rows('publicaciones',$idPage) ): 
		while( have_rows('publicaciones',$idPage) ): the_row(); 
			$publi_titulo_home = get_sub_field('publi_titulo_home',$idPage);
			$publi_imagen_home = get_sub_field('publi_imagen_home',$idPage);
			$publi_enlace_home = get_sub_field('publi_titulo_home',$idPage);
	  endwhile;
	endif;
	
	
	
	
	$args = array('post_type'=>array('publicaciones'));
	query_posts($args);
	if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<section id="section-publicaciones" class="section section-bg-behind">
			<div class="container">
				<div class="content">
					<div class="image">
						<img src="<?= $publi_imagen_home['url']?>" alt="">
					</div>
					<div class="info">
						<h2 class="line-below"><?= $publi_titulo_home?></h2>
						<p><?php the_title(); ?></p>
						<span>Autor: <?= get_field('autor_publicacion'); ?> <br />Fecha: <?= get_field('fecha_publicacion'); ?></span>
						<?php
							$url = get_field('enlace_publicacion');
							if($url){ ?>
									<a href="<?= $url['url'] ?>" class="button"><span><?= $url['title'] ?></span></a>
								<?php
							}else{ ?> 
								<a href="<?= get_permalink() ?>" class="button"><span>Ver Publiación</span></a>
							<?php
							
							}
						?>
						
						
					</div>
				</div>
			</div>
		</section>
		
	<?php
	break;	
	endwhile; 
	endif; ?>
			
			
