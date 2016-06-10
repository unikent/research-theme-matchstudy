<?php
/**
 * Template Name: Study Results
 */

use Unikent\ResearchWP\Setup;
use Unikent\ResearchWP\Wrapper;

?>
<?php
while (have_posts()) : the_post();
    $position = get_post_meta($post->ID, 'with_news', true);
    ?>

    <div <?php post_class('content-page'); ?>>
        <?php get_template_part('templates/page-header', 'single'); ?>
        <?php ($position == 'Above' ? get_template_part('templates/content', 'news-full'):''); wp_reset_query();?>
        <div class="content-container">
            <div class="content-main content-main-centered">
                <?php get_template_part('templates/content', 'page'); ?>
            </div>
        </div>
        <?php ($position == 'Below' ? get_template_part('templates/content', 'news-full'):''); wp_reset_query(); ?>
    </div>

<?php endwhile; ?>