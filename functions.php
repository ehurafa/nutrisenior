<?php
/**
 * Nutrisenior functions and definitions
 *
 * Sets up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * When using a child theme (see https://codex.wordpress.org/Theme_Development
 * and https://codex.wordpress.org/Child_Themes), you can override certain
 * functions (those wrapped in a function_exists() call) by defining them first
 * in your child theme's functions.php file. The child theme's functions.php
 * file is included before the parent theme's file, so the child theme
 * functions would be used.
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are
 * instead attached to a filter or action hook.
 *
 * For more information on hooks, actions, and filters, @link https://codex.wordpress.org/Plugin_API
 
 * @author VitaminaWeb
 * @developer Rafael Gomes @ehurafa
 * @package WordPress
 * @subpackage Nutrisenior
 * @since Nutrisenior 1.0
 */

 

// Remove a versão do WordPress do cabeçalho
	remove_action('wp_head', 'wp_generator');

// Estilos e scripts
function nutrisenior_enqueue_scripts () {
	// Versão 
	$nutrisenior_version = '1.0';	
	
	// bootstrap.css
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), $nutrisenior_version, 'all' );

	// style.css
	wp_enqueue_style( 'netas-style-description', get_stylesheet_uri(), array(), $nutrisenior_version, 'all' );

	// responsive.css
	wp_enqueue_style( 'responsive', get_template_directory_uri() . '/css/responsive.css', array(), $nutrisenior_version, 'all' );
	
	// lightgallery.css
	wp_enqueue_style( 'lightgallery', get_template_directory_uri() . '/css/lightgallery.css', array(), $nutrisenior_version, 'all' );
	
	// colorbox.css
	wp_enqueue_style( 'colorbox', get_template_directory_uri() . '/css/colorbox.css', array(), $nutrisenior_version, 'all' );


	// scripts
	wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery.1.11.1.min.js', array(), $nutrisenior_version, true );

	wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/js/modernizr.js', array(), $nutrisenior_version,  true );	
	

	wp_enqueue_script( 'chili-1', get_template_directory_uri() . '/js/chili-1.7.pack.js', array(), $nutrisenior_version, true );

	wp_enqueue_script( 'cycle', get_template_directory_uri() . '/js/jquery.cycle.all.js', array(), $nutrisenior_version, true );	
	
	wp_enqueue_script( 'googlemaps', get_template_directory_uri() . '/js/googlemaps.api.js', array(), $nutrisenior_version, true );

	

	// carrossel
	
	wp_enqueue_script( 'scripts', get_template_directory_uri() . '/js/scripts.js', array(), $nutrisenior_version,  true );


}
// Carrega os estilos e scripts
add_action( 'wp_enqueue_scripts', 'nutrisenior_enqueue_scripts' );


// widgets
// mapa
register_sidebar( array(
	'name'          => 'Mapa',
	'id'            => 'mapa',
	'description'   => 'Localização',
	'before_widget' => '<div id="%1$s" class="widget %2$s">',
	'after_widget'  => '</div>',
	'before_title'  => '<h4 class="sidebar-widget-title">',
	'after_title'   => '</h4>',
) );
// formulario e-book
register_sidebar( array(
	'name'          => 'Formulário E-book',
	'id'            => 'form-ebook',
	'description'   => 'Formulário E-book',
	'before_widget' => '<div id="%1$s" class="widget %2$s">',
	'after_widget'  => '</div>',
	'before_title'  => '<h4 class="sidebar-widget-title">',
	'after_title'   => '</h4>',
) );
// formulario contato
register_sidebar( array(
	'name'          => 'Formulário Contato',
	'id'            => 'form-contato',
	'description'   => 'Formulário Contato',
	'before_widget' => '<div id="%1$s" class="widget %2$s">',
	'after_widget'  => '</div>',
	'before_title'  => '<h4 class="sidebar-widget-title">',
	'after_title'   => '</h4>',
) );
// rodapé internas copyright
register_sidebar( array(
	'name'          => 'Rodapé internas copyright',
	'id'            => 'rodape-internas-copyright',
	'description'   => 'Rodapé internas copyright',
	'before_widget' => '<div id="%1$s" class="widget %2$s">',
	'after_widget'  => '</div>',
	'before_title'  => '<h4 class="sidebar-widget-title">',
	'after_title'   => '</h4>',
) );
// rodapé internas redes sociais
register_sidebar( array(
	'name'          => 'Rodapé internas redes sociais',
	'id'            => 'rodape-internas-redes-sociais',
	'description'   => 'Rodapé internas redes sociais',
	'before_widget' => '<div id="%1$s" class="widget %2$s">',
	'after_widget'  => '</div>',
	'before_title'  => '<h4 class="sidebar-widget-title">',
	'after_title'   => '</h4>',
) );




