@extends('layouts.admin')
@section('title','this-month')
@push('css')
<link href="{{asset('admin')}}/css/lib/data-table/buttons.bootstrap.min.css" rel="stylesheet" />
@endpush
@section('contents')
<div class="row">
    <div class="col-lg-12 p-r-0 title-margin-right">
        <div class="page-header">
            <div class="page-title">
                <span>Welcome Here, </span> <span>
                  <b>Month :</b> <b class="text-danger">{{$currentM}}</b></span>
                <h3>Total Contacts ({{$monthC}})</h3>
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

                                @foreach($month as $contact)
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
                                @endforeach


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>

</section>

@push('js')

<script src="{{asset('admin')}}/js/lib/data-table/datatables.min.js"></script>
<script src="{{asset('admin')}}/js/lib/data-table/dataTables.buttons.min.js"></script>
<script src="{{asset('admin')}}/js/lib/data-table/buttons.flash.min.js"></script>
<script src="{{asset('admin')}}/js/lib/data-table/jszip.min.js"></script>
<script src="{{asset('admin')}}/js/lib/data-table/pdfmake.min.js"></script>
<script src="{{asset('admin')}}/js/lib/data-table/vfs_fonts.js"></script>
<script src="{{asset('admin')}}/js/lib/data-table/buttons.html5.min.js"></script>
<script src="{{asset('admin')}}/js/lib/data-table/buttons.print.min.js"></script>
<script src="{{asset('admin')}}/js/lib/data-table/datatables-init.js"></script>

@endpush
@endsection
