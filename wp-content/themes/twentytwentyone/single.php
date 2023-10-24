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
	if ( comments_open() || get_comments_number() ) {
		comments_template();
	}
endwhile; // End of the loop.?>
<?php

get_footer();
