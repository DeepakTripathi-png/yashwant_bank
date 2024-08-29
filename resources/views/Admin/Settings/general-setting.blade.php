@extends('Admin.Layouts.layout')
@section('content')
<div class="content-page">
    <div class="content">
        <!-- Start Content-->
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="mb-2 justify-content-between d-flex align-items-center">
                        <h4 class="header-title ">Header Settings</h4>
                    </div>
                </div>


                <div class="col-6">
                    <div class="card department-card">
                        <div class="card-body">
                            <div class="mb-3 justify-content-between d-flex align-items-center">
                                <h4 class="header-title ">Top Slider</h4>
                            </div>
                            <form action="{{route('top.slider.store')}}" method="post" id="general_settings_contact_form" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="id" value="{{!empty($slider->id)?$slider->id:''}}">
                          
                     
                                <div class="row">
                                    <div class="mb-2 col-12">
                                        <label for="slider_text_en" class="form-label">Slider Text English</label>
                                        <input type="text" class="form-control" name="slider_text_en" id="slider_text_en" placeholder="Top Slider Content In English" value="{{!empty($slider->slider_text_en) ? $slider->slider_text_en : ''}}">
                                        @if($errors->has('slider_text_en'))
                                        <span class="text-danger"><b>*</b> {{$errors->first('slider_text_en')}}</span>
                                        @endif
                                    </div>
                                </div>


                                <div class="row">

                                    <div class="mb-2 col-12">
                                        <label for="slider_text_mr" class="form-label">Slider Text Marathi</label>
                                        <input type="text" class="form-control" name="slider_text_mr" id="slider_text_mr" placeholder="Top Slider Content In Marathi" value="{{!empty($slider->slider_text_mr) ? $slider->slider_text_mr : ''}}">
                                        @if($errors->has('slider_text_mr'))
                                        <span class="text-danger"><b>*</b> {{$errors->first('slider_text_mr')}}</span>
                                        @endif
                                    </div>
                                </div>


                                <button type="submit" name="contact_settings" id="submit_btn" class="btn btn-success"> {{ !empty($slider) ? 'Update' : 'Submit' }} </button>
                                @if(empty($slider)) <button type="reset" class="btn btn-danger"> Cancel </button> @endif

                            </form>

                            
                        <div class="card-body table-responsive department-card">
                            <table id="cims_data_table" class="table table-bordered dt-responsive w-100">
                                <thead class="table-light">
                                    <tr role="row">
                                        <th width="10%">Sr. No.</th>
                                        <th width="35%">Slider Text(English)</th>
                                        <th width="35%">Slider Text (Marathi)</th>
                               
                                        <th width="15%">Status</th>
                                        <th width="15%">Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    {{-- <tr>
                                        <td>1</td>
                                        <td>About Us</td>
                                        <td>English</td>
                                        <td>Marathi</td>
                                       
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

                               
                                    
                                </tbody>
                            </table>
                            

                        </div>
                        </div>
                    </div>


                 
                    
                </div>


                <div class="col-6">
                    <div class="card department-card">
                        <div class="card-body">
                            <div class="mb-3 justify-content-between d-flex align-items-center">
                                <h4 class="header-title ">Add Social Media Details</h4>
                            </div>
                            <form action="{{route('geraral.settings.store')}}" method="post" id="general_settings_contact_form" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="id" value="{{!empty($general_settings->id)?$general_settings->id:''}}">
                                <div class="row">
                                    <div class="mb-2 col-12">
                                        <label for="facebook_url" class="form-label">Facebook Url</label>
                                        <input type="text" class="form-control" name="facebook_url" id="facebook_url" placeholder="Facebook URL" value="{{!empty($general_settings->facebook_url) ? $general_settings->facebook_url : ''}}">
                                        @if($errors->has('facebook_url'))
                                        <span class="text-danger"><b>*</b> {{$errors->first('facebook_url')}}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-2 col-12">
                                        <label for="linkedin_url" class="form-label">LinkedIn Url</label>
                                        <input type="text" class="form-control" name="linkedin_url" id="linkedin_url" placeholder="LinkedIn URL" value="{{!empty($general_settings->linkedin_url) ? $general_settings->linkedin_url : ''}}">
                                        @if($errors->has('linkedin_url'))
                                        <span class="text-danger"><b>*</b> {{$errors->first('linkedin_url')}}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-2 col-12">
                                        <label for="instagram_url" class="form-label">Instagram Url</label>
                                        <input type="text" class="form-control" name="instagram_url" id="instagram_url" placeholder="Instagram URL" value="{{!empty($general_settings->instagram_url) ? $general_settings->instagram_url : ''}}">
                                        @if($errors->has('instagram_url'))
                                        <span class="text-danger"><b>*</b> {{$errors->first('instagram_url')}}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-2 col-12">
                                        <label for="twitter_url" class="form-label">Twitter Url</label>
                                        <input type="text" class="form-control" name="twitter_url" id="twitter_url" placeholder="Twitter URL" value="{{!empty($general_settings->twitter_url) ? $general_settings->twitter_url : ''}}">
                                        @if($errors->has('twitter_url'))
                                        <span class="text-danger"><b>*</b> {{$errors->first('twitter_url')}}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="mb-2 col-12">
                                        <label for="working_days" class="form-label">Working Days</label>
                                        <input type="text" class="form-control" name="working_days" id="working_days" placeholder="working Days" value="{{!empty($general_settings->working_days) ? $general_settings->working_days : ''}}">
                                        @if($errors->has('working_days'))
                                        <span class="text-danger"><b>*</b> {{$errors->first('working_days')}}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="mb-2 col-12">
                                        <label for="header_email" class="form-label">Header Email</label>
                                        <input type="text" class="form-control" name="header_email" id="header_email" placeholder="Header Email" value="{{!empty($general_settings->header_email) ? $general_settings->header_email : ''}}">
                                        @if($errors->has('header_email'))
                                        <span class="text-danger"><b>*</b> {{$errors->first('header_email')}}</span>
                                        @endif
                                    </div>
                                </div>

                                <button type="submit" name="social_media_settings" id="submit_btn" class="btn btn-success"> {{ !empty($general_settings) ? 'Update' : 'Submit' }} </button>
                                @if(empty($general_settings)) <button type="reset" class="btn btn-danger"> Cancel </button> @endif
                            </form>
                        </div>
                    </div> <!-- end card-body -->
                </div>
            </div> <!-- container-fluid -->
        </div>
    </div>
    @endsection

    

    @section('script')
   <script src="{{ URL::asset('admin_panel\controller_js\cn_general_settings.js')}}"></script>


    <script>
        $(".setting").addClass("menuitem-active");
        $(".general-setting").addClass("menuitem-active");
    </script>
    @endsection