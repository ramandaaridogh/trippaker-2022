@extends('layouts.master')

@section('title') {{ 'Dashboard' }} @endsection

@section('content')

<!-- Start Slider Area  -->
<div class="slide slide-style-2 slider-video-bg d-flex align-items-center justify-content-center" data-black-overlay="6">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <div class="inner text-start">
                    <h1 class="title">Indonesia <br> Liveaboard</h1>
                    <p class="description">
                        Business Modelling, Shipbuilding Design & consulting, Ship Construction, Construction Supervision, Equipment Sourcing & Business Arrangements.
                    </p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="video-inner mt_sm--30 mt_md--30">
                    <a class="video-popup theme-color play__btn" href="{{ URL::asset('assets/video/video-dashboard.mp4') }}"><span class="play-icon"></span></a>
                </div>
            </div>
        </div>
    </div>

    <div class="video-background">
        <span>
            <video muted="" autoplay="" playsinline="" loop="" poster="#">
                <source src="{{ URL::asset('assets/video/video-dashboard.mp4') }}"></video>
        </span>
    </div>
</div>
<!-- End Slider Area  -->

<!-- Start About Area  -->
<div class="about-area rn-section-gap bg_color--1">
    <div class="about-wrapper">
        <div class="container">
            <div class="row row--35 align-items-center">
                <div class="col-lg-5 col-md-12">
                    <div class="thumbnail">
                        <img class="w-100" src="assets/images/about/about-3.jpg" alt="About Images" />
                    </div>
                </div>
                <div class="col-lg-7 col-md-12">
                    <div class="about-inner inner">
                        <div class="section-title">
                            <h2 class="title">About</h2>
                            <p class="description">There are many variations of passages of Lorem Ipsum
                                available, but the majority have suffered alteration in some form, by
                                injected humour, or randomised words which dont look even slightly
                                believable. If you are going to use a passage of Lorem Ipsum,</p>
                        </div>
                        <div class="row mt--30 mt_sm--10">
                            <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                                <div class="about-us-list">
                                    <h3 class="title">Who we are</h3>
                                    <p>There are many vtions of passages of Lorem Ipsum available, but the
                                        majority have suffered.</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                                <div class="about-us-list">
                                    <h3 class="title">Who we are</h3>
                                    <p>There are many vtions of passages of Lorem Ipsum available, but the
                                        majority have suffered.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Start About Area  -->

<!-- Start Service Area  -->
<div class="rn-service-area ptb--80 bg_image bg_image--3">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-12">
                <div class="section-title text-start mt--30 mt_md--5 mt_mobile--5 mb_mobile--10">
                    <h2 class="title">Services</h2>
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                        suffered alteration.</p>
                    <div class="service-btn"><a class="btn-transparent rn-btn-dark" href="http://rainbowit.net/service"><span
                                class="text">Request Custom Service</span></a></div>
                </div>
            </div>
            <div class="col-lg-8 col-12 mt_md--50">
                <div class="row service-one-wrapper">

                    <!-- Start Single Service  -->
                    <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="single-service service__style--4">
                            <a href="service-details.html">
                                <div class="service">
                                    <div class="icon">
                                        <i data-feather="cast"></i>
                                    </div>
                                    <div class="content">
                                        <h3 class="title">Business Stratagy</h3>
                                        <p>I throw myself down among the tall grass by the stream as I lie
                                            close to
                                            the earth.</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- End Single Service  -->

                    <!-- Start Single Service  -->
                    <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="single-service service__style--4">
                            <a href="service-details.html">
                                <div class="service">
                                    <div class="icon">
                                        <i data-feather="layers"></i>
                                    </div>
                                    <div class="content">
                                        <h3 class="title">Website Development</h3>
                                        <p>I throw myself down among the tall grass by the stream as I lie
                                            close to
                                            the earth.</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- End Single Service  -->

                    <!-- Start Single Service  -->
                    <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="single-service service__style--4">
                            <a href="service-details.html">
                                <div class="service">
                                    <div class="icon">
                                        <i data-feather="users"></i>
                                    </div>
                                    <div class="content">
                                        <h3 class="title">Marketing & Reporting</h3>
                                        <p>I throw myself down among the tall grass by the stream as I lie
                                            close to
                                            the earth.</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- End Single Service  -->

                    <!-- Start Single Service  -->
                    <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="single-service service__style--4">
                            <a href="service-details.html">
                                <div class="service">
                                    <div class="icon">
                                        <i data-feather="monitor"></i>
                                    </div>
                                    <div class="content">
                                        <h3 class="title">Mobile Development</h3>
                                        <p>I throw myself down among the tall grass by the stream as I lie
                                            close to
                                            the earth.</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- End Single Service  -->

                </div>
            </div>
        </div>
    </div>
