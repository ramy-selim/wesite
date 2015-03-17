jQuery(document).ready(function() {


    jQuery('button[data-loading-text]')
            .on('click', function() {
                var btn = jQuery(this);
                btn.button('loading');
                setTimeout(function() {
                    btn.button('reset');
                }, 3000);
            });


    jQuery("#request2, #request").submit(function(){
        var action = jQuery(this).attr('action');
        var email = jQuery(this).find('input[type=email]').val();
        jQuery.post(action,{
            email:email,
            message:'Email from get Shopbox',
            name:'Unknown',
            subject:'Subscribtion'
        }).success(function(data){
            data = jQuery.parseJSON(data);
            if (data.result == 'success') {
                jQuery('.subscription-success').html('<h4><i class="fa fa-check"></i> ' + data.msg + '</h4>').fadeIn(1000);
                jQuery('.subscription-error').fadeOut(500);
            } else if (data.result == 'error') {
                jQuery('.subscription-error').html('<h4><i class="fa fa-times-circle"></i> ' + data.msg + '</h4>').fadeIn(1000);
            }
        });
        return false;
    });

    jQuery('#contactform').submit(function() {

        var action = jQuery(this).attr('action');

        jQuery("#message").slideUp(750, function() {
            jQuery('#message').hide();
            jQuery.post(action, {
                name: jQuery('#name').val(),
                email: jQuery('#email').val(),
                subject: jQuery('#subject').val(),
                message: jQuery('#msg').val(),
            },
                    function(data) {
                        data = jQuery.parseJSON(data);
                        document.getElementById('message').innerHTML = data.msg;
                        jQuery('#message').slideDown('slow');
                        jQuery('#submit').removeAttr('disabled');
                        if (data.match('success') != null)
                            jQuery('#contactform').slideUp('slow');

                    }
            );

        });

        return false;

    });
   
    jQuery('#register').submit(function() {

        var action = jQuery(this).attr('action');

        jQuery("#message").slideUp(750, function() {
            jQuery('#message').hide();
            jQuery.post(action, {
                name: jQuery('#name').val(),
                email: jQuery('#email').val(),
                number: jQuery('#number').val(),
            },
                    function(data) {
                        document.getElementById('message').innerHTML = data;
                        jQuery('#message').slideDown('slow');
                        jQuery('#submit').removeAttr('disabled');
                        if (data.match('success') != null)
                            jQuery('#register').slideUp('slow');

                    }
            );

        });

        return false;

    });

});