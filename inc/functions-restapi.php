<?php

// -----------------------------------------------------------------------------
//! REST API
// -----------------------------------------------------------------------------


/**
 * Register API routes
 */
add_action(
	'rest_api_init',
	function() {

		register_rest_route( 'ecins/v2', '/resources/',
			array(
				'methods'             => 'GET',
				'callback'            => 'ecins_get_resources',
				'permission_callback' => '__return_true'
			) );

		register_rest_route( 'ecins/v2', '/news/',
			array(
				'methods'             => 'GET',
				'callback'            => 'ecins_get_news',
				'permission_callback' => '__return_true'
			) );

	}
);

// -----------------------------------------------------------------------------
//! Get News
// -----------------------------------------------------------------------------

function ecins_get_news( $data ) {
	$out = array(
		'data' => array(),
		'meta' => array(),
	);

	$args = array(
		'post_type'      => 'news',
		'posts_per_page' => -1, // $data[ 'per_page' ],
		'orderby'        => 'title', // $data[ 'orderby' ],
		'order'          => 'ASC', // $data[ 'order' ],
		// 's'              => $data[ 'search' ],
		// 'paged'          => $data[ 'page' ],
	);

	$tax_queries = $data[ 'tax_queries' ] ? $data[ 'tax_queries' ] : array();

	if ( count( $tax_queries ) ) :
		$args[ 'tax_query' ][ 'relation' ] = 'OR';

		foreach ( $data[ 'tax_queries' ] as $tax_query ) {
			$args[ 'tax_query' ][] = array(
				'taxonomy' => $tax_query[ 'taxonomy' ],
				'field'    => 'term_id',
				'terms'    => $tax_query[ 'term_id' ],
			);
		}
	endif;

	$query = new WP_Query( $args );

	if ( empty( $query->posts ) ) {
		return json_encode( $out );
	}

	while ( $query->have_posts() ) {
		$query->the_post();

		// get the Case Study Type tax
		$type_names = array();
		$types      = get_the_terms( get_the_ID(), 'news-type' );

		if ( $types ) {
			foreach ( $types as $type ) {
				$type_names[] = array(
					'name' => $type->name,
					'slug' => $type->slug,
					'id'   => $type->term_id,
				);
			}
		}

		$news_title = get_field( 'hero_title', get_the_ID() );

		if ( empty( $news_title ) ) {
			$news_title = get_the_title( get_the_ID() );
		}

		$excerpt = strip_tags( get_the_content() );

		if ( strlen( $excerpt ) > 150 ) {
			$excerpt = trim( substr( $excerpt, 0, 150 ) ) . '...';
		}

		$permalink    = get_the_permalink( get_the_ID() );
		$thumbnail_id = 0;
		$gated_form   = get_field('news_gravity_form', get_the_ID());

		if (get_field('news_file', get_the_ID()) && !$gated_form) {
			$news_file = get_field('news_file', get_the_ID());
			$permalink     = $news_file ? wp_get_attachment_url($news_file) : '#';
		}

		if (get_field('news_link', get_the_ID())) {
			$permalink = get_field('news_link', get_the_ID());
		}


		if ( ! $thumbnail_id ) {
			// get the logo or show defautl
			$thumbnail_id = $GLOBALS[ 'ecins_default_thumbnail' ]; // default placeholder image.

			if ( has_post_thumbnail( get_the_ID() ) ) {
				$thumbnail_id = get_post_thumbnail_id( get_the_ID() );
			}
		}

		$image = $thumbnail_id ? wp_get_attachment_image_url( $thumbnail_id, 'news_card' ) : '';

		// pass vars to JS
		foreach ( $type_names as $type_name ) {
			$out[ 'data' ][ $type_name[ 'id' ] ][ 'title' ] = $type_name[ 'name' ];
			$out[ 'data' ][ $type_name[ 'id' ] ][] = array(
				'title'  => $news_title,
				'link'   => $permalink,
				'target' => false,
				'desc'   => false, // wpautop( $excerpt ),
				'image'  => $image,
				'types'  => $type_names,
			);
		}
	};

	$out[ 'meta' ] = array(
		'total'    => $query->found_posts,
		'pages'    => $query->max_num_pages,
		'per_page' => $data[ 'per_page' ],
	);

	return json_encode( $out );
}

