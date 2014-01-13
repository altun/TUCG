<?php 
header("Content-type: text/css");

    if(file_exists('../../../../wp-load.php')) :
        include '../../../../wp-load.php';
    else:
        include '../../../../../wp-load.php';
    endif; 

$bodyfontname = get_option('ls_body_font_family');
$bodyfontsize = get_option('ls_body_font_size');
$bodyfontname = str_replace('+', ' ', $bodyfontname);
$bodyfontcolor = get_option('ls_body_font_color');

$menufontname = get_option('ls_menu_font_family');
$menufontsize = get_option('ls_menu_font_size');
$menufontname = str_replace('+', ' ', $menufontname);
$menufontcolor = get_option('ls_menu_font_color');

$titleheadingsfontname = get_option('ls_title_headings_font_family');
$titleheadingsfontname = str_replace('+', ' ', $titleheadingsfontname);
$titleheadingsfontcolor = get_option('ls_title_headings_font_color');

	$bgcolor = ( isset( $_COOKIE['demo_bgcolor'] ) && get_option('ls_demo_panel') == 'true' ) ? $_COOKIE['demo_bgcolor'] : '';
    $bgheadercolor = ( isset( $_COOKIE['demo_header_bgcolor'] ) && get_option('ls_demo_panel') == 'true' ) ? $_COOKIE['demo_header_bgcolor'] : '';
    $bgmaincolor = ( isset( $_COOKIE['demo_main_bgcolor'] ) && get_option('ls_demo_panel') == 'true' ) ? $_COOKIE['demo_main_bgcolor'] : '';
    $bgfootercolor = ( isset( $_COOKIE['demo_footer_bgcolor'] ) && get_option('ls_demo_panel') == 'true' ) ? $_COOKIE['demo_footer_bgcolor'] : '';
    $bgtexture = ( isset( $_COOKIE['demo_texture_url'] ) && get_option('ls_demo_panel') == 'true' ) ? $_COOKIE['demo_texture_url'] : '';
?>
body {  
    background-color:<?php if ($bgcolor != '') {echo '#'.$bgcolor;} else { echo get_option('ls_body_background_color'); } ?>;
    background-image:url("<?php if ($bgtexture != '') {echo $bgtexture;} else { echo '../images/pat/'.get_option('ls_texture_overlays'); } ?>"); 
    color: <?php echo $bodyfontcolor; ?>; 
    <?php $fontweight = explode(':',$bodyfontname);  $bodyfontname = $fontweight[0]; if (isset($fontweight[1])) { echo 'font-weight:'.$fontweight[1].';'; } ?>
    font-family:<?php echo $bodyfontname; ?> !important; 
    font-size: <?php echo $bodyfontsize; ?>;
    line-height: 1.5em;
    margin-bottom: 0px;
}



i {
    font-family: <?php echo $bodyfontname; ?>; 
}

	<?php if (get_option('ls_primary_color') !== ''): ?>
a { 
    color: <?php echo get_option('ls_primary_color'); ?>; 
}
    <?php endif; ?>
    

#header {
    <?php if (header_image()!=NULL) { echo 'background: url("'.header_image().'") no-repeat scroll 0 0 / 100% auto transparent;'; } ?>
} 

<?php $bgg = get_custom_header(); 
    if ($bgg->url) { 
        if ( isset( $_COOKIE['demo_layout'] ) && get_option('ls_demo_panel') == 'true') {
            if ($_COOKIE['demo_layout'] == 1) {
                echo '#header .wrapper { background: url("'.$bgg->url.'") no-repeat scroll 0 0 / 100% auto transparent; } 
                      #header { background:none !important; }'; 
            } else {
                      echo '#header { background: url("'.$bgg->url.'") no-repeat scroll 0 0 / 100% auto transparent; } 
                      #header .wrapper { background:none !important; }'; 
            }
        } else {
            if (get_option('ls_layout')=='Boxed') {
                 echo '#header .wrapper { background: url("'.$bgg->url.'") no-repeat scroll 0 0 / 100% auto transparent; } 
                       #header { background:none !important; }'; 
            } else {
                  echo '#header { background: url("'.$bgg->url.'") no-repeat scroll 0 0 / 100% auto transparent; } 
                        #header .wrapper { background:none !important; }'; 
            }
        }  
    }
