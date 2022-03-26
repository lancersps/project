<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php bloginfo('name'); wp_title(); ?></title>
    <script>new WOW().init();</script>
<?php wp_head();?>
    </head>
    <body>

<?php/*
	wp_nav_menu( array(
		'theme_location' 	=> 'menu', 
		'menu_class'      	=> 'nav navbar-nav',
		'walker' 			=> 	new My_Walker_Nav_Menu(),
	));*/
?>

        <!-- Navigation -->
        <nav class="navbar navbar-main">
           <div class="container">
             <a class="navbar-brand" href="#">
              <img src="<?php echo $logo = get_field( "logo", 9 );?>" alt="Logo" height="50px">
            </a>
            </div><!--/.container -->
        </nav>
		