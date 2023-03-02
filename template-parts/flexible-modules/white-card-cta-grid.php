<?php

/**
 * White Card CTA Grid
 *
 * @package sixheads
 **/
 $spacing = get_sub_field('spacing');
 $background_color = get_sub_field('background_color');
 $text_color = get_sub_field('text_color');
 $button_color = get_sub_field('button_color');
 $heading = get_sub_field('heading');
 $button_border_color = get_sub_field('button_border_color');
 $button_text_color = get_sub_field('button_text_color');
 $cards = get_sub_field('cards');

?>

<div class="white-card-cta-grid entry-content module-spacing--<?php echo $spacing; ?>" style="background-color: <?php echo $background_color;?>;">
	<div class="inner">
		<div class="wrapper--inner">
		<?php if($heading):?>
		<h2 class="section-title" style="color: <?php echo $text_color?>;"><?php echo $heading;?></h2>
		<?php endif;?>
		<?php if( !empty($cards) ):?>
			<div class="cards-wrap">
			<?php foreach( $cards as $card ):
				$heading = $card['heading'];
				$text = $card['text'];
				$button_link = $card['button_link'];
			?>
				<div class="card text-center">
					<div class="card-inner">
						<?php if( !empty($heading) || !empty($text) ):?>
							<div class="white-bg">
								<?php if( !empty($heading) ):?>
									<h3 style="color: <?php echo $text_color?>;"><?php echo $heading;?></h3>
								<?php endif;?>
								<?php if( !empty($text) ):?>
									<p style="color: <?php echo $text_color?>;"><?php echo $text;?></p>
								<?php endif;?>
							</div>	
						<?php endif;?>
						<?php 
						$link = $button_link;
						if( $link ): 
							$link_url = $link['url'];
							$link_title = $link['title'];
							$link_target = $link['target'] ? $link['target'] : '_self';
							?>
						<div class="btn-wrap text-center">
							<a class="button btn" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>" style="background-color: <?php echo $button_color;?>; color: <?php echo $button_text_color;?>;"><?php echo esc_html( $link_title ); ?></a>
						</div>
						<?php endif; ?>
					</div>
				</div>
			<?php endforeach;?>
			</div>
		<?php endif;?>
		</div>
	</div>
</div>