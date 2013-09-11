Ext.define('School.view.messages.messagesList',{
    extend: 'Ext.Panel',
    requires: [ 'Ext.grid.GridPanel'  , 'Ext.Panel' ] ,  
    xtype: 'panel',
    
    rtl: true,
    
    layout: {
        align: 'stretch',
        type: 'hbox'
    },
    tabConfig: {
        xtype: 'tab',
        flex: 1
    },
    
    items:[{
        xtype: 'gridpanel',
        width: '100%',
        store: 'MessageStore',
        
        columns: [   {            xtype: 'gridcolumn',
            dataIndex: 'subject',
            text: 'العنوان'
        },{
            xtype: 'gridcolumn',
            dataIndex: 'sender',
            text: 'المرسل'
        },{
            xtype: 'gridcolumn',
            dataIndex: 'created_at',
            text: 'التاريخ'
        }]
    }]
});