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
