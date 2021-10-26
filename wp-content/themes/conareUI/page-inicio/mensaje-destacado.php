<section id="section-new-deparment" class="section new-deparment">
			<div class="container">
				<div class="left">
					<div class="img">
						<img src="<?php echo get_field('mensaje_destacado_imagen_home'); ?>" alt="">
					</div>
				</div>
				<div class="right">
					<h2><?php echo get_field('mensaje_destacado_home'); ?></h2>
					<p><?php echo get_field('mensaje_destacado_texto_home'); ?></p>
					
					<a  class='button' href='<?php echo get_field('mensaje_destacado_url_home'); ?>'>
						<span>Ver Más</span>
					</a>
				</div>
			</div>
		</section>