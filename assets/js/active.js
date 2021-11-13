(function ($) {
    "use strict";

    /*--
        Commons Variables
    -----------------------------------*/
    var $window = $(window),
        $body = $('body');

    /*--
        Custom script to call Background
        Image & Color from html data attribute
    -----------------------------------*/
    $('[data-bg-image]').each(function () {
        var $this = $(this),
            $image = $this.data('bg-image');
        $this.css('background-image', 'url(' + $image + ')');
    });
    $('[data-bg-color]').each(function () {
        var $this = $(this),
            $color = $this.data('bg-color');
        $this.css('background-color', $color);
    });
    $('[data-color]').each(function () {
        var $this = $(this),
            $color = $this.data('color');
        $this.css('color', $color);
    });

    /*--
        Header Sticky
    -----------------------------------*/
    $window.on('scroll', function () {
        if ($window.scrollTop() > 350) {
            $('.htmove-header').addClass('is-sticky');
        } else {
            $('.htmove-header').removeClass('is-sticky');
        }
    });


    /*--
        Off Canvas Function
    -----------------------------------*/
    $('.htmove-mobile-menu-toggle, .htmove-mobile-menu-close').on('click', '.toggle', function () {
        $body.toggleClass('mobile-menu-open');
    });
    $('.htmove-site-mobile-menu').on('click', '.menu-toggle', function (e) {
        e.preventDefault();
        var $this = $(this);
        if ($this.siblings('.htmove-sub-menu:visible').length) {
            $this.siblings('.htmove-sub-menu').slideUp().parent().removeClass('open').find('.htmove-sub-menu').slideUp().parent().removeClass('open');
        } else {
            $this.siblings('.htmove-sub-menu').slideDown().parent().addClass('open').siblings().find('.htmove-sub-menu').slideUp().parent().removeClass('open');
        }
    });
    $body.on('click', function (e) {
        if (!$(e.target).closest('.htmove-site-main-mobile-menu').length && !$(e.target).closest('.htmove-mobile-menu-toggle').length) {
            $body.removeClass('mobile-menu-open');
        }
    });

    /* SVG Inject */
    SVGInject(document.querySelectorAll("img.svginject"));

    /* AOS (Animation ON Scroll) */
    AOS.init({
        duration: 1000,
        once: true
    });

    /* Smooth Scroll */
    $('.smoothscroll').click(function () {
        $('html, body').animate({
            scrollTop: $($(this).attr('href')).offset().top - 90
        }, 500);
        return false;
    });

    $('.hero-bg-image').on('load', function () {
        $('.htmove-hero-section').addClass('image-loaded')
    })

    /* Masonry Grid */
    $('.htmove-masonry-grid').imagesLoaded(function () {
        $('.htmove-masonry-grid').masonry({
            itemSelector: '.htmove-masonry-item',
            columnWidth: '.htmove-masonry-sizer',
        });
    });

    // Accordion
    $('.htmove-accordion').each(function () {
        var $this = $(this),
            $id = $this.attr('id'),
            $visiable = $this.is(":visible") ? true : false;
        new Accordion('#' + $id, {
            duration: 500,
            showItem: $visiable,
            elementClass: 'htmove-accordion-card',
            questionClass: 'htmove-accordion-head',
            answerClass: 'htmove-accordion-body',
        });
    });

    $('.counter').counterUp({
        delay: 10,
        time: 2000
    });

    /* URL Parameter */
    (function(){
        var requiredParameter = ['utm_medium', 'gclid', 'clickid', 'utm_campaign', 'utm_content', 'irgwc', 'partner', 'mpid', 'utm_source'];

        /* Ger URL Parameter & Save it as Cookies */
        (function(){
            var windowLocationHref = window.location.href,
                hashes = windowLocationHref.slice(windowLocationHref.indexOf('?') + 1).split('&');
            /* Parameter Names */
            var getUrlParameterNames = (function(){
                var names=[], hash;
                for(var i = 0; i < hashes.length; i++){
                    hash = hashes[i].split('=');
                    names.push(hash[0]);
                }
                return names;
            })();
            /* Parameter Value */
            var getUrlParameterValue = (function(){
                var values={}, hash;
                for(var i = 0; i < hashes.length; i++){
                    hash = hashes[i].split('=');
                    values[hash[0]] = hash[1];
                }
                return values;
            })();
            /* Save as Cookies */
            getUrlParameterNames.forEach(function(i){
                requiredParameter.forEach(function(j){
                    if(i === j) {
                        Cookies.set(i, getUrlParameterValue[i], { expires: 90, sameSite: 'strict' });
                    }
                });
            });
        })();

        /* Add Parameters to Buttons */
        (function(){
            var btn = $('.cusParmBtn'),
                btnParameter = '',
                cookiesObjectPropertyArray =  Object.getOwnPropertyNames(Cookies.get()),
                paramArrayCheck = [];
            requiredParameter.forEach(function(i) {
                var index = cookiesObjectPropertyArray.indexOf(i);
                paramArrayCheck.push(index);
                if (paramArrayCheck.findIndex((index) => index >= 0) >= 0) {
                    cookiesObjectPropertyArray.forEach(function(j) {
                        if(i === j){
                            btnParameter += i+'='+Cookies.get(i)+'&';
                        }
                    });
                } else {
                    // btnParameter = 'utm_source=https://hasthemes.com/'+'&';
                }
            });
            btnParameter = btnParameter.replace(/&*$/, "");
            btn.each(function(){
                var $this = $(this),
                    $url = $(this).attr('href'),
                    $symbol = $url.indexOf('?') > 0 ? '&': '?',
                    $newUrl = btnParameter != 0 ? $url+$symbol+btnParameter : $url;
                $this.attr('href', $newUrl);
            });
        })();

    })();

})(jQuery);


