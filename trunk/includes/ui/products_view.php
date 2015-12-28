
<?php

//TODO:
/**
 * Build Filter Panel
 * Get Category Info
 */
require('includes/classes/products.php');



require(DIR_WS_MODULES . zen_get_module_directory("productsHome.php"));

if(!isset($thisparams['cid'])){
    ?>invalid request<?php
}

$prodsObj = new ProductsView(false);

?>
    <script type="text/javascript">
       ProductWinL[<?php echo $thisparams['cid']; ?>].items[1].progressOff();
    </script>
<?php
    echo "<link type='text/css' rel='Stylesheet' href='includes/templates/EZTennisReloaded/css/listing.css' />";

    $cust_template_directory = DIR_WS_TEMPLATE;

    echo "
    <!--[if IE]>
        <link type='text/css' rel='Stylesheet' href='includes/templates/EZTennisReloaded/css/ielisting.css' />
    <![endif]-->";

$prodsObj->GetProductContent($thisparams['cid']);
echo $prodsObj->content;
?>