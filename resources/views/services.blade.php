@extends('layouts.app')

@section('content')

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
    <div class="section" style="margin-top: 86px;">
        <div class="container">
            <h1 class="section-title mb-2">Our Services</h1>
            <p class="text-center mb-5 w-75 mx-auto">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Numquam dolorum consequuntur iure excepturi qui, cupiditate perspiciatis non est voluptatum iusto facilis, nisi adipisci minima cumque quam eius officia vitae assumenda.</p>

            <div class="row justify-content-around mx-auto">
                <div class="col-lg-3 py-3 text-center">
                    <div class="service shadow">
                        <img src="{{ asset('img/icons/services/automation.svg') }}" alt="" height="60px">
                        <h5 class="text-center mb-0 mt-2">Automation</h5>
                        <p class="text-center mb-0 mt-4">Our team’s background in DevOps and continuous testing makes automating those repetitive test cases easier to run.</p>
                    </div>
                </div>
                <div class="col-lg-3 py-3 text-center">
                    <div class="service shadow">
                        <img src="{{ asset('img/icons/services/backend.svg') }}" alt="" height="60px">
                        {{-- <i class="fa fa-code fa-4x p-2 text-1"></i> --}}
                        <h5 class="text-center mb-0 mt-2">Back End Testing</h5>
                        <p class="text-center mb-0 mt-4">With Databases, CMS tools, APIs and other backend technologies, our team can assist to make sure those backend test cases are covered as well.</p>
                    </div>
                </div>
                <div class="col-lg-3 py-3 text-center">
                    <div class="service shadow">
                        <img src="{{ asset('img/icons/services/accessibility.svg') }}" alt="" height="60px">
                        {{-- <i class="fa fa-universal-access fa-4x p-2 text-1"></i> --}}
                        <h5 class="text-center mb-0 mt-2">Accessibility</h5>
                        <p class="text-center mb-0 mt-4">Foxhole’s accessibility report and checklist covers the latest ADA and WCAG compliance standards to address access for people with physical, sensory, or cognitive disabilities.</p>
                    </div>
                </div>
                <div class="col-lg-3 py-3 text-center">
                    <div class="service shadow">
                        <img src="{{ asset('img/icons/services/UI.svg') }}" alt="" height="60px">
                        {{-- <i class="fa-solid fa-puzzle-piece fa-4x p-2 text-1"></i> --}}
                        <h5 class="text-center mb-0 mt-2">UI & Compatibility</h5>
                        <p class="text-center mb-0 mt-4">With a lab of mobile devices (not emulators), desktops and other hardware, Foxhole has you covered! We can ensure the integrity of your site/app across any screen size, operating system, platform or combination necessary.</p>
                    </div>
                </div>
                <div class="col-lg-3 py-3 text-center">
                    <div class="service shadow">
                        <img src="{{ asset('img/icons/services/design_and_comp.svg') }}" alt="" height="60px">
                        <h5 class="text-center mb-0 mt-2">Design and Comp matching</h5>
                        <p class="text-center mb-0 mt-4">With our interactive advertising experience, Foxhole has a creatively trained eye to ensure visuals are consistent, match style and font, and content placement is carried across the experience.</p>
                    </div>
                </div>
                <div class="col-lg-3 py-3 text-center">
                    <div class="service shadow">
                        <img src="{{ asset('img/icons/services/performance.svg') }}" alt="" height="60px">
                        {{-- <i class="fa fa-code fa-4x p-2 text-1"></i> --}}
                        <h5 class="text-center mb-0 mt-2">Performance (latency)</h5>
                        <p class="text-center mb-0 mt-4">We perform page speed checks and look out for items that might slow a page down, such as large assets or too many items in the DOM.</p>
                    </div>
                </div>
                <div class="col-lg-3 py-3 text-center">
                    <div class="service shadow">
                        <img src="{{ asset('img/icons/services/copy.svg') }}" alt="" height="60px">
                        {{-- <i class="fa fa-universal-access fa-4x p-2 text-1"></i> --}}
                        <h5 class="text-center mb-0 mt-2">Copy Verification</h5>
                        <p class="text-center mb-0 mt-4">Foxhole’s accessibility report and checklist covers the latest ADA and WCAG compliance standards to address access for people with physical, sensory, or cognitive disabilities.</p>
                    </div>
                </div>
                <div class="col-lg-3 py-3 text-center">
                    <div class="service shadow">
                        <img src="{{ asset('img/icons/services/localization.svg') }}" alt="" height="60px">
                        <h5 class="text-center mb-0 mt-2">Localization (L10n)</h5>
                        <p class="text-center mb-0 mt-4">Foxhole tests global experiences often, running checks on localized and internationalized content so vital information reaches all customer bases.</p>
                    </div>
                </div>
                <div class="col-lg-3 py-3 text-center">
                    <div class="service shadow">
                        <img src="{{ asset('img/icons/services/stress.svg') }}" alt="" height="60px">
                        {{-- <i class="fa fa-code fa-4x p-2 text-1"></i> --}}
                        <h5 class="text-center mb-0 mt-2">Stress and Load testing</h5>
                        <p class="text-center mb-0 mt-4">We can push your website, API or other software to the limit. For those moments when you need to be prepared for high traffic, Foxhole analyzes your preparedness before a launch.</p>
                    </div>
                </div>
                <div class="col-lg-3 py-3 text-center">
                    <div class="service shadow">
                        <img src="{{ asset('img/icons/services/email.svg') }}" alt="" height="60px">
                        {{-- <i class="fa fa-universal-access fa-4x p-2 text-1"></i> --}}
                        <h5 class="text-center mb-0 mt-2">Email Campaign Testing</h5>
                        <p class="text-center mb-0 mt-4">Our testing lab is equipped with many versions of email client software. Foxhole also runs other testing tools to ensure cross-platform display for fast-moving email campaigns.</p>
                    </div>
                </div>
                <div class="col-lg-3 py-3 text-center">
                    <div class="service shadow">
                        <img src="{{ asset('img/icons/services/ads.svg') }}" alt="" height="60px">
                        {{-- <i class="fa-solid fa-puzzle-piece fa-4x p-2 text-1"></i> --}}
                        <h5 class="text-center mb-0 mt-2">Display (Banner) Ads</h5>
                        <p class="text-center mb-0 mt-4">Our QA testers are certified and trained with banner ads. We have experience in ad publishing platforms such as Double-Click, Sizmek, and Flashtalking, making it a breeze to get your paid media out the door.</p>
                    </div>
                </div>
                <div class="col-lg-3 py-3 text-center">
                    <div class="service shadow">
                        <img src="{{ asset('img/icons/services/dev.svg') }}" alt="" height="60px">
                        {{-- <i class="fa-solid fa-puzzle-piece fa-4x p-2 text-1"></i> --}}
                        <h5 class="text-center mb-0 mt-2">Design and Development</h5>
                        <p class="text-center mb-0 mt-4">As technologists, we tend to handle projects from start to finish when needed. Our designers and developers are creatively trained and reinforced with QA.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>{{-- End of Services --}}
@endsection
