<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="{{asset('build/assets/css/ready.css')}}">
        <link rel="stylesheet" href="{{asset('build/assets/css/demo.css')}}">
        <link rel="stylesheet" href="{{asset('build/assets/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('build/assets/css/custom.css')}}">
        <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
        <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/font-awesome-line-awesome/css/all.min.css">
        
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles
    </head>
    <body class="font-sans antialiased">


        {{-- @yield('header') --}}
        @include('layouts.header')
        @include('layouts.sidebar')
        @yield('main')
        @yield('footer')
        @livewireScripts
      
        
        <script src="{{asset('build/assets/js/core/jquery.3.2.1.min.js')}}"></script>
        <script src="{{asset('build/assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js')}}"></script>
        <script src="{{asset('build/assets/js/core/popper.min.js')}}"></script>
        <script src="{{asset('build/assets/js/core/bootstrap.min.js')}}"></script>
        <script src="{{asset('build/assets/js/plugin/chartist/chartist.min.js')}}"></script>
        <script src="{{asset('build/assets/js/plugin/chartist/plugin/chartist-plugin-tooltip.min.js')}}"></script>
        <script src="{{asset('build/assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js')}}"></script>
        <script src="{{asset('build/assets/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js')}}"></script>
        <script src="{{asset('build/assets/js/plugin/jquery-mapael/jquery.mapael.min.js')}}"></script>
        <script src="{{asset('build/assets/js/plugin/jquery-mapael/maps/world_countries.min.js')}}"></script>
        <script src="{{asset('build/assets/js/plugin/chart-circle/circles.min.js')}}"></script>
        <script src="{{asset('build/assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js')}}"></script>
        <script src="{{asset('build/assets/js/ready.min.js')}}"></script>
        <script src="{{asset('build/assets/js/demo.js')}}"></script>
    </body>
</html>
