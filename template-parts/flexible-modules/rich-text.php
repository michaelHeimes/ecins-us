<?php

/**
 * Rich Text module
 *
 * @package sixheads
 **/

$heading = get_sub_field('heading');
$content = get_sub_field('rich_text');
$spacing = get_sub_field('spacing');

?>

<div class="rich-text entry-content module-spacing--<?php echo $spacing; ?>">
  <div class="wrapper--narrow">
	<?php if($heading):?>
		<h2 class="section-title"><?php echo $heading;?></h2>
	<?php endif;?>
	
    <?php echo $content; ?>
  </div>
</div>
