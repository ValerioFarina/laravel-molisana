<footer>
    <div id="footer-top">
        <div class="container clearfix">
            <div id="footer-contacts" class="float-left">
                <div id="footer-logo">
                    <img src="{{ asset('images/logo-la-molisana.png') }}" alt="Logo La Molisana">
                </div>

                <ul>
                    @foreach ($footer['contacts'] as $contact)
                        <li>
                            {{ $contact }}
                        </li>
                    @endforeach
                </ul>
            </div>

            <div id="footer-menus" class="float-left">
                @foreach ($footer['menus'] as $title => $menu)
                    <div class="footer-menu">
                        <h3>
                            {{ $title }}
                        </h3>

                        <ul>
                            @foreach ($menu as $item)
                                <li>
                                    <a href="#">
                                        {{ $item }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <div id="footer-bottom">
        <img src="{{ asset('images/footer-montagne-bottom.jpg') }}" alt="Montagne">
    </div>
</footer>
