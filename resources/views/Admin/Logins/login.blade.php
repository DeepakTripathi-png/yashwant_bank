<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Yeshwant Bank | Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="" name="description" />
    <meta content="" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    @php
    use App\Models\Master\Visual_setting;

    $logo = Visual_setting::where('status', 'active')->first();  
    @endphp
    <link rel="shortcut icon" href="{{URL::asset('package_assets/images/yash_latur.jpg')}}">

    <!-- third party css -->
    <link href="{{URL::asset('package_assets/libs/datatables.net-bs5/css/dataTables.bootstrap5.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{URL::asset('package_assets/libs/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{URL::asset('package_assets/libs/datatables.net-buttons-bs5/css/buttons.bootstrap5.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{URL::asset('package_assets/libs/datatables.net-select-bs5/css/select.bootstrap5.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- third party css end -->

    <!-- App css -->
    <link rel="stylesheet" href="{{URL::asset('package_assets/css/app.min.css')}}"/>
    <link rel="stylesheet" href="{{URL::asset('package_assets/css/style.css')}}"/>

    <!-- icons -->
    <link rel="stylesheet" href="{{URL::asset('package_assets/css/icons.min.css')}}" />

    <!-- Toastr Css -->
    <link rel="stylesheet" href="{{URL::asset('package_assets/libs/toastr/build/toastr.min.css')}}" />

    <!-- Custom Css -->
    <style>
        .pass-show{
            position: absolute;
            top: 4px;
            font-size: 16px;
            right: 15px;
            cursor: pointer;
        }

        .input-box{
            position: relative;
        }
    </style>
</head>

<body class="loading authentication-bg authentication-bg-pattern">
    <div class="account-pages my-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-4">
                    {{-- @php
                        use App\Models\Master\Visual_setting;

                        $logo = Visual_setting::where('status', 'active')->first();
                    @endphp --}}
                    <div class="text-center">
                        <a href="">
                            <img src="{{!empty($logo->logo_image_path)?url('/').Storage::url($logo->logo_image_path):URL::asset('package_assets/images/yash_latur.jpg')}}" alt="" height="50" width="50" class="mx-auto" >
                        </a>
                        <p class="text-muted mt-2 mb-2">Yashwant Bank</p>
                    </div>
                    <div class="card">

                        <div class="card-body p-4">
                            <div class="text-center mb-4">
                                <h4 class="text-uppercase mt-0">Sign In</h4>
                            </div>

                            <form action="{{ url('login-action') }}" method="post" id="loginForm">
                                @csrf
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email address</label>
                                    <input class="form-control" type="email" id="email" name="email" placeholder="Enter your email">
                                    @if($errors->has('email'))
                                        <span class="text-danger"><b>* {{$errors->first('email')}}</b></span>
                                    @endif
                                </div>

                                <div class="mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <div class="input-box">
                                        <input class="form-control" type="password" id="password" name="password" placeholder="Enter your password">
                                        <div class="pass-show"><i class="fa fa-eye"></i></div>
                                    </div>
                                    @if($errors->has('password'))
                                        <span class="text-danger"><b>* {{$errors->first('password')}}</b></span>
                                    @endif
                                </div>

                                <div class="mb-3 d-grid text-center">
                                    <button class="btn btn-primary" type="submit"> Log In </button>
                                </div>
                            </form>


                            <div class="row mt-3">
                                <div class="col-12 text-center">
                                    <p> <a href="{{ url('/forget-password') }}" class="text-muted ms-1"><i class="fa fa-lock me-1"></i>Forgot your password?</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Vendor -->
    <script src="{{ URL::asset('package_assets/libs/jquery/jquery.min.js') }}"></script>
    <script src="{{ URL::asset('package_assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ URL::asset('package_assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ URL::asset('package_assets/libs/node-waves/waves.min.js') }}"></script>
    <script src="{{ URL::asset('package_assets/libs/waypoints/lib/jquery.waypoints.min.js') }}"></script>
    <script src="{{ URL::asset('package_assets/libs/jquery.counterup/jquery.counterup.min.js') }}"></script>
    <script src="{{ URL::asset('package_assets/libs/feather-icons/feather.min.js') }}"></script>

    <!-- App js -->
    <script src="{{ URL::asset('package_assets/js/app.min.js') }}"></script>

    <!-- Toaster Js -->
    <script src="{{ URL::asset('package_assets/libs/toastr/build/toastr.min.js') }}"></script>

    <!-- Custom Js -->
    <script>
        $(".pass-show").on('click', function() {
            var passwordId = $(this).siblings();
            if (passwordId.attr("type") === "password") {
                passwordId.attr("type", "text");
                $(this).find("i").removeClass("fa-eye")
                $(this).find("i").addClass("fa-eye-slash")
            } else {
                passwordId.attr("type", "password");
                $(this).find("i").addClass("fa-eye")
                $(this).find("i").removeClass("fa-eye-slash")
            }
        })
    </script>

    <script>
        toastr.options = {
            "closeButton": true,
            "progressBar": true,
            "positionClass": "toast-bottom-right",
        }

        @if(Session::has('success'))
            toastr.success("{{ Session::get('success') }}");
        @endif

        @if(Session::has('info'))
            toastr.info("{{ Session::get('info') }}");
        @endif

        @if(Session::has('warning'))
            toastr.warning("{{ Session::get('warning') }}");
        @endif

        @if(Session::has('error'))
            toastr.error("{{ Session::get('error') }}");
        @endif
    </script>
</body>
</html>