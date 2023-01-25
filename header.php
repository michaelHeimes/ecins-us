<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package sixheads
 */

?>
<!doctype html>
<?php $blog_id = get_current_blog_id();?>
<html <?php language_attributes(); ?> class="no-js">

<script src='//eu.fw-cdn.com/10069955/50057.js' chat='false'></script>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	
	<?php if(is_front_page()):?>
	<meta name="facebook-domain-verification" content="itfnl3l38zfn8mit2du9zejjm8d1w8" />
	<?php endif;?>
	
<!-- 	<link rel="preload" href="/wp-content/themes/ecins-us/js/localized-ip.js?ver=1633535448" as="script" /> -->

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-8EYB07SPER"></script>
	
	<?php if ( 2 == $blog_id ):?>
		<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());
		gtag('config', 'G-8EYB07SPER');
		gtag('config', 'G-2PD0H95JSN');
		</script>
		<script> (function(ss,ex){ window.ldfdr=window.ldfdr||function(){(ldfdr._q=ldfdr._q||[]).push([].slice.call(arguments));}; (function(d,s){ fs=d.getElementsByTagName(s)[0]; function ce(src){ var cs=d.createElement(s); cs.src=src; cs.async=1; fs.parentNode.insertBefore(cs,fs); }; ce('https://sc.lfeeder.com/lftracker_v1_'+ss+(ex?'_'+ex:'')+'.js'); })(document,'script'); })('p1e024Bz32Q4GB6d'); </script>
	<?php endif;?>
	
	<?php if ( 3 == $blog_id ):?>
		<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());
		gtag('config', 'G-8EYB07SPER');
		gtag('config', 'G-YM6JX4L225');
		</script>
		<script> (function(ss,ex){ window.ldfdr=window.ldfdr||function(){(ldfdr._q=ldfdr._q||[]).push([].slice.call(arguments));}; (function(d,s){ fs=d.getElementsByTagName(s)[0]; function ce(src){ var cs=d.createElement(s); cs.src=src; cs.async=1; fs.parentNode.insertBefore(cs,fs); }; ce('https://sc.lfeeder.com/lftracker_v1_'+ss+(ex?'_'+ex:'')+'.js'); })(document,'script'); })('p1e024Bz32Q4GB6d'); </script>
	<?php endif;?>
	
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php get_template_part('template-parts/content', 'sprites'); ?>

	<?php get_template_part('template-parts/navigation/nav-offcanvas'); ?>

	<div class="site-overlay"></div>

	<div id="container">
		<div id="page" class="site">
			<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e('Skip to content', 'sixheads'); ?></a>

			<div class="header-utilities">
				
				<nav>
					<ul class="menu country-nav">
						
						<?php if ( 2 == $blog_id ):?>
						
							<li><a href="javascript:;"><span>US</span><img class="flag" src="<?php echo get_template_directory_uri(); ?>/img/usa.png"/></a></li>
							<li><a href="https://ecins.com/?domain=uk"><span>UK</span><img class="flag" src="<?php echo get_template_directory_uri(); ?>/img/GB-United-Kingdom-Flag-icon.png" /></a></li>
							<li><a href="https://ecins.com/au/?domain=au"><span>AU</span><img class="flag" src="<?php echo get_template_directory_uri(); ?>/img/AU-Australia-Flag-icon.png" /></a></li>
						
						<?php elseif ( 3 == $blog_id ):?>

							<li><a href="javascript:;"><span>AU</span><img class="flag" src="<?php echo get_template_directory_uri(); ?>/img/AU-Australia-Flag-icon.png"/></a></li>
							<li><a href="https://ecins.com/?domain=uk"><span>UK</span><img class="flag" src="<?php echo get_template_directory_uri(); ?>/img/GB-United-Kingdom-Flag-icon.png" /></a></li>
							<li><a href="https://ecins.com/us/?domain=us"><span>US</span><img class="flag" src="<?php echo get_template_directory_uri(); ?>/img/usa.png" /></a></li>
						
						<?php endif;?>
						
					</ul>
				</nav>
				
				<?php get_template_part('template-parts/search/search-header'); ?>
				<?php get_template_part('template-parts/navigation/client-login'); ?>
				<?php
				wp_nav_menu(array(
					'theme_location' => 'utility',
					'menu_id'        => 'utility-menu',
					'container'			 => false,
				));
				?>				
			</div>

			<header id="masthead" class="site-header wrapper--outer">
				<div class="site-branding">
					<?php
					if (is_front_page() && is_home()) :
					?>
						<a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
							<h1 class="site-title">
								<span class="sr-only"><?php bloginfo('name'); ?></span>
								<?php 
								$image = get_field('header_logo', 'option');
								if( !empty( $image ) ): ?>
									<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
								<?php endif; ?>
							</h1>
						</a>
					<?php
					else :
					?>
						<a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
							<p class="site-title">
								<span class="sr-only">
									<?php bloginfo('name'); ?>
								</span>
								<?php 
								$image = get_field('header_logo', 'option');
								if( !empty( $image ) ): ?>
									<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
								<?php endif; ?>
							</p>
						</a>
					<?php endif; ?>
				</div><!-- .site-branding -->

				<button id="nav-toggle--open" class="menu-btn menu-toggle menu-toggle--open">
					<span class="screen-reader-text">Menu</span>
					<svg class="icon icon__menu">
						<use xlink:href="#icon-menu"></use>
					</svg>
				</button>

				<nav id="site-navigation" class="main-navigation">
					<div class="menu-primary-container">
						<?php
						wp_nav_menu(array(
							'theme_location' => 'primary',
							'menu_id'        => 'primary-menu',
							'container'			 => false,
						));
						?>
					</div>
				</nav><!-- #site-navigation -->
			</header><!-- #masthead -->

			<div id="content" class="site-content">
