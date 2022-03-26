<?php
/**
* Template Name: Main page
*
**/

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
		<?php
		if ( have_posts() ) :
		?>
			<!-- Baner -->
			<section class="baner site-content">
				<div class="container">
					<?php
						$baner_big_img = get_field( "baner_big_img" );
						$baner_litle_img = get_field( "baner_litle_img" );
						$baner_title_h1 = get_field( "baner_title_h1" );
						$baner_title_h2 = get_field( "baner_title_h2" );
						$baner_batton_text = get_field( "baner_batton_text" );
						$baner_batton_href = get_field( "baner_batton_href" );
					?>
						<div class="baner_single" style="background-image: url('<?php echo $baner_big_img;?>');">
							<div class="baner_content" style="background-image: url('<?php echo $baner_litle_img;?>');">
								<h1><?php echo $baner_title_h1;?></h1>
								<h2><?php echo $baner_title_h2;?></h2>
								<a href="<?php echo $baner_batton_href;?>" class="baner_button"><?php echo $baner_batton_text;?></a>
							</div>
						</div>

				</div>				
			</section>

			<!-- Phone -->
			<section class="phone_block" id="phone_block">
				<div class="container">
					<?php
						$phone_h1 = get_field( "phone_h1" );
						$phone_h2 = get_field( "phone_h2" );
					?>
					<div class="md-6">
						<h3><?php echo $phone_h1;?></h3>
						<h4><?php echo $phone_h2;?></h4>
					</div>
					<div class="md-6">
						<?php echo do_shortcode( '[contact-form-7 id="166" title="Хотите сделать заказ по телефону?"]' ); ?>
					</div>					
				</div>				
			</section>

			<!-- Popular -->
			<section class="popular site-content">
				<div class="container">
					<?php
						$popular_title = get_field( "popular_title" );
						$popular_items = get_field( "popular_items" );
					?>					
					<h3><?php echo $popular_title;?></h3>
					

					<?php if( $popular_items ): ?>
					    <div class="items">
					    <?php foreach( $popular_items as $popular_item): ?>
							<div class="md-3">
								<div class="item">

									<a href="<?php echo get_permalink($popular_item->ID); ?>">
										<div class="image_block">
											<?php echo get_the_post_thumbnail( $popular_item->ID, 'full' ); ?>
										</div>
										<h6><?php echo get_the_title($popular_item->ID); ?></h6>
									</a>
									<?php
										$terms = get_the_terms( $popular_item->ID, 'product_cat' );
										foreach ($terms as $term) {
										    $product_cat_name = $term->name;
										    $product_cat_href = get_term_link( $term );
										    break;
										}
									?>
									<a href="<?php echo $product_cat_href;?>"><span><?php echo $product_cat_name?></span></a>
								</div>
							</div>
					    <?php endforeach; ?>
					    </div>
					<?php endif;?>
				</div>
			</section>

			<!-- Benefits -->
			<section class="benefits site-content">
				<div class="container">
					<?php
						$benefits_title = get_field( "benefits_title" );
						$benefits = get_field( "benefits" );
					?>
					<h3><?php echo $benefits_title;?></h3>

					<?php if( have_rows('benefits') ): ?>
						<div class="items">
						 	<?php while ( have_rows('benefits') ) : the_row();?>

								<div class="md-4">
									<div class="item">
										<div class="md-4">
											<img src="<?php the_sub_field('benefits_img');?>">
										</div>
										<div class="md-8">
											<div class="text_block">
												<h4><?php the_sub_field('benefits_h1');?></h4>
												<p><?php the_sub_field('benefits_h2');?></p>
											</div>
										</div>

									</div>
								</div>

						    <?php endwhile;?>
						</div>
					<?php else : ?>
					<?php endif; ?>
					    	
				</div>
			</section>

			<!-- Client -->
			<section class="client site-content">
				<div class="container">
					<?php
						$client_title = get_field( "client_title" );
						$client = get_field( "client" );
					?>
					<h3><?php echo $client_title;?></h3>


					<?php if( have_rows('client') ): ?>
						<div class="center client-slider">
						 	<?php while ( have_rows('client') ) : the_row();?>

									<div class="item">
										<a href="<?php the_sub_field('client_url');?>" alt="<?php the_sub_field('client_title');?>">
											<img src="<?php the_sub_field('client_img');?>">
											
										</a>
									</div>

						    <?php endwhile;?>
						</div>
					<?php else : ?>
					<?php endif; ?>

				</div>
			</section>

			<!-- Portfolio -->
			<section class="portfolio site-content">
				<div class="container">
					<?php
						$portfolio_title = get_field( "portfolio_title" );
					?>					
					<h3><?php echo $portfolio_title;?></h3>

					<?php if( have_rows('portfolio') ): ?>
						<div class="portfolio-items">
						 	<?php while ( have_rows('portfolio') ) : the_row();?>

									<div class="portfolio-item">
										<a data-fancybox="gallery" href="<?php the_sub_field('portfolio_img_big');?>" alt="<?php the_sub_field('portfolio_text');?>"><img src="<?php the_sub_field('portfolio_img');?>"></a>
										</a>
									</div>

						    <?php endwhile;?>
						</div>
					<?php else : ?>
					<?php endif; ?>
					
				</div>
			</section>


			<!-- Useful -->
			<section class="useful site-content">
				<div class="container">
					<?php
						$useful_title = get_field( "useful_title" );
						$useful_items = get_field( "useful_items" );
					?>					
					<h3><?php echo $useful_title;?><a href="<?php echo home_url();?>/blog">Все статьи</a></h3>
					

					<?php if( $useful_items ): ?>
					    <div class="items">
					    <?php foreach( $useful_items as $useful_item): ?>
							<div class="md-6">
								<a href="<?php echo get_permalink($useful_item->ID); ?>">
									<div class="item">
										<div class="image_block">
											<?php echo get_the_post_thumbnail( $useful_item->ID, 'full' ); ?>
										</div>
										<h6><?php echo get_the_title($useful_item->ID); ?></h6>
										<?php echo $my_post_content = apply_filters('the_content', get_post_field('post_content', $useful_item->ID)); ?>	
									</div>
								</a>
							</div>
					    <?php endforeach; ?>
					    </div>
					<?php endif;?>
				</div>
			</section>



		<?php
		endif;
		?>
		</main><!-- #main -->
	</div><!-- #primary -->
<script type="text/javascript">
	jQuery(document).ready(function() {
	// FORM
		// Проверка заполнения
		jQuery('#tel').keyup(function () {
		  var max = 5;
		  var inputVar = jQuery(this).val();
		  if (inputVar[0] != '_' && inputVar[1] != '_' && inputVar[3] != '_' && inputVar[4] != '_' && inputVar[5] != '_' && inputVar[7] != '_' && inputVar[8] != '_' && inputVar[10] != '_' && inputVar[11] != '_') {
		    jQuery(this).parent().parent().parent().parent().parent().parent().parent().parent().addClass("active");
		  }
		});

		// Удачная отправка
		var wpcf7Form = document.querySelector( '.wpcf7' );

		wpcf7Form.addEventListener( 'wpcf7mailsent', function( event ) {
			jQuery(".phone_block lable").css("display", "none");
			jQuery(".phone_block input.wpcf7-form-control.wpcf7-submit").css("display", "none");
		}, false );
	});
</script>
<?php
get_footer();
