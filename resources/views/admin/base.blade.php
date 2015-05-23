<!doctype html>
<html lang="tr">

<head>
    @include("admin.head")
</head>

<body>
    {{-- Header kısmı, navigasyon vb. --}}
    @include("admin.header")

    {{-- Sidebar --}}
    @include("admin.sidebar")

    {{-- Content --}}
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    @yield("content")
    </div>

    {{-- Footer --}}
    @include("admin.footer")


</body>
</html>