</div>
<!-- Start Service Area  -->

<!-- Start Portfolio Area  -->
<div class="rn-portfolio-area rn-section-gap bg_color--1">
    <div class="portfolio-sacousel-inner pb--30">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center mb--20 mb_sm--0 mb_md--0">
                        <h2 class="title">All Works</h2>
                        <p>There are many variations of passages of Lorem Ipsum available, <br /> but the
                            majority have suffered alteration.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Start Portfolio Activation  -->
        <div class="portfolio-slick-activation rn-slick-activation item-fluid rn-slick-dot mt--40 mt_sm--40" data-slick-options='{
                                "spaceBetween": 15,
                                "slidesToShow": 5,
                                "slidesToScroll": 1,
                                "arrows": true,
                                "infinite": true,
                                "dots": true
                            }' data-slick-responsive='[
                            {"breakpoint":1600, "settings": {"slidesToShow": 4}},
                            {"breakpoint":1200, "settings": {"slidesToShow": 3}},
                            {"breakpoint":890, "settings": {"slidesToShow": 3}},
                            {"breakpoint":590, "settings": {"slidesToShow": 2}},
                            {"breakpoint":480, "settings": {"slidesToShow": 1}}
                            ]'>

            <!-- Start Single Portfolio  -->
            <div class="portfolio">
                <div class="thumbnail-inner">
                    <div class="thumbnail image-2"></div>
                    <div class="bg-blr-image image-2"></div>
                </div>
                <div class="content">
                    <div class="inner">
                        <p>Development</p>
                        <h4><a href="portfolio-details.html">Getting tickets to the big show</a></h4>
                        <div class="portfolio-button">
                            <a class="rn-btn" href="portfolio-details.html">Case Study</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Single Portfolio  -->

            <!-- Start Single Portfolio  -->
            <div class="portfolio">
                <div class="thumbnail-inner">
                    <div class="thumbnail image-5"></div>
                    <div class="bg-blr-image image-5"></div>
                </div>
                <div class="content">
                    <div class="inner">
                        <p>Development</p>
                        <h4><a href="portfolio-details.html">Getting tickets to the big show</a></h4>
                        <div class="portfolio-button">
                            <a class="rn-btn" href="portfolio-details.html">Case Study</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Single Portfolio  -->

            <!-- Start Single Portfolio  -->
            <div class="portfolio">
                <div class="thumbnail-inner">
                    <div class="thumbnail image-6"></div>
                    <div class="bg-blr-image image-6"></div>
                </div>
                <div class="content">
                    <div class="inner">
                        <p>Development</p>
                        <h4><a href="portfolio-details.html">Getting tickets to the big show</a></h4>
                        <div class="portfolio-button">
                            <a class="rn-btn" href="portfolio-details.html">Case Study</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Single Portfolio  -->

            <!-- Start Single Portfolio  -->
            <div class="portfolio">
                <div class="thumbnail-inner">
                    <div class="thumbnail image-7"></div>
                    <div class="bg-blr-image image-7"></div>
                </div>
                <div class="content">
                    <div class="inner">
                        <p>Development</p>
                        <h4><a href="portfolio-details.html">Getting tickets to the big show</a></h4>
                        <div class="portfolio-button">
                            <a class="rn-btn" href="portfolio-details.html">Case Study</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Single Portfolio  -->

            <!-- Start Single Portfolio  -->
            <div class="portfolio">
                <div class="thumbnail-inner">
                    <div class="thumbnail image-8"></div>
                    <div class="bg-blr-image image-8"></div>
                </div>
                <div class="content">
                    <div class="inner">
                        <p>Development</p>
                        <h4><a href="portfolio-details.html">Getting tickets to the big show</a></h4>
                        <div class="portfolio-button">
                            <a class="rn-btn" href="portfolio-details.html">Case Study</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Single Portfolio  -->

            <!-- Start Single Portfolio  -->
            <div class="portfolio">
                <div class="thumbnail-inner">
                    <div class="thumbnail image-9"></div>
                    <div class="bg-blr-image image-9"></div>
                </div>
                <div class="content">
                    <div class="inner">
                        <p>Development</p>
                        <h4><a href="portfolio-details.html">Getting tickets to the big show</a></h4>
                        <div class="portfolio-button">
                            <a class="rn-btn" href="portfolio-details.html">Case Study</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Single Portfolio  -->
        </div>
        <!-- End Portfolio Activation  -->
    </div>
