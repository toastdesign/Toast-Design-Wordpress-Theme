<?php 
    // Toon de favicon.
    $favicon = IMAGES . '/icons/favicon.png';

    // Toon een custom touch icon.
    $touch_icon = IMAGES . '/icons/apple-touch-icon-152x152-precomposed.png';
?>

<!DOCTYPE html>
<!--[if IE 8]> <html <?php language_attributes(); ?> class="ie8"> <![endif]-->
<!--[if !IE]><!--> <html <?php language_attributes(); ?>> <!--<![endif]-->

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <title><?php wp_title( '|', true, 'right' ); ?><?php bloginfo( 'name' ); ?></title>
    <meta name="description" content="<?php bloginfo( 'description' ); ?>">

    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Favicon and Apple Icons -->
    <link rel="shortcut icon" href="<?php echo $favicon; ?>">
    <link rel="apple-touch-icon-precomposed" sizes="152x152" href="<?php echo $touch_icon; ?>">

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

    <!--[if lt IE 8]>
        <div class="alert alert-warning">
            <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'toast'); ?>
        </div>
    <![endif]-->

    <?php get_template_part('templates/content','header'); ?>

    <!-- MAIN CONTENT AREA -->
    <div class="container">
        <div class="row">


