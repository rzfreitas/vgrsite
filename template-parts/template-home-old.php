<?php /* Template Name: Home */ 
	
get_header(); ?>

<?php if( have_rows('slides') ): ?>
	<ul class="slides">
	<?php while( have_rows('slides') ): the_row(); 
		// vars
		$image = get_sub_field('img_slide');
		$titulo_slide = get_sub_field('titulo_slide');
		$content = get_sub_field('texto_slide');
		?>

		<li class="slide">
			<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
		    <div class="content-slide container">
		    	<h2><?php echo $titulo_slide; ?></h2>
		    	<?php echo $content; ?>
		    </div>
		</li>
	<?php endwhile; ?>
	</ul>
<?php endif; ?>

<section>
	<div class="bg-clientes">
		<div class="container">
			<?php if( have_rows('clientes') ): ?>
			<ul class="clientes">
			<?php while( have_rows('clientes') ): the_row(); 
				// vars
				$imagecliente = get_sub_field('cliente_img');
				?>

				<li class="cliente">
					<img class="img-responsive" src="<?php echo $imagecliente['url']; ?>" alt="<?php echo $imagecliente['alt'] ?>" />
				</li>
			<?php endwhile; ?>
			</ul>
			<?php endif; ?>
		</div>
	</div>
</section>

<section>
	<div class="container m-t-50">
		<div class="row">
			<div class="col-md-6">
				<h2><?php the_field('titulo1'); ?></h2>
			</div>			
		</div>
		<div class="p-t-25 p-b-25">
			<p><?php the_field('conteudo1'); ?></p>
		</div>
		<div class="row">
			<a class="btn-blue float-right">Como estar em <strong>Compliance?</strong></a>	
		</div>
	</div>
</section>

<!-- <section>
	<div class="container box-content m-t-50">
		<h2><?php the_field('titulo2'); ?></h2>
		<div class="p-t-25">
			<p><?php the_field('conteudo2'); ?></p>
		</div>	
	</div>
</section> -->