</div>
<!-- End Portfolio Area  -->

<!-- Start Counterup Area  -->
<div class="rn-counterup-area pt--25 pb--110 bg_color--1">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center">
                    <h3 class="fontWeight500">Our Fun Facts</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- Start Single Counterup  -->
            <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                <div class="rn-counterup counterup_style--1">
                    <h5 class="counter count">992</h5>
                    <p class="description">The standard chunk of Lorem Ipsum used since the 1500s is
                        reproduced below for those.</p>
                </div>
            </div>
            <!-- Start Single Counterup  -->

            <!-- Start Single Counterup  -->
            <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                <div class="rn-counterup counterup_style--1">
                    <h5 class="counter count">575</h5>
                    <p class="description">The standard chunk of Lorem Ipsum used since the 1500s is
                        reproduced below for those.</p>
                </div>
            </div>
            <!-- Start Single Counterup  -->

            <!-- Start Single Counterup  -->
            <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                <div class="rn-counterup counterup_style--1">
                    <h5 class="counter count">69</h5>
                    <p class="description">The standard chunk of Lorem Ipsum used since the 1500s is
                        reproduced below for those.</p>
                </div>
            </div>
            <!-- Start Single Counterup  -->
        </div>
    </div>
</div>
<!-- End Counterup Area  -->

