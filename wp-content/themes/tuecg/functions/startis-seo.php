<?php 

////////////////////       SEO Settings      ////////////////////

function startis_titles() {

	if (is_front_page()) {
		if (get_option('ls_seo_home_titletext'))  { 
			echo get_option('ls_seo_home_titletext');  }
		else { 
			wp_title('|', true, 'right'); 
			bloginfo('name'); 
		} 
	} elseif (is_404()) {
	   wp_title('', true, 'right'); 
	} else  { 
        if(get_post_meta(get_the_ID(), 'ls_SEO_Title', true) != '') {
            echo get_post_meta(get_the_ID(), 'ls_SEO_Title', true); 
        } else {
            wp_title('|', true, 'right'); 
            bloginfo('name'); 
        } 
	} 
} 

function startis_descriptions() {
	if (is_front_page() && get_option('ls_seo_home_description') !== '') {
        echo '<meta name="description" content="'.get_option('ls_seo_home_description').'" />';	
    } elseif (is_404()) {
	   echo '<meta name="description" content="Page Not Found" />';
	} else {  
        if(get_post_meta(get_the_ID(), 'ls_SEO_Description', true) != '') {
            echo '<meta name="description" content="'.get_post_meta(get_the_ID(), 'ls_SEO_Description', true).'" />'; 
        }
    }
}


function startis_keywords() {
	if (is_front_page() && get_option('ls_seo_home_keywords') !== '') {
        echo '<meta name="keywords" content="'.get_option('ls_seo_home_keywords').'" />'; 
    } elseif (is_404()) {
	   echo '<meta name="keywords" content="" />';
	} else {  
        if(get_post_meta(get_the_ID(), 'ls_SEO_Keywords', true) != '') {
            echo '<meta name="keywords" content="'.get_post_meta(get_the_ID(), 'ls_SEO_Keywords', true).'" />'; 
        } 
    } 
}