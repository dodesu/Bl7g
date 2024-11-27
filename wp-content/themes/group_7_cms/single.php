<?php get_header(); ?>
<div id="primary" class="content-area">
    <main id="main" class="site-main">
        <?php
        while (have_posts()) : the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <header class="entry-header">
                    <?php
                    the_title('<h1 class="entry-title">', '</h1>'); 
                    if ('post' === get_post_type()) : ?>
                        <div class="entry-meta">
                            <?php
                            echo 'Published on ' . get_the_date(); 
                            echo ' by ' . get_the_author(); 
                            ?>
                        </div>
                    <?php endif; ?>
                </header>
                <div class="entry-content">
                    <?php
                    the_content();       
                    wp_link_pages(array(
                        'before' => '<div class="page-links">' . __('Pages:', 'your-theme-textdomain'),
                        'after'  => '</div>',
                    ));
                    ?>
                </div>            
            </article>
            <?php      
            if (comments_open() || get_comments_number()) {
                comments_template();
            }
        endwhile; 
        ?>
    </main><!-- #main -->
</div><!-- #primary -->
<?php get_footer(); ?>
