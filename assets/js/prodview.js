(function($) {
    $('.woocommerce-LoopProduct-link').click(function(e) {
        e.preventDefault();

        var prod_id = $(this).children('button').attr('data-id');

        $.ajax({
            url: WPR.ajax_url,
            type: 'GET',
            data: {
                action: 'prodview_action',
                prod_id: prod_id
            },
            success: function(response){
                //console.log(response);
                $('.modal-content').empty();
                var data = JSON.parse(response);
                var html = `<span class="btn-close">&times;</span>
                            <div>
                                <h2>${data['title']}</h2>
                                ${data['image']}
                                <p>
                                    <a href="${data['url']}">View product page</a>
                                </p>
                            </div>
                            <div>
                                <h2>Price: ${data['price']}</h2>
                                <p>Short description: ${data['short_description']}</p>
                                <hr>
                                ${data['summary']}
                                <p>Product categories: ${data['categories']}</p>
                            </div>`;
                $('.modal-content').append(html);
                $('.modal').css('display','block');

                $('.btn-close').click(function() {
                    $('.modal').css('display','none');
                });
            },
            error: function(errorThrown){
                console.log(errorThrown);
            }
        });
    });
}) (jQuery);