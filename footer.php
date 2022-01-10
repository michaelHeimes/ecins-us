<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package sixheads
 */

?>

</div><!-- #content -->

<footer id="colophon" class="footer">

	<div class="wrapper--outer">
		<div class="footer-details">
			<div class="footer__branding">
				<a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
					<p class="footer__title"><?php bloginfo('name'); ?></p>
				</a>
				<p class="footer__tagline"><?php bloginfo('description'); ?></p>
			</div><!-- .site-branding -->

			<div class="footer__contacts">
				<?php if (have_rows('locations', 'option')) : ?>
					<?php while (have_rows('locations', 'option')) : the_row(); ?>
						<article class="footer__contacts--location">
							<h4><?php the_sub_field('location_title'); ?></h4>
							<p><?php the_sub_field('location_address'); ?></p>
						</article>
					<?php endwhile; ?>
				<?php endif; ?>
			</div>


		</div>
	</div>

	<div class="footer--secondary wrapper--outer">
		<p class="copyright">&copy; <?php echo date("Y"); ?> <?php bloginfo('name'); ?>. <?php if (get_field('copyright', 'option')) : ?><?php the_field('copyright', 'option'); ?><?php endif; ?>.</p>

		<div class="secondary-right">
			<nav class="footer-navigation">
				<?php
				wp_nav_menu(array(
					'theme_location' => 'footer',
					'menu_class'        => 'footer-menu',
					'container'			 => false,
				));
				?>
			</nav><!-- .footer-navigation -->
	
			<div class="footer__social">
				<?php get_template_part('template-parts/navigation/nav-social'); ?>
			</div>
		</div>
			
	</div>
</footer><!-- #colophon -->
</div><!-- #page -->
</div><!-- #container -->

<div class="region-picker">
	<div class="region-popup">
		
		<div class="site-logo">
			<h1 class="site-title"><?php bloginfo('name'); ?></h1>
		</div>
		
		<div class="content">
			<h3 class="welcome section-title">Welcome!</h3>
			<p> To get the best experience,<br>please choose your region:</p>
			<div class="region-selector">
				<ul>
					<li class="uk"><a href="/"><span>UK</span></a></li>
					<li class="us"><a href="/us/"><span>US & Global</span></a></li>
					<li class="au"><a href="/au/"><span>Australia</span></a></li>
				</ul>
			</div>
		</div>
		
	</div>
</div>

<?php wp_footer(); ?>

<?php if(get_field('is_this_a_thank_you_page')):?>
	<img style="display: block; height: 0; width: 0;" src="https://ct.capterra.com/capterra_tracker.gif?vid=2198521&vkey=97fa54fe515c28aea500873c74aaf2d6" />
<?php endif;?>

</body>

</html>
