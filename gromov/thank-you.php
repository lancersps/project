<?php
/**
* Template Name: Thank You
*
**/

get_header();
?>

	<div class="content-area">
		<main id="main" class="site-main">
			<?php
			if ( have_posts() ) :
			?>
				<section class="thank-you">
					<div class="container">
						<img src="<?php bloginfo('template_url') ?>/img/thank_you.png">
						<h1><?php the_title();?><h1>
						<?php the_content();?>
						<a href="<?php echo home_url();?>">Перейти на главную</a>
						<a href="<?php echo home_url();?>/blog">Читать наш блог</a>
						<a href="<?php echo home_url();?>/faq">Вопросы и ответы</a>


					</div>
				</section><!-- .error-404 -->
			<?php
			endif;
			?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
