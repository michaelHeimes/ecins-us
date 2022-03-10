<?php

$news_types = get_terms( 'news-type', array(
	'hide_empty' => true,
) );

$get_types = array();

foreach ( $news_types as $type ) {
	$get_types[] = $type->term_id;
}

$get_news = new WP_Query( array(
	'post_type'      => array( 'news' ),
	'posts_per_page' => -1,
	'tax_query'      => array(
		array(
			'taxonomy' => 'news-type',
			'terms'    => $get_types,
			'field'    => 'term_id',
			'operator' => 'IN',
		),
	),
) );

$sorted_news = [];

if ( $get_news->have_posts() ) {
	while ( $get_news->have_posts() ) {
		$get_news->the_post();

		foreach ( $news_types as $type ) {
			if ( has_term( $type->term_id, 'news-type', get_the_ID() ) ) {
				if ( ! array_key_exists( $type->name, $sorted_news ) ) {
					$sorted_news[ $type->name ] = array();
				}

				$sorted_news[ $type->name ][] = $post;
			}
		}
	}

	wp_reset_postdata();
}

$news_grid_classes = array( 'content-grid' );

if ( is_front_page() || is_home() ) {
	$news_grid_classes[] = 'front-page';
}
?>
<div class="<?php echo implode( ' ', $news_grid_classes ); ?>">
	<div class="content-grid--inner">
		<div class="content-grid--filters-toggle">
			<button type="button" class="btn secondary">Filter Resources</button>
		</div>
		<div class="content-grid--filters">
			<div class="filter-box news-type" data-filter="news-type">
				<div class="filter-title">Filter</div>
				<div class="filter-values">
					<?php foreach ( $news_types as $type ) { ?>
						<div class="filter-checkbox">
							<input type="checkbox" value="<?php echo $type->term_id; ?>" id="filter-news-type-<?php echo $type->slug; ?>">
							<label for="filter-news-type-<?php echo $type->slug; ?>">
								<?php echo $type->name; ?>
							</label>
						</div>
					<?php } ?>

				</div>
			</div>
		</div>
		<div class="content-grid--results">
			<?php foreach ( $sorted_news as $tax_name => $news ) { ?>
				<div class="results">
					<div class="results--title">
						<?php echo $tax_name; ?>
					</div>

					<?php
					foreach ( $news as $news_post ) {
						$permalink      = get_the_permalink( $news_post->ID );
						$thumbnail_id   = $GLOBALS[ 'ecins_default_thumbnail' ]; // default thumbnail image.
						$news_title = get_field( 'hero_title', $news_post->ID );
						$excerpt        = strip_tags( $news_post->post_content );
						$gated_form     = get_field('news_gravity_form', $news_post->ID);
						$embedded_form     = get_field('embedded_form', $news_post->ID);
						
						if (get_field('news_file', $news_post->ID) && !$gated_form) {
							$news_file = get_field('news_file', $news_post->ID);
							$permalink     = $news_file ? wp_get_attachment_url($news_file) : '#';
						}

						if (get_field('news_file', $news_post->ID) && get_field('embedded_form', $news_post->ID) ) {
							$news_file = get_field('news_file', $news_post->ID);
							$permalink      = get_the_permalink( $news_post->ID );							
						}

						if (get_field('news_cover_image', $news_post->ID)) {
							$thumbnail_id = get_field('news_cover_image', $news_post->ID);
						}						


						if ( has_post_thumbnail( $news_post->ID ) ) {
							$thumbnail_id = get_post_thumbnail_id( $news_post->ID );
						}

						if ( empty( $news_title ) ) {
							$news_title = get_the_title( $news_post->ID );
						}

						if ( strlen( $excerpt ) > 150 ) {
							$excerpt = trim( substr( $excerpt, 0, 150 ) ) . '...';
						}
						?>
						<a href="<?php echo $permalink; ?>" class="content-card">
							<div class="content-card--box">
								<div class="content-card--image">
									<?php echo wp_get_attachment_image( $thumbnail_id, 'news_card', false, array( 'alt' => $news_title ) ); ?>
								</div>
								<div class="content-card--title">
									<?php echo $news_title; ?>
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

					<?php } ?>

				</div>
			<?php } ?>
		</div>

		<?php
		/*
		/**
		 * Fix Pagination with $GLOBALS['wp_query'] = {custom_query}
		 *
		 * @see get_the_posts_pagination use $GLOBALS['wp_query']
		 * https://developer.wordpress.org/reference/functions/get_the_posts_pagination/#source-code
		 *
		 * /
		$_wp_query = $GLOBALS[ 'wp_query' ];
		$GLOBALS[ 'wp_query' ] = $the_posts;

		the_posts_pagination();

		$GLOBALS[ 'wp_query' ] = $_wp_query;
		unset( $_wp_query );
		*/
		?>
	</div>
</div>