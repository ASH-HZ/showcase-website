@extends('layouts.app')
@section('page_title', 'Anthony Chan')
@section('page_description', 'Welkom op de showcase website van Anthony Chan')

@section('content')

    <body>

    <!-- app wrapper -->
    <div class="sw-web-frame">

        <!-- scroll container -->
        <div id="sw-dynamic-content" class="sw-swup-animation">
            <div id="sw-scroll-container" class="sw-scroll-container" data-scroll-container style="opacity: 0">
                <div data-scroll-section id="content" class="sw-scroll-section">

                    <div class="sw-content-start">

                        <!-- banner -->
                        <div class="sw-banner" data-scroll data-scroll-direction="vertical" data-scroll-speed="-1">

                            <!-- banner cover-->
                            <img src="{{ asset('assets/img/hz_buiten.jpg') }}" alt="banner-image"
                                 class="sw-banner-cover"
                                 data-scroll data-scroll-direction="vertical" data-scroll-speed="-4">
                            <!-- banner cover end -->

                            <!-- banner content -->
                            <div class="sw-banner-content sw-overlay">

                                <div class="container" data-scroll data-scroll-direction="vertical"
                                     data-scroll-speed="1">

                                    <div class="col-lg-8">

                                        <!-- banner title -->
                                        <div class="sw-banner-text">
                                            <div class="sw-label sw-mb-20"></div>
                                            <h1>Blog</h1>
                                        </div>
                                        <!-- banner title end -->

                                    </div>
                                </div>

                            </div>
                            <!-- banner content end -->

                        </div>
                        <!-- banner end -->

                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">

                                    <!-- content -->
                                    <div class="sw-content" id="sw-content">
                                        <div class="sw-content-box">

                                            <!-- Articles -->
                                            <h4 class="display-5 font-weight-bold mb-5">Laatste updates</h4>
                                            <div class="row">
                                                <!-- Item -->
                                                <div class="col-md-6 col-xl-4">
                                                    <div
                                                        class="image-box image-box--shadowed white-bg style-2 mb-4">
                                                        <div class="overlay-container">
                                                            <img
                                                                src="{{ asset ('assets/img/blog/what-is-html.jpg') }}"
                                                                alt="">
                                                            <a href="{{ route('pages.blog.articles.html-guide') }}"
                                                               class="overlay-link"></a>
                                                        </div>
                                                        <div class="body">
                                                            <h5 class="font-weight-bold text-black my-2">HTML voor
                                                                beginners</h5>
                                                            <p class="small text-black-50">14 september 2022</p>
                                                            <div class="row d-flex text-right">
                                                                <div class="col-6 text-right">
                                                                    <a href="{{ route('pages.blog.articles.html-guide') }}"
                                                                       class="btn radius-50 btn-gray-transparent btn-animated">Lees
                                                                        meer... <i
                                                                            class="fa fa-arrow-right"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Item end -->
                                                <!-- Item -->
                                                <div class="col-md-6 col-xl-4">
                                                    <div
                                                        class="image-box image-box--shadowed white-bg style-2 mb-4">
                                                        <div class="overlay-container">
                                                            <img
                                                                src="{{ asset ('assets/img/blog/feedback.jpg') }}"
                                                                alt="Feedback-foto">
                                                            <a href="{{ route('pages.blog.articles.ervaring') }}"
                                                               class="overlay-link"></a>
                                                        </div>
                                                        <div class="body">
                                                            <h5 class="font-weight-bold text-black my-2">Eerste
                                                                feedback</h5>
                                                            <p class="small text-black-50">13 september 2022</p>
                                                            <div class="row d-flex align-items-center">
                                                                <div class="col-6 text-right">
                                                                    <a href="{{ route('pages.blog.articles.ervaring') }}"
                                                                       class="btn radius-50 btn-gray-transparent btn-animated">Lees
                                                                        meer... <i
                                                                            class="fa fa-arrow-right"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Item end -->
                                                <!-- Item -->
                                                <div class="col-md-6 col-xl-4">
                                                    <div
                                                        class="image-box image-box--shadowed white-bg style-2 mb-4">
                                                        <div class="overlay-container">
                                                            <img
                                                                src="{{ asset ('assets/img/blog/code.jpg') }}"
                                                                alt="Coding-foto">
                                                            <a href="{{ route('pages.blog.articles.ervaring') }}"
                                                               class="overlay-link"></a>
                                                        </div>
                                                        <div class="body">
                                                            <h5 class="font-weight-bold text-black my-2">Programmeer
                                                                ervaring</h5>
                                                            <p class="small text-black-50">11 september 2022</p>
                                                            <div class="row d-flex align-items-center">
                                                                <div class="col-6 text-right">
                                                                    <a href="{{ route('pages.blog.articles.ervaring') }}"
                                                                       class="btn radius-50 btn-gray-transparent btn-animated">Lees
                                                                        meer... <i
                                                                            class="fa fa-arrow-right"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Item end -->
                                                <!-- Item -->
                                                <div class="col-md-6 col-xl-4">
                                                    <div
                                                        class="image-box image-box--shadowed white-bg style-2 mb-4">
                                                        <div class="overlay-container">
                                                            <img
                                                                src="{{ asset('assets/img/blog/swot-analyse.jpg') }}"
                                                                alt="SWOT-foto">
                                                            <a href="{{ route('pages.blog.articles.swot') }}"
                                                               class="overlay-link"></a>
                                                        </div>
                                                        <div class="body">
                                                            <h5 class="font-weight-bold text-black my-2">
                                                                SWOT-Analyse</h5>
                                                            <p class="small text-black-50">10 september 2022</p>
                                                            <div class="row d-flex align-items-center">
                                                                <div class="col-6 text-right">
                                                                    <a href="{{ route('pages.blog.articles.swot') }}"
                                                                       class="btn radius-50 btn-gray-transparent btn-animated">Lees
                                                                        meer... <i
                                                                            class="fa fa-arrow-right"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Item end -->
                                                <!-- Item -->
                                                <div class="col-md-6 col-xl-4">
                                                    <div
                                                        class="image-box image-box--shadowed white-bg style-2 mb-4">
                                                        <div class="overlay-container">
                                                            <img
                                                                src="{{ asset('assets/img/blog/studiekeuze.png') }}"
                                                                alt="Studiekeuze-foto">
                                                            <a href="{{ route ('pages.blog.articles.studiekeuze') }}"
                                                               class="overlay-link"></a>
                                                        </div>
                                                        <div class="body">
                                                            <h5 class="font-weight-bold text-black my-2">
                                                                Studiekeuze</h5>
                                                            <p class="small text-black-50">8 september 2022</p>
                                                            <div class="row d-flex align-items-center">
                                                                <div class="col-6 text-right">
                                                                    <a href="{{ route ('pages.blog.articles.studiekeuze') }}"
                                                                       class="btn radius-50 btn-gray-transparent btn-animated">Lees
                                                                        meer... <i
                                                                            class="fa fa-arrow-right"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Item end -->
                                            </div>
                                        </div>
                                        </section>
                                    </div>
                                    <!-- Articles end -->
                                    <div class="sw-divider sw-mt-40 sw-mb-40"></div>
                                    <!-- content end -->

                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- scroll container end -->

    </div>
    <!-- app wrapper end -->
    </body>
@endsection
