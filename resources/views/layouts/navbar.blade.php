{{--
<!-- top bar -->
<header>
    <div class="top-bar">
        <div class="container">

            <div class="tb-left-side">
                <!-- logo -->
                <a href="{{ route('pages.index') }}" class="logo-frame">
                    <img src=" {{ asset('assets/img/hz_logo.png') }}">
                </a>
                <!-- logo end -->
            </div>
        </div>
        <!-- logo end -->
    </div>
    <div class="tb-right-side">

        <!-- menu -->
        <div class="tb-menu">
            <nav>
                <ul>
                    <li id="home-link" class="current-item">
                        <a href="#home-triger" data-scroll-to="#home-triger" data-scroll-offset="-10">Home</a>
                    </li>
                    <li id="about-link">
                        <a href="#about-triger" data-scroll-to="#about-triger" data-scroll-offset="-130">Profiel</a>
                    </li>
                    <li id="portfolio-link">
                        <a href="#portfolio-triger" data-scroll-to="#portfolio-triger"
                           data-scroll-offset="-130">Dashboard</a>
                    </li>
                    <li id="resume-link">
                        <a href="#resume-triger" data-scroll-to="#resume-triger"
                           data-scroll-offset="-130">FAQ</a>
                    </li>
                    <li id="contact-link">
                        <a href="#contact-triger" data-scroll-to="#contact-triger"
                           data-scroll-offset="-130">Blog</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    <div class="tb-menu-btn"><span></span></div>
</header>
<!-- top bar end -->
--}}

<header>
    <div class="top-bar">
        <div class="container">
            <div class="tb-left-side">
                <!-- logo -->
                <a href="{{ route('pages.index') }}" class="logo-frame">
                    <img src=" {{ asset('assets/img/hz_logo.png') }}">
                </a>
                <!-- logo end -->
            </div>
            <div class="tb-right-side">

                <!-- menu -->
                <div class="tb-menu">
                    <nav>
                        <ul>
                            <li id="home-link" class="current-item">
                                <a href="#home-triger" data-scroll-to="#home-triger" data-scroll-offset="-10">Home</a>
                            </li>
                            <li id="about-link">
                                <a href="#about-triger" data-scroll-to="#about-triger" data-scroll-offset="-130">Profiel</a>
                            </li>
                            <li id="portfolio-link">
                                <a href="#portfolio-triger" data-scroll-to="#portfolio-triger" data-scroll-offset="-130">Dashboard</a>
                            </li>
                            <li id="resume-link">
                                <a href="#resume-triger" data-scroll-to="#resume-triger" data-scroll-offset="-130">FAQ</a>
                            </li>
                            <li id="contact-link">
                                <a href="#contact-triger" data-scroll-to="#contact-triger" data-scroll-offset="-130">Blog</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <!-- menu end -->
            </div>
            <div class="trm-menu-btn"><span></span></div>
        </div>
    </div>
</header>
