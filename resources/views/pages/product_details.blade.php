@extends('index')

@section('title')
    - Məhsul Adı
@endsection

@section('page_styles')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <link rel="stylesheet" href="{{ asset('assets/css/swiper.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/simple-lightbox.css?v2.11.0') }}" />
@endsection

@section('content')
    @include('partials.header')

    <!--Product Section START-->
    <section class="page-section">
        <div class="container">
            <div class="row product-details-bg">
                <div class="product-slide m-0 row col-lg-6">
                    <div class="col-lg-2 bg-transparent swiper mySwiper mx-0">
                        <div class="swiper-wrapper product-slide-nav">
                            <div class="swiper-slide product-slide-nav-link">
                                <img height="100px" src="{{asset('assets/img/bottle.png')}}" />
                            </div>
                            <div class="swiper-slide product-slide-nav-link">
                                <img src="{{asset('assets/img/bottle.png')}}" />
                            </div>
                            <div class="swiper-slide product-slide-nav-link">
                                <img src="{{asset('assets/img/bottle.png')}}" />
                            </div>
                            <div class="swiper-slide product-slide-nav-link">
                                <img src="{{asset('assets/img/bottle.png')}}" />
                            </div>
                            <div class="swiper-slide product-slide-nav-link">
                                <img src="{{asset('assets/img/bottle.png')}}" />
                            </div>
                            <div class="swiper-slide product-slide-nav-link">
                                <img src="{{asset('assets/img/bottle.png')}}" />
                            </div>
                            <div class="swiper-slide product-slide-nav-link">
                                <img src="{{asset('assets/img/bottle.png')}}" />
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                    <div class="col-lg-10 swiper mySwiper2 p-4 mx-0">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide d-flex justify-content-center align-items-center">
                                <img height="400px" src="{{asset('assets/img/multi-bottles.png')}}" />
                            </div>
                            <div class="swiper-slide d-flex justify-content-center align-items-center">
                                <img height="400px" src="{{asset('assets/img/bottle.png')}}" />
                            </div>
                            <div class="swiper-slide d-flex justify-content-center align-items-center">
                                <img height="400px" src="{{asset('assets/img/bottle.png')}}" />
                            </div>
                            <div class="swiper-slide d-flex justify-content-center align-items-center">
                                <img height="400px" src="{{asset('assets/img/bottle.png')}}" />
                            </div>
                            <div class="swiper-slide d-flex justify-content-center align-items-center">
                                <img height="400px" src="{{asset('assets/img/bottle.png')}}" />
                            </div>
                            <div class="swiper-slide d-flex justify-content-center align-items-center">
                                <img height="400px" src="{{asset('assets/img/bottle.png')}}" />
                            </div>
                            <div class="swiper-slide d-flex justify-content-center align-items-center">
                                <img height="400px" src="{{asset('assets/img/bottle.png')}}" />
                            </div>
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </div>
                <div class="col-lg-6 px-4">
                    <div class="product-info my-4">
                        <h4>Vita1000 Su damacanası 20L</h4>
                        <h5 class="my-3 fw-bolder">$4</h5>
                        <small class="text-secondary">Phasellus sed volutpat orci. Fusce eget lore mauris vehicula elementum gravida nec dui. Aenean aliquam varius ipsum, non ultricies tellus sodales eu. Donec dignissim viverra nunc, ut aliquet magna posuere eget.</small>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="calc-qty d-flex my-4">
                                <button class="decrease-qty"><i class="fas fa-minus"></i></button>
                                <input type="number" name="qty" class="product-qty" value="1">
                                <button class="increase-qty"><i class="fas fa-plus"></i></button>
                            </div>
                            <a href="#" class="cart-checkout-btn mx-3">ADD TO CART</a>
                        </div>
                        <div class="product-share my-2">
                            <a class="text-dark d-inline" href="#">
                                <i class="fas fa-share-alt"></i>
                                <small class="mx-1">SHARE</small>
                            </a>
                        </div>
                        <div class="accordion accordion-flush my-4 p-0" id="accordionFlushExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingTwo">
                                    <a class="accordion-button p-0 py-2 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                        Description
                                    </a>
                                </h2>
                                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body p-0 py-3">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingThree">
                                    <a class="accordion-button p-0 py-2 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                        Additional Information
                                    </a>
                                </h2>
                                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body p-0 py-3">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Product Section END-->

    <!--Related Products Section START-->
    <section class="page-section">
        <div class="container">
            <div class="d-flex flex-column">
                <h1 class="page-title text-start my-4">Bunları da tövsiyyə edirik</h1>
            </div>
            <!-- Swiper -->
            <div class="swiper relatedSwiper">
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
    <!--Related Products Section END-->
@endsection

@section('page_scripts')
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="{{ asset('assets/js/simple-lightbox.js?v2.11.0') }}"></script>
    <script>
        let incBtns = document.querySelectorAll('.increase-qty');
        let decBtns = document.querySelectorAll('.decrease-qty');

        incBtns.forEach(e => {
            e.addEventListener('click', () => {
                e.previousElementSibling.value++;
            });
        });

        decBtns.forEach(e => {
            e.addEventListener('click', () => {
                e.nextElementSibling.value < 2 ? 1 : e.nextElementSibling.value--;
            });
        });

        var relatedSwiper = new Swiper(".relatedSwiper", {
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

        var navSwiper = new Swiper(".mySwiper", {
            spaceBetween: 20,
            slidesPerView: 3,
            breakpoints: {
                640:{
                    direction: "vertical",
                    spaceBetween: 10,
                    slidesPerView: 2,
                },
            },
            pagination: {
                el: ".swiper-pagination",
            },
        });

        var singleSwiper = new Swiper(".mySwiper2", {
            spaceBetween: 10,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            thumbs: {
                swiper: navSwiper,
            },
        });
    </script>
@endsection
