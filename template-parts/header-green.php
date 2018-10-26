<header>
<div class="bg-header-green" id="masthead">
	<div class="container-fluid">
		<div class="row d-flex">
			<div class="site-logo col-sm-9 col-xs-9 col-md-3">	
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">						
					<img src="<?php echo get_template_directory_uri(); ?>/assets/imagens/logo/logo-vgresiduos-branca.png" alt="logo vg resíduos">				
				</a>
			</div>
			<div class="col-md-4 search-g-h hidden-xs">
				<input class="v-center" type="text" name="" placeholder="Pesquisar...">
				<span class="fa fa-search icon-input-h-g"></span>
			</div>
			<div class="col-sm-3 col-xs-3 col-md-5 text-right">
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
							<a class="btn-def btn-white v-center" href="https://novo.vgresiduos.com.br/bem-vindo">Experimente Grátis</a>
						</div>
					</div>
					<div class="visible-sm visible-xs p-t-20">
						<span class="menu-mob" id="openNav">&#9776;</span>
					</div>
				</div>				
			</div>
		</div>
	</div>
</div>
</header>

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