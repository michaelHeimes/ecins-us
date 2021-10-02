<?php

/**
 * Page Intro casestudies
 *
 * @package      sixheads
 **/

$heading = get_field('page_intro_heading_casestudies', 'option');
$intro = get_field('page_intro_casestudies', 'option');
?>

<div class="page-intro wrapper--inner wrapper--narrow module-spacing--both">
	<?php if($heading):?>
		<h2 class="section-title"><?php echo $heading;?></h2>
	<?php endif;?>
  <?php echo $intro; ?>
</div>



