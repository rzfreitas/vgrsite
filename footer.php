<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package risco-legal
 */

?>

	</div><!-- #content -->

	<section>
		<?php if(!is_singular( 'post' ) && !is_page('Blog')){?>
			<?php get_template_part( 'template-parts/content', 'noticias' ); ?>
		<?php }?>   
	</section>

	<footer class="n-footer">
		<div class="container block-links">
			<div class="col-md-2 links">
				<ul>
					<h5 class="p-b-15"><strong>Links úteis</strong></h5>
					<li><a href="<?php echo get_home_url(); ?>/blog" target="_blank"> Blog </a></li>
					<li><a href="https://www.verdeghaia.com.br/biblioteca" target="_blank"> Biblioteca VG </a></li>
					<li><a href="http://www.abnt.org.br/ " target="_blank"> ABNT </a></li>
					<li><a href="http://www.iso.org/iso/home.html" target="_blank"> ISO </a></li>
					<li><a href="https://sogi8.sogi.com.br/" target="_blank"> soGI8 </a></li>
					<li><a href="http://deivisonpedroza.com.br/" target="_blank"> Deivison Pedroza </a></li>
					<li><a href="http://palestrantesfamosos.org" target="_blank"> Palestrantes Famosos </a></li>
					<li><a href="http://futurelegis.sogi.com.br/" target="_blank"> FutureLegis </a></li>
				</ul>
			</div>

			<div class="col-md-2 links">
				<ul>
					<h5 class="p-b-15"><strong>Sobre Nós</strong></h5>
					<li><a href="https://www.verdeghaia.com.br/" target="_blank"></i> Verde Ghaia Grupo </a></li>
					<li><a href="https://www.vgresiduos.com.br/" target="_blank"></i> VG Resíduos </a></li>
					<li><a href="https://www.consultoriaiso.org/" target="_blank"> Consultoria Online </a></li>
					<li><a href="http://oksigeno.org.br/" target="_blank"> Instituto Oksigeno </a></li>
					<li><a href="http://vgriscolegal.com.br/site/" target="_blank"> VG Risco Legal </a></li>
					<li><a href="http://www.vgbioenergia.com.br/" target="_blank"> VG Bio Energia </a></li>
				</ul>
			</div>

			<div class="col-md-2 links">
				<ul>
					<h5 class="p-b-15"><strong>Produtos</strong></h5>
					<li><a href="http://www.consultoriaiso.org/iso-9001/o-que-e-iso-9001/" target="_blank">ISO 9001</a></li>
					<li><a href="http://www.consultoriaiso.org/iso-14001/o-que-e-iso-14001/" target="_blank">ISO 14001</a></li>
					<li><a href="http://www.consultoriaiso.org/iso-22000/o-que-e-iso-22000/" target="_blank">ISO 22000</a></li>
					<li><a href="http://www.consultoriaiso.org/ohsas-18001/o-que-e-ohsas-18001/" target="_blank">OHSAS 18001</a></li>
					<li><a href="http://www.consultoriaiso.org/iso-9001/migracao-para-empresas-certificadas-iso-9001-2015/" target="_blank">Migração ISO 9001 versão 2015</a></li>
				</ul>
			</div>

			<div class="col-md-2 links">
				<ul>
					<h5 class="p-b-15"><strong>Franquias</strong></h5>
					<li>Norte Fluminense - RJ</li>
					<li>Central Mineira - MG</li>
					<li>Porto Alegre - RS</li>
					<li>Guarulhos - SP</li>
					<li>Recife - RE</li>
					<li>Dourados - MS</li>
					<li>Campinas - SP</li>
					<li>Serra - ES</li>
					<li>Ilhéus - BA</li>
				</ul>
			</div>

			<div class="col-md-2 links">
				<ul>
					<h5 class="p-b-15"><strong>Matriz</strong></h5>
					<li class="p-b-15">Av Raja Gabáglia, n° 555, Cidade Jardim/MG</li>
					<h5 class="p-b-15"><strong>Regional</strong></h5>
					<li>Av Brigadeiro Luiz Antônio, n° 2909, Sala 64/65, Jardim Paulista/SP - CEP: 01401-000</li>
				</ul>
			</div>

			<div class="col-md-2 links">
				<ul class="icons-social d-inline-flex p-b-25">
					<li><a href="https://www.facebook.com/vgresiduos/" target="_blank"><i class="fa fa-facebook"></i></a></li>
					<li><a href="https://www.youtube.com/channel/UCQCg_SuSTaMJbMXzxHOUlJA?view_as=subscriber target="_blank"><i class="fa fa-youtube"></i></a></li>
					<li><a href="https://www.instagram.com/VGResiduos/" target="_blank"><i class="fa fa-instagram"></i></a></li>					
					<li><a href="https://twitter.com/VGResiduos" target="_blank"><i class="fa fa-twitter"></i></a></li>
					<li><a href="https://www.linkedin.com/company/vg-residuos/ target="_blank"><i class="fa fa-linkedin"></i></a></li>
				</ul>
				<ul>
					<li>Ebooks</li>
					<li>Política de Privacidade</li>
					<li>Mapa do Site</li>
				</ul>
			</div>
		</div> <!-- row links -->

		<?php get_template_part('parts/content', 'formularios'); ?>					

	</footer> <!-- end .footer -->

	<div class="container-fluid p-t-25 faixa-verde">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<p>© VG Residuos Ltda, 2018 </p>
				</div>
				<div class="col-md-4 text-right langs">
					<i class="fa fa-globe"></i>
					<select>
					  <option value="volvo">Português</option>
					  <option value="saab">English</option>
					</select>
				</div>
			</div>					
		</div>
	</div>

</div><!-- #page -->

<?php get_template_part( 'template-parts/content', 'forms' ); ?>

<?php wp_footer(); ?>

</body>
</html>