?>
    
	
#featurednivo, 
#featurednivothumb,  
#featuredcycle, 
#featuredcyclethumb, 
#featuredcyclecont, 
#featuredaccordion, 
#featuredpiecemaker {
    margin: 0 2%;
    width: 96%;
    /*padding:0px;*/

}
    

.ptable_one_fifth, .ptable_one_fifth_bestcolumn, .ptable_one_third, .ptable_one_third_bestcolumn {
    background-color:<?php if ($bgmaincolor != '') {echo '#'.$bgmaincolor;} else { echo get_option('ls_main_site_background_color'); } ?>;
}
/*
#main-nav ul ul {
    background-image: url("../images/pat/bgnoise.png");
    background-repeat: repeat;
    background-color: <?php echo get_option('ls_menu_background_color'); ?> !important; 
}*/

#main-nav {
    font-size:<?php echo $menufontsize; ?> !important; 
}

#main-nav ul a {
    color:#444444; 
}
#main-nav ul li.sfHover ul a { 
    color:#444444 !important; 
    text-shadow:none;
    /*transition:none;*/
}

#main-nav ul li.sfHover ul a:hover { 
    background:#F95601 !important; 
    color:#FFF !important; 
}

#main-nav ul li a:hover, #main-nav ul li:hover, #main-nav ul li.sfHover a, #main-nav ul li.current-cat a, #main-nav ul li.current_page_item a, #main-nav ul li.current-menu-item a {
    color:#F95601;
}

ul.list3 li:before, ul.list4 li:before, ul.list5 li:before, ul.list9 li:before, ul.list11 li:before {
	color: #F95601 !important;
}


