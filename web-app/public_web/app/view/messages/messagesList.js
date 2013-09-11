Ext.define('School.view.messages.messagesList',{
    extend: 'Ext.Panel',
    requires: [ 'Ext.grid.GridPanel'  , 'Ext.Panel' ] ,  
    xtype: 'panel',
    id:"messageListView",
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
        width: '50%',
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
    } ,{
        xtype: 'panel',
        layout:  'vbox'     ,
        id:'messagePanel',
        rtl:true,
        width: '50%',
        items:[{
            xtype:'label',
            rtl:true,
            id:'messageBodyArea'
        },{
            xtype: 'textarea',
            width:'100%',
            id: 'messageReplayBox'
        },{
            xtype: 'button',
            width:60,
            id: 'messageReplayButton',
            text:'إرسال'
        }]
    } ]
});