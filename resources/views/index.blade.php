<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>Boldo | Boldo Agency Template</title>

    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicons/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicons/favicon.ico">
    <link rel="manifest" href="assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">

    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200;300;400;500;600;700&amp;display=swap"
        rel="stylesheet">
    <link href="vendors/prism/prism.css" rel="stylesheet">
    <link href="vendors/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="assets/css/theme.min.css" rel="stylesheet" />
    <link href="assets/css/user.min.css" rel="stylesheet" />
</head>

<body>
    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
        <nav class="navbar navbar-expand-lg fixed-top navbar-dark" data-navbar-on-scroll="data-navbar-on-scroll">
            <div class="container"><a class="navbar-brand" href="{{ asset('/') }}"><img src="assets/img/Logo.png"
                        alt="" /></a><button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation"><i
                        class="fa-solid fa-bars text-white fs-3"></i></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                        <li class="nav-item"><a class="nav-link active" aria-current="page"
                                href="{{ asset('/') }}">Home</a></li>


                        <li class="nav-item"><a class="nav-link" aria-current="page"
                                href="{{ asset('/surveys') }}">Surveys</a></li>

                        <li class="nav-item"><a class="nav-link" aria-current="page"
                                href="{{ asset('/about') }}">About</a></li>
                        <li class="nav-item"><a class="nav-link" aria-current="page"
                                href="{{ asset('/contact') }}">Contact</a></li>

                        @guest



                            <li class="nav-item mt-2 mt-lg-0 mx-2"><a
                                    class="nav-link btn btn-light text-black w-md-25 w-50 w-lg-100 " aria-current="page"
                                    href="{{ asset('/register') }}">Register</a></li>

                            <li class="nav-item mt-2 mt-lg-0"><a
                                    class="nav-link btn btn-light text-black w-md-25 w-50 w-lg-100 " aria-current="page"
                                    href="{{ asset('/login') }}">Log In</a></li>
                        @else
                            <li class="nav-item dropdown">
                                {{-- <div>{{ Auth::user()->name }}</div> --}}

                                <a class="nav-link dropdown-toggle style="border-radius: 0"" href="{{ asset('/profile') }}"
                                    role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="assets/img/user.png" class="rounded-circle" height="22" alt="Avatar"
                                        loading="lazy" />

                                </a>
                                <ul class="dropdown-menu" style="border-radius: 0">
                                    <li><a class="dropdown-item" href="{{ asset('/profile') }}">Profile</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <x-dropdown-link :href="route('logout')"
                                            onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                            {{ __('Log Out') }}
                                        </x-dropdown-link>
                                    </form>
                                </ul>
                            </li>
                        @endguest

                    </ul>

                </div>
            </div>
        </nav>
        <div class="bg-dark"><img class="img-fluid position-absolute end-0" src="assets/img/hero/hero-bg.png"
                alt="" />

            <!-- ============================================-->
            <!-- <section> begin ============================-->



            <section>
                <div class="container">
                    <div class="row align-items-center py-lg-8 py-6">
                        <div class="col-lg-6 text-center text-lg-start">
                            <h1 class="text-white fs-5 fs-xl-6">Save time by building fast with Boldo Template</h1>
                            <p class="text-white py-lg-3 py-2">Funding handshake buyer business-to-business metrics
                                iPad
                                partnership. First mover advantage innovator success deployment non-disclosure.</p>
                            <div class="d-sm-flex align-items-center gap-3"><button
                                    class="btn btn-success text-black mb-3 w-75">Start Collecting Points</button>
                                <a href="{{ asset('/owner/home') }}" class="btn btn-outline-light mb-3 w-75"
                                    role="button" aria-disabled="true">Upload your Survey</a>

                                {{-- <button class="btn btn-outline-light mb-3 w-75">Upload your Survey</button> --}}
                            </div>
                        </div>
                        <div class="col-lg-6 text-center text-lg-end mt-3 mt-lg-0"><img class="img-fluid"
                                src="assets/img/hero/hero-graphics.png" alt="" /></div>
                    </div>
                    <div class="swiper">
                        <div class="swiper-container swiper-shadow swiper-theme"
                            data-swiper='{"slidesPerView":2,"breakpoints":{"640":{"slidesPerView":2,"spaceBetween":20},"768":{"slidesPerView":4,"spaceBetween":40},"992":{"slidesPerView":5,"spaceBetween":40},"1024":{"slidesPerView":4,"spaceBetween":50},"1025":{"slidesPerView":6,"spaceBetween":50}},"spaceBetween":10,"grabCursor":true,"pagination":{"el":".swiper-pagination","clickable":true},"loop":true,"freeMode":true,"autoplay":{"delay":2500,"disableOnInteraction":false}}'>
                            <div class="swiper-wrapper">
                                <div class="swiper-slide text-center"><img src="assets/img/logos/uni.png"
                                    alt="" /></div>
                            
                            <div class="swiper-slide text-center"><img src="assets/img/logos/presto.png"
                                    alt="" /></div>
                            <div class="swiper-slide text-center"><img src="assets/img/logos/uni.png"
                                    alt="" /></div>
                            <div class="swiper-slide text-center"><img src="assets/img/logos/boldo.png"
                                    alt="" /></div>
                            <div class="swiper-slide text-center"><img src="assets/img/logos/safwa.png"
                                    alt="" /></div>
                            </div>
                        </div>
                    </div>
                </div><!-- end of .container-->
            </section><!-- <section> close ============================-->
            <!-- ============================================-->

        </div>

        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section>
            <div class="container">
                <p class="text-center fs-1">Our Services</p>
                <h2 class="mx-auto text-center fs-lg-6 fs-md-5 w-lg-75">We want access clean data that helps researchers improve the world.
                </h2>
                <div class="row gx-xl-7 mt-5">
                    <div class="col-md-4 mb-6 mb-md-0 text-center text-md-start"><img class="w-50 w-md-100"
                            src="assets/img/services/1.png" alt="" />
                        <h4 class="mt-3 my-1">Upload Survey
                        </h4>
                        <p class="fs-1 mb-0">Upload your survey now to get results as soon as possible.
                        </p><a
                            class="text-dark fs-1 pb-2 fw-bold border-black border-bottom text-decoration-none"
                            href="{{ asset('/owner/home') }}">Explore page<i class="fa-solid fa-arrow-right ms-2"></i></a>
                    </div>
                    <div class="col-md-4 mb-6 mb-md-0 text-center text-md-start"><img class="w-50 w-md-100"
                            src="assets/img/services/2.png" alt="" />
                        <h4 class="mt-3 my-1">Fill out the Survey
                        </h4>
                        <p class="fs-1 mb-0">Answer some surveys to get reward points.                        </p><a
                            class="text-dark fs-1 pb-2 fw-bold border-black border-bottom text-decoration-none"
                            href="{{ asset('/surveys') }}">Explore page<i class="fa-solid fa-arrow-right ms-2"></i></a>
                    </div>
                    <div class="col-md-4 mb-6 mb-md-0 text-center text-md-start"><img class="w-50 w-md-100"
                            src="assets/img/services/3.png" alt="" />
                        <h4 class="mt-3 my-1">Our Points Program                        </h4>
                        <p class="fs-1 mb-0">Fill out a survey and get points and Copouns        
                            .                        </p><a
                            class="text-dark fs-1 pb-2 fw-bold border-black border-bottom text-decoration-none"
                            href="#">Explore page<i class="fa-solid fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div><!-- end of .container-->
        </section><!-- <section> close ============================-->
        <!-- ============================================-->






        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section class="pt-8 pt-lg-0">
            <div class="container">
                <div class="d-flex flex-column-reverse flex-lg-row">
                    <div class="col-lg-6">
                        <h1 class="fs-lg-4 fs-md-3 fs-xl-5 mb-5">We connect our reserchers with the best, and help them keep up-and stay open.
                        </h1>
                        <ul class="list-unstyled">
                            <li class="fs-2 shadow-sm offer-list-item"><i
                                    class="fa-solid fa-leaf fs-lg-4 fs-3"></i><span>We connect our researchers with the best.
                                    </span></li>
                            <li class="fs-2 shadow-sm offer-list-item"><i
                                    class="fa-solid fa-eye fs-lg-4 fs-3"></i><span>We strive for every researcher to have clean data.
                                    </span></li>
                          
                        </ul>
                    </div>
                    <div class="col-lg-6 text-center text-lg-end"><img class="img-fluid" src="assets/img/offer/2.png"
                            alt="" /></div>
                </div>
            </div><!-- end of .container-->
        </section><!-- <section> close ============================-->
        <!-- ============================================-->



        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section class="bg-dark pt-6">
            <div class="container">
                <div class="col-md-6">
                    <h1 class="text-white fs-lg-5 fs-md-3 fs-2">An enterprise template to ramp up your company website
                    </h1>
                </div>
                <div class="swiper mt-7">
                    <div class="swiper-container swiper-theme"
                        data-swiper='{"slidesPerView":1,"breakpoints":{"640":{"slidesPerView":1,"spaceBetween":10},"768":{"slidesPerView":2,"spaceBetween":20},"1025":{"slidesPerView":3,"spaceBetween":40}},"spaceBetween":10,"grabCursor":true,"pagination":{"el":".swiper-pagination","clickable":true},"navigation":{"nextEl":".swiper-button-next","prevEl":".swiper-button-prev"},"loop":true,"freeMode":true,"loopedSlides":3}'>
                        <div class="swiper-wrapper">
                            <div class="swiper-slide bg-white p-5 rounded-3 h-auto">
                                <div class="d-flex flex-column justify-content-between h-100">
                                    <h4 class="text-black">“I filled out a lot of surveys and got points for them.”</h4>
                                    <div class="d-flex align-items-center gap-3 mt-5"><img
                                            src="assets/img/review/1.png" alt="" />
                                        <div class="text-black">
                                            <p class="mb-0 fw-bold text-dark">Abeer Yehia</p><small>Student @
                                                HU</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide bg-white p-5 rounded-3 h-auto">
                                <div class="d-flex flex-column justify-content-between h-100">
                                    <h4 class="text-black">“I placed my own survey on the site and it was filled out by the desired sample. ”</h4>
                                    <div class="d-flex align-items-center gap-3 mt-5"><img
                                            src="assets/img/review/2.png" alt="" />
                                        <div class="text-black">
                                            <p class="mb-0 fw-bold text-dark">Abdalrhman Mousa</p><small>Student @
                                                Orange Academy</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide bg-white p-5 rounded-3 h-auto">
                                <div class="d-flex flex-column justify-content-between h-100">
                                    <h4 class="text-black">“I filled out a lot of surveys and got points for them.  ”</h4>
                                    <div class="d-flex align-items-center gap-3 mt-5"><img
                                            src="assets/img/review/3.png" alt="" />
                                        <div class="text-black">
                                            <p class="mb-0 fw-bold text-dark">Omar Alomari</p><small>Team Leader @
                                                Unicef</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide bg-white p-5 rounded-3 h-auto">
                                <div class="d-flex flex-column justify-content-between h-100">
                                    <h4 class="text-black">“I filled out a lot of surveys and got points for them.”</h4>
                                    <div class="d-flex align-items-center gap-3 mt-5"><img
                                            src="assets/img/review/1.png" alt="" />
                                        <div class="text-black">
                                            <p class="mb-0 fw-bold text-dark">Rama Jardat</p><small>Student @
                                                HU</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-button-next"><span class="fas fa-arrow-right fs-lg-3 fs-2"></span></div>
                    <div class="swiper-button-prev"><span class="fas fa-arrow-left fs-lg-3 fs-2"></span></div>
                </div>
            </div><!-- end of .container-->
        </section><!-- <section> close ============================-->
        <!-- ============================================-->



        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section>
            <div class="container"><img class="img-fluid" src="assets/img/offer/3.png" alt="" />
                <div class="row mt-5 align-items-center">
                    <div class="col-md-6">
                        <h2 class="fs-md-4 fs-3 pt-3">We connect our researchers with the best, and help them keep up-and stay open.
                        </h2>
                    </div>
                    <div class="col-md-6">
                        <div class="accordion accordion-flush" id="accordionFlushExample">
                            <div class="accordion-item"></div>
                            <h2 class="accordion-header border-bottom" id="srgdgfdgdgg45"><button
                                    class="accordion-button collapsed text-black" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#srgdgfdgdgg45tyuu"
                                    aria-expanded="false" aria-controls="srgdgfdgdgg45"><span class="fs-1 pe-3">We connect our researchers with the best?
                                        ?</span></button></h2>
                            <div class="accordion-collapse collapse" aria-labelledby="srgdgfdgdgg45"
                                data-bs-parent="#accordionFlushExample" id="srgdgfdgdgg45tyuu">
                                <div class="accordion-body">
                                    <p class="mb-0">Placeholder content for this accordion, which is intended to
                                        demonstrate the accordion-flush class. This is the first item's accordion body.
                                    </p>
                                </div>
                            </div>
                            <div class="accordion-item"></div>
                            <h2 class="accordion-header border-bottom" id="sxvdgrfhfh276"><button
                                    class="accordion-button collapsed text-black" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#srgdgfdgdgg45tyuu5ghj"
                                    aria-expanded="false" aria-controls="sxvdgrfhfh276"><span
                                        class="fs-1 pe-3">Android research &amp; development rockstar? </span></button>
                            </h2>
                            <div class="accordion-collapse collapse" aria-labelledby="sxvdgrfhfh276"
                                data-bs-parent="#accordionFlushExample" id="srgdgfdgdgg45tyuu5ghj">
                                <div class="accordion-body">
                                    <p class="mb-0">Placeholder content for this accordion, which is intended to
                                        demonstrate the accordion-flush class. This is the first item's accordion body.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- end of .container-->
        </section><!-- <section> close ============================-->
        <!-- ============================================-->



        <!-- ============================================-->
        <!-- <section> begin ============================-->
        ->
        <!-- ============================================-->

    </main><!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->



    <!-- ============================================-->
    <!-- <section> begin ============================-->
    <section>
        <div class="container bg-dark overflow-hidden rounded-1">
            <div class="bg-holder" style="background-image: url(assets/img/promo/promo-bg.png)"></div>
            <!--/.bg-holder-->

            <div class="px-5 py-7 position-relative">
                <h1 class="text-center w-lg-75 mx-auto fs-lg-6 fs-md-4 fs-3 text-white">
                    If you intrested for our new surveys

                </h1>
                <div class="row justify-content-center mt-5">
                    <div class="col-auto w-100 w-lg-50">
                        <form action="/subscriber" method="post">
                            @csrf

                            <input class="form-control mb-2 border-light fs-1" name="email" type="email"
                                placeholder="Your email address" />
                    </div>
                    <div class="col-auto mt-2 mt-lg-0">
                        <button type="submit" class="btn btn-success text-dark fs-1">Subscribe Now</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- end of .container-->
    </section>






    <!-- <section> close ============================-->
    <!-- ============================================-->



    <!-- ============================================-->
    <!-- <section> begin ============================-->
    <section class="pt-0">
        <div class="container d-flex justify-content-center">

            <footer id="footer" class="footer">
                <div class="copyright">
                    &copy; Copyright <strong><span>Goal Survey</span></strong>. All Rights Reserved
                </div>
                    <div class="container d-flex justify-content-center">
                    Designed & Developed by Goal Team</a>
                </div>
            </footer>
        


        </div>
    </section><!-- <section> close ============================-->
    <!-- ============================================-->


    @if (session('addSub'))
        <script>
            window.onload = function() {
                // console.log('Hi');
                Swal.fire({
                    icon: 'success',
                    title: 'Welcome',
                    text: 'Thank you for being a part of our Family',
                })
            }
        </script>
    @endif




    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="vendors/popper/popper.min.js"></script>
    <script src="vendors/bootstrap/bootstrap.min.js"></script>
    <script src="vendors/anchorjs/anchor.min.js"></script>
    <script src="vendors/is/is.min.js"></script>
    <script src="vendors/fontawesome/all.min.js"></script>
    <script src="vendors/lodash/lodash.min.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="vendors/prism/prism.js"></script>
    <script src="vendors/swiper/swiper-bundle.min.js"></script>
    <script src="assets/js/theme.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


</body>

</html>
