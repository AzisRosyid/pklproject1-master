/*

Script  : Main JS
Version : 1.0
Author  : Surjith S M
URI     : http://themeforest.net/user/surjithctly

Copyright © All rights Reserved
Surjith S M / @surjithctly

*/

$(function() {

    "use strict";

    /* ================================================
       On Scroll Menu
       ================================================ */

    $(window).scroll(function() {
        if ($(window).scrollTop() > 600) {
            $('.js-reveal-menu').removeClass('reveal-menu-hidden').addClass('reveal-menu-visible');
        } else {
            $('.js-reveal-menu').removeClass('reveal-menu-visible').addClass('reveal-menu-hidden');
        }
    });

    /* ================================================
       Date Picker - Sugar.js
       ================================================ */

    if ($('#human_date').length) {

        var el = $('#human_date');
        var dateinput = $('input', el);
        var output = $('.date-output', el);
        var output_val = $('#date_time', el);
        dateinput.keyup(function() {
            var val = dateinput.val().trim();
            if (/^\d+$/.test(val)) {
                val = val.toNumber();
            }
            var text, date = Date.create(String(val));

            if (!dateinput.val().length > 0) {
                text = ''
            } else if (!date.isValid()) {
                text = 'Please enter a valid date'
            } else if (date.isPast()) {
                text = 'Please enter a future date.'
            } else {
                text = date.format('{Weekday}, {Month} {ord}, {year} {h}:{mm} {tt}');
                output_val.val(text);
            }
            output.text(text);
        });

    }

    /* ================================================
       Scroll Functions
       ================================================ */

    $(window).scroll(function() {
        if ($(window).scrollTop() > 1000) {
            $('.back_to_top').fadeIn('slow');
        } else {
            $('.back_to_top').fadeOut('slow');
        }
    });

    $('a[href^=#]:not([href=#]):not([role=tab]), .back_to_top').on('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top - 50
        }, 1500);
        event.preventDefault();
    });

});

/*
 * // End $ Strict Function
 * ------------------------ */

if ($('#before_after').length) {

    $(window).load(function() {
        $("#before_after").twentytwenty();
    });

}
