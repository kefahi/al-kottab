/*
 * File: app/model/Student.js
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

Ext.define('School.model.Student', {
    extend: 'Ext.data.Model',

    fields: [
        {
            name: 'id'
        },
        {
            name: 'password'
        },
        {
            name: 'employee_id_fk'
        },
        {
            name: 'customer_id_fk'
        },
        {
            name: 'active_flg'
        },
        {
            name: 'lastname'
        },
        {
            name: 'firstname'
        },
        {
            name: 'middlename'
        },
        {
            name: 'prefix_name'
        },
        {
            name: 'suffix_name'
        },
        {
            name: 'gender_code'
        },
        {
            name: 'birth_dttm'
        },
        {
            name: 'birth_city_nm'
        },
        {
            name: 'birth_state_code'
        },
        {
            name: 'birth_country_code'
        },
        {
            name: 'gpa'
        },
        {
            name: 'is_on_staff'
        },
        {
            name: 'soc_sec_num'
        },
        {
            name: 'driver_license_num'
        },
        {
            name: 'driver_license_state_code'
        },
        {
            name: 'driver_license_country_ocde'
        },
        {
            name: 'other_id_num'
        },
        {
            name: 'citizen_country_code'
        },
        {
            name: 'marital_status_code'
        },
        {
            name: 'race_code'
        },
        {
            name: 'ethnic_group_code'
        },
        {
            name: 'veteran_military_status_code'
        },
        {
            name: 'fin_alert_code'
        },
        {
            name: 'inactive_date'
        },
        {
            name: 'inactive_reason'
        },
        {
            name: 'employee_inactivating'
        }
    ]
});