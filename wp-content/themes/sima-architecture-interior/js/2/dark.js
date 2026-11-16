/* ------------------------------------------

[ Custom settings ]

01. ScrollIt
02. Progress bar
03. Preloader
04. Logo & Menu scroll sticky
05. Menu Navigation
06. Sub Menu
07. Sections background image
08. YouTubePopUp
09. Isotope Active
10. Animations
11. Accordion Box (for Faqs)
12. MagnificPopup
13. Hero owlCarousel
14. Slider owlCarousel
15. Project owlCarousel
16. Project Page owlCarousel
17. Services owlCarousel
18. Blog Grid owlCarousel
19. Team owlCarousel
20. Testimonials owlCarousel
21. Contact Form
22. Scroll back to top

------------------------------------------ */

(function ($) {
    "use strict";

    $(document).ready(function () {

        const $window = $(window);
        const $navbar = $(".navbar");

        $window.on("scroll", function () {
            $navbar.toggleClass("nav-scroll", $window.scrollTop() > 100);
        });

        $(".navbar-nav .dropdown-item a").on("click", function () {
            $(".navbar-collapse").removeClass("show");
        });
   });

})(jQuery); 

(function () {
    'use strict';

    var isMobile = {
        Android: function () {
            return /Android/i.test(navigator.userAgent);
        },
        BlackBerry: function () {
            return /BlackBerry/i.test(navigator.userAgent);
        },
        iOS: function () {
            return /iPhone|iPad|iPod/i.test(navigator.userAgent);
        },
        Opera: function () {
            return /Opera Mini/i.test(navigator.userAgent);
        },
        Windows: function () {
            return /IEMobile/i.test(navigator.userAgent);
        },
        any: function () {
            return (
                this.Android() ||
                this.BlackBerry() ||
                this.iOS() ||
                this.Opera() ||
                this.Windows()
            );
        }
    };

    // Hide #loading safely after 3 seconds
    function hidePreloader() {
        var preloader = document.getElementById('loading');
        if (preloader) {
            preloader.style.display = 'none';
        }
        var preloaderBg = document.querySelector('.preloader-bg');
        if (preloaderBg) {
            preloaderBg.style.display = 'none';
        }
    }

    setTimeout(hidePreloader, 3000);

    // On window load
    jQuery(window).on("load", function () {

        // Fade out loading class
        jQuery(".loading").fadeOut(500);

        // Initialize Stellar only if available
        if (jQuery.fn.stellar) {
            jQuery(window).stellar();
        }

    });

})();

(function () {
    "use strict";
    
    jQuery(document).ready(function() {
        var wind = jQuery(window);

        // scrollIt
        if (jQuery.fn.scrollIt) {
            jQuery.scrollIt({
                upKey: 38,                // key code to navigate to the next section
                downKey: 40,              // key code to navigate to the previous section
                easing: 'swing',          // the easing function for animation
                scrollTime: 600,          // how long (in ms) the animation takes
                activeClass: 'active',    // class given to the active nav element
                onPageChange: null,       // function(pageIndex) that is called when page is changed
                topOffset: -70            // offset (in px) for fixed top navigation
            });
        }

        // Progress bar
        wind.on('scroll', function () {
            jQuery(".skill-progress .progress").each(function () {
                var bottom_of_object = jQuery(this).offset().top + jQuery(this).outerHeight();
                var bottom_of_window = wind.scrollTop() + wind.height();
                var myVal = jQuery(this).data('value') || '0%';
                if (bottom_of_window > bottom_of_object) {
                    jQuery(this).css({
                        width: myVal
                    });
                }
            });
        }).trigger('scroll');  // trigger once on load

        // Circle progress
        if (jQuery.fn.circleProgress) {
            jQuery(".sk-progress .circle").each(function () {
                var myVal = parseFloat(jQuery(this).data('value')) || 0;
                jQuery(this).circleProgress({
                    startAngle: -Math.PI / 2,
                    value: myVal,
                    fill: {
                        gradient: ["#7fa1c6", "#7fa1c6"]
                    }
                });
            });
        }

    });

})();

