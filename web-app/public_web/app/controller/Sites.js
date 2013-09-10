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
        var m = Ext.create('School.view.users.manage' )  ;
        var tabs = Ext.getCmp('pnl_tab_main');
        
        //console.log(m);
        tabs.add(m);
}
});