@extends('layouts.app')
@section('page_title', 'Anthony Chan')
@section('page_description', 'HTML voor beginners blog artikel van de showcase website van Anthony Chan')

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
                            <img src="{{ asset('assets/img/blog/html.jpg') }}" alt="HTML-banner"
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
                                            <h1>HTML voor beginners</h1>
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

                                            <div class="mb-3">
                                                <h3 class="text-white">De basis van HTML-code</h3>
                                            </div>
                                            <br>
                                            <div class="ac-text">
                                                <p>Er zijn drie componenten die samen de basis vormen van HTML-code:
                                                    tags, elements en attributes. Wanneer je weet hoe elk van deze
                                                    componenten functioneren dan zou je geen problemen moeten hebben met
                                                    het schrijven en bewerken van HTML.</p>
                                                <br>
                                                <h4>HTML Tags</h4>
                                                <p>Het meest opvallende kenmerk van HTML-code is het gebruik van groter-
                                                    kleiner dan tekens, laten we ze voor het gemak 'punthaken' noemen.
                                                    Deze tekens (en de code erin) worden tags
                                                    genoemd.
                                                    <br><br>
                                                    Tags worden gebruikt om HTML-code te scheiden van gewone tekst.
                                                    <br><br>
                                                    Tekst tussen de punthaken wordt niet weergegeven in de browser. De
                                                    tekst tussen de punthaken wordt alleen gebruikt om de browser te
                                                    vertellen hoe gewone tekst tussen de openingstag (ook wel de
                                                    start-tag genoemd) en de afsluitende tag (ook wel de eindtag
                                                    genoemd) moet worden weergegeven of getransformeerd.
                                                    <br><br>
                                                    Tags komen meestal in paren voor, en het verschil tussen een
                                                    openingstag en een sluitingstag is dat het eerste symbool tussen de
                                                    haakjes van een afsluitende tag een schuine streep "/" -symbool is.
                                                    <br><br>
                                                    Hier is bijvoorbeeld een paar h1-tags (gebruikt om koptekst te
                                                    identificeren), met wat inhoud ertussen:
                                                    <br><br>
                                                    &lt;h1&gt;Dit is wat inhoud.&lt;/h1&gt;
                                                    <br><br>
                                                    In dit voorbeeld is de &lt;h1&gt; de openingstag en de &lt;/h1&gt;
                                                    de afsluitende
                                                    tag.</p>
                                                <br><br>
                                                <h4>HTML Elementen</h4>
                                                <p>Het volgende wat we gaan behandelen, zijn HTML-elementen.
                                                    <br><br>
                                                    Een element is een openingstag, een sluitingstag en alle inhoud die
                                                    tussen de twee tags zit.
                                                    <br><br>
                                                    Laten we eens kijken naar ons vorige voorbeeld van het gebruik van
                                                    vetgedrukte tags:
                                                    <br><br>
                                                    &lt;b&gt;Dit is wat tekst.&lt;/b&gt;
                                                    <br><br>
                                                    In dit voorbeeld is &lt;b&gt; de openingstag, &lt;/b&gt; de slottag
                                                    en 'Dit is
                                                    wat tekst'. is de inhoud. Als we alles samenvoegen, hebben we een
                                                    element.
                                                    <br><br>
                                                    Elementen zijn vergelijkbaar met de puzzelstukjes van HTML. Je neemt
                                                    een aantal elementen en past ze bij elkaar om een compleet beeld
                                                    te krijgen. In de meest basale vorm is een webpagina gewoon een
                                                    HTML-document dat is gevuld met volledige HTML-elementen.</p>
                                                <br><br>
                                                <h4>HTML Attributen</h4>
                                                <p>Het laatste stukje HTML-code waar we over moeten leren, zijn
                                                    attributen.
                                                    <br><br>
                                                    Attributen worden gebruikt om aanvullende informatie over een
                                                    element te definiëren. Ze bevinden zich in de openingstag en komen
                                                    meestal in naam/waarde-paren (name="value").
                                                    <br><br>
                                                    Alle HTML-elementen kunnen attributen hebben, maar voor de meeste
                                                    elementen gebruiken we ze alleen wanneer dat nodig is.
                                                    <br><br>
                                                    Attributen kunnen worden gebruikt om zaken te definiëren zoals de
                                                    hoogte en breedte van een afbeelding, de stijl van een element
                                                    (bijv. kleur, grootte, lettertype) en de taal van het document.
                                                    <br><br>
                                                    In dit voorbeeld wordt er een hyperlink gemaakt:
                                                    <br><br>
                                                    &lt;a href="www.google.com"&gt;Dit is wat tekst.&lt;/a&gt;
                                                    <br><br>
                                                    De ankertag wordt gebruikt om een hyperlink te maken en het
                                                    href-attribuut is om het linkadres te definiëren. Zonder het
                                                    href-attribuut kunt u nog steeds op de link klikken, maar gebeurt er
                                                    niets.
                                                    <br><br>
                                                    Er zijn drie hoofdrichtlijnen voor het gebruik van attributen. We
                                                    gebruiken het woord “richtlijnen”, omdat dit niet bepaald regels
                                                    zijn. Ze lijken meer op normen die bijna iedereen heeft gekozen te
                                                    volgen.
                                                    <br><br>
                                                <ol type="1">
                                                    <li> Hoewel u attributen in hoofdletters kunt schrijven, is het een
                                                        goed
                                                        idee om attributen alleen in kleine letters te schrijven.
                                                    </li>
                                                    <li> Hoewel het niet strikt noodzakelijk is, is het een goed idee om
                                                        aanhalingstekens rond de waarde te plaatsen om het gemakkelijker
                                                        te
                                                        kunnen identificeren.
                                                    </li>
                                                    <li> Hoewel u enkele aanhalingstekens (‘waarde’) kunt gebruiken, is
                                                        het
                                                        een goed idee om waarden tussen dubbele aanhalingstekens
                                                        ("waarde")
                                                        te plaatsen.
                                                    </li>
                                                </ol>
                                                <br>
                                                Dus als we alles wat we weten over tags, elementen en attributen
                                                samenvoegen, krijgen we een basissjabloon van hoe een element moet
                                                worden geschreven:
                                                <br><br>
                                                &lt;tag attribute=“value”&gt;Sommige inhoud&lt;/tag&gt;
                                                </p>
                                                <br><br>
                                                <p>Na het lezen van deze blogpost kan je bepaalde HTML-functies
                                                    identificeren. Je zou afbeeldingen, tabellen, lijsten en vele andere
                                                    HTML-elementen kunnen identificeren.

                                                    Wanneer je wat meer HTML-vaardigheden hebt opgebouwd, kan je de
                                                    volgende stap nemen: je website stylen met CSS.</p>
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
