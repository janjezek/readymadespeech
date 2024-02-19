<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required Meta Tags Always Come First -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>ReadyMadeSpeech.com</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- CSS Front Template -->
    <link rel="stylesheet" href="{{ asset('css/theme.css') }}">
</head>

<body>

    <header id="header" class="navbar navbar-expand-lg navbar-end navbar-absolute-top navbar-light navbar-show-hide" data-hs-header-options='{
          "fixMoment": 1000,
          "fixEffect": "slide"
        }'>

        <div class="container">
            <nav class="js-mega-menu navbar-nav-wrap">
                <!-- Default Logo -->
                <a class="navbar-brand" href="./" aria-label="Front">
                    <img class="navbar-brand-logo" src="{{ asset('./svg/logos/logo.svg') }}" alt="Logo" weight="30" height="30">ReadyMadeSpeech.com
                </a>
                <!-- End Default Logo -->

                <!-- Toggler -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-default">
                        <i class="bi-list"></i>
                    </span>
                    <span class="navbar-toggler-toggled">
                        <i class="bi-x"></i>
                    </span>
                </button>
                <!-- End Toggler -->

                <!-- Collapse -->
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <div class="navbar-absolute-top-scroller">
                        <ul class="navbar-nav">
                            <!-- Company -->
                            <li class="hs-has-sub-menu nav-item">
                                <a id="companyMegaMenu" class="hs-mega-menu-invoker nav-link dropdown-toggle @@if(category=='company'){active}" href="#" role="button" aria-expanded="false">Wedding speeches</a>

                                <!-- Mega Menu -->
                                <div class="hs-sub-menu dropdown-menu" aria-labelledby="companyMegaMenu" style="min-width: 14rem;">
                                    <a class="dropdown-item @@if(link=='page-about.html'){active}" href="/best-man-speech">Best Man Speech</a>
                                    <a class="dropdown-item @@if(link=='page-services.html'){active}" href="#">Maid of Honor Speech</a>
                                </div>
                                <!-- End Mega Menu -->
                            </li>
                            <!-- End Company -->

                            <!-- Account -->
                            <li class=" nav-item">
                                <a class="nav-link" href="#" role="button" aria-expanded="false">Wedding Vows</a>
                            </li>
                            <!-- End Account -->
                        </ul>
                    </div>
                </div>
                <!-- End Collapse -->
            </nav>
        </div>
    </header>


    <!-- ========== MAIN CONTENT ========== -->
    <main id="content" role="main">
        <!-- Hero -->
        <div class="overflow-hidden">
            <div class="container content-space-t-4 content-space-b-3">
                <div class="row justify-content-lg-between align-items-md-center">
                    <div class="col-md-6 col-lg-5 mb-7 mb-md-0">
                        <!-- Heading -->
                        <div class="mb-5">
                            <span class="text-cap">NEED AN UNFORGETTABLE TOAST?</span>
                            <h1 class="display-4 mb-3">Wedding Speech & Vow Writing Tools</h1>
                            <p class="lead">Hand over your stories & details. We'll write you a fully custom wedding toast or wedding vows in minutes.</p>
                        </div>
                        <!-- End Heading -->

                        <div class="d-grid d-sm-flex gap-3">
                            <a class="btn btn-primary btn-transition" href="/best-man-speech">GIVE IT A TRY</a>
                        </div>
                    </div>
                    <!-- End Col -->

                    <div class="col-md-6">
                        <div class="position-relative">
                            <img class="img-fluid rounded-2" src="{{ asset('img/others/rings.png') }}" alt="Image Description">
                            <div class="position-absolute top-0 end-0 w-100 h-100 bg-soft-primary rounded-2 zi-n1 mt-5 me-n5"></div>
                        </div>
                    </div>
                    <!-- End Col -->
                </div>
                <!-- End Row -->
            </div>
        </div>
        <!-- End Hero -->


    </main>
    <!-- ========== END MAIN CONTENT ========== -->

    <!-- ========== FOOTER ========== -->
    <footer>
        <div class="container pb-1 pb-lg-7">
            <div class="border-top my-7"></div>


            <!-- Copyright -->
            <div class="w-md-85 text-lg-center mx-lg-auto">
                <p class="text-muted small">&copy; ReadyMadeSpeech.com 2024</p>
            </div>
            <!-- End Copyright -->
        </div>
    </footer>
    <!-- ========== END FOOTER ========== -->

    <!-- JS Global Compulsory @@deleteLine:build -->
    <script src="@@autopath/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

    <!-- JS Implementing Plugins -->
    <!-- bundlejs:vendor [@@autopath] -->
    <script src="{{ asset('vendor/hs-header/dist/hs-header.min.js') }}"></script>
    <script src="{{ asset('vendor/hs-mega-menu/dist/hs-mega-menu.min.js') }}"></script>
    <script src="{{ asset('vendor/hs-show-animation/dist/hs-show-animation.min.js') }}"></script>
    <script src="{{ asset('vendor/hs-go-to/dist/hs-go-to.min.js') }}"></script>
    <script src="@@autopath/node_modules/aos/dist/aos.js"></script>
    <script src="@@autopath/node_modules/swiper/swiper-bundle.min.js"></script>

    <!-- JS Front -->
    <!-- bundlejs:theme [@@autopath] -->
    <script src="{{ asset('js/hs.core.js') }}"></script>
    <script src="{{ asset('js/hs.bs-dropdown.js') }}"></script>
    <script src="{{ asset('js/hs.bs-validation.js') }}"></script>

    <!-- JS Plugins Init. -->
    <script>
        (function() {
            // INITIALIZATION OF HEADER
            // =======================================================
            new HSHeader('#header').init()


            // INITIALIZATION OF MEGA MENU
            // =======================================================
            new HSMegaMenu('.js-mega-menu', {
                desktop: {
                    position: 'left'
                }
            })


            // INITIALIZATION OF SHOW ANIMATIONS
            // =======================================================
            new HSShowAnimation('.js-animation-link')


            // INITIALIZATION OF BOOTSTRAP VALIDATION
            // =======================================================
            HSBsValidation.init('.js-validate', {
                onSubmit: data => {
                    data.event.preventDefault()
                    alert('Submited')
                }
            })


            // INITIALIZATION OF BOOTSTRAP DROPDOWN
            // =======================================================
            HSBsDropdown.init()


            // INITIALIZATION OF GO TO
            // =======================================================
            new HSGoTo('.js-go-to')


            // INITIALIZATION OF AOS
            // =======================================================
            AOS.init({
                duration: 650,
                once: true
            });


            // INITIALIZATION OF SWIPER
            // =======================================================
            var swiper = new Swiper('.js-swiper-hero-clients', {
                slidesPerView: 2,
                breakpoints: {
                    380: {
                        slidesPerView: 3,
                        spaceBetween: 15,
                    },
                    768: {
                        slidesPerView: 4,
                        spaceBetween: 15,
                    },
                    1024: {
                        slidesPerView: 5,
                        spaceBetween: 15,
                    },
                },
            });
        })()
    </script>
</body>

</html>