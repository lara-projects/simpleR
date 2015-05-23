<!DOCTYPE html>
<html>
<head>
    @include('admin.inc.head')
</head>
<body>
@include('admin.inc.header')
@include('admin.inc.sidebar')

@yield('content')

@include('admin.inc.footer')
</body>

</html>