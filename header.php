<!DOCTYPE html>
<html>
	<head>
		<?php wp_head() ?>
		<!--Ponemos el charset-->
		<meta charset="utf-8">
		<!--Título de nuestro sitio -->
		<title><?php bloginfo('name'); ?></title>
		
		<!-- Le descripción de nuestro sitio -->
		<meta name="description" content="<?php bloginfo('description'); ?> ">
		
		<!--Llamar al css de la plantilla -->
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">
		
		<!--Fuente utilizada desde Google WebFonts -->
		<link href='http://fonts.googleapis.com/css?family=Source+Code+Pro:400,700' rel='stylesheet' type='text/css'>
		
		<!--Llamamos al script desde la carpeta js para no tener que usar prefijos en CSS3 -->
		<script src="<?php bloginfo('template_url'); ?>/js/prefixfree.min.js"></script>
		
		
	</head>
	<body>
		<!--Inicio del sitio-->
		<div id="site">
			
			<!--Inicio del header -->
			<header id="cabeza">
				<!--Nuestro logotipo o nombre-->
				<div class="logo">
					<h1><a href="<?php bloginfo('url'); ?> ">Mi primer plantilla</a></h1>
				</div>
				
				<!--Botón de búsqueda-->
				<div class="busqueda">
					<input type="text" />
					<input type="submit" value="Buscar" />
				</div>
				
				<!--Barra de navegación principal-->
				<nav class="menutop">
					<?php wp_nav_menu( array('menu' => 'Superior' )); ?> 
				</nav>
				
			</header>
			<!--Fin del header -->