var DURU = {
    init: function () {
        this.cacheDom();
        this.bindEvents();
        this.enableGridGallery();
        this.enablePopupGallery();
    },
    cacheDom: function () {
        this._body = jQuery('body');
        this.simaGalleryTabs = jQuery('.sima-toolbar-item');
        this.simaGalleryItem = jQuery('.sima-gallery-item');
    },
    bindEvents: function () {
        var self = this;
        this.simaGalleryTabs.on('click', jQuery.proxy(this.changeActiveTab, this));
        this.simaGalleryTabs.on('click', jQuery.proxy(this.addGalleryFilter, this));
    },
    /* ======= popup gallery ======= */
    enablePopupGallery: function () {
        jQuery('.sima-popup-gallery').each(function () {
            if (jQuery.fn.magnificPopup) {
                jQuery(this).magnificPopup({
                    delegate: 'a',
                    type: 'image',
                    gallery: {
                        enabled: true
                    }
                });
            }
        });
    },
    /* ======= gallery tab ======= */
    changeActiveTab: function (e) {
        var $target = jQuery(e.currentTarget);
        $target.closest('.sima-gallery-toolbar').find('.active').removeClass('active');
        $target.addClass('active');
    },
    /* ======= gallery filter ======= */
    addGalleryFilter: function (e) {
        var $target = jQuery(e.currentTarget);
        var value = $target.attr('data-filter');

        if (value === 'all') {
            this.simaGalleryItem.show(300);
        } else {
            this.simaGalleryItem.not('.' + value).hide(300);
            this.simaGalleryItem.filter('.' + value).show(300);
        }
    },
    /* ======= grid gallery ======= */
    enableGridGallery: function () {
        jQuery('.sima-grid-gallery').each(function (i, el) {
            if (jQuery.fn.masonry) {
                jQuery(el).masonry({
                    itemSelector: '.sima-grid-item',
                    columnWidth: '.sima-grid-item',
                    horizontalOrder: true
                });
            }
        });
    }
};

// Initialize
jQuery(document).ready(function () {
    if (typeof DURU !== 'undefined' && DURU.init) {
        DURU.init();
    }
});

jQuery(document).ready(function () {
    var $body = jQuery('body');
    var $preloader = jQuery("#preloader");
    var $preloaderBg = jQuery(".preloader-bg");
    var $navToggle = jQuery('.duru-js-duru-nav-toggle');
    var $duruWrap = jQuery('.duru-wrap');
    var $duruItems = jQuery('.duru-wrap .duru-wrap-inner > ul > li');

    // Preloader
    $preloader.fadeOut(700);
    $preloaderBg.delay(600).fadeOut(700);

    // Menu Navigation
    $navToggle.on('click', function (e) {
        e.preventDefault();
        var $this = jQuery(this);

        if ($body.hasClass('menu-open')) {
            $this.removeClass('active');
            $duruItems.each(function (i, el) {
                setTimeout(function () {
                    jQuery(el).removeClass('open');
                }, i * 100);
            });
            setTimeout(function () {
                $duruWrap.removeClass('duru-wrap-show');
            }, 300);
            $body.removeClass('menu-open');
        } else {
            $duruWrap.addClass('duru-wrap-show');
            $this.addClass('active');
            $body.addClass('menu-open');

            setTimeout(function () {
                $duruItems.each(function (i, el) {
                    setTimeout(function () {
                        jQuery(el).addClass('open');
                    }, i * 100);
                });
            }, 200);
        }
    });
});

jQuery(document).ready(function () {
    // Sub Menu
    jQuery('.duru-menu li.duru-menu-sub > a').on('click', function (e) {
        e.preventDefault();
        var $element = jQuery(this).parent('li');

        if ($element.hasClass('open')) {
            $element.removeClass('open');
            $element.find('li').removeClass('open');
            $element.find('ul').slideUp();
        } else {
            $element.addClass('open');
            $element.children('ul').slideDown();
            $element.siblings('li').removeClass('open').find('li').removeClass('open');
            $element.siblings('li').find('ul').slideUp();
        }
    });

    // Append holder span to top-level sub-menu links
    jQuery('.duru-menu > ul > li.duru-menu-sub > a').append('<span class="holder"></span>');

    // Sections background image from data-background
    jQuery(".bg-img, section").each(function () {
        var $this = jQuery(this);
        var bg = $this.data("background");
        if (bg) {
            $this.css("background-image", "url(" + bg + ")");
        }
    });

    // YouTube PopUp
    if (jQuery.fn.YouTubePopUp) {
        jQuery("a.vid").YouTubePopUp();
    }
});

jQuery(document).ready(function () {
    // Ensure images are loaded before initializing Isotope
    var $projectsItems = jQuery('.projects2-items');

    if ($projectsItems.length && jQuery.fn.imagesLoaded && jQuery.fn.isotope) {
        $projectsItems.imagesLoaded(function () {
            $projectsItems.isotope({
                itemSelector: '.single-item',
                layoutMode: 'masonry'
            });

            // Filter on click
            jQuery('.projects2-filter li').on('click', function (e) {
                e.preventDefault();
                var $this = jQuery(this);
                jQuery('.projects2-filter li').removeClass('active');
                $this.addClass('active');

                var selector = $this.data('filter');
                $projectsItems.isotope({
                    filter: selector,
                    transitionDuration: '0.75s'
                });
            });
        });
    }
});

