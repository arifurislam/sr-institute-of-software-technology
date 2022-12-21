@extends('layouts.website')
@section('title','contact with us')
@push('web-css')

@endpush
@section('website')
<!-- page title -->
<section class="page-title-section overlay" data-background="{{asset('website')}}/images/backgrounds/page-title.jpg">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <ul class="list-inline custom-breadcrumb">
                    <li class="list-inline-item"><a class="h2 text-primary font-secondary" href="@@page-link">Contact
                            Us</a>
                    </li>
                    <li class="list-inline-item text-white h3 font-secondary @@nasted"></li>
                </ul>
                <p class="text-lighten">Do you have other questions? SEIP Project student registration is open now,
                    If your want to attend SEIP project, fill up all the info below and and click 'Register Now' button.
                    we will knock you...</p>
            </div>
        </div>
    </div>
</section>
<!-- /page title -->

<!-- contact -->
<section class="section bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="section-title">SEIP ProJect Registration</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-7 mb-4 mb-lg-0">
                <!-- bootstrap alert -->
                @if(session()->has('message'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('message') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @endif
                <!-- /bootstrap alert -->
                <form action="{{url('/seip/registrations/stores')}}" method="post">
                    @csrf
                    <div>
                        <div class="d-inline text-danger">*</div>
                        <input type="text" class="form-control mb-2 {{$errors->has('name')? 'has-error':''}}" id="name"
                            name="name" value="{{old('name')}}" placeholder="Your Name">
                        @if ($errors->has('name'))
                        <span class="invalid-feedback mb-0" role="alert">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div>
                        <div class="d-inline text-danger">*</div>
                        <input type="email" class="form-control mb-2 {{$errors->has('email')? 'has-error':''}}"
                            id="mail" name="email" value="{{old('email')}}" placeholder="Your Email">
                        @if ($errors->has('email'))
                        <span class="invalid-feedback mb-0" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div>
                        <div class="d-inline text-danger">*</div>
                        <input type="text" class="form-control mb-2 {{$errors->has('number')? 'has-error':''}}"
                            name="number" value="{{old('number')}}" placeholder="Contact Number">
                        @if ($errors->has('number'))
                        <span class="invalid-feedback mb-0" role="alert">
                            <strong>{{ $errors->first('number') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div>
                        <div class="d-inline text-danger">*</div>
                        <input type="text" class="form-control mb-2 {{$errors->has('age')? 'has-error':''}}" name="age"
                            value="{{old('age')}}" placeholder="Your Age">
                        @if ($errors->has('age'))
                        <span class="invalid-feedback mb-0" role="alert">
                            <strong>{{ $errors->first('age') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div>
                        <div class="d-inline text-danger">*</div>
                        <select name="gender" class="form-control mb-2 {{$errors->has('gender')? 'has-error':''}}">
                            <option>Select Your Gender</option>
                            @foreach($genders as $gender)
                            <option value="{{$gender->id}}">{{$gender->name}}</option>
                            @endforeach
                        </select>
                        @if ($errors->has('gender'))
                        <span class="invalid-feedback mb-0" role="alert">
                            <strong>{{ $errors->first('gender') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div>
                        <div class="d-inline text-danger">*</div>
                        <select name="education"
                            class="form-control mb-3 {{$errors->has('education')? 'has-error':''}}">
                            <option>Qualifications</option>
                            @foreach($qualifications as $data)
                            <option value="{{$data->id}}">{{$data->name}}</option>
                            @endforeach
                        </select>
                        @if ($errors->has('education'))
                        <span class="invalid-feedback mb-0" role="alert">
                            <strong>{{ $errors->first('education') }}</strong>
                        </span>
                        @endif
                    </div>

                    <button type="submit" class="btn btn-primary">Register Now</button>
                </form>
            </div>
            <div class="col-lg-5">
                <p class="mb-3">
                    SR Institute of Software Techonology is a growing IT company in Dhaka , Now SR Institute of Software
                    Techonology
                    arrange a SEIP project for young people.You can attends our SEIP projects as a learner...
                </p>
                <div class="mb-4">
                    <strong class="mb-3 d-block">Rules To Register : <br></strong>
                    <span class="mb-4 d-block"># To perticipate SEIP project you have to complete Diploma-In-Engineerin
                        or you
                        have to complete
                        Graduation and age should be 45 years or less.</span>
                        
                        
                        <span class="mb-4 d-block"># It's Offline Course, It's not available in online.</span>
                        
                    <span class="mb-4 d-block"># Fill up all the form with correct informations related to you.</span>
                    <span class="mb-4 d-inline-block"># If you face any kinds of problems to register or you want to know more info
                        about
                        SEIP,
                        plz contact with us,
                    </span>
                    <a href="tel: +880 1919414153" class="text-color h5 d-block">+880 1919414153</a>
                    <a href="mailto:training.sr.bteb@gmail.com"
                        class="mb-3 text-color h5 d-block">training.sr.bteb@gmail.com</a>
                    <p>Mohammadia Supper Market (3nd Floor),<br>
                        4 No Tollabag, Sobahanbag, (Opposit of A.R Plaza),<br>
                        Mirpur Road, Dhanmonddi Dhaka-1207.<br>
                </div>
            </div>
            </p>
        </div>
    </div>
    </div>
</section>
<!-- /contact -->


@push('web-js')

@endpush
@endsection
