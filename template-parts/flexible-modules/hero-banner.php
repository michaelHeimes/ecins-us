<?php

/**
 * Hero Banner module
 *
 * @package      sixheads
 **/

$image = get_sub_field('hero_image');
$imageUrl = aq_resize($image['url'], 2882, 1126, true, true, true);
?>
<header class="hero-banner orientation-<?php the_sub_field('copy_orientation');?>" style="background-image: url(<?php echo $imageUrl; ?>);">
  <div class="wrapper hero-banner__container">
    <?php if (get_sub_field('hero_copy')) : ?>
      <div class="page-title hero-banner__title"><?php the_sub_field('hero_copy'); ?></div>
    <?php else : ?>
      <h1 class="page-title hero-banner__title"><?php the_title(); ?></h1>
    <?php endif; ?>

    <div class="hero-banner__btns">
      <?php get_template_part('template-parts/demo-or-ebook/demo-ebook-cta'); ?>
    </div>
  </div>
</header>