jQuery(document).ready(function () {
    // Animations on scroll
    var contentWayPoint = function () {
        var i = 0;

        if (jQuery.fn.waypoint) {
            jQuery('.animate-box').waypoint(function (direction) {
                var $el = jQuery(this.element);

                if (direction === 'down' && !$el.hasClass('animated')) {
                    i++;
                    $el.addClass('item-animate');

                    setTimeout(function () {
                        jQuery('body .animate-box.item-animate').each(function (k) {
                            var $el = jQuery(this);
                            setTimeout(function () {
                                var effect = $el.data('animate-effect');
                                switch (effect) {
                                    case 'fadeIn':
                                        $el.addClass('fadeIn animated');
                                        break;
                                    case 'fadeInLeft':
                                        $el.addClass('fadeInLeft animated');
                                        break;
                                    case 'fadeInRight':
                                        $el.addClass('fadeInRight animated');
                                        break;
                                    default:
                                        $el.addClass('fadeInUp animated');
                                        break;
                                }
                                $el.removeClass('item-animate');
                            }, k * 200);
                        });
                    }, 100);
                }
            }, { offset: '85%' });
        }
    };

    contentWayPoint();
});

jQuery(document).ready(function () {
    // Accordion Box (for FAQs)
    var $accordionBoxes = jQuery(".accordion-box");

    if ($accordionBoxes.length) {
        $accordionBoxes.on("click", ".acc-btn", function () {
            var $btn = jQuery(this);
            var $outerBox = $btn.closest(".accordion-box");
            var $target = $btn.closest(".accordion");
            var $content = $btn.next(".acc-content");

            if ($content.is(":visible")) {
                $btn.removeClass("active");
                $content.slideUp(300);
                $target.removeClass("active-block");
            } else {
                $outerBox.find(".accordion .acc-btn").removeClass("active");
                $outerBox.find(".accordion .acc-content").slideUp(300);
                $outerBox.find(".accordion").removeClass("active-block");

                $btn.addClass("active");
                $content.slideDown(300);
                $target.addClass("active-block");
            }
        });
    }
});

jQuery(document).ready(function () {
    // MagnificPopup - Image
    if (jQuery.fn.magnificPopup) {
        jQuery(".img-zoom").magnificPopup({
            type: "image",
            closeOnContentClick: true,
            mainClass: "mfp-fade",
            gallery: {
                enabled: true,
                navigateByImgClick: true,
                preload: [0, 1]
            }
        });

        // MagnificPopup - Video
        jQuery('.magnific-youtube, .magnific-vimeo, .magnific-custom').magnificPopup({
            disableOn: 700,
            type: 'iframe',
            mainClass: 'mfp-fade',
            removalDelay: 300,
            preloader: false,
            fixedContentPos: false
        });
    }

    // Owl Carousel - Slider
    if (jQuery.fn.owlCarousel) {
        var $slider = jQuery('.slider .owl-carousel');
        var $sliderFade = jQuery('.slider-fade .owl-carousel');

        $slider.owlCarousel({
            items: 1,
            loop: true,
            dots: false,
            margin: 0,
            autoplay: true,
            autoplayTimeout: 5000,
            nav: true,
            navText: [
                '<i class="ti-angle-left" aria-hidden="true"></i>',
                '<i class="ti-angle-right" aria-hidden="true"></i>'
            ]
        });

        $sliderFade.owlCarousel({
            items: 1,
            loop: true,
            dots: false,
            margin: 0,
            autoplay: true,
            autoplayTimeout: 5000,
            animateOut: 'fadeOut',
            nav: true,
            navText: [
                '<i class="ti-angle-left" aria-hidden="true"></i>',
                '<i class="ti-angle-right" aria-hidden="true"></i>'
            ],
            mouseDrag: false,
            onInitialized: function () {
                var total = this.items().length;
                jQuery("#snh-1").html(`<span>01</span><span>0${total}</span>`);
                var percentage = Math.round(100 / total);
                jQuery('.slider__progress span').css("width", percentage + "%");
            }
        });

        $sliderFade.on('changed.owl.carousel', function (e) {
            var currentIndex = e.item.index;
            var total = e.item.count;
            var adjustedIndex = (currentIndex - 1) % total;
            if (adjustedIndex < 0) adjustedIndex += total;
            var display = (adjustedIndex + 1).toString().padStart(2, '0');

            jQuery("#snh-1").html(`<span>${display}</span><span>0${total}</span>`);

            var percentage = Math.round((100 / e.page.count) * (e.page.index + 1));
            jQuery('.slider__progress span').css("width", percentage + "%");

            var $currentItem = jQuery('.owl-item').not('.cloned').eq(adjustedIndex);
            var animatedSelectors = [
                'h4', 'h1', 'p',
                '.button-light', '.button-light2',
                '.button-dark', '.button-dark2'
            ];

            jQuery('.owl-item').find(animatedSelectors.join(',')).removeClass('animated fadeInUp');
            $currentItem.find(animatedSelectors.join(',')).addClass('animated fadeInUp');
        });
    }
});

