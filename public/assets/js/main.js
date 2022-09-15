$(function () {

    "use strict";

    /***************************

     contact form 1

     ***************************/
    $("#form1").submit(function () {
        $.ajax({
            type: "POST",
            url: "mail.php",
            data: $(this).serialize()
        }).done(function () {
            $('.sw-popup-form-frame .sw-success-banner').addClass('sw-active');
        });
        return false;
    });

    /***************************

     contact form 2

     ***************************/
    $("#form2").submit(function () {
        $.ajax({
            type: "POST",
            url: "mail.php",
            data: $(this).serialize()
        }).done(function () {
            $('.sw-contact-card .sw-success-banner').addClass('sw-active');
        });
        return false;
    });

    /***************************

     preloader

     ***************************/

    $(document).ready(function () {
        $('html').addClass('is-animating');
        $(".sw-scroll-container").animate({
            opacity: 0,
        });
        setTimeout(function () {
            $('html').removeClass('is-animating');
            $(".sw-scroll-container").animate({
                opacity: 1,
            }, 600);
        }, 1000);
    });

    /***************************

     swup

     ***************************/
    const options = {
        containers: ['#sw-dynamic-content'],
        animateHistoryBrowsing: true,
        linkSelector: '.sw-menu a:not([data-no-swup]), .sw-anima-link:not([data-no-swup])',
        animationSelector: '[class="sw-swup-animation"]'
    };
    const swup = new Swup(options);
    /***************************

     menu

     ***************************/
    $('.sw-menu-btn').on('click', function () {
        $('.sw-menu-btn , .sw-right-side').toggleClass('sw-active');
    })
    $('.sw-menu ul li a').on('click', function () {
        $('.sw-menu-btn , .sw-right-side').removeClass('sw-active');
    })
    /***************************

     mode switch

     ***************************/
    $('.sw-mode-switcher').clone().appendTo('.sw-mode-switcher-place');
    $('#sw-swich').change(function () {
        if (this.checked) {
            $('.sw-hidden-switcher input').prop("checked", true);
            $('.sw-mode-swich-animation-frame').addClass('sw-active');
            $("#sw-scroll-container").animate({
                opacity: 0,
            }, 600, function () {
                setTimeout(function () {
                    $('.sw-mode-swich-animation').addClass('sw-active');
                    $("#sw-switch-style").attr("href", "css/style-dark.css");
                }, 200);
                setTimeout(function () {
                    $('.sw-mode-swich-animation-frame').removeClass('sw-active');
                    $("#sw-scroll-container").animate({
                        opacity: 1,
                    }, 600);
                }, 1000);
            });
        } else {
            $('.sw-hidden-switcher input').prop("checked", false);
            $('.sw-mode-swich-animation-frame').addClass('sw-active');
            $("#sw-scroll-container").animate({
                opacity: 0,
            }, 600, function () {
                setTimeout(function () {
                    $('.sw-mode-swich-animation').removeClass('sw-active');
                    $("#sw-switch-style").attr("href", "css/style-light.css");
                }, 200);
                setTimeout(function () {
                    $('.sw-mode-swich-animation-frame').removeClass('sw-active');
                    $("#sw-scroll-container").animate({
                        opacity: 1,
                    }, 600);
                }, 1000);
            });
        }
    });
    /***************************

     counters

     ***************************/
    $('.sw-counter').each(function () {
        $(this).prop('Counter', 0).animate({
            Counter: $(this).text()
        }, {
            duration: 2000,
            easing: 'linear',
            step: function (now) {
                $(this).text(Math.ceil(now));
            }
        });
    });

    /***************************

     slideshow

     ***************************/
    var swiper = new Swiper('.sw-slideshow', {
        slidesPerView: 1,
        effect: 'fade',
        parallax: true,
        autoplay: true,
        speed: 1400,
    });
    /***************************

     testimonials slider

     ***************************/
    var swiper = new Swiper('.sw-testimonials-slider', {
        slidesPerView: 1,
        spaceBetween: 40,
        parallax: true,
        autoplay: false,
        speed: 1400,
        pagination: {
            el: '.sw-testimonials-slider-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.sw-testimonials-slider-next',
            prevEl: '.sw-testimonials-slider-prev',
        },

    });
    /***************************

     fancybox

     ***************************/
    $('[data-fancybox]').fancybox({
        animationEffect: "zoom-in-out",
        animationDuration: 600,
        transitionDuration: 1200,
        buttons: [
            "zoom",
            "slideShow",
            "thumbs",
            "close",
        ],
    });
    $('[data-fancybox="gallery"]').fancybox({
        animationEffect: "zoom-in-out",
        animationDuration: 600,
        transitionDuration: 1200,
        buttons: [
            "zoom",
            "slideShow",
            "thumbs",
            "close",
        ],
    });
    $('[data-fancybox="portfolio"]').fancybox({
        animationEffect: "zoom-in-out",
        animationDuration: 600,
        transitionDuration: 1200,
        buttons: [
            "zoom",
            "slideShow",
            "thumbs",
            "close",
        ],
    });
    $.fancybox.defaults.hash = false;
    /***************************

     locomotive scroll

     ***************************/
    const scroll = new LocomotiveScroll({
        el: document.querySelector('#sw-scroll-container'),
        smooth: true,
        lerp: .1
    });
    document.addEventListener('swup:contentReplaced', (event) => {
        scroll.destroy()
    });
    /*----------------------------------------------------------
    ------------------------------------------------------------

    REINIT

    ------------------------------------------------------------
    ----------------------------------------------------------*/
    document.addEventListener("swup:contentReplaced", function () {

        /***************************

         contact form 1

         ***************************/
        $("#form1").submit(function () {
            $.ajax({
                type: "POST",
                url: "mail.php",
                data: $(this).serialize()
            }).done(function () {
                $('.sw-popup-form-frame .sw-success-banner').addClass('sw-active');
            });
            return false;
        });

        /***************************

         contact form 2

         ***************************/
        $("#form2").submit(function () {
            $.ajax({
                type: "POST",
                url: "mail.php",
                data: $(this).serialize()
            }).done(function () {
                $('.sw-contact-card .sw-success-banner').addClass('sw-active');
            });
            return false;
        });

        /***************************

         preloader

         ***************************/
        $(".sw-scroll-container").animate({
            opacity: 1,
        }, 600);
        /***************************

         menu

         ***************************/
        $('.sw-menu-btn').on('click', function () {
            $('.sw-menu-btn , .sw-right-side').toggleClass('sw-active');
        })
        $('.sw-menu ul li a').on('click', function () {
            $('.sw-menu-btn , .sw-right-side').removeClass('sw-active');
        })
        /***************************

         mode switch

         ***************************/
        $('.sw-mode-switcher').clone().appendTo('.sw-mode-switcher-place');
        $('#sw-swich').change(function () {
            if (this.checked) {
                $('.sw-hidden-switcher input').prop("checked", true);
                $('.sw-mode-swich-animation-frame').addClass('sw-active');
                $("#sw-scroll-container").animate({
                    opacity: 0,
                }, 600, function () {
                    setTimeout(function () {
                        $('.sw-mode-swich-animation').addClass('sw-active');
                        $("#sw-switch-style").attr("href", "css/style-dark.css");
                    }, 200);
                    setTimeout(function () {
                        $('.sw-mode-swich-animation-frame').removeClass('sw-active');
                        $("#sw-scroll-container").animate({
                            opacity: 1,
                        }, 600);
                    }, 1000);
                });
            } else {
                $('.sw-hidden-switcher input').prop("checked", false);
                $('.sw-mode-swich-animation-frame').addClass('sw-active');
                $("#sw-scroll-container").animate({
                    opacity: 0,
                }, 600, function () {
                    setTimeout(function () {
                        $('.sw-mode-swich-animation').removeClass('sw-active');
                        $("#sw-switch-style").attr("href", "css/style-light.css");
                    }, 200);
                    setTimeout(function () {
                        $('.sw-mode-swich-animation-frame').removeClass('sw-active');
                        $("#sw-scroll-container").animate({
                            opacity: 1,
                        }, 600);
                    }, 1000);
                });
            }
        });
        /***************************

         counters

         ***************************/
        $('.sw-counter').each(function () {
            $(this).prop('Counter', 0).animate({
                Counter: $(this).text()
            }, {
                duration: 2000,
                easing: 'linear',
                step: function (now) {
                    $(this).text(Math.ceil(now));
                }
            });
        });
        /***************************

         slideshow

         ***************************/
        var swiper = new Swiper('.sw-slideshow', {
            slidesPerView: 1,
            effect: 'fade',
            parallax: true,
            autoplay: true,
            speed: 1400,
        });
        /***************************

         testimonials slider

         ***************************/
        var swiper = new Swiper('.sw-testimonials-slider', {
            slidesPerView: 1,
            spaceBetween: 40,
            parallax: true,
            autoplay: false,
            speed: 1400,
            pagination: {
                el: '.sw-testimonials-slider-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.sw-testimonials-slider-next',
                prevEl: '.sw-testimonials-slider-prev',
            },

        });
        /***************************

         fancybox

         ***************************/
        $('[data-fancybox]').fancybox({
            animationEffect: "zoom-in-out",
            animationDuration: 600,
            transitionDuration: 1200,
            buttons: [
                "zoom",
                "slideShow",
                "thumbs",
                "close",
            ],
        });
        $('[data-fancybox="gallery"]').fancybox({
            animationEffect: "zoom-in-out",
            animationDuration: 600,
            transitionDuration: 1200,
            buttons: [
                "zoom",
                "slideShow",
                "thumbs",
                "close",
            ],
        });
        $('[data-fancybox="portfolio"]').fancybox({
            animationEffect: "zoom-in-out",
            animationDuration: 600,
            transitionDuration: 1200,
            buttons: [
                "zoom",
                "slideShow",
                "thumbs",
                "close",
            ],
        });
        $.fancybox.defaults.hash = false;
        /***************************

         locomotive scroll

         ***************************/
        const scroll = new LocomotiveScroll({
            el: document.querySelector('#sw-scroll-container'),
            smooth: true,
            lerp: .1
        });
        document.addEventListener('swup:contentReplaced', (event) => {
            scroll.destroy()
        });
    });

});

