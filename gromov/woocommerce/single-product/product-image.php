<?php
/**
 * Single Product Image
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/product-image.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.5.1
 */

defined( 'ABSPATH' ) || exit;

// Note: `wc_get_gallery_image_html` was added in WC 3.3.2 and did not exist prior. This check protects against theme overrides being used on older versions of WC.
if ( ! function_exists( 'wc_get_gallery_image_html' ) ) {
	return;
}

global $product;

$attachment_ids = $product->get_gallery_image_ids();

$columns           = apply_filters( 'woocommerce_product_thumbnails_columns', 4 );
$post_thumbnail_id = $product->get_image_id();
$wrapper_classes   = apply_filters( 'woocommerce_single_product_image_gallery_classes', array(
	'woocommerce-product-gallery',
	'woocommerce-product-gallery--' . ( $product->get_image_id() ? 'with-images' : 'without-images' ),
	'woocommerce-product-gallery--columns-' . absint( $columns ),
	'images',
) );
?>
<div class="<?php echo esc_attr( implode( ' ', array_map( 'sanitize_html_class', $wrapper_classes ) ) ); ?>" data-columns="<?php echo esc_attr( $columns ); ?>" style="opacity: 0; transition: opacity .25s ease-in-out;">
	<figure class="woocommerce-product-gallery__wrapper">
		<div class="slider-for">
			<div class="slider-navigation-item" style="background-image: url('<?php	echo wp_get_attachment_url( $post_thumbnail_id, 'full');?>');"></div>
			<?php
				foreach ( $attachment_ids as $attachment_id ) {
					$image_url = wp_get_attachment_url( $attachment_id, 'full' );
					?>
						<div class="slider-navigation-item" style="background-image: url('<?php echo $image_url;?>');"></div>
					<?php
				}
			?>
		</div>
		<?php if ( $attachment_ids && $product->get_image_id() ) { ?>
			<div class="navigation">
				<div class="prev">
				    <i class="fa fa-angle-left" aria-hidden="true"></i>
				</div>
				<div class="next">
				    <i class="fa fa-angle-right" aria-hidden="true"></i>
				</div>
			</div>
			<div class="slider-navigation-block">
				<div class="slider-nav">
					<div class="slider-navigation-item" style="background-image: url('<?php	echo wp_get_attachment_url( $post_thumbnail_id, 'thumbnail');?>');"></div>
					<?php
					foreach ( $attachment_ids as $attachment_id ) {
						$image_url = wp_get_attachment_url( $attachment_id, 'thumbnail' );
						?>
							<div class="slider-navigation-item" style="background-image: url('<?php echo $image_url;?>');"></div>
						<?php
					} ?>
				</div>
			</div>
		<?php } ?>
	</figure>
</div>
