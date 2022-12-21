@extends('layouts.website')
@section('title','sr-home-page')
@push('web-css')

@endpush
@section('website')


<!-- hero slider -->
<section class="hero-section overlay bg-cover" data-background="{{asset('website')}}/images/banner/banner.jpg">
    <div class="container">
        <div class="hero-slider">
            <!-- slider item -->
            <div class="hero-slider-item">
                <div class="row">
                    <div class="col-md-8">
                        <h1 class="text-white" data-animation-out="fadeOutRight" data-delay-out="5"
                            data-duration-in=".3" data-animation-in="fadeInLeft" data-delay-in=".1">We Connect
                            Brands
                            With People & Community</h1>
                        <p class="text-muted mb-4" data-animation-out="fadeOutRight" data-delay-out="5"
                            data-duration-in=".3" data-animation-in="fadeInLeft" data-delay-in=".4">
                            Our portfolio of brands are connecting
                            millions of people globally per year with expert
                            advice and information when it’s needed most.
                        </p>
                        <a href="contact.html" class="btn btn-primary" data-animation-out="fadeOutRight"
                            data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInLeft"
                            data-delay-in=".7">Contact Us</a>
                    </div>
                </div>
            </div>
            <!-- slider item -->
            <div class="hero-slider-item">
                <div class="row">
                    <div class="col-md-8">
                        <h1 class="text-white" data-animation-out="fadeOutUp" data-delay-out="5" data-duration-in=".3"
                            data-animation-in="fadeInDown" data-delay-in=".1">Build your
                            Software and start Business</h1>
                        <p class="text-muted mb-4" data-animation-out="fadeOutUp" data-delay-out="5"
                            data-duration-in=".3" data-animation-in="fadeInDown" data-delay-in=".4">
                            Our portfolio of brands are connecting
                            millions of people globally per year with expert
                            advice and information when it’s needed most.</p>
                        <a href="contact.html" class="btn btn-primary" data-animation-out="fadeOutUp" data-delay-out="5"
                            data-duration-in=".3" data-animation-in="fadeInDown" data-delay-in=".7">Contact Us</a>
                    </div>
                </div>
            </div>
            <!-- slider item -->
            <div class="hero-slider-item">
                <div class="row">
                    <div class="col-md-8">
                        <h1 class="text-white" data-animation-out="fadeOutDown" data-delay-out="5" data-duration-in=".3"
                            data-animation-in="fadeInUp" data-delay-in=".1">Your bright future
                            is our mission</h1>
                        <p class="text-muted mb-4" data-animation-out="fadeOutDown" data-delay-out="5"
                            data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".4">Our portfolio of
                            brands are connecting
                            millions of people globally per year with expert
                            advice and information when it’s needed most.</p>
                        <a href="contact.html" class="btn btn-primary" data-animation-out="fadeOutDown"
                            data-delay-out="5" data-duration-in=".3" data-animation-in="zoomIn"
                            data-delay-in=".7">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /hero slider -->

<!-- banner-feature -->
<section class="bg-gray overflow-md-hidden">
    <div class="container-fluid p-0">
        <div class="row no-gutters">
            <div class="col-xl-4 col-lg-5 align-self-end">
                <img class="img-fluid w-100" src="{{asset('website')}}/images/banner/banner-feature.png" alt="banner-feature">
            </div>
            <div class="col-xl-8 col-lg-7">
                <div class="row feature-blocks bg-gray justify-content-between">
                    <div class="col-sm-6 col-xl-5 mb-xl-5 mb-lg-3 mb-4 text-center text-sm-left">
                        <i class="ti-book mb-xl-4 mb-lg-3 mb-4 feature-icon"></i>
                        <h3 class="mb-xl-4 mb-lg-3 mb-4">Offer News</h3>
                        <p>We will serve you best quality products with best price.so
                            stay with Sr Software Technology.
                        </p>
                    </div>
                    <div class="col-sm-6 col-xl-5 mb-xl-5 mb-lg-3 mb-4 text-center text-sm-left">
                        <i class="ti-blackboard mb-xl-4 mb-lg-3 mb-4 feature-icon"></i>
                        <h3 class="mb-xl-4 mb-lg-3 mb-4">Our Vision</h3>
                        <p>SR Institute Of Software Technology was established in 7th feb 2018. We are trying to
                            extends our IT suport in Bangladesh
                        </p>
                    </div>
                    <div class="col-sm-6 col-xl-5 mb-xl-5 mb-lg-3 mb-4 text-center text-sm-left">
                        <i class="ti-agenda mb-xl-4 mb-lg-3 mb-4 feature-icon"></i>
                        <h3 class="mb-xl-4 mb-lg-3 mb-4">Our Achievements</h3>
                        <p>We started our business and we got many achivment already.
                            we got many company as our partner like Basis , Bacco as our .
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /banner-feature -->

