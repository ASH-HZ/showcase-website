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
                            <img src="{{ asset('assets/img/hz_buiten.jpg') }}" alt="banner-image" class="sw-banner-cover"
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
                                            <h1>Dashboard</h1>
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
                                        <br><br><br><br>
                                        <div class="sw-content-box">
                                            <div class="container">
                                                <h2>Studie overzicht</h2>
                                                <br>
                                                <!-- Table -->
                                                <table class="table table-bordered text-white">
                                                    <thead>
                                                    <tr>
                                                        <th scope="col">Kwartaal</th>
                                                        <th scope="col">Cursus</th>
                                                        <th scope="col">EC's</th>
                                                        <th scope="col">Soort examen</th>
                                                        <th scope="col">Cijfer</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <!-- Quartile 1 -->
                                                    <tr>
                                                        <td rowspan="3">Kwartaal 1</td>
                                                        <td>Program and Career Orientation</td>
                                                        <td>2,5</td>
                                                        <td>Beoordeling</td>
                                                        <td>-</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Computer Science Basics</td>
                                                        <td>5</td>
                                                        <td>Schriftelijk</td>
                                                        <td>-</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Programming Basics</td>
                                                        <td>5</td>
                                                        <td>Case study</td>
                                                        <td>-</td>
                                                    </tr>
                                                    <!-- Quartile 1 end -->
                                                    <!-- Quartile 2 -->
                                                    <tr>
                                                        <td>Kwartaal 2</td>
                                                        <td>Object Oriented Programming</td>
                                                        <td>10</td>
                                                        <td>Case study (50%) & project (50%)</td>
                                                        <td>-</td>
                                                    </tr>
                                                    <!-- Quartile 2 end -->
                                                    <!-- Quartile 3 -->
                                                    <tr>
                                                        <td rowspan="2">Kwartaal 3</td>
                                                        <td>Framework Development 1</td>
                                                        <td>5</td>
                                                        <td>Case study</td>
                                                        <td>-</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Framework Project 1</td>
                                                        <td>7,5</td>
                                                        <td>Project (33%) & Case study exam (33%) & Report (33%)</td>
                                                        <td>-</td>
                                                    </tr>
                                                    <!-- Quartile 3 end -->
                                                    <!-- Quartile 4 -->
                                                    <tr>
                                                        <td>Kwartaal 4</td>
                                                        <td>Framework Project 2</td>
                                                        <td>10</td>
                                                        <td>Portfolio (50%) & Project (25%) & Beoordeling (25%)</td>
                                                        <td>-</td>
                                                    </tr>
                                                    <!-- Quartile 4 end -->
                                                    <!-- Quartile "year" -->
                                                    <tr>
                                                        <td>Kwartaal 'jaar'</td>
                                                        <td>Personal Professional Development</td>
                                                        <td>12,5</td>
                                                        <td>Portfolio</td>
                                                        <td>-</td>
                                                    </tr>
                                                    <!-- Quartile "year" end -->
                                                    <!-- Quartile "whenever" -->
                                                    <tr>
                                                        <td rowspan="2">Kwartaal ooit</td>
                                                        <td>Personality 1</td>
                                                        <td>1,25</td>
                                                        <td>Portfolio</td>
                                                        <td>-</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Personality 2</td>
                                                        <td>1,25</td>
                                                        <td>Portfolio</td>
                                                        <td>-</td>
                                                    </tr>
                                                    <!-- Quartile "whenever" end -->
                                                    </tbody>
                                                </table>
                                                <!-- Table end -->
                                            </div>
                                        </div>
                                        <br><br>
                                        <!-- NBSA boundry bar -->
                                        <div class="sw-content-box">
                                            <h5>NBSA grens</h5>
                                            <br>
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="0"
                                                     aria-valuemin="0" aria-valuemax="100">0%</div>
                                            </div>
                                        </div>
                                        <!-- NBSA boundry bar end -->
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
