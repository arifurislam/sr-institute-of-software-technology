@extends('layouts.website')
@section('title','sr notice')
@push('web-css')

@endpush
@section('website')

<!-- page title -->
<section class="page-title-section overlay" data-background="{{asset('website')}}/images/backgrounds/page-title.jpg">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <ul class="list-inline custom-breadcrumb mb-3">
                    <li class="list-inline-item"><a class="h2 text-primary font-secondary" href="@@page-link">Notice</a>
                    </li>
                    <li class="list-inline-item text-white h3 font-secondary @@nasted"></li>
                </ul>
                <p class="text-lighten">
                    SR Institute of Software Techonology<br>
                    Notice Board
                </p>
            </div>
        </div>
    </div>
</section>
<!-- /page title -->

<!-- notice -->
<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <ul class="list-unstyled">
                    <!-- notice item -->
                    <li class="d-md-table mb-4 w-100 border-bottom hover-shadow">
                        <div class="d-md-table-cell text-center p-4 bg-primary text-white mb-4 mb-md-0"><span
                                class="h2 d-block">23</span> july,2022</div>
                        <div class="d-md-table-cell px-4 vertical-align-middle mb-4 mb-md-0">
                            <a href="#" class="h4 mb-3 d-block">Seminar With Creative Shaper</a>
                            <p class="mb-0">
                                SR Institute of Software Techonology has a Seminar with another It company named
                                creative shaper.
                                we have a long business relation.
                            </p>
                        </div>
                        <div class="d-md-table-cell text-right pr-0 pr-md-4"><a href="#" class="btn btn-primary">read
                                more</a></div>
                    </li>
                    <!-- notice item -->
                    <li class="d-md-table mb-4 w-100 border-bottom hover-shadow">
                        <div class="d-md-table-cell text-center p-4 bg-primary text-white mb-4 mb-md-0"><span
                                class="h2 d-block">19</span> jun,2021</div>
                        <div class="d-md-table-cell px-4 vertical-align-middle mb-4 mb-md-0">
                            <a href="notice-single.html" class="h4 mb-3 d-block">SR Institute of Software Techonology
                                have a meeting
                                with BITM</a>
                            <p class="mb-0">
                                SR Institute of Software Techonology has many partners in bangladesh. BITM is one of
                                them.
                            </p>
                        </div>
                        <div class="d-md-table-cell text-right pr-0 pr-md-4"><a href="#" class="btn btn-primary">read
                                more</a></div>
                    </li>
                    <!-- notice item -->
                    <li class="d-md-table mb-4 w-100 border-bottom hover-shadow">
                        <div class="d-md-table-cell text-center p-4 bg-primary text-white mb-4 mb-md-0"><span
                                class="h2 d-block">24</span> july,2022</div>
                        <div class="d-md-table-cell px-4 vertical-align-middle mb-4 mb-md-0">
                            <a href="#" class="h4 mb-3 d-block">Teaching Materials and Testing Methods</a>
                            <p class="mb-0">
                                Software articles should describe a tool likely to be of broad utility that represents a
                                significant
                                advance over previously published software (usually demonstrated by direct comparison
                                with available
                                related software).
                            </p>
                        </div>
                        <div class="d-md-table-cell text-right pr-0 pr-md-4"><a href="#" class="btn btn-primary">read
                                more</a></div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- /notice -->

@push('web-js')

@endpush
@endsection
