<?php

$spacing = get_sub_field('spacing');
$heading = get_sub_field('heading');
?>

<div class="customer-logos module-spacing--<?php echo $spacing; ?>">
	<?php if($heading):?>
	<div class="wrapper--narrow wrapper--inner">
		<h2 class="section-title"><?php echo $heading;?></h2>
	</div>
	<?php endif;?>
  <div class="wrapper--narrow wrapper--inner company-logos-slider">
		
		<?php 
		$images = get_sub_field('company_logos');
		if( $images ): ?>
	        <?php foreach( $images as $image ): ?>
	            <div class="text-center">
	                <img src="<?php echo esc_url($image['sizes']['thumbnail']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
	            </div>
	        <?php endforeach; ?>
		<?php endif; ?>
		

  </div>
</div>