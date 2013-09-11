Ext.define('School.controller.Sites', {
    extend: 'Ext.app.Controller',    

    init: function() {
        this.control({
            'viewport  > #userListMenu ': {
                click: this.onClickMenu
            },'viewport  > #messageBoxMenu': {
                click: this.onClickInboxMenu
            } , '#messageListView > gridpanel ':{
                itemclick: this.onClickMessage
            }
        });
    },
    
    onClickMenu: function (menuitem) {
        var m = Ext.create('School.view.users.manage' )  ;
        var tabs = Ext.getCmp('pnl_tab_main');
        tabs.add(m);
    },
    
    onClickInboxMenu: function (menuitem) {
        var m = Ext.create('School.view.messages.messagesList' )  ;
        var tabs = Ext.getCmp('pnl_tab_main');
        tabs.add(m);
    },
    onClickMessage:function(record , v){
        Ext.getCmp('messageBodyArea').update(v.data.body);  
        Ext.getCmp('messageReplayBox').show();
    }
});