jQuery(document).ready(function () {
    if (jQuery.fn.owlCarousel) {
        var carouselSettings = [
            {
                selector: '.hero .owl-carousel',
                options: {
                    loop: true,
                    margin: 30,
                    mouseDrag: true,
                    autoplay: false,
                    dots: true,
                    nav: false,
                    responsiveClass: true,
                    responsive: {0:{items:1},600:{items:1},1000:{items:1}}
                }
            },
            {
                selector: '.rooms2 .owl-carousel',
                options: {
                    loop: true,
                    margin: 30,
                    mouseDrag: true,
                    autoplay: false,
                    dots: true,
                    autoplayHoverPause: true,
                    nav: false,
                    responsiveClass: true,
                    responsive: {0:{items:1},600:{items:2},1000:{items:3}}
                }
            },
            {
                selector: '.projects .owl-carousel',
                options: {
                    loop: true,
                    margin: 20,
                    mouseDrag: true,
                    autoplay: false,
                    dots: true,
                    nav: false,
                    autoplayHoverPause: true,
                    responsiveClass: true,
                    responsive: {0:{items:1},600:{items:2},1000:{items:3}}
                }
            },
            {
                selector: '.project-page .owl-carousel',
                options: {
                    loop: true,
                    margin: 30,
                    mouseDrag: true,
                    autoplay: false,
                    dots: false,
                    nav: true,
                    navText: ['<i class="ti-angle-left"></i>','<i class="ti-angle-right"></i>'],
                    responsiveClass: true,
                    responsive: {0:{items:1},600:{items:1},1000:{items:1}}
                }
            },
            {
                selector: '.services .owl-carousel',
                options: {
                    loop: true,
                    margin: 20,
                    mouseDrag: true,
                    autoplay: false,
                    dots: true,
                    nav: false,
                    autoplayHoverPause: true,
                    responsiveClass: true,
                    responsive: {0:{items:1},600:{items:2},1000:{items:3}}
                }
            },
            {
                selector: '.blog-home .owl-carousel',
                options: {
                    loop: true,
                    margin: 20,
                    mouseDrag: true,
                    autoplay: false,
                    dots: true,
                    nav: false,
                    autoplayHoverPause: true,
                    responsiveClass: true,
                    responsive: {0:{items:1},600:{items:2},1000:{items:3}}
                }
            },
            {
                selector: '.team .owl-carousel',
                options: {
                    loop: true,
                    margin: 20,
                    mouseDrag: true,
                    autoplay: false,
                    dots: true,
                    nav: false,
                    autoplayHoverPause: true,
                    responsiveClass: true,
                    responsive: {0:{items:1},600:{items:2},1000:{items:3}}
                }
            },
            {
                selector: '.testimonials .owl-carousel',
                options: {
                    loop: true,
                    margin: 20,
                    mouseDrag: true,
                    autoplay: true,
                    dots: false,
                    nav: false,
                    autoplayHoverPause: true,
                    responsiveClass: true,
                    responsive: {0:{items:1},600:{items:1},1000:{items:1}}
                }
            }
        ];

        carouselSettings.forEach(function(carousel) {
            jQuery(carousel.selector).owlCarousel(carousel.options);
        });
    }
});

jQuery(document).ready(function () {
    var $form = jQuery('.contact__form');
    var $message = jQuery('.contact__msg');

    function doneFunc(response) {
        $message.fadeIn().removeClass('alert-danger').addClass('alert-success').text(response);
        setTimeout(function() {
            $message.fadeOut();
        }, 2000);
        $form.find('input:not([type="submit"]), textarea').val('');
    }

    function failFunc(xhr) {
        $message.fadeIn().removeClass('alert-success').addClass('alert-danger').text(xhr.responseText);
        setTimeout(function() {
            $message.fadeOut();
        }, 2000);
    }

    $form.on('submit', function (e) {
        e.preventDefault();
        var formData = jQuery(this).serialize();
        jQuery.ajax({
            type: 'POST',
            url: $form.attr('action'),
            data: formData
        })
        .done(doneFunc)
        .fail(failFunc);
    });
});

