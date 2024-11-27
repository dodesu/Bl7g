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
            <h4>Recent Posts</h4>
            <h2>Our Recent Blog Entries</h2>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>

<!-- Banner Ends Here -->

<section class="blog-posts grid-system">
  <div class="container">
    <div class="row">
      <div class="col-lg-8">
        <div class="all-blog-posts">

          <?php if (have_posts()): ?>

            <div class="row">
              <?php while (have_posts()):
                the_post(); ?>
                <div class="col-lg-6">
                  <div class="blog-post">
                    <div class="blog-thumb">
                      <img src="<?= get_the_post_thumbnail_url(null, 'full') ?>" alt="">
                    </div>
                    <div class="down-content">
                      <?php foreach (get_the_category() as $cat): ?>
                        <a href="<?= get_category_link($cat->term_id) ?>"><span><?= $cat->name ?></span></a>
                      <?php endforeach; ?>
                      <a href="<?= get_permalink() ?>">
                        <h4><?php the_title() ?></h4>
                      </a>
                      <ul class="post-info">
                        <li><a href="<?php get_the_author_posts_link() ?>"><?= get_the_author() ?></a>
                        </li>
                        <li><a href="#" style="pointer-events: none;"><?= get_the_date() ?></a></li>
                        <li><a href="#" style="pointer-events: none;"><?= get_comments_number() ?>
                            Comments</a></li>
                        <li><a href="#" style="pointer-events: none;"><?= pvc_get_post_views(get_the_ID()) ?>
                            Views</a>
                        </li>
                      </ul>
                      <?php the_excerpt() ?>
                      <div class="post-options">
                        <div class="row">
                          <div class="col-lg-12">
                            <!-- <ul class="post-tags">
                              <li><i class="fa fa-tags"></i></li>
                              <li><a href="#">Best Templates</a>,</li>
                            </ul> -->
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              <?php endwhile; ?>

              <!-- Pagging -->
              <div class="col-lg-12">
                <ul class="page-numbers">
                  <?php
                  $args = array(
                    'prev_text' => '<i class="fa fa-angle-double-left"></i>', // Nút trước đó
                    'next_text' => '<i class="fa fa-angle-double-right"></i>', // Nút tiếp theo
                    'type' => 'array', // Trả về dưới dạng mảng
                    'mid_size' => 2, // Số trang hiển thị xung quanh trang hiện tại
                  );
                  // Lấy các link phân trang
                  $links = paginate_links($args);

                  // Kiểm tra nếu có các link phân trang
                  if (!empty($links)):
                    foreach ($links as $link):
                      // Kiểm tra nếu đây là trang hiện tại
                      if (strpos($link, 'current') !== false):
                        echo '<li class="active text-info font-weight-bold">' . $link . '</li>';
                      else:
                        echo '<li>' . $link . '</li>';
                      endif;
                    endforeach;
                  endif;
                  ?>
                </ul>
              </div>

            <?php else: ?>
              <p>No posts found.</p>
            <?php endif; ?>
          </div>
        </div>
      </div>
      <?php get_template_part('sidebar') ?>
    </div>
  </div>
</section>

<!-- ==============  END ================ -->
<?php get_footer(); ?>