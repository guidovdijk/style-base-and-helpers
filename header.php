<!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>

    <meta charset="<?php bloginfo('charset'); ?>"/>

    <meta name="viewport" content="width=device-width"/>

    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>"/>

    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<div>

    <header role="banner">

        <section>

            <div><?php if (is_front_page() || is_home() || is_front_page() && is_home()) {

                    echo '<h1>';

                } ?><a href="<?php echo esc_url(home_url('/')); ?>"

                       title="<?php echo esc_html(get_bloginfo('name')); ?>"

                       rel="home"><?php echo esc_html(get_bloginfo('name')); ?></a><?php if (is_front_page() || is_home() || is_front_page() && is_home()) {

                    echo '</h1>';

                } ?></div>

            <div><?php bloginfo('description'); ?></div>

        </section>

        <nav role="navigation">

            <div>

                <?php get_search_form(); ?>

            </div>

            <?php wp_nav_menu(array('theme_location' => 'main-menu')); ?>

        </nav>

    </header>

    <div>
