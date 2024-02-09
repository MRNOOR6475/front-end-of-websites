
@extends('frontend.layout')
@section('content')
<link rel="stylesheet" href="{{asset('assets')}}/css/theme.bundle.css" />

<body>

    <!-- NAVBAR -->
    <nav class="navbar navbar-dark navbar-expand-lg navbar-togglable fixed-top">
        <div class="container">
    
            <!-- Navbar brand (mobile) -->
            <a class="navbar-brand d-lg-none" href="#">Coding..Lab`</a>
    
            <!-- Navbar toggler -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    
            <!-- Navbar collapse -->
            <div class="collapse navbar-collapse" id="navbarCollapse">
    
                <!-- Navbar nav -->
                <ul class="navbar-nav">
                   
                    <li class="nav-item">
                        <a class="nav-link " href="/home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="/service">Service</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="/login">Login</a>
                    </li>
                </ul>
    
                <!-- Navbar brand -->
                <a class="navbar-brand d-none d-lg-flex mx-lg-auto" href="#">
            Coding..Lab`
          </a>
    
                <!-- Navbar nav -->
                <ul class="navbar-nav">
                   
                    <li class="nav-item">
                        <a class="nav-link " href="/about-us">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/contact-us">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="/register">Register</a>
                    </li>
                </ul>
    
            </div>
        </div>
    </nav>

    <!-- HEADER -->
    <header data-jarallax data-speed=".8" style="background-image: url(assets/img/37.jpg);">
        <div class="pt-10 pb-8 pt-md-15 pb-md-13 bg-black-50">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-8 col-lg-6 text-center">

                        <!-- Heading -->
                        <h1 class="display-6 fw-bold text-white">
                            Contact Us
                        </h1>

                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- CONTACT -->
    <section class="py-7 py-md-9">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-8 col-lg-6 text-center">

                    <!-- Heading -->
                    <h2 class="mb-2">
                        Get in touch with us
                    </h2>

                    <!-- Subheading -->
                    <p class="mb-6">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam illo praesentium sequi in cum, beatae maiores quae qui.
                    </p>

                </div>
            </div>
            <div class="row">
                <div class="col-md-3 order-md-2">

                    <!-- Heading -->
                    <h4 class="mb-2 text-xs">
                        Write us
                    </h4>

                    <!-- Text -->
                    <p class="mb-4 font-serif">
                        <a href="mailto:hra9795353@gmail.com">hra9795353@gmail.com</a>
                    </p>

                    <!-- Heading -->
                    <h4 class="mb-2 text-xs">
                        Call us
                    </h4>

                    <!-- Text -->
                    <p class="mb-4 font-serif">
                        <a href="tel:923097468305">+92 3097 4683 05</a>
                    </p>

                    <!-- Heading -->
                    <h4 class="mb-2 text-xs">
                        Visit us
                    </h4>

                    <!-- Text -->
                    <p class="mb-4 font-serif">
                        House No: 76, Rahim Yar Khan, ``.?ЯOOИ.... 
                    </p>

                    <!-- Heading -->
                    <h4 class="mb-2 text-xs">
                        Social links

                    </h4>

                    <!-- List -->
                    <div class="d-flex mb-6 mb-md-0 font-serif">
                        <a class="d-block me-3" href="#">
                <i class="fab fa-twitter"></i>
              </a>
                        <a class="d-block me-3" href="#">
                <i class="fab fa-facebook-f"></i>
              </a>
                        <a class="d-block" href="#">
                <i class="fab fa-instagram"></i>
              </a>
                    </div>

                </div>
                <div class="col-md-9 order-md-1">

                    <!-- Form -->
                    <form class="block-decoration-2" id="contactForm">

                        <!-- Contact number (hidden) -->
                        <input type="hidden" name="contact_number">

                        <!-- Name -->
                        <div class="mb-3">
                            <label class="visually-hidden" for="user_name">Full name</label>
                            <input class="form-control" id="user_name" name="user_name" type="text" placeholder="Full name" required />
                        </div>

                        <!-- Email -->
                        <div class="mb-3">
                            <label class="visually-hidden" for="user_email">E-mail address</label>
                            <input class="form-control" id="user_email" name="user_email" type="email" placeholder="E-mail address" required />
                        </div>

                        <!-- Message -->
                        <div class="mb-3">
                            <label class="visually-hidden" for="message">Message</label>
                            <textarea class="form-control" id="message" name="message" rows="9" placeholder="Message" required></textarea>
                        </div>

                        <!-- Button -->
                        <button class="btn btn-outline-primary" type="submit">
                Send message
              </button>

                    </form>

                </div>
            </div>
        </div>
    </section>

    <!-- MAP -->
    <section class="bg-light" data-map='{"center": [-118.244615, 34.052979], "zoom": 12}' style="height: 30rem;">
    </section>

   


    <!--  -->
    <!-- TOAST -->
    <div class="toast position-fixed bottom-0 start-50 translate-middle-x mb-3 mb-md-5" id="notification" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="d-flex">
            <div class="toast-body mx-auto"></div>
        </div>
    </div>

   
   

</body>

@endsection