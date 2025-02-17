<?php get_header(); ?>

<ul class="m-gallery">
    <?php
    $args = array(
        'post_type' => 'work', // Replace with your actual post type slug
        'posts_per_page' => 18, // Number of posts to display
        'orderby' => 'date', // Order by date
        'order' => 'DESC', // Descending order
    );

    $query = new WP_Query($args);

    if ($query->have_posts()) {
        while ($query->have_posts()) {
            $query->the_post();
    ?>
            <?php get_template_part('/template-parts/gallery-thumb', get_post_format()); ?>
    <?php
        }
    } else {
        // No posts found
    }

    wp_reset_postdata(); // Reset the post data
    ?>
</ul>

<?php get_footer(); ?>