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

  <div id="content"class="page">
    <h1 class="titlepage" >Trang mới nhất</h1>
	<hr class="gg">
    <ul class="page-list">
        <?php
        $args = array(
            'post_type' => 'page', // Chỉ lấy các trang
            'posts_per_page' => -1 // Lấy tất cả trang
        );
        $query = new WP_Query($args);

        while ($query->have_posts()) : $query->the_post();
        ?>
        <li>
            <h2 class="pages"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			<hr class="ww">	
            <?php
            if (has_post_thumbnail()) {
                the_post_thumbnail();
            }
            ?>
			<?php get_template_part( 'template-parts/excerpt/excerpt', get_post_format() ); ?>
        </li>
        <?php endwhile;
        wp_reset_postdata();
        ?>
    </ul>
</div>
</div>
	<div class="col-md-6">
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
						
						if(is_search()){
							echo '<div class="img-detail-search top_news_block_thumb">';
							twenty_twenty_one_post_thumbnail();
							echo '</div>';
						}
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
		?>
	</div>

	
	<div class="col-md-3">

	
</div>
</div>
<div class="row">
		<div class="container mt-5 mb-5">
			<div class="row br">
				<div class="col-md-6 offset-md-3">
					<h4 class="latest-news-title">Latest News</h4>
						<ul class="timeline lastpost">
							<?php
								$args = array(
								'posts_per_page' => -1,
								'post_status'    => 'publish',
								'orderby'        => 'post_date',
								'order'          => 'DESC',
								);
								$latest_posts = get_posts($args);
								if ($latest_posts) {
									foreach ($latest_posts as $post) {
									setup_postdata($post);
							?>
								<li class="timeline-item">
								<a class="post-link" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
								<a class="post-date float-right" href="#"><?php echo get_the_date(); ?></a>
								<p class="post-content"><?php the_content(); ?></p>
								</li>
							<?php
									}
									wp_reset_postdata();
								} else {
								echo '<li class="no-posts">No posts found.</li>';
								}
							?>
						</ul>
				</div>
			</div>
		</div>
</div>
</div>
<?php
get_footer();
