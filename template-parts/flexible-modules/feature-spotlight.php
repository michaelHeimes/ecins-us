<?php

/**
 * Feature Spotlight
 *
 * @package sixheads
 **/
 $spacing = get_sub_field('spacing');
 $heading = get_sub_field('heading');
 $copy = get_sub_field('copy');
 $button_link = get_sub_field('button_link');
 $image = get_sub_field('image');

?>

<div class="featured-spotlight entry-content module-spacing--<?php echo $spacing; ?>">
	<div class="wrapper--inner">
		<?php if($heading):?>
		<h2 class="section-title text-center"><?php echo $heading;?></h2>
		<?php endif;?>
		
		<?php if( !empty( $copy ) || !empty( $image)  ):?>
		<div class="text-img-wrap">
			<?php if( !empty( $copy ) || !empty( $image)  ):?>
				<div class="text-wrap">
					<?php echo $copy;?>
					<?php 
					$link = $button_link;
					if( $link ): 
						$link_url = $link['url'];
						$link_title = $link['title'];
						$link_target = $link['target'] ? $link['target'] : '_self';
						?>
					<div class="btn-wrap">
						<a class="button btn" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
					</div>
					<?php endif; ?>
				</div>
			<?php endif;?>
			<?php if( !empty( $image ) ) {
				$imgID = $image['ID'];
				$img_alt = trim( strip_tags( get_post_meta( $imgID, '_wp_attachment_image_alt', true ) ) );
				$img = wp_get_attachment_image( $imgID, 'full', false, [ "class" => "", "alt"=>$img_alt] );
				echo '<div class="img-wrap">';
				echo $img;
				echo '</div>';
			}?>
		</div>
		<?php endif;?>
	
	</div>
</div>