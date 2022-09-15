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
                                    <div class="row">
                                        <div class="col-lg-4"></div>
                                        <div class="col-lg-8">

                                            <!-- banner title -->
                                            <div class="sw-banner-text">
                                                <div class="sw-label sw-mb-20">Dit ben ik!</div>
                                                <h1 class="sw-mb-30">Leer mij kennen<br>op deze pagina</h1>
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
                                <div class="col-lg-4">

                                    <!-- main card -->
                                    <div class="sw-main-card-frame sw-sidebar">
                                        <div class="sw-main-card">

                                            <!-- card header -->
                                            <div class="sw-mc-header">
                                                <div class="sw-avatar-frame sw-mb-20">
                                                    <img class="sw-avatar"
                                                         src="{{ asset('assets/img/anthonybus.jpg') }}"
                                                         alt="avatar-image">
                                                    <div class="sw-dot"></div>
                                                </div>
                                                <h5 class="sw-name sw-mb-15">Anthony Chan</h5>
                                                <div class="sw-label">Ik ben een
                                                    <span class="sw-typed-text"> <!-- Words for rotation: js/typing.js line 4, 103 --> </span>
                                                </div>
                                            </div>
                                            <!-- card header end -->

                                            <div class="sw-divider sw-mb-40 sw-mt-40"></div>

                                            <!-- sidebar social -->
                                            <div class="sw-social">
                                                <a href="https://www.linkedin.com/in/anthonysh-chan/"><i
                                                        class="fab fa-linkedin-in"></i></a>
                                                <a href="#https://www.instagram.com/_anthony_shc_/"><i
                                                        class="fab fa-instagram"></i></a>
                                                <a data-fancybox href="{{ asset('assets/img/snapchat.jpeg') }}"><i
                                                        class="fab fa-snapchat"></i></a>
                                                <a href="https://github.com/AnthonySHC"><i
                                                        class="fab fa-github"></i></a>
                                            </div>
                                            <!-- sidebar social end -->

                                            <div class="sw-divider sw-mb-40 sw-mt-40"></div>

                                            <!-- info -->
                                            <ul class="sw-table sw-mb-20">
                                                <!-- country -->
                                                <li>
                                                    <div class="sw-label">Leeftijd:</div>
                                                    <div class="sw-label text-white-50">19</div>
                                                </li>
                                                <!-- city -->
                                                <li>
                                                    <div class="sw-label">Woonplaats:</div>
                                                    <div class="sw-label text-white-50">Renesse</div>
                                                </li>
                                                <!-- age -->
                                                <li>
                                                    <div class="sw-label">Geboorteplaats:</div>
                                                    <div class="sw-label text-white-50">Rotterdam</div>
                                                </li>
                                            </ul>
                                            <!-- info end -->

                                            <div class="sw-divider sw-mb-40 sw-mt-40"></div>

                                        </div>
                                    </div>
                                    <!-- main card end -->

                                </div>
                                <div class="col-lg-8">

                                    <!-- content -->
                                    <div class="sw-content">

                                        <!-- stats -->
                                        <div class="row">
                                            <div class="col-lg-4">

                                                <!-- counter -->
                                                <div class="sw-counter-up sw-scroll-animation" data-scroll>
                                                    <div class="sw-counter-number"><span
                                                            class="sw-counter">5</span><span
                                                            class="sw-counter-symbol"></span></div>
                                                    <div class="sw-divider sw-mb-20 sw-mt-20"></div>
                                                    <div class="sw-label">Jaar ondernemend</div>
                                                </div>
                                                <!-- counter end -->

                                            </div>
                                            <div class="col-lg-4">

                                                <!-- counter -->
                                                <div class="sw-counter-up sw-scroll-animation" data-scroll>
                                                    <div class="sw-counter-number"><span
                                                            class="sw-counter">8</span><span
                                                            class="sw-counter-symbol"></span></div>
                                                    <div class="sw-divider sw-mb-20 sw-mt-20"></div>
                                                    <div class="sw-label">Jaar gevoetbald</div>
                                                </div>
                                                <!-- counter end -->

                                            </div>
                                            <div class="col-lg-4">

                                                <!-- counter -->
                                                <div class="sw-counter-up sw-scroll-animation" data-scroll>
                                                    <div class="sw-counter-number"><span
                                                            class="sw-counter">4</span><span
                                                            class="sw-counter-symbol"></span></div>
                                                    <div class="sw-divider sw-mb-20 sw-mt-20"></div>
                                                    <div class="sw-label">Engels certificaten</div>
                                                </div>
                                                <!-- counter end -->

                                            </div>
                                        </div>
                                        <!-- stats end -->

                                        <!-- portfolio -->
                                        <div class="row">
                                            <div class="col-lg-12">

                                                <!-- title -->
                                                <h5 class="sw-mb-40 sw-title-with-divider">Afgeronde projecten <span
                                                        data-number="01"></span></h5>

                                            </div>
                                            <div class="col-lg-6">

                                                <!-- portfolio item -->
                                                <a data-fancybox="portfolio"
                                                   href="{{ asset('assets/img/portfolio/DTP.png') }}"
                                                   alt="De-Telefoonprovider-logo"
                                                   class="sw-portfolio-item sw-scroll-animation" data-scroll>
                                                    <div class="sw-cover-frame">
                                                        <img class="sw-cover"
                                                             src="{{ asset('assets/img/portfolio/DTP-thumbnail.png') }}"
                                                             alt="De-Telefoonprovider-website">
                                                    </div>
                                                    <div class="sw-item-description">
                                                        <h6>De Telefoonprovider website</h6>
                                                        <div class="sw-zoom-icon">
                                                            <i class="fas fa-search-plus"></i>
                                                        </div>
                                                    </div>
                                                </a>
                                                <!-- portfolio item end -->

                                            </div>
                                            <div class="col-lg-6">

                                                <!-- portfolio item -->
                                                <a data-fancybox="portfolio"
                                                   href="{{ asset('assets/img/portfolio/RumIT.png') }}" alt="RumIT-logo"
                                                   class="sw-portfolio-item sw-scroll-animation" data-scroll>
                                                    <div class="sw-cover-frame">
                                                        <img class="sw-cover"
                                                             src="{{ asset('assets/img/portfolio/RumIT-thumbnail.png') }}"
                                                             alt="RumIT-website">
                                                    </div>
                                                    <div class="sw-item-description">
                                                        <h6>RumIT website</h6>
                                                        <div class="sw-zoom-icon">
                                                            <i class="fas fa-search-plus"></i>
                                                        </div>
                                                    </div>
                                                </a>
                                                <!-- portfolio item end -->

                                            </div>
                                        </div>
                                        <!-- portfolio end -->

                                        <!-- skills -->
                                        <div class="row">
                                            <div class="col-lg-12">

                                                <!-- title -->
                                                <h5 class="sw-mb-40 sw-title-with-divider">Taalbeheersing <span
                                                        data-number="02"></span></h5>

                                            </div>
                                            <div class="col-lg-6">

                                                <div class="sw-skill-card sw-scroll-animation" data-scroll>
                                                    <div class="sw-mb-40">
                                                        <div class="sw-skill-header">
                                                            <h6 class="sw-mb-15">Nederlands</h6>
                                                            <span class="sw-label text-white-50">Moedertaal</span>
                                                        </div>
                                                        <div class="sw-progressbar-frame">
                                                            <div class="sw-progressbar p100"></div>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <div class="sw-skill-header">
                                                            <h6 class="sw-mb-15">Engels</h6>
                                                            <span class="sw-label text-white-50">90%</span>
                                                        </div>
                                                        <div class="sw-progressbar-frame">
                                                            <div class="sw-progressbar p90"></div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-lg-6">

                                                <div class="sw-skill-card sw-scroll-animation" data-scroll>
                                                    <div class="sw-mb-40">
                                                        <div class="sw-skill-header">
                                                            <h6 class="sw-mb-15">Duits</h6>
                                                            <span class="sw-label text-white-50">55%</span>
                                                        </div>
                                                        <div class="sw-progressbar-frame">
                                                            <div class="sw-progressbar p50"></div>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <div class="sw-skill-header">
                                                            <h6 class="sw-mb-15">Chinees</h6>
                                                            <span class="sw-label text-white-50">20%</span>
                                                        </div>
                                                        <div class="sw-progressbar-frame">
                                                            <div class="sw-progressbar p20"></div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <!-- skills end -->

                                        <!-- history -->
                                        <div class="row">
                                            <div class="col-lg-12">

                                                <!-- title -->
                                                <h5 class="sw-mb-40 sw-title-with-divider">Mijn geschiedenis <span
                                                        data-number="03"></span></h5>

                                            </div>
                                            <div class="col-lg-6">

                                                <!-- timeline -->
                                                <div class="sw-timeline">
                                                    <div class="sw-timeline-item sw-scroll-animation" data-scroll>
                                                        <div class="sw-timeline-mark"></div>
                                                        <div class="sw-a sw-timeline-content">
                                                            <div class="sw-card-header">
                                                                <div class="sw-left-side">
                                                                    <h6 class="sw-mb-15">Middelbaar onderwijs -
                                                                        Haarlemmermeer Lyceum</h6>
                                                                    <div class="sw-text-sm sw-accent-color sw-mb-15">
                                                                        <i>sept 2015 - mei 2021</i></div>
                                                                </div>
                                                            </div>
                                                            <div class="sw-mb-20 text-white-50">Op de middelbareschool
                                                                heb ik op HAVO-niveau het vakkenpakket Economie &
                                                                Maatschappij (E&M) afgerond.
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="sw-timeline-item sw-scroll-animation" data-scroll>
                                                        <div class="sw-timeline-mark"></div>
                                                        <div class="sw-a sw-timeline-content">
                                                            <div class="sw-card-header">
                                                                <div class="sw-left-side">
                                                                    <h6 class="sw-mb-15">Hoger beroepsonderwijs -
                                                                        Hogeschool
                                                                        Rotterdam</h6>
                                                                    <div class="sw-text-sm sw-accent-color sw-mb-15">
                                                                        <i>sept 2021 - feb 2022</i></div>
                                                                </div>
                                                            </div>
                                                            <div class="sw-mb-20 text-white-50">In dit halve schooljaar
                                                                heb ik de
                                                                studie International Business aan de Hogeschool
                                                                Rotterdam gevolgd. Dit bleek uiteindelijk toch niks voor
                                                                mij te zijn, omdat mijn interesses op een ander gebied
                                                                lagen. Daarom ben ik er ook vrij snel mee gestopt.
                                                            </div>
                                                        </div>

                                                    </div>

                                                </div>
                                                <!-- timeline end -->
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="sw-timeline">
                                                    <div class="sw-timeline-item sw-scroll-animation" data-scroll>
                                                        <div class="sw-timeline-mark"></div>
                                                        <div class="sw-a sw-timeline-content">
                                                            <div class="sw-card-header">
                                                                <div class="sw-left-side">
                                                                    <h6 class="sw-mb-15">Hoger beroepsonderwijs - HZ
                                                                        University of
                                                                        Applied Sciences</h6>
                                                                    <div class="sw-text-sm sw-accent-color sw-mb-15">
                                                                        <i>sept 2022 - Heden</i></div>
                                                                </div>
                                                            </div>
                                                            <div class="text-white-50">In september 2022 ben ik begonnen
                                                                aan de studie HBO-ICT
                                                                aan de hogeschool HZ. Ik ben op het moment nog bezig met
                                                                deze studie.
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="sw-timeline-item sw-scroll-animation" data-scroll>
                                                        {{--                                                        <div class="sw-timeline-mark"></div>
                                                                                                                    <div class="sw-a sw-timeline-content">
                                                                                                                    <div class="sw-card-header">
                                                                                                                        <div class="sw-left-side">
                                                                                                                            <h6 class="sw-mb-15">Wat heb ik gedaan?</h6>
                                                                                                                            <div class="sw-text-sm sw-accent-color sw-mb-15">
                                                                                                                                <i>jan 2222 - maa 2222</i></div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                    <div>Uitleg over wat ik heb gedaan.
                                                                                                                    </div>
                                                                                                                </div>--}}
                                                    </div>

                                                    <div class="sw-timeline-item sw-scroll-animation" data-scroll>
                                                        {{--                                                        <div class="sw-timeline-mark"></div>
                                                                                                                    <div class="sw-a sw-timeline-content">
                                                                                                                    <div class="sw-card-header">
                                                                                                                        <div class="sw-left-side">
                                                                                                                            <h6 class="sw-mb-15">Wat heb ik gedaan?</h6>
                                                                                                                            <div class="sw-text-sm sw-accent-color sw-mb-15">
                                                                                                                                <i>okt 2222 - may 2222</i></div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                    <div>Uitleg over wat ik heb gedaan.
                                                                                                                    </div>
                                                                                                                </div>--}}

                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <!-- history end -->

                                        <!-- characteristics -->
                                        <div class="row">
                                            <div class="col-lg-12">

                                                <!-- title -->
                                                <h5 class="sw-mb-40 sw-title-with-divider">Mijn eigenschappen <span
                                                        data-number="04"></span></h5>

                                                <div class="sw-content-box-left">
                                                    <div class="ac-text text-left">
                                                        <p><h5>Een aantal goede- en slechte eigenschappen van mij
                                                            zijn:</h5>
                                                        <br>
                                                        <ul class="text-left text-white" style="list-style: none;">
                                                            <li>&#8226; Leergierig;</li>
                                                            <li>&#8226; goede communicatie;</li>
                                                            <li>&#8226; zelfstandig werken;</li>
                                                            <li>&#8226; flexibel;</li>
                                                            <li>&#8226; niet snel tevreden;</li>
                                                            <li>&#8226; soms té kritisch.</li>
                                                        </ul>
                                                        </p>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <!-- characteristics end -->

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