// Inicio galeria
	
// Register "Galeria Item" Custom Post Type
function galeria_item_post_type() {

	$labels = array(
		'name'               => 'Galerias',
		'singular_name'      => 'Galeria',
		'menu_name'          => 'Galeria',
		'name_admin_bar'     => 'Galeria',
		'add_new'            => 'Adicionar Nova',
		'add_new_item'       => 'Adicionar Nova Galeria',
		'new_item'           => 'Nova Galeria',
		'edit_item'          => 'Editar galeria',
		'view_item'          => 'Visualizar Galeria',
		'all_items'          => 'Todos as Galerias',
		'search_items'       => 'Buscar galerias',
		'parent_item_colon'  => 'Galerias Pai:',
		'not_found'          => 'Nenhuma galeria encontrada.',
		'not_found_in_trash' => 'Nenhuma galeria encontrada na lixeira.'
	);

	$args = array(
		'description'         => 'Galerias',
		'labels'              => $labels,
		'supports'            => array( 'title',  'thumbnail' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => null,
		'menu_icon'			  => 'dashicons-portfolio',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'rewrite'             => array( 'slug' => 'detalhe-galeria', 'with_front' => false ),
		'capability_type'     => 'post'
	);

	register_post_type( 'galeria-item', $args );

}
	
	

// Hook into the 'init' action
add_action( 'init', 'galeria_item_post_type', 0 );


function on_transitioning_post_status( $new_status, $old_status, $post ) {
	
  if ( ( $old_status == 'new' || $old_status == 'draft' || $old_status == 'auto-draft' || $old_status == 'pending' ) && $new_status == 'publish' ) { 

	  if ( 'galeria-item' == get_post_type($post) ) {

		  $count_galeria_item = wp_count_posts( 'galeria-item' );

		  if( $count_galeria_item->publish == 57 ) {

			$oldest = get_posts( array( 'posts_per_page' 	=> 1, 
																	'orderby'      		=> 'date', 
																	'order'         	=> 'ASC',
																	'post_type'       => 'galeria-item',
																	'post_status'    	=> 'publish' ) );

			$oldest = $oldest[0];

			wp_update_post( array( 'ID' 					=> $oldest->ID,
														 'post_status' 	=> 'draft' ) );

		  }

	  }

	}

}
add_action( 'transition_post_status', 'on_transitioning_post_status', 10, 3 );

// fim galeria


// Ativa imagens destacadas
	add_theme_support( 'post-thumbnails' );
	



// Adiciona tamanhos de imagens customizados		
	add_image_size( 'imagem_200_133', 200, 133, true );
	add_image_size( 'imagem_260_226', 260, 226, true );
	add_image_size( 'imagem_400_350', 400, 350, true );
	add_image_size( 'imagem_600_450', 600, 450, true );
	add_image_size( 'imagem_800_550', 800, 550, true );
		
		
// menu topo-home
	function register_my_menu_topo_home() {
		register_nav_menu('menu-topo-home',__( 'Menu topo Home' ));
	}
	add_action( 'init', 'register_my_menu_topo_home' );
	
// menu topo
	function register_my_menu_topo() {
		register_nav_menu('menu-topo',__( 'Menu topo' ));
	}
	add_action( 'init', 'register_my_menu_topo' );