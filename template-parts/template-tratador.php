<?php /* Template Name: Tratador */ 
	
get_header(); ?>

<section>
	<div class="bg-tratador">
		<div class="container v-center">
			<div class="row d-flex">
				<div class="col-md-4">
					<div class="box-forms">
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
				</div>
				<div class="col-md-8">
					<h1 class="v-center">Seja visto por milhares <br> de geradores e amplie <br> sua receita.</h1>
				</div>
			</div>
		</div>
	</div>
</section>

<section>
	<div class="container m-t-50">
		<div class="row d-flex text-center icons-text">
			<div class="col-md-4">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/imagens/tratador/vip.png" alt="lista vip resíduos">
				<h3 class="p-t-20">Faça parte da nossa <br> lista VIP</h3>
				<p>Apareça em todas as buscas por resíduos e tenha maior visibilidade e divulgação do seu negócio.</p>
			</div>
			<div class="col-md-4">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/imagens/tratador/negocios.png" alt="ampliar oportunidades negócios">
				<h3>Amplie suas possibilidades <br> de negócios</h3>
				<p>Faça sua oferta por um resíduo e participe do nosso leilão para ampliar seu negócio!</p>
			</div>
			<div class="col-md-4">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/imagens/tratador/gestao.png" alt="gerenciar gastos operações">
				<h3 class="p-t-20">Gerencie todos os gastos <br> e operações</h3>
				<p>Tenha o controle total e fácil do histórico de negociações, relatórios e status do processo.</p>
			</div>
		</div>
	</div>
</section>
	<div class="container-fluid m-t-50 m-b-150">
		<div class="row">
			<div class="col-md-7">
				<img class="full-width p-relative" src="<?php echo get_template_directory_uri(); ?>/assets/imagens/tratador/tratadores-vip.png" alt="lista vip tratadores">
				<img class="img-sobreposta" src="<?php echo get_template_directory_uri(); ?>/assets/imagens/tratador/tratadores.png" alt="tratadores">
			</div>
			<div class="col-md-5 tratadores-list">
				<h2>Faça parte de uma lista VIP de tratadores.</h2>
				<ol>
					<li>Seja visto por geradores do Brasil e <br> do mundo;</li>
					<li>Tenha sua documentação à disposição para todos os clientes;</li>
					<li>Compre e localize bons geradores <br> facilmente;</li>
					<li>Negocie apenas com empresas que estão em conformidade com a legislação.</li>
				</ol>
				<a class="btn-def btn-verde" onclick="scrollToElement('#planosVgresiduos', -100)">Seja um tratador VIP</a>
			</div>
		</div>
	</div>

<section>
	<div class="container p-t-50">
		<div class="row">
			<div class="col-md-6 icons-text">
				<div class="box-branco-r">
					<h2 class="text-right">Seja encontrado por milhares de geradores agora!</h2>
					<p class="p-t-20 text-right">Apareça no nosso mercado e tenha a possibilidade de se conectar e comunicar com diversos geradores de todo país.</p>
				</div>
			</div>
			<div class="col-md-6">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/imagens/tratador/tratador-encontrar.png" alt="tratadores encontrar">
			</div>
		</div>
	</div>
</section>

<section>
	<div class="container p-t-50">
		<div class="row">
			<div class="col-md-6">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/imagens/tratador/ampliar-clientes.png" alt="ampliar clientes">
			</div>
			<div class="col-md-6 icons-text">
				<div class="box-branco-l">
					<h2>Amplie seus clientes e gere mais renda!</h2>
					<p class="p-t-20">Conecte-se com geradores, faça ofertas e compre qualquer tipo de resíduo dentro da localidade desejada.</p>
				</div>
			</div>
		</div>
	</div>
</section>

<?php get_template_part( 'template-parts/content', 'planos' ); ?>

<?php get_footer(); ?>