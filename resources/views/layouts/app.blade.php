<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    @vite(['resources/js/app.js'])
</head>
<body>
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
    <nav class="navbar navbar-expand navbar-dark bg-1 fixed-top">
        <div class="container">
            <a href="" class="navbar-brand">
                <img src="{{ asset('img/icons/foxholeqa-new.png') }}" alt="" height="60px">
            </a>

            <ul class="navbar-nav ms-auto">
                <li class="nav-item active-menu">
                    <a href="" class="nav-link text-white">Foxhole QA</a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link text-white">Services</a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link text-white">Featured Work</a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link text-white">About Us</a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link text-white">Blog</a>
                </li>
                <li class="nav-item d-flex">
                    <a href="" class="nav-link text-white btn btn-danger btn-2 my-auto">Get Started</a>
                </li>
            </ul>
        </div>
    </nav>

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
    <div class="container-fluid bg-1 px-5 py-2">
        {{-- <div class="row">
            <div class="col-6">
                <form action="{{ url('') }}" method="post">
                    @csrf
                    <div id="getQuoteBox" class="d-flex flex-column border mt-3 mx-5 bg-white p-5 thick-shadow" style="width: 30rem;">
                        <h1 class="text-center text-3 fw-bold">Get Started</h1>
                        <p class="text-center">Ask for a Quote!<br>We'll get back to you within 24 hours.</p>

                        <div class="d-flex flex-column text-white">
                            <input type="text" name="" id="" class="form-control" placeholder="Full Name">

                            <input type="email" name="" id="" class="form-control" placeholder="Email Address">

                            <input type="text" name="" id="" class="form-control" placeholder="Project Name">

                            <textarea name="" id="" cols="30" rows="3" class="form-control" placeholder="Description"></textarea>

                            <input type="submit" value="Get a Quote" class="btn btn-danger btn-1 mx-auto my-3 shadow" style="width: 10rem;">
                        </div>
                        <div class="text-center">
                            <p class="text-3 mb-0">or just email us</p>
                            <a href="" class="text-3">info@foxholeqa.com</a>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-6 d-flex text-white">
                <div class="mx-auto my-auto">
                    <h4 class="mb-5 text-center">Businesses that trusts Foxhole QA</h4>
                    <div class="d-flex flex-wrap justify-content-center" style="gap: 30px">
                        <img src="{{ asset('img/logo/Partner Logo 1.png') }}" alt="" height="80px">
                        <img src="{{ asset('img/logo/Partner Logo 2.png') }}" alt="" height="80px">
                        <img src="{{ asset('img/logo/Partner Logo 3.png') }}" alt="" height="80px">
                        <img src="{{ asset('img/logo/Brand Logo 1.png') }}" alt="" height="80px">
                        <img src="{{ asset('img/logo/Brand Logo 2.png') }}" alt="" height="80px">
                    </div>
                    <div class="text-center">
                        <button class="btn btn-danger btn-2 mt-2" style="width: 20rem;" data-bs-toggle="modal" data-bs-target="#subscription">Get the Latest News</button>
                    </div>
                </div>
            </div>
        </div> --}}

        <div class="row justify-content-between my-3 mx-auto text-white" style="width: 70rem;">
            <div class="col-4 d-flex text-dark" style="gap: 5px;">
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
            <div class="col-4 text-center p-2">
                <p class="mb-0">© {{ Date('Y') }} Foxhole QA LLC. All Rights Reserved.</p>
            </div>
            <div class="col-4 text-center p-2">
                <p class="mb-0">LOS ANGELES, CA  |  AUSTIN, TX  |  MIAMI, FL  </p>
            </div>
        </div>
    </div>
</body>
</html>
