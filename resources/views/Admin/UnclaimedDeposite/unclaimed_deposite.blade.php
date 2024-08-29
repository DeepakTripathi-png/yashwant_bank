@section('meta_title') Unclaimed Deposite | Yeshwant Bank @endsection
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
                    <h4 class="mt-0 header-title">Unclaimed Deposite</h4>
                </div>
                <div class="col-4">
                    <div class="card department-card">
                        <div class="card-body">
                            <form action="{{route('unclaimed-deposite-store')}}" method="post" id="add-banner-form" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" class="form-control" id="id" name="id" value="{{ !empty($customer->id) ? $customer->id : '' }}">
            
                                <div class="mb-3">
                                    <label for="customer_name_en" class="form-label">Customer Name(English)<span class="red">*</span></label>
                                    <input type="text" class="form-control" id="customer_name_en" name="customer_name_en" value="{{ !empty($customer) ? $customer->customer_name_en : '' }}">
                                    @if($errors->has('customer_name_en'))
                                    <span class="text-danger"><b>* {{$errors->first('customer_name_en')}}</b></span>
                                    @endif
                                </div>

                                <div class="mb-3">
                                    <label for="customer_name_mr" class="form-label">Customer Name(Marathi)<span class="red">*</span></label>
                                    <input type="text" class="form-control" id="customer_name_mr" name="customer_name_mr" value="{{ !empty($customer) ? $customer->customer_name_mr: '' }}">
                                    @if($errors->has('customer_name_mr'))
                                    <span class="text-danger"><b>* {{$errors->first('customer_name_mr')}}</b></span>
                                    @endif
                                </div>


                                <div class="mb-3 sec_1_description">
                                    <label for="address_en" class="form-label">Address (English) <span class="red"><b>*</b></span></label>
                                    <textarea name="address_en" class="summernote" cols="30" rows="10">{{ old('address_en', !empty($customer) ? $customer->address_en : '') }}</textarea>
                                    @if ($errors->has('address_en'))
                                        <span class="text-danger error-message"><b>*</b>{{ $errors->first('address_en') }}</span>
                                    @endif
                                </div>


                                <div class="mb-3 sec_1_description">
                                    <label for="address_mr" class="form-label">Address (Marathi) <span class="red"><b>*</b></span></label>
                                    <textarea name="address_mr" class="summernote" cols="30" rows="10">{{ old('address_mr', !empty($customer) ? $customer->address_mr : '') }}</textarea>
                                    @if ($errors->has('address_mr'))
                                        <span class="text-danger error-message"><b>*</b>{{ $errors->first('address_mr') }}</span>
                                    @endif
                                </div>
            
                                <div class="mb-3">
                                    <label for="udrn" class="form-label">UDRN<span class="red">*</span></label>
                                    <input type="text" class="form-control" id="udrn" name="udrn" value="{{ !empty($customer) ? $customer->udrn : '' }}">
                                    @if($errors->has('udrn'))
                                    <span class="text-danger"><b>* {{$errors->first('udrn')}}</b></span>
                                    @endif
                                </div>
                            
            
                                <button class="btn btn-success" name="unclaimed_deposite" type="submit"> {{ !empty($customer) ? 'Update' : 'Submit' }} </button>
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
                                        <th width="20%">Customer Name (English)</th>
                                        <th width="20%">Customer Name (Marathi)</th>
                                        <th width="20%">Address (English)</th>
                                        <th width="20%">Address (Marathi)</th>
                                        <th width="20%">UDRN</th>
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

        </div> 
    </div> 
</div> 








@endsection

@section('script')

<script src="{{ URL::asset('admin_panel\controller_js\cn_unclaimed_deposite.js')}}"></script>







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