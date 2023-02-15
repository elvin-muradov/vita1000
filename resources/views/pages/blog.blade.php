@extends('index')

@section('title')
    - Blog
@endsection

@section('content')
    @include('partials.header')

    <section class="page-section">
        <div class="container">
            <h1 class="page-title">Bloq</h1>
            <p class="page-subtitle my-3">”Vita1000” mineral su yatağından sənaye məqsədilə istifadəyə XX əsrin 50-ci
                illərindən
                başlanmışdır. </p>
            <div class="row row-cols-1 row-cols-md-3 g-4 my-3">
                <div class="col">
                    <div class="card h-100">
                        <img src="{{ asset('assets/img/blog-img.jpg') }}" class="card-img-top" />
                        <div class="card-body">
                            <h6 class="card-title">Card title</h6>
                            <p class="card-text text-secondary my-3">Some quick example text to build on the card title and
                                make up the bulk of the card's content.</p>
                            <a class="card-link d-flex align-items-center mt-3" href="#"><span>Card link</span> <img
                                    class="d-inline pl-2" src="{{ asset('assets/img/icons/arrow_forward_ios.svg') }}"
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
                            <p class="card-text text-secondary my-3">Some quick example text to build on the card title and
                                make up the bulk of the card's content.</p>
                            <a class="card-link d-flex align-items-center mt-3" href="#"><span>Card link</span> <img
                                    class="d-inline pl-2" src="{{ asset('assets/img/icons/arrow_forward_ios.svg') }}"
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
                            <p class="card-text text-secondary my-3">Some quick example text to build on the card title and
                                make up the bulk of the card's content.</p>
                            <a class="card-link d-flex align-items-center mt-3" href="#"><span>Card link</span> <img
                                    class="d-inline pl-2" src="{{ asset('assets/img/icons/arrow_forward_ios.svg') }}"
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
                            <p class="card-text text-secondary my-3">Some quick example text to build on the card title and
                                make up the bulk of the card's content.</p>
                            <a class="card-link d-flex align-items-center mt-3" href="#"><span>Card link</span> <img
                                    class="d-inline pl-2" src="{{ asset('assets/img/icons/arrow_forward_ios.svg') }}"
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
                            <p class="card-text text-secondary my-3">Some quick example text to build on the card title and
                                make up the bulk of the card's content.</p>
                            <a class="card-link d-flex align-items-center mt-3" href="#"><span>Card link</span> <img
                                    class="d-inline pl-2" src="{{ asset('assets/img/icons/arrow_forward_ios.svg') }}"
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
                            <p class="card-text text-secondary my-3">Some quick example text to build on the card title and
                                make up the bulk of the card's content.</p>
                            <a class="card-link d-flex align-items-center mt-3" href="#"><span>Card link</span> <img
                                    class="d-inline pl-2" src="{{ asset('assets/img/icons/arrow_forward_ios.svg') }}"
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
@endsection