jQuery(document).ready(function ($) {

    //switch from monthly to annual pricing tables
    bouncy_filter($('.htmove-pricing-container'));

    function bouncy_filter(container) {
        container.each(function () {
            var pricing_table = $(this);
            var filter_list_container = pricing_table.children('.htmove-pricing-switcher'),
                filter_radios = filter_list_container.find('input[type="radio"]'),
                filter_radio_checked = filter_list_container.find('input[type="radio"]:checked'),
                filter_switch = filter_list_container.find('.htmove-switch'),
                pricing_table_wrapper = pricing_table.find('.htmove-pricing-wrapper');


            //store pricing table items
            var table_elements = {};
            filter_radios.each(function () {
                var filter_type = $(this).val();
                table_elements[filter_type] = pricing_table_wrapper.find('li[data-type="' + filter_type + '"]');
            });

            // Check Radio Value Before Change also Add or Remove class form switch
            if (filter_radio_checked.val() == 'lifetime') {
                var selected_filter = filter_radio_checked.val();
                filter_switch.addClass('lifetime');
                //give higher z-index to the pricing table items selected by the radio input
                show_selected_items(table_elements[selected_filter]);

                //rotate each htmove-pricing-wrapper 
                //at the end of the animation hide the not-selected pricing tables and rotate back the .htmove-pricing-wrapper

                if (!Modernizr.cssanimations) {
                    hide_not_selected_items(table_elements, selected_filter);
                    pricing_table_wrapper.removeClass('is-switched');
                } else {
                    pricing_table_wrapper.addClass('is-switched').eq(0).one('webkitAnimationEnd oanimationend msAnimationEnd animationend', function () {
                        hide_not_selected_items(table_elements, selected_filter);
                        pricing_table_wrapper.removeClass('is-switched');
                        //change rotation direction if .htmove-pricing-list has the .htmove-bounce-invert class
                        if (pricing_table.find('.htmove-pricing-list').hasClass('htmove-bounce-invert')) pricing_table_wrapper.toggleClass('reverse-animation');
                    });
                }
            } else {
                filter_switch.removeClass('lifetime');
            }

            //detect input change event
            filter_radios.on('change', function (event) {
                event.preventDefault();
                //detect which radio input item was checked
                var selected_filter = $(event.target).val();

                // Check Radio Value and Add or Remove class form switch
                if (selected_filter == 'lifetime') {
                    filter_switch.addClass('lifetime');
                } else {
                    filter_switch.removeClass('lifetime');
                }

                //give higher z-index to the pricing table items selected by the radio input
                show_selected_items(table_elements[selected_filter]);

                //rotate each htmove-pricing-wrapper 
                //at the end of the animation hide the not-selected pricing tables and rotate back the .htmove-pricing-wrapper

                if (!Modernizr.cssanimations) {
                    hide_not_selected_items(table_elements, selected_filter);
                    pricing_table_wrapper.removeClass('is-switched');
                } else {
                    pricing_table_wrapper.addClass('is-switched').eq(0).one('webkitAnimationEnd oanimationend msAnimationEnd animationend', function () {
                        hide_not_selected_items(table_elements, selected_filter);
                        pricing_table_wrapper.removeClass('is-switched');
                        //change rotation direction if .htmove-pricing-list has the .htmove-bounce-invert class
                        if (pricing_table.find('.htmove-pricing-list').hasClass('htmove-bounce-invert')) pricing_table_wrapper.toggleClass('reverse-animation');
                    });
                }
            });
        });
    }
    function show_selected_items(selected_elements) {
        selected_elements.addClass('is-selected');
    }

    function hide_not_selected_items(table_containers, filter) {
        $.each(table_containers, function (key, value) {
            if (key != filter) {
                $(this).removeClass('is-visible is-selected').addClass('is-hidden');

            } else {
                $(this).addClass('is-visible').removeClass('is-hidden is-selected');
            }
        });
    }
});
