@extends('layouts.app')
@section('page_title', 'Anthony Chan')
@section('page_description', 'Welkom op de showcase website van Anthony Chan')

@section('content')

    <body>

    <!-- app wrapper -->
    <div class="sw-web-frame">

        <!-- scroll container -->
        <div class="sw-swup-animation">
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
                                    <div class="row">
                                        <div class="col-lg-8">

                                            <!-- banner title -->
                                            <div class="sw-banner-text">
                                                <div class="sw-label sw-mb-20">Welkom op mijn website!</div>
                                                <h2 class="sw-mb-30">Waarom ik voor<br>deze studie heb gekozen</h2>
                                                <a href="{{route('pages.profile')}}" class="sw-btn sw-btn-border">Maak
                                                    kennis <i class="fas fa-play"></i></a>
                                            </div>
                                            <!-- banner title end -->

                                        </div>
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
                                        <br><br><br><br>
                                        <!-- paragraphs -->
                                        <div class="sw-content-box-left">

                                            <div class="mb-3">
                                                <h3 class="text-white">De keuze voor een nieuwe studie.</h3>
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
                                                        class="text-white">geaccrediteerd</a> is.
                                                    Mijn keuze was definitief door de volgende factoren:
                                                    <br><br>
                                                <ul style="list-style: none;">
                                                    <li>&#8226; Goed aangeschreven door derden partijen;</li>
                                                    <li>&#8226; mooie locatie in Zeeland;</li>
                                                    <li>&#8226; omdat ik een school moest kiezen;</li>
                                                    <li>&#8226; de lesstof op de website zag er interessant uit;</li>
                                                </ul>
                                                </p>
                                                <br>

                                                <div class="mt-4">
                                                    <img class="img-thumbnail rounded-5 w-50"
                                                         src="https://images.unsplash.com/photo-1571171637578-41bc2dd41cd2?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80"
                                                         alt="Coding-image">
                                                </div>

                                            </div>
                                        </div>
                                        <!-- paragraphs end -->

                                        <!-- text end -->
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
