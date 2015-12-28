<?php
/**
 * Common Template
 *
 * outputs the html header. i,e, everything that comes before the \</head\> tag <br />
 * 
 * @package templateSystem
 * @copyright Copyright 2003-2006 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: html_header.php 6948 2007-09-02 23:30:49Z drbyte $
 */
/**
 * load the module for generating page meta-tags
 */
 
 

require(DIR_WS_MODULES . zen_get_module_directory('meta_tags.php'));
/**
 * output main page HEAD tag and related headers/meta-tags, etc
 */
?>

<html>
<head>

<title><?php echo META_TAG_TITLE; ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo CHARSET; ?>" />
<meta name="keywords" content="<?php echo META_TAG_KEYWORDS; ?>" />
<meta name="description" content="<?php echo META_TAG_DESCRIPTION; ?>" />
<meta http-equiv="imagetoolbar" content="no" />
<meta name="author" content="Trinity Solutions LLC" />
<link rel="stylesheet" type="text/css" href="includes/ext/resources/css/ext-all.css" />
<meta name="generator" content="shopping cart program by Zen Cart&trade;, http://www.zen-cart.com eCommerce" />
<?php if (defined('ROBOTS_PAGES_TO_SKIP') && in_array($current_page_base,explode(",",constant('ROBOTS_PAGES_TO_SKIP'))) || $current_page_base=='down_for_maintenance' || $robotsNoIndex === true) { ?>
<meta name="robots" content="noindex, nofollow" />
<?php } ?>
<?php if (defined('FAVICON')) { ?>
<link rel="icon" href="<?php echo FAVICON; ?>" type="image/x-icon" />
<link rel="shortcut icon" href="<?php echo FAVICON; ?>" type="image/x-icon" />

<?php } //endif FAVICON ?>

<base href="<?php echo (($request_type == 'SSL') ? HTTPS_SERVER . DIR_WS_HTTPS_CATALOG : HTTP_SERVER . DIR_WS_CATALOG ); ?>" />

<?php
 
/**
 * load all template-specific stylesheets, named like "style*.css", alphabetically
 */
  $directory_array = $template->get_template_part(
  	$template->get_template_dir('.css',DIR_WS_TEMPLATE, $current_page_base,'css'), 
  	'/^style/', 
  	'.css');
  
  while(list ($key, $value) = each($directory_array)) 
  {
    echo '<link rel="stylesheet" type="text/css" href="' . $template->get_template_dir('.css',DIR_WS_TEMPLATE, $current_page_base,'css') . '/' . $value . '" />'."\n";
  }
  
/**
 * load stylesheets on a per-page/per-language/per-product/per-manufacturer/per-category basis. Concept by Juxi Zoza.
 */


    echo "<link type='text/css' rel='Stylesheet' href='". $template->get_template_dir('.css',DIR_WS_TEMPLATE, $current_page_base,'css') . '/main.css' ."' />";
 
    $cust_template_directory = DIR_WS_TEMPLATE;
    
    echo "
    <!--[if IE]>
        <link type='text/css' rel='Stylesheet' href='". $template->get_template_dir('.css',DIR_WS_TEMPLATE, $current_page_base,'css') . '/iemain.css'  ."' />
    <![endif]-->";


  $manufacturers_id = (isset($_GET['manufacturers_id'])) ? $_GET['manufacturers_id'] : '';
  $tmp_products_id = (isset($_GET['products_id'])) ? (int)$_GET['products_id'] : '';
  $tmp_pagename = ($this_is_home_page) ? 'index_home' : $current_page_base;
  $sheets_array = array('/' . $_SESSION['language'] . '_stylesheet', 
                        '/' . $tmp_pagename, 
                        '/' . $_SESSION['language'] . '_' . $tmp_pagename, 
                        '/c_' . $cPath,
                        '/' . $_SESSION['language'] . '_c_' . $cPath,
                        '/m_' . $manufacturers_id,
                        '/' . $_SESSION['language'] . '_m_' . (int)$manufacturers_id, 
                        '/p_' . $tmp_products_id,
                        '/' . $_SESSION['language'] . '_p_' . $tmp_products_id
                        );
  while(list ($key, $value) = each($sheets_array)) {
    //echo "<!--looking for: $value-->\n";
    $perpagefile = $template->get_template_dir('.css', DIR_WS_TEMPLATE, $current_page_base, 'css') . $value . '.css';
    if (file_exists($perpagefile)) echo '<link rel="stylesheet" type="text/css" href="' . $perpagefile .'" />'."\n";
  }

