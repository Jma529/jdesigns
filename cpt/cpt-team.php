<?php

// Define constants
define( 'JDESIGNS_TEAM_CPT_NAME', 'Team' );
define( 'JDESIGNS_TEAM_SINGLE_NAME', 'Team' );
define( 'JDESIGNS_TEAM_PLURAL_NAME', 'Team' );


// Register Custom Post Type
function jdesigns_the_studio_register_cpt() {

	$labels = array(
		'name'                  => JDESIGNS_TEAM_PLURAL_NAME,
		'singular_name'         => JDESIGNS_TEAM_SINGLE_NAME,
		'menu_name'             => JDESIGNS_TEAM_SINGLE_NAME,
		'name_admin_bar'        => JDESIGNS_TEAM_PLURAL_NAME,
		'archives'              => __( 'Team Archives', 'text_domain' ),
		'attributes'            => __( 'Team Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Team:', 'text_domain' ),
		'all_items'             => __( 'All Team', 'text_domain' ),
		'add_new_item'          => __( 'Add New Team', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Team', 'text_domain' ),
		'edit_item'             => __( 'Edit Team', 'text_domain' ),
		'update_item'           => __( 'Update Team', 'text_domain' ),
		'view_item'             => __( 'View Team', 'text_domain' ),
		'view_items'            => __( 'View Team', 'text_domain' ),
		'search_items'          => __( 'Search Team', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into Team', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Team', 'text_domain' ),
		'items_list'            => __( 'Team list', 'text_domain' ),
		'items_list_navigation' => __( 'Team list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter Team list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Team', 'text_domain' ),
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
	register_post_type( JDESIGNS_TEAM_CPT_NAME, $args );

}
add_action( 'init', 'jdesigns_the_studio_register_cpt', 0 );

?>