::selection { background: <?php echo get_option('ls_selection_color'); ?>; color: #fff; }

::-moz-selection { background: <?php echo get_option('ls_selection_color'); ?>; color: #fff; }

.latest-tweets ul li:before, #tweets li:before {
    background: #F95601; 
    opacity:0.5;
}

.lightfooter #footer-widgets h3 {
    border-left: 1px solid #F95601;
    border-right: 1px solid #F95601;
}


                <?php 
                if (get_option('ls_demo_panel') == 'true') {
                $predefined_colors = array('19AFE5', '95C343','1D83B9','8572c1','9d6e48','456399','FA3800','37B7D9','8dc563','ac68aa','FA2020','85bb27','667384','1aa54c','336699','F95601');
                $j=15;
                if (get_option('ls_use_scolor')==true) {
                    $predefined_colors[] = substr(get_option('ls_scolor'),1,6);
                    $j=16;  
                }
                } else {
                    $j = 0;
                    if (get_option('ls_use_scolor')=='true') {
                        $predefined_colors[] = substr(get_option('ls_scolor'),1,6);  
                    } else {
                        $predefined_colors[] = get_option('ls_pcolor');       
                    }
                }
                        for ( $i=0; $i<=$j; ) { ?>
.clr<?php echo $predefined_colors[$i]; ?> .accordion .tab:hover .toggle_plus:before, .clr<?php echo $predefined_colors[$i]; ?> .toggle_title:hover .toggle_plus:before { color:#<?php echo $predefined_colors[$i]; ?> !important; }
.clr<?php echo $predefined_colors[$i]; ?> .accordion .tab:hover .toggle_plus:before { left: 0px; }
.clr<?php echo $predefined_colors[$i]; ?> .es-nav-next:hover:before, .clr<?php echo $predefined_colors[$i]; ?> .es-nav-prev:hover:before { color: #<?php echo $predefined_colors[$i]; ?> !important; }
.clr<?php echo $predefined_colors[$i]; ?> .vtabs ul.tabs li i { background: none repeat scroll 0 0 #<?php echo $predefined_colors[$i]; ?> !important; }
.clr<?php echo $predefined_colors[$i]; ?> .iservice:hover:before { color:#<?php echo $predefined_colors[$i]; ?> !important; }                     
.clr<?php echo $predefined_colors[$i]; ?> .wp-pagenavi span.current {color: #<?php echo $predefined_colors[$i]; ?> !important;}
.clr<?php echo $predefined_colors[$i]; ?> #filter span a:hover { border-top-color: #<?php echo $predefined_colors[$i]; ?>; }
.clr<?php echo $predefined_colors[$i]; ?> .slctd a { border-top-color: #<?php echo $predefined_colors[$i]; ?> !important; }
.clr<?php echo $predefined_colors[$i]; ?> .ptable_one_fifth_bestcolumn .ptheader, .clr<?php echo $predefined_colors[$i]; ?> .ptable_one_third_bestcolumn .ptheader { background:#<?php echo $predefined_colors[$i]; ?>; }
.clr<?php echo $predefined_colors[$i]; ?> .ptable_one_fifth_bestcolumn .ptheader:after, .clr<?php echo $predefined_colors[$i]; ?> .ptable_one_third_bestcolumn .ptheader:after { background:#<?php echo $predefined_colors[$i]; ?> !important; }
.clr<?php echo $predefined_colors[$i]; ?> .overlay_fx .coverlay, .clr<?php echo $predefined_colors[$i]; ?> .portfolio_list_carousel div .coverlay, .clr<?php echo $predefined_colors[$i]; ?> .clients-carousel .coverlay, .clr<?php echo $predefined_colors[$i]; ?> .portfolio_item  .coverlay { background: none repeat scroll 0 0 #<?php echo $predefined_colors[$i]; ?>; }
.clr<?php echo $predefined_colors[$i]; ?> #topsoc i:hover { background: none repeat scroll 0 0 #<?php echo $predefined_colors[$i]; ?>; }
.clr<?php echo $predefined_colors[$i]; ?> .overlay_fx h6,.clr<?php echo $predefined_colors[$i]; ?> .portfolio_list_carousel div h6  { text-shadow: 0 1px 0 #<?php echo $predefined_colors[$i]; ?>; }
.clr<?php echo $predefined_colors[$i]; ?> .sf-sub-indicator { color: #<?php echo $predefined_colors[$i]; ?>; }
.clr<?php echo $predefined_colors[$i]; ?> table#wp-calendar th { background: none repeat scroll 0 0 #<?php echo $predefined_colors[$i]; ?>; }
.clr<?php echo $predefined_colors[$i]; ?> table#wp-calendar td a { color: #<?php echo $predefined_colors[$i]; ?>; }
.clr<?php echo $predefined_colors[$i]; ?> #welcome-message { border-bottom: 2px dotted #<?php echo $predefined_colors[$i]; ?>; }
.clr<?php echo $predefined_colors[$i]; ?> .catname a:hover { background: none repeat scroll 0 0 #<?php echo $predefined_colors[$i]; ?>; }
.clr<?php echo $predefined_colors[$i]; ?> #sidebar .current-cat, .clr<?php echo $predefined_colors[$i]; ?> .product-categories .cat-item:hover, .clr<?php echo $predefined_colors[$i]; ?> .widget_categories ul li:hover, .clr<?php echo $predefined_colors[$i]; ?> .widget_nav_menu .sub-menu li:hover, .clr<?php echo $predefined_colors[$i]; ?> .widget_subpages ul li:hover { border-left: 3px solid #<?php echo $predefined_colors[$i]; ?> !important; }
.clr<?php echo $predefined_colors[$i]; ?> .sidebar-left .widget_subpages .page_item::hover, .clr<?php echo $predefined_colors[$i]; ?> .sidebar-left .widget_categories ul li::hover, .clr<?php echo $predefined_colors[$i]; ?> .sidebar-left .widget_meta ul li::hover, .clr<?php echo $predefined_colors[$i]; ?> .sidebar-left .widget_archive ul li::hover, .clr<?php echo $predefined_colors[$i]; ?> .sidebar-left .widget_links ul li:hover {  border-left: 3px solid #<?php echo $predefined_colors[$i]; ?>; }
/*.clr<?php echo $predefined_colors[$i]; ?> .post h2 { border-left: 5px solid #<?php echo $predefined_colors[$i]; ?>; }
*/.clr<?php echo $predefined_colors[$i]; ?> .callme { border-left: 1px solid #<?php echo $predefined_colors[$i]; ?>; border-right: 1px solid #<?php echo $predefined_colors[$i]; ?>; }
.clr<?php echo $predefined_colors[$i]; ?> .callme:hover { border-left: 3px solid #<?php echo $predefined_colors[$i]; ?>; border-right: 3px solid #<?php echo $predefined_colors[$i]; ?>; }
.clr<?php echo $predefined_colors[$i]; ?> .callme_cont input[type="submit"] { background: none repeat scroll 0 0 #<?php echo $predefined_colors[$i]; ?>; }
.clr<?php echo $predefined_colors[$i]; ?> .circle[class^="icon-"], .clr<?php echo $predefined_colors[$i]; ?> .circle[class*=" icon-"] { background: #<?php echo $predefined_colors[$i]; ?>; }
.clr<?php echo $predefined_colors[$i]; ?> a:hover [class^="icon-"], .clr<?php echo $predefined_colors[$i]; ?> a:hover [class*=" icon-"] { color: #<?php echo $predefined_colors[$i]; ?>;}
.clr<?php echo $predefined_colors[$i]; ?> .flex-control-paging li a.flex-active { background: #<?php echo $predefined_colors[$i]; ?>; }
.clr<?php echo $predefined_colors[$i]; ?> .tagcloud a:hover, .clr<?php echo $predefined_colors[$i]; ?> #footer-widgets .tagcloud a:hover { background: #<?php echo $predefined_colors[$i]; ?>; }
.clr<?php echo $predefined_colors[$i]; ?> #welcome-message .bigbutton { background-color: #<?php echo $predefined_colors[$i]; ?> ;}
.clr<?php echo $predefined_colors[$i]; ?> button.reverse, .clr<?php echo $predefined_colors[$i]; ?> .bigbutton.reverse { border: 2px solid #<?php echo $predefined_colors[$i]; ?>; color: #<?php echo $predefined_colors[$i]; ?> !important; }
.clr<?php echo $predefined_colors[$i]; ?> #main-nav ul li a:hover, .clr<?php echo $predefined_colors[$i]; ?> #main-nav ul li:hover, .clr<?php echo $predefined_colors[$i]; ?> #main-nav ul li.sfHover a, .clr<?php echo $predefined_colors[$i]; ?> #main-nav ul li.current-cat a, .clr<?php echo $predefined_colors[$i]; ?> #main-nav ul li.current_page_item a, .clr<?php echo $predefined_colors[$i]; ?> #main-nav ul li.current-menu-item a, .clr<?php echo $predefined_colors[$i]; ?>.header4 #main-nav ul > li > a:hover { color: #<?php echo $predefined_colors[$i]; ?>}
.clr<?php echo $predefined_colors[$i]; ?> #main-nav ul li.sfHover ul a:hover { background:#<?php echo $predefined_colors[$i]; ?> !important; color:#FFF !important; }
.clr<?php echo $predefined_colors[$i]; ?> #footer-container a:hover { color:#<?php echo $predefined_colors[$i]; ?>; }
.clr<?php echo $predefined_colors[$i]; ?> .lightfooter #footer-container a { color: #<?php echo $predefined_colors[$i]; ?> !important;}
.clr<?php echo $predefined_colors[$i]; ?> .highlight { padding: 0 5px; text-shadow: none; background: #<?php echo $predefined_colors[$i]; ?>; color: #fff; }
.clr<?php echo $predefined_colors[$i]; ?> ul.list4 li:before,.clr<?php echo $predefined_colors[$i]; ?> ul.list5 li:before, .clr<?php echo $predefined_colors[$i]; ?> ul.list11 li:before, .clr<?php echo $predefined_colors[$i]; ?> ul.list3 li:before, .clr<?php echo $predefined_colors[$i]; ?> ul.list9 li:before {
	color: #<?php echo $predefined_colors[$i]; ?> !important;
}

.clr<?php echo $predefined_colors[$i]; ?> .tp-leftarrow:hover:before, .clr<?php echo $predefined_colors[$i]; ?> .tp-rightarrow:hover:before {
    color:#<?php echo $predefined_colors[$i]; ?>;
}
.clr<?php echo $predefined_colors[$i]; ?> #crumbs:after {
    border-bottom: 3px solid #<?php echo $predefined_colors[$i]; ?>;
}
.clr<?php echo $predefined_colors[$i]; ?> .woocommerce-message, .clr<?php echo $predefined_colors[$i]; ?> .woocommerce-info {
    border-top: 3px solid #<?php echo $predefined_colors[$i]; ?> !important;
}

.clr<?php echo $predefined_colors[$i]; ?> .woocommerce-message:before, .clr<?php echo $predefined_colors[$i]; ?> .woocommerce-info:before {
    background-color: #<?php echo $predefined_colors[$i]; ?> !important;
}

.clr<?php echo $predefined_colors[$i]; ?> #main-nav li:hover a.firstlevel:before, .clr<?php echo $predefined_colors[$i]; ?> #main-nav li:focus a.firstlevel:before {
    color:#<?php echo $predefined_colors[$i]; ?> !important;
}

.clr<?php echo $predefined_colors[$i]; ?>.woocommerce .widget_layered_nav ul li.chosen a,.clr<?php echo $predefined_colors[$i]; ?>.woocommerce-page .widget_layered_nav ul li.chosen a, .clr<?php echo $predefined_colors[$i]; ?>.woocommerce .widget_price_filter .ui-slider .ui-slider-range, .clr<?php echo $predefined_colors[$i]; ?>.woocommerce-page .widget_price_filter .ui-slider .ui-slider-range, .clr<?php echo $predefined_colors[$i]; ?>.woocommerce .widget_layered_nav_filters ul li a, .clr<?php echo $predefined_colors[$i]; ?>.woocommerce-page .widget_layered_nav_filters ul li a {
    background: #<?php echo $predefined_colors[$i]; ?> !important;
}
.clr<?php echo $predefined_colors[$i]; ?> .single_add_to_cart_button i, .clr<?php echo $predefined_colors[$i]; ?>.woocommerce div.product .entry-summary span.price, .clr<?php echo $predefined_colors[$i]; ?>.woocommerce-page div.product .entry-summary span.price, .clr<?php echo $predefined_colors[$i]; ?>.woocommerce #content div.product .entry-summary span.price, .clr<?php echo $predefined_colors[$i]; ?>.woocommerce-page #content div.product .entry-summary span.price, .clr<?php echo $predefined_colors[$i]; ?>.woocommerce div.product .entry-summary p.price, .clr<?php echo $predefined_colors[$i]; ?>.woocommerce-page div.product .entry-summary p.price, .clr<?php echo $predefined_colors[$i]; ?>.woocommerce #content div.product .entry-summary p.price, .clr<?php echo $predefined_colors[$i]; ?>.woocommerce-page #content div.product  .entry-summary p.price {
    color: #<?php echo $predefined_colors[$i]; ?> !important;
}
.clr<?php echo $predefined_colors[$i]; ?>.header2 #topsoc {
    background: none repeat scroll 0 0 #<?php echo $predefined_colors[$i]; ?>;
    box-shadow: none;
    height: 32px;
}

.clr<?php echo $predefined_colors[$i]; ?> .latest-tweets ul li:before, .clr<?php echo $predefined_colors[$i]; ?> #tweets li:before {
    background: none repeat scroll 0 0 #<?php echo $predefined_colors[$i]; ?>; 
}
.clr<?php echo $predefined_colors[$i]; ?>  ::selection { background: #<?php echo $predefined_colors[$i]; ?>; color: #fff; }

.clr<?php echo $predefined_colors[$i]; ?>  ::-moz-selection { background: #<?php echo $predefined_colors[$i]; ?>; color: #fff; }

#demo-pc-color<?php echo $i; ?> {
    background: none repeat scroll 0 0 #<?php echo $predefined_colors[$i]; ?>;
}                

.clr<?php echo $predefined_colors[$i]; ?> .callme span {
    background-color: #<?php echo $predefined_colors[$i]; ?>;
}

.clr<?php echo $predefined_colors[$i]; ?>.lightfooter #footer-widgets h3 {
    border-left: 1px solid #<?php echo $predefined_colors[$i]; ?>;
    border-right: 1px solid #<?php echo $predefined_colors[$i]; ?>;
}





.clr<?php echo $predefined_colors[$i]; ?>.header5 #topsoc {
    background: none repeat scroll 0 0 #FFFFFF;
    box-shadow: none;
}

.clr<?php echo $predefined_colors[$i]; ?>.header5 .topbar {
    color: #898989;
}

.clr<?php echo $predefined_colors[$i]; ?>.header5 #main-nav ul > li > a {
    background: none repeat scroll 0 0 #<?php echo $predefined_colors[$i]; ?>;
    color: #FFFFFF;
    font-size: 12px;
    margin-right: -1px;
    text-shadow: 0 0;
}

.clr<?php echo $predefined_colors[$i]; ?>.header5 #main-nav.scrolled ul > li > a {
    color: #292929;
}

.clr<?php echo $predefined_colors[$i]; ?>.header5 #main-nav.scrolled .sf-sub-indicator {
    color: #<?php echo $predefined_colors[$i]; ?> !important;
}

.clr<?php echo $predefined_colors[$i]; ?>.header5 #main-nav ul ul li a { 
    color: #FFFFFF;
}

.clr<?php echo $predefined_colors[$i]; ?>.header5 #main-nav ul li.sfHover ul a {
    color: #FFFFFF !important;
    
}

.clr<?php echo $predefined_colors[$i]; ?>.header5 #main-nav.scrolled ul li.sfHover ul a {
    color: #888 !important;
}

.clr<?php echo $predefined_colors[$i]; ?>.header5 #main-nav ul li.sfHover ul a:hover {
    color: #444 !important;
    background: none repeat scroll 0 0 #FFFFFF !important;
}


.clr<?php echo $predefined_colors[$i]; ?>.header5 #main-nav {
    background: none repeat scroll 0 0 #<?php echo $predefined_colors[$i]; ?>;
    border-radius: 0 0 2px 2px;
    bottom: 1px;
    float: left;
    font-size: 13px;
    left: 0;
    margin-bottom: 0;
    margin-top: 0px !important;
    padding: 3px 2%;
    position: absolute;
    width: 96%;
}

.superwide.clr<?php echo $predefined_colors[$i]; ?>.header5 #main-nav {
    background: none repeat scroll 0 0 #<?php echo $predefined_colors[$i]; ?>;
    border-radius: 0 0 2px 2px;
    bottom: 1px;
    box-shadow: 0 2px 3px rgba(0, 0, 0, 0.4);
    float: left;
    font-size: 13px;
    left: -2%;
    margin-bottom: 0;
    margin-top: 5px;
    padding: 3px 4%;
    position: absolute;
    width: 100%;
}

.clr<?php echo $predefined_colors[$i]; ?>.header5 #main-nav ul > li {
    border-right: 0 solid #EEEEEE;
}

.clr<?php echo $predefined_colors[$i]; ?>.header5 #main-nav ul ul li a {
    border-bottom: 1px solid #FFFFFF;
    border-bottom: 1px solid rgba(255,255,255,0.3);
}

.clr<?php echo $predefined_colors[$i]; ?>.header5 #searchtop {
    bottom: -2px;
}

.clr<?php echo $predefined_colors[$i]; ?>.header5 #searchtop input {
    background: none repeat scroll 0 0 transparent !important;
    border: 1px solid #FFFFFF;
    border: 1px solid rgba(255,255,255,0.3);
    box-shadow: none !important;
    color: #CCC;
    color: rgba(255, 255, 255, 0.5);
    height: 20px;
}


.clr<?php echo $predefined_colors[$i]; ?>.header5 .gosearch {
    display: none;
}

.clr<?php echo $predefined_colors[$i]; ?>.header5 #searchtop i {
    background: none repeat scroll 0 0 #<?php echo $predefined_colors[$i]; ?>;
    cursor: pointer;
    display: inline;
    height: 24px;
    line-height: 1.8;
    position: absolute;
    right: 1px;
    text-align: center;
    top: 1px;
    width: 30px;
    color:#FFFFFF !important;
}

.header5 .sf-sub-indicator {
    color: #FFFFFF !important;
}

.clr<?php echo $predefined_colors[$i]; ?> .dropcap {
    display: block;
    float: left;
    font-size: 50px;
    line-height: 34px;
    margin: 5px 10px 0 0;
    color: #<?php echo $predefined_colors[$i]; ?>;
}

.clr<?php echo $predefined_colors[$i]; ?> #navp a:hover, .clr<?php echo $predefined_colors[$i]; ?> #nav a:hover {
    color: #<?php echo $predefined_colors[$i]; ?> !important;
}
.clr<?php echo $predefined_colors[$i]; ?> #nav a.activepage, .clr<?php echo $predefined_colors[$i]; ?> .wp-pagenavi a:hover, .clr<?php echo $predefined_colors[$i]; ?> #navp a.activepage {
    background: #<?php echo $predefined_colors[$i]; ?> !important;
}

