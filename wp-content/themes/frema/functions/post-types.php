<?php
if ( ! function_exists('wpn_malinkes') ) {

// Register Custom Post Type malinkes
function wpn_malinkes() {

	$labels = array(
		'name'                  => _x( 'malinkes', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'malinke', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'malinkes', 'text_domain' ),
		'name_admin_bar'        => __( 'malinkes', 'text_domain' ),
		'archives'              => __( 'Archivo de malinkes', 'text_domain' ),
		'attributes'            => __( 'Atributos de malinke', 'text_domain' ),
		'parent_item_colon'     => __( 'malinke padre', 'text_domain' ),
		'all_items'             => __( 'Todas las malinkes', 'text_domain' ),
		'add_new_item'          => __( 'Añadir nuevo malinke', 'text_domain' ),
		'add_new'               => __( 'Añadir nuevo', 'text_domain' ),
		'new_item'              => __( 'Nieva malinke', 'text_domain' ),
		'edit_item'             => __( 'Editar malinke', 'text_domain' ),
		'update_item'           => __( 'Actualizar malinke', 'text_domain' ),
		'view_item'             => __( 'Ver malinke', 'text_domain' ),
		'view_items'            => __( 'Ver malinke', 'text_domain' ),
		'search_items'          => __( 'Buscar malinkes', 'text_domain' ),
		'not_found'             => __( 'No encontrado', 'text_domain' ),
		'not_found_in_trash'    => __( 'No encontrado en la basura', 'text_domain' ),
		'featured_image'        => __( 'Imagen destacada', 'text_domain' ),
		'set_featured_image'    => __( 'Configurar imagen destacada', 'text_domain' ),
		'remove_featured_image' => __( 'Borrar imagen destacada', 'text_domain' ),
		'use_featured_image'    => __( 'Usar como imagen destacada', 'text_domain' ),
		'insert_into_item'      => __( 'Insertar en el malinke', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Actualizar en esta malinke', 'text_domain' ),
		'items_list'            => __( 'Listado de malinkes', 'text_domain' ),
		'items_list_navigation' => __( 'Lista navegable de malinkes', 'text_domain' ),
		'filter_items_list'     => __( 'Filtro lista de malinkes', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'malinke', 'text_domain' ),
		'description'           => __( 'Entradas de malinkes', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'excerpt', 'editor', 'thumbnail', 'custom-fields' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'malinkes', $args );

}
add_action( 'init', 'wpn_malinkes', 0 );

}
if ( ! function_exists('wpn_emprendimientos') ) {

	// Register Custom Post Type emprendimientos
	function wpn_emprendimientos() {
	
		$labels = array(
			'name'                  => _x( 'emprendimientos', 'Post Type General Name', 'text_domain' ),
			'singular_name'         => _x( 'emprendimiento', 'Post Type Singular Name', 'text_domain' ),
			'menu_name'             => __( 'emprendimientos', 'text_domain' ),
			'name_admin_bar'        => __( 'emprendimientos', 'text_domain' ),
			'archives'              => __( 'Archivo de emprendimientos', 'text_domain' ),
			'attributes'            => __( 'Atributos de emprendimiento', 'text_domain' ),
			'parent_item_colon'     => __( 'emprendimiento padre', 'text_domain' ),
			'all_items'             => __( 'Todas las emprendimientos', 'text_domain' ),
			'add_new_item'          => __( 'Añadir nuevo emprendimiento', 'text_domain' ),
			'add_new'               => __( 'Añadir nuevo', 'text_domain' ),
			'new_item'              => __( 'Nieva emprendimiento', 'text_domain' ),
			'edit_item'             => __( 'Editar emprendimiento', 'text_domain' ),
			'update_item'           => __( 'Actualizar emprendimiento', 'text_domain' ),
			'view_item'             => __( 'Ver emprendimiento', 'text_domain' ),
			'view_items'            => __( 'Ver emprendimiento', 'text_domain' ),
			'search_items'          => __( 'Buscar emprendimientos', 'text_domain' ),
			'not_found'             => __( 'No encontrado', 'text_domain' ),
			'not_found_in_trash'    => __( 'No encontrado en la basura', 'text_domain' ),
			'featured_image'        => __( 'Imagen destacada', 'text_domain' ),
			'set_featured_image'    => __( 'Configurar imagen destacada', 'text_domain' ),
			'remove_featured_image' => __( 'Borrar imagen destacada', 'text_domain' ),
			'use_featured_image'    => __( 'Usar como imagen destacada', 'text_domain' ),
			'insert_into_item'      => __( 'Insertar en el emprendimiento', 'text_domain' ),
			'uploaded_to_this_item' => __( 'Actualizar en esta emprendimiento', 'text_domain' ),
			'items_list'            => __( 'Listado de emprendimientos', 'text_domain' ),
			'items_list_navigation' => __( 'Lista navegable de emprendimientos', 'text_domain' ),
			'filter_items_list'     => __( 'Filtro lista de emprendimientos', 'text_domain' ),
		);
		$args = array(
			'label'                 => __( 'emprendimiento', 'text_domain' ),
			'description'           => __( 'Entradas de emprendimientos', 'text_domain' ),
			'labels'                => $labels,
			'supports'              => array( 'title', 'excerpt', 'editor', 'thumbnail', 'custom-fields' ),
			'taxonomies'            => array( 'category', 'post_tag' ),
			'hierarchical'          => false,
			'public'                => true,
			'show_ui'               => true,
			'show_in_menu'          => true,
			'menu_position'         => 5,
			'show_in_admin_bar'     => true,
			'show_in_nav_menus'     => true,
			'can_export'            => true,
			'has_archive'           => true,
			'exclude_from_search'   => false,
			'publicly_queryable'    => true,
			'capability_type'       => 'page',
		);
		register_post_type( 'emprendimientos', $args );
	
	}
	add_action( 'init', 'wpn_emprendimientos', 0 );
	
	}
	if ( ! function_exists('wpn_eventos') ) {

		// Register Custom Post Type eventos
		function wpn_eventos() {
		
			$labels = array(
				'name'                  => _x( 'eventos', 'Post Type General Name', 'text_domain' ),
				'singular_name'         => _x( 'evento', 'Post Type Singular Name', 'text_domain' ),
				'menu_name'             => __( 'eventos', 'text_domain' ),
				'name_admin_bar'        => __( 'eventos', 'text_domain' ),
				'archives'              => __( 'Archivo de eventos', 'text_domain' ),
				'attributes'            => __( 'Atributos de evento', 'text_domain' ),
				'parent_item_colon'     => __( 'evento padre', 'text_domain' ),
				'all_items'             => __( 'Todas las eventos', 'text_domain' ),
				'add_new_item'          => __( 'Añadir nuevo evento', 'text_domain' ),
				'add_new'               => __( 'Añadir nuevo', 'text_domain' ),
				'new_item'              => __( 'Nieva evento', 'text_domain' ),
				'edit_item'             => __( 'Editar evento', 'text_domain' ),
				'update_item'           => __( 'Actualizar evento', 'text_domain' ),
				'view_item'             => __( 'Ver evento', 'text_domain' ),
				'view_items'            => __( 'Ver evento', 'text_domain' ),
				'search_items'          => __( 'Buscar eventos', 'text_domain' ),
				'not_found'             => __( 'No encontrado', 'text_domain' ),
				'not_found_in_trash'    => __( 'No encontrado en la basura', 'text_domain' ),
				'featured_image'        => __( 'Imagen destacada', 'text_domain' ),
				'set_featured_image'    => __( 'Configurar imagen destacada', 'text_domain' ),
				'remove_featured_image' => __( 'Borrar imagen destacada', 'text_domain' ),
				'use_featured_image'    => __( 'Usar como imagen destacada', 'text_domain' ),
				'insert_into_item'      => __( 'Insertar en el evento', 'text_domain' ),
				'uploaded_to_this_item' => __( 'Actualizar en esta evento', 'text_domain' ),
				'items_list'            => __( 'Listado de eventos', 'text_domain' ),
				'items_list_navigation' => __( 'Lista navegable de eventos', 'text_domain' ),
				'filter_items_list'     => __( 'Filtro lista de eventos', 'text_domain' ),
			);
			$args = array(
				'label'                 => __( 'evento', 'text_domain' ),
				'description'           => __( 'Entradas de eventos', 'text_domain' ),
				'labels'                => $labels,
				'supports'              => array( 'title', 'excerpt', 'editor', 'thumbnail', 'custom-fields' ),
				'taxonomies'            => array( 'category', 'post_tag' ),
				'hierarchical'          => false,
				'public'                => true,
				'show_ui'               => true,
				'show_in_menu'          => true,
				'menu_position'         => 5,
				'show_in_admin_bar'     => true,
				'show_in_nav_menus'     => true,
				'can_export'            => true,
				'has_archive'           => true,
				'exclude_from_search'   => false,
				'publicly_queryable'    => true,
				'capability_type'       => 'page',
			);
			register_post_type( 'eventos', $args );
		
		}
		add_action( 'init', 'wpn_eventos', 0 );
		
		}