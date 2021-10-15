<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>@stack('title', env('APP_NAME'))</title>
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/favicon.ico') }}" />

        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome-free/css/all.min.css') }}">

        <!-- Theme style -->
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

        <!-- iCheck -->
        <link rel="stylesheet" href="{{ asset('assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">

        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

        <style>
            .wrapper {
                display: flex;
                align-items: center;
                justify-content: center;
                width: 100vw;
                height: 100vh;
            }
        </style>
    </head>

    <body class="hold-transition sidebar-mini layout-fixed">
        <div class="wrapper">
            @yield('content')
        </div>
    </body>
</html>
