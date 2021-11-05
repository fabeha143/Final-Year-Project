@extends('layouts.master')
@section('content')

<!-- #Float icon -->
<ul id="f-menu" class="mfbc-br mfb-zoomin" data-mfb-toggle="hover">
    <li class="mfbc_wrap">
        <a href="{{ route('employee.create')}}" class="mfbcb-main g-bg-cyan">
            <i class="mfbcm-icon-resting zmdi zmdi-plus"></i>
            <i class="mfbcm-icon-active zmdi zmdi-close"></i>
        </a>
    </li>
</ul>
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>Employee Details</h2>
            <small class="text-muted">Welcome to Good Health</small>
        </div>
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="header">
                        <h2>Employee Details</h2>
                    </div>
                    <div class="body table-responsive">
                        <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                            <thead>
                                <tr>
                                    <th>Employee Id</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Email</th>
                                    <th>Gender</th>
                                    <th>Employee Role</th>
                                    <th>Joining Date</th>
                                    <th>Phone</th>
                                    <th>Address</th>
                                    <th>username</th>
                                    <th>password</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @if(count($employee))
                                @foreach($employee as $list)
                                    <tr>
                                        <td>{{ $list->id}}</td>
                                        <td>{{ $list->emp_fname}}</td>
                                        <td>{{ $list->emp_lname}}</td>
                                        <td>{{ $list->emp_email}}</td>
                                        <td>{{ $list->emp_gender}}</td>
                                        <td>{{ $role->emp_role}}</td>
                                        <td>{{ $list->emp_joining_date}}</td>
                                        <td>{{ $list->emp_phone}}</td>
                                        <td>{{ $list->emp_address}}</td>
                                        <td>{{ $list->emp_username}}</td>
                                        <td>{{ $list->emp_password}}</td>
                                        
                                        <td class="d-flex justify-content-between"><a class="btn btn-primary btn-sm">Edit</a><a class="btn btn-danger btn-sm">Delete</a></td>
                                        
                                    </tr>
                                @endforeach
                            @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




@endsection()
