<?php get_header(); ?>
<!-- ==============  BEGGIN ================ -->




<!-- Page Content -->
<!-- Banner Starts Here -->
<?php get_template_part('content-banner'); ?>
<!-- Banner Ends Here -->

<section class="call-to-action">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="main-content">
          <div class="row">
            <div class="col-lg-8">
              <span>Stand Blog HTML5 Template</span>
              <h4>Creative HTML Template For Bloggers!</h4>
            </div>
            <div class="col-lg-4">
              <div class="main-button">
                <a rel="nofollow" href="https://templatemo.com/tm-551-stand-blog" target="_parent">Download Now!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


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