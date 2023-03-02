<?php

/**
 * Logos Slider Optional Linking
 *
 * @package sixheads
 **/
 $spacing = get_sub_field('spacing');
 $heading = get_sub_field('heading');
 $background_color = get_sub_field('background_color');
 $text_color = get_sub_field('text_color');
 $logos = get_sub_field('logos');
?>

<div class="logos-slider-optional-linking entry-content module-spacing--<?php echo $spacing; ?>" style="background-color: <?php echo $background_color;?>;">
	<div class="wrapper--inner" >
		<?php if($heading):?>
		<h2 class="section-title text-center" style="color: <?php echo $text_color?>;"><?php echo $heading;?></h2>
		<?php endif;?>
		
		<?php if( !empty($logos) ):?>
			<div class="logos-linked-slider">
			<?php foreach( $logos as $logo ):
				$image = $logo['logo'];
				$link_optional = $logo['link_optional'];
			?>
				<div class="slide text-center">
					<?php if( !empty($link_optional) ):?>
						<a href="<?php echo esc_url($link_optional);?>" target="_blank">
					<?php endif;?>
						<?php if( !empty( $image ) ) {
							$imgID = $image['ID'];
							$img_alt = trim( strip_tags( get_post_meta( $imgID, '_wp_attachment_image_alt', true ) ) );
							$img = wp_get_attachment_image( $imgID, 'full', false, [ "class" => "", "alt"=>$img_alt] );
							echo '<div class="img-wrap">';
							echo $img;
							echo '</div>';
						}?>
					
					<?php if( !empty($link_optional) ):?>
						</a>
					<?php endif;?>
				</div>
			<?php endforeach;?>
			</div>
		<?php endif;?>
	</div>
</div>