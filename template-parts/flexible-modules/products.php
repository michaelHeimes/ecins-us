<?php

/**
 * Products module
 *
 * @package      sixheads
 **/
$title = get_sub_field('section_title');
$copy = get_sub_field('copy');
$spacing = get_sub_field('spacing');

if (get_sub_field('products_show') == 'detailed') :

  if (have_rows('products_module', 'option')) : ?>
    <section class="wrapper module-spacing--<?php echo $spacing; ?>">
      <ul class="products-detailed">
        <?php while (have_rows('products_module', 'option')) : the_row(); ?>
          <li>
            <a href="<?php esc_url(the_sub_field('product_link')); ?>">
              <div class="products-detailed__btn products__btn--<?php the_sub_field('product_icon'); ?>">
                <svg class="icon icon__<?php the_sub_field('product_icon'); ?>">
                  <use xlink:href="#icon-<?php the_sub_field('product_icon'); ?>"></use>
                </svg>
                <p class="products-detailed__title">
                  <?php the_sub_field('product_title_short'); ?>
                </p>
              </div>
            </a>
            <p class="products-detailed__overview"><?php the_sub_field('product_overview'); ?></p>
            <p class="products-detailed__more"><a href="<?php esc_url(the_sub_field('product_link')); ?>"><?php esc_url(the_sub_field('product_link_text')); ?></a></p>
          </li>
        <?php endwhile; ?>
      </ul>
    </section>
  <?php endif;

else :

  if (have_rows('products_module', 'option')) : ?>
    <section class="products-simple-section module">
	    <div class="wrapper--narrow">
		      <?php if ($title) : ?>
		        <h2 class="section-title offering-simple__title"><?php echo $title; ?></h2>
		      <?php endif; ?>
		      <?php if ($copy) : ?>
		        <p class="text-center"><?php echo $copy; ?></p>
		      <?php endif; ?>
		      <ul class="products-simple">
		        <?php while (have_rows('products_module', 'option')) : the_row(); ?>
		          <li>
		            <a href="<?php esc_url(the_sub_field('product_link')); ?>">
		              <div class="products-simple__btn products__btn--<?php the_sub_field('product_icon'); ?>">
		                <svg class="icon icon__<?php the_sub_field('product_icon'); ?>">
		                  <use xlink:href="#icon-<?php the_sub_field('product_icon'); ?>"></use>
		                </svg>
		              </div>
		              <h3 class="products-simple__title">
		                <span class="<?php the_sub_field('product_icon'); ?>"><?php the_sub_field('product_title'); ?></span><br>
		                <?php the_sub_field('product_sub-title'); ?>
		              </h3>
		            </a>
		          </li>
		        <?php endwhile; ?>
		      </ul>
	    </div>
    </section>
<?php endif;
endif;
