<?php get_header(); ?>
<!-- ==============  BEGGIN ================ -->




<!-- Page Content -->
<!-- Banner Starts Here -->
<?php get_template_part('content-banner'); ?>
<!-- Banner Ends Here -->

<!-- BLOG POST BEGGIN -->
<?php
if (is_home()) {
  get_template_part('content-blog');
} else {
  get_template_part('content-all');
}
?>
<!-- BLOG POST BEGGIN -->


<!-- ==============  END ================ -->
<?php get_footer(); ?>