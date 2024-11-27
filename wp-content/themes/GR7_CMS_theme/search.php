<?php get_header(); ?>
<!-- ==============  BEGGIN ================ -->





<!-- Page Content -->
<!-- Banner Starts Here -->
<div class="heading-page header-text">
  <section class="page-heading">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="text-content">
            <h4>Searching: "<?php echo get_search_query(); ?>"</h4>
            <h2><?= $wp_query->found_posts; ?> matching results</h2>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>

<!-- Banner Ends Here -->

<!-- BLOG POST BEGGIN -->
<?php get_template_part('content-all'); ?>
<!-- BLOG POST BEGGIN -->

<!-- ==============  END ================ -->
<?php get_footer(); ?>