<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package internship
 */

get_header();
//  echo '<pre>' . var_export($posts, true) . '</pre>';
?>

    <main id="primary" class="site-main">

        <?php
        $args = array(
            'post_type' => 'showroom',
            'post_status' => 'publish',
            'posts_per_page' => -1
        );


        $posts = new WP_Query($args);


        if ($posts->have_posts()) :?>

            <?php while ($posts->have_posts()) : $posts->the_post();

                $id = $post->ID;
                $value = get_field( "locations", $id );
                echo '<pre>' . var_export($value, true) . '</pre>';
                ?>

                <div class="image"
                     style="background-image: url(<?php echo get_the_post_thumbnail_url($id, 'medium'); ?>)">
                    <a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a>
                </div>

            <?php endwhile; ?>

            <?php wp_reset_postdata(); ?>

        <?php endif; ?>

    </main>

<?php
get_footer();
