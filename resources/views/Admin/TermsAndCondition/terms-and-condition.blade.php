@section('meta_title') Terms and Condition | Yeshwant Bank @endsection
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
                    <h4 class="mt-0 header-title">Manage Terms and Condition</h4>
                </div>

                <div class="col-12">

                    <div class="card">
                        <div class="card-body">
                            <form action="{{route('terms-and-condition-store')}}" method="post" id="add-banner-form" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" class="form-control" id="id" name="id" value="{{ !empty($terms) ? $terms->id : '' }}">
                                 
                             
                            
                                
                                <div class="mb-3 sec_1_description">
                                    <label for="description_en" class="form-label">Description (English) <span class="red"><b>*</b></span></label>
                                    <textarea name="description_en" class="summernote" cols="50" rows="30">
                                        {{ !empty($terms->description_en) ? $terms->description_en : old('description_en') }}
                                    </textarea>
                                    @if ($errors->has('description_en'))
                                        <span class="text-danger error-message"><b>*</b>{{ $errors->first('description_en') }}</span>
                                    @endif
                                </div>
                                
                                <div class="mb-3 sec_1_description">
                                    <label for="description_mr" class="form-label">Description (Marathi) <span class="red"><b>*</b></span></label>
                                    <textarea name="description_mr" class="summernote" cols="50" rows="30">
                                        {{ !empty($terms->description_mr) ? $terms->description_mr : old('description_mr') }}
                                    </textarea>
                                    @if ($errors->has('description_mr'))
                                        <span class="text-danger error-message"><b>*</b>{{ $errors->first('description_mr') }}</span>
                                    @endif
                                </div>
            
            
                                <button class="btn btn-success" name="banner_section" type="submit"> {{ !empty($terms) ? 'Update' : 'Submit' }} </button>
                               
                                @if (empty($terms))
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