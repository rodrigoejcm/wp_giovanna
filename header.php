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
		<header id="page-header" class="navbar-fixed-top">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-sm-6 col-xs-6">
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
					<div class="col-md-6 col-sm-6 col-xs-6">
						<div class="slicknav-responsivo"></div>
						<div class="row">
							<div class="col-md-12 col-sm-12 col-xs-12">
								<ul class="menu-contatos">
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
									
									<!-- <li class="redes-sociais">
										<img class="rs-wh"src="<?= get_template_directory_uri() . "/images/header_icon_whats.png"?>"></img>
									</li> -->
								</ul>
							</div>
						</div>
						<br>
						<div class="row">
							<div class="col-md-12 col-sm-12 col-xs-12">
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
			</div>
		</header>
		<div id="content-wrap">
