@extends('layouts.master')
@section('content')

<!-- #Float icon -->
<ul id="f-menu" class="mfbc-br mfb-zoomin" data-mfb-toggle="hover">
    <li class="mfbc_wrap">
        <a href="{{ route('patient.create')}}" class="mfbcb-main g-bg-cyan">
            <i class="mfbcm-icon-resting zmdi zmdi-plus"></i>
            <i class="mfbcm-icon-active zmdi zmdi-close"></i>
        </a>
    </li>
</ul>
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>Patient Details</h2>
            <small class="text-muted">Welcome to Good Health</small>
        </div>
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="header">
                        <h2>Patient Details</h2>
                    </div>
                    <div class="body table-responsive">
                        <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                            <thead>
                                <tr>
                                    <th>Patient Id</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Phone Number</th>
                                    <th>Addmission Date</th>
                                    <th>Age</th>
                                    <th>Gender</th>
                                    <th>Patient Catogary</th>
                                    <th>email</th>
                                    <th>Address</th>
                                    <th>Doctor Name</th>
                                    <th>ward no</th>
                                    <th>patient date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            <!-- @if(count($patients))
                                @foreach($patients as $list) -->
                                    <!-- <tr> -->
                                        <!-- <td>{{ $list->pt_id}}</td>
                                        <td>{{ $list->pt_fname}}</td>
                                        <td>{{ $list->pt_lname}}</td>
                                        <td>{{ $list->pt_phone}}</td>
                                        <td>{{ $list->pt_addmission_date}}</td>
                                        <td>{{ $list->pt_age}}</td>
                                        <td>{{ $list->pt_gender}}</td>
                                        <td>{{ $list->pt_category}}</td>
                                        <td>{{ $list->pt_email}}</td>
                                        <td>{{ $list->pt_address}}</td>
                                        <td>{{ $list->pt_doc_name}}</td>
                                        <td>{{ $list->pt_attendant}}</td>
                                        <td>{{ $list->ward_no}}</td>
                                        <td>{{ $list->pt_date}}</td>
                                        
                                        <td class="d-flex justify-content-between"><a class="btn btn-primary btn-sm">Edit</a><a class="btn btn-danger btn-sm">Delete</a></td> -->
                                        
                                    <!-- </tr>
                                @endforeach
                            @endif -->
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




@endsection()
