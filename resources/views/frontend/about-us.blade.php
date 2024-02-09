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
                        <a class="nav-link active" href="/about-us">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="/contact-us">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="/register">Register</a>
                    </li>
                </ul>
    
            </div>
        </div>
    </nav>

    <!-- HEADER -->
    <header data-jarallax data-speed=".8" style="background-image: url(assets/img/36.jpg);">
        <div class="pt-10 pb-8 pt-md-15 pb-md-13 bg-black-50">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-8 col-lg-6 text-center">

                        <!-- Heading -->
                        <h1 class="display-6 fw-bold text-white">
                            About Us
                        </h1>

                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- DISCOVER -->
    <section class="py-7 py-md-9">
        <div class="container">
            <div class="row">
                <div class="col-md-2">

                    <!-- Divider -->
                    <hr class="hr-sm bg-primary">

                    <!-- Text -->
                    <p class="fs-lg lh-lg text-black mb-5 mb-md-0">
                        Take a coffee break or enjoy a meal.
                    </p>

                </div>
                <div class="col-md-4">

                    <!-- Media -->
                    <div class="media-decoration media-decoration-1 mb-5 mb-md-0">

                        <!-- Border -->
                        <div class="media-decoration-border" data-jarallax-element="-40"></div>

                        <!-- Image -->
                        <img class="media-decoration-img img-fluid" src="{{asset('assets')}}/img/2.jpg" alt="...">

                    </div>

                </div>
                <div class="col-md-5 align-self-center mx-auto">

                    <!-- Heading -->
                    <h2 class="mb-2">
                        <em>Always</em> amazing experience
                    </h2>

                    <!-- Text -->
                    <p class="mb-0">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias veritatis nisi, consequatur, laborum libero a neque ducimus. Porro rem illum quo nostrum quisquam asperiores. Possimus facilis velit, voluptatibus!
                    </p>

                </div>
            </div>
        </div>
    </section>

    <!-- QUOTE -->
    <section class="py-7 py-md-9 bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-8 text-center">

                    <!-- Icon -->
                    <span class="display-1 font-serif text-primary">”</span>

                    <!-- Blockquote -->
                    <figure class="mb-0">
                        <blockquote class="blockquote mb-0">
                            <p class="font-serif text-black mb-6">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos at veritatis vitae modi ex quis quibusdam error repudiandae adipisci dolore perspiciatis iste, vel fuga a, libero architecto ratione deleniti sequi.
                            </p>
                        </blockquote>
                        <figcaption class="blockquote-footer text-xs mb-0">
                            Liam Smith
                        </figcaption>
                    </figure>

                </div>
            </div>
        </div>
    </section>

    <!-- INFO -->
    <section class="py-7 py-md-9">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-8 col-lg-6 text-center">

                    <!-- Heading -->
                    <h2 class="mb-2">
                        Behind the scenes
                    </h2>

                    <!-- Subheading -->
                    <p class="mb-6">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia obcaecati sit odio velit culpa aspernatur consectetur natus quidem minima veritatis.
                    </p>

                </div>
            </div>
            <div class="row align-items-center justify-content-between">
                <div class="col-md-6 order-md-2">

                    <!-- Image -->
                    <img class="img-fluid mw-md-120 clip-top-start" src="{{asset('assets')}}/img/24.jpg" alt="...">

                </div>
                <div class="col-md-5 order-md-1">

                    <!-- Text -->
                    <p class="lead text-black">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident sequi ratione, accusamus quo mollitia architecto, explicabo obcaecati.
                    </p>

                    <!-- Text -->
                    <p class="mb-6">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum enim saepe aperiam eius, quam blanditiis necessitatibus dolorem dignissimos pariatur quas velit nihil tempora, libero unde molestiae! Illum, inventore. Iusto, autem!
                    </p>

                    <!-- Text -->
                    <p class="mb-md-0">
                        <a class="btn btn-outline-primary" href="contact-us.html">
                Contact Us
              </a>
                    </p>

                </div>
            </div>
        </div>
    </section>

    <!-- MAP -->
    <section class="bg-light" data-map='{"center": [-118.244615, 34.052979], "zoom": 12}' style="height: 30rem;">
    </section>

    {{-- <!-- FOOTER -->
    <footer class="py-7 py-md-9 bg-black">
        <div class="container px-4">
            <div class="row gx-7">
                <div class="col-sm-4">

                    <!-- Heading -->
                    <h5 class="text-xs text-primary">
                        About Us
                    </h5>

                    <!-- Text -->
                    <p class="mb-6">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti dolorum, sint corporis nostrum, possimus unde eos vitae eius quasi saepe.
                    </p>

                </div>
                <div class="col-sm-4">

                    <!-- Heading -->
                    <h5 class="text-xs text-primary">
                        Contact info
                    </h5>

                    <!-- List -->
                    <ul class="list-unstyled mb-6">
                        <li class="d-flex mb-2">
                            <div class="fas fa-map-marker-alt me-3 mt-2 fs-sm"></div>
                            1234 Altschul, Los Angeles, CA 10027-0000
                        </li>
                        <li class="d-flex mb-2">
                            <div class="fas fa-phone me-3 mt-2 fs-sm"></div>
                            +1 987 654 3210
                        </li>
                        <li class="d-flex">
                            <div class="far fa-envelope me-3 mt-2 fs-sm"></div> <a href="mailto:admin@domain.com">admin@domain.com</a>
                        </li>
                    </ul>

                </div>
                <div class="col-sm-4">

                    <!-- Heading -->
                    <h5 class="text-xs text-primary">
                        Opening hours
                    </h5>

                    <!-- Text -->
                    <div class="mb-3">
                        <div class="text-xs">Monday - Thursday</div>
                        <div class="font-serif">10:00 AM - 11:00 PM</div>
                    </div>

                    <!-- Text -->
                    <div class="mb-6">
                        <div class="text-xs">Friday - Sunday</div>
                        <div class="font-serif">12:00 AM - 03:00 AM</div>
                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col-12">

                    <!-- Copyright -->
                    <div class="d-flex align-items-center">
                        <hr class="hr-sm me-3" style="height: 1px;" /> &copy; 2021 Touché. All rights reserved.
                    </div>

                </div>
            </div>
        </div>
    </footer> --}}


    <!--  -->
    <!-- TOAST -->
    <div class="toast position-fixed bottom-0 start-50 translate-middle-x mb-3 mb-md-5" id="notification" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="d-flex">
            <div class="toast-body mx-auto"></div>
        </div>
    </div>

    <!-- JAVASCRIPT -->
    <!-- Vendor JS -->
   

</body>

@endsection