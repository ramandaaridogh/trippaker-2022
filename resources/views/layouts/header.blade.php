<header class="header-area formobile-menu header--transparent black-logo-version ">
    <div class="header-wrapper" id="header-wrapper">
        <div class="header-left">
            <div class="logo">
                <a href="index.html">
                    <img src="{{ URL::asset('assets/images/logo/logo-new-trans.png') }}" style="height: 80px;margin-left: 20px" alt="Indonesia Liveaboard">
                </a>
            </div>
        </div>
        <div class="header-right">
            <div class="mainmenunav d-lg-block">
                <!-- Start Mainmanu Nav -->
                <nav class="main-menu-navbar">
                    <ul class="mainmenu">
                        <li>
                            <a href="{{ url('/home') }}">Home</a>
                        </li>
                        <li>
                            <a href="{{ url('/service') }}">Service</a>
                        </li>
                        <li>
                            <a href="{{ route('about.index') }}">About</a>
                        </li>
                        <li>
                            <a href="{{ route('history.index') }}">History</a>
                        </li>
                        {{-- <li class="has-droupdown">
                            <a href="blog.html">Pages</a>
                            <ul class="submenu">
                                <li> <a href="blog.html">Blog List</a></li>
                                <li><a href="blog-details.html">Blog Details</a></li>
                                <li><a href="service.html">Service</a></li>
                                <li><a href="service-details.html">Service Details</a></li>
                                <li><a href="portfolio.html">Portfolio</a></li>
                                <li><a href="portfolio-details.html">Portfolio Details</a></li>
                                <li><a href="404.html">404 Page</a></li>
                            </ul>
                        </li>
                        <li class="has-droupdown">
                            <a href="#">Blocks</a>
                            <ul class="submenu">
                                <li><a href="portfolio.html">Portfolio</a></li>
                                <li><a href="team.html">Team</a></li>
                                <li><a href="service.html">Service</a></li>
                                <li><a href="video-popup.html">Video Popup</a></li>
                                <li><a href="progressbar.html">Progress Bar</a></li>
                                <li><a href="gallery.html">Gallery</a></li>
                                <li><a href="counterup.html">Counters</a></li>
                                <li><a href="blog.html">Blog List</a></li>
                                <li><a href="brand.html">Client Logo</a></li>
                                <li><a href="contact-form.html">Contact Form</a></li>
                                <li><a href="columns.html">Columns</a></li>
                                <li><a href="button.html">Button</a></li>
                                <li><a href="liststyle.html">List Style</a></li>
                                <li><a href="testimonial.html">Testimonial</a></li>
                                <li><a href="accordion.html">Accordion</a></li>
                                <li><a href="pricing-plan.html">Pricing Plan</a></li>
                            </ul>
                        </li> --}}
                        <li>
                            <a href="#">Contact</a>
                        </li>
                    </ul>
                </nav>
                <!-- End Mainmanu Nav -->

            </div>
            {{-- <div class="header-btn">
                <a class="rn-btn" href="#">
                    <span>buy now</span>
                </a>
            </div> --}}
            <!-- Start Humberger Menu  -->
            <div class="humberger-menu d-block d-lg-none pl--20">
                <span class="menutrigger text-white">
            <i data-feather="menu"></i>
        </span>
            </div>
            <!-- End Humberger Menu  -->
            <!-- Start Close Menu  -->
            <div class="close-menu d-block d-lg-none">
                <span class="closeTrigger">
            <i data-feather="x"></i>
        </span>
            </div>
            <!-- End Close Menu  -->
        </div>
    </div>
</header>
