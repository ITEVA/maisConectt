// Agency Theme JavaScript

(function($) {
    "use strict"; // Start of use strict

    var $doc = $('html, body');
    $('.ancora').click(function() {
        $doc.animate({
            scrollTop: $( $.attr(this, 'href') ).offset().top
        }, 800);
        return false;
    });

    // Highlight the top nav as scrolling occurs
    $('body').scrollspy({
        target: '.navbar-fixed-top',
        offset: 51
    });

    // Closes the Responsive Menu on Menu Item Click
    $('.navbar-collapse ul li a').click(function(){
            $('.navbar-toggle:visible').click();
    });

    // Offset for Main Navigation
    $('#mainNav').affix({
        offset: {
            top: 100
        }
    });

    $('.menu-icon').click(function () {
        $('nav#mainNav').removeClass('affix-top');
    })

})(jQuery); // End of use strict
