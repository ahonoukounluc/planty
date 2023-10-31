<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Blocksy
 */

?>

<?php
$home = home_url('/');
?>




<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <?php do_action('blocksy:head:start') ?>

    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5, viewport-fit=cover">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/styles.css">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> <?php echo blocksy_body_attr() ?>>
    <header>
        <div class="logo">
            <a href="<?php echo $home; ?>"><img src="<?php echo get_stylesheet_directory_uri() ?>/images/logo.png" alt="logo"></a>
        </div>
        <nav class="menu">
            <?php wp_nav_menu(array('theme_location' => 'main', 'menu_class' => '')); ?>
            <?php wp_nav_menu(array('theme_location' => 'order', 'menu_class' => 'commander')); ?>
        </nav>
    </header>