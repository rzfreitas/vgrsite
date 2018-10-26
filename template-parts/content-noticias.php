<section>
<div class="container m-t-50 noticias-artigos p-b-25 p-t-25" id="noticias">
	<h2><strong>Algumas matérias que podem te interessar</strong></h2>

	<?php $args = array(
	'post_type' => 'post',
	'posts_per_page' => 1
	);
	$query = new WP_query ( $args );
	if ( $query->have_posts() ) { ?>

	<?php while ( $query->have_posts() ) : $query->the_post(); ?>
		<article class="row m-t-50 first-post"" id="post-<?php the_ID(); ?>" <?php post_class( 'book' ); ?>>			
			<div class="col-md-5">			
				<?php if ( has_post_thumbnail() ) { ?>				
					<a href="<?php the_permalink(); ?>">				
						<?php the_post_thumbnail();	?>			
					</a>				
				<?php }?>				
			</div>
			
			<div class="col-md-7">
				<div class="tags"><?php the_tags(); ?></div>
				<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>			
				<p><?php the_excerpt(); ?></p>
				<div class="date-post"><i class="fa fa-clock-o"></i><?php $post_date = get_the_date( 'F j, Y' ); echo $post_date; ?></div>
			</div>  		
  		</article>  
  	<?php endwhile; ?>  
  	<?php wp_reset_postdata(); ?>  
	<?php } ?>

	<div class="m-t-50">
		<?php $args = array(
		'post_type' => 'post',
		'posts_per_page' => 4,
		'offset' => 1
		);
		$query = new WP_query ( $args );
		if ( $query->have_posts() ) { ?>

		<div class="row old-posts">
			<?php while ( $query->have_posts() ) : $query->the_post(); ?>
				<article class="col-md-3" id="post-<?php the_ID(); ?>" <?php post_class( 'book' ); ?>>			
							
					<?php if ( has_post_thumbnail() ) { ?>				
						<a href="<?php the_permalink(); ?>">				
							<?php the_post_thumbnail();	?>			
						</a>				
					<?php }?>
					
					<div class="tags"><?php the_tags(); ?></div>
					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>			
					<p><?php the_excerpt(); ?></p>
					<div class="date-post"><i class="fa fa-clock-o"></i><?php $post_date = get_the_date( 'F j, Y' ); echo $post_date; ?></div>
		  		</article>  
		  	<?php endwhile; ?>
		  	<?php wp_reset_postdata(); ?>  
			<?php } ?>
		</div>
	</div>
</div>
</section>