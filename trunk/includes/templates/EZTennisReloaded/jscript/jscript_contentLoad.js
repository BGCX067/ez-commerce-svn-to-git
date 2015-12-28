google.load("jquery", "1.3.2");

  $(document).ready(function(){
        $('#rightCol').load('model_interface.php', {uiid : 1});

  });

    function shHm()
    {
        load_cont("rightCol",1);
    }
 //load page with no parameters
 /**
  * parameters:
  * elementid - which element to load the content in
  * luiid - which ui to load
  */
 function ldez()
 {
     load_cont("rightCol",10);
 }

 function ldcnt()
 {
     load_cont("rightCol",11);
 }

 function ldloc()
 {
     load_cont("rightCol",12);
 }
 
  function load_cont(elementid, luiid){
        var el = document.getElementById(elementid);
            var loadn = "<div id='ll1' class='e_z_loading1'><br/><br/><img style='position: relative;margin-left: auto; margin-right: auto;'src='images/ajax-loader.gif'/></div>";
            el.innerHTML = loadn;

            $('#'+elementid).load('model_interface.php', {uiid : luiid},  function(rt, ts, xpEq){
            el.innerHTML = loadn;
            $('#ll1').fadeTo("slow", 0);
            el.innerHTML = rt;
            $('#mod_ui_ez').fadeTo(0, 0);
            $('#mod_ui_ez').fadeTo("slow", 1);

        });

  }
 //load page with parameters
 /**
  * parameters:
  * elementid - which element to load the content in
  * luiid - which ui to load
  * params - required ui parameters
  */
  function load_cont_2(elementid, luiid, params)
  {
    
  }
//function used to load a product category
//necessary parameters:
//category id
//
  function load_prod_disp(cid){ 
      //uiid is the user interace id
        var rc = document.getElementById("rightCol");
        rc.innerHTML = "<div id='ll1' class='e_z_loading1'><br/><br/><img src='images/ajax-loader.gif'/></div>";

     
   
        $('#rightCol').load('model_interface.php', {uiid : 4, lcid: cid}, function(rt, ts, xpEq){
            rc.innerHTML = "<div id='ll1' class='e_z_loading1'><br/><br/><img src='images/ajax-loader.gif'/></div>";
            $('#ll1').fadeTo("slow", 0);
            rc.innerHTML = rt;
            $('#pl1').fadeTo(0, 0);
            $('#prodFilterPanel').fadeTo(0, 0);
            $('#pl1').fadeTo("slow", 1);
            $('#prodFilterPanel').fadeTo("slow", 1);

        });     
  }

      function doSubmit(){
          
        var f_n = document.getElementById('f_name').value;
        var l_n = document.getElementById('l_name').value;
        var c_e = document.getElementById('cEmail').value;
        var vc_e = document.getElementById('vcEmail').value;
        var vp = document.getElementById('cPwd').value;
        var vvp = document.getElementById('vcPwd').value;

        $('#info_a').load('model_interface.php', {
            uiid: 8,
            fn: f_n,
            ln: l_n,
            em: c_e,
            vm: vc_e,
            pw: vp,
            vp: vvp
    });
    }