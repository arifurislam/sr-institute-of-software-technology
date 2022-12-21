@extends('layouts.admin')
@section('title','singel-user-info')
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
                <td>{{$user->name}}</td>
            </tr>
            <tr>
                <td>Email</td>
                <td>:</td>
                <td>{{$user->email}}</td>
            </tr>
            <tr>
                <td>Contact</td>
                <td>:</td>
                <td>{{$user->contact}}</td>
            </tr>
            <tr>
                <td>Status</td>
                <td>:</td>
                <td>
                   @if($user->status == 1)
                    <span class="bg-success py-1 px-2 rounded">Active</span>
                    @else
                    <span class="bg-secondary py-1 px-2 rounded">Deactive</span>
                    @endif
                </td>
            </tr>
            <tr>
                <td>User Role</td>
                <td>:</td>
                <td>
                  @if($user->role_id == 1)
                    <span class="bg-primary py-1 px-2 rounded">Admin</span>
                    @else
                    <span class="bg-secondary text-white py-1 px-2 rounded">Author</span>
                    @endif
                </td>
            </tr>
            <tr>
                <td>Time</td>
                <td>:</td>
                <td>{{$user->created_at->format('h: i: s a  Y - M - D')}}</td>
            </tr>
        </table>
    </div>
    <div class="col-md-2"></div>
</div>

@push('js')

@endpush
@endsection
