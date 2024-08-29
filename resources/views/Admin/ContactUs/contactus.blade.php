@section('meta_title') Contact Us | Yeshwant Bank @endsection
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
                    <h4 class="mt-0 header-title">Add Contact Us Details</h4>
                </div>
                <div class="col-12">
                    <div class="card department-card">
                        <div class="card-body">
                                <form action="{{route('contact-store')}}" method="post" id="add-annual-report-form" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" class="form-control" id="id" name="id" value="{{ !empty($contact) ? $contact->id : '' }}">

                            
                        
                                    <div class="mb-3">
                                        <label for="map_url" class="form-label">Map Url<span class="red">*</span></label>
                                        <input type="text" class="form-control" id="map_url" name="map_url" placeholder="Enter report name in English" value="{{ !empty($contact) ? $contact->map_url : '' }}">
                                        @if($errors->has('map_url'))
                                        <span class="text-danger"><b>* {{ $errors->first('map_url') }}</b></span>
                                        @endif
                                    </div>

                

                                    <div class="mb-3">
                                        <label for="first_mobile" class="form-label">First Phone Number<span class="red">*</span></label>
                                        <input type="text" class="form-control" id="first_mobile" name="first_mobile" placeholder="Enter first phone number" value="{{ !empty($contact) ? $contact->first_mobile : '' }}">
                                        @if($errors->has('first_mobile'))
                                        <span class="text-danger"><b>* {{ $errors->first('first_mobile') }}</b></span>
                                        @endif
                                    </div>

                                    <div class="mb-3">
                                        <label for="second_mobile" class="form-label">Second Phone Number<span class="red">*</span></label>
                                        <input type="text" class="form-control" id="second_mobile" name="second_mobile" placeholder="Enter second  phone number" value="{{ !empty($contact) ? $contact->second_mobile : '' }}">
                                        @if($errors->has('second_mobile'))
                                        <span class="text-danger"><b>* {{ $errors->first('second_mobile') }}</b></span>
                                        @endif
                                    </div>


                                    <div class="mb-3">
                                        <label for="first_email" class="form-label">First Email<span class="red">*</span></label>
                                        <input type="text" class="form-control" id="first_email" name="first_email" placeholder="Enter first email" value="{{ !empty($contact) ? $contact->first_email : '' }}">
                                        @if($errors->has('first_email'))
                                        <span class="text-danger"><b>* {{ $errors->first('first_email') }}</b></span>
                                        @endif
                                    </div>


                                    <div class="mb-3">
                                        <label for="second_email" class="form-label">Second Email<span class="red">*</span></label>
                                        <input type="text" class="form-control" id="second_email" name="second_email" placeholder="Enter second email" value="{{ !empty($contact) ? $contact->second_email : '' }}">
                                        @if($errors->has('second_email'))
                                        <span class="text-danger"><b>* {{ $errors->first('second_email') }}</b></span>
                                        @endif
                                    </div>

                                    <div class="mb-3 sec_1_description">
                                        <label for="address_en" class="form-label">Address (English) <span class="red"><b>*</b></span></label>
                                        <textarea name="address_en" class="summernote" cols="30" rows="10">
                                            {{ !empty($contact->address_en) ? $contact->address_en : old('address_en') }}
                                        </textarea>
                                        @if ($errors->has('address_en'))
                                            <span class="text-danger error-message"><b>*</b>{{ $errors->first('address_en') }}</span>
                                        @endif
                                    </div>

 
                                    <div class="mb-3 sec_1_description">
                                        <label for="address_mr" class="form-label">Address (Marathi) <span class="red"><b>*</b></span></label>
                                        <textarea name="address_mr" class="summernote" cols="30" rows="10">
                                            {{ !empty($contact->address_mr) ? $contact->address_mr : old('address_mr') }}
                                        </textarea>
                                        @if ($errors->has('address_mr'))
                                            <span class="text-danger error-message"><b>*</b>{{ $errors->first('address_mr') }}</span>
                                        @endif
                                    </div>



                             



                          
            
              
            
                                <button class="btn btn-success"  type="submit"> {{ !empty($contact) ? 'Update' : 'Submit' }} </button>
                                @if (empty($contact))
                                    <button type="reset" class="btn btn-danger reset-button">Cancel</button>
                                @endif
                            </form>
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