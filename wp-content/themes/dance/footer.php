<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */
    $footer_logo = get_field('footer_logo','option');
    $footer_header_1 = get_field('footer_header_1','option');
    $footer_header_2 = get_field('footer_header_2','option');
    $footer_header_3 = get_field('footer_header_3','option');

    $column_1_item_1 = get_field('column_1_item_1','option');
    $column_1_item_2 = get_field('column_1_item_2','option');
    $column_1_item_3 = get_field('column_1_item_3','option');
    $column_1_item_4 = get_field('column_1_item_4','option');
    $column_1_item_5 = get_field('column_1_item_5','option');

    $column_2_item_1 = get_field('column_2_item_1','option');
    $column_2_item_2 = get_field('column_2_item_2','option');
    $column_2_item_3 = get_field('column_2_item_3','option');
    $column_2_item_4 = get_field('column_2_item_4','option');
    $column_2_item_5 = get_field('column_2_item_5','option');

    $column_3_item_1 = get_field('column_3_item_1','option');
    $column_3_item_2 = get_field('column_3_item_2','option');
    $column_3_item_3 = get_field('column_3_item_3','option');

    $footer_text = get_field('footer_text','option');
    ?>
    <footer>
    <div class="container footer__container">
        <div class="footer__social">
            <div class="social__header">
                <h3><?php echo $footer_logo; ?></h3>
            </div>
            <div class="social__text">
                <p><?php echo $footer_text; ?></p>
            </div>
            <div class="social__icons">
                <a href="">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="">
                    <i class="fab fa-facebook"></i>
                </a>
                <a href="">
                    <i class="fab fa-twitter-square"></i>
                </a>
                <a href="">
                    <i class="fab fa-viber"></i>
                </a>
            </div>
        </div>
        <div class="footer__nav">
            <div class="nav__column">
                <div class="column__header">
                    <h3><?php echo $footer_header_2; ?></h3>
                </div>
                <div class="nav__items">
                    <a href=""><?php echo $column_1_item_1 ;?></a>
                    <a href=""><?php echo $column_1_item_2 ;?></a>
                    <a href=""><?php echo $column_1_item_3 ;?></a>
                    <a href=""><?php echo $column_1_item_4 ;?></a>
                    <a href=""><?php echo $column_1_item_5 ;?></a>
                </div>
            </div>
            <div class="nav__column">
                <div class="column__header">
                    <h3>services</h3>
                </div>
                <div class="nav__items">
                    <a href=""><?php echo $column_2_item_1 ;?></a>
                    <a href=""><?php echo $column_2_item_2 ;?></a>
                    <a href=""><?php echo $column_2_item_3 ;?></a>
                    <a href=""><?php echo $column_2_item_4 ;?></a>
                    <a href=""><?php echo $column_2_item_5 ;?></a>
                </div>
            </div>
            <div class="nav__column">
                <div class="column__header">
                    <h3><?php echo $footer_header_3; ?></h3>
                </div>
                <div class="nav__items">
                    <a href=""><?php echo $column_3_item_1 ;?></a>
                    <a href=""><?php echo $column_3_item_2 ;?></a>
                    <a href=""><?php echo $column_3_item_3 ;?></a>
                </div>
            </div>
        </div>
    </div>
</footer>
</div>
<script src="app/app.js"></script>
<script src="https://kit.fontawesome.com/837b325368.js" crossorigin="anonymous"></script>
<?php wp_footer(); ?>
</body>
</html>


