jQuery(function ($) {

    // ===================================================== Fix fixed bg's jump

    /MSIE [6-8]|Mac/i.test(navigator.userAgent) || $("header, article, footer").each(function () {
        if ("fixed" == $(this).css("backgroundAttachment")) {
            var i = $(this), a = /WebKit/i.test(navigator.userAgent) ? 9 : 8;
            i.addClass("froid-fixed-bg").data({
                bgX: i.css("backgroundPosition").slice(0, i.css("backgroundPosition").indexOf(" ")),
                bgY: i.css("backgroundPosition").slice(i.css("backgroundPosition").indexOf(" ")),
                margin: a
            })
        }
    }), $(window).bind("SIModals.modalsOpen", function () {
        $(".froid-fixed-bg").each(function () {
            var i = $(this);
            i.css("backgroundPosition", "calc(" + i.data("bgX") + " - " + i.data("margin") + "px) " + i.data("bgY"))
        })
    }), $(window).bind("SIModals.modalsClose", function () {
        $(".froid-fixed-bg").each(function () {
            var i = $(this);
            i.css("backgroundPosition", i.data("bgX") + " " + i.data("bgY"))
        })
    });

    // ===================================================== Mobile full-width && disable animation

    if (is_mobile()) {

        // Fix mobile fixed bg's
        $("header, section, article, footer, .section-bg-block::before").each(function () {
            if ("fixed" == $(this).css("backgroundAttachment")) $(this).css('backgroundAttachment', 'scroll');
        });

        // Remove animation
        function removeAnimation(block, className) {
            block.css({
                'transform': 'none',
                '-webkit-transform': 'none',
                '-moz-transform': 'none',
                '-ms-transform': 'none',
                '-o-transform': 'none',
                'transition': 'none',
                '-webkit-transition': 'none',
                'opacity': 1
            }).removeClass(className);
        }

        function removeTransform(block, className) {
            block.css({
                'transform': 'none',
                '-webkit-transform': 'none',
                '-moz-transform': 'none',
                '-ms-transform': 'none',
                '-o-transform': 'none'
            }).removeClass(className);
        }

        removeAnimation($('.cre-animate'), 'cre-animate');
        removeTransform($('.si-floating'), 'si-floating');
        removeTransform($('.si-floating2'), 'si-floating2');
        removeTransform($('.si-floating3'), 'si-floating3');
        removeTransform($('.si-floating4'), 'si-floating4');

        // Mobile stretch
        $('html, body').css('min-width', '1280px').addClass('mobile');
        $('html').css('width', window.innerWidth + 'px');

        //$('html').css('width', window.innerWidth + 'px');
        //$(window).resize(function () {
        //    $('html').css('width', window.innerWidth + 'px');
        //});
        //$(window).bind('scroll', function () {
        //    $('html').css('width', window.innerWidth + 'px');
        //});

        // ===================================================== All sound load
        $.ionSound({
            sounds: ["bip-1", "bip-2", "wuf-1", "wuf-2", "wuf-3", "wuf-4"],
            path: template_url + "/sounds/",
            volume: 0
        });
    }
    else {

        // ===================================================== All sound load
        $.ionSound({
            sounds: ["bip-1", "bip-2", "wuf-1", "wuf-2", "wuf-3", "wuf-4"],
            path: template_url + "/sounds/",
            volume: 0.3
        });

        // ===================================================== Sounds
        $(document).on('mouseenter',
            '.btn, ' +
            '.si-close, ' +
            '.phone-link, ' +
            '.si-jump, ' +
            '.swiper-button-prev, ' +
            '.swiper-button-next, ' +
            '.swiper-pagination-bullet, ' +
            '.tab-link', function () {
                $.ionSound.play('bip-2');
            });
        SIModals.beforeOpen = function () {
            $.ionSound.play('wuf-4');
        };
        SIModals.beforeClose = function () {
            $.ionSound.play('wuf-3');
        };

        // ===================================================== smooth scrolling
        if (!navigator.userAgent.match(/Trident\/7\./)) { // if not IE
            SmoothScroll({stepSize: 100});
        } else {
            document.body.addEventListener("mousewheel", function () {
                event.preventDefault();
                var wd = event.wheelDelta;
                var csp = window.pageYOffset;
                window.scrollTo(0, csp - wd);
            });
        }

        // ===================================================== parallax
        $('.element-parallax').scrollingParallax({
            staticSpeed: 1.4,
            staticScrollLimit: false
        });

        // ===================================================== video bg
        //$('#video-bg').css({'visibility': 'visible'});
        //$('#video-bg')[0].play();
    }

    if (is_OSX()) {
        $('html, body').addClass('osx');
    }


    // ===================================================== Init all plugins and scripts
    $.fn.SIInit = function () {

        //Modal photos
        $("[data-fancybox]").fancybox({
            loop: true,
            thumbs: {
                autoStart: true
            },
            youtube: {},
            vimeo: {}
        });

        //Forms
        $('.send-form').SIForms({
            'validateFields': {
                'client_name': 'Укажите ваше имя',
                'client_phone': 'Укажите ваш телефон',
                'client_mail': 'Укажите ваш e-mail'
            },
            'checkExtra': function (form) {
                if (!$(form).find('.form-agree-check').hasClass('checked')) {
                    SIPageMessages.show('Для отправки формы вы должны согласиться на обработку персональных данных.');
                    return false;
                }
            },
            'sendSuccess': function (res) {
                //grecaptcha.reset(recaptcha);
                //yaCounter.reachGoal('target' + res.id);
                //ga('send', 'event', res.gcode, res.gcode);
            }
        });

        //Jump links
        $('.si-jump').SIJump();

        //Page messages
        SIPageMessages.init();
    };

    $.fn.SIInit();


    // ===================================================== Modals
    $.fn.SIModalInit = function () {
        SIModals.init();

        // Init modals
        SIModals.attachModal('.open-phone-modal', '.phone-modal', {'.send-extra': 'extra'});
        SIModals.attachModal('.open-text-modal', '.text-modal', false, function () {
            return '.text-modal-' + $(this).data('id');
        });

        // Modal controls
        SIModals.attachClose('.si-close');
    };

    $.fn.SIModalInit();

    //SIModals.afterOpen = function () {
    //grecaptcha.reset(recaptcha);
    //};

    // ===================================================== Styler
    $('input[type=file], input[type=radio], input[type=checkbox], select').styler();
    $('input[type=radio]').change(function () {
        var label = $(this).closest('label'),
            name = $(this).attr('name');
        $('input[name=' + name + ']').closest('label').removeClass('checked');
        if ($(this).is(':checked'))
            label.addClass('checked');
    });
    $('input[type=checkbox]').change(function () {
        var label = $(this).closest('label');
        if ($(this).is(':checked'))
            label.addClass('checked');
        else
            label.removeClass('checked');
    });

    // ===================================================== Counter
    var tomorrow = new Date();
    tomorrow.setHours(24, 0, 0, 0);
    $('.counter').countdown({
        until: tomorrow,
        layout: '<div class="counter-item"><b>{dnn}</b>{dl}</div><div class="counter-separator">:</div>' +
        '<div class="counter-item"><b>{hnn}</b>{hl}</div><div class="counter-separator">:</div>' +
        '<div class="counter-item"><b>{mnn}</b>{ml}</div><div class="counter-separator">:</div>' +
        '<div class="counter-item"><b>{snn}</b>{sl}</div>'
    });

    // ===================================================== spoiler
    $(".spoiler").spoiler();

    // ===================================================== swiper
    if($('html').find('.program-message-holder')){
        var message7Slider = new Swiper('.message-slider', {
            slidesPerView: 1,
            spaceBetween: 20,
            pagination: {
                el: '.message-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            loop: true,
            autoplay: {
                delay: 5000,
            },
            on: {
                slideChange: function() {
                    $.ionSound.play('wuf-1');
                }
            }
        });
    }


    if($('html').find('.program-slider-holder')){
        var programSlider = new Swiper('.program-slider', {
            slidesPerView: 1,
            spaceBetween: 20,
			pagination: {
				el: '.program-pagination',
				clickable: true,
			  },
            navigation: {
				nextEl: '.swiper-button-next',
				prevEl: '.swiper-button-prev',
			  },
            loop: true,
            autoplay: {
				delay: 5000,
			  },
			on: {
				slideChange: function() {
					$.ionSound.play('wuf-1');
				}
			}
        });
	}

    if($('html').find('.program-review1-holder')){
        var review1Slider = new Swiper('.review1-slider', {
            slidesPerView: 1,
            spaceBetween: 20,
            pagination: {
                el: '.review1-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            loop: true,
            autoplay: {
                delay: 5000,
            },
            on: {
                slideChange: function() {
                    $.ionSound.play('wuf-1');
                }
            }
        });
    }

    if($('html').find('.program-review2-holder')){
        var review2Slider = new Swiper('.review2-slider', {
            slidesPerView: 1,
            spaceBetween: 20,
            pagination: {
                el: '.review2-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            loop: true,
            autoplay: {
                delay: 5000,
            },
            on: {
                slideChange: function() {
                    $.ionSound.play('wuf-1');
                }
            }
        });
    }

    if($('html').find('.program-review3-holder')){
        var review3Slider = new Swiper('.review3-slider', {
            slidesPerView: 1,
            spaceBetween: 20,
            pagination: {
                el: '.review3-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            loop: true,
            autoplay: {
                delay: 5000,
            },
            on: {
                slideChange: function() {
                    $.ionSound.play('wuf-1');
                }
            }
        });
    }

    if($('html').find('.program-review4-holder')){
        var review4Slider = new Swiper('.review4-slider', {
            slidesPerView: 1,
            spaceBetween: 20,
            pagination: {
                el: '.review4-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            loop: true,
            autoplay: {
                delay: 5000,
            },
            on: {
                slideChange: function() {
                    $.ionSound.play('wuf-1');
                }
            }
        });
    }

    if($('html').find('.program-review5-holder')){
        var review5Slider = new Swiper('.review5-slider', {
            slidesPerView: 1,
            spaceBetween: 20,
            pagination: {
                el: '.review5-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            loop: true,
            autoplay: {
                delay: 5000,
            },
            on: {
                slideChange: function() {
                    $.ionSound.play('wuf-1');
                }
            }
        });
    }

    if($('html').find('.program-review6-holder')){
        var review6Slider = new Swiper('.review6-slider', {
            slidesPerView: 1,
            spaceBetween: 20,
            pagination: {
                el: '.review6-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            loop: true,
            autoplay: {
                delay: 5000,
            },
            on: {
                slideChange: function() {
                    $.ionSound.play('wuf-1');
                }
            }
        });
    }

    if($('html').find('.program-review7-holder')){
        var review7Slider = new Swiper('.review7-slider', {
            slidesPerView: 1,
            spaceBetween: 20,
            pagination: {
                el: '.review7-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            loop: true,
            autoplay: {
                delay: 5000,
            },
            on: {
                slideChange: function() {
                    $.ionSound.play('wuf-1');
                }
            }
        });
    }

    // =====================================================dotdotdot
    $('.ellipsis').dotdotdot();
    $(window).resize(function () {
        $('.ellipsis').dotdotdot();
    });

    // ===================================================== custom scripts

    //label
    $('.ani-label').click(function () {
        var label = $(this),
            holder = label.parent(),
            input = holder.find('.ani-input');

        holder.toggleClass('active');
        input.focus();
    });

    //menu
    function headerBehaviour() {
        if ($(window).scrollTop() > 0) {
            $('.layout-header').addClass('active');
        }
        else {
            $('.layout-header').removeClass('active');
        }
    }

    headerBehaviour();
    $(window).resize(function () {
        headerBehaviour();
    });
    $(window).bind('scroll', function () {
        headerBehaviour();
    });

    //accordion
    $('.question-item:first').addClass('active').find('.answer').css('display', 'block');
    $('.question-item').each(function () {
        var item = $(this),
            question = item.find('.question'),
            answer = item.find('.answer');
        answer.slideUp();
        if (item.hasClass('active')) {
            $(this).find('.answer').slideDown();
        }
        question.click(function () {
            if (question.parents('.question-item').hasClass('active')) {
                answer.slideUp();
                item.removeClass('active');
            }
            else {
                item.parents('.questions-block').find('.question-item').find('.answer').slideUp();
                answer.slideDown();
                item.parents('.questions-block').find('.question-item').removeClass('active');
                item.addClass('active');
            }
        });
    });

    //equal height
    function setEqualHeight(block) {
        var maxHeight = 0;

        block.each(function () {
            var height = $(this).innerHeight();

            if (height > maxHeight) {
                maxHeight = height;
            }
        });

        return block.css('height', maxHeight);
    }

    setEqualHeight($('.block'));


    // ===================================================== more questions
    $(".more-button").click(function () {
        $(".more-block").toggle();
    });

    //===================================================== mobile menu
    var showMenu = $('.show-menu');

    function closeGlobalNav(timeout) {
        var globalNavigation = $('.global-nav'),
            showMenu = $('.show-menu');

        $('html').removeClass('si-lock2');
        showMenu.removeClass('opened');
        globalNavigation.removeClass('active');
        $('.layout-header').removeClass('active-menu');
        setTimeout(function () {
            globalNavigation.removeClass('visible');
        }, timeout);
    }

    //show menu button
    showMenu.click(function () {
        var globalNavigation = $('.global-nav');

        if ($(this).hasClass('opened')) {
            closeGlobalNav(600);
        } else {
            $('html').addClass('si-lock2');
            $(this).addClass('opened');
            globalNavigation.addClass('visible').addClass('active');
            $('.layout-header').addClass('active-menu');
        }
    });

    //navigation overlay click
    $('.nav-overlay').click(function () {
        closeGlobalNav(600);
    });

    //close button click
    $('.nav-close').click(function () {
        closeGlobalNav(600);
    });

    //global link click
    $(".global-nav-link").click(function (e) {
        closeGlobalNav(1200);
    });


    $(window).scroll(function(){
        var attrstyle = 'height:' + $(this).scrollTop()/3 + 'px;';
        $(".animate-block").attr('style', attrstyle);
    });

    $(window).scroll(function(){
        var top = $(this).scrollTop();
        if(top >= 1500){
            $('.colorScroll').addClass('colorWhite');
        }
        else if(top <= 1500){
            $('.colorScroll').removeClass('colorWhite');
        }
    });


    // ===================================================== loader
    setTimeout(function () {
       $('html').removeClass('loading');
       setTimeout(function () {
           $('.loader').hide();
       }, 500);
    }, 1000);
});