<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>

<body class="bg-gray-100 h-screen antialiased leading-none font-sans">
    <div id="app">
        <header class="bg-gray-900 py-6">
            <div class="container mx-auto flex justify-between items-center px-6">
                <div>
                    <a href="{{ url('/') }}"
                        class="text-lg font-semibold text-3xl text-gray-100 no-underline hover:text-gray-200 transition duration-300 uppercase">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>
                <nav class="space-x-4 text-gray-300 text-sm sm:text-base">
                    <a href="{{ route('blog.index') }}" class="hover:text-gray-200 transition duration-300">Blog</a>

                    @guest
                        <a class="no-underline hover:text-gray-200 transition duration-300"
                            href="{{ route('login') }}">{{ __('Login') }}</a>
                        @if (Route::has('register'))
                            <a class="no-underline hover:text-gray-200 transition duration-300"
                                href="{{ route('register') }}">{{ __('Register') }}</a>
                        @endif
                    @else
                        <span><a href="{{ route('profile') }}">{{ explode(' ', Auth::user()->name)[0] }}</a></span>

                        <a href="{{ route('logout') }}" class="no-underline hover:text-gray-200 transition duration-300"
                            onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                            {{ csrf_field() }}
                        </form>
                    @endguest
                </nav>
            </div>
        </header>

        <div class="content">
            @yield('content')
        </div>

        <footer class="bg-gray-900 py-15 mt-20">
            @include('layouts.footer')
        </footer>
    </div>
</body>

</html>