// -----------------------------------------------------------------------------
//! Get Resources
// -----------------------------------------------------------------------------

function ecins_get_resources( $data ) {
	$out = array(
		'data' => array(),
		'meta' => array(),
	);

	$args = array(
		'post_type'      => 'resource',
		'posts_per_page' => -1, // $data[ 'per_page' ],
		'orderby'        => 'title', // $data[ 'orderby' ],
		'order'          => 'ASC', // $data[ 'order' ],
		// 's'              => $data[ 'search' ],
		// 'paged'          => $data[ 'page' ],
	);

	$tax_queries = $data[ 'tax_queries' ] ? $data[ 'tax_queries' ] : array();

	if ( count( $tax_queries ) ) :
		$args[ 'tax_query' ][ 'relation' ] = 'OR';

		foreach ( $data[ 'tax_queries' ] as $tax_query ) {
			$args[ 'tax_query' ][] = array(
				'taxonomy' => $tax_query[ 'taxonomy' ],
				'field'    => 'term_id',
				'terms'    => $tax_query[ 'term_id' ],
			);
		}
	endif;

	$query = new WP_Query( $args );

	if ( empty( $query->posts ) ) {
		return json_encode( $out );
	}

	while ( $query->have_posts() ) {
		$query->the_post();

		// get the Case Study Type tax
		$type_names = array();
		$types      = get_the_terms( get_the_ID(), 'resource-type' );

		if ( $types ) {
			foreach ( $types as $type ) {
				$type_names[] = array(
					'name' => $type->name,
					'slug' => $type->slug,
					'id'   => $type->term_id,
				);
			}
		}

		$resource_title = get_field( 'hero_title', get_the_ID() );

		if ( empty( $resource_title ) ) {
			$resource_title = get_the_title( get_the_ID() );
		}

		$excerpt = strip_tags( get_the_content() );

		if ( strlen( $excerpt ) > 150 ) {
			$excerpt = trim( substr( $excerpt, 0, 150 ) ) . '...';
		}

		$permalink    = get_the_permalink( get_the_ID() );
		$thumbnail_id = 0;
		$gated_form   = get_field('resource_gravity_form', get_the_ID());

		if (get_field('resource_file', get_the_ID()) && !$gated_form) {
			$resource_file = get_field('resource_file', get_the_ID());
			$permalink     = $resource_file ? wp_get_attachment_url($resource_file) : '#';
		}

		if (get_field('resource_link', get_the_ID())) {
			$permalink = get_field('resource_link', get_the_ID());
		}


		if ( ! $thumbnail_id ) {
			// get the logo or show defautl
			$thumbnail_id = $GLOBALS[ 'ecins_default_thumbnail' ]; // default placeholder image.

			if ( has_post_thumbnail( get_the_ID() ) ) {
				$thumbnail_id = get_post_thumbnail_id( get_the_ID() );
			}
		}

		$image = $thumbnail_id ? wp_get_attachment_image_url( $thumbnail_id, 'resource_card' ) : '';

		// pass vars to JS
		foreach ( $type_names as $type_name ) {
			$out[ 'data' ][ $type_name[ 'id' ] ][ 'title' ] = $type_name[ 'name' ];
			$out[ 'data' ][ $type_name[ 'id' ] ][] = array(
				'title'  => $resource_title,
				'link'   => $permalink,
				'target' => false,
				'desc'   => false, // wpautop( $excerpt ),
				'image'  => $image,
				'types'  => $type_names,
			);
		}
	};

	$out[ 'meta' ] = array(
		'total'    => $query->found_posts,
		'pages'    => $query->max_num_pages,
		'per_page' => $data[ 'per_page' ],
	);

	return json_encode( $out );
}