<div class="col-lg-4">

    <div class="sidebar">
        <div class="row">
            <div class="col-lg-12">
                <div class="sidebar-item search">
                    <form id="search_form" name="gs" method="GET" action="#">
                        <input type="text" name="q" class="searchText" placeholder="type to search..."
                            autocomplete="on">
                    </form>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="sidebar-item recent-posts">
                    <div class="sidebar-heading">
                        <h2>Recent Posts</h2>
                    </div>
                    <div class="content">
                        <ul>
                            <?php
                            $args = array(
                                'post_type' => 'post', 
                                'posts_per_page' => 5, 
                                'orderby' => 'date',
                                'order' => 'DESC', 
                            );
                            $query = new WP_Query($args);
                            if ($query->have_posts()):
                                while ($query->have_posts()):
                                    $query->the_post();
                                    ?>
                                    <li><a href="<?= get_permalink()?>">
                                            <h5><?= get_the_title(); ?></h5>
                                            <span><?= get_the_date(); ?></span>
                                        </a></li>
                                <?php endwhile;
                                wp_reset_postdata();
                            endif; ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="sidebar-item categories">
                    <div class="sidebar-heading">
                        <h2>Categories</h2>
                    </div>
                    <div class="content">
                        <ul>
                            <?php
                            $categories = get_categories();
                            if ($categories):
                                foreach ($categories as $category): ?>
                                    <li><a href="<?= get_category_link($category->term_id) ?>">- <?= $category->name ?></a></li>
                                <?php endforeach;
                            endif; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>