<!DOCTYPE html>
<html lang="en">
<head>
@include('user.css')
</head>
<body>
@include('user.header')
    @yield('main')
@include('user.footer')
@include('user.script')
  
</body>
</html>