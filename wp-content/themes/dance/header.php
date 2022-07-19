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
    <meta charset="<?php bloginfo('charset'); ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="profile" href="https://gmpg.org/xfn/11"/>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Oswald:wght@200;400;500;700&display=swap"
          rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<?php
$header_logo     = get_field('header_logo', 'option');

$nav_item_search = get_field('nav_item_search', 'option');
$nav             = get_field('nav', 'option');

$intro_img       = get_field('bgimage');
?>

<div class="wrapper">
    <div class="intro" style="background-image:url(<?php echo $intro_img['url']; ?>)">
        <header>
            <div class="header__container container">
            <?php
                if($header_logo){
                    echo '<div class="header__logo">';
                    echo $header_logo;
                    echo '</div>';
                }
            ?>
                <?php
                wp_nav_menu( [
                    'menu'            => 'Main',
                    'container'       => false,
                    'menu_class'      => 'header__nav',
                    'echo'            => true,
                    'fallback_cb'     => 'wp_page_menu',
                    'items_wrap'      => '<ul  class="%2$s">%3$s</ul>',
                    'depth'           => 1,
                    'walker'          => '',
                ] );
                ?>
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
                        <?php
                        if($header_logo){
                            echo '<div class="header__logo">';
                            echo $header_logo;
                            echo '</div>';
                        }
                        ?>
                    </div>

                    <?php
                    wp_nav_menu( [
                        'menu'            => 'Main',
                        'container'       => false,
                        'menu_class'      => 'menu__list',
                        'echo'            => true,
                        'fallback_cb'     => 'wp_page_menu',
                        'items_wrap'      => '<ul  class="%2$s"><li>%3$s</li></ul>',
                        'depth'           => 1,
                        'walker'          => '',
                    ] );
                    ?>
                </div>
            </div>
        </header>

