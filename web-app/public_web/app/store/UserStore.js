Ext.define('School.store.UserStore', {
    extend: 'Ext.data.Store',

    alias:"userStore",

    requires: [
        'School.model.User'
    ],
    model: 'School.model.User',
    autoLoad: true,
    autoSync: true,
    
    proxy: {
        type: 'ajax',
        api: {
            //update: 'api/users/list'
            read: '/api/users/list', 
        },
        reader: {
            type: 'json'
        },
        writer: {
            type: 'json'
        }
        
        }
    
});
