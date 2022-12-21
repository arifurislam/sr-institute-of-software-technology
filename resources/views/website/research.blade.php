@extends('layouts.website')
@section('title','sr research')
@push('web-css')

@endpush
@section('website')

<!-- page title -->
<section class="page-title-section overlay" data-background="{{asset('website')}}/images/backgrounds/page-title.jpg">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <ul class="list-inline custom-breadcrumb">
                    <li class="list-inline-item"><a class="h2 text-primary font-secondary"
                            href="@@page-link">Research</a></li>
                    <li class="list-inline-item text-white h3 font-secondary @@nasted"></li>
                </ul>
                <p class="text-lighten">
                    SR Institute of Software Techonology has a strong research team.
                    We research about marketing as the demand of mordern era.
                    SR Institute of Software Techonology aslo study about latest technology.


                </p>
            </div>
        </div>
    </div>
</section>
<!-- /page title -->

<!-- research -->
<section class="section">
    <div class="container">
        <div class="row">
            <!-- recharch item -->
            <div class="col-lg-4 col-sm-6 mb-4">
                <div class="card rounded-0 hover-shadow border-top-0 border-left-0 border-right-0">
                    <img class="card-img-top rounded-0" src="{{asset('website')}}/images/research/research-1.jpg" alt="research thumb">
                    <div class="card-body">
                        <h4 class="card-title">Latest Technology</h4>
                        <p class="card-text">
                            New trends in web design (UX) will be also influenced by changes in the IoT environment. We
                            should
                            foresee voice interfaces design and emerging approaches to big data architecture
                        </p>
                    </div>
                </div>
            </div>
            <!-- recharch item -->
            <div class="col-lg-4 col-sm-6 mb-4">
                <div class="card rounded-0 hover-shadow border-top-0 border-left-0 border-right-0">
                    <img class="card-img-top rounded-0" src="{{asset('website')}}/images/research/research-2.jpg" alt="research thumb">
                    <div class="card-body">
                        <h4 class="card-title">Latest Market Policy</h4>
                        <p class="card-text">
                            As was the case last year, the policy continues the expansionary monetary policy stance to
                            support
                            investments and employment generation.
                        </p>
                    </div>
                </div>
            </div>
            <!-- recharch item -->
            <div class="col-lg-4 col-sm-6 mb-4">
                <div class="card rounded-0 hover-shadow border-top-0 border-left-0 border-right-0">
                    <img class="card-img-top rounded-0" src="{{asset('website')}}/images/research/research-3.jpg" alt="research thumb">
                    <div class="card-body">
                        <h4 class="card-title">Arrange Seminar</h4>
                        <p class="card-text">
                            a seminar allows for small groups to meet and discuss academic topics or required reading,
                            as well as
                            set goals for research and continuing investigation.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /research -->


@push('web-js')

@endpush
@endsection