/**
 * load printer-friendly stylesheets -- named like "print*.css", alphabetically
 */
  $directory_array = $template->get_template_part($template->get_template_dir('.css',DIR_WS_TEMPLATE, $current_page_base,'css'), '/^print/', '.css');
  sort($directory_array);
  while(list ($key, $value) = each($directory_array)) {
    echo '<link rel="stylesheet" type="text/css" media="print" href="' . $template->get_template_dir('.css',DIR_WS_TEMPLATE, $current_page_base,'css') . '/' . $value . '" />'."\n";
  }

/**
 * load all site-wide jscript_*.js files from includes/templates/YOURTEMPLATE/jscript, alphabetically
 */
     echo "<link type='text/css' rel='Stylesheet' href='". $template->get_template_dir('.css',DIR_WS_TEMPLATE, $current_page_base,'css') . '/dhtmlxwindows.css' ."' />";
     echo "<link type='text/css' rel='Stylesheet' href='". $template->get_template_dir('.css',DIR_WS_TEMPLATE, $current_page_base,'css') . '/dhtmlxlayout.css' ."' />";
     echo "<link type='text/css' rel='Stylesheet' href='". $template->get_template_dir('.css',DIR_WS_TEMPLATE, $current_page_base,'css') . '/dhtmlx_custom.css' ."' />";

?>

        <script type="text/javascript" src="http://www.google.com/jsapi"></script>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
        <script type="text/javascript" src="http://www.google.com/friendconnect/script/friendconnect.js"></script>
        <script type="text/javascript" src="includes/ext/adapter/jquery/ext-jquery-adapter.js"></script>
        <script type="text/javascript" src="includes/ext/ext-all.js"></script>
	<script src="http://www.google.com/jsapi"></script>

        <script src="<?php echo $template->get_template_dir('.js',DIR_WS_TEMPLATE, $current_page_base,'jscript');?>/dhtmlxcommon.js"></script>
        <script src="<?php echo $template->get_template_dir('.js',DIR_WS_TEMPLATE, $current_page_base,'jscript');?>/dhtmlxwindows.js"></script>
        <script src="<?php echo $template->get_template_dir('.js',DIR_WS_TEMPLATE, $current_page_base,'jscript');?>/dhtmlxcontainer.js"></script>
        <script src="<?php echo $template->get_template_dir('.js',DIR_WS_TEMPLATE, $current_page_base,'jscript');?>/dhtmlxlayout.js"></script>
        
	<script type="text/javascript">
	
	google.load("jquery", "1.3.2");
	google.load('friendconnect', '0.8');
	</script>
        
<?php
  $directory_array = $template->get_template_part($template->get_template_dir('.js',DIR_WS_TEMPLATE, $current_page_base,'jscript'), '/^jscript_/', '.js');
  while(list ($key, $value) = each($directory_array)) {
    echo '<script type="text/javascript" src="' .  $template->get_template_dir('.js',DIR_WS_TEMPLATE, $current_page_base,'jscript') . '/' . $value . '"></script>'."\n";
  }

/**
 * load all page-specific jscript_*.js files from includes/modules/pages/PAGENAME, alphabetically
 */
  $directory_array = $template->get_template_part($page_directory, '/^jscript_/', '.js');
  while(list ($key, $value) = each($directory_array)) {
    echo '<script type="text/javascript" src="' . $page_directory . '/' . $value . '"></script>' . "\n";
  }

/**
 * load all site-wide jscript_*.php files from includes/templates/YOURTEMPLATE/jscript, alphabetically
 */
  $directory_array = $template->get_template_part($template->get_template_dir('.php',DIR_WS_TEMPLATE, $current_page_base,'jscript'), '/^jscript_/', '.php');
  while(list ($key, $value) = each($directory_array)) {
/**
 * include content from all site-wide jscript_*.php files from includes/templates/YOURTEMPLATE/jscript, alphabetically.
 * These .PHP files can be manipulated by PHP when they're called, and are copied in-full to the browser page
 */
    require($template->get_template_dir('.php',DIR_WS_TEMPLATE, $current_page_base,'jscript') . '/' . $value); echo "\n";
  }
