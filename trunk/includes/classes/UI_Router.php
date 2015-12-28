<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UI_Router
 *
 * @author myke
 */
class UI_Router  extends base
{
    public $returnContent ;


    function UI_Router($id)
    {
        //go to db and get UI name
        //return ui name
        global $db5;//, $cPath, $cPath_array;


        $this->returnContent = ""; //will either be a path or definition;

        $db5 = new queryFactory();

        $db5->connect(DB_SERVER, DB_SERVER_USERNAME, DB_SERVER_PASSWORD, DB_DATABASE);

        $interface_qry = "select * from EZ_UserInterface where
            Interfaceid = $id";

  	$ui = $db5->Execute($interface_qry, '', false, 0);

     
        while (!$ui->EOF)
        {
            if($ui->fields["InterfaceUseDef"] == 1)
                 $this->returnContent .= $ui->fields["InterfaceDefinition"];
            else
                 $this->returnContent .= $ui->fields["InterfacePath"];

           $ui->MoveNext();
        }

    }
}

?>
