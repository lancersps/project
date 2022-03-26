<?php
/**
* Template Name: Terms of Use
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
					?>					
					<?php the_breadcrumb();?>
					<h1><?php the_title();?></h1>
					<div class="terms">
						<?php the_content();?>
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
