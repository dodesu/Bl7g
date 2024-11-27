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