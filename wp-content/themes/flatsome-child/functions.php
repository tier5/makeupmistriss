<?php
/* ADD custom theme functions here  */

add_filter('woocommerce_currency_symbol', 'change_existing_currency_symbol', 10, 2);

function change_existing_currency_symbol( $currency_symbol, $currency ) {
     switch( $currency ) {
          case 'INR': $currency_symbol = 'Rs. '; break;
     }
     return $currency_symbol;
}


//custom post type book

add_action( 'init', 'codex_book_init' );
/**
 * Register a book post type.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */
function codex_book_init() {
	$labels = array(
		'name'               => _x( 'Beauty', 'post type general name', 'your-plugin-textdomain' ),
		'singular_name'      => _x( 'Beauty', 'post type singular name', 'your-plugin-textdomain' ),
		'menu_name'          => _x( 'Beautys', 'admin menu', 'your-plugin-textdomain' ),
		'name_admin_bar'     => _x( 'Beauty', 'add new on admin bar', 'your-plugin-textdomain' ),
		'add_new'            => _x( 'Add New', 'book', 'your-plugin-textdomain' ),
		'add_new_item'       => __( 'Add New Beauty', 'your-plugin-textdomain' ),
		'new_item'           => __( 'New Beauty', 'your-plugin-textdomain' ),
		'edit_item'          => __( 'Edit Beauty', 'your-plugin-textdomain' ),
		'view_item'          => __( 'View Beauty', 'your-plugin-textdomain' ),
		'all_items'          => __( 'All Beautys', 'your-plugin-textdomain' ),
		'search_items'       => __( 'Search Books', 'your-plugin-textdomain' ),
		'parent_item_colon'  => __( 'Parent Books:', 'your-plugin-textdomain' ),
		'not_found'          => __( 'No books found.', 'your-plugin-textdomain' ),
		'not_found_in_trash' => __( 'No books found in Trash.', 'your-plugin-textdomain' )
	);

	$args = array(
		'labels'             => $labels,
                'description'        => __( 'Description.', 'your-plugin-textdomain' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'book' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
	);

	register_post_type( 'book', $args );
}