/**
 * include content from all page-specific jscript_*.php files from includes/modules/pages/PAGENAME, alphabetically.
 */
  $directory_array = $template->get_template_part($page_directory, '/^jscript_/');
  while(list ($key, $value) = each($directory_array)) {
/**
 * include content from all page-specific jscript_*.php files from includes/modules/pages/PAGENAME, alphabetically.
 * These .PHP files can be manipulated by PHP when they're called, and are copied in-full to the browser page
 */
    require($page_directory . '/' . $value); echo "\n";
  }

//DEBUG: echo '<!-- I SEE cat: ' . $current_category_id . ' || vs cpath: ' . $cPath . ' || page: ' . $current_page . ' || template: ' . $current_template . ' || main = ' . ($this_is_home_page ? 'YES' : 'NO') . ' -->';
?>

	<script type="text/javascript">
	// <![CDATA[
	//var myMenu;
	//window.onload = function() {
//		myMenu = new SDMenu("cstSDMenu");
//		myMenu.init();
//
		//myMenu.collapseAll(); 
//	};



ddaccordion.init({
	headerclass: "submenuheader", //Shared CSS class name of headers group
	contentclass: "submenu", //Shared CSS class name of contents group
	revealtype: "click", //Reveal content when user clicks or onmouseover the header? Valid value: "click", "clickgo", or "mouseover"
	mouseoverdelay: 200, //if revealtype="mouseover", set delay in milliseconds before header expands onMouseover
	collapseprev: true, //Collapse previous content (so only one open at any time)? true/false
	defaultexpanded: [], //index of content(s) open by default [index1, index2, etc] [] denotes no content
	onemustopen: false, //Specify whether at least one header should be open always (so never all headers closed)
	animatedefault: false, //Should contents open by default be animated into view?
	persiststate: true, //persist state of opened contents within browser session?
	toggleclass: ["", ""], //Two CSS classes to be applied to the header when it's collapsed and expanded, respectively ["class1", "class2"]
	togglehtml: ["suffix", "<img src='<?php echo $template->get_template_dir('.css', DIR_WS_TEMPLATE, $current_page_base, 'css') ; ?>/collapsed.gif' class='statusicon' />", "<img src='<?php echo $template->get_template_dir('.css', DIR_WS_TEMPLATE, $current_page_base, 'css') ; ?>/expanded.gif' class='statusicon' />"], //Additional HTML added to the header when it's collapsed and expanded, respectively  ["position", "html1", "html2"] (see docs)
	animatespeed: "fast", //speed of animation: integer in milliseconds (ie: 200), or keywords "fast", "normal", or "slow"
	oninit:function(headers, expandedindices){
            //custom code to run when headers have initalized
		//myiframe=window.frames["myiframe"]
		//if (expandedindices.length>0) //if there are 1 or more expanded headers
		//	myiframe.location.replace(headers[expandedindices.pop()].getAttribute('href')) //Get "href" attribute of final expanded header to load into IFRAME
	},
	onopenclose:function(header, index, state, isuseractivated){ //custom code to run whenever a header is opened or closed
		//if (state=="block" && isuseractivated==true){ //if header is expanded and as the result of the user initiated action
		//	myiframe.location.replace(header.getAttribute('href'))
		//}
	}
})

//windows
       	var dhxWins, dhxLayout;
	function doOnLoad() {
		dhxWins = new dhtmlXWindows();
		dhxWins.enableAutoViewport(true);
		//dhxWins.attachViewportTo("winVP");
		dhxWins.setImagePath("<?php echo $template->get_template_dir('.css',DIR_WS_TEMPLATE, $current_page_base,'css');?>/imgs/");
	}



google.friendconnect.container.setParentUrl('/' /* location of rpc_relay.html and canvas.html */);
google.friendconnect.container.initOpenSocialApi({
  site: '03870722096032240744',
  onload: function(securityToken) {  var req = opensocial.newDataRequest();/* your callback, which is passed a security token */ }
});

	// ]]>


	</script>


	
</head>
<?php // NOTE: Blank line following is intended: ?>

