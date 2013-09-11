Ext.define('School.model.Message', {
    extend: 'Ext.data.Model',

    fields: [
        {
            name: 'id'
        },{
            name: 'created_at'
        },{
            name: 'updated_at'
        },{
            name: 'priority'
        },{
            name: 'severity'
        },{
            name: 'sender'
        },{
            name: 'recipient'
        },{
            name: 'body'
        },{
            name: 'subject'
        },{
            name: 'delivery_status'
        },{
            name: 'delivery_method'
        }
    ]
});