<?php

/**
 * Template part for displaying Flexible Content Modules
 *
 * @package sixheads
 */

?>

<?php

// check if the flexible content field has rows of data
if (have_rows('flexible_content')) :

  // loop through the rows of data
  while (have_rows('flexible_content')) : the_row();

    if (get_row_layout() == 'hero_banner') :

      get_template_part('template-parts/flexible-modules/hero-banner');

    elseif (get_row_layout() == 'hero_slider') :

      get_template_part('template-parts/flexible-modules/hero-slider');

    elseif (get_row_layout() == 'video_banner') :

      get_template_part('template-parts/flexible-modules/video-banner');

    elseif (get_row_layout() == 'page_intro') :

      get_template_part('template-parts/flexible-modules/page-intro');
      
    elseif (get_row_layout() == 'image_wcustom_color_background') :

      get_template_part('template-parts/flexible-modules/image-wcustom-color-background');
      
    elseif (get_row_layout() == 'case_study_cta') :

      get_template_part('template-parts/flexible-modules/case-study-cta');

    elseif (get_row_layout() == 'customer_logos') :

      get_template_part('template-parts/flexible-modules/customer-logos');

    elseif (get_row_layout() == 'rich_text') :

      get_template_part('template-parts/flexible-modules/rich-text');
      
    elseif (get_row_layout() == 'resources') :
      
      get_template_part('template-parts/flexible-modules/resources');

    elseif (get_row_layout() == 'word_art') :

      get_template_part('template-parts/flexible-modules/word-art');

    elseif (get_row_layout() == 'funnel_graphic') :

      get_template_part('template-parts/flexible-modules/funnel-graphic');

    elseif (get_row_layout() == 'products') :

      get_template_part('template-parts/flexible-modules/products');

    elseif (get_row_layout() == 'offering_simple') :

      get_template_part('template-parts/flexible-modules/offering-simple');

    elseif (get_row_layout() == 'offering_detailed') :

      get_template_part('template-parts/flexible-modules/offering-detailed');

    elseif (get_row_layout() == 'offering_product') :

      get_template_part('template-parts/flexible-modules/offering-product');

    elseif (get_row_layout() == 'call_to_action') :

      get_template_part('template-parts/flexible-modules/cta');

    elseif (get_row_layout() == 'list_columns') :

      get_template_part('template-parts/flexible-modules/list-columns');

    elseif (get_row_layout() == 'testimonials') :

      get_template_part('template-parts/flexible-modules/testimonials');

    elseif (get_row_layout() == 'latest_news') :

      get_template_part('template-parts/flexible-modules/latest-news');

    elseif (get_row_layout() == 'recent_case_studies') :

      get_template_part('template-parts/flexible-modules/case-studies');

    elseif (get_row_layout() == 'video') :

      get_template_part('template-parts/flexible-modules/video');

    elseif (get_row_layout() == 'team') :

      get_template_part('template-parts/flexible-modules/team');

    elseif (get_row_layout() == 'demo') :

      get_template_part('template-parts/demo-or-ebook/demo-cta');

    elseif (get_row_layout() == 'simple_title_banner') :

      get_template_part('template-parts/flexible-modules/simple-banner');
      
    elseif (get_row_layout() == 'white_card_cta_grid') :
    
      get_template_part('template-parts/flexible-modules/white-card-cta-grid');

    elseif (get_row_layout() == 'feature_spotlight') :
      
      get_template_part('template-parts/flexible-modules/feature-spotlight');

    elseif (get_row_layout() == 'logos_slider_optional_linking') :
      
      get_template_part('template-parts/flexible-modules/logos-slider-optional-linking');

    endif;

  endwhile;

else :

// no layouts found

endif;

?>
