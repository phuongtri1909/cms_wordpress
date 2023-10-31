<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();

/* Start the Loop */
while ( have_posts() ) :
	the_post();

	get_template_part( 'template-parts/content/content-single' );

	if ( is_attachment() ) {
		// Parent post navigation.
		
	}



	// Previous/next post navigation.
	$twentytwentyone_next = is_rtl() ? twenty_twenty_one_get_icon_svg( 'ui', 'arrow_left' ) : twenty_twenty_one_get_icon_svg( 'ui', 'arrow_right' );
	$twentytwentyone_prev = is_rtl() ? twenty_twenty_one_get_icon_svg( 'ui', 'arrow_right' ) : twenty_twenty_one_get_icon_svg( 'ui', 'arrow_left' );

	$twentytwentyone_next_label     = esc_html__( 'Next post', 'twentytwentyone' );
	$twentytwentyone_previous_label = esc_html__( 'Previous post', 'twentytwentyone' );
?>
	<div class="custom-navigation">
		<div class="post-navigation">
			<div class="previous-post">
				<?php
				$previous_post = get_previous_post();
				if ($previous_post) {
					?>
					<article <?php post_class('post-content-recent'); ?>>
                        <div class="post-content-date">
                            <div class="post-md">
                                <span class="post-day post-color"><?php echo get_the_date('d', $previous_post); ?></span>
                                <span class="post-month post-color"><?php echo get_the_date('m', $previous_post); ?></span>
                            </div>
                            <span class="post-year post-color"><?php echo get_the_date('y', $previous_post); ?></span>
							<?php
                            previous_post_link('%link', '%title ');?>
                        </div>
                    </article>
					<?php
					
				}
				?>
			</div>
			<div class="next-post">
				<?php
				$next_post = get_next_post();
				if ($next_post) {?>
					<article <?php post_class('post-content-recent'); ?>>
                        <div class="post-content-date">
                            <div class="post-md">
                                <span class="post-day post-color"><?php echo get_the_date('d', $next_post); ?></span>
                                <span class="post-month post-color"><?php echo get_the_date('m', $next_post); ?></span>
                            </div>
                            <span class="post-year post-color"><?php echo get_the_date('y', $next_post); ?></span>
							<?php
                            next_post_link('%link', ' %title');?>
                        </div>
                    </article>
					<?php
				}
				?>
			</div>
		</div>
	</div>
<?php

	// If comments are open or there is at least one comment, load up the comment template.
	if ( comments_open() || get_comments_number() ) {?>
		
		<div class="container">
    <div class="row">
        <?php
        $post_id = get_the_ID(); // Lấy ID của bài viết hiện tại
        
        // Lấy các comments của bài viết hiện tại từ WP sử dụng WP API
        $comments = get_comments(array(
            'post_id' => $post_id, // Chỉ lấy các comments của bài viết có ID là $post_id
            'status' => 'approve', // Chỉ lấy comments đã được phê duyệt
            'order' => 'DESC', // Sắp xếp theo thứ tự giảm dần (mới nhất lên đầu)
            'parent' => 0 // Chỉ lấy các comments cha (không lấy các comments con)
        ));

        // Hiển thị các comments
        foreach ($comments as $comment) {
            $comment_author = $comment->comment_author;
            $comment_content = $comment->comment_content;
            $comment_avatar = get_avatar_url($comment->comment_author_email, array('size' => 64)); // Lấy đường dẫn ảnh đại diện

            echo '<div class="col-md-12">';
            echo '<div class="media comment-box commentspost">';
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
            echo '</div>';
        }
        ?>
    </div>
</div>
		
	<?php  } comments_template();
endwhile; // End of the loop.?>
<?php

get_footer();
