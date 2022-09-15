@extends('layouts.app')
@section('page_title', 'Anthony Chan')
@section('page_description', 'SWOT blog artikel van de showcase website van Anthony Chan')

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
                            <img src="{{ asset('assets/img/blog/swot-analyse-2.jpg') }}" alt="SWOT-banner"
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
                                            <h1>SWOT-Analyse</h1>
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
                                                <h3 class="text-white">Persoonlijke SWOT-Analyse</h3>
                                            </div>

                                            <div class="ac-text">
                                                <p>Bij het maken van een persoonlijke SWOT-analyse denk je na over wat
                                                    je sterke en zwakke punten zijn en bekijk je ook welke kansen en
                                                    bedreigingen je ziet bij het ondernemen van een activiteit.</p>
                                                <br>
                                                <p class="ac-text">
                                                    Na even goed nagedacht te hebben heb ik het volgende bij mijn SWOT-analyse ingevuld:
                                                    <br><br>
                                                <ul style="list-style: none;">
                                                    <li>&#8226; Strengths; doorzettingsvermogen</li>
                                                    <li>&#8226; Weaknesses; uitstellen van taken</li>
                                                    <li>&#8226; Opportunities; het opdoen van (nieuwe) kennis</li>
                                                    <li>&#8226; Threats; gemakzucht</li>
                                                </ul>
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
