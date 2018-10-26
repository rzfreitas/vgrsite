<?php /* Template Name: Results */ 
	
get_header(); ?>

<section>
	<div class="box-verde">
		<div class="container p-t-100 p-b-50">
			<h2 class="text-center p-b-25">Encontramos <strong>X tratadores</strong> para o resíduo na sua região. <br> Descubra quanto eles podem te oferecer, é grátis.</h2>
			<p class="text-center">Nós iremos buscar o melhor preço de mercado para você! Não se preocupe, você negocia apenas se desejar.</p>
		</div>
	</div>
	<div class="container">
		<form class="form-search">
			<div class="row">
				<div class="col-md-6 text-center">
					<input type="text" name="">
					<span class="fa fa-upload icon-input-r"></span>
				</div>
				<div class="col-md-6 text-center">
					<input type="text" name="">
					<span class="fa fa-tag icon-input-r"></span>
				</div>
			</div>
			<div class="row p-t-20">
				<div class="col-md-6 text-center">
					<input type="text" name="">
					<span class="fa fa-bitbucket icon-input-r"></span>
				</div>
				<div class="col-md-6 text-center">
					<input type="text" name="">
					<span class="fa fa-calendar-o icon-input-r"></span>
				</div>
			</div>
			<button type="button" class="orange-round" data-toggle="modal" data-target="#falta-pouco"><i class="fa fa-check"></i></button>
		</form>
	</div>
</section>

<section>
	<div class="container p-t-50 p-b-50 grid-results">
		<ul class="d-inline-flex p-b-25">
			<li class="sug">Outras sugestões:</li>
			<li class="rand-sug">Borracha</li>
			<li class="rand-sug">Vidro</li>
			<li class="rand-sug">Resíduos Orgânicos</li>
		</ul>
		<div class="row">
			<div class="col-md-8">
				<h2 class="p-b-25"><strong>Encontramos tratadores verificados para sua pesquisa…</strong></h2>
				<div class="d-flex">
					<div class="col-md-6 box-cities paying">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/imagens/home/lwart.png">
						<h3 class="nameTratador"></h3>
						<p>Somos uma empresa que tem uma descrição escrita em várias linhas, porque eu pago a plataforma em um pacote que me dá direito ao perfil de tratador, se for ma…</p>
						<span class="cityTratador"></span> - <span class="estateTratador"></span>
					</div>
					<div class="col-md-6 box-cities paying">							
						<img src="<?php echo get_template_directory_uri(); ?>/assets/imagens/home/lwart.png">
						<h3 class="nameTratador"></h3>
						<p>Somos uma empresa que tem uma descrição escrita em várias linhas, porque eu pago a plataforma em um pacote que me dá direito ao perfil de tratador, se for ma…</p>
						<span class="cityTratador"></span> - <span class="estateTratador"></span>												
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<h2>Seja um tratador cadastrado e amplie seu negócio!</h2><br>
				<p class="p-gray">Com o Mercado de Resíduos sua empresa pode aumentar seus clientes, gerar receita, diminuir despesas e afastar sanções ambientais.</p>
				<a class="btn-def btn-green" href="https://www.vgresiduos.com.br/mercado-de-residuos/">Seja um tratador verificado</a>
			</div>
		</div>
	</div>
</section>

<section>
	<div class="container grid-results p-b-50">
		<h2><strong>Tratadores para “Pneu Contaminado”</strong></h2>
	</div>
</section>

<section>
	<div class="container bg-lixeira text-right">
		<div class="v-center">
			<h2>Gere receita e tenha controle <br> total dos seus resíduos</h2>
			<h3>Gere receita com seus resíduos <br> e tenha controle total</h3>
			<a class="btn-def btn-green" href="https://www.vgresiduos.com.br/gerenciamento-de-residuos/"><i class="fa fa-chevron-right p-r-20"></i>Descubra as vantagens da gestão</a>
		</div>		
	</div>
</section>

<!-- Modal -->
  <div class="modal fade" id="falta-pouco" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title text-center t-fp">Agora falta pouco!</h4>
        </div>
        <div class="modal-body">
          <p class="text-center p-gray">A busca pode demorar alguns dias, precisamos apenas do seu contato para enviar o resultado.</p>
          <form>
          	<input type="email" name="" placeholder="E-mail">
          	<input type="email" name="" placeholder="Telefone">
          	<div class="text-right p-t-25 p-b-25">
          		<button type="button" class="btn-def btn-orange">Enviar</button>
          	</div>          	
          </form>
        </div>
      </div>
      
    </div>
  </div>

<?php get_footer(); ?>