<?php /* Template Name: Home */ 
	
get_header(); ?>

<section>
	<div class="container-fluid no-padding p-relative">
		<img class="full-width" src="<?php echo get_template_directory_uri(); ?>/assets/imagens/home/vg-residuos.png" alt="vender residuos">
		<div class="container center-absolute-home text-center text-img">			
			<h1>Saiba agora como vender o seu resíduo e gere renda!</h1>
			<p>Preencha abaixo, nós encontramos o melhor tratador para você.</p>
			<div class="d-flex p-t-20">
				<div class="div-r">
					<input id="residuo" type="text" name="" placeholder="Qual resíduo você precisa destinar?">
					<input type="hidden" id="idresiduo" name="">
					<span class="fa fa-search icon-input"></span>
				</div>
				<div class="div-l">
					<input id="local" type="text" name="" placeholder="Qual sua localização?">
					<input type="hidden" id="idlocal" name="">
					<span class="fa fa-map-marker icon-input"></span>
				</div>
				<button class="btn-sub-hom"><i class="fa fa-arrow-right" onclick="redirect();"></i></button>
			</div>
		</div>
	</div>
</section>

<section>	
	<div class="container">
		<div class="row d-flex">
			<div class="col-md-8">
				<div class="d-flex">
					<div class="col-md-6 box-cities supplier">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/imagens/home/lwart.png">
						<h3 class="name"></h3>
						<p>Somos uma empresa que tem uma descrição escrita em várias linhas, porque eu pago a plataforma em um pacote que me dá direito ao perfil de tratador, se for ma…</p>
						<span class="city"></span> - <span class="estate"></span>
					</div>
					<div class="col-md-6 box-cities supplier">							
						<img src="<?php echo get_template_directory_uri(); ?>/assets/imagens/home/lwart.png">
						<h3 class="name"></h3>
						<p>Somos uma empresa que tem uma descrição escrita em várias linhas, porque eu pago a plataforma em um pacote que me dá direito ao perfil de tratador, se for ma…</p>
						<span class="city"></span> - <span class="estate"></span>												
					</div>
				</div>
				<div class="d-flex m-t-25">
					<div class="col-md-6 box-cities supplier">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/imagens/home/lwart.png">
						<h3 class="name"></h3>
						<p>Somos uma empresa que tem uma descrição escrita em várias linhas, porque eu pago a plataforma em um pacote que me dá direito ao perfil de tratador, se for ma…</p>
						<span class="city"></span> - <span class="estate"></span>
					</div>
					<div class="col-md-6 box-cities supplier">							
						<img src="<?php echo get_template_directory_uri(); ?>/assets/imagens/home/lwart.png">
						<h3 class="name"></h3>
						<p>Somos uma empresa que tem uma descrição escrita em várias linhas, porque eu pago a plataforma em um pacote que me dá direito ao perfil de tratador, se for ma…</p>
						<span class="city"></span> - <span class="estate"></span>
					</div>
				</div>
			</div>

			<div class="col-md-4">
				<div class="box-forms">
					<div class="d-inline-flex">
						<div class="p-r-25">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/imagens/home/tratador.png" alt="seja um tratador">
						</div>
						<div>
							<h3>Seja um tratador</h3>
							<a href="https://www.vgresiduos.com.br/mercado-de-residuos/">Cadastre-se<i class="fa fa-chevron-right p-l-20"></i></a>
						</div>
					</div>
				</div>
				<div class="box-forms m-t-25">
					<div class="d-inline-flex">
						<div class="p-r-25">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/imagens/home/experimente.png" alt="experimente o vg resíduos">
						</div>
						<div>
							<h3>Experimente o <br> VG Resíduos</h3>
						</div>
					</div>
					<form class="p-t-25">
						<input type="text" name="nome" placeholder="Nome">
						<input type="text" name="tel" placeholder="Telefone">
						<input type="text" name="email" placeholder="E-mail">
						<input type="password" name="senha" placeholder="Senha">
						<a class="btn-def btn-green full-width text-center" href="">Experimente grátis</a>
					</form>					
				</div>
				<div class="box-forms m-t-25">
					<div class="d-inline-flex">
						<div class="p-r-25 p-t-20">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/imagens/home/lucrar.png" alt="lucrar com resíduos">
						</div>
						<div>
							<h3>Descubra o quanto você pode lucrar</h3>
							<a href="https://vgresiduos.gestaogo.com.br/diagnostico-rapido/64">Faça um diagnóstico<i class="fa fa-chevron-right p-l-20"></i></a>
						</div>
					</div>					
				</div>
			</div>
		</div>
	</div>	
</section>

