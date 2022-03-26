<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package gromov
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<section class="error-404 not-found">
				<div class="container">
					<h1>404</h1>
					<p>Такой страницы не существует</p>
					<a href="<?php echo home_url();?>">Перейти на главную</a>
					<a href="<?php echo home_url();?>/blog">Читать наш блог</a>
					<a href="<?php echo home_url();?>/faq">Вопросы и ответы</a>
				</div>
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
