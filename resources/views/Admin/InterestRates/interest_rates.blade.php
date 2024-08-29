@section('meta_title') Interest Rates | Yeshwant Bank @endsection
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
                    <h4 class="mt-0 header-title">Add Interest Rates Page Main Banner</h4>
                </div>

                <div class="col-12">

                    <div class="card">
                        <div class="card-body">
                            <form action="{{route('interest-rates-store')}}" method="post" id="add-banner-form" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" class="form-control" id="id" name="id" value="{{ !empty($interest) ? $interest->id : '' }}">
                                 
                    
                                <!-- Banner Image -->
                                <div class="mb-3">
                                    <div class="upload_img">
                                        <div class="upload_photo">
                                            <label>Banner Image(English)<span class="red">*</span></label>
                                            <div id="respon" style="color:red"></div>
                                        </div>
                                        <div class="photo img-upload profile upload-file">
                                            <input type="file" name="main_banner_en" id="main_banner_en"  class="dropify" data-plugins="dropify" data-default-file="{{!empty($interest->main_banner_en_path) ? url('/').Storage::url($interest->main_banner_en_path) : ''}}" />
                                        </div>
                                    </div>
                                    @if ($errors->has('main_banner_en'))
                                     <span class="text-danger error-message"><b>*</b>{{ $errors->first('main_banner_en') }}</span>
                                   @endif
                                </div>

                                  <!-- Banner Image -->
                                <div class="mb-3">
                                    <div class="upload_img">
                                        <div class="upload_photo">
                                            <label>Banner Image(Marathi)<span class="red">*</span></label>
                                            <div id="respon" style="color:red"></div>
                                        </div>
                                        <div class="photo img-upload profile upload-file">
                                            <input type="file" name="main_banner_mr" id="main_banner_mr"  class="dropify" data-plugins="dropify" data-default-file="{{!empty($interest->main_banner_mr_path) ? url('/').Storage::url($interest->main_banner_mr_path) : ''}}" />
                                        </div>
                                    </div>

                                    @if ($errors->has('main_banner_mr'))
                                    <span class="text-danger error-message"><b>*</b>{{ $errors->first('main_banner_mr') }}</span>
                                  @endif
                                </div>
            
                                <button class="btn btn-success" name="main_banner_section" type="submit"> {{ !empty($interest) ? 'Update' : 'Submit' }} </button>
                               
                                @if (empty($interest))
                                    <button type="reset" class="btn btn-danger reset-button">Cancel</button>
                                @endif
                            </form>
                        </div>
                    </div>
                    
                </div>

           
            </div>
            {{-- Banner Images --}}


            <div class="row">
                <div class="mb-2 justify-content-between d-flex align-items-center">
                    <h4 class="mt-0 header-title">Manage Interest Content</h4>
                </div>
            
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <!-- Form for Interest Content -->

    
                            <form action="{{route('interest-rates-store')}}" method="post" id="add-banner-form" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" class="form-control" id="id" name="id" value="{{ !empty($interest) ? $interest->id : '' }}">
                            
                                <!-- Section: Decision Date -->
                                <h5 class="mb-3">Section 1</h5>
                                
                                <!-- English Content -->
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <label for="section_1_heading_en" class="form-label">Heading (English)</label>
                                        <input type="text" class="form-control" id="section_1_heading_en" name="section_1_heading_en" value="{{ old('section_1_heading_en', $interest->section_1_heading_en ?? '') }}">
                                        @if ($errors->has('section_1_heading_en'))
                                        <span class="text-danger error-message"><b>*</b>{{ $errors->first('section_1_heading_en') }}</span>
                                       @endif
                                    </div>
                                </div>
                            
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <label for="section_1_sub_heading_en" class="form-label">Sub Heading (English)</label>
                                        <input type="text" class="form-control" id="section_1_sub_heading_en" name="section_1_sub_heading_en"  value="{{ old('section_1_sub_heading_en', $interest->section_1_sub_heading_en ?? '') }}">
                                        @if ($errors->has('section_1_sub_heading_en'))
                                        <span class="text-danger error-message"><b>*</b>{{ $errors->first('section_1_sub_heading_en') }}</span>
                                       @endif
                                    </div>
                                </div>
                            
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <label for="section_1_decision_date_heading_en" class="form-label">Decision Date Heading (Below The First Table) (English)</label>
                                        <input type="text" class="form-control" id="section_1_decision_date_heading_en" name="section_1_decision_date_heading_en"  value="{{ old('section_1_decision_date_heading_en', $interest->section_1_decision_date_heading_en ?? '') }}">
                                        @if ($errors->has('section_1_decision_date_heading_en'))
                                        <span class="text-danger error-message"><b>*</b>{{ $errors->first('section_1_decision_date_heading_en') }}</span>
                                       @endif
                                    </div>
                                </div>
                            
                                <div class="mb-3 sec_1_description">
                                    <label for="section_1_content_below_first_table_en" class="form-label">Content Below The First Table (English) <span class="red"><b>*</b></span></label>
                                    <textarea name="section_1_content_below_first_table_en" class="summernote" cols="30" rows="10">{{ old('section_1_content_below_first_table_en', $interest->section_1_content_below_first_table_en ?? '') }}</textarea>
                                    @if ($errors->has('section_1_content_below_first_table_en'))
                                        <span class="text-danger error-message"><b>*</b>{{ $errors->first('section_1_content_below_first_table_en') }}</span>
                                    @endif
                                </div>
                            
                                <!-- Marathi Content -->
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <label for="section_1_heading_mr" class="form-label">Heading (Marathi)</label>
                                        <input type="text" class="form-control" id="section_1_heading_mr" name="section_1_heading_mr" value="{{ old('section_1_heading_mr', $interest->section_1_heading_mr ?? '') }}">
                                        @if ($errors->has('section_1_heading_mr'))
                                         <span class="text-danger error-message"><b>*</b>{{ $errors->first('section_1_heading_mr') }}</span>
                                       @endif 
                                    </div>
                                </div>
                            
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <label for="section_1_sub_heading_mr" class="form-label">Sub Heading (Marathi)</label>
                                        <input type="text" class="form-control" id="section_1_sub_heading_mr" name="section_1_sub_heading_mr" value="{{ old('section_1_sub_heading_mr', $interest->section_1_sub_heading_mr ?? '') }}">
                                        @if ($errors->has('section_1_sub_heading_mr'))
                                          <span class="text-danger error-message"><b>*</b>{{ $errors->first('section_1_sub_heading_mr') }}</span>
                                       @endif 
                                    </div>
                                </div>
                            
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <label for="section_1_decision_date_heading_mr" class="form-label">Decision Date Heading (Below The First Table) (Marathi)</label>
                                        <input type="text" class="form-control" id="section_1_decision_date_heading_mr" name="section_1_decision_date_heading_mr" value="{{ old('section_1_decision_date_heading_mr', $interest->section_1_decision_date_heading_mr ?? '') }}">
                                        @if ($errors->has('section_1_decision_date_heading_mr'))
                                          <span class="text-danger error-message"><b>*</b>{{ $errors->first('section_1_decision_date_heading_mr') }}</span>
                                       @endif
                                    </div>
                                </div>
                            
                                <div class="mb-3 sec_1_description">
                                    <label for="section_1_content_below_first_table_mr" class="form-label">Content Below The First Table (Marathi) <span class="red"><b>*</b></span></label>
                                    <textarea name="section_1_content_below_first_table_mr" class="summernote" cols="30" rows="10">{{ old('section_1_content_below_first_table_mr', $interest->section_1_content_below_first_table_mr ?? '') }}</textarea>
                                    @if ($errors->has('section_1_content_below_first_table_mr'))
                                        <span class="text-danger error-message"><b>*</b>{{ $errors->first('section_1_content_below_first_table_mr') }}</span>
                                    @endif
                                </div>
                            
                                {{-- <button class="btn btn-success" type="submit">Submit</button>
                                <button type="reset" class="btn btn-danger reset-button">Cancel</button> --}}

                                <button class="btn btn-success" name="section_1" type="submit"> {{ !empty($interest) ? 'Update' : 'Submit' }} </button>
                               
                                @if (empty($interest))
                                    <button type="reset" class="btn btn-danger reset-button">Cancel</button>
                                @endif
                            </form>
                            


            
                            <!-- Form for Banner -->
                            <div class="mt-4">
                                <h5 class="mb-3">First Table List</h5>
                                <div class="row">
                                    <div class="col-4">
                                        <div class="card">
                                            <div class="card-body">
                                                <form action="{{route('store-deposit-interest-rates-table1')}}" method="post" id="add-banner-form" enctype="multipart/form-data">
                                                    @csrf
                                                    <input type="hidden" class="form-control" id="id" name="id" value="{{ !empty($table1) ? $table1->id : '' }}">
            
                                                    <!-- Banner Heading in English -->
                                                    <div class="mb-3">
                                                        <label for="period_en" class="form-label">Period (English) <span class="red">*</span></label>
                                                        <input type="text" class="form-control" id="period_en" name="period_en" value="{{ !empty($table1) ? $table1->period_en : '' }}">
                                                        @if($errors->has('period_en'))
                                                        <span class="text-danger"><b>* {{$errors->first('period_en')}}</b></span>
                                                        @endif
                                                    </div>
            
                                                    <!-- Banner Heading in Marathi -->
                                                    <div class="mb-3">
                                                        <label for="period_mr" class="form-label">Period (Marathi) <span class="red">*</span></label>
                                                        <input type="text" class="form-control" id="period_mr" name="period_mr" value="{{ !empty($table1) ? $table1->period_mr : '' }}">
                                                        @if($errors->has('period_mr'))
                                                        <span class="text-danger"><b>* {{$errors->first('period_mr')}}</b></span>
                                                        @endif
                                                    </div>
            
                                                    <!-- General Interest Rate in English -->
                                                    <div class="mb-3">
                                                        <label for="general_interest_rate_en" class="form-label">General Interest Rate (English) <span class="red">*</span></label>
                                                        <input type="text" class="form-control" id="general_interest_rate_en" name="general_interest_rate_en" value="{{ !empty($table1) ? $table1->general_interest_rate_en : '' }}">
                                                        @if($errors->has('general_interest_rate_en'))
                                                        <span class="text-danger"><b>* {{$errors->first('general_interest_rate_en')}}</b></span>
                                                        @endif
                                                    </div>
            
                                                    <!-- General Interest Rate in Marathi -->
                                                    <div class="mb-3">
                                                        <label for="general_interest_rate_mr" class="form-label">General Interest Rate (Marathi) <span class="red">*</span></label>
                                                        <input type="text" class="form-control" id="general_interest_rate_mr" name="general_interest_rate_mr" value="{{ !empty($table1) ? $table1->general_interest_rate_mr : '' }}">
                                                        @if($errors->has('general_interest_rate_mr'))
                                                        <span class="text-danger"><b>* {{$errors->first('general_interest_rate_mr')}}</b></span>
                                                        @endif
                                                    </div>
            
                                                    <!-- Senior Citizens Interest Rate in English -->
                                                    <div class="mb-3">
                                                        <label for="senior_citizens_interest_rate_en" class="form-label">Senior Citizens Interest Rate (English) <span class="red">*</span></label>
                                                        <input type="text" class="form-control" id="senior_citizens_interest_rate_en" name="senior_citizens_interest_rate_en" value="{{ !empty($table1) ? $table1->senior_citizens_interest_rate_en : '' }}">
                                                        @if($errors->has('senior_citizens_interest_rate_en'))
                                                        <span class="text-danger"><b>* {{$errors->first('senior_citizens_interest_rate_en')}}</b></span>
                                                        @endif
                                                    </div>
            
                                                    <!-- Senior Citizens Interest Rate in Marathi -->
                                                    <div class="mb-3">
                                                        <label for="senior_citizens_interest_rate_mr" class="form-label">Senior Citizens Interest Rate (Marathi) <span class="red">*</span></label>
                                                        <input type="text" class="form-control" id="senior_citizens_interest_rate_mr" name="senior_citizens_interest_rate_mr" value="{{ !empty($table1) ? $table1->senior_citizens_interest_rate_mr : '' }}">
                                                        @if($errors->has('senior_citizens_interest_rate_mr'))
                                                        <span class="text-danger"><b>* {{$errors->first('senior_citizens_interest_rate_mr')}}</b></span>
                                                        @endif
                                                    </div>
            
                                                    <button class="btn btn-success" name="first" type="submit"> {{ !empty($table1) ? 'Update' : 'Submit' }} </button>
                                                    @if (empty($table1))
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
                                                            <th width="20%">Period (English)</th>
                                                            <th width="20%">Period (Marathi)</th>
            
                                                            <th width="20%">General Interest Rate (English)</th>
                                                            <th width="20%">General Interest Rate (Marathi)</th>
            
                                                            <th width="20%">Senior Citizens Interest Rate (English)</th>
                                                            <th width="20%">Senior Citizens Interest Rate (Marathi)</th>
            
                                                            <th width="10%">Status</th>
                                                            <th width="15%">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <!-- Example row -->
                                                        {{-- <tr>
                                                            <td>1</td>
                                                            <td>15 Days to 45 Days</td>
                                                            <td>१५ दिवस ते ४५ दिवस</td>
                                                            <td>४.००%</td>
                                                            <td>4.00%</td>
                                                            <td>४.००%</td>
                                                            <td>4.00%</td>
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        

            <div class="row">
                <div class="mb-2 justify-content-between d-flex align-items-center">
                    <h4 class="mt-0 header-title">Manage Interest Content</h4>
                </div>
            
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                           

                            <form action="{{route('interest-rates-store')}}" method="post" id="add-banner-form" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" class="form-control" id="id" name="id" value="{{ !empty($interest) ? $interest->id : '' }}">
                                
                                <!-- Section: Decision Date -->
                                <h5 class="mb-3">Section 2</h5>
                            
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <label for="section_2_heading_en" class="form-label">Heading (English)</label>
                                        <input type="text" class="form-control" id="section_2_heading_en" name="section_2_heading_en" value="{{ old('section_2_heading_en', $interest->section_2_heading_en?? '') }}">
                                        @if ($errors->has('section_2_heading_en'))
                                          <span class="text-danger error-message"><b>*</b>{{ $errors->first('section_2_heading_en') }}</span>
                                        @endif
                                    </div>
                                    <div class="col-md-6">
                                        <label for="section_2_heading_mr" class="form-label">Heading (Marathi)</label>
                                        <input type="text" class="form-control" id="section_2_heading_mr" name="section_2_heading_mr" value="{{ old('section_2_heading_mr', $interest->section_2_heading_mr?? '') }}">
                                        @if ($errors->has('section_2_heading_mr'))
                                        <span class="text-danger error-message"><b>*</b>{{ $errors->first('section_2_heading_mr') }}</span>
                                       @endif
                                    </div>
                                </div>
                            
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <label for="section_2_content_below_first_table_en" class="form-label">Decision Date Heading Below The Second Table (English)</label>
                                        <input type="text" class="form-control" id="section_2_content_below_first_table_en" name="section_2_content_below_first_table_en" value="{{ old('section_2_content_below_first_table_en', $interest->section_2_content_below_first_table_en?? '') }}">
                                        @if ($errors->has('section_2_content_below_first_table_en'))
                                        <span class="text-danger error-message"><b>*</b>{{ $errors->first('section_2_content_below_first_table_en') }}</span>
                                       @endif
                                    </div>

                                    <div class="col-md-6">
                                        <label for="section_2_content_below_first_table_mr" class="form-label">Decision Date Heading Below The Second Table (Marathi)</label>
                                        <input type="text" class="form-control" id="section_2_content_below_first_table_mr" name="section_2_content_below_first_table_mr" value="{{ old('section_2_content_below_first_table_mr', $interest->section_2_content_below_first_table_mr?? '') }}">
                                        @if ($errors->has('section_2_content_below_first_table_mr'))
                                        <span class="text-danger error-message"><b>*</b>{{ $errors->first('section_2_content_below_first_table_mr') }}</span>
                                       @endif
                                    </div>
                                </div>
                            
                                {{-- <button class="btn btn-success" type="submit">Submit</button>
                                <button type="reset" class="btn btn-danger reset-button">Cancel</button> --}}

                                <button class="btn btn-success" name="section_2" type="submit"> {{ !empty($interest) ? 'Update' : 'Submit' }} </button>
                               
                                @if (empty($interest))
                                    <button type="reset" class="btn btn-danger reset-button">Cancel</button>
                                @endif
                            </form>
                            
            
                            <div class="row mt-4">
                                <div class="col-md-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <form action="{{route('store-deposit-interest-rates-table2')}}" method="post" id="add-banner-form" enctype="multipart/form-data">
                                                @csrf
                                                <input type="hidden" class="form-control" id="id" name="id" value="{{ !empty($table2) ? $table2->id : '' }}">
                                                
                                                <!-- Banner Heading in English -->
                                                <div class="mb-3">
                                                    <label for="loan_type_en" class="form-label">Loan Type (English)<span class="red">*</span></label>
                                                    <input type="text" class="form-control" id="loan_type_en" name="loan_type_en" value="{{ !empty($table2) ? $table2->loan_type_en : '' }}">
                                                    @if($errors->has('loan_type_en'))
                                                        <span class="text-danger"><b>* {{$errors->first('loan_type_en')}}</b></span>
                                                    @endif
                                                </div>
                            
                                                <!-- Banner Heading in Marathi -->
                                                <div class="mb-3">
                                                    <label for="loan_type_mr" class="form-label">Loan Type (Marathi)<span class="red">*</span></label>
                                                    <input type="text" class="form-control" id="loan_type_mr" name="loan_type_mr" value="{{ !empty($table2) ? $table2->loan_type_mr : '' }}">
                                                    @if($errors->has('loan_type_mr'))
                                                        <span class="text-danger"><b>* {{$errors->first('loan_type_mr')}}</b></span>
                                                    @endif
                                                </div>
            
                                                <!-- Interest Rate in English -->
                                                <div class="mb-3">
                                                    <label for="interest_rate_en" class="form-label">Interest Rate (English)<span class="red">*</span></label>
                                                    <input type="text" class="form-control" id="interest_rate_en" name="interest_rate_en" value="{{ !empty($table2) ? $table2->interest_rate_en : '' }}">
                                                    @if($errors->has('interest_rate_en'))
                                                        <span class="text-danger"><b>* {{$errors->first('interest_rate_en')}}</b></span>
                                                    @endif
                                                </div>
            
                                                <!-- Interest Rate in Marathi -->
                                                <div class="mb-3">
                                                    <label for="interest_rate_mr" class="form-label">Interest Rate (Marathi)<span class="red">*</span></label>
                                                    <input type="text" class="form-control" id="interest_rate_mr" name="interest_rate_mr" value="{{ !empty($table2) ? $table2->interest_rate_mr : '' }}">
                                                    @if($errors->has('interest_rate_mr'))
                                                        <span class="text-danger"><b>* {{$errors->first('interest_rate_mr')}}</b></span>
                                                    @endif
                                                </div>
            
                                                <button class="btn btn-success" name="banner_section" type="submit"> {{ !empty($table2) ? 'Update' : 'Submit' }} </button>
                                                @if (empty($table2))
                                                    <button type="reset" class="btn btn-danger reset-button">Cancel</button>
                                                @endif
                                            </form>
                                        </div>
                                    </div>
                                </div>
            
                                <div class="col-md-8">
                                    <div class="card">
                                        <div class="card-body table-responsive department-card">
                                            <table id="cims_data_table1" class="table table-bordered dt-responsive w-100">
                                                <thead class="table-light">
                                                    <tr role="row">
                                                        <th width="10%">Sr. No.</th>
                                                        <th width="20%">Loan Type (English)</th>
                                                        <th width="20%">Loan Type (Marathi)</th>
                                                        <th width="20%">Interest Rate (English)</th>
                                                        <th width="20%">Interest Rate (Marathi)</th>
                                                        <th width="10%">Status</th>
                                                        <th width="15%">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <!-- Example row -->
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Home Loan (GL – HSGLN, HSGML, HFLN, MGLN)</td>
                                                        <td>गृह कर्ज (GL – HSGLN, HSGML, HFLN, MGLN)</td>
                                                        <td>4.00%</td>
                                                        <td>12%</td>
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
                                                    <!-- Additional rows as needed -->
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            

        </div> 
    </div> 
</div> 
@endsection

@section('script')


<script src="{{ URL::asset('admin_panel\controller_js\cn_interest_rate.js')}}"></script>





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