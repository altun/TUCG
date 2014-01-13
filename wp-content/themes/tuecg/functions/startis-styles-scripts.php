<?php 



////////////////////       Common JS & CSS     ////////////////////

function ls_register_js() {
	if (!is_admin()) {

        wp_enqueue_script('jquery');
        
        wp_deregister_script('jquery-migrate');
        wp_register_script('jquery-migrate',get_template_directory_uri() . '/js/jquery-migrate-1.2.1.min.js');
        //wp_enqueue_script('jquery-migrate');
        
        wp_register_script('superfish', get_template_directory_uri() . '/js/superfish.js', 'jquery', false, true);
        wp_enqueue_script('superfish'); 

        wp_deregister_script('quicksand');
        wp_register_script('quicksand', get_template_directory_uri() . '/js/quicksand.js', 'jquery', false, false);
        
        wp_deregister_script('selectivizr');
        wp_register_script('selectivizr', get_template_directory_uri() . '/js/selectivizr.js', 'jquery', false, true);
        wp_enqueue_script('selectivizr'); 
        
        wp_deregister_script('actual');
        wp_register_script('actual', get_template_directory_uri() . '/js/jquery.actual.min.js', 'jquery', false, true);
        wp_enqueue_script('actual'); 
        
        wp_deregister_script('fitvids');
        wp_register_script('fitvids', get_template_directory_uri() .'/js/jquery.fitvids.js', 'jquery', false, true);	
        wp_enqueue_script('fitvids'); 
        
        wp_deregister_script('flexslider');
        wp_register_script('flexslider',get_template_directory_uri() . '/js/jquery.flexslider-min.js', array(), false, true);
        wp_enqueue_script('flexslider');
        
        wp_deregister_script('prettyPhoto-init');        
        wp_register_script('prettyPhoto-init',get_template_directory_uri() . '/js/jquery.magnific-popup.min.js', array(), false, true);
        wp_enqueue_script('prettyPhoto-init');
        
	    wp_deregister_script('sstabs');
        wp_register_script('sstabs', get_template_directory_uri() . '/js/tabs.js', array(), false, true);
        wp_enqueue_script('sstabs');
                        
	    wp_deregister_script('custom');
        wp_register_script('custom', get_template_directory_uri() . '/js/custom.js', 'jquery', '1.0', TRUE);
        wp_enqueue_script('custom');
        
	    wp_deregister_script('easing');
        wp_register_script('easing', get_template_directory_uri() . '/js/easing.1.3.js', 'jquery', false, true);
        wp_enqueue_script('easing');
        
	    wp_deregister_script('elastislide');
        wp_register_script('elastislide', get_template_directory_uri() . '/js/jquery.elastislide.js', 'jquery', false, true);
        wp_enqueue_script('elastislide'); 

        wp_enqueue_style('theme-styles', get_stylesheet_uri(),  '',  'screen' );
        wp_enqueue_style('theme-media-styles', get_template_directory_uri() .'/css/media.css', array(),  '',  'screen' );
        wp_enqueue_style('font-awesome', get_template_directory_uri() .'/css/faw/css/font-awesome.min.css', array(),  '',  'screen' );
        wp_enqueue_style('magnific-popup', get_template_directory_uri() .'/css/magnific-popup.css', array(),  '',  'screen' );
	}
}
add_action('init', 'ls_register_js');

function startis_custom_styles() {
echo '<link rel="stylesheet" href="'. get_template_directory_uri().'/css/colors.php" type="text/css" media="screen" />';
}


function ls_iefix_scripts() {
	global $is_IE;
	if($is_IE) wp_enqueue_script('selectivizr');
}
add_action('wp_print_scripts', 'ls_iefix_scripts');


function ls_single_comm_scripts() {
	if(is_singular()) wp_enqueue_script( 'comment-reply' ); 
}
add_action('wp_print_scripts', 'ls_single_comm_scripts');


function ls_contactform_js() {
	wp_enqueue_script('validation');
}
add_action('wp_print_scripts', 'ls_contactform_js');

////////////////////       Style for Posts Type Order      ////////////////////

function admin_css_post(){
	echo '
		<style type="text/css" media="screen">

.appearance_page_order-post-types-post .ui-sortable li,
.appearance_page_order-post-types-portfolio .ui-sortable li {
    border: 1px solid #E2E2E2;
    cursor: move;
    padding: 6px;
    width: auto;
    background:#FFF;
}
.appearance_page_order-post-types-post #cpt_info_box,
.appearance_page_order-post-types-portfolio #cpt_info_box {
    display:none !important; 
    }
.appearance_page_order-post-types-post .ui-sortable li.ui-sortable-helper, 
.appearance_page_order-post-types-portfolio .ui-sortable li.ui-sortable-helper {
    background: none repeat scroll 0 0 #F3F7FE;
    border: 1px dashed #689BCE;
}
			</style>
		';
	}
add_action('admin_enqueue_scripts', 'admin_css_post' );


////////////////////       alternative stylesheets      ////////////////////


function ls_style_path() {
    $style = $_REQUEST['style'];
    if ($style != '') {
        $style_path = $style;
    } else {
        $stylesheet = get_option('ls_alt_stylesheet');
        $style_path = str_replace(".css","",$stylesheet);
    }
    if ($style_path == "default")
      echo 'images';
    else
      echo 'styles/'.$style_path;
}

////////////////////       Custom CSS Styling      ////////////////////

