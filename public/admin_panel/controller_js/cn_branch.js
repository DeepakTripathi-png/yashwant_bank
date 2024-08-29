$(function () {
    var table = $('#cims_data_table').DataTable({
    processing: false,
    serverSide: true,
    paging: true,
    searching: true,
    destroy: true,
    clear: true,
    

    ajax: base_url + "/admin/branch/data-table",
    columns: [
        { 
            data: 'DT_RowIndex',
            name: 'DT_RowIndex'
        },

        {
         data: 'branch_name_en',
         name: 'branch_name_en'
        }, 

        {
            data: 'branch_name_mr',
            name: 'branch_name_mr'
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
        }
    ]
    });

    function reload_table() {
        table.DataTable().ajax.reload(null, false);
    }
})
