$(function () {
    var table = $('#cims_data_table').DataTable({
        processing: true,
        serverSide: true,
        
        ajax: base_url + "/admin/unclaimed/data-table",
        columns: [{
            data: 'DT_RowIndex',
            name: 'DT_RowIndex'
        },

        {
            data: 'customer_name_en',
            name: 'customer_name_en'
        },
        {
            data: 'customer_name_mr',
            name: 'customer_name_mr'
        },

        {
            data: 'address_en',
            name: 'address_en'
        },

        {
            data: 'address_mr',
            name: 'address_mr'
        },

        {
            data: 'udrn',
            name: 'udrn'
        },


        {
            data: 'status',
            name: 'status',
            orderable: false,
            searchable: false
        },
        {
            data: 'action',
            name: 'action',
            orderable: false,
            searchable: false
        }]
    });

    function reload_table() {
        table.DataTable().ajax.reload(null, false);
    }
})