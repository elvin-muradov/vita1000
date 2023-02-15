@extends('index')

@section('title')
    - Giriş et
@endsection

@section('content')
    @include('partials.header')

    <section class="page-section pt-0">
        <div class="container">
            <div class="row auth-box">
                <div class="col-lg-5 shadow py-4 px-6 mx-auto rounded">
                    <h3 class="my-2 text-center">Daxil ol</h3>
                    <small class="page-subtitle d-inline-block w-100 text-center">
                        Login to your account. Enjoy variety of waters
                    </small>
                    <form id="login-form" action="#" method="#">
                        <div class="form-group my-4">
                            <label for="email"><small class="fw-semibold">Elektron poçt</small></label>
                            <input type="email" class="form-control my-2" id="email" placeholder="Elektron poçt">
                        </div>
                        <div class="form-group my-4">
                            <label for="password"><small class="fw-semibold">Şifrə</small></label>
                            <input type="password" class="form-control my-2" id="password" placeholder="Şifrə">
                        </div>
                        <div class="form-group d-flex align-items-center my-4">
                            <input type="checkbox" class="form-check-input m-0 p-0" id="check">
                            <label class="form-check-label mx-2" for="check"><small>Yadda saxla</small></label>
                        </div>
                        <button type="submit" class="cart-checkout-btn my-3">Giriş et</button>
                        <small class="d-inline-block w-100 text-center my-2">
                            Hesabınız yoxdur? <a href="{{ url('/register') }}">Qeydiyyatdan</a> keçin.
                        </small>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
