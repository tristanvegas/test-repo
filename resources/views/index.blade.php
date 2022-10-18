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
            <h1 class="h1">We are in the<br>Trenches with you.</h1>
            <p>We have your back when you need that perfect launch. With our group of seasoned technologists and testers, we do the job right the first time. Saving you time and money.</p>
            <button class="btn btn-1 my-auto">Get Started</button>
        </div>
    </div>

    <div id="services" class="section">
        <div class="container">
            <h1 class="section-title">Our Services</h1>

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
                <a href="" class="btn btn-danger btn-1">View More</a>
            </div>
        </div>
    </div>



    {{-- to hold the footer to the bottom --}}
    {{-- <div style="height: 100vh"></div> --}}
@endsection
