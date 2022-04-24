<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="profile" href="https://gmpg.org/xfn/11" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/style/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Oswald:wght@200;400;500;700&display=swap"
          rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<?php
    $header_logo     = get_field('header_logo','option');
    $nav_item_1      = get_field('nav_item_1','option');
    $nav_item_2      = get_field('nav_item_2','option');
    $nav_item_3      = get_field('nav_item_3','option');
    $nav_item_4      = get_field('nav_item_4','option');
    $nav_item_5      = get_field('nav_item_5','option');
    $nav_item_search = get_field('nav_item_search','option');

    $bg_image        = get_field('intro_img');
?>
<div class="wrapper">


    <div class="intro">
        <header>
            <div class="header__container container">
                <div class="header__logo"><?php echo $header_logo; ?></div>
                <div class="header__nav">
                    <a href=""><?php echo $nav_item_1; ?></a>
                    <a href=""><?php echo $nav_item_2; ?></a>
                    <a href=""><?php echo $nav_item_3; ?></a>
                    <a href=""><?php echo $nav_item_4; ?></a>
                    <a href=""><?php echo $nav_item_5; ?></a>
                </div>
                <div class="header__search"><i class="fas fa-search"></i></div>
                <div class="menu-btn-box">
                    <div class="menu-btn">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>

                <div class="menu">
                    <div class="menu__header">
                        <div class="header__logo">Musicology</div>
                    </div>
                    <ul class="menu__list">
                        <li><a href="#"><?php echo $nav_item_1; ?></a></li>
                        <li><a href="#"><?php echo $nav_item_2; ?></a></li>
                        <li><a href="#"><?php echo $nav_item_3; ?></a></li>
                        <li><a href="#"><?php echo $nav_item_4; ?></a></li>
                        <li><a href="#"><?php echo $nav_item_5; ?></a></li>
                        <li><a href="#"><?php echo $nav_item_search; ?></a></li>
                    </ul>
                </div>

            </div>
        </header>
        <div class="register__block">
            <h1>
                <?php get_field('intro_header'); ?>
            </h1>
            <p>
                <?php get_field('intro_text'); ?>
            </p>
            <button class="register__button">
                <a><?php get_field('intro_btn'); ?></a>
            </button>
        </div>
    </div>