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
    onUserMenuClick: function (menuitem , filter) {
        if(Ext.getCmp('pnl_area_student'))
            Ext.getCmp('pnl_area_student').destroy();

        
        var m = Ext.create('School.view.users.manage' )  ;
        var tabs = Ext.getCmp('pnl_tab_main');
        m.getComponent('userGridView').store.clearFilter();
        tabs.setActiveTab(tabs.add(m) );
    },
    onSchoolMenuClick: function (menuitem) {
        if(Ext.getCmp('schoolManagePanel'))
            Ext.getCmp('schoolManagePanel').destroy();
        
        var m = Ext.create('School.view.schools.manage' )  ;
        var tabs = Ext.getCmp('pnl_tab_main');
        tabs.setActiveTab(tabs.add(m));
    },    
    onClickInboxMenu: function (menuitem) {
        var m = Ext.create('School.view.messages.messagesList' )  ;
        var tabs = Ext.getCmp('pnl_tab_main');
        tabs.setActiveTab(tabs.add(m));
    },
    onClickMessage:function(record , v){
        Ext.getCmp('messageBodyArea').update(v.data.body);  
        Ext.getCmp('messageReplayBox').show();
    }
});