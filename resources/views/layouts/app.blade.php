<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Foxhole QA</title>
    <meta name="description"
        content="Foxhole QA is a full service software testing shop built to be flexible and efficient when scaling your QA needs.">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    {{-- OG --}}
    <meta property="og:locale" content="en_US">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Foxhole QA">
    <meta property="og:description"
        content="Foxhole QA is a full service software testing shop built to be flexible and efficient when scaling your QA needs.">
    <meta property="og:url" content="#">
    <meta property="og:site_name" content="FoxholeQA Company">
    <meta property="og:image" content="https://www.foxholeqa.com/img/foxholeqa-metadata.png">
    <meta property="og:image:secure_url" content="https://www.foxholeqa.com/img/foxholeqa-metadata.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">

    {{-- Twitter --}}
    <meta property="twitter:url" content="#">
    <meta property="twitter:card" content="summary">
    <meta property="twitter:description"
        content="Foxhole QA is a full service software testing shop built to be flexible and efficient when scaling your QA needs." />
    <meta property="twitter:title" content="Foxhole QA">
    <meta property="twitter:image" content="https://www.foxholeqa.com/img/foxholeqa_logo_twitter.png" />

    <!-- Favicons -->
    <link rel="icon" href="{{ asset('img/icons/foxhole-icon.png') }}" type="image/png">

    @vite(['resources/js/app.js'])

