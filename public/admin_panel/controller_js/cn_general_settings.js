

$(function () {
    var table = $('#cims_data_table').DataTable({
    processing: false,
    serverSide: true,
    paging: true,
    searching: true,
    destroy: true,
    clear: true,
    

    ajax: base_url + "/admin/top-slider/data-table",
    columns: [
        { 
            data: 'DT_RowIndex',
            name: 'DT_RowIndex'
        },

        {
         data: 'slider_text_en',
         name: 'slider_text_en'
        }, 

        {
            data: 'slider_text_mr',
            name: 'slider_text_mr'
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



