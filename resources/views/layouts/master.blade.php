<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') | {{ __t('app_name') }}</title>
    @include('partials._css')

<!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

</head>
<body>

<div id="app">

    <div class="main-wrapper">


        @include('partials._sidebar')


        <div class="page-wrapper">

            <nav class="navbar">
                <a href="#" class="sidebar-toggler">
                    <i data-feather="menu"></i>
                </a>
                <div class="navbar-content">

                    @include('partials._search_form')

                    <ul class="navbar-nav">

                        @include('partials._app_dropdown')

                        @include('partials._massage_dropdown')

                        @include('partials._notification_dropdown')

                        @include('partials._profile_dropdown')

                    </ul>
                </div>
            </nav>
            <!-- partial -->

            <div class="page-content">

                @yield('content')

            </div>

            @include('partials._footer')

        </div>
    </div>

</div>

@include('partials._javascript')
</body>
</html>
