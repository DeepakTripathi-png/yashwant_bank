@section('meta_title') Annual Report | Yeshwant Bank @endsection
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
                    <h4 class="mt-0 header-title">Add Annual Report</h4>
                </div>
                <div class="col-4">
                    <div class="card department-card">
                        <div class="card-body">
                                <form action="{{route('annual-report-store')}}" method="post" id="add-annual-report-form" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" class="form-control" id="id" name="id" value="{{ !empty($annualReport) ? $annualReport->id : '' }}">
                    
                                <div class="mb-3">
                                    <label for="report_name_en" class="form-label">Annual Report Name (English)<span class="red">*</span></label>
                                    <input type="text" class="form-control" id="report_name_en" name="report_name_en" placeholder="Enter report name in English" value="{{ !empty($annualReport) ? $annualReport->report_name_en : '' }}">
                                    @if($errors->has('report_name_en'))
                                    <span class="text-danger"><b>* {{ $errors->first('report_name_en') }}</b></span>
                                    @endif
                                </div>
            
                                <div class="mb-3">
                                    <label for="report_name_mr" class="form-label">Annual Report Name (Marathi)<span class="red">*</span></label>
                                    <input type="text" class="form-control" id="report_name_mr" name="report_name_mr" placeholder="Enter report name in Marathi" value="{{ !empty($annualReport) ? $annualReport->report_name_mr : '' }}">
                                    @if($errors->has('report_name_mr'))
                                    <span class="text-danger"><b>* {{ $errors->first('report_name_mr') }}</b></span>
                                    @endif
                                </div>

                                <div class="mb-3">
                                    <div class="upload_pdf">
                                        <div class="upload_file">
                                            <label for="report_pdf_en">Annual Report (English PDF)<span class="red">*</span></label>
                                            <div id="respon_en" style="color:red"></div>
                                        </div>
                                        <div class="file-upload">
                                            <input type="file" name="report_pdf_en" id="report_pdf_en" class="form-control" accept=".pdf" />
                                            @if(!empty($annualReport->report_pdf_en_path))
                                                @php
                                                    $pdf_url = url('/') . Storage::url($annualReport->report_pdf_en_path);
                                                @endphp
                                                <a href="{{ $pdf_url }}" target="_blank">
                                                    <i class="mdi mdi-file-pdf" data-name="mdi-file-pdf"></i> 
                                                    {{ basename($annualReport->report_pdf_en_name) }}
                                                </a>
                                            @endif
                                        </div>
                                    </div>
                                    @if($errors->has('report_pdf_en'))
                                        <span class="text-danger"><b>* {{ $errors->first('report_pdf_en') }}</b></span>
                                    @endif
                                </div>
                                
            
                                <div class="mb-3">
                                    <div class="upload_pdf">
                                        <div class="upload_file">
                                            <label>Annual Report (Marathi PDF)<span class="red">*</span></label>
                                            <div id="respon_mr" style="color:red"></div>
                                        </div>
                                        <div class="file-upload">
                                            <input type="file" name="report_pdf_mr" id="report_pdf_mr" class="form-control" accept=".pdf" />
                                            @if(!empty($annualReport->report_pdf_mr_path))

                                            @php
                                                $pdf_url = url('/') . Storage::url($annualReport->report_pdf_mr_path);
                                            @endphp
                                                <a href="{{ $pdf_url }}" target="_blank">
                                                    <i class="mdi mdi-file-pdf" data-name="mdi-file-pdf"></i> 
                                                    {{ basename($annualReport->report_pdf_mr_name) }}
                                                </a>
                                                <a href="{{ url('/') . Storage::url($annualReport->report_pdf_mr_path) }}" target="_blank"><i class="mdi mdi-file-pdf" data-name="mdi-file-pdf"></i></a>
                                            @endif
                                        </div>
                                    </div>
                                    @if($errors->has('report_pdf_mr'))
                                    <span class="text-danger"><b>* {{ $errors->first('report_pdf_mr') }}</b></span>
                                    @endif
                                </div>
            
                                <button class="btn btn-success"  type="submit"> {{ !empty($annualReport) ? 'Update' : 'Submit' }} </button>
                                @if (empty($annualReport))
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
                                        <th width="20%">Report Name (English)</th>
                                        <th width="20%">Report Name (Marathi)</th>
                                        <th width="20%">PDF (English)</th>
                                        <th width="20%">PDF (Marathi)</th>
                                        <th width="10%">Status</th>
                                        <th width="15%">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Example row -->
                                    {{-- <tr>
                                        <td>1</td>
                                        <td>Annual Report 2023</td>
                                        <td>वार्षिक अहवाल २०२३</td>
                                        <td>
                                            <a href="path/to/report_en.pdf" target="_blank"><i class="mdi mdi-file-pdf" data-name="mdi-file-pdf"></i></a>
                                        </td>
                                        <td>
                                            <a href="path/to/report_mr.pdf" target="_blank"><i class="mdi mdi-file-pdf" data-name="mdi-file-pdf"></i></a>
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
<script src="{{ URL::asset('admin_panel\controller_js\cn_annual_report.js')}}"></script>

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
                    $(this).summernote('code', '');  
                });
                $(".dropify-clear").trigger("click");  
            });
        });
</script>
        
    

@endsection