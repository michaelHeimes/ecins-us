<div class="wrapper--inner">
	<div class="content-grid">
		<div class="content-grid--inner">
			<div class="content-grid--results">
				<?php	
				$args = array(  
				    'post_type' => 'resource',
				    'post_status' => 'publish',
				    'meta_key'  => 'webinar_date',
				    'orderby'   => 'meta_value_num',
				    'order'     => 'ASC',					    
					'posts_per_page' => 99999,
					'tax_query'      => array(
						array(
							'taxonomy' => 'resource-type',
							'terms'    => 'webinars',
							'field'    => 'slug',
							'operator' => 'IN',
						),
					),
					'meta_query' => array(
						'key' => 'webinar_date',
						'compare' => '>=',
						'value' => $today,
					),
				);
				
				$loop = new WP_Query( $args ); 
				
				    if ( $loop->have_posts() ) :?>
				    <div class="webinars results">
					    <h2 class="results--title">Webinars</h2>
					    <?php while ( $loop->have_posts() ) : $loop->the_post();?>
					    	<?php $date_string = get_field('webinar_date'); $date = DateTime::createFromFormat('Ymd', $date_string);?>
					    	<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article">
						    	<div class="inner">
							    	<span><?php the_field('webinar_name');?>, </span><span><?php echo $date->format('l, F j, Y');?>, </span><span><?php the_field('webinar_timeframe');?></span>
						    	<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">Register</a>
					    	</article>
					    <?php
					    endwhile;?>
				    </div>
				    <?php endif;
				
				wp_reset_postdata(); 
				
				
				$args = array(  
				    'post_type' => 'event',
				    'post_status' => 'publish',
				    'meta_key'  => 'event_end_date',
				    'orderby'   => 'meta_value_num',
				    'order'     => 'ASC',					    
					'posts_per_page' => 99999,
					'tax_query'      => array(
						array(
							'taxonomy' => 'event-type',
							'terms'    => 'in-person',
							'field'    => 'slug',
							'operator' => 'IN',
						),
					),
					'meta_query' => array(
						'key' => 'event_end_date',
						'compare' => '>=',
						'value' => $today,
					),
				);
				
				$loop = new WP_Query( $args ); 
				
				    if ( $loop->have_posts() ) :?>
				    
				    <div class="in-person results">
					    <h2 class="results--title">In-person Events</h2>
					    <?php while ( $loop->have_posts() ) : $loop->the_post();?>
							<?php $date_string_start = get_field('event_start_date'); $start_date = DateTime::createFromFormat('Ymd', $date_string_start);?>
							<?php $date_string_end = get_field('event_start_date'); $end_date = DateTime::createFromFormat('Ymd', $date_string_end);?>
					    	<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article">
						    	<div class="inner">
							    	<div class="top">
								    	<div class="left">
									    	<div class="date-badge">
										    	<span class="month"><?php echo $start_date->format('M');?></span>
												<span class="day notranslate"><?php echo $start_date->format('j');?></span>
									    	</div>
								    	</div>
								    	
								    	<div class="right">
									    	<h3><?php the_title();?></h3>
									    	<div class="dates"><span><?php echo $start_date->format('m/d/Y');?>–<?php echo $end_date->format('m/d/Y');?></span></div>
								    	</div>
							    	</div>
							    	<div class="bottom">
									    <div class="description">
									    	<?php the_field('event_description');?>
											<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">Lean More >></a>
								    	</div>							    	
							    	</div>
					    	</article>
					    <?php
					    endwhile;?>
				    </div>
				    
				    <?php
					endif;
				
				wp_reset_postdata(); ?>

		</div>
	</div>
</div>