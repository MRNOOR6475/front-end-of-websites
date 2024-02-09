@extends('frontend.layout')
@section('content')
<link rel="stylesheet" href="{{asset('assets')}}/css/theme.bundle.css" />
<body>
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
                        <a class="nav-link active " href="/home">Home</a>
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

    <section class="bg-img">
        <div class="parent">
            <div class="content">
                <h1>Create Amazing Website</h1>
                <h2>For Html CSS Only</h2>
            </div>
            <div class="btn-group">
                <button class="btnn btnn-1">Save</button>
                <button class="btnn btnn-2">Subcriber</button>
            </div>
        </div>
    </section>


    <section class="pt-7 pt-md-9">
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
                        <img class="media-decoration-img img-fluid" src="assets/img/2.jpg" alt="...">

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

    <!-- DISCOVER -->
    <section class="py-7 py-md-9">
        <div class="container">
            <div class="row">
                <div class="col-md-2 order-md-2 align-self-end">

                    <!-- Divider -->
                    <hr class="hr-sm bg-primary">

                    <!-- Text -->
                    <p class="fs-lg lh-lg text-black mb-5 mb-md-0">
                        Great variety of foods you will enjoy.
                    </p>

                </div>
                <div class="col-md-4 order-md-3">

                    <!-- Media -->
                    <div class="media-decoration media-decoration-1 mb-5 mb-md-0">

                        <!-- Solid -->
                        <div class="media-decoration-solid" data-jarallax-element="-40"></div>

                        <!-- Border -->
                        <div class="media-decoration-border" data-jarallax-element="-40"></div>

                        <!-- Image -->
                        <img class="media-decoration-img img-fluid" src="assets/img/7.jpg" alt="...">

                    </div>

                </div>
                <div class="col-md-5 order-md-1 align-self-center mx-auto">

                    <!-- Heading -->
                    <h2 class="mb-2">
                        <em>Beautiful</em> outdoor seating
                    </h2>

                    <!-- Text -->
                    <p class="mb-0">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam quae similique asperiores consequatur! Nihil temporibus qui enim. Accusamus voluptates a, et quidem! Quo, et?
                    </p>

                </div>
            </div>
        </div>
    </section>


    <section class="py-7 py-md-9 border-bottom">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-8 col-lg-6 text-center">

                    <!-- Heading -->
                    <h2 class="mb-2">
                        Menu options
                    </h2>

                    <!-- Subheading -->
                    <p class="mb-6">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione numquam eos perferendis itaque hic unde, ad, laudantium minima.
                    </p>

                </div>
            </div>
            <div class="row">
                <div class="col">

                    <!-- Navigation -->
                    <div class="nav justify-content-center mb-6" id="menuTabs" role="tablist">
                        <a class="nav-link active" id="mainsTab" data-bs-toggle="tab" href="#mains" role="tab" aria-controls="mains" aria-selected="true">
                Mains
              </a>
                        <a class="nav-link" id="lunchTab" data-bs-toggle="tab" href="#lunch" role="tab" aria-controls="lunch">
                Lunch
              </a>
                        <a class="nav-link" id="dinnerTab" data-bs-toggle="tab" href="#dinner" role="tab" aria-controls="dinner">
                Dinner
              </a>
                        <a class="nav-link" id="drinksTab" data-bs-toggle="tab" href="#drinks" role="tab" aria-controls="drinks">
                Drinks
              </a>
                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col-12">

                    <!-- Content -->
                    <div class="tab-content" id="menuContent">
                        <div class="tab-pane fade show active" id="mains" role="tabpanel" aria-labelledby="mainsTab">
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <div class="py-3 border-bottom">
                                        <div class="row">
                                            <div class="col-3 align-self-center">

                                                <!-- Image -->
                                                <div class="ratio ratio-1x1">
                                                    <img class="object-fit-cover" src="assets/img/26.jpg" alt="...">
                                                </div>

                                            </div>
                                            <div class="col-7">

                                                <!-- Heading -->
                                                <h5 class="mb-2">Lorem ipsum dolor sit amet</h5>

                                                <!-- Text -->
                                                <p class="mb-0">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi, obcaecati! Sapiente laudantium.
                                                </p>

                                            </div>
                                            <div class="col-2">

                                                <!-- Price -->
                                                <div class="fs-4 font-serif text-center text-black">
                                                    $15
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="py-3 border-bottom">
                                        <div class="row">
                                            <div class="col-3 align-self-center">

                                                <!-- Image -->
                                                <div class="ratio ratio-1x1">
                                                    <img class="object-fit-cover" src="assets/img/27.jpg" alt="...">
                                                </div>

                                            </div>
                                            <div class="col-7">

                                                <!-- Heading -->
                                                <h5 class="mb-2">Fusce id ante ut arcu</h5>

                                                <!-- Text -->
                                                <p class="mb-0">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi, obcaecati! Sapiente laudantium.
                                                </p>

                                            </div>
                                            <div class="col-2">

                                                <!-- Price -->
                                                <div class="fs-4 font-serif text-center text-black">
                                                    $23
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="py-3 border-bottom">
                                        <div class="row">
                                            <div class="col-3 align-self-center">

                                                <!-- Image -->
                                                <div class="ratio ratio-1x1">
                                                    <img class="object-fit-cover" src="assets/img/28.jpg" alt="...">
                                                </div>

                                            </div>
                                            <div class="col-7">

                                                <!-- Heading -->
                                                <h5 class="mb-2">Fusce sed dolor eget tortor</h5>

                                                <!-- Text -->
                                                <p class="mb-0">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi, obcaecati! Sapiente laudantium.
                                                </p>

                                            </div>
                                            <div class="col-2">

                                                <!-- Price -->
                                                <div class="fs-4 font-serif text-center text-black">
                                                    $16
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="py-3 border-bottom">
                                        <div class="row">
                                            <div class="col-3 align-self-center">

                                                <!-- Image -->
                                                <div class="ratio ratio-1x1">
                                                    <img class="object-fit-cover" src="assets/img/29.jpg" alt="...">
                                                </div>

                                            </div>
                                            <div class="col-7">

                                                <!-- Heading -->
                                                <h5 class="mb-2">Lorem ipsum dolor sit amet</h5>

                                                <!-- Text -->
                                                <p class="mb-0">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi, obcaecati! Sapiente laudantium.
                                                </p>

                                            </div>
                                            <div class="col-2">

                                                <!-- Price -->
                                                <div class="fs-4 font-serif text-center text-black">
                                                    $15
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="py-3 border-bottom">
                                        <div class="row">
                                            <div class="col-3 align-self-center">

                                                <!-- Image -->
                                                <div class="ratio ratio-1x1">
                                                    <img class="object-fit-cover" src="assets/img/30.jpg" alt="...">
                                                </div>

                                            </div>
                                            <div class="col-7">

                                                <!-- Heading -->
                                                <h5 class="mb-2">Fusce id ante ut arcu</h5>

                                                <!-- Text -->
                                                <p class="mb-0">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi, obcaecati! Sapiente laudantium.
                                                </p>

                                            </div>
                                            <div class="col-2">

                                                <!-- Price -->
                                                <div class="fs-4 font-serif text-center text-black">
                                                    $23
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="py-3 border-bottom">
                                        <div class="row">
                                            <div class="col-3 align-self-center">

                                                <!-- Image -->
                                                <div class="ratio ratio-1x1">
                                                    <img class="object-fit-cover" src="assets/img/31.jpg" alt="...">
                                                </div>

                                            </div>
                                            <div class="col-7">

                                                <!-- Heading -->
                                                <h5 class="mb-2">Fusce sed dolor eget tortor</h5>

                                                <!-- Text -->
                                                <p class="mb-0">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi, obcaecati! Sapiente laudantium.
                                                </p>

                                            </div>
                                            <div class="col-2">

                                                <!-- Price -->
                                                <div class="fs-4 font-serif text-center text-black">
                                                    $16
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="lunch" role="tabpanel" aria-labelledby="lunchTab">
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <div class="py-3 border-bottom">
                                        <div class="row">
                                            <div class="col-3 align-self-center">

                                                <!-- Image -->
                                                <div class="ratio ratio-1x1">
                                                    <img class="object-fit-cover" src="assets/img/27.jpg" alt="...">
                                                </div>

                                            </div>
                                            <div class="col-7">

                                                <!-- Heading -->
                                                <h5 class="mb-2">Fusce id ante ut arcu</h5>

                                                <!-- Text -->
                                                <p class="mb-0">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi, obcaecati! Sapiente laudantium.
                                                </p>

                                            </div>
                                            <div class="col-2">

                                                <!-- Price -->
                                                <div class="fs-4 font-serif text-center text-black">
                                                    $23
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="py-3 border-bottom">
                                        <div class="row">
                                            <div class="col-3 align-self-center">

                                                <!-- Image -->
                                                <div class="ratio ratio-1x1">
                                                    <img class="object-fit-cover" src="assets/img/26.jpg" alt="...">
                                                </div>

                                            </div>
                                            <div class="col-7">

                                                <!-- Heading -->
                                                <h5 class="mb-2">Lorem ipsum dolor sit amet</h5>

                                                <!-- Text -->
                                                <p class="mb-0">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi, obcaecati! Sapiente laudantium.
                                                </p>

                                            </div>
                                            <div class="col-2">

                                                <!-- Price -->
                                                <div class="fs-4 font-serif text-center text-black">
                                                    $15
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="py-3 border-bottom">
                                        <div class="row">
                                            <div class="col-3 align-self-center">

                                                <!-- Image -->
                                                <div class="ratio ratio-1x1">
                                                    <img class="object-fit-cover" src="assets/img/29.jpg" alt="...">
                                                </div>

                                            </div>
                                            <div class="col-7">

                                                <!-- Heading -->
                                                <h5 class="mb-2">Lorem ipsum dolor sit amet</h5>

                                                <!-- Text -->
                                                <p class="mb-0">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi, obcaecati! Sapiente laudantium.
                                                </p>

                                            </div>
                                            <div class="col-2">

                                                <!-- Price -->
                                                <div class="fs-4 font-serif text-center text-black">
                                                    $15
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="py-3 border-bottom">
                                        <div class="row">
                                            <div class="col-3 align-self-center">

                                                <!-- Image -->
                                                <div class="ratio ratio-1x1">
                                                    <img class="object-fit-cover" src="assets/img/28.jpg" alt="...">
                                                </div>

                                            </div>
                                            <div class="col-7">

                                                <!-- Heading -->
                                                <h5 class="mb-2">Fusce sed dolor eget tortor</h5>

                                                <!-- Text -->
                                                <p class="mb-0">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi, obcaecati! Sapiente laudantium.
                                                </p>

                                            </div>
                                            <div class="col-2">

                                                <!-- Price -->
                                                <div class="fs-4 font-serif text-center text-black">
                                                    $16
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="py-3 border-bottom">
                                        <div class="row">
                                            <div class="col-3 align-self-center">

                                                <!-- Image -->
                                                <div class="ratio ratio-1x1">
                                                    <img class="object-fit-cover" src="assets/img/31.jpg" alt="...">
                                                </div>

                                            </div>
                                            <div class="col-7">

                                                <!-- Heading -->
                                                <h5 class="mb-2">Fusce sed dolor eget tortor</h5>

                                                <!-- Text -->
                                                <p class="mb-0">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi, obcaecati! Sapiente laudantium.
                                                </p>

                                            </div>
                                            <div class="col-2">

                                                <!-- Price -->
                                                <div class="fs-4 font-serif text-center text-black">
                                                    $16
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="py-3 border-bottom">
                                        <div class="row">
                                            <div class="col-3 align-self-center">

                                                <!-- Image -->
                                                <div class="ratio ratio-1x1">
                                                    <img class="object-fit-cover" src="assets/img/30.jpg" alt="...">
                                                </div>

                                            </div>
                                            <div class="col-7">

                                                <!-- Heading -->
                                                <h5 class="mb-2">Fusce id ante ut arcu</h5>

                                                <!-- Text -->
                                                <p class="mb-0">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi, obcaecati! Sapiente laudantium.
                                                </p>

                                            </div>
                                            <div class="col-2">

                                                <!-- Price -->
                                                <div class="fs-4 font-serif text-center text-black">
                                                    $23
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="dinner" role="tabpanel" aria-labelledby="dinnerTab">
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <div class="py-3 border-bottom">
                                        <div class="row">
                                            <div class="col-3 align-self-center">

                                                <!-- Image -->
                                                <div class="ratio ratio-1x1">
                                                    <img class="object-fit-cover" src="assets/img/28.jpg" alt="...">
                                                </div>

                                            </div>
                                            <div class="col-7">

                                                <!-- Heading -->
                                                <h5 class="mb-2">Fusce sed dolor eget tortor</h5>

                                                <!-- Text -->
                                                <p class="mb-0">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi, obcaecati! Sapiente laudantium.
                                                </p>

                                            </div>
                                            <div class="col-2">

                                                <!-- Price -->
                                                <div class="fs-4 font-serif text-center text-black">
                                                    $16
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="py-3 border-bottom">
                                        <div class="row">
                                            <div class="col-3 align-self-center">

                                                <!-- Image -->
                                                <div class="ratio ratio-1x1">
                                                    <img class="object-fit-cover" src="assets/img/26.jpg" alt="...">
                                                </div>

                                            </div>
                                            <div class="col-7">

                                                <!-- Heading -->
                                                <h5 class="mb-2">Lorem ipsum dolor sit amet</h5>

                                                <!-- Text -->
                                                <p class="mb-0">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi, obcaecati! Sapiente laudantium.
                                                </p>

                                            </div>
                                            <div class="col-2">

                                                <!-- Price -->
                                                <div class="fs-4 font-serif text-center text-black">
                                                    $15
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="py-3 border-bottom">
                                        <div class="row">
                                            <div class="col-3 align-self-center">

                                                <!-- Image -->
                                                <div class="ratio ratio-1x1">
                                                    <img class="object-fit-cover" src="assets/img/29.jpg" alt="...">
                                                </div>

                                            </div>
                                            <div class="col-7">

                                                <!-- Heading -->
                                                <h5 class="mb-2">Lorem ipsum dolor sit amet</h5>

                                                <!-- Text -->
                                                <p class="mb-0">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi, obcaecati! Sapiente laudantium.
                                                </p>

                                            </div>
                                            <div class="col-2">

                                                <!-- Price -->
                                                <div class="fs-4 font-serif text-center text-black">
                                                    $15
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="py-3 border-bottom">
                                        <div class="row">
                                            <div class="col-3 align-self-center">

                                                <!-- Image -->
                                                <div class="ratio ratio-1x1">
                                                    <img class="object-fit-cover" src="assets/img/27.jpg" alt="...">
                                                </div>

                                            </div>
                                            <div class="col-7">

                                                <!-- Heading -->
                                                <h5 class="mb-2">Fusce id ante ut arcu</h5>

                                                <!-- Text -->
                                                <p class="mb-0">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi, obcaecati! Sapiente laudantium.
                                                </p>

                                            </div>
                                            <div class="col-2">

                                                <!-- Price -->
                                                <div class="fs-4 font-serif text-center text-black">
                                                    $23
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="py-3 border-bottom">
                                        <div class="row">
                                            <div class="col-3 align-self-center">

                                                <!-- Image -->
                                                <div class="ratio ratio-1x1">
                                                    <img class="object-fit-cover" src="assets/img/30.jpg" alt="...">
                                                </div>

                                            </div>
                                            <div class="col-7">

                                                <!-- Heading -->
                                                <h5 class="mb-2">Fusce id ante ut arcu</h5>

                                                <!-- Text -->
                                                <p class="mb-0">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi, obcaecati! Sapiente laudantium.
                                                </p>

                                            </div>
                                            <div class="col-2">

                                                <!-- Price -->
                                                <div class="fs-4 font-serif text-center text-black">
                                                    $23
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="py-3 border-bottom">
                                        <div class="row">
                                            <div class="col-3 align-self-center">

                                                <!-- Image -->
                                                <div class="ratio ratio-1x1">
                                                    <img class="object-fit-cover" src="assets/img/31.jpg" alt="...">
                                                </div>

                                            </div>
                                            <div class="col-7">

                                                <!-- Heading -->
                                                <h5 class="mb-2">Fusce sed dolor eget tortor</h5>

                                                <!-- Text -->
                                                <p class="mb-0">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi, obcaecati! Sapiente laudantium.
                                                </p>

                                            </div>
                                            <div class="col-2">

                                                <!-- Price -->
                                                <div class="fs-4 font-serif text-center text-black">
                                                    $16
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="drinks" role="tabpanel" aria-labelledby="drinksTab">
                            <div class="row">

                                <div class="col-12 col-md-6">
                                    <div class="py-3 border-bottom">
                                        <div class="row">
                                            <div class="col-3 align-self-center">

                                                <!-- Image -->
                                                <div class="ratio ratio-1x1">
                                                    <img class="object-fit-cover" src="assets/img/26.jpg" alt="...">
                                                </div>

                                            </div>
                                            <div class="col-7">

                                                <!-- Heading -->
                                                <h5 class="mb-2">Lorem ipsum dolor sit amet</h5>

                                                <!-- Text -->
                                                <p class="mb-0">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi, obcaecati! Sapiente laudantium.
                                                </p>

                                            </div>
                                            <div class="col-2">

                                                <!-- Price -->
                                                <div class="fs-4 font-serif text-center text-black">
                                                    $15
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="py-3 border-bottom">
                                        <div class="row">
                                            <div class="col-3 align-self-center">

                                                <!-- Image -->
                                                <div class="ratio ratio-1x1">
                                                    <img class="object-fit-cover" src="assets/img/30.jpg" alt="...">
                                                </div>

                                            </div>
                                            <div class="col-7">

                                                <!-- Heading -->
                                                <h5 class="mb-2">Fusce id ante ut arcu</h5>

                                                <!-- Text -->
                                                <p class="mb-0">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi, obcaecati! Sapiente laudantium.
                                                </p>

                                            </div>
                                            <div class="col-2">

                                                <!-- Price -->
                                                <div class="fs-4 font-serif text-center text-black">
                                                    $23
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="py-3 border-bottom">
                                        <div class="row">
                                            <div class="col-3 align-self-center">

                                                <!-- Image -->
                                                <div class="ratio ratio-1x1">
                                                    <img class="object-fit-cover" src="assets/img/29.jpg" alt="...">
                                                </div>

                                            </div>
                                            <div class="col-7">

                                                <!-- Heading -->
                                                <h5 class="mb-2">Lorem ipsum dolor sit amet</h5>

                                                <!-- Text -->
                                                <p class="mb-0">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi, obcaecati! Sapiente laudantium.
                                                </p>

                                            </div>
                                            <div class="col-2">

                                                <!-- Price -->
                                                <div class="fs-4 font-serif text-center text-black">
                                                    $15
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="py-3 border-bottom">
                                        <div class="row">
                                            <div class="col-3 align-self-center">

                                                <!-- Image -->
                                                <div class="ratio ratio-1x1">
                                                    <img class="object-fit-cover" src="assets/img/27.jpg" alt="...">
                                                </div>

                                            </div>
                                            <div class="col-7">

                                                <!-- Heading -->
                                                <h5 class="mb-2">Fusce id ante ut arcu</h5>

                                                <!-- Text -->
                                                <p class="mb-0">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi, obcaecati! Sapiente laudantium.
                                                </p>

                                            </div>
                                            <div class="col-2">

                                                <!-- Price -->
                                                <div class="fs-4 font-serif text-center text-black">
                                                    $23
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="py-3 border-bottom">
                                        <div class="row">
                                            <div class="col-3 align-self-center">

                                                <!-- Image -->
                                                <div class="ratio ratio-1x1">
                                                    <img class="object-fit-cover" src="assets/img/28.jpg" alt="...">
                                                </div>

                                            </div>
                                            <div class="col-7">

                                                <!-- Heading -->
                                                <h5 class="mb-2">Fusce sed dolor eget tortor</h5>

                                                <!-- Text -->
                                                <p class="mb-0">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi, obcaecati! Sapiente laudantium.
                                                </p>

                                            </div>
                                            <div class="col-2">

                                                <!-- Price -->
                                                <div class="fs-4 font-serif text-center text-black">
                                                    $16
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="py-3 border-bottom">
                                        <div class="row">
                                            <div class="col-3 align-self-center">

                                                <!-- Image -->
                                                <div class="ratio ratio-1x1">
                                                    <img class="object-fit-cover" src="assets/img/31.jpg" alt="...">
                                                </div>

                                            </div>
                                            <div class="col-7">

                                                <!-- Heading -->
                                                <h5 class="mb-2">Fusce sed dolor eget tortor</h5>

                                                <!-- Text -->
                                                <p class="mb-0">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi, obcaecati! Sapiente laudantium.
                                                </p>

                                            </div>
                                            <div class="col-2">

                                                <!-- Price -->
                                                <div class="fs-4 font-serif text-center text-black">
                                                    $16
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
        </div>
    </section>

    



    <section class="pt-7 pt-md-9">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-8 col-lg-6 text-center">

                    <!-- Heading -->
                    <h2 class="mb-2">
                        Upcoming events
                    </h2>

                    <!-- Subheading -->
                    <p class="mb-6">
                        Commodi rem veritatis quis eaque mollitia.
                    </p>

                </div>
            </div>
        </div>
        <div id="events">
            <div class="event">
                <div class="event-sm collapse">
                    <div class="container">
                        <div class="row align-items-center py-6">
                            <div class="col-3 col-md-2 col-lg-1">

                                <!-- Date -->
                                <time class="d-block text-center text-black" datetime="2017-09-30">
                    <span class="d-block mb-2 display-6 font-serif">30</span>
                    <span>Sep</span>
                  </time>

                            </div>
                            <div class="col-9 col-md-7 col-lg-8">

                                <!-- Heading -->
                                <div class="h4 mb-4 mb-md-0" data-bs-toggle="collapse" data-bs-target="#eventOne" aria-controls="eventOne" role="button">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum voluptas, aut ea quae!
                                </div>

                            </div>
                            <div class="col-9 offset-3 col-md-3 offset-md-0 text-md-right">

                                <!-- Button -->
                                <a class="btn btn-outline-primary" href="/reservation">
                    Reserve a table
                  </a>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="event-lg collapse show bg-cover" id="eventOne" data-bs-parent="#events" style="background-image: url(assets/img/8.jpg);">
                    <div class="bg-black-50">
                        <div class="container">
                            <div class="row py-10">
                                <div class="col-md-8 col-lg-5">

                                    <!-- Date -->
                                    <h3 class="text-xs text-primary">
                                        <time datetime="2017-09-30">September 30, 2017</time>
                                    </h3>

                                    <!-- Heading -->
                                    <h2 class="mb-3 text-white">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum voluptas, aut ea quae!
                                    </h2>

                                    <!-- Description -->
                                    <p class="mb-6 text-white-75">
                                        Alias earum, labore doloremque iusto a modi et, dolorem veritatis iste quis ab. Facere est optio, voluptate molestias aspernatur impedit perferendis odit?
                                    </p>

                                    <!-- Button -->
                                    <a class="btn btn-outline-primary text-white text-primary-hover" href="/reservation">
                      Reserve a table
                    </a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="event">
                <div class="event-sm collapse show">
                    <div class="container border-top">
                        {{-- <div class="row align-items-center py-6">
                            <div class="col-3 col-md-2 col-lg-1">

                                <!-- Date -->
                                <time class="d-block text-center text-black" datetime="2017-09-29">
                    <span class="d-block mb-2 display-6 font-serif">29</span>
                    <span>Sep</span>
                  </time>

                            </div> --}}
                            {{-- <div class="col-9 col-md-7 col-lg-8">

                                <!-- Heading -->
                                <div class="h4 mb-4 mb-md-0" data-bs-toggle="collapse" data-bs-target="#eventTwo" aria-controls="eventTwo" role="button">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum voluptas, aut ea quae!
                                </div>

                            </div>
                            <div class="col-9 offset-3 col-md-3 offset-md-0 text-md-right">

                                <!-- Button -->
                                <a class="btn btn-outline-primary" href="/reservation">
                    Reserve a table
                  </a>

                            </div> --}}
                        </div>
                    </div>
                </div>
                <div class="event-lg collapse bg-cover" id="eventTwo" data-bs-parent="#events" style="background-image: url(assets/img/9.jpg);">
                    <div class="bg-black-50">
                        <div class="container">
                            <div class="row py-10">
                                <div class="col-md-8 col-lg-5">

                                    <!-- Date -->
                                    <h3 class="text-xs text-primary">
                                        <time datetime="2017-09-29">September 29, 2017</time>
                                    </h3>

                                    <!-- Heading -->
                                    <h2 class="mb-3 text-white">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum voluptas, aut ea quae!
                                    </h2>

                                    <!-- Description -->
                                    <p class="mb-6 text-white-75">
                                        Alias earum, labore doloremque iusto a modi et, dolorem veritatis iste quis ab. Facere est optio, voluptate molestias aspernatur impedit perferendis odit?
                                    </p>

                                    <!-- Button -->
                                    <a class="btn btn-outline-primary text-white text-primary-hover" href="/reservation">
                      Reserve a table
                    </a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="event">
                <div class="event-sm collapse show">
                    <div class="container border-top">
                        {{-- <div class="row align-items-center py-6">
                            <div class="col-3 col-md-2 col-lg-1">

                                <!-- Date -->
                                <time class="d-block text-center text-black" datetime="2017-09-28">
                    <span class="d-block mb-2 display-6 font-serif">28</span>
                    <span>Sep</span>
                  </time>

                            </div> --}}
                            {{-- <div class="col-9 col-md-7 col-lg-8">

                                <!-- Heading -->
                                <div class="h4 mb-4 mb-md-0" data-bs-toggle="collapse" data-bs-target="#eventThree" aria-controls="eventThree" role="button">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum voluptas, aut ea quae!
                                </div>

                            </div>
                            <div class="col-9 offset-3 col-md-3 offset-md-0 text-md-right">

                                <!-- Button -->
                                <a class="btn btn-outline-primary" href="/reservation">
                    Reserve a table
                  </a>

                            </div> --}}
                        </div>
                    </div>
                </div>
                <div class="event-lg collapse bg-cover" id="eventThree" data-bs-parent="#events" style="background-image: url(assets/img/10.jpg);">
                    <div class="bg-black-50">
                        <div class="container">
                            <div class="row py-10">
                                <div class="col-md-8 col-lg-5">

                                    <!-- Date -->
                                    <h3 class="text-xs text-primary">
                                        <time datetime="2017-09-28">September 28, 2017</time>
                                    </h3>

                                    <!-- Heading -->
                                    <h2 class="mb-3 text-white">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum voluptas, aut ea quae!
                                    </h2>

                                    <!-- Description -->
                                    <p class="mb-6 text-white-75">
                                        Alias earum, labore doloremque iusto a modi et, dolorem veritatis iste quis ab. Facere est optio, voluptate molestias aspernatur impedit perferendis odit?
                                    </p>

                                    <!-- Button -->
                                    <a class="btn btn-outline-primary text-white text-primary-hover" href="/reservation">
                      Reserve a table
                    </a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-7 py-md-9 bg-light" id="reservation">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-8 col-lg-6 text-center">

                    <!-- Heading -->
                    <h2 class="mb-2">
                        Make online reservation
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
</body>


@endsection