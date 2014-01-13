<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?> >
<!-- Design by Alan Armanov http://www.startis.ru -->
<head>
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<title><?php startis_titles(); ?></title>
	<?php startis_descriptions(); ?>
	<?php startis_keywords(); ?>
	
    <?php 
    $bodyfontname = get_option('ls_body_font_family');
    $titleheadingsfontname = get_option('ls_title_headings_font_family');
    
    if( $bodyfontname != 'Arial' && $bodyfontname && 'Comic Sans MS' && $bodyfontname != 'Hevetica' && $bodyfontname != 'Georgia' && $bodyfontname != 'Lucida Sans Unicode' && $bodyfontname != 'Tahoma' && $bodyfontname != 'Trebuchet MS' && $bodyfontname != 'Verdana')
		    echo '<link rel="stylesheet" href="http://fonts.googleapis.com/css?family='.$bodyfontname.'" type="text/css" />'; 
    
    if( $titleheadingsfontname != 'Arial' && $titleheadingsfontname != 'Comic Sans MS' && $titleheadingsfontname != 'Hevetica' && $titleheadingsfontname != 'Georgia' && $titleheadingsfontname != 'Lucida Sans Unicode' && $titleheadingsfontname != 'Tahoma' && $titleheadingsfontname != 'Trebuchet MS' && $titleheadingsfontname != 'Verdana')
		    echo '<link rel="stylesheet" href="http://fonts.googleapis.com/css?family='.$titleheadingsfontname.'" type="text/css" />'; ?>

    <!--[if lt IE 9]>
        <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <![endif]-->
    <meta name="viewport" content="width=device-width, maximum-scale=1.0, initial-scale=1, user-scalable=0" />
    
    <link rel="alternate" type="application/rss+xml" title="<?php bloginfo( 'name' ); ?> RSS Feed" href="<?php if (get_option('ls_feedburner')) { echo get_option('ls_feedburner'); } else { bloginfo( 'rss2_url' ); } ?>" />

    <?php startis_call_me_back(); ?>
    <?php wp_head(); startis_custom_styles(); ?>
</head>

<!-- BEGIN body -->
<body <?php body_class(); ?>>

                <?php  startis_call_me_back_popup();  ?>

                <nav id="mobilenav">
                                
                    <div id="mobileclose"><i class="showmenu icon-remove"></i></div>

                    <div id="mobilenavselect"><div id="showdrop" class="showmenu icon-reorder icon-x2"></div>
                    </div>
                    
                    <div id="mobilesearch">
    			     <?php get_search_form(); ?>
                     <div id="mobile_widget_area"><?php if (function_exists( 'dynamic_sidebar' ))  dynamic_sidebar( 'Mobile Menu' ); wp_reset_query();  ?></div>
                    </div>

                </nav>
                
    <?php if (get_option('ls_demo_panel') == 'true') { do_action('demo_panel'); } ?>
<div id="container">
	        
	<header id="header" class="clearfix">
        
        <div class="wrapper">
                
                <div id="topsoc">
                    <div class="topbar">
                        <div class="alignleft"><?php wp_nav_menu( array('theme_location' => 'top-menu','menu' => 'top','container_class' => 'menu-top', 'menu_class' => 'menu-top', 'fallback_cb' => false, 'depth' => 2 )); ?></div>
                        <div class="alignright topsocblock"><?php echo do_shortcode(get_option('ls_top_bar')); ?></div>
                    </div>
        
                </div>
                
        
                <!-- BEGIN logo -->
                <div id="logo">
                    <?php 
                    if (get_option('ls_logo')) { ?>
                    <a class="logolink" href="<?php echo home_url(); ?>"><img src="<?php echo get_option('ls_logo'); ?>" alt="<?php bloginfo( 'name' ); ?>"/></a>
                    <?php } else { ?>
                    <a class="logolink" href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="<?php bloginfo( 'name' ); ?>"/></a>
                    <?php } ?>
                    <div class="topbanner"></div>
                </div>
                
                <!-- END logo -->
                
                

                
                <?php if(get_option('ls_call_us_top') != '') : ?>
                
                <div id="callus">
                	<?php echo do_shortcode(get_option('ls_call_us_top')); ?>
                 </div>
                
                <?php endif; ?>
                            
                <div id="showmenu" class="showmenu icon-reorder icon-x2"></div>
                                                                 
                <nav id="main-nav">               
                <!-- BEGIN nav -->
                    <?php wp_nav_menu( array('theme_location' => 'main-menu','menu' => 'main', 'menu_class' => 'sf-menu', 'fallback_cb' => 'wp_page_menu', ));  ?>
                    <div class="clear"></div>
                <!-- END nav  -->
                <i id="gotop" class="icon-chevron-sign-up"></i>
                <i id="gosearch" class="icon-search"></i>
                
                <div id="searchtop">
			     <?php get_search_form(); ?>
                </div>
                
                </nav>
                
		</div>
        
    </header>
                
		<!--BEGIN content -->
		<div id="content" class="clearfix">