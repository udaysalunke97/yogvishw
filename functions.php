<?php
/* Post Image support */
add_theme_support( 'post-thumbnails' );
add_theme_support( 'post-thumbnails' , array('post' , 'page' , 'portfolio') );

/* Menu registeration */
add_action( 'init', 'register_my_menu' );
function register_my_menu() {
  register_nav_menu( 'primary', __( 'Primary Menu', 'yogvishw' ) );
}

/* Custom Logo */
function custom_theme_logo() {
    add_theme_support( 'custom-logo', array(
        'height'      => 100,
        'width'       => 400,
        'flex-width' => true ) );
    }
add_action( 'after_setup_theme', 'custom_theme_logo' );
function theme_settings_page(){
    ?>
	    <div class="wrap">
	    <h1>Theme Panel</h1>
	    <form method="post" action="options.php">
	        <?php
	            settings_fields("section");
	            do_settings_sections("theme-options");      
	            submit_button(); 
	        ?>          
	    </form>
		</div>
	<?php
}
function display_twitter_element()
{
	?>
    	<input type="text" name="twitter_url" id="twitter_url" value="<?php echo get_option('twitter_url'); ?>" />
    <?php
}

function display_facebook_element()
{
	?>
    	<input type="text" name="facebook_url" id="facebook_url" value="<?php echo get_option('facebook_url'); ?>" />
    <?php
}

function display_theme_panel_fields()
{
	add_settings_section("section", "All Settings", null, "theme-options");
	
	add_settings_field("twitter_url", "Twitter Profile Url", "display_twitter_element", "theme-options", "section");
    add_settings_field("facebook_url", "Facebook Profile Url", "display_facebook_element", "theme-options", "section");

    register_setting("section", "twitter_url");
    register_setting("section", "facebook_url");
}

add_action("admin_init", "display_theme_panel_fields");
function add_theme_menu_item()
{
	add_menu_page("Theme Panel", "Theme Panel", "manage_options", "theme-panel", "theme_settings_page", null, 99);
}

add_action("admin_menu", "add_theme_menu_item");



function testimonials() {
 
	// Set UI labels for Custom Post Type
		$labels = array(
			'name'                => _x( 'Testimonials', 'Post Type General Name', 'yogvishw' ),
			'singular_name'       => _x( 'Testimonials', 'Post Type Singular Name', 'yogvishw' ),
			'menu_name'           => __( 'Testimonials', 'yogvishw' ),
			'parent_item_colon'   => __( 'Parent Testimonials', 'yogvishw' ),
			'all_items'           => __( 'All Testimonials', 'yogvishw' ),
			'view_item'           => __( 'View Testimonials', 'yogvishw' ),
			'add_new_item'        => __( 'Add New Testimonials', 'yogvishw' ),
			'add_new'             => __( 'Add New', 'yogvishw' ),
			'edit_item'           => __( 'Edit Testimonials', 'yogvishw' ),
			'update_item'         => __( 'Update Testimonials', 'yogvishw' ),
			'search_items'        => __( 'Search Testimonials', 'yogvishw' ),
			'not_found'           => __( 'Not Found', 'yogvishw' ),
			'not_found_in_trash'  => __( 'Not found in Trash', 'yogvishw' ),
		);
		 
	// Set other options for Custom Post Type
		 
		$args = array(
			'label'               => __( 'Testimonials', 'yogvishw' ),
			'description'         => __( 'Testimonials news and reviews', 'yogvishw' ),
			'labels'              => $labels,
			// Features this CPT supports in Post Editor
			'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
			// You can associate this CPT with a taxonomy or custom taxonomy. 
			'taxonomies'          => array( 'genres' ),
			/* A hierarchical CPT is like Pages and can have
			* Parent and child items. A non-hierarchical CPT
			* is like Posts.
			*/ 
			'hierarchical'        => false,
			'public'              => true,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'show_in_nav_menus'   => true,
			'show_in_admin_bar'   => true,
			'menu_position'       => 5,
			'can_export'          => true,
			'has_archive'         => true,
			'exclude_from_search' => false,
			'publicly_queryable'  => true,
			'capability_type'     => 'page',
		);
		 
		// Registering your Custom Post Type
		register_post_type( 'testimonials', $args );
	 
	}
	 
	/* Hook into the 'init' action so that the function
	* Containing our post type registration is not 
	* unnecessarily executed. 
	*/
	 
	add_action( 'init', 'testimonials', 0 );

	function events() {
 
		// Set UI labels for Custom Post Type
			$labels = array(
				'name'                => _x( 'Events', 'Post Type General Name', 'yogvishw' ),
				'singular_name'       => _x( 'Events', 'Post Type Singular Name', 'yogvishw' ),
				'menu_name'           => __( 'Events', 'yogvishw' ),
				'parent_item_colon'   => __( 'Parent Events', 'yogvishw' ),
				'all_items'           => __( 'All Events', 'yogvishw' ),
				'view_item'           => __( 'View Events', 'yogvishw' ),
				'add_new_item'        => __( 'Add New Events', 'yogvishw' ),
				'add_new'             => __( 'Add New', 'yogvishw' ),
				'edit_item'           => __( 'Edit Events', 'yogvishw' ),
				'update_item'         => __( 'Update Events', 'yogvishw' ),
				'search_items'        => __( 'Search Events', 'yogvishw' ),
				'not_found'           => __( 'Not Found', 'yogvishw' ),
				'not_found_in_trash'  => __( 'Not found in Trash', 'yogvishw' ),
			);
			 
		// Set other options for Custom Post Type
			 
			$args = array(
				'label'               => __( 'Events', 'yogvishw' ),
				'description'         => __( 'Events news and reviews', 'yogvishw' ),
				'labels'              => $labels,
				// Features this CPT supports in Post Editor
				'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
				// You can associate this CPT with a taxonomy or custom taxonomy. 
				'taxonomies'          => array( 'genres' ),
				/* A hierarchical CPT is like Pages and can have
				* Parent and child items. A non-hierarchical CPT
				* is like Posts.
				*/ 
				'hierarchical'        => false,
				'public'              => true,
				'show_ui'             => true,
				'show_in_menu'        => true,
				'show_in_nav_menus'   => true,
				'show_in_admin_bar'   => true,
				'menu_position'       => 5,
				'can_export'          => true,
				'has_archive'         => true,
				'exclude_from_search' => false,
				'publicly_queryable'  => true,
				'capability_type'     => 'page',
			);
			 
			// Registering your Custom Post Type
			register_post_type( 'events', $args );
		 
		}
		 
		/* Hook into the 'init' action so that the function
		* Containing our post type registration is not 
		* unnecessarily executed. 
		*/
		 
		add_action( 'init', 'events', 0 );
	function ourWidgets()
	{
		register_sidebar( array(
			'name' => 'Footer 1',
			'id' => 'footer1',
			'before_title'  => '<h4 class="widgettitle">',
        'after_title'   => '</h4>',
        'before_widget' => '<div class="col-lg-4 col-md-6 col-sm-6">
		<div class="single-footer-widget">',
        'after_widget'  => '</div></div>'
		));
		register_sidebar( array(
			'name' => 'Contact Info',
			'id' => 'contact-info',
			'before_title'  => '<div class="col-md-12 mb-4"><h2 class="h4">',
        'after_title'   => '</h2></div>',
        'before_widget' => '<div class="col-md-12 mb-3">',
        'after_widget'  => '</div>'
		));
	}
	add_action( 'widgets_init', 'ourWidgets' );

	add_filter('tribe_ce_submit_event_page_title', 'change_the_title');
function change_the_title() {
  return 'Your New Title Goes Here';
}