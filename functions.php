<?php

require "includes/cpt.php";


/*---------------------------------------*/
/*  Theme Support	*/
/*--------------------------------------*/

// For loading in stylesheets, jquery, java, etc

function theme_scripts(){
	// wp_enqueue_style( 'bootstrap' , get_template_directory_uri().'/css/bootstrap.css' );  // Don't need this with SASS
	wp_enqueue_style( 'font-awesome' , get_template_directory_uri().'/css/font-awesome.css' );  
	wp_enqueue_style( 'main' , get_template_directory_uri().'/css/main.css' );

	wp_enqueue_script( 'owl' , get_template_directory_uri().'/js/owl.carousel.js' , array( 'jquery' ) , true , true );
	wp_enqueue_script( 'scripts' , get_template_directory_uri().'/js/scripts.js' , array( 'jquery' ) , false , true );
}

add_action( 'wp_enqueue_scripts' , 'theme_scripts' );


/* This function allows you to modify your pages menu within Wordpress */

	function register_my_menu() {
	 	register_nav_menu('header-menu',__( 'Header Menu' ));
	 	register_nav_menu('footer-menu',__( 'Footer Menu' ));
	} 
	add_action( 'init', 'register_my_menu' );


// This enables the editing of a sidebar (and thus widgets) in Wordpress,

function register_my_sidebars(){
	register_sidebar(array(
		'name' => 'My Sidebar',
		'id' => 'my-sidebar',
		'before_widget' => '<div>',
		'after_widget' => '</div>',
		'before_title' => '<h4>',
		'after-title' => '</h4>'
	));
	register_sidebar(array(
		'name' => 'My Sidebar 2',
		'id' => 'my-sidebar-2',
		'before_widget' => '<div>',
		'after_widget' => '</div>',
		'before_title' => '<h4>',
		'after-title' => '</h4>'
	));
}

add_action( 'widgets_init' , 'register_my_sidebars' );

// change thumbnail sizes

add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 250, 250);


/* Adding options page for Advanced Custom Fields (ACF) */

if ( function_exists( 'acf_add_options_page' ) ) {
	acf_add_options_page();
}


/* The following allow for editing of various elements with Wordpress eg adding an image to a post/page, adding an image to the background, etc */

add_theme_support( 'post-thumbnails' ); 
add_theme_support( 'custom-background' );
add_theme_support( 'customize-selective-refresh-widgets' ); 

add_post_type_support( 'page' , array( 'excerpt' ) );
add_post_type_support( 'post' , array( 'page-attributes' ) );


# Apply Categories to pages

function add_category_to_pages(){
	register_taxonomy_for_object_type('category','page');		// For pages
	register_taxonomy_for_object_type('post_tag','page');	
	register_taxonomy_for_object_type('category','attachment');   // For media
	register_taxonomy_for_object_type('post_tag','attachment');
}

add_action( 'init' , 'add_category_to_pages' );

/*-------------------------------------------*/
/*  Custom Functions  */
/*------------------------------------------*/

//  This function creates next/prev buttons to any post sections (Gear & Video).   [Denna funktion skapar Nästa / Föregående knappar för alla inlägg sektioner (Gear & Video)].

function navigation() {

		$args = array(
			'show_all' => true,
			'prev_next' => false
		);

		echo '<div class="navigation-row">';

			if ( get_previous_posts_link() ) :
				echo '<span class="new-posts">' . '<i class="fa fa-caret-left" aria-hidden="true"></i>';
				echo previous_posts_link( "Newer Posts" );
				echo '</span>' . ' ';
			endif; 

			if ( get_the_posts_pagination() ) { ?>
				<span class="navigation-row-pages">
					<?php echo paginate_links( $args ); ?>
				</span>
			<?php }
				
			if ( get_next_posts_link() ) :
				echo '<span class="old-posts">';
				echo next_posts_link( "Older Posts" );
				echo '<i class="fa fa-caret-right" aria-hidden="true"></i>';
				echo '</span>';
			endif;

		echo '</div>';
	}
	

// This function finds the thumbnail that a particular page then prints it where you want it. (Denna funktion hittar en thumbnail  från en viss sida och spottas ut den). 

	function get_thumbnail_by_page_title( $title ){
		$page = get_page_by_title( $title );
		echo get_the_post_thumbnail( $page , "full" );
	}

//  This is used for collecting an image and then printing it. (Detta används för att samla in en bild och sedan spotta ut den).

function get_image( $file , $echo = false ){
	$url = get_template_directory_uri() . '/img/' . $file;
	if ( $echo ) {
		echo '<img src="' . $url . '" />';
	}
	else {
		return $url;
	}
}

