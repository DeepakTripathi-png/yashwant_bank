@section('meta_title') Privacy Policy | Yeshwant Bank @endsection
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
<style>
    .sec_1_description textarea {
        width: 100%; 
        height: 400px;
    }
</style>
@endsection
@section('content')



<div class="content-page">
    <div class="content">
        <div class="container-fluid">

            <div class="row">
                <div class="mb-2 justify-content-between d-flex align-items-center">
                    <h4 class="mt-0 header-title">Manage Privacy Policy</h4>
                </div>

                <div class="col-12">

                    <div class="card">
                        <div class="card-body">
                            <form action="{{route('privacy-policy-store')}}" method="post" id="add-banner-form" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" class="form-control" id="id" name="id" value="{{ !empty($privacy) ? $privacy->id : '' }}">
                                 
                             

                                
                                <div class="mb-3 sec_1_description">
                                    <label for="description_en" class="form-label">Description (English) <span class="red"><b>*</b></span></label>
                                    <textarea name="description_en" class="summernote" cols="50" rows="30">
                                        {{ !empty($privacy->description_en) ? $privacy->description_en : old('description_en') }}
                                    </textarea>
                                    @if ($errors->has('description_en'))
                                        <span class="text-danger error-message"><b>*</b>{{ $errors->first('description_en') }}</span>
                                    @endif
                                </div>
                                
                                <div class="mb-3 sec_1_description">
                                    <label for="description_mr" class="form-label">Description (Marathi) <span class="red"><b>*</b></span></label>
                                    <textarea name="description_mr" class="summernote" cols="50" rows="30">
                                        {{ !empty($privacy->description_mr) ? $privacy->description_mr : old('description_mr') }}
                                    </textarea>
                                    @if ($errors->has('description_mr'))
                                        <span class="text-danger error-message"><b>*</b>{{ $errors->first('description_mr') }}</span>
                                    @endif
                                </div>
                                
            
                                <button class="btn btn-success"  type="submit"> {{ !empty($privacy) ? 'Update' : 'Submit' }} </button>
                               
                                @if (empty($privacy))
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