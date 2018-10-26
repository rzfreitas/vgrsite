<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package risco-legal
 */

?>

<div class="container">
	<div class="row">
		<div class="col-md-8 text-posts">
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<header class="entry-header">
					<?php
					if ( is_singular() ) :
						the_title( '<h1 class="entry-title">', '</h1>' );
					else :
						the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
					endif;

					if ( 'post' === get_post_type() ) :
						?>
						<div class="entry-meta">
							<?php
							risco_legal_posted_on();
							risco_legal_posted_by();
							?>
						</div><!-- .entry-meta -->
					<?php endif; ?>
				</header><!-- .entry-header -->

				<div class="entry-content">
					<?php
					the_content( sprintf(
						wp_kses(
							/* translators: %s: Name of current post. Only visible to screen readers */
							__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'risco-legal' ),
							array(
								'span' => array(
									'class' => array(),
								),
							)
						),
						get_the_title()
					) );

					wp_link_pages( array(
						'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'risco-legal' ),
						'after'  => '</div>',
					) );
					?>
				</div><!-- .entry-content -->

				<footer class="entry-footer">
					<?php risco_legal_entry_footer(); ?>
				</footer><!-- .entry-footer -->
			</article><!-- #post-<?php the_ID(); ?> -->
		</div>
		<div class="col-md-4 p-t-50 p-t-c">
			<div class="canal-vg-b m-b-20">
				<h2 class="text-center fontbranca" id="titulo-colunista">Biblioteca</h4>			
				<div class="ebook-blog border-blog">
					<ul class="ebooks-list">
						<a data-toggle="ebook-pgrs"><li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/e-books/Ebook-PGRS.png"></li></a>
						<a data-toggle="ebook-mercado"><li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/e-books/Ebook-Mercado-de-resíduos-Melhor-plataforma.png"></li></a>
						<a data-toggle="ebook-medidas"><li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/e-books/Ebook-Medidas-para-redução.png"></li></a>
						<a data-toggle="ebook-lucrar"><li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/e-books/Ebook-Como-Lucrar.png"></li></a>
					</ul>
				</div>
			</div>
			
			<div class="canal-vg-b m-b-20">
				<h2 class="text-center fontbranca" id="titulo-colunista">Saiba mais</h2>		
				<div class="border-blog">
					<?php
					$related = get_posts( array( 'category__in' => wp_get_post_categories($post->ID), 'numberposts' => 10, 'post__not_in' => array($post->ID) ) );
					if( $related ) foreach( $related as $post ) {
					setup_postdata($post); ?>				
							<div class="row p-t-20">
								<div class="col-md-6 "><a href="<?php the_permalink() ?>"> <?php the_post_thumbnail('thumbnail'); ?> </a></div>
								<div class="col-md-6 text-left"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><strong><?php the_title(); ?></strong></a></div>
							</div><br>
					<?php }
					wp_reset_postdata(); ?>
				</div>
			</div>
		</div>
	</div>
</div>