<section>
	<div class="bg-azul">
		<div class="container-fluid no-padding">
			<div class="container">
				<h2>Ferramentas <br> <strong>de compliance</strong></h2>
			</div>
			<div class="card-content m-t-50 float-left">
				<div class="container">
					<div class="row d-flex">
						<div class="col-xs-12 col-sm-12 col-md-9 no-padding box-branco">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/imagens/Análise-de Risco-Jurídico.png" alt="Análise Risco Jurídico">
							<h2>Análise de <br> <strong>Risco Jurídico</strong></h2>
							<div class="p-30">
								<p>Desenvolvida a partir de estudos e metodologias próprias da Verde Ghaia, a Análise de Risco Jurídico visa assessorar os clientes na gestão de riscos ambientais e de saúde e segurança de suas atividades.</p>

								<p>Em uma Análise de Risco Jurídico, as não conformidades identificadas em Auditoria de Conformidade Legal são analisadas para, a partir delas e outros documentos solicitados, ser criada uma Matriz de Risco personalizada.</p>

								<p>Esta matriz é elaborada após a equipe jurídica correlacionar os desvios (não atendimento as exigências normativas) com as penalidades administrativas, civis e penais imputadas aos desvios identificados.</p>

								<p>De posse deste levantamento é possível apontar para o cliente quais são as adequações prioritárias, classificando os riscos, apontando como prioritário a ser regularizadas as omissões com grau de penalizações mais severas.</p>
							
								<div class="row box-b-t">
									<div class="col-md-4">
										<strong>O QUE É: </strong>
										<p>É a análise das não conformidades  por quesito  não atendido e criação de matriz de risco.</p>
									</div>
									<div class="col-md-4">
										<strong>PÚBLICO:</strong> 
										<p>Organizações que desejam gerenciar suas não conformidades através de uma matriz de risco.</p>
									</div>
									<div class="col-md-4">
										<strong>COMO: </strong>
										<p>Para apresentar as prioridades, avalia-se as sanções (administrativas, civis e penais) passíveis pelo descumprimento da norma e aponta como prioritário de regulação as omissões com grau de penalizações mais severas.</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-3 bar-azul border-radius-r text-center">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/imagens/icone-analise-risco-juridico.png" alt="Análise Risco Jurídico">
							<div class="vantagens">
								<h4>Vantagens:</h4>
								<ul>
									<li><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><br><br>
									Ter ciência das possíveis consequências de um eventual não atendimento a cada uma das não conformidades identificadas.</li>
									<li><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><br><br>
									Definir quais são as ações prioritárias de atendimento.</li>
									<li><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><br><br>
									Evitar prejuízos financeiros, de imagem e operacionais.</li>
									<li><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><br><br>
									Definição de prioridades de atendimento.</li>
									<li><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><br><br>
									Direcionamento de tratativa dos desvios identificados. (Due Diligence).</li>
								</ul>
							</div>
							<button class="btn-red btn-radius-r">Contrate</button>
						</div>
					</div>
				</div>
			</div>

			<div class="card-content hidden-sm hidden-xs m-t-50 float-right">
				<div class="container">
					<div class="row d-flex">
						<div class="col-md-3 bar-azul border-radius-l text-center">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/imagens/icone-analise-risco-juridico.png" alt="Análise Risco Jurídico">
							<div class="vantagens">
								<h4>Vantagens:</h4>
								<ul>
									<li><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><br><br>
									Ter ciência das possíveis consequências de um eventual não atendimento a cada uma das não conformidades identificadas.</li>
									<li><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><br><br>
									Definir quais são as ações prioritárias de atendimento.</li>
									<li><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><br><br>
									Evitar prejuízos financeiros, de imagem e operacionais.</li>
									<li><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><br><br>
									Definição de prioridades de atendimento.</li>
									<li><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><br><br>
									Direcionamento de tratativa dos desvios identificados.</li>
								</ul>
							</div>
							<button class="btn-red btn-radius-l">Contrate</button>
						</div>
						<div class="col-md-9 no-padding box-branco">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/imagens/due-diligence.png" alt="due diligence">
							<h2>Due <br> Diligence</h2>
							<div class="p-30">
								<p>Caso a empresa necessite de uma análise mais pormenorizada das consequências, bem como das tratativas necessárias para tratar cada uma das não conformidades identificadas, a equipe de análise de Riscos Jurídicos, também está apta a realizar. Trata-se do serviço de Due Diligence.</p>

								<p>O relatório da Auditoria de Due Diligence apresenta todos os itens da Análise de Risco Jurídico complementado por Pareceres e sugestões de adequação de cada um dos desvios identificados na empresa.</p>
	   
								<p>Ao final, em ambos os serviços é gerado um diagnóstico final com avaliação da situação da empresa.</p>
							
								<div class="row box-b-t">
									<div class="col-md-4">
										<strong>O QUE É: </strong>
										<p>Trata-se de um trabalho mais complexo que o de Risco Legal, uma vez que, além do realizado neste último, a Auditoria de Due Diligence é complementado por Pareceres e Sugestões de adequação.</p>
									</div>
									<div class="col-md-4">
										<strong>PÚBLICO:</strong> 
										<p>A Auditoria de Due Diligence geralmente é contratada em processos de aquisição, fusão, empresas de capital aberto, empresas que possuem compliance ou venda de organizações.</p>
									</div>
									<div class="col-md-4">
										<strong>OBJETIVO: </strong>
										<p>Nortear a empresa dos desvios (não conformidades) prioritários de serem solucionadas e apresentar Pareceres Jurídicos que direcionam o cliente sobre o que a Lei exige, auxiliando-o na tomada de decisão.</p>
									</div>
								</div>
							</div>
						</div>					
					</div>
				</div>
			</div>

			<div class="card-content visible-xs visible-sm m-t-50 float-right">
				<div class="container">
					<div class="row d-flex">
						<div class="col-md-9 no-padding box-branco">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/imagens/due-diligence.png" alt="due diligence">
							<h2>Due <br> Diligence</h2>
							<div class="p-30">
								<p>Caso a empresa necessite de uma análise mais pormenorizada das consequências, bem como das tratativas necessárias para tratar cada uma das não conformidades identificadas, a equipe de análise de Riscos Jurídicos, também está apta a realizar. Trata-se do serviço de Due Diligence.</p>

								<p>O relatório da Auditoria de Due Diligence apresenta todos os itens da Análise de Risco Jurídico complementado por Pareceres e sugestões de adequação de cada um dos desvios identificados na empresa.</p>
	   
								<p>Ao final, em ambos os serviços é gerado um diagnóstico final com avaliação da situação da empresa.</p>
							
								<div class="row box-b-t">
									<div class="col-md-4">
										<strong>O QUE É: </strong>
										<p>Trata-se de um trabalho mais complexo que o de Risco Legal, uma vez que, além do realizado neste último, a Auditoria de Due Diligence é complementado por Pareceres e Sugestões de adequação.</p>
									</div>
									<div class="col-md-4">
										<strong>PÚBLICO:</strong> 
										<p>A Auditoria de Due Diligence geralmente é contratada em processos de aquisição, fusão, empresas de capital aberto, empresas que possuem compliance ou venda de organizações.</p>
									</div>
									<div class="col-md-4">
										<strong>OBJETIVO: </strong>
										<p>Nortear a empresa dos desvios (não conformidades) prioritários de serem solucionadas e apresentar Pareceres Jurídicos que direcionam o cliente sobre o que a Lei exige, auxiliando-o na tomada de decisão.</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-3 bar-azul border-radius-l text-center">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/imagens/icone-analise-risco-juridico.png" alt="Análise Risco Jurídico">
							<div class="vantagens">
								<h4>Vantagens:</h4>
								<ul>
									<li><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><br><br>
									Ter ciência das possíveis consequências de um eventual não atendimento a cada uma das não conformidades identificadas.</li>
									<li><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><br><br>
									Definir quais são as ações prioritárias de atendimento.</li>
									<li><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><br><br>
									Evitar prejuízos financeiros, de imagem e operacionais.</li>
									<li><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><br><br>
									Definição de prioridades de atendimento.</li>
									<li><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><br><br>
									Direcionamento de tratativa dos desvios identificados.</li>
								</ul>
							</div>
							<button class="btn-red btn-radius-l">Contrate</button>
						</div>											
					</div>
				</div>
			</div>

		</div> <!-- container-fluid -->
	</div><!-- bg-azul -->

	<div class="bg-celeste">
		<div class="container-fluid no-padding">
			<div class="container text-center">				
				<h2><strong>Outros serviços</strong> <br> do Risco Legal</h2>				
			</div>
			
			<div class="container box-branco-radius m-t-50 p-30">
				<div class="row d-flex border-b">
					<div class="col-md-3 text-center">
						<img class="img-servicos" src="<?php echo get_template_directory_uri(); ?>/assets/imagens/pareceres.png" alt="pareceres">
						<h3>Pareceres</h3>
					</div>
					<div class="col-sm-12 col-xs-12 p-t-20 col-md-9">						
						<p>Os Pareceres Jurídicos visam analisar determinado tema de interesse da empresa e dar um embasamento legal para a tomada de decisão.</p>

						<p>Com este serviço, após o exame do problema do cliente sob a ótica da legislação, doutrinária e jurisprudencial, a equipe jurídica da VG consegue apresentar um minucioso Parecer que indica soluções para a problemática.</p>

						<p>A equipe especializada da Verde Ghaia está apta a produzir completos Pareceres Técnico-Jurídicos e/ou Pareceres Jurídicos para seus clientes.</p>				
					</div>					
				</div>
				<div class="text-center p-t-20">
					<ul class="vantagens-list-6">
						<li><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><br><br>
						<p>Tratativas dos problemas da empresa, amparada pelo melhor entendimento jurídico sobre o assunto</p></li>							
						<li><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><br><br>
						<p>Respaldo jurídico para tomada de decisão</p></li>							
					</ul>
					<div class="p-t-20">
						<a class="btn-red2">Contrate</a>
					</div>
				</div>
			</div>

			<div class="container box-branco-radius m-t-50 p-30">
				<div class="row d-flex border-b">
					<div class="col-md-3 text-center">
						<img class="img-servicos" src="<?php echo get_template_directory_uri(); ?>/assets/imagens/seguro-ambiental.png" alt="seguro ambiental">
						<h3><strong>Seguro</strong> <br> ambiental</h3>
					</div>
					<div class="col-sm-12 col-xs-12 p-t-20 col-md-9">						
						<p>O Seguro Ambiental Verde Ghaia é um produto diferenciado, desenhado especialmente para empresas que desejam se resguardar de problemas caso, eventualmente, ocorra algum acidente ambiental em sua instalação.</p>
 
						<p>Referido produto possibilita o desenho de uma apólice customizada para as necessidades de cada cliente e, além disso, considera todo o esforço do cliente no que tange ao atendimento da legislação aplicável ao meio ambiente. Ou seja, na nossa visão, se sua empresa já possui controle das normas ambientais, é certificada na ISO 14001, ela merece um tratamento diferenciado!</p>

						<p>Foi pensando nisto que a VG, juntamente com a Vertex e AIG Seguros desenvolveram uma metodologia inovadora de avaliação de riscos. 
						Saiba mais em: <a href="vgseguroambiental.com.br">vgseguroambiental.com.br</a></p>	
					</div>					
				</div>
				<div class="text-center p-t-20">
					<ul class="vantagens-list">
						<li><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><br><br>
						<p>Assistência consultiva por especialistas.</p>
						</li>						
						<li><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><br><br>
						<p>Identificação de potenciais exposições</p>
						</li>
						<li><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><br><br>
						<p>Mais tranquilidade no momento da regulação de sinistros</p>
						</li>
						<li><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><br><br>
						<p>Antecipação de impactos ambientais que podem afetar os resultados de curto e longo prazo da empresa</p>
						</li>
						<li><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><br><br>
						<p>Prevenção de perdas</p>
						</li>
					</ul>
					<div class="p-t-20">
						<a class="btn-red2">Contrate</a>
					</div>
				</div>
			</div>

			<div class="container box-branco-radius m-t-50 p-30">
				<div class="row d-flex border-b">
					<div class="col-md-3 text-center">
						<img class="img-servicos" src="<?php echo get_template_directory_uri(); ?>/assets/imagens/relatorios-obrigacoes.png" alt="Relatório Obrigações Provedores Externos">
						<h3><strong>Relatório</strong><br>de Obrigações</h3><p class="f-azul">(Provedores Externos )</p>
					</div>
					<div class="col-sm-12 col-xs-12 p-t-20 col-md-9">						
						<p>Trata-se do levantamento das legislações e obrigações documentais que devem ser apresentadas pelos prestadores de serviço e fornecedores de determinado segmento, considerando as obrigações legais relacionadas aos sistemas de Meio Ambiente e Saúde e Segurança do Trabalhado.</p>

						<p>Este serviço foi desenvolvido para organizações que desejam gerenciar os documentos essenciais de seus provedores externos (Fornecedores e prestadores de serviços), conforme item 8.1 – controle operacional da ISO 14001:2015.</p>	
					</div>					
				</div>
				<div class="text-center p-t-20">
					<ul class="vantagens-list">
						<li><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><br><br>
						<p>Assistência consultiva por especialistas.</p></li>							
						<li><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><br><br>
						<p>Identificação de legislações e obrigações correlatas dos principais prestadores de serviço e fornecedores.</p></li>
						<li><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><br><br>
						<p>Gestão e controle eficaz.</p></li>
						<li><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><br><br>
						<p>Comprovação de atendimento das normas de gestão (meio ambiente, qualidade e SST).</p></li>
					</ul>
					<div class="p-t-20">
						<a class="btn-red2">Contrate</a>
					</div>
				</div>
			</div>
			
			<div class="container box-branco-radius m-t-50 p-30">
				<div class="row d-flex border-b">
					<div class="col-md-3 text-center">
						<img class="img-servicos" src="<?php echo get_template_directory_uri(); ?>/assets/imagens/assessoria-juridica.png" alt="assessoria juridica">
						<h3><strong>Assessoria Jurídica</strong><br> <p>MA e  SST</p></h3>
					</div>
					<div class="col-sm-12 col-xs-12 p-t-20 col-md-9">						
						<p>Os Pareceres Jurídicos visam analisar determinado tema de interesse da empresa e dar um embasamento legal para a tomada de decisão.</p>

						<p>Com este serviço, após o exame do problema do cliente sob a ótica da legislação, doutrinária e jurisprudencial, a equipe jurídica da VG consegue apresentar um minucioso Parecer que indica soluções para a problemática.</p>

						<p>A equipe especializada da Verde Ghaia está apta a produzir completos Pareceres Técnico-Jurídicos e/ou Pareceres Jurídicos para seus clientes.</p>
					</div>					
				</div>
				<div class="text-center p-t-20">
					<ul class="vantagens-list-6">
						<li><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><br><br>
						<p>Tratativas dos problemas da empresa, amparada pelo melhor entendimento jurídico sobre o assunto.</p>
						</li>						
						<li><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><br><br>
						<p>Respaldo jurídico para tomada de decisão.</p>
						</li>							
					</ul>
					<div class="p-t-20">
						<a class="btn-red2">Contrate</a>
					</div>
				</div>
			</div>
			
			<div class="container box-branco-radius m-t-50 p-30">
				<div class="row d-flex border-b">
					<div class="col-md-3 text-center">
						<img class="img-servicos" src="<?php echo get_template_directory_uri(); ?>/assets/imagens/Oficios-Reunioes-Orgaos-Administrativos.png" alt="Ofícios Reuniões Órgãos Administrativos">
						<h3>Ofícios e Reuniões em Órgãos Administrativos</h3>
					</div>
					<div class="col-sm-12 col-xs-12 p-t-20 col-md-9">						
						<p>Os Ofícios e/ou as participações da equipe de Risco Legal em reuniões junto a órgãos administrativos visam assessorar o cliente nas tratativas oficiais.</p>

						<p>O Ofício é um documento elaborado para realizar um comunicado ou questionamento oficial com os órgãos públicos., elaborados quando as organizações desejam questionar, requerer ou comunicar um fato ao órgão.</p>
					</div>					
				</div>
				<div class="text-center p-t-20">
					<ul class="vantagens-list-6">
						<li><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><br><br>
						<p>Elaboração de documento com a transcrição real do objetivo da empresa.</p></li>
						<li><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><br><br>
						<p>Participação em reuniões junto aos órgãos, por especialistas</p></li>
					</ul>
					<div class="p-t-20">
						<a class="btn-red2">Contrate</a>
					</div>
				</div>
			</div>
			
		</div> <!-- bg-celeste -->
	</div> <!-- container-fluid -->
</section>

<section>
<div class="container equipe m-t-50">
	<h2>Equipe</h2>
</div>
<div class="container m-t-50">
	<?php if( have_rows('equipe') ): ?>
	<ul class="equipe">
	<?php while( have_rows('equipe') ): the_row(); 
		// vars
		$foto_membro = get_sub_field('foto_membro');
		?>

		<li class="row card-membro d-flex">
			<div class="col-xs-12 col-sm-12 col-md-3 text-center">
				<img class="img-responsive" src="<?php echo $foto_membro['url']; ?>" alt="<?php echo $foto_membro['alt'] ?>" /><br><br>
				<a class="btn-conheca" href="<?php the_sub_field('linkdedin'); ?>">Conheça mais</a>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-9 p-t-25">
				<h3><?php the_sub_field('nome_membro'); ?></h3>
				<p><?php the_sub_field('cargo_membro'); ?></p>
				<?php the_sub_field('descricao_membro'); ?>
			</div>		
		</li>
	<?php endwhile; ?>
	</ul>
	<?php endif; ?>
</div>
</section>

<?php get_footer(); ?>