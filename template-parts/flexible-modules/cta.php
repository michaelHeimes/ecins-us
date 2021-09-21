<?php

/**
 * CTA module
 *
 * @package sixheads
 **/
$style = get_sub_field('cta_style');
$title = get_sub_field('cta_title');
$text = get_sub_field('cta_text');
$button = get_sub_field('cta_button');
$link = get_sub_field('cta_link');
$spacing = get_sub_field('spacing');

?>
<div class="cta module-spacing--<?php echo $spacing; ?> style-<?php echo $style; ?>">
  <div class="wrapper--inner wrapper--narrow">
    <h2 class="cta__title"><?php echo esc_html($title); ?></h2>
    
    <?php if( $style == 'centered-blue' ):?>
    	<div><?php echo $text; ?></div>
    	<?php if($button):?>
	    <p class="cta__btn"><a class="btn" href="<?php echo esc_url($link); ?>"><?php echo esc_html($button); ?></a></p>
	    <?php endif;?>
    <?php endif;?>
    
    <?php if( $style == 'left-green' ):?>
    <div class="bottom">
	    <div><?php echo $text; ?></div>
	    <p class="cta__btn"><a class="btn" href="<?php echo esc_url($link); ?>"><?php echo esc_html($button); ?></a></p>
    </div>
    <?php endif;?>
    
  </div>
</div>
