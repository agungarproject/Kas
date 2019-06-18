<!DOCTYPE html>
<html>

<head>
@include('admin.layouts.head')
</head>

<body class="hold-transition skin-blue sidebar-mini">

@include('admin.layouts.header')
@include('admin.layouts.sidebar')

<div class="content-wrapper">
@yield('content')
</div>

@include('admin.layouts.footer')
<div class="control-sidebar-bg"></div>
</div>
@include('admin.layouts.seting')
@stack('script')
</body>
</html>