<!DOCTYPE html>
<html lang="ru">
  <head>

   <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo('name'); wp_title(); ?></title>
    <meta name="description" content="<?php bloginfo('description');?>" />


    <meta property="og:image" content="http://itsecurity.netwave.ua/wp-content/uploads/2018/meta_webinar.jpg" />

	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-M2PHBR7');</script>
	<!-- End Google Tag Manager -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

<?php wp_head();?>
  </head>



    <body>
		<!-- Google Tag Manager (noscript) -->
		<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M2PHBR7"
		height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
		<!-- End Google Tag Manager (noscript) -->    	

<?php/*
	wp_nav_menu( array(
		'theme_location' 	=> 'menu', 
		'menu_class'      	=> 'nav navbar-nav',
	));*/
?>

<div class="container-fluid">


<!-- 
example 3 - Navbar with brand left, links on center and right that collapse into the vert mobile menu
-->
<nav class="navbar navbar-light navbar-expand-md bg-faded justify-content-center fixed-top">
    <div class="container">
        <a href="http://netwave.ua/ru/" class="navbar-brand d-flex w-50 mr-auto"><img alt="<?php echo get_field('header_text_left', 'options'); ?>" src="<?php echo get_field('header_logo_left', 'options'); ?>"><span><?php echo get_field('header_text_left', 'options'); ?></span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsingNavbar3">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse w-100" id="collapsingNavbar3">
            <ul class="navbar-nav w-100 justify-content-center">
                <li class="nav-item active">
                    <a class="nav-link" href="#solution">ТЕМА</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#components">РІШЕННЯ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#speakers">СПІКЕРИ</a>
                </li>
            </ul>
            <div class="justify-content-center">
                <!-- <button type="button" class="btn btn-success" id="header_reg">ЗАРЕЄСТРУВАТИСЬ</button> -->
                <a href="#registration" class="btn btn-success" id="header_reg">ЗАРЕЄСТРУВАТИСЬ</a>
            </div>
            <div class="nav navbar-nav ml-auto w-100 justify-content-end">
                <a class="nav-link" href="https://www.cisco.com/c/ru_ua/index.html"><img src="<?php echo get_field('header_logo_right', 'options'); ?>"></a>
            </div>
        </div>
    </div>
</nav>



</div>