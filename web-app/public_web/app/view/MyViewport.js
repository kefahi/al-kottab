/*
 * File: app/view/MyViewport.js
 *
 * This file was generated by Sencha Architect version 2.2.2.
 * http://www.sencha.com/products/architect/
 *
 * This file requires use of the Ext JS 4.2.x library, under independent license.
 * License of Sencha Architect does not include license for Ext JS 4.2.x. For more
 * details see http://www.sencha.com/license or contact license@sencha.com.
 *
 * This file will be auto-generated each and everytime you save your project.
 *
 * Do NOT hand edit this file.
 */

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
                                        text: 'المستخدمون'
                                        
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
                    animCollapse: true,
                    collapsed: true,
                    collapsible: true,
                    placeholderCollapseHideMode: 4,
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