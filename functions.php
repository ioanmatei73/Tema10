<?php

function wpr_add_style() {
	wp_enqueue_style('wpr-academy-style', get_stylesheet_directory_uri() . '/style.css');
	//wp_enqueue_script('prodview', get_stylesheet_directory_uri() . '/assets/js/prodview.js', array('jquery'), '1.0', true);
}

add_action('wp_enqueue_scripts', 'wpr_add_style');

function register_software_cpt() {

	$args_dom = array(
		'labels' 		=> array(
			'name' 				=> __( 'Domains', 'taxonomy general name' ),
			'singular_name' 	=> __( 'Domain', 'taxonomy singular name' ),
			'search_items' 		=>  __( 'Search Domains' ),
			'all_items' 		=> __( 'All Domains' ),
			'parent_item' 		=> __( 'Parent Domain' ),
			'parent_item_colon' => __( 'Parent Domain:' ),
			'edit_item' 		=> __( 'Edit Domain' ),
			'update_item' 		=> __( 'Update Domain' ),
			'add_new_item'		=> __( 'Add New Domain' ),
			'new_item_name' 	=> __( 'New Domain' ),
			'menu_name' 		=> __( 'Domains' )
		),
		'hierarchical'			=> true,
		'has_archive'			=> true,
		'show_admin_column'		=> true,
		'show_ui'				=> true,
		'show_in_rest'			=> true,
		'rewrite'				=> array(
			'slug'	=> 'domain'
		)
	);
	register_taxonomy( 'domain', array( 'domain' ), $args_dom );

	$args_cl = array(
		'labels' 		=> array(
			'name' 				=> __( 'Coding languages', 'taxonomy general name' ),
			'singular_name' 	=> __( 'Coding language', 'taxonomy singular name' ),
			'search_items' 		=>  __( 'Search Coding languages' ),
			'all_items' 		=> __( 'All Coding languages' ),
			'parent_item' 		=> __( 'Parent Coding language' ),
			'parent_item_colon' => __( 'Parent Coding language:' ),
			'edit_item' 		=> __( 'Edit Coding language' ),
			'update_item' 		=> __( 'Update Coding language' ),
			'add_new_item'		=> __( 'Add New Coding language' ),
			'new_item_name' 	=> __( 'New Coding language Name' ),
			'menu_name' 		=> __( 'Coding languages' )
		),
		'hierarchical'			=> true,
		'has_archive'			=> true,
		'show_admin_column'		=> true,
		'show_ui'				=> true,
		'show_in_rest'			=> true,
		'rewrite'				=> array(
			'slug'	=> 'codlang'
		)
	);
	register_taxonomy( 'codlang', array( 'codlang' ), $args_cl );

	$args = array(
		'label'               => __( 'Software', '' ),
		'labels'              => array(
			'name'                  => __( 'Software', '' ),
			'singular_name'         => __( 'Software', '' ),
			'featured_image'        => __( 'Software Image', '' ),
			'set_featured_image'    => __( 'Set Software Image', '' ),
			'remove_featured_image' => __( 'Remove Software Image', '' ),
			'use_featured_image'    => __( 'Use Software Image', '' ),
			'add_new_item'          => 'Add new Software',
			'add_new'               => 'Add Software',
			'edit_item'             => 'Edit Software',
			'view_item'             => 'View Software',
			'view_items'            => 'View Software',
		),
		'public'              => true,
		'publicly_queryable'  => true,
		'show_ui'             => true,
		'show_in_rest'        => true,
		'has_archive'         => false,
		'show_in_menu'        => true,
		'exclude_from_search' => false,
		'map_meta_cap'        => true,
		'hierarchical'        => true,
		'query_var'           => true,
		'supports'            => array( 'title', 'editor', 'custom-fields' ),
		'taxonomies'          => array( 'domain', 'codlang' ),
		'menu_position'       => 5,
		'menu_icon'           => 'dashicons-groups',
	);
	register_post_type( 'software', $args );

}
add_action( 'init', 'register_software_cpt' );

