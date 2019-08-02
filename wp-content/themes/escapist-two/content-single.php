<?php
/**
 * @package Escapist
 */
?>

<header class="entry-header">
	<?php if ( has_post_thumbnail() && ( ! has_post_format() || has_post_format( 'image' ) || has_post_format( 'gallery' ) ) ) : ?>
		<div class="post-thumbnail">
			<?php the_post_thumbnail( 'escapist-single-thumbnail' ); ?>
		</div>
	<?php endif; ?>

	<?php
		escapist_entry_categories();
		the_title( '<h1 class="entry-title">', '</h1>' );
	?>
</header><!-- .entry-header -->

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'escapist' ) . '</span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
				'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'escapist' ) . ' </span>%',
				'separator'   => '<span class="screen-reader-text">, </span>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<ul class="list list--lined">
			<?php
				escapist_post_author();
				escapist_post_date();
				escapist_post_categories();
				escapist_post_tags();
			?>
		</ul>
	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
