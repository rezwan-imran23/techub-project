<?php

// Custom Categories Widget with Dynamic Number of Categories Option
class Custom_Categories_Widget extends WP_Widget {

    function __construct() {
        parent::__construct(
            'custom_categories_widget', // Base ID
            esc_html__('Custom Categories with Post Count', 'text_domain'), // Name
            array('description' => esc_html__('Displays categories with custom markup and post counts', 'text_domain'),)
        );
    }

    // Displaying the widget on the front-end
    public function widget($args, $instance) {
        echo $args['before_widget'];

        // Check if title is set
        if (!empty($instance['title'])) {
            echo $args['before_title'] . apply_filters('widget_title', $instance['title']) . $args['after_title'];
        }

        // Number of categories to display (default to 5 if not set)
        $num_categories = !empty($instance['num_categories']) ? absint($instance['num_categories']) : 5;

        // Fetch categories with limit
        $categories = get_categories(array(
            'orderby' => 'name',
            'order'   => 'ASC',
            'number'  => $num_categories, // Dynamic number of categories to display
            'hide_empty' => 0, // Show categories even if they have no posts
        ));

        if (!empty($categories)) {
            echo '<div class="sidebar__widget-content">';
            echo '<ul>';

            foreach ($categories as $category) {
                $category_link = get_category_link($category->term_id);
                $category_name = $category->name;
                $post_count = $category->count;
                ?>
                <li>
                    <a href="<?php echo esc_url($category_link); ?>">
                        <?php echo esc_html($category_name); ?>
                        <span><i class="fa-sharp fa-solid fa-arrow-right"></i></span>
                    </a>
                </li>
                <?php
            }

            echo '</ul>';
            echo '</div>';
        }

        echo $args['after_widget'];
    }

    // Widget Backend Form
    public function form($instance) {
        $title = !empty($instance['title']) ? $instance['title'] : esc_html__('Categories', 'text_domain');
        $num_categories = !empty($instance['num_categories']) ? absint($instance['num_categories']) : 5;
        ?>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php esc_attr_e('Title:', 'text_domain'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" type="text" value="<?php echo esc_attr($title); ?>">
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('num_categories')); ?>"><?php esc_attr_e('Number of Categories to Display:', 'text_domain'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('num_categories')); ?>" name="<?php echo esc_attr($this->get_field_name('num_categories')); ?>" type="number" value="<?php echo esc_attr($num_categories); ?>" min="1">
        </p>
        <?php
    }

    // Updating widget instance
    public function update($new_instance, $old_instance) {
        $instance = array();
        $instance['title'] = (!empty($new_instance['title'])) ? sanitize_text_field($new_instance['title']) : '';
        $instance['num_categories'] = (!empty($new_instance['num_categories'])) ? absint($new_instance['num_categories']) : 5;
        return $instance;
    }
}

// Register the widget
function register_custom_categories_widget() {
    register_widget('Custom_Categories_Widget');
}
add_action('widgets_init', 'register_custom_categories_widget');

?>