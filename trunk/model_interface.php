<?php
//necessary resources:
//styling
//user information
//get/post ui information
//jquery and other api's

//will use get for now



require('includes/application_top.php');

require('includes/classes/UI_Router.php');

$requestParams = "";
$language_page_directory = DIR_WS_LANGUAGES . $_SESSION['language'] . '/';

$directory_array = $template->get_template_part($code_page_directory, '/^header_php/');
$uiparams = array();
foreach ($directory_array as $value)
{

/**
 * We now load header code for a given page.
 * Page code is stored in includes/modules/pages/PAGE_NAME/directory
 * 'header_php.php' files in that directory are loaded now.
 */
    require($code_page_directory . '/' . $value);
    echo $value;
 }

 define("EZ_IS_SUB","y");
 
 require($template->get_template_dir('module_header.php',DIR_WS_TEMPLATE, $current_page_base,'common'). '/module_header.php');
 
 error_reporting(E_ALL);

if(isset($_POST['uiid']))
    $uiid = $_POST['uiid'];
   else
    $uiid = $_GET['uiid'];

//fire
$cid = "";
if(isset($_POST['lcid']))
    $uiparams['cid'] = $_POST['lcid'];
else
if(isset($_GET['lcid']))
    $uiparams['cid'] = $_GET['lcid'];
if(!isset($uiid))
{
    die('<h2>Invalid Page Request!</h2>');
}

foreach($_POST as $k=>$v){
    $uiparams[$k] = $v;
}

//will load all pagesss
class PageBase  extends base
{
    function PageBase($id,$pageParams)
    {

        $page = new UI_Router($id);
        //
        //echo $page->returnContent;
        $thisparams = $pageParams;
        ?><div id="mod_ui_ez"><?php
            require('includes/ui/'.$page->returnContent);
            ?>
        </div><?php
 
    }
}



$obj1 = new PageBase($uiid, $uiparams); //hey


?>
