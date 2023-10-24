<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>

    <div class="row">
        <div class="col-md-3">
            <!-- Nội dung các cột khác trong col-md-2 ở đây -->
        </div>
        <div class="col-md-6">
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <header class="entry-header">
                <?php the_title('<h1 class="entry-title">', '</h1>'); ?>
            </header>
            <div class="entry-content">
                <?php the_content(); ?>
            </div>
        </article>
        </div>
        <div class="col-md-3">
            <div class="recent-posts-container post-content-bg">
                <?php
                $recent_posts = get_posts(array(
                    'post_type' => 'post',
                    'posts_per_page' => 3,
                ));

                foreach ($recent_posts as $post) :
                    setup_postdata($post);
                    $day = get_the_date('d');
                    $month = get_the_date('m');
                    $year = substr(get_the_date('Y'), -2, 2);
                    ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class('post-content-recent'); ?>>
                        <div class="post-content-date">
                            <div class="post-md">
                                <span class="post-day post-color"><?php echo $day; ?></span>
                                <span class="post-month post-color"><?php echo $month; ?></span>
                            </div>
                            <span class="post-year post-color"><?php echo $year; ?></span>
                            <?php get_template_part('template-parts/header/excerpt-header', get_post_format()); ?>
                        </div>

                    </article><!-- #post-${ID} -->
                <?php
                endforeach;
                wp_reset_postdata();
                ?>
            </div>
        </div>
    </div>
