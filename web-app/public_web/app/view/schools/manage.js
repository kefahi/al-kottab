Ext.define('School.view.schools.manage',{
    extend: 'Ext.Panel',
    requires: [ 'Ext.grid.GridPanel'  , 'Ext.Panel'   ],  
    xtype: 'panel',
    id: 'schoolManage',
    rtl: true,
    title:'إدارة المدارس',
    width: 754,
    layout: {
        align: 'stretch',
        type: 'hbox'
    },
    tabConfig: {
        xtype: 'tab',
        flex: 1
    },
     
    items : [{
        xtype: 'gridpanel',
        store: 'SchoolStore',
        height: 181,
        width: '100%',
        
        collapseDirection: 'left',
        collapsed: false,
        collapsible: true,
        titleCollapse: true,
        
        viewConfig: {
            padding: '0 0 0 5'
        },
        listeners: {
            itemclick:function(){
            }
        },
        columns: [{
            xtype: 'gridcolumn',
            dataIndex: 'name',
            text: 'الإسم'
        },{
            xtype: 'gridcolumn',
            dataIndex: 'phones',
            text: 'رقم الهاتف'
        }]
    }] 
});