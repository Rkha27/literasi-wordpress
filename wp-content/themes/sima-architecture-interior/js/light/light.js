(function ($) {
    "use strict";

    // Logo & Menu scroll sticky
    $(window).on("scroll", function () {
        var $this = $(this),
            st = $this.scrollTop(),
            navbar = $('.duru-header'),
            logo = $(".duru-header .duru-logo> img");

        if (st > 150) {
            if (!navbar.hasClass('scrolled')) {
                navbar.addClass('scrolled');
            }
        }

        if (st < 150) {
            if (navbar.hasClass('scrolled')) {
                navbar.removeClass('scrolled sleep');
            }
        }

        if (st > 350) {
            if (!navbar.hasClass('awake')) {
                navbar.addClass('awake');
            }
        }

        if (st < 350) {
            if (navbar.hasClass('awake')) {
                navbar.removeClass('awake');
                navbar.addClass('sleep');
            }
        }
    });

})(jQuery);
