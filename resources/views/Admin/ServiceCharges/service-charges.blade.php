@section('meta_title') Service Charges | Yeshwant Bank @endsection
@extends('Admin.Layouts.layout')
@section('css')
<!-- Include Summernote CSS and JS -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<style>
    .card {
        display: block;
        min-width: 0;
        word-wrap: break-word;
        background-color: var(--ct-card-bg);
        background-clip: border-box;
        border: 0 solid var(--ct-card-border-color);
        border-radius: 0.25rem;
        height: auto!important;

    }

    .morris-donut-example svg text tspan {
        font-size: 10px !important;
    }

    .content {
        padding-top: 25px;
    }

    .random {
        display: none;
    }
    .content-page {
    padding: 0 12px 40px 12px;
}

.department-card {
    overflow-x: auto; 
}

.wrap-text {
    white-space: normal;
    word-wrap: break-word;
}


</style>
@endsection
@section('content')



<div class="content-page">
    <div class="content">
        <div class="container-fluid">

        
            <div class="row">
                <div class="mb-2 justify-content-between d-flex align-items-center">
                    <h4 class="mt-0 header-title">Manage Service Charges</h4>
                </div>
            
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <!-- Form for Interest Content -->


                            <!-- Form for Banner -->
                            <div class="mt-4">
                                <h5 class="mb-3">Service Charges Table</h5>
                                <div class="row">
                                    <div class="col-4">
                                        <div class="card">
                                            <div class="card-body">
                                                <form action="{{route('service-charges-store')}}" method="post" id="add-banner-form" enctype="multipart/form-data">
                                                    @csrf
                                                    <input type="hidden" class="form-control" id="id" name="id" value="{{ !empty($table1) ? $table1->id : '' }}">


                                                                <!-- Banner Heading in English -->
                                                                <div class="mb-3">
                                                                    <label for="sr_no_en" class="form-label">Sr. No (English) <span class="red">*</span></label>
                                                                    <input type="text" class="form-control" id="sr_no_en" name="sr_no_en" value="{{ !empty($table1) ? $table1->sr_no_en : '' }}">
                                                                    @if($errors->has('sr_no_en'))
                                                                    <span class="text-danger"><b>* {{$errors->first('sr_no_en')}}</b></span>
                                                                    @endif
                                                                </div>
                        
                                                                <!-- Banner Heading in Marathi -->
                                                                <div class="mb-3">
                                                                    <label for="sr_no_mr" class="form-label">Sr. No (Marathi) <span class="red">*</span></label>
                                                                    <input type="text" class="form-control" id="sr_no_mr" name="sr_no_mr" value="{{ !empty($table1) ? $table1->sr_no_mr : '' }}">
                                                                    @if($errors->has('sr_no_mr'))
                                                                    <span class="text-danger"><b>* {{$errors->first('sr_no_mr')}}</b></span>
                                                                    @endif
                                                                </div>
            
                                                                <!-- Banner Heading in English -->
                                                                <div class="mb-3">
                                                                    <label for="particular_en" class="form-label">Particular(English) <span class="red">*</span></label>
                                                                    <input type="text" class="form-control" id="particular_en" name="particular_en" value="{{ !empty($table1) ? $table1->particular_en : '' }}">
                                                                    @if($errors->has('particular_en'))
                                                                    <span class="text-danger"><b>* {{$errors->first('particular_en')}}</b></span>
                                                                    @endif
                                                                </div>
                        
                                                                <!-- Banner Heading in Marathi -->
                                                                <div class="mb-3">
                                                                    <label for="particular_mr" class="form-label">Particular (Marathi) <span class="red">*</span></label>
                                                                    <input type="text" class="form-control" id="particular_mr" name="particular_mr" value="{{ !empty($table1) ? $table1->particular_mr : '' }}">
                                                                    @if($errors->has('particular_mr'))
                                                                    <span class="text-danger"><b>* {{$errors->first('particular_mr')}}</b></span>
                                                                    @endif
                                                                </div>
            
                                                            <!-- General Interest Rate in English -->
                                                            <div class="mb-3">
                                                                <label for="commission_with_gst_en" class="form-label">Commission with GST (English) <span class="red">*</span></label>
                                                                <input type="text" class="form-control" id="commission_with_gst_en" name="commission_with_gst_en" value="{{ !empty($table1) ? $table1->commission_with_gst_en : '' }}">
                                                                @if($errors->has('commission_with_gst_en'))
                                                                <span class="text-danger"><b>* {{$errors->first('commission_with_gst_en')}}</b></span>
                                                                @endif
                                                            </div>
                    
                                                            <!-- General Interest Rate in Marathi -->
                                                            <div class="mb-3">
                                                                <label for="commission_with_gst_mr" class="form-label">Commission with GST (Marathi) <span class="red">*</span></label>
                                                                <input type="text" class="form-control" id="commission_with_gst_mr" name="commission_with_gst_mr" value="{{ !empty($table1) ? $table1->commission_with_gst_mr : '' }}">
                                                                @if($errors->has('commission_with_gst_mr'))
                                                                <span class="text-danger"><b>* {{$errors->first('commission_with_gst_mr')}}</b></span>
                                                                @endif
                                                            </div>
            
                                                    <button class="btn btn-success" name="first" type="submit"> {{ !empty($table1) ? 'Update' : 'Submit' }} </button>
                                                    @if (empty($table1))
                                                        <button type="reset" class="btn btn-danger reset-button">Cancel</button>
                                                    @endif
                                                </form>
                                            </div>
                                        </div>
                                    </div>
            
                                    <div class="col-8">
                                        <div class="card">
                                            <div class="card-body table-responsive department-card">
                                                <table id="cims_data_table" class="table table-bordered dt-responsive w-100">
                                                    <thead class="table-light">
                                                        <tr role="row">
                                                            <th width="5%">Sr. No.</th>
                                                            <th width="5%">Sr. No.(English)</th>
                                                            <th width="5%">Sr. No.(Marathi)</th>
                                                            <th width="15%">Particular(English)</th>
                                                            <th width="15%">Particular (Marathi)</th>
                                                            <th width="15%">Commission with GST(English)</th>
                                                            <th width="15%">Commission with GST (Marathi)</th>
                                                            <th width="10%">Status</th>
                                                            <th width="20%">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                      
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        

            <div class="row">
                <div class="mb-2 justify-content-between d-flex align-items-center">
                    <h4 class="mt-0 header-title">Tariff Sheet for Welcome Kit Table</h4>
                </div>
            
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <div class="row mt-4">
                                <div class="col-md-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <form action="{{route('service-charges-tariff-store')}}" method="post" id="add-banner-form" enctype="multipart/form-data">
                                                @csrf
                                                <input type="hidden" class="form-control" id="id" name="id" value="{{ !empty($table2) ? $table2->id : '' }}">
                                                 
                                                  <!-- Banner Heading in English -->
                                                  <div class="mb-3">
                                                    <label for="sr_no_en" class="form-label">Sr. No (English) <span class="red">*</span></label>
                                                    <input type="text" class="form-control" id="sr_no_en" name="sr_no_en" value="{{ !empty($table2) ? $table2->sr_no_en : '' }}">
                                                    @if($errors->has('sr_no_en'))
                                                    <span class="text-danger"><b>* {{$errors->first('sr_no_en')}}</b></span>
                                                    @endif
                                                </div>
        
                                                <!-- Banner Heading in Marathi -->
                                                <div class="mb-3">
                                                    <label for="sr_no_mr" class="form-label">Sr. No (Marathi) <span class="red">*</span></label>
                                                    <input type="text" class="form-control" id="sr_no_mr" name="sr_no_mr" value="{{ !empty($table2) ? $table2->sr_no_mr : '' }}">
                                                    @if($errors->has('sr_no_mr'))
                                                    <span class="text-danger"><b>* {{$errors->first('sr_no_mr')}}</b></span>
                                                    @endif
                                                </div>

                                              

                                                <!-- Banner Heading in English -->
                                                <div class="mb-3">
                                                    <label for="charges_en" class="form-label">Fees/Charges (English)<span class="red">*</span></label>
                                                    <input type="text" class="form-control" id="charges_en" name="charges_en" value="{{ !empty($table2) ? $table2->charges_en : '' }}">
                                                    @if($errors->has('charges_en'))
                                                        <span class="text-danger"><b>* {{$errors->first('charges_en')}}</b></span>
                                                    @endif
                                                </div>
                            
                                                <!-- Banner Heading in Marathi -->
                                                <div class="mb-3">
                                                    <label for="charges_mr" class="form-label">Fees/Charges (Marathi)<span class="red">*</span></label>
                                                    <input type="text" class="form-control" id="charges_mr" name="charges_mr" value="{{ !empty($table2) ? $table2->charges_mr : '' }}">
                                                    @if($errors->has('charges_mr'))
                                                        <span class="text-danger"><b>* {{$errors->first('charges_mr')}}</b></span>
                                                    @endif
                                                </div>
            
                                                <!-- Interest Rate in English -->
                                                <div class="mb-3">
                                                    <label for="amount_en" class="form-label">Amount (English)<span class="red">*</span></label>
                                                    <input type="text" class="form-control" id="amount_en" name="amount_en" value="{{ !empty($table2) ? $table2->amount_en : '' }}">
                                                    @if($errors->has('amount_en'))
                                                        <span class="text-danger"><b>* {{$errors->first('amount_en')}}</b></span>
                                                    @endif
                                                </div>
            
                                                <!-- Interest Rate in Marathi -->
                                                <div class="mb-3">
                                                    <label for="amount_mr" class="form-label">Amount (Marathi)<span class="red">*</span></label>
                                                    <input type="text" class="form-control" id="amount_mr" name="amount_mr" value="{{ !empty($table2) ? $table2->amount_mr : '' }}">
                                                    @if($errors->has('amount_mr'))
                                                        <span class="text-danger"><b>* {{$errors->first('amount_mr')}}</b></span>
                                                    @endif
                                                </div>

                                                 
                                                <div class="mb-3 sec_1_description">
                                                    <label for="remarks_en" class="form-label">Remarks(English)  <span class="red"><b>*</b></span></label>
                                                    <textarea name="remarks_en" class="summernote" cols="30" rows="10">{{ old('remarks_en', !empty($table2) ? $table2->remarks_en : '') }}</textarea>
                                                    @if ($errors->has('remarks_en'))
                                                        <span class="text-danger error-message"><b>*</b>{{ $errors->first('remarks_en') }}</span>
                                                    @endif
                                                </div>


                                                                
                                            
                                            
                                                <div class="mb-3 sec_1_description">
                                                    <label for="remarks_mr" class="form-label">Remarks  (Marathi) <span class="red"><b>*</b></span></label>
                                                    <textarea name="remarks_mr" class="summernote" cols="30" rows="10">{{ old('remarks_mr', !empty($table2) ? $table2->remarks_mr : '') }}</textarea>
                                                    @if ($errors->has('remarks_mr'))
                                                        <span class="text-danger error-message"><b>*</b>{{ $errors->first('remarks_mr') }}</span>
                                                    @endif
                                                </div>


            
                                                <button class="btn btn-success" name="banner_section" type="submit"> {{ !empty($table2) ? 'Update' : 'Submit' }} </button>
                                                @if (empty($table2))
                                                    <button type="reset" class="btn btn-danger reset-button">Cancel</button>
                                                @endif
                                            </form>
                                        </div>
                                    </div>
                                </div>
            
                                <div class="col-md-8">
                                    <div class="card">
                                        <div class="card-body table-responsive department-card">
                                            <table id="cims_data_table1" class="table table-bordered dt-responsive w-100">
                                                <thead class="table-light">
                                                    <tr role="row">
                                                        <th width="5%">Sr. No.</th>
                                                        <th width="5%">Sr. No.(English)</th>
                                                        <th width="5%">Sr. No.(Marathi)</th>

                                                        <th width="15%">Fees/Charges (English)</th>
                                                        <th width="15%">Fees/Charges (Marathi)</th>

                                                        <th width="15%">Amount (English)</th>
                                                        <th width="15%">Amount (Marathi)</th>

                                                        <th width="15%">Remarks (English)</th>
                                                        <th width="15%">Remarks (Marathi)</th>

                                                        <th width="5%">Status</th>
                                                        <th width="10%">Action</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                          
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            

        </div> 
    </div> 
