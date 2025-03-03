@extends('layouts.app')
@section('content') 

    <section class="banner">
        <div class="container">
            <div class="row">
                <div class="offset-3 col-lg-6 col-xl-6 col-8">
                    <h1 class="title-text">
                        Let Us Help You To
                        Choose The Best.
                    </h1>
                </div>
                <div class="offset-3 col-lg-5 col-8">
                    <p class="para">
                        It is a long established fact that a reader will be distracted by the readable content of a page
                        when looking at its layout.
                    </p>
                    <div class="mt-20">
                        <button class="primary-btn banner-btn">Get Started</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="sec-second pb-160">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-4 col-12">
                    <h2 class="title-text mb-20">
                        Spring &
                        Summer
                        2022.
                    </h2>
                    <p class="para mb-30">
                        It is a long established fact that a reader will be distracted by the readable content of a page
                        when looking at its layout.
                    </p>
                    <button class="primary-btn banner-btn">View More</button>
                </div>
                <div class="col-lg-4 col-12 col-md-6">
                    <div class="spring-sec-img mm-t-30 mm-b-30">
                        <img src="./assets/images/banner131.png" class="img-fluid sec-h-img" alt="">
                    </div>
                </div>
                <div class="col-lg-4 col-12 col-md-6">
                    <div class="prod-box-wrap  text-center">
                        <div class="prod-box-inner">
                            <div class=" prod-box-an-2">
                                <div class="prod-img">
                                    <img src="./assets/images/second-sec-img.png" class="img-fluid" alt="">
                                </div>
                                <h6 class="para">
                                    Beauty
                                </h6>
                                <h4 class="primary-text line-h">
                                    AENEAN EGET RISUS UIS LIGULA
                                    QUIS VIVE
                                </h4>
                                <div class="ratings-stars">
                                    <div class="d-flex justify-content-center">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                                <h4 class="primary-text mt-3">
                                    $55.00
                                </h4>
                            </div>
                        </div>
                        <div class="prod-box-inner">
                            <div class=" prod-box-an-2">
                                <div class="prod-img">
                                    <img src="./assets/images/second-sec-img.png" class="img-fluid" alt="">
                                </div>
                                <h6 class="para">
                                    Beauty
                                </h6>
                                <h4 class="primary-text line-h">
                                    AENEAN EGET RISUS UIS LIGULA
                                    QUIS VIVE
                                </h4>
                                <div class="ratings-stars">
                                    <div class="d-flex justify-content-center">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                                <h4 class="primary-text mt-3">
                                    $55.00
                                </h4>
                            </div>
                        </div>
                        <div class="prod-box-inner">
                            <div class=" prod-box-an-2">
                                <div class="prod-img">
                                    <img src="./assets/images/second-sec-img.png" class="img-fluid" alt="">
                                </div>
                                <h6 class="para">
                                    Beauty
                                </h6>
                                <h4 class="primary-text line-h">
                                    AENEAN EGET RISUS UIS LIGULA
                                    QUIS VIVE
                                </h4>
                                <div class="ratings-stars">
                                    <div class="d-flex justify-content-center">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                                <h4 class="primary-text mt-3">
                                    $55.00
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <ul>
                
            </ul>
            <div class="row justify-content-center ">
                <div class="col-lg-12 col-12">
                    <h2 class="title-text text-center mt-60">
                        New Arrivals
                    </h2>
                    <h6 class="para text-center mb-20">
                        Just in now
                    </h6>
                </div>
                <div class="col-lg-4 col-12">
                    <div class="arrivals-img">
                        <img src="./assets/images/collection_3.png" class="img-fluid collection-img-3 d-none d-lg-block "
                            alt="">
                    </div>
                </div>
                <div class="col-lg-8 col-12">
                    <div class="row">
                        @foreach ($products as $product)
                        <div class="col-lg-4 col-6 mm-b-20 mm-t-20 ">
                            <div class="prod-box-wrap-2 text-center">
                                <div class="prod-box-inner">
                                    <div class="prod-img">
                                        <img src={{ $product->image}} class="img-fluid" alt="">
                                    </div>
                                    <h6 class="para">
                                        Beauty
                                    </h6>
                                    <h4 class="primary-text">
                                        {{$product->name}}
                                    </h4>
                                    <div class="ratings-stars">
                                        <div class="d-flex justify-content-center">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                    </div>
                                    <h4 class="primary-text mt-3">
                                        {{$product->price}}
                                    </h4>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <div class="col-lg-4 col-6 mm-b-20 mm-t-20">
                            <div class="prod-box-wrap-2 text-center">
                                <div class="prod-box-inner">
                                    <div class="prod-img">
                                        <img src="./assets/images/35-300x300.png" class="img-fluid" alt="">
                                    </div>
                                    <h6 class="para">
                                        Beauty
                                    </h6>
                                    <h4 class="primary-text">
                                        AENEAN EGET RISUS UIS LIGULA
                                        QUIS VIVE
                                    </h4>
                                    <div class="ratings-stars">
                                        <div class="d-flex justify-content-center">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                    </div>
                                    <h4 class="primary-text mt-3">
                                        $55.00
                                    </h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-6 mm-b-20">
                            <div class="prod-box-wrap-2 text-center">
                                <div class="prod-box-inner">
                                    <div class="prod-img">
                                        <img src="./assets/images/pdt18.png" class="img-fluid" alt="">
                                    </div>
                                    <h6 class="para">
                                        Beauty
                                    </h6>
                                    <h4 class="primary-text">
                                        AENEAN EGET RISUS UIS LIGULA
                                        QUIS VIVE
                                    </h4>
                                    <div class="ratings-stars">
                                        <div class="d-flex justify-content-center">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                    </div>
                                    <h4 class="primary-text mt-3">
                                        $55.00
                                    </h4>
                                </div>
                            </div>
                        </div>
                        <!-- second row -->
                        <div class="col-lg-4 col-6 mm-b-20 mt-13">
                            <div class="prod-box-wrap-2 text-center">
                                <div class="prod-box-inner">
                                    <div class="prod-img">
                                        <img src="./assets/images/pdt16-420x420.png" class="img-fluid" alt="">
                                    </div>
                                    <h6 class="para">
                                        Beauty
                                    </h6>
                                    <h4 class="primary-text">
                                        AENEAN EGET RISUS UIS LIGULA
                                        QUIS VIVE
                                    </h4>
                                    <div class="ratings-stars">
                                        <div class="d-flex justify-content-center">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                    </div>
                                    <h4 class="primary-text mt-3">
                                        $55.00
                                    </h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-6 mt-13">
                            <div class="prod-box-wrap-2 text-center">
                                <div class="prod-box-inner">
                                    <div class="prod-img">
                                        <img src="./assets/images/pdt7.png" class="img-fluid" alt="">
                                    </div>
                                    <h6 class="para">
                                        Beauty
                                    </h6>
                                    <h4 class="primary-text">
                                        AENEAN EGET RISUS UIS LIGULA
                                        QUIS VIVE
                                    </h4>
                                    <div class="ratings-stars">
                                        <div class="d-flex justify-content-center">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                    </div>
                                    <h4 class="primary-text mt-3">
                                        $55.00
                                    </h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-6 mt-13">
                            <div class="prod-box-wrap-2 text-center">
                                <div class="prod-box-inner">
                                    <div class="prod-img">
                                        <img src="./assets/images/pdt20-420x420.png" class="img-fluid" alt="">
                                    </div>
                                    <h6 class="para">
                                        Beauty
                                    </h6>
                                    <h4 class="primary-text">
                                        AENEAN EGET RISUS UIS LIGULA
                                        QUIS VIVE
                                    </h4>
                                    <div class="ratings-stars">
                                        <div class="d-flex justify-content-center">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                    </div>
                                    <h4 class="primary-text mt-3">
                                        $55.00
                                    </h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-12">
                            <div class="mt-30">
                                <div class="d-flex justify-content-center">
                                    <button class="primary-btn banner-btn">View More</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <section class="third-sec">
        <div class="container-fluid p-0">
            <div class="parent gallery">
                <div class="div1">
                    <img src="./assets/images/11.png" alt="" class='img2'>
                </div>
                <div class="div2">
                    <img src="./assets/images/9.png" alt="">
                    <img src="./assets/images/10 (1).png" alt="">
                </div>
                <div class="div4">
                    <img src="./assets/images/8.png" alt="">
                    <img src="./assets/images/7.png" alt="">
                </div>
                <div class="div6">
                    <img src="./assets/images/6.png" alt="" class='img2' f>
                </div>

            </div>
        </div>
    </section>
    <section class="sec-forth">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-12">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-12">
                            <h2 class="title-text text-white mb-0">
                                Featured Products
                            </h2>
                            <p class="para text-white mb-25">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            </p>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="arrows mb-60 gap d-flex justify-content-end">
                                <div class="arrow-left">
                                    <i class="fas fa-chevron-left"></i>
                                </div>
                                <div class="arrow-right">
                                    <i class="fas fa-chevron-right"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 col-12">
                    <div class="second-slide">
                        <div class="prod-box-gs">
                            <div class="prod-box-wrap-3 text-center">
                                <div class="prod-box-inner">
                                    <div class="prod-img">
                                        <img src="./assets/images/15-300x300.png" class="img-fluid" alt="">
                                    </div>
                                    <h6 class="para">
                                        Beauty
                                    </h6>
                                    <h4 class="primary-text line-h">
                                        AENEAN EGET RISUS UIS LIGULA
                                        QUIS VIVE
                                    </h4>
                                    <div class="ratings-stars">
                                        <div class="d-flex justify-content-center">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                    </div>
                                    <h4 class="primary-text mt-3">
                                        $55.00
                                    </h4>
                                </div>
                            </div>
                        </div>
                        <div class="prod-box-gs">
                            <div class="prod-box-wrap-3 text-center">
                                <div class="prod-box-inner">
                                    <div class="prod-img">
                                        <img src="./assets/images/5-300x300.png" class="img-fluid" alt="">
                                    </div>
                                    <h6 class="para">
                                        Beauty
                                    </h6>
                                    <h4 class="primary-text line-h">
                                        AENEAN EGET RISUS UIS LIGULA
                                        QUIS VIVE
                                    </h4>
                                    <div class="ratings-stars">
                                        <div class="d-flex justify-content-center">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                    </div>
                                    <h4 class="primary-text mt-3">
                                        $55.00
                                    </h4>
                                </div>
                            </div>
                        </div>
                        <div class="prod-box-gs">
                            <div class="prod-box-wrap-3 text-center">
                                <div class="prod-box-inner">
                                    <div class="prod-img">
                                        <img src="./assets/images/15-300x300.png" class="img-fluid" alt="">
                                    </div>
                                    <h6 class="para">
                                        Beauty
                                    </h6>
                                    <h4 class="primary-text line-h">
                                        AENEAN EGET RISUS UIS LIGULA
                                        QUIS VIVE
                                    </h4>
                                    <div class="ratings-stars">
                                        <div class="d-flex justify-content-center">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                    </div>
                                    <h4 class="primary-text mt-3">
                                        $55.00
                                    </h4>
                                </div>
                            </div>
                        </div>
                        <div class="prod-box-gs">
                            <div class="prod-box-wrap-3 text-center">
                                <div class="prod-box-inner">
                                    <div class="prod-img">
                                        <img src="./assets/images/5-300x300.png" class="img-fluid" alt="">
                                    </div>
                                    <h6 class="para">
                                        Beauty
                                    </h6>
                                    <h4 class="primary-text line-h">
                                        AENEAN EGET RISUS UIS LIGULA
                                        QUIS VIVE
                                    </h4>
                                    <div class="ratings-stars">
                                        <div class="d-flex justify-content-center">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                    </div>
                                    <h4 class="primary-text mt-3">
                                        $55.00
                                    </h4>
                                </div>
                            </div>
                        </div>
                        <div class="prod-box-gs">
                            <div class="prod-box-wrap-3 text-center">
                                <div class="prod-box-inner">
                                    <div class="prod-img">
                                        <img src="./assets/images/15-300x300.png" class="img-fluid" alt="">
                                    </div>
                                    <h6 class="para">
                                        Beauty
                                    </h6>
                                    <h4 class="primary-text line-h">
                                        AENEAN EGET RISUS UIS LIGULA
                                        QUIS VIVE
                                    </h4>
                                    <div class="ratings-stars">
                                        <div class="d-flex justify-content-center">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                    </div>
                                    <h4 class="primary-text mt-3">
                                        $55.00
                                    </h4>
                                </div>
                            </div>
                        </div>
                        <div class="prod-box-gs">
                            <div class="prod-box-wrap-3 text-center">
                                <div class="prod-box-inner">
                                    <div class="prod-img">
                                        <img src="./assets/images/5-300x300.png" class="img-fluid" alt="">
                                    </div>
                                    <h6 class="para">
                                        Beauty
                                    </h6>
                                    <h4 class="primary-text line-h">
                                        AENEAN EGET RISUS UIS LIGULA
                                        QUIS VIVE
                                    </h4>
                                    <div class="ratings-stars">
                                        <div class="d-flex justify-content-center">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                    </div>
                                    <h4 class="primary-text mt-3">
                                        $55.00
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-12 mt-60">
                    <img src="./assets/images/banner-img-bg.png" class="img-fluid " alt="">
                </div>
                <div class="col-lg-6 col-12 mt-60">
                    <img src="./assets/images/banner52.png" class="img-fluid " alt="">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-12">
                    <div class="d-flex mt-78 mb-60">
                        <div>
                            <div class="v-icon-wrap me-5">
                                <i class="fas fa-house-user"></i>
                            </div>
                        </div>
                        <div class="">
                            <h2 class="title-text">
                                Top Vendors
                            </h2>
                            <p class="para">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            </p>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-12">
                            <div class="store-box-wrap text-center mm-b-50">
                                <h4 class="secondry-text text-md-h">
                                    My Store 1
                                </h4>
                                <p class="para mb-30">
                                    4 Products
                                </p>
                                <div class="d-flex test-prod-area">
                                    <div>
                                        <img src="./assets/images/15-300x300.png" class="img-fluid" alt="">
                                    </div>
                                    <div>
                                        <img src="./assets/images/pdt-2.png" class="img-fluid" alt="">
                                    </div>
                                    <div>
                                        <img src="./assets/images/pdt18.png" class="img-fluid" alt="">
                                    </div>
                                    <div>
                                        <img src="./assets/images/35-300x300.png" class="img-fluid" alt="">
                                    </div>
                                </div>
                                <div class="avatar border-img-pp avatar-mm">
                                    <img src="./assets/images/circle-img-1.png" class="img-fluid" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-12">
                            <div class="store-box-wrap text-center mm-b-50">
                                <h4 class="secondry-text text-md-h">
                                    My Store 2
                                </h4>
                                <p class="para mb-30">
                                    5 Products
                                </p>
                                <div class="d-flex test-prod-area">
                                    <div>
                                        <img src="./assets/images/15-300x300.png" class="img-fluid" alt="">
                                    </div>
                                    <div>
                                        <img src="./assets/images/5-300x300.png" class="img-fluid" alt="">
                                    </div>
                                    <div>
                                        <img src="./assets/images/16-300x300.png" class="img-fluid" alt="">
                                    </div>
                                    <div>
                                        <img src="./assets/images/17-300x300.png" class="img-fluid" alt="">
                                    </div>
                                </div>
                                <div class="avatar border-img-y avatar-mm">
                                    <img src="./assets/images/circle-img-2.png" class="img-fluid" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-12">
                            <div class="store-box-wrap text-center mm-b-50">
                                <h4 class="secondry-text text-md-h">
                                    My Store 3
                                </h4>
                                <p class="para mb-30">
                                    6 Products
                                </p>
                                <div class="d-flex test-prod-area">
                                    <div>
                                        <img src="./assets/images/25-300x300.png" class="img-fluid" alt="">
                                    </div>
                                    <div>
                                        <img src="./assets/images/pdt18.png" class="img-fluid" alt="">
                                    </div>
                                    <div>
                                        <img src="./assets/images/14-300x300.png" class="img-fluid" alt="">
                                    </div>
                                    <div>
                                        <img src="./assets/images/pdt20-420x420.png" class="img-fluid" alt="">
                                    </div>
                                </div>
                                <div class="avatar border-img-p avatar-mm">
                                    <img src="./assets/images/circle-img-3.png" class="img-fluid" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-lg-12 col-12">
                            <div class="coupon-r-wrap  mt-38">
                                <div class="row justify-content-center align-items-center">
                                    <div class="col-lg-3 col-12">
                                        <h3 class="secondry-text text-hd-md mb-0 text-md-center text-sm-center">
                                            Carousel Special Gifts!
                                        </h3>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <h4 class="secondry-text-2 text-center mm-t-20">
                                            Wrap New Offers Every Single Day on Monday - Coupon Code: 3232OD2E
                                        </h4>
                                    </div>
                                    <div class="col-lg-3 col-12">
                                        <div class="d-flex justify-content-end coupen-btn-md mm-t-20">
                                            <button class="primary-btn banner-btn coupen-btn">Get Coupon</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <section class="fifth-sec">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-12">
                    <div class="prod-tabs">
                        <ul class="nav d-flex align-items-center justify-content-center nav-pills mb-3" id="pills-tab"
                            role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-home" type="button" role="tab"
                                    aria-controls="pills-home" aria-selected="true">New Arrivals</button>
                            </li>
                            <div class="tabs-dot"></div>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-profile" type="button" role="tab"
                                    aria-controls="pills-profile" aria-selected="false">Best Selling</button>
                            </li>
                            <div class="tabs-dot"></div>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-contact" type="button" role="tab"
                                    aria-controls="pills-contact" aria-selected="false">Featured</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                                aria-labelledby="pills-home-tab" tabindex="0">
                                <div class="row">
                                    <div class="col-lg-3 col-6 ">
                                        <div class="prod-box-wrap-3 text-center mm-b-20">
                                            <div class="prod-box-inner">
                                                <div class="prod-img">
                                                    <img src="./assets/images/12-300x300.png" class="img-fluid"
                                                        alt="">
                                                </div>
                                                <h6 class="para">
                                                    Beauty
                                                </h6>
                                                <h4 class="primary-text line-h">
                                                    AENEAN EGET RISUS UIS LIGULA
                                                    QUIS VIVE
                                                </h4>
                                                <div class="ratings-stars">
                                                    <div class="d-flex justify-content-center">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                </div>
                                                <h4 class="primary-text mt-3">
                                                    $55.00
                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-6">
                                        <div class="prod-box-wrap-3 text-center mm-b-20">
                                            <div class="prod-box-inner">
                                                <div class="prod-img">
                                                    <img src="./assets/images/17-300x300.png" class="img-fluid"
                                                        alt="">
                                                </div>
                                                <h6 class="para">
                                                    Beauty
                                                </h6>
                                                <h4 class="primary-text line-h">
                                                    AENEAN EGET RISUS UIS LIGULA
                                                    QUIS VIVE
                                                </h4>
                                                <div class="ratings-stars">
                                                    <div class="d-flex justify-content-center">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                </div>
                                                <h4 class="primary-text mt-3">
                                                    $55.00
                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-6">
                                        <div class="prod-box-wrap-3 text-center mm-b-20">
                                            <div class="prod-box-inner">
                                                <div class="prod-img">
                                                    <img src="./assets/images/15-300x300.png" class="img-fluid"
                                                        alt="">
                                                </div>
                                                <h6 class="para">
                                                    Beauty
                                                </h6>
                                                <h4 class="primary-text line-h">
                                                    AENEAN EGET RISUS UIS LIGULA
                                                    QUIS VIVE
                                                </h4>
                                                <div class="ratings-stars">
                                                    <div class="d-flex justify-content-center">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                </div>
                                                <h4 class="primary-text mt-3">
                                                    $55.00
                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                    <!--  -->
                                    <div class="col-lg-3 col-6 mm-b-20 ">
                                        <div class="prod-box-wrap-3 text-center">
                                            <div class="prod-box-inner">
                                                <div class="prod-img">
                                                    <img src="./assets/images/5-300x300.png" class="img-fluid"
                                                        alt="">
                                                </div>
                                                <h6 class="para">
                                                    Beauty
                                                </h6>
                                                <h4 class="primary-text line-h">
                                                    AENEAN EGET RISUS UIS LIGULA
                                                    QUIS VIVE
                                                </h4>
                                                <div class="ratings-stars">
                                                    <div class="d-flex justify-content-center">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                </div>
                                                <h4 class="primary-text mt-3">
                                                    $55.00
                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-6 mm-b-20 mt-13">
                                        <div class="prod-box-wrap-3 text-center">
                                            <div class="prod-box-inner">
                                                <div class="prod-img">
                                                    <img src="./assets/images/14-300x300.png" class="img-fluid"
                                                        alt="">
                                                </div>
                                                <h6 class="para">
                                                    Beauty
                                                </h6>
                                                <h4 class="primary-text line-h">
                                                    AENEAN EGET RISUS UIS LIGULA
                                                    QUIS VIVE
                                                </h4>
                                                <div class="ratings-stars">
                                                    <div class="d-flex justify-content-center">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                </div>
                                                <h4 class="primary-text mt-3">
                                                    $55.00
                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-6 mm-b-20 mt-13">
                                        <div class="prod-box-wrap-3 text-center">
                                            <div class="prod-box-inner">
                                                <div class="prod-img">
                                                    <img src="./assets/images/pdt20-420x420.png" class="img-fluid"
                                                        alt="">
                                                </div>
                                                <h6 class="para">
                                                    Beauty
                                                </h6>
                                                <h4 class="primary-text line-h">
                                                    AENEAN EGET RISUS UIS LIGULA
                                                    QUIS VIVE
                                                </h4>
                                                <div class="ratings-stars">
                                                    <div class="d-flex justify-content-center">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                </div>
                                                <h4 class="primary-text mt-3">
                                                    $55.00
                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-6 mt-13">
                                        <div class="prod-box-wrap-3 text-center">
                                            <div class="prod-box-inner">
                                                <div class="prod-img">
                                                    <img src="./assets/images/pdt18.png" class="img-fluid"
                                                        alt="">
                                                </div>
                                                <h6 class="para">
                                                    Beauty
                                                </h6>
                                                <h4 class="primary-text line-h">
                                                    AENEAN EGET RISUS UIS LIGULA
                                                    QUIS VIVE
                                                </h4>
                                                <div class="ratings-stars">
                                                    <div class="d-flex justify-content-center">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                </div>
                                                <h4 class="primary-text mt-3">
                                                    $55.00
                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-6 mt-13 ">
                                        <div class="prod-box-wrap-3 text-center">
                                            <div class="prod-box-inner">
                                                <div class="prod-img">
                                                    <img src="./assets/images/pdt16-420x420.png" class="img-fluid"
                                                        alt="">
                                                </div>
                                                <h6 class="para">
                                                    Beauty
                                                </h6>
                                                <h4 class="primary-text line-h">
                                                    AENEAN EGET RISUS UIS LIGULA
                                                    QUIS VIVE
                                                </h4>
                                                <div class="ratings-stars">
                                                    <div class="d-flex justify-content-center">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                </div>
                                                <h4 class="primary-text mt-3">
                                                    $55.00
                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                                aria-labelledby="pills-profile-tab" tabindex="0">
                                <div class="row">
                                    <div class="col-lg-3 col-12">
                                        <div class="prod-box-wrap-3 text-center">
                                            <div class="prod-box-inner">
                                                <div class="prod-img">
                                                    <img src="./assets/images/12-300x300.png" class="img-fluid"
                                                        alt="">
                                                </div>
                                                <h6 class="para">
                                                    Beauty
                                                </h6>
                                                <h4 class="primary-text line-h">
                                                    AENEAN EGET RISUS UIS LIGULA
                                                    QUIS VIVE
                                                </h4>
                                                <div class="ratings-stars">
                                                    <div class="d-flex justify-content-center">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                </div>
                                                <h4 class="primary-text mt-3">
                                                    $55.00
                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-12">
                                        <div class="prod-box-wrap-3 text-center">
                                            <div class="prod-box-inner">
                                                <div class="prod-img">
                                                    <img src="./assets/images/17-300x300.png" class="img-fluid"
                                                        alt="">
                                                </div>
                                                <h6 class="para">
                                                    Beauty
                                                </h6>
                                                <h4 class="primary-text line-h">
                                                    AENEAN EGET RISUS UIS LIGULA
                                                    QUIS VIVE
                                                </h4>
                                                <div class="ratings-stars">
                                                    <div class="d-flex justify-content-center">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                </div>
                                                <h4 class="primary-text mt-3">
                                                    $55.00
                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-12">
                                        <div class="prod-box-wrap-3 text-center">
                                            <div class="prod-box-inner">
                                                <div class="prod-img">
                                                    <img src="./assets/images/15-300x300.png" class="img-fluid"
                                                        alt="">
                                                </div>
                                                <h6 class="para">
                                                    Beauty
                                                </h6>
                                                <h4 class="primary-text line-h">
                                                    AENEAN EGET RISUS UIS LIGULA
                                                    QUIS VIVE
                                                </h4>
                                                <div class="ratings-stars">
                                                    <div class="d-flex justify-content-center">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                </div>
                                                <h4 class="primary-text mt-3">
                                                    $55.00
                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                    <!--  -->
                                    <div class="col-lg-3 col-12 mt-15">
                                        <div class="prod-box-wrap-3 text-center">
                                            <div class="prod-box-inner">
                                                <div class="prod-img">
                                                    <img src="./assets/images/5-300x300.png" class="img-fluid"
                                                        alt="">
                                                </div>
                                                <h6 class="para">
                                                    Beauty
                                                </h6>
                                                <h4 class="primary-text line-h">
                                                    AENEAN EGET RISUS UIS LIGULA
                                                    QUIS VIVE
                                                </h4>
                                                <div class="ratings-stars">
                                                    <div class="d-flex justify-content-center">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                </div>
                                                <h4 class="primary-text mt-3">
                                                    $55.00
                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-12 mt-15">
                                        <div class="prod-box-wrap-3 text-center">
                                            <div class="prod-box-inner">
                                                <div class="prod-img">
                                                    <img src="./assets/images/14-300x300.png" class="img-fluid"
                                                        alt="">
                                                </div>
                                                <h6 class="para">
                                                    Beauty
                                                </h6>
                                                <h4 class="primary-text line-h">
                                                    AENEAN EGET RISUS UIS LIGULA
                                                    QUIS VIVE
                                                </h4>
                                                <div class="ratings-stars">
                                                    <div class="d-flex justify-content-center">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                </div>
                                                <h4 class="primary-text mt-3">
                                                    $55.00
                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-12 mt-15">
                                        <div class="prod-box-wrap-3 text-center">
                                            <div class="prod-box-inner">
                                                <div class="prod-img">
                                                    <img src="./assets/images/pdt20-420x420.png" class="img-fluid"
                                                        alt="">
                                                </div>
                                                <h6 class="para">
                                                    Beauty
                                                </h6>
                                                <h4 class="primary-text line-h">
                                                    AENEAN EGET RISUS UIS LIGULA
                                                    QUIS VIVE
                                                </h4>
                                                <div class="ratings-stars">
                                                    <div class="d-flex justify-content-center">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                </div>
                                                <h4 class="primary-text mt-3">
                                                    $55.00
                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-12 mt-15">
                                        <div class="prod-box-wrap-3 text-center">
                                            <div class="prod-box-inner">
                                                <div class="prod-img">
                                                    <img src="./assets/images/pdt18.png" class="img-fluid"
                                                        alt="">
                                                </div>
                                                <h6 class="para">
                                                    Beauty
                                                </h6>
                                                <h4 class="primary-text line-h">
                                                    AENEAN EGET RISUS UIS LIGULA
                                                    QUIS VIVE
                                                </h4>
                                                <div class="ratings-stars">
                                                    <div class="d-flex justify-content-center">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                </div>
                                                <h4 class="primary-text mt-3">
                                                    $55.00
                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-12 mt-15">
                                        <div class="prod-box-wrap-3 text-center">
                                            <div class="prod-box-inner">
                                                <div class="prod-img">
                                                    <img src="./assets/images/pdt16-420x420.png" class="img-fluid"
                                                        alt="">
                                                </div>
                                                <h6 class="para">
                                                    Beauty
                                                </h6>
                                                <h4 class="primary-text line-h">
                                                    AENEAN EGET RISUS UIS LIGULA
                                                    QUIS VIVE
                                                </h4>
                                                <div class="ratings-stars">
                                                    <div class="d-flex justify-content-center">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                </div>
                                                <h4 class="primary-text mt-3">
                                                    $55.00
                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                                aria-labelledby="pills-contact-tab" tabindex="0">
                                <div class="row">
                                    <div class="col-lg-3 col-12">
                                        <div class="prod-box-wrap-3 text-center">
                                            <div class="prod-box-inner">
                                                <div class="prod-img">
                                                    <img src="./assets/images/12-300x300.png" class="img-fluid"
                                                        alt="">
                                                </div>
                                                <h6 class="para">
                                                    Beauty
                                                </h6>
                                                <h4 class="primary-text line-h">
                                                    AENEAN EGET RISUS UIS LIGULA
                                                    QUIS VIVE
                                                </h4>
                                                <div class="ratings-stars">
                                                    <div class="d-flex justify-content-center">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                </div>
                                                <h4 class="primary-text mt-3">
                                                    $55.00
                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-12">
                                        <div class="prod-box-wrap-3 text-center">
                                            <div class="prod-box-inner">
                                                <div class="prod-img">
                                                    <img src="./assets/images/17-300x300.png" class="img-fluid"
                                                        alt="">
                                                </div>
                                                <h6 class="para">
                                                    Beauty
                                                </h6>
                                                <h4 class="primary-text line-h">
                                                    AENEAN EGET RISUS UIS LIGULA
                                                    QUIS VIVE
                                                </h4>
                                                <div class="ratings-stars">
                                                    <div class="d-flex justify-content-center">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                </div>
                                                <h4 class="primary-text mt-3">
                                                    $55.00
                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-12">
                                        <div class="prod-box-wrap-3 text-center">
                                            <div class="prod-box-inner">
                                                <div class="prod-img">
                                                    <img src="./assets/images/15-300x300.png" class="img-fluid"
                                                        alt="">
                                                </div>
                                                <h6 class="para">
                                                    Beauty
                                                </h6>
                                                <h4 class="primary-text line-h">
                                                    AENEAN EGET RISUS UIS LIGULA
                                                    QUIS VIVE
                                                </h4>
                                                <div class="ratings-stars">
                                                    <div class="d-flex justify-content-center">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                </div>
                                                <h4 class="primary-text mt-3">
                                                    $55.00
                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                    <!--  -->
                                    <div class="col-lg-3 col-12 mt-15">
                                        <div class="prod-box-wrap-3 text-center">
                                            <div class="prod-box-inner">
                                                <div class="prod-img">
                                                    <img src="./assets/images/5-300x300.png" class="img-fluid"
                                                        alt="">
                                                </div>
                                                <h6 class="para">
                                                    Beauty
                                                </h6>
                                                <h4 class="primary-text line-h">
                                                    AENEAN EGET RISUS UIS LIGULA
                                                    QUIS VIVE
                                                </h4>
                                                <div class="ratings-stars">
                                                    <div class="d-flex justify-content-center">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                </div>
                                                <h4 class="primary-text mt-3">
                                                    $55.00
                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-12 mt-15">
                                        <div class="prod-box-wrap-3 text-center">
                                            <div class="prod-box-inner">
                                                <div class="prod-img">
                                                    <img src="./assets/images/14-300x300.png" class="img-fluid"
                                                        alt="">
                                                </div>
                                                <h6 class="para">
                                                    Beauty
                                                </h6>
                                                <h4 class="primary-text line-h">
                                                    AENEAN EGET RISUS UIS LIGULA
                                                    QUIS VIVE
                                                </h4>
                                                <div class="ratings-stars">
                                                    <div class="d-flex justify-content-center">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                </div>
                                                <h4 class="primary-text mt-3">
                                                    $55.00
                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-12 mt-15">
                                        <div class="prod-box-wrap-3 text-center">
                                            <div class="prod-box-inner">
                                                <div class="prod-img">
                                                    <img src="./assets/images/pdt20-420x420.png" class="img-fluid"
                                                        alt="">
                                                </div>
                                                <h6 class="para">
                                                    Beauty
                                                </h6>
                                                <h4 class="primary-text line-h">
                                                    AENEAN EGET RISUS UIS LIGULA
                                                    QUIS VIVE
                                                </h4>
                                                <div class="ratings-stars">
                                                    <div class="d-flex justify-content-center">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                </div>
                                                <h4 class="primary-text mt-3">
                                                    $55.00
                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-12 mt-15">
                                        <div class="prod-box-wrap-3 text-center">
                                            <div class="prod-box-inner">
                                                <div class="prod-img">
                                                    <img src="./assets/images/pdt18.png" class="img-fluid"
                                                        alt="">
                                                </div>
                                                <h6 class="para">
                                                    Beauty
                                                </h6>
                                                <h4 class="primary-text line-h">
                                                    AENEAN EGET RISUS UIS LIGULA
                                                    QUIS VIVE
                                                </h4>
                                                <div class="ratings-stars">
                                                    <div class="d-flex justify-content-center">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                </div>
                                                <h4 class="primary-text mt-3">
                                                    $55.00
                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-12 mt-15">
                                        <div class="prod-box-wrap-3 text-center">
                                            <div class="prod-box-inner">
                                                <div class="prod-img">
                                                    <img src="./assets/images/pdt16-420x420.png" class="img-fluid"
                                                        alt="">
                                                </div>
                                                <h6 class="para">
                                                    Beauty
                                                </h6>
                                                <h4 class="primary-text line-h">
                                                    AENEAN EGET RISUS UIS LIGULA
                                                    QUIS VIVE
                                                </h4>
                                                <div class="ratings-stars">
                                                    <div class="d-flex justify-content-center">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                </div>
                                                <h4 class="primary-text mt-3">
                                                    $55.00
                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="sixth-sec">
        <div class="container ">
            <div class="row justify-content-center">
                <div class="col-lg-12 col-12">
                    <div class="inner-img-wrap">
                        <div class="row">
                            <div class="col-lg-12 col-12">
                                <div class="h-inner-b-wrap">
                                    <div class="row h-inner-mm-cont">
                                        <div class="offset-4 col-lg-8 col-3 col-md-12 col-12 h-middle-sec">
                                            <div>
                                                <h3 class="inner-title ml  ">BECOME A</h3>
                                            </div>
                                            <div>
                                                <h3 class="inner-title change mm">RIDER</h3>
                                            </div>
                                            <div>
                                                <h4 class="inner-heading mm ">Today</h4>
                                            </div>
                                            <button class="primary-btn banner-btn mm mt-15 ">Get Started</button>
                                        </div>
                                    </div>
                                    <div class="h-inner-b">
                                        <img src="./assets/images/six-section-r-img.png" class="img-fluid"
                                            alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="seventh-sec sec-pd-b">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-12 col-12">

                    <h4 class="text-hd-lg follow-us">Follow Us</h4>
                    <h2 class="title-text mb-0">Carousel</h2>
                    <img src="./assets/images/follow-bg.png" class="img-fluid w-100" alt="">
                </div>
            </div>
        </div>
    </section>
    
@endsection
