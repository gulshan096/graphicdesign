<header id="tt-header" class="tt-header-fixed">
    <div class="tt-header-inner">
        <div class="tt-header-col">

            <div class="tt-logo">
                <a href="index.html">

                    <img src="{{ asset('assets/img/logo-light.png') }}" class="tt-logo-light magnetic-item" alt="Logo">
                    <img src="{{ asset('assets/img/logo-dark.png') }}" class="tt-logo-dark magnetic-item" alt="Logo">
                </a>
            </div>

        </div>
        <div class="tt-header-col">

            <div id="tt-ol-menu-toggle-btn-wrap">
                <div class="tt-ol-menu-toggle-btn-text">
                    <span class="text-menu" data-hover="Open">Menu</span>
                    <span class="text-close">Close</span>
                </div>
                <div class="tt-ol-menu-toggle-btn-holder">
                    <a href="#" class="tt-ol-menu-toggle-btn magnetic-item"><span></span></a>
                </div>
            </div>


            <nav class="tt-overlay-menu tt-ol-menu-center tt-ol-menu-count">
                <div class="tt-ol-menu-holder">
                    <div class="tt-ol-menu-inner tt-wrap">
                        <div class="tt-ol-menu-content">

                            <ul class="tt-ol-menu-list">
                                <li><a href="{{ url('/') }}">Home</a></li>
                                <li class="tt-ol-submenu-wrap">
                                    <div class="tt-ol-submenu-trigger">
                                        <a href="#">Portfolio</a>
                                        <div class="tt-ol-submenu-caret-wrap">
                                            <div class="tt-ol-submenu-caret magnetic-item"></div>
                                        </div>
                                    </div>
                                    <div class="tt-ol-submenu">
                                        <ul class="tt-ol-submenu-list">
                                            <li class="tt-ol-submenu-wrap">
                                                <div class="tt-ol-submenu-trigger">
                                                    <a href="#" class="tt-ol-submenu-link">Graphic Design</a>
                                                    <div class="tt-ol-submenu-caret-wrap">
                                                        <div class="tt-ol-submenu-caret magnetic-item">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tt-ol-submenu">
                                                    <ul class="tt-ol-submenu-list">
                                                        <li><a href="">Branding and Identity </a></li>
                                                        <li><a href="">Print Design</a></li>
                                                        <li><a href="">Digital/Web Design</a></li>
                                                        <li><a href="">Illustration</a></li>
                                                        <li><a href="">Advertising</a></li>
                                                        <li><a href="">Editorial Design</a></li>
                                                        <li><a href="">Packaging Design</a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="tt-ol-submenu-wrap">
                                                <div class="tt-ol-submenu-trigger">
                                                    <a href="#" class="tt-ol-submenu-link">Photography</a>
                                                    <div class="tt-ol-submenu-caret-wrap">
                                                        <div class="tt-ol-submenu-caret magnetic-item">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tt-ol-submenu">
                                                    <ul class="tt-ol-submenu-list">
                                                        <li><a href="">Portraits</a></li>
                                                        <li><a href="">Weddings</a></li>
                                                        <li><a href="">Product</a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </li>

                                <li><a href="{{ url('about') }}">About</a></li>
                                <li><a href="{{ url('contact') }}">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="bg-noise"></div>

            </nav>

        </div>
    </div>
</header>
