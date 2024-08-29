$(function () {
    var table = $('#cims_data_table').DataTable({
    processing: false,
    serverSide: true,
    paging: true,
    searching: true,
    destroy: true,
    clear: true,
    

    ajax: base_url + "/admin/board-of-directors/data-table",
    columns: [
        { 
            data: 'DT_RowIndex',
            name: 'DT_RowIndex'
        },

        {
         data: 'designation_en',
         name: 'designation_en'
        }, 

        {
            data: 'designation_mr',
            name: 'designation_mr'
        },


        
        {
            data: 'name_en',
            name: 'name_en'
        },

        {
            data: 'name_mr',
            name: 'name_mr'
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
