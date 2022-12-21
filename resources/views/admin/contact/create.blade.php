@extends('layouts.admin')
@section('title','add-student-six')
@push('css')

@endpush
@section('contents')
<div class="row">
    <div class="col-lg-8 p-r-0 title-margin-right">
        <div class="page-header">
            <div class="page-title">
                <h1>Hello, <span>Welcome Here</span></h1>
            </div>
        </div>
    </div>
    <div class="col-lg-12">
        @if(session()->has('message'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('message') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <form action="{{url('dashboard/six-class/register')}}" method="post">
            @csrf
            <div class="card">
                <div class="card-title border-bottom d-flex justify-content-between py-3">
                    <h4 class="mb-0">Add Student Information</h4>
                    <a class="btn btn-danger" href="{{url('/dashboard/six-class')}}"><span class="ti-arrow-left pr-3"></span>All Student</a>
                </div>
                <div class="card-body">
                    <div class="basic-elements">

                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-lg-3 text-right">
                                            <label class="mb-0">Student's Name : <span
                                                    class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-lg-9">
                                            <input type="text" name="name"
                                                class="form-control {{$errors->has('name')? 'has-error':''}}"
                                                placeholder="Student Name is here..." value="{{old('name')}}">

                                            @if ($errors->has('name'))
                                            <span class="invalid-feedback mb-0" role="alert">
                                                <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                            @endif
                                        </div>

                                        <div class="col-lg-3 text-right">
                                            <label class="mb-0">Student's Father Name : <span
                                                    class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-lg-9">
                                            <input type="text" name="father"
                                                class="form-control {{$errors->has('father')? 'has-error':''}}"
                                                placeholder="Student's Father Name is here..."
                                                value="{{old('father')}}">
                                            @if ($errors->has('father'))
                                            <span class="invalid-feedback mb-0" role="alert">
                                                <strong>{{ $errors->first('father') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                        <div class="col-lg-3 text-right">
                                            <label class="mb-0">Class Roll : <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-lg-9">
                                            <input type="text" name="roll"
                                                class="form-control {{$errors->has('roll')? 'has-error':''}}"
                                                placeholder="Class Roll is here..." value="{{old('role')}}">
                                            @if ($errors->has('roll'))
                                            <span class="invalid-feedback mb-0" role="alert">
                                                <strong>{{ $errors->first('roll') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                        <div class="col-lg-3 text-right">
                                            <label class="mb-0">Class 06 : <span>*</span></label>
                                        </div>
                                        <div class="col-lg-9">
                                            <input type="text" name="class" class="form-control"
                                                placeholder="Student From Class six..." disabled>
                                        </div>
                                        <div class="col-lg-3 text-right">
                                            <label class="mb-0">Section : <span>*</span></label>
                                        </div>
                                        <div class="col-lg-9">
                                            <input type="text" name="section" class="form-control" placeholder="N / A"
                                                disabled>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="card-footer">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-10">
                                <div class="d-flex justify-content-end">
                                    <a href="" class="btn btn-danger mr-3">Back</a>
                                    <button type="submit" class="btn btn-success"><span
                                            class="ti-upload"></span>Upload</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@push('js')

@endpush

@endsection
