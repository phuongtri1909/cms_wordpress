<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>

<section class="no-results not-found">
	<header class="page-header alignwide">
		<?php if ( is_search() ) : ?>

			<h1 class="page-title">
				<?php
				printf(
					/* translators: %s: Search term. */
					esc_html__( 'Search: %s', 'twentytwentyone' ),
					'<span class="page-description search-term">' .'"'. esc_html( get_search_query() ) .'"' . '</span>'
				);
				?>
				<?php if ( !have_posts() ) {?>
					<p><?php esc_html_e( 'We could not find any results for your search. You can give it another try through the search form below.', 'twentytwentyone' ); ?></p>
				<?php }?>
			</h1>

		<?php else : ?>

			<h1 class="page-title"><?php esc_html_e( 'Nothing here', 'twentytwentyone' ); ?></h1>

		<?php endif; ?>
	</header><!-- .page-header -->

	<div class="page-content default-max-width">

		<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

			<?php
			printf(
				'<p>' . wp_kses(
					/* translators: %s: Link to WP admin new post page. */
					__( 'Ready to publish your first post? <a href="%s">Get started here</a>.', 'twentytwentyone' ),
					array(
						'a' => array(
							'href' => array(),
						),
					)
				) . '</p>',
				esc_url( admin_url( 'post-new.php' ) )
			);
			?>

		<?php elseif ( is_search() ) : ?>

			<form role="search" <?php echo $twentytwentyone_aria_label; ?> method="get" class="search-form card card-sm" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                <div class="card-body row no-gutters align-items-center">
                    <div class="col-auto">
                        <i class="fas fa-search h4 text-body"></i>
                    </div>
                    <!--end of col-->
                    <div class="col">
                        <input type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" class="form-control form-control-lg form-control-borderless" type="search" placeholder="Search topics or keywords">
                    </div>
                    <!--end of col-->
                    <div class="col-auto">
                        <button class="btn btn-lg btn-success" type="submit">Search</button>
                    </div>
                    <!--end of col-->
                </div>
            </form>
			
		<?php else : ?>

			<p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'twentytwentyone' ); ?></p>
			<form role="search" <?php echo $twentytwentyone_aria_label; ?> method="get" class="search-form card card-sm" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                <div class="card-body row no-gutters align-items-center">
                    <div class="col-auto">
                        <i class="fas fa-search h4 text-body"></i>
                    </div>
                    <!--end of col-->
                    <div class="col">
                        <input type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" class="form-control form-control-lg form-control-borderless" type="search" placeholder="Search topics or keywords">
                    </div>
                    <!--end of col-->
                    <div class="col-auto">
                        <button class="btn btn-lg btn-success" type="submit">Search</button>
                    </div>
                    <!--end of col-->
                </div>
            </form>

		<?php endif; ?>
	</div><!-- .page-content -->
</section><!-- .no-results -->
