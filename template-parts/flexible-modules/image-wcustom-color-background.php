<?php
$spacing = get_sub_field('spacing');
$background_color = get_sub_field('background_color');
$button_color = get_sub_field('button_color');
$button_border_color = get_sub_field('button_border_color');
$button_text_color = get_sub_field('button_text_color');
?>
<div class="image-wcustom-color-background entry-content module-spacing--<?php echo $spacing; ?>" style="background-color: <?php the_sub_field('background_color');?>">
  <div class="wrapper--inner wrapper--narrow ">
		<?php 
		$image = get_sub_field('image');
		if( !empty( $image ) ): ?>
			<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
		<?php endif; ?>  
		
		<?php 
		$link = get_sub_field('button_link');
		if( $link ): 
			$link_url = $link['url'];
			$link_title = $link['title'];
			$link_target = $link['target'] ? $link['target'] : '_self';
			?>
		<div class="btn-wrap">
			<a class="btn" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>" style="background-color: <?php echo $button_color;?>; border-color: <?php echo $button_border_color;?>; color: <?php echo $button_text_color;?>"><?php echo esc_html( $link_title ); ?></a>
		</div>
		<?php endif; ?>
			
  </div>
</div>
