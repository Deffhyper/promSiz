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

    //
    //$(document).on('click', function (event) {
    //
    //        setTimeout(function () {
    //            if ($('body').hasClass('main-menu-open')) {
    //                if (!$(event.target).is('.main-drop-mnu__item--list li')) {
    //                    $('body').removeClass('main-menu-open');
    //                    $('.main-drop-mnu__item').removeClass('active');
    //                    $(event.target).removeClass('active');
    //                }
    //            }
    //        } , 5000);
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

////////////////////////////////////range slider///////////////////////////////////////////
    $("#slider-range").slider({
        range: true,
        min: 15,
        max: 25890,
        values: [5350, 20180],
        slide: function (event, ui) {
            $("#amount-max").val(ui.values[1]);
            $("#amount-min").val(ui.values[0]);
        }
    });
    $("#amount-max").val($("#slider-range").slider("values", 1));

    $("#amount-min").val($("#slider-range").slider("values", 0));

////////////////////////////////// filter mob script /////////////////////////////////

    function bindJsOnMobileFilter(windowWidth) {

        var filterItem = $('.sidebar__title, .catalog-title-mob');

        if (windowWidth < 768) {
            filterItem.unbind('click').click(function () {
                $(this).next().slideToggle();
                $(this).toggleClass('rotate');
            })
        } else {
            filterItem.unbind('click');
            filterItem.next().removeAttr('style');
            filterItem.removeClass('rotate');
        }
    }

    $(window).ready(bindJsOnMobileFilter(windowWidth)).resize(function () {
        bindJsOnMobileFilter(window.innerWidth);
    });
//////////////////////////// custom select /////////////////////////////////////////
    $('.selectpicker').selectpicker({
        style: 'btn-info',
        size: 6
    });


    ////////////////////////////// delete catalog elem if is empty //////////////////////////

    $('.five-item-list').find('li').each( function(){
        if ($(this).is(':empty')) {
            $(this).addClass('empty-item');
        }
    });

    ////////////////////////////////// site search //////////////////////////////////////////////
    $('.main-nav-item__search a').on('click', function(e){
        e.preventDefault();
        var $siteSearch = $('.site-search');
        $('.search-trigger').addClass('open');
        $siteSearch.addClass('open');
        $siteSearch.find('input').focus();
        $('.site-header-menu__middle').addClass('search');
        if (innerWidth <= 1268 && $siteSearch.hasClass('open')) {
            $('body').append('<div class="menu-blur"></div>');
        } else {
            $(document).find('.menu-blur').remove();
        }
        if($siteSearch.hasClass('open')) {
            setTimeout(function() {
                $(document).bind('click', function (e) {
                    if (!$(e.target).closest($siteSearch).length) {
                        console.log('close');
                        $('.search-trigger').removeClass('open');
                        $siteSearch.removeClass('open');
                        $(this).unbind('click').bind('click');
                        $(document).find('.menu-blur').remove();
                        $('.site-header-menu__middle').removeClass('search');
                        $('.site-search__result').css('display', 'none');
                        $siteSearch.find('input').val('');
                    }
                });
            }, 100);
        }

    });

    $('.site-search__input').on('keyup', function(){
       if($(this).val().length >= 3) {
           $('.site-search__result').css('display', 'table');
       } else {
           $('.site-search__result').css('display', 'none');
       }
    });


    /////////////////////////////////// goods count //////////////////////////////////////

    var start = 1;
    $('.goods-count-block').on('click', function(event){
        var $target = $(event.target);

        if($target.hasClass('dec') && start >= 2) {
            start--;
            $('.goods-amount-input').val(start+' шт.');
        } else if ($target.hasClass('inc')) {
            start++;
            $('.goods-amount-input').val(start+' шт.');
        }
    });

    ///////////////////////////////////// goods size, color ////////////////////////////////////////

    $('.goods-size__list, .goods-color__list').on('click', 'li', function(e){
        e.preventDefault();
        if(!$(this).hasClass('active')) {
            $(this).addClass('active').siblings().removeClass('active');
        }
    });

    ///////////////////////////////////////////// product slider /////////////////////////////////


    $('.product-slider-top').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: false,
        arrows: false,
        fade: true,
        dots: false,
        asNavFor: '.product-slider-bottom'
    });

    $('.product-slider-bottom').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        infinite: false,
        asNavFor: '.product-slider-top',
        arrows: true,
        dots: false,
        focusOnSelect: true,
        centerPadding: "5px",
        responsive: [
            {
                breakpoint: 743,
                settings: {
                    slidesToShow: 3

                }
            }
        ]
    });

    //////////////////////////////////////// responsive tabs //////////////////////////////////////

    $('#responsive-tab').responsiveTabs({
        active: 1,
        startCollapsed: 'accordion'
    });







});