/*
* Name : menu
* Description : menu top transparent, background color au scroll
* Author: Enza Lombardo
* Author URI: www.enzalombardo.be
* copyright : 2019 © Enza Lombardo
* Version : 1.0
*/

(function($) {

    $(document).ready(function() {
        // Transition effect for navbar
        $(window).scroll(function() {
            // checks if window is scrolled more than 500px, adds/removes solid class
            if($(this).scrollTop() > 100) {
                $('.navbar').addClass('solid');
            } else {
                $('.navbar').removeClass('solid');
            }
        });
    });

})(jQuery);
