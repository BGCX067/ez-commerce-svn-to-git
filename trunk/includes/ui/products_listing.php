
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
<div id="prodFilterPanel">
    <div class="lblProdSearchTitle">Search</div>
</div>
<?php
$mode="list";
$sortby="price";
$prodsObj->GetProductsListing($thisparams['cid'], $mode, $sortby);
echo $prodsObj->content;
?>