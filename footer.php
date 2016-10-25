		</div>
		<br>
		<br>
		<br>
		<footer id="page-footer" >
			<div class="container">
				<div class="row">
					<div class="col-md-10 col-md-offset-1">
						<ul class="logo-footer">
							<li><img src="<?= get_template_directory_uri() . "/images/fotter_icon_simbolo.png"?>"></img></li>
							<li class="ltda">GIOVANNA TRANSPORTE - SERVIÇOS DE TRANSPORTE DE CARGAS - ME</li>
						</ul>
					</div>	
				</div>
				<br>
				<div class="row">
					<div class="col-md-8 col-md-offset-1">
						<div class="row">
							<div class="info-footer">
								<div class="col-md-4">
									<div class="maps">
										<a href="https://www.google.com.br/maps/place/R.+Otac%C3%ADlio+Colares,+6+-+Gradim,+S%C3%A3o+Gon%C3%A7alo+-+RJ/@-22.8230175,-43.0828366,17z/data=!4m5!3m4!1s0x999b6a89fa82eb:0x29b0641e0dab3633!8m2!3d-22.8236257!4d-43.0800793">
											<img class="mapa" src="<?= get_template_directory_uri() . "/images/GNN-Google-Maps.png"?>"></img>	
										</a>
									</div>
									
								</div>
								<div class="col-md-8">
									<div class="info-contatos">
										<ul>
											<li class="endereco">
												<p>Rua Otacílio Colares lote 03 Qd. 06</p>
												<p>Gradim - São Gonçalo - RJ</p>
											</li>
											
											<li class="contatos">
												<p class="email">contato@gnntransporte.com</p>
												<p class="telefone">+55 (21) 2720 8753</p>
												<p class="telefone">+55 (21) 3857 4753</p>
												
												<p class="telefone"> +55 (21) 98775 1693 
													<img class="rs-wh" style="width: 16px; margin-top: -4px;" src="<?= get_template_directory_uri() . "/images/header_icon_whats.png"?>"></img> <span> [Atendimento 24H]</span> </p>
												<p class="telefone">+55 (21) 7829 3163 <span> [Atendimento 24H]</span></p>
											</li>
										
											<li>
												<div class="redes-sociais-footer">
													<ul>
														<li class="redes-sociais">
															<a href="https://www.facebook.com/GNNtransporte" target="_blank">
																<img class="rs-fb" src="<?= get_template_directory_uri() . "/images/header_icon_fb.png"?>"></img>
															</a>
															
														</li>
														<li class="redes-sociais">
															<a href="https://www.linkedin.com/company/giovanna-transporte" target="_blank">
																<img class="rs-li" src="<?= get_template_directory_uri() . "/images/header_icon_in.png"?>"></img>
															</a>
														</li>
														
													</ul>	
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-2">
						<ul class="footer-menu">
							<li>
								<a href="<?php echo get_permalink( get_page_by_title( 'A GNN' ) );?>">
											A GNN
								</a>
							</li>
							<li>
								<a href="<?php echo get_permalink( get_page_by_title( 'EQUIPAMENTOS' ) );?>">
											Equipamentos
								</a>
							</li>
							<li>
								<a href="<?php echo get_permalink( get_page_by_title( 'servicos' ) );?>">
											Serviços
								</a>
							</li>
							<li>
								<a href="<?php echo get_permalink( get_page_by_title( 'orcamento' ) );?>">
											Orçamento
								</a>

							</li>
							<li>
								<a href="<?php echo get_permalink( get_page_by_title( 'contato' ) );?>">
											Contato
								</a>								
							</li>
						</ul>
						
					</div>

							
				</div>	
			</div>
		</footer>
		<?php wp_footer() ?>
	</body>
</html>
