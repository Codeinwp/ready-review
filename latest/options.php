<?php
/**
 * A unique identifier is defined to store the options in the database and reference them from the theme.
 * By default it uses the theme name, in lowercase and without spaces, but this can be changed if needed.
 * If the identifier changes, it'll appear as if the options have been reset.
 * 
 */

function optionsframework_option_name() {
	// This gets the theme name from the stylesheet (lowercase and without spaces)
	$themename = wp_get_theme(STYLESHEETPATH . '/style.css');
	$themename = $themename['Name'];
	$themename = preg_replace("/\W/", "", strtolower($themename) );
	
	$optionsframework_settings = get_option('optionsframework');
	$optionsframework_settings['id'] = $themename;
	update_option('optionsframework', $optionsframework_settings);
}

/**
 * Defines an array of options that will be used to generate the settings page and be saved in the database.
 * When creating the "id" fields, make sure to use all lowercase and no spaces.
 *  
 */

function optionsframework_options() {
	
	// Test data
	$num_array = array("10" => "10","9" => "9","8" => "8","7" => "7","6" => "6","5" => "5","4" => "4","3" => "3","2" => "2","1" => "1");
	
	// Multicheck Array
	$multicheck_array = array("one" => "French Toast", "two" => "Pancake", "three" => "Omelette", "four" => "Crepe", "five" => "Waffle");
	
	// Header background repeat
	$repeat_array = array("repeat-x" => "repeat-x (accross)", "repeat-y" => "repeat-y (down)", "no-repeat" => "no-repeat");
	
	// Order by options
	$orderby_array = array("meta_value" => "Post Rank","title" => "Title", "date" => "Date", "ID" => "ID", "rand" => "Random", "comment_count" => "Comment Count");
	
	// Order by type
	$ordertype_array = array("asc" => "Ascending","desc" => "Descending");

	// Multicheck Defaults
	$multicheck_defaults = array("one" => "1","five" => "1");
	
	// Background Defaults
	$background_defaults = array('color' => '', 'image' => '', 'repeat' => 'repeat','position' => 'top center','attachment'=>'scroll');
	
	
	// Pull all the categories into an array
	$options_categories = array();  
	$options_categories_obj = get_categories();
	foreach ($options_categories_obj as $category) {
    	$options_categories[$category->cat_ID] = $category->cat_name;
	}
	
	// Pull all the pages into an array
	$options_pages = array();  
	$options_pages_obj = get_pages('sort_column=post_parent,menu_order');
	$options_pages[''] = 'Select a page:';
	foreach ($options_pages_obj as $page) {
    	$options_pages[$page->ID] = $page->post_title;
	}
		
	// If using image radio buttons, define a directory path
	$imagepath =  get_template_directory_uri() . '/images/';
		
	$options = array();
		
	$options[] = array( "name" => "General Settings",
						"type" => "heading");
						
	$options[] = array( "name" => "Background Color",
						"desc" => "Select the color you'd like to use for the background or leave it blank for the standard color (#f5f5f5).",
						"id" => "bg_color",
						"std" => "",
						"type" => "color");
						
	$options[] = array( "name" => "Google Analytics",
						"desc" => "Please paste your Google Analytics (or other) tracking code here.",
						"id" => "analytics",
						"std" => "",
						"type" => "textarea");
						
	$options[] = array( "name" => "Custom CSS",
						"desc" => "Enter in your custom CSS code here.",
						"id" => "custom_css",
						"std" => "",
						"type" => "textarea");
						
	$options[] = array( "name" => "Header",
						"type" => "heading");
						
	$options[] = array( "name" => "Upload Logo",
						"desc" => "Upload your logo.  Must be in .jpg, .gif or .png format.",
						"id" => "logo_image",
						"type" => "upload");
							
	$options[] = array( "name" => "Logo Text",
						"desc" => "Enter text for your logo.",
						"id" => "logo_text",
						"std" => "",
						"class" => "mini",
						"type" => "text");				
						
	$options[] = array( "name" => "Top Right Banner",
						"desc" => "Insert 468x60 banner code here.",
						"id" => "top_banner",
						"std" => "",
						"type" => "textarea");
	
	$options[] = array( "name" => "Home Page",
						"type" => "heading");
						
	$options[] = array( "name" => "Home Page Heading",
						"desc" => "This will be the first H1 heading on the home page.",
						"id" => "homeheading",
						"std" => "",
						"type" => "text");
						
	$options[] = array( "name" => "Home Page Intro",
						"desc" => "This is the intro text underneath the H1 on the home page.",
						"id" => "homeintro",
						"std" => "",
						"type" => "textarea");
						
	$options[] = array( "name" => "Home Page Image",
						"desc" => "This is the intro image. You can upload one if you'd like.",
						"id" => "intro_image",
						"type" => "upload");
						
	$options[] = array( "name" => "Home Image Affiliate URL",
						"desc" => "Affiliate URL for the home page intro image",
						"id" => "intro_image_url",
						"std" => "",
						"type" => "text");
						
	$options[] = array( "name" => "Home Image Alt Tag",
						"desc" => "Alt tag for the home page intro image",
						"id" => "intro_image_alt",
						"std" => "",
						"type" => "text");	
												
	$options[] = array( "name" => "Show Posts On Home Page?",
						"desc" => "Check this if you want to show recent posts on the home page.",
						"id" => "show_home_posts",
						"std" => "1",
						"type" => "checkbox");	
						
	$options[] = array( "name" => "Category For Home Posts",
						"desc" => "Select category for posts on the home page",
						"id" => "categories_home",
						"type" => "select",
						"options" => $options_categories);	
						
	$options[] = array( "name" => "Show Excerpt?",
						"desc" => "Show the excerpt on home page. If NO is selected, the full post will be displayed.",
						"id" => "home_excerpt",
						"std" => "",
						"type" => "checkbox");	
						
	$options[] = array( "name" => "Number Of Posts On Home Page",
						"desc" => "How many posts after the main intro do you want to show on the home page?",
						"id" => "home_posts",
						"type" => "select",
						"options" => $num_array);
						
	$options[] = array( "name" => "Posts",
						"type" => "heading");
						
	$options[] = array( "name" => "Show Meta Data on Category Page, Search Results Page, Tags Page & Home Page",
						"desc" => "Show the date, author, number of comments, etc.",
						"id" => "showmeta",
						"std" => "1",
						"type" => "checkbox");
						
	$options[] = array( "name" => "Show Meta Data on Single Post Page?",
						"desc" => "Show the date, author, number of comments, etc.",
						"id" => "showmeta_single",
						"std" => "1",
						"type" => "checkbox");
						
	$options[] = array( "name" => "Show Similar Posts?",
						"desc" => "Show similar posts at the bottom of the page?",
						"id" => "similar_posts",
						"std" => "1",
						"type" => "checkbox");
						
	$options[] = array( "name" => "Similar Posts Heading",
						"desc" => "Heading for the similar products section.  If left blank, it will be Similar Products.",
						"id" => "similar_heading",
						"std" => "",
						"type" => "text");	
							
	$options[] = array( "name" => "Sidebar",
						"type" => "heading");
						
	$options[] = array( "name" => "Show Top Products in Sidebar?",
						"desc" => "Do you want to list top products in sidebar?  You should.",
						"id" => "topprods",
						"std" => "1",
						"type" => "checkbox");	
						
	$options[] = array( "name" => "Sidebar Top Products Heading",
						"desc" => "Heading for the sidebar top products.",
						"id" => "topprods_heading",
						"std" => "",
						"type" => "text");	
						
	$options[] = array( "name" => "Category to use",
						"desc" => "Category for the sidebar top products",
						"id" => "topprods_cat",
						"type" => "select",
						"options" => $options_categories);	
						
	$options[] = array( "name" => "Number Of Top Products To Show",
						"desc" => "Select the number of products you want to show in sidebar",
						"id" => "topprods_num",
						"type" => "select",
						"options" => $num_array);	
						
	$options[] = array( "name" => "Order By",
						"desc" => "Select what determines the order they are in.",
						"id" => "orderby",
						"type" => "select",
						"options" => $orderby_array);
						
	$options[] = array( "name" => "Order Type",
						"desc" => "How do you want them ordered?",
						"id" => "ordertype",
						"type" => "select",
						"options" => $ordertype_array);
						
	$options[] = array( "name" => "Read Review Link Text",
						"desc" => "Text for the link that directs visitors to read the full post.",
						"id" => "info_text",
						"std" => "",
						"type" => "text");
						
	$options[] = array( "name" => "Footer",
						"type" => "heading");	
						
	$options[] = array( "name" => "Footer Left Text",
						"desc" => "Enter the text for left side footer.  copyright, keywords, etc.",
						"id" => "footerleft",
						"std" => "",
						"type" => "textarea");
				
	return $options;
}

/* 
 * This is an example of how to add custom scripts to the options panel.
 * This example shows/hides an option when a checkbox is clicked.
 */

add_action('optionsframework_custom_scripts', 'optionsframework_custom_scripts');

function optionsframework_custom_scripts() { ?>

<script type="text/javascript">
jQuery(document).ready(function($) {

	$('#example_showhidden').click(function() {
  		$('#section-example_text_hidden').fadeToggle(400);
	});
	
	if ($('#example_showhidden:checked').val() !== undefined) {
		$('#section-example_text_hidden').show();
	}
	
});
</script>
<?php
}?>