.clr<?php echo $predefined_colors[$i]; ?> .nivo-controlNav a.active, .clr<?php echo $predefined_colors[$i]; ?> .nivo-controlNav a:hover {
    background: none repeat scroll 0 0 #FFFFFF; 
    border-color:  #<?php echo $predefined_colors[$i]; ?>;
    color: #B0B0B0 !important;
}

.clr<?php echo $predefined_colors[$i]; ?> .tp-bullets.simplebullets.round .bullet.selected {
    background: #<?php echo $predefined_colors[$i]; ?> !important;
}

<?php $i++; } ?>  


.slidetitle,.dropcap,button, .bigbutton, h1, h2, h3, h4, h5, h6, #main-nav ul > li > a, .callme,.pcont a, .blogposts .type-post.first .h6 { 
  <?php /*var_dump($titleheadingsfontname); */ $fontweight = explode(':',$titleheadingsfontname);  $titleheadingsfontname = $fontweight[0]; if (isset($fontweight[1])) { echo 'font-weight:'.$fontweight[1].';'; } ?>
    font-family:<?php echo $titleheadingsfontname; ?> !important; 
}

h1, h2, h3, h4, h5, h6, #main-nav ul > li > a, .callme, .pcont a { 
    color:<?php echo $titleheadingsfontcolor; ?>;
}

