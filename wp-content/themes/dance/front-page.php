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

get_header();
?>

<main class="main">
    <section class="section dance_section">
        <div class="container">
            <div class="info__header">
                <h2><?php the_field('sub_header_1'); ?></h2>
            </div>
            <div class="info__text">
                <p>
                    <?php the_field('description_1'); ?>
                </p>
            </div>
            <div class="dance__cards">
                <div class="card card_1">
                    <div class="card_description">
                        <div class="card__header">
                            <h2><?php the_field('card_name_1'); ?></h2>
                        </div>
                        <div class="card__text">
                            <p><?php the_field('card_info_1'); ?></p>
                        </div>
                    </div>
                </div>
                <div class="card card_2">
                    <div class="card_description">
                        <div class="card__header">
                            <h2><?php the_field('card_name_2'); ?></h2>
                        </div>
                        <div class="card__text">
                            <p><?php the_field('card_info_2'); ?></p>
                        </div>
                    </div>
                </div>
                <div class="card card_3">
                    <div class="card_description">
                        <div class="card__header">
                            <h2><?php the_field('card_name_3'); ?></h2>
                        </div>
                        <div class="card__text">
                            <p><?php the_field('card_info_3'); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section pricing__section">
        <div class="container">
            <div class="info__header">
                <h2><?php the_field('sub_header_2'); ?></h2>
            </div>
            <div class="info__text">
                <p><?php the_field('description_2'); ?>

                </p>
            </div>
            <div class="pricing__cards">
                <div class="pricing__card">
                    <img class="pricing__img" src="<?php echo get_template_directory_uri();?>/img/123.png" alt="">
                    <div class="pricing_description">
                        <div class="pricing__header"><?php the_field('card_name_4'); ?></div>
                        <div class="pricing__text"><?php the_field('card_info_4'); ?></div>
                        <button class="info__btn">
                            <h3><?php the_field('card_btn_1'); ?></h3>
                        </button>
                    </div>
                </div>
                <div class="pricing__card">
                    <img class="pricing__img" src="<?php echo get_template_directory_uri();?>/img/123.png" alt="">
                    <div class="pricing_description">
                        <div class="pricing__header"><?php the_field('card_name_5'); ?></div>
                        <div class="pricing__text"><?php the_field('card_info_5'); ?></div>
                        <button class="info__btn">
                            <h3><?php the_field('card_btn_2'); ?></h3>
                        </button>
                    </div>
                </div>
                <div class="pricing__card">
                    <img class="pricing__img" src="<?php echo get_template_directory_uri();?>/img/123.png" alt="">
                    <div class="pricing_description">
                        <div class="pricing__header"><?php the_field('card_name_6'); ?></div>
                        <div class="pricing__text"><?php the_field('card_info_6'); ?></div>
                        <button class="info__btn">
                            <h3><?php the_field('card_btn_3'); ?></h3>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section dance__section">
        <div class="dance__container">
            <div class="dance__wrap">
                <img class="info__img" src="<?php echo get_template_directory_uri();?>/img/info_dance/2.png" alt="">
                <div class="info__dance info-order">
                    <div class="dance__header">
                        <h2><?php the_field('dance_header_1'); ?></h2>
                    </div>
                    <div class="dance__text">
                        <p><?php the_field('description_3'); ?></p>
                    </div>
                    <button class="dance__btn">
                        <h3><?php the_field('dance_btn_1'); ?></h3>
                    </button>
                </div>
                <div class="info__dance">
                    <div class="dance__header">
                        <h2><?php the_field('dance_header_2'); ?></h2>
                    </div>
                    <div class="dance__text">
                        <p><?php the_field('description_4'); ?></p>
                    </div>
                    <button class="dance__btn">
                        <h3><?php the_field('dance_btn_2'); ?></h3>
                    </button>
                </div>
                <img class="info__img" src="<?php echo get_template_directory_uri();?>/img/info_dance/1.png" alt="">
            </div>
        </div>
    </section>

    <section class="section stat__section">
        <div class="container">
            <div class="info__header">
                <h2><?php the_field('sub_header_3'); ?></h2>
            </div>
            <div class="info__text">
                <p><?php the_field('stat_text'); ?></p>
            </div>
            <div class="stat__block">
                <div class="stat__item">
                    <h3><?php the_field('stat_value_1'); ?></h3>
                    <p><?php the_field('stat_name_1'); ?></p>
                </div>
                <div class="stat__item">
                    <h3><?php the_field('stat_value_2'); ?></h3>
                    <p><?php the_field('stat_name_2'); ?></p>
                </div>
                <div class="stat__item">
                    <h3><?php the_field('stat_value_3'); ?></h3>
                    <p><?php the_field('stat_name_3'); ?></p>
                </div>
            </div>
        </div>
    </section>

    <section class="simon__section">
        <div class="simon__layer">
            <img class="simon__layer-img" src="<?php echo get_template_directory_uri();?>/img/simon/1.png" alt="">
        </div>
        <div class="container simon__container">
            <div class="simon__block">
                <div class="simon__text">
                    <p><?php the_field('description_5'); ?></p>
                </div>
                <div class="simon__header">
                    <h3><?php the_field('sub_header_4'); ?></h3>
                </div>
            </div>
        </div>
    </section>

    <section class="subscribe__section">
        <div class="container">
            <div class="subscribe__block">
                <div class="info__header">
                    <h2><?php the_field('sub_header_3'); ?></h2>
                </div>
                <div class="info__text">
                    <p><?php the_field('subscribe_text'); ?></p>
                </div>
                <div class="submit__block">
                    <input class="subscribe__input" type="email">
                    <button class="info__btn" type="submit">
                        <h3><?php the_field('subscribe_btn'); ?></h3>
                    </button>
                </div>
            </div>
        </div>
    </section>
</main>
<?php
get_footer();
?>
