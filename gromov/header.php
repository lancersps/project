<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package gromov
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'gromov' ); ?></a>

		<div class="mobile-menu">
			<div class="header-mobile">
					<div class="logo">
						<div class="logo_h1">
							<?php the_field('header_logo_h1', 'option'); ?>
						</div>
						<div class="logo_h2">
							<?php the_field('header_logo_h2', 'option'); ?>	
						</div>
					</div>
				<a class="shopping_mobile" href="#shopping"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
				<a href="#menu"><span></span></a>
			</div>
			<nav id="menu">
				<div id="panel-menu">
					<?php
					wp_nav_menu( array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
						'items_wrap'     => '<ul>%3$s</ul>',
						'container' => ''					
					) );
					?>
				</div>
			</nav>
			<nav id="shopping">
				<div id="panel-cart">
					<p style="text-align: center; padding-top: 30px;">Ваша корзина пустая.<br />
						<a href="#/">Перейдите в каталог товара.</a></p>
				</div>
			</nav>					
		</div>


	<header id="masthead" class="site-header">
		<div class="top-menu">
			<div class="container">
				<div class="md-3">
					<?php
						// check if the repeater field has rows of data
						if( have_rows('header_phone', 'option') ):
						 	// loop through the rows of data
						    while ( have_rows('header_phone', 'option') ) : the_row();
						        // display a sub field value
							    ?>
									<div class="phone"><a href="tel:<?php the_sub_field('header_phone_href', 'option');?>"><?php the_sub_field('header_phone_num', 'option');?></a></div>
							    <?php
						    endwhile;
						else :
						    // no rows found
						endif;
					?>
				</div>
				<div class="md-2">
					<?php
						// check if the repeater field has rows of data
						if( have_rows('header_soc', 'option') ):
						 	// loop through the rows of data
						    while ( have_rows('header_soc', 'option') ) : the_row();
						        // display a sub field value
							    ?>
									<a href="<?php the_sub_field('header_soc_href', 'option');?>" target="_blank"><i class="fab <?php the_sub_field('header_soc_icon', 'option');?>"></i></a>
							    <?php
						    endwhile;
						else :
						    // no rows found
						endif;
					?>
				</div>
				<div class="md-7">
					<?php 
					$top_menu = get_field('top_menu', 'option');
					if( $top_menu ): 
					?>
					<ul>
						<?php foreach( $top_menu as $top_menu_li ): ?>
						<li>
							<a href="<?php echo $top_menu_li ?>"><?php echo get_the_title(url_to_postid($top_menu_li));  ?></a>
						</li>
						<?php endforeach; ?>
					</ul>
					<?php endif; ?>
				</div>
<!-- 				<div class="md-2">
					<div class="reg">
						<a href="#logon" rel="nofollow" class="modalbox"><i class="far fa-user"></i> Вход/регистрация</a>
					</div>								
				</div>	 -->							
			</div>
		</div>
		<div class="main-menu">
			<div class="container">
				<div class="md-2">
					<a href="<?php echo home_url();?>"> 
						<div class="logo">
							<div class="logo_h1">
								<?php the_field('header_logo_h1', 'option'); ?>
							</div>
							<div class="logo_h2">
								<?php the_field('header_logo_h2', 'option'); ?>	
							</div>
						</div>
					</a>
				</div>
				<div class="md-10">
						<form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
							<div class="catalog_button" id="main_menu">
								<div class="deactive"><i class="fa fa-bars" aria-hidden="true"></i> Каталог услуг</div>
							</div>

							<input value="<?php echo $_GET['s']; ?>" type="text" class="field search_form" name="s" id="s" placeholder="<?php esc_attr_e( 'Что Вы ищете?', 'twentyeleven' ); ?>" />
							<button type="submit" class="submit search_button" name="submit" id="searchsubmit">
							    <img class="magnifying-glass svg" src="<?php bloginfo('template_url') ?>/img/magnifying-glass.svg" alt="search">
							</button>
						</form>
				</div>
<!-- 				<div class="md-2">
					<a href="#card" class="card_button">
						<img class="shopping-cart svg" src="<?php // bloginfo('template_url') ?>/img/shopping-cart.svg" alt="card">
						<span class="card_count">5</span>
						<p>Корзина</p>
					</a>
				</div> -->
			</div>
			<div class="container">
				<div class="main-navigation">
					<nav id="site-navigation" >
						<div class="first-level">
							<?php
							wp_nav_menu( array(
								'theme_location' => 'menu-1',
								'menu_id'        => 'primary-menu',
								'depth' => 1,
								'items_wrap'     => '<ul class="first-level-ul" id="%1$s">%3$s</ul>',  
								'link_after'  => '<span class="right_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span>'
							) );
							?>
						</div>
						<div class="second-level">
							<?php
							wp_nav_menu( array(
								'theme_location' => 'menu-1',
								'menu_id'        => 'primary-menu',
								'depth' => 3,
								'items_wrap'     => '<ul class="second-level-ul">%3$s</ul>'					
							) );
							?>
						</div>
					</nav>
				</div>
			</div>
		</div>
	</header><!-- #masthead -->

<script type="text/javascript">
// MMenu
			new Mmenu(
				document.querySelector('#menu'),
				{
					extensions	: [ 'theme-light', "position-right" ],
					searchfield : {
						placeholder		: 'Что Вы ищете?'
					},

					navbars		: [
						{
							content		: [ 'searchfield' ]
						}, 
						// {
						// 	type		: 'tabs',
						// 	content		: [
						// 		'<a href="#panel-menu"><i class="fa fa-bars"></i> <span>Каталог услуг</span></a>',
						// 		// '<a href="#panel-account"><i class="fa fa-user"></i> <span>Акаунт</span></a>',
						// 		'<a href="#panel-cart"><i class="fa fa-shopping-cart"></i> <span>Корзина</span></a>'
						// 	]
						// }, 
						// {
						// 	position	: 'bottom',
						// 	content		: [ '<a href="#"><i class="far fa-user"></i> Вход/Регистрация</a>' ]
						// }
					]
				}
			);

			new Mmenu(
				document.querySelector('#shopping'),
				{
					extensions	: [ 'theme-light', "position-right" ],
					searchfield : {
						placeholder		: 'Что Вы ищете?'
					},

					navbars		: [
						{
							content		: [ 'searchfield' ]
						}, 
						// {
						// 	type		: 'tabs',
						// 	content		: [
						// 		'<a href="#panel-menu"><i class="fa fa-bars"></i> <span>Каталог услуг</span></a>',
						// 		// '<a href="#panel-account"><i class="fa fa-user"></i> <span>Акаунт</span></a>',
						// 		'<a href="#panel-cart"><i class="fa fa-shopping-cart"></i> <span>Корзина</span></a>'
						// 	]
						// }, 
						{
							position	: 'bottom',
							content		: [ '<a href="#"><i class="far fa-user"></i> Вход/Регистрация</a>' ]
						}
					]
				}
			);			
</script>
