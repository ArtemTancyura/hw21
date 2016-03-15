<?php
/*
@package home-work20
*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <!DOCTYPE html>
    <html <?php language_attributes(); ?> >
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width">
        <title> <?php bloginfo('name'); ?> </title>
        <?php wp_head(); ?>
    </head>

<body <?php body_class(); ?>>

<!-- site-header -->
<header class="site-header">
    <div class="container clearfix">
        <div class="site-logo ">
            <a href="<?php echo home_url(); ?>"><img src="<?php bloginfo('template_directory'); ?>/img/Logo.png" alt="Classic"></a>
        </div>
        <div class="search">
            <?php include ('searchform.php'); ?>
        </div>
    </div>
    <div class="container clearfix">
    <nav class="site-nav">
        <?php
        $args = array(
            'theme_location' => 'primary'
        );
        ?>

        <?php wp_nav_menu($args); ?>
    </nav>
    </div>
</header>