function ls_head_css() {
		$output = '';
		
		$custom_css = get_option('ls_custom_css');
		
		if ($custom_css <> '') {
			$output .= $custom_css . "\n";
		}
		
		if ($output <> '') {
			$output = "<!-- Custom Styling -->\n<style type=\"text/css\">\n" . $output . "</style>\n";
			echo $output;
		}
	
}
add_action('wp_head', 'ls_head_css');

add_filter('body_class', 'ls_body_class');
 
function ls_body_class($classes) {
	$layout = get_option('ls_sidebar_align');
	if ($layout == '') {
		$layout = 'sidebar-left';
	}
    
        $bgoptions_layout = 0;
    	$mlayout = get_option('ls_layout');
        if ($mlayout == 'Boxed') { $bgoptions_layout=1; }
    	if ($mlayout == 'Wide') { $bgoptions_layout=2; }
        if ($mlayout == 'SuperWide') { $bgoptions_layout=2; }
    
    $bglayout = ( isset( $_COOKIE['demo_layout']) && get_option('ls_demo_panel') == 'true') ? $_COOKIE['demo_layout'] : $bgoptions_layout ;
    if ($bglayout==0) { $classes[] = 'widecontainer'; }
    if ($bglayout==1) { $classes[] = 'boxcontainer'; }
    if ($bglayout==2) { $classes[] = 'widecontainer'; $classes[] = 'superwide'; }
    
    $stylelayout = ( isset( $_COOKIE['demo_pcolor']) && get_option('ls_demo_panel') == 'true') ? $_COOKIE['demo_pcolor'] : '';
        
        if ($stylelayout!='') { 
                $classes[] = 'clr'.$stylelayout;
            } else { 
                if (get_option('ls_use_scolor')=='true') {
                    $classes[] = 'clr'.substr(get_option('ls_scolor'),1,6);  
                } else {
                    $classes[] = 'clr'.get_option('ls_pcolor');       
                }
            }
        
        $classes[] = 'fixedtopmenu';
        $classes[] = 'header4';
        if (get_option('ls_fixedheader')!=='false') {
            $classes[] = 'fixedheader';
        }
        
        if (stripos($_SERVER['HTTP_USER_AGENT'], 'MSIE 10')) {
            $classes[] = 'ie10';
        }

        
        $bgfooter = 0;
        $footerstyle = get_option('ls_footer_style');
        if ($footerstyle=='Dark') { $bgfooter=1; } 
        
    if ( isset( $_COOKIE['demo_footer'] ) && get_option('ls_demo_panel') == 'true' ) { $bgfooter = $_COOKIE['demo_footer']; }
        if ($bgfooter==1) { $classes[] = 'lightfooter'; }
    
	$classes[] = $layout;
	return $classes;
}


function my_render_ie_pie() {
echo '<!--[if IE]>
<style type="text/css" media="screen">
.content-wrapper #gswrapper {
    box-shadow: 0 2px 9px #D2D2D2;
}

#gswrapper {
    box-shadow: 0 0 9px #E0E0E0 !important;
}
#topsoc {
    box-shadow: 0 1px 8px #e0e0e0;
}

#main-nav.scrolled {
    box-shadow: 0 1px 4px #e0e0e0;
}

#main-nav a.firstlevel, #main-nav a.firstlevel:before {
    transform:none !important;
    background:none !important;
}

#main-nav li:hover a.firstlevel,
#main-nav li:focus a.firstlevel {
	transform: none;
    background: none;
    color: #000000 !important;
}

#main-nav a.firstlevel:before {
    content:"" !important;
}

.carousel_posts_list li {
    box-shadow: 0 1px 4px #D1D1D1;
}

ul.tabs li {
    box-shadow: 0 5px 6px #D5D5D5;
}

#demo-panel {
    box-shadow: 0 2px 9px #e0e0e0;
}
#main-nav ul ul {
    box-shadow: 0 2px 3px #555;
}

.portfolio_list li {
    box-shadow: 0 1px 3px #DDDDDD;
}

.widecontainer #header {
    box-shadow: 0 0 6px #D9D9D9;
}

.callme {
    box-shadow: 0 1px 2px #E0E0E0;
}

.widecontainer #gswrapper {
    box-shadow: none !important;
}

#scrollnavlogo {
    box-shadow: 0 1px 2px #e0e0e0;
    display:none;
}

.scrolled #scrollnavlogo {
    display:block;
}

ul.tabs li,.portfolio_list li,#header,.callme,#gswrapper,#topsoc,.sbutton,.rsbutton,button,.bigbutton,#main-nav.scrolled,.button3d,.blog h2,.innerbutbg,.testimonial,.testimonial li,#welcome-message,.tabs_container.vtabs .panes,.vtabs ul.tabs li.current a,.ticustomer,.ticustomer img,.map-wrapper,.accordion,.accordion .tab,.toggle_title,.boxclose,.thumbnail,#main-nav ul ul,input,textarea,.avatar,#twitter-link,table#wp-calendar,.flickr_badge_image img,#nav a,#navp a,.nivo-controlNav a, .overlay i,.blog .post-thumb,.catname, .single-portfolio .post-thumb img, .single-post .post-thumb img, div.pp_pic_holder, .the-icons li a,#mobilenavselect select,.flex-control-paging li,.flex-control-paging li a,.tagcloud a, [class^="icon-"].circle, [class*=" icon-"].circle,#mobilesearch input[type="text"] { behavior: url('.trailingslashit(get_bloginfo('template_url')).'css/PIE.php); }
</style>
<![endif]-->';
} 
add_action('wp_head', 'my_render_ie_pie', 8);
