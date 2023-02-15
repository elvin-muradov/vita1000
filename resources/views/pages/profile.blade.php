@extends('index')

@section('title')
    - Profilim
@endsection

@section('content')
    @include('partials.header-white')

    <section class="page-section py-4">
        <div class="container">
            <h1 class="page-title my-8">Profilim</h1>
            <div class="avatar d-flex align-items-center">
                <div class="circle">
                    <img class="d-block w-25" src="{{ asset('assets/img/icons/person_filled.svg') }}" alt="Avatar">
                </div>
                <h4 class="fullname mx-4">Hasan Aliyev</h4>
            </div>
            <ul class="nav nav-tabs d-flex justify-content-between my-6" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active p-0 py-2" id="cart-tab" data-bs-toggle="tab"
                        data-bs-target="#cart-tab-pane" type="button" role="tab" aria-controls="cart-tab-pane"
                        aria-selected="true">
                        <div class="d-flex justify-content-center">
                            <div>
                                <span class="d-block my-2 fw-bolder text-center">Hesab məlumatlarım</span>
                            </div>
                        </div>
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link p-0 py-2" id="address-tab" data-bs-toggle="tab"
                        data-bs-target="#address-tab-pane" type="button" role="tab" aria-controls="address-tab-pane"
                        aria-selected="false">
                        <div class="d-flex justify-content-center">
                            <div>
                                <span class="d-block my-2 fw-bolder text-center">Bütün sifarişlərim</span>
                            </div>
                        </div>
                    </button>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="cart-tab-pane" role="tabpanel" aria-labelledby="cart-tab"
                    tabindex="0">
                    <h4 class="my-4">Hesab məlumatlarım</h4>
                    <div class="row">
                        <form action="#" method="#" class="col-lg-12 checkout-form">
                            <div class="row">
                                <div class="col-lg-6 my-2">
                                    <label for="fullname" class="my-2"><small
                                            class="text-secondary">Ad/Soyad</small></label>
                                    <input type="text" name="fullname" id="fullname" class="form-control my-2"
                                        placeholder="Ad/Soyad" value="Hasan Aliyev" />
                                </div>
                                <div class="col-lg-6 my-2">
                                    <label for="phone" class="my-2"><small class="text-secondary">Əlaqə
                                            nömrəsi</small></label>
                                    <input type="text" name="phone" id="phone" class="form-control my-2"
                                        placeholder="Əlaqə nömrəsi" value="+994 55 123 45 67" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 my-2">
                                    <label for="email" class="my-2"><small class="text-secondary">Elektron
                                            poçt</small></label>
                                    <input type="email" name="email" id="email" class="form-control my-2"
                                        placeholder="Elektron poçt" value="hasanaliyev@gmail.com" />
                                </div>
                                <div class="col-lg-6 my-2">
                                    <label for="address" class="my-2"><small class="text-secondary">Çatdırılma
                                            ünvanı</small></label>
                                    <input type="text" name="address" id="address" class="form-control my-2"
                                        placeholder="Ünvan" value="Gəncə pr. 321b, 14 cü mərtəbə" />
                                </div>
                            </div>

                            <div class="row justify-content-end">
                                <div class="col-lg-6 my-2">
                                    <button class="cart-checkout-btn">
                                        Yadda saxla
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="tab-pane fade" id="address-tab-pane" role="tabpanel" aria-labelledby="address-tab"
                    tabindex="0">
                    <h4 class="my-4">Sifarişlərim</h4>
                    <div class="row">
                        <div class="col-lg-12">
                            <table class="cart-table my-0">
                                <tbody>
                                    <tr>
                                        <td style="width: 33.3%">
                                            <div class="d-flex align-items-center">
                                                <a href="#">
                                                    <img class="cart-product-img"
                                                        src="{{ asset('assets/img/cart-product.png') }}"
                                                        alt="Cart Product" />
                                                </a>
                                                <div class="cart-product-info mx-4">
                                                    <span class="my-2 fw-bolder fs-6">Vita1000 Su damacanası 20L</span>
                                                    <small class="d-block my-2 text-secondary">Sifariş tarixi:
                                                        19.12.2022</small>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-center" style="width: 33.3%">
                                            <span class="currency fs-5">$</span><span class="price fs-5">4 x 32</span>
                                        </td>
                                        <td class="text-end" style="width: 33.3%">
                                            <span class="currency fw-bolder text-dark fs-4">$</span><span
                                                class="price fw-bolder text-dark fs-5">399</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width: 33.3%">
                                            <div class="d-flex align-items-center">
                                                <a href="#">
                                                    <img class="cart-product-img"
                                                        src="{{ asset('assets/img/cart-product.png') }}"
                                                        alt="Cart Product" />
                                                </a>
                                                <div class="cart-product-info mx-4">
                                                    <span class="my-2 fw-bolder fs-6">Vita1000 Su damacanası 20L</span>
                                                    <small class="d-block my-2 text-secondary">Sifariş tarixi:
                                                        19.12.2022</small>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-center" style="width: 33.3%">
                                            <span class="currency fs-5">$</span><span class="price fs-5">4 x 32</span>
                                        </td>
                                        <td class="text-end" style="width: 33.3%">
                                            <span class="currency fw-bolder text-dark fs-4">$</span><span
                                                class="price fw-bolder text-dark fs-5">399</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width: 33.3%">
                                            <div class="d-flex align-items-center">
                                                <a href="#">
                                                    <img class="cart-product-img"
                                                        src="{{ asset('assets/img/cart-product.png') }}"
                                                        alt="Cart Product" />
                                                </a>
                                                <div class="cart-product-info mx-4">
                                                    <span class="my-2 fw-bolder fs-6">Vita1000 Su damacanası 20L</span>
                                                    <small class="d-block my-2 text-secondary">Sifariş tarixi:
                                                        19.12.2022</small>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-center" style="width: 33.3%">
                                            <span class="currency fs-5">$</span><span class="price fs-5">4 x 32</span>
                                        </td>
                                        <td class="text-end" style="width: 33.3%">
                                            <span class="currency fw-bolder text-dark fs-4">$</span><span
                                                class="price fw-bolder text-dark fs-5">399</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width: 33.3%">
                                            <div class="d-flex align-items-center">
                                                <a href="#">
                                                    <img class="cart-product-img"
                                                        src="{{ asset('assets/img/cart-product.png') }}"
                                                        alt="Cart Product" />
                                                </a>
                                                <div class="cart-product-info mx-4">
                                                    <span class="my-2 fw-bolder fs-6">Vita1000 Su damacanası 20L</span>
                                                    <small class="d-block my-2 text-secondary">Sifariş tarixi:
                                                        19.12.2022</small>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-center" style="width: 33.3%">
                                            <span class="currency fs-5">$</span><span class="price fs-5">4 x 32</span>
                                        </td>
                                        <td class="text-end" style="width: 33.3%">
                                            <span class="currency fw-bolder text-dark fs-4">$</span><span
                                                class="price fw-bolder text-dark fs-5">399</span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
