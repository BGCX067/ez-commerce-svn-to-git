<?php
/**
 * Page Template
 *
 * @package templateSystem
 * @copyright Copyright 2003-2007 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: tpl_login_default.php 5926 2007-02-28 18:15:39Z drbyte $
 */
?>

<div class="centerColumn" id="loginDefault">

<?php 
?>
<div class="login_t">
    Sign in:&nbsp;&nbsp;&nbsp;&nbsp;
    Email <input type="text" id="txtLogin" class="login_1"/>&nbsp;&nbsp;
    Password: <input type="password" id="txtPwd" class="login_1"/>
    <input type="button" value="Log In" />
</div>
<!--BOF PPEC split login- DO NOT REMOVE-->
<style type="text/css">
/* form.css */

* {
  margin: 0;
  padding: 0;
}

form {
  margin: 0;
  padding: 0;
  font-size: 100%;
  min-width: 560px;
  max-width: 620px;
  width: 80%;
}

form fieldset {
  clear: both;
  font-size: 100%;
  border-color: #000000;
  border-width: 1px 0 0 0;
  border-style: solid none none none;
  padding: 10px;
  margin: 0 0 0 0;
}

form fieldset legend {
  font-size: 90%;
  font-weight: normal;
  color: #000000;
  margin: 0 0 0 0;
  padding: 0 5px;
}

label {
  font-size: .9em;
}

label u {
  font-style: normal;
  text-decoration: underline;
}

input, select, textarea {
  font-family: Tahoma, Arial, sans-serif;
  font-size: .85em;
  color: #000000;
}

textarea {
  overflow: auto;
}

form div {
  clear: left;
  display: block;
  width: 354px;
  zoom: 1;
  margin: 5px 0 0 0;
  padding: 1px 3px;
}

form fieldset div.notes {
  float: right;
  width: 140px;
  height: auto;
  margin: 0 0 0px 0px;
  padding: 5px;
  border: 1px solid #666666;
  background-color: #ffffe1;
  color: #666666;
  font-size: 88%;
}

form fieldset div.notes h4 {
  background-image: url(/images/icon_info.gif);
  background-repeat: no-repeat;
  background-position: top left;
  padding: 3px 0 3px 27px;
  border-width: 0 0 1px 0;
  border-style: solid;
  border-color: #666666;
  color: #666666;
  font-size: 80%;
}

form fieldset div.notes p {
  margin: 0em 0em 1.2em 0em;
  color: #666666;
}

form fieldset div.notes p.last {
  margin: 0em;
}

form div fieldset {
  clear: none;
  border-width: 1px;
  border-style: solid;
  border-color: #666666;
  margin: 0 0 0 144px;
  padding: 0 5px 5px 5px;
  width: 100px;
}

form div fieldset legend {
  font-size: 100%;
  padding: 0 3px 0 9px;
}

form div.required fieldset legend {
  font-weight: bold;
}

form div label {
  display: block;
  float: left;
  width: 130px;
  padding: 3px 5px;
  margin: 0 0 5px 0;
  text-align: right;
}

form div.optional label, label.optional {
  font-weight: normal;
}

form div.required label, label.required {
  font-weight: bold;
}

form div label.labelCheckbox, form div label.labelRadio {
  float: none;
  display: block;
  width: 200px;
  zoom: 1;
  padding: 0;
  margin: 0 0 5px 142px;
  text-align: left;
}

form div fieldset label.labelCheckbox, form div fieldset label.labelRadio {
  margin: 0 0 5px 0;
  width: 170px;
}

form div img {
  border: 1px solid #000000;
}

p.error {
  background-color: #ff0000;
  background-image: url(/images/icon_error.gif);
  background-repeat: no-repeat;
  background-position: 3px 3px;
  color: #ffffff;
  padding: 3px 3px 5px 27px;
  border: 1px solid #000000;
  margin: auto 100px;
}

form div.error {
  background-color: #ffffe1;
  background-image: url(/images/required_bg.gif);
  background-repeat: no-repeat;
  background-position: top left;
  color: #666666;
  border: 1px solid #ff0000;
}

form div.error p.error {
  background-image: url(/images/icon_error.gif);
  background-position: top left;
  background-color: transparent;
  border-style: none;
  font-size: 88%;
  font-weight: bold;
  margin: 0 0 0 118px;
  width: 200px;
  color: #ff0000;
}

form div select, form div textarea {
  width: 200px;
  padding: 1px 3px;
  margin: 0 0 0 0;
}

form div input.inputText, form div input.inputPassword {
  width: 100px;
  font-size: .85em;
  padding: 1px 3px;
  margin: 0 0 0 0;
}

form div input.inputFile {
  width: 100px;
}

form div select.selectOne, form div select.selectMultiple {
  width: 211px;
  padding: 1px 3px;
}

form div input.inputCheckbox, form div input.inputRadio, input.inputCheckbox, input.inputRadio {
  display: inline;
  height: auto;
  width: auto;
  background-color: transparent;
  border-width: 0;
  padding: 0;
  margin: 0 0 0 140px;
}

form div.submit {
  width: 214px;
  padding: 0 0 0 146px;
}

form div.submit div {
  display: inline;
  float: left;
  text-align: left;
  width: auto;
  padding: 0;
  margin: 0;
}

form div input.inputSubmit, form div input.inputButton, input.inputSubmit, input.inputButton {
  background-color: #cccccc;
  color: #000000;
  width: 100px;
  padding: 0 6px;
  margin: 0;
}

form div.submit div input.inputSubmit, form div.submit div input.inputButton {
  float: right;
  margin: 0 0 0 5px;
}

form div small {
  display: block;
  margin: 0 0 5px 142px;
  padding: 1px 3px;
  font-size: 88%;
  zoom: 1;
}



</style>

<div class="acct_create_1">
    <form>
        <fieldset>
            <legend>New Customer Sign up:</legend>
               <div id="info_a" class="notes">
                    <h4>Personal Information</h4>
                    <p class="last">Please enter your name and address as they are listed for your debit card, credit card, or bank account.</p>
                </div>

            <div class="z_req">
                <label for="f_name">First Name:</label>
                <input type="text" id="f_name" name="f_name"/>
            </div>
            <div class="z_req">
                <label for="l_name">Last Name:</label>
                <input type="text" id="l_name" name="l_name"/>
            </div>
            <div class="z_req">
                <label for="cEmail">Email Address:</label>
                <input type="text" id="cEmail" name="cEmail"/>
            </div>
            <div class="z_req">
                <label for="vcEmail">Verify Email Address:</label>
                <input type="text" id="vcEmail" name="vcEmail"/>
            </div>
            <div class="z_req">
                <label for="cPwd">Password:</label>
                <input type="password" id="cPwd" name="cPwd"/>
            </div>
            <div class="z_req">
                <label for="vcPwd">Verify Password:</label>
                <input type="password" id="vcPwd" name="vcPwd"/>
            </div>
            <div>
                <input type="button" value="Register" onclick="doSubmit();"/>
                <input type="button" value="Restart" />
            </div> 
        </fieldset>
    </form>

</div>

