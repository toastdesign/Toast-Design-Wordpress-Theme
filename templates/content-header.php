<!-- HEADER -->
<header class="site-header" role="banner">
    <div class="container header-contents">
        <div class="row">
            <div class="col-xs-3">
                <div class="site-logo">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"></a>
                </div> <!-- end site-logo -->
            </div> <!-- end col-xs-3 -->
            <div class="col-xs-9">
                <nav class="site-navigation" role="navigation">
                    <?php 
                        wp_nav_menu(
                            array(
                                'theme_location' => 'main-menu',
                                'menu_class' => 'site-menu'
                            )
                        );
                    ?>
                </nav>
            </div> <!-- end col-xs-9 -->
        </div> <!-- end row -->
    </div> <!-- end container -->
</header> <!-- end site-header -->