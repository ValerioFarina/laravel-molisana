<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>La Molisana - @yield('page-title')</title>
    </head>
    <body>
        <header>
            <img src="{{ asset('images/logo-la-molisana.png') }}" alt="logo-la-molisana">
        </header>

        <main>
            @yield('content')
        </main>

        <footer>
            <span>Footer</span>
        </footer>
    </body>
</html>
