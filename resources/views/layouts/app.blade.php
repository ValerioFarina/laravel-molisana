<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>@yield('page-title') - La Molisana</title>
    </head>
    <body>
        <header>
            <span>Header</span>
        </header>

        <main>
            @yield('content')
        </main>

        <footer>
            <span>Footer</span>
        </footer>
    </body>
</html>
