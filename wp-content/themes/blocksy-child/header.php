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
$contact_link = plenty_get_page_link_by_title("Nous rencontrer");
$order_link = plenty_get_page_link_by_title("Commander");
$admin_url = get_admin_url();
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
<?php
ob_start();
blocksy_output_header();
$global_header = ob_get_clean();
?>

<body <?php body_class(); ?> <?php echo blocksy_body_attr() ?>>
    <header>
        <div class="logo">
            <a href="<?php echo $home; ?>"><img src="<?php echo get_stylesheet_directory_uri() ?>/images/logo.png" alt="logo"></a>
        </div>
        <nav class="menu">
            <ul>
                <li><a href="<?php echo $contact_link; ?>">Nous rencontrer</a></li>
                <?php if (is_user_logged_in()) : ?>
                    <li><a href="<?php echo admin_url(); ?>">Admin</a></li>
                <?php endif; ?>
            </ul>
            <a href="<?php echo $order_link; ?>"> <button class="commander">Commander</button>
            </a>

        </nav>
    </header>