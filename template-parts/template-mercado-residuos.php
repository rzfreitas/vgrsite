<?php /* Template Name: Mercado de Resíduos */ ?>

<?php get_header(); ?>

<section id="mercado">
<div class="banner-mercado" id="img-banner"> 
	<div class="container v-center p-t-c p-b-c">
	    <div class="row">
		    <div class="col-md-7 p-t-50 p-t-c-50">
		      <div>
		      	<h1>Nós conectamos os <br> geradores de resíduos <br> aos principais tratadores <br> e fornecedores do Brasil.</h1>
		      </div>		      
		      <div class="p-t-50">
		      	<a class="btn-banner" data-toggle="modal" data-target="#tratador">EXPLORE O NOSSO MERCADO. <strong>É GRÁTIS!</strong></a>
		      </div>
		    </div>
		    <div class="col-md-5 p-t-c">
		    	<div class="box-white">
		            <h2>Nós temos mais de <span class="number-box">2.000</span> ofertas cadastradas em diferentes categorias de resíduos:</h2>
		            <div class="p-t-20">		            	
	            		<ul class="check">
	            			<li>Borracha</li>
	            			<li>Papel</li>
	            			<li>Químicos</li>
	            			<li>Sucata Geral</li>
	            			<li>Vidro</li>
	            		</ul>            			            	
		            </div>		            
		        </div> <!-- box --> 
		    </div>
		</div>
	</div>
</div>
</section>

<section id="mercado">
<div class="container p-t-50 p-b-50 p-t-c p-b-c">
	<h2 class="text-center p-b-50">COMO FUNCIONA?</h2>
	<div class="row text-center">
		<div class="col-md-3">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/imagens/mercado-residuos/mapa.png" alt="solicitações geradores">
			<h3>Geradores cadastram solicitações</h3>
			<p>Os geradores cadastrados na nossa plataforma informam qual resíduo e qual a quantidade produzida.</p>
		</div>
		<div class="col-md-3">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/imagens/mercado-residuos/oferta.png" alt="tratadores ofertas">
			<h3>Tratadores fazem <br> suas ofertas</h3>
			<p>Tratadores de todo o país podem fazer ofertas de tratamento ou compra dos resíduos ofertados.</p>
		</div>
		<div class="col-md-3">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/imagens/mercado-residuos/melhor-oferta.png" alt="sistema seleciona melhor oferta">
			<h3>NOSSO SISTEMA SELECIONA A MELHOR OFERTA</h3>			
			<p>De forma totalmente automatizada a plataforma seleciona qual a oferta ganhadora do leilão.</p>
		</div>
		<div class="col-md-3">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/imagens/mercado-residuos/negocio-fechado.png" alt="conclusão megócio">
			<h3>TUDO PRONTO! <br> NEGÓCIO FECHADO</h3>
			<p>Colocamos gerador e tratador em contato pela plataforma. Ambos se avaliam após conclusão do serviço.</p>
		</div>
	</div>
</div>
</section>

<section id="mercado">
<div class="container p-t-50 p-b-50 p-t-c p-b-c">
	<div class="row">
		<div class="col-md-6">
			<h2>QUAIS SÃO OS BENEFÍCIOS <br> PARA MINHA EMPRESA?</h2>

			<p>Com o Mercado de Resíduos sua empresa pode gerar receita, diminuir despesas e, ainda, evitar passivos ambientais ao cumprir a legislação referente à destinação/disposição ambientalmente adequada de resíduos.</p>

			<p>A plataforma serve para integrar interessados em resíduos e, sobretudo, estruturar uma rede de contatos que garanta o oferecimento de soluções para compra, venda, tratamento e transporte de resíduos em escala nacional.</p>

			<p>São milhares de empresas de todo o Brasil reunidas em um único lugar, com acessibilidade 24 horas por dia, de qualquer lugar do mundo. São compradores, vendedores e fornecedores (transportadores e tratadores) integrados com o objetivo comum de transformar prejuízo em receita. E todos saem ganhando!</p>
		</div>
		<div class="col-md-6 p-t-30">
			<ol class="custom-counter">
				<li><span class="ol-title">Praticidade</span><br>
					<span class="ol-text">Fácil de anunciar, de vender e de localizar fornecedores</span>
				</li>
				<li><span class="ol-title">Gestão Total</span><br>
					<span class="ol-text">Histórico de negociações, relatórios, status do processo</span>
				</li>
				<li><span class="ol-title">COMODIDADE</span><br>
					<span class="ol-text">Acesso 24 horas por dia, de qualquer lugar do mundo</span>
				</li>
				<li><span class="ol-title">Fácil Comunicação</span><br>
					<span class="ol-text">Fácil comunicação entre vendedores, compradores e fornecedores</span>
				</li>
				<li><span class="ol-title">SEGURANÇA</span><br>
					<span class="ol-text">Empresas que estão em conformidade com as legislações</span>
				</li>
			</ol>			
		</div>
	</div>
</div>
</section>

<section>
<div class="conversion">
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<h2 class="p-t-20">COMECE A USAR AGORA MESMO SEM NENHUM CUSTO!</h2>
			</div>
			<div class="col-md-4">
				<a data-toggle="modal" data-target="#tratador">ACESSE O MERCADO DE RESÍDUOS</a>
			</div>
		</div>
	</div>
</div>
</section>

<!-- Modal Mapa Tratador -->
<div class="modal fade" id="tratador" role="dialog">
  <div class="modal-dialog">  
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Teste o nosso <strong>mercado</strong> agora!</h4>
      </div>
      <div class="modal-body">
        <?php echo do_shortcode('[contact-form-7 id="777" title="Tratador"]'); ?>
      </div>
      <div class="modal-footer">
        <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button> -->
      </div>
    </div>    
  </div>
</div>

<?php get_footer(); ?>