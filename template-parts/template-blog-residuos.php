<?php /*Template Name: Blog Resíduos*/ ?>

<?php get_header(); ?>	

<div class="bgcolor-grey p-t-c-50 p-t-100">
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<h2 class="news">NOTÍCIAS</h2>
			</div>
			<div class="col-md-4">
				<?php get_template_part('search-form') ?>
			</div>
		</div>

		<div class="row">
			<div class="col-md-8">
				<!-- the loop -->
				<?php
			  	$paged = get_query_var('paged') ? get_query_var('paged') : 1;
			  	$custom_args = array(
				  'post_type' => 'post',
				  'posts_per_page' => 18,
				  'paged' => $paged
				);			

			  	$custom_query = new WP_Query( $custom_args ); ?>
			  	<?php if ( $custom_query->have_posts() ) : ?>
				<?php while ( $custom_query->have_posts() ) : $custom_query->the_post(); ?>			

					<article class="row-eq-height blog-box">
						<div class="col-md-5 img-post hover-zoom no-padding">
							<a href="<?php the_permalink();?>"><?php the_post_thumbnail('', array( 'alt' => get_the_title(), 'title' => get_the_title() ) ); ?></a>
						</div>

						<div class="col-md-7 content m-b-c">
							<div class="titulo-post">
								<h2><strong><a href="<?php the_permalink();?>"><?php the_title(); ?></a></strong></h2>
								<b><small><i class="fa fa-calendar"></i> <?php the_time('j \d\e F \d\e Y') ?></small></b>
							</div>
							<?php the_excerpt(); ?>
							<a href="<?php the_permalink();?>"><div class="text-left"><i class="fa fa-long-arrow-right"></i> Continuar lendo</a>
						</div>
					</article>
				<?php endwhile; ?>
				<!-- end of the loop -->

				<!-- pagination here -->
				<div class="col-md-12 p-b-70">
					<?php
						if (function_exists(custom_pagination)) {
						custom_pagination($custom_query->max_num_pages,"",$paged);
						}
					?>
				</div>

				<?php wp_reset_postdata(); ?>

				<?php else:  ?>
					<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
				<?php endif; ?>
			</div>

			<div class="col-md-4 text-center p-t-15 p-t-c">
				<div class="canal-vg-b m-b-20 side-bar-grid">
					<h2>Biblioteca</h2>
					<ul>
						<a data-toggle="ebook-pgrs"><li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/e-books/Ebook-PGRS.png"></li></a>
						<a data-toggle="ebook-mercado"><li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/e-books/Ebook-Mercado-de-resíduos-Melhor-plataforma.png"></li></a>
						<a data-toggle="ebook-medidas"><li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/e-books/Ebook-Medidas-para-redução.png"></li></a>
						<a data-toggle="ebook-lucrar"><li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/e-books/Ebook-Como-Lucrar.png"></li></a>
					</ul>
				</div>
				<div class="canal-vg-b m-b-20 side-bar-grid">
					<h2>Mais Lidos</h2>
					<div class="p-t-20">
						<?php query_posts('meta_key=post_views_count&orderby=meta_value_num&order=DESC&posts_per_page=6'); ?>
						<ul>
							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
								<li>
									<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a><br>
									<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
								</li>
							<?php endwhile; endif; ?>
						</ul>
						<?php wp_reset_query(); ?>
					</div>
				</div>
				
				<div class="canal-vg-b m-b-20">
					<h2>Newsletter</h2>
					<div class="text-center p-t-20 p-b-20 p-b-c p-t-c">
						<h3>Receba nossas notícias por e-mail.</h3>
						<a class="btn-turquoise" data-toggle="newsletter">ASSINAR</a>
					</div>
				</div>

				<div class="canal-vg-b m-b-20">
					<h2>Facebook</h2>
				</div>
				<div class="fb-page m-b-20"
					data-href="https://www.facebook.com/vgresiduos"
					data-width="380"
					data-hide-cover="false"
					data-show-facepile="true">
				</div>

				<div class="canal-vg-b m-b-20">
					<h2>Twitter</h2>
					<a class="twitter-timeline" data-height="400" href="https://twitter.com/VGResiduos">Tweets by VG Resíduos</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
				</div>
				
				<div class="canal-vg-b m-b-20">
					<h2>YouTube</h2>
					<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

					<iframe id="youtube_video" width="100%" height="150" frameborder="0" allowfullscreen></iframe>

					<script>
					var channelID = "UCQCg_SuSTaMJbMXzxHOUlJA";
					$.getJSON('https://api.rss2json.com/v1/api.json?rss_url=https%3A%2F%2Fwww.youtube.com%2Ffeeds%2Fvideos.xml%3Fchannel_id%3D'+channelID, function(data) {
					var link = data.items[0].link;
					var id = link.substr(link.indexOf("=")+1);
						$("#youtube_video").attr("src","https://youtube.com/embed/"+id + "?controls=0&showinfo=0&rel=0");
					});
					</script><br>
					<script src="https://apis.google.com/js/platform.js"></script>
					<div class="g-ytsubscribe" data-channelid="UCQCg_SuSTaMJbMXzxHOUlJA" data-layout="full" data-count="hidden"></div>
				</div>
				
				<div class="canal-vg-b m-b-20">
					<h2>Instagram</h2>
					<!-- InstaWidget -->
					<a href="https://instawidget.net/v/user/vgresiduos" id="link-9b20f53a84bd0636475db70f91c67b27a771730b90de72c1075bc068c9371b65">@vgresiduos</a>
					<script src="https://instawidget.net/js/instawidget.js?u=9b20f53a84bd0636475db70f91c67b27a771730b90de72c1075bc068c9371b65&width=100%"></script>
				</div>
				
				<div class="canal-vg-b m-b-20">
					<h2>LinkedIn</h2>				
					<script src="//platform.linkedin.com/in.js" type="text/javascript"></script>
					<script type="IN/CompanyProfile" data-id="15257377" data-format="inline" data-related="false"></script>
				</div>			
			</div>
		</div>
	</div>
</div> <!--gray-b-->

<!-- <script>jQuery(document).ready(function() {jQuery(".flexslider").flexslider({animation:"slide"})});</script> -->

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.10";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div class="reveal" id="newsletter" data-reveal data-close-on-click="true" data-animation-in="fade-in" data-animation-out="fade-out">		
	<div class="p-t-20 p-b-20">
	<div role="main" id="newsletter-e5c59ec964b7ee75db55"></div>
	<script type="text/javascript" src="https://d335luupugsy2.cloudfront.net/js/rdstation-forms/stable/rdstation-forms.min.js"></script>
	<script type="text/javascript">
	new RDStationForms('newsletter-e5c59ec964b7ee75db55-html', 'UA-60057665-1').createForm();
	</script>
	</div>
	<button class="close-button" data-close aria-label="Close modal" type="button">
		<span aria-hidden="true">&times;</span>
	</button>
</div>

<?php get_footer(); ?>