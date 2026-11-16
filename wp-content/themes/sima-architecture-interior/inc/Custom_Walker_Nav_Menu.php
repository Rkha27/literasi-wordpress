<?php

class Sima_Architecture_Interior_Custom_Walker_Nav_Menu extends Walker_Nav_Menu {

    /**
     * Start Submenu
     */
    function start_lvl(&$output, $depth = 0, $args = null) {

        $indent = str_repeat("\t", $depth);

        $submenu_class = ($depth > 0) ? 'submenu dropdown-menu' : 'dropdown-menu';

        $output .= "\n$indent<ul class=\"$submenu_class\">\n";
    }

    /**
     * Start Menu Item
     */
    function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {

        $indent = ($depth) ? str_repeat("\t", $depth) : '';

        $classes = empty($item->classes) ? array() : (array) $item->classes;

        $has_children = in_array('menu-item-has-children', $classes);

        /*
        |--------------------------------------------------------------------------
        | LI CLASSES
        |--------------------------------------------------------------------------
        */

        $li_classes = array('nav-item');

        if ($has_children) {
            $li_classes[] = 'dropdown';
        }

        // Active classes
        if (
            in_array('current-menu-item', $classes) ||
            in_array('current-menu-parent', $classes) ||
            in_array('current-menu-ancestor', $classes)
        ) {
            $li_classes[] = 'active';
        }

        // Keep original WP classes
        $li_classes = array_merge($li_classes, $classes);

        $class_names = implode(' ', array_unique($li_classes));

        $output .= $indent . '<li id="menu-item-' . $item->ID . '" class="' . esc_attr($class_names) . '">';

        /*
        |--------------------------------------------------------------------------
        | LINK ATTRIBUTES
        |--------------------------------------------------------------------------
        */

        $atts = array();

        $atts['title'] = !empty($item->attr_title)
            ? $item->attr_title
            : $item->title;

        $atts['href'] = !empty($item->url) ? $item->url : '';

        /*
        |--------------------------------------------------------------------------
        | LINK CLASSES
        |--------------------------------------------------------------------------
        */

        $link_classes = array();

        // Top level
        if ($depth === 0) {

            $link_classes[] = 'nav-link';

            if ($has_children) {

                $link_classes[] = 'dropdown-toggle';

                $atts['href'] = '#';
                $atts['data-bs-toggle'] = 'dropdown';
                $atts['aria-expanded'] = 'false';
                $atts['role'] = 'button';

            } else {

                $link_classes[] = 'page-scroll';
                $link_classes[] = 'link-underline-menu';
            }
        }

        // Submenu item
        if ($depth > 0) {
            $link_classes[] = 'dropdown-item';
        }

        $atts['class'] = implode(' ', $link_classes);

        /*
        |--------------------------------------------------------------------------
        | BUILD ATTRIBUTES
        |--------------------------------------------------------------------------
        */

        $attributes = '';

        foreach ($atts as $attr => $value) {

            if (!empty($value)) {

                $value = ($attr === 'href')
                    ? esc_url($value)
                    : esc_attr($value);

                $attributes .= ' ' . $attr . '="' . $value . '"';
            }
        }

        /*
        |--------------------------------------------------------------------------
        | OUTPUT
        |--------------------------------------------------------------------------
        */

        $item_output  = $args->before;

        $item_output .= '<a' . $attributes . '>';

        $item_output .= $args->link_before
            . apply_filters('the_title', $item->title, $item->ID);

        // Dropdown icon
        if ($has_children && $depth === 0) {
            $item_output .= ' <i class="ti-angle-down"></i>';
        }

        $item_output .= $args->link_after;

        $item_output .= '</a>';

        $item_output .= $args->after;

        $output .= $item_output;
    }

    /**
     * End Menu Item
     */
    function end_el(&$output, $item, $depth = 0, $args = null) {
        $output .= "</li>\n";
    }
}
?>