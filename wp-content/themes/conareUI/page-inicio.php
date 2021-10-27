<?php get_header(); ?>


<?php
	$idPage = get_the_ID();
	$titulo_trabajos_home = get_field('titulo_trabajos_home');
	$agenda_link_home = get_field('agenda_link_home');
	$titulo_publicaciones_home = get_field('titulo_publicaciones_home');
	
	
	
 ?>
<?php include get_template_directory() . '/page-inicio/alerta_superior.php'; ?>

	
	<div class="header">
		
	<?php include get_template_directory() . '/navegacion/superior.php'; ?>
	
	<?php include get_template_directory() . '/navegacion/principal.php'; ?>
			
	</div>
	
	<div class="main-content">
		
		
	<?php include get_template_directory() . '/page-inicio/banner-top.php'; ?>
	
	<?php include get_template_directory() . '/page-inicio/mensaje-destacado.php'; ?>
	
	<?php include get_template_directory() . '/page-inicio/organizacion.php'; ?>
	
	<?php include get_template_directory() . '/page-inicio/noticias-destacadas.php'; ?>
	
	<?php include get_template_directory() . '/page-inicio/agenda-destacada.php'; ?>
	
	<?php include get_template_directory() . '/page-inicio/desarrollo.php'; ?>
	
	<?php include get_template_directory() . '/page-inicio/publicaciones.php'; ?>
	
	<?php include get_template_directory() . '/page-inicio/indicadores.php'; ?>
	
	<?php include get_template_directory() . '/page-inicio/universidades.php'; ?>
	
	<?php include get_template_directory() . '/page-inicio/transparencia.php'; ?>
		

		

		
	</div>
	<div class="footer">
		<div class="container">
			<div class="content">
				<div class="item logo">
					<img src="<?php bloginfo('template_url'); ?>/images/footer-logo.png" alt="CONARE Logo">
				</div>
				<div class="item contacto">
					<h3>Contacto</h3>
					<ul>
						<li class="maps"><a href="https://goo.gl/maps/sZXRTugb61yZYZF5A" target="_blank"><span><i class="fas fa-map-marker-alt"></i></span><span>CONARE, Edificio "Dr. Franklin Chang Díaz". de la Embajada de los Estados Unidos de América, 1,3 km al Norte. Pavas, San José, Costa Rica</span></a></li>
						<li class="tel"><a href="tel:506-2519-5700"><span><i class="fas fa-phone-alt"></i></span><span>(506) 2519-5700</span></a></li>
						<li class="dir-tel"><a href="#"><span><i class="fas fa-address-book"></i></span><span>Ver directorio Teléfonico</span></a></li>
						<li class="horario"><span><i class="fas fa-clock"></i></span><span>Lunes a Viernes de 7:30 am a 12 md - 1:00 pm a 4:00 pm</span></li>
						<li class="social">
							<ul>
								<li class="facebook"><a href="#"><i class="fab fa-facebook"></i></a></li>
								<li class="youtube"><a href="#"><i class="fab fa-youtube"></i></a></li>
								<li class="soundcloud"><a href="#"><i class="fab fa-soundcloud"></i></a></li>
							</ul>
						</li>
					</ul>
				</div>
				<div class="item ayuda">
					<h3>Ayuda</h3>
					<ul>
						<li><a href="#">Preguntas Frecuentes</a></li>
						<li><a href="#">Ayúdenos a Mejorar</a></li>
						<li><a href="#">Términos y Condiciones de Uso</a></li>
					</ul>
				</div>
			</div>
			<div class="bottom">
				<p class="update"><i class="fas fa-sync"></i>Fecha de la última actualización: 02/09/2021</p>
				<span class="copyright">Copyright &copy; www.conace.ac.cr</span>
			</div>
		</div>
	</div>
</body>
</html>