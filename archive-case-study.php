<?php

/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package sixheads
 */

get_header();
?>

<div id="primary" class="content-area">
	<main id="main" class="site-main">

		<?php if (have_posts()) :

			get_template_part('template-parts/casestudies/hero-banner');
			get_template_part('template-parts/casestudies/page-intro');
			get_template_part('template-parts/casestudies/video');

		endif; ?>
			<div class="content-grid-wrapper">
				<div class="wrapper--inner">
				<?php
				
				get_template_part('template-parts/casestudies/resource', 'grid')
	
				?>
				</div>
			</div>
			<?php get_template_part('template-parts/testimonials/testimonial'); ?>

	</main><!-- #main -->
</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
