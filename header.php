<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="profile" href="gmgp.org/xfn/11">
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
        <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.png" />
        <?php wp_head(); ?>
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body <?php body_class(); ?>>
        <!-- Header -->
        <div id="frg-header">
            <nav class="navbar navbar-default">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".frg-navigation" aria-expanded="false">
                            <span class="sr-only">Toggle Navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>

                    <div class="collapse navbar-collapse frg-navigation">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="/">Home</a></li>
                            <?php wp_list_pages(array('title_li' => '')); ?>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <!-- End #header -->


        <!-- Wrapper -->
        <div id="frg-wrapper">
            <!-- Banner -->
            <div id="frg-banner">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-3 text-center">
                            <a href="#"><img src="<?php echo IMAGES; ?>/logo.png" alt="Logo"></a>
                        </div>
                        <div class="col-xs-12 col-sm-9">
                            <img class="img-responsive" src="<?php echo IMAGES; ?>/banner.png" alt="Banner">
                        </div>
                    </div>
                </div>
            </div>
            <!-- End #banner -->

            <!-- Main Menu -->
            <div id="frg-main-nav">
                <div class="container">
                    <div class="collapse navbar-collapse frg-navigation">
                        <ul class="nav navbar-nav">
                            <li><a href="/">Home</a></li>
                            <?php wp_list_categories(array('title_li' => '')); ?>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #main-nav -->

