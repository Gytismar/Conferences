<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <title>Laravel project - @yield('title')</title>
</head>
<body>
<div>
    <header class="m-10">
        <nav class="navbar navbar-container">
            <div>
                <a href="{{ url('/conferences') }}" class="btn btn-outline-primary">@lang('site.conferences')</a>
            </div>
            @guest
                <a href="{{ route('login') }}" class="btn btn-primary">@lang('site.login')</a>
            @else
                <a href="{{ route('logout') }}" id="logout-btn" class="btn btn-danger logout-btn">@lang('site.logout')({{ auth()->user()->name }})</a>
                <form action="{{ route('logout') }}" method="POST" id="logout-form" class="d-none">
                    @csrf
                </form>
            @endguest
        </nav>
    </header>
    @yield('content')
</div>
<script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
