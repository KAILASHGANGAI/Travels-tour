<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @include('includes.links')
    @include('includes.metatags')
    <link rel="stylesheet" href="{{ asset('web/css/styles.css') }}">
</head>
@yield('style')
<body>
    @include('includes.navnar')

    @yield('main-content')

    @include('includes.footer')
    @yield('scripts')
    @include('includes.scripts')
    @include('sweetalert::sweetalert')

</body>
</html>