<section>
	<div class="container">
		<div class="row plataforma p-t-50 p-b-50 d-flex">
			<div class="col-md-4 tabs-home">
				<h2>Uma plataforma,<br>diversas soluções.</h2>
				<ul class="nav nav-tabs m-t-25">
				    <li class="active"><a data-toggle="tab" href="#home"><i class="fa fa-chevron-right"></i>Evite passivos ambientais</a></li>
				    <li><a data-toggle="tab" href="#menu1"><i class="fa fa-chevron-right"></i>Controle toda sua documentação</a></li>
				    <li><a data-toggle="tab" href="#menu2"><i class="fa fa-chevron-right"></i>Facilite sua gestão de informações</a></li>
				    <li><a data-toggle="tab" href="#menu3"><i class="fa fa-chevron-right"></i>Venda e compre facilmente</a></li>
				    <li><a data-toggle="tab" href="#menu4"><i class="fa fa-chevron-right"></i>Acompanhe sua gestão de resíduos</a></li>
				</ul>
			</div>
			<div class="col-md-8">
				<div class="tab-content">
				    <div id="home" class="tab-pane fade in active p-relative">
				      <img src="<?php echo get_template_directory_uri(); ?>/assets/imagens/home/plataforma-vg-residuos.png">
				      <div class="box-text-tabs">
				      	<h2>Evite passivos ambientais.</h2>
				      	<p>Controle totalmente seu resíduo, da geração até a destinação final, as áreas geradoras, os prestadores de serviços e seus documentos e relatórios.</p>
				      </div>				      
				    </div>
				    <div id="menu1" class="tab-pane fade">
				       <img src="<?php echo get_template_directory_uri(); ?>/assets/imagens/home/plataforma-vg-residuos.png">
				       <div class="box-text-tabs">
				      	<h2>Controle toda sua documentação.</h2>
				      	<p>Emita, sem riscos ou dificuldades, os relatórios e inventários exigidos por órgãos ambientais, como o IBAMA e CONAMA 313.</p>
				      </div>
				    </div>
				    <div id="menu2" class="tab-pane fade">
				       <img src="<?php echo get_template_directory_uri(); ?>/assets/imagens/home/plataforma-vg-residuos.png">
				       <div class="box-text-tabs">
				      	<h2>Facilite sua gestão de informações.</h2>
				      	<p>Controle toda a documentação e licenças dos seus prestadores de serviço.</p>
				      </div>
				    </div>
				    <div id="menu3" class="tab-pane fade">
				       <img src="<?php echo get_template_directory_uri(); ?>/assets/imagens/home/plataforma-vg-residuos.png">
				       <div class="box-text-tabs">
				      	<h2>Venda e compre facilmente.</h2>
				      	<p>Gere, de forma rápida e eficiente,  documentos e relatórios imprescindíveis para sua gestão interna.</p>
				      </div>
				    </div>
				    <div id="menu4" class="tab-pane fade">
				       <img src="<?php echo get_template_directory_uri(); ?>/assets/imagens/home/plataforma-vg-residuos.png">
				       <div class="box-text-tabs">
				      	<h2>Acompanhe sua gestão de resíduos.</h2>
				      	<p>Realize sua gestão completa, monitorando todo seu volume de geração e destinação de resíduos,  baseados em históricos, gráficos e relatórios.</p>
				      </div>
				    </div>
				  </div>
				</div>
			</div>
		</div>
	</div>
</section>

<section>
	<div class="container bg-lixeira text-right">
		<div class="v-center">
			<h2>Gere renda. <br> Afaste sanções e prejuízos.</h2>
			<h3>Faça a sua gestão automatizada, <br> simples e rápida.</h3>
			<a class="btn-def btn-green" href="https://www.vgresiduos.com.br/gerenciamento-de-residuos/"><i class="fa fa-chevron-right p-r-20"></i>Descubra as vantagens da gestão</a>
		</div>		
	</div>
</section>

<section>
	<div class="container-fluid no-padding">
		<div class="d-flex">
			<div class="col-md-4 no-padding">
				<div class="bg-green v-center">
					<h2>Andam falando sobre nós…</h2>
					<p>A VG Resíduos foi selecionada no Ranking 100 Open Startups (2017 e 2018),  no SEED (programa de aceleração) e no StartOut Brasil. Estamos entre as startups mais atraentes e engajadas do mercado e com potencial de internacionalização.</p>
				</div>	
			</div>
			<div class="col-md-8 box-premios">
				<div class="row">
					<div class="col-md-6 text-center">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/imagens/home/top-10-open-stratups-environment.png">
					</div>
					<div class="col-md-6 text-center">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/imagens/home/top-100-open-startups.png">
					</div>
				</div>
				<div class="row m-t-50">
					<div class="col-md-6 text-center">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/imagens/home/seed.png">						
					</div>
					<div class="col-md-6 text-center">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/imagens/home/startout.png">
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>