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
        <div class="container">
    <div class="row">
        <?php
        // Lấy các comments mới nhất từ WP sử dụng WP API
        $comments = get_comments(array(
            'status' => 'approve', // Chỉ lấy comments đã được phê duyệt
            'order' => 'DESC', // Sắp xếp theo thứ tự giảm dần (mới nhất lên đầu)
            'parent' => 0 // Chỉ lấy các comments cha (không lấy các comments con)
        ));

        // Hiển thị các comments
        foreach ($comments as $comment) {
            $comment_author = $comment->comment_author;
            $comment_content = $comment->comment_content;
            $comment_avatar = get_avatar_url($comment->comment_author_email, array('size' => 64)); // Lấy đường dẫn ảnh đại diện

            echo '<div class="media comment-box">';
            echo '<div class="media-left">';
            echo '<a href="#">';
            echo '<img class="img-responsive user-photo" src="' . $comment_avatar . '">';
            echo '</a>';
            echo '</div>';
            echo '<div class="media-body">';
            echo '<h4 class="media-heading">' . $comment_author . '</h4>';
            echo '<p>' . $comment_content . '</p>';

            // Lấy các comments con của comment cha hiện tại
            $child_comments = get_comments(array(
                'parent' => $comment->comment_ID // Lấy các comments con có parent là comment_ID của comment cha
            ));

            // Hiển thị các comments con
            foreach ($child_comments as $child_comment) {
                $child_comment_author = $child_comment->comment_author;
                $child_comment_content = $child_comment->comment_content;
                $child_comment_avatar = get_avatar_url($child_comment->comment_author_email, array('size' => 64)); // Lấy đường dẫn ảnh đại diện

                echo '<div class="media comment-box">';
                echo '<div class="media-left">';
                echo '<a href="#">';
                echo '<img class="img-responsive user-photo" src="' . $child_comment_avatar . '">';
                echo '</a>';
                echo '</div>';
                echo '<div class="media-body">';
                echo '<h4 class="media-heading">' . $child_comment_author . '</h4>';
                echo '<p>' . $child_comment_content . '</p>';
                echo '</div>';
                echo '</div>';
            }

            echo '</div>';
            echo '</div>';
        }
        ?>
    </div>
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
        </div>
    </div>
