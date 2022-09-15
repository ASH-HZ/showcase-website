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
                            <img src="{{ asset('assets/img/blog/studiekeuze-2.png') }}" alt="Studiekeuze-banner"
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
                                            <h1>Studiekeuze</h1>
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
                                                <h3 class="text-white">Mijn studiekeuze</h3>
                                            </div>

                                            <div class="ac-text">
                                                <p>Het afgelopen jaar heb ik een opleiding gevolgd aan de Hogeschool
                                                    Rotterdam. Dit was de studie International Business. Naast mijn
                                                    studie was ik al druk met een aantal development projecten, waarbij
                                                    mijn interesse toch gigantisch is verplaatst naar de technische
                                                    wereld. Daardoor heb ik eind 2021 gekozen om te gaan zoeken naar een
                                                    nieuwe opleiding op gebied van development.</p>
                                                <br>
                                                <p class="ac-text">
                                                    Na veel online te hebben gezocht kwam ik HZ University of Applied
                                                    Sciences tegen. Een
                                                    school die zeer goed aangeschreven staat en <a
                                                        href="https://hz.nl/over-de-hz/organisatie/kwaliteit-accreditatie"
                                                        class="text-white">geaccrediteerd</a> is. Ik hoop na de studie
                                                    genoeg te hebben geleerd om verder te kunnen werken bij het bedrijf
                                                    waar ik nu bij help. Als dat geen optie is vind ik het ook wel leuk
                                                    om zelf een bedrijf te starten in de wereld van ICT.
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
