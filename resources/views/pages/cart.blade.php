@extends('index')

@section('title')
    - Səbət
@endsection

@section('content')
    @include('partials.header-white')

    <section class="page-section pt-0">
        <div class="container">
            <h1 class="page-title my-8">Səbət</h1>
            <ul class="nav nav-tabs d-flex justify-content-between" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active p-0 py-2" id="cart-tab" data-bs-toggle="tab"
                        data-bs-target="#cart-tab-pane" type="button" role="tab" aria-controls="cart-tab-pane"
                        aria-selected="true">
                        <div class="d-flex justify-content-start">
                            <div class="my-2 fw-bolder text-start" style="padding-right:10px;">01</div>
                            <div>
                                <span class="d-block my-2 fw-bolder text-start">Alış-veriş səbəti</span>
                                <small class="d-block my-2 text-start text-secondary">Məhsulları təsdiqləyin</small>
                            </div>
                        </div>
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link p-0 py-2" id="address-tab" data-bs-toggle="tab"
                        data-bs-target="#address-tab-pane" type="button" role="tab" aria-controls="address-tab-pane"
                        aria-selected="false">
                        <div class="d-flex justify-content-start">
                            <div class="my-2 fw-bolder text-start" style="padding-right:10px;">02</div>
                            <div>
                                <span class="d-block my-2 fw-bolder text-start">Ünvanı təsdiq edin</span>
                                <small class="d-block my-2 text-start text-secondary">Sifariş detallarını təyin edin</small>
                            </div>
                        </div>
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link p-0 py-2" id="payment-tab" data-bs-toggle="tab"
                        data-bs-target="#payment-tab-pane" type="button" role="tab" aria-controls="payment-tab-pane"
                        aria-selected="false">
                        <div class="d-flex justify-content-start">
                            <div class="my-2 fw-bolder text-start" style="padding-right:10px;">03</div>
                            <div>
                                <span class="d-block my-2 fw-bolder text-start">Ödəniş yolunu seçin</span>
                                <small class="d-block my-2 text-start text-secondary">Ödəniş edin və sifarişi
                                    tamamlayın</small>
                            </div>
                        </div>
                    </button>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="cart-tab-pane" role="tabpanel" aria-labelledby="cart-tab"
                    tabindex="0">
                    <div class="row">
                        <div class="col-lg-8">
                            <table class="cart-table">
                                <thead>
                                    <th>MƏHSUL</th>
                                    <th>QİYMƏT</th>
                                    <th>MİQDAR</th>
                                    <th colspan="2">CƏMİ</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <a href="#">
                                                    <img class="cart-product-img"
                                                        src="{{ asset('assets/img/cart-product.png') }}"
                                                        alt="Cart Product" />
                                                </a>
                                                <div class="cart-product-info mx-4">
                                                    <span class="my-2 fw-bolder">Qazlı su</span>
                                                    <small class="d-block my-2 text-secondary">15L</small>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="currency">$</span><span class="price">99</span>
                                        </td>
                                        <td>
                                            <div class="calc-qty d-flex">
                                                <button class="decrease-qty"><i class="fas fa-minus"></i></button>
                                                <input type="number" name="qty" class="product-qty" value="1" />
                                                <button class="increase-qty"><i class="fas fa-plus"></i></i></button>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="currency fw-bolder text-dark">$</span><span
                                                class="price fw-bolder text-dark">399</span>
                                        </td>
                                        <td>
                                            <button class="remove-cart-product"><i class="fas fa-times"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <a href="#">
                                                    <img class="cart-product-img"
                                                        src="{{ asset('assets/img/cart-product.png') }}"
                                                        alt="Cart Product" />
                                                </a>
                                                <div class="cart-product-info mx-4">
                                                    <span class="my-2 fw-bolder">Qazlı su</span>
                                                    <small class="d-block my-2 text-secondary">15L</small>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="currency">$</span><span class="price">99</span>
                                        </td>
                                        <td>
                                            <div class="calc-qty d-flex">
                                                <button class="decrease-qty"><i class="fas fa-minus"></i></button>
                                                <input type="number" name="qty" class="product-qty" value="1" />
                                                <button class="increase-qty"><i class="fas fa-plus"></i></i></button>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="currency fw-bolder text-dark">$</span><span
                                                class="price fw-bolder text-dark">399</span>
                                        </td>
                                        <td>
                                            <button class="remove-cart-product"><i class="fas fa-times"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <a href="#">
                                                    <img class="cart-product-img"
                                                        src="{{ asset('assets/img/cart-product.png') }}"
                                                        alt="Cart Product" />
                                                </a>
                                                <div class="cart-product-info mx-4">
                                                    <span class="my-2 fw-bolder">Qazlı su</span>
                                                    <small class="d-block my-2 text-secondary">15L</small>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="currency">$</span><span class="price">99</span>
                                        </td>
                                        <td>
                                            <div class="calc-qty d-flex">
                                                <button class="decrease-qty"><i class="fas fa-minus"></i></button>
                                                <input type="number" name="qty" class="product-qty"
                                                    value="1" />
                                                <button class="increase-qty"><i class="fas fa-plus"></i></i></button>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="currency fw-bolder text-dark">$</span><span
                                                class="price fw-bolder text-dark">399</span>
                                        </td>
                                        <td>
                                            <button class="remove-cart-product"><i class="fas fa-times"></i></button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-lg-4">
                            <div class="cart-totals">
                                <h6 class="fw-bolder">Səbət qiyməti</h6>
                                <div class="cart-totals-table">
                                    <div class="cart-totals-row">
                                        <div class="cart-totals-data">SUBTOTAL</div>
                                        <div class="cart-totals-data">$1300</div>
                                    </div>
                                    <div class="cart-totals-row">
                                        <div class="cart-totals-data">SHIPPING</div>
                                        <div class="cart-totals-data"><input id="free-shipping" type="radio"
                                                name="free-shipping" />
                                            <label for="free-shipping">Free shipping</label>
                                        </div>
                                    </div>
                                    <div class="cart-totals-row">
                                        <div class="cart-totals-data">VAT</div>
                                        <div class="cart-totals-data">$19</div>
                                    </div>
                                    <div class="cart-totals-row">
                                        <div class="cart-totals-data">TOTAL</div>
                                        <div class="cart-totals-data">$1319</div>
                                    </div>
                                </div>
                            </div>
                            <button class="cart-checkout-btn">
                                Proceed to checkout
                            </button>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="address-tab-pane" role="tabpanel" aria-labelledby="address-tab"
                    tabindex="0">
                    <div class="row">
                        <div class="col-lg-8 checkout-form">
                            <div class="row">
                                <div class="col-lg-6">
                                    <label for="name" class="my-2"><small class="text-secondary">Ad</small></label>
                                    <input type="text" name="name" id="name" class="form-control my-2"
                                        placeholder="Ad" />
                                </div>
                                <div class="col-lg-6">
                                    <label for="surname" class="my-2"><small
                                            class="text-secondary">Soyad</small></label>
                                    <input type="text" name="surname" id="surname" class="form-control my-2"
                                        placeholder="Soyad" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <label for="address" class="my-2"><small class="text-secondary">Çatdırılma
                                            ünvanı</small></label>
                                    <input type="text" name="address" id="address" class="form-control my-2"
                                        placeholder="Ünvan" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <label for="phone" class="my-2"><small class="text-secondary">Əlaqə
                                            nömrəsi</small></label>
                                    <div class="input-group flex-nowrap my-2">
                                        <span class="input-group-text" id="addon-wrapping"><i
                                                class="fas fa-phone"></i></span>
                                        <input type="text" class="form-control" placeholder="Əlaqə nömrəsi"
                                            aria-label="Phone" aria-describedby="addon-wrapping" id="phone">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <label for="email" class="my-2"><small class="text-secondary">Elektron
                                            poçt</small></label>
                                    <div class="input-group flex-nowrap my-2">
                                        <span class="input-group-text" id="addon-wrapping"><i
                                                class="fas fa-at"></i></span>
                                        <input type="email" class="form-control" placeholder="example@example.net"
                                            aria-label="Email" aria-describedby="addon-wrapping" id="email">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <label for="note" class="my-2"><small class="text-secondary">Əlavə
                                            qeyd</small></label>
                                    <textarea class="form-control" id="note" rows="3" placeholder="Qeyd"></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 my-4">
                                    <label for="flexCheckChecked">
                                        <input id="flexCheckChecked" class="form-check-input p-0 m-0" type="checkbox" />
                                        <span class="mx-2">Set as default location</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="row my-4">
                                <div class="col-lg-6 my-2">
                                    <div class="address-todo-box">
                                        <h6>Xətai rayonu, Dəmirçi plaza 14-cü mərtəbə 12-ci otaq</h6>
                                        <button class="address-edit-btn">Düzəliş et</button>
                                    </div>
                                </div>
                                <div class="col-lg-6 my-2">
                                    <div class="address-todo-box">
                                        <h6>Xətai rayonu, Dəmirçi plaza 14-cü mərtəbə 12-ci otaq</h6>
                                        <button class="address-edit-btn">Düzəliş et</button>
                                    </div>
                                </div>
                                <div class="col-lg-6 my-2">
                                    <div class="address-todo-box">
                                        <h6>Xətai rayonu, Dəmirçi plaza 14-cü mərtəbə 12-ci otaq</h6>
                                        <button class="address-edit-btn">Düzəliş et</button>
                                    </div>
                                </div>
                                <div class="col-lg-6 my-2">
                                    <div class="address-todo-add-box">
                                        <button class="address-todo-add-btn"><i class="fas fa-plus fs-4"></i></button>
                                        <h6>Yeni ünvan əlavə et</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="cart-totals">
                                <h6 class="fw-bolder">Səbət qiyməti</h6>
                                <div class="cart-totals-table">
                                    <div class="cart-totals-row">
                                        <div class="cart-totals-data">SUBTOTAL</div>
                                        <div class="cart-totals-data">$1300</div>
                                    </div>
                                    <div class="cart-totals-row">
                                        <div class="cart-totals-data">SHIPPING</div>
                                        <div class="cart-totals-data"><input id="free-shipping" type="radio"
                                                name="free-shipping" />
                                            <label for="free-shipping">Free shipping</label>
                                        </div>
                                    </div>
                                    <div class="cart-totals-row">
                                        <div class="cart-totals-data">VAT</div>
                                        <div class="cart-totals-data">$19</div>
                                    </div>
                                    <div class="cart-totals-row">
                                        <div class="cart-totals-data">TOTAL</div>
                                        <div class="cart-totals-data">$1319</div>
                                    </div>
                                </div>
                            </div>
                            <div class="cart-totals">
                                <h6 class="fw-bolder">Ödəniş üsulu</h6>
                                <div class="cart-totals-table">
                                    <div class="cart-totals-row">
                                        <div class="cart-totals-data"><input id="card-payment" type="radio"
                                                name="payment" /><label for="card-payment">Kartla ödəniş</label></div>
                                    </div>
                                    <div class="cart-totals-row">
                                        <div class="cart-totals-data"><input id="cash-payment" type="radio"
                                                name="payment" /><label for="cash-payment">Nəğd ödəniş</label></div>
                                    </div>
                                </div>
                            </div>
                            <button class="cart-checkout-btn">
                                Proceed to checkout
                            </button>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="payment-tab-pane" role="tabpanel" aria-labelledby="payment-tab"
                    tabindex="0">
                    <div class="row">
                        <div class="col-lg-8 my-4">
                            <form id="payment_card_form" action="#">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <label for="fullname" class="my-2"><small class="text-secondary">Kart
                                                üzərindəki
                                                ad</small></label>
                                        <input type="text" name="fullname" id="fullname" class="form-control my-2"
                                            placeholder="Ad/Soyad" />
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="expired_month" class="my-2"><small class="text-secondary">Son
                                                istifadə
                                                tarixi</small></label>
                                        <div class="d-flex">
                                            <input type="text" name="expired_month" id="expired_month"
                                                class="form-control my-2" placeholder="Ay" />
                                            <input type="text" name="expired_year" id="expired_year"
                                                class="form-control my-2 mx-2" placeholder="İl" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <label for="card_number" class="my-2"><small class="text-secondary">Kartın
                                                nömrəsi</small></label>
                                        <input type="text" name="card_number" id="card_number"
                                            class="form-control my-2" placeholder="XXXX-XXXX-XXXX-XXXX" />
                                    </div>
                                    <div class="col-lg-3">
                                        <label for="cvv" class="my-2"><small class="text-secondary">CVV
                                                kodu</small></label>
                                        <div class="d-flex">
                                            <input type="text" name="cvv" id="cvv"
                                                class="form-control my-2" placeholder="CVV" />
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div class="col-lg-4">
                            <div class="cart-totals">
                                <h6 class="fw-bolder">Səbət qiyməti</h6>
                                <div class="cart-totals-table">
                                    <div class="cart-totals-row">
                                        <div class="cart-totals-data">SUBTOTAL</div>
                                        <div class="cart-totals-data">$1300</div>
                                    </div>
                                    <div class="cart-totals-row">
                                        <div class="cart-totals-data">SHIPPING</div>
                                        <div class="cart-totals-data"><input id="free-shipping" type="radio"
                                                name="free-shipping" />
                                            <label for="free-shipping">Free shipping</label>
                                        </div>
                                    </div>
                                    <div class="cart-totals-row">
                                        <div class="cart-totals-data">VAT</div>
                                        <div class="cart-totals-data">$19</div>
                                    </div>
                                    <div class="cart-totals-row">
                                        <div class="cart-totals-data fw-bolder">TOTAL</div>
                                        <div class="cart-totals-data fw-bolder">$1319</div>
                                    </div>
                                </div>
                            </div>
                            <button class="cart-checkout-btn">
                                Ödənişi tamamla
                            </button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        </div>
    </section>
@endsection

@section('page_scripts')
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
    </script>
@endsection
