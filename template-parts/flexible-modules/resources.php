<?php

/**
 * Rich Text module
 *
 * @package sixheads
 **/
$background_color = get_sub_field('background_color');
$heading = get_sub_field('heading');
$heading_color = get_sub_field('heading_color');
$content = get_sub_field('rich_text');
$resources = get_sub_field('resources');
$spacing = get_sub_field('spacing');

?>
<div class="resources-module entry-content module-spacing--<?php echo $spacing; ?>" style="background-color: <?php echo $background_color;?>">
  <div class="content-grid-wrapper">
    <div class="wrapper--inner">
      <div class="content-grid">
        <div class="content-grid--inner">
          <div class="content-grid--results">
              <?php if($heading):?>
                <h2 class="section-title" style="color: <?php echo $heading_color;?>"><?php echo $heading;?></h2>
              <?php endif;?>
              
              <?php
              if( $resources ): ?>
                  <div class="content-grid--results">
                    <div class="results">
                      <?php foreach( $resources as $resource ): 
                      $permalink = get_the_permalink( $resource->ID );
                      $thumbnail_id   = $GLOBALS[ 'ecins_default_thumbnail' ]; // default thumbnail image.
                      $resource_title = get_field( 'hero_title', $resource->ID );
                      $excerpt        = strip_tags( $resource->post_content );
                      $gated_form     = get_field('resource_gravity_form', $resource->ID);
                      $embedded_form     = get_field('embedded_form', $resource->ID);
                      
                      if (get_field('resource_file', $resource->ID) && !$gated_form) {
                        $resource_file = get_field('resource_file', $resource->ID);
                        $permalink     = $resource_file ? wp_get_attachment_url($resource_file) : '#';
                      }
                      
                      if (get_field('resource_file', $resource->ID) && get_field('embedded_form', $resource->ID) ) {
                        $resource_file = get_field('resource_file', $resource->ID);
                        $permalink      = get_the_permalink( $resource->ID );							
                      }
                      
                      if (get_field('resource_cover_image', $resource->ID)) {
                        $thumbnail_id = get_field('resource_cover_image', $resource->ID);
                      }						
                      
                      
                      if ( has_post_thumbnail( $resource->ID ) ) {
                        $thumbnail_id = get_post_thumbnail_id( $resource->ID );
                      }
                      
                      if ( empty( $resource_title ) ) {
                        $resource_title = get_the_title( $resource->ID );
                      }
                      
                      if ( strlen( $excerpt ) > 150 ) {
                        $excerpt = trim( substr( $excerpt, 0, 150 ) ) . '...';
                      }
                      ?>
                      <a href="<?php echo $permalink; ?>" class="content-card">
                        <div class="content-card--box hi">
                          <div class="content-card--image">
                            <?php echo wp_get_attachment_image( $thumbnail_id, 'resource_card', false, array( 'alt' => $resource_title ) ); ?>
                          </div>
                          <div class="content-card--title">
                            <?php echo $resource_title; ?>
                          </div>
                          <?php /*
                          <div class="content-card--desc">
                            <?php echo wpautop( $excerpt ); ?>
                          </div>
                          */ ?>
                          <div class="content-card--link">
                            <span>Read More</span>
                          </div>
                        </div>
                      </a>
                      <?php endforeach; ?>
                    </div>
                  </div>
              <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