jQuery(document).ready(function () {
    // Scroll back to top
    var $progressWrap = jQuery('.progress-wrap');
    var progressPath = document.querySelector('.progress-wrap path');

    if (progressPath) {
        var pathLength = progressPath.getTotalLength();

        progressPath.style.transition = progressPath.style.WebkitTransition = 'none';
        progressPath.style.strokeDasharray = pathLength + ' ' + pathLength;
        progressPath.style.strokeDashoffset = pathLength;
        progressPath.getBoundingClientRect();
        progressPath.style.transition = progressPath.style.WebkitTransition = 'stroke-dashoffset 10ms linear';

        var updateProgress = function () {
            var scroll = jQuery(window).scrollTop();
            var height = jQuery(document).height() - jQuery(window).height();
            var progress = pathLength - (scroll * pathLength / height);
            progressPath.style.strokeDashoffset = progress;
        };

        updateProgress();
        jQuery(window).on('scroll', updateProgress);
    }

    var offset = 150;
    var duration = 550;

    jQuery(window).on('scroll', function () {
        if (jQuery(this).scrollTop() > offset) {
            $progressWrap.addClass('active-progress');
        } else {
            $progressWrap.removeClass('active-progress');
        }
    });

    $progressWrap.on('click', function (e) {
        e.preventDefault();
        jQuery('html, body').animate({ scrollTop: 0 }, duration);
    });
});

jQuery(document).ready(function () {
    // Quantity buttons handler
    jQuery(document).on('click', '.qty-minus, .qty-plus', function (e) {
        e.preventDefault();

        var $button = jQuery(this);
        var $input = $button.closest('.quantity').find('.qty');
        var currentVal = parseFloat($input.val()) || 0;
        var step = parseFloat($input.attr('step')) || 1;
        var min = parseFloat($input.attr('min')) || 0;
        var max = parseFloat($input.attr('max')) || Infinity;
        var newVal;

        if ($button.hasClass('qty-minus')) {
            newVal = Math.max(currentVal - step, min);
        } else if ($button.hasClass('qty-plus')) {
            newVal = Math.min(currentVal + step, max);
        }

        $input.val(newVal);
        $input.trigger('change').trigger('input');
    });
});

jQuery(document).ready(function () {
    // Initialize Swiper gallery only if both main and thumbs exist
    var $galleryMain = jQuery('.gallery-main');
    var $galleryThumbs = jQuery('.gallery-thumbs');

    if ($galleryMain.length && $galleryThumbs.length && typeof Swiper !== 'undefined') {
        var galleryThumbs = new Swiper('.gallery-thumbs', {
            spaceBetween: 10,
            slidesPerView: 4,
            freeMode: true,
            watchSlidesProgress: true,
            loop: true,
            loopedSlides: $galleryThumbs.find('.swiper-slide').length
        });

        var galleryMain = new Swiper('.gallery-main', {
            spaceBetween: 10,
            loop: true,
            loopedSlides: $galleryMain.find('.swiper-slide').length,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev'
            },
            thumbs: {
                swiper: galleryThumbs
            }
        });

        jQuery(window).on('load', function () {
            galleryMain.update();
            galleryThumbs.update();
        });
    }
});

jQuery(document).ready(function () {
    // Pre-initialize all modals
    jQuery('.modal').each(function () {
        var $modal = jQuery(this);
        $modal.modal({ show: false });
        $modal.data('modal-initialized', true);
    });

    jQuery(document).on('click', '.icon-btn', function (e) {
        e.preventDefault();

        var $btn = jQuery(this);
        var targetSelector = $btn.data('target');
        var $modal = jQuery(targetSelector);

        if (!$modal.length) return;

        if (!$modal.data('modal-initialized')) {
            $modal.modal({ show: false });
            $modal.data('modal-initialized', true);
        }

        var mainSliderEl = $modal.find('.product-main-slider')[0];
        var thumbSliderEl = $modal.find('.product-thumbnail-slider')[0];

        if (!mainSliderEl || !thumbSliderEl) {
            setTimeout(function() { $modal.modal('show'); }, 50);
            return;
        }

        var mainSwiper = $modal.data('mainSwiper');
        var thumbSwiper = $modal.data('thumbSwiper');

        var showModal = function () { setTimeout(function() { $modal.modal('show'); }, 50); };

        if (!mainSwiper || !thumbSwiper) {
            thumbSwiper = new Swiper(thumbSliderEl, {
                loop: true,
                spaceBetween: 10,
                slidesPerView: 4,
                freeMode: true,
                watchSlidesVisibility: true,
                watchSlidesProgress: true
            });
            $modal.data('thumbSwiper', thumbSwiper);

            mainSwiper = new Swiper(mainSliderEl, {
                loop: true,
                spaceBetween: 10,
                navigation: {
                    nextEl: mainSliderEl.querySelector('.swiper-button-next'),
                    prevEl: mainSliderEl.querySelector('.swiper-button-prev')
                },
                pagination: {
                    el: mainSliderEl.querySelector('.swiper-pagination'),
                    clickable: true
                },
                thumbs: {
                    swiper: thumbSwiper
                }
            });
            $modal.data('mainSwiper', mainSwiper);

            showModal();
        } else {
            try {
                mainSwiper.update();
                thumbSwiper.update();
            } catch (err) {
                console.warn('Swiper update failed:', err);
            }
            showModal();
        }
    });

    jQuery(document).on('click', '[data-dismiss="modal"]', function () {
        jQuery(this).closest('.modal').modal('hide');
    });
});

