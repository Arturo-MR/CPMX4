<?php get_header(); ?>
<!--Inicio Contenedor de información -->
			<div id="wrapper">
			
				<!--Título de la página -->
				<div class="pagetitle">
					<h2>Últimas Noticias</h2>
				</div>
				
				<!--Inicio contenedor de artículos -->
				<section id="contenidos">
					
					<!--Publicaciones-->
					<?php if(have_posts()) : ?>
						<?php while(have_posts()) : the_post(); ?>
					<article class="post">
						<!--Cabecera de las publicaciones -->
						<header class="post-title">
							<!--Título de la nota e información del autor y categoría-->
							<hgroup>
								<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
								<h3>Escrito por: <?php the_author_posts_link(); ?> en la categoría: <?php the_category(', '); ?> a las <?php the_time(); ?> el <?php the_date(); ?></h3>
							</hgroup>
						</header>
						
						<!--Contenido de las publicaciones-->
						<div class="post-entry">
						
							<!--Imagen destacada de la nota -->
							<div class="imgdestacada">
								<?php if ( has_post_thumbnail() ) {
the_post_thumbnail();
} else { ?>
<img src="<?php bloginfo('template_directory'); ?>/images/default-image.jpg" alt="<?php the_title(); ?>" />
<?php } ?>
							</div>
							<!--Resumen de la entrada -->
							<?php the_excerpt(); ?>
						</div>
						
						<!--Meta datos, etiquetas, categorías, etc -->
						<footer class="post-meta">
							<!--Etiquetas de la nota-->
							<div class="etiquetas">
							Etiquetas: <?php the_tags(', '); ?>
							</div>
							
							<!--Botón para seguir leyendo-->
							<span class="more">
								<a href="<?php the_permalink(); ?>">Leer más</a>
							</span>
						</footer>
					</article>
					<?php endwhile; ?>!
					<?php endif; ?>!
					<!--Fin publicaciones-->
				</section>
				<!--Fin contenedor de artículos -->
				
				<!--Inicio barra lateral -->
					<?php get_sidebar(); ?>
				<!--Fin Barra lateral-->
				
			</div>
			<!--Fin del Contenedor de información -->
<?php get_footer(); ?>