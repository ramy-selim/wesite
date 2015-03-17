
// makes sure the whole site is loaded
jQuery(window).load(function () {
// will first fade out the loading animation
    jQuery(".loaded").fadeOut();
    // will fade out the whole DIV that covers the website.
    jQuery(".loader").delay(1000).fadeOut("slow");
});




jQuery(document).ready(function () {
    "use strict";


    /*---------------------------------------------*
     * STICKY TRANSPARENT NAVIGATION 
     ---------------------------------------------*/


    var windowWidth = jQuery(window).width();

    if (windowWidth > 767) {
        jQuery(".navbar-1").addClass('custom-nav');
        jQuery(".hide-nav").hide('');
// fade in .sticky_navigation
        jQuery(window).scroll(function () {
            if (jQuery(this).scrollTop() > 100) {
                jQuery('.navbar-1').addClass('scroll-nav animated fadeIn');
                jQuery('.navbar-1').removeClass('custom-nav');
            } else {
                jQuery('.navbar-1').addClass('custom-nav');
                jQuery('.navbar-1').removeClass('scroll-nav animated fadeIn');
            }
        });
    }


    /*---------------------------------------------*
     * STICKY HIDE NAVIGATION 
     ---------------------------------------------*/

    var windowWidth = jQuery(window).width();
    if (windowWidth > 767) {
// hide .sticky_navigation first
        jQuery(".hide-nav").hide();
// fade in .sticky_navigation
        jQuery(window).scroll(function () {
            if (jQuery(this).scrollTop() > 100) {
                jQuery('.hide-nav').fadeIn(1000);
            } else {
                jQuery('.hide-nav').fadeOut(1000);
            }
        });

    }




    /*---------------------------------------------*
     * LOCAL SCROLL
     ---------------------------------------------*/

    jQuery('#main-navbar').localScroll();
    jQuery('.anchor').localScroll();




    /*---------------------------------------------*
     * WOW
     ---------------------------------------------*/
    var wow = new WOW({
        mobile: false, // trigger animations on mobile devices (default is true)
    });
    wow.init();




    /* ------------------------------------------------=
     ---=  MAILCHIMP                 ------
     ---------------------------------------------------= */

    jQuery('#mailchimp,#mailchimp2').ajaxChimp({
        callback: mailchimpCallback,
        url: "https://shopbox.us8.list-manage.com/subscribe/post?u=e7a3980ba8052af63ad59ec65&id=5f32cba511" //Replace this with your own mailchimp post URL. Don't remove the "". Just paste the url inside "".
    });
    function mailchimpCallback(resp) {
        if (resp.result === 'success') {
            jQuery('.subscription-success').html('<h4><i class="fa fa-check"></i> ' + resp.msg + '</h4>').fadeIn(1000);
            jQuery('.subscription-error').fadeOut(500);
        } else if (resp.result === 'error') {
            jQuery('.subscription-error').html('<h4><i class="fa fa-times-circle"></i> ' + resp.msg + '</h4>').fadeIn(1000);
        }
    }




    /* ------------------------------------------------=
     ---=  ACCORDIAN                 ------
     ---------------------------------------------------= */

    function toggleChevron(e) {
        jQuery(e.target)
                .prev('.panel-heading')
                .find("i.indicator")
                .toggleClass('glyphicon-plus-sign glyphicon-minus-sign');
    }
    jQuery('#accordion').on('hidden.bs.collapse', toggleChevron);
    jQuery('#accordion').on('shown.bs.collapse', toggleChevron);
    jQuery('#accordion2').on('hidden.bs.collapse', toggleChevron);
    jQuery('#accordion2').on('shown.bs.collapse', toggleChevron);



    /* ------------------------------------------------=
     ---=  FITVIDS              ------
     ---------------------------------------------------= */


    // Target your .container, .wrapper, .post, etc.
    jQuery('.describe-video').fitVids();



    /* ------------------------------------------------=
     ---=  COMMING SOON                 ------
     ---------------------------------------------------= */

//JUST EDIT Date(2015, 0, 1, 9, 30) 2015 YEAR, 0 MONTH, 1 DATE, 30 SECOND
    jQuery('#myCounter').mbComingsoon({expiryDate: new Date(2015, 3, 5, 9, 30), speed: 100});



});



/* ------------------------------------------------=
 ---=  COUNTER                 ------
 ---------------------------------------------------= */

jQuery('.statistic-counter').counterUp({
    delay: 10,
    time: 2000
});


/* ---------------------------------------------------------------------
 NIVO LIGHT BOX
 ---------------------------------------------------------------------= */


jQuery('.screenshots a').nivoLightbox({
    effect: 'fadeScale'
});


jQuery('.portfolio a').nivoLightbox({
    effect: 'fadeScale'
});




/* ------------------------------------------------=
 ---=  Video Player                ------
 ---------------------------------------------------= */

// jQuery(function(){
//      jQuery(".player").YTPlayer();
//    });


/* ------------------------------------------------=
 ---=  Skills                ------
 ---------------------------------------------------= */

jQuery(function () {
    jQuery('.chart').easyPieChart({
        easing: 'easeOutBounce',
        animate: 2000,
        scaleColor: false,
        lineWidth: 12,
        lineCap: 'square',
        size: 150,
        trackColor: '#EDEDED',
        barColor: '#1ac6ff',
        onStep: function (from, to, percent) {
            jQuery(this.el).find('.percent').text(Math.round(percent));
        }
    });

});