// A function for Breadcrumbs. (En funktion för Breadcrumbs).

	function breadcrumbs(){
		// Collect the global $post variable
		global $post;

		$separator = " / ";
		$home = "Splash";
		$gear = get_permalink(get_option('page_for_posts'));
		$title = get_the_title();

		echo '<ul class="breadcrumbs">';

		//echo '<li>You are here… </li>';


		if ( is_front_page() ){
			echo '<li>' . $home . '</li>';
		}
		else {
			echo '<li><a href="'.get_site_url().'">' . $home . '</a></li>';  // PANST
		}

		if ( is_home() || is_single() ) {
			echo '<li>' . $separator . '</li>';
			if ( is_home() ){
				echo '<li>Gear</li>';
			}
			else if ( is_singular('video') ) {
				echo '<li><a href="'.get_post_type_archive_link('video').'">Videos</a></li>';
				echo '<li>' . $separator . '</li>';
				echo '<li>' . $post->post_title . '</li>';
			}
			else {
				echo '<li>';
				echo '<a href="'.$gear.'">';
				echo 'Gear';
				echo '</a>';			
				echo '</li>';
				echo '<li>' . $separator . '</li>';
				echo '<li>' . $post->post_title . '</li>';
			}
		}

		if ( is_page() && !is_front_page() ) {
			echo '<li>' . $separator . '</li>';
			if ( $post->post_parent ) {
				echo '<li>';
				echo '<a href="'.get_permalink($post->post_parent).'">';
				echo get_the_title( $post->post_parent );
				echo '</a>';
				echo '</li>';
				echo '<li>' . $separator . '</li>';
			}
			echo '<li>';
			echo $title;
			echo '</li>';	
		}

		if ( is_author() ){
			echo '<li>' . $separator . '</li>';
			echo '<li>Author</li>';
			echo '<li>' . $separator . '</li>';
			echo '<li>' .  get_the_author("display_name") . '</li>';
		}

		if ( is_category() ){
			echo '<li>' . $separator . '</li>';
			echo '<li>Category</li>';
			echo '<li>' . $separator . '</li>';
			echo '<li>' . single_term_title() . '</li>';
		}

		if ( is_tax() ){
			echo '<li>' . $separator . '</li>';
			echo '<li>Video Category</li>';
			echo '<li>' . $separator . '</li>';
			echo '<li>' . single_cat_title() . '</li>';
		}

		if ( is_archive() && !is_author() && !is_category() && !is_tax() ){
			if ( is_post_type_archive('video') ) {
				echo '<li>' . $separator . '</li>';
				echo '<li>Videos</li>';
			}
			else {
				echo '<li>' . $separator . '</li>';
				echo '<li>Archives</li>';
				echo '<li>' . $separator . '</li>';
				echo '<li>' . single_month_title( " " ) . '</li>';
			}
		}

		if ( is_search() ){
			echo '<li>' . $separator . '</li>';
			echo '<li>Search results…</li>';
		}

		echo '</ul>';

	}


// function my_content($content) {
//     $page = get_page_by_title( 'Gear' );
    
//     if ( is_page($page->ID) )
//         $content = "Gear";
//         return $content;
// }

// spo

// Change the name of any of the menu/submenus with Wordpress admin panel.  In this case, Posts is changed to Gear. (Ändra namnet på någon av meny / undermenyer i Wordpress admin panel. I det här fallet, Posts ändras till Gear.)

	function rename_posts(){
		global $menu;
		global $submenu;
		$menu[5][0] = "Gear List";

		// echo '<pre style="margin-left: 200px">';
		// var_dump($menu);
		// echo '</pre>';
	}

add_action('admin_menu' , 'rename_posts');


// A function to enter a contact form into your wordpress site. (En funktion för att ange ett kontaktformulär på din Wordpress webbplats).
		

	function contact_form(){ 
		
		$mailto = "smallcolin@smallcolin.se";
	
		if (isset($_POST['submit']) ) {
			// $_POST = sanitize($_POST);
			$email = $_POST['email'];
			$message = $_POST['message'];
			$subject = $_POST['subject'];
			$name = $_POST['names'];

			$msg = "Message from $name.\nEmail: $email.\n\n$message";

			mail($mailto, $msg);
		}

		?>
			<form action="<?php echo get_permalink(95); ?>" class="form" style="text-align:center;" method="post">
				<label class="form" for="names">Name*</label><br />
				<input class="form" type="text" name="names" id="names" required placeholder="name" /><br />
				<label class="form" for=email>Email*</label><br />
				<input class="form" type="email" name="email" id="email" required placeholder="email" /><br />
				<label class="form" for="message">Message</label><br />
				<textarea class="form" id="message" name="message"></textarea><br />
				<input class="btn form" type="submit" value="Send" name="submit" />
			</form>

	<?php } 


