<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package wlru
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="container-fluid">

				<section class="error-404 not-found">
					<header class="page-header">
						<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'wlru' ); ?></h1>
					</header><!-- .page-header -->

					<div class="page-content">
						<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'wlru' ); ?></p>

						<?php
							get_search_form();
							dynamic_sidebar( 'widget-area-404' )
						?>

					</div><!-- .page-content -->
				</section><!-- .error-404 -->

			</div><!-- .container-fluid -->
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
