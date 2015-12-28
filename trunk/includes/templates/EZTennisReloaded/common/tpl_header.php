<?php
/**
 * Common Template - tpl_header.php

 */
?>

<?php
  // Display all header alerts via messageStack:
  if ($messageStack->size('header') > 0) {
    echo $messageStack->output('header');
  }
  if (isset($_GET['error_message']) && zen_not_null($_GET['error_message'])) {
  echo htmlspecialchars(urldecode($_GET['error_message']));
  }
  if (isset($_GET['info_message']) && zen_not_null($_GET['info_message'])) {
   echo htmlspecialchars($_GET['info_message']);
} else {

}
?>

    <div id="topNav">
        <!--
    <input type="button" id="btnSearch" value="Go" />
    <input type="text" id="search" />
    
    <ul>
        <li>Home</li>
        <li>Log in</li>
        <li>Contact</li>
        <li>Location</li>
        <li>500 Stringing Club </li>
        <li>EZ Request</li>
        <li>Speak to Someone</li>
    </ul>
     -->
    </div>

    <div id="cartTopper"></div>
    <div id="wrapper">
        <div id="Cart">
            <div id="custCartArea">We Dont Match Prices...WE Beat Them!</div>
                <!-- AddThis Button BEGIN -->
                <div class="addthis_toolbox addthis_default_style">
                <a class="addthis_button_facebook"></a>
                <a class="addthis_button_email"></a>
                <a class="addthis_button_favorites"></a>
                <a class="addthis_button_print"></a>
                <span class="addthis_separator">|</span>
                <a href="http://www.addthis.com/bookmark.php?v=250&amp;pub=webmech" class="addthis_button_expanded">More</a>
                </div>
                <script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#pub=webmech"></script>
            <!-- AddThis Button END -->

        </div>
        <div id="leftCol">
  		
        <div id='logo'><img src='/includes/templates/EZTennisReloaded/images/logo_temp.png' alt='EZ Tennis International' /></div>
         



<!-- EOF header -->