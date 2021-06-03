<?php
/*
Plugin Name: Contenido
Author Name: David Artero Martin
Description: Son entrada a las cuales le metes contenido especifico
*/

// Register Custom Post Type
function ctp_contenido() {

	$labels = array(
		'name'                  => _x( 'contenidos', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'contenido', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Contenido', 'text_domain' ),
		'name_admin_bar'        => __( 'Contenido', 'text_domain' ),
		'archives'              => __( 'Archivos del Contenido', 'text_domain' ),
		'attributes'            => __( 'Atributos del Contenido', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item', 'text_domain' ),
		'all_items'             => __( 'Todos los contenidos', 'text_domain' ),
		'add_new_item'          => __( 'Añadir nuevo contenido', 'text_domain' ),
		'add_new'               => __( 'Añadir nuevo', 'text_domain' ),
		'new_item'              => __( 'Nuevo contenido', 'text_domain' ),
		'edit_item'             => __( 'Editar contenido', 'text_domain' ),
		'update_item'           => __( 'Actualizar contenido', 'text_domain' ),
		'view_item'             => __( 'Ver contenido', 'text_domain' ),
		'view_items'            => __( 'Ver contenidos', 'text_domain' ),
		'search_items'          => __( 'Buscar contenido', 'text_domain' ),
		'not_found'             => __( 'No hay contenido', 'text_domain' ),
		'not_found_in_trash'    => __( 'No hay contenidos en la papelera', 'text_domain' ),
		'featured_image'        => __( 'Imagen del contenido', 'text_domain' ),
		'set_featured_image'    => __( 'Obtener imagen del contenido', 'text_domain' ),
		'remove_featured_image' => __( 'Borrar imagen del contenido', 'text_domain' ),
		'use_featured_image'    => __( 'Usar como imagen del contenido', 'text_domain' ),
		'insert_into_item'      => __( 'Insertar en el contenido', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Subido a este contenido', 'text_domain' ),
		'items_list'            => __( 'Lista de contenidos', 'text_domain' ),
		'items_list_navigation' => __( 'Navegar por la lista de contenidos', 'text_domain' ),
		'filter_items_list'     => __( 'filtrar lista de contenidos', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'contenido', 'text_domain' ),
		'description'           => __( 'Descripción de contenido', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'comments', 'revisions', 'page-attributes', 'post-formats', 'custom-fields' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-images-alt2',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'contenido', $args );
	// Hay que ejecutar este código para que funcionen los permalinks al custom post type
  // Es un poco rebuscado porque interesa que sólo se ejecute una vez
  $set = get_option( 'post_type_rules_flased_vivienda' );
  if ( true !== $set ) {
      flush_rewrite_rules( false );
      update_option( 'post_type_rules_flased_vivienda', true );
  }
}
add_action( 'init', 'ctp_contenido', 0 );