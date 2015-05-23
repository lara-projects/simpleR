<!DOCTYPE html>
<html>
<head>
    @include('admin.head')
</head>
<body>
@include('admin.header')
@include('admin.sidebar')

@yield('content')

@include('admin.footer')
</body>

</html>