// A function used for which service the user selects when uploading a video. (En funktion som används för vilken tjänst användaren väljer när man laddar upp ett videoklipp).

	function video_service(){

		$service = get_field( 'service' );
		$vimeo = get_field( 'vimeo' );
		$youtube = get_field( 'youtube' );
		$vimlink = get_field( 'link_vimeo' );
		$youlink = get_field( 'link_youtube' );
		$taxonomy = 'video_category';
		$videos = get_the_terms( get_the_ID() , $taxonomy);
		$count = count($videos);
		$i = 1;
	
	if ( $service == 'vimeo' ) { 

		if ( $vimeo ) { ?>
				<iframe src="https://player.vimeo.com/video/<?php the_field( 'vimeo' ); ?>?color=ff0000&title=0&byline=0&portrait=0" width="80%" height="315" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen>	
			</iframe>
		<?php } else {
			echo 'No video could be found!';
		} ?>

		<?php the_content(); ?>

	<ul class="single-post-details">
		<li>
		<?php if ( $vimlink ) { ?>
			<i class="fa fa-external-link" aria-hidden="true"><a href="<?php the_field('link_vimeo'); ?>" target="_blank"></i>Link <i class="fa fa-vimeo" aria-hidden="true"></i></p></a>

		<?php } else {
				echo '<i class="fa fa-exclamation-triangle" aria-hidden="true"></i>' . 'No external link found for this video!';
			} ?>
		</li>
	<?php } elseif ( $service == 'youtube' ) { ?>

		<?php if ( $youtube ) { ?>
			<iframe width="80%" height="315" src="https://www.youtube.com/embed/<?php the_field( 'youtube' ); ?>" frameborder="0" allowfullscreen></iframe>
		<?php } else {
			echo 'No video could be found!';
		} ?>

		<?php the_content(); ?>

	<ul class="single-post-details">
		<li>
		<?php if ( $youlink ) { ?>
			<p><i class="fa fa-external-link" aria-hidden="true"><a href="<?php the_field('link_youtube'); ?>" target="_blank"></i>Link <i class="fa fa-youtube fa-2x" aria-hidden="true"></i></p></a>
		<?php } else {
				echo '<i class="fa fa-exclamation-triangle" aria-hidden="true"></i>' . 'No external link found for this video!';
			} ?>
		</li>	
		<?php } ?>
		
		<?php if ( $videos ) { ?>
		    <ul class="cpt-taxonomy aligncenter">
				<li><i class="fa fa-tag" aria-hidden="true"></i></li>
			        	<?php foreach ( $videos as $video ) { 
			           	echo '<li><a href="';
			           	echo get_term_link($video->slug, $taxonomy);
			           	echo '">';
			           	echo $video->name;
			           	if ($i < $count) {
			            		echo ', ';
			            		$i++;
			            	};
			            	echo '</a>';
			    		echo '</li>';
			    	} ?>
		    </ul>
		<?php } ?>
	</ul> 
	<?php } 

// A function to automatically update the year of your copyright details on your website (En funktion för att automatiskt uppdatera år av copyright detaljer).

	function year() {

		$copyright = the_field( 'copyright' , 'options' );

		if ( $copyright ) { 
			the_field( 'copyright' , 'options' ); 

		} 
		echo ' ' . date('Y');
	}


// A function to change the background image in the "Splash" section depending on what time of day it is.  (En funktion för att ändra bakgrundsbild i "Splash" sektionen beroende på vilken tid på dagen det är).

	function splash_image() {
		$title = get_sub_field('title');
		$color = get_sub_field('title_color');
		$page_link = get_sub_field('page_link');
		$page_color = get_sub_field('page_link_color');
		$page_text = get_sub_field('page_link_text');
		$image = get_sub_field('image');
		$another = get_sub_field('another_image');
		$alt_image = get_sub_field('alt_image');
		$alt_title = get_sub_field('alt_title');
		$alt_color = get_sub_field('alt_title_color');
		$alt_page_link = get_sub_field('alt_page_link');
		$alt_page_text = get_sub_field('alt_page_link_text');
		$alt_page_color = get_sub_field('alt_page_link_color');

		$new_title;

		$time = date('H'); // Returnerar en sträng
		$time = (int)$time + 1; // (int) gör om strängen till integer, sedan plusar vi på med 1

		if ( $another ) {
			if ( $time <= 12 ) { ?>
				<h2 style="color: <?php echo $color; ?>"><strong><?php echo $title; ?></strong></h2>
				<h3><a href="<?php echo $page_link; ?>" style="color: <?php echo $page_color; ?>;"><?php echo $page_text; ?></a></h3>
				<img class="frontpage" src="<?php echo $image; ?>" />
			<?php }
			else { ?>
				<h2 style="color: <?php echo $alt_color; ?>"><strong><?php echo $alt_title; ?></strong></h2>
				<h3><a href="<?php echo $alt_page_link; ?>" style="color: <?php echo $alt_page_color; ?>;"><?php echo $alt_page_text; ?></a></h3>
				<img class="frontpage" src="<?php echo $alt_image; ?>" />
			<?php }
		}
		else { ?>
			<h2 style="color: <?php echo $color; ?>"><strong><?php echo $title; ?></strong></h2>
			<h3><a href="<?php echo $page_link; ?>" style="color: <?php echo $page_color; ?>;"><?php echo $page_text; ?></a></h3>
			<img class="frontpage" src="<?php echo $image; ?>" />
		<?php
		}
	}

	

