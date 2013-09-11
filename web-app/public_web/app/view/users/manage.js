Ext.define('School.view.users.manage',{
    extend: 'Ext.Panel',
    requires: [ 'Ext.grid.GridPanel'  , 'Ext.Panel'  , 'School.view.users.popup'] ,  
    
    xtype: 'panel',

    rtl: true,
    width: 754,
    layout: {
        align: 'stretch',
        type: 'hbox'
    },
    tabConfig: {
        xtype: 'tab',
        flex: 1
    },
    dockedItems: [
    {
        xtype: 'form',
        flex: 1,
        margins: '10',
        dock: 'left',
        autoRender: true,
        width: 212,
        resizable: false,
        bodyBorder: true,
        animCollapse: true,
        collapseDirection: 'left',
        collapsed: false,
        collapsible: true,
        placeholderCollapseHideMode: 4,
        title: 'البحث عن مستخدم',
        titleAlign: 'right',
        titleCollapse: false,
        items: [
        {
            xtype: 'textfield',
            margin: '10 ',
            width: 200,
            fieldLabel: 'اسم الطلاب',
            labelWidth: 70
        },
        {
            xtype: 'textfield',
            width: 200,
            fieldLabel: 'اسم العائلة',
            labelWidth: 70
        },
        {
            xtype: 'textfield',
            width: 200,
            fieldLabel: 'رقم الطالب',
            labelWidth: 70
        },
        {
            xtype: 'checkboxgroup',
            fieldLabel: 'الجنس',
            items: [
            {
                xtype: 'checkboxfield',
                boxLabel: 'ذكر'
            },
            {
                xtype: 'checkboxfield',
                boxLabel: 'انثى'
            }
            ]
        },
        {
            xtype: 'combobox',
            anchor: '100%',
            fieldLabel: 'الجنسية'
        },
        {
            xtype: 'combobox',
            anchor: '100%',
            fieldLabel: 'الديانة'
        }
        ],
        listeners: {
            afterrender: {}
        }
    }] ,
    items : [
    {
        xtype: 'gridpanel',
        store: 'UserStore',
        height: 181,
        width: '100%',
        
        collapseDirection: 'left',
        collapsed: false,
        collapsible: true,
        title: 'كل الطلاب',
        titleCollapse: true,
        
        //  store: 'UserStudent' ,
        viewConfig: {
            padding: '0 0 0 5'
        },
        listeners: {
            select:  function(record){
                var view = Ext.widget('userpopup');
                var data = record.selected.items[0].data ;
                //view.down('form').loadRecord(record);
                view.setTitle(data.first_name + '  ' + data.fourth_name);
            }     
        },
        columns: [{

            xtype: 'gridcolumn',
            dataIndex: 'user_name',
            text: 'اسم المستخدم'
        },{
            xtype: 'gridcolumn',
            dataIndex: 'first_name',
            text: 'الأسم الأول',
        },{
            xtype: 'gridcolumn',
            dataIndex: 'second_name',
            text: 'الأسم الثاني',
        },{
            xtype: 'gridcolumn',
            dataIndex: 'fourth_name',
            text: 'اسم العائلة',
        },{
            xtype: 'gridcolumn',
            dataIndex: 'type',
            text: 'النوع',
        },{
            xtype: 'gridcolumn',
            dataIndex: 'school',
            text: 'المدرسة',
        }
        ]
    }] 
}
);