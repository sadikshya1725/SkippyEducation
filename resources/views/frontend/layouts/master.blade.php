<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@php

@endphp



@include('frontend.includes.head')

<body data-home-page-title="Home" class="u-body u-xl-mode">

    {{-- @include('frontend.includes.topnav') --}}

    @include('frontend.includes.topnav')
    @include('frontend.includes.navbar')


    @yield('content')


    @include('frontend.includes.footer')

    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>

</body>

</html>