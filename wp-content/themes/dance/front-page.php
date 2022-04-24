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
                <h2>dance tour</h2>
            </div>
            <div class="info__text">
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Lorem ipsum, dolor sit amet
                    consectetur
                    adipisicing elit.
                </p>
            </div>
            <div class="dance__cards">
                <div class="card card_1">
                    <div class="card_description">
                        <div class="card__header">
                            <h2>america</h2>
                        </div>
                        <div class="card__text">
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="card card_2">
                    <div class="card_description">
                        <div class="card__header">
                            <h2>asia</h2>
                        </div>
                        <div class="card__text">
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="card card_3">
                    <div class="card_description">
                        <div class="card__header">
                            <h2>australia</h2>
                        </div>
                        <div class="card__text">
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section pricing__section">
        <div class="container">
            <div class="info__header">
                <h2>pricing</h2>
            </div>
            <div class="info__text">
                <p>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Deleniti porro, facilis
                    temporibus animi natus minima sint adipisci.
                </p>
            </div>
            <div class="pricing__cards">
                <div class="pricing__card">
                    <img class="pricing__img" src="<?php echo get_template_directory_uri();?>/img/123.png" alt="">
                    <div class="pricing_description">
                        <div class="pricing__header">basic</div>
                        <div class="pricing__text">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                        </div>
                        <button class="info__btn">
                            <h3>$150.00</h3>
                        </button>
                    </div>
                </div>
                <div class="pricing__card">
                    <img class="pricing__img" src="<?php echo get_template_directory_uri();?>/img/123.png" alt="">
                    <div class="pricing_description">
                        <div class="pricing__header">proffecional</div>
                        <div class="pricing__text">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                        </div>
                        <button class="info__btn">
                            <h3>$200.00</h3>
                        </button>
                    </div>
                </div>
                <div class="pricing__card">
                    <img class="pricing__img" src="<?php echo get_template_directory_uri();?>/img/123.png" alt="">
                    <div class="pricing_description">
                        <div class="pricing__header">ultimate</div>
                        <div class="pricing__text">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                        </div>
                        <button class="info__btn">
                            <h3>$250.00</h3>
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
                        <h2>amazing text</h2>
                    </div>
                    <div class="dance__text">
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Lorem ipsum dolor sit, amet
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Lorem ipsum dolor sit,
                            amet
                            consectetur adipisicing elit.
                            consectetur adipisicing elit.</p>
                    </div>
                    <button class="dance__btn">
                        <h3>read more</h3>
                    </button>
                </div>
                <div class="info__dance">
                    <div class="dance__header">
                        <h2>best dance</h2>
                    </div>
                    <div class="dance__text">
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Lorem ipsum dolor sit, amet
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Lorem ipsum dolor sit,
                            amet
                            consectetur adipisicing elit.
                            consectetur adipisicing elit.</p>
                    </div>
                    <button class="dance__btn">
                        <h3>read more</h3>
                    </button>
                </div>
                <img class="info__img" src="<?php echo get_template_directory_uri();?>/img/info_dance/1.png" alt="">

            </div>
        </div>
    </section>

    <section class="section stat__section">
        <div class="container">
            <div class="info__header">
                <h2>amazing text</h2>
            </div>
            <div class="info__text">
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Lorem ipsum dolor sit, amet
                    consectetur adipisicing elit.</p>
            </div>
            <div class="stat__block">
                <div class="stat__item">
                    <h3>
                        1240+
                    </h3>
                    <p>
                        Club
                    </p>
                </div>
                <div class="stat__item">
                    <h3>
                        2000+
                    </h3>
                    <p>
                        Fctive Member
                    </p>
                </div>
                <div class="stat__item">
                    <h3>
                        1000+
                    </h3>
                    <p>
                        Community
                    </p>
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
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero iste adipisci natus
                        beatae
                        culpa
                        explicabo harum, placeat consequatur, officiis minus sit blanditiis veniam, ea voluptate
                        eum
                        dignissimos nulla temporibus assumenda!
                    </p>
                </div>
                <div class="simon__header">
                    <h3>
                        herbert simon
                    </h3>
                </div>
            </div>
        </div>
    </section>

    <section class="subscribe__section">
        <div class="container">
            <div class="subscribe__block">
                <div class="info__header">
                    <h2>Subscribe</h2>
                </div>
                <div class="info__text">
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Lorem ipsum dolor sit, amet
                        consectetur adipisicing elit.</p>
                </div>
                <div class="submit__block">
                    <input class="subscribe__input" type="email">
                    <button class="info__btn" type="submit">
                        <h3>
                            subscribe
                        </h3>
                    </button>
                </div>
            </div>
        </div>
    </section>
</main>
<?php
get_footer();
?>
