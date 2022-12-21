@extends('layouts.admin')
@section('title','singel-info')
@push('css')

@endpush
@section('contents')
<div class="row">
    <div class="col-lg-12 p-r-0 title-margin-right">
        <div class="page-header">
            <div class="page-title">
                <h1>Hello, <span>Welcome Here</span></h1>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <table class="table table-striped table-bordered view_table_custom">
            <tr>
                <td>Name</td>
                <td>:</td>
                <td>{{$data->name}}</td>
            </tr>
            <tr>
                <td>Email</td>
                <td>:</td>
                <td>{{$data->email}}</td>
            </tr>
            <tr>
                <td>Contact</td>
                <td>:</td>
                <td>{{$data->number}}</td>
            </tr>
            <tr>
                <td>Gender</td>
                <td>:</td>
                <td>@if($data->gender_id == 1)
                    {{'Male'}}
                  @else
                    {{'Female'}}
                  @endif
                </td>
            </tr>
            <tr>
                <td>Qualifications</td>
                <td>:</td>
                <td>
                  @if($data->qua_id == 1)
                    {{'Diploma-In-Engineering Complete'}}
                  @else
                    {{'Graduation Complete'}}
                  @endif
                </td>
            </tr>
            <tr>
                <td>Age</td>
                <td>:</td>
                <td>{{$data->age . ' Years Old'}}</td>
            </tr>
            <tr>
                <td>Registration Time</td>
                <td>:</td>
                <td>{{$data->created_at->format('h: i: s a  Y - M - D')}}</td>
            </tr>
        </table>
    </div>
    <div class="col-md-2"></div>
</div>

@push('js')

@endpush
@endsection
