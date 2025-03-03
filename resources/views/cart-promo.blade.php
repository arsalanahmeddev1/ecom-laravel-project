@extends('layouts.app')
@section('content')
    <section class="inner-sec-bg cart-sec">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-12">
                    <div class="coupon-r-wrap products-coupen mb-30">
                        <div class="row justify-content-center text-center align-items-center">
                            <div class="products-c-wrap">
                                <div>
                                    <h3 class="secondry-text text-hd-md mb-0">
                                        Delivering To:
                                    </h3>
                                </div>
                                <div>
                                    <h4 class="secondry-text-2 text-center">
                                        Address Selected By Customer
                                    </h4>
                                </div>
                                <div class="">
                                    <a href="" class="update-btn">Update Address</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center text-center">
                        <div class="col-lg-6 col-12">
                            <h2 class="inner-title medium mb-17">My Cart</h2>
                            <div class="c-acc-border m-auto"></div>
                        </div>
                    </div>
                    <div class="cart-content">
                        <div class="row">
                            <div class="col-lg-7 col-xl-8 col-12">
                                <div class="cart-p-wrap mb-30 ">
                                    <div class="row nowrap">
                                        <div class="col-lg-6 col-6">
                                            <h3 class="primary-text">Product Name</h3>
                                        </div>
                                        <div class="col-lg-5 col-2">
                                            <div class="row nowrap">
                                                <div class="col-lg-4">
                                                    <h3 class="primary-text">Price</h3>
                                                </div>
                                                <div class="col-lg-5">
                                                    <h3 class="primary-text">Quantity</h3>
                                                </div>
                                                <div class="col-lg-3">
                                                    <h3 class="primary-text">Subtotal</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="cart-prod">
                                    <div class="row align-items-center">
                                        <div class="col-lg-6 col-6">
                                            <div class="d-flex align-items-center">
                                                <div>
                                                    <img src="./assets/images/cart-prod-img.png"
                                                        class="img-fluid prod-img-mm" alt="">
                                                </div>
                                                <div class="ms-4 ">
                                                    <h5 class="text-sm-hd-2 mb-0 ">AENEAN EGET RISUS UIS <br> LIGULA QUIS
                                                        VIVE</h5>
                                                    <a href="./shop-views.php" class="text-mini-md-3 secondry-color ul">View
                                                        Store</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-6">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div>
                                                    <h5 class="text-sm-hd-2">$7.25</h5>
                                                </div>
                                                <div>
                                                    <div class="counter">
                                                        <div class="qty-container">
                                                            <button class="qty-btn-minus btn-light" type="button"><i
                                                                    class="fa fa-minus"></i></button>
                                                            <input type="text" name="qty" value="0"
                                                                class="input-qty">
                                                            <button class="qty-btn-plus btn-light" type="button"><i
                                                                    class="fa fa-plus"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <h5 class="text-sm-hd-2">$7.25</h5>
                                                </div>
                                                <div>
                                                    <button class="cart-cross-btn" type="button"><i
                                                            class="fa-solid fa-xmark"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="cart-border-b mt-30 mb-30"></div>
                                        <div class="col-lg-6 col-6">
                                            <div class="d-flex align-items-center">
                                                <div>
                                                    <img src="./assets/images/order-p-img-1.png"
                                                        class="img-fluid prod-img-mm" alt="">
                                                </div>
                                                <div class="ms-4 ">
                                                    <h5 class="text-sm-hd-2 mb-0 ">AENEAN EGET RISUS UIS <br> LIGULA QUIS
                                                        VIVE</h5>
                                                    <a href="./shop-views.php" class="text-mini-md-3 change ul">View
                                                        Store</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-6">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div>
                                                    <h5 class="text-sm-hd-2">$7.25</h5>
                                                </div>
                                                <div>
                                                    <div class="counter">
                                                        <div class="qty-container">
                                                            <button class="qty-btn-minus btn-light" type="button"><i
                                                                    class="fa fa-minus"></i></button>
                                                            <input type="text" name="qty" value="0"
                                                                class="input-qty">
                                                            <button class="qty-btn-plus btn-light" type="button"><i
                                                                    class="fa fa-plus"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <h5 class="text-sm-hd-2">$7.25</h5>
                                                </div>
                                                <div>
                                                    <button class="cart-cross-btn" type="button"><i
                                                            class="fa-solid fa-xmark"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="cart-border-b mt-30 mb-30"></div>
                                        <div class="row align-items-center">
                                            <div class="col-lg-6 col-12">
                                                <div class="input-wrap mb-0">
                                                    <div class="input-area cart-input-a">
                                                        <input type="text" class="input-field promo-code"
                                                            placeholder="Gift Card Or Discount Code">

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-5 col-12 mt-20">
                                                <button class="primary-btn banner-btn location-btn promo">Apply
                                                    Coupon</button>
                                            </div>
                                            <div class="col-lg-5 mt-20">
                                                <button class="promo-btn">B78CD7 <i
                                                        class="fa-solid fa-xmark"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5 col-xl-4 col-12">
                                <div class="cart-box-wrap mm-t-20">
                                    <h4 class="secondry-text color-b mb-38 ">Order Summary</h4>
                                    <div class="d-flex justify-content-between">
                                        <h5 class="text-sm-hd color-b">Subtotal</h5>
                                        <h5 class="text-sm-hd color-b">$100.00</h5>
                                    </div>
                                    <div class="cart-b-border-b mt-4 mb-4"></div>
                                    <div class="d-flex justify-content-between">
                                        <h5 class="text-sm-hd color-b">Delivery Charges:</h5>
                                        <h5 class="text-sm-hd color-b">-</h5>
                                    </div>
                                    <div class="cart-b-border-b mt-4 mb-4"></div>
                                    <div class="d-flex justify-content-between">
                                        <h5 class="text-sm-hd color-b">Discount Price:</h5>
                                        <h5 class="text-sm-hd color-b">-</h5>
                                    </div>
                                    <div class="cart-b-border-b mt-4 mb-4"></div>
                                    <div class="d-flex justify-content-between">
                                        <h5 class="text-sm-hd bold color-b">Grand Total:</h5>
                                        <h5 class="text-sm-hd bold  secondry-color">$100.00</h5>
                                    </div>
                                    <div class="text-center m-t-left">
                                        <button class="primary-btn banner-btn cart-b-btn">Checkout</button>
                                        <button class=" banner-btn cart-b-btn-2">Continue Shopping</button>
                                    </div>
                                </div>
                            </div>
                            <img src="./assets/images/leaf-bg-img.png" class="img-fluid leaf-img d-none d-lg-block"
                                alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
