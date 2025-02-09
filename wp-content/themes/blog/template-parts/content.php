<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package blog
 */

?>

<article class="container col-11 col-md-3  pruebas fondo " id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header   ">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title entrada-titulo">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title "><a href="' . esc_url( get_permalink() ) . '" rel="bookmark" class="entrada-subtitulo">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta">
				
			</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<?php blog_post_thumbnail(); ?>

	<div class="entry-content ">
		<?php
		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text "> "%s"</span>', 'blog' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				wp_kses_post( get_the_title() )
			)
		);

		
		?>
		
	</div><!-- .entry-content -->

	<footer class="entry-footer">
	
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
