<?php 
   function saasup_theme_setup(){
   		// Theme Support 
   	add_theme_support('title-tag');
   	add_theme_support('post-thumbnails');
    
    // Register Menus
    register_nav_menus( array(
	    	'main_menu' => ( 'Main Menu'),
		));
  // Features Post Type
		register_post_type('features',array(
					'labels' => array(
						  'name' => 'Features',
						  'add_new' => 'Add New Features',
						  'add_new_item' => 'Add Features Item',
						  'edit_item' => 'Edit Features Item',
						  'featured_image' => 'Set Features Image',
						  'set_featured_image' => 'Set Features Image',
						  'remove_featured_image' => 'Remove Features Image',
						  'use_featured_image' => 'Use Features Image',
					  ),
					'public' => true,
					'supports' => array('title','editor','thumbnail'),
					'menu_icon' => 'dashicons-format-gallery',
		));
		register_taxonomy('features_taxonomy','features',array(
						'labels'=>array(
                 'name' => 'Categories',
                 'singular_name' => 'category',
                 'all_items' => 'All Category',
                 'add_new_item' => 'Add New Category',
              ),
              'public'=>true,
              'hierarchical' => true
		));
    // Pricing Post Type
		register_post_type('pricing',array(
					'labels' => array(
						  'name' => 'Pricing',
						  'add_new' => 'Add New Pricing',
						  'add_new_item' => 'Add Pricing Item',
						  'edit_item' => 'Edit Pricing Item',
					  ),
					'public' => true,
					'supports' => array('title'),
					'menu_icon' => 'dashicons-money',
		));
		// Careers Post Type 
		register_post_type('careers',array(
					'labels' => array(
						  'name' => 'Careers',
						  'add_new' => 'Add New Careers',
						  'add_new_item' => 'Add Careers Item',
						  'edit_item' => 'Edit Careers Item',
					  ),
					'public' => true,
					'supports' => array('title',),
					'menu_icon' => 'dashicons-money',
		));
		// Integeration Post Type 
		register_post_type('integrations',array(
					'labels' => array(
						  'name' => 'Integrations',
						  'add_new' => 'Add New Integrations',
						  'add_new_item' => 'Add Integrations Item',
						  'edit_item' => 'Edit Integrations Item',
					  ),
					'public' => true,
					'supports' => array('title',),
					'menu_icon' => 'dashicons-money',
		));
		register_taxonomy('integrations_taxonomy','integrations',array(
						'labels'=>array(
                 'name' => 'Categories',
                 'singular_name' => 'category',
                 'all_items' => 'All Category',
                 'add_new_item' => 'Add New Category',
              ),
              'public'=>true,
              'hierarchical' => true
             
		));


   };
   add_action('after_setup_theme','saasup_theme_setup');
 // Saasup CSS JS Link
   function saasup_css_js(){
   	// CSS REgister
		// Google Fonts 
   	    wp_register_style('fonts','https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;500;600;700;800;900&display=swap');
		// fontawesome
   	     wp_register_style('fontawesome',get_template_directory_uri().'/assets/css/fontawesome.min.css');
   	     // owlCarousel
   	     wp_register_style('owlTheme',get_template_directory_uri().'/assets/css/owl.theme.default.min.css');
   	     wp_register_style('owlCarousel',get_template_directory_uri().'/assets/css/owl.carousel.min.css');
   	     // Bootstrap
   	     wp_register_style('bootstrap',get_template_directory_uri().'/assets/css/bootstrap.min.css');
   	     // Template CSS
   	     wp_register_style('templateCss',get_template_directory_uri().'/assets/css/style.css');
   	     // Responsive
   	     wp_register_style('responsive',get_template_directory_uri().'/assets/css/responsive.css'); // Responsive
   	     wp_register_style('customCss',get_template_directory_uri().'/style.css');
    // CSS Enqueue
   	   wp_enqueue_style('fonts');
   	   wp_enqueue_style('fontawesome');
   	   wp_enqueue_style('owlTheme');
   	   wp_enqueue_style('owlCarousel');
   	   wp_enqueue_style('bootstrap');
   	   wp_enqueue_style('templateCss');
   	   wp_enqueue_style('responsive');
   	   wp_enqueue_style('customCss');

   	// JS Register
   	   wp_register_script('main_jquery',get_template_directory_uri().'/assets/js/jquery.min.js');
   	   wp_register_script('popper',get_template_directory_uri().'/assets/js/popper.min.js');
   	   wp_register_script('bootstrap',get_template_directory_uri().'/assets/js/bootstrap.min.js');
   	   wp_register_script('carousel',get_template_directory_uri().'/assets/js/owl.carousel.min.js');
   	   wp_register_script('counterup',get_template_directory_uri().'/assets/js/jquery.counterup.min.js');
   	   wp_register_script('magnificPopup',get_template_directory_uri().'/assets/js/jquery.magnific-popup.min.js');
   	   wp_register_script('scripts',get_template_directory_uri().'/assets/js/scripts.js');
    // JS Enqueue
   	   wp_enqueue_script('main_jquery');
   	   wp_enqueue_script('popper');
   	   wp_enqueue_script('bootstrap');
   	   wp_enqueue_script('carousel');
   	   wp_enqueue_script('counterup');
   	   wp_enqueue_script('magnificPopup');
   	   wp_enqueue_script('scripts');
   };

   add_action('wp_enqueue_scripts','saasup_css_js');
 // Sidebar Register 
   function saasup_widgets(){
   	        // Footer Sidebar 1
			register_sidebar(array(
				'name' => 'Footer Sidebar 1',
				'id'   =>'footr_sidebar_1',
				'description' => 'Add Your Foote 1 Widget.',
				'before_widget' => '<div class="pages">',
				'after_widget'  => '</div>',
				'before_title' => '<h3>',
				'after_title' => '</h3>',
			));
			// Footer Sidebar 2
			register_sidebar(array(
				'name' => 'Footer Sidebar 2',
				'id'   =>'footr_sidebar_2',
				'description' => 'Add Your Foote 2 Widget.',
				'before_widget' => '<div class="pages">',
				'after_widget'  => '</div>',
				'before_title' => '<h3>',
				'after_title' => '</h3>',
			));
			// Footer Sidebar 3
			register_sidebar(array(
				'name' => 'Footer Sidebar 3',
				'id'   =>'footr_sidebar_3',
				'description' => 'Add Your Foote 3 Widget.',
				'before_widget' => '<div class="downlod_area">',
				'after_widget'  => '</div>',
			));
   }
