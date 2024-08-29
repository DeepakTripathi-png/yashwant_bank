@section('meta_title') Home | Yeshwant Bank @endsection
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
</style>
@endsection
@section('content')



<div class="content-page">
    <div class="content">
        <div class="container-fluid">

             {{-- Banner Images --}}
            <div class="row">
                <div class="mb-2 justify-content-between d-flex align-items-center">
                    <h4 class="mt-0 header-title">Home Slider Images</h4>
                </div>
                <div class="col-4">
                    <div class="card department-card">
                        <div class="card-body">

                            <form action="{{route('home-store-slider-img')}}" method="post" id="add-banner-form" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" class="form-control" id="id" name="id" value="{{ !empty($banner) ? $banner->id : '' }}">

                               
                                <div class="mb-3">
                                    <label for="language" class="form-label">@lang('Language') <span class="red">*</span></label>
                                    <select class="form-control" id="language" name="language">
                                        <option value="">@lang('Select Language')</option>
                                        <option value="en" {{ !empty($banner) && $banner->lang == 'en' ? 'selected' : '' }}>@lang('English')</option>
                                        <option value="mr" {{ !empty($banner) && $banner->lang == 'mr' ? 'selected' : '' }}>@lang('Marathi')</option>
                                    </select>
                                    @if($errors->has('language'))
                                    <span class="text-danger"><b>* {{$errors->first('language')}}</b></span>
                                    @endif
                                </div>
                                
                                <!-- Banner Image -->
                                <div class="mb-3">

                                    <div class="upload_img">
                                        <div class="upload_photo">
                                            <label>Banner Image<span class="red">*</span></label>
                                            <div id="respon" style="color:red"></div>
                                            <!-- <div class="img-note red">Note: Image size - Width: 1440px, Height:708px (upload only jpg, jpeg and png files)</span></div> -->

                                        </div>
                                        <div class="photo img-upload profile upload-file">
                                            <input type="file" name="ban_image_path" id="ban_image_path"  class="dropify" data-plugins="dropify" data-default-file="{{!empty($banner->image_path) ? url('/').Storage::url($banner->image_path) : ''}}" />
    
                                        </div>
                                    </div>

                                    @if($errors->has('ban_image_path'))
                                    <span class="text-danger"><b>* {{$errors->first('ban_image_path')}}</b></span>
                                    @endif
                                </div>

                               
                                <button class="btn btn-success" name="banner_section" type="submit"> {{ !empty($banner) ? 'Update' : 'Submit' }} </button>
                               
                                @if (empty($banner))
                                      <button  type="reset" class="btn btn-danger reset-button" >Cancel </button>
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
                                        <th width="35%">Language</th>
                                        <th width="25%">Images</th>
                                        <th width="15%">Status</th>
                                        <th width="15%">Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                  
                                    
                                </tbody>
                            </table>
                            

                        </div>
                    </div>
                </div>
            </div>
            {{-- Banner Images --}}




            {{-- Services Section --}}

          

            <div class="card department-card">
                <div class="card-body">
                    <form action="{{route('home-service-section')}}" method="post" id="add-sec-1-form" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" class="form-control" id="id" name="id" value="{{ !empty($home) ? $home->id : '' }}">
                        <div class="row">
                            <div class="mb-2 justify-content-between d-flex align-items-center">
                                <h4 class="mt-0 header-title">Services Section</h4>
                            </div>
                            <div class="col-8">
                                <!-- Heading1 (English) -->
                                <div class="mb-3">
                                    <label for="heading_1_en" class="form-label">Heading1 (English) <span class="red">*</span></label>
                                    <input type="text" class="form-control" id="heading_1_en" name="heading_1_en" value="{{ !empty($home) ? $home->heading_1_en : '' }}">
                                    @if($errors->has('heading_1_en'))
                                    <span class="text-danger"><b>* {{$errors->first('heading_1_en')}}</b></span>
                                    @endif
                                </div>
            
                                <!-- Heading1 (Marathi) -->
                                <div class="mb-3">
                                    <label for="heading_1_mr" class="form-label">Heading1 (Marathi) <span class="red">*</span></label>
                                    <input type="text" class="form-control" id="heading_1_mr" name="heading_1_mr" value="{{ !empty($home) ? $home->heading_1_mr : '' }}">
                                    @if($errors->has('heading_1_mr'))
                                    <span class="text-danger"><b>* {{$errors->first('heading_1_mr')}}</b></span>
                                    @endif
                                </div>
            
                                <!-- Heading2 (English) -->
                                <div class="mb-3">
                                    <label for="heading_2_en" class="form-label">Heading2 (English) <span class="red">*</span></label>
                                    <input type="text" class="form-control" id="heading_2_en" name="heading_2_en" value="{{ !empty($home) ? $home->heading_2_en : '' }}">
                                    @if($errors->has('heading_2_en'))
                                    <span class="text-danger"><b>* {{$errors->first('heading_2_en')}}</b></span>
                                    @endif
                                </div>
            
                                <!-- Heading2 (Marathi) -->
                                <div class="mb-3">
                                    <label for="heading_2_mr" class="form-label">Heading2 (Marathi) <span class="red">*</span></label>
                                    <input type="text" class="form-control" id="heading_2_mr" name="heading_2_mr" value="{{ !empty($home) ? $home->heading_2_mr : '' }}">
                                    @if($errors->has('heading_2_mr'))
                                    <span class="text-danger"><b>* {{$errors->first('heading_2_mr')}}</b></span>
                                    @endif
                                </div>
            
                                <!-- Description (English) -->
                                <div class="mb-3 sec_1_description">
                                    <label for="description_en" class="form-label">Description (English) <span class="red"><b>*</b></span></label>
                                    <textarea name="description_en" class="summernote" cols="30" rows="10">{{ !empty($home->description_en) ? $home->description_en : old('description_en') }}</textarea>
                                    @if ($errors->has('description_en'))
                                    <span class="text-danger error-message"><b>*</b> {{ $errors->first('description_en') }}</span>
                                    @endif
                                </div>
            
                                <!-- Description (Marathi) -->
                                <div class="mb-3 sec_1_description">
                                    <label for="description_mr" class="form-label">Description (Marathi) <span class="red"><b>*</b></span></label>
                                    <textarea name="description_mr" class="summernote" cols="30" rows="10">{{ !empty($home->description_mr) ? $home->description_mr : old('description_mr') }}</textarea>
                                    @if ($errors->has('description_mr'))
                                    <span class="text-danger error-message"><b>*</b> {{ $errors->first('description_mr') }}</span>
                                    @endif
                                </div>
                            </div>
            
                            <!-- Submit button -->
                            <div class="mt-3">
                                <button class="btn btn-success" type="submit" name="home_section_1"> {{ empty($home) ? 'Submit' : 'Update' }} </button>
                                @if(empty($home)) <button type="reset" class="btn btn-danger"> Cancel </button> @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            

            {{-- Services Section --}}


            {{-- Message From Chairman Section --}}

     
                      




            {{-- Message From Chairman Section --}}

         

               <div class="card department-card">
                <div class="card-body">
                    <form action="{{route('home-chairman-section')}}" method="post" id="add-sec-1-form" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" class="form-control" id="id" name="id" value="{{ !empty($chairMan) ? $chairMan->id : '' }}">
                        <div class="row">
                            <div class="mb-2 justify-content-between d-flex align-items-center">
                                <h4 class="mt-0 header-title">Chairman Section</h4>
                            </div>
                            <div class="col-8">
                                <!-- Heading1 (English) -->
                                <div class="mb-3">
                                    <label for="chair_man_heading_1_en" class="form-label">Heading1 (English) <span class="red">*</span></label>
                                    <input type="text" class="form-control" id="chair_man_heading_1_en" name="chair_man_heading_1_en" value="{{ !empty($chairMan) ? $chairMan->chair_man_heading_1_en : '' }}">
                                    @if($errors->has('chair_man_heading_1_en'))
                                    <span class="text-danger"><b>* {{$errors->first('chair_man_heading_1_en')}}</b></span>
                                    @endif
                                </div>
            
                                <!-- Heading1 (Marathi) -->
                                <div class="mb-3">
                                    <label for="chair_man_heading_1_mr" class="form-label">Heading1 (Marathi) <span class="red">*</span></label>
                                    <input type="text" class="form-control" id="chair_man_heading_1_mr" name="chair_man_heading_1_mr" value="{{ !empty($chairMan) ? $chairMan->chair_man_heading_1_mr : '' }}">
                                    @if($errors->has('chair_man_heading_1_mr'))
                                    <span class="text-danger"><b>* {{$errors->first('chair_man_heading_1_mr')}}</b></span>
                                    @endif
                                </div>
            
                                <!-- Heading2 (English) -->
                                <div class="mb-3">
                                    <label for="chair_man_heading_2_en" class="form-label">Heading2 (English) <span class="red">*</span></label>
                                    <input type="text" class="form-control" id="chair_man_heading_2_en" name="chair_man_heading_2_en" value="{{ !empty($chairMan) ? $chairMan->chair_man_heading_2_en : '' }}">
                                    @if($errors->has('chair_man_heading_2_en'))
                                    <span class="text-danger"><b>* {{$errors->first('chair_man_heading_2_en')}}</b></span>
                                    @endif
                                </div>
            
                                <!-- Heading2 (Marathi) -->
                                <div class="mb-3">
                                    <label for="chair_man_heading_2_mr" class="form-label">Heading2 (Marathi) <span class="red">*</span></label>
                                    <input type="text" class="form-control" id="chair_man_heading_2_mr" name="chair_man_heading_2_mr" value="{{ !empty($chairMan) ? $chairMan->chair_man_heading_2_mr : '' }}">
                                    @if($errors->has('chair_man_heading_2_mr'))
                                    <span class="text-danger"><b>* {{$errors->first('chair_man_heading_2_mr')}}</b></span>
                                    @endif
                                </div>
            
                                <!-- Description (English) -->
                                <div class="mb-3 sec_1_description">
                                    <label for="chair_man_description_en" class="form-label">Description (English) <span class="red"><b>*</b></span></label>
                                    <textarea name="chair_man_description_en" class="summernote" cols="30" rows="10">{{ !empty($chairMan->chair_man_description_en) ? $chairMan->chair_man_description_en : old('chair_man_description_en') }}</textarea>
                                    @if ($errors->has('chair_man_description_en'))
                                    <span class="text-danger error-message"><b>*</b> {{ $errors->first('chair_man_description_en') }}</span>
                                    @endif
                                </div>
            
                                <!-- Description (Marathi) -->
                                <div class="mb-3 sec_1_description">
                                    <label for="chair_man_description_mr" class="form-label">Description (Marathi) <span class="red"><b>*</b></span></label>
                                    <textarea name="chair_man_description_mr" class="summernote" cols="30" rows="10">{{ !empty($chairMan->chair_man_description_mr) ? $chairMan->chair_man_description_mr : old('chair_man_description_mr') }}</textarea>
                                    @if ($errors->has('chair_man_description_mr'))
                                    <span class="text-danger error-message"><b>*</b> {{ $errors->first('chair_man_description_mr') }}</span>
                                    @endif
                                </div>
            
                            </div>
                            <div class="col-4">
            
                                <div class="upload_img mb-3">
                                    <div class="upload_photo">
                                        <label>Chairman Image <span class="red">*</span></label>
                                        <div id="respon" style="color:red"></div>
                                    </div>
                                    <div class="photo img-upload profile sec_1_video_path">
                                        <input type="file" name="chair_man_image" id="chair_man_image" class="dropify" data-plugins="dropify" data-show-remove="false" data-default-file="{{!empty($chairMan->chair_man_image_path) ? url('/').Storage::url($chairMan->chair_man_image_path) : ''}}" />
                                        @if($errors->has('chair_man_image'))
                                        <span class="text-danger"><b>* {{$errors->first('chair_man_image')}}</b></span>
                                        @endif
                                    </div>
                                </div>
            
                                <!-- Chairman Name (English) -->
                                <div class="mb-3">
                                    <label for="chair_man_name_en" class="form-label">Chairman Name (English) <span class="red">*</span></label>
                                    <input type="text" class="form-control" id="chair_man_name_en" name="chair_man_name_en" value="{{ !empty($chairMan) ? $chairMan->chair_man_name_en : old('chair_man_name_en') }}">
                                    @if($errors->has('chair_man_name_en'))
                                    <span class="text-danger"><b>* {{$errors->first('chair_man_name_en')}}</b></span>
                                    @endif
                                </div>
            
                                <!-- Chairman Name (Marathi) -->
                                <div class="mb-3">
                                    <label for="chair_man_name_mr" class="form-label">Chairman Name (Marathi) <span class="red">*</span></label>
                                    <input type="text" class="form-control" id="chair_man_name_mr" name="chair_man_name_mr" value="{{ !empty($chairMan) ? $chairMan->chair_man_name_mr : old('chair_man_name_mr') }}">
                                    @if($errors->has('chair_man_name_mr'))
                                    <span class="text-danger"><b>* {{$errors->first('chair_man_name_mr')}}</b></span>
                                    @endif
                                </div>
            
                            </div>
                            <!-- Submit button -->
                            <div class="mt-3">
                                <button class="btn btn-success" type="submit" name="home_section_1"> {{ empty($chairMan) ? 'Submit' : 'Update' }} </button>
                                @if(empty($chairMan)) <button type="reset" class="btn btn-danger"> Cancel </button> @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            

            {{-- Banner Images --}}
            <div class="row">
                <div class="mb-2 justify-content-between d-flex align-items-center">
                    <h4 class="mt-0 header-title">Our Various Schemes</h4>
                </div>
                <div class="col-4">
                    <div class="card department-card">
                        <div class="card-body">
                            <form action="{{route('home-store-scheme')}}" method="post" id="add-banner-form" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" class="form-control" id="id" name="id" value="{{ !empty($scheme) ? $scheme->id : '' }}">
            
                                <!-- English Schemes Name -->
                                <div class="mb-3">
                                    <label for="scheme_name_en" class="form-label">Schemes Name (English)<span class="red">*</span></label>
                                    <input type="text" class="form-control" id="scheme_name_en" name="scheme_name_en" value="{{ !empty($scheme) ? $scheme->scheme_name_en : old('scheme_name_en') }}">
                                    @if($errors->has('scheme_name_en'))
                                    <span class="text-danger"><b>* {{$errors->first('scheme_name_en')}}</b></span>
                                    @endif
                                </div>
            
                                <!-- Marathi Schemes Name -->
                                <div class="mb-3">
                                    <label for="scheme_name_mr" class="form-label">Schemes Name (Marathi)<span class="red">*</span></label>
                                    <input type="text" class="form-control" id="scheme_name_mr" name="scheme_name_mr" value="{{ !empty($scheme) ? $scheme->scheme_name_mr : old('scheme_name_mr') }}">
                                    @if($errors->has('scheme_name_mr'))
                                    <span class="text-danger"><b>* {{$errors->first('scheme_name_mr')}}</b></span>
                                    @endif
                                </div>
            
                                <!-- Banner Image -->
                                <div class="mb-3">
                                    <div class="upload_img">
                                        <div class="upload_photo">
                                            <label>Schemes Image<span class="red">*</span></label>
                                            <div id="respon" style="color:red"></div>
                                        </div>
                                        <div class="photo img-upload profile upload-file">
                                            <input type="file" name="scheme_image" id="scheme_image" class="dropify" data-plugins="dropify" data-default-file="{{!empty($scheme->scheme_image_path) ? url('/').Storage::url($scheme->scheme_image_path) : ''}}" />
                                        </div>
                                    </div>
                                </div>
            
                                <button class="btn btn-success" name="banner_section" type="submit"> {{ !empty($scheme) ? 'Update' : 'Submit' }} </button>
                                @if (empty($scheme))
                                <button type="reset" class="btn btn-danger reset-button">Cancel </button>
                                @endif
                            </form>
                        </div>
                    </div>
                </div>
            
                <!-- Table for displaying schemes -->
                <div class="col-8">
                    <div class="card">
                        <div class="card-body table-responsive department-card">
                            <table id="cims_data_table1" class="table table-bordered dt-responsive w-100">
                                <thead class="table-light">
                                    <tr role="row">
                                        <th width="10%">Sr. No.</th>
                                        <th width="35%">Schemes (English)</th>
                                        <th width="35%">Schemes (Marathi)</th>
                                        <th width="25%">Images</th>
                                        <th width="15%">Status</th>
                                        <th width="15%">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Scheme in English</td>
                                        <td>योजना मराठीमध्ये</td>
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
                                    <tr>
                                        <td>2</td>
                                        <td>Another Scheme in English</td>
                                        <td>आणखी योजना मराठीमध्ये</td>
                                        <td>
                                            <img src="{{asset('front/images/slider/homepage3en.jpg')}}" alt="Sample Image 2" width="50" class="review-image" style="cursor:pointer;">
                                        </td>
                                        <td>
                                            <a href="javascript:void(0);" class="change-status">
                                                <i class="fa fa-toggle-off tgle-off status_button" aria-hidden="true" title="Inactive"></i>
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

admin_panel\controller_js\cn_home.js

<script src="{{ URL::asset('admin_panel\controller_js\cn_home.js')}}"></script>



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