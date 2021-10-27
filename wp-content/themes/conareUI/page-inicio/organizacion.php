
<?php 

	
	$organizacion_titulo_home = get_field('organizacion_titulo_home');
	$organizacion_texto_home = get_field('organizacion_texto_home');
	
?>
<section id="section-organizacion" class="section">
			<div class="container">
				<h2 class="line-below"><?= $organizacion_titulo_home ?></h2>
				<p><?= $organizacion_texto_home ?></p>
				<div class="org-logos">
				
				<?php if( have_rows('organizacion_logos') ): ?>
					<?php while( have_rows('organizacion_logos') ): the_row(); ?>
					
					<?php
						// LOGO A
						$image = get_sub_field('logo_a_imagen');
						$link = get_sub_field('logo_a_link');
					?>
					<div class="item">
						<a href="<?php echo $link; ?>">
						<img src="<?php echo $image['sizes']['thumbnail']; ?>" alt=""></a>
					</div>
					
					<?php
						// LOGO B
						$image = get_sub_field('logo_b_imagen');
						$link = get_sub_field('logo_b_link');
					?>
					<div class="item">
						<a href="<?php echo $link; ?>">
						<img src="<?php echo $image['sizes']['thumbnail']; ?>" alt=""></a>
					</div>
					
					<?php
						// LOGO C
						$image = get_sub_field('logo_c_imagen');
						$link = get_sub_field('logo_c_link');
					?>
					<div class="item">
						<a href="<?php echo $link; ?>">
						<img src="<?php echo $image['sizes']['thumbnail']; ?>" alt=""></a>
					</div>
					
					<?php
						// LOGO D
						$image = get_sub_field('logo_d_imagen');
						$link = get_sub_field('logo_d_link');
					?>
					<div class="item">
						<a href="<?php echo $link; ?>">
						<img src="<?php echo $image['sizes']['thumbnail']; ?>" alt=""></a>
					</div>
					
					<?php endwhile; ?>
<?php endif; ?>
				
				</div>
			</div>
		</section>