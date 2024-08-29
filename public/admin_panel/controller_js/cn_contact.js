$(function () {
    var table = $('#cims_data_table').DataTable({
    processing: false,
    serverSide: true,
    paging: true,
    searching: true,
    destroy: true,
    clear: true,
    

    ajax: base_url + "/admin/contact-us-queries/data-table",
    columns: [
        { 
            data: 'DT_RowIndex',
            name: 'DT_RowIndex'
        },

        {
         data: 'name',
         name: 'name'
        }, 

        {
            data: 'email',
            name: 'email'
        },


        
        {
            data: 'mobile',
            name: 'mobile'
        },

        {
            data: 'subject',
            name: 'subject'
        },

        {
            data: 'message',
            name: 'message'
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
