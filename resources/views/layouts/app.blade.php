<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar" role="navigation" aria-label="main navigation">
            <div class="container">
                <div class="navbar-brand">
                    <a class="navbar-item" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>

                    <a role="button" class="navbar-burger burger" aria-label="{{ __('Toggle navigation') }}" aria-expanded="false" data-target="main-menu">
                        <span aria-hidden="true"></span>
                        <span aria-hidden="true"></span>
                        <span aria-hidden="true"></span>
                    </a>
                </div>

                <div id="main-menu" class="navbar-menu">
                    <div class="navbar-start">
                        <a class="navbar-item" href="{{ route('dashboard') }}">
                            Dashboard
                        </a>

                        @if(Route::has('projects.index'))
                            <a href="{{ route('projects.index') }}" class="navbar-item">
                                Projects
                            </a>
                        @endif
                    </div>

                    <div class="navbar-end">
                        <div class="navbar-item {{ Auth::check() ? 'has-dropdown is-hoverable' : '' }}">
                            @guest
                            <div class="buttons">
                                <a href="{{ route('login') }}" class="button is-light">{{ _('Login') }}</a>

                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="button is-primary">{{ _('Register') }}</a>
                                @endif
                            </div>
                            @else

                                <a class="navbar-link">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="navbar-dropdown">
                                    <a class="navbar-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>

                            @endguest
                        </div>
                    </div>
                </div>
            </div>
        </nav>

        <main class="py-4 section">
            @yield('content')
        </main>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
