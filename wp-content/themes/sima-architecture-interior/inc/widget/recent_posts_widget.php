<?php
// Custom Recent Posts Widget for Ello Lite Photography theme
class Sima_Architecture_Interior_Custom_Recent_Posts_Widget extends WP_Widget_Recent_Posts {

    function widget($args, $instance) {
        $title = (!empty($instance['title'])) ? $instance['title'] : __('Recent Posts', 'sima-architecture-interior');
        $title = apply_filters('widget_title', $title, $instance, $this->id_base);

        $query_args = array(
            'posts_per_page'      => (!empty($instance['number'])) ? absint($instance['number']) : 5,
            'post_status'         => 'publish',
            'ignore_sticky_posts' => true
        );

        $recent_posts = new WP_Query($query_args);

        if ($recent_posts->have_posts()) :
            echo $args['before_widget'];
            if ($title) {
                echo $args['before_title'] . $title . $args['after_title'];
            }
            echo '<ul>';
            while ($recent_posts->have_posts()) : $recent_posts->the_post();
                echo '<li>';
                // Display post thumbnail if it exists
				if (has_post_thumbnail()) {
                    echo '<div class="thum">';
                    the_post_thumbnail('thumbnail');
                    echo '</div><a href="' . get_permalink() . '">';
                }
                // Display the post title
                echo '<a href="' . esc_url(get_permalink()) . '">' . esc_html(get_the_title()) . '</a>';
                echo '</li>';
            endwhile;
            echo '</ul>';
            echo $args['after_widget'];
            wp_reset_postdata();
        endif;
    }
}

// Register the Custom Recent Posts Widget for Ello Lite Photography
function sima_architecture_interior_register_custom_recent_posts_widget() {
    unregister_widget('WP_Widget_Recent_Posts');  // Unregister the default widget
    register_widget('Sima_Architecture_Interior_Custom_Recent_Posts_Widget'); // Register the custom widget
}
add_action('widgets_init', 'sima_architecture_interior_register_custom_recent_posts_widget');
?>