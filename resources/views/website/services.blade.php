@extends('layouts.website')
@section('title','sr-services')
@push('web-css')

@endpush
@section('website')
<!-- page title -->
<section class="page-title-section overlay" data-background="{{asset('website')}}/images/backgrounds/page-title.jpg">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <ul class="list-inline custom-breadcrumb">
                    <li class="list-inline-item"><a class="h2 text-primary font-secondary" href="courses.html">Our All
                            Services</a>
                    </li>
                    <li class="list-inline-item text-white h3 font-secondary "></li>
                </ul>
                <p class="text-lighten">Our services offer a good compromise between the continuous assessment favoured
                    by
                    some
                    organization and the emphasis placed on final exams by others.</p>
            </div>
        </div>
    </div>
</section>
<!-- /page title -->

<!-- courses -->
<section class="section">
    <div class="container">
        <!-- course list -->
        <div class="row justify-content-center">
            <!-- course item -->

            <!-- course item -->
            <div class="col-lg-4 col-sm-6 mb-5">
                <div class="card p-0 border-primary rounded-0 hover-shadow">
                    <img class="card-img-top rounded-0" src="{{asset('website')}}/images/courses/course-2.jpg"
                        alt="course thumb">
                    <div class="card-body">
                        <ul class="list-inline mb-2">
                            <li class="list-inline-item"><i class="ti-calendar mr-1 text-color"></i>02-07-2021</li>
                            <li class="list-inline-item"><a class="badge badge-primary" href="#">Primary</a></li>
                        </ul>
                        <a href="ui-ux.html">
                            <h4 class="card-title">Custom Website</h4>
                        </a>
                        <p class="card-text mb-4">SR Institute of Software Techonology will support your business growth
                            customizing the search and content development based of your business..</p>
                        <a href="ui-ux.html" class="btn btn-primary btn-sm">Read More</a>
                    </div>
                </div>
            </div>
            <!-- course item -->
            <div class="col-lg-4 col-sm-6 mb-5">
                <div class="card p-0 border-primary rounded-0 hover-shadow">
                    <img class="card-img-top rounded-0" src="{{asset('website')}}/images/courses/course-3.jpg"
                        alt="course thumb">
                    <div class="card-body">
                        <ul class="list-inline mb-2">
                            <li class="list-inline-item"><i class="ti-calendar mr-1 text-color"></i>12-08-2020</li>
                            <li class="list-inline-item"><a class="badge badge-warning" href="#">Standard</a></li>
                        </ul>
                        <a href="web-app-dev.html">
                            <h4 class="card-title">Web Application Development</h4>
                        </a>
                        <p class="card-text mb-4">SR Institute of Software Techonology will support your business growth
                            customizing the search and content development based of your business..</p>
                        <a href="web-app-dev.html" class="btn btn-primary btn-sm">Read More</a>
                    </div>
                </div>
            </div>
            <!-- course item -->
            <div class="col-lg-4 col-sm-6 mb-5">
                <div class="card p-0 border-primary rounded-0 hover-shadow">
                    <img class="card-img-top rounded-0" src="{{asset('website')}}/images/courses/course-4.jpg"
                        alt="course thumb">
                    <div class="card-body">
                        <ul class="list-inline mb-2">
                            <li class="list-inline-item"><i class="ti-calendar mr-1 text-color"></i>09-02-2022</li>
                            <li class="list-inline-item"><a class="badge badge-danger" href="#">Advance</a></li>
                        </ul>
                        <a href="custom_sdev.html">
                            <h4 class="card-title">Custom Software Development</h4>
                        </a>
                        <p class="card-text mb-4">SR Institute of Software Techonology will support your business growth
                            customizing the search and content development based of your business..</p>
                        <a href="custom_sdev.html" class="btn btn-primary btn-sm">Read More</a>
                    </div>
                </div>
            </div>

        </div>
        <!-- /course list -->
        <!-- course list -->
        <div class="row justify-content-center">
            <!-- course item -->
            <div class="col-lg-4 col-sm-6 mb-5">
                <div class="card p-0 border-primary rounded-0 hover-shadow">
                    <img class="card-img-top rounded-0 h-300"
                        src="{{asset('website')}}/images/courses/digital-marketing.jpg" alt="digital-marketing">
                    <div class="card-body">
                        <ul class="list-inline mb-2">
                            <li class="list-inline-item"><i class="ti-calendar mr-1 text-color"></i>05-08-2020</li>
                            <li class="list-inline-item"><a class="badge badge-warning" href="#">Popular</a></li>
                        </ul>
                        <a href="seo-markating.html">
                            <h4 class="card-title">SEO & Digital Marketing Plan</h4>
                        </a>
                        <p class="card-text mb-4">SR Institute of Software Techonology will support your business growth
                            customizing the search and content development based of your business..</p>
                        <a href="seo-markating.html" class="btn btn-primary btn-sm">Read More</a>
                    </div>
                </div>
            </div>
            <!-- course item -->
            <div class="col-lg-4 col-sm-6 mb-5">
                <div class="card p-0 border-primary rounded-0 hover-shadow">
                    <img class="card-img-top rounded-0" src="{{asset('website')}}/images/courses/course-2.jpg"
                        alt="course thumb">
                    <div class="card-body">
                        <ul class="list-inline mb-2">
                            <li class="list-inline-item"><i class="ti-calendar mr-1 text-color"></i>09-03-2022</li>
                            <li class="list-inline-item"><a class="badge badge-warning" href="#">Standard</a></li>
                        </ul>
                        <a href="software_dev.html">
                            <h4 class="card-title">Mobile Apps Development</h4>
                        </a>
                        <p class="card-text mb-4">SR Institute of Software Techonology will support your business growth
                            customizing the search and content development based of your business..</p>
                        <a href="software_dev.html" class="btn btn-primary btn-sm">Read More</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6 mb-5">
                <div class="card p-0 border-primary rounded-0 hover-shadow">
                    <img class="card-img-top rounded-0" src="{{asset('website')}}/images/courses/course-4.jpg"
                        alt="course thumb">
                    <div class="card-body">
                        <ul class="list-inline mb-2">
                            <li class="list-inline-item"><i class="ti-calendar mr-1 text-color"></i>27-03-2022</li>
                            <li class="list-inline-item"><a class="badge badge-primary" href="#">Primary</a></li>
                        </ul>
                        <a href="web-design-developmet.html">
                            <h4 class="card-title">Wordpress Development</h4>
                        </a>
                        <p class="card-text mb-4">SR Institute of Software Techonology will support your business growth
                            customizing the search and content development based of your business..</p>
                        <a href="web-design-developmet.html" class="btn btn-primary btn-sm">Read More</a>
                    </div>
                </div>
            </div>
            <!-- course item -->
            <div class="col-lg-4 col-sm-6 mb-5">
                <div class="card p-0 border-primary rounded-0 hover-shadow">
                    <img class="card-img-top rounded-0" src="{{asset('website')}}/images/courses/course-5.jpg"
                        alt="course thumb">
                    <div class="card-body">
                        <ul class="list-inline mb-2">
                            <li class="list-inline-item"><i class="ti-calendar mr-1 text-color"></i>30-04-2021</li>
                            <li class="list-inline-item"><a class="badge badge-primary" href="#">Basic</a></li>
                        </ul>
                        <a href="branding-design.html">
                            <h4 class="card-title">Branding Design</h4>
                        </a>
                        <p class="card-text mb-4">SR Institute of Software Techonology will support your business growth
                            customizing the search and content development based of your business..</p>
                        <a href="branding-design.html" class="btn btn-primary btn-sm">Read More</a>
                    </div>
                </div>
            </div>
            <!-- course item -->
            <div class="col-lg-4 col-sm-6 mb-5">
                <div class="card p-0 border-primary rounded-0 hover-shadow">
                    <img class="card-img-top rounded-0" src="{{asset('website')}}/images/courses/course-6.jpg"
                        alt="course thumb">
                    <div class="card-body">
                        <ul class="list-inline mb-2">
                            <li class="list-inline-item"><i class="ti-calendar mr-1 text-color"></i>02-14-2018</li>
                            <li class="list-inline-item"><a class="badge badge-danger" href="#">Advance</a></li>
                        </ul>
                        <a href="ui-ux.html">
                            <h4 class="card-title">Auto Cad and 3D</h4>
                        </a>
                        <p class="card-text mb-4">SR Institute of Software Techonology will support your business growth
                            customizing the search and content development based of your business..</p>
                        <a href="ui-ux.html" class="btn btn-primary btn-sm">Read More</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /course list -->
    </div>
</section>
<!-- /courses -->



@push('web-js')

@endpush
@endsection
