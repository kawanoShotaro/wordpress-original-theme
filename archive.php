<?php get_header(); ?>

<?php
$parent_id = get_the_ID();
$args = array(
    'post_per_page' => -1,
    'post_type' =>'page',
    'orderby' => 'menu_order',
    'order' => 'ASC',
    'post_parent' => $parent_id,
);

$common_pages = new WP_Query($args);
if($common_pages->have_posts()):
    while($common_pages->have_posts()): $common_pages->the_post();
    ?>

    <p><?php the_title() ?></p>

    <?php 
    endwhile;
    wp_reset_postdata();
endif;
?>



<?php get_footer(); ?>