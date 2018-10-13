<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <!--Bootstrap-->
@include('Includes.boostrap')

<!--CSS for home-->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/home.css') }}">

    @yield('homecss')

    <title>@yield('title')</title>

</head>

<body>
@yield('nav')
<!--home navigation-->
@include('Includes.adminnavin')


@yield('body')

@yield('footer')
<!--Footer-->
@include('Includes.homefooter')

</body>

</html>
