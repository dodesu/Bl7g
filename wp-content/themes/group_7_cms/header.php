<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Document</title>

    <?php wp_head(); ?>
</head>

<body>

    <!-- Begin Nav
================================================== -->
    <nav class="navbar navbar-toggleable-md navbar-light bg-white fixed-top mediumnavigation">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
            data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="container">
            <!-- Begin Logo -->
            <?php
            $custom_logo_id = get_theme_mod('custom_logo');
            if ($custom_logo_id) {
                $logo_url = wp_get_attachment_image_src($custom_logo_id, 'full');
                $logo_url = $logo_url[0];

                echo '<a class="navbar-brand" href="' . home_url() . '">
                    <img src=' . esc_url($logo_url) . ' alt="logo"> </a>';
            } ?>
            <!-- End Logo -->
            <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                <!-- Begin Menu -->

                <?php
                $menu  = wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'menu_class' => 'navbar-nav ml-auto',
                    'fallback_cb' => false,
                    'add_li_class' => 'nav-item active',
                    'depth' => 1,
                    'container' => false,
                    'echo' => false,
                ));
                echo str_replace(
                        '<a ',
                        '<a class="nav-link" ',
                        $menu
                );
                ?>
                <!-- End Menu -->
                <!-- Begin Search -->
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="text" placeholder="Search">
                    <span class="search-icon"><svg class="svgIcon-use" width="25" height="25" viewbox="0 0 25 25">
                            <path
                                d="M20.067 18.933l-4.157-4.157a6 6 0 1 0-.884.884l4.157 4.157a.624.624 0 1 0 .884-.884zM6.5 11c0-2.62 2.13-4.75 4.75-4.75S16 8.38 16 11s-2.13 4.75-4.75 4.75S6.5 13.62 6.5 11z">
                            </path>
                        </svg></span>
                </form>
                <!-- End Search -->
            </div>
        </div>
    </nav>
    <!-- End Nav
================================================== -->