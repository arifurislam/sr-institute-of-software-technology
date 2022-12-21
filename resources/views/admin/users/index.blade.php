@extends('layouts.admin')
@section('title','all-users')
@push('css')

@endpush
@section('contents')
<div class="row">
    <div class="col-lg-12 p-r-0 title-margin-right">
        <div class="page-header">
            <div class="page-title">
                <h1>Hello, <span>Welcome Here</span> </h1>
                <h1 class="text-info">Total Users( {{$tUsers}} )</h1>
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
    </div>
</div>
<div class="row justify-content-center">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-title border-bottom mb-3 pb-3">
                <div class="d-flex justify-content-between">
                    <h4>All User Informations </h4>
                    <a href="{{url('dashboard/users/create')}}" class="btn btn-primary"><i class="ti-plus mr-2"></i> Add
                        User</a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped mb-5">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Time</th>
                                <th>Manage</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $data)
                            <tr>
                                <th scope="row">{{$data->name}}</th>
                                <td>{{Str::limit($data->email, '15')}}</td>
                                <td>
                                    @if($data->role_id == 1)
                                    <span class="badge badge-primary">Admin</span>
                                    @else
                                    <span class="badge badge-info">Author</span>
                                    @endif
                                </td>
                                <td>{{$data->created_at->format('m - D : h ')}}</td>
                                <td class="manage-icons">
                                    <a href="{{url('dashboard/users/'.$data->id)}}"><i class="ti-plus"></i></a>
                                    <a href="{{url('dashboard/users/'.$data->id. '/edit')}}"><i
                                            class="ti-pencil"></i></a>
                                    <form action="{{url('dashboard/users/'.$data->id)}}" method="post" class="d-inline">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-primary px-1 py-0"><i
                                                class="ti-trash"></i></button>
                                    </form>
                                    <!-- <a href="{{url('dashboard/users/'.$data->id)}}"><i class="ti-trash"></i></a> -->
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="d-flex justify-content-end">
                    {{ $users->links() }}
                </div>
            </div>
        </div>
    </div>
</div>

@push('js')

@endpush
@endsection
