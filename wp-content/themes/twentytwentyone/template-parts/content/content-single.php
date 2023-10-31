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
            
        <?php     
$date = get_the_date('d');
$month = get_the_date('m');
$year = get_the_date('y');
?>
<div class="detailpost">
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <header class="entry-header alignwide">
        <?php the_title( '<div class="row">
        <div class="ten col-md-10 col-xs-9"><h1 class="ten1 entry-title detail-title">', '</h1></div>
        <div class="col-md-2 col-xs-3 m-auto"><div class="headlinesdate date-detail">
        <div class="headlinesdm">
            <div class="headlinesday">'. $date .'</div>
            <div class="headlinesmonth">'. $month .'</div>
        </div>
        <div class="headlinesyear">’'. $year .'</div>
        </div></div>
        </div>' ); ?>
        <div class="row">
            <div class="col-md-12"><div class="overviewline"></div></div>
        </div>
        <?php twenty_twenty_one_post_thumbnail(); ?>
    </header><!-- .entry-header -->
    <div class="entry-content" style="margin-bottom: 20px;">
        <?php the_content(); ?>
    </div><!-- .entry-content -->
    <?php if ( ! is_singular( 'attachment' ) ) : ?>
        <?php get_template_part( 'template-parts/post/author-bio' ); ?>
    <?php endif; ?>

</article><!-- #post-<?php the_ID(); ?> -->
       
        </div>

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
            <div class="views-all-news">
                <div class="all-news">
                    <a class="all-news-title" href="<?php echo home_url(); ?>">Xem tất cả tin tức</a>
                </div>
            </div>
        </div>
    </div>
