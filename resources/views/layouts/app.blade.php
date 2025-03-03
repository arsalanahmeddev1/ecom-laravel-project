<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- fontawesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    {{-- fontawesome --}}
    {{-- fonts --}}
    <link rel="stylesheet" href="{{ asset('assets/vendor/fonts.css') }}">
    {{-- styles --}}
    <link rel="stylesheet" href="{{ asset('assets/vendor/vendor.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <title>Laravel</title>
</head>

<body
    class="bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b18] flex p-6 lg:p-8 items-center lg:justify-center min-h-screen flex-col">
    {{-- top bar --}}
    <div class="Top-bar">
        <div class="container">
            <div class="row align-items-center justify-contact-center">
                <div class="col-lg-4 col-7 order-right">
                    <div class="d-flex">
                        <div class="top-select">
                            <select class="form-select" aria-label="Default select example">
                                <option selected>USD</option>
                                <option value="1">USD</option>
                                <option value="2">USD</option>
                                <option value="3">USD</option>
                            </select>
                        </div>
                        <div class="top-select">
                            <select class="form-select" aria-label="Default select example">
                                <option selected>ENG</option>
                                <option value="1">ENG</option>
                                <option value="2">ENG</option>
                                <option value="3">ENG</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-4 ">
                    <div class="logo text-center">
                        <a href="./" class=""><img src="./assets/images/logo.png" class="img-fluid"
                                alt=""></a>
                    </div>
                </div>
                <div class="col-lg-4 col-1">
                    <div class="d-flex justify-content-end">
                        <div class="contact d-lg-block d-none ">
                            <span>Support 24/7</span> <a href="tel: 123-456-7890" class="">123-456-7890</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- top bar --}}
    {{-- header --}}
    <header class="header">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-3 ">
                    <div class="s-drop multi-drop d-none d-lg-block">
                        <div class="dropdown">
                            <button class="s-drop-btn" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa-solid fa-bars"></i> SHOP BY CATEGORY
                            </button>
                            <ul class="dropdown-menu">
                                <div class="section-wrapper">
                                    <nav class="accordion-wrapper">
                                        <ul class="ul-reset">
                                            <li>
                                                <a href="#">Beauty</a>
                                                <ul class="ul-reset">
                                                    <li><a href="#">Rose Swag Bag</a></li>
                                                    <li><a href="#">Kit Rose</a></li>
                                                    <li><a href="#">Rose Gold</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#">Lipstick</a>
                                                <ul class="ul-reset">
                                                    <li><a href="#">Sub-Category One</a></li>
                                                    <li><a href="#">Sub-Category Two</a></li>
                                                    <li><a href="#">Sub-Category Three</a></li>
                                                    <li><a href="#">Sub-Category Four</a></li>
                                                    <li><a href="#">Sub-Category Five</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#">Mascara</a>
                                                <ul class="ul-reset">
                                                    <li><a href="#">Sub-Category One</a></li>
                                                    <li><a href="#">Sub-Category Two</a></li>
                                                    <li><a href="#">Sub-Category Three</a></li>
                                                    <li><a href="#">Sub-Category Four</a></li>
                                                    <li><a href="#">Sub-Category Five</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#">Nails</a>
                                                <ul class="ul-reset">
                                                    <li><a href="#">Sub-Category One</a></li>
                                                    <li><a href="#">Sub-Category Two</a></li>
                                                    <li><a href="#">Sub-Category Three</a></li>
                                                    <li><a href="#">Sub-Category Four</a></li>
                                                    <li><a href="#">Sub-Category Five</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#">Perfumes</a>
                                                <ul class="ul-reset">
                                                    <li><a href="#">Sub-Category One</a></li>
                                                    <li><a href="#">Sub-Category Two</a></li>
                                                    <li><a href="#">Sub-Category Three</a></li>
                                                    <li><a href="#">Sub-Category Four</a></li>
                                                    <li><a href="#">Sub-Category Five</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </ul>
                        </div>
                    </div>

                </div>
                <div class="col-lg-5">
                    <nav class="primary-navs">
                        <ul class="nav-list">
                            <li><a class='nav-btn' href="./" class="">HOME</a></li>
                            <li><a class='nav-btn' href="./about.php">ABOUT US</a></li>
                            <li class="dropdown nav-drop">
                                <a href='./shop' class="dropdown-toggle nav-items nav-btn" type="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    SHOP
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </li>
                            <li class="dropdown nav-drop nav-drop-2">
                                <a class="dropdown-toggle nav-items" type="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    PRODUCTS
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </li>
                            <li><a href="./contact.php">CONTACT US</a></li>
                        </ul>
                        <button class="menu-toggler close-btn"><i class="fa-solid fa-xmark"></i></button>
                    </nav>
                </div>
                <div class="col-lg-4 col-12 pe-5">

                    <div class="d-flex align-items-center gap-20">
                        <div class="">
                            <a href="#" class="menu-toggler open-menu "><i class="fa-solid fa-bars"></i></a>
                        </div>
                        <div class="flex-grow">
                            <div class="search-bar">
                                <input type="text" class="input-field" placeholder="Search Product">
                                <div class="search-icon">
                                    <i class="fa-solid fa-magnifying-glass"></i>
                                </div>
                            </div>
                        </div>
                        <ul class="header-items gap-20">
                            <li class="header-drop pro-drop">
                                <div class="dropdown">
                                    <button class="dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        <img src="./assets/images/user-profile-av.svg"
                                            class="img-fluid profile-av-img" alt="">
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#"><img
                                                    src="./assets/images/drop-av-1.svg" alt=""> Profile</a>
                                        </li>
                                        <li><a class="dropdown-item" href="#"><img
                                                    src="./assets/images/drop-av-2.svg" alt="">Order Log</a>
                                        </li>
                                        <li><a class="dropdown-item" href="#"><img
                                                    src="./assets/images/drop-av-3.svg" alt="">Logout</a></li>

                                    </ul>
                                </div>
                            </li>
                            <li class="h-icon">
                                <a href=""><img src="./assets/images/heart-icon.svg"
                                        class="img-fluid heart-img" alt=""><span
                                        class="heart-icon">3</span></a>
                            </li>
                            <li class="h-icon">
                                <a href=""><img src="./assets/images/shp-icon.svg" class="img-fluid shop-img"
                                        alt=""><span class="shop-icon">12</span></a>
                            </li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </header>
    {{-- header --}}
    <main class="">
        @yield('content')
    </main>
    @include('partials.eight-sec')
    {{-- footer --}}
    <footer class="footer">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-12 col-12">
                    <div class="footer-content">
                        <div class="row justify-content-between">
                            <div class="col-lg-6 col-12">
                                <div class="footer-border-wrap">
                                    <h4 class="secondry-text-3  mb-20">ADD MORE BEAUTY TO YOUR EMAIL</h4>
                                    <div class="footer-input-wrap">
                                        <input type="text" class="input-field footer-input-a"
                                            placeholder="Enter Your Email">
                                        <div class="f-icon-wrap">
                                            <i class="fa-solid fa-paper-plane"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-12">
                                <h4 class="secondry-text-3 mb-20 mm-t-20">STAY IN TOUCH WITH US</h4>
                                <ul class="d-flex footer-links-wrap">
                                    <li><a href="tell: 123 456 789" class="primary-text "><span><img
                                                    src="./assets/images/f-tell-i.svg" class="me-3"
                                                    alt=""></span> (+1) 123 456 789</a></li>
                                    <li class="mm-t-20"><a href="mailto: carousel.email.com"
                                            class="primary-text"><span><img src="./assets/images/f-m-icon.svg"
                                                    class="me-3" alt=""></span>carousel.email.com</a></li>
                                </ul>
                                <ul class="footer-links">
                                    <li><a href=""><i class="fa-brands fa-facebook-f"></i></a></li>
                                    <li><a href=""><i class="fa-brands fa-instagram"></i></a></li>
                                    <li><a href=""><i class="fa-brands fa-twitter"></i></a></li>
                                    <li><a href=""><i class="fa-brands fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-lg-10 col-12">
                            <div class="footer-navs">
                                <ul class="f-nav-list d-flex justify-content-between">
                                    <li><a href="./about.php">ABOUT US</a></li>
                                    <li><a href="./contact.php">CONTACT US</a></li>
                                    <li><a href="">MY ACCOUNT</a></li>
                                    <li><a href="">ORDER STATUS</a></li>
                                    <li><a href="">PRIVACY POLICIES</a></li>
                                    <li><a href="">TERMS & CONDITIONS</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6 col-12">
                        <h3 class="primary-text text-white mb-0">Copyright ©Carousel 2022. All rights reserved.</h3>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="footer-cards d-flex justify-content-end align-items-center mob-mt-20">
                            <a href=""><img src="./assets/images/footer-cards.png" class="img-fluid"
                                    alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    {{-- footer --}}

    <script src="./assets/vendor/vendor.js"></script>
    <script src="./assets/js/main.js"></script>
    @stack('scripts')
</body>

</html>
