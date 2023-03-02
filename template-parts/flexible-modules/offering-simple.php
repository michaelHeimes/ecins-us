<?php

/**
 * Offering Simple (icons) module
 *
 * @package sixheads
 **/
$title = get_sub_field('section_title');
$copy = get_sub_field('copy');
$spacing = get_sub_field('spacing');
$background = get_sub_field('background');
$background_color = get_sub_field('background_color');
$text_color = get_sub_field('text_color');
$scroll_ID = get_sub_field('unique_id');
?>

<?php if (have_rows('offerings')) : ?>
  <div<?php if( $scroll_ID ):?> id="<?php echo $scroll_ID;?>"<?php endif;?> class="offering-simple module-spacing--<?php echo $spacing; ?> offering__bg--<?php echo $background; ?>" style="background-color: <?php echo $background_color;?>">
    <div class="wrapper--inner wrapper--narrow">
      <?php if ($title) : ?>
        <h2 class="section-title offering-simple__title" style="color: <?php echo $text_color;?>;"><?php echo $title; ?></h2>
      <?php endif; ?>
      <?php if ($copy) : ?>
        <p style="color: <?php echo $text_color;?>"><?php echo $copy; ?></p>
      <?php endif; ?>
      <ul class="offering-simple__list">
        <?php while (have_rows('offerings')) : the_row(); 
          $optional_link = get_sub_field('optional_link');  
          $icon_color = get_sub_field('icon_color');
          $icon_text_color = get_sub_field('icon_text_color');
        ?>
          <li class="offering-simple__item">
            <?php 
            $link = $optional_link;
            if( $link ): 
                $link_url = $link['url'];
                $link_title = $link['title'];
                $link_target = $link['target'] ? $link['target'] : '_self';
                ?>
                <a style="color: <?php echo $icon_color;?>" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
                  <span class="sr-only"><?php echo esc_html( $link_title ); ?></span>
            <?php endif; ?>
            <svg class="icon icon__offerings">
              <use xlink:href="#icon-<?php the_sub_field('icon'); ?>"></use>
            </svg>
            <h3 style="color: <?php echo $icon_text_color;?>"><?php the_sub_field('title'); ?></h3>
            <?php if( $link ):?>
              </a>
            <?php endif; ?>
          </li>
        <?php endwhile; ?>
      </ul>
    </div>
  </div>
<?php endif; ?>
