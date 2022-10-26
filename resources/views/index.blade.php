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
        <div class="container my-auto text-white">
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

            {{-- row justify-content-around mx-auto --}}
            <div class="services-container">
                <div class="services-card">
                    <div class="service">
                        <img src="{{ asset('img/icons/services/automation.svg') }}" alt="" height="60px">
                        <h5 class="text-center mb-0 mt-2">Automation</h5>
                        <p class="text-center mb-0 mt-4">Our team’s background in DevOps and continuous testing makes automating those repetitive test cases easier to run.</p>
                    </div>
                </div>
                <div class="services-card">
                    <div class="service">
                        <img src="{{ asset('img/icons/services/backend.svg') }}" alt="" height="60px">
                        {{-- <i class="fa fa-code fa-4x p-2 text-1"></i> --}}
                        <h5 class="text-center mb-0 mt-2">Back End Testing</h5>
                        <p class="text-center mb-0 mt-4">With Databases, CMS tools, APIs and other backend technologies, our team can assist to make sure those backend test cases are covered as well.</p>
                    </div>
                </div>
                <div class="services-card">
                    <div class="service">
                        <img src="{{ asset('img/icons/services/accessibility.svg') }}" alt="" height="60px">
                        {{-- <i class="fa fa-universal-access fa-4x p-2 text-1"></i> --}}
                        <h5 class="text-center mb-0 mt-2">Accessibility</h5>
                        <p class="text-center mb-0 mt-4">Foxhole’s accessibility report and checklist covers the latest ADA and WCAG compliance standards to address access for people with physical, sensory, or cognitive disabilities.</p>
                    </div>
                </div>
                <div class="services-card">
                    <div class="service">
                        <img src="{{ asset('img/icons/services/UI.svg') }}" alt="" height="60px">
                        {{-- <i class="fa-solid fa-puzzle-piece fa-4x p-2 text-1"></i> --}}
                        <h5 class="text-center mb-0 mt-2">UI & Compatibility</h5>
                        <p class="text-center mb-0 mt-4">With a lab of mobile devices (not emulators), desktops and other hardware, Foxhole has you covered! We can ensure the integrity of your site/app across any screen size, operating system, platform or combination necessary.</p>
                    </div>
                </div>
            </div>
            <div class="text-center mt-5">
                <a href="{{ url('services') }}" class="btn btn-1">View More</a>
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
    <div class="section mt-5" id="featuredWork">
        <div class="container">
            <h1 class="section-title">Featured Work</h1>
            <div class="row justify-content-center mx-auto">
                <div class="col-md-6 col-lg-4 my-2">
                    <div class="feat-outer-container border px-2 py-4 mx-auto">
                        <div class="feat-container">
                            <img src="https://i.picsum.photos/id/866/200/300.jpg?hmac=rcadCENKh4rD6MAp6V_ma-AyWv641M4iiOpe1RyFHeI" height="500px" alt="">

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

                <div class="col-md-6 col-lg-4 my-2">
                    <div class="feat-outer-container border px-2 py-4 mx-auto">
                        <div class="feat-container">
                            <img src="https://i.picsum.photos/id/361/200/300.jpg?hmac=unS_7uvpA3Q-hJTvI1xNCnlhta-oC6XnWZ4Y11UpjAo" height="500px" alt="">

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

                <div class="col-md-6 col-lg-4 my-2">
                    <div class="feat-outer-container border px-2 py-4 mx-auto">
                        <div class="feat-container">
                            <img src="https://i.picsum.photos/id/984/200/300.jpg?hmac=mLBN3lSvSl08Vh8Kw96TLY7v239gr1idtxVXvYFDkSc" height="500px" alt="">

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
            </div>

            <div class="text-center mt-5">
                <a href="{{ url('/featuredWork') }}" class="btn btn-1">View More</a>
            </div>
        </div>
    </div>

    <div class="container-fluid bg-2 py-5" id="counts">
        <div class="container text-center my-3">
            <h1 class="display-4" style="font-weight: 900;">Some count that matters</h1>
            <p class="fw-bold">Our achievement in the journey depicted in numbers</p>
            <div class="count-container">
                <div class="count-item">
                    <div class="count">
                        <h1 class="display-6 text-3 mb-0"><span class="count-num">300</span></h1>
                        <p class="mb-0 fw-bold">Clients</p>
                    </div>
                </div>
                <div class="count-item count-large">
                    <div class="count">
                        <h1 class="display-6 text-3 mb-0"><span class="count-num">800</span>+</h1>
                        <p class="mb-0 fw-bold">Projects Completed</p>
                    </div>
                </div>
                <div class="count-item">
                    <div class="count">
                        <h1 class="display-6 text-4 mb-0"><span class="count-num">1500</span>+</h1>
                        <p class="mb-0 fw-bold">Bugs Found</p>
                    </div>
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
    <div class="section mt-4" id="aboutUs">
        <div class="container">
            <h1 class="section-title aboutus">About Us</h1>
            <p class="aboutus-p">We have your back when you need that perfect launch. With our group of seasoned <br> technologists and testers, we do the job right the first time. Saving you time and money.</p>

            <div class="container">
                <div>
                    <div class="gallery-outer">
                        <div class="gallery-control-prev"></div>
                        <div class="gallery-container">
                            <div class="gallery-item gallery-hidden" data-gal-id="2">
                                <img src="{{ asset('img/gallery/1.jpg') }}" width="1080px" height="720px" alt="">
                            </div>
                            <div class="gallery-item gallery-hidden-left" data-gal-id="3">
                                <img src="{{ asset('img/gallery/2.jpg') }}" width="1080px" height="720px" alt="">
                            </div>
                            <div class="gallery-item gallery-prev" data-gal-id="4">
                                <img src="{{ asset('img/gallery/3.jpg') }}" width="1080px" height="720px" alt="">
                            </div>
                            <div class="gallery-item gallery-active" data-gal-id="5">
                                <img src="{{ asset('img/gallery/4.jpg') }}" width="1080px" height="720px" alt="">
                            </div>
                            <div class="gallery-item gallery-next" data-gal-id="6">
                                <img src="{{ asset('img/gallery/5.jpg') }}" width="1080px" height="720px" alt="">
                            </div>
                            <div class="gallery-item gallery-hidden-right" data-gal-id="7">
                                <img src="{{ asset('img/gallery/6.jpg') }}" width="1080px" height="720px" alt="">
                            </div>
                            <div class="gallery-item gallery-hidden" data-gal-id="8">
                                <img src="{{ asset('img/gallery/7.jpg') }}" width="1080px" height="720px" alt="">
                            </div>
                            <div class="gallery-item gallery-hidden" data-gal-id="9">
                                <img src="{{ asset('img/gallery/8.jpg') }}" width="1080px" height="720px" alt="">
                            </div>
                            <div class="gallery-item gallery-hidden">
                                <img src="{{ asset('img/gallery/9.jpg') }}" width="1080px" height="720px" alt="">
                            </div>
                            <div class="gallery-item gallery-hidden">
                                <img src="{{ asset('img/gallery/10.jpg') }}" width="1080px" height="720px" alt="">
                            </div>
                            <div class="gallery-item gallery-hidden">
                                <img src="{{ asset('img/gallery/11.jpg') }}" width="1080px" height="720px" alt="">
                            </div>
                            <div class="gallery-item gallery-hidden">
                                <img src="{{ asset('img/gallery/12.jpg') }}" width="1080px" height="720px" alt="">
                            </div>
                            <div class="gallery-item gallery-hidden">
                                <img src="{{ asset('img/gallery/13.jpg') }}" width="1080px" height="720px" alt="">
                            </div>
                            <div class="gallery-item gallery-hidden">
                                <img src="{{ asset('img/gallery/14.jpg') }}" width="1080px" height="720px" alt="">
                            </div>
                            <div class="gallery-item gallery-hidden">
                                <img src="{{ asset('img/gallery/15.jpg') }}" width="1080px" height="720px" alt="">
                            </div>
                            <div class="gallery-item gallery-hidden">
                                <img src="{{ asset('img/gallery/16.jpg') }}" width="1080px" height="720px" alt="">
                            </div>
                            <div class="gallery-item gallery-hidden" data-gal-id="1">
                                <img src="{{ asset('img/gallery/17.jpg') }}" width="1080px" height="720px" alt="">
                            </div>
                        </div>
                        <div class="gallery-control-next"></div>
                    </div>
                    <div class="gallery-thumbnail">
                        <div class="gallery-thumb-item gallery-thumb-prev-3" data-gal-id="2">
                            <img src="{{ asset('img/gallery/thumb/1.jpg') }}" height="100px" width="150px" alt="">
                        </div>
                        <div class="gallery-thumb-item gallery-thumb-prev-2" data-gal-id="3">
                            <img src="{{ asset('img/gallery/thumb/2.jpg') }}" height="100px" width="150px" alt="">
                        </div>
                        <div class="gallery-thumb-item gallery-thumb-prev-1" data-gal-id="4">
                            <img src="{{ asset('img/gallery/thumb/3.jpg') }}" height="100px" width="150px" alt="">
                        </div>
                        <div class="gallery-thumb-item gallery-thumb-active" data-gal-id="5">
                            <img src="{{ asset('img/gallery/thumb/4.jpg') }}" height="100px" width="150px" alt="">
                        </div>
                        <div class="gallery-thumb-item gallery-thumb-next-1" data-gal-id="6">
                            <img src="{{ asset('img/gallery/thumb/5.jpg') }}" height="100px" width="150px" alt="">
                        </div>
                        <div class="gallery-thumb-item gallery-thumb-next-2" data-gal-id="7">
                            <img src="{{ asset('img/gallery/thumb/6.jpg') }}" height="100px" width="150px" alt="">
                        </div>
                        <div class="gallery-thumb-item gallery-thumb-next-3" data-gal-id="8">
                            <img src="{{ asset('img/gallery/thumb/7.jpg') }}" height="100px" width="150px" alt="">
                        </div>
                        <div class="gallery-thumb-item gallery-thumb-next-4" data-gal-id="9">
                            <img src="{{ asset('img/gallery/thumb/8.jpg') }}" height="100px" width="150px" alt="">
                        </div>
                        <div class="gallery-thumb-item gallery-thumb-hidden-right">
                            <img src="{{ asset('img/gallery/thumb/9.jpg') }}" height="100px" width="150px" alt="">
                        </div>
                        <div class="gallery-thumb-item gallery-thumb-hidden">
                            <img src="{{ asset('img/gallery/thumb/10.jpg') }}" height="100px" width="150px" alt="">
                        </div>
                        <div class="gallery-thumb-item gallery-thumb-hidden">
                            <img src="{{ asset('img/gallery/thumb/11.jpg') }}" height="100px" width="150px" alt="">
                        </div>
                        <div class="gallery-thumb-item gallery-thumb-hidden">
                            <img src="{{ asset('img/gallery/thumb/12.jpg') }}" height="100px" width="150px" alt="">
                        </div>
                        <div class="gallery-thumb-item gallery-thumb-hidden">
                            <img src="{{ asset('img/gallery/thumb/13.jpg') }}" height="100px" width="150px" alt="">
                        </div>
                        <div class="gallery-thumb-item gallery-thumb-hidden">
                            <img src="{{ asset('img/gallery/thumb/14.jpg') }}" height="100px" width="150px" alt="">
                        </div>
                        <div class="gallery-thumb-item gallery-thumb-hidden">
                            <img src="{{ asset('img/gallery/thumb/15.jpg') }}" height="100px" width="150px" alt="">
                        </div>
                        <div class="gallery-thumb-item gallery-thumb-hidden-left">
                            <img src="{{ asset('img/gallery/thumb/16.jpg') }}" height="100px" width="150px" alt="">
                        </div>
                        <div class="gallery-thumb-item gallery-thumb-prev-4" data-gal-id="1">
                            <img src="{{ asset('img/gallery/thumb/17.jpg') }}" height="100px" width="150px" alt="">
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
                    <div id="testimonial-outer" class="mt-5">
                        <div class="testimonial-container">
                            <div class="testimonial-prev"></div>
                            <div id="testimonial-container">
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
                        </div>
                        <div class="d-flex flex-column justify-content-around" id="testimonial-controls">
                            <div class="testimonial-next"><i class="fa-solid fa-chevron-up fa-2x"></i></div>
                            <div class="testimonial-prev"><i class="fa-solid fa-chevron-down fa-2x"></i></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
