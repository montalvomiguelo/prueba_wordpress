<!doctype html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title><?php bloginfo('name');?><?php wp_title();?></title>
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/normalize.css" />
	
	<link href='http://fonts.googleapis.com/css?family=PT+Sans' rel='stylesheet' type='text/css' />
	
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" />
	
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/meanmenu.css" media="all" />
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/themes/default/default.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/themes/light/light.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/themes/dark/dark.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/themes/bar/bar.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/nivo-slider.css" type="text/css" media="screen" />
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
	<script src="<?php bloginfo('template_directory'); ?>/jquery.nivo.slider.pack.js" type="text/javascript"></script>
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/meanmenu.css" media="all" />
	
</head>
<body>
<div id="contenedor">
	<header>
		<h1><a href="#"><span>Terrabionic Agencia Digital</span></a></h1>
		<h2>Prueba Terrabionic</h2>
		<form id="busqueda" method="post" >
			<input type="text" name="busqueda" id="txtbuscar" value="Buscar"><!--
		 --><input type="image" src="images/lupa.gif" id="btnbuscar" alt="buscar" title="Buscar" >
		</form>
		<nav id="topmenu"><ul>
			<li><a href="#" class="active">Inicio</a></li><!--
		 --><li><a href="#">Nosotros</a></li><!--
		 --><li><a href="#">Servicios</a></li><!--
		 --><li><a href="#">Noticias</a></li><!--
		 --><li><a href="#">Contacto</a></li>
		</ul></nav><!--menu superior-->
	</header><!--Fin cabecera-->
	<div class="slider-wrapper theme-bar">
            <div id="slider" class="nivoSlider">
                <img src="<?php bloginfo('template_directory'); ?>/images/slide1.jpg" data-thumb="images/slide1.jpg" alt="" />
                <a href="http://dev7studios.com"><img src="<?php bloginfo('template_directory'); ?>/images/slide2.jpg" data-thumb="images/up.jpg" alt="" title="This is an example of a caption" /></a>
                <img src="<?php bloginfo('template_directory'); ?>/images/slide3.jpg" data-thumb="images/slide3.jpg" alt="" data-transition="slideInLeft" />
                <img src="<?php bloginfo('template_directory'); ?>/images/slide4.jpg" data-thumb="images/slide4.jpg" alt="" title="#htmlcaption" />
            </div>
            <div id="htmlcaption" class="nivo-html-caption">
                <strong>This</strong> is an example of a <em>HTML</em> caption with <a href="#">a link</a>. 
            </div>
    </div><!--Fin de Nivo Slider-->
	<script type="text/javascript">
		$(window).load(function() {
		$('#slider').nivoSlider();
		});
	</script><!--jquery de slider-->
	<section>
		<article class="articulo">
			<h2><a href="#" class="tituloart">Misión y Visión</a></h2>
			<p>Curabitur vestibulum augue et purus laoreet tempus. Pellentesque habitant morbi tristique senectus et netus et 
			malesuada fames ac turpis egestas. Nunc eleifend, dui quis fermentum placerat, turpis dolor aliquet neque, non 
			commodo lacus urna ac velit. Nullam a ante lectus, tincidunt ornare nisl. Class aptent taciti sociosqu ad litora torquent 
			per conubia nostra, per inceptos himenaeos. Integer venenatis tristique mauris sit amet vulputate. Vivamus eu 
			elementum ipsum. Suspendisse potenti. Cras luctus, urna non fermentum porta, lorem libero pretium sem, cursus 
			venenatis elit arcu eget magna. Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
		</article><!--aritículo 1-->
		
		<article class="articulo">
			<h2><a href="#" class="tituloart">Servicios</a></h2>
			<a href="#"><img src="images/servicios.jpg" alt="servicios"/></a>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum vulputate, metus 
			hendrerit placerat blandit, turpis enim viverra tellus, et facilisis arcu leo ac quam. 
			Quisque hendrerit ullamcorper augue, non iaculis augue egestas et. Aliquam 
			pellentesque ipsum et quam molestie tincidunt. In imperdiet, justo nec suscipit 
			interdum, dui lacus posuere elit, idluctus tellus neque ut purus. Pellentesque ultricies 
			tempor mi, ut imperdiet nisi bibendum vel. Etiam lorem elit, lacinia sed vesti...</p>
			<a href="">Continuar leyendo</a>
		</article><!--aritículo 1-->
	</section><!--Fin de seccion artículos
 --><aside>
			<article class="articulo">
				<h2>Noticias Recientes</h2>
				<h3><a href="#" class="tituloart">Praesent luctus purus vitae erat feugiat fefeholaoo</a></h3>
				<a href="#"><img src="images/ultimas-noticias.jpg" alt="ultimas noticias" /></a>
				<p>Sed lacinia odio at quam dictum ornare. Quisque 
				placerat massa non nunc tincidunt quis molestie 
				ligula posuere. Ut purus arcu, hendrerit eget 
				dignissim at, eleifend sed lorem. Cras tristique 
				congue vulputate. Nullam gravida sollicitudin 
				ultricies. Class aptent taciti sociosqu ad …</p>
				<a href="">continuar leyendo </a>
			</article>
	</aside><!--Fin Lateral-->
	<footer>
		<p>Todos los derechos reservados © 2011</p><!--
	 --><ul id="menufooter">
			<li><a href="#">Home</a>
			<li><a href="#">Services</a>
			<li><a href="#">News</a>
			<li><a href="#">Contact</a>
		</ul>
	</footer><!--Fin de footer-->
</div><!--Fin contenedor general-->

<script src="<?php bloginfo('template_directory'); ?>/jquery.meanmenu.js"></script> 
<script>
	jQuery(document).ready(function () {
		jQuery('header nav').meanmenu();
	});
</script><!---mobilemenu jquery-->

<script type="text/javascript" src="searchbox.js"></script>	<!--llamada limpiar cajita texto-->

</body>
</html>