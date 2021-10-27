<?php
// Custom Post Types
// publicaciones
function publicaciones_custom_post_type() {

	$labels = array(
		'name'                  => 'Publicaciones',
		'singular_name'         => 'Publicaciones',
		'menu_name'             => 'Publicaciones',
		'name_admin_bar'        => 'Publicaciones',
		'archives'              => 'Archivos de Publicaciones',
		'attributes'            => 'Atributos de Publicaciones',
		'parent_item_colon'     => 'Elemento padre:',
		'all_items'             => 'Todos',
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
		'insert_into_item'      => 'Insertar',
		'uploaded_to_this_item' => 'Adjuntar',
		'items_list'            => 'Lista',
		'items_list_navigation' => 'Navegación',
		'filter_items_list'     => 'Filtrar en listado',
	);
	$args = array(
		'label'                 => 'Publicaciones',
		'description'           => 'Contenidos de Publicaciones',
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'trackbacks', 'revisions', 'custom-fields', 'page-attributes', 'post-formats', ),
		//'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-book',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => 'slug-publicaciones',
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
		'show_in_rest'          => true,
	);
	register_post_type( 'publicaciones', $args );

}
add_action( 'init', 'publicaciones_custom_post_type', 0 );