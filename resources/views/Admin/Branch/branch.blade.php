@section('meta_title') Branch | Yeshwant Bank @endsection
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

/* Add this to your CSS file or within a <style> tag in your Blade template */
    .wrap-text {
    white-space: nowrap; /* Prevent text from wrapping */
    overflow: hidden; /* Hide overflow */
    text-overflow: ellipsis; /* Add ellipsis for overflowed text */
}

.address-col {
    max-width: 200px; /* Adjust this width as needed */
}

</style>
@endsection
@section('content')



<div class="content-page">
    <div class="content">
        <div class="container-fluid">

         

            <div class="row">
                <div class="mb-2 justify-content-between d-flex align-items-center">
                    <h4 class="mt-0 header-title">Add Branches</h4>
                </div>
                <div class="col-4">
                    <div class="card department-card">
                        <div class="card-body">

                           
                         <form action="{{route('branch-store')}}" method="post" id="add-annual-report-form" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" class="form-control" id="id" name="id" value="{{ !empty($branch) ? $branch->id : '' }}">

                      
                                            
                    
                                <div class="mb-3">
                                    <label for="branch_name_en" class="form-label">Branch Name (English)<span class="red">*</span></label>
                                    <input type="text" class="form-control" id="branch_name_en" name="branch_name_en" placeholder="Enter branch name in English" value="{{ !empty($branch) ? $branch->branch_name_en : '' }}">
                                    @if($errors->has('branch_name_en'))
                                    <span class="text-danger"><b>* {{ $errors->first('branch_name_en') }}</b></span>
                                    @endif
                                </div>
            
                                <div class="mb-3">
                                    <label for="branch_name_mr" class="form-label">Branch Name (Marathi)<span class="red">*</span></label>
                                    <input type="text" class="form-control" id="branch_name_mr" name="branch_name_mr" placeholder="Enter report name in Marathi" value="{{ !empty($branch) ? $branch->branch_name_mr : '' }}">
                                    @if($errors->has('branch_name_mr'))
                                    <span class="text-danger"><b>* {{ $errors->first('branch_name_mr') }}</b></span>
                                    @endif
                                </div>



                                <div class="mb-3 sec_1_description">
                                    <label for="address_en" class="form-label">Branch Address (English) <span class="red"><b>*</b></span></label>
                                    <textarea name="address_en" class="summernote" cols="30" rows="10">
                                        {{ !empty($branch->address_en) ? $branch->address_en : old('address_en') }}
                                    </textarea>
                                    @if ($errors->has('address_en'))
                                        <span class="text-danger error-message"><b>*</b>{{ $errors->first('address_en') }}</span>
                                    @endif
                                </div>


                                
                                <div class="mb-3 sec_1_description">
                                    <label for="address_mr" class="form-label">Branch Address (Marathi) <span class="red"><b>*</b></span></label>
                                    <textarea name="address_mr" class="summernote" cols="30" rows="10">
                                        {{ !empty($branch->address_mr) ? $branch->address_mr : old('address_mr') }}
                                    </textarea>
                                    @if ($errors->has('address_mr'))
                                        <span class="text-danger error-message"><b>*</b>{{ $errors->first('address_mr') }}</span>
                                    @endif
                                </div>

                                <button class="btn btn-success" name="annual_report_section" type="submit"> {{ !empty($branch) ? 'Update' : 'Submit' }} </button>
                                @if (empty($branch))
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
                                        <th width="5%">Branch Name (English)</th>
                                        <th width="5%">Branch Name (Marathi)</th>
                                        <th width="15%">Branch Address (English)</th>
                                        <th width="15%">Branch Address(Marathi)</th>
                                        <th width="5%">Status</th>
                                        <th width="5%">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Example row -->
                             
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

<script src="{{ URL::asset('admin_panel/controller_js/cn_branch.js')}}"></script>



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