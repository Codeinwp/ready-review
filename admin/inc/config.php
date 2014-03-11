<?php
	class cwpConfig{
		public static $admin_page_menu_name ;
		public static  $admin_page_title 	;
		public static  $admin_page_header 	;
		public static  $admin_template_directory ;
		public static  $admin_template_directory_uri ;
		public static  $admin_uri 	;
		public static $admin_path  ;
		public static  $menu_slug 	;
		public static $structure;
		public static function init(){
			self::$admin_page_menu_name 	 = "Theme Options";
			self::$admin_page_title 		 = "Theme Options";
			self::$admin_page_header	 	 = "Theme Options";
			self::$admin_template_directory_uri  = get_template_directory_uri() . '/admin/layout';
			self::$admin_template_directory  = get_template_directory() . '/admin/layout';
			self::$admin_uri  		= 	get_template_directory_uri() . '/admin/'; 
			self::$admin_path 	 	= 	get_template_directory() . '/admin/';
			self::$menu_slug  		= 	"theme_options";
			self::$structure	= array(
						array(
							 "type"=>"tab",
							 "name"=>__("General settings",'cwp'),
							 "options"=>array(
								array(
									
									"type"=>"color",
									"name"=>"Background color",
									"description"=>"Choose a background color",
									"id"=>"bg_color",
									"default"=>"#fff"
								),
								array(
									
									"type"=>"textarea",
									"name"=>"Custom CSS",
									"description"=>"Enter in your custom CSS code here.",
									"id"=>"custom_css",
									"default"=>""
								)
							 )
						),
						array(
							 "type"=>"tab",
							 "name"=>__("Header",'cwp'),
							 "options"=>array(
								array(
									"type"=>"image",
									"name"=>"Upload logo",
									"description"=>"Upload your logo.  Must be in .jpg, .gif or .png format.",
									"id"=>"logo_image",
									"default"=>"" 
								),
								array(
									"type"=>"input_text",
									"name"=>"Logo text",
									"description"=>"Enter text for your logo.",
									"id"=>"logo_text",
									"default"=>""
								),
								array(
									
									"type"=>"textarea",
									"name"=>"Top Right Banner",
									"description"=>"Insert 468x60 banner code here.",
									"id"=>"top_banner",
									"default"=>""
								)
							)
						),
						array(
							 "type"=>"tab",
							 "name"=>__("Home Page",'cwp'),
							 "options"=>array(		
								array(
									"type"=>"input_text",
									"name"=>"Home Page Heading",
									"description"=>"This will be the first H1 heading on the home page.",
									"id"=>"homeheading",
									"default"=>""
								),
								array(
									
									"type"=>"textarea",
									"name"=>"Home Page Intro",
									"description"=>"This is the intro text underneath the H1 on the home page.",
									"id"=>"homeintro",
									"default"=>""
								),
								array(
									
									"type"=>"image",
									"name"=>"Home Page Image",
									"description"=>"This is the intro image. You can upload one if you'd like.",
									"id"=>"intro_image",
									"default"=>"" 
								),
								array(
									"type"=>"input_text",
									"name"=>"Home Image Affiliate URL",
									"description"=>"Affiliate URL for the home page intro image",
									"id"=>"intro_image_url",
									"default"=>""
								),
								array(
									"type"=>"input_text",
									"name"=>"Home Image Alt Tag",
									"description"=>"Alt tag for the home page intro image",
									"id"=>"intro_image_alt",
									"default"=>""
								),
								array(
									
									"type"=>"radio",
									"name"=>"Show Posts On Home Page?",
									"description"=>"Check this if you want to show recent posts on the home page.",
									"id"=>"show_home_posts",
									"options"=>array(
										"show_home_posts_show"=>"Show",
										"show_home_posts_hide"=>"Hide"
									),
									"default"=>"show_home_posts_show"
								),
								
								array(
									
									"type"=>"radio",
									"name"=>"Show Excerpt?",
									"description"=>"Show the excerpt on home page. If Hide is selected, the full post will be displayed.",
									"id"=>"home_excerpt",
									"options"=>array(
										"home_excerpt_show"=>"Show",
										"home_excerpt_hide"=>"Hide",
									),
									"default"=>"home_excerpt_show"
								),
								array(
									
									"type"=>"select",
									"name"=>"Number Of Posts On Home Page",
									"description"=>"How many posts after the main intro do you want to show on the home page?",
									"id"=>"home_posts",
									"options"=>array(
										"home_posts_10"=>"10",
										"home_posts_9"=>"9",
										"home_posts_8"=>"8",
										"home_posts_7"=>"7",
										"home_posts_6"=>"6",
										"home_posts_5"=>"5",
										"home_posts_4"=>"4",
										"home_posts_3"=>"3",
										"home_posts_2"=>"2",
										"home_posts_1"=>"1"
									),
									"default"=>"home_posts_10"
								)
							 )
						),
						array(
							 "type"=>"tab",
							 "name"=>__("Posts",'cwp'),
							 "options"=>array(
								array(
									
									"type"=>"radio",
									"name"=>"Show Meta Data on Category Page, Search Results Page, Tags Page & Home Page",
									"description"=>"Show the date, author, number of comments, etc.",
									"id"=>"showmeta",
									"options"=>array(
										"showmeta_show"=>"Show",
										"showmeta_hide"=>"Hide"
									),
									"default"=>"showmeta_show"
								),
								
								array(
									
									"type"=>"radio",
									"name"=>"Show Meta Data on Single Post Page?",
									"description"=>"Show the date, author, number of comments, etc.",
									"id"=>"showmeta_single",
									"options"=>array(
										"showmeta_single_show"=>"Show",
										"showmeta_single_hide"=>"Hide"
									),
									"default"=>"showmeta_single_show"
								),
								array(
									
									"type"=>"radio",
									"name"=>"Show Similar Posts?",
									"description"=>"Show similar posts at the bottom of the page?",
									"id"=>"similar_posts",
									"options"=>array(
										"similar_posts_show"=>"Show",
										"similar_posts_hide"=>"Hide",
									),
									"default"=>"similar_posts_show"
								),
								
								array(
									"type"=>"input_text",
									"name"=>"Similar Posts Heading",
									"description"=>"Heading for the similar products section.  If left blank, it will be Similar Products.",
									"id"=>"similar_heading",
									"default"=>""
								)
							 )
						),
						array(
							 "type"=>"tab",
							 "name"=>__("Sidebar",'cwp'),
							 "options"=>array(
								array(
									
									"type"=>"radio",
									"name"=>"Show Top Products in Sidebar?",
									"description"=>"Do you want to list top products in sidebar?  You should.",
									"id"=>"topprods",
									"options"=>array(
										"topprods_show"=>"Show",
										"topprods_hide"=>"Hide"
									),
									"default"=>"topprods_show"
								),
								array(
									"type"=>"input_text",
									"name"=>"Sidebar Top Products Heading",
									"description"=>"Heading for the sidebar top products.",
									"id"=>"topprods_heading",
									"default"=>""
								),
								array(
									
									"type"=>"select",
									"name"=>"Number Of Top Products To Show",
									"description"=>"Select the number of products you want to show in sidebar",
									"id"=>"topprods_num",
									"options"=>array(
										"topprods_num_10"=>"10",
										"topprods_num_9"=>"9",
										"topprods_num_8"=>"8",
										"topprods_num_7"=>"7",
										"topprods_num_6"=>"6",
										"topprods_num_5"=>"5",
										"topprods_num_4"=>"4",
										"topprods_num_3"=>"3",
										"topprods_num_2"=>"2",
										"topprods_num_1"=>"1"
									),
									"default"=>"topprods_num_1"
								),
								array(
									
									"type"=>"select",
									"name"=>"Order By",
									"description"=>"Select what determines the order they are in.",
									"id"=>"orderby",
									"options"=>array(
										"meta_value" => "Post Rank",
										"title" => "Title", 
										"date" => "Date", 
										"ID" => "ID", 
										"rand" => "Random", 
										"comment_count" => "Comment Count"
									),
									"default"=>"ID"
								),
								array(
									
									"type"=>"select",
									"name"=>"Order Type",
									"description"=>"How do you want them ordered?",
									"id"=>"ordertype",
									"options"=>array(
										"asc" => "Ascending",
										"desc" => "Descending"
									),
									"default"=>"asc"
								),
								array(
									"type"=>"input_text",
									"name"=>"Read Review Link Text",
									"description"=>"Text for the link that directs visitors to read the full post.",
									"id"=>"info_text",
									"default"=>""
								)
							 )
						),
						array(
							 "type"=>"tab",
							 "name"=>__("Footer",'cwp'),
							 "options"=>array(
								array(
									
									"type"=>"textarea",
									"name"=>"Footer Left Text",
									"description"=>"Enter the text for left side footer.  copyright, keywords, etc.",
									"id"=>"footerleft",
									"default"=>""
								)
							)
						)	
					); 
			 
		}	 
	
	} 
