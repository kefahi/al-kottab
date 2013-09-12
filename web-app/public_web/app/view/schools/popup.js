Ext.define('School.view.schools.popup',{
    extend: 'Ext.window.Window',
    alias: 'widget.schoolspopup',
    id:'schoolspopupPanel',
    autoShow: true,
    width: 300,
    buttons : [{
        text: 'الموظفين',
        listeners: {
            click:function(record){
                if(Ext.getCmp('pnl_area_student'))
                    Ext.getCmp('pnl_area_student').destroy();

                var m = Ext.create('School.view.users.manage' )  ;
                var tabs = Ext.getCmp('pnl_tab_main');
                m.getComponent('userGridView').store.filter( "school" ,Ext.getCmp('schoolspopupPanel').title );
                tabs.setActiveTab(tabs.add(m) );
            }
        }
    } ]
    
} );