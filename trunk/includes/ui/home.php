<?php
require('includes/classes/products.php');
require('includes/modules/productsHome.php');

//ma products
$prodsObj = new ProductsView(true);

?>
<div class="lblHomeHeader">Welcome To EZ Tennis</div>
<br>
<div>
    <div id="homeLeftCol">
        <div class="hmTitle">Make A Request</div>
        We sell and trade used racquets.
        We also carry a large selection of racquets that may not yet listed here.
        If you have any requests or questions, click here to contact us.<br><br>
        <input type="button" class="btnHomeUI" value="Talk to someone now" onclick="alert('')"/> &nbsp;
        <input type="button" class="btnHomeUI" value="Send us an Email" onclick="alert('')"/>
    </div>

    <div id="homeRightCol">
        <div class="hmTitle">Sign Up or Sign In</div>
        Be sure to sign up for FREE in order to take advantage
        of our special discounts and offers we offer on all of our
        products on eztennis.com. You can create an account here instantly
        with either your AOL Isntant Messenger(TM) account, Yahoo account, or
        GMAIL account. You can also create a new account.
    </div>
    
</div>



<br>
<br>
<div class="lblHomeHeader">Latest Racquets</div>
<?php
echo $prodsObj->content;
?>

