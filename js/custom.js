var SUMERIANLAB = SUMERIANLAB || {};

(function($) {
    "use strict";

    SUMERIANLAB.isMobile = {
        Android: function() {
            return navigator.userAgent.match(/Android/i);
        },
        BlackBerry: function() {
            return navigator.userAgent.match(/BlackBerry/i);
        },
        iOS: function() {
            return navigator.userAgent.match(/iPhone|iPad|iPod/i);
        },
        Opera: function() {
            return navigator.userAgent.match(/Opera Mini/i);
        },
        Windows: function() {
            return navigator.userAgent.match(/IEMobile/i);
        },
        any: function() {
            return (SUMERIANLAB.isMobile.Android() || SUMERIANLAB.isMobile.BlackBerry() || SUMERIANLAB.isMobile.iOS() || SUMERIANLAB.isMobile.Opera() || SUMERIANLAB.isMobile.Windows());
        }
    };

    SUMERIANLAB.initialize = {

        init: function() {
            SUMERIANLAB.initialize.SL_platformDetect();
            SUMERIANLAB.initialize.SL_customDataAttributes();
            SUMERIANLAB.initialize.SL_parallaxBgInit();
            SUMERIANLAB.initialize.SL_resizeFullscreen();
            SUMERIANLAB.initialize.SL_lightboxPopup();
            SUMERIANLAB.initialize.SL_nivolightbox();
            SUMERIANLAB.initialize.SL_contactform();
            SUMERIANLAB.initialize.SL_booknowform();
            SUMERIANLAB.initialize.SL_wow();
            SUMERIANLAB.initialize.SL_fitVids();
            SUMERIANLAB.initialize.SL_YTPlayer();
            SUMERIANLAB.initialize.SL_megafolio();
            SUMERIANLAB.initialize.SL_resizeDivs();
            SUMERIANLAB.initialize.SL_newsletterform();
            SUMERIANLAB.initialize.SL_scrollToTop();
        },

        /* ---------------------------------------------------------------------- */
        /* ---------------------------- 1 - Hash Forwarding  ---------------------- */
        /* ---------------------------------------------------------------------- */
        SL_preLoader: function() {
            $preloader.delay(200).fadeOut('slow');
        },

        /* ---------------------------------------------------------------------- */
        /* ---------------------------- 2 - Platform detect  ---------------------- */
        /* ---------------------------------------------------------------------- */
        SL_platformDetect: function() {
            if (SUMERIANLAB.isMobile.any()) {
                $html.addClass("mobile");
            } else {
                $html.addClass("no-mobile");
            }
        },

        /* ---------------------------------------------------------------------- */
        /* ---------------------------- 3 - Hash Forwarding  ---------------------- */
        /* ---------------------------------------------------------------------- */
        SL_hashForwarding: function() {
            if (window.location.hash) {
                var hash_offset = $(window.location.hash).offset().top;
                $("html, body").animate({
                    scrollTop: hash_offset
                });
            }
        },


        /* ---------------------------------------------------------------------- */
        /* -------------------- 4 - Background image, color -------------------- */
        /* ---------------------------------------------------------------------- */
        SL_customDataAttributes: function() {
            $('[data-bg-color]').each(function() {
                $(this).css("cssText", "background: " + $(this).data("bg-color") + " !important;");
            });
            $('[data-bg-img]').each(function() {
                $(this).css('background-image', 'url(' + $(this).data("bg-img") + ')');
            });
            $('[data-text-color]').each(function() {
                $(this).css('color', $(this).data("text-color"));
            });
            $('[data-font-size]').each(function() {
                $(this).css('font-size', $(this).data("font-size"));
            });
            $('[data-height]').each(function() {
                $(this).css('height', $(this).data("height"));
            });
            $('[data-border]').each(function() {
                $(this).css('border', $(this).data("border"));
            });
            $('[data-margin-top]').each(function() {
                $(this).css('margin-top', $(this).data("margin-top"));
            });
            $('[data-mouseover-color]').each(function() {
               $(this).mouseover(function(){
                   $(this).css("color", $(this).data("mouseover-color"));
               });
            });
            $('[data-mouseout-color]').each(function() {
               $(this).mouseout(function(){
                   $(this).css("color", $(this).data("mouseout-color"));
               });
            });
        },

        /* ---------------------------------------------------------------------- */
        /* ---------------------- 5 - Background Parallax -------------------- */
        /* ---------------------------------------------------------------------- */
        SL_parallaxBgInit: function() {
            if (($window.width() >= 1200) && (SUMERIANLAB.isMobile === false)) {
                $parallax.each(function() {
                    $(this).parallax("50%", 0.1);
                });
            }
        },

        /* ---------------------------------------------------------------------- */
        /* ------------------------ 6 - Home Resize Fullscreen ----------------- */
        /* ---------------------------------------------------------------------- */
        SL_resizeFullscreen: function() {
            var windowHeight = $window.height();
            $('.fullscreen, .revslider-fullscreen').height(windowHeight);
        },

        /* ---------------------------------------------------------------------- */
        /* -------------------------- 7 - lightbox popup ----------------------- */
        /* ---------------------------------------------------------------------- */
        SL_lightboxPopup: function() {
            lightbox.option({
                resizeDuration: 200,
                alwaysShowNavOnTouchDevices: true,
                positionFromTop: 50,
                wrapAround: true
            });

            $("a[data-rel^='prettyPhoto']").prettyPhoto({
                hook: 'data-rel',
                animation_speed: 'normal',
                theme: 'light_square',
                slideshow: 3000,
                autoplay_slideshow: false,
                social_tools: false
            });

        },

        /* ---------------------------------------------------------------------- */
        /* -------------------------- 8 - Nivo Lightbox ------------------------ */
        /* ---------------------------------------------------------------------- */
        SL_nivolightbox: function() {
            $('a[data-lightbox-gallery]').nivoLightbox({
                effect: 'fadeScale'
            });
        },

        /* ---------------------------------------------------------------------- */
        /* -------------------------- 17 - Booknow Form ------------------------- */
        /* ---------------------------------------------------------------------- */
        SL_booknowform: function() {
          var $booknowform = $('#booking-form'),
              $response = '';

          // After contact form submit
          $booknowform.submit(function() {
            // Hide any previous response text
            $booknowform.children(".alert").remove();
            // Are all the fields filled in?
            if (!$('#date').val()) {
              $response = '<div class="alert alert-danger">Please enter the request date.</div>';
              $('#date').focus();
              $booknowform.append($response);

            }else if (!$('#time').val()) {
              $response = '<div class="alert alert-danger">Please enter your time.</div>';
              $('#time').focus();
              $booknowform.append($response);

            } else if (!$('#name').val()) {
              $response = '<div class="alert alert-danger">Please enter your name.</div>';
              $('#name').focus();
              $booknowform.append($response);

            } else if (!$('#email').val()) {
                $response = '<div class="alert alert-danger">Please enter valid e-mail.</div>';
                $('#email').focus();
                $contactform.append($response);

            } else if (!$('#phone').val()) {
              $response = '<div class="alert alert-danger">Please enter your phone.</div>';
              $('#phone').focus();
              $booknowform.append($response);

            } else if (!$( "#service option:selected" ).val()) {
              $response = '<div class="alert alert-danger">Please select a service.</div>';
              $('#service').focus();
              $booknowform.append($response);

            } else if (!$('#inquery').val()) {
              $response = '<div class="alert alert-danger">Please enter your inquery.</div>';
              $('#inquery').focus();
              $booknowform.append($response);

            } else {
                // Yes, submit the form to the PHP script via Ajax
                $booknowform.children('button[type="submit"]').button('loading');
                $.ajax({
                    type: "POST",
                    url: "php/booknow-form.php",
                    data: $(this).serialize(),
                    success: function(msg) {
                        if (msg == 'sent') {
                            $response = '<div class="alert alert-success">Your message has been sent. Thank you!</div>';
                            $booknowform[0].reset();
                        } else {
                            $response = '<div class="alert alert-danger">' + msg + '</div>';
                        }
                        // Show response message
                        $booknowform.append($response);
                        $booknowform.children('button[type="submit"]').button('reset');
                    }
                });

            }

            return false;
          });
        },

        /* ---------------------------------------------------------------------- */
        /* -------------------------- 9 - Contact Form ------------------------- */
        /* ---------------------------------------------------------------------- */
        SL_contactform: function() {
            var $contactform = $('#contact-form');
            var $response = '';

            // After contact form submit
            $contactform.submit(function() {
                // Hide any previous response text
                $contactform.children(".alert").remove();

                // Are all the fields filled in?
                if (!$('#contact_name').val()) {
                    $response = '<div class="alert alert-danger">Please enter your name.</div>';
                    $('#contact_name').focus();
                    $contactform.append($response);

                } else if (!$('#contact_message').val()) {
                    $response = '<div class="alert alert-danger">Please enter your message.</div>';
                    $('#contact_message').focus();
                    $contactform.append($response);

                } else if (!$('#contact_email').val()) {
                    $response = '<div class="alert alert-danger">Please enter valid e-mail.</div>';
                    $('#contact_email').focus();
                    $contactform.append($response);

                } else {
                    // Yes, submit the form to the PHP script via Ajax
                    $contactform.children('button[type="submit"]').button('loading');
                    $.ajax({
                        type: "POST",
                        url: "php/contact-form.php",
                        data: $(this).serialize(),
                        success: function(msg) {
                            if (msg == 'sent') {
                                $response = '<div class="alert alert-success">Your message has been sent. Thank you!</div>';
                                $contactform[0].reset();
                            } else {
                                $response = '<div class="alert alert-danger">' + msg + '</div>';
                            }
                            // Show response message
                            $contactform.append($response);
                            $contactform.children('button[type="submit"]').button('reset');
                        }
                    });
                }
                return false;
            });
        },

        /* ---------------------------------------------------------------------- */
        /* ------------------------- 10 - Wow initialize  ----------------------- */
        /* ---------------------------------------------------------------------- */
        SL_wow: function() {
            var wow = new WOW({
                mobile: false // trigger animations on mobile devices (default is true)
            });
            wow.init();
        },

        /* ---------------------------------------------------------------------- */
        /* -------------------------- 11 - Fit Vids ----------------------------- */
        /* ---------------------------------------------------------------------- */
        SL_fitVids: function() {
            $body.fitVids();
        },

        /* ---------------------------------------------------------------------- */
        /* ------------------------- 12 - YT Player for Video ------------------- */
        /* ---------------------------------------------------------------------- */
        SL_YTPlayer: function() {
            $(".player").mb_YTPlayer();
        },

        /* ---------------------------------------------------------------------- */
        /* --------------------------- 13 - Megafolio --------------------------- */
        /* ---------------------------------------------------------------------- */
        SL_megafolio: function() {
            var megafolio_container = '.megafolio-container';
            var api = $(megafolio_container).megafoliopro({
                filterChangeAnimation: "rotatescale", // fade, rotate, scale, rotatescale, pagetop, pagebottom,pagemiddle
                filterChangeSpeed: 250, // Speed of Transition
                filterChangeRotate: 99, // If you ue scalerotate or rotate you can set the rotation (99 = random !!)
                filterChangeScale: 0.6, // Scale Animation Endparameter
                delay: 10, // The Time between the Animation of single mega-entry points
                paddingHorizontal: $(megafolio_container).data("padding"), // Padding between the mega-entrypoints
                paddingVertical: $(megafolio_container).data("padding"),
                layoutarray: $(megafolio_container).data("layoutarray") //[5,6] // Defines the Layout Types which can be used in the Gallery. 2-9 or "random". You can define more than one, like {5,2,6,4} where the first items will be orderd in layout 5, the next comming items in layout 2, the next comming items in layout 6 etc... You can use also simple {9} then all item ordered in Layout 9 type.

            });

            // CALL FILTER FUNCTION IF ANY FILTER HAS BEEN CLICKED
            $(document.body).on('click', '.filter', function() {
                $('.filter').removeClass("active");
                api.megafilter(jQuery(this).data('category'));
                $(this).addClass("active");
                return false;
            });
        },

        /* ---------------------------------------------------------------------- */
        /* ------------------------- 14 - equalHeights -------------------------- */
        /* ---------------------------------------------------------------------- */
        SL_resizeDivs: function() {
            /* equal heigh */
            $('.equal-height > div').css('min-height', 'auto');
            $('.equal-height').equalHeights();

            /* pricing-table equal heigh*/
            $('.equal-height-pricing-table > div').css('min-height', 'auto');
            $('.equal-height-pricing-table').equalHeights();
            $('.equal-height-pricing-table > div > div').css('min-height', $('.equal-height-pricing-table > div').css('min-height'));
        },

        /* ---------------------------------------------------------------------- */
        /* -------------------------- 15 - Newsletter Form ------------------------- */
        /* ---------------------------------------------------------------------- */
        SL_newsletterform: function() {
            var $newsletterform = $('#newsletter-form'),
                $response = '';

            // After contact form submit
            $newsletterform.submit(function() {
                // Hide any previous response text
                $newsletterform.children(".alert").remove();

                // Are all the fields filled in?
                if (!$('#newsletter_name').val()) {
                    $response = '<div class="alert alert-danger">Please enter your name.</div>';
                    $('#newsletter_name').focus();
                    $newsletterform.append($response);

                } else if (!$('#newsletter_email').val()) {
                    $response = '<div class="alert alert-danger">Please enter valid e-mail.</div>';
                    $('#newsletter_email').focus();
                    $newsletterform.append($response);

                } else {
                    // Yes, submit the form to the PHP script via Ajax
                    $newsletterform.children('button[type="submit"]').button('loading');
                    $.ajax({
                        type: "POST",
                        url: "php/newsletter-form.php",
                        data: $(this).serialize(),
                        success: function(msg) {
                            if (msg == 'sent') {
                                $response = '<div class="alert alert-success">Your message has been sent. Thank you!</div>';
                                $newsletterform[0].reset();
                            } else {
                                $response = '<div class="alert alert-danger">' + msg + '</div>';
                            }
                            // Show response message
                            $newsletterform.append($response);
                            $newsletterform.children('button[type="submit"]').button('reset');
                        }
                    });
                }
                return false;
            });
        },
        /* ---------------------------------------------------------------------- */
        /* -------------------------- 16 - scrollToTop  ------------------------- */
        /* ---------------------------------------------------------------------- */
        SL_scrollToTop: function() {
             $(window).scroll(function () {
                 if ($(this).scrollTop() > 600) {
                     $('.scrollToTop').fadeIn();
                 } else {
                     $('.scrollToTop').fadeOut();
                 }
             });
            $('.scrollToTop').click(function () {
               $("html, body").animate({
                  scrollTop: 0
               }, 300);
               return false;
            });
        }
    };


    SUMERIANLAB.header = {

        init: function() {

            var t = setTimeout(function() {
                SUMERIANLAB.header.SL_scrollToFixed();
                SUMERIANLAB.header.SL_topnavAnimate();
                SUMERIANLAB.header.SL_scrolltoTarget();
                SUMERIANLAB.header.SL_menuzord();
                SUMERIANLAB.header.SL_navLocalScorll();
                SUMERIANLAB.header.SL_menuCollapseOnClick();
                SUMERIANLAB.header.SL_homeParallaxFadeEffect();
                SUMERIANLAB.header.SL_topsearch_toggle();
            }, 500);

        },

        /* ---------------------------------------------------------------------------- */
        /* ---------------------- 1 - collapsed menu close on click ------------------ */
        /* ---------------------------------------------------------------------------- */
        SL_menuCollapseOnClick: function() {
            $(document).on('click', '.navbar-collapse.in', function(e) {
                if ($(e.target).is('a')) {
                    $(this).collapse('hide');
                }
                return false;
            });
        },

        /* ---------------------------------------------------------------------- */
        /* ------ 2 - Active Menu Item on Reaching Different Sections ---------- */
        /* ---------------------------------------------------------------------- */
        SL_activateMenuItemOnReach: function() {
            var cur_pos = $window.scrollTop() + 2;
            var nav_height = $header.outerHeight();
            $sections.each(function() {
                var top = $(this).offset().top - nav_height - 80,
                    bottom = top + $(this).outerHeight();

                if (cur_pos >= top && cur_pos <= bottom) {
                    $header.find('a').removeClass('current').removeClass('active');
                    $sections.removeClass('current').removeClass('active');

                    //$(this).addClass('current').addClass('active');
                    $header.find('a[href="#' + $(this).attr('id') + '"]').addClass('current').addClass('active');
                }
            });
        },

        /* ---------------------------------------------------------------------- */
        /* -------------- 3 - on click scrool to target with smoothness -------- */
        /* ---------------------------------------------------------------------- */
        SL_scrolltoTarget: function() {
            //jQuery for page scrolling feature - requires jQuery Easing plugin
            $('.smooth-scroll').on('click', function(event) {
                var $anchor = $(this);
                $('html, body').stop().animate({
                    scrollTop: $($anchor.attr('href')).offset().top + 80
                }, 1500, 'easeInOutExpo');
                event.preventDefault();
                return false;
            });
        },

        /* ---------------------------------------------------------------------- */
        /* --------------------- 4 - Scroll navigation ------------------------- */
        /* ---------------------------------------------------------------------- */
        SL_navLocalScorll: function() {
            var data_offset = -73;
            $(".menuzord-menu").localScroll({
                target: "body",
                duration: 800,
                offset: data_offset,
                easing: "easeInOutExpo"
            });
        },

        /* ---------------------------------------------------------------------------- */
        /* ---------------------- 5 - collapsed menu close on click ------------------ */
        /* ---------------------------------------------------------------------------- */
        SL_scrollToFixed: function() {
            $('.navbar-scrolltofixed').scrollToFixed();
        },

        /* ----------------------------------------------------------------------------- */
        /* ---------------------- 6 - Menuzord - Responsive Megamenu ------------------ */
        /* ----------------------------------------------------------------------------- */
        SL_menuzord: function() {
            $("#menuzord").menuzord({
                align: "left",
                effect: "slide",
                animation: "none",
                indicatorFirstLevel: "<i class='fa fa-angle-down'></i>",
                indicatorSecondLevel: "<i class='fa fa-angle-right'></i>"
            });
            $("#menuzord-right").menuzord({
                align: "right",
                effect: "slide",
                animation: "none",
                indicatorFirstLevel: "<i class='fa fa-angle-down'></i>",
                indicatorSecondLevel: "<i class='fa fa-angle-right'></i>"
            });
        },

        /* ---------------------------------------------------------------------- */
        /* ---------------------- 7 - Waypoint Top Nav Sticky ------------------ */
        /* ---------------------------------------------------------------------- */
        SL_topnavAnimate: function() {
            if ($window.scrollTop() > (50)) {
                $(".navbar-sticky-animated").removeClass("animated-active");
            } else {
                $(".navbar-sticky-animated").addClass("animated-active");
            }

            if ($window.scrollTop() > (50)) {
                $(".navbar-sticky-animated .header-nav-wrapper .container").removeClass("pt-20").removeClass("pb-20");
            } else {
                $(".navbar-sticky-animated .header-nav-wrapper .container").addClass("pt-20").addClass("pb-20");
            }
        },

        /* ---------------------------------------------------------------------- */
        /* ----------- 8 - home section on scroll parallax & fade -------------- */
        /* ---------------------------------------------------------------------- */
        SL_homeParallaxFadeEffect: function() {
            if ($window.width() >= 1200) {
                var scrolled = $window.scrollTop();
                $('.content-fade-effect .home-content .home-text').css('padding-top', (scrolled * 0.0610) + '%').css('opacity', 1 - (scrolled * 0.00120));
            }
        },

        /* ---------------------------------------------------------------------- */
        /* ---------------------- 9 - Top search toggle  ----------------------- */
        /* ---------------------------------------------------------------------- */
        SL_topsearch_toggle: function() {
            $(document.body).on('click', '#top-search-toggle', function(e) {
                e.preventDefault();
                $('.search-form-wrapper.toggle').toggleClass('active');
                return false;
            });
        }

    };

    SUMERIANLAB.widget = {

        init: function() {

            var t = setTimeout(function() {
                SUMERIANLAB.widget.SL_progressBar();
                SUMERIANLAB.widget.SL_funfact();
                SUMERIANLAB.widget.SL_accordion_toggles();
                SUMERIANLAB.widget.SL_tooltip();
                SUMERIANLAB.widget.SL_countDownTimer();
            }, 500);

        },


        /* ---------------------------------------------------------------------- */
        /* ------------------------- 1 - CountDown ----------------------------- */
        /* ---------------------------------------------------------------------- */
        SL_countDownTimer: function() {
            var $clock = $('#clock-count-down');
            var endingdate = $clock.data("endingdate");
            $clock.countdown(endingdate, function(event) {
                var countdown_text = '' +
                    '<ul class="countdown-timer">' +
                    '<li>%D <span>Days</span></li>' +
                    '<li>%H <span>Hours</span></li>' +
                    '<li>%M <span>Minutes</span></li>' +
                    '<li>%S <span>Seconds</span></li>' +
                    '</ul>';
                $(this).html(event.strftime(countdown_text));
            });
        },
        /* ---------------------------------------------------------------------- */
        /* ---------------- 2 - progress bar / horizontal skill bar ------------ */
        /* ---------------------------------------------------------------------- */
        SL_progressBar: function() {
            var $progress_bar = $('.progress-bar');
            $progress_bar.appear();
            $(document.body).on('appear', '.progress-bar', function() {
                $progress_bar.each(function() {
                    var current_item = $(this);
                    if (!current_item.hasClass('appeared')) {
                        var percent = current_item.data('percent');
                        var barcolor = current_item.data('barcolor');
                        current_item.append('<span class="percent">' + percent + '%' + '</span>').css('background-color', barcolor).css('width', percent + '%').addClass('appeared');
                    }
                });
            });
        },

        /* ---------------------------------------------------------------------- */
        /* --------------------- 3 - Funfact Number Counter -------------------- */
        /* ---------------------------------------------------------------------- */
        SL_funfact: function() {
            var $animate_number = $('.animate-number');
            $animate_number.appear();
            $(document.body).on('appear', '.animate-number', function() {
                $animate_number.each(function() {
                    var current_item = $(this);
                    if (!current_item.hasClass('appeared')) {
                        current_item.animateNumbers(current_item.attr("data-value"), true, parseInt(current_item.attr("data-animation-duration"), 10)).addClass('appeared');
                    }
                });
            });
        },

        /* ---------------------------------------------------------------------- */
        /* --------------------- 4 - accordion & toggles ----------------------- */
        /* ---------------------------------------------------------------------- */
        SL_accordion_toggles: function() {
            var $panel_group_collapse = $('.panel-group .collapse');
            $panel_group_collapse.on("show.bs.collapse", function(e) {
                $(this).closest(".panel-group").find("[href='#" + $(this).attr("id") + "']").addClass("active");
            });
            $panel_group_collapse.on("hide.bs.collapse", function(e) {
                $(this).closest(".panel-group").find("[href='#" + $(this).attr("id") + "']").removeClass("active");
            });
        },

        /* ---------------------------------------------------------------------- */
        /* ---------------------------- 5 - tooltip  --------------------------- */
        /* ---------------------------------------------------------------------- */
        SL_tooltip: function() {
            $('[data-toggle="tooltip"]').tooltip();
        },

    };

    SUMERIANLAB.slider = {

        init: function() {

            var t = setTimeout(function() {
                SUMERIANLAB.slider.SL_owlCarousel();
                SUMERIANLAB.slider.SL_maximageSlider();
            }, 500);

        },


        /* ---------------------------------------------------------------------- */
        /* ---------------------------- 1 - Owl Carousel  ---------------------- */
        /* ---------------------------------------------------------------------- */
        SL_owlCarousel: function() {
            $(".text-carousel").owlCarousel({
                autoplay: true,
                autoplayTimeout: 2000,
                loop: true,
                items: 1,
                dots: true,
                nav: false,
                navText: [
                    '<i class="pe-7s-angle-left"></i>',
                    '<i class="pe-7s-angle-right"></i>'
                ]
            });

            $(".image-carousel").owlCarousel({
                autoplay: true,
                autoplayTimeout: 2000,
                smartSpeed: 400,
                items: 1,
                loop: true,
                dots: true,
                nav: false,
                navText: [
                    '<i class="pe-7s-angle-left"></i>',
                    '<i class="pe-7s-angle-right"></i>'
                ]
            });

            $(".gallery-list-carosel").owlCarousel({
                autoplay: false,
                autoplayTimeout: 4000,
                loop: true,
                margin: 15,
                dots: false,
                nav: true,
                navText: [
                    '<i class="fa fa-angle-left"></i>',
                    '<i class="fa fa-angle-right"></i>'
                ],
                responsive: {
                    0: {
                        items: 2,
                        center: false
                    },
                    600: {
                        items: 4,
                        center: false
                    },
                    960: {
                        items: 6
                    },
                    1170: {
                        items: 6
                    },
                    1300: {
                        items: 6
                    }
                }
            });

            $(".testimonial-carousel").owlCarousel({
                autoplay: true,
                autoplayTimeout: 4000,
                loop: true,
                margin: 15,
                dots: true,
                nav: false,
                responsive: {
                    0: {
                        items: 1,
                        center: false
                    },
                    600: {
                        items: 1,
                        center: false
                    },
                    960: {
                        items: 2
                    },
                    1170: {
                        items: 3
                    },
                    1300: {
                        items: 3
                    }
                }
            });

            $(".testimonial-carousel-1").owlCarousel({
                autoplay: true,
                autoplayTimeout: 4000,
                loop: true,
                margin: 15,
                dots: true,
                nav: false,
                responsive: {
                    0: {
                        items: 1,
                        center: false
                    },
                    600: {
                        items: 1,
                        center: false
                    },
                    960: {
                        items: 1
                    },
                    1170: {
                        items: 1
                    },
                    1300: {
                        items: 1
                    }
                }
            });

            $(".featured-project-carousel").owlCarousel({
                autoplay: false,
                autoplayTimeout: 4000,
                loop: true,
                margin: 15,
                dots: false,
                nav: true,
                navText: [
                    '<i class="fa fa-angle-left"></i>',
                    '<i class="fa fa-angle-right"></i>'
                ],
                responsive: {
                    0: {
                        items: 1,
                        center: false
                    },
                    600: {
                        items: 1,
                        center: false
                    },
                    960: {
                        items: 1
                    },
                    1170: {
                        items: 1
                    },
                    1300: {
                        items: 1
                    }
                }
            });

            $('.featured-gallery').owlCarousel({
                autoplay: true,
                autoplayTimeout: 2000,
                loop: true,
                margin: 3,
                dots: false,
                nav: true,
                navText: [
                    '<i class="pe-7s-angle-left"></i>',
                    '<i class="pe-7s-angle-right"></i>'
                ],
                responsive: {
                    0: {
                        items: 1,
                        center: false
                    },
                    600: {
                        items: 2,
                        center: false
                    },
                    960: {
                        items: 3
                    },
                    1170: {
                        items: 4
                    },
                    1300: {
                        items: 4
                    }
                }
            });

            $('.speakers-carousel').owlCarousel({
                autoplay: true,
                autoplayTimeout: 2000,
                loop: true,
                margin: 3,
                dots: false,
                nav: true,
                navText: [
                    '<i class="pe-7s-angle-left"></i>',
                    '<i class="pe-7s-angle-right"></i>'
                ],
                responsive: {
                    0: {
                        items: 1,
                        center: false
                    },
                    600: {
                        items: 2,
                        center: false
                    },
                    960: {
                        items: 3
                    },
                    1170: {
                        items: 4
                    },
                    1300: {
                        items: 4
                    }
                }
            });

            $('.news-carousel').each(function() {
                var current_item = $(this);
                var data_dots = (current_item.data("dots") === undefined) ? false : current_item.data("dots");
                var data_nav = (current_item.data("nav") === undefined) ? false : current_item.data("nav");
                current_item.owlCarousel({
                    autoplay: false,
                    autoplayTimeout: 4000,
                    loop: true,
                    margin: 15,
                    dots: data_dots,
                    nav: data_nav,
                    navText: [
                        '<i class="fa fa-angle-left"></i>',
                        '<i class="fa fa-angle-right"></i>'
                    ],
                    responsive: {
                        0: {
                            items: 1,
                            center: false
                        },
                        600: {
                            items: 1,
                            center: false
                        },
                        750: {
                            items: 3,
                            center: false
                        },
                        960: {
                            items: 3
                        },
                        1170: {
                            items: 3
                        },
                        1300: {
                            items: 3
                        }
                    }
                });
            });

            $('.news-carousel-2column').each(function() {
                var current_item = $(this);
                var data_dots = (current_item.data("dots") === undefined) ? false : current_item.data("dots");
                var data_nav = (current_item.data("nav") === undefined) ? false : current_item.data("nav");
                current_item.owlCarousel({
                    autoplay: false,
                    autoplayTimeout: 4000,
                    loop: true,
                    margin: 15,
                    dots: data_dots,
                    nav: data_nav,
                    navText: [
                        '<i class="fa fa-angle-left"></i>',
                        '<i class="fa fa-angle-right"></i>'
                    ],
                    responsive: {
                        0: {
                            items: 1,
                            center: false
                        },
                        600: {
                            items: 1,
                            center: false
                        },
                        750: {
                            items: 2,
                            center: false
                        },
                        960: {
                            items: 2
                        },
                        1170: {
                            items: 2
                        },
                        1300: {
                            items: 2
                        }
                    }
                });
            });

            $(".clients-logo.carousel").owlCarousel({
                autoplay: true,
                autoplayTimeout: 2000,
                items: 5,
                dots: false,
                nav: false,
                responsive: {
                    0: {
                        items: 3,
                        center: false
                    },
                    600: {
                        items: 3,
                        center: false
                    },
                    960: {
                        items: 4
                    },
                    1170: {
                        items: 6
                    },
                    1300: {
                        items: 6
                    }
                }
            });

            $(".blog-post-carousel").owlCarousel({
                autoplay: true,
                autoplayTimeout: 2000,
                smartSpeed: 400,
                items: 2,
                margin: 30,
                loop: true,
                dots: false,
                nav: true,
                navText: [
                    '<i class="pe-7s-angle-left"></i>',
                    '<i class="pe-7s-angle-right"></i>'
                ],
                responsive: {
                    0: {
                        items: 1,
                        center: false
                    },
                    600: {
                        items: 2,
                        center: false
                    },
                    960: {
                        items: 2
                    },
                    1170: {
                        items: 2
                    }
                }
            });

            $(".experts-flip-carousel").owlCarousel({
                animateOut: 'slideOutDown',
                animateIn: 'fadeIn',
                items: 1,
                margin: 30,
                stagePadding: 30,
                smartSpeed: 450,
                autoplay: true,
                autoplayTimeout: 4000,
                loop: true,
                dots: true,
                nav: false
            });

            $('.causes-carousel').each(function() {
                var current_item = $(this);
                var data_dots = (current_item.data("dots") === undefined) ? false : current_item.data("dots");
                var data_nav = (current_item.data("nav") === undefined) ? false : current_item.data("nav");
                current_item.owlCarousel({
                    autoplay: true,
                    autoplayTimeout: 4000,
                    loop: true,
                    margin: 15,
                    dots: data_dots,
                    nav: data_nav,
                    navText: [
                        '<i class="fa fa-angle-left"></i>',
                        '<i class="fa fa-angle-right"></i>'
                    ],
                    responsive: {
                        0: {
                            items: 1,
                            center: false
                        },
                        600: {
                            items: 1,
                            center: false
                        },
                        750: {
                            items: 2,
                            center: false
                        },
                        960: {
                            items: 3
                        },
                        1170: {
                            items: 4
                        },
                        1300: {
                            items: 4
                        }
                    }
                });
            });
        },


        /* ---------------------------------------------------------------------- */
        /* ------ 2 - maximage Fullscreen Parallax Background Slider  ---------- */
        /* ---------------------------------------------------------------------- */
        SL_maximageSlider: function() {
            $('#maximage').maximage({
                cycleOptions: {
                    fx: 'fade',
                    speed: 1500,
                    prev: '.img-prev',
                    next: '.img-next'
                }
            });
        }

    };

    SUMERIANLAB.documentOnResize = {

        init: function() {

            var t = setTimeout(function() {
                SUMERIANLAB.initialize.SL_resizeDivs();
                SUMERIANLAB.initialize.SL_resizeFullscreen();
            }, 500);

        }

    };


    SUMERIANLAB.documentOnLoad = {

        init: function() {

            var t = setTimeout(function() {
                SUMERIANLAB.initialize.SL_preLoader();
                SUMERIANLAB.initialize.SL_hashForwarding();
            }, 500);

            $window.trigger("scroll");
            $window.trigger("resize");

        }

    };

    //document ready
    SUMERIANLAB.documentOnReady = {

        init: function() {
            SUMERIANLAB.initialize.init();
            SUMERIANLAB.header.init();
            SUMERIANLAB.slider.init();
            SUMERIANLAB.widget.init();
            SUMERIANLAB.documentOnReady.windowscroll();
        },

        windowscroll: function(){

            $window.on( 'scroll', function(){

                SUMERIANLAB.header.SL_activateMenuItemOnReach();
                SUMERIANLAB.header.SL_topnavAnimate();

            });
        }

    };

    /* ---------------------------------------------------------------------- */
    /* -------------------------- Declare Variables ------------------------- */
    /* ---------------------------------------------------------------------- */
    var $window = $(window),
        $html = $('html'),
        $body = $('body'),
        $wrapper = $('#wrapper'),
        $header = $('#header'),
        $footer = $('#footer'),
        $sections = $('section'),
        $preloader = $('#preloader'),
        $parallax = $('.parallax');

    /* ---------------------------------------------------------------------- */
    /* ---------------------------- Call Functions -------------------------- */
    /* ---------------------------------------------------------------------- */
    $(document).ready(SUMERIANLAB.documentOnReady.init);
    $window.load(SUMERIANLAB.documentOnLoad.init);
    $window.on('resize', SUMERIANLAB.documentOnResize.init);

})(jQuery);