<!-- Add the slick-theme.css if you want default styling -->
{{-- <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/> --}}
<!-- Add the slick-theme.css if you want default styling -->
{{-- <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/> --}}
</head>
<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="50" style="position: relative;">
    {{--
    $$\   $$\                     $$\
    $$$\  $$ |                    $$ |
    $$$$\ $$ | $$$$$$\ $$\    $$\ $$$$$$$\   $$$$$$\   $$$$$$\
    $$ $$\$$ | \____$$\\$$\  $$  |$$  __$$\  \____$$\ $$  __$$\
    $$ \$$$$ | $$$$$$$ |\$$\$$  / $$ |  $$ | $$$$$$$ |$$ |  \__|
    $$ |\$$$ |$$  __$$ | \$$$  /  $$ |  $$ |$$  __$$ |$$ |
    $$ | \$$ |\$$$$$$$ |  \$  /   $$$$$$$  |\$$$$$$$ |$$ |
    \__|  \__| \_______|   \_/    \_______/  \_______|\__|
    --}}
    <nav class="navbar navbar-expand-md navbar-dark bg-1 fixed-top">
        <div class="navbar-container container-fluid">
            @php
                $url = explode('/', url()->current());
            @endphp
            <a href="{{ (count($url) > 3)? url('/') : '#' }}" class="navbar-brand toTop">
                <img src="{{ asset('img/icons/foxholeqa-new.png') }}" alt="" height="60px">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar">
                <i class="fa-solid fa-bars fa-1x"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbar">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item active-menu">
                        <a href="#hero" class="nav-link hero text-white toTop">Foxhole QA</a>
                    </li>
                    <li class="nav-item">
                        <a href="#services" class="nav-link services text-white">Services</a>
                    </li>
                    <li class="nav-item">
                        <a href="#featuredWork" class="nav-link featuredWork text-white">Featured Work</a>
                    </li>
                    <li class="nav-item">
                        <a href="#aboutUs" class="nav-link aboutUs text-white">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link text-white">Blog</a>
                    </li>
                    <li class="nav-item d-flex">
                        <a href="#getQuoteBox" class="nav-link text-white btn btn-2 my-auto">Get Started</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>


    {{--
     $$$$$$\                       $$\                          $$\
    $$  __$$\                      $$ |                         $$ |
    $$ /  \__| $$$$$$\  $$$$$$$\ $$$$$$\    $$$$$$\  $$$$$$$\ $$$$$$\
    $$ |      $$  __$$\ $$  __$$\\_$$  _|  $$  __$$\ $$  __$$\\_$$  _|
    $$ |      $$ /  $$ |$$ |  $$ | $$ |    $$$$$$$$ |$$ |  $$ | $$ |
    $$ |  $$\ $$ |  $$ |$$ |  $$ | $$ |$$\ $$   ____|$$ |  $$ | $$ |$$\
    \$$$$$$  |\$$$$$$  |$$ |  $$ | \$$$$  |\$$$$$$$\ $$ |  $$ | \$$$$  |
    \______/  \______/ \__|  \__|  \____/  \_______|\__|  \__|  \____/
    --}}
    @yield('content')


    {{--
    $$$$$$$$\                   $$\
    $$  _____|                  $$ |
    $$ |    $$$$$$\   $$$$$$\ $$$$$$\    $$$$$$\   $$$$$$\
    $$$$$\ $$  __$$\ $$  __$$\\_$$  _|  $$  __$$\ $$  __$$\
    $$  __|$$ /  $$ |$$ /  $$ | $$ |    $$$$$$$$ |$$ |  \__|
    $$ |   $$ |  $$ |$$ |  $$ | $$ |$$\ $$   ____|$$ |
    $$ |   \$$$$$$  |\$$$$$$  | \$$$$  |\$$$$$$$\ $$ |
    \__|    \______/  \______/   \____/  \_______|\__|
    --}}
    <div class="container-fluid bg-1 px-4 mt-5">
        <div class="row">
            <div class="col-md-6">
                <form action="{{ url('GetAQuote') }}" method="post" id="footer">
                    @csrf
                    <div id="getQuoteBox" class="d-flex flex-column border bg-white thick-shadow">
                        <h1 class="text-center text-3 fw-bold">Get Started</h1>
                        <p class="text-center">Ask for a Quote!<br>We'll get back to you within 24 hours.</p>

                        @if($errors->any())
                            <div class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <p class="text-black">{{ $error }}</p>
                                @endforeach
                            </div>
                        @endif
                        <div class="d-flex flex-column text-white">
                            <input type="text" name="name" id="name" class="form-control" placeholder="Full Name">

                            <input type="email" name="email" id="email" class="form-control" placeholder="Email Address">

                            <input type="text" name="project" id="project" class="form-control" placeholder="Project Name">

                            <textarea name="description" id="description" cols="30" rows="3" class="form-control" placeholder="Description"></textarea>

                            <input type="submit" value="Get a Quote" class="btn btn-1 mx-auto my-3 shadow">
                        </div>
                        <div class="text-center">
                            <p class="text-3 mb-0">or just email us</p>
                            <a href="" class="text-3">info@foxholeqa.com</a>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-6 d-flex text-white">
                <div class="mx-auto my-auto">
                    <p class="mb-5 text-center">Businesses that trusts Foxhole QA</p>
                    <div id="footer-brands" class="d-flex flex-wrap justify-content-center">
                        <img src="{{ asset('img/logo/Partner Logo 1.png') }}" alt="" height="50px">
                        <img src="{{ asset('img/logo/Partner Logo 2.png') }}" alt="" height="50px">
                        <img src="{{ asset('img/logo/Partner Logo 3.png') }}" alt="" height="50px">
                        <img src="{{ asset('img/logo/Brand Logo 1.png') }}" alt="" height="50px">
                        <img src="{{ asset('img/logo/Brand Logo 2.png') }}" alt="" height="50px">
                    </div>

                    <div class="text-center">
                        <button id="subscribeBtn" class="btn btn-2" data-bs-toggle="modal" data-bs-target="#subscription">Get the Latest News</button>
                    </div>

                </div>
            </div>
        </div>


        <div class="row justify-content-center mt-3 text-center text-white">
            <div class="col-lg-4 p-2 d-flex justify-content-center text-dark" style="gap: 5px;">
                <div class="social-icon">
                    <i class="fa-brands fa-linkedin-in"></i>
                </div>
                <div class="social-icon">
                    <i class="fa-brands fa-instagram"></i>
                </div>
                <div class="social-icon">
                    <i class="fa-brands fa-facebook-f"></i>
                </div>
                <div class="social-icon">
                    <i class="fa-brands fa-twitter"></i>
                </div>
            </div>
            <div class="col-lg-4 p-2">
                <p class="mb-0">© {{ Date('Y') }} Foxhole QA LLC. All Rights Reserved.</p>
            </div>
            <div class="col-lg-4 p-2">
                <p class="mb-0">LOS ANGELES, CA  |  AUSTIN, TX  |  MIAMI, FL  </p>
            </div>
        </div>
    </div>

@include('modals.subcription')
@include('modals.subcriptionConfirm')

</body>
</html>
