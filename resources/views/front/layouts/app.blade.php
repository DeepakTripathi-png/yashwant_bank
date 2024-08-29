<!doctype html>
<html lang="en">
<head>
    @include('front.includes.head')
</head>
<body>
    @include('front.includes.header')

    <div class="body-inner">
        @yield('content')
        @include('front.includes.footer')
    </div>

  
    @include('front.includes.js')

</body>
</html>
