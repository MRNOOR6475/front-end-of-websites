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

    <!-- ARTICLE -->
    <article class="pt-10 pt-md-12">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-8 col-lg-6 text-center">

                    <!-- Preheading -->
                    <h6 class="text-xs text-primary">
                        News & events
                    </h6>

                    <!-- Heading -->
                    <h1 class="display-2 mb-4">
                        Now delivering to your door
                    </h1>

                    <!-- Subheading -->
                    <p class="mb-6">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Non aperiam fugiat velit, quidem eius quas facilis, ut id optio explicabo asperiores?
                    </p>

                </div>
            </div>
            <div class="row">
                <div class="col-12">

                    <!-- Image -->
                    <figure class="mb-6 text-center">
                        <img class="img-fluid" src="{{asset('assets')}}/img/38.jpg" alt="...">
                    </figure>

                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-12 col-md-10 col-lg-8">

                    <!-- Text -->
                    <p>
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Perferendis reprehenderit magni mollitia voluptatibus in. Debitis, laudantium possimus veritatis dignissimos adipisci deserunt numquam dolorem ullam, alias rem laborum facilis ducimus quis!
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni qui ut, quibusdam, culpa exercitationem quae eveniet tempore aspernatur dolorem fuga laudantium possimus quasi natus cumque labore molestiae maxime doloribus voluptates?
                    </p>

                    <!-- Heading -->
                    <h2 class="fw-bold mt-6 mb-3">
                        Ordering online is easy
                    </h2>

                    <!-- Text -->
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae animi amet iste deserunt dolorem facilis exercitationem deleniti pariatur dolores magni, mollitia debitis non delectus provident a iusto fuga. Nisi, molestias!
                    </p>
                    <p>
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ducimus illum officiis, beatae quibusdam ex similique, nihil in facilis magni quisquam fuga. Quaerat quis provident qui quas voluptatem officiis!
                    </p>

                    <!-- Divider -->
                    <hr class="mt-6 mt-md-9 mb-0" />

                </div>
            </div>
        </div>
    </article>

    <!-- EVENTS -->
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
                        <div class="row align-items-center py-6">
                            <div class="col-3 col-md-2 col-lg-1">

                                <!-- Date -->
                                <time class="d-block text-center text-black" datetime="2017-09-29">
                    <span class="d-block mb-2 display-6 font-serif">29</span>
                    <span>Sep</span>
                  </time>

                            </div>
                            <div class="col-9 col-md-7 col-lg-8">

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

                            </div>
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
                        <div class="row align-items-center py-6">
                            <div class="col-3 col-md-2 col-lg-1">

                                <!-- Date -->
                                <time class="d-block text-center text-black" datetime="2017-09-28">
                    <span class="d-block mb-2 display-6 font-serif">28</span>
                    <span>Sep</span>
                  </time>

                            </div>
                            <div class="col-9 col-md-7 col-lg-8">

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

                            </div>
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

    <!-- NEWSLETTER -->
    <section class="py-7 py-md-9 bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-8 col-lg-6 text-center">

                    <!-- Heading -->
                    <h2 class="mb-2">
                        Newsletter
                    </h2>

                    <!-- Subheading -->
                    <p class="mb-6">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam illo praesentium sequi in cum, beatae maiores quae qui.
                    </p>

                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-6">

                    <!-- Begin Mailchimp Signup Form -->
                    <div id="mc_embed_signup">
                        <form action="https://gmail.us6.list-manage.com/subscribe/post?u=c7b7808bb5a16b9f09c4e1fe0&amp;id=96b8442f9a" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" target="_blank" novalidate>
                            <div class="row justify-content-center gx-3" id="mc_embed_signup_scroll">
                                <div class="col">
                                    <label class="visually-hidden" for="mce-EMAIL">Email Address </label>
                                    <input class="form-control" type="email" value="" name="EMAIL" id="mce-EMAIL">
                                </div>
                                <div class="visually-hidden" id="mce-responses">
                                    <div class="response" id="mce-error-response" style="display:none"></div>
                                    <div class="response" id="mce-success-response" style="display:none"></div>
                                </div>
                                <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                <div style="position: absolute; left: -5000px;" aria-hidden="true">
                                    <input type="text" name="b_c7b7808bb5a16b9f09c4e1fe0_96b8442f9a" tabindex="-1" value="">
                                </div>
                                <div class="col-auto">
                                    <input class="btn btn-outline-primary"  value="Subscribe" name="subscribe">
                                </div>
                            </div>
                        </form>
                    </div>
                    <!--End mc_embed_signup-->

                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    


    <!--  -->
    <!-- TOAST -->
    <div class="toast position-fixed bottom-0 start-50 translate-middle-x mb-3 mb-md-5" id="notification" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="d-flex">
            <div class="toast-body mx-auto"></div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            // Get the current page URL
            var currentUrl = window.location.href;
    
            // Loop through each navbar link and check if it matches the current URL
            $(".navbar-nav a").each(function() {
                if ($(this).attr("href") === currentUrl) {
                    $(this).addClass("active"); // Add the 'active' class to the matching link
                }
            });
        });
    </script>
    <!-- Add this in the head section of your HTML document -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

</body>

@endsection
