<?php

$shortname = 'ls';
global $shortname;
$themename =  'FlatMagazine'; 

load_theme_textdomain('startis');

define('ls_FILEPATH', get_template_directory());
define('ls_DIRECTORY', get_template_directory_uri());

require_once(get_template_directory() . '/admin/interface.php');
require_once(get_template_directory() . '/admin/options.php');

////////////////////       Widgets & Functions      ////////////////////

include(get_template_directory() . '/adminfunctions.php');
include("functions/theme-settings.php");
include("functions/startis-sidebars.php");
include("functions/startis-comments.php");
include("functions/startis-portfolio.php");
include("functions/startis-images.php");
include("functions/callme-function.php");
include("functions/shortcodes.php");
include("functions/flickr.php");
include("functions/recent_tabs.php");
include("functions/pagebuilder.php");
include("functions/meta.php");
include("functions/subnav.php");
include("functions/tgm.php");
include("functions/demo-panel.php");
include("functions/startis-styles-scripts.php");
include("functions/startis-breadcrumbs.php");
include("functions/startis-seo.php");
require_once('functions/multiple-featured-images.php');

?>