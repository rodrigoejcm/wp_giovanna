<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package tema-vemgerir
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main " role="main">
		<div class="container">
			<div id="page-content">
				<div class="parallax-window superheader-giovanna-orcamento" data-parallax="scroll" ></div>
				
				<div class="row">
					<div class="col-md-12 ">
						<div class="superheader-box-empresa">
						
							<p>
								SIMPLES E RÁPIDO
							</p>
						
						
						
						</div>
					</div>
				</div>
				<br>
				<br>
				<br>
				
				<div class="box-deco-orcamento">
					<p class="box-top">
					  	<img  src="<?=get_template_directory_uri().'/images/NN_icon_verde.png' ?>">	
					</p>
					<div class="form-orcamento">
						<?php get_template_part('loop', 'page'); ?>	
					</div>
					<p class="box-bottom">
					  	<img  src="<?=get_template_directory_uri().'/images/3pontos.png' ?>">	
					</p>
				</div>
			</div>
		</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
// [RODRIGO] DESABILITA sidebar
// posts e comentarios recentes, metas e categorias
//get_sidebar();
get_footer();
