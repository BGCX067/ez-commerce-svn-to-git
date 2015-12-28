<?php
/**
 * Side Box Template
 *
 * @package templateSystem
 * @copyright Copyright 2003-2006 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: tpl_categories.php 4162 2006-08-17 03:55:02Z ajeh $
 */
  $content = "";
/**
  $content .= '<div id="cstSDMenu" class="sideBoxContent">' . "\n";
  
  for ($i=0;$i<sizeof($box_categories_array);$i++) {
    
  	//Switch case for the style to be used
  	switch(true) 
  	{
		// to make a specific category stand out define a new class in the stylesheet example: A.category-holiday
		// uncomment the select below and set the cPath=3 to the cPath= your_categories_id
		// many variations of this can be done
		//      case ($box_categories_array[$i]['path'] == 'cPath=3'):
		//        $new_style = 'category-holiday';
		//        break;
		
      case ($box_categories_array[$i]['top'] == 'true'):
        $new_style = 'category-top';
        break;
      case ($box_categories_array[$i]['has_sub_cat']):
        $new_style = 'category-subs';
        break;
      default:
        $new_style = 'category-products';
     }
      
     //if (zen_get_product_types_to_category($box_categories_array[$i]['path']) == 3 )
      //or ($box_categories_array[$i]['top'] != 'true' and SHOW_CATEGORIES_SUBCATEGORIES_ALWAYS != 1)) 
     //{
        	// skip if this is for the document box (==3)
     //} 
     //else 
     //{
      	
      

      if ($box_categories_array[$i]['top'] == 'true') 
      {
      	$content .= '<div >';
        if ($box_categories_array[$i]['has_sub_cat'])
        {
        	if($i == 0){
        		
        		$content .= '<span class="firstitem">' . $box_categories_array[$i]['name'] . '</span>';
        	}else{
          		$content .= '<span class="category-subs-parent">' . $box_categories_array[$i]['name'] . '</span>';
        	}
          
        } 
        else 
        {
        	$content .= "<span>". $box_categories_array[$i]['name'] . "</span>";
        }
        
         $content .= $box_categories_array[$i]['has_sub_cat'] ?  CATEGORIES_SEPARATOR : "";
         
         for ($x=0;$x<sizeof($box_categories_array);$x++) {
         	if($box_categories_array[$i]['id'] == $box_categories_array[$x]['pid'])
         	{
         		//$content .= '<a class="category-subs" href="' . zen_href_link(FILENAME_DEFAULT, $box_categories_array[$x]['id']) . '">';
                        $content .= '<a class="category-subs" onclick="load_prod_disp(' . $box_categories_array[$x]['id']. ')">';
         		
         		$content .= '<span class="category-subs-selected">' . 
            	/**'<img class="category_menu_image" src="images/'.
            	$box_categories_array[$x]['image'] . '"/>' .***
            	$box_categories_array[$x]['name'] . '</span>';
            	
            	 $content .= '</a>';
         	}
         }
          $content .= "</div>";
      } 
      //else 
      //{
       // $content .= $box_categories_array[$i]['name'];
      //}

      
      
       
      
      


      //if (SHOW_COUNTS == 'true') {
      //  if ((CATEGORIES_COUNT_ZERO == '1' and $box_categories_array[$i]['count'] == 0) or $box_categories_array[$i]['count'] >= 1) {
      //    $content .= CATEGORIES_COUNT_PREFIX . $box_categories_array[$i]['count'] . CATEGORIES_COUNT_SUFFIX;
      //  }
     // }

     
    }
    
    $content .= '</div><div>';
  //}

  **/


