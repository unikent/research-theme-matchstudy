<?php
/**
 * Template Name: Study Results
 */

use Unikent\ResearchWP\Setup;
use Unikent\ResearchWP\Wrapper;

?>
<?php
while (have_posts()) : the_post();
?>
    <div <?php post_class('content-page'); ?>>
        <?php get_template_part('templates/page-header'); ?>
        <div class="card-panel cards-backed ">
            <div class="card-panel-body" data-category="all">
                <div class="card card-backed card-backed-secondary">
                    <div class="card-header">
                        <p class="h1" style="font-size: 4rem;"><?php echo $position = get_post_meta($post->ID, 'study_results_participants', true);?></p>

                    </div>
                    <p class="card-title">participants recruited</p>

                </div>

                <hr><div class="card card-backed card-backed-secondary">
                    <div class="card-header">
                        <p class="h1" style="font-size: 4rem;"><?php echo get_post_meta($post->ID, 'study_results_articles', true); ?></p>

                    </div>
                    <p class="card-title">articles &amp; publications published</p>

                </div>
                <div class="card-panel-single">
                    <div class="card card-backed card-backed-tertiary">
                        <blockquote ><p><?php echo get_post_meta($post->ID, 'study_results_quote', true); ?></p>
                            <cite><?php echo get_post_meta($post->ID, 'study_results_quote_attribution', true); ?></cite>
                        </blockquote>

                    </div>
                </div>
            </div>
        </div>
            <div class="content-main content-main-centered">
                <div class="content-container">

                <?php get_template_part('templates/content', 'page'); ?>
            </div>
        </div>
    </div>

<?php endwhile; ?>