#main-nav ul > li > a {
    color: #000;
}

#footer-widgets h3 {
    color: <?php echo get_option('ls_footer_headings_font_color'); ?>; 
}

#footer-container a {
    color:<?php echo get_option('ls_footer_link_color'); ?>; 
}

#footer-container a:hover {
    color:<?php echo get_option('ls_footer_link_hover_color'); ?>; 
}

<?php  if(get_option('ls_breadcrumbs')== 'true') :  ?>

#sidebar {
    margin-top: 10px !important; 
}

#main {
    margin-top: 25px !important; 
}

<?php endif; ?>

a:hover,
#commentform small span,
.ss_blog .entry-title a:hover,
.ss_tweet_widget ul li span a:hover,
#main .entry-meta a:hover,
.recent-wrap .entry-title a:hover,
.tab-comments h3 a:hover,
.author-tag { color: <?php echo get_option('ls_primary_hover_color'); ?>; }

.highlight { text-shadow: none; background: <?php echo get_option('ls_selection_color'); ?>; color: #fff; }

.highlight a { color:#e2e2e2;}
.highlight a:hover { color:#FFFFFF;}

::selection { background: <?php echo get_option('ls_selection_color'); ?>; color: #fff; }

::-moz-selection { background: <?php echo get_option('ls_selection_color'); ?>; color: #fff; }