<!-- about us -->
<section class="section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 order-2 order-md-1">
                <h2 class="section-title">About SR Institute of Software Techonology</h2>
                <p>SR Institute Of Software Technology was established in 7th Feb of 2018. In pursuit of actively participating in the quest of making a prosperous Bangladesh, SR Institute Of Software Technology has
                    strived
                    to provide high-quality, Through successful implementation of international best practices like
                    the
                    BOOT & SaaS model in the government and private sectors, SR Institute Of Software Thechnology
                    has
                    established itself as a role model for
                    the IT industry of Bangladesh. SR Institute Of Software Thechnology has strong domain knowledge
                    in areas
                    like Banking, Microfinance,
                    Port & Logistics and Bioinformatics.
                </p>
                <p> Apart from its own developed products, SR Institute Of Software Thechnology has successfully
                    completed several large-scale IT implementation projects in the country. Sr Institute of
                    software
                    thechnology had also played an
                    instrumental part in the successful Jute Genome sequencing project. Since its inception in 1998
                    Sr Institute
                    of software thechnology has
                    been committed to providing quality services to its valued customers.</p>
                <p>ADDRESS:<br>
                    Mohammadia Supper Market (3nd Floor).<br>
                    4 No Tollabag, Sobahanbag, (Opposit of A.R Plaza).<br>
                    Mirpur Road, Dhanmonddi Dhaka-1207</p>
                <a href="" class="btn btn-primary-outline">Learn more</a>
            </div>
            <div class="col-md-6 order-1 order-md-2 mb-4 mb-md-0">
                <img class="img-fluid w-100" src="{{asset('website')}}/images/about/about-us.jpg" alt="about image">
            </div>
        </div>
    </div>
</section>
<!-- /about us -->

