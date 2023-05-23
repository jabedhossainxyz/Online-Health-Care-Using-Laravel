@include('user.layouts.style')

<!-- Back to top button -->
<div class="back-to-top"></div>

<header>
    <div class="topbar">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 text-sm">
                    <div class="site-info">
                        <a href="#"><span class="mai-call text-primary"></span> +00 123 4455 6666</a>
                        <span class="divider">|</span>
                        <a href="https://mail.google.com"><span class="mai-mail text-primary"></span> one-healthcare@gmail.com</a>
                    </div>
                </div>
                <div class="col-sm-4 text-right text-sm">
                    <div class="social-mini-button">
                        <a href="https://www.facebook.com"><span class="mai-logo-facebook-f"></span></a>
                        <a href="https://www.twitter.com"><span class="mai-logo-twitter"></span></a>
                        <a href="https://www.instagram.com"><span class="mai-logo-instagram"></span></a>
                    </div>
                </div>
            </div> <!-- .row -->
        </div> <!-- .container -->
    </div> <!-- .topbar -->
    @include('user.navbar')
</header>

<div class="page-banner overlay-dark bg-image" style="background-image: url(./assets/img/bg_image_1.jpg);">
    <div class="banner-section">
        <div class="container text-center wow fadeInUp">
            <nav aria-label="Breadcrumb">
                <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0 mb-2">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">About</li>
                </ol>
            </nav>
            <h1 class="font-weight-normal">About Us</h1>
        </div> <!-- .container -->
    </div> <!-- .banner-section -->
</div> <!-- .page-banner -->

<div class="page-section bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-4 py-3 wow zoomIn">
                <div class="card-service">
                    <div class="circle-shape bg-secondary text-white">
                        <span class="mai-chatbubbles-outline"></span>
                    </div>
                    <p><span>Chat</span> with a doctors</p>
                </div>
            </div>
            <div class="col-md-4 py-3 wow zoomIn">
                <div class="card-service">
                    <div class="circle-shape bg-primary text-white">
                        <span class="mai-shield-checkmark"></span>
                    </div>
                    <p><span>One</span>-Health Protection</p>
                </div>
            </div>
            <div class="col-md-4 py-3 wow zoomIn">
                <div class="card-service">
                    <div class="circle-shape bg-accent text-white">
                        <span class="mai-basket"></span>
                    </div>
                    <p><span>One</span>-Health Pharmacy</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="page-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 wow fadeInUp">
                <h1 class="text-center mb-3">Welcome to Your Health Center</h1>
                <div class="text-lg">
                    <p>


                        We exists to provide a better patient experience. We are a one-stop-shop for your health, offering caring doctors, world-class diagnostics and much more.

                        We believe that everyone should have access to convenient, affordable, and high-quality care. 

                        We are on a mission to change how healthcare is delivered in Bangladesh. We know how daunting getting access to the right care can be which is why we focus on turning a doctor visit into a delightful experience.

                        Our goal is to make the process intuitive for our patients and provide care where ever you are – in clinic or at-home.

                    </p>
                      </div>
            </div>
            <div class="col-lg-10 mt-5">
                @include('user.doctor')
            </div>
        </div>
    </div>
</div>

<div class="page-section banner-home bg-image" style="background-image: url(../assets/img/banner-pattern.svg);">
    <div class="container py-5 py-lg-0">
        <div class="row align-items-center">
            <div class="col-lg-4 wow zoomIn">
                <div class="img-banner d-none d-lg-block">
                    <img src="./assets/img/mobile_app.png" alt="">
                </div>
            </div>
            <div class="col-lg-8 wow fadeInRight">
                <h1 class="font-weight-normal mb-3">Get easy access of all features using One Health Application</h1>
                <a href="#"><img src="./assets/img/google_play.svg" alt=""></a>
                <a href="#" class="ml-2"><img src="./assets/img/app_store.svg" alt=""></a>
            </div>
        </div>
    </div>
</div> <!-- .banner-home -->

@include('user.layouts.script')
