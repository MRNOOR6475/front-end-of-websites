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
    <header data-jarallax data-speed=".8" style="background-image: url(assets/img/32.jpg);">
        <div class="pt-10 pb-8 pt-md-15 pb-md-13 bg-black-50">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-8 col-lg-6 text-center">

                        <!-- Heading -->
                        <h1 class="display-6 fw-bold text-white">
                            Reservation
                        </h1>

                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- RESERVATION -->
    <section class="pt-7 pt-md-9">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-8 col-lg-6 text-center">

                    <!-- Heading -->
                    <h2 class="mb-2">
                        Online table reservation
                    </h2>

                    <!-- Subheading -->
                    <p class="mb-6">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam illo praesentium sequi in cum, beatae maiores quae qui.
                    </p>

                </div>
            </div>
            <div class="row justify-content-lg-center">
                <div class="col-lg-8">

                    <!-- Form -->
                    <form id="reservationForm">
                        <div class="row gx-3">
                            <div class="col-md-6">

                                <!-- Contact number (hidden) -->
                                <input type="hidden" name="contact_number">

                                <!-- Full name -->
                                <div class="mb-3">
                                    <label class="visually-hidden" for="user_name">Full name</label>
                                    <input class="form-control" id="user_name" name="user_name" type="text" placeholder="Full name" required>
                                </div>

                                <!-- Phone number -->
                                <div class="mb-3">
                                    <label class="visually-hidden" for="user_phone">Phone number</label>
                                    <input class="form-control" id="user_phone" name="user_phone" type="tel" placeholder="Phone number" required>
                                </div>

                                <!-- Email address -->
                                <div class="mb-3">
                                    <label class="visually-hidden" for="user_email">Email address</label>
                                    <input class="form-control" id="user_email" name="user_email" type="email" placeholder="Email address" required>
                                </div>

                            </div>
                            <div class="col-md-6">

                                <!-- Guests -->
                                <div class="mb-3">
                                    <label class="visually-hidden" for="guests">Guests</label>
                                    <select class="form-select" id="guests" name="guests" required>
                      <option value="1">1 person</option>
                      <option value="2" selected="">2 persons</option>
                      <option value="3">3 persons</option>
                      <option value="4">4 persons</option>
                      <option value="5">5 persons</option>
                    </select>
                                </div>

                                <!-- Date -->
                                <div class="mb-3">
                                    <label class="visually-hidden" for="date">Date</label>
                                    <input class="form-control" id="date" name="date" type="date" value="2021-02-12" required>
                                </div>

                                <!-- Time -->
                                <div class="mb-3">
                                    <label class="visually-hidden" for="time">Time</label>
                                    <input class="form-control" id="time" name="time" type="time" value="18:00" required>
                                </div>

                            </div>
                            <div class="col text-center">

                                <!-- Button -->
                                <button class="btn btn-outline-primary" type="submit">
                    Reserve a table
                  </button>

                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </section>

    <!-- PHONE -->
    <section class="py-7 py-md-9">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <div class="block-decoration-1 py-3">

                        <!-- Text -->
                        <p class="mb-2 text-xs text-center">
                            or call us:
                        </p>

                        <!-- Phone -->
                        <a class="display-6 font-serif text-decoration-none text-black" href="tel:+19876543210">+1 987 654 3210</a>

                    </div>
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