function register_engineer_cpt() {
	
	$args_sl = array(
		'labels' 		=> array(
			'name' 				=> __( 'Spoken languages', 'taxonomy general name' ),
			'singular_name' 	=> __( 'Spoken language', 'taxonomy singular name' ),
			'search_items' 		=>  __( 'Search Spoken languages' ),
			'all_items' 		=> __( 'All Spoken languages' ),
			'parent_item' 		=> __( 'Parent Spoken language' ),
			'parent_item_colon' => __( 'Parent Spoken language:' ),
			'edit_item' 		=> __( 'Edit Spoken language' ),
			'update_item' 		=> __( 'Update Spoken language' ),
			'add_new_item'		=> __( 'Add New Spoken language' ),
			'new_item_name' 	=> __( 'New Spoken language Name' ),
			'menu_name' 		=> __( 'Spoken languages' )
		),
		'hierarchical'			=> true,
		'has_archive'			=> true,
		'show_admin_column'		=> true,
		'show_ui'				=> true,
		'show_in_rest'			=> true,
		'rewrite'				=> array(
			'slug'	=> 'spoklang'
		)
	);
	register_taxonomy( 'spoklang', array( 'spoklang' ), $args_sl );

	$args_hb = array(
		'labels' 		=> array(
			'name' 				=> __( 'Hobbies', 'taxonomy general name' ),
			'singular_name' 	=> __( 'Hobby', 'taxonomy singular name' ),
			'search_items' 		=>  __( 'Search Hobbies' ),
			'all_items' 		=> __( 'All Hobbies' ),
			'parent_item' 		=> __( 'Parent Hobby' ),
			'parent_item_colon' => __( 'Parent Hobby:' ),
			'edit_item' 		=> __( 'Edit Hobby' ),
			'update_item' 		=> __( 'Update Hobby' ),
			'add_new_item'		=> __( 'Add New Hobby' ),
			'new_item_name' 	=> __( 'New Hobby' ),
			'menu_name' 		=> __( 'Hobbies' )
		),
		'hierarchical'			=> true,
		'has_archive'			=> true,
		'show_admin_column'		=> true,
		'show_ui'				=> true,
		'show_in_rest'			=> true,
		'query_var' 			=> true,
		'rewrite'				=> array(
			'slug'	=> 'hobby'
		)
	);
	register_taxonomy( 'hobby', array( 'hobby' ), $args_hb );

	$args = array(
		'label'               => __( 'Engineers', '' ),
		'labels'              => array(
			'name'                  => __( 'Engineers', '' ),
			'singular_name'         => __( 'Engineer', '' ),
			'featured_image'        => __( 'Engineer Image', '' ),
			'set_featured_image'    => __( 'Set Engineer Image', '' ),
			'remove_featured_image' => __( 'Remove Engineer Image', '' ),
			'use_featured_image'    => __( 'Use Engineer Image', '' ),
			'add_new_item'          => 'Add new Engineer',
			'add_new'               => 'Add Engineer',
			'edit_item'             => 'Edit Engineer',
			'view_item'             => 'View Engineer',
			'view_items'            => 'View Engineers',
		),
		'public'              => true,
		'publicly_queryable'  => true,
		'show_ui'             => true,
		'show_in_rest'        => true,
		'has_archive'         => true,
		'show_in_menu'        => true,
		'exclude_from_search' => false,
		'map_meta_cap'        => true,
		'hierarchical'        => true,
		'query_var'           => true,
		'supports'            => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
		'taxonomies'          => array( 'spoklang', 'hobby' ),
		'menu_position'       => 5,
		'menu_icon'           => 'dashicons-groups',
	);
	register_post_type( 'engineer', $args );

	add_theme_support( 'post-thumbnails', array( 'engineer' ) );

}
add_action( 'init', 'register_engineer_cpt' );

function client_fields_callback( $args ) {
	?>
	<p id="<?php echo esc_attr( $args[ 'id' ] ); ?>"><?php esc_html_e( 'Edit Client Settings', 'wpr' ); ?></p>
	<?php
}

function software_fields_callback( $args ) {
	?>
	<p id="<?php echo esc_attr( $args[ 'id' ] ); ?>"><?php esc_html_e( 'Edit Software Settings', 'wpr' ); ?></p>
	<?php
}

