@extends('index')

@section('title')
    - Qeydiyyat
@endsection

@section('content')
    @include('partials.header')

    <section class="page-section pt-0">
        <div class="container">
            <div class="row auth-box">
                <div class="col-lg-5 shadow py-4 px-6 mx-auto rounded">
                    <h3 class="my-2 text-center">Qeydiyyat</h3>
                    <small class="page-subtitle d-inline-block w-100 text-center">
                        Login to your account. Enjoy variety of waters
                    </small>
                    <form id="login-form" action="#" method="#">
                        <div class="form-group my-4">
                            <label for="fullname"><small class="fw-semibold">Ad/Soyad</small></label>
                            <input type="text" class="form-control my-2" id="fullname" placeholder="Ad/Soyad">
                        </div>
                        <div class="form-group my-4">
                            <label for="email"><small class="fw-semibold">Elektron poçt</small></label>
                            <input type="email" class="form-control my-2" id="email" placeholder="Elektron poçt">
                        </div>
                        <div class="form-group my-4">
                            <label for="password"><small class="fw-semibold">Şifrə</small></label>
                            <input type="password" class="form-control my-2" id="password" placeholder="******">
                        </div>
                        <div class="form-group my-4">
                            <label for="password_confirm"><small class="fw-semibold">Şifrəni təsdiqlə</small></label>
                            <input type="password" class="form-control my-2" id="password_confirm" placeholder="******">
                        </div>
                        <div class="form-group d-flex align-items-center my-4">
                            <input type="checkbox" class="form-check-input m-0 p-0" id="check" name="accept_terms">
                            <label class="form-check-label mx-2" for="check"> <small
                                    class="d-inline-block w-100 text-center my-2">
                                    İstifadəçi <a href="{{ url('/register') }}">şərtləri</a> ilə razıyam.
                                </small></label>
                        </div>
                        <button type="submit" class="cart-checkout-btn my-3">Qeydiyyatdan keç</button>

                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
