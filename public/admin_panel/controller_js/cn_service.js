$(function () {
    var table = $('#cims_data_table').DataTable({
    processing: false,
    serverSide: true,
    paging: true,
    searching: true,
    destroy: true,
    clear: true,
    

    ajax: base_url + "/admin/service/data-table",
    columns: [
        { 
            data: 'DT_RowIndex',
            name: 'DT_RowIndex'
        },

        {
         data: 'service_name_en',
         name: 'service_name_en'
        }, 

        {
            data: 'service_name_mr',
            name: 'service_name_mr'
        }, 

        {
            data: 'service_description_en',
            name: 'service_description_en'
        },


        
        {
            data: 'service_description_mr',
            name: 'service_description_mr'
        },

        {
            data: 'service_image_path',
            name: 'service_image_path'
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