<?php

/**
 * CTA module
 *
 * @package sixheads
 **/
$title = get_sub_field('cta_title');
$text = get_sub_field('cta_text');
$button = get_sub_field('cta_button');
$link = get_sub_field('cta_link');
$spacing = get_sub_field('spacing');
?>
<div class="cta module-spacing--<?php echo $spacing; ?>">
  <div class="wrapper--inner wrapper--narrow">
    <h2 class="cta__title"><?php echo esc_html($title); ?></h2>
    <div class="bottom">
	    <p><?php echo esc_html($text); ?></p>
	    <p class="cta__btn"><a class="btn" href="<?php echo esc_url($link); ?>"><?php echo esc_html($button); ?></a></p>
    </div>
  </div>
</div>
