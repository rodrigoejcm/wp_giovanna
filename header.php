<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes() ?>><![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8" <?php language_attributes() ?>><![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9" <?php language_attributes() ?>><![endif]-->
<!--[if gt IE 8]><!--><html class="no-js" <?php language_attributes() ?>><!--<![endif]-->
    <head>
        <meta charset="<?php bloginfo( 'charset' ) ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width">
        <title><?php wp_title( '|', true, 'right' ) .  bloginfo('name') ?> </title>
		<meta name="author" content="">
		<link rel="author" href="">
		<?php wp_head() ?>
    </head>
    <body <?php body_class() ?>>
		<header id="page-header">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div id="page-logo">
							<?php if (!is_front_page()): ?>
								<a href="<?php bloginfo('url') ?>" title="<?php bloginfo('name') ?> - <?php bloginfo('description') ?>">
									<img src="<?= get_template_directory_uri() . "/images/logo-giovanna.png"?>"></img>	
								</a>
							<?php else: ?>
								<img src="<?= get_template_directory_uri() . "/images/logo-giovanna.png"?>"></img>
							<?php endif; ?>
						</div>
					</div>
					<div class="col-md-6">
						<div class="row">
							<ul class="menu-contatos">
								<li class="contatos">
									<p class="email">contato@giovannatransporte.com.br</p>
									<p class="telefone">(21) 2709-3495</p>
								</li>
								<li class="redes-sociais">
									<img src="<?= get_template_directory_uri() . "/images/icones-redes-sociais_fb.png"?>"></img>
								</li>
								<li class="redes-sociais">
									<img src="<?= get_template_directory_uri() . "/images/icones-redes-sociais_li.png"?>"></img>
								</li>
								<li class="redes-sociais">
									<img src="<?= get_template_directory_uri() . "/images/icones-redes-sociais_wh.png"?>"></img>
								</li>
							</ul>
						</div>
						<div class="row">
							<div class="menu_wp">
								<?php wp_nav_menu(array(
									'theme_location' => 'main-nav',
									'container'      => 'nav',
									'container_id'   => 'primary-nav'
								)) ?>	
							</div>
						</div>
						
					</div>	
				</div>
			</div>
		</header>
		<div id="content-wrap">
