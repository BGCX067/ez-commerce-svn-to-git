  $(document).ready(function(){


        Ext.onReady(function() {

    var btnHome = new Ext.Button({
        text: 'Home',
        height: 20,
        width: 90
        });
        
   btnHome.on('click',shHm);

    var btnLogin = new Ext.Button({
        text: 'Log In',
        height: 20,
        width: 90
        });

        //btnLogin.on('click',showLoginWindow);
        btnLogin.on('click',showLoginWindow);
        
    var btnContact = new Ext.Button({
        text: 'Contact',
        height: 20,
        width: 90
        });

        btnContact.on('click',ldcnt);
        
    var btnLocaton = new Ext.Button({
        text: 'Location',
        height: 20,
        width: 90
        });
        
        btnLocaton.on('click',ldloc);

    var btnStrClub = new Ext.Button({
        text: '500 Stringing Club',
        height: 20,
        width: 90
        });

          btnStrClub.on('click',ldez);

    var btnEZReq = new Ext.Button({
        text: 'EZ Request',
        height: 20,
        width: 90
        });
        
    var btnCustChat = new Ext.Button({
        text: 'Speak to Someone',
        height: 20,
        width: 90
        });

    var btnSrch = new Ext.Button({
        text: 'Go',
        height: 20,
        width: 50
        });

    var tb = new Ext.Toolbar({
        renderTo: 'topNav',
        height: 25,
        monitorResize : true,
        items:
        [
            btnHome,
            btnLogin,
            btnContact,
            btnLocaton,
            btnStrClub,
            btnEZReq,
            btnCustChat
        ]
    });

    var ctTb = new Ext.Toolbar({
        renderTo: 'ctSearch',
        height: 25,
        monitorResize : true,
        items:
        [
            {
                xtype: 'textfield',
                name: 'field1',
                emptyText: 'search or ask a question',
                width: 150
            },
            btnSrch
        ]
    });

    

/**
            var viewport = new Ext.Viewport({
                layout:'border',
                items:[tb,
                    {
                        region: 'center',
                        height: 0,
                        border: false,
                        margins: '0 0 0 0'
                    }]
            });

            **/
        });

  });