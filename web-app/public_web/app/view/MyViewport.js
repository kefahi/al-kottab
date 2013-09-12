Ext.define('School.view.MyViewport', {
    extend: 'Ext.container.Viewport',
    // requires: [  'School.view.ViewportItems' ],

    rtl: true,
    layout: {
        type: 'border'
    },

    initComponent: function() {
        var me = this;

        Ext.applyIf(me, {
            items: [
                {
                    xtype: 'toolbar',
                    region: 'north',
                    border: false,
                    height: 40,
                    rtl: true,
                    layout: {
                        defaultMargins: {
                            top: 0,
                            right: 0,
                            bottom: 5,
                            left: 0
                        },
                        type: 'hbox'
                    },
                    items: [
                        {
                            xtype: 'splitbutton',
                            rtl: false,
                            text: 'الطلاب',
                            menu: {
                                xtype: 'menu',
                                rtl: false,
                                headerPosition: 'bottom',
                                placeholderCollapseHideMode: 2,
                                items: [
                                    {
                                        xtype: 'menuitem',
                                        rtl: false,
                                        text: 'تسجيل طالب جديد',
                                        listeners: {
                                            click: {
                                                fn: me.onMenuitemClick,
                                                scope: me
                                            }
                                        }
                                    }
                                ]
                            }
                        },
                        {
                            xtype: 'tbseparator'
                        },
                        {
                            xtype: 'splitbutton',
                            icon: 'images/bricks.png',
                            iconCls: '',
                            text: 'العاملين',
                            listeners: {
                                click: {
                                    fn: me.onSplitbuttonClick2,
                                    scope: me
                                }
                            },
                            menu: {
                                xtype: 'menu',
                                items: [
                                    {
                                        xtype: 'menuitem',
                                        text: 'ادخال طالب جديد',
                                        listeners: {
                                            click: {
                                                fn: me.onMenuitemClick1,
                                                scope: me
                                            }
                                        }
                                    }
                                ]
                            }
                        },
                        {
                            xtype: 'tbseparator'
                        },
                        {
                            xtype: 'splitbutton',
                            icon: 'images/bricks.png',
                            iconCls: '',
                            text: 'الأكاديمية',
                            listeners: {
                                click: {
                                    fn: me.onSplitbuttonClick3,
                                    scope: me
                                }
                            },
                            menu: {
                                xtype: 'menu',
                                items: [
                                    {
                                        xtype: 'menuitem',
                                        text: 'ادخال طالب جديد',

                                        listeners: {
                                            click: {
                                                fn: me.onMenuitemClick2,
                                                scope: me
                                            }
                                        }
                                    }
                                ]
                            }
                        },
                        {
                            xtype: 'tbseparator'
                        },
                        {
                            xtype: 'splitbutton',
                            icon: 'images/bricks.png',
                            text: 'اداريات',
                            rtl:false,
                            id: 'manageMenu',
                            menu: {
                                xtype: 'menu',
                                items: [
                                    {
                                       xtype: 'menuitem',
                                        id:'userListMenu',
                                        text: 'المستخدم'
                                    },{
                                       xtype: 'menuitem',
                                        id:'userSchoolMenu',
                                        text: 'المدارس'
                                    }
                                ]
                            }
                        },
                        {
                            xtype: 'tbseparator'
                        },
                        {
                            xtype: 'splitbutton',
                            icon: 'images/bricks.png',
                            text: 'الرسائل',
                            rtl:false,
                            id: 'messageMenu',
                            menu: {
                                xtype: 'menu',
                                id: 'messageBoxMenu',
                                items: [
                                    {
                                        xtype: 'menuitem',
                                        text: 'البريد الوارد'
                                        
                                    }
                                ]
                            }
                        }
                    ]
                },
                {
                    xtype: 'tabpanel',
                    collapseMode: 'header',
                    region: 'center',
                    id: 'pnl_tab_main',
                    itemId: 'pnl_tab_main',
                    animCollapse: false,
                    collapseFirst: false,
                    collapsible: false,
                    titleCollapse: false,
                    maxTabWidth: 100,
                    minTabWidth: 20
                },  
                {
                    xtype: 'panel',
                    region: 'west',
                    width: 150,
                    collapsed: true,
                    collapsible: true,
                    id:"menuAcees",
                    title: 'الوصول السريع',
                    titleCollapse: false
                }
            ]
        });
        me.callParent(arguments);
    },
    onMenuitemManageUser: function(editor, e, eOpts) {
        alert("you need to save");
      
    },

});