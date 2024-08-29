$(document).ready(function(){
    $(document).on('change','.role_configuration',function(){    
        var id = $(this).val();
        Metronic.startPageLoading({animate: true});
        $.ajax({
            type:'POST',
            url:completeURL('fetch_role_config'),
            data:{id:id},
            dataType:'json', 
            success:function(data) 
            {             
                $('.prevelege_data').html(data.view);
            },
            complete:function()
            {
                Metronic.stopPageLoading();
                Metronic.init(); // init metronic core components
                Layout.init(); // init current layout
            }
        }); 
    });

    $(document).on('change','.category_select_all',function(){
       if($(this).is(":checked"))
       {
            $(this).parents('.panel-collapse').find('.portlet-body input[type=checkbox]').each(function( index ) {
                $(this).prop('checked', true); 
            });
       }else
       {
            $(this).parents('.panel-collapse').find('.portlet-body').find('input[type=checkbox]').prop('checked', false);
       }
       $.uniform.update();
    });

    $(document).on('click', '.common_save', function(e) {
        var form = '#' + $(this).parents('form').attr('id');
        var error = $('.alert-danger', form);
        var success = $('.alert-success', form);
        var id = $(this).attr('rel');
        var pk = $(this).data('pk');
        $(form).validate({
            errorElement: 'span', //default input error message container
            errorClass: 'help-block', // default input error message class
            focusInvalid: false, // do not focus the last invalid input
            ignore: ":hidden", // validate all fields including form hidden input
            rules: {
                fullname:{required:true},
                email:{required:true,email:true,minlength:2,maxlength:45},
                //first_name:{required:true},
                first_name:{required:true,first_name:true,minlength:1,maxlength:20},
                middle_name:{required:true,middle_name:true,minlength:1,maxlength:20},
                last_name:{required:true,last_name:true,minlength:1,maxlength:20},
                address_1:{required:true},
                address_2:{required:true},
                city:{required:true},
                taluka:{required:true},
                state:{required:true},
                pincode:{required:true,pincode:true,minlength:6,maxlength:6}
                //contact_no:{required:true,contact_no:true,minlength:1,maxlength:9},
            },

            invalidHandler: function(event, validator) { //display error alert on form submit              
                success.hide();
                error.show();
                $('html,body').animate({ scrollTop: 0 });
            },

            errorPlacement: function(error, element) { // render error placement for each input type
                var icon = $(element).parent('.input-icon').children('i');
                icon.removeClass('fa-check').addClass("fa-warning");
                icon.attr("data-original-title", error.text()).tooltip({ 'container': 'body' });
            },

            highlight: function(element) { // hightlight error inputs
                //alert($(element).attr('name'));
                $(element).closest('.form-group').removeClass("has-success").addClass('has-error'); // set error class to the control group   
            },

            unhighlight: function(element) { // revert the change done by hightlight

            },

            success: function(label, element) {
                var icon = $(element).parent('.input-icon').children('i');
                $(element).closest('.form-group').removeClass('has-error').addClass('has-success'); // set success class to the control group
                icon.removeClass("fa-warning").addClass("fa-check");
            },

            submitHandler: function(form) {
                $('.common_save').prop('disabled', true);
                var url = $(form).attr('action');
                var apikey = $(form).data('apikey');
                //var completeulr = url1 + '/' + url2;
                var redirect = $(form).data('redirect');
                var serialize_data = $(form).serialize();
                serialize_data = {id:id};
                $(form).ajaxSubmit({
                    type: 'POST',
                    headers: {
                        "x-api-key": apikey
                    },
                    url: completeURL(url),
                    dataType: 'json',
                    data: serialize_data,
                    success: function(data) {
                        if (data.state == true) {
                            $.toast({ text: data.msg, heading: '<b>Success</b>', icon: 'success' });
                            setTimeout(function() {
                                if(redirect)
                                {
                                    window.location.href = window.completeURL(redirect);
                                }
                                else
                                {
                                    window.location.href = window.location.href;
                                }
                            }, 2000);
                        } else {
                            $.toast({ text: data.msg, heading: '<b>Warning</b>', icon: 'error' });
                            $('.common_save').prop('disabled', false);
                            $('.ere').html(data.details);
                        }
                    }
                });
            }
        });
    });

    // $(document).on('click', '.common_save', function(e) {
    //     var form = '#' + $(this).parents('form').attr('id');
    //     var error = $('.alert-danger', form);
    //     var success = $('.alert-success', form);
    //     var id = $(this).attr('rel');
    //     var pk = $(this).data('pk');
    //     alert(pk);
    //     $(form).validate({
    //         errorElement: 'span', //default input error message container
    //         errorClass: 'help-block', // default input error message class
    //         focusInvalid: false, // do not focus the last invalid input
    //         ignore: ":hidden", // validate all fields including form hidden input
    //         rules: {
    //             // contact_name:{required: true },
    //             // mail: {required: true, email:true },
    //             // number: {number:true, minlength:10, maxlength:12, required:true},
    //             // contact_type:{required:true},
    //             // msg: {required: true },
    //             confirm_password:   
    //             {                                            
    //                 required: true,
    //                 equalTo: "#user_pass"                                                               
    //             },
    //             company_name:{required:true},
    //             symbol:{required:true},
    //             company_id:{required:true},
    //             type:{required:true},
    //             share_type_id:{required:true},
    //             target:{required:true}

    //         },

    //         invalidHandler: function(event, validator) { //display error alert on form submit              
    //             success.hide();
    //             error.show();
    //             $('html,body').animate({ scrollTop: 0 });
    //         },

    //         errorPlacement: function(error, element) { // render error placement for each input type
    //             var icon = $(element).parent('.input-icon').children('i');
    //             icon.removeClass('fa-check').addClass("fa-warning");
    //             icon.attr("data-original-title", error.text()).tooltip({ 'container': 'body' });
    //         },

    //         highlight: function(element) { // hightlight error inputs
    //             //alert($(element).attr('name'));
    //             $(element).closest('.form-group').removeClass("has-success").addClass('has-error'); // set error class to the control group   
    //         },

    //         unhighlight: function(element) { // revert the change done by hightlight

    //         },

    //         success: function(label, element) {
    //             var icon = $(element).parent('.input-icon').children('i');
    //             $(element).closest('.form-group').removeClass('has-error').addClass('has-success'); // set success class to the control group
    //             icon.removeClass("fa-warning").addClass("fa-check");
    //         },

    //         submitHandler: function(form) {
    //             console.log("Testing!");
    //             $('.common_save').prop('disabled', true);
    //             var url = $(form).attr('action');
    //             var apikey = $(form).data('apikey');
    //             //var completeulr = url1 + '/' + url2;
    //             var redirect = $(form).data('redirect');
    //             var serialize_data = $(form).serialize();
    //             serialize_data = {id:id};
    //             $(form).ajaxSubmit({
    //                 type: 'POST',
    //                 headers: {
    //                     "x-api-key": apikey
    //                 },
    //                 url: completeURL(url),
    //                 dataType: 'json',
    //                 data: serialize_data,
    //                 success: function(data) {
    //                     if (data.state == true) {
    //                         $.toast({ text: data.msg, heading: '<b>Success</b>', icon: 'success' });
    //                         setTimeout(function() {
    //                             if(redirect)
    //                             {
    //                                 window.location.href = window.completeURL(redirect);
    //                             }
    //                             else
    //                             {
    //                                 window.location.href = window.location.href;
    //                             }
    //                         }, 2000);
    //                     } else {
    //                         $.toast({ text: data.msg, heading: '<b>Warning</b>', icon: 'error' });
    //                         $('.common_save').prop('disabled', false);
    //                     }
    //                 }
    //             });
    //         }
    //     });
    // });
    $(document).on('click', '.update_record', function() 
    { 
        
        var deleteDiv = $(this);
        bootbox.confirm("Are you sure?", function(result) 
        {
            if (result) {
                var id = deleteDiv.attr('rel');
                var pk = $(".tbl_action").data('col');
                var url = deleteDiv.attr('rev');
                $.ajax({
                    url: completeURL(url),                    
                    type: 'POST',
                    dataType: 'json',
                    data: pk + '=' + id,
                    headers: {
                        "x-api-key": "5681648d-91d6-4371-a911-1497734d0016"
                    },
                    success: function(data) {
                        if (data.state == true) {
                            $.toast({ text: data.msg, heading: '<b>Success</b>', icon: 'success' });
                            setTimeout(function() {
                                window.location.href = window.location.href;
                            }, 2000);
                        } else {
                            $.toast({ text: data.msg, heading: '<b>Warning</b>', icon: 'error' });
                        }
                    }
                });
            }
        });
    });

    $(document).on('click','.chk_login',function(e){
        e.preventDefault();
        var this1 = $(this);
        $('.alert-success').show(); 
        var form = '#'+$(this).closest('form').attr('id');
        $('.chk_login').prop('disabled',true);
        var url = $(form).attr('action');
        var serialize_data = $(form).serialize();
        $.ajax({
            type:'POST',
            url:completeURL(url), 
            dataType:'json',
            data:serialize_data,
            success:function(data)
            {   
                if (data.valid)
                {
                    if(data.redirect)
                    {
                        document.location.href = data.redirect;
                    }
                    else
                    {
                        document.location.href = document.location.href;
                    }
                }
                else
                {
                    this1.closest('form').find('.alert-success').hide();
                    this1.closest('form').find('.alert-danger').html(data.msg).show();  
                    this1.closest('form').find('.alert-danger').fadeOut(3500);   
                    this1.closest('form').find('.password').val('');              
                }                                      
                $('.chk_login').prop('disabled',false);
            }
        });
    });

    $(document).on('click','.popup_save',function(){            
        var id = $(this).attr('rel');
        var url = $(this).attr('rev');
        var title= $(this).data('title');
        title='<span class="caption-subject font-red-haze bold uppercase">'+title+'</span>';
        var data={id:id};

        $.ajax({
            url:completeURL(url), 
            data:data,          
            type:'POST',  
            dataType:'json',
            success: function(data)
            {   
                var dialog = bootbox.dialog({
                    message: data.view,
                    title: title, 
                    buttons: { 
                        danger: {
                            label: "Cancel",
                            className: "btn-danger",
                            callback: function() { }
                        }, 
                        success: {
                            label: "Submit",
                            className: "btn-success",
                            callback: function() {
                                var form= '#popup_save';
                                var url = $(form).attr('action');
                                var serialize_data = $(form).serialize();
                                serialize_data = {serialize_data:serialize_data,id:id};
                                var form2 = $(form);
                                var error2 = $('.alert-danger', form2);
                                var success2 = $('.alert-success', form2);
                                var validate = $(form).validate({
                                    errorElement: 'span', 
                                    errorClass: 'help-block', 
                                    focusInvalid: false, 
                                    ignore: ":hidden",  
                                    debug: true,
                                    rules: {
                                        category_name: {required: true },
                                        category_desc: {required: true },
                                        category_about: {required: true },
                                        reply: {required: true },
                                        price:{required:true},
                                        category_id: {required: true },
                                        sc_name: {required: true },
                                        sc_desc: {required: true },
                                        city_name: {required: true },
                                        city_desc: {required: true },
                                        testimonial_name: {required: true },
                                        testimonial_desc: {required: true },
                                        sup_cat_name: {required: true },
                                        sup_cat_desc: {required: true },
                                        category_id:{required: true},
                                        question:{required: true},
                                        client_name:{required:true},
                                        answer:{required:true},
                                        email:{required:true},
                                        greet_file:{required:true},
                                        subject:{required:true},
                                        name:{required:true},
                                        mobile:{required:true},
                                        address:{required:true},
                                        city:{required:true},
                                        pincode:{required:true},
                                        home:{required:true}
                                    },

                                    invalidHandler: function (event, validator) { 
                                        success2.hide();
                                        error2.show();
                                       $('html, body').animate({scrollTop:0});
                                    },

                                    errorPlacement: function (error, element) { 
                                        var icon = $(element).parent('.input-icon').children('i');
                                        icon.removeClass('fa-check').addClass("fa-warning");  
                                        icon.attr("data-original-title", error.text()).tooltip({'container': 'body'});
                                    }, 

                                    highlight: function (element) { 
                                        $(element).closest('.form-group').removeClass("has-success").addClass('has-error'); 
                                    },

                                    unhighlight: function (element) {
                                        $(element).closest('.form-group').removeClass('has-error'); 
                                    },

                                    success: function (label, element) {
                                        var icon = $(element).parent('.input-icon').children('i');
                                        $(element).closest('.form-group').removeClass('has-error').addClass('has-success'); 
                                    },

                                    submitHandler: function (form) {
                                        
                                    }
                                }).form();
                                var $valid = $(form).valid();
                                if(!$valid) 
                                {                                                               
                                    return false;
                                }
                                else
                                { 
                                    $(form).ajaxSubmit({
                                        type:'POST',
                                        url:completeURL(url), 
                                        dataType:'json',
                                        data: serialize_data,
                                        success:function(data)
                                        {  
                                            if(data.redirect)
                                            {
                                                bootbox.alert(data.msg, function() {
                                                    setTimeout(function(){
                                                        document.location.href=data.redirect;                                
                                                    },1500);
                                                });
                                            }
                                            else
                                            {
                                                bootbox.alert(data.msg, function() {
                                                    setTimeout(function(){
                                                        document.location.href=document.location.href;                                
                                                    },1500);
                                                });  
                                            }                                      
                                        }
                                    });
                                }                                         
                            }
                        }
                    }
                });
            },
            complete:function()
            {   
                Metronic.init();
                ComponentsPickers.init();
                if (jQuery().datepicker) {
                    $(".date-picker").datepicker( {
                        format: "d-m-yyyy",
                        viewMode: "months", 
                        minViewMode: "months",
                        autoclose: true
                    });
                    $(".date-picker1").datepicker( {
                        format: "yyyy",
                        viewMode: "years", 
                        minViewMode: "years",
                        autoclose: true
                    });
                }
            }
        }); 
    });

    $(document).on('click','.editRecord', function(){
        var id = $(this).attr('rel');
        var url = $(this).attr('rev');

        $.ajax({
            url : completeURL(url),
            type : 'POST',
            dataType : 'html',
            data:{id:id},
            success:function(data)
            {          
                $('html, body').animate({scrollTop:0});
                $('.form').html($(data).find('.form').html());
            }
        }); 
    });

    $(document).on('click','.deleteRecord' , function(){
        var deleteDiv = $(this);
        bootbox.confirm("Are you sure?", function(result) {
            if(result)
            {
                var id = deleteDiv.attr('rel');
                var url = deleteDiv.attr('rev');
                
                $.ajax({
                    url : completeURL(url),
                    type:'POST',
                    dataType:'json',
                    data:{id:id},
                    success:function(data)
                    {
                        bootbox.alert(data.msg, function() {
                            setTimeout(function(){
                                document.location.href=document.location.href;                                
                            },1500);
                        });
                    }
                });
            }
        }); 
    });

    $(document).on('click','.delete_record' , function(){
        // alert('hi');
        var deleteDiv = $(this);
        // alert(deleteDiv);
        bootbox.confirm("Are you sure?", function(result) 
        {
            if (result) {
                var url = deleteDiv.attr('rev');
                $.ajax({
                    url: completeURL(url),                    
                    type: 'DELETE',
                    dataType: 'json',
                    headers: {
                        "x-api-key": "5681648d-91d6-4371-a911-1497734d0016"
                    },
                    success: function(data) {
                        if (data.state == true) {
                            $.toast({ text: data.msg, heading: '<b>Success</b>', icon: 'success' });
                            setTimeout(function() {
                                window.location.href = window.location.href;
                            }, 2000);
                        } else {
                            $.toast({ text: data.msg, heading: '<b>Warning</b>', icon: 'error' });
                        }
                    }
                });
            }
        });
    });


    $(document).on('change', '.upload_image', function(){
        var url = $('.upload_image').data('url');
        var property = document.getElementById("file").files[0];
        var image_name = property.name;
        var image_extension = image_name.split('.').pop().toLowerCase();
        var image_size = property.size;
        var invalidformat = false;
        var maxFileSize = false;
        if(jQuery.inArray(image_extension, ['png','jpg','jpge']) == -1)
        {          
            $('.img_error').html('<lable class="text-danger">Invalid File format!</lable>');
            invalidformat = true;
        }
        if(image_size > 2000000)
        {
            $('.img_error').html('<lable class="text-danger">File size is only upto 2MB!</lable>');
            maxFileSize = true;
        }
        if(invalidformat == false && maxFileSize == false)
        {
            var form_data = new FormData();
            form_data.append("file", property);
            $.ajax({
                url:url,
                method:"POST",
                data:form_data,
                contentType:false,
                cache:false,
                processData:false,
                /*beforeSend:function(){
                    $('.process').html('<br><lable class="text-success">Image Uploading...</lable>');
                },*/
                success:function(data)
                {
                    $('.uploaded_image').html(data);
                    setTimeout(replce_image, 50);
                    $('.upload_button').html('Change');
                }
            });
        }
        
    });
   function replce_image(){

    var img_scr = $('.uploaded_image img').attr('src');
    var image_name = img_scr.substring(img_scr.lastIndexOf("/") + 1, img_scr.length);
    $('.file_name').val(image_name);
}; 
   
});  

function completeURL(url)
{
    return $('base').attr('href')+url;
}