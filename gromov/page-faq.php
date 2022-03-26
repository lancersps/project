<?php
/**
* Template Name: FAQ
*
**/

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
		<?php
		if ( have_posts() ) :
		?>

			<section class="site-content">
				<div class="container">
					<?php
						$baner_img = get_field( "baner_img" );
						$baner_title_h1 = get_field( "baner_title_h1" );
						$baner_title_h2 = get_field( "baner_title_h2" );
						$baner_batton_text = get_field( "baner_batton_text" );
						$baner_batton_href = get_field( "baner_batton_href" );

						$faq_question = get_field( "faq_question" );
						$faq_answer = get_field( "faq_answer" );
					?>					
					<?php the_breadcrumb();?>
					<h1><?php the_title();?></h1>
					<div class="faq">
						<div class="md-6"><h3><?php echo $faq_question;?></h3></div>
						<div class="md-6"><h3><?php echo $faq_answer;?></h3></div>

							<?php if( have_rows('faq') ): ?>
								 	<?php while ( have_rows('faq') ) : the_row();?>
										<div class="md-6">
											<div class="item">
												<span><?php the_sub_field('question');?></span>
											</div>
										</div>
										<div class="md-6">
											<div class="item">
												<p><?php the_sub_field('answer');?></p>
											</div>
										</div>
								    <?php endwhile;?>
							<?php else : ?>
							<?php endif; ?>

					</div>

					<div class="little_baner" style="background-image: url('<?php echo $baner_img;?>');">
						<div class="md-6">
							<h4><?php echo $baner_title_h1;?></h4>
							<h5><?php echo $baner_title_h2;?></h5>
						</div>
						<div class="md-6">
							<a href="<?php echo $baner_batton_href;?>" class="baner_button"><?php echo $baner_batton_text;?></a>
						</div>
					</div>					
				</div>
			</section>


		<?php
		endif;
		?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
