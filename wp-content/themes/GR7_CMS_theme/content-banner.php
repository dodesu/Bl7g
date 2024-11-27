<div class="main-banner header-text">
  <div class="container-fluid">
    <div class="owl-banner owl-carousel">

      <?php
      $posts = get_top_viewed_posts();
      if ($posts):
        foreach ($posts as $post):
          setup_postdata($post);
           ?>
          <div class="item">
            <img src="<?= get_the_post_thumbnail_url(null, 'full') ?>" alt="">
            <div class="item-content">
              <div class="main-content">
                <div class="meta-category">
                  <?php foreach (get_the_category() as $cat): ?>
                    <a href="<?= get_category_link($cat->term_id) ?>"><span><?= $cat->name ?></span></a>
                  <?php endforeach; ?>
                </div>
                <a href="<?= get_permalink() ?>">
                  <h4><?php the_title() ?></h4>
                </a>
                <ul class="post-info">
                  
                  <li><a href="<?php get_the_author_link(); ?>"><?= get_the_author(); ?></a></li>
                  <li><a href="#" style="pointer-events: none;"><?= get_the_date() ?></a></li>
                  <li><a href="#" style="pointer-events: none;"><?= get_comments_number() ?> Comments</a></li>
                  <li><a href="#" style="pointer-events: none;"><?= pvc_get_post_views(get_the_ID()) ?> Views</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        <?php endforeach;
        wp_reset_postdata(); ?>
      <?php endif; ?>


    </div>
  </div>
</div>