<!-- services -->
<section class="section-sm">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="d-flex align-items-center section-title justify-content-between">
                    <h2 class="mb-0 text-nowrap mr-3">Our Services</h2>
                    <div class="border-top w-100 border-primary d-none d-sm-block"></div>
                </div>
            </div>
        </div>
        <!-- course list -->
        <div class="row justify-content-center">
            <!-- course item -->
            <div class="col-lg-4 col-sm-6 mb-5">
                <div class="card p-0 border-primary rounded-0 hover-shadow">
                    <img class="card-img-top rounded-0" src="{{asset('website')}}/images/courses/course-1.jpg" alt="course thumb">
                    <div class="card-body">
                        <ul class="list-inline mb-2">
                            <li class="list-inline-item"><i class="ti-calendar mr-1 text-color"></i>02-5-2022</li>
                            <li class="list-inline-item badge badge-primary"><a class="text-white" href="#">Standard</a>
                            </li>
                        </ul>
                        <a href="web-design-developmet.html">
                            <h4 class="card-title">Static Website</h4>
                        </a>
                        <p class="card-text mb-4">SR Institute of Software Techonology will support your business
                            growth
                            customizing the search and content
                            development based of your business..</p>
                        <a href="web-design-developmet.html" class="btn btn-primary btn-sm">View Details</a>
                    </div>
                </div>
            </div>
            <!-- course item -->
            <div class="col-lg-4 col-sm-6 mb-5">
                <div class="card p-0 border-primary rounded-0 hover-shadow">
                    <img class="card-img-top rounded-0" src="{{asset('website')}}/images/courses/course-2.jpg" alt="course thumb">
                    <div class="card-body">
                        <ul class="list-inline mb-2">
                            <li class="list-inline-item"><i class="ti-calendar mr-1 text-color"></i>06-06-2022</li>
                            <li class="list-inline-item"><a class="badge badge-secondary" href="#">Basic</a></li>
                        </ul>
                        <a href="seo-markating.html">
                            <h4 class="card-title">SEO & Digital Marketing Plan</h4>
                        </a>
                        <p class="card-text mb-4">SR Institute of Software Techonology will support your business
                            growth
                            customizing the search and content
                            development based of your business...</p>
                        <a href="seo-markating.html" class="btn btn-primary btn-sm">View Details</a>
                    </div>
                </div>
            </div>
            <!-- course item -->
            <div class="col-lg-4 col-sm-6 mb-5">
                <div class="card p-0 border-primary rounded-0 hover-shadow">
                    <img class="card-img-top rounded-0" src="{{asset('website')}}/images/courses/course-3.jpg" alt="course thumb">
                    <div class="card-body">
                        <ul class="list-inline mb-2">
                            <li class="list-inline-item"><i class="ti-calendar mr-1 text-color"></i>22-05-2022</li>
                            <li class="list-inline-item"><a class="badge badge-warning" href="#">Popular</a></li>
                        </ul>
                        <a href="software_dev.html">
                            <h4 class="card-title">Custom Software Development</h4>
                        </a>
                        <p class="card-text mb-4"> SR Institute of Software Techonology will support your business
                            growth
                            customizing the search and content
                            development based of your business..</p>
                        <a href="software_dev.html" class="btn btn-primary btn-sm">View Details</a>
                    </div>
                </div>
            </div>
            <!-- course item -->
            <div class="col-lg-4 col-sm-6 mb-5">
                <div class="card p-0 border-primary rounded-0 hover-shadow">
                    <img class="card-img-top rounded-0" src="{{asset('website')}}/images/courses/course-4.jpg" alt="course thumb">
                    <div class="card-body">
                        <ul class="list-inline mb-2">
                            <li class="list-inline-item"><i class="ti-calendar mr-1 text-color"></i>07-04-2022</li>
                            <li class="list-inline-item"><a class="badge badge-danger" href="#">Demanding</a></li>
                        </ul>
                        <a href="ui-ux.html">
                            <h4 class="card-title">UI/UX Design</h4>
                        </a>
                        <p class="card-text mb-4"> SR Institute of Software Techonology will support your business
                            growth
                            customizing the search and content
                            development based of your business.</p>
                        <a href="ui-ux.html" class="btn btn-primary btn-sm">View Details</a>
                    </div>
                </div>
            </div>
            <!-- course item -->
            <div class="col-lg-4 col-sm-6 mb-5">
                <div class="card p-0 border-primary rounded-0 hover-shadow">
                    <img class="card-img-top rounded-0" src="{{asset('website')}}/images/courses/course-5.jpg" alt="course thumb">
                    <div class="card-body">
                        <ul class="list-inline mb-2">
                            <li class="list-inline-item"><i class="ti-calendar mr-1 text-color"></i>02-14-2018</li>
                            <li class="list-inline-item"><a class="badge badge-primary" href="#">Basic</a></li>
                        </ul>
                        <a href="ui-ux.html">
                            <h4 class="card-title">Branding Design</h4>
                        </a>
                        <p class="card-text mb-4">SR Institute of Software Techonology will support your business
                            growth
                            customizing the search and content
                            development based of your business.</p>
                        <a href="ui-ux.html" class="btn btn-primary btn-sm">View Details</a>
                    </div>
                </div>
            </div>
            <!-- course item -->
            <div class="col-lg-4 col-sm-6 mb-5">
                <div class="card p-0 border-primary rounded-0 hover-shadow">
                    <img class="card-img-top rounded-0" src="{{asset('website')}}/images/courses/course-6.jpg" alt="course thumb">
                    <div class="card-body">
                        <ul class="list-inline mb-2">
                            <li class="list-inline-item"><i class="ti-calendar mr-1 text-color"></i>02-14-2018</li>
                            <li class="list-inline-item"><a class="badge badge-warning" href="#">popular</a></li>
                        </ul>
                        <a href="custom_sdev.html">
                            <h4 class="card-title">Custom Software Development</h4>
                        </a>
                        <p class="card-text mb-4">SR Institute of Software Techonology will support your business
                            growth
                            customizing the search and content
                            development based of your business.</p>
                        <a href="custom_sdev.html" class="btn btn-primary btn-sm">View Details</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /course list -->
        <!-- mobile see all button -->
        <div class="row">
            <div class="col-12 text-center">
                <a href="courses.html" class="btn btn-sm btn-primary-outline d-sm-none d-inline-block">sell all</a>
            </div>
        </div>
    </div>
