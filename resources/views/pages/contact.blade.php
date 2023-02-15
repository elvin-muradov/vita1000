@extends('index')

@section('title')
    - Blog details
@endsection

@section('content')
    @include('partials.header-white')

    <section class="page-section pt-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-between">
                    <div class="py-6">
                        <h1 class="page-title">Bizimlə Əlaqə</h1>
                        <p class="page-subtitle my-4">”Vita1000” mineral su yatağından sənaye məqsədilə istifadəyə XX əsrin
                            50-ci
                            illərindən başlanmışdır. </p>
                        <a href="#" class="light-btn my-4">
                            Bizə sorğu göndər <img class="mr-2" src="{{ asset('assets/img/icons/arrow_outward.svg') }}" alt="icon">
                        </a>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 my-2">
                            <small class="text-secondary">Əlaqə nömrəsi</small>
                            <h4 class="my-2">+994 55 123 45 67</h4>
                        </div>
                        <div class="col-lg-6 my-2">
                            <small class="text-secondary">Elektron poçt</small>
                            <h4 class="my-2">help@hstudio.com</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 my-4">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3614.6342050039234!2d49.828579810412045!3d40.37487939482494!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40307dbb79863ed7%3A0x96ac2380a072bb80!2zRsO8enVsaSBtZXlkYW7EsQ!5e0!3m2!1str!2s!4v1675406918263!5m2!1str!2s"
                        height="400" style="border:0;width:100%;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>
@endsection
