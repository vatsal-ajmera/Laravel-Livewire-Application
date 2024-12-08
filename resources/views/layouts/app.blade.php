<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
    <link rel="stylesheet" href="{{ asset('/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    {{-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) --}}
    @livewireStyles
</head>

<body>
    <div id="global-loader" >
        <div class="whirly-loader"> </div>
    </div>

    <div class="main-wrapper">
        @include('layouts.head')
    
        @auth
            @include('layouts.sidebar')
        @endauth

        <div class="page-wrapper">
            <div class="content">
                @if (!empty($slot))
                    {{ $slot }}
                @else
                    @yield('content')
                @endif
            </div>
        </div>
    </div>
    @livewireScripts
    <script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/feather.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.slimscroll.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/select2/js/select2.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/sweetalert/sweetalert2.all.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/sweetalert/sweetalerts.min.js') }}"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>
    <script src="{{ asset('assets/js/livewire-scripts.js') }}"></script>
    
</body>

</html>
