<?php
require('includes/classes/products_home.php');

class ProductsView
{
    private $cls_products_all;

    private $products;

    private $cls_products;

    public $content;

    function ProductsView($load)
    {
        if($load){


        $this->cls_products_all = new Products_Home();
        
        //$this->cls_products_all->ShowAllProducts();

        $this->cls_products_all->ShowLatestItems(10);
        
        $this->products = $this->cls_products_all->Products;
     

        $this->content = "<table class='products_listing_1'><tr>";
        $colCount = 0;

        for($pid = 0; $pid< count($this->products); $pid++)
        {
         if($colCount == 5 && $pid < count($this->products))
         {
          $this->content .= "</tr><tr>";
          $colCount=0;
         }

         $this->content .= "<td><div class='products_list_subBox'><div>";
         $this->content .= "<img class='ez_products_all_home' src='images/".$this->products[$pid]['image']."' />";
         $this->content .= "<br>";
         $this->content .= "<h3 class='pName'><a href='#'>".$this->products[$pid]['name']."</a></h3>";
         $this->content .= "<br>";
         $this->content .= "<h3 class='pName'>$".round($this->products[$pid]['price'],2)."</h3>";
         $this->content .="</div></div></td>";

         if($pid == count($this->products))
         {
             $this->content .= "</tr>";
         }

         $colCount++;
        }

        $this->content .="</table>";
        }
    }

    function GetProductsListing($cid, $mode, $sortby)
    {

        $this->cls_products_all = new Products_Home();

        if(isset($this->content)){
            $this->content = "";
        }

        $this->cls_products_all->ShowProductsByCID($cid, $sortby);
    
        //$this->cls_products_all->ShowAllProducts();

        //$this->cls_products_all->ShowLatestItems(10);
        
        $this->products = $this->cls_products_all->Products;
        
        $modeclass = $mode =="thumbs" ? "1" : "2";
        $this->content = "<table id='pl1' class='products_listing_".$modeclass."'>";

        $this->content .= $mode == "list" ? "<tr class='lblProdSearchTitle'>
        <td></td>
        <td><a class='sort_link'>Product Name</a></td>
        <td><a class='sort_link'>Price</a></td></tr><tr>" : "<tr>";
        
        $colCount = 0;

        for($pid = 0; $pid< count($this->products); $pid++)
        {


            if($mode == "thumbs")
            {

                if($colCount == 5 && $pid < count($this->products))
                {
                    $this->content .= "</tr><tr>";
                    $colCount=0;
                }

                $this->content .= "<td><div class='products_list_subBox'><div>";
                $this->content .= "<img class='ez_products_all_home' src='images/".$this->products[$pid]['image']."' onclick='showProduct(\'" . $this->products[$pid]['id']."\')'; />";
                $this->content .= "<br>";
                $this->content .= "<h3 class='pName'><a href='#'>".$this->products[$pid]['name']."</a></h3>";
                $this->content .= "<br>";
                $this->content .= "<h3 class='pName'>$".round($this->products[$pid]['price'],2)."</h3>";
                $this->content .="</div></div></td>";

                $colCount++;
            }

            if($mode == "list")
            {
                $this->content .= "<td>";
                $this->content .= "<img class='ez_products' ". 'onclick="showProduct('."'" . $this->products[$pid]['id']  . "','". $this->products[$pid]['name'] . "'".')"'." src='images/".$this->products[$pid]['image']."' />";
                $this->content .= "</td><td>";
                $this->content .= "<h3 class='Prod_listing_title'><a class='app_link'" .'onclick="showProduct('."'" . $this->products[$pid]['id'] . "','". $this->products[$pid]['name'] . "'".')"'.">".$this->products[$pid]['name']."</a></h3><hr>";
                $this->content .= "";
                $this->content .= "</td><td>";
                $this->content .= "<h3 class='pName'>$".round($this->products[$pid]['price'],2)."</h3>";
                $this->content .= "</td>";

                if($pid < count($this->products))
                {
                    $this->content .= "</tr><tr>";
                }
            }

            if($pid == count($this->products))
            {
                $this->content .= "</tr>";
            }

        }
         $this->content .="</table>";
    }

    function GetProductContent($productID){
         $this->cls_products_all = new Products_Home();

        if(isset($this->content)){
            $this->content = "";
        }

        $this->cls_products_all->ShowProductDetail($productID);

        //$this->cls_products_all->ShowAllProducts();

        //$this->cls_products_all->ShowLatestItems(10);

        $this->products = $this->cls_products_all->Products;

        $modeclass = "detail";
        

        $this->content .= "<div class='prodDescDisp'>";
            $this->content .= "<h3 class='vProd_listing_title'><a class='app_link'>".$this->products[0]['name']."</a></h3>";
            $this->content .= "<p class='vProd_listing_desc'>".$this->products[0]['desctiption'];
            $this->content .= "</p>";
            $this->content .= "<h3 class='pName'>".$this->products[0]['model']."</h3>";
            $this->content .= "<h3 class='pName'>$".round($this->products[0]['price'],2)."</h3>";
        $this->content .= "</div>";

        $this->content .= "<div class='productoptions'>";
        $this->content .= "</div>";

    }

    function GetProductDetail($productID)
    {
        $this->cls_products_all = new Products_Home();

        if(isset($this->content)){
            $this->content = "";
        }

        $this->cls_products_all->ShowProductDetail($productID);

        //$this->cls_products_all->ShowAllProducts();

        //$this->cls_products_all->ShowLatestItems(10);

        $this->products = $this->cls_products_all->Products;

        $modeclass = "detail";
        $this->content = "<div style='width: 200px;'>";

        $this->content .= "<div style='width: 100%; padding: 15px;'>";

        $this->content .= "<img class='vez_products' src='images/".$this->products[0]['image']."' />";

        $this->content .= "</div>";

        $this->content .= "<div class='prod_det_spec'>";
            $this->content .= "<span class='lprod_det_spec'>Name: </span>".$this->products[0]['name']."<br>";
            $this->content .= "<span class='lprod_det_spec'>Model: </span>".$this->products[0]['model']."<br>";
            $this->content .= "<span class='lprod_det_spec'>EZ Price: </span>$".round($this->products[0]['price'],2)."<br>";
            $this->content .= "<span class='lprod_det_spec'>Grip Size: </span><select class='prod_det_sel'><option>Select a Grip Size</option></select><br><br><br>";
            $this->content .= "<input id='txt_pro_qty". $this->products[0]['id'] . "' type='text' class='pro_qty' value='1'/>";
            $this->content .= "<input type='button' value='Add to Cart'/>";

        $this->content .= "</div>";

        $this->content .= "<div class='productoptions'>";
        $this->content .= "</div>";

        $this->content .= "</div>";
    }
}
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

?>
