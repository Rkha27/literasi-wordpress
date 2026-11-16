/**
 * Navigation Menu JS
 * Handles sticky header, smooth scroll, and mobile menu enhancements.
 */
jQuery(document).ready(function ($) {
    'use strict';

    const $header = $('header');
    const $window = $(window);

    // Sticky Header
    $window.on('scroll', function () {
        const currentScroll = $window.scrollTop();
        if (currentScroll > 50) {
            $header.addClass('sticky-header');
        } else {
            $header.removeClass('sticky-header');
        }
    });

    // Smooth Scroll for Hash Links
    $(document).on('click', 'a[href*="#"]', function (e) {
        const href = $(this).attr('href');
        const hash = this.hash;

        // If it's just a # or doesn't exist, return
        if (!hash || hash === '#') return;

        const $target = $(hash);
        if ($target.length) {
            e.preventDefault();

            // Handle active class
            $('.wp-block-navigation .wp-block-navigation-item a').removeClass('active');
            $(this).addClass('active');

            const headerHeight = $header.outerHeight() || 0;
            const targetTop = $target.offset().top - headerHeight;

            $('html, body').animate({ scrollTop: targetTop }, 400);

            // Close mobile menu if open
            if ($('.wp-block-navigation__responsive-container').hasClass('has-modal-open')) {
                $('.wp-block-navigation__responsive-container-close').click();
            }
        }
    });

    // Active Link Tracking on Scroll
    const $sections = $('.wp-block-group[id], section[id]');
    const $navLinks = $('.wp-block-navigation a[href*="#"]');
    let lastActiveSectionId = '';

    $window.on('scroll', function () {
        const scrollTop = $window.scrollTop();
        const headerHeight = $header.outerHeight() || 0;
        let activeSectionId = '';

        $sections.each(function () {
            const $section = $(this);
            const sectionTop = $section.offset().top - (headerHeight + 50); // Added extra buffer
            const sectionHeight = $section.outerHeight();
            const sectionId = $section.attr('id');

            if (scrollTop >= sectionTop && scrollTop < (sectionTop + sectionHeight)) {
                activeSectionId = sectionId;
            }
        });

        // Only update if the active section has changed
        if (activeSectionId !== lastActiveSectionId) {
            lastActiveSectionId = activeSectionId;
            $navLinks.removeClass('active');

            if (activeSectionId) {
                $(`.wp-block-navigation a[href*="#${activeSectionId}"]`).addClass('active');

                // Update URL silent hash
                if (window.history.replaceState) {
                    window.history.replaceState(null, null, '#' + activeSectionId);
                }
            } else {
                // Clear the hash if we're at the top (no active section)
                if (window.history.replaceState) {
                    window.history.replaceState(null, null, window.location.pathname + window.location.search);
                }
            }
        }
    });

    // Mobile Menu Enhancements
    function enhanceMobileMenu() {
        const $nav = $('.wp-block-navigation');
        const $logo = $('.wp-block-site-logo').first();
        const $dialog = $('.wp-block-navigation__responsive-dialog');

        // Check if logo is already in dialog to avoid duplicates
        if ($dialog.length && $logo.length && !$dialog.find('.cloned-logo').length) {
            const $clone = $logo.clone().addClass('cloned-logo');
            $dialog.prepend($clone);
        }

        // Move buttons if they exist in a specific container
        const $headerButtons = $header.find('.wp-block-buttons').first();
        const $mobileContainer = $('.wp-block-navigation__responsive-container-content');
        if ($headerButtons.length && $mobileContainer.length && !$mobileContainer.find('.cloned-buttons').length) {
            const $btnClone = $headerButtons.clone().addClass('cloned-buttons');
            $mobileContainer.append($btnClone);
        }
    }

    // Since the mobile menu might be dynamic, we listen for the toggle click
    $(document).on('click', '.wp-block-navigation__responsive-container-open', function () {
        // Wait a bit for the modal to be initialized
        setTimeout(enhanceMobileMenu, 50);
    });

    // Also run on Load in case it's already structured (some themes pre-render)
    enhanceMobileMenu();
});
