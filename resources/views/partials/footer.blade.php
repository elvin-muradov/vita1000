<footer class="py-8">
    <div class="container">
        <div class="row footer-top">
            <ul class="footer-menu">
                <li><a href="{{ url('/') }}">Ana səhifə</a></li>
                <li><a href="{{ url('/products') }}">Məhsullar</a></li>
                <li><a href="{{ url('/gallery') }}">Qalereya</a></li>
                <li><a href="{{ url('/blog') }}">Bloq</a></li>
                <li><a href="{{ url('/contact-us') }}">Əlaqə</a></li>
                <li><a href="{{ url('/about-us') }}">Haqqımızda</a></li>
                <li><a href="{{ url('/news') }}">Xəbərlər</a></li>
            </ul>
        </div>
        <div class="row footer-bottom">
            <div class="col-lg-4 col-md-12">
                <img class="footer-logo" src="{{ asset('assets/img/logo-dark.png') }}" alt="Footer Logo">
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="row justify-content-center">
                    <a class="circle-button" href="#"><img src="{{ asset('assets/img/icons/facebook.svg') }}"
                            alt="Socials"></a>
                    <a class="circle-button" href="#"><img src="{{ asset('assets/img/icons/youtube.svg') }}"
                            alt="Socials"></a>
                    <a class="circle-button" href="#"><img src="{{ asset('assets/img/icons/whatsapp.svg') }}"
                            alt="Socials"></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <p class="text-secondary">&copy; 2000-{{ date('Y') }}, All Rights Reserved</p>
            </div>
        </div>
    </div>
</footer>
