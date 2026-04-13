<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Sharanga Tours and Travel | Your Ultimate partner for travels and tour packages') }}</title>

        <!-- Fonts -->
        <link rel="shortcut icon" type="image/x-icon" href="../../images/fav.svg">

        <!-- Custom css -->

        <!-- Scripts -->
        @vite(['resources/scss/app.scss', 'resources/js/app.js'])
        @livewireStyles
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('partials.header-top')
            @include('partials.header')

            <main>
                @yield('content')
            </main>

            @include('partials.footer')
        </div>
        @livewireScripts
        <script defer src="assets/js/plugins/jquery.min.js"></script>
        <script defer src="assets/js/plugins/bootstrap.min.js"></script>
        <script defer src="assets/js/plugins/metismenu.js"></script>
        <script defer src="assets/js/vendor/jqueryui.js"></script>
        <script defer src="assets/js/vendor/waypoint.js"></script>
        <script defer src="assets/js/plugins/swiper.js"></script>
        <script defer src="assets/js/plugins/smoothscroll.js"></script>
        <script defer src="assets/js/vendor/wow.js"></script>
        <script defer src="assets/js/plugins/odometer.js"></script>
        <script defer src="assets/js/plugins/magnific-popup.js"></script>
        <script defer src="assets/js/plugins/isotop.js"></script>
        <script defer src="assets/js/plugins/contact-form.js"></script>
        <script defer src="assets/js/main-2.js"></script>
    </body>
</html>
