(function($) {
    $('.location').on('change',function(e) {
        e.preventDefault();

        var inscript_place = $(this).val();

        $.ajax({
            url: WPR.ajax_url,
            type: 'GET',
            data: {
                action: 'setprice_action',
                inscript_place: inscript_place
            },
            success: function(response){
                console.log(response);
            },
            error: function(errorThrown){
                console.log(errorThrown);
            }
        });
    });
}) (jQuery);