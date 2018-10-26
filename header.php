<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package risco-legal
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site wrapper">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'risco-legal' ); ?></a>

	<?php if(is_page( array ('Gerador' , 'Tratador', 'Resultados busca'))){
		get_template_part('template-parts/header' , 'green'); }	else{ ?>


	<?php if(!is_singular( 'post' ) && !is_page('Blog')){ ?>
	<header id="masthead" class="site-header idHeader">
	<?php } else { ?>
	<header id="masthead" class="site-header white-header">
	<?php } ?>
		<div class="container-fluid">
			<div class="row d-flex">
				<div class="site-logo col-sm-9 col-xs-9 col-md-3">	
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<?php if(!is_singular( 'post' )&& !is_page('Blog')){ ?>
						<div class="logo-top"></div>
						<?php } else { ?>
						<div class="logo-top-v"></div>
						<?php } ?>
					</a>
				</div>
				<div class="col-sm-3 col-xs-3 col-md-9 text-right">
					<div class="v-center">						
						<div class="d-inline-flex">
							<div>
								<nav id="site-navigation" class="hidden-xs main-navigation">
								<?php
								wp_nav_menu( array(
									'theme_location' => 'menu-1',
									'menu_id'        => 'primary-menu',
								) );
								?>
								</nav><!-- #site-navigation -->
							</div>
							<div class="hidden-xs">
								<a class="btn-def btn-white" href="https://novo.vgresiduos.com.br/bem-vindo">Experimente Grátis</a>
							</div>
						</div>
						<div class="visible-sm visible-xs p-t-20">
							<span class="menu-mob" id="openNav">&#9776;</span>
						</div>
					</div>				
				</div>
			</div>
		</div>
	</header><!-- #masthead -->

	<div id="mySidenav" class="sidenav visible-sm visible-xs">
		<a href="javascript:void(0)" class="closebtn" id="closeNav">&times;</a>
		<nav>
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
			?>
		</nav>
	</div>

	<div id="content" class="site-content">
<?php } ?>