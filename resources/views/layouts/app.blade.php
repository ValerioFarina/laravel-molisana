<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>La Molisana - @yield('page-title')</title>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body>
        <header>
            <div id="header-logo">
                <img src="{{ asset('images/logo-la-molisana.png') }}" alt="Logo La Molisana">
            </div>

            <nav>
                <ul>
                    <li>
                        <a href="{{ url('/') }}">
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('products') }}">
                            Prodotti
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('news') }}">
                            News
                        </a>
                    </li>
                </ul>
            </nav>
        </header>

        <main>
            @yield('content')
        </main>

        <footer>
            <div id="footer-bottom">
                <img src="{{ asset('images/footer-montagne-bottom.jpg') }}" alt="Montagne">
            </div>
        </footer>
    </body>
</html>
