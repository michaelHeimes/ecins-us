<?php

/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package sixheads
 */

get_header();
?>

<div id="primary" class="content-area">
	<main id="main" class="site-main">

		<section class="error-404 not-found wrapper--narrow">
			<header class="page-header module-spacing--both">
				<h1 class="page-title page-title--alt"><?php esc_html_e('Oops! That page can&rsquo;t be found.', 'sixheads'); ?></h1>
			</header><!-- .page-header -->

			<div class="page-content module-spacing--after">
				<p><?php esc_html_e('It looks like nothing was found at this location.', 'sixheads'); ?></p>

			</div><!-- .page-content -->
		</section><!-- .error-404 -->

	</main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