jQuery(document).ready(function () {
    var $title = jQuery('.woocommerce-products-header__title');

    if ($title.length) {
        var words = $title.text().split(' ');
        if (words.length >= 2) {
            words[1] = `<span class="highlight">${words[1]}</span>`;
            $title.html(words.join(' '));
        }
    }
});

/* ======= Sidebar Menu ======= */

(function ($) {
	
    'use strict';
	

// > Nav submenu show hide on mobile by = custom.js
	 function mobile_nav(){
		jQuery(".sub-menu").parent('li').addClass('has-child');
		jQuery(".mega-menu").parent('li').addClass('has-child');
		jQuery("<div class='fa fa-chevron-right submenu-toogle submenu-toogle'></div>").insertAfter(".has-child > a");
		jQuery('.has-child a+.submenu-toogle').on('click',function(ev) {
			jQuery(this).next(jQuery('.sub-menu')).slideToggle('fast', function(){
				jQuery(this).parent().toggleClass('nav-active');
			});
			ev.stopPropagation();
		});
		
		  jQuery('.has-child').on('click',function(ev) {
		   jQuery(this).find(jQuery('.sub-menu')).slideToggle('fast', function(){
			jQuery(this).parent().toggleClass('nav-active');
		   });
		  });
		
	 }

// >Vertical Nav submenu show hide on mobile by = custom.js
 function vertical_nav(){
//		jQuery(".v-sub-menu").parent('li').addClass('has-child');
//		jQuery("<div class='fa fa-chevron-right submenu-toogle submenu-toogle'></div>").insertAfter(".has-child > a");
//		jQuery('.has-child a+.submenu-toogle').click(function(ev) {
//			jQuery(this).next(jQuery('.v-sub-menu')).slideToggle('fast', function(){
//				jQuery(this).parent().toggleClass('nav-active');
//			});
//			ev.stopPropagation();
//		});
 }


	jQuery(document).ready(function() {				
		mobile_nav(),
		// >Vertical Nav submenu show hide on mobile by = custom.js
	    vertical_nav()
	}); 

//=== Switcher panal slide function END	=====================//

})(window.jQuery);


