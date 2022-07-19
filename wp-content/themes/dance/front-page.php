<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */

$intro_header  = get_field('intro_header');
$intro_text    = get_field('intro_text');
$intro_btn     = get_field('intro_btn');

$cards_title   = get_field('cards_title');
$cards_info    = get_field('cards_info');
$cards         = get_field('cards');

$pricing_title          = get_field('pricing_title');
$pricing_subtitle       = get_field('pricing_subtitle');
$pricing_cards          = get_field('pricing_cards');

$dance_item     = get_field('dance_item');

$stat_title     = get_field('stat_title');
$stat_subtitle  = get_field('stat_subtitle');
$stat_item      = get_field('stat_item');

$simon_info      = get_field('simon_info');
$simon_title     = get_field('simon_title');
$simon_bg_img    = get_field('simon_bg_img');

$subscribe_title = get_field('subscribe_title');
$subscribe_info  = get_field('subscribe_info');
$subscribe_btn   = get_field('subscribe_btn');


get_header();
?>


<div class="register__block">
    <?php if ($intro_header) : ?>
        <h1><?php echo $intro_header; ?></h1>
    <?php endif; ?>

    <?php if ($intro_text) : ?>
        <p><?php echo $intro_text; ?></p>
    <?php endif; ?>

    <?php

    if ($intro_btn):
        $link_url = $intro_btn['url'];
        $link_title = $intro_btn['title'];
        $link_target = $intro_btn['target'] ?: '_self';
        ?>
        <a class="register__button" href="<?php echo esc_url($link_url); ?>"
           target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
    <?php endif; ?>

</div>
</div>

