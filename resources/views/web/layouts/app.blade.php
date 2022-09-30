<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title') - {{ config('app.name', 'JustEarn Blog') }}</title>
        <!-- Favicons -->
        <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('admin/apple-touch-icon.png') }}">
        <link rel="shortcut icon" href="{{ asset('admin/favicon.ico') }}">
        <meta name="theme-color" content="#3063A0">
        <!-- GOOGLE FONT -->
        <link href="https://fonts.googleapis.com/css?family=Fira+Sans:400,500,600" rel="stylesheet">
        <!-- End GOOGLE FONT -->
        <!-- Base CSS -->
        <link rel="stylesheet" href="{{ asset('web/css/bootstrap.css') }}" />
        <!-- Custom css -->
        <link rel="stylesheet" href="{{ asset('web/css/style.css') }}" />
        <link rel="stylesheet" href="{{ asset('web/css/media.css') }}" />
        <!-- BEGIN PAGE CSS -->
        @stack('styles')
        <!-- END PAGE CSS -->
    </head>

    <body>
        <main>
            <!-- Start Main Header Section -->
            @include('web.layouts.header-desktop')
            @include('web.layouts.header-mobile')
            <!-- End Main Header Section -->
            <div class="content-wrapper">
                @yield('content')
            </div>
            <!-- footer section start -->
            @include('web.layouts.footer')
            <!-- footer section end -->
        </main>
        <!-- Global Assets link -->
        <script src="{{ asset('web/js/bootstrap.bundle.js') }}"></script>
        <!-- Custom js link  -->
        <script src="{{ asset('web/js/script.js') }}"></script>
        <!-- BEGIN PAGE js -->
        @stack('scripts')
        <!-- END PAGE js -->
    </body>
</html>
