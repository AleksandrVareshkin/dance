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
$footer_logo = get_field('footer_logo', 'option');

$about = get_field('about', 'option');
$about_items = get_field('about_items', 'option');

$services = get_field('services', 'option');
$services_items = get_field('services_items', 'option');

$other = get_field('other', 'option');
$other_items = get_field('other_items', 'option');

$footer_text = get_field('footer_text', 'option');
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
            <?php if ($about) : ?>
                <?php echo '<div class="nav__column">' ?>
                <div class="column__header">
                    <h3><?php echo $about; ?></h3>
                </div>
            <?php endif; ?>

            <?php if ($about) {
                echo '<div class="nav__items">';
                foreach ($about_items as $item) {
                    $value = $item['about_item'];
                    ?>
                    <?php if ($value): ?>
                        <a href=""><?php echo $value['title']; ?></a>
                    <?php endif; ?>
                    <?php
                }
                echo '</div>';
            } ?>
            <?php echo '</div>' ?>

            <?php if ($services_items) : ?>
                <?php echo '<div class="nav__column">' ?>
                <div class="column__header">
                    <h3><?php echo $services; ?></h3>
                </div>
            <?php endif; ?>

            <?php if ($services) {
                echo '<div class="nav__items">';
                foreach ($services_items as $item) {
                    $value = $item['services_item'];
                    ?>
                    <?php if ($value): ?>
                        <a href=""><?php echo $value['title']; ?></a>
                    <?php endif; ?>
                    <?php
                }
                echo '</div>';
            } ?>
            <?php echo '</div>' ?>

            <?php if ($other_items) : ?>
                <?php echo '<div class="nav__column">' ?>
                <div class="column__header">
                    <h3><?php echo $other; ?></h3>
                </div>
            <?php endif; ?>

            <?php if ($other) {
                echo '<div class="nav__items">';
                foreach ($other_items as $item) {
                    $value = $item['other_item'];
                    ?>
                    <?php if ($value): ?>
                        <a href=""><?php echo $value['title']; ?></a>
                    <?php endif; ?>
                    <?php
                }
                echo '</div>';
            } ?>
            <?php echo '</div>' ?>
        </div>
    </div>


</footer>
</div>
<script src="app/app.js"></script>
<script src="https://kit.fontawesome.com/837b325368.js" crossorigin="anonymous"></script>
<?php wp_footer(); ?>
</body>
</html>


