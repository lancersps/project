<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

get_header( 'shop' );
?>
<section class="site-content">
	<div class="container">	
			<?php

			/**
			 * Hook: woocommerce_before_main_content.
			 *
			 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
			 * @hooked woocommerce_breadcrumb - 20
			 * @hooked WC_Structured_Data::generate_website_data() - 30
			 */
			do_action( 'woocommerce_before_main_content' );

			?>

		<header class="woocommerce-products-header">
			<?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
				<h1 class="woocommerce-products-header__title page-title"><?php woocommerce_page_title(); ?></h1>
			<?php endif; ?>

			<?php
			/**
			 * Hook: woocommerce_archive_description.
			 *
			 * @hooked woocommerce_taxonomy_archive_description - 10
			 * @hooked woocommerce_product_archive_description - 10
			 */
			do_action( 'woocommerce_archive_description' );
			?>
		</header>

		<?php 
		$term = get_queried_object()->term_id;
		$termid = get_term($term, 'product_cat' );
		if($termid->parent > 0) { 
			$category = $termid->slug;
				$args = array(
					'post_type' => 'product',
				    'posts_per_page' => -1,
					'tax_query' => array(
					    'relation' => 'AND',
					    array(
					        'taxonomy' => 'product_cat',
					        'field' => 'slug',
					        'terms' => array($category)
					    ),
					)				        
				);
			 
				// обычно лучше использовать WP_Query, но не здесь
				query_posts( $args );
				// если посты есть
				if( have_posts() ) : ?>
					<div class="product_block">
						<div class="items">
							<?php while( have_posts() ): the_post(); ?>
								<div class="md-3">
									<div class="item">
										<a href="<?php echo get_permalink($id_post); ?>">
											<div class="image_block">
												<?php echo get_the_post_thumbnail( $id_post, 'full' ); ?>
											</div>
											<h6><?php echo get_the_title($id_post); ?></h6>
										</a>
									</div>
								</div>
							<?php endwhile;?>
						</div>
					</div>
				<?php endif;?>
					<section class="site-content">
						<?php
							$baner_img = get_field( "baner_img", 'option' );
							$baner_title_h1 = get_field( "baner_title_h1", 'option' );
							$baner_title_h2 = get_field( "baner_title_h2", 'option' );
							$baner_batton_text = get_field( "baner_batton_text", 'option' );
							$baner_batton_href = get_field( "baner_batton_href", 'option' );
						?>					
						<div class="little_baner" style="background-image: url('<?php echo $baner_img;?>');">
							<div class="md-6">
								<h4><?php echo $baner_title_h1;?></h4>
								<h5><?php echo $baner_title_h2;?></h5>
							</div>
							<div class="md-6">
								<a href="<?php echo $baner_batton_href;?>" class="baner_button"><?php echo $baner_batton_text;?></a>
							</div>
						</div>				
					</section>
				<?php
		    // SUBCATEGORY END
		    } else {

		    // CATEGORY START
		    $args = array(
		        'orderby'       => 'name', 
		        'order'         => 'ASC',
		        'hide_empty'    => false, 
		        'child_of'      => $term 
		    ); 
		    $subproducts = get_terms( 'product_cat', $args);
		    $kk = 0;
		    ?>
		    <?php foreach ($subproducts as $subproduct) { ?>
		    	<?php
		    		$slug = $subproduct->slug;
		    	?>
				<div class="product_block">
			        <h3><a href="<?php echo $cat_url = get_category_link( $subproduct->term_id );?>"><?php echo $subproduct->name; ?></a></h3>
			        	<div class="items">
			        		<div class="show_now">
								<?php
									$args = array(
										'post_type' => 'product',
										'posts_per_page' => 4,

										'tax_query' => array(
										    'relation' => 'AND',
										    array(
										        'taxonomy' => 'product_cat',
										        'field' => 'slug',
										        'terms' => array($slug)
										    ),
										)				        
										);
									$loop = new WP_Query( $args );

									if ( $loop->have_posts() ) { ?>

									<div>
										<?php while ( $loop->have_posts() ) : $loop->the_post();
											$id_post = get_the_ID();
											$posts = $posts.$id_post.', ';
											?>
												<div class="md-3">
													<div class="item">
														<a href="<?php echo get_permalink($id_post); ?>">
															<div class="image_block">
																<?php echo get_the_post_thumbnail( $id_post, 'full' ); ?>
															</div>
															<h6><?php echo get_the_title($id_post); ?></h6>
														</a>
													</div>
												</div>
											<?php
											// wc_get_template_part( 'content', 'product' );
										endwhile; ?>
									</div>
									<?php
									$posts_lenght = strlen($posts) - 2;
									$posts = substr($posts, 0, $posts_lenght);
									} else {
										echo __( 'No products found' );
									}
									wp_reset_postdata();
								?>
								<span id="more_data"></span>
							</div>
							<?php
							if (  $loop->max_num_pages > 1 ) : ?>
								<div class="more_product">
									<span id="true_loadmore" data-category="<?php echo $slug;?>" data-is_in_list="<?php echo $posts;?>">Показать больше</span>
								</div>
							<?php endif;?>
						</div>
						<?php $posts = '';?>


				</div>
				<?php if ($kk == 1) { ?>
					<section class="site-content">
						<?php
							$baner_img = get_field( "baner_img", 'option' );
							$baner_title_h1 = get_field( "baner_title_h1", 'option' );
							$baner_title_h2 = get_field( "baner_title_h2", 'option' );
							$baner_batton_text = get_field( "baner_batton_text", 'option' );
							$baner_batton_href = get_field( "baner_batton_href", 'option' );
						?>					
						<div class="little_baner" style="background-image: url('<?php echo $baner_img;?>');">
							<div class="md-6">
								<h4><?php echo $baner_title_h1;?></h4>
								<h5><?php echo $baner_title_h2;?></h5>
							</div>
							<div class="md-6">
								<a href="<?php echo $baner_batton_href;?>" class="baner_button"><?php echo $baner_batton_text;?></a>
							</div>
						</div>				
					</section>	
				<?php } ?>
				<?php $kk++; ?>
			<?php } ?>
		<?php
		    // CATEGORY END
		}
		?>
		<?php
		/**
		 * Hook: woocommerce_after_main_content.
		 *
		 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
		 */
		do_action( 'woocommerce_after_main_content' );

		/**
		 * Hook: woocommerce_sidebar.
		 *
		 * @hooked woocommerce_get_sidebar - 10
		 */
		do_action( 'woocommerce_sidebar' );
		?>
	</div>
</section>



<?php
get_footer( 'shop' );
