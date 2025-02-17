<?php

/* THUMBMAIL SIZE */
add_theme_support( 'post-thumbnails' );
add_image_size( 'work-thumb', 325);
add_image_size( 'store-thumb', 325);
add_image_size( 'blog-thumb', 325, 325, true);
add_image_size( 'video-thumb', 325, 183, array( 'left', 'bottom'));
//add_filter( 'jpeg_quality', create_function( '', 'return 80;' ) );

/* Page Slug Body Class */
function add_slug_body_class( $classes ) {
    global $post;
    if ( isset( $post ) ) {
    $classes[] = $post->post_type . '-' . $post->post_name;
    }
    return $classes;
    }
    add_filter( 'body_class', 'add_slug_body_class' );

/* NEW EXCERPT */ 
function new_excerpt_more($more) {
    return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');

/* CUSTOM TAXONOMY */
function gallery_init() {
    register_taxonomy(
        'gallery',
        'post',
        array(
            'label' => __('Gallery'),
            'sort' => true,
            'hierarchical' => true,
            'show_in_nav_menus' => true,
            'args' => array('orderby' => 'term_order'),
            'rewrite' => array('slug' => 'gallery'),
        )
    );

    register_taxonomy(
        'section',
        'post',
        array(
            'label' => __('Section'),
            'sort' => true,
            'hierarchical' => true,
            'args' => array('orderby' => 'term_order'),
            'rewrite' => array('slug' => 'section'),
        )
    );

}
add_action( 'init', 'gallery_init' );

function shop_init() {
    register_taxonomy(
        'shop',
        'post',
        array(
            'label' => __('Shop'),
            'sort' => true,
            'hierarchical' => true,
            'args' => array('orderby' => 'term_order'),
            'rewrite' => array('slug' => 'shop'),
        )
    );
}
add_action( 'init', 'shop_init' );

/* CUSTOM POST TYPES */
add_action('init', 'work_init');
function work_init()
{
  $labels = array(
    'name' => _x('Work', 'post type general name'),
    'singular_name' => _x('Work', 'post type singular name'),
    'add_new' => _x('Add New', 'work'),
    'add_new_item' => __('Add New Work'),
    'edit_item' => __('Edit Work'),
    'new_item' => __('New Work'),
    'view_item' => __('View Work'),
    'search_items' => __('Search Work'),
    'not_found' =>  __('No Work found'),
    'not_found_in_trash' => __('No Work found in Trash'),
    'parent_item_colon' => ''
  );
  $args = array(
    'labels' => $labels,
    'public' => true,
    'show_in_nav_menus' => true,
    'publicly_queryable' => true,
	'description' => __( 'Work for portfolio.' ),
    'show_ui' => true,
    'query_var' => true,
    'rewrite' => true,
	'slug' => 'work',
    'capability_type' => 'post',
    'hierarchical' => true,
    'menu_position' => null,
    'exclude_from_search' => false,
	'taxonomies' => array( 'gallery'),
	'supports' => array('title','editor','thumbnail',
    'custom-fields','page-attributes'),
    
  );

  register_post_type('work',$args);
}

add_action('init', 'project_init');
function project_init()
{
  $labels = array(
    'name' => _x('Project', 'post type general name'),
    'singular_name' => _x('Project', 'post type singular name'),
    'add_new' => _x('Add New', 'project'),
    'add_new_item' => __('Add New Project'),
    'edit_item' => __('Edit Project'),
    'new_item' => __('New Project'),
    'view_item' => __('View Project'),
    'search_items' => __('Search Project'),
    'not_found' =>  __('No Project found'),
    'not_found_in_trash' => __('No Project found in Trash'),
    'parent_item_colon' => ''
  );
  $args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
	'description' => __( 'Project for portfolio.' ),
    'show_ui' => true,
    'query_var' => true,
    'rewrite' => true,
	'slug' => 'project',
    'capability_type' => 'post',
    'hierarchical' => true,
    'menu_position' => null,
    'exclude_from_search' => false,
	'taxonomies' => array('gallery'),
	'supports' => array('title','editor','thumbnail',
    'custom-fields','page-attributes'),
    
  );

  register_post_type('project',$args);
}


add_action('init', 'product_init');
function product_init()
{
  $labels = array(
    'name' => _x('Product', 'post type general name'),
    'singular_name' => _x('Product', 'post type singular name'),
    'add_new' => _x('Add New', 'product'),
    'add_new_item' => __('Add New Product'),
    'edit_item' => __('Edit Product'),
    'new_item' => __('New Product'),
    'view_item' => __('View Product'),
    'search_items' => __('Search Product'),
    'not_found' =>  __('No Product found'),
    'not_found_in_trash' => __('No Product found in Trash'),
    'parent_item_colon' => ''
  );
  $args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
	'description' => __( 'Product for portfolio.' ),
    'show_ui' => true,
    'query_var' => 'true',
    'rewrite' => true,
	'slug' => 'product',
    'capability_type' => 'post',
    'hierarchical' => true,
    'menu_position' => null,
	'exclude_from_search' => false,
	'taxonomies' => array( 'shop'),
	'supports' => array('title','editor','thumbnail',
    'custom-fields','page-attributes'),
    
  );

  register_post_type('product',$args);
}


/* NAVIGATION */ 
register_nav_menus( array(
	'primary' => __( 'Primary Navigation' ),
	) );
