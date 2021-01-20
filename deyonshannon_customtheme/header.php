<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php
    wp_head();
    ?>
</head>
<body>
    <!-- navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">
            <?php
            // echo do_shortcode('[fun-stuff]Hey {name}[/fun-stuff]');
            if(function_exists('the_custom_logo')){
                $custom_logo_id = get_theme_mod('custom_logo');
                $logo = wp_get_attachment_image_src($custom_logo_id);
            }
            ?>
            <img src="<?php echo $logo[0] ?>" width="100" height="100" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">


        <!-- items_wrap not working -->
        <?php
            wp_nav_menu(
                array(
                    'menu' => 'primary',
                    'container' => '',
                    'theme_location' => 'primary',
                    'items_wrap' => '<ul id="" class="navbar-nav mr-auto"> %3$s </ul>'
                )
            );
        ?>
        </div>
      </nav>

      <!-- landing -->
<div class="container-flex" id="banner">
    <div id="banner-text">
        <h1>
        <?php
            if( have_posts() ) {
                while( have_posts() ) {
                    the_post();
                    the_content();
                }
            }
        ?>
        </h1>
    </div>
</div>