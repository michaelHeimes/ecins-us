<?php

/**
 * Hero Banner
 *
 * @package      sixheads
 **/
$title = get_field('hero_title_news', 'option');
$image = get_field('hero_image_news', 'option');
?>
<header class="hero-banner">
  <div class="wrapper hero-banner__container">
	  <div class="inner">
	  		<div class="half left">
			    <?php if (get_field('hero_copy_news', 'option')) : ?>
			      <div class="page-title hero-banner__title"><?php the_field('hero_copy_news', 'option'); ?></div>
			    <?php else : ?>
			      <h1 class="page-title hero-banner__title"><?php the_title(); ?></h1>
			    <?php endif; ?>
	  		</div>
	  		
	  		<div class="half right">
		   <?php 
			if( !empty( $image ) ): ?>
			    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
			<?php endif; ?>
	  		</div>
		   
	  </div>
	  
	<?php if( is_front_page() ):?>
    <div class="hero-banner__btns">
      <?php get_template_part('template-parts/demo-or-ebook/demo-ebook-cta'); ?>
    </div>
    <?php endif;?>
    
  </div>
</header>
