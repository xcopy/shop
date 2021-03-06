<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name') }}</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link rel="shortcut icon" href="{{ url('favicon.ico') }}" />
        <link rel="icon" href="{{ url('favicon.ico') }}" />
    </head>
    <body class="d-flex flex-column min-vh-100">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a href="/" class="navbar-brand" title="{{ config('app.name') }}">
                    <i class="fab fa-apple"></i>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbar">
                    <ul class="navbar-nav">
                        @foreach($categories as $category)
                            <li class="nav-item">
                                <a
                                    href="{{ route('category', compact('category')) }}"
                                    class="nav-link"
                                    title="{{ $category->name }}">
                                    {{ $category->name }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                    <div class="navbar-nav ml-md-auto">
                        @guest
                            <a href="{{ route('login') }}" class="nav-link">
                                <i class="fas fa-sign-in-alt"></i> Login
                            </a>
                        @else
                            <form action="{{ route('logout') }}" method="post">
                                @csrf
                                <button type="submit" class="btn btn-light">
                                    <i class="fas fa-sign-out-alt"></i> Logout
                                </button>
                            </form>
                        @endguest
                    </div>
                </div>
            </div>
        </nav>

        <main class="flex-fill">
            @yield('content')
        </main>

        <footer class="text-center text-muted p-2">Copyright &copy; {{ date('Y') }} Apple Inc. All rights reserved.</footer>
        <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