$(document).ready(function () {
    $('.image-popup').magnificPopup({type: 'image'});
});

/***************************

 FAQ

 ***************************/
(function () {
    var FaqTemplate = function (element) {
        this.element = element;
        this.sections = this.element.getElementsByClassName('cd-faq__group');
        this.triggers = this.element.getElementsByClassName('cd-faq__trigger');
        this.faqContainer = this.element.getElementsByClassName('cd-faq__items')[0];
        this.faqsCategoriesContainer = this.element.getElementsByClassName('cd-faq__categories')[0];
        this.faqsCategories = this.faqsCategoriesContainer.getElementsByClassName('cd-faq__category');
        this.faqOverlay = this.element.getElementsByClassName('cd-faq__overlay')[0];
        this.faqClose = this.element.getElementsByClassName('cd-faq__close-panel')[0];
        this.scrolling = false;
        initFaqEvents(this);
    };

    function initFaqEvents(faqs) {
        // click on a faq category
        faqs.faqsCategoriesContainer.addEventListener('click', function (event) {
            var category = event.target.closest('.cd-faq__category');
            if (!category) return;
            var mq = getMq(faqs),
                selectedCategory = category.getAttribute('href').replace('#', '');
            if (mq == 'mobile') { // on mobile, open faq panel
                event.preventDefault();
                faqs.faqContainer.scrollTop = 0;
                Util.addClass(faqs.faqContainer, 'cd-faq__items--slide-in');
                Util.addClass(faqs.faqClose, 'cd-faq__close-panel--move-left');
                Util.addClass(faqs.faqOverlay, 'cd-faq__overlay--is-visible');
                var selectedSection = faqs.faqContainer.getElementsByClassName('cd-faq__group--selected');
                if (selectedSection.length > 0) {
                    Util.removeClass(selectedSection[0], 'cd-faq__group--selected');
                }
                Util.addClass(document.getElementById(selectedCategory), 'cd-faq__group--selected');
            } else { // on desktop, scroll to section
                if (!window.requestAnimationFrame) return;
                event.preventDefault();
                var windowScrollTop = window.scrollY || document.documentElement.scrollTop;
                Util.scrollTo(document.getElementById(selectedCategory).getBoundingClientRect().top + windowScrollTop + 2, 200);
            }
        });

        // on mobile -> close faq panel
        faqs.faqOverlay.addEventListener('click', function (event) {
            closeFaqPanel(faqs);
        });
        faqs.faqClose.addEventListener('click', function (event) {
            event.preventDefault();
            closeFaqPanel(faqs);
        });

        // on desktop -> toggle faq content visibility when clicking on the trigger element
        faqs.faqContainer.addEventListener('click', function (event) {
            if (getMq(faqs) != 'desktop') return;
            var trigger = event.target.closest('.cd-faq__trigger');
            if (!trigger) return;
            event.preventDefault();
            var content = trigger.nextElementSibling,
                parent = trigger.closest('li'),
                bool = Util.hasClass(parent, 'cd-faq__item-visible');

            Util.toggleClass(parent, 'cd-faq__item-visible', !bool);

            //store initial and final height - animate faq content height
            Util.addClass(content, 'cd-faq__content--visible');
            var initHeight = bool ? content.offsetHeight : 0,
                finalHeight = bool ? 0 : content.offsetHeight;

            if (window.requestAnimationFrame) {
                Util.setHeight(initHeight, finalHeight, content, 200, function () {
                    heighAnimationCb(content, bool);
                });
            } else {
                heighAnimationCb(content, bool);
            }
        });

        if (window.requestAnimationFrame) {
            // on scroll -> update selected category
            window.addEventListener('scroll', function () {
                if (getMq(faqs) != 'desktop' || faqs.scrolling) return;
                faqs.scrolling = true;
                window.requestAnimationFrame(updateCategory.bind(faqs));
            });
        }
    };

    function closeFaqPanel(faqs) {
        Util.removeClass(faqs.faqContainer, 'cd-faq__items--slide-in');
        Util.removeClass(faqs.faqClose, 'cd-faq__close-panel--move-left');
        Util.removeClass(faqs.faqOverlay, 'cd-faq__overlay--is-visible');
    };

    function getMq(faqs) {
        //get MQ value ('desktop' or 'mobile')
        return window.getComputedStyle(faqs.element, '::before').getPropertyValue('content').replace(/'|"/g, "");
    };

    function updateCategory() { // update selected category -> show green rectangle to the left of the category
        var selected = false;
        for (var i = 0; i < this.sections.length; i++) {
            var top = this.sections[i].getBoundingClientRect().top,
                bool = (top <= 0) && (-1 * top < this.sections[i].offsetHeight);
            Util.toggleClass(this.faqsCategories[i], 'cd-faq__category-selected', bool);
            if (bool) selected = true;
        }
        if (!selected) Util.addClass(this.faqsCategories[0], 'cd-faq__category-selected');
        this.scrolling = false;
    };

    function heighAnimationCb(content, bool) {
        content.removeAttribute("style");
        if (bool) Util.removeClass(content, 'cd-faq__content--visible');
    };

    var faqTemplate = document.getElementsByClassName('js-cd-faq'),
        faqArray = [];
    if (faqTemplate.length > 0) {
        for (var i = 0; i < faqTemplate.length; i++) {
            faqArray.push(new FaqTemplate(faqTemplate[i]));
        }
    }
    ;
})();

/***************************

 Aside menu

 ***************************/

function Nav() {
    var width = document.getElementById("sw-sidenav").style.width;
    if (width === "0px" || width == "") {
        document.getElementById("sw-sidenav").style.width = "250px";
        $('.animated-icon').toggleClass('open');
    } else {
        document.getElementById("sw-sidenav").style.width = "0px";
        $('.animated-icon').toggleClass('open');
    }
}
