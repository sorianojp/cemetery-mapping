<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Garden of Eden - Cemetery Mapping</title>

    <!-- Styles -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/datatables.css') }}">

    <style>
              /* Sticky footer styles
      -------------------------------------------------- */
      html {
      position: relative;
      min-height: 100%;
      }
      body {
      margin-bottom: 60px; /* Margin bottom by footer height */
      }
      .footer {
      position: absolute;
      bottom: 0;
      width: 100%;
      height: 60px; /* Set the fixed height of the footer here */
      line-height: 60px; /* Vertically center the text there */
      background-color: #f5f5f5;
      }
        body {
        background: url('{{ asset('images/bg.jpg') }}') no-repeat center center fixed;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        background-size: cover;
        -o-background-size: cover;
        }
    </style>
    @yield('styles')

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark bg-primary shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ asset('images/logo.png') }}" width="50" height="50" alt=""> Garden of Eden
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest

                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                            @endif
                        @else
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('home') }}">Dashboard</a>
                            </li>
                            @can('user')
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('deceaseds.index') }}">My Relatives</a>
                            </li>
                            @endcan
                            @can('staff')
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('persons.index') }}">Deceased Persons</a>
                            </li>
                            @endcan
                            @can('admin')
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('deceased') }}">Deceased</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('lots.index') }}">Lots</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('sectors.index') }}">Sectors</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('users.index') }}">Users</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('roles.index') }}">Roles</a>
                            </li>
                            @endcan
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/contact') }}">{{ __('Contact Us') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('settings') }}">{{ __('Settings') }}</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->lastname }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <ul class="nav justify-content-center bg-white p-3">
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/') }}">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/lotspage') }}">Lots</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/mapspage') }}">Maps</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/contactuspage') }}">Contact Us</a>
            </li>
        </ul>

        <main>
            @yield('content')
        </main>
     
        <footer class="footer">
        <div class="container">
            <span class="text-muted">© Copyright 2022 Garden of Eden | All Rights Reserved</span>
        </div>
        </footer>
    </div>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script type="text/javascript" charset="utf8" src="{{ asset('js/datatables.js') }}"></script>
    <script>
        $(document).ready( function () {
            $('#deceased').DataTable();
        } );
    </script>
    <script>
        $(function () {
        $('[data-toggle="tooltip"]').tooltip()
        })
    </script>
        @yield('scripts')
</body>
</html>
