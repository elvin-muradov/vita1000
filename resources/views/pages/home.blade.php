@extends('index')

@section('title')
    - Ana Səhifə
@endsection

@section('page_styles')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <link rel="stylesheet" href="{{ asset('assets/css/swiper.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/simple-lightbox.css?v2.11.0') }}" />
@endsection

@section('content')
    @include('partials.header-white')
    <!--BANNER SECTION START-->
    <section class="page-section banner-section position-relative">
        <img class="sky" src="{{ asset('assets/img/Sky.png') }}" alt="">
        <img class="birds" src="{{ asset('assets/img/Birds.png') }}" alt="">
        <img class="mountain" src="{{ asset('assets/img/Mountain .png') }}" alt="">
        <img class="waterfall" src="{{ asset('assets/img/Waterfall.png') }}" alt="">
        <img class="rock3" src="{{ asset('assets/img/Rock 3.png') }}" alt="">
        <img class="rock1" src="{{ asset('assets/img/Rock.png') }}" alt="">
        <img class="middlerock" src="{{ asset('assets/img/Rock 2.png') }}" alt="">
        <img class="waterbottle" src="{{ asset('assets/img/Water Bottle.png') }}" alt="">
        <img class="rock4" src="{{ asset('assets/img/Rock 4.png') }}" alt="">
    </section>
    <!--BANNER SECTION END-->

    <!--Home About SECTION START-->
    <section class="page-section position-relative overflow-hidden" style="margin-top:40px;">
        <div class="container">
            <div class="about-us-info-1 row align-items-center">
                <div class="col-lg-6">
                    <h1 class="page-title my-6">Haqqımızda</h1>
                    <p class="page-subtitle my-6">
                        Our mission came from hardened lessons in the Marine Corps and emergency response. We wanted to
                        help
                        men and women perform at their best, whether on the frontline, the fire line, or the fall line.
                    </p>
                    <p class="page-subtitle my-6">
                        The inspiration for RecPak came while with a sniper unit. Operating in unforgiving terrain for
                        days
                        on end, small things had a big impact. Maintaining peak performance was hard on energy bars and
                        rations. Space, weight, and time was essential to mission success.
                    </p>
                    <p class="page-subtitle my-6">
                        To find a better solution, we spent two years working with experts, experimenting with different
                        ingredients and packaging, and tested it all on the trail. During our successful Kickstarter
                        campaign, we were inspired by the positive reaction from outdoor enthusiasts of every stripe -
                        from
                        endurance cyclists to wildland firefighters to mountain guides.
                    </p>
                    <a class="light-btn bg-primary text-light" href="#">Daha çox oxu</a>
                </div>
                <div class="col-lg-6">
                    <img class="about-info-img" src="{{ asset('assets/img/home-about-img.png') }}" alt="About Us Info" />
                </div>
            </div>
        </div>
        {{-- <img class="about-us-info-1-bg" src="{{ asset('assets/img/about-info-1-bg.png') }}" alt="About Info BG"> --}}
    </section>
    <!--Home About SECTION END-->

    <!--Home Video SECTION START-->
    <section class="page-section">
        <div class="video-thumb d-flex justify-content-center align-items-center"
            style="background-image: url('{{ asset('assets/img/video-thumb.jpg') }}');">
            <div class="circle play-btn">
                <img src="{{ asset('assets/img/icons/play_arrow.svg') }}" alt="Play Button" />
            </div>
        </div>
    </section>
    <!--Home Video SECTION END-->

    <!--Products SECTION START-->
    <section class="page-section">
        <div class="container">
            <div class="d-flex flex-column align-items-center">
                <h1 class="page-title text-center">Məhsullarımız</h1>
                <p class="page-subtitle text-center my-4">”Vita1000” mineral su yatağından sənaye məqsədilə istifadəyə
                    XX
                    əsrin
                    50-ci illərindən
                    başlanmışdır.</p>
                <a href="{{ url('/products') }}" class="light-btn">
                    Məhsulların hamısına bax <img class="mr-2" src="{{ asset('assets/img/icons/arrow_outward.svg') }}"
                        alt="icon">
                </a>
            </div>
            <!-- Swiper -->
            <div class="swiper mySwiper">
                <div class="swiper-wrapper my-6">
                    <div class="swiper-slide">
                        <div class="product-slide">
                            <div class="product-slide-img-overlay">
                                <div class="sky-gradient">
                                    <img class="product-slide-img" src="{{ asset('assets/img/product-img.png') }}"
                                        alt="">
                                </div>
                            </div>
                            <div class="product-info text-center d-flex flex-column align-items-center">
                                <h4 class="my-3">Vita1000 20L</h4>
                                <small class="text-secondary">”Vita1000” mineral su yatağından sənaye məqsədilə</small>
                                <a href="#" class="light-btn bg-primary text-light fs-6 my-3">Məhsulu al</a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="product-slide">
                            <div class="product-slide-img-overlay">
                                <div class="sky-gradient">
                                    <img class="product-slide-img" src="{{ asset('assets/img/product-img.png') }}"
                                        alt="">
                                </div>
                            </div>
                            <div class="product-info text-center d-flex flex-column align-items-center">
                                <h4 class="my-3">Vita1000 20L</h4>
                                <small class="text-secondary">”Vita1000” mineral su yatağından sənaye məqsədilə</small>
                                <a href="#" class="light-btn bg-primary text-light fs-6 my-3">Məhsulu al</a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="product-slide">
                            <div class="product-slide-img-overlay">
                                <div class="sky-gradient">
                                    <img class="product-slide-img" src="{{ asset('assets/img/product-img.png') }}"
                                        alt="">
                                </div>
                            </div>
                            <div class="product-info text-center d-flex flex-column align-items-center">
                                <h4 class="my-3">Vita1000 20L</h4>
                                <small class="text-secondary">”Vita1000” mineral su yatağından sənaye məqsədilə</small>
                                <a href="#" class="light-btn bg-primary text-light fs-6 my-3">Məhsulu al</a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="product-slide">
                            <div class="product-slide-img-overlay">
                                <div class="sky-gradient">
                                    <img class="product-slide-img" src="{{ asset('assets/img/product-img.png') }}"
                                        alt="">
                                </div>
                            </div>
                            <div class="product-info text-center d-flex flex-column align-items-center">
                                <h4 class="my-3">Vita1000 20L</h4>
                                <small class="text-secondary">”Vita1000” mineral su yatağından sənaye məqsədilə</small>
                                <a href="#" class="light-btn bg-primary text-light fs-6 my-3">Məhsulu al</a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="product-slide">
                            <div class="product-slide-img-overlay">
                                <div class="sky-gradient">
                                    <img class="product-slide-img" src="{{ asset('assets/img/product-img.png') }}"
                                        alt="">
                                </div>
                            </div>
                            <div class="product-info text-center d-flex flex-column align-items-center">
                                <h4 class="my-3">Vita1000 20L</h4>
                                <small class="text-secondary">”Vita1000” mineral su yatağından sənaye məqsədilə</small>
                                <a href="#" class="light-btn bg-primary text-light fs-6 my-3">Məhsulu al</a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="product-slide">
                            <div class="product-slide-img-overlay">
                                <div class="sky-gradient">
                                    <img class="product-slide-img" src="{{ asset('assets/img/product-img.png') }}"
                                        alt="">
                                </div>
                            </div>
                            <div class="product-info text-center d-flex flex-column align-items-center">
                                <h4 class="my-3">Vita1000 20L</h4>
                                <small class="text-secondary">”Vita1000” mineral su yatağından sənaye məqsədilə</small>
                                <a href="#" class="light-btn bg-primary text-light fs-6 my-3">Məhsulu al</a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="product-slide">
                            <div class="product-slide-img-overlay">
                                <div class="sky-gradient">
                                    <img class="product-slide-img" src="{{ asset('assets/img/product-img.png') }}"
                                        alt="">
                                </div>
                            </div>
                            <div class="product-info text-center d-flex flex-column align-items-center">
                                <h4 class="my-3">Vita1000 20L</h4>
                                <small class="text-secondary">”Vita1000” mineral su yatağından sənaye məqsədilə</small>
                                <a href="#" class="light-btn bg-primary text-light fs-6 my-3">Məhsulu al</a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="product-slide">
                            <div class="product-slide-img-overlay">
                                <div class="sky-gradient">
                                    <img class="product-slide-img" src="{{ asset('assets/img/product-img.png') }}"
                                        alt="">
                                </div>
                            </div>
                            <div class="product-info text-center d-flex flex-column align-items-center">
                                <h4 class="my-3">Vita1000 20L</h4>
                                <small class="text-secondary">”Vita1000” mineral su yatağından sənaye məqsədilə</small>
                                <a href="#" class="light-btn bg-primary text-light fs-6 my-3">Məhsulu al</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-scrollbar"></div>
            </div>
        </div>
    </section>
    <!--Products SECTION END-->

    <!--Water Inner Info START-->
    <section class="page-section">
        <div class="container">
            <h1 class="page-title text-center">Vita1000 sularının tərkibi</h1>
            <p class="page-subtitle text-center my-4">”Vita1000” mineral su yatağından sənaye məqsədilə istifadəyə XX
                əsrin
                50-ci illərindən
                başlanmışdır. İlk dəfə olaraq yatağın su ehtiyatları hesablanmış və 1968-ci ildə Moskvanın Dövlət
                Ehtiyatlar
                Komissiyasında təsdiq edilmişdir.</p>

            <div class="water-inner">
                <div class="water-inner-box">
                    <div class="bordered-button">
                        <a href="#" class="circle-button text-primary m-0 p-4">
                            Mg
                        </a>
                    </div>
                    <div class="bordered-button">
                        <a href="#" class="circle-button text-primary m-0 p-4">
                            Mg
                        </a>
                    </div>
                    <div class="bordered-button">
                        <a href="#" class="circle-button text-primary m-0 p-4">
                            Mg
                        </a>
                    </div>
                    <div class="bordered-button">
                        <a href="#" class="circle-button text-primary m-0 p-4">
                            Mg
                        </a>
                    </div>
                    <div class="bordered-button">
                        <a href="#" class="circle-button text-primary m-0 p-4">
                            Mg
                        </a>
                    </div>
                    <div class="bordered-button">
                        <a href="#" class="circle-button text-primary m-0 p-4">
                            Mg
                        </a>
                    </div>
                    <div class="water-inner-img sky-gradient">
                        <img src="{{ asset('assets/img/bottle.png') }}" alt="Vita1000">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Water Inner Info END-->


    <!--Partners Section START-->
    <section class="page-section">
        <div class="container">
            <h1 class="page-title my-6 text-center">Partynorlarımız</h1>
            <p class="page-subtitle my-6 text-center">”Vita1000” mineral su yatağından sənaye məqsədilə istifadəyə XX
                əsrin
                50-ci illərindən
                başlanmışdır. </p>
            <div class="row d-flex">
                <div class="col-6 col-lg-3 my-5 d-flex justify-content-center align-items-center">
                    <img src="{{ asset('assets/img/partner.png') }}" alt="Partner" />
                </div>
                <div class="col-6 col-lg-3 my-5 d-flex justify-content-center align-items-center">
                    <img src="{{ asset('assets/img/partner.png') }}" alt="Partner" />
                </div>
                <div class="col-6 col-lg-3 my-5 d-flex justify-content-center align-items-center">
                    <img src="{{ asset('assets/img/partner.png') }}" alt="Partner" />
                </div>
                <div class="col-6 col-lg-3 my-5 d-flex justify-content-center align-items-center">
                    <img src="{{ asset('assets/img/partner.png') }}" alt="Partner" />
                </div>
                <div class="col-6 col-lg-3 my-5 d-flex justify-content-center align-items-center">
                    <img src="{{ asset('assets/img/partner.png') }}" alt="Partner" />
                </div>
                <div class="col-6 col-lg-3 my-5 d-flex justify-content-center align-items-center">
                    <img src="{{ asset('assets/img/partner.png') }}" alt="Partner" />
                </div>
                <div class="col-6 col-lg-3 my-5 d-flex justify-content-center align-items-center">
                    <img src="{{ asset('assets/img/partner.png') }}" alt="Partner" />
                </div>
                <div class="col-6 col-lg-3 my-5 d-flex justify-content-center align-items-center">
                    <img src="{{ asset('assets/img/partner.png') }}" alt="Partner" />
                </div>
                <div class="col-6 col-lg-3 my-5 d-flex justify-content-center align-items-center">
                    <img src="{{ asset('assets/img/partner.png') }}" alt="Partner" />
                </div>
                <div class="col-6 col-lg-3 my-5 d-flex justify-content-center align-items-center">
                    <img src="{{ asset('assets/img/partner.png') }}" alt="Partner" />
                </div>
                <div class="col-6 col-lg-3 my-5 d-flex justify-content-center align-items-center">
                    <img src="{{ asset('assets/img/partner.png') }}" alt="Partner" />
                </div>
                <div class="col-6 col-lg-3 my-5 d-flex justify-content-center align-items-center">
                    <img src="{{ asset('assets/img/partner.png') }}" alt="Partner" />
                </div>
            </div>
        </div>
    </section>
    <!--Partners Section END-->

    <!--118 Call Center Section START-->
    <section class="page-section sky-gradient">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h1 class="fs-title text-light">*118</h1>
                    <h3 class="text-light fw-light my-4">Təbii mineral suyun qaynağı</h3>
                    <small class="page-subtitle-light fw-light text-light">”Vita1000” mineral su yatağından sənaye
                        məqsədilə istifadəyə XX əsrin 50-ci illərindən
                        başlanmışdır. İlk dəfə olaraq yatağın su ehtiyatları hesablanmış və 1968-ci ildə Moskvanın
                        Dövlət
                        Ehtiyatlar Komissiyasında təsdiq edilmişdir.</small>
                </div>
                <div class="col-lg-6">
                    <img id="product-118" height="600px" src="{{ asset('assets/img/multi-bottles.png') }}"
                        alt="Vita1000" />
                </div>
            </div>
        </div>
    </section>
    <!--118 Call Center Section END-->


    <!--Certificates Section START-->
    <section class="page-section">
        <div class="container">
            <div class="d-flex flex-column align-items-center">
                <h1 class="page-title text-center">Sertifikatlarımız</h1>
                <p class="page-subtitle text-center my-4">”Vita1000” mineral su yatağından sənaye məqsədilə istifadəyə
                    XX
                    əsrin
                    50-ci illərindən
                    başlanmışdır.</p>
            </div>
            <!-- Swiper -->
            <div class="swiper certificateSlider">
                <div class="swiper-wrapper my-6">
                    <div class="swiper-slide">
                        <div class="certificate-slide">
                            <div
                                class="sky-gradient rounded d-flex flex-column justify-content-between align-items-center">
                                <div class="w-100 p-4 d-flex align-items-center justify-content-between">
                                    <h6 class="text-light my-3">PECB MS ISO 9001:2015</h6>
                                    <a href="#" class="circle-button"><img
                                            src="{{ asset('assets/img/icons/download.svg') }}" alt="">
                                    </a>
                                </div>
                                <img class="certificate-slide-img mx-auto"
                                    src="{{ asset('assets/img/certificate.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="certificate-slide">
                            <div
                                class="sky-gradient rounded d-flex flex-column justify-content-between align-items-center">
                                <div class="w-100 p-4 d-flex align-items-center justify-content-between">
                                    <h6 class="text-light my-3">PECB MS ISO 9001:2015</h6>
                                    <a href="#" class="circle-button"><img
                                            src="{{ asset('assets/img/icons/download.svg') }}" alt="">
                                    </a>
                                </div>
                                <img class="certificate-slide-img mx-auto"
                                    src="{{ asset('assets/img/certificate.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="certificate-slide">
                            <div
                                class="sky-gradient rounded d-flex flex-column justify-content-between align-items-center">
                                <div class="w-100 p-4 d-flex align-items-center justify-content-between">
                                    <h6 class="text-light my-3">PECB MS ISO 9001:2015</h6>
                                    <a href="#" class="circle-button"><img
                                            src="{{ asset('assets/img/icons/download.svg') }}" alt="">
                                    </a>
                                </div>
                                <img class="certificate-slide-img mx-auto"
                                    src="{{ asset('assets/img/certificate.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="certificate-slide">
                            <div
                                class="sky-gradient rounded d-flex flex-column justify-content-between align-items-center">
                                <div class="w-100 p-4 d-flex align-items-center justify-content-between">
                                    <h6 class="text-light my-3">PECB MS ISO 9001:2015</h6>
                                    <a href="#" class="circle-button"><img
                                            src="{{ asset('assets/img/icons/download.svg') }}" alt="">
                                    </a>
                                </div>
                                <img class="certificate-slide-img mx-auto"
                                    src="{{ asset('assets/img/certificate.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="certificate-slide">
                            <div
                                class="sky-gradient rounded d-flex flex-column justify-content-between align-items-center">
                                <div class="w-100 p-4 d-flex align-items-center justify-content-between">
                                    <h6 class="text-light my-3">PECB MS ISO 9001:2015</h6>
                                    <a href="#" class="circle-button"><img
                                            src="{{ asset('assets/img/icons/download.svg') }}" alt="">
                                    </a>
                                </div>
                                <img class="certificate-slide-img mx-auto"
                                    src="{{ asset('assets/img/certificate.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-scrollbar"></div>
            </div>
        </div>
    </section>
    <!--Certificates Section END-->

    <!--Gallery Section START-->
    <section class="page-section">
        <div class="container">
            <div class="d-flex flex-column align-items-center">
                <h1 class="page-title text-center">Qalereya</h1>
                <p class="page-subtitle text-center my-4">”Vita1000” mineral su yatağından sənaye məqsədilə istifadəyə
                    XX
                    əsrin
                    50-ci illərindən
                    başlanmışdır.</p>
            </div>
            <!-- Swiper -->
            <div class="swiper gallerySlider">
                <div class="swiper-wrapper my-6">
                    <div class="swiper-slide">
                        <div class="gallery-slide">
                            <a href="{{ asset('assets/img/gallery.jpg') }}"
                                class="lightbox-a rounded d-flex flex-column justify-content-between align-items-center">
                                <img class="gallery-slide-img rounded mx-auto"
                                    src="{{ asset('assets/img/gallery.jpg') }}" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="gallery-slide">
                            <a href="{{ asset('assets/img/gallery1.jpg') }}"
                                class="lightbox-a rounded d-flex flex-column justify-content-between align-items-center">
                                <img class="gallery-slide-img rounded mx-auto"
                                    src="{{ asset('assets/img/gallery1.jpg') }}" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="gallery-slide">
                            <a href="{{ asset('assets/img/gallery2.jpg') }}"
                                class="lightbox-a rounded d-flex flex-column justify-content-between align-items-center">
                                <img class="gallery-slide-img rounded mx-auto"
                                    src="{{ asset('assets/img/gallery2.jpg') }}" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="gallery-slide">
                            <a href="{{ asset('assets/img/gallery3.jpg') }}"
                                class="lightbox-a rounded d-flex flex-column justify-content-between align-items-center">
                                <img class="gallery-slide-img rounded mx-auto"
                                    src="{{ asset('assets/img/gallery3.jpg') }}" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="gallery-slide">
                            <a href="{{ asset('assets/img/gallery4.jpg') }}"
                                class="lightbox-a rounded d-flex flex-column justify-content-between align-items-center">
                                <img class="gallery-slide-img rounded mx-auto"
                                    src="{{ asset('assets/img/gallery4.jpg') }}" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="swiper-scrollbar"></div>
            </div>
        </div>
    </section>
    <!--Gallery Section END-->

    <!--Blog Section START-->
    <section class="page-section">
        <div class="container">
            <div class="d-flex flex-column align-items-center">
                <h1 class="page-title text-center">Bloq</h1>
                <p class="page-subtitle text-center my-4">”Vita1000” mineral su yatağından sənaye məqsədilə istifadəyə
                    XX
                    əsrin
                    50-ci illərindən başlanmışdır. </p>
                <a href="{{ url('/blog') }}" class="light-btn">Bütün bloqlar <img class="mr-2"
                        src="{{ asset('assets/img/icons/arrow_outward.svg') }}" alt="icon"> </a>
            </div>
            <div class="row row-cols-1 row-cols-md-3 g-4 my-3">
                <div class="col">
                    <div class="card h-100">
                        <img src="{{ asset('assets/img/blog-img.jpg') }}" class="card-img-top" />
                        <div class="card-body">
                            <h6 class="card-title">Card title</h6>
                            <p class="card-text text-secondary my-3">Some quick example text to build on the card title
                                and
                                make up the bulk of the card's content.</p>
                            <a class="card-link d-flex align-items-center mt-3"
                                href="{{ url('/blog-details') }}"><span>Card link</span>
                                <img class="d-inline pl-2" src="{{ asset('assets/img/icons/arrow_forward_ios.svg') }}"
                                    alt="icon"></a>
                        </div>
                        <div class="card-footer py-3">
                            <small class="text-muted">Last updated 5 mins ago</small>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="{{ asset('assets/img/blog-img.jpg') }}" class="card-img-top" />
                        <div class="card-body">
                            <h6 class="card-title">Card title</h6>
                            <p class="card-text text-secondary my-3">Some quick example text to build on the card title
                                and
                                make up the bulk of the card's content.</p>
                            <a class="card-link d-flex align-items-center mt-3"
                                href="{{ url('/blog-details') }}"><span>Card link</span>
                                <img class="d-inline pl-2" src="{{ asset('assets/img/icons/arrow_forward_ios.svg') }}"
                                    alt="icon"></a>
                        </div>
                        <div class="card-footer py-3">
                            <small class="text-muted">Last updated 5 mins ago</small>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="{{ asset('assets/img/blog-img.jpg') }}" class="card-img-top" />
                        <div class="card-body">
                            <h6 class="card-title">Card title</h6>
                            <p class="card-text text-secondary my-3">Some quick example text to build on the card title
                                and
                                make up the bulk of the card's content.</p>
                            <a class="card-link d-flex align-items-center mt-3"
                                href="{{ url('/blog-details') }}"><span>Card link</span>
                                <img class="d-inline pl-2" src="{{ asset('assets/img/icons/arrow_forward_ios.svg') }}"
                                    alt="icon"></a>
                        </div>
                        <div class="card-footer py-3">
                            <small class="text-muted">Last updated 5 mins ago</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Blog Section END-->