<!-- Start Testimonial Area  -->
<div class="rn-testimonial-area rn-section-gap bg_color--5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- Start Tab Content  -->
                <div class="rn-testimonial-content tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="tab1-tab">
                        <div class="inner">
                            <p>Aklima The standard chunk of Lorem Ipsum used since the 1500s is reproduced
                                below for those interested. Sections Bonorum et Malorum original.</p>
                        </div>
                        <div class="author-info">
                            <h6><span>Fatima Asrafy </span> - COO, AMERIMAR ENTERPRISES, INC.</h6>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="tab2-tab">
                        <div class="inner">
                            <p>Aklima The standard chunk of Lorem Ipsum used since the 1500s is reproduced
                                below for those interested. Sections Bonorum et Malorum original.</p>
                        </div>
                        <div class="author-info">
                            <h6><span>Fatima Asrafy </span> - COO, AMERIMAR ENTERPRISES, INC.</h6>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab3" role="tabpanel" aria-labelledby="tab3-tab">
                        <div class="inner">
                            <p>Aklima The standard chunk of Lorem Ipsum used since the 1500s is reproduced
                                below for those interested. Sections Bonorum et Malorum original.</p>
                        </div>
                        <div class="author-info">
                            <h6><span>Fatima Asrafy </span> - COO, AMERIMAR ENTERPRISES, INC.</h6>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab4" role="tabpanel" aria-labelledby="tab4-tab">
                        <div class="inner">
                            <p>Aklima The standard chunk of Lorem Ipsum used since the 1500s is reproduced
                                below for those interested. Sections Bonorum et Malorum original.</p>
                        </div>
                        <div class="author-info">
                            <h6><span>Fatima Asrafy </span> - COO, AMERIMAR ENTERPRISES, INC.</h6>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab5" role="tabpanel" aria-labelledby="tab5-tab">
                        <div class="inner">
                            <p>Aklima The standard chunk of Lorem Ipsum used since the 1500s is reproduced
                                below for those interested. Sections Bonorum et Malorum original.</p>
                        </div>
                        <div class="author-info">
                            <h6><span>Fatima Asrafy </span> - COO, AMERIMAR ENTERPRISES, INC.</h6>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab6" role="tabpanel" aria-labelledby="tab6-tab">
                        <div class="inner">
                            <p>Aklima The standard chunk of Lorem Ipsum used since the 1500s is reproduced
                                below for those interested. Sections Bonorum et Malorum original.</p>
                        </div>
                        <div class="author-info">
                            <h6><span>Fatima Asrafy </span> - COO, AMERIMAR ENTERPRISES, INC.</h6>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab7" role="tabpanel" aria-labelledby="tab7-tab">
                        <div class="inner">
                            <p>Aklima The standard chunk of Lorem Ipsum used since the 1500s is reproduced
                                below for those interested. Sections Bonorum et Malorum original.</p>
                        </div>
                        <div class="author-info">
                            <h6><span>Fatima Asrafy </span> - COO, AMERIMAR ENTERPRISES, INC.</h6>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab8" role="tabpanel" aria-labelledby="tab8-tab">
                        <div class="inner">
                            <p>Aklima The standard chunk of Lorem Ipsum used since the 1500s is reproduced
                                below for those interested. Sections Bonorum et Malorum original.</p>
                        </div>
                        <div class="author-info">
                            <h6><span>Fatima Asrafy </span> - COO, AMERIMAR ENTERPRISES, INC.</h6>
                        </div>
                    </div>
                </div>
                <!-- End Tab Content  -->

                <!-- Start Tab Nav  -->
                <ul class="testimonial-thumb-wrapper nav nav-tabs" id="myTab" role="tablist">
                    <li>
                        <button class="active" id="tab1-tab" data-bs-toggle="tab" data-bs-target="#tab1" role="tab" type="button" aria-controls="tab1" aria-selected="true">
                            <div class="testimonial-thumbnai">
                                <div class="thumb">
                                    <img src="assets/images/client/testimonial-1.jpg" alt="Testimonial Images">
                                </div>
                            </div>
                        </button>
                    </li>

                    <li>
                        <button id="tab2-tab" data-bs-toggle="tab" data-bs-target="#tab2" role="tab" type="button" aria-controls="tab2" aria-selected="false">
                            <div class="testimonial-thumbnai">
                                <div class="thumb">
                                    <img src="assets/images/client/testimonial-2.jpg" alt="Testimonial Images">
                                </div>
                            </div>
                        </button>
                    </li>

                    <li>
                        <button id="tab3-tab" data-bs-toggle="tab" data-bs-target="#tab3" role="tab" type="button" aria-controls="tab3" aria-selected="false">
                            <div class="testimonial-thumbnai">
                                <div class="thumb">
                                    <img src="assets/images/client/testimonial-3.jpg" alt="Testimonial Images">
                                </div>
                            </div>
                        </button>
                    </li>

                    <li>
                        <button id="tab4-tab" data-bs-toggle="tab" data-bs-target="#tab4" role="tab" type="button" aria-controls="tab4" aria-selected="false">
                            <div class="testimonial-thumbnai">
                                <div class="thumb">
                                    <img src="assets/images/client/testimonial-4.jpg" alt="Testimonial Images">
                                </div>
                            </div>
                        </button>
                    </li>

                    <li>
                        <button id="tab5-tab" data-bs-toggle="tab" data-bs-target="#tab5" role="tab" type="button" aria-controls="tab5" aria-selected="false">
                            <div class="testimonial-thumbnai">
                                <div class="thumb">
                                    <img src="assets/images/client/testimonial-5.jpg" alt="Testimonial Images">
                                </div>
                            </div>
                        </button>
                    </li>

                    <li>
                        <button id="tab6-tab" data-bs-toggle="tab" data-bs-target="#tab6" role="tab" type="button" aria-controls="tab6" aria-selected="false">
                            <div class="testimonial-thumbnai">
                                <div class="thumb">
                                    <img src="assets/images/client/testimonial-6.jpg" alt="Testimonial Images">
                                </div>
                            </div>
                        </button>
                    </li>

                    <li>
                        <button id="tab7-tab" data-bs-toggle="tab" data-bs-target="#tab7" role="tab" type="button" aria-controls="tab7" aria-selected="false">
                            <div class="testimonial-thumbnai">
                                <div class="thumb">
                                    <img src="assets/images/client/testimonial-7.jpg" alt="Testimonial Images">
                                </div>
                            </div>
                        </button>
                    </li>

                    <li>
                        <button id="tab8-tab" data-bs-toggle="tab" data-bs-target="#tab8" role="tab" type="button" aria-controls="tab8" aria-selected="false">
                            <div class="testimonial-thumbnai">
                                <div class="thumb">
                                    <img src="assets/images/client/testimonial-8.jpg" alt="Testimonial Images">
                                </div>
                            </div>
                        </button>
                    </li>
                </ul>
                <!-- End Tab Content  -->
            </div>
        </div>
    </div>
