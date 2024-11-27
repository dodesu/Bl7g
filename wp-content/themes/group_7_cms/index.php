<?php
if (have_posts()):
    while (have_posts()):
        the_post();
        $post_url = get_permalink();
        $post_title = get_the_title();
        echo '<h2><a href="' . $post_url . '">' . $post_title . '</a></h2>';
        the_excerpt();
    endwhile;

    the_posts_navigation(); 

else:
    get_template_part('content', 'none'); // Gọi nội dung khi không có bài viết nào
endif;