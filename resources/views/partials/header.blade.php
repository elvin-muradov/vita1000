<header class="header sky-gradient py-3">
    <div class="container">
        <nav class="d-flex justify-content-between align-items-center">
            <a class="logo-light" href="{{ url('/') }}"><img src="{{ asset('assets/img/logo.png') }}"
                    alt="Logo"></a>
            <a class="logo-dark" href="{{ url('/') }}"><img src="{{ asset('assets/img/logo-dark.png') }}"
                    alt="Logo"></a>
            <ul class="header-menu">
                <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Ana səhifə</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/products') }}">Məhsullar</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/blog') }}">Bloq</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/contact-us') }}">Əlaqə</a></li>
            </ul>
            <ul class="header-menu-right m-0 mx-2">
                <li class="nav-item right"><a class="nav-link circle-button" href="{{ url('/cart') }}"><img
                            src="{{ asset('assets/img/icons/shopping_cart.svg') }}" alt=""></a></li>
                <li class="nav-item right"><a class="nav-link circle-button" href="{{ url('/profile') }}"><img
                            src="{{ asset('assets/img/icons/person_filled.svg') }}" alt=""></a></li>
                <li class="nav-item right hidden"><a class="nav-link circle-button hamburger-icon" href="#">
                        <span class="line line-top"></span>
                        <span class="line line-bottom"></span>
                    </a></li>
            </ul>
            <ul class="mobile-menu deactive">
                <li class="close-button circle-button"><i class="fas fa-times"></i></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Ana səhifə</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/products') }}">Məhsullar</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/blog') }}">Bloq</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/contact-us') }}">Əlaqə</a></li>
            </ul>
        </nav>
    </div>
    <img class="nav-bg-img" src="{{ asset('assets/img/nav-bg.png') }}" />
</header>


