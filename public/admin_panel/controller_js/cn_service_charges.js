$(function () {
    var table = $('#cims_data_table').DataTable({
    processing: false,
    serverSide: true,
    paging: true,
    searching: true,
    destroy: true,
    clear: true,
    

    ajax: base_url + "/admin/service-charges/data-table",
    columns: [
        { 
            data: 'DT_RowIndex',
            name: 'DT_RowIndex'
        },

        {
         data: 'sr_no_en',
         name: 'sr_no_en'
        }, 

        {
            data: 'sr_no_mr',
            name: 'sr_no_mr'
        }, 


        {
            data: 'particular_en',
            name: 'particular_en'
        }, 

        {
            data: 'particular_mr',
            name: 'particular_mr'
        }, 

        {
            data: 'commission_with_gst_en',
            name: 'commission_with_gst_en'
        },

        {
            data: 'commission_with_gst_mr',
            name: 'commission_with_gst_mr'
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






$(function () {
    var table = $('#cims_data_table1').DataTable({
    processing: false,
    serverSide: true,
    paging: true,
    searching: true,
    destroy: true,
    clear: true,
    

    ajax: base_url + "/admin/service-charges-tariff/data-table",
    columns: [
        { 
            data: 'DT_RowIndex',
            name: 'DT_RowIndex'
        },

        {
         data: 'sr_no_en',
         name: 'sr_no_en'
        }, 

        {
            data: 'sr_no_mr',
            name: 'sr_no_mr'
        }, 


        {
            data: 'charges_en',
            name: 'charges_en'
        }, 

        {
            data: 'charges_mr',
            name: 'charges_mr'
        }, 



        {
            data: 'amount_en',
            name: 'amount_en'
        }, 

        {
            data: 'amount_mr',
            name: 'amount_mr'
        }, 


        {
            data: 'remarks_en',
            name: 'remarks_en'
        },

        {
            data: 'remarks_mr',
            name: 'remarks_mr'
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