</section>
<!-- /services -->

<!-- cta -->
<section class="section bg-primary">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h6 class="text-white font-secondary mb-0">Click to Join the Advance Workshop</h6>
                <h2 class="section-title text-white">Training In Advannce Networking</h2>
                <a href="contact.html" class="btn btn-secondary">join now</a>
            </div>
        </div>
    </div>
</section>
<!-- /cta -->

<!-- success story -->
<section class="section bg-cover" data-background="{{asset('website')}}/images/backgrounds/success-story.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-sm-4 position-relative success-video">
                <a class="play-btn venobox" href="https://youtu.be/nA1Aqp0sPQo" data-vbtype="video">
                    <i class="ti-control-play"></i>
                </a>
            </div>
            <div class="col-lg-6 col-sm-8">
                <div class="bg-white p-5">
                    <h2 class="section-title">Success Stories</h2>
                    <p>As a leading company in information technology, consultancy, and business process services,
                        we leverage
                        the power of innovative technology that helps our clients develop and end up making
                        themselves successful
                        in the digital world. Jointly, we explore innovations and connect the points to achieve a
                        promising and
                        groundbreaking glorious future.</p>
                    <p>SR Institute of Software Techonology is a global information technology that began operations
                        in the year
                        2018 and
                        was quickly established as a private limited company owing to its commitment and acceptance
                        for its strive
                        for excellence.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /success story -->

<!-- events -->
<section class="section bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="d-flex align-items-center section-title justify-content-between">
                    <h2 class="mb-0 text-nowrap mr-3">Upcoming Events</h2>
                    <div class="border-top w-100 border-primary d-none d-sm-block"></div>

                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <!-- event -->
            <div class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
                <div class="card border-0 rounded-0 hover-shadow">
                    <div class="card-img position-relative">
                        <img class="card-img-top rounded-0" src="{{asset('website')}}/images/events/event-1.jpg" alt="event thumb">
                        <div class="card-date"><span>18</span><br>August</div>
                    </div>
                    <div class="card-body">
                        <!-- location -->
                        <p class="mb-0"><i class="ti-location-pin text-primary mr-2"></i><br>
                            Mirpur Road, Dhanmonddi Dhaka-1207</p>
                        <a href="event-single.html">
                            <h4 class="card-title">Static Website plan</h4>
                        </a>
                    </div>
                </div>
            </div>
            <!-- event -->
            <div class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
                <div class="card border-0 rounded-0 hover-shadow">
                    <div class="card-img position-relative">
                        <img class="card-img-top rounded-0" src="{{asset('website')}}/images/events/event-2.jpg" alt="event thumb">
                        <div class="card-date"><span>21</span><br>July</div>
                    </div>
                    <div class="card-body">
                        <!-- location -->
                        <p class="mb-0"><i class="ti-location-pin text-primary mr-2"></i><br>Mirpur Road, Dhanmonddi
                            Dhaka-1207
                        </p>
                        <a href="event-single.html">
                            <h4 class="card-title">SEO & Digital Marketing Plan</h4>
                        </a>
                    </div>
                </div>
            </div>
            <!-- event -->
            <div class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
                <div class="card border-0 rounded-0 hover-shadow">
                    <div class="card-img position-relative">
                        <img class="card-img-top rounded-0" src="{{asset('website')}}/images/events/event-3.jpg" alt="event thumb">
                        <div class="card-date"><span>09</span><br>july</div>
                    </div>
                    <div class="card-body">
                        <!-- location -->
                        <p class="mb-0"><i class="ti-location-pin text-primary mr-2"></i><br>Mirpur Road, Dhanmonddi
                            Dhaka-1207
                        </p>
                        <a href="event-single.html">
                            <h4 class="card-title">Mobile Apps Development</h4>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- mobile see all button -->
        <div class="row">
            <div class="col-12 text-center">
                <a href="course.html" class="btn btn-sm btn-primary-outline d-sm-none d-inline-block">sell all</a>
            </div>
        </div>
    </div>
</section>
<!-- /events -->

@push('web-js')

@endpush
@endsection
