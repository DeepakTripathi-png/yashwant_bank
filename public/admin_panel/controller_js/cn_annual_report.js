$(function () {
    var table = $('#cims_data_table').DataTable({
    processing: false,
    serverSide: true,
    paging: true,
    searching: true,
    destroy: true,
    clear: true,
    

    ajax: base_url + "/admin/annual-report/data-table",
    columns: [
        { 
            data: 'DT_RowIndex',
            name: 'DT_RowIndex'
        },

        {
         data: 'report_name_en',
         name: 'report_name_en'
        }, 

        {
            data: 'report_name_mr',
            name: 'report_name_mr'
        },


        
        {
            data: 'report_pdf_en_path',
            name: 'report_pdf_en_path'
        },

        {
            data: 'report_pdf_mr_path',
            name: 'report_pdf_mr_path'
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