</div> 
@endsection

@section('script')


<script src="{{ URL::asset('admin_panel\controller_js\cn_service_charges.js')}}"></script>


{{-- <script>
    $(".reset-button").click(function(){
        $('.summernote').summernote('code', '');
         
        $(".dropify-clear").trigger("click");
        
    });
</script> --}}

{{-- <script>
    $(document).ready(function() {
        // Initialize Summernote
        $('#sec_1_description').summernote({
            height: 200,  // Set the height of the editor
            toolbar: [
                ['style', ['bold', 'italic', 'underline']],
                ['font', ['strikethrough', 'superscript', 'subscript']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['view', ['undo', 'redo', 'fullscreen']]
            ]
        });
    
        // Reset button functionality
        $(".reset-button").click(function(){
            $('.summernote').summernote('code', '');  // Clear Summernote content
            $(".dropify-clear").trigger("click");    // Trigger dropify clear (if applicable)
        });
    });
    </script> --}}

    <script>
        $(document).ready(function() {
            $('.summernote').each(function() {
                $(this).summernote({
                    height: 200, 
                    toolbar: [
                        ['style', ['bold', 'italic', 'underline']],
                        ['font', ['strikethrough', 'superscript', 'subscript']],
                        ['color', ['color']],
                        ['para', ['ul', 'ol', 'paragraph']],
                        ['view', ['undo', 'redo', 'fullscreen']]
                    ]
                });
            });
        
            // Reset button functionality
            $(".reset-button").click(function() {
                $('.summernote').each(function() {
                    $(this).summernote('code', '');  // Clear Summernote content
                });
                $(".dropify-clear").trigger("click");  // Trigger dropify clear (if applicable)
            });
        });
    </script>
        
    

@endsection