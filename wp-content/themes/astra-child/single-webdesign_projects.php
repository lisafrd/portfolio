<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Astra
 * @since 1.0.0
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}
?>

<div id="primary" <?php astra_primary_class(); ?>>

    <div class="portfolio-web-wrapper">
        <div class="portfolio-web-container">
            <?php 
            $posts = get_posts([
                'post_type'      => 'portfolio-web',
                'post_status'    => 'publish',
                'posts_per_page' => 4,
            ]);

            foreach ($posts as $post) : 
                setup_postdata($post);
            ?>
                <div class="portfolio-web-content">   
                    <div class="portfolio-web-title"><?php echo get_field('titre'); ?></div>
                    <div class="portfolio-web-info"><?php echo get_field('informations'); ?></div> 
                    <div class="portfolio-web-languages"><?php echo get_field('langages'); ?></div>
                    <div class="portfolio-web-image"><?php echo wp_get_attachment_image(get_field('image'), 'full'); ?></div>
                    <div class="portfolio-web-description"><?php echo get_field('description'); ?></div>
                    <div class="portfolio-web-github-link"><a href="<?php echo get_field('lien_github'); ?>" target="_blank">GitHub</a></div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    
    <?php wp_reset_postdata(); ?>

</div><!-- #primary -->
