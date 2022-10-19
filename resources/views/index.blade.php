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
    </div>


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
                            <div class="text-start read-more mt-5">
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
                            <div class="text-start read-more mt-5">
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
                            <div class="text-start read-more mt-5">
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


    <div class="sectiom"></div>
        <div class="container">
            <div class="section-title">About Us</div>
            
        </div>
    </div>

    
    {{-- div.sectiom>div.container>div.section-title --}}


    {{-- to hold the footer to the bottom --}}
    {{-- <div style="height: 100vh"></div> --}}
@endsection
