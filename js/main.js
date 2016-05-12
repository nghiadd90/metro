/*!
 * Main Javascript for Metro theme v1.0
 * Copyright 2016 Metro - Framgia
 * Licensed under the MIT license
 */
$(document).ready(function() {
    $('.carousel').carousel({
      interval: 7000
    });

    $('.frg-scroll-top').on('click', function() {
        $('html, body').animate({
            scrollTop: 0
        },1000);
        return false;
    });
});
