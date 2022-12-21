@extends('layouts.admin')
@section('title','Admin Pannel')
@section('contents')
<div class="row">
    <!-- month -->
    <div class="col-lg-3">
        <a href="{{url('dashboard/contact/month')}}">
            <div class="card">
                <div class="stat-widget-one">
                    <div class="stat-icon dib"><i class="ti-user color-primary border-primary"></i>
                    </div>
                    <div class="stat-content dib">
                        <div class="stat-text">
                            <h4>Month</h4>
                        </div>
                        <div class="stat-text">This</div>
                        <div class="stat-digit text-danger">
                            <strong>{{$monthC}}</strong>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>
    <!-- month -->
    <!-- 7 days -->
    <div class="col-lg-3">
        <a href="{{url('dashboard/contact/seven/day')}}">
            <div class="card">
                <div class="stat-widget-one">
                    <div class="stat-icon dib"><i class="ti-user color-primary border-primary"></i>
                    </div>
                    <div class="stat-content dib">
                        <div class="stat-text">
                            <h4>7 Days</h4>
                        </div>
                        <div class="stat-text">Privious</div>
                        <div class="stat-digit text-danger">
                            <strong>{{$sevenC}}</strong>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>
    <!-- 7 days -->
    <!-- yesterday -->
    <div class="col-lg-3">
        <a href="{{url('dashboard/contact/yesterday')}}">
            <div class="card">
                <div class="stat-widget-one">
                    <div class="stat-icon dib"><i class="ti-user color-primary border-primary"></i>
                    </div>
                    <div class="stat-content dib">
                        <div class="stat-text">
                            <h4>{{Str::limit('Yesterday', 6)}}</h4>
                        </div>
                        <div class="stat-text">Privious</div>
                        <div class="stat-digit text-danger">
                            <strong>{{$yesterdayC}}</strong>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>

    <!-- today -->
    <div class="col-lg-3">
        <a href="{{url('dashboard/contact/today')}}">
            <div class="card">
                <div class="stat-widget-one">
                    <div class="stat-icon dib"><i class="ti-user color-primary border-primary"></i>
                    </div>
                    <div class="stat-content dib">
                        <div class="stat-text">
                            <h4>Today</h4>
                        </div>
                        <div class="stat-text">Today</div>
                        <div class="stat-digit text-danger">
                            <strong>{{$todayC}}</strong>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>
</div>
<!-- /today -->

<div class="row">
    <div class="col-lg-8 p-r-0 title-margin-right">
        <div class="page-header">
            <div class="page-title">
                <h1>Recently Added students, <span>Last (10)</span></h1>
            </div>
        </div>
    </div>
</div>
<!-- /# row -->
<section id="main-content">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="bootstrap-data-table-panel">
                    <div class="table-responsive">
                        <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Contact</th>
                                    <th>Qualification</th>
                                    <th>Gender</th>
                                    <th>age</th>
                                    <th>Time</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($lastTen as $contact)
                                <tr>

                                <tr>
                                    <td>{{$contact->name}}</td>
                                    <td>{{Str::limit($contact->email ,25)}}</td>
                                    <td>{{$contact->number}}</td>
                                    <td>
                                        {{$contact->qua_id == 1 ? 'Diploma-In-Engineering': 'Graduation'}}
                                    </td>
                                    <td>
                                        {{$contact->gender_id == 1 ? 'Male': 'Female'}}
                                    </td>
                                    <td>{{$contact->age}}</td>
                                    <td>{{$contact->created_at->format('h: i: a  M-d')}}</td>
                                </tr>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>

</section>


@endsection
