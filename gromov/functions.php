<?php
/**
 * gromov_project functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package gromov_project
 */

if ( ! function_exists( 'gromov_project_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function gromov_project_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on gromov_project, use a find and replace
		 * to change 'gromov_project' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'gromov_project', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'gromov_project' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'gromov_project_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'gromov_project_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function gromov_project_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'gromov_project_content_width', 640 );
}
add_action( 'after_setup_theme', 'gromov_project_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function gromov_project_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'gromov_project' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'gromov_project' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'gromov_project_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function gromov_project_scripts() {
	wp_enqueue_style( 'gromov_project-style', get_stylesheet_uri() );

	wp_enqueue_script( 'gromov_project-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'gromov_project-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'gromov_project_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

require get_template_directory() . '/price-calculation/price-calculation.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
* загрудаемые стили и скрипты
**/
function load_style_script(){
	/*Responsive*/
	wp_enqueue_style('Responsive', get_template_directory_uri() . '/css/responsive.css');

	wp_enqueue_style('font', get_template_directory_uri() . '/libs/ProximaNova/font.css');
	wp_enqueue_script('kit_font_awesome.js', get_template_directory_uri() . '/libs/FontAwesome/kit_font_awesome.js');

	// Slick 
	wp_enqueue_style('slick', get_template_directory_uri() . '/libs/slick/slick.css');
	wp_enqueue_style('slick-theme', get_template_directory_uri() . '/libs/slick/slick-theme.css');
	wp_enqueue_script('slick.js', get_template_directory_uri() . '/libs/slick/slick.js');

	//Fancybox
	wp_enqueue_style('fancybox', get_template_directory_uri() . '/libs/fancybox/jquery.fancybox.css');
	wp_enqueue_script('jquery.fancybox.js', get_template_directory_uri() . '/libs/fancybox/jquery.fancybox.js');	 

	//Leaflet - Open Street map
	wp_enqueue_style('leaflet.css', get_template_directory_uri() . '/libs/leaflet/leaflet.css');
	wp_enqueue_script('leaflet.js', get_template_directory_uri() . '/libs/leaflet/leaflet.js');

	// MMenu
	wp_enqueue_style('mmenu.css', get_template_directory_uri() . '/libs/mmenu/mmenu.css');
	wp_enqueue_script('mmenu.js', get_template_directory_uri() . '/libs/mmenu/mmenu.js');	

	//select2
	wp_enqueue_style('select2.min.css', get_template_directory_uri() . '/libs/select2/select2.min.css');
	wp_enqueue_script('select2.min.js', get_template_directory_uri() . '/libs/select2/select2.min.js');	

	//rangeslider
	// wp_enqueue_style('rangeslider.css', get_template_directory_uri() . '/libs/rangeslider/rangeslider.css');
	wp_enqueue_script('rangeslider.js', get_template_directory_uri() . '/libs/rangeslider/rangeslider.js');	
	// wp_enqueue_script('rangeslider.min.js', get_template_directory_uri() . '/libs/rangeslider/rangeslider.min.js');	

	// MY
	wp_enqueue_script('custom.js', get_template_directory_uri() . '/js/custom.js');
	wp_enqueue_script('price-calculation', get_template_directory_uri() . '/price-calculation/price-calculation.js');

}

/**
* загружаем стили и скрипты
**/
add_action('wp_enqueue_scripts', 'load_style_script');

/*
/ Активируем woocommerce
*/
add_theme_support( 'woocommerce' );

/**
* Свойства темы
**/
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Основные опции темы',
		'menu_title'	=> 'Опции темы',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Опции Header',
		'menu_title'	=> 'Header',
		'parent_slug'	=> 'theme-general-settings',
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Опции Footer',
		'menu_title'	=> 'Footer',
		'parent_slug'	=> 'theme-general-settings',
	));
	
}