@endsection

@section('page_scripts')
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="{{ asset('assets/js/simple-lightbox.js?v2.11.0') }}"></script>
    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 1,
            grabCursor: true,
            spaceBetween: 10,
            scrollbar: {
                el: ".swiper-scrollbar",
            },
            breakpoints: {
                640: {
                    slidesPerView: 2,
                    spaceBetween: 20,
                },
                768: {
                    slidesPerView: 3,
                    spaceBetween: 40,
                },
                1024: {
                    slidesPerView: 4,
                    spaceBetween: 50,
                },
            },
        });

        var swiper2 = new Swiper(".certificateSlider", {
            slidesPerView: 1,
            spaceBetween: 10,
            grabCursor: true,
            scrollbar: {
                el: ".swiper-scrollbar",
            },
            breakpoints: {
                640: {
                    slidesPerView: 1,
                    spaceBetween: 20,
                },
                768: {
                    slidesPerView: 2,
                    spaceBetween: 40,
                },
                1024: {
                    slidesPerView: 3,
                    spaceBetween: 50,
                },
            },
        });

        var swiper3 = new Swiper(".gallerySlider", {
            slidesPerView: 1,
            spaceBetween: 20,
            grabCursor: true,
            scrollbar: {
                el: ".swiper-scrollbar",
            },
            breakpoints: {
                640: {
                    slidesPerView: 1,
                    spaceBetween: 20,
                },
                768: {
                    slidesPerView: 2,
                    spaceBetween: 40,
                },
                1024: {
                    slidesPerView: 3,
                    spaceBetween: 50,
                },
            },
        });


        var gallery = new SimpleLightbox('.gallerySlider a.lightbox-a', {});

        // let parallaxBox = document.querySelector('section.home-banner-section');
        // let parallaxImg = document.querySelector('.home-banner-img');
        // let parallaxRock = document.querySelector('.home-banner-rock');
        // window.addEventListener('scroll', (e) => {

        //     let y = window.scrollY;

        //     parallaxImg.style.bottom = -y - 50 + `px`;
        //     parallaxImg.style.right = `${y / 2}px`;
        //     //console.log(y);
        //     parallaxImg.style.transform = `scale(${1 + y / 1200})`;
        // });


        // function mouseMove(event) {
        //     let x = event.clientX;
        //     let y = event.clientY;

        //     parallaxImg.style.transform = `translate(-${x/40 + 1}px,-${y / 40}px)`;
        //     parallaxRock.style.transform = `translate(${x/40 - 1}px,${y / 40}px)`;

        // }

        // window.onmousemove = mouseMove;
    </script>
@endsection
