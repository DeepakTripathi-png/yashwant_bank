@section('meta_title') Board of Directors | Yeshwant Bank @endsection
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

             {{-- Banner Images --}}

            <div class="row">
                <div class="mb-2 justify-content-between d-flex align-items-center">
                    <h4 class="mt-0 header-title">Board of Directors</h4>
                </div>
                <div class="col-4">
                    <div class="card department-card">
                        <div class="card-body">
                            <form action="{{route('board-of-directors-store')}}" method="post" id="add-banner-form" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" class="form-control" id="id" name="id" value="{{ !empty($director->id) ? $director->id : '' }}">
            
                                <div class="mb-3">
                                    <label for="designation_en" class="form-label">Designation (English)<span class="red">*</span></label>
                                    <input type="text" class="form-control" id="designation_en" name="designation_en" value="{{ !empty($director) ? $director->designation_en : '' }}">
                                    @if($errors->has('designation_en'))
                                    <span class="text-danger"><b>* {{$errors->first('designation_en')}}</b></span>
                                    @endif
                                </div>
                                <div class="mb-3">
                                    <label for="designation_mr" class="form-label">Designation (Marathi)<span class="red">*</span></label>
                                    <input type="text" class="form-control" id="designation_mr" name="designation_mr" value="{{ !empty($director) ? $director->designation_mr : '' }}">
                                    @if($errors->has('designation_mr'))
                                    <span class="text-danger"><b>* {{$errors->first('designation_mr')}}</b></span>
                                    @endif
                                </div>
            
                                <div class="mb-3">
                                    <label for="name_en" class="form-label">Name (English)<span class="red">*</span></label>
                                    <input type="text" class="form-control" id="name_en" name="name_en" value="{{ !empty($director) ? $director->name_en : '' }}">
                                    @if($errors->has('name_en'))
                                    <span class="text-danger"><b>* {{$errors->first('name_en')}}</b></span>
                                    @endif
                                </div>
                                <div class="mb-3">
                                    <label for="name_mr" class="form-label">Name (Marathi)<span class="red">*</span></label>
                                    <input type="text" class="form-control" id="name_mr" name="name_mr" value="{{ !empty($director) ? $director->name_mr : '' }}">
                                    @if($errors->has('name_mr'))
                                    <span class="text-danger"><b>* {{$errors->first('name_mr')}}</b></span>
                                    @endif
                                </div>
            
                                <button class="btn btn-success" name="banner_section" type="submit"> {{ !empty($direcor) ? 'Update' : 'Submit' }} </button>
                                @if (empty($direcor))
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
                                        <th width="20%">Designation (English)</th>
                                        <th width="20%">Designation (Marathi)</th>
                                        <th width="20%">Name (English)</th>
                                        <th width="20%">Name (Marathi)</th>
                                        <th width="15%">Status</th>
                                        <th width="15%">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Example row -->
                                    {{-- <tr>
                                        <td>1</td>
                                        <td>Chairman</td>
                                        <td>अध्यक्ष</td>
                                        <td>Mr. Suhas Bapurao Pachpute</td>
                                        <td>श्री. सुहास बापूराव पाचपुते</td>
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

<script src="{{ URL::asset('admin_panel/controller_js/cn_boardof_directors.js')}}"></script>





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