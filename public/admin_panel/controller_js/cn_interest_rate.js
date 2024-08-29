$(function () {
    var table = $('#cims_data_table').DataTable({
    processing: false,
    serverSide: true,
    paging: true,
    searching: true,
    destroy: true,
    clear: true,
    

    ajax: base_url + "/admin/store-deposit-interest-rates-table1/data-table",
    columns: [
        { 
            data: 'DT_RowIndex',
            name: 'DT_RowIndex'
        },

        {
         data: 'period_en',
         name: 'period_en'
        }, 

        {
            data: 'period_mr',
            name: 'period_mr'
        },


        {
            data: 'general_interest_rate_en',
            name: 'general_interest_rate_en'
        },


        {
            data: 'general_interest_rate_mr',
            name: 'general_interest_rate_mr'
        },


        
        {
            data: 'senior_citizens_interest_rate_en',
            name: 'senior_citizens_interest_rate_en'
        },


        {
            data: 'senior_citizens_interest_rate_mr',
            name: 'senior_citizens_interest_rate_mr'
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
    

    ajax: base_url + "/admin/store-deposit-interest-rates-table2/data-table",
    columns: [
        { 
            data: 'DT_RowIndex',
            name: 'DT_RowIndex'
        },

        {
         data: 'loan_type_en',
         name: 'loan_type_en'
        }, 

        {
            data: 'loan_type_mr',
            name: 'loan_type_mr'
        },


        {
            data: 'interest_rate_en',
            name: 'interest_rate_en'
        },

        {
            data: 'interest_rate_mr',
            name: 'interest_rate_mr'
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