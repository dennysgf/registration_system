<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" />

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    @if(Auth::check())
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Menú estudiante</a>
                            <ul class="dropdown-menu">
                            <li><a class="nav-link" href="{{ route('estudiantes.index') }}">{{ __('Estudiante') }}</a></li>
                            <li><a class="nav-link" href="{{ route('direcciones-estudiante.index') }}">{{ __('Direccion') }}</a></li>
                            <li><a class="nav-link" href="{{ route('telefonos-estudiante.index') }}">{{ __('Telefono') }}</a></li>
                            <li><hr class="dropdown-divider"></li>Padre/madre
                            <li><a class="nav-link" href="{{ route('parientes.index') }}">{{ __('Datos') }}</a> </li>
                            <li><a class="nav-link" href="{{ route('parientes-estudiante.index') }}">{{ __('Relación') }}</a></li>
                            <li><a class="nav-link" href="{{ route('telefonos-pariente.index') }}">{{ __('Teléfono') }}</a></li>
                            <li> <a class="nav-link" href="{{ route('direcciones-pariente.index') }}">{{ __('Dirección') }}</a></li>
                            <li><hr class="dropdown-divider"></li>Representante
                            <li><a class="nav-link" href="{{ route('representantes.index') }}">{{ __('Datos') }}</a></li>
                            <li><a class="nav-link" href="{{ route('direcciones-representante.index') }}">{{ __('Dirección') }}</a></li>
                            <li><a class="nav-link" href="{{ route('telefonos-representante.index') }}">{{ __('Teléfono') }}</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="nav-link" href="{{ route('matriculas.index') }}">{{ __('Matricula') }}</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Menú curso</a>
                            <ul class="dropdown-menu">
                            <li><a class="nav-link" href="{{ route('cursos.index') }}">{{ __('Curso') }}</a></li>
                            <li><a class="nav-link" href="{{ route('especialidades-curso.index') }}">{{ __('Categoria') }}</a></li>
                            <li><a class="nav-link" href="{{ route('especialidades.index') }}">{{ __('Especialidad') }}</a></li>
                            <li><a class="nav-link" href="{{ route('telefonos-estudiante.index') }}">{{ __('Telefono') }}</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="nav-link" href="{{ route('paralelos.index') }}">{{ __('Paralelo') }}</a></li>
                            <li><a class="nav-link" href="{{ route('niveles.index') }}">{{ __('Nivel') }}</a></li>
                            <li><a class="nav-link" href="{{ route('periodos-academico.index') }}">{{ __('Periodo académico') }}</a></li>
                            <li><a class="nav-link" href="{{ route('profesores.index') }}">{{ __('Tutor') }}</a></li>
                            </ul>
                        </li>
                    </ul>
                    @endif
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
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

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
