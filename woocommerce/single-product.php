<?php
/**
 * The Template for displaying all single products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header( 'shop' ); ?>

	<?php
		/**
		 * woocommerce_before_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
		 * @hooked woocommerce_breadcrumb - 20
		 */
		do_action( 'woocommerce_before_main_content' );
	?>
    
    
    <?php

    setprice_scripts();

    function setprice_scripts() {
        wp_enqueue_script( 'setprice', get_stylesheet_directory_uri() . '/assets/js/setprice.js', array( 'jquery' ), false, true );
        wp_localize_script( 
            'setprice', 
            'WPR', 
            array( 
                'ajax_url'   => admin_url( 'admin-ajax.php' ),
                'ajax_nonce' => wp_create_nonce( 'setprice' )
            )
        );
    }

    // Add select and input fields only for T-shirt category
    
    $product = wc_get_product();
    $prod_id = $product->get_id();
    $prod_category = wc_get_product_category_list($prod_id);

    if ( str_contains( $prod_category, 'T-shirt' ) ) {
        
        add_action( 'woocommerce_before_add_to_cart_button', 'inscript' );

        function inscript() {
            ?>
            <div class="ins-data" style="display: flex;">
                <div class="ins-location" style="padding: 10px;">
                    <span>Inscriptionare:</span><br>
                    <select class="location" name="loc_data">
                        <option value="none">Nepersonalizat</option>
                        <option value="fata">Fata</option>
                        <option value="spate">Spate</option>
                        <option value="fataspate">Fata+spate</option>
                    </select>
                </div>
                <div class="ins-text" style="padding: 10px; display: none;">
                    <span>Text inscriptionat:</span><br>
                    <input type="text" maxlenght="75" size="35" placeholder="Your text here..." name="text_data"></input>
                </div>
            </div>

            <?php

        }
    }

    ?>

		<?php while ( have_posts() ) : ?>
			<?php the_post(); ?>

			<?php wc_get_template_part( 'content', 'single-product' ); ?>

		<?php endwhile; // end of the loop. ?>

	<?php
		/**
		 * woocommerce_after_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
		 */
		do_action( 'woocommerce_after_main_content' );
	?>

	<?php
		/**
		 * woocommerce_sidebar hook.
		 *
		 * @hooked woocommerce_get_sidebar - 10
		 */
		do_action( 'woocommerce_sidebar' );
	?>

<?php
get_footer( 'shop' );
?>

            <script type="text/javascript">
			    jQuery('.location').on('change',function() {
                    if (jQuery(this).val() == 'none') {
                        jQuery('.ins-text').css('display','none');
                    } else {
                        jQuery('.ins-text').css('display','block');
                    }
                });
		        
		    </script>
<?php

/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */
