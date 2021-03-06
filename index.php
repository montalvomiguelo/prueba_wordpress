<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title><?php bloginfo( 'name' ); wp_title(); ?></title>
	
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/normalize.css" />
	<link href='http://fonts.googleapis.com/css?family=PT+Sans' rel='stylesheet' type='text/css' />
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" />
	
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
		<h1><a href="<?php bloginfo ('url');?>"><span><?php bloginfo ('name');?></span></a></h1>
		<h2><?php bloginfo('description');?></h2>
		
		<form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
			<input type="text" value="Buscar" name="s" id="s" />
			<input type="submit" id="searchsubmit" value="c" />
		</form>
		
		<nav id="topmenu">
			<?php wp_nav_menu( array( 'theme_location' => 'superior' ) ); ?>
		</nav><!--menu superior-->
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
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<article class="articulo">
			<p class="metadatos"><small><?php the_time( 'j M y' ); ?> Por: <?php the_author(); ?></small><span><?php comments_popup_link( '0 Comentarios', '1 Comentario', '% comentarios' ); ?></span></p>
			<h2><a href="<?php the_permalink() ?>" class="tituloart"><?php the_title(); ?></a></h2>
			<?php the_post_thumbnail('portada-thumb'); ?>
			<?php the_content('Continuar leyendo'); ?>
		</article><!--aritículo 1-->
	<?php endwhile; else: ?>
	<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
	<?php endif; ?>	
	<div id="navegacion_posts">
		<div id="anteriores"><?php next_posts_link( 'Entradas anteriores' ); ?></div>
		<div id="siguientes"><?php previous_posts_link( 'Entradas siguientes' ); ?></div>
	</div>
	</section><!--Fin de seccion artículos
 --><aside>
			<ul class="articulo">
				<?php dynamic_sidebar( 'Right Hand Sidebar' ); ?>
			</ul>
	</aside><!--Fin Lateral-->
	<footer>
		<p>Todos los derechos reservados © 2011</p><!--
	 --><div id="menufooter">
			<?php wp_nav_menu( array( 'theme_location' => 'pie' ) ); ?>
		</div>
	</footer><!--Fin de footer-->
</div><!--Fin contenedor general-->

<script src="<?php bloginfo('template_directory'); ?>/jquery.meanmenu.js"></script> 
<script>
	jQuery(document).ready(function () {
		jQuery('header nav').meanmenu();
	});
</script><!---mobilemenu jquery-->

<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/searchbox.js"></script>	<!--llamada limpiar cajita texto-->

</body>
</html>