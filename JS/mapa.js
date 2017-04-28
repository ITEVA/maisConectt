/**
 * Created by MC 114 on 28/04/2017.
 */

$(document).ready(function() {
    $('.mapa').on('click', function () {
        $('.mapa iframe').css("pointer-events", "auto");
    });

    $('.iframeMapa').mouseleave(function () {
        $('.mapa iframe').css("pointer-events", "none");
    });

});