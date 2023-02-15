@extends('index')

@section('title')
    - Sifarişiniz Tamamlandı
@endsection

@section('content')
    @include('partials.header-white')

    <section class="page-section">
        <div class="container">
            <div class="order-completed-box text-center">
                <div class="order-completed-icon my-4">
                    <i class="fas fa-check"></i>
                </div>
                <h4 class="page-title my-4 fw-bold">Sifarişiniz tamamlandı!</h4>
                <small class="text-secondary my-4">Təşəkkürlər, sifarişiniz qəbul olundu!</small>
            </div>
            <div class="order-completed-details row m-4">
                <div class="col-lg-3">
                    <small class="text-secondary my-2">Sifariş nömrəsi</small>
                    <p class="page-subtitle text-dark my-2 fw-bolder">13119</p>
                </div>
                <div class="col-lg-3">
                    <small class="text-secondary my-2">Tarix</small>
                    <p class="page-subtitle text-dark my-2 fw-bolder">01/01/2023</p>
                </div>
                <div class="col-lg-3">
                    <small class="text-secondary my-2">Ümumi</small>
                    <p class="page-subtitle text-dark my-2 fw-bolder">$40.14</p>
                </div>
                <div class="col-lg-3">
                    <small class="text-secondary my-2">Ödəniş növü</small>
                    <p class="page-subtitle text-dark my-2 fw-bolder">Kartla ödəniş</p>
                </div>
            </div>
            <div class="row m-4">
                <div class="col-lg-6 mx-auto">
                    <a href="{{ url('/') }}" class="cart-checkout-btn">Ana səhifəyə qayıt</a>
                </div>
            </div>
        </div>
    </section>
@endsection
