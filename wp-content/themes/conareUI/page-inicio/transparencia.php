<?php 
	if( have_rows('transparencia_home',$idPage) ): 
		while( have_rows('transparencia_home',$idPage) ): the_row(); 
			$transpa_info = get_sub_field('transpa_info',$idPage);
			$transpa_parti = get_sub_field('transpa_parti',$idPage);
			$transpa_datos = get_sub_field('transpa_datos',$idPage);
	  endwhile;
	endif;
	
	
?>	
<section id="section-tranparencia" class="section section-bg-behind">
			<div class="container">
				<div class="content">
					<h2 class="line-below">Transparencia</h2>
					<div class="items">
						<div class="item informacion">
							<a href="<?= $transpa_info['url']?>">
								<div class="img"></div>
								<h3><?= $transpa_info['title']?></h3>
							</a>
						</div>
						<div class="item participacion">
							<a href="<?= $transpa_parti['url']?>">
								<div class="img"></div>
								<h3><?= $transpa_parti['title']?></h3>
							</a>
						</div>
						<div class="item datos">
							<a href="<?= $transpa_datos['url']?>">
								<div class="img"></div>
								<h3><?= $transpa_datos['title']?></h3>
							</a>
						</div>
					</div>
	
				</div>
			</div>
		</section>