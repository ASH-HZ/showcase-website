@extends('layouts.app')
@section('page_title', 'Anthony Chan')
@section('page_description', 'FAQ pagina van de showcase website van Anthony Chan')

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
                                            <h1>Veelgestelde vragen</h1>
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
                                        <div class="sw-content-box-left">
                                            <div class="container">

                                                <!-- FAQ section -->
                                                <div class="accordion" id="sw-accordion">
                                                    <!-- FAQ item -->
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header" id="headingOne">
                                                            <button class="accordion-button collapsed" type="button"
                                                                    data-bs-toggle="collapse"
                                                                    data-bs-target="#collapseOne" aria-expanded="false"
                                                                    aria-controls="collapseOne">
                                                                <b>Hoe print je een document vanaf je laptop op het
                                                                    HZ?</b>
                                                            </button>
                                                        </h2>
                                                        <div id="collapseOne" class="accordion-collapse collapse"
                                                             aria-labelledby="headingOne"
                                                             data-bs-parent="#sw-accordion">
                                                            <div class="accordion-body">
                                                                <ul class="text-left" style="list-style: none;">
                                                                    <li>&#8226; Ga naar de website <a
                                                                            href="http://print.hz.nl" target="_blank">http://print.hz.nl</a>.
                                                                    </li>
                                                                    <li>&#8226; Voer je gebruikersnaam & wachtwoord van
                                                                        de HZ in. Klik vervolgens op <b>Aanmelden</b>.
                                                                    </li>
                                                                    <li>&#8226; Klik op <b>Browse...</b> en selecteer
                                                                        het bestand dat je wil afdrukken.
                                                                    </li>
                                                                    <li>&#8226; Klik op <b>Volgende</b>. <i>Herhaal de
                                                                            vorige stap als je meer documenten wil
                                                                            toevoegen.</i></li>
                                                                    <li>&#8226; Wacht tot het document verwerkt is en
                                                                        vink de optie <b>Geavanceerd</b> aan om aan te
                                                                        geven of je dubbelzijdig wil afdrukken of in
                                                                        zwart/wit.
                                                                    </li>
                                                                    <li>&#8226; Klik bij de opdracht(en) op de <b>HZ
                                                                            printer</b> of <b>HZ plotter</b>, hier wordt
                                                                        de opdracht heen gestuurd.
                                                                    </li>
                                                                </ul>
                                                                <p>Als de printopdracht gegeven is, meld je jezelf aan
                                                                    op
                                                                    de TouchID naast de printer met behulp van de HZ
                                                                    pas. Kies vervolgens voor de
                                                                    optie <b>Print / Afdrukken</b>.
                                                                    <br>
                                                                    Kies in het menu de printer of plotter waar de
                                                                    opdracht heen gestuurd is. Vervolgens krijg je te
                                                                    zien welke printopdrachten er gereed staan. Als er
                                                                    voldoende saldo op je printaccount staat worden de
                                                                    printopdrachten afgedrukt. Na het afdrukken druk op
                                                                    de TouchID op <b>Stop</b> en vervolgens
                                                                    <b>Logout</b>.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- FAQ item end -->
                                                    <!-- FAQ item -->
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header" id="headingTwo">
                                                            <button class="accordion-button collapsed" type="button"
                                                                    data-bs-toggle="collapse"
                                                                    data-bs-target="#collapseTwo" aria-expanded="false"
                                                                    aria-controls="collapseTwo">
                                                                <b>Hoe scan je een document in en stuur je het naar je
                                                                    laptop op het HZ?</b>
                                                            </button>
                                                        </h2>
                                                        <div id="collapseTwo" class="accordion-collapse collapse"
                                                             aria-labelledby="headingTwo"
                                                             data-bs-parent="#sw-accordion">
                                                            <div class="accordion-body">
                                                                <ul class="text-left" style="list-style: none;">
                                                                    <li>&#8226; Zorg ervoor dat je minimaal €0,07 tegoed
                                                                        hebt. Scannen is gratis maar dit bedrag (of
                                                                        hoger) moet op op je HZ pas staan.
                                                                    </li>
                                                                    <li>&#8226; Meld jezelf aan op de TouchID naast de
                                                                        printer met behulp van de HZ pas.
                                                                    </li>
                                                                    <li>&#8226; Kies in het TouchID menu voor de optie
                                                                        Scanning - Scan.
                                                                    </li>
                                                                    <li>&#8226; Leg de originele(n) op de feeder of
                                                                        glazen plaat.
                                                                    </li>
                                                                    <li>&#8226; Druk op <b>Scan and Send.</b></li>
                                                                    <li>&#8226; Druk op <b>Scan to me.</b></li>
                                                                    <li>&#8226; Druk op <b>Yes</b></li>
                                                                    <li>&#8226; Druk op de <b>Start knop</b></li>
                                                                    <li>&#8226; Druk op de groene <b>Start</b> knop op
                                                                        de printer om pagina voor pagina te scannen. Als
                                                                        dit gereed is druk dan op <b>Start Sending</b>.
                                                                    </li>
                                                                    <li>&#8226; Na het scannen druk op de TouchID op <b>Stop</b>
                                                                        en vervolgens <b>Logout</b>.
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- FAQ item end -->
                                                    <!-- FAQ item -->
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header" id="headingThree">
                                                            <button class="accordion-button collapsed" type="button"
                                                                    data-bs-toggle="collapse"
                                                                    data-bs-target="#collapseThree"
                                                                    aria-expanded="false" aria-controls="collapseThree">
                                                                <b>Waar kan ik de laatste instructies vinden over wat te
                                                                    doen als je ziek bent / symptomen van COVID
                                                                    vertoont?</b>
                                                            </button>
                                                        </h2>
                                                        <div id="collapseThree" class="accordion-collapse collapse"
                                                             aria-labelledby="headingThree"
                                                             data-bs-parent="#sw-accordion">
                                                            <div class="accordion-body">
                                                                Ga naar de website <a
                                                                    href="https://hz.nl/actualiteiten/coronavirus"
                                                                    target="_blank">https://hz.nl/actualiteiten/coronavirus</a>.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- FAQ item end -->
                                                    <!-- FAQ item -->
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header" id="headingFour">
                                                            <button class="accordion-button collapsed" type="button"
                                                                    data-bs-toggle="collapse"
                                                                    data-bs-target="#collapseFour"
                                                                    aria-expanded="false" aria-controls="collapseFour">
                                                                <b>Hoe reserveer je een lokaal / projectruimte?</b>
                                                            </button>
                                                        </h2>
                                                        <div id="collapseFour" class="accordion-collapse collapse"
                                                             aria-labelledby="headingFour"
                                                             data-bs-parent="#sw-accordion">
                                                            <div class="accordion-body">
                                                                Het roosteren van een lokaal op locatie Het Groene Woud
                                                                (Middelburg) kan via de Self Service Portal:
                                                                <a
                                                                    href="https://topdesk.hz.nl/tas/public/ssp/content/page/locationreservationplanner"
                                                                    target="_blank">https://topdesk.hz.nl/tas/public/ssp/content/page/locationreservationplanner</a>.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- FAQ item end -->
                                                    <!-- FAQ item -->
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header" id="headingFive">
                                                            <button class="accordion-button collapsed" type="button"
                                                                    data-bs-toggle="collapse"
                                                                    data-bs-target="#collapseFive"
                                                                    aria-expanded="false" aria-controls="collapseFive">
                                                                <b>Wat zijn de instructies als u uw auto wilt parkeren
                                                                    op
                                                                    de HZ-parkeerplaats?</b>
                                                            </button>
                                                        </h2>
                                                        <div id="collapseFive" class="accordion-collapse collapse"
                                                             aria-labelledby="headingFive"
                                                             data-bs-parent="#sw-accordion">
                                                            <div class="accordion-body">
                                                                <p>Wanneer je voor de slagboom staat van de
                                                                    HZ-parkeerplaats, houd je studentenpas voor de
                                                                    scanner en de slagboom zal omhoog gaan.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- FAQ item end -->
                                                    <!-- FAQ item -->
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header" id="headingSix">
                                                            <button class="accordion-button collapsed" type="button"
                                                                    data-bs-toggle="collapse"
                                                                    data-bs-target="#collapseSix"
                                                                    aria-expanded="false" aria-controls="collapseSix">
                                                                <b>Hoe kan ik iets kopen (bijvoorbeeld als ik me aanmeld
                                                                    voor het ICT-introductie event op vrijdag 16/09) op
                                                                    de
                                                                    HZ-webshop?</b>
                                                            </button>
                                                        </h2>
                                                        <div id="collapseSix" class="accordion-collapse collapse"
                                                             aria-labelledby="headingSix"
                                                             data-bs-parent="#sw-accordion">
                                                            <div class="accordion-body">
                                                                <ul class="text-left" style="list-style: none;">
                                                                    <li>&#8226; Klik op de gewenste product(en),
                                                                        dienst(en) of activiteit(en).
                                                                    </li>
                                                                    <li>&#8226; Voer de benodigde informatie in.
                                                                    </li>
                                                                    <li>&#8226; Klik op <b>TOEVOEGEN AAN WINKELWAGEN</b>.
                                                                    </li>
                                                                    <li>&#8226; Ga naar je winkelwagen door op <b>WINKELWAGEN</b>
                                                                        te klikken in het navigatie menu.
                                                                    </li>
                                                                    <li>&#8226; Klik op <b>AFREKENEN</b></li>
                                                                    <li>&#8226; Kies uw gewenste betaalmethode en klik
                                                                        op <b>VOLGENDE</b>.
                                                                    </li>
                                                                    <li>&#8226; Bij IDeal, kies uw bank en klik op <b>BEVESTIGEN</b>
                                                                    </li>
                                                                    <li>&#8226; Bij PayPal, klik op <b>BEVESTIGEN</b>
                                                                    </li>
                                                                    <li>&#8226; Reken af.
                                                                    </li>
                                                                    <li>&#8226; Gefeliciteerd, u heeft uw product(en),
                                                                        dienst(en) en/of activiteit(en) gekocht.
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- FAQ item end -->
                                                </div>
                                                <!-- FAQ end -->
                                            </div>
                                        </div>
                                        <br><br><br><br><br><br><br><br>
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
