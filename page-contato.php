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
		<main id="main" class="site-main container" role="main">
		
		
		<div class="contato row">
			<div class="col-md-6 col-xs-12">	

					<?php echo do_shortcode( '[ninja_forms id=12]' );?>

<!-- 				<form id="form_contato" name="form_contato" method="post" action="" target="">
					<input type="hidden" name="acao" id="acao" value="enviar" align="left">
					<input type="hidden" name="classe" id="classe" value="contato" align="left">
					
					<div class="input-group input-group-lg">
						<input class="form-control" type="text" name="nome" id="nome_input" align="left" placeholder="Nome">
					</div>
					
					<div class="input-group input-group-lg">
						<input class="form-control" type="text" name="email" id="email_input" align="left" placeholder="E-mail">
					</div>

					<div class="form-group input-group">
						<textarea rows="4" class="form-control" id="mensagem_input" name="mensagem" 
						placeholder="Mensagem"></textarea>
					</div> -->
					<!-- 			
					<script type="text/javascript">	
						$(function(){
							$("input#telefone_input").setMask();	 
						});
					</script> -->
					
					<!-- <input type="text" name="telefone" id="telefone_input" align="left"  alt="phone" placeholder="Telefone">	 -->				
				<!-- 	
					<input class="botao-form-contato" type="submit" name="logar" value="Enviar">
				</form> -->

			</div>
			<div class="col-md-6 col-xs-12">
				<div class="img-contato">

					<div class="contato-tel">
						(21) 2709-3495
					</div>	
					<img  src="<?=get_template_directory_uri().'/images/exemplo.jpeg' ?>">	
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
