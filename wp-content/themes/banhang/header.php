<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900"
        rel="stylesheet">
    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/slick.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/slick-theme.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/jquery.mmenu.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/animate.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/lightGallery.css" />
    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/lightslider.css" />
    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/jquery.mmenu.positioning.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/style.css">
    <link rel="icon" href="favicon.png" type="image/x-icon" />
    <?php wp_head() ?>
</head>

<body>
    <div class="lh-wrapper">
        <div class="lh-header <?php if(!is_home()) {echo 'module-header';} ?>">
            <div class="header-position">
                <!-- end block-header -->
                <div class="block-menu">
                    <div class="container">
                        <div class="row">
                            <div class="box-logo col-lg-2 col-4">
                                <a href="" class="logo"><img class="img-fluid"
                                        src="<?php bloginfo('template_directory') ?>/img/phan-gia-huy.png" alt=""></a>
                            </div>
                            <div class="box-menu col-lg-10">
                                <nav id="drop_down">
                                    <ul class="lh2-ul">
                                        <?php wp_nav_menu( 
                                        array( 
                                            'theme_location' => 'main_nav', 
                                            'container' => 'false', 
                                            'menu_id' => 'main_nav', 
                                            'menu_class' => 'menu'
                                        ) 
                                        ); ?>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <button class="d-lg-none d-md-none" id="menu"><span></span></button>
                    </div>
                </div>
                <!-- end block-menu -->
            </div>
            <?php if(!is_home()) { ?> <div class="block-slider">

            </div>
            <?php } ?>