@extends('layouts.app')

@section('content')

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

                <div class="col-lg-4">
                    <div class="feat-outer-container border px-2 py-4">
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

                <div class="col-lg-4">
                    <div class="feat-outer-container border px-2 py-4">
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

                <div class="col-lg-4">
                    <div class="feat-outer-container border px-2 py-4">
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
            </div>


        </div>
    </div>

@endsection
