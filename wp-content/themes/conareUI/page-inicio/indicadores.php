<?php 
	if( have_rows('indicadores_home',$idPage) ): 
		while( have_rows('indicadores_home',$idPage) ): the_row(); 
			$indi_titulo_home = get_sub_field('indi_titulo_home',$idPage);
			$indi_link_home = get_sub_field('indi_link_home',$idPage);
			$indi_imagen_home = get_sub_field('indi_imagen_home',$idPage);
	  endwhile;
	endif;
	
	
?>	
<section id="section-indicadores" class="section">
			<div class="container">
				<div class="content">
					<div class="left">
			    		<div class="info">
			    			<h2 class="line-below">
				    			<?= $indi_titulo_home ?>
				    		</h2>
				    		<div class="text">
				    			<p>
				    				Más de <br />
									<span class="big-red">131.000</span><br />
									personas estudian en las <br />
									Universidades Públicas de Costa Rica
				    			</p>
				    		</div>
			    		</div>
					</div>
					<div class="right">
						<div id="indicadores-carousel" class="owl-carousel owl-theme">
						    <div class="item">
						    	<img src="<?php bloginfo('template_url'); ?>/images/indicadores-1.jpg" alt="Indicadores">
						    </div>
						    <div class="item">
						    	<img src="<?php bloginfo('template_url'); ?>/images/indicadores-2.jpg" alt="Indicadores">
						    </div>
						    <div class="item">
								<img src="<?php bloginfo('template_url'); ?>/images/indicadores-3.jpg" alt="Indicadores">
						    </div>
						</div>
					</div>
					<div class="action">
			    		<a class="button" href="<?= $indi_link_home['url']?>"><?= $indi_link_home['title'] ?></a>
			    	</div>
				</div>
			</div>	
		</section>