@section('meta_title') Home | Yeshwant Bank @endsection
@extends('Admin.Layouts.layout')
@section('css')

<div class="content-page">
    <div class="content">

        <div class="container-fluid">

            <!-- Home Banner -->
            <div class="row">
                <div class="mb-2 justify-content-between d-flex align-items-center">
                    <h4 class="mt-0 header-title">Home Banner</h4>
                </div>
                <div class="col-4">
                    <div class="card department-card">
                        <div class="card-body">
                            <form action="#" method="post" id="add-banner-form" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" class="form-control" id="id" name="id" value="{{ !empty($Home_banner) ? $Home_banner->id : '' }}">

                                <!-- Heading -->
                                <div class="mb-3">
                                    <label for="ban_heading" class="form-label">Heading <span class="red">*</span></label>
                                    <input type="text" class="form-control" id="ban_heading" name="ban_heading" value="{{ !empty($Home_banner) ? $Home_banner->ban_heading : '' }}">
                                    @if($errors->has('ban_heading'))
                                    <span class="text-danger"><b>* {{$errors->first('ban_heading')}}</b></span>
                                    @endif
                                </div>

                                <!-- Sub Heading -->
                                <div class="mb-3">
                                    <label for="ban_sub_heading" class="form-label">Sub Heading</label>
                                    <input type="text" class="form-control" id="ban_sub_heading" name="ban_sub_heading" value="{{ !empty($Home_banner) ? $Home_banner->ban_sub_heading :  ''}}">
                                    @if($errors->has('ban_sub_heading'))
                                    <span class="text-danger"><b>* {{$errors->first('ban_sub_heading')}}</b></span>
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
                                            <input type="file" name="ban_image_path" id="ban_image_path"  class="dropify" data-plugins="dropify" data-default-file="{{!empty($Home_banner->ban_image_path) ? url('/').Storage::url($Home_banner->ban_image_path) : ''}}" />
    
                                        </div>
                                    </div>
                                </div>

                                <!-- Button Name -->
                                <div class="mb-3">
                                    <label for="button1_name" class="form-label">Button Name</label>
                                    <input type="text" class="form-control" id="button1_name" name="button1_name" value="{{ !empty($Home_banner) ? $Home_banner->button1_name : old('button1_name') }}">
                                    @if($errors->has('button1_name'))
                                    <span class="text-danger"><b>* {{$errors->first('button1_name')}}</b></span>
                                    @endif
                                </div>

                                <!-- Link -->
                                <div class="mb-3">
                                    <label for="button1_url" class="form-label">Link</label>
                                    <input type="text" class="form-control" id="button1_url" name="button1_url" value="{{ !empty($Home_banner) ? $Home_banner->button1_url : old('button1_url') }}">
                                    @if($errors->has('button1_url'))
                                    <span class="text-danger"><b>* {{$errors->first('button1_url')}}</b></span>
                                    @endif
                                </div>
                                <button class="btn btn-success" name="banner_section" type="submit"> {{ !empty($Home_banner) ? 'Update' : 'Submit' }} </button>
                                {{-- @if(empty($Home_banner)) <button type="reset" class="btn btn-danger"> Cancel </button> @endif --}}
                                @if (empty($Home_banner))
                                {{-- <a href="{{url('/admin/home')}}"><button type="button" class="btn btn-danger" ><i
                                        class="fa fa-times-circle"></i> Cancel </button></a> --}}
                                      <button  type="reset" class="btn btn-danger reset-button" >Cancel </button>
                                        @endif
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-8">
                    <div class="card">
                        <div class="card-body table-responsive department-card">
                            <table id="cims_data_table" class="table table-bordered table-bordered dt-responsiv w-100 ">
                                <thead class="table-light">
                                    <tr role="row">
                                        <th width="10%">Sr. No.</th>
                                        <th width="35%">Heading</th>
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
            <!-- Welcome section -->
            <div class="card department-card">
                <div class="card-body">
                    <form action="#" method="post" id="add-sec-1-form" enctype="multipart/form-data">
                        @csrf
                        {{-- <input type="hidden" class="form-control" id="id" name="id" value="{{ !empty($Home) ? $Home->id : '' }}"> --}}
                        <input type="hidden" class="form-control" id="id" name="id" value="{{ !empty($Home) ? $Home->id : '' }}">
                        <div class="row">
                            <div class="mb-2 justify-content-between d-flex align-items-center">
                                <h4 class="mt-0 header-title">Welcome Section</h4>
                            </div>
                            <div class="col-8">
                                <!-- Heading -->
                                <div class="mb-3">
                                    <label for="sec_1_heading" class="form-label">Heading <span class="red">*</span></label>
                                    <input type="text" class="form-control" id="sec_1_heading" name="sec_1_heading" value="{{ !empty($Home) ? $Home->sec_1_heading : '' }}">
                                    @if($errors->has('sec_1_heading'))
                                    <span class="text-danger"><b>* {{$errors->first('sec_1_heading')}}</b></span>
                                    @endif
                                </div>

                                <!-- Sub Heading -->
                                <div class="mb-3">
                                    <label for="sec_1_sub_heading" class="form-label">Sub Heading <span class="red">*</span></label>
                                    <input type="text" class="form-control" id="sec_1_sub_heading" name="sec_1_sub_heading" value="{{ !empty($Home) ? $Home->sec_1_sub_heading : '' }}">
                                    @if($errors->has('sec_1_sub_heading'))
                                    <span class="text-danger"><b>* {{$errors->first('sec_1_sub_heading')}}</b></span>
                                    @endif
                                </div>

                                <!-- sec_1_description -->
                                <div class="mb-3 sec_1_description">
                                    <label for="description" class="form-label">Description <span class="red"><b>*</b></span></label>
                                    <textarea name="sec_1_description" id="sec_1_description" cols="30" rows="10">{{ !empty($Home->sec_1_description) ? $Home->sec_1_description : old('sec_1_description') }}</textarea>
                                    @if ($errors->has('sec_1_description'))
                                    <span class="text-danger error-message"><b>*</b>
                                        {{ $errors->first('sec_1_description') }}</span>
                                    @endif
                                </div>

                            </div>
                            <div class="col-4">

                                <div class="upload_img mb-3">
                                    <div class="upload_photo">
                                        <label>Upload Video Thumbnail <span class="red">*</span></label>
                                        <div id="respon" style="color:red"></div>
                                    </div>
                                    <div class="photo img-upload profile sec_1_video_path">
                                        <input type="file" name="sec_1_video_path" id="sec_1_video_path" class="dropify" data-plugins="dropify" data-show-remove="false" data-default-file="{{!empty($Home->sec_1_video_path) ? url('/').Storage::url($Home->sec_1_video_path) : ''}}" />
                                        @if($errors->has('sec_1_video_path'))
                                        <span class="text-danger"><b>* {{$errors->first('sec_1_video_path')}}</b></span>
                                        @endif
                                    </div>
                                </div>

                                <!-- Video URL -->
                                <div class="mb-3">
                                    <label for="sec_1_video_url" class="form-label">Video URL <span class="red">*</span></label>
                                    <input type="text" class="form-control" id="sec_1_video_url" name="sec_1_video_url" value="{{ !empty($Home) ? $Home->sec_1_video_url : old('sec_1_video_url') }}">
                                    @if($errors->has('sec_1_video_url'))
                                    <span class="text-danger"><b>* {{$errors->first('sec_1_video_url')}}</b></span>
                                    @endif
                                </div>

                            </div>
                            <!-- sumbit button -->
                            <div class="mt-3">
                                <button class="btn btn-success" type="submit" name="home_section_1"> {{ empty($Home) ? 'Submit' : 'Update' }} </button>
                                @if(empty($Home)) <button type="reset" class="btn btn-danger"> Cancel </button> @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <!-- What We Do section -->
            <div class="card department-card">
                <div class="card-body">
                    <form action="#" method="post" id="add-sec-2-form" enctype="multipart/form-data">
                        @csrf

                        <input type="hidden" class="form-control" id="id" name="id" value="{{ !empty($Home) ? $Home->id : '' }}">
                        <div class="row">
                            <div class="mb-2 justify-content-between d-flex align-items-center">
                                <h4 class="mt-0 header-title">What We Do Section</h4>
                                <!-- <a href="{{ url('admin/roles-privileges/add') }}" class="btn btn-success waves-effect waves-light add-btn"><span class="btn-label"> <i class="fas fa-plus "></i></span>Add</a> -->
                            </div>
                            <div class="col-8">

                                <!-- Heading -->
                                <div class="mb-3">
                                    <label for="sec_2_heading" class="form-label">Heading <span class="red">*</span></label>
                                    <input type="text" class="form-control" id="sec_2_heading" name="sec_2_heading" value="{{ !empty($Home) ? $Home->sec_2_heading : '' }}">
                                    @if($errors->has('sec_2_heading'))
                                    <span class="text-danger"><b>* {{$errors->first('sec_2_heading')}}</b></span>
                                    @endif
                                </div>


                                <!-- Sub Heading -->
                                <div class="mb-3">
                                    <label for="sec_2_sub_heading" class="form-label">Sub Heading <span class="red">*</span></label>
                                    <input type="text" class="form-control" id="sec_2_sub_heading" name="sec_2_sub_heading" value="{{ !empty($Home) ? $Home->sec_2_sub_heading : '' }}">
                                    @if($errors->has('sec_2_sub_heading'))
                                    <span class="text-danger"><b>* {{$errors->first('sec_2_sub_heading')}}</b></span>
                                    @endif
                                </div>

                                <!-- sec_2_description -->
                                <div class="mb-3 sec_2_description">
                                    <label for="description" class="form-label">Description <span class="text-danger"><b>* </b></span></label>
                                    <textarea name="sec_2_description" id="sec_2_description" cols="30" rows="10">{{ !empty($Home->sec_2_description) ? $Home->sec_2_description : '' }}</textarea>
                                    @if ($errors->has('sec_2_description'))
                                    <span class="text-danger error-message"><b>*</b>
                                        {{ $errors->first('sec_2_description') }}</span>
                                    @endif
                                </div>

                            </div>
                            <div class="col-4">

                                <!-- Upload Image -->
                                <div class="upload_img mb-3">
                                    <div class="upload_photo">
                                        <label>Upload Image <span class="red">*</span></label>
                                        <div id="respon" style="color:red"></div>
                                    </div>
                                    <div class="photo img-upload profile sec_2_image_path">
                                        <input type="file" name="sec_2_image_path" id="sec_2_image_path" class="dropify" data-plugins="dropify" data-show-remove="false" data-default-file="{{!empty($Home->sec_2_image_path) ? url('/').Storage::url($Home->sec_2_image_path) : ''}}" />
                                    </div>
                                </div>

                                <!-- {{-- <div class="mb-3">
                                        <input type="file" data-plugins="dropify" name="user_profile_image_path" size="40" accept="image/*" data-default-file="{{ !empty($Home->user_profile_image_path) && Storage::exists($Home->user_profile_image_path) ? url('/').Storage::url($Home->user_profile_image_path) : '' }}" />
                                <p class="text-center mt-2 mb-0"> Upload Image </p>
                                @if($errors->has('user_profile_image_path'))
                                <span class="text-danger"><b>*</b> {{$errors->first('user_profile_image_path')}}</span>
                                @endif
                                </div> --}} -->

                            </div>

                        </div>
                        <div class="row mt-3">

                            <!-- Box 1 -->
                            <div class="col-3">
                                <h4>Box 1</h4>
                                <!-- Heading -->
                                <div class="mb-3">
                                    <label for="box_1_heading" class="form-label">Heading <span class="red">*</span></label>
                                    <input type="text" class="form-control" id="box_1_heading" name="box_1_heading" value="{{ !empty($Home) ? $Home->box_1_heading : '' }}">
                                    @if($errors->has('box_1_heading'))
                                    <span class="text-danger"><b>* {{$errors->first('box_1_heading')}}</b></span>
                                    @endif
                                </div>
                                <!-- Description -->
                                <div class="mb-3 col-12">
                                    <label for="box_1_description" class="form-label">Description <span class="red">*</span></label>
                                    <textarea type="text" class="form-control" rows="4" id="box_1_description" name="box_1_description">{{ !empty($Home) ? $Home->box_1_description : '' }}</textarea>
                                    @if($errors->has('box_1_description'))
                                    <span class="text-danger"><b>* {{$errors->first('box_1_description')}}</b></span>
                                    @endif
                                </div>

                                <!-- Upload Icon -->
                                <div class="upload_img mb-3">
                                    <div class="upload_photo">
                                        <label>Upload Icon <span class="red">*</span></label>
                                        <div id="respon" style="color:red"></div>
                                    </div>
                                    <div class="photo img-upload profile box_1_image_path">
                                        <input type="file" name="box_1_image_path" id="box_1_image_path" class="dropify" data-plugins="dropify" data-show-remove="false" data-default-file="{{!empty($Home->box_1_image_path) ? url('/').Storage::url($Home->box_1_image_path) : ''}}" />
                                    </div>
                                </div>

                                <!-- {{-- <div class="mb-3">
                                                <input type="file" data-plugins="dropify" name="user_profile_image_path" size="40" accept="image/*" data-default-file="{{ !empty($Home->user_profile_image_path) && Storage::exists($Home->user_profile_image_path) ? url('/').Storage::url($Home->user_profile_image_path) : '' }}" />
                                <p class="text-center mt-2 mb-0"> Upload Icon </p>
                                @if($errors->has('user_profile_image_path'))
                                <span class="text-danger"><b>*</b> {{$errors->first('user_profile_image_path')}}</span>
                                @endif
                                </div> --}} -->

                            </div>

                            <!-- Box 2 -->
                            <div class="col-3">
                                <h4>Box 2</h4>
                                <!-- Heading -->
                                <div class="mb-3">
                                    <label for="box_2_heading" class="form-label">Heading <span class="red">*</span></label>
                                    <input type="text" class="form-control" id="box_2_heading" name="box_2_heading" value="{{ !empty($Home) ? $Home->box_2_heading : '' }}">
                                    @if($errors->has('box_2_heading'))
                                    <span class="text-danger"><b>* {{$errors->first('box_2_heading')}}</b></span>
                                    @endif
                                </div>
                                <!-- Description -->
                                <div class="mb-3 col-12">
                                    <label for="box_2_description" class="form-label">Description <span class="red">*</span></label>
                                    <textarea type="text" class="form-control" rows="4" id="box_2_description" name="box_2_description">{{ !empty($Home) ? $Home->box_2_description : '' }}</textarea>
                                    @if($errors->has('box_2_description'))
                                    <span class="text-danger"><b>* {{$errors->first('box_2_description')}}</b></span>
                                    @endif
                                </div>
                                <!-- Upload Icon -->
                                <div class="upload_img mb-3">
                                    <div class="upload_photo">
                                        <label>Upload Icon <span class="red">*</span></label>
                                        <div id="respon" style="color:red"></div>
                                    </div>
                                    <div class="photo img-upload profile box_2_image_path">
                                        <input type="file" name="box_2_image_path" id="box_2_image_path" class="dropify" data-plugins="dropify" data-show-remove="false" data-default-file="{{!empty($Home->box_2_image_path) ? url('/').Storage::url($Home->box_2_image_path) : ''}}" />
                                    </div>
                                </div>

                            </div>

                            <!-- Box 3 -->
                            <div class="col-3">
                                <h4>Box 3</h4>
                                <!-- Heading -->
                                <div class="mb-3">
                                    <label for="box_3_heading" class="form-label">Heading <span class="red">*</span></label>
                                    <input type="text" class="form-control" id="box_3_heading" name="box_3_heading" value="{{ !empty($Home) ? $Home->box_3_heading : '' }}">
                                    @if($errors->has('box_3_heading'))
                                    <span class="text-danger"><b>* {{$errors->first('box_3_heading')}}</b></span>
                                    @endif
                                </div>
                                <!-- Description -->
                                <div class="mb-3 col-12">
                                    <label for="box_3_description" class="form-label">Description <span class="red">*</span></label>
                                    <textarea type="text" class="form-control" rows="4" id="box_3_description" name="box_3_description">{{ !empty($Home) ? $Home->box_3_description : '' }}</textarea>
                                    @if($errors->has('box_3_description'))
                                    <span class="text-danger"><b>* {{$errors->first('box_3_description')}}</b></span>
                                    @endif
                                </div>
                                <!-- Upload Icon -->
                                <div class="upload_img mb-3">
                                    <div class="upload_photo">
                                        <label>Upload Icon <span class="red">*</span></label>
                                        <div id="respon" style="color:red"></div>
                                    </div>
                                    <div class="photo img-upload profile box_3_image_path">
                                        <input type="file" name="box_3_image_path" id="box_3_image_path" class="dropify" data-plugins="dropify" data-show-remove="false" data-default-file="{{!empty($Home->box_3_image_path) ? url('/').Storage::url($Home->box_3_image_path) : ''}}" />
                                    </div>
                                </div>

                            </div>

                            <!-- Box 4 -->
                            <div class="col-3">
                                <h4>Box 4</h4>
                                <!-- Heading -->
                                <div class="mb-3">
                                    <label for="box_4_heading" class="form-label">Heading <span class="red">*</span></label>
                                    <input type="text" class="form-control" id="box_4_heading" name="box_4_heading" value="{{ !empty($Home) ? $Home->box_4_heading : '' }}">
                                    @if($errors->has('box_4_heading'))
                                    <span class="text-danger"><b>* {{$errors->first('box_4_heading')}}</b></span>
                                    @endif
                                </div>
                                <!-- Description -->
                                <div class="mb-3 col-12">
                                    <label for="box_4_description" class="form-label">Description <span class="red">*</span></label>
                                    <textarea type="text" class="form-control" rows="4" id="box_4_description" name="box_4_description" value="">{{ !empty($Home) ? $Home->box_4_description : '' }}</textarea>
                                    @if($errors->has('box_4_description'))
                                    <span class="text-danger"><b>* {{$errors->first('box_4_description')}}</b></span>
                                    @endif
                                </div>
                                <!-- BUpload Icon -->
                                <div class="upload_img mb-3">
                                    <div class="upload_photo">
                                        <label>Upload Icon <span class="red">*</span></label>
                                        <div id="respon" style="color:red"></div>
                                    </div>
                                    <div class="photo img-upload profile box_4_image_path">
                                        <input type="file" name="box_4_image_path" id="box_4_image_path" class="dropify" data-plugins="dropify" data-show-remove="false" data-default-file="{{!empty($Home->box_4_image_path) ? url('/').Storage::url($Home->box_4_image_path) : ''}}" />
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- submit button -->
                        <div class="mt-3">
                            <button class="btn btn-success" type="submit" name="home_section_2"> {{ empty($Home) ? 'Submit' : 'Update' }} </button>
                            @if(empty($Home)) <button type="reset" class="btn btn-danger"> Cancel </button> @endif
                        </div>
                    </form>
                </div>
            </div>

            <!-- Courses section -->
            <div class="card department-card">
                <div class="card-body">
                    <form action="#" method="post" id="add-sec-3-form" enctype="multipart/form-data">
                        @csrf

                        <input type="hidden" class="form-control" id="id" name="id" value="{{ !empty($Home) ? $Home->id : '' }}">
                        <div class="row">
                            <div class="mb-2 justify-content-between d-flex align-items-center">
                                <h4 class="mt-0 header-title">Courses Section</h4>
                                <!-- <a href="{{ url('admin/roles-privileges/add') }}" class="btn btn-success waves-effect waves-light add-btn"><span class="btn-label"> <i class="fas fa-plus "></i></span>Add</a> -->
                            </div>
                            <div class="col-12">

                                <!-- Heading -->
                                <div class="mb-3">
                                    <label for="sec_3_heading" class="form-label">Heading <span class="red">*</span></label>
                                    <input type="text" class="form-control" id="sec_3_heading" name="sec_3_heading" value="{{ !empty($Home) ? $Home->sec_3_heading : '' }}">
                                    @if($errors->has('sec_3_heading'))
                                    <span class="text-danger"><b>* {{$errors->first('sec_3_heading')}}</b></span>
                                    @endif
                                </div>


                                <!-- Sub Heading -->
                                <div class="mb-3">
                                    <label for="sec_3_sub_heading" class="form-label">Sub Heading <span class="red">*</span></label>
                                    <input type="text" class="form-control" id="sec_3_sub_heading" name="sec_3_sub_heading" value="{{ !empty($Home) ? $Home->sec_3_sub_heading : '' }}">
                                    @if($errors->has('sec_3_sub_heading'))
                                    <span class="text-danger"><b>* {{$errors->first('sec_3_sub_heading')}}</b></span>
                                    @endif
                                </div>

                                <!-- sec_3_description -->
                                <div class="mb-3 sec_3_description">
                                    <label for="description" class="form-label">Description <span class="text-danger"><b>* </b></span></label>
                                    <textarea name="sec_3_description" id="sec_3_description" cols="30" rows="10">{{ !empty($Home->sec_3_description) ? $Home->sec_3_description : '' }}</textarea>
                                    @if ($errors->has('sec_3_description'))
                                    <span class="text-danger error-message"><b>*</b>
                                        {{ $errors->first('sec_3_description') }}</span>
                                    @endif
                                </div>

                                <!-- submit button -->
                                <div class="mt-3">
                                    <button class="btn btn-success" type="submit" name="home_section_3"> {{ empty($Home) ? 'Submit' : 'Update' }} </button>
                                    @if(empty($Home)) <button type="reset" class="btn btn-danger"> Cancel </button> @endif
                                </div>
                            </div>

                        </div>
                    </form>
                </div>
            </div>

            <!-- Teachers section -->
            <div class="card department-card">
                <div class="card-body">
                    <form action="#" method="post" id="add-sec-4-form" enctype="multipart/form-data">
                        @csrf

                        <input type="hidden" class="form-control" id="id" name="id" value="{{ !empty($Home) ? $Home->id : '' }}">
                        <div class="row">
                            <div class="mb-2 justify-content-between d-flex align-items-center">
                                <h4 class="mt-0 header-title">Teachers Section</h4>
                                <!-- <a href="{{ url('admin/roles-privileges/add') }}" class="btn btn-success waves-effect waves-light add-btn"><span class="btn-label"> <i class="fas fa-plus "></i></span>Add</a> -->
                            </div>
                            <div class="col-12">

                                <!-- Heading -->
                                <div class="mb-3">
                                    <label for="sec_4_heading" class="form-label">Heading <span class="red">*</span></label>
                                    <input type="text" class="form-control" id="sec_4_heading" name="sec_4_heading" value="{{ !empty($Home) ? $Home->sec_4_heading : '' }}">
                                    @if($errors->has('sec_4_heading'))
                                    <span class="text-danger"><b>* {{$errors->first('sec_4_heading')}}</b></span>
                                    @endif
                                </div>


                                <!-- sec_4_description -->
                                <div class="mb-3 sec_4_description">
                                    <label for="description" class="form-label"> Description <span class="text-danger"><b>* </b></span></label>
                                    <textarea name="sec_4_description" id="sec_4_description" cols="30" rows="10">{{ !empty($Home->sec_4_description) ? $Home->sec_4_description : '' }}</textarea>
                                    @if ($errors->has('sec_4_description'))
                                    <span class="text-danger error-message"><b>*</b>
                                        {{ $errors->first('sec_4_description') }}</span>
                                    @endif
                                </div>

                                <!-- submit button -->
                                <div class="mt-3">
                                    <button class="btn btn-success" type="submit" name="home_section_4"> {{ empty($Home) ? 'Submit' : 'Update' }} </button>
                                    @if(empty($Home)) <button type="reset" class="btn btn-danger"> Cancel </button> @endif
                                </div>
                            </div>

                        </div>
                    </form>
                </div>
            </div>

            <!-- Testimonial section -->
            <div class="card department-card">
                <div class="card-body">
                    <form action="#" method="post" id="add-sec-5-form" enctype="multipart/form-data">
                        @csrf

                        <input type="hidden" class="form-control" id="id" name="id" value="{{ !empty($Home) ? $Home->id : '' }}">
                        <div class="row">
                            <div class="mb-2 justify-content-between d-flex align-items-center">
                                <h4 class="mt-0 header-title">Testimonial Section</h4>

                            </div>
                            <div class="col-12">

                                <!-- Heading -->
                                <div class="mb-3">
                                    <label for="sec_5_heading" class="form-label">Heading <span class="red">*</span></label>
                                    <input type="text" class="form-control" id="sec_5_heading" name="sec_5_heading" value="{{ !empty($Home) ? $Home->sec_5_heading : '' }}">
                                    @if($errors->has('sec_5_heading'))
                                    <span class="text-danger"><b>* {{$errors->first('sec_5_heading')}}</b></span>
                                    @endif
                                </div>


                                <!-- Sub Heading -->
                                <div class="mb-3">
                                    <label for="sec_5_sub_heading" class="form-label">Sub Heading <span class="red">*</span></label>
                                    <input type="text" class="form-control" id="sec_5_sub_heading" name="sec_5_sub_heading" value="{{ !empty($Home) ? $Home->sec_5_sub_heading : old('sec_5_sub_heading') }}">
                                    @if($errors->has('sec_5_sub_heading'))
                                    <span class="text-danger"><b>* {{$errors->first('sec_5_sub_heading')}}</b></span>
                                    @endif
                                </div>

                                <!-- sec_3_description -->
                                <div class="mb-3 sec_5_description">
                                    <label for="description" class="form-label"> Description <span class="text-danger"><b>* </b></span></label>
                                    <textarea name="sec_5_description" id="sec_5_description" cols="30" rows="10">{{ !empty($Home->sec_5_description) ? $Home->sec_5_description : '' }}</textarea>
                                    @if ($errors->has('sec_5_description'))
                                    <span class="text-danger error-message"><b>*</b>
                                        {{ $errors->first('sec_5_description') }}</span>
                                    @endif
                                </div>

                                <!-- submit button -->
                                <div class="mt-3">
                                    <button class="btn btn-success" type="submit" name="home_section_5"> {{ empty($Home) ? 'Submit' : 'Update' }} </button>
                                    @if(empty($Home)) <button type="reset" class="btn btn-danger"> Cancel </button> @endif
                                </div>
                            </div>

                        </div>
                    </form>
                </div>
            </div>

            <!-- Blogs section -->
            <div class="card department-card">
                <div class="card-body">
                    <form action="#" method="post" id="add-sec-6-form" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" class="form-control" id="id" name="id" value="{{ !empty($Home) ? $Home->id : '' }}">
                        <div class="row">
                            <div class="mb-2 justify-content-between d-flex align-items-center">
                                <h4 class="mt-0 header-title">Blogs Section</h4>

                            </div>
                            <div class="col-12">

                                <!-- Heading -->
                                <div class="mb-3">
                                    <label for="name" class="form-label">Heading <span class="red">*</span></label>
                                    <input type="text" class="form-control" id="sec_6_heading" name="sec_6_heading" value="{{ !empty($Home) ? $Home->sec_6_heading : '' }}">
                                    @if($errors->has('sec_6_heading'))
                                    <span class="text-danger"><b>* {{$errors->first('sec_6_heading')}}</b></span>
                                    @endif
                                </div>


                                <!-- sec_3_description -->
                                <div class="mb-3 sec_6_description">
                                    <label for="description" class="form-label"> Description <span class="text-danger"><b>* </b></span></label>
                                    <textarea name="sec_6_description" id="sec_6_description" cols="30" rows="10">{{ !empty($Home->sec_6_description) ? $Home->sec_6_description : '' }}</textarea>
                                    @if ($errors->has('sec_6_description'))
                                    <span class="text-danger error-message"><b>*</b>
                                        {{ $errors->first('sec_6_description') }}</span>
                                    @endif
                                </div>

                                <!-- submit button -->
                                <div class="mt-3">
                                    <button class="btn btn-success" type="submit" name="home_section_6"> {{ empty($Home) ? 'Submit' : 'Update' }} </button>
                                    @if(empty($Home)) <button type="reset" class="btn btn-danger"> Cancel </button> @endif
                                </div>
                            </div>

                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
    @endsection

    @section('script')
    <script>
        $(".cms").addClass("menuitem-active");
        $(".home-cms").addClass("menuitem-active");
    </script>

    <script src="{{ URL::asset('admin_panel/controller_js/cn_home_banner.js')}}"></script>

    <script>
        $(document).ready(function() {

            $('#sec_1_description').summernote({
                placeholder: 'Enter content here',
                height: 170,


                toolbar: [
        ['style', ['style']],
        ['style', ['bold', 'italic', 'underline', 'clear']],
        ['color', ['color']],
        ['fontname', ['fontname']], 
        ['para', ['ul', 'ol', 'paragraph']],
        ['height', ['height']],
        ['insert', ['link']],
        // ['view', ['fullscreen', 'codeview']]
        ['view', ['codeview']]
    ],
    fontNames: [
        'Arial',
        'Arial Black',
        'Comic Sans MS',
        'Courier New',
        'Georgia',
        'Impact',
        'Lucida Console',
        'Tahoma',
        'Times New Roman',
        'Verdana'
    ], 
    fontNamesIgnoreCheck: ['Arial', 'Impact'] 

            });
            $('#sec_2_description').summernote({
                placeholder: 'Enter content here',
                height: 170,

                toolbar: [
        ['style', ['style']],
        ['style', ['bold', 'italic', 'underline', 'clear']],
        ['color', ['color']],
        ['fontname', ['fontname']], 
        ['para', ['ul', 'ol', 'paragraph']],
        ['height', ['height']],
        ['insert', ['link']],
        // ['view', ['fullscreen', 'codeview']]
        ['view', ['codeview']]
    ],
    fontNames: [
        'Arial',
        'Arial Black',
        'Comic Sans MS',
        'Courier New',
        'Georgia',
        'Impact',
        'Lucida Console',
        'Tahoma',
        'Times New Roman',
        'Verdana'
    ], 
    fontNamesIgnoreCheck: ['Arial', 'Impact'] 

            });
            $('#sec_3_description').summernote({
                placeholder: 'Enter content here',
                height: 170,

                toolbar: [
        ['style', ['style']],
        ['style', ['bold', 'italic', 'underline', 'clear']],
        ['color', ['color']],
        ['fontname', ['fontname']], 
        ['para', ['ul', 'ol', 'paragraph']],
        ['height', ['height']],
        ['insert', ['link']],
        // ['view', ['fullscreen', 'codeview']]
        ['view', ['codeview']]
    ],
    fontNames: [
        'Arial',
        'Arial Black',
        'Comic Sans MS',
        'Courier New',
        'Georgia',
        'Impact',
        'Lucida Console',
        'Tahoma',
        'Times New Roman',
        'Verdana'
    ], 
    fontNamesIgnoreCheck: ['Arial', 'Impact'] 

            });
            $('#sec_4_description').summernote({
                placeholder: 'Enter content here',
                height: 170,

                toolbar: [
        ['style', ['style']],
        ['style', ['bold', 'italic', 'underline', 'clear']],
        ['color', ['color']],
        ['fontname', ['fontname']], 
        ['para', ['ul', 'ol', 'paragraph']],
        ['height', ['height']],
        ['insert', ['link']],
        // ['view', ['fullscreen', 'codeview']]
        ['view', ['codeview']]
    ],
    fontNames: [
        'Arial',
        'Arial Black',
        'Comic Sans MS',
        'Courier New',
        'Georgia',
        'Impact',
        'Lucida Console',
        'Tahoma',
        'Times New Roman',
        'Verdana'
    ], 
    fontNamesIgnoreCheck: ['Arial', 'Impact'] 
            });
            $('#sec_5_description').summernote({
                placeholder: 'Enter content here',
                height: 170,

                toolbar: [
        ['style', ['style']],
        ['style', ['bold', 'italic', 'underline', 'clear']],
        ['color', ['color']],
        ['fontname', ['fontname']], 
        ['para', ['ul', 'ol', 'paragraph']],
        ['height', ['height']],
        ['insert', ['link']],
        // ['view', ['fullscreen', 'codeview']]
        ['view', ['codeview']]
    ],
    fontNames: [
        'Arial',
        'Arial Black',
        'Comic Sans MS',
        'Courier New',
        'Georgia',
        'Impact',
        'Lucida Console',
        'Tahoma',
        'Times New Roman',
        'Verdana'
    ], 
    fontNamesIgnoreCheck: ['Arial', 'Impact'] 
            });
            $('#sec_6_description').summernote({
                placeholder: 'Enter content here',
                height: 170,

                toolbar: [
        ['style', ['style']],
        ['style', ['bold', 'italic', 'underline', 'clear']],
        ['color', ['color']],
        ['fontname', ['fontname']], 
        ['para', ['ul', 'ol', 'paragraph']],
        ['height', ['height']],
        ['insert', ['link']],
        // ['view', ['fullscreen', 'codeview']]
        ['view', ['codeview']]
    ],
    fontNames: [
        'Arial',
        'Arial Black',
        'Comic Sans MS',
        'Courier New',
        'Georgia',
        'Impact',
        'Lucida Console',
        'Tahoma',
        'Times New Roman',
        'Verdana'
    ], 
    fontNamesIgnoreCheck: ['Arial', 'Impact'] 
            });
        });
    </script>


    <script>
        $(document).ready(function() {

            // Function to capitalize the first letter of a string
            function capitalizeFirstLetter(string) {
                return string.charAt(0).toUpperCase() + string.slice(1);
            }

            // Event handler for input on heading field
            $('#ban_heading,#ban_sub_heading,#button1_name,#sec_1_heading,#sec_1_sub_heading,#button1_name,#sec_2_heading,#sec_2_sub_heading,#box_1_heading,#box_2_heading,#box_3_heading,#box_4_heading,#sec_3_heading,#sec_3_sub_heading,#sec_4_heading,#sec_5_heading,#sec_5_sub_heading,#sec_6_heading').on('input', function() {
                var currentValue = $(this).val();
                $(this).val(capitalizeFirstLetter(currentValue));
            });

            $.validator.addMethod("checkFileType", function(value, element) {
                if (!element.files || !element.files[0]) {
                    return true;
                }
                var fileType = element.files[0]['type'];
                var validExtensions = ['image/jpeg', 'image/jpg', 'image/png']; // Allowed file extensions
                var fileExtension = fileType.toLowerCase();
                return validExtensions.includes(fileExtension);
            }, "Please select a valid image file (jpg, jpeg, png).");


            // jQuery.validator.addMethod("checkFileTypes", function(value, element) {
            //     const allowedExtensions = ['mp4', 'avi', 'mov'];
            //     const file = element.files[0];
            //     if (!file) return true; // If no file is selected, do not validate for file type
            //     const extension = file.name.split('.').pop().toLowerCase();
            //     return allowedExtensions.includes(extension);
            // }, "Please upload a valid video file.");






            $("#add-banner-form").validate({
                ignore: ".note-editor *",
                debug: false,
                rules: {
                    ban_heading: {
                        required: true,
                    },
                    ban_sub_heading: {
                        required: true,
                    },
                    button1_name: {
                        required: true,
                    },
                    button1_url: {
                        required: true,
                        url: true
                    },
                    ban_image_path: {
                        required: function(element) {
                            return $(element).data('dropify').settings.defaultFile === '';
                        },
                        checkFileType: true,
                    },
                },
                errorElement: "span",
                errorPlacement: function(error, element) {
                    if (element.attr("name") == "ban_image_path") {
                        error.addClass("text-danger");
                        error.insertAfter($(".upload-file"));
                    } else if (element.attr("name") == "description") {
                        error.addClass("text-danger");
                        error.insertAfter($(".description-home-sec-1"));
                    } else {
                        error.addClass("text-danger");
                        error.insertAfter(element);
                    }
                },
                onkeyup: function(element) {
                    $(element).valid();
                },
                onfocusout: function(element) {
                    if ($(element).attr("name") !== "ban_image_path") {
                        $(element).valid();
                    }

                },

            });






            $("#add-sec-1-form").validate({
                ignore: ".note-editor *",
                debug: false,
                rules: {
                    sec_1_heading: {
                        required: true,
                    },
                    sec_1_sub_heading: {
                        required: true,
                    },
                    sec_1_description: {
                        required: true,
                    },
                    sec_1_video_url: {
                        required: true,
                        url: true
                    },
                    sec_1_video_path: {
                        required: function(element) {
                            return $(element).data('dropify').settings.defaultFile === '';
                        },
                        // checkFileType: true,
                        //   checkFileType: true,
                    },
                },
                errorElement: "span",
                errorPlacement: function(error, element) {
                    if (element.attr("name") == "sec_1_video_path") {
                        error.addClass("text-danger");
                        error.insertAfter($(".sec_1_video_path"));
                    } else if (element.attr("name") == "sec_1_description") {
                        error.addClass("text-danger");
                        error.insertAfter($(".sec_1_description"));
                    } else {
                        error.addClass("text-danger");
                        error.insertAfter(element);
                    }
                },
                onkeyup: function(element) {
                    $(element).valid();
                },
                onfocusout: function(element) {
                    if ($(element).attr("name") !== "sec_1_video_path") {
                        $(element).valid();
                    }

                },

            });





            $("#add-sec-2-form").validate({
                ignore: ".note-editor *",
                debug: false,
                rules: {
                    sec_2_heading: {
                        required: true,
                    },
                    sec_2_sub_heading: {
                        required: true,
                    },
                    sec_2_description: {
                        required: true,
                    },
                    sec_2_image_path: {
                        required: function(element) {
                            return $(element).data('dropify').settings.defaultFile === '';
                        },
                        checkFileType: true,
                    },
                    box_1_heading: {
                        required: true,
                    },
                    box_1_description: {
                        required: true,
                    },
                    box_1_image_path: {
                        required: function(element) {
                            return $(element).data('dropify').settings.defaultFile === '';
                        },
                        checkFileType: true,
                    },
                    box_2_heading: {
                        required: true,
                    },
                    box_2_description: {
                        required: true,
                    },
                    box_2_image_path: {
                        required: function(element) {
                            return $(element).data('dropify').settings.defaultFile === '';
                        },
                        checkFileType: true,
                    },
                    box_3_heading: {
                        required: true,
                    },
                    box_3_description: {
                        required: true,
                    },
                    box_3_image_path: {
                        required: function(element) {
                            return $(element).data('dropify').settings.defaultFile === '';
                        },
                        checkFileType: true,
                    },
                    box_4_heading: {
                        required: true,
                    },
                    box_4_description: {
                        required: true,
                    },
                    box_4_image_path: {
                        required: function(element) {
                            return $(element).data('dropify').settings.defaultFile === '';
                        },
                        checkFileType: true,
                    },

                },
                errorElement: "span",
                errorPlacement: function(error, element) {
                    if (element.attr("name") == "sec_2_image_path") {
                        error.addClass("text-danger");
                        error.insertAfter($(".sec_2_image_path"));
                    } else if (element.attr("name") == "sec_2_description") {
                        error.addClass("text-danger");
                        error.insertAfter($(".sec_2_description"));
                    } else if (element.attr("name") == "box_1_image_path") {
                        error.addClass("text-danger");
                        error.insertAfter($(".box_1_image_path"));
                    } else if (element.attr("name") == "box_2_image_path") {
                        error.addClass("text-danger");
                        error.insertAfter($(".box_2_image_path"));
                    } else if (element.attr("name") == "box_3_image_path") {
                        error.addClass("text-danger");
                        error.insertAfter($(".box_3_image_path"));
                    } else if (element.attr("name") == "box_4_image_path") {
                        error.addClass("text-danger");
                        error.insertAfter($(".box_4_image_path"));
                    } else {
                        error.addClass("text-danger");
                        error.insertAfter(element);
                    }
                },
                onkeyup: function(element) {
                    $(element).valid();
                },
                onfocusout: function(element) {
                    // if ($(element).attr("name") !== "sec_2_image_path") {
                    //     $(element).valid();
                    // }

                    if ($(element).attr("name") !== "sec_2_image_path" && $(element).attr("name") !== "box_1_image_path" && $(element).attr("name") !== "box_2_image_path" && $(element).attr("name") !== "box_3_image_path" && $(element).attr("name") !== "box_4_image_path") {
                        $(element).valid();
                    }

                },

            });



            $("#add-sec-3-form").validate({
                ignore: ".note-editor *",
                debug: false,
                rules: {
                    sec_3_heading: {
                        required: true,
                    },
                    sec_3_sub_heading: {
                        required: true,
                    },
                    sec_3_description: {
                        required: true,
                    },

                },
                errorElement: "span",
                errorPlacement: function(error, element) {
                    if (element.attr("name") == "ban_image_path") {
                        error.addClass("text-danger");
                        error.insertAfter($(".upload-file"));
                    } else if (element.attr("name") == "sec_3_description") {
                        error.addClass("text-danger");
                        error.insertAfter($(".sec_3_description"));
                    } else {
                        error.addClass("text-danger");
                        error.insertAfter(element);
                    }
                },
                onkeyup: function(element) {
                    $(element).valid();
                },
                onfocusout: function(element) {

                    $(element).valid();


                },

            });



            $("#add-sec-4-form").validate({
                ignore: ".note-editor *",
                debug: false,
                rules: {
                    sec_4_heading: {
                        required: true,
                    },

                    sec_4_description: {
                        required: true,
                    },

                },
                errorElement: "span",
                errorPlacement: function(error, element) {
                    if (element.attr("name") == "ban_image_path") {
                        error.addClass("text-danger");
                        error.insertAfter($(".upload-file"));
                    } else if (element.attr("name") == "sec_4_description") {
                        error.addClass("text-danger");
                        error.insertAfter($(".sec_4_description"));
                    } else {
                        error.addClass("text-danger");
                        error.insertAfter(element);
                    }
                },
                onkeyup: function(element) {
                    $(element).valid();
                },
                onfocusout: function(element) {

                    $(element).valid();


                },

            });


            $("#add-sec-5-form").validate({
                ignore: ".note-editor *",
                debug: false,
                rules: {
                    sec_5_heading: {
                        required: true,
                    },
                    sec_5_sub_heading: {
                        required: true,
                    },
                    sec_5_description: {
                        required: true,
                    },

                },
                errorElement: "span",
                errorPlacement: function(error, element) {
                    if (element.attr("name") == "ban_image_path") {
                        error.addClass("text-danger");
                        error.insertAfter($(".upload-file"));
                    } else if (element.attr("name") == "sec_5_description") {
                        error.addClass("text-danger");
                        error.insertAfter($(".sec_5_description"));
                    } else {
                        error.addClass("text-danger");
                        error.insertAfter(element);
                    }
                },
                onkeyup: function(element) {
                    $(element).valid();
                },
                onfocusout: function(element) {
                    $(element).valid();

                },

            });


            $("#add-sec-6-form").validate({
                ignore: ".note-editor *",
                debug: false,
                rules: {
                    sec_6_heading: {
                        required: true,
                    },

                    sec_6_description: {
                        required: true,
                    },

                },
                errorElement: "span",
                errorPlacement: function(error, element) {
                    if (element.attr("name") == "ban_image_path") {
                        error.addClass("text-danger");
                        error.insertAfter($(".upload-file"));
                    } else if (element.attr("name") == "sec_6_description") {
                        error.addClass("text-danger");
                        error.insertAfter($(".sec_6_description"));
                    } else {
                        error.addClass("text-danger");
                        error.insertAfter(element);
                    }
                },
                onkeyup: function(element) {
                    $(element).valid();
                },
                onfocusout: function(element) {

                    $(element).valid();

                },

            });


        });
    </script>



<script>
    $(".reset-button").click(function(){
        $('.summernote').summernote('code', '');
         
        $(".dropify-clear").trigger("click");
        
    });
</script>
@endsection