$content .= '<div id="ctSearch"></div><div class="glossymenu">' . "\n";
  
  for ($i=0;$i<sizeof($box_categories_array);$i++) {
    
  	//Switch case for the style to be used
  	switch(true) 
  	{
            case ($box_categories_array[$i]['top'] == 'true'):
                $new_style = 'category-top';
                break;
            case ($box_categories_array[$i]['has_sub_cat']):
                $new_style = 'category-subs';
                break;
            default:
                $new_style = 'category-products';
     }

      	
      if ($box_categories_array[$i]['top'] == 'true') 
      {
      	
        if ($box_categories_array[$i]['top'] == 'true')
        {        	
                $content .= '<a class="menuitem submenuheader" href="#">' . $box_categories_array[$i]['name'] . '</a>';
        }  
        else 
        {
        	$content .= '<a class="menuitem">'. $box_categories_array[$i]['name'] . '</a>';
        }
        
         //$content .= $box_categories_array[$i]['has_sub_cat'] ?  CATEGORIES_SEPARATOR : "";

        if ($box_categories_array[$i]['top'] == 'true')
        {

         $content .= "<div class='submenu'><ul>";
         
         for ($x=0;$x<sizeof($box_categories_array);$x++)
         {
         	if($box_categories_array[$i]['id'] == $box_categories_array[$x]['pid'])
         	{
         		//$content .= '<a class="category-subs" href="' . zen_href_link(FILENAME_DEFAULT, $box_categories_array[$x]['id']) . '">';
                        $content .= '<li><a class="category-subs" onclick="load_prod_disp(' . $box_categories_array[$x]['id']. ')">';
         		
         		$content .= '' . 
                                $box_categories_array[$x]['name'] . '';
            	
                        $content .= '</a></li>';
         	}
         }

         $content .= "</ul></div>";
      }
      }
      //else 
      //{
       // $content .= $box_categories_array[$i]['name'];
      //}

      
      
       
      
      


      //if (SHOW_COUNTS == 'true') {
      //  if ((CATEGORIES_COUNT_ZERO == '1' and $box_categories_array[$i]['count'] == 0) or $box_categories_array[$i]['count'] >= 1) {
      //    $content .= CATEGORIES_COUNT_PREFIX . $box_categories_array[$i]['count'] . CATEGORIES_COUNT_SUFFIX;
      //  }
     // }

     
    }
    
    $content .= '</div><div>';

  if (SHOW_CATEGORIES_BOX_SPECIALS == 'true' 
  		or SHOW_CATEGORIES_BOX_PRODUCTS_NEW == 'true' 
  		or SHOW_CATEGORIES_BOX_FEATURED_PRODUCTS == 'true' 
  		or SHOW_CATEGORIES_BOX_PRODUCTS_ALL == 'true') 
  	{
// display a separator between categories and links
    if (SHOW_CATEGORIES_SEPARATOR_LINK == '1') {
      $content .= '<hr id="catBoxDivider" />' . "\n";
    }
    if (SHOW_CATEGORIES_BOX_SPECIALS == 'true') {
      $show_this = $db->Execute("select s.products_id from " . TABLE_SPECIALS . " s where s.status= 1 limit 1");
      if ($show_this->RecordCount() > 0) {
        $content .= '<a class="category-links" href="' . zen_href_link(FILENAME_SPECIALS) . '">' . CATEGORIES_BOX_HEADING_SPECIALS . '</a>' . '<br />' . "\n";
      }
    }
    if (SHOW_CATEGORIES_BOX_PRODUCTS_NEW == 'true') {
      // display limits
//      $display_limit = zen_get_products_new_timelimit();
      $display_limit = zen_get_new_date_range();

      $show_this = $db->Execute("select p.products_id
                                 from " . TABLE_PRODUCTS . " p
                                 where p.products_status = 1 " . $display_limit . " limit 1");
      if ($show_this->RecordCount() > 0) {
        $content .= '<a class="category-links" href="' . zen_href_link(FILENAME_PRODUCTS_NEW) . '">' . CATEGORIES_BOX_HEADING_WHATS_NEW . '</a>' . '<br />' . "\n";
      }
    }
    if (SHOW_CATEGORIES_BOX_FEATURED_PRODUCTS == 'true') {
      $show_this = $db->Execute("select products_id from " . TABLE_FEATURED . " where status= 1 limit 1");
      if ($show_this->RecordCount() > 0) {
        $content .= '<a class="category-links" href="' . zen_href_link(FILENAME_FEATURED_PRODUCTS) . '">' . CATEGORIES_BOX_HEADING_FEATURED_PRODUCTS . '</a>' . '<br />' . "\n";
      }
    }
    if (SHOW_CATEGORIES_BOX_PRODUCTS_ALL == 'true') {
      $content .= '<a class="category-links" href="' . zen_href_link(FILENAME_PRODUCTS_ALL) . '">' . CATEGORIES_BOX_HEADING_PRODUCTS_ALL . '</a>' . "\n";
    }
  }
  $content .= '</div>';



?>