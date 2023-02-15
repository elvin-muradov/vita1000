@extends('index')

@section('title')
    - Məhsullarımız
@endsection

@section('content')
    @include('partials.header')

    <section class="page-section">
        <div class="container">
            <h1 class="page-title">Məhsullarımız</h1>
            <ul class="nav nav-tabs d-flex justify-content-start gap-2 my-12 border-0" id="myTab" role="tablist">
                <li role="presentation">
                    <button class="product-cat-nav-link active" id="cat1-tab" data-bs-toggle="tab"
                        data-bs-target="#cat1-tab-pane" type="button" role="tab" aria-controls="cat1-tab-pane"
                        aria-selected="true">
                        <div class="d-flex justify-content-center">
                            <div>
                                <span class="d-block my-2 fw-bolder text-center">Qazlı</span>
                            </div>
                        </div>
                    </button>
                </li>
                <li role="presentation">
                    <button class="product-cat-nav-link" id="cat2-tab" data-bs-toggle="tab"
                        data-bs-target="#cat2-tab-pane" type="button" role="tab" aria-controls="cat2-tab-pane"
                        aria-selected="false">
                        <div class="d-flex justify-content-center">
                            <div>
                                <span class="d-block my-2 fw-bolder text-center">Qazsız</span>
                            </div>
                        </div>
                    </button>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="cat1-tab-pane" role="tabpanel" aria-labelledby="cat1-tab"
                    tabindex="0">
                    <div class="row">
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3 my-12">
                            <div class="product-slide">
                                <div class="product-slide-img-overlay">
                                    <div class="sky-gradient">
                                        <img class="product-slide-img" src="http://vita1000.test/assets/img/product-img.png" alt="">
                                    </div>
                                </div>
                                <div class="product-info text-center d-flex flex-column align-items-center">
                                    <h4 class="my-3">Vita1000 20L</h4>
                                    <small class="text-secondary">”Vita1000” mineral su yatağından sənaye məqsədilə</small>
                                    <a href="#" class="light-btn bg-primary text-light fs-6 my-3">Məhsulu al</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3 my-12">
                            <div class="product-slide">
                                <div class="product-slide-img-overlay">
                                    <div class="sky-gradient">
                                        <img class="product-slide-img" src="http://vita1000.test/assets/img/product-img.png" alt="">
                                    </div>
                                </div>
                                <div class="product-info text-center d-flex flex-column align-items-center">
                                    <h4 class="my-3">Vita1000 20L</h4>
                                    <small class="text-secondary">”Vita1000” mineral su yatağından sənaye məqsədilə</small>
                                    <a href="#" class="light-btn bg-primary text-light fs-6 my-3">Məhsulu al</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3 my-12">
                            <div class="product-slide">
                                <div class="product-slide-img-overlay">
                                    <div class="sky-gradient">
                                        <img class="product-slide-img" src="http://vita1000.test/assets/img/product-img.png" alt="">
                                    </div>
                                </div>
                                <div class="product-info text-center d-flex flex-column align-items-center">
                                    <h4 class="my-3">Vita1000 20L</h4>
                                    <small class="text-secondary">”Vita1000” mineral su yatağından sənaye məqsədilə</small>
                                    <a href="#" class="light-btn bg-primary text-light fs-6 my-3">Məhsulu al</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3 my-12">
                            <div class="product-slide">
                                <div class="product-slide-img-overlay">
                                    <div class="sky-gradient">
                                        <img class="product-slide-img" src="http://vita1000.test/assets/img/product-img.png" alt="">
                                    </div>
                                </div>
                                <div class="product-info text-center d-flex flex-column align-items-center">
                                    <h4 class="my-3">Vita1000 20L</h4>
                                    <small class="text-secondary">”Vita1000” mineral su yatağından sənaye məqsədilə</small>
                                    <a href="#" class="light-btn bg-primary text-light fs-6 my-3">Məhsulu al</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3 my-12">
                            <div class="product-slide">
                                <div class="product-slide-img-overlay">
                                    <div class="sky-gradient">
                                        <img class="product-slide-img" src="http://vita1000.test/assets/img/product-img.png" alt="">
                                    </div>
                                </div>
                                <div class="product-info text-center d-flex flex-column align-items-center">
                                    <h4 class="my-3">Vita1000 20L</h4>
                                    <small class="text-secondary">”Vita1000” mineral su yatağından sənaye məqsədilə</small>
                                    <a href="#" class="light-btn bg-primary text-light fs-6 my-3">Məhsulu al</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3 my-12">
                            <div class="product-slide">
                                <div class="product-slide-img-overlay">
                                    <div class="sky-gradient">
                                        <img class="product-slide-img" src="http://vita1000.test/assets/img/product-img.png" alt="">
                                    </div>
                                </div>
                                <div class="product-info text-center d-flex flex-column align-items-center">
                                    <h4 class="my-3">Vita1000 20L</h4>
                                    <small class="text-secondary">”Vita1000” mineral su yatağından sənaye məqsədilə</small>
                                    <a href="#" class="light-btn bg-primary text-light fs-6 my-3">Məhsulu al</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3 my-12">
                            <div class="product-slide">
                                <div class="product-slide-img-overlay">
                                    <div class="sky-gradient">
                                        <img class="product-slide-img" src="http://vita1000.test/assets/img/product-img.png" alt="">
                                    </div>
                                </div>
                                <div class="product-info text-center d-flex flex-column align-items-center">
                                    <h4 class="my-3">Vita1000 20L</h4>
                                    <small class="text-secondary">”Vita1000” mineral su yatağından sənaye məqsədilə</small>
                                    <a href="#" class="light-btn bg-primary text-light fs-6 my-3">Məhsulu al</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3 my-12">
                            <div class="product-slide">
                                <div class="product-slide-img-overlay">
                                    <div class="sky-gradient">
                                        <img class="product-slide-img" src="http://vita1000.test/assets/img/product-img.png" alt="">
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
                </div>
                <div class="tab-pane fade" id="cat2-tab-pane" role="tabpanel" aria-labelledby="cat2-tab" tabindex="0">
                    <div class="row">
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3 my-12">
                            <div class="product-slide">
                                <div class="product-slide-img-overlay">
                                    <div class="sky-gradient">
                                        <img class="product-slide-img" src="{{ asset('assets/img/bottle-slim.png') }}" alt="">
                                    </div>
                                </div>
                                <div class="product-info text-center d-flex flex-column align-items-center">
                                    <h4 class="my-3">Vita1000 20L</h4>
                                    <small class="text-secondary">”Vita1000” mineral su yatağından sənaye məqsədilə</small>
                                    <a href="#" class="light-btn bg-primary text-light fs-6 my-3">Məhsulu al</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3 my-12">
                            <div class="product-slide">
                                <div class="product-slide-img-overlay">
                                    <div class="sky-gradient">
                                        <img class="product-slide-img" src="{{ asset('assets/img/bottle-slim.png') }}" alt="">
                                    </div>
                                </div>
                                <div class="product-info text-center d-flex flex-column align-items-center">
                                    <h4 class="my-3">Vita1000 20L</h4>
                                    <small class="text-secondary">”Vita1000” mineral su yatağından sənaye məqsədilə</small>
                                    <a href="#" class="light-btn bg-primary text-light fs-6 my-3">Məhsulu al</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3 my-12">
                            <div class="product-slide">
                                <div class="product-slide-img-overlay">
                                    <div class="sky-gradient">
                                        <img class="product-slide-img" src="{{ asset('assets/img/bottle-slim.png') }}" alt="">
                                    </div>
                                </div>
                                <div class="product-info text-center d-flex flex-column align-items-center">
                                    <h4 class="my-3">Vita1000 20L</h4>
                                    <small class="text-secondary">”Vita1000” mineral su yatağından sənaye məqsədilə</small>
                                    <a href="#" class="light-btn bg-primary text-light fs-6 my-3">Məhsulu al</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3 my-12">
                            <div class="product-slide">
                                <div class="product-slide-img-overlay">
                                    <div class="sky-gradient">
                                        <img class="product-slide-img" src="{{ asset('assets/img/bottle-slim.png') }}" alt="">
                                    </div>
                                </div>
                                <div class="product-info text-center d-flex flex-column align-items-center">
                                    <h4 class="my-3">Vita1000 20L</h4>
                                    <small class="text-secondary">”Vita1000” mineral su yatağından sənaye məqsədilə</small>
                                    <a href="#" class="light-btn bg-primary text-light fs-6 my-3">Məhsulu al</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3 my-12">
                            <div class="product-slide">
                                <div class="product-slide-img-overlay">
                                    <div class="sky-gradient">
                                        <img class="product-slide-img" src="{{ asset('assets/img/bottle-slim.png') }}" alt="">
                                    </div>
                                </div>
                                <div class="product-info text-center d-flex flex-column align-items-center">
                                    <h4 class="my-3">Vita1000 20L</h4>
                                    <small class="text-secondary">”Vita1000” mineral su yatağından sənaye məqsədilə</small>
                                    <a href="#" class="light-btn bg-primary text-light fs-6 my-3">Məhsulu al</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3 my-12">
                            <div class="product-slide">
                                <div class="product-slide-img-overlay">
                                    <div class="sky-gradient">
                                        <img class="product-slide-img" src="{{ asset('assets/img/bottle-slim.png') }}" alt="">
                                    </div>
                                </div>
                                <div class="product-info text-center d-flex flex-column align-items-center">
                                    <h4 class="my-3">Vita1000 20L</h4>
                                    <small class="text-secondary">”Vita1000” mineral su yatağından sənaye məqsədilə</small>
                                    <a href="#" class="light-btn bg-primary text-light fs-6 my-3">Məhsulu al</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3 my-12">
                            <div class="product-slide">
                                <div class="product-slide-img-overlay">
                                    <div class="sky-gradient">
                                        <img class="product-slide-img" src="{{ asset('assets/img/bottle-slim.png') }}" alt="">
                                    </div>
                                </div>
                                <div class="product-info text-center d-flex flex-column align-items-center">
                                    <h4 class="my-3">Vita1000 20L</h4>
                                    <small class="text-secondary">”Vita1000” mineral su yatağından sənaye məqsədilə</small>
                                    <a href="#" class="light-btn bg-primary text-light fs-6 my-3">Məhsulu al</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3 my-12">
                            <div class="product-slide">
                                <div class="product-slide-img-overlay">
                                    <div class="sky-gradient">
                                        <img class="product-slide-img" src="{{ asset('assets/img/bottle-slim.png') }}" alt="">
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
                </div>
            </div>
        </div>
    </section>
@endsection
