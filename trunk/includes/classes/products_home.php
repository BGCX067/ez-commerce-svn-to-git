<?php
class Products_Home extends base
{
    public $Products;
//
    function Products_Home()
    {
        
    }

    public function ShowAllProducts()
    {
        $db = new queryFactory();

        $this->Products = array();

        $db->connect(DB_SERVER, DB_SERVER_USERNAME, DB_SERVER_PASSWORD, DB_DATABASE);

        $products_all_query_raw = "SELECT
                                    p.products_type,
                                    p.products_id,
                                    pd.products_name,
                                    p.products_image,
                                    p.products_price,
                                    p.products_tax_class_id,
                                    p.products_date_added,
                                    m.manufacturers_name,
                                    p.products_model,
                                    p.products_quantity,
                                    p.products_weight,
                                    p.product_is_call,
                                    p.product_is_always_free_shipping,
                                    p.products_qty_box_status,
                                    p.master_categories_id
                             FROM " . TABLE_PRODUCTS . " p
                             LEFT JOIN " . TABLE_MANUFACTURERS . " m
                                    ON (p.manufacturers_id = m.manufacturers_id),
                            " . TABLE_PRODUCTS_DESCRIPTION . " pd
                             WHERE p.products_status = 1
                             AND p.products_id = pd.products_id
                             AND pd.language_id = 1";

        $products_all_results = $db->Execute($products_all_query_raw, '', false, 0);
        $track = 0;

        while(!$products_all_results->EOF)
        {
            $this->Products[$track]=
            array(

                'id'=>$products_all_results->fields['products_id'],
                'name'=>$products_all_results->fields['products_name'],
                'price'=>$products_all_results->fields['products_price'],
                'image'=>$products_all_results->fields['products_image'],
                'dateadded'=>$products_all_results->fields['products_date_added']

            );

            $track++;
            $products_all_results->MoveNext();
        }
    }

    public function ShowProductsByCID($cid, $orderBy)
    {
        $db = new queryFactory();

        $this->Products = array();

        $db->connect(DB_SERVER, DB_SERVER_USERNAME, DB_SERVER_PASSWORD, DB_DATABASE);

        $products_all_query_raw = "SELECT
                                    p.products_type,
                                    p.products_id,
                                    pd.products_name,
                                    p.products_image,
                                    p.products_price,
                                    p.products_tax_class_id,
                                    p.products_date_added,
                                    m.manufacturers_name,
                                    p.products_model,
                                    p.products_quantity,
                                    p.products_weight,
                                    p.product_is_call,
                                    p.product_is_always_free_shipping,
                                    p.products_qty_box_status,
                                    p.master_categories_id,
                                    pd.products_description
                             FROM " . TABLE_PRODUCTS . " p
                             LEFT JOIN " . TABLE_MANUFACTURERS . " m
                                    ON (p.manufacturers_id = m.manufacturers_id),
                            " . TABLE_PRODUCTS_DESCRIPTION . " pd
                             WHERE p.products_status = 1
                             AND p.products_id = pd.products_id
                             AND pd.language_id = 1
                             AND p.master_categories_id = " . $cid . "
                             Order By p.products_date_added desc
                             LIMIT 10";

        $products_all_results = $db->Execute($products_all_query_raw, '', false, 0);
        $track = 0;

        while(!$products_all_results->EOF)
        {
            $this->Products[$track]=
            array(

                'id'=>$products_all_results->fields['products_id'],
                'name'=>$products_all_results->fields['products_name'],
                'price'=>$products_all_results->fields['products_price'],
                'image'=>$products_all_results->fields['products_image'],
                'dateadded'=>$products_all_results->fields['products_date_added'],
                'desctiption'=>$products_all_results->fields['products_description']

            );

            $track++;
            $products_all_results->MoveNext();
        }
    }

    public function ShowLatestItems($Count)
    {

        $db = new queryFactory();

        $this->Products = array();

        $db->connect(DB_SERVER, DB_SERVER_USERNAME, DB_SERVER_PASSWORD, DB_DATABASE);

        $products_all_query_raw = "SELECT
                                    p.products_type,
                                    p.products_id,
                                    pd.products_name,
                                    p.products_image,
                                    p.products_price,
                                    p.products_tax_class_id,
                                    p.products_date_added,
                                    m.manufacturers_name,
                                    p.products_model,
                                    p.products_quantity,
                                    p.products_weight,
                                    p.product_is_call,
                                    p.product_is_always_free_shipping,
                                    p.products_qty_box_status,
                                    p.master_categories_id
                             FROM " . TABLE_PRODUCTS . " p
                             LEFT JOIN " . TABLE_MANUFACTURERS . " m
                                    ON (p.manufacturers_id = m.manufacturers_id),
                            " . TABLE_PRODUCTS_DESCRIPTION . " pd
                             WHERE p.products_status = 1
                             AND p.products_id = pd.products_id
                             AND pd.language_id = 1
                             Order By p.products_date_added desc
                             LIMIT 10";

        $products_all_results = $db->Execute($products_all_query_raw, '', false, 0);
        $track = 0;

        while(!$products_all_results->EOF)
        {
            $this->Products[$track]=
            array(

                'id'=>$products_all_results->fields['products_id'],
                'name'=>$products_all_results->fields['products_name'],
                'price'=>$products_all_results->fields['products_price'],
                'image'=>$products_all_results->fields['products_image'],
                'dateadded'=>$products_all_results->fields['products_date_added']

            );

            $track++;
            $products_all_results->MoveNext();
        }
    }

    public function ShowSpecials()
    {
        
    }

    public function ShowProductDetail($productID){
        $db = new queryFactory();

        $this->Products = array();

        $db->connect(DB_SERVER, DB_SERVER_USERNAME, DB_SERVER_PASSWORD, DB_DATABASE);

        $products_all_query_raw = "SELECT
                                    p.products_type,
                                    p.products_id,
                                    pd.products_name,
                                    p.products_image,
                                    p.products_price,
                                    p.products_tax_class_id,
                                    p.products_date_added,
                                    m.manufacturers_name,
                                    p.products_model,
                                    p.products_quantity,
                                    p.products_weight,
                                    p.product_is_call,
                                    p.product_is_always_free_shipping,
                                    p.products_qty_box_status,
                                    p.master_categories_id,
                                    pd.products_description
                             FROM " . TABLE_PRODUCTS . " p
                             LEFT JOIN " . TABLE_MANUFACTURERS . " m
                                    ON (p.manufacturers_id = m.manufacturers_id),
                            " . TABLE_PRODUCTS_DESCRIPTION . " pd
                             WHERE p.products_status = 1
                             AND p.products_id = pd.products_id
                             AND pd.language_id = 1
                             AND p.products_id = " . $productID . "
                             Order By p.products_date_added desc
                             LIMIT 10";

        $products_all_results = $db->Execute($products_all_query_raw, '', false, 0);
        $track = 0;

        while(!$products_all_results->EOF)
        {
            $this->Products[$track]=
            array(

                'id'=>$products_all_results->fields['products_id'],
                'name'=>$products_all_results->fields['products_name'],
                'price'=>$products_all_results->fields['products_price'],
                'image'=>$products_all_results->fields['products_image'],
                'dateadded'=>$products_all_results->fields['products_date_added'],
                'desctiption'=>$products_all_results->fields['products_description'],
                'model'=>$products_all_results->fields['products_model']

            );

            $track++;
            $products_all_results->MoveNext();
        }
    }
}

?>
