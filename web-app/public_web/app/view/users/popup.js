Ext.define('School.view.users.popup',{
    extend: 'Ext.window.Window',
    alias: 'widget.userpopup',
    id:'userpopupPanel',
    layout: {
        type: 'hbox',
    },
    autoShow: true,
    width: 300,
    buttons : [{
        text: 'ارسال رسالة',
        listeners: {
            click:function(){
                Ext.getCmp('userpopupPanel').setHeight(200);
               var panel = Ext.getCmp('replaypop').show();
            }
        }
    },{
        text: 'اضافة الى نادي',
        action: 'save'
    },{
        text: 'مشاهدة التفاصير',
        action: 'save'
    }
    ],
    items:[{
        xtype:'form'   ,
        id:'replaypop',
        hidden:true,
        width: '100%',
        height: '100%',
        items:[{
            xtype:'textarea'   ,
            width:'100%',
        } ,
        {
            xtype:'button',
            text:'ارسال' 
        }] 

    }]
});