Ext.define('School.store.MessageStore', {
    extend: 'Ext.data.Store',

    requires: [
        'School.model.Message'
    ],
    model: 'School.model.Message',
    autoLoad: true,
    autoSync: true,
    storeId: 'MyJsonStore',
    proxy: {
        type: 'ajax',
        api: {
            read: '/api/messages/list', 
        },
        reader: {
            type: 'json'
        },
        writer: {
            type: 'json'
        }
        
        }
    
});
