<?php
// This function enqueues the Normalize.css for use. The first parameter is a name for the stylesheet, the second is the URL. Here we
// use an online version of the css file.
function add_normalize_CSS() {
    wp_enqueue_style( 'normalize-styles', "https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css");
}

// Register a new sidebar simply named 'sidebar'
function add_widget_Support() {
	register_sidebar( array(
		'name'          => 'Sidebar',
		'id'            => 'sidebar',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
	) );
}
// Hook the widget initiation and run our function
add_action( 'widgets_init', 'add_Widget_Support' );

// Register a new navigation menu
function add_Main_Nav() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
// Hook to the init action hook, run our navigation menu function
add_action( 'init', 'add_Main_Nav' );





// Custom Post Types
// agenda
function agenda_custom_post_type() {

	$labels = array(
		'name'                  => 'Agenda',
		'singular_name'         => 'Agenda',
		'menu_name'             => 'Agenda',
		'name_admin_bar'        => 'Agenda',
		'archives'              => 'Archivos de agenda',
		'attributes'            => 'Atributos de agenda',
		'parent_item_colon'     => 'Elemento padre:',
		'all_items'             => 'Todas las agendas',
		'add_new_item'          => 'Añadir nuevo',
		'add_new'               => 'Añadir nuevo',
		'new_item'              => 'Nuevo',
		'edit_item'             => 'Editar ',
		'update_item'           => 'Actualizar',
		'view_item'             => 'Ver',
		'view_items'            => 'Ver',
		'search_items'          => 'Buscar',
		'not_found'             => 'No Encontrados',
		'not_found_in_trash'    => 'No Encontrados en la Papelera',
		'featured_image'        => 'Imagen destacada',
		'set_featured_image'    => 'Seleccionar imagen destacada',
		'remove_featured_image' => 'Eliminar imagen destacada',
		'use_featured_image'    => 'Usar como imagen destacada',
		'insert_into_item'      => 'Insertar en agenda',
		'uploaded_to_this_item' => 'Subir a esta actividad',
		'items_list'            => 'Listado de actividades',
		'items_list_navigation' => 'Navegación de agenda',
		'filter_items_list'     => 'Filstrar listado de actividades',
	);
	$args = array(
		'label'                 => 'Agenda',
		'description'           => 'Contenidos de agenda',
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'trackbacks', 'revisions', 'custom-fields', 'page-attributes', 'post-formats', ),
		//'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-calendar',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => 'slug-agenda',
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
		'show_in_rest'          => true,
	);
	register_post_type( 'agenda', $args );

}
add_action( 'init', 'agenda_custom_post_type', 0 );


//FUNCIONES
function getPostThumbnailId($post){
	$thumbID = get_post_thumbnail_id( $post->ID );
	$imgDestacada = wp_get_attachment_image_src( $thumbID, 'full' ); // Sustituir por thumbnail, medium, large o full
	return $imgDestacada[0];			
}							
								
								
								
								
								
								
								
								
								
								
								
								