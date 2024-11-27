<?php

get_header(); ?>


<h2> Page <?php the_title(); ?> </h2>

<?php
$theCurrentId = get_the_ID();
$theParent = wp_get_post_parent_id($theCurrentId);

if ($theParent) {
    ?>
    <p>
        <a href=<?php the_permalink($theParent) ?>>Back to <?php echo get_the_title($theParent) ?> </a>
        <span> | <?php the_title() ?></span>
    </p>
<?php } ?>

<?php
if ($theParent) {
    $theChildrenOf = $theParent;
} else {
    $theChildrenOf = get_the_ID();
}


$theChildPages = get_pages(array(
    'child_of' => $theCurrentId,
));
if (!empty($theChildPages)) {

    if ($theParent) {
        echo get_the_title($theParent);
    } else {
        the_title();
    }
    wp_list_pages(array(
        'title_li' => NULL,
        'child_of' => $theCurrentId,
        'sort_column' => 'menu_order'
    ));
}
?>

<?php the_content(); ?>

<?php get_footer(); ?>