add_action('widgets_init','saasup_widgets');

/* Register Custom WP Bootstrap Navigation Walker */
function register_navwalker(){
	require_once get_template_directory().'/inc/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );


   // Theme Options Page Link 
   require_once('inc/theme-options/codestar-framework.php');
   require_once('inc/theme-options/options.php');
   // TGM Plugins Required File
   require_once( 'inc/class-tgm-plugin-activation.php');

   	// required plugins

   	function saasup_require_plugins(){
   			$plugins =array(
   				array(
   					 'name' => 'Advanced Custom Fields PRO',
   					 'slug' => 'advanced-custom-fields',
   					 'required' => false,
   					 // 'force_activation' => true,
   				),
   				array(
   					 'name' => 'CITS Support svg, webp Media and TTF,OTF File Upload',
   					 'slug' => 'cits-support-svg-webp-media-upload/',
   					 'required' => true,
   					 // 'force_activation' => true,
   				),
   				array(
   					 'name' => 'Classic Widget',
   					 'slug' => 'classic-widgets',
   					 'required' => true,
   					 // 'force_activation' => true,
   				),
   				array(
   					 'name' => 'Classic Editor',
   					 'slug' => 'classic-editor',
   					 'required' => true,
   					 // 'force_activation' => true,
   				),
   				array(
   					 'name' => 'Contact Form 7',
   					 'slug' => 'contact-form-7',
   					 'required' => true,
   					 // 'force_activation' => true,
   				),

   			);
   			$config  = array(
   							'id'           => 'saasup_plugins_activition',
								'menu'         => 'tgmpa-install-saasup_plugins_activition', // Menu slug.
								'parent_slug'  => 'themes.php', 
								'has_notices'  => true,   // Show admin notices or not.
   			);

   		 tgmpa( $plugins, $config );
   	}
   	add_action('tgmpa_register','saasup_require_plugins')


 ?>