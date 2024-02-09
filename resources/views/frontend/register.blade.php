<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Coding..Lab`</title>
        <link rel="stylesheet" href="{{ asset('frontend/home.css') }}">
        {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> --}}
    
    
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets') }}/favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets') }}/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets') }}/favicon/favicon-16x16.png">
        <link rel="manifest" href="{{ asset('assets') }}/favicon/manifest.json">
        <link rel="mask-icon" href="{{ asset('assets') }}/favicon/safari-pinned-tab.svg" color="#5bbad5">
        <link rel="shortcut icon" href="{{ asset('assets') }}/favicon/favicon.ico">
        <meta name="msapplication-config" content="./assets/favicon/browserconfig.xml">
        <meta name="theme-color" content="#ffffff">
    
        
        <link rel="stylesheet" href="{{ asset('assets') }}/css/libs.bundle.css" />
    
        <!-- Theme CSS -->
        <link rel="stylesheet" href="{{asset('assets')}}/css/theme.bundle.css" />
    
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link
            href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,400;0,700;0,900;1,400;1,700;1,900&family=Playfair+Display:ital,wght@0,400;0,700;1,400;1,700&display=swap"
            rel="stylesheet">
    
        <style>
            body {
                display: flex;
                align-items: center;
                justify-content: center;
                height: 100vh;
                margin: 0;
            }
    
            .container {
                text-align: center;
            }
        </style>
    
    
    
    </head>

<body>
    <nav class="navbar navbar-dark navbar-expand-lg navbar-togglable fixed-top">
        <div class="container">

            <!-- Navbar brand (mobile) -->
            <a class="navbar-brand d-lg-none" href="#">Coding..Lab`</a>

            <!-- Navbar toggler -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navbar collapse -->
            <div class="collapse navbar-collapse" id="navbarCollapse">

                <!-- Navbar nav -->
                <ul class="navbar-nav">

                    <li class="nav-item">
                        <a class="nav-link  " href="/home">Home</a>
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
                        <a class="nav-link active" href="/register">Register</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>
    <div class="container">
        <div class="heading">
            <h1>Continued less on the page</h1>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