add_action(
	'admin_init',
	function() {

		register_setting( 'wpr_academy_group', 'wpr_options' );

		add_settings_section(
			'client_fields',
			'Client Fields',
			'client_fields_callback',
			'wpr_academy_group'
		);

		add_settings_field(
			'wpr_api_token',
			'Token',
			'api_token_field_callback',
			'wpr_academy_group',
			'client_fields',
			array(
				'label_for'       => 'wpr_api_token',
				'class'           => 'wpr_row',
				'wpr_custom_data' => 'custom'
			)
		);

		add_settings_field(
			'wpr_api_client',
			'Client ID',
			'api_client_field_callback',
			'wpr_academy_group',
			'client_fields',
			array(
				'label_for'       => 'wpr_api_client',
				'class'           => 'wpr_row',
				'wpr_custom_data' => 'custom'
			)
		);

		add_settings_section(
			'software_fields',
			'Software Fields',
			'software_fields_callback',
			'wpr_academy_group'
		);

		add_settings_field(
			'wpr_api_discount',
			'Price discount',
			'api_discount_field_callback',
			'wpr_academy_group',
			'software_fields',
			array(
				'label_for'       => 'wpr_api_discount',
				'class'           => 'wpr_row',
				'wpr_custom_data' => 'custom',
			)
		);

		add_settings_field(
			'wpr_api_period',
			'Discount period',
			'api_period_field_callback',
			'wpr_academy_group',
			'software_fields',
			array(
				'label_for'       => 'wpr_api_period',
				'class'           => 'wpr_row',
				'wpr_custom_data' => 'custom',
			)
		);

	}
);

add_action(
	'admin_menu',
	function() {

		add_menu_page(
			'API settings',
			'API options',
			'manage_options',
			'WPR_API_Settings',
			'wpr_api_pagehtml',
			'dashicons-admin-settings',
			1
		);
	}
);

function wpr_api_pagehtml() {
	if ( ! current_user_can( 'manage_options' ) ) {
		return;
	}
	// check if the user have submitted the settings
	// WordPress will add the "settings-updated" $_GET parameter to the url
	if ( isset( $_GET['settings-updated'] ) ) {
		// add settings saved message with the class of "updated"
		add_settings_error( 'wpr_messages', 'wpr_message', __( 'Settings Saved', 'wpr' ), 'updated' );
	}

	// show error/update messages
	settings_errors( 'wpr_messages' );

	?>
	<div class="wrap">
		<h1><?php echo esc_html( get_admin_page_title() ); ?></h1>
		<form action="options.php" method="post">
			<?php
			// output security fields for the registered setting "wpr_academy"
			settings_fields( 'wpr_academy_group' );

			// output setting sections and their fields
			// (sections are registered for "wpr_academy", each field is registered to a specific section)
			do_settings_sections( 'wpr_academy_group' );
			// output save settings button
			submit_button( 'Save Settings' );
			?>
		</form>
	</div>
	<?php

}

function api_token_field_callback( $args ) {
	// Get the value of the setting we've registered with register_setting()
	$options = get_option( 'wpr_options' );
	
	?>
	
	<input
		value="<?php echo $options[$args[ 'label_for' ]]; ?>"
		id="<?php echo esc_attr( $args[ 'label_for' ] ); ?>"
		data-custom="<?php echo esc_attr( $args[ 'wpr_custom_data' ] ); ?>"
		name="wpr_options[<?php echo esc_attr( $args[ 'label_for' ] ); ?>]"
		type="text">
	
	<?php
}

function api_client_field_callback( $args ) {
	// Get the value of the setting we've registered with register_setting()
	$options = get_option( 'wpr_options' );
	
	?>
	
	<input
		value="<?php echo $options[$args[ 'label_for' ]]; ?>"
		id="<?php echo esc_attr( $args[ 'label_for' ] ); ?>"
		data-custom="<?php echo esc_attr( $args[ 'wpr_custom_data' ] ); ?>"
		name="wpr_options[<?php echo esc_attr( $args[ 'label_for' ] ); ?>]"
		type="text">
	
	<?php
}

function api_discount_field_callback( $args ) {
	// Get the value of the setting we've registered with register_setting()
	$options = get_option( 'wpr_options' );
	
	?>
	
	<input
		value="<?php echo $options[$args['label_for']]; ?>"
		id="<?php echo esc_attr( $args['label_for'] ); ?>"
		data-custom="<?php echo esc_attr( $args['wpr_custom_data'] ); ?>"
		name="wpr_options[<?php echo esc_attr( $args['label_for'] ); ?>]"
		type="number">
	
	<?php
}
function api_period_field_callback( $args ) {
	// Get the value of the setting we've registered with register_setting()
	$options = get_option( 'wpr_options' );
	
	?>
	
	<input
		value="<?php echo $options[$args[ 'label_for' ]]; ?>"
		id="<?php echo esc_attr( $args[ 'label_for' ] ); ?>"
		data-custom="<?php echo esc_attr( $args[ 'wpr_custom_data' ] ); ?>"
		name="wpr_options[<?php echo esc_attr( $args[ 'label_for' ] ); ?>]"
		type="number">
	
	<?php
}

