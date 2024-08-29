@section('meta_title') Banner Master | Yeshwant Bank @endsection
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

.wrap-text {
    white-space: normal; /* Allows text to wrap */
    word-wrap: break-word; /* Breaks long words and prevents overflow */
    overflow-wrap: break-word; /* Ensures text wrapping */
}

</style>
@endsection
@section('content')



<div class="content-page">
    <div class="content">
        <div class="container-fluid">

             {{-- Banner Images --}}
            <div class="row">
                <div class="mb-2 justify-content-between d-flex align-items-center">
                    <h4 class="mt-0 header-title">Banner Master</h4>
                </div>
            

             
                
                <div class="col-4">

                    <div class="card">
                        <div class="card-body">
                           
                            <form action="{{ route('store-banner') }}" method="post" id="add-banner-form" enctype="multipart/form-data">

                                @csrf
                                <input type="hidden" class="form-control" id="id" name="id" value="{{ old('id', !empty($banner) ? $banner->id : '') }}">
                            
                                <div class="mb-3">
                                    <label for="page_name" class="form-label">Page Name<span class="red">*</span></label>

                                    <select class="form-control" id="page_name" name="page_name">
                                        <option value="" disabled selected>Select Page</option>
                                        <option value="about_us" {{ old('page_name', !empty($banner->page_name) ? $banner->page_name : '') == 'about_us' ? 'selected' : '' }}>About Us</option>

                                        <option value="service_charges" {{ old('page_name', !empty($banner->page_name) ? $banner->page_name : '') == 'service_charges' ? 'selected' : '' }}>Service Charges</option>

                                        <option value="board_of_directors" {{ old('page_name', !empty($banner->page_name) ? $banner->page_name : '') == 'board_of_directors' ? 'selected' : '' }}>Board of Directors</option>

                                        @if(!empty($services))
                                        @foreach ($services as $service)
                                            <option value="{{ $service->service_slug_url }}" {{ old('page_name', !empty($banner->page_name) ? $banner->page_name : '') == $service->service_slug_url ? 'selected' : '' }}>
                                                {{ $service->service_name_en }}
                                            </option>
                                        @endforeach
                                        @endif

                                        {{-- <option value="core_banking" {{ old('page_name', !empty($banner->page_name) ? $banner->page_name : '') == 'core_banking' ? 'selected' : '' }}>Core Banking</option>
                                        
                                        <option value="sms_alert" {{ old('page_name', !empty($banner->page_name) ? $banner->page_name : '') == 'sms_alert' ? 'selected' : '' }}>SMS Alert</option>
                                        
                                        <option value="rtgs" {{ old('page_name', !empty($banner->page_name) ? $banner->page_name : '') == 'rtgs' ? 'selected' : '' }}>RTGS/NEFT</option>

                                        <option value="locker" {{ old('page_name', !empty($banner->page_name) ? $banner->page_name : '') == 'locker' ? 'selected' : '' }}>Locker</option>

                                        <option value="gold_loan" {{ old('page_name', !empty($banner->page_name) ? $banner->page_name : '') == 'gold_loan' ? 'selected' : '' }}>Gold Loan</option>

                                        <option value="electricity_bill" {{ old('page_name', !empty($banner->page_name) ? $banner->page_name : '') == 'electricity_bill' ? 'selected' : '' }}>Electricity Bill</option>

                                        <option value="pigmy_deposit" {{ old('page_name', !empty($banner->page_name) ? $banner->page_name : '') == 'pigmy_deposit' ? 'selected' : '' }}>Pigmy Deposit</option> --}}

                                        <option value="our_branches" {{ old('page_name', !empty($banner->page_name) ? $banner->page_name : '') == 'our_branches' ? 'selected' : '' }}>Our Branches</option>

                                        <option value="interest_rates" {{ old('page_name', !empty($banner->page_name) ? $banner->page_name : '') == 'interest_rates' ? 'selected' : '' }}>Interest Rates</option>
                                        
                                        <option value="unclaimed_deposite" {{ old('page_name', !empty($banner->page_name) ? $banner->page_name : '') == 'unclaimed_deposite' ? 'selected' : '' }}>Unclaimed Deposite</option>
                                        
                                        <option value="contact" {{ old('page_name', !empty($banner->page_name) ? $banner->page_name : '') == 'contact' ? 'selected' : '' }}>Contact</option>

                                        <option value="privacy_policy" {{ old('page_name', !empty($banner->page_name) ? $banner->page_name : '') == 'privacy_policy' ? 'selected' : '' }}>Privacy Policy</option>

                                        <option value="terms_and_condition" {{ old('page_name', !empty($banner->page_name) ? $banner->page_name : '') == 'terms_and_condition' ? 'selected' : '' }}>Terms And Condition</option>

                                        

                                    </select>

                                    @if($errors->has('page_name'))
                                    <span class="text-danger"><b>* {{$errors->first('page_name')}}</b></span>
                                    @endif
                                </div>
                            
                                <!-- Banner Heading in English -->
                                <div class="mb-3">
                                    <label for="banner_heading_heading_en" class="form-label">Banner Heading (English)<span class="red">*</span></label>
                                    <input type="text" class="form-control" id="banner_heading_heading_en" name="banner_heading_heading_en" value="{{ old('banner_heading_heading_en', !empty($banner) ? $banner->banner_heading_heading_en : '') }}">
                                    @if($errors->has('banner_heading_heading_en'))
                                    <span class="text-danger"><b>* {{$errors->first('banner_heading_heading_en')}}</b></span>
                                    @endif
                                </div>
                            
                                <!-- Banner Heading in Marathi -->
                                <div class="mb-3">
                                    <label for="banner_heading_heading_mr" class="form-label">Banner Heading (Marathi)<span class="red">*</span></label>
                                    <input type="text" class="form-control" id="banner_heading_heading_mr" name="banner_heading_heading_mr" value="{{ old('banner_heading_heading_mr', !empty($banner) ? $banner->banner_heading_heading_mr : '') }}">
                                    @if($errors->has('banner_heading_heading_mr'))
                                    <span class="text-danger"><b>* {{$errors->first('banner_heading_heading_mr')}}</b></span>
                                    @endif
                                </div>
                            
                                <!-- Banner Image -->
                                <div class="mb-3">
                                    <div class="upload_img">
                                        <div class="upload_photo">
                                            <label>Banner Image<span class="red">*</span></label>
                                            <div id="respon" style="color:red"></div>
                                        </div>
                                        <div class="photo img-upload profile upload-file">
                                            <input type="file" name="banner_image_path" id="banner_image_path" class="dropify" data-plugins="dropify" data-default-file="{{ !empty($banner->banner_image_path) ? url('/').Storage::url($banner->banner_image_path) : ''}}" />
                                        </div>
                                    </div>
                                    @if($errors->has('banner_image_path'))
                                    <span class="text-danger"><b>* {{$errors->first('banner_image_path')}}</b></span>
                                    @endif
                                </div>
                            
                                <button class="btn btn-success" name="banner_section" type="submit"> {{ !empty($banner_banner) ? 'Update' : 'Submit' }} </button>
                               
                                @if (empty($banner_banner))
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
                                        <th width="35%">Page Name</th>
                                        <th width="35%">Heading(English)</th>
                                        <th width="35%">Heading(Marathi)</th>
                                        <th width="25%">Banner Image</th>
                                        <th width="15%">Status</th>
                                        <th width="15%">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>About Us</td>
                                        <td>English</td>
                                        <td>Marathi</td>
                                        <td>
                                            <img src="{{asset('front/images/slider/homepage3en.jpg')}}" alt="Sample Image 1" width="50" class="review-image" style="cursor:pointer;">
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
                                    </tr>

                               
                                    
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

<script src="{{ URL::asset('admin_panel/controller_js/cn_master_banner.js')}}"></script>





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