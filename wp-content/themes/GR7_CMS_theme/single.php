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
            <h4>Post Details</h4>
            <h2><?= get_the_title() ?></h2>
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
          <div class="row">
            <div class="col-lg-12">
              <div class="blog-post">
                <div class="blog-thumb">
                  <img src="<?= get_the_post_thumbnail_url(null, 'full') ?>" alt="">
                </div>
                <div class="down-content">
                  <?php foreach (get_the_category() as $cat): ?>
                    <a href="<?= get_category_link($cat->term_id) ?>"><span><?= $cat->name ?></span></a>
                  <?php endforeach; ?>
                  <a href="#" style="pointer-events: none;">
                    <h4><?php the_title() ?></h4>
                  </a>
                  <ul class="post-info">
                    <?php
                    $post_id = get_the_ID();
                    $author_id = get_post_field('post_author', $post_id);
                    $author_name = get_the_author_meta('display_name', $author_id);
                    $author_url = get_author_posts_url($author_id);
                    ?>
                    <li><a href="<?= $author_url ?>"><?= $author_name ?></a>
                    <li><a href="#" style="pointer-events: none;"><?= get_the_date() ?></a></li>
                    <li><a href="#" style="pointer-events: none;"><?= get_comments_number() ?>
                        Comments</a></li>
                    <li><a href="#" style="pointer-events: none;"><?= pvc_get_post_views(get_the_ID()) ?>
                        Views</a>
                    </li>
                  </ul>
                  <p><?php the_content() ?></p>
                  <div class="post-options">
                    <div class="row">
                      <div class="col-6">
                        <ul class="post-tags">
                          <li><i class="fa fa-tags"></i></li>
                          <li><a href="#">Best Templates</a>,</li>
                          <li><a href="#">TemplateMo</a></li>
                        </ul>
                      </div>
                      <div class="col-6">
                        <ul class="post-share">
                          <li><i class="fa fa-share-alt"></i></li>
                          <li><a href="#">Facebook</a>,</li>
                          <li><a href="#"> Twitter</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="sidebar-item comments">
                <div class="sidebar-heading">
                  <h2><?= comments_number(); ?></h2>
                </div>
                <div class="content">
                  <ul>
                    <?php
                    $comments = get_comments(array(
                      'post_id' => get_the_ID(),
                      'status' => 'approve', // Chỉ lấy bình luận đã duyệt
                    ));

                    // Hàm đệ quy để hiển thị bình luận cha và con
                    function display_comments($comments, $parent_id = 0, $reverse = false)
                    {
                      if ($reverse) {
                        //switch to use for() to loop $comments (array_reverse) 
                        for ($i = count($comments) - 1; $i >= 0; $i--):
                          $comment = $comments[$i];
                          if ($comment->comment_parent == $parent_id): ?>

                            <li id="comment-<?php echo $comment->comment_ID; ?>"
                              class="<?= $comment->comment_parent != 0 ? 'replied' : ' ' ?>">
                              <div class="author-thumb">
                                <?= um_get_avatar('',  $comment->comment_author_email, '100'); ?>
                              </div>
                              <div class="right-content">
                                <h4><?= $comment->comment_author; ?><span><?= $comment->comment_date; ?></span></h4>
                                <p><?= $comment->comment_content; ?></p>
                                <a href="?reply=<?= $comment->comment_ID ?>#sidebar-cmt">Reply</a>
                              </div>
                            </li>

                            <?php
                            display_comments($comments, $comment->comment_ID, true);
                          endif;

                        endfor;
                        return;
                      }
                      foreach ($comments as $comment):
                          // Chỉ hiển thị các bình luận có parent ID phù hợp
                          if ($comment->comment_parent == $parent_id): ?>

                            <li id="comment-<?php echo $comment->comment_ID; ?>"
                              class="<?= $comment->comment_parent != 0 ? 'replied' : ' ' ?>">
                              <div class="author-thumb">
                              <?= um_get_avatar('',  $comment->comment_author_email, '100'); ?>
                              </div>
                              <div class="right-content">
                                <h4><?= $comment->comment_author; ?><span><?= $comment->comment_date; ?></span></h4>
                                <p><?= $comment->comment_content; ?></p>
                                <a href="?reply=<?= $comment->comment_ID ?>#sidebar-cmt">Reply</a>
                              </div>
                            </li>

                            <?php
                            display_comments($comments, $comment->comment_ID, true);
                          endif;
                        
                      endforeach;
                    }
                    display_comments($comments); ?>

                  </ul>
                </div>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="sidebar-item submit-comment" id="sidebar-cmt">
                <div class="sidebar-heading">
                  <h2>Your comment</h2>
                </div>
                <div class="content">
                  <form id="comment-form" action="<?php echo site_url('/wp-comments-post.php'); ?>" method="post">
                    <div class="row">
                      <div class="col-md-6 col-sm-12">
                        <fieldset>
                          <input name="name" type="hidden" id="name" placeholder="Your name" required="required">
                        </fieldset>
                      </div>
                      <div class="col-md-6 col-sm-12">
                        <fieldset>
                          <input name="email" type="hidden" id="email" placeholder="Your email" required="required">
                        </fieldset>
                      </div>

                      <div class="col-lg-12">
                        <fieldset>
                          <textarea name="comment" rows="6" id="comment" placeholder="Type your comment"
                            required="required"></textarea>
                        </fieldset>
                        <input type="hidden" name="comment_post_ID" value="<?= get_the_ID() ?>" id="comment_post_ID">
                        <input type="hidden" name="comment_parent" id="comment_parent"
                          value="<?= isset($_GET['reply']) ? intval($_GET['reply']) : '0' ?>">
                      </div>
                      <div class="col-lg-12">
                        <fieldset>
                          <button type="submit" id="form-submit" class="main-button" name="submit"
                            value="Post Comment">Submit</button>
                            <?php _debug() ?>
                        </fieldset>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php get_template_part('sidebar'); ?>
    </div>
  </div>
</section>

<!-- ==============  END ================ -->
<?php get_footer(); ?>