"use strict";
$(function() {

    //global scope
    var windowWidth = $(window).width();
    var $siteSearch = $('.site-search');

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
        slidesToShow: 4.006,
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
     ////////////////////////////////////// three item slider /////////////////////////////////////

    $('.three-item-slider').slick({
        infinite: true,
        speed: 300,
        slidesToShow: 3,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 980,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    infinite: true
                }
            },
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true,
                    arrows: true
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



//////////////////////////////////// tablet menu /////////////////////////
    function tabletMenu(windowWidth) {

        if (windowWidth < 1260) {
            $('#trigger-menu').unbind('click').bind('click', function (e) {
                e.preventDefault();

                var $dropmenu = $('.main-drop-mnu__item');

                    if ($dropmenu.is(':visible')) {
                        $dropmenu.removeClass('active');
                        $('#trigger-menu').removeClass('active');
                        $('body').removeClass('main-menu-open');
                        $(document).find('.menu-blur').remove();
                    } else {
                        $dropmenu.addClass('active');
                        $('#trigger-menu').addClass('active');
                        $('body').addClass('main-menu-open');
                        $('body').append('<div class="menu-blur"></div>');
                    }

            });

            $('.main-drop-mnu__item--list').on('click', function (e) {
                var target = e.target;
                if ($(target).closest('li').hasClass('has-child')) {
                    e.preventDefault();
                    console.log('has child');
                    $(target).closest('li').find('ul').eq(0).show(0, function () {
                        $(this).animate({'left': 0}, 300);
                    });
                }
                if ($(target).closest('a').hasClass('btn')) {
                    console.log('back');
                    e.preventDefault();
                    $(target).closest('ul').animate({
                        'left': '-999px'
                    }, 300);
                }
            });

        } else {

            $('#trigger-menu').unbind('click');
            $('.main-drop-mnu__item--list').unbind('click');
            $('.main-drop-mnu__item--list').find('ul').removeAttr('style');

        }
    }

    $(window).ready(tabletMenu(windowWidth)).resize(function () {
        tabletMenu($(window).width());
    });

    ///////////////////////////////////// close tablet menu /////////////////////////


    $(window).on('touchstart', function(e){

        if ($('.main-drop-mnu__item').is(':visible')){

            if (innerWidth < 1280 && $(e.target).hasClass('menu-blur')) {
                console.log('close');
                $('#trigger-menu').trigger('click');
                $('.main-drop-mnu__item--list').find('ul, li').removeAttr('style');

            }
        }
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
        values: [0, 25890],
        slide: function (event, ui) {
            $("#amount-max").val(ui.values[1]);
            $("#amount-min").val(ui.values[0]);
        }
    });
    //$('.range-from').text($("#slider-range").slider("option", "min"));
    //$('.range-to').text($("#slider-range").slider("option", "max"));

    $("#amount-max").val($("#slider-range").slider("values", 1));
    $("#amount-min").val($("#slider-range").slider("values", 0));

    $("#amount-max, #amount-min").on('blur', function(){
        var aMax = $('#amount-max').val();
        var aMin = $('#amount-min').val();
        var absolutMin = Number($("#slider-range").slider("option", "min"));

        if(aMin > aMax){
            $("#slider-range").slider("option", "values", [aMin, aMin]);
            $("#amount-min").val(absolutMin);

        } else {
            $("#slider-range").slider("option", "values", [aMin, aMax]);

        }
    });

    //


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

        setTimeout(function(){
            $('.search-trigger').addClass('open');
            $siteSearch.addClass('open');
            $siteSearch.find('input').focus();
            $('.site-header-menu__middle').addClass('search');
            if (innerWidth <= 1268 && $siteSearch.hasClass('open')) {
                $('body').append('<div class="menu-blur"></div>');
            } else {
                $(document).find('.menu-blur').remove();
            }
        },100);

    });

    //////////////////////////////////// site search close script //////////////////////////

    $(document).on('click', function(e){
        var target = e.target;

        if ($siteSearch.hasClass('open') && !$(target).closest($siteSearch).length) {

            //console.log('close');
            $('.search-trigger').removeClass('open');
            $siteSearch.removeClass('open');
            $(this).find('.menu-blur').remove();
            $('.site-header-menu__middle').removeClass('search');
            $('.site-search__result').css('display', 'none');
            $siteSearch.find('input').val('');
        }
    });


    ///////////////////////////////////// search show result ////////////////////////////////////

    $('.site-search__input').on('keyup', function(){
       if($(this).val().length >= 3) {
           $('.site-search__result').css('display', 'table');
       } else {
           $('.site-search__result').css('display', 'none');
       }
    });


    /////////////////////////////////// goods count //////////////////////////////////////


    $('.goods-count-block').on('click', function(event){
        var $target = $(event.target);
        var inputVal = $(this).find('.goods-amount-input').val();
        var currentVal = Number((inputVal.replace(/шт(\.)?/g, "")).trim());

        console.log(currentVal);

        if($target.hasClass('dec') && currentVal >= 2) {
            --currentVal;
            $(this).find('.goods-amount-input').val(currentVal+' шт.');
        } else if ($target.hasClass('inc')) {
            ++currentVal;
            $(this).find('.goods-amount-input').val(currentVal+' шт.');
        }
    });

    $('.goods-amount-input').on('focus', function(){
        $(this).val('');
    });

    $('.goods-amount-input').on('blur', function(){
        var inpVal = $(this).val();

        if(inpVal == 0) {
             $(this).val('1 шт.');

        } else {
            $(this).val(inpVal+' шт.');
        }
    });

    $(".goods-amount-input").on('keyup keydown', function (e) {
        // Allow: backspace, delete, tab, escape, enter and .
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
                // Allow: Ctrl+A, Command+A
            (e.keyCode === 65 && (e.ctrlKey === true || e.metaKey === true)) ||
                // Allow: home, end, left, right, down, up
            (e.keyCode >= 35 && e.keyCode <= 40)) {
            // let it happen, don't do anything
            return;
        }
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
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
                breakpoint: 980,
                settings: {
                    slidesToShow: 3

                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 3,
                    arrows: false
                }
            }
        ]
    });

/////////////////////////////////////// product property scroll to target ////////////////////////////////

    $('.product-tabs__list').find('li a').each(function(){
        $(this).on('click', function(e){
            e.preventDefault();
            $('html, body').animate({
                scrollTop: $( $(this).attr('href') ).offset().top -70
            }, 500);
        });
    });

    ///////////////////////////////// main page spoiler /////////////////////////////////////////////////////

    var spoilerLink = '<a href="#" class="main-news-item__prop--link">Читать подробнее</a>',
        contentHeight = 0,
        $mainContent = $('.main-connect-item__text');

    $mainContent.find('p').each(function(){
        contentHeight += $(this).outerHeight(true);
    });
    console.log("spoiler content height:"+contentHeight+"px");

    if(contentHeight > 305) {
        $(spoilerLink).insertAfter($mainContent);
    }

    $('.main-connect-item.left').click(function(e){
        if(e.target.className == 'main-news-item__prop--link') {
            e.preventDefault();

            if($(this).hasClass('open')) {
                $(this).find('.main-connect-item__text').removeAttr('style');
                $(this).removeClass('open');
            } else {
                $(this).find('.main-connect-item__text').css('height', contentHeight);
                $(this).addClass('open');
            }
        }
    });







});