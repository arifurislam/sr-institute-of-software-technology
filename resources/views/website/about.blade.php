@extends('layouts.website')
@section('title','sr-about')
@push('web-css')

@endpush
@section('website')


<!-- page title -->
<section class="page-title-section overlay" data-background="{{asset('website')}}/images/backgrounds/page-title.jpg">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <ul class="list-inline custom-breadcrumb">
                    <li class="list-inline-item mb-3"><a class="h2 text-primary font-secondary" href="@@page-link">About
                            Us</a>
                    </li>
                    <li class="list-inline-item text-white h3 font-secondary @@nasted"></li>
                </ul>
                <p class="text-lighten">
                    SR Institute of Software Technology is a Bangladesh
                    based Global IT Farm. We help our clients make lasting
                    improvements by simplifying their business processes
                    through smarter and integrated technology solutions.
                    We also help our clients grow and increase their
                    business through digital marketing and to gain better
                    understanding of their market and consumers.
                </p>
            </div>
        </div>
    </div>
</section>
<!-- /page title -->

<!-- about -->
<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <img class="img-fluid w-100 mb-4" src="{{asset('website')}}/images/about/about-image.jpeg" alt="about-image">
                <h2 class="section-title">ABOUT OUR JOURNY</h2>
                <p class="mb-5">
                    SR Institute of Design ,a famous computer training center in Dhaka.
                    IN <b>7 <sup>7th<sup> </b><b>Feb 2018</b> we make a Production based sub organization named <b>SR Institute of Software Technology . </b>  It’s an ideal training Institute
                    for
                    Learner’s to design their carrier with the combination of their ambition to make them a successful
                    skilled
                    person with a stunning and bright future.It was established in <strong>7 <sup>th</sup> January
                        2012</strong>
                    in a small premises with the
                    inspiration of an wonderful creative person SK HOSSAIN RAZIB, the Executive Director of SR Institute
                    of
                    Design, Which was a dream project of him.</p>

                <p>It is located in Mohammadia Super Market(3<sup>rd</sup> floor), (Opposite of A.R. Plaza), Dhanmodi,Dhaka-1207.
                    It’s a
                    <b>CBT & A (Competency Based training & Assessment)</b> authorized assessment center with the
                    affiliation
                    with
                    BTEB(Bangladesh Technical Education Board). It’s a reputed Institute among all the institutes under
                    <b>
                        BTEB</b> for
                    the stunning performances of our students in every exam.</p>
            </div>
        </div>
    </div>
</section>
<!-- /about -->

<!-- funfacts -->
<section class="section-sm bg-primary">
    <div class="container">
        <div class="row">
            <!-- funfacts item -->
            <div class="col-md-3 col-sm-6 mb-4 mb-md-0">
                <div class="text-center">
                    <h2 class="count text-white" data-count="13">0</h2>
                    <h5 class="text-white">Employee</h5>
                </div>
            </div>
            <!-- funfacts item -->
            <div class="col-md-3 col-sm-6 mb-4 mb-md-0">
                <div class="text-center">
                    <h2 class="count text-white" data-count="09">0</h2>
                    <h5 class="text-white">Services</h5>
                </div>
            </div>
            <!-- funfacts item -->
            <div class="col-md-3 col-sm-6 mb-4 mb-md-0">
                <div class="text-center">
                    <h2 class="count text-white" data-count="212">0</h2>
                    <h5 class="text-white">Projects Done</h5>
                </div>
            </div>
            <!-- funfacts item -->
            <div class="col-md-3 col-sm-6 mb-4 mb-md-0">
                <div class="text-center">
                    <h2 class="count text-white" data-count="06">0</h2>
                    <h5 class="text-white">Upcomming Projects</h5>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /funfacts -->

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
                    <p>As a leading company in information technology, consultancy, and business process services, we
                        leverage
                        the power of innovative technology that helps our clients develop and end up making themselves
                        successful
                        in the digital world. Jointly, we explore innovations and connect the points to achieve a
                        promising and
                        groundbreaking glorious future.</p>
                    <p>SR Institute of Software Techonology is a global information technology that began operations in
                        the year
                        2018 and was quickly established as a private limited company owing to its commitment and
                        acceptance for
                        its strive for excellence.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /success story -->

<!-- authority -->
<section class="section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2 class="section-title">Our Authority</h2>
            </div>
            <!-- members list -->
            <div class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
                <div class="card border-0 rounded-0 hover-shadow">
                    <img class="card-img-top rounded-0" src="{{asset('website')}}/images/members/rajib-sir.jpg" alt="rajib-sir">
                    <div class="card-body">
                        <a href="teacher-single.html">
                            <h4 class="card-title">Sk Hossain Rajib</h4>
                        </a>
                        <div class="d-flex justify-content-between">
                            <span>Chief executive officer</span>
                            <ul class="list-inline">
                                <li class="list-inline-item"><a class="text-color"
                                        href="https://www.facebook.com/srrazib"><i class="ti-facebook"></i></a></li>
                                <li class="list-inline-item"><a class="text-color" href="#"><i
                                            class="ti-twitter-alt"></i></a></li>
                                <li class="list-inline-item"><a class="text-color" href="#"><i
                                            class="ti-google"></i></a></li>
                                <li class="list-inline-item"><a class="text-color" href="#"><i
                                            class="ti-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- teacher -->
            <div class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
                <div class="card border-0 rounded-0 hover-shadow">
                    <img class="card-img-top rounded-0" style="height:350px;" src="{{asset('website')}}/images/members/director.jpeg"
                        alt="director">
                    <div class="card-body">
                        <a href="teacher-single.html">
                            <h4 class="card-title">Takiya Yeasmin</h4>
                        </a>
                        <div class="d-flex justify-content-between">
                            <span>Director</span>
                            <ul class="list-inline">
                                <li class="list-inline-item"><a class="text-color" href="#"><i
                                            class="ti-facebook"></i></a></li>
                                <li class="list-inline-item"><a class="text-color" href="#"><i
                                            class="ti-twitter-alt"></i></a></li>
                                <li class="list-inline-item"><a class="text-color" href="#"><i
                                            class="ti-google"></i></a></li>
                                <li class="list-inline-item"><a class="text-color" href="#"><i
                                            class="ti-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /authority -->

<!-- employye -->
<section class="section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2 class="section-title">Our Members</h2>
            </div>
            <!-- members list -->
            <div class="col-lg-4 col-sm-6 mb-5">
                <div class="card border-0 rounded-0 hover-shadow">
                    <img class="card-img-top rounded-0" style="height: 390px;" src="{{asset('website')}}/images/members/proddut-sir.jpg"
                        alt="proddut">
                    <div class="card-body">
                        <a href="teacher-single.html">
                            <h4 class="card-title">Proddut Chandra Sarker</h4>
                        </a>
                        <div class="d-flex justify-content-between">
                            <span>Graphics Designer</span>
                            <ul class="list-inline">
                                <li class="list-inline-item"><a class="text-color"
                                        href="https://www.facebook.com/srrazib"><i class="ti-facebook"></i></a></li>
                                <li class="list-inline-item"><a class="text-color" href="#"><i
                                            class="ti-twitter-alt"></i></a></li>
                                <li class="list-inline-item"><a class="text-color" href="#"><i
                                            class="ti-google"></i></a></li>
                                <li class="list-inline-item"><a class="text-color" href="#"><i
                                            class="ti-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-5">
                <div class="card border-0 rounded-0 hover-shadow">
                    <img class="card-img-top rounded-0" style="height: 390px;" src="{{asset('website')}}/images/members/jahid-sir.JPG"
                        alt="jahid">
                    <div class="card-body">
                        <a href="teacher-single.html">
                            <h4 class="card-title">Mohammad Zahidul Islam</h4>
                        </a>
                        <div class="d-flex justify-content-between">
                            <span>Graphics Designer</span>
                            <ul class="list-inline">
                                <li class="list-inline-item"><a class="text-color" href="#"><i
                                            class="ti-facebook"></i></a></li>
                                <li class="list-inline-item"><a class="text-color" href="#"><i
                                            class="ti-twitter-alt"></i></a></li>
                                <li class="list-inline-item"><a class="text-color" href="#"><i
                                            class="ti-google"></i></a></li>
                                <li class="list-inline-item"><a class="text-color" href="#"><i
                                            class="ti-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-5">
                <div class="card border-0 rounded-0 hover-shadow">
                    <img class="card-img-top rounded-0" style="height: 390px;" src="{{asset('website')}}/images/members/sazid-sir.jpg"
                        alt="sazid-sir">
                    <div class="card-body">
                        <a href="teacher-single.html">
                            <h4 class="card-title">
                                Sourov Sazid</h4>
                        </a>
                        <div class="d-flex justify-content-between">
                            <span>UI \ UX Designer</span>
                            <ul class="list-inline">
                                <li class="list-inline-item"><a class="text-color" href="#"><i
                                            class="ti-facebook"></i></a></li>
                                <li class="list-inline-item"><a class="text-color" href="#"><i
                                            class="ti-twitter-alt"></i></a></li>
                                <li class="list-inline-item"><a class="text-color" href="#"><i
                                            class="ti-google"></i></a></li>
                                <li class="list-inline-item"><a class="text-color" href="#"><i
                                            class="ti-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-5">
                <div class="card border-0 rounded-0 hover-shadow">
                    <img class="card-img-top rounded-0" style="height: 390px;" src="{{asset('website')}}/images/members/asma-mam.jpg"
                        alt="asma-mam">
                    <div class="card-body">
                        <a href="teacher-single.html">
                            <h4 class="card-title">Asma Abdul Jalil</h4>
                        </a>
                        <div class="d-flex justify-content-between">
                            <span>Graphics Designer</span>
                            <ul class="list-inline">
                                <li class="list-inline-item"><a class="text-color" href="#"><i
                                            class="ti-facebook"></i></a></li>
                                <li class="list-inline-item"><a class="text-color" href="#"><i
                                            class="ti-twitter-alt"></i></a></li>
                                <li class="list-inline-item"><a class="text-color" href="#"><i
                                            class="ti-google"></i></a></li>
                                <li class="list-inline-item"><a class="text-color" href="#"><i
                                            class="ti-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-5">
                <div class="card border-0 rounded-0 hover-shadow">
                    <img class="card-img-top rounded-0" style="height: 390px;" src="{{asset('website')}}/images/members/jemie-sir.jpg"
                        alt="jemie">
                    <div class="card-body">
                        <a href="teacher-single.html">
                            <h4 class="card-title">Sayed Jahir Ibn Jaman</h4>
                        </a>
                        <div class="d-flex justify-content-between">
                            <span>Account Manager</span>
                            <ul class="list-inline">
                                <li class="list-inline-item"><a class="text-color" href="#"><i
                                            class="ti-facebook"></i></a></li>
                                <li class="list-inline-item"><a class="text-color" href="#"><i
                                            class="ti-twitter-alt"></i></a></li>
                                <li class="list-inline-item"><a class="text-color" href="#"><i
                                            class="ti-google"></i></a></li>
                                <li class="list-inline-item"><a class="text-color" href="#"><i
                                            class="ti-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-5">
                <div class="card border-0 rounded-0 hover-shadow">
                    <img class="card-img-top rounded-0" style="height: 390px;" src="{{asset('website')}}/images/members/arifuri.jpg"
                        alt="arifur">
                    <div class="card-body">
                        <a href="teacher-single.html">
                            <h4 class="card-title">Arifur Islam</h4>
                        </a>
                        <div class="d-flex justify-content-between">
                            <span>Back - End - Developer</span>
                            <ul class="list-inline">
                                <li class="list-inline-item"><a class="text-color" href="#"><i
                                            class="ti-facebook"></i></a></li>
                                <li class="list-inline-item"><a class="text-color" href="#"><i
                                            class="ti-twitter-alt"></i></a></li>
                                <li class="list-inline-item"><a class="text-color" href="#"><i
                                            class="ti-google"></i></a></li>
                                <li class="list-inline-item"><a class="text-color" href="#"><i
                                            class="ti-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
                <div class="card border-0 rounded-0 hover-shadow">
                    <img class="card-img-top rounded-0" style="height: 390px;" src="{{asset('website')}}/images/members/Tanjilul karim.JPG"
                        alt="tanjilul">
                    <div class="card-body">
                        <a href="teacher-single.html">
                            <h4 class="card-title">
                                Tanjilul Karim</h4>
                        </a>
                        <div class="d-flex justify-content-between">
                            <span>UI \ UX Developer</span>
                            <ul class="list-inline">
                                <li class="list-inline-item"><a class="text-color" href="#"><i
                                            class="ti-facebook"></i></a></li>
                                <li class="list-inline-item"><a class="text-color" href="#"><i
                                            class="ti-twitter-alt"></i></a></li>
                                <li class="list-inline-item"><a class="text-color" href="#"><i
                                            class="ti-google"></i></a></li>
                                <li class="list-inline-item"><a class="text-color" href="#"><i
                                            class="ti-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
                <div class="card border-0 rounded-0 hover-shadow">
                    <img class="card-img-top rounded-0" style="height: 390px;" src="{{asset('website')}}/images/members/marzia.jpg"
                        alt="arifur">
                    <div class="card-body">
                        <a href="teacher-single.html">
                            <h4 class="card-title">Shamima Nasrin Marzia</h4>
                        </a>
                        <div class="d-flex justify-content-between">
                            <span>Digital Marketer</span>
                            <ul class="list-inline">
                                <li class="list-inline-item"><a class="text-color" href="#"><i
                                            class="ti-facebook"></i></a></li>
                                <li class="list-inline-item"><a class="text-color" href="#"><i
                                            class="ti-twitter-alt"></i></a></li>
                                <li class="list-inline-item"><a class="text-color" href="#"><i
                                            class="ti-google"></i></a></li>
                                <li class="list-inline-item"><a class="text-color" href="#"><i
                                            class="ti-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-5">
                <div class="card border-0 rounded-0 hover-shadow">
                    <img class="card-img-top rounded-0" style="height: 390px;" src="{{asset('website')}}/images/members/arinika.jpg"
                        alt="arifur">
                    <div class="card-body">
                        <a href="teacher-single.html">
                            <h4 class="card-title">Syeda Arnika</h4>
                        </a>
                        <div class="d-flex justify-content-between">
                            <span>Content Writer</span>
                            <ul class="list-inline">
                                <li class="list-inline-item"><a class="text-color" href="#"><i
                                            class="ti-facebook"></i></a></li>
                                <li class="list-inline-item"><a class="text-color" href="#"><i
                                            class="ti-twitter-alt"></i></a></li>
                                <li class="list-inline-item"><a class="text-color" href="#"><i
                                            class="ti-google"></i></a></li>
                                <li class="list-inline-item"><a class="text-color" href="#"><i
                                            class="ti-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="card border-0 rounded-0 hover-shadow">
                    <img class="card-img-top rounded-0" style="height: 390px;" src="{{asset('website')}}/images/members/hira.jpg" alt="hira">
                    <div class="card-body">
                        <a href="teacher-single.html">
                            <h4 class="card-title">Nandita Hira</h4>
                        </a>
                        <div class="d-flex justify-content-between">
                            <span>UI / UX Developer <br>
                                Office Application</span>
                            <ul class="list-inline">
                                <li class="list-inline-item"><a class="text-color" href="#"><i
                                            class="ti-facebook"></i></a></li>
                                <li class="list-inline-item"><a class="text-color" href="#"><i
                                            class="ti-twitter-alt"></i></a></li>
                                <li class="list-inline-item"><a class="text-color" href="#"><i
                                            class="ti-google"></i></a></li>
                                <li class="list-inline-item"><a class="text-color" href="#"><i
                                            class="ti-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /employee -->

@push('web-js')

@endpush
@endsection
