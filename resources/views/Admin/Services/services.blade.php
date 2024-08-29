@section('meta_title') Services | Yeshwant Bank @endsection
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
</style>
@endsection
@section('content')



<div class="content-page">
    <div class="content">
        <div class="container-fluid">

            <div class="row">
                <div class="mb-2 justify-content-between d-flex align-items-center">
                    <h4 class="mt-0 header-title">Add Services</h4>
                </div>
                <div class="col-4">
                    <div class="card department-card">
                        <div class="card-body">
                            {{-- <form action="{{ route('your.route.name') }}" method="post" id="add-annual-report-form" enctype="multipart/form-data"> --}}
                            <form action="{{route('services-store')}}" method="post" id="add-annual-report-form" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" class="form-control" id="id" name="id" value="{{ !empty($service) ? $service->id : '' }}">

                                {{-- <div class="mb-3">
                                    <label for="service_page_name" class="form-label">Select Service Page<span class="red">*</span></label>
                                    <select class="form-control" id="service_page_name" name="service_page_name">
                                        <option value="" disabled selected>Select a service</optnion>
                                        <option value="core_banking" {{ (!empty($service) && $service->service_page_name == 'core_banking') ? 'selected' : '' }}>Core Banking</option>
                                        <option value="sms_alert" {{ (!empty($service) && $service->service_page_name == 'sms_alert') ? 'selected' : '' }}>SMS Alert</option>
                                        <option value="rgts_neft" {{ (!empty($service) && $service->service_page_name == 'rgts_neft') ? 'selected' : '' }}>RTGS/NEFT</option>
                                        <option value="locker_facility" {{ (!empty($service) && $service->service_page_name == 'locker_facility') ? 'selected' : '' }}>Locker Facility</option>
                                        <option value="gold_loan" {{ (!empty($service) && $service->service_page_name == 'gold_loan') ? 'selected' : '' }}>Gold Loan</option>
                                        <option value="electricity_bill" {{ (!empty($service) && $service->service_page_name == 'electricity_bill') ? 'selected' : '' }}>Electricity Bill</option>
                                        <option value="pigmy_deposit_scheme" {{ (!empty($service) && $service->service_page_name == 'pigmy_deposit_scheme') ? 'selected' : '' }}>Pigmy Deposit Scheme</option>
                                    </select>
                                    @if($errors->has('service_page_name'))
                                    <span class="text-danger"><b>* {{$errors->first('service_page_name')}}</b></span>
                                    @endif
                                </div> --}}
                                            
                    
                                <div class="mb-3">
                                    <label for="service_name_en" class="form-label">Service Name (English)<span class="red">*</span></label>
                                    <input type="text" class="form-control" id="service_name_en" name="service_name_en" placeholder="Enter service name in English" value="{{ !empty($service) ? $service->service_name_en : '' }}">
                                    @if($errors->has('service_name_en'))
                                    <span class="text-danger"><b>* {{ $errors->first('service_name_en') }}</b></span>
                                    @endif
                                </div>
            
                                <div class="mb-3">
                                    <label for="service_name_mr" class="form-label">Service Name (Marathi)<span class="red">*</span></label>
                                    <input type="text" class="form-control" id="service_name_mr" name="service_name_mr" placeholder="Enter service name in Marathi" value="{{ !empty($service) ? $service->service_name_mr : '' }}">
                                    @if($errors->has('service_name_mr'))
                                    <span class="text-danger"><b>* {{ $errors->first('service_name_mr') }}</b></span>
                                    @endif
                                </div>



                                <div class="mb-3 sec_1_description">
                                    <label for="service_description_en" class="form-label">Description (English) <span class="red"><b>*</b></span></label>
                                    <textarea name="service_description_en" class="summernote" cols="30" rows="10">
                                        {{ !empty($service->service_description_en) ? $service->service_description_en : old('service_description_en') }}
                                    </textarea>
                                    @if ($errors->has('service_description_en'))
                                        <span class="text-danger error-message"><b>*</b>{{ $errors->first('service_description_en') }}</span>
                                    @endif
                                </div>


                                
                                <div class="mb-3 sec_1_description">
                                    <label for="service_description_mr" class="form-label">Description (Marathi) <span class="red"><b>*</b></span></label>
                                    <textarea name="service_description_mr" class="summernote" cols="30" rows="10">
                                        {{ !empty($service->service_description_mr) ? $service->service_description_mr : old('service_description_mr') }}
                                    </textarea>
                                    @if ($errors->has('service_description_mr'))
                                        <span class="text-danger error-message"><b>*</b>{{ $errors->first('service_description_mr') }}</span>
                                    @endif
                                </div>


                                <!-- Banner Image -->
                                <div class="mb-3">
                                        <div class="upload_img">
                                            <div class="upload_photo">
                                                <label>Image<span class="red">*</span></label>
                                                <div id="respon" style="color:red"></div>
                                            </div>
                                            <div class="photo img-upload profile upload-file">
                                                <input type="file" name="service_image" id="service_image"  class="dropify" data-plugins="dropify" data-default-file="{{!empty($service->service_image_path) ? url('/').Storage::url($service->service_image_path) : ''}}" />
                                            </div>
                                        </div>
                                        @if ($errors->has('service_image'))
                                        <span class="text-danger error-message"><b>*</b>{{ $errors->first('service_image') }}</span>
                                    @endif
                                </div>
            
                                <button class="btn btn-success" type="submit"> {{ !empty($service) ? 'Update' : 'Submit' }} </button>
                                @if (empty($service))
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
                                        <th width="10%">Sr. No.</th>
                                        <th width="20%">Service Name (English)</th>
                                        <th width="20%">Service Name (Marathi)</th>
                                        <th width="20%">Description (English)</th>
                                        <th width="20%">Description (Marathi)</th>
                                        <th width="20%">Service Image</th>
                                        <th width="10%">Status</th>
                                        <th width="15%">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Example row -->
                                    {{-- <tr>
                                        <td>1</td>
                                        <td>Core Banking</td>
                                        <td>कोअर बँकिंग</td>
                                        <td>
                                            The bank has adopted an updated core banking system from January 14, 2014. Through this, the facility for conducting transactions in the bank has been initiated. 
                                        </td>
                                        <td>
                                            बँकेने १४ जानेवारी २०१४ पासून आद्ययावत कोअर बँकिंग प्रणाली आत्मसात केली आहे. त्याद्वारे बँकेत व्यवहार करण्याची सुविधा सुरु करण्यात आली.
                                        </td>
                                        <td>
                                            <a href="javascript:void(0);" class="change-status">
                                                <i class="fa fa-toggle-on tgle-on status_button" aria-hidden="true" title="Active"></i>
                                            </a>
                                        </td>
                                        <td>
                                            <a href="javascript:void(0);">
                                                <button type="button" class="btn btn-warning btn-xs" title="Edit">
                                                    <i class="mdi mdi-pencil"></i>
                                                </button>
                                            </a>
                                            <a href="javascript:void(0);" class="btn btn-danger btn-xs" title="Delete">
                                                <i class="mdi mdi-trash-can"></i>
                                            </a>
                                        </td>
                                    </tr> --}}
                                    <!-- Additional rows as needed -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Banner Images --}}

        </div> 
    </div> 
</div> 

@endsection

@section('script')

<script src="{{ URL::asset('admin_panel\controller_js\cn_service.js')}}"></script>




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