<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();
?>
<div class="row search-none">
	<?php
		get_template_part( 'template-parts/content/content-none' );
	?>
</div>
<div class="row">
	<div class="col-md-3">

	</div>
	<div class="col-md-6">
		<?php if ( have_posts() ) {?>
			<header class="page-header alignwide">
				<h1 class="page-title">
					<?php
						printf(
							/* translators: %s: Search term. */
							esc_html__( 'Results for "%s"', 'twentytwentyone' ),
							'<span class="page-description search-term">' . esc_html( get_search_query() ) . '</span>'
						);
					?>
				</h1>
			</header><!-- .page-header -->

			<div class="search-result-count default-max-width">
				<?php
					printf(
						esc_html(
							/* translators: %d: The number of search results. */
							_n(
								'We found %d result for your search.',
								'We found %d results for your search.',
								(int) $wp_query->found_posts,
								'twentytwentyone'
							)
						),
						(int) $wp_query->found_posts
					);
				?>
			</div><!-- .search-result-count -->
			<?php
				// Start the Loop.
				while ( have_posts() ) {
					the_post();

					/*
					* Include the Post-Format-specific template for the content.
					* If you want to override this in a child theme, then include a file
					* called content-___.php (where ___ is the Post Format name) and that will be used instead.
					*/
					get_template_part( 'template-parts/content/content-excerpt', get_post_format() );
				} // End the loop.

				// Previous/next page navigation.
				twenty_twenty_one_the_posts_navigation();

				// If no content, include the "No posts found" template.
		}?>
	</div>

	
	<div class="col-md-3">

	<?php
		// Lấy các bình luận cha
		$parent_comments = get_comments(array(
    	'post_id' => get_the_ID(), // ID của bài viết hiện tại
    	'parent' => 0, // Chọn các bình luận cha
	)); var_dump ($parent_comments);
		foreach ($parent_comments as $parent_comment) {
  			  // Hiển thị nội dung của bình luận cha
    		echo '<p>' . $parent_comment->comment_content . '</p>';
			// Lấy các bình luận đã reply cho bình luận cha
    $child_comments = get_comments(array(
        'post_id' => get_the_ID(),
        'parent' => $parent_comment->comment_ID, // ID của bình luận cha
    ));

    foreach ($child_comments as $child_comment) {
        // Hiển thị nội dung của bình luận đã reply
        echo '<p>' . $child_comment->comment_content . '</p>';
    }
}
?>

	
</div>
</div>

<?php
get_footer();
