<?php 

function create_post_type(){
	register_post_type( 'video' , array(
		'labels' => array(
			'name' => "Video",
			'singular_name' => 'Video'
		),
		'public' => true,
		'has_archive' => true,
		'menu_position' => 4,
		'menu_icon' => 'dashicons-camera'
	));
}

add_action( 'init' , 'create_post_type' );

function create_taxonomy(){
	register_taxonomy(
		'video_category',
		'video',
		array(
			'labels' => array(
				'name' => 'Video Categories'
				),
				'hierarchical' => true,
				'show_admin_column' => true,
			)
	);
}

add_action( 'init' , 'create_taxonomy' );

// A function for a sidebar that contains all taxonomies for Custom Post Types (Videos).   [En funktion för ett sidofält som innehåller alla taxonomier för Custom Post types (Video)]

function sidebar_cpt_taxonomy(){
	$taxonomy = 'video_category';
	$terms = get_terms($taxonomy, array('hide_empty' => false));

	if ( $terms ) { 
		echo '<p><strong>';
		echo 'Video Categories: </strong>';
		echo '</p>';
		echo '<ul>';
	    foreach ( $terms as $term ) { ?>
	        <li><a href="<?php echo get_term_link($term->slug, $taxonomy); ?>"><?php echo $term->name; ?> </a></li>
		<?php };
		echo '</ul>';
	}
}