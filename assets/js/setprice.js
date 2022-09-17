(function($) {
   $('.location').change(function() {
        let select = $(this).val();
        let lei = '&nbsp;<span class="woocommerce-Price-currencySymbol">lei</span>';
        let price = $('.woocommerce-Price-amount bdi');

        price.empty();

        if(select === 'fata' || select === 'spate') {  
            price.append(parseFloat(WPR.product_price) + parseFloat(WPR.one_side) + lei);

        } else if(select === 'fataspate') {
            price.append(parseFloat(WPR.product_price) + parseFloat(WPR.two_sides) + lei);
        } else {
            price.append(parseFloat(WPR.product_price) + lei);
        }
   });

}) (jQuery);