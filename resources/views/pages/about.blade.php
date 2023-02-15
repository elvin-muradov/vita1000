@extends('index')

@section('title')
    - Haqqımızda
@endsection

 

@section('content')
    @include('partials.header-white')

    <!--Banner Section START-->
    <section class="page-section pt-0 pb-4">
        <div class="container">
            <div class="about-us-banner row pt-4 px-2"
                style="background-image:url('{{ asset('assets/img/about-us/banner.jpg') }}');">
                <div class="col-lg-6 banner-text">
                    <h1 class="banner-title my-3">Haqqımızda</h1>
                    <p class="banner-subtitle">”Vita1000” mineral su yatağından sənaye məqsədilə istifadəyə XX əsrin 50-ci
                        illərindən başlanmışdır. </p>
                </div>
                <div class="col-lg-6 banner-bottles">
                    <img src="{{ asset('assets/img/about-us/banner-bottles.png') }}" alt="">
                </div>
            </div>
        </div>
    </section>
    <!--Banner Section END-->

    <!--Why Choose Us Section START-->
    <section class="my-4">
        <div class="container">
            <div class="about-us-why row">
                <div class="col-lg-4">
                    <div class="circle mx-auto my-4"><img src="{{ asset('assets/img/icons/drop.svg') }}" alt="">
                    </div>
                    <h4 class="about-us-why-title text-center my-6">Niyə Vita1000?</h4>
                    <p class="about-us-why-description">
                        ”Sirab” mineral su yatağından sənaye məqsədilə
                    </p>
                </div>
                <div class="col-lg-4">
                    <div class="circle mx-auto my-4"><img src="{{ asset('assets/img/icons/water.svg') }}" alt="">
                    </div>
                    <h4 class="about-us-why-title text-center my-6">Niyə Vita1000?</h4>
                    <p class="about-us-why-description">
                        ”Sirab” mineral su yatağından sənaye məqsədilə
                    </p>
                </div>
                <div class="col-lg-4">
                    <div class="circle mx-auto my-4"><img src="{{ asset('assets/img/icons/water_ph.svg') }}" alt="">
                    </div>
                    <h4 class="about-us-why-title text-center my-6">Niyə Vita1000?</h4>
                    <p class="about-us-why-description">
                        ”Sirab” mineral su yatağından sənaye məqsədilə
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!--Why Choose Us Section END-->

    <!--About US Info 1 Section START-->
    <section class="page-section position-relative overflow-hidden">
        <div class="container">
            <div class="about-us-info-1 row align-items-center">
                <div class="col-lg-6">
                    <img class="about-info-img" src="{{ asset('assets/img/about-info-1.png') }}" alt="About Us Info" />
                </div>
                <div class="col-lg-6">
                    <h1 class="page-title my-6">Haqqımızda</h1>
                    <p class="page-subtitle my-6">
                        Our mission came from hardened lessons in the Marine Corps and emergency response. We wanted to help
                        men and women perform at their best, whether on the frontline, the fire line, or the fall line.
                    </p>
                    <p class="page-subtitle my-6">
                        The inspiration for RecPak came while with a sniper unit. Operating in unforgiving terrain for days
                        on end, small things had a big impact. Maintaining peak performance was hard on energy bars and
                        rations. Space, weight, and time was essential to mission success.
                    </p>
                    <p class="page-subtitle my-6">
                        To find a better solution, we spent two years working with experts, experimenting with different
                        ingredients and packaging, and tested it all on the trail. During our successful Kickstarter
                        campaign, we were inspired by the positive reaction from outdoor enthusiasts of every stripe - from
                        endurance cyclists to wildland firefighters to mountain guides.
                    </p>
                </div>
            </div>
        </div>
        {{-- <img class="about-us-info-1-bg" src="{{ asset('assets/img/about-info-1-bg.png') }}" alt="About Info BG"> --}}
    </section>
    <!--About US Info 1 Section END-->

    <!--About US Info 2 Section START-->
    <section class="page-section blue-bg">
        <div class="container">
            <div class="about-us-info-2 row align-items-center">
                <div class="col-lg-6">
                    <img class="about-info-img" src="{{ asset('assets/img/about-info-2.png') }}" alt="About Us Info" />
                </div>
                <div class="col-lg-6">
                    <h1 class="page-title-light my-6">Haqqımızda</h1>
                    <p class="page-subtitle-light my-6">
                        Our mission came from hardened lessons in the Marine Corps and emergency response. We wanted to help
                        men and women perform at their best, whether on the frontline, the fire line, or the fall line.
                    </p>
                    <p class="page-subtitle-light my-6">
                        The inspiration for RecPak came while with a sniper unit. Operating in unforgiving terrain for days
                        on end, small things had a big impact. Maintaining peak performance was hard on energy bars and
                        rations. Space, weight, and time was essential to mission success.
                    </p>
                    <p class="page-subtitle-light my-6">
                        To find a better solution, we spent two years working with experts, experimenting with different
                        ingredients and packaging, and tested it all on the trail. During our successful Kickstarter
                        campaign, we were inspired by the positive reaction from outdoor enthusiasts of every stripe - from
                        endurance cyclists to wildland firefighters to mountain guides.
                    </p>
                    <a class="light-btn my-6" href="#">Daha çox oxu</a>
                </div>
            </div>
        </div>
    </section>
    <!--About US Info 2 Section END-->

    <!--Partners Section START-->
    <section class="page-section">
        <div class="container">
            <h1 class="page-title my-6 text-center">Partynorlarımız</h1>
            <p class="page-subtitle my-6 text-center">”Vita1000” mineral su yatağından sənaye məqsədilə istifadəyə XX əsrin
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

    <!--Map Section START-->
    <section class="page-section">
        <div class="container sky-gradient bordered rounded overflow-hidden">
            <div class="row">
                <div class="col-lg-5 px-6 py-6 d-flex flex-column justify-content-between align-items-start gap-4">
                    <h1 class="page-title-light fs-2 fw-light">
                        Vita1000 artıq 6-dan çox ölkədə fəaliyyət göstərir
                    </h1>
                    <a class="light-btn" href="#">Daha çox oxu</a>
                </div>
                <div class="col-lg-7 pt-5">
                    <img class="w-100 h-100" src="{{ asset('assets/img/about-map.png') }}" alt="About Us MAP">
                </div>
            </div>
        </div>
    </section>
    <!--Map Section END-->
@endsection