<main class="main">
    <section class="section dance_section">
        <div class="container">


            <?php if ($cards_title) : ?>
                <div class="info__header">
                    <h2><?php echo $cards_title; ?></h2>
                </div>
            <?php endif; ?>

            <?php if ($cards_info) : ?>
                <div class="info__text">
                    <p><?php echo $cards_info; ?></p>
                </div>
            <?php endif; ?>

            <?php
            if ($cards) {
                echo '<div class="dance__cards">';
                foreach ($cards as $item) {
                    $image = $item['image'];
                    $title = $item['title'];
                    $subtitle = $item['subtitle'];
//                      echo '<pre>' . var_export($image, true) . '</pre>';
                    ?>
                    <div class="card" style="background-image: url(<?php echo $image['url']; ?>)">
                        <div class="card_description">
                            <?php if ($title) : ?>
                                <div class="card__header">
                                    <h2><?php echo $title; ?></h2>
                                </div>
                            <?php endif; ?>

                            <?php if ($subtitle) : ?>
                                <div class="card__text">
                                    <p><?php echo $subtitle; ?></p>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>

                    <?php
                }
                echo '</div>';
            } ?>

        </div>
    </section>

    <section class="section pricing__section">
        <div class="container">

            <?php if ($pricing_title) : ?>
                <div class="info__header">
                    <h2><?php echo $pricing_title; ?></h2>
                </div>
            <?php endif; ?>

            <?php if ($pricing_subtitle) : ?>
                <div class="info__text">
                    <p><?php echo $pricing_subtitle; ?></p>
                </div>
            <?php endif; ?>

            <?php
            if ($pricing_cards) {
                echo '<div class="pricing__cards">';
                foreach ($pricing_cards as $item) {
                    $image = $item['pricing_card_img'];
                    $name = $item['pricing_card_name'];
                    $info = $item['pricing_card_info'];
                    $btn = $item['pricing_card_btn'];
                    ?>
                    <div class="pricing__card">
                        <?php if ($image): ?>
                            <img class="pricing__img" src="<?php echo $image['url']; ?>"
                                 alt="<?php echo $image['alt']; ?>">
                        <?php endif; ?>

                        <div class="pricing__description">
                            <?php if ($name): ?>
                                <div class="pricing__header"><?php echo $name; ?></div>
                            <?php endif; ?>
                            <?php if ($info): ?>
                                <div class="pricing__text"><?php echo $info; ?></div>
                            <?php endif; ?>
                            <?php if ($btn): ?>
                                <button class="info__btn">
                                    <h3><?php echo $btn['title']; ?></h3>
                                </button>
                            <?php endif; ?>
                        </div>
                    </div>
                    <?php
                }
                echo '</div>';
            } ?>

        </div>
    </section>

    <section class="section dance__section">
        <div class="dance__container">
            <div class="dance__wrap">

                <?php if ($dance_item) {
                    foreach ($dance_item as $item) {
                        echo '<div class="dance__item">';
                        $image = $item['dance_image'];
                        $title = $item['dance_title'];
                        $subtitle = $item['dance_subtitle'];
                        $btn = $item['dance_btn'];
                        ?>
                        <?php if ($image): ?>
                            <img class="info__img" src="<?php echo $image['url']; ?>"
                                 alt="<?php echo $image['alt']; ?>">
                        <?php endif; ?>
                        <div class="info__dance info-order">
                            <?php if ($title): ?>
                                <div class="dance__header">
                                    <h2><?php echo $title; ?></h2>
                                </div>
                            <?php endif; ?>
                            <?php if ($subtitle): ?>
                                <div class="dance__text">
                                    <p><?php echo $subtitle; ?></p>
                                </div>
                            <?php endif; ?>
                            <?php if ($btn): ?>
                                <button class="dance__btn">
                                    <h3><?php echo $btn['title']; ?></h3>
                                </button>
                            <?php endif; ?>
                        </div>
                        <?php
                        echo '</div>';
                    }
                } ?>

            </div>
        </div>
    </section>

    <section class="section stat__section">
        <div class="container">

            <?php if ($stat_title) : ?>
                <div class="info__header">
                    <h2><?php echo $stat_title; ?></h2>
                </div>
            <?php endif; ?>

            <?php if ($stat_subtitle) : ?>
                <div class="info__text">
                    <p><?php echo $stat_subtitle; ?></p>
                </div>
            <?php endif; ?>

            <?php if ($stat_item) {
                echo '<div class="stat__block">';
                foreach ($stat_item as $item) {
                    $value = $item['stat_item_value'];
                    $name = $item['stat_item_name'];
                    ?>
                    <div class="stat__item">
                        <?php if ($value): ?>
                            <h3><?php echo $value; ?></h3>
                        <?php endif; ?>
                        <?php if ($name): ?>
                            <p><?php echo $name; ?></p>
                        <?php endif; ?>
                    </div>

                    <?php
                }
                echo '</div>';
            } ?>
        </div>
    </section>

    <section class="simon__section" style="background: url(<?php echo $simon_bg_img['url'];  ?>) #e8631c;">
        <div class="container simon__container">
            <div class="simon__block">
                <?php if ($simon_title) : ?>
                    <div class="simon__header">
                        <h3><?php echo $simon_title; ?></h3>
                    </div>
                <?php endif; ?>
                <?php if ($simon_info) : ?>
                    <div class="simon__text">
                        <p><?php echo $simon_info; ?></p>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <section class="subscribe__section">
        <div class="container">
            <div class="subscribe__block">
                <?php if ($subscribe_title) : ?>
                    <div class="info__header">
                        <h2><?php echo $subscribe_title; ?></h2>
                    </div>
                <?php endif; ?>

                <?php if ($subscribe_info) : ?>
                    <div class="info__text">
                        <p><?php echo $subscribe_info; ?></p>
                    </div>
                <?php endif; ?>

                <div class="submit__block">
                    <input class="subscribe__input" type="email">
                    <?php if ($subscribe_btn) : ?>
                        <button class="info__btn" type="submit">
                            <h3><?php echo $subscribe_btn['title']; ?></h3>
                            </button>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
</main>
<?php
get_footer();
?>
