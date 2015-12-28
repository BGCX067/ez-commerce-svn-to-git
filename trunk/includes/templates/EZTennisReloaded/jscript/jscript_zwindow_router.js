var LoginWinL, LoginWin, ProductWin;
var ProductWinL = Array();
function showLoginWindow()
{

    var id = 0;
    if(!dhxWins.window("userWin"+id)){
    
        LoginWinL = createLayoutWindow(id, "EZ Tennis - Customer Log in", 800,400);

        LoginWinL.items[0].setText("Sign In Options");
        LoginWinL.items[0].setText("Login");
        LoginWinL.items[0].setWidth(250);
        LoginWinL.items[0].attachURL("model_interface.php?uiid=6", true);
        LoginWinL.items[1].attachURL("model_interface.php?uiid=2", true);
        LoginWin = dhxWins.window("userWin"+id);
        LoginWin.centerOnScreen();
        LoginWin.setModal(true);
    }else{
        LoginWin.bringToTop();
        LoginWin.centerOnScreen();
        LoginWin.setModal(true);
    }
/**
    if(!loginWindow)
    {

        var loginWindow = new Ext.Window({
            title: 'Login',
            closable:true,
            width:600,
            height:350,
            //border:false,
            plain:true,
            layout: 'border',
            items: [


         new Ext.Panel({
            region: 'center',
            margins:'3 3 3 0',
            defaults:{autoScroll:true}
        }),

        // Panel for the west
        new Ext.Panel({
            title: 'Sign In',
            region: 'west',
            split: true,
            width: 200,
            margins:'3 0 3 3',
            cmargins:'3 3 3 3'

        })
            ]
});


            loginWindow.show(this);
            **/
           // tabs.load
           // (
           //     {

           //         url: 'model_interface.php',
           //         params: {uiid:2},
           //         text: 'Loading...'
           //     }
           // );

           // nav.load(
           //         {
           //         url: 'model_interface.php',
           //          params: {uiid:6}
           //         }
           // );
        /**
        panel.load({
        url: 'your-url.php',
        params: {param1: 'foo', param2: 'bar'}, // or a URL encoded string
        callback: yourFunction,
        scope: yourObject, // optional scope for the callback
        discardUrl: false,
        nocache: false,
        text: 'Loading...',
        timeout: 30,
        scripts: false
    });
  
    }
    else
    {
            loginWindow.show(this);
    }
      **/
}

function navigateWindow(layout, section, uiid){
     layout.items[section].attachURL("model_interface.php?uiid="+uiid, true);
}

function show_gfc()
{
    navigateWindow(LoginWinL, 1, 9);
}
/**
***
TODO: Make Dynamic Product Windows and add them to a window collection.
***
**/

	function createLayoutWindow(idPrefix, winTitle,w,h) {
		var p = 0;
                if(!dhxWins)
                    {
                        doOnLoad();
                        //createWindow(idPrefix);
                    }
		dhxWins.forEachWindow(function(){p++;});
		if (p>4) {
			alert("Close a window first...");
			return; 
		}
		var id = "userWin"+(idPrefix);
		//
		//var w = 700;// Number(document.getElementById("win_w").value);
		//var h = 350;//Number(document.getElementById("win_h").value);
		var x = 100;//Number(document.getElementById("win_x").value);
		var y = 80;//Number(document.getElementById("win_y").value);
		//
		dhxLayout = new dhtmlXLayoutObject(dhxWins.createWindow(id, x, y, w, h), "2U");
                dhxLayout.items[0].setWidth(200);
		dhxWins.window(id).setText(winTitle);

                return dhxLayout;
		// dhxWins.window(id).keepInViewport(true);
		//
	}


        function showProduct(winID, ProdName){
                var id = 1;  
    if(!dhxWins.window("userWin"+id+winID)){


        ProductWinL[winID] = createLayoutWindow(id+winID, ProdName, 750, 450);
        ProductWin = dhxWins.window("userWin"+id+winID);
        ProductWinL[winID].items[0].setText(" ");
        ProductWinL[winID].items[0].progressOn();
        ProductWinL[winID].items[0].attachURL("model_interface.php?uiid=7&lcid="+winID, true);
        ProductWinL[winID].items[1].setText("Product Details");
        ProductWinL[winID].items[1].progressOn();
        ProductWinL[winID].items[1].attachURL("model_interface.php?uiid=5&lcid="+winID, true);
       

        ProductWin.centerOnScreen();

    }else{
        ProductWin = dhxWins.window("userWin"+id+winID);
        ProductWin.bringToTop();
        ProductWin.centerOnScreen();
        ProductWinL[winID].items[1].attachURL("model_interface.php?uiid=5&lcid="+winID, true);
        ProductWin.centerOnScreen();
        
    }

        }