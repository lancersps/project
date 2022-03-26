<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package gromov_project
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="md-4">
		<?php gromov_project_post_thumbnail(); ?>
	</div>
	<div class="md-8">
		<header class="entry-header">
			<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

			<?php if ( 'post' === get_post_type() ) : ?>
			<div class="entry-meta">
				<?php
				gromov_project_posted_on();
				gromov_project_posted_by();
				?>
			</div><!-- .entry-meta -->
			<?php endif; ?>
		</header><!-- .entry-header -->

		<div class="entry-summary">
			<?php the_excerpt(); ?>
		</div><!-- .entry-summary -->

		<footer class="entry-footer">
			<?php gromov_project_entry_footer(); ?>
		</footer><!-- .entry-footer -->			
	</div>
</article><!-- #post-<?php the_ID(); ?> -->
