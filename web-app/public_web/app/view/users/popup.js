Ext.define('School.view.users.popup',{
    extend: 'Ext.window.Window',
    alias: 'widget.userpopup',

    layout: { 
                type: 'vbox',
  },
    autoShow: true,
    width: 300,
    
            

        buttons : [
            {
                text: 'ارسال رسالة',
                listeners: {
                    click:function(){
                    }
                }
                
            },{
                text: 'اضافة الى نادي',
                action: 'save'
            },{
                text: 'مشاهدة التفاصير',
                action: 'save'
            }
        ]

    
    

});