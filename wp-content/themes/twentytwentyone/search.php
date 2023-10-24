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
<div class="content-list-post">
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
						echo '<div class="list-view-search">';
						echo '<div class="row">';
						echo '<div class="col-md-5">';
						
						echo '<div class="img-detail-search top_news_block_thumb">';
						$content = get_the_content();
						$pattern = '/<img.*?>/i';
						preg_match_all($pattern, $content, $matches);
						if (!empty($matches[0])) {
							foreach ($matches[0] as $image) {
								echo $image;
							}
						}
						echo '</div>';
						echo '</div>';
						
						echo '<div class="col-md-7 top_news_block_desc">';
						echo '<div class="content-detail-search">';
						get_template_part( 'template-parts/content/content-excerpt', get_post_format() );
						echo '</div>';
						echo '</div>';
						echo '</div>';
						echo '</div>';
						
						// Hiển thị nội dung bài viết với class.
					} // End the Loop.
				// Previous/next page navigation.
				twenty_twenty_one_the_posts_navigation();

				// If no content, include the "No posts found" template.
		}?>
	</div>

	<div class="col-md-3">

	</div>
</div>
</div>
<?php
get_footer();