// Хлебные крошки
function the_breadcrumb(){
	global $post;
	if(!is_home()){ 
		echo '<div class="breadcrumb"><a href="'.site_url().'">Главная</a> <i class="fas fa-chevron-right"></i> ';
	if(is_single()){ // записи
		the_category(', ');
		echo " > ";
		the_title();
	}
	elseif (is_page()) { // страницы
		if ($post->post_parent ) {
			$parent_id  = $post->post_parent;
			$breadcrumbs = array();
			while ($parent_id) {
				$page = get_page($parent_id);
				$breadcrumbs[] = '<a href="' . get_permalink($page->ID) . '">' . get_the_title($page->ID) . '</a>';
				$parent_id  = $page->post_parent;
			}
			$breadcrumbs = array_reverse($breadcrumbs);
			foreach ($breadcrumbs as $crumb) echo $crumb . ' > ';
		}
		echo the_title();
	}
	elseif (is_category()) { // категории
		global $wp_query;
		$obj_cat = $wp_query->get_queried_object();
		$current_cat = $obj_cat->term_id;
		$current_cat = get_category($current_cat);
		$parent_cat = get_category($current_cat->parent);
		if ($current_cat->parent != 0) 
			echo(get_category_parents($parent_cat, TRUE, ' > '));
		single_cat_title();
	}
	elseif (is_search()) { // страницы поиска
		echo 'Результаты поиска для "' . get_search_query() . '"';
	}
	elseif (is_tag()) { // теги (метки)
		echo single_tag_title('', false);
	}
	elseif (is_day()) { // архивы (по дням)
		echo '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a> <i class="fas fa-chevron-right"></i> ';
		echo '<a href="' . get_month_link(get_the_time('Y'),get_the_time('m')) . '">' . get_the_time('F') . '</a> <i class="fas fa-chevron-right"></i> ';
		echo get_the_time('d');
	}
	elseif (is_month()) { // архивы (по месяцам)
		echo '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a> <i class="fas fa-chevron-right"></i> ';
		echo get_the_time('F');
	}
	elseif (is_year()) { // архивы (по годам)
		echo get_the_time('Y');
	}
	elseif (is_author()) { // авторы
		global $author;
		$userdata = get_userdata($author);
		echo 'Опубликовал(а) ' . $userdata->display_name;
	} elseif (is_404()) { // если страницы не существует
		echo 'Ошибка 404';
	}

	if (get_query_var('paged')) // номер текущей страницы
	echo ' (' . get_query_var('paged').'-я страница)';
	echo '</div>'; 
} else { // главная
	$pageNum=(get_query_var('paged')) ? get_query_var('paged') : 1;
	if($pageNum>1)
		echo '<a href="'.site_url().'">Главная</a> <i class="fas fa-chevron-right"></i> '.$pageNum.'-я страница';
	else
		echo 'Вы находитесь на главной странице';
}
}







/*
/ Дополнительный клас для страницы дочерних категорий
*/
add_filter( 'body_class', 'bbloomer_wc_product_cats_css_body_class' );
function bbloomer_wc_product_cats_css_body_class( $classes ){

	if( is_tax( 'product_cat' ) ) {
	   $cat = get_queried_object();
	   if( 0 < $cat->parent  ) $classes[] = 'subcategory';
	}
	return $classes;

}

/*
/ Загрузить еще товары в категориях
*/
add_action('wp_ajax_loadmore', 'true_load_posts');
add_action('wp_ajax_nopriv_loadmore', 'true_load_posts');
function true_load_posts(){
 	
$category = $_POST['category'];
$is_in_lists = explode(", ", $_POST['is_in_list']);

	$args = array(
		'post_type' => 'product',
	    'post__not_in' => $is_in_lists, 
	    'posts_per_page' => -1,
		'tax_query' => array(
		    array(
		        'taxonomy' => 'product_cat',
		        'field' => 'slug',
		        'terms' => array($category)
		    ),
		)				        
	);
	$query = new WP_Query($args);
	if($query->have_posts() ) :
		while($query->have_posts() ): 
			$query->the_post();
			$id_post = get_the_ID();
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
		endwhile;
	endif;
	die();

}


//Ограничение поиска
function SearchFilter($query) {
    if ($query->is_search) {
        $query->set('post_type', 'product');
    }
    return $query;
}
add_filter('pre_get_posts','SearchFilter');


