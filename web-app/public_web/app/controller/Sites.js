Ext.define('School.controller.Sites', {
    extend: 'Ext.app.Controller',    
    requires: [
        'School.store.UserStore'
    ],

    init: function() {
        this.control({
            'viewport  > #userListMenu ': {
                click: this.onUserMenuClick
            },'viewport  > #userSchoolMenu': {
                click: this.onSchoolMenuClick
            },'viewport  > #messageBoxMenu': {
                click: this.onClickInboxMenu
            } , '#messageListView > gridpanel ':{
                itemclick: this.onClickMessage
            }
        });
    },    
    onUserMenuClick: function (menuitem) {
        var m = Ext.create('School.view.users.manage' )  ;
        var tabs = Ext.getCmp('pnl_tab_main');
        console.log(m.getComponent('userGridView').store.filter( "school" ,'مدرسة حنين'  ));

        //Ext.getCmp('userGridView').store( "school" ,'مدرسة حنين'  ) ;//'school' , 'حنين');

        tabs.add(m);
    },
    onSchoolMenuClick: function (menuitem) {
        var m = Ext.create('School.view.schools.manage' )  ;
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