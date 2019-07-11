<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="md-scrollbar">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:300,400,500,700,400italic">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    @notify_css

    @yield('styles')

</head>
<body>
    <div id="app">
        <md-app style="height: 100vh" >

            <md-app-toolbar class="md-dense md-primary">
                @include('sections.nav-left')
                @include('sections.nav-right')
            </md-app-toolbar>

            <md-app-drawer :md-active.sync="$data.showDrawer" md-persistent="mini">
                @include('sections.drawer')
            </md-app-drawer>

            <md-app-content>
                @yield('content')
            </md-app-content>

        </md-app>
    </div>

    <footer>
        @notify_js
        @notify_render

        <script>
            $app = () => document.getElementById('app').__vue__
            $data = () => $app().$data
        </script>

        @yield('scripts')
    </footer>
</body>
</html>
