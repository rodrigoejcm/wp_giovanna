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
		<main id="main" class="site-main" role="main">
			<div class="row fullwidth-nomargin-contato fundo-contato">
				<br><br>
				<div class="container">
					<div class="contato row">
						<div class="col-md-5 col-md-offset-2 col-xs-12">	
								<!-- dev 1 prd 12-->
												
						<?php get_template_part('loop', 'page'); ?>	
					

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
						<div class="col-md-3 col-xs-12">
							<div class="box-contato-descricao">
								<p class="box-top">
						  			<img  src="<?=get_template_directory_uri().'/images/NN_icon_branco.png' ?>">	
						  		</p>
						  		
						  		<p class="descricao">
									Compartilhe com a gente dúvidas, sugestões, elogios ou uma questão ainda não solucionada.
								</p>
								 <p class="box-bottom">
							  		<img  src="<?=get_template_directory_uri().'/images/3pontos_branco.png' ?>">	
							  	</p>
							</div>
							<p class="telefone-contato">
								<img style="width: 16px; margin-top: -4px;" src="<?= get_template_directory_uri() . "/images/contato_icon_whats.png"?>"></img>
								 +55 (21) 98775 1693
							</p>
						</div>	
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
