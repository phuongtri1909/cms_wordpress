<?php
/**
 * Template part for displaying post archives and search results
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>

<article class="content_home" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="row top_news_block_desc top_new_block_desc_5">
		<div class="col-md-3 col-xs-3 topnewstime topnewstime-5">
            <span class="topnewsdate"><?php echo get_the_date('d'); ?></span><br>
            <span class="topnewsmonth topnewsmonth-5 ">Tháng <?php echo get_the_date('m'); ?></span><br>
        </div>
		<div class="col-md-9 col-xs-3 content_post content_post-5">
			<?php get_template_part( 'template-parts/header/excerpt-header', get_post_format() ); ?>

			<div class="entry-content">
				<?php get_template_part( 'template-parts/excerpt/excerpt', get_post_format() ); ?>
			</div><!-- .entry-content -->
		</div>
	</div>
	<!-- <footer class="entry-footer default-max-width">
		<?php twenty_twenty_one_entry_meta_footer(); ?>
	</footer>.entry-footer -->
</article><!-- #post-${ID} -->
