Ext.define('School.store.SchoolStore', {
    extend: 'Ext.data.Store',

    model: 'School.model.School',
    autoLoad: true,
    autoSync: true,
    proxy: {
        type: 'ajax',
        api: {
            read: '/api/schools/list', 
        },
        reader: {
            type: 'json'
        },
        writer: {
            type: 'json'
        }
        
        }
    
});
