<!DOCTYPE html>
<html>
<head>
    @include('layouts.css')
    @yield('css')
</head>
<body>
@include('layouts.nav-bar')
<div class="d-flex align-items-stretch">
    @include('layouts.side-bar')
    @yield('content')
</div>
@include('layouts.js')
@yield('scripts')
</body>
</html>
