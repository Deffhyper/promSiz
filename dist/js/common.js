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
                    infinite: true
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

    /////////////////////////////////////// header drop down menu ////////////////////////////

    $('#trigger-menu').on('click', function(e){
        e.preventDefault();
        var $dropmenu = $('.main-drop-mnu__item');
        if($dropmenu.hasClass('active')) {
            $dropmenu.removeClass('active');
            $(this).removeClass('active');
            $('body').removeClass('main-menu-open');
            $(document).find('.menu-blur').remove();
        } else {
            $dropmenu.addClass('active');
            $(this).addClass('active');
            $('body').addClass('main-menu-open');
            $('body').append('<div class="menu-blur"></div>');
        }
    });



    //$(document).on('click',function(event){
    //    if($('body').hasClass('main-menu-open')){
    //        if(!$(event.target).closest('.main-drop-mnu__item--list').length){
    //            $('body').removeClass('main-menu-open');
    //            $('.main-drop-mnu__item').removeClass('active');
    //            $(event.target).removeClass('active');
    //        }
    //    }
    //});

//////////////////////////////////// tablet menu /////////////////////////
    function tabletMenu(windowWidth) {

       var buttonBack = $('.tablet-navigate').find('.btn');

        if (windowWidth < 1260) {
            $('.main-drop-mnu__item--list').on('click', function(e){
                var target = e.target;
                if($(target).closest('li').hasClass('has-child')){
                    e.preventDefault();
                    console.log('has child');
                    $(target).closest('li').find('ul').eq(0).show(0,function(){
                        $(this).animate({'left': 0}, 300);
                    });
                }
                if($(target).closest('a').hasClass('btn')){
                    console.log('back');
                    e.preventDefault();
                    $(target).closest('ul').animate({
                        'left': '-999px'
                    },300);
                }
            });
        } else {
            $('.main-drop-mnu__item--list').unbind('click');
            $('.main-drop-mnu__item--list').find('ul').each(function(){
                $(this).removeAttr('style');
            });

        }
    }

    $(window).ready(tabletMenu(windowWidth)).resize(function () {
        tabletMenu($(window).width());
    });

    /////////////////////////////////// fixed menu on scroll ////////////////////////

    $(document).on('scroll resize', function(){
        if($(this).scrollTop() >= 205 && $(document).width() > 1260) {
            $('.site-header').addClass('header-fixed');
            $('body').css('padding-top', '205px');
            setTimeout(function(){
                $('.site-header').addClass('change');
            },100);
        } else {
            $('.site-header').removeClass('header-fixed');
            $('.header-menu').removeAttr("style");
            $('.site-header').removeClass('change');
            $('body').css('padding-top', 0);
        }
    });

    //////////////////////////////////////////// masked tel input ////////////////

    $('.tel-input').mask("+38(999) 999-99-99");

    ///////////////////////////////////////////// responsive table ///////////////////

    $('.responsive-table').cardtable({
        myClass:'resp-table',
        headIndex: 2
    });










});