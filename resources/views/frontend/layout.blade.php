<!DOCTYPE html>
<html lang="en">
<head>
    @include('frontend.layout.head')
</head>
<body>
    @include('frontend.layout.header')
    @yield('content')
    @include('frontend.layout.script')
    @include('frontend.layout.footer')
   
</body>
</html>