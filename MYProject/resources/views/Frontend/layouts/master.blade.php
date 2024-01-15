<!DOCTYPE html>
<html lang="en">
<head>
    @include('Frontend.layouts.head')
</head>
<body>
    @include('Frontend.layouts.header')
    @yield('main-content')
    @include('Frontend.layouts.footer')
</body>
</html>