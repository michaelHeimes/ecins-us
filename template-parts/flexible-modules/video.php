<?php

/**
 * Video module
 *
 * @package sixheads
 **/
$video = get_sub_field('video_embed');
$spacing = get_sub_field('spacing');
$heading = get_sub_field('heading'); 
$bg_color = get_sub_field('background_color');
?>


<div class="video module-spacing--<?php echo $spacing; ?> bg-color-<?php echo $bg_color;?>">
  <div class="wrapper--narrow">
	  
	<?php if ($heading):?>
		<h2 class="section-title"><?php echo $heading;?></h2>  
	<?php endif;?>
	  
    <div class="embed-container">
      <?php echo $video; ?>
    </div>
  </div>
</div>