(function ($) {
  'use strict';

  $(function () {

    /*-------------------------------------------------------------------------------
      Projects grid
    -------------------------------------------------------------------------------*/

    function columnGrid() {
      $('.js-grid-items').each(function () {

        var colWrap = $(this).width();
        if (!colWrap) return;

        var colItem = Math.max(1, Math.floor(colWrap / 390));
        var colFixedItem = Math.floor(colWrap / colItem);

        $(this).find('.js-grid-item').css({
          width: colFixedItem
        });
      });
    }

    columnGrid();
    $(window).on('resize', columnGrid);

    /*-------------------------------------------------------------------------------
      Hide project info
    -------------------------------------------------------------------------------*/

    $('.project-detail-control').on('click', function () {
      $(this).toggleClass('active');
      $(this)
        .closest('.project-detail-info')
        .find('.project-detail-content')
        .slideToggle(200);
    });

    /*-------------------------------------------------------------------------------
      Owl Carousel (Requires Owl Carousel 2)
    -------------------------------------------------------------------------------*/

    if ($.fn.owlCarousel) {

      $(".js-partners-carousel").owlCarousel({
        dots: true,
        autoHeight: true,
        responsive: {
          0: { items: 1 },
          768: { items: 2 },
          1200: { items: 5 }
        }
      });

      $(".js-client-carousel").owlCarousel({
        dots: true,
        autoHeight: true,
        responsive: {
          0: { items: 1 },
          1200: { items: 2 }
        }
      });

      $('.project-carousel').owlCarousel({
        dots: true,
        margin: 30,
        smartSpeed: 250,
        responsiveRefreshRate: 0,
        responsive: {
          0: { items: 1 },
          768: { items: 2 },
          1200: { items: 3 },
          1600: { items: 4 }
        }
      });

      $('.client-carousel').owlCarousel({
        margin: 30,
        smartSpeed: 250,
        nav: true,
        navText: [],
        dots: false,
        autoHeight: true,
        responsiveRefreshRate: 0,
        responsive: {
          0: { items: 1 },
          992: { items: 2 }
        }
      });

      $('.partner-carousel').owlCarousel({
        margin: 30,
        smartSpeed: 250,
        dots: true,
        responsiveRefreshRate: 0,
        responsive: {
          0: { items: 2 },
          768: { items: 3 },
          992: { items: 4 },
          1200: { items: 5 }
        }
      });

      $('.news-carousel').owlCarousel({
        margin: 30,
        smartSpeed: 250,
        dots: true,
        responsiveRefreshRate: 0,
        responsive: {
          0: { items: 1 },
          720: { items: 2 },
          1280: { items: 3 }
        }
      });

      $(".review-carousel").owlCarousel({
        responsiveRefreshRate: 0,
        nav: true,
        navText: [],
        animateIn: 'fadeIn',
        dots: false,
        responsive: {
          0: { items: 1 }
        }
      });

    }

    /*-------------------------------------------------------------------------------
      Isotope Masonry (Requires Isotope + imagesLoaded)
    -------------------------------------------------------------------------------*/

    if ($.fn.isotope) {

      $('.js-isotope').each(function () {

        var $container = $(this);

        if ($.fn.imagesLoaded) {
          $container.imagesLoaded(function () {
            $container.isotope({
              itemSelector: '.js-isotope-item',
              percentPosition: true,
              layoutMode: 'masonry',
              masonry: {
                columnWidth: '.js-isotope-item'
              }
            });
          });
        }
      });

    }

    /*-------------------------------------------------------------------------------
      Sly Carousel
    -------------------------------------------------------------------------------*/

    if ($.fn.sly) {

      var $frame = $('.sly');

      if ($frame.length) {

        var $wrap = $frame.parent();

        $frame.sly({
          horizontal: 1,
          itemNav: 'basic',
          smart: 1,
          activateOn: 'click',
          mouseDragging: 1,
          touchDragging: 1,
          releaseSwing: 1,
          startAt: 0,
          scrollBar: $wrap.find('.scrollbar'),
          speed: 1000,
          elasticBounds: 2,
          dragHandle: 2,
          dynamicHandle: 1,
          clickBar: 0,
          prevPage: $wrap.find('.prev'),
          nextPage: $wrap.find('.next')
        });

        $(window).on('resize', function () {
          $frame.sly('reload');
        });
      }
    }

    /*-------------------------------------------------------------------------------
      Filter (Isotope)
    -------------------------------------------------------------------------------*/

    $('.js-filter li a').on('click', function (e) {
      e.preventDefault();

      $('.js-filter .active').removeClass('active');
      $(this).closest('li').addClass('active');

      var selector = $(this).attr('data-filter');

      if ($.fn.isotope) {
        $('.js-isotope').isotope({
          filter: selector,
          animationOptions: {
            duration: 500,
            queue: false
          }
        });
      }
    });

    /*-------------------------------------------------------------------------------
      Project hover background switch
    -------------------------------------------------------------------------------*/

    $('.project-box').on('mouseenter', function () {
      var index = $('.project-box').index(this);
      $('.bg-changer .section-bg')
        .removeClass('active')
        .eq(index)
        .addClass('active');
    });

  });

})(jQuery);


 /*-------------------------------------------------------------------------------
      Script FOR news, portfolio and revslider etc
    -------------------------------------------------------------------------------*/
