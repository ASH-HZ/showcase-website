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
                            <img src="{{ asset('assets/img/blog/laravel.png') }}" alt="Laravel-banner"
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
                                            <h1>Programmeer ervaring</h1>
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

                                            <div class="mb-3">
                                                <h3 class="text-white">Mijn programmeer ervaring</h3>
                                            </div>

                                            <div class="ac-text">
                                                <p>Ik programmeerde, als hobby en interesse, al 5 jaar. Ik raakte in
                                                    contact met de wereld van programmeren toen ik als vrijwilliger
                                                    hielp bij een beginnend bedrijf. Hier begon ik met het coderen van
                                                    Discord bots (JS). Ik werd door de eigenaar van het bedrijf steeds
                                                    meer betrokken in
                                                    programmeer projecten en kreeg uitleg over de taal waarin zij
                                                    programmeerden. Dit was in een framework genaamd Laravel (PHP).</p>
                                                <br>
                                                <p class="ac-text">
                                                    Ik heb samen met de eigenaar een aantal websites gemaakt voor
                                                    verschillende bedrijven zoals; GoedkoperVoIP, De Telefoonprovider en
                                                    RumIT. Naast de websites hebben wij samen ook een admin paneel
                                                    gemaakt voor GoedkoperVoIP, welke wij nog steeds verder ontwikkelen.
                                                    Mocht je benieuwd zijn naar de eindresultaten van de websites van De
                                                    Telefoonprovider en RumIT, dan kan je <a
                                                        href="{{ route('pages.profile') }}">terug</a> naar <a
                                                        href="{{ route('pages.profile') }}">mijn profiel</a>.
                                                </p>

                                            </div>

                                        </div>


                                        <div class="sw-divider sw-mt-40 sw-mb-40"></div>
                                    </div>
                                    <!-- content end -->

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
