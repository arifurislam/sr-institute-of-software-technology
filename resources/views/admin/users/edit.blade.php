@extends('layouts.admin')
@section('title','update user')
@push('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
    integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
@endpush
@section('contents')
<div class="row">
    <div class="col-lg-12 p-r-0 title-margin-right">
        <div class="page-header">
            <div class="page-title">
                <h1>Hello, <span>Welcome Here</span> </h1>
            </div>
        </div>
    </div>
</div>
<div class="row justify-content-center">
    <div class="col-lg-10">
        <div class="card">
            <div class="card-title border-bottom mb-3 pb-3">
                <div class="">
                    <h4>Update User Informations</h4>
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
                </div>
            </div>
            <form action="{{url('dashboard/users/'.$user->id)}}" method="post">
                @csrf
                @method('put')
                <div class="card-body">
                    <!-- <input type="hidden" name="id" value="{{$user->id}}"> -->
                    <div class="form-group">
                        <label class="label-control ml-3"> Name : <span class="text-danger">*</span></label>
                        <input type="text" name="name" value="{{$user->name}}"
                            class="form-control input-default {{$errors->has('name')? 'has-error':''}}"
                            placeholder="User Name ...">
                        @if ($errors->has('name'))
                        <span class="invalid-feedback mb-0 mt-2" role="alert">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label class="label-control ml-3">Email Address : <span class="text-danger">*</span></label>
                        <input type="email" name="emailH" value="{{$user->email}}"
                            class="form-control not-allowed input-default {{$errors->has('email')? 'has-error':''}}"
                            placeholder="Email ..." disabled>
                        <input type="hidden" name="email" value="{{$user->email}}">
                        @if ($errors->has('email'))
                        <span class="invalid-feedback mb-0 mt-2" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                        @endif
                    </div>

                    <div class="form-group">
                        <label class="label-control ml-3">Contact info : <span class="text-danger">*</span></label>
                        <input type="text" name="contact" value="{{$user->contact}}"
                            class="form-control input-default {{$errors->has('contact')? 'has-error':''}}"
                            placeholder="Contact ...">
                        @if ($errors->has('contact'))
                        <span class="invalid-feedback mb-0 mt-2" role="alert">
                            <strong>{{ $errors->first('contact') }}</strong>
                        </span>
                        @endif
                    </div>

                    <div class="form-group">
                        <label class="label-control ml-3">Select User Role : <span class="text-danger">*</span></label>
                        <select class="form-control {{$errors->has('role')? 'has-error':''}}" name="role">
                            <option>Select User Role</option>
                            @foreach($roles as $role)
                            <option value="{{$role->id}}" @if ($role->id == $user->role_id) selected @endif>
                                {{$role->name}}</option>
                            @endforeach
                            @if ($errors->has('role'))
                            <span class="invalid-feedback mb-0 mt-2" role="alert">
                                <strong>{{ $errors->first('role') }}</strong>
                            </span>
                            @endif
                        </select>
                    </div>

                    <div class="form-group position-relative">
                        <label class="label-control ml-3">Password : <span class="text-danger">*</span></label>
                        <input type="password" name="password" id="pass2"
                            class="form-control input-default {{$errors->has('password')? 'has-error':''}}"
                            placeholder="Enter Your New Password ...">
                        <span id="icons2" onclick="myFunction2()">
                            <i id="eye2" class="fa-solid fa-eye"></i>
                            <i id="eyeSlash2" class="fa-solid fa-eye-low-vision"></i>
                        </span>
                        @if ($errors->has('password'))
                        <span class="invalid-feedback mb-0 mt-2" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="form-group position-relative">
                        <label class="label-control ml-3">Confirm Password : <span class="text-danger">*</span></label>
                        <input type="password" id="pass3" name="password_confirmation"
                            class="form-control input-default {{$errors->has('password_confirmation')? 'has-error':''}}"
                            placeholder="Re Enter Your New Password ...">
                        <span id="icons3" onclick="myFunction3()">
                            <i id="eye3" class="fa-solid fa-eye"></i>
                            <i id="eyeSlash3" class="fa-solid fa-eye-low-vision"></i>
                        </span>
                        @if ($errors->has('password_confirmation'))
                        <span class="invalid-feedback mb-0 mt-2" role="alert">
                            <strong>{{ $errors->first('password_confirmation') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>
                <div class="card-footer border-0">
                    <div class="d-flex justify-content-end  pt-3">
                        <a href="{{url('dashboard/users')}}" class="btn btn-danger"><i
                                class="ti-angle-double-left mr-2"></i> Back To Users</a>
                        <button type="submit" class="btn btn-success ml-4"><span class="ti-upload mr-2"></span>Update
                            Now</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@push('js')
<script src="{{asset('admin')}}/js/toggle-icon.js"></script>
@endpush
@endsection
