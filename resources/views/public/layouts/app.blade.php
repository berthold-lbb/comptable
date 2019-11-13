<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    @include('public.layouts.head')
</head>
<body>
    @include('public.layouts.header')
    @section('main-content')
    @show
    @include('public.layouts.footer')
</body>
</html>