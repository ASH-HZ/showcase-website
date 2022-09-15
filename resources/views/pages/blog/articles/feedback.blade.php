@extends('layouts.app')
@section('page_title', 'Anthony Chan')
@section('page_description', 'Feedback blog artikel van de showcase website van Anthony Chan')

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
                            <img src="{{ asset('assets/img/blog/feedback-2.png') }}" alt="Feedback-banner"
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
                                            <h1>Eerste feedback</h1>
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
                                                <h3 class="text-white">De ontvangen feedback</h3>
                                            </div>

                                            <div class="ac-text">
                                                <p>De feedback die ik heb ontvangen op basis van mijn ingeleverde 'wie
                                                    ben ik' opdracht was positief. Mij werd wel direct geadviseerd om
                                                    mijn thread (gemakzucht) zo snel mogelijk af te leren, omdat het wel
                                                    moeilijker gaat worden. Ook mijn uitstel gedrag kan mij dwars gaan
                                                    zitten. De vraag was dan ook welke manieren er zijn om daarmee om te
                                                    gaan. Het antwoord is heel simpel, maar soms wel moeilijk uit te
                                                    voeren; het vroeg beginnen aan de taken die ik heb voor school. Zo
                                                    heb ik de ruimte om bij moeilijkere taken nog hulp te vragen zonder
                                                    dat dit mij in tijdnood brengt.</p>
                                                <br>
                                                <p class="ac-text">
                                                    Ook gaf ik aan misschien zelf een bedrijf te willen starten na mijn
                                                    studie. En niet onterecht werd mij de vraag gesteld wat voor bedrijf
                                                    ik dan zou willen opzetten. Het antwoord daarop is natuurlijk een
                                                    bedrijf die zich bezig zal houden met de wereld van ICT.
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