/*
function add_text_after_addtocart_button() {
	$product = wc_get_product( get_the_ID() );
	if ( 50 < $product->get_price()) {
		echo 'Pretul este mai mare decat 50';
	} else {
		echo 'Pretul este mai mic sau egal cu 50';
	}
}

add_action('woocommerce_after_add_to_cart_form', 'add_text_after_addtocart_button');
add_action('woocommerce_after_shop_loop_item', 'add_text_after_addtocart_button');

//remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_title', 5);

add_action('woocommerce_template_single_title', function() {
	echo 'Titlu adaugat manual';
});
*/

add_action( 'woocommerce_before_shop_loop', 'woocommerce_pagination');

add_action( 'woocommerce_after_shop_loop', 'woocommerce_catalog_ordering');


function prodview_callback() {
    //header( "Content-Type: application/json" );

	global $product;

	$prod_id = $_GET['prod_id'];
	$product = wc_get_product( $prod_id );
	
	// error_log(print_r($product, true));

	$prod_url = $product->get_permalink();
	$prod_type = $product->get_type();
	$my_var = null;

	if ( $product->is_type( 'variable' ) ) {
		ob_start();
		woocommerce_variable_add_to_cart();
		$my_var = ob_get_clean();
	}

	$prod_content = array(
		'title' 			=> $product->get_name(),
		'price' 			=> $product->get_price_html(),
		'image' 			=> $product->get_image(),
		'short_description' => $product->get_short_description(),
		'url' 				=> $product->get_permalink(),
		'summary' 			=> $my_var,
		'categories'		=> $product->get_categories()
	);

	echo wp_json_encode( $prod_content );

    wp_die();
}
add_action( 'wp_ajax_prodview_action', 'prodview_callback' );
add_action( 'wp_ajax_nopriv_prodview_action', 'prodview_callback' );

// Alter displayed price
 
function wpr_alter_price_display( $price_html, $product ) {
    
    // ONLY ON FRONTEND
    if ( is_admin() ) return $price_html;
    
    // ONLY IF PRICE NOT NULL
    if ( '' === $product->get_price() ) return $price_html;
     
    if ( true ) {
        $orig_price = wc_get_price_to_display( $product );
        $price_html = wc_price( $orig_price + 85 );
    }
    
    return $price_html;
 
}

//add_filter( 'woocommerce_get_price_html', 'wpr_alter_price_display', 9999, 2 );

function setprice_callback() {
    
	$inscript_place = $_GET['inscript_place'];

	if ( 'none' !== $inscript_place ) {
		add_filter( 'woocommerce_get_price_html', 'wpr_alter_price_display', 9999, 2 );
	}
	
	echo wp_json_encode( $inscript_place );

    wp_die();
}
add_action( 'wp_ajax_setprice_action', 'setprice_callback' );
add_action( 'wp_ajax_nopriv_setprice_action', 'setprice_callback' );


// Add fields data to cart
function add_to_cart_item( $cart_item_data, $product_id, $variation_id ) {
	if(isset($_REQUEST['loc_data']))
    {
        $cart_item_data['loc_data'] = $_REQUEST['loc_data'];
    }
	if(isset($_REQUEST['text_data']))
    {
		$cart_item_data['text_data'] = $_REQUEST['text_data'];
    }

    return $cart_item_data;
}
add_filter( 'woocommerce_add_cart_item_data', 'add_to_cart_item', 10, 3 );

// Update the product price
function update_price( $cart ) {

    if ( is_admin() && ! defined( 'DOING_AJAX' ) ) 
        return;

    if ( did_action( 'woocommerce_before_calculate_totals' ) >= 2 ) 
        return;

    $fata = 'fata';
	$spate = 'spate';
	$fataspate = 'fataspate';

    // Loop through cart items
    foreach( $cart->get_cart() as $cart_item_key => $cart_item ) {
        
        $price = $cart_item['data']->get_price();
		
        // Check the passed values and update the price
        if( $cart_item['loc_data'] === $fata || $cart_item['loc_data'] === $spate) {
            $new_price = $price + 50;
            $cart_item['data']->set_price( $new_price );
        }
		if( $cart_item['loc_data'] === $fataspate) {
            $new_price = $price + 85;
            $cart_item['data']->set_price( $new_price );
        }
    }
}
add_action('woocommerce_before_calculate_totals', 'update_price', 99);
