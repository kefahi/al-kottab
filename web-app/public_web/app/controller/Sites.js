Ext.define('School.controller.Sites', {
    extend: 'Ext.app.Controller',    

    init: function() {
        this.control({
            'viewport  > menu ': {
				click: this.onClickMenu
            }
        });
    },

    onClickMenu: function (menuitem) {
        var tabs = Ext.getCmp('pnl_tab_main');
        
        tabs.add( {
            title: 'Bar',
            closable: true,
            plain: true,
            loader: {
                autoLoad:true,
                url :'http://docs.sencha.com/ext-js/4-1/source/ComponentLoader.html#Ext-ComponentLoader'
            }

        });

        tabs.items.each(function(tab)  {
            alert('1');
            //tab.hide();
        });
        

}
});