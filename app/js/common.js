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

    ////////////////////////////////////// four item slider /////////////////////////////////////

    $('.four-item-slider').slick({
        infinite: true,
        speed: 300,
        slidesToShow: 4,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 1280,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    infinite: true,
                }
            },
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    infinite: true,
                    arrows: false
                }
            }

        ]
    });

    ////////////////////////////////////////////// scroll top ////////////////////////////////

    $('#scroller').click(function () {
        $('body,html').animate({
            scrollTop: 0
        }, 400);
        return false;
    });

///////////////////////////////////////////  main-brand list mob slider ///////////////////

    function slideListMob(windowWidth) {

        var tabsControl = $('.our-services__list');

        if (windowWidth < 768) {
            if (!tabsControl.hasClass('slick-initialized')) {
                tabsControl.slick({
                    slidesToShow: 1,
                    arrows: true,
                    dots: true
                });
            }
        } else {
            if (tabsControl.hasClass('slick-initialized')) {
                tabsControl.slick('unslick');
            }
        }
    }

    $(window).ready(slideListMob(windowWidth)).resize(function () {
        slideListMob($(window).width());
    });









});