<?php

// Register Custom Post Type
function jdesigns_the_studio_register_cpt() {

	$labels = array(
		'name'                  => _x( 'The Studio', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'The Studio', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'The Studio', 'text_domain' ),
		'name_admin_bar'        => __( 'The Studio', 'text_domain' ),
		'archives'              => __( 'The Studio Archives', 'text_domain' ),
		'attributes'            => __( 'The Studio Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent The Studio:', 'text_domain' ),
		'all_items'             => __( 'All The Studio', 'text_domain' ),
		'add_new_item'          => __( 'Add New The Studio', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New The Studio', 'text_domain' ),
		'edit_item'             => __( 'Edit The Studio', 'text_domain' ),
		'update_item'           => __( 'Update The Studio', 'text_domain' ),
		'view_item'             => __( 'View The Studio', 'text_domain' ),
		'view_items'            => __( 'View The Studio', 'text_domain' ),
		'search_items'          => __( 'Search The Studio', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into The Studio', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this The Studio', 'text_domain' ),
		'items_list'            => __( 'The Studio list', 'text_domain' ),
		'items_list_navigation' => __( 'The Studio list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter The Studio list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'The Studio', 'text_domain' ),
		'description'           => __( 'Post Type Description', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-groups',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => true,
		'publicly_queryable'    => false,
	);
	register_post_type( 'The Studio', $args );

}
add_action( 'init', 'jdesigns_the_studio_register_cpt', 0 );

?>