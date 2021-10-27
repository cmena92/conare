<?php 
	$universidades_titulo_home = get_field('universidades_titulo_home',$idPage);
	$universidades = get_field('universidades',$idPage);
	
	foreach($universidades as $sede){
		if(isset($sede['uni_conare_imagen']))
			$uni_conare_imagen =  $sede['uni_conare_imagen'];
		if(isset($sede['uni_conare_titulo']))
			$uni_conare_titulo = $sede['uni_conare_titulo'];
		if(isset($sede['uni_conare_enlace']))
			$uni_conare_enlace = $sede['uni_conare_enlace'];
		if(isset($sede['uni_conare_descripcion']))
			$uni_conare_descripcion = $sede['uni_conare_descripcion'];
		
		if(isset($sede['uni_ucr_imagen']))
			$uni_ucr_imagen =  $sede['uni_ucr_imagen'];
		if(isset($sede['uni_ucr_titulo']))
			$uni_ucr_titulo = $sede['uni_ucr_titulo'];
		if(isset($sede['uni_ucr_enlace']))
			$uni_ucr_enlace = $sede['uni_ucr_enlace'];
		if(isset($sede['uni_ucr_descripcion']))
			$uni_ucr_descripcion = $sede['uni_ucr_descripcion'];
		
		if(isset($sede['uni_tec_imagen']))
			$uni_tec_imagen =  $sede['uni_tec_imagen'];
		if(isset($sede['uni_tec_titulo']))
			$uni_tec_titulo = $sede['uni_tec_titulo'];
		if(isset($sede['uni_tec_enlace']))
			$uni_tec_enlace = $sede['uni_tec_enlace'];
		if(isset($sede['uni_tec_descripcion']))
			$uni_tec_descripcion = $sede['uni_tec_descripcion'];
		
		if(isset($sede['uni_una_imagen']))
			$uni_una_imagen =  $sede['uni_una_imagen'];
		if(isset($sede['uni_una_titulo']))
			$uni_una_titulo = $sede['uni_una_titulo'];
		if(isset($sede['uni_una_enlace']))
			$uni_una_enlace = $sede['uni_una_enlace'];
		if(isset($sede['uni_una_descripcion']))
			$uni_una_descripcion = $sede['uni_una_descripcion'];
		
		if(isset($sede['uni_uned_imagen']))
			$uni_uned_imagen =  $sede['uni_uned_imagen'];
		if(isset($sede['uni_uned_titulo']))
			$uni_uned_titulo = $sede['uni_uned_titulo'];
		if(isset($sede['uni_uned_enlace']))
			$uni_uned_enlace = $sede['uni_uned_enlace'];
		if(isset($sede['uni_uned_descripcion']))
			$uni_uned_descripcion = $sede['uni_uned_descripcion'];
		
		if(isset($sede['uni_utn_imagen']))
			$uni_utn_imagen =  $sede['uni_utn_imagen'];
		if(isset($sede['uni_utn_titulo']))
			$uni_utn_titulo = $sede['uni_utn_titulo'];
		if(isset($sede['uni_utn_enlace']))
			$uni_utn_enlace = $sede['uni_utn_enlace'];
		if(isset($sede['uni_utn_descripcion']))
			$uni_utn_descripcion = $sede['uni_utn_descripcion'];
	}		
	
?>


<section id="nuestras-universidades" class="section"> 
			<div class="container">
				<div class="content">
					<h2 class="line-below"><?= $universidades_titulo_home ?></h2>
					<div class="left">
						<ul class="tabs">
							<li class="tab-link current conare" data-tab="tab-1">
								<img src="<?php bloginfo('template_url'); ?>/images/conare-uni.png" alt="CONARE Universidades">
							</li>
							<li class="tab-link ucr" data-tab="tab-2">
								<img src="<?php bloginfo('template_url'); ?>/images/ucr.png" alt="UCR">
								<div class="name">
									<span>Universidad de Costa Rica</span>
								</div>
							</li>
							<li class="tab-link tec" data-tab="tab-3">
								<img src="<?php bloginfo('template_url'); ?>/images/tec.png" alt="TEC">
								<div class="name">
									<span>Tecnológico de Costa Rica</span>
								</div>
							</li>
							<li class="tab-link una" data-tab="tab-4">
								<img src="<?php bloginfo('template_url'); ?>/images/una.png" alt="UNA">
								<div class="name">
									<span>Universidad Nacional</span>
								</div>
							</li>
							<li class="tab-link uned" data-tab="tab-5">
								<img src="<?php bloginfo('template_url'); ?>/images/uned.png" alt="UNED">
								<div class="name">
									<span>Universidad Estatal a Distancia</span>
								</div>
							</li>
							<li class="tab-link utn" data-tab="tab-6">
								<img src="<?php bloginfo('template_url'); ?>/images/utn.png" alt="UTN">
								<div class="name">
									<span>Universidad Técnica Nacional</span>
								</div>
							</li>
						</ul>
					</div>
					<div class="right">
						<div id="tab-1" class="tab-content current">
							<div class="image">
								<img src="<?= $uni_conare_imagen ?>" alt="CONARE Sede">
							</div>
							<div class="info">
								<h3><?= $uni_conare_titulo ?></h3>
								<p><?= $uni_conare_descripcion ?></p>
							</div>
						</div>
						<div id="tab-2" class="tab-content">
							<div class="image">
								<img src="<?= $uni_ucr_imagen ?>" alt="CONARE Sede">
							</div>
							<div class="info">
								<h3><?= $uni_ucr_titulo ?></h3>
								<p><?= $uni_ucr_descripcion ?></p>
								<a href="<?= $uni_ucr_enlace ?>" class="button">Ir a Universidad</a>
							</div>
						</div>
						<div id="tab-3" class="tab-content">
							<div class="image">
								<img src="<?= $uni_tec_imagen ?>" alt="TEC Sede">
							</div>
							<div class="info">
								<h3><?= $uni_tec_titulo ?></h3>
								<p><?= $uni_tec_descripcion ?></p>
								<a href="<?= $uni_tec_enlace ?>" class="button">Ir a Universidad</a>
							</div>
						</div>
						<div id="tab-4" class="tab-content">
							<div class="image">
								<img src="<?= $uni_una_imagen ?>" alt="UNA Sede">
							</div>
							<div class="info">
								<h3><?= $uni_una_titulo ?></h3>
								<p><?= $uni_una_descripcion ?></p>
								<a href="<?= $uni_una_enlace ?>" class="button">Ir a Universidad</a>
							</div>
						</div>
						<div id="tab-5" class="tab-content">
							<div class="image">
								<img src="<?= $uni_uned_imagen ?>" alt="UNED Sede">
							</div>
							<div class="info">
								<h3><?= $uni_uned_titulo ?></h3>
								<p><?= $uni_uned_descripcion ?></p>
								<a href="<?= $uni_uned_enlace ?>" class="button">Ir a Universidad</a>
							</div>
						</div>
						<div id="tab-6" class="tab-content">
							<div class="image">
								<img src="<?= $uni_utn_imagen ?>" alt="UTN Sede">
							</div>
							<div class="info">
								<h3><?= $uni_utn_titulo ?></h3>
								<p><?= $uni_utn_descripcion ?></p>
								<a href="<?= $uni_utn_enlace?>" class="button">Ir a Universidad</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>