<?php

/**
 * Rich Text module
 *
 * @package sixheads
 **/

$heading = get_sub_field('heading');
$spacing = get_sub_field('spacing');

?>

<div class="funnel-graphic entry-content module-spacing--<?php echo $spacing; ?>">
	<div class="wrapper--narrow">      
		<h2 class="section-title offering-simple__title"><?php echo $heading;?></h2>
	</div>  
	
	<div class="wrapper--inner wrapper--narrow">
	
		<div id="consolidate" class="hover-item">
			<img id="funnel" src="<?php echo get_template_directory_uri(); ?>/img/funnel.svg" alt="funnel">

			<div class="inner shape-dominant">
				<img class="girl-1 person" src="<?php echo get_template_directory_uri(); ?>/img/people/ECINS_graphic_Girl-1.png" alt="Girl 1">
				<img class="girl-2 person" src="<?php echo get_template_directory_uri(); ?>/img/people/ECINS_graphic_Girl-2.png" alt="Girl 2">
				
				<div class="text-wrap">
					<?php if( have_rows('shape_1') ):?>
						<?php while ( have_rows('shape_1') ) : the_row();?>	

							<h3 class="fade-out"><?php the_sub_field('heading');?></h3>
											
							<div class="hover-text"><?php the_sub_field('hover_copy');?></div>
					
						<?php endwhile;?>
					<?php endif;?>					
					<div class="dots fade-out"><span></span><span></span><span></span></div>
				</div>
			</div>
		</div>
		
		<div id="automate" class="hover-item">

			<div class="inner">
				<img class="girl-1 person" src="<?php echo get_template_directory_uri(); ?>/img/people/ECINS_graphic_Guy-1.png" alt="Girl 1">
				<img class="girl-2 person" src="<?php echo get_template_directory_uri(); ?>/img/people/ECINS_graphic_Girl-3.png" alt="Girl 2">
				
				<div class="text-wrap">
						<?php if( have_rows('shape_2') ):?>
							<?php while ( have_rows('shape_2') ) : the_row();?>	
	
								<h3 class="fade-out"><?php the_sub_field('heading');?></h3>
												
								<div class="hover-text"><?php the_sub_field('hover_copy');?></div>
						
							<?php endwhile;?>
						<?php endif;?>						
					<div class="dots fade-out"><span></span><span></span><span></span></div>
				</div>

			</div>

		</div>
		
	</div>
		
	<div class="wrapper--inner">
		<div class="three-circles">
		
			<div id="collaborate" class="hover-item">
									
				<div class="inner shape-dominant">
					
					<div class="text-wrap">
						<?php if( have_rows('shape_3') ):?>
							<?php while ( have_rows('shape_3') ) : the_row();?>	
	
								<h3 class="fade-out"><?php the_sub_field('heading');?></h3>
												
								<div class="hover-text"><?php the_sub_field('hover_copy');?></div>
						
							<?php endwhile;?>
						<?php endif;?>	
						
						<div class="dots fade-out"><span></span><span></span><span></span></div>
					</div>
	
				</div>
	
			</div>
	
			<div id="colaborate" class="hover-item">
									
				<div class="inner shape-dominant">
					
					<div class="text-wrap">
						<?php if( have_rows('shape_4') ):?>
							<?php while ( have_rows('shape_4') ) : the_row();?>	
	
								<h3 class="fade-out"><?php the_sub_field('heading');?></h3>
												
								<div class="hover-text"><?php the_sub_field('hover_copy');?></div>
						
							<?php endwhile;?>
						<?php endif;?>	
						
						<div class="dots fade-out"><span></span><span></span><span></span></div>
					</div>
	
				</div>
	
			</div>
			
			<div id="colaborate" class="hover-item">
									
				<div class="inner shape-dominant">
					
					<div class="text-wrap">
						<?php if( have_rows('shape_5') ):?>
							<?php while ( have_rows('shape_5') ) : the_row();?>	
	
								<h3 class="fade-out"><?php the_sub_field('heading');?></h3>
												
								<div class="hover-text"><?php the_sub_field('hover_copy');?></div>
						
							<?php endwhile;?>
						<?php endif;?>	
						
						<div class="dots fade-out"><span></span><span></span><span></span></div>
					</div>
	
				</div>
	
			</div>
					
		</div>
	
	</div>
	
	<div class="wrapper--inner gradient-curve-wrap">
		<img id="gradient-curve" class="person" src="<?php echo get_template_directory_uri(); ?>/img/gradient-curve.svg" alt="gradient curve">
	</div>

	
	<div class="wrapper--inner wrapper--narrow">

		<div id="communicate" class="hover-item">

			<div class="inner">
				
				<img class="communicate-people person" src="<?php echo get_template_directory_uri(); ?>/img/communicate-people.svg" alt="communicate and people">
				
				<div class="text-wrap">
									
					<img class="girl-4 person" src="<?php echo get_template_directory_uri(); ?>/img/people/ECINS_graphic_Girl-4.png" alt="Girl 4">

						<?php if( have_rows('shape_6') ):?>
							<?php while ( have_rows('shape_6') ) : the_row();?>	
	
								<h3 class="fade-out"><?php the_sub_field('heading');?></h3>
												
								<div class="hover-text"><?php the_sub_field('hover_copy');?></div>
						
							<?php endwhile;?>
						<?php endif;?>	
					
					<div class="dots fade-out"><span></span><span></span><span></span></div>
				</div>
				
			</div>
		</div>
	
	</div>

</div>
