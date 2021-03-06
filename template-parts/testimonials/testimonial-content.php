
<?php if( $heading = get_sub_field('heading')):?>
<h2 class="section-title offering-simple__title text-center"><?php echo $heading ?></h2>
<?php endif;?>

<div class="wrapper--inner wrapper--narrow slider--testimonials">
	<?php
	$testimonials = get_sub_field('testimonials');
	if( $testimonials ): ?>
	    <?php foreach( $testimonials as $post ): 

	        // Setup this post for WP functions (variable must be named $post).
	        setup_postdata($post); 
	        $thumbnail = get_post_thumbnail_id();
			$imageUrl = wp_get_attachment_url($thumbnail, 'full');
			$imageSrc = aq_resize($imageUrl, 526, 388,  true, true, true);
		?>
	      <div class="slide">
	        <article class="testimonial__item">
	          <div class="testimonial__img">
	            <img src="<?php echo $imageSrc; ?>" alt="">
	          </div>
	          <div class="testimonial__content">
	            <p class="testimonial__quote"><?php the_field('testimonial_quote'); ?></p>
	            <p class="testimonial__cite">
	              <strong><?php the_title(); ?></strong>,
	              <?php if (get_field('position')) : ?>
	                <?php the_field('position'); ?>,
	              <?php endif; ?>
	              <?php if (get_field('organisation')) : ?>
	                <?php the_field('organisation'); ?>
	              <?php endif; ?>
	            </p>
	          </div>
	        </article>
	      </div>
	    <?php endforeach; ?>
	    <?php 
	    // Reset the global post object so that the rest of the page works correctly.
	    wp_reset_postdata(); ?>
	    
	<?php else:?>

	  <?php
	  // the query
	  $args = array(
	    'post_type'              => 'testimonials',
	    'posts_per_page'         => '999999',
	  );
	
	  $testimonial = new WP_Query($args); ?>
	
	  <?php if ($testimonial->have_posts()) : ?>
	
	    <!-- the loop -->
	    <?php while ($testimonial->have_posts()) : $testimonial->the_post();
	
	      $thumbnail = get_post_thumbnail_id();
	      $imageUrl = wp_get_attachment_url($thumbnail, 'full');
	      $imageSrc = aq_resize($imageUrl, 526, 388,  true, true, true);
	
	    ?>
	      <div class="slide">
	        <article class="testimonial__item">
	          <div class="testimonial__img">
	            <img src="<?php echo $imageSrc; ?>" alt="">
	          </div>
	          <div class="testimonial__content">
	            <p class="testimonial__quote"><?php the_field('testimonial_quote'); ?></p>
	            <p class="testimonial__cite">
	              <strong><?php the_title(); ?></strong>,
	              <?php if (get_field('position')) : ?>
	                <?php the_field('position'); ?>,
	              <?php endif; ?>
	              <?php if (get_field('organisation')) : ?>
	                <?php the_field('organisation'); ?>
	              <?php endif; ?>
	            </p>
	          </div>
	        </article>
	      </div>
	    <?php endwhile; ?>
	    <!-- end of the loop -->

    <?php wp_reset_postdata(); ?>
  <?php endif; ?>	    
	    
	<?php endif; ?>
</div>

	