</div>
<!-- Start Testimonial Area  -->

<!-- Start Blog Area  -->
<div class="rn-blog-area rn-section-gapTop bg_color--1">
    <div class="container">
        <div class="row align-items-end mb--20">
            <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="section-title text-start">
                    <h2>Latest News</h2>
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                        suffered alteration.</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="blog-btn text-start text-lg-end mt_sm--10 mt_md--10">
                    <a class="btn-transparent rn-btn-dark" href="blog.html"><span class="text">View All
                            News</span></a>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- Start Blog Area  -->
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="blog blog-style--1">
                    <div class="thumbnail">
                        <a href="blog-details.html">
                            <img class="w-100" src="assets/images/blog/blog-01.jpg" alt="Blog Images" />
                        </a>
                    </div>
                    <div class="content">
                        <p class="blogtype">Development</p>
                        <h4 class="title"><a href="blog-details.html">Getting tickets to the big show</a>
                        </h4>
                        <div class="blog-btn">
                            <a class="rn-btn text-white" href="blog-details.html">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Blog Area  -->

            <!-- Start Blog Area  -->
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="blog blog-style--1">
                    <div class="thumbnail">
                        <a href="blog-details.html">
                            <img class="w-100" src="assets/images/blog/blog-02.jpg" alt="Blog Images" />
                        </a>
                    </div>
                    <div class="content">
                        <p class="blogtype">Development</p>
                        <h4 class="title"><a href="blog-details.html">Getting tickets to the big show</a>
                        </h4>
                        <div class="blog-btn">
                            <a class="rn-btn text-white" href="blog-details.html">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Blog Area  -->

            <!-- Start Blog Area  -->
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="blog blog-style--1">
                    <div class="thumbnail">
                        <a href="blog-details.html">
                            <img class="w-100" src="assets/images/blog/blog-03.jpg" alt="Blog Images" />
                        </a>
                    </div>
                    <div class="content">
                        <p class="blogtype">Development</p>
                        <h4 class="title"><a href="blog-details.html">Getting tickets to the big show</a>
                        </h4>
                        <div class="blog-btn">
                            <a class="rn-btn text-white" href="blog-details.html">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Blog Area  -->

        </div>
    </div>
</div>
<!-- End Blog Area  -->

<!-- Start Brand Area -->
<div class="rn-brand-area brand-separation">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <ul class="brand-style-2">
                    <li>
                        <img src="assets/images/brand/brand-01.png" alt="Logo Images" />
                    </li>
                    <li>
                        <img src="assets/images/brand/brand-02.png" alt="Logo Images" />
                    </li>
                    <li>
                        <img src="assets/images/brand/brand-03.png" alt="Logo Images" />
                    </li>
                    <li>
                        <img src="assets/images/brand/brand-04.png" alt="Logo Images" />
                    </li>
                    <li>
                        <img src="assets/images/brand/brand-05.png" alt="Logo Images" />
                    </li>
                    <li>
                        <img src="assets/images/brand/brand-06.png" alt="Logo Images" />
                    </li>
                    <li>
                        <img src="assets/images/brand/brand-02.png" alt="Logo Images" />
                    </li>
                    <li>
                        <img src="assets/images/brand/brand-03.png" alt="Logo Images" />
                    </li>
                    <li>
                        <img src="assets/images/brand/brand-04.png" alt="Logo Images" />
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End Brand Area -->
