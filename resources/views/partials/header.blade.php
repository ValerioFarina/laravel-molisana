<header>
    <div id="header-logo">
        <img src="{{ asset('images/logo-la-molisana.png') }}" alt="Logo La Molisana">
    </div>

    <nav>
        <ul>
            <li>
                <a href="{{ url('/') }}" class="{{ is_current_page('home') ? 'active' : '' }}">
                    Home
                </a>
            </li>
            <li>
                <a href="{{ route('products') }}" class="{{ is_current_page('products')||is_current_page('product-details') ? 'active' : '' }}">
                    Prodotti
                </a>
            </li>
            <li>
                <a href="{{ route('news') }}" class="{{ is_current_page('news') ? 'active' : '' }}">
                    News
                </a>
            </li>
        </ul>
    </nav>
</header>
