@extends('layouts.app')

@section('content')
    {{--
    $$\   $$\
    $$ |  $$ |
    $$ |  $$ | $$$$$$\   $$$$$$\   $$$$$$\
    $$$$$$$$ |$$  __$$\ $$  __$$\ $$  __$$\
    $$  __$$ |$$$$$$$$ |$$ |  \__|$$ /  $$ |
    $$ |  $$ |$$   ____|$$ |      $$ |  $$ |
    $$ |  $$ |\$$$$$$$\ $$ |      \$$$$$$  |
    \__|  \__| \_______|\__|       \______/
    --}}
    <div id="hero" class="section d-flex">
        <div class="my-auto text-white">
            <h1 class="display-4 fw-bolder">Foxhole QA</h1>
            <h1 class="h1">We are in the <br>Trenches with you.</h1>
            <p>We have your back when you need that perfect launch. With our group of seasoned technologists and testers, we do the job right the first time. Saving you time and money.</p>
            <a href="#footer" class="btn btn-1 my-auto">Get Started</a>
        </div>
    </div>

    {{--
     $$$$$$\                                $$\
    $$  __$$\                               \__|
    $$ /  \__| $$$$$$\   $$$$$$\ $$\    $$\ $$\  $$$$$$$\  $$$$$$\   $$$$$$$\
    \$$$$$$\  $$  __$$\ $$  __$$\\$$\  $$  |$$ |$$  _____|$$  __$$\ $$  _____|
     \____$$\ $$$$$$$$ |$$ |  \__|\$$\$$  / $$ |$$ /      $$$$$$$$ |\$$$$$$\
    $$\   $$ |$$   ____|$$ |       \$$$  /  $$ |$$ |      $$   ____| \____$$\
    \$$$$$$  |\$$$$$$$\ $$ |        \$  /   $$ |\$$$$$$$\ \$$$$$$$\ $$$$$$$  |
     \______/  \_______|\__|         \_/    \__| \_______| \_______|\_______/
    --}}
    <div id="services" class="section">
        <div class="container">
            <h1 class="section-title">Our Services</h1>

            <div class="row justify-content-around mx-auto">
                <div class="service col-3 text-center px-2 py-4">
                    <img src="{{ asset('img/icons/automation.svg') }}" alt="" height="60px">
                    <h5 class="text-center mb-0 mt-2">Automation</h5>
                    <p class="text-center mb-0 mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut, quod.</p>
                </div>
                <div class="service col-3 shadow text-center px-2 py-4">
                    <img src="{{ asset('img/icons/backend.svg') }}" alt="" height="60px">
                    {{-- <i class="fa fa-code fa-4x p-2 text-1"></i> --}}
                    <h5 class="text-center mb-0 mt-2">Back End Testing</h5>
                    <p class="text-center mb-0 mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus, eveniet.</p>
                </div>
                <div class="service col-3 shadow text-center px-2 py-4">
                    <img src="{{ asset('img/icons/accessibility.svg') }}" alt="" height="60px">
                    {{-- <i class="fa fa-universal-access fa-4x p-2 text-1"></i> --}}
                    <h5 class="text-center mb-0 mt-2">Accessibility</h5>
                    <p class="text-center mb-0 mt-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Totam, non.</p>
                </div>
                <div class="service col-3 shadow text-center px-2 py-4">
                    <img src="{{ asset('img/icons/UI.svg') }}" alt="" height="60px">
                    {{-- <i class="fa-solid fa-puzzle-piece fa-4x p-2 text-1"></i> --}}
                    <h5 class="text-center mb-0 mt-2">UI & Compatibility</h5>
                    <p class="text-center mb-0 mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed, quia.</p>
                </div>
            </div>
            <div class="text-center mt-5">
                <a href="" class="btn btn-1">View More</a>
            </div>
        </div>
    </div>{{-- End of Services --}}


    {{--
    $$$$$$$$\                   $$\                                         $$\       $$\      $$\                     $$\
    $$  _____|                  $$ |                                        $$ |      $$ | $\  $$ |                    $$ |
    $$ |    $$$$$$\   $$$$$$\ $$$$$$\   $$\   $$\  $$$$$$\   $$$$$$\   $$$$$$$ |      $$ |$$$\ $$ | $$$$$$\   $$$$$$\  $$ |  $$\
    $$$$$\ $$  __$$\  \____$$\\_$$  _|  $$ |  $$ |$$  __$$\ $$  __$$\ $$  __$$ |      $$ $$ $$\$$ |$$  __$$\ $$  __$$\ $$ | $$  |
    $$  __|$$$$$$$$ | $$$$$$$ | $$ |    $$ |  $$ |$$ |  \__|$$$$$$$$ |$$ /  $$ |      $$$$  _$$$$ |$$ /  $$ |$$ |  \__|$$$$$$  /
    $$ |   $$   ____|$$  __$$ | $$ |$$\ $$ |  $$ |$$ |      $$   ____|$$ |  $$ |      $$$  / \$$$ |$$ |  $$ |$$ |      $$  _$$<
    $$ |   \$$$$$$$\ \$$$$$$$ | \$$$$  |\$$$$$$  |$$ |      \$$$$$$$\ \$$$$$$$ |      $$  /   \$$ |\$$$$$$  |$$ |      $$ | \$$\
    \__|    \_______| \_______|  \____/  \______/ \__|       \_______| \_______|      \__/     \__| \______/ \__|      \__|  \__|
    --}}
    <div class="section" id="featuredWork">
        <div class="container">
            <h1 class="section-title">Featured Work</h1>
            <div class="row justify-content-around mx-auto">
                <div class="col-4 border px-2 py-4">
                    <div class="feat-container">
                        <img src="https://images.pexels.com/photos/881613/pexels-photo-881613.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" height="500px" alt="">

                        <div class="w-100 bg-3 text-center text-white p-3">
                            <h3 class="fw-bold">Company Name</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis reiciendis, dolorum aspernatur delectus accusamus eligendi.</p>
                            <div class="text-start read-more">
                                <a href="#" class="text-decoration-none text-white">Read more <i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-4 border px-2 py-4">
                    <div class="feat-container">
                        <img src="https://images.pexels.com/photos/881613/pexels-photo-881613.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" height="500px" alt="">

                        <div class="w-100 bg-3 text-center text-white p-3">
                            <h3 class="fw-bold">Company Name</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis reiciendis, dolorum aspernatur delectus accusamus eligendi.</p>
                            <div class="text-start read-more">
                                <a href="#" class="text-decoration-none text-white">Read more <i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-4 border px-2 py-4">
                    <div class="feat-container">
                        <img src="https://images.pexels.com/photos/881613/pexels-photo-881613.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" height="500px" alt="">

                        <div class="w-100 bg-3 text-center text-white p-3">
                            <h3 class="fw-bold">Company Name</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis reiciendis, dolorum aspernatur delectus accusamus eligendi.</p>
                            <div class="text-start read-more">
                                <a href="#" class="text-decoration-none text-white">Read more <i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center mt-5">
                <a href="" class="btn btn-1">View More</a>
            </div>
        </div>
    </div>

    <div class="container-fluid bg-2 py-5">
        <div class="container text-center my-3">
            <h1 class="display-4" style="font-weight: 900;">Some count that matters</h1>
            <p class="fw-bold">Our achievement in the journey depicted in numbers</p>
            <div class="d-flex justify-content-around">
                <div class="count">
                    <h1 class="display-6 text-3 mb-0"><span class="count-num">300</span></h1>
                    <p class="mb-0 fw-bold">Clients</p>
                </div>
                <div class="count">
                    <h1 class="display-6 text-3 mb-0"><span class="count-num">800</span>+</h1>
                    <p class="mb-0 fw-bold">Projects Completed</p>
                </div>
                <div class="count">
                    <h1 class="display-6 text-4 mb-0"><span class="count-num">1500</span>+</h1>
                    <p class="mb-0 fw-bold">Bugs Found</p>
                </div>
            </div>
        </div>
    </div>

    {{--
     $$$$$$\  $$\                             $$\           $$\   $$\
    $$  __$$\ $$ |                            $$ |          $$ |  $$ |
    $$ /  $$ |$$$$$$$\   $$$$$$\  $$\   $$\ $$$$$$\         $$ |  $$ | $$$$$$$\
    $$$$$$$$ |$$  __$$\ $$  __$$\ $$ |  $$ |\_$$  _|        $$ |  $$ |$$  _____|
    $$  __$$ |$$ |  $$ |$$ /  $$ |$$ |  $$ |  $$ |          $$ |  $$ |\$$$$$$\
    $$ |  $$ |$$ |  $$ |$$ |  $$ |$$ |  $$ |  $$ |$$\       $$ |  $$ | \____$$\
    $$ |  $$ |$$$$$$$  |\$$$$$$  |\$$$$$$  |  \$$$$  |      \$$$$$$  |$$$$$$$  |
    \__|  \__|\_______/  \______/  \______/    \____/        \______/ \_______/
    --}}
    <div class="section" id="aboutUs">
        <div class="container">
            <h1 class="section-title">About Us</h1>
            <p>We have your back when you need that perfect launch. With our group of seasoned technologists and testers, we do the job right the first time. Saving you time and money.</p>

            <div class="row">
                <div class="colxs-sd-offset-3 col-xs-6">
                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                        
                        <div class="row">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="{{ asset('img/gallery/1.jpg') }}" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('img/gallery/2.jpg') }}" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('img/gallery/3.jpg') }}" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('img/gallery/4.jpg') }}" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('img/gallery/5.jpg') }}" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('img/gallery/6.jpg') }}" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('img/gallery/7.jpg') }}" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('img/gallery/8.jpg') }}" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('img/gallery/9.jpg') }}" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('img/gallery/10.jpg') }}" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('img/gallery/11.jpg') }}" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('img/gallery/12.jpeg') }}" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('img/gallery/13.jpeg') }}" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('img/gallery/14.jpg') }}" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('img/gallery/15.jpg') }}" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('img/gallery/16.jpg') }}" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('img/gallery/17.jpg') }}" class="d-block w-100" alt="...">
                                </div>
                            </div>

                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>

                        <div class="row">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" style="width: 100px;" aria-label="Slide 1">
                                    <img src="{{ asset('img/gallery/1.jpg') }}" height="768" width="1152" alt="A photo of Stewart Warner behind a podium, talking" class="img-fluid d-block w-100">
                                </button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-current="true" style="width: 100px;" aria-label="Slide 2">
                                    <img src="{{ asset('img/gallery/2.jpg') }}" height="768" width="1152" alt="" class="img-fluid d-block w-100">
                                </button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-current="true" style="width: 100px;" aria-label="Slide 3">
                                    <img src="{{ asset('img/gallery/3.jpg') }}" height="768" width="1152" alt="" class="img-fluid d-block w-100">
                                </button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-current="true" style="width: 100px;" aria-label="Slide 4">
                                    <img src="{{ asset('img/gallery/4.jpg') }}" height="768" width="1152" alt="" class="img-fluid d-block w-100">
                                </button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-current="true" style="width: 100px;" aria-label="Slide 5">
                                    <img src="{{ asset('img/gallery/5.jpg') }}" height="768" width="1152" alt="" class="img-fluid d-block w-100">
                                </button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5" aria-current="true" style="width: 100px;" aria-label="Slide 6">
                                    <img src="{{ asset('img/gallery/6.jpg') }}" height="768" width="1152" alt="" class="img-fluid d-block w-100">
                                </button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="6" aria-current="true" style="width: 100px;" aria-label="Slide 7">
                                    <img src="{{ asset('img/gallery/7.jpg') }}" height="768" width="1152" alt="" class="img-fluid d-block w-100">
                                </button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="7" aria-current="true" style="width: 100px;" aria-label="Slide 8">
                                    <img src="{{ asset('img/gallery/8.jpg') }}" height="768" width="1152" alt="" class="img-fluid d-block w-100">
                                </button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="8" aria-current="true" style="width: 100px;" aria-label="Slide 9">
                                    <img src="{{ asset('img/gallery/9.jpg') }}" height="768" width="1152" alt="" class="img-fluid d-block w-100">
                                </button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="9" aria-current="true" style="width: 100px;" aria-label="Slide 10">
                                    <img src="{{ asset('img/gallery/10.jpg') }}" height="768" width="1152" alt="" class="img-fluid d-block w-100">
                                </button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="10" aria-current="true" style="width: 100px;" aria-label="Slide 11">
                                    <img src="{{ asset('img/gallery/11.jpg') }}" height="768" width="1152" alt="" class="img-fluid d-block w-100">
                                </button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="11" aria-current="true" style="width: 100px;" aria-label="Slide 12">
                                    <img src="{{ asset('img/gallery/12.jpeg') }}" height="768" width="1152" alt="" class="img-fluid d-block w-100">
                                </button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="12" aria-current="true" style="width: 100px;" aria-label="Slide 13">
                                    <img src="{{ asset('img/gallery/13.jpeg') }}" height="768" width="1152" alt="" class="img-fluid d-block w-100">
                                </button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="13" aria-current="true" style="width: 100px;" aria-label="Slide 14">
                                    <img src="{{ asset('img/gallery/14.jpg') }}" height="768" width="1152" alt="" class="img-fluid d-block w-100">
                                </button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="14" aria-current="true" style="width: 100px;" aria-label="Slide 15">
                                    <img src="{{ asset('img/gallery/15.jpg') }}" height="768" width="1152" alt="" class="img-fluid d-block w-100">
                                </button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="15" aria-current="true" style="width: 100px;" aria-label="Slide 16">
                                    <img src="{{ asset('img/gallery/16.jpg') }}" height="768" width="1152" alt="" class="img-fluid d-block w-100">
                                </button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="16" aria-current="true" style="width: 100px;" aria-label="Slide 17">
                                    <img src="{{ asset('img/gallery/17.jpg') }}" height="768" width="1152" alt="" class="img-fluid d-block w-100">
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="container mt-5 py-5">
            <div class="row">
                <div class="col-md-6">
                    <div class="container">
                        <p class="text-4 fw-bold">TESTIMONIALS</p>
                        <h1 class="text-3 display-5 fw-bold">What people say <br>about Us.</h1>
                    </div>
                </div>
                <div class="col-md-6">
                    {{-- Vertical card carousel --}}
                    <div class="d-flex" id="testimonial-outer">
                        <div class="testimonial-prev"></div>
                        <div class="d-flex flex-column" id="testimonial-container" style="margin-top: 80px;">
                            <div class="testimonial-card card-active">
                                <div class="img">
                                    <img src="https://i.picsum.photos/id/473/200/200.jpg?hmac=lXsJQxtsh73ygSCMmcWA-YqIpQ4FjdxUYkkuLTAPBfM" alt="" height="50px" width="50px">
                                </div>
                                <div class="testimonial">
                                    <p class="mb-0">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Totam, recusandae!</p>
                                </div>
                                <div class="profile">
                                    <h4 class="mb-0">1. Genevieve Gilbert</h4>
                                    <p class="mb-0">Lorem, ipsum dolor.</p>
                                </div>
                            </div>
                            <div class="testimonial-card card-next">
                                <div class="img">
                                    <img src="https://i.picsum.photos/id/200/200/200.jpg?hmac=mk1Tu6dXHQvpaA8RfxlDUZjbWG23krNkiB9kyYoEmO8" alt="" height="50px" width="50px">
                                </div>
                                <div class="testimonial">
                                    <p class="mb-0">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequatur, esse.</p>
                                </div>
                                <div class="profile">
                                    <h4 class="mb-0">2. Joshua Douglas</h4>
                                    <p class="mb-0">Lorem, ipsum dolor.</p>
                                </div>
                            </div>
                            <div class="testimonial-card card-hide">
                                <div class="img">
                                    <img src="https://i.picsum.photos/id/685/200/200.jpg?hmac=1IjDFMSIa0T_JSvcq79_e2NWPwRJg61Ufbfu4eM4HvA" alt="" height="50px" width="50px">
                                </div>
                                <div class="testimonial">
                                    <p class="mb-0">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Odit, possimus.</p>
                                </div>
                                <div class="profile">
                                    <h4 class="mb-0">3. Gavin Figueroa</h4>
                                    <p class="mb-0">Lorem, ipsum dolor.</p>
                                </div>
                            </div>
                            <div class="testimonial-card card-hide">
                                <div class="img">
                                    <img src="https://i.picsum.photos/id/890/200/200.jpg?hmac=_chNVuEZW4X8X4PEIIJNyv3kMTFOR517hu8zLfMAf70" alt="" height="50px" width="50px">
                                </div>
                                <div class="testimonial">
                                    <p class="mb-0">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Odit, possimus.</p>
                                </div>
                                <div class="profile">
                                    <h4 class="mb-0">4. Marian Rios</h4>
                                    <p class="mb-0">Lorem, ipsum dolor.</p>
                                </div>
                            </div>
                            <div class="testimonial-card card-prev">
                                <div class="img">
                                    <img src="https://i.picsum.photos/id/1053/200/200.jpg?hmac=JOtR2adXynxSVClz0LNlPZjW0TJTRXc7c15kka2QoRk" alt="" height="50px" width="50px">
                                </div>
                                <div class="testimonial">
                                    <p class="mb-0">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Odit, possimus.</p>
                                </div>
                                <div class="profile">
                                    <h4 class="mb-0">5. Jayden Park</h4>
                                    <p class="mb-0">Lorem, ipsum dolor.</p>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-next"></div>
                        <div class="d-flex flex-column justify-content-around" id="testimonial-controls">
                            <div class="testimonial-prev"><i class="fa-solid fa-chevron-up fa-2x"></i></div>
                            <div class="testimonial-next"><i class="fa-solid fa-chevron-down fa-2x"></i></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
