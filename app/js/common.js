"use strict";
$(function() {

    //global scope
    var windowWidth = $(window).width();

    ////////////////////////////////// mobile footer ///////////////////////////////////////

    function bindJsOnMobile(windowWidth) {

        var pageFtitle = $('.site-footer__title');

        if (windowWidth < 768) {
            pageFtitle.unbind('click').click(function () {
                $(this).next().slideToggle();
                $(this).toggleClass('rotate');
            })
        } else {
            pageFtitle.unbind('click');
            pageFtitle.next().removeAttr('style');
            pageFtitle.removeClass('rotate');
        }
    }

    $(window).ready(bindJsOnMobile(windowWidth)).resize(function () {
        bindJsOnMobile(window.innerWidth);
    });


    ////////////////////////////////////// top slider ///////////////////////////////////////////

    $('.top-slider').slick({
        dots: true,
        responsive: [
            {
                breakpoint: 1300,
                settings: {
                    arrows: false
                }
            }

        ]
    });












});