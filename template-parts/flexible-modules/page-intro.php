<?php

/**
 * Page Intro module
 *
 * @package      sixheads
 **/

$heading = get_sub_field('heading');
$intro = get_sub_field('page_intro');
$spacing = get_sub_field('spacing');
?>

<div class="page-intro wrapper--inner wrapper--narrow module-spacing--<?php echo $spacing; ?>">
	<?php if($heading):?>
		<h2 class="section-title"><?php echo $heading;?></h2>
	<?php endif;?>
  <?php echo $intro; ?>
</div>
