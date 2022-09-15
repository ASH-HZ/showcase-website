<header>
    <div class="top-bar">
        <div class="container">
            <div class="tb-left-side">
                <!-- Aside menu -->
                <div class="row">
                    <div class="col-1 d-flex justify-content-center">
                        <div id="sw-sidenav" class="sidenav">
                            <a href="https://hz.nl/uploads/documents/1.4-Over-de-HZ/1.4.3.-Regelingen-en-documenten/NL/5.-Onderwijs-examenregelingen/Onderwijs-en-examenregeling/OER-HZ-Bacheloropleiding-voltijd-2022-2023-DEF-13-juni.pdf">Onderwijs-
                                en examenregeling HZ 2022-2023</a>
                            <a href="https://hz.nl/uploads/documents/1.4-Over-de-HZ/1.4.3.-Regelingen-en-documenten/OERS/2022-2023/IR-CER-HZ-B-HBO-ICT-full-time-2022-2023-DEF.pdf">Uitvoeringsregelingen
                                2022-2013</a>
                            <a href="https://learn.hz.nl/course/view.php?id=23602&sectionid=260754#section-1">Showcase
                                website Learn omgeving</a>
                            <a href="https://teams.microsoft.com/l/team/19%3a827654897ab746089c081f24aff1c984%40thread.skype/conversations?groupId=337e8cca-f67d-4132-9fa9-b0c761bbeb94&tenantId=4c16deb3-342d-4fca-bcd5-b1429308034c">Teams
                                omgeving HBO-ICT</a>
                            <a href="https://hz.osiris-student.nl/#/voortgang/">Studievoortgang</a>
                            <a href="hhttps://github.com/HZ-HBO-ICT">Github omgeving HZ HBO-ICT</a>
                        </div>
                    </div>
                </div>
                <!-- Navbar -->
                <nav class="navbar">
                    <!-- Collapse button -->
                    <button class="navbar-toggler hamburger-button" type="button" data-toggle="collapse"
                            aria-expanded="false" aria-label="Toggle navigation" onclick="Nav()" style="z-index: 2">
                        <div class="animated-icon"><span></span><span></span><span></span></div>
                    </button>
                </nav>
                <!-- Navbar end -->
                <!-- Aside menu end -->

                <!-- logo -->
                <a href="{{ route('pages.index') }}" class="logo-frame">
                    <img src=" {{ asset('assets/img/hz_logo.png') }}" alt="hz-logo">
                </a>
                <!-- logo end -->
            </div>
            <div class="tb-right-side">

                <!-- menu -->
                <div class="tb-menu">
                    <nav>
                        <ul>
                            <li class=" {{ '/' == request()->path() ? 'current-item' : ''}}">
                                <a href="/">Home</a>
                            </li>
                            <li class=" {{ 'profile' == request()->path() ? 'current-item' : ''}}">
                                <a href="/profile">Profiel</a>
                            </li>
                            <li class=" {{ 'dashboard' == request()->path() ? 'current-item' : ''}}">
                                <a href="/dashboard">Dashboard</a>
                            </li>
                            <li class=" {{ 'faq' == request()->path() ? 'current-item' : ''}}">
                                <a href="/faq">FAQ</a>
                            </li>
                            <li class=" {{ 'blog' == request()->path() ? 'current-item' : ''}}">
                                <a href="/blog">Blog</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <!-- menu end -->

            </div>
        </div>
    </div>
</header>