( function($) {
  'use strict';

	/*-------------------------------------------------------------------------------
	  Owl Carousel
	-------------------------------------------------------------------------------*/


	if ($('.owl-carousel').length > 0){



		/*-------------------------------------------------------------------------------
		  Partners Carousel
		-------------------------------------------------------------------------------*/



		$(".js-partners-carousel").owlCarousel({
			items : 5,
		    itemsDesktop : [1199,3],
		    itemsDesktopSmall : [980,2],
		    itemsTablet: [768,1],
		    itemsMobile : [479,1],
		    pagination:true,
		 	autoHeight : true
		});



		/*-------------------------------------------------------------------------------
		  Clients Carousel
		-------------------------------------------------------------------------------*/



		$(".js-client-carousel").owlCarousel({
			items : 2,
		    itemsDesktop : [1199,1],
		    itemsDesktopSmall : [980,1],
		    itemsTablet: [768,1],
		    itemsMobile : [479,1], 
		    pagination:true,
		 	autoHeight : true

		});

		/*-------------------------------------------------------------------------------
		  Project Carousel
		-------------------------------------------------------------------------------*/



	   $('.project-carousel').owlCarousel({
		    dots:true,
		    margin:30,
		    smartSpeed:250,
		    responsiveRefreshRate:0,
		    responsive:{
		        0:{
		            items:1
		        },
		        768:{
		            items:2
		        },
		        1200:{
		            items:3
		        },
		        1600:{
		            items:4
		        }
		    }
		});


		/*-------------------------------------------------------------------------------
		  Client Carousel
		-------------------------------------------------------------------------------*/



	    $('.client-carousel').owlCarousel({
		    margin:30,
		    smartSpeed:250,
		    nav:true,
		    navText:[],
		    dots:false,
		    autoHeight: true,
		    responsiveRefreshRate:0,
		    responsive:{
		        0:{
		            items:1
		        },
		        768:{
		            items:1
		        },
		        992:{
		        	items:2
		        },
		        1200:{
		            items:2
		        }
		    }
		});



		/*-------------------------------------------------------------------------------
		  Partner Carousel
		-------------------------------------------------------------------------------*/


		  
	   $('.partner-carousel').owlCarousel({
		    margin:30,
		    smartSpeed:250,
		    dots:true,
		    responsiveRefreshRate:0,
		    responsive:{
		        0:{
		            items:2
		        },
		        768:{
		            items:3
		        },
		        992:{
		        	items:4
		        },
		        1200:{
		        	items:5
		        }
		    }
		});

	    /*-------------------------------------------------------------------------------
		  News Carousel
		-------------------------------------------------------------------------------*/

	   $('.news-carousel').owlCarousel({
		    margin:30,
		    smartSpeed:250,
		    dots:true,
		    responsiveRefreshRate:0,
		    responsive:{
		       0:{
		            items:1
		        },
		        720:{
		            items:2,
		            
		        },
		        1280:{
		            items:3
		        }
		    }
		});

	   $(".review-carousel").owlCarousel({
			responsive:{
		       0:{
		            items:1
		        },
		        720:{
		            items:1,
		            
		        },
		        1280:{
		            items:1
		        }
		    },
		    responsiveRefreshRate:0,
			nav:true,
			navText:[],
			animateIn: 'fadeIn',
		 	dots:false
		});

	}


	/*-------------------------------------------------------------------------------
	  Projects masonry
	-------------------------------------------------------------------------------*/



	 var $container=$('.js-isotope').each(function() {		
		var $container = $(this);
		$container.imagesLoaded( function(){
			$container.isotope({		 
				itemSelector: '.js-isotope-item',
				percentPosition: true,
				layoutMode: 'masonry',	
				masonry: {
				  columnWidth: '.js-isotope-item'
				}	
			});	
		});
    }); 



	/*-------------------------------------------------------------------------------
	  Project Sly Carousel
	-------------------------------------------------------------------------------*/

	var $frame  = $('.sly');
		var $slidee = $frame.children('ul').eq(0);
		var $wrap   = $frame.parent();

		if ($frame.length > 0){
			$frame.sly({
				horizontal: 1,
				itemNav: 'basic',
				smart: 1,
				activateOn: 'click',
				mouseDragging: 1,
				touchDragging: 1,
				releaseSwing: 1,
				startAt: 0,
				scrollBar: $wrap.find('.scrollbar'),
				scrollBy: 0,
				activatePageOn: 'click',
				speed: 1000,
				elasticBounds: 2,
				dragHandle: 2,
				dynamicHandle: 1,
				clickBar: 0,

				// Buttons
				prevPage: $wrap.find('.prev'),
				nextPage: $wrap.find('.next')
			});

			$(window).resize(function(){
				$frame.sly('reload');
			});
		}

	/*-------------------------------------------------------------------------------
	  Filter
	-------------------------------------------------------------------------------*/



	$('.js-filter li a').on('click', function() {
		$('.js-filter .active').removeClass('active');
		$(this).closest('li').addClass('active');
		var selector = $(this).attr('data-filter');
		$('.js-isotope').isotope({
			filter: selector,
			animationOptions: {
				duration: 500,
				queue: false
			}
		});
		return false;
	});



   /*-------------------------------------------------------------------------------
	  Filter Carousel 
	-------------------------------------------------------------------------------*/
	$('.js-filter-carousel li a').on('click', function() {
		$('.js-filter-carousel .active').removeClass('active');
		$(this).closest('li').addClass('active');
		var selector = $(this).attr('data-filter');
		$('.project-carousel').fadeOut(300);
		$('.project-carousel').fadeIn(300);
		setTimeout(function(){
			$('.project-carousel .owl-item').hide();
			$(selector).closest('.project-carousel .owl-item').show();
		}, 300);
		return false;
	});

})(jQuery);
