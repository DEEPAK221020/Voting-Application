
function preloaderFadeOutInit(){
    $('.preloader').fadeOut('slow');
    $('body').attr('id','');
    }
    // Window load function
    jQuery(window).on('load', function () {
    (function ($) {
    preloaderFadeOutInit();
    })(jQuery);
    });
    
    // form back clear 
    
      $(window).bind("pageshow", function() {
        var form = $('form'); 
        // let the browser natively reset defaults
        form[0].reset();
    });