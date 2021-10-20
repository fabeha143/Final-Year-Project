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
                                    <th>Address</th>
                                    <th>Joining Date</th>
                                    <th>Phone</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>3</td>
                                    <td>Fabeha</td>
                                    <td>Naqvi</td>
                                    <td>fabehanaqvi@gmail.com</td>
                                    <td>Female</td>
                                    <td>Admin</td>
                                    <td>B-27 Karachi</td>
                                    <td>12/7/21</td>
                                    <td>0398438792</td>
                                    
                                    <td class="d-flex justify-content-between"><a class="btn btn-primary btn-sm">Edit</a><a class="btn btn-danger btn-sm">Delete</a></td>
                                    
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Fabeha</td>
                                    <td>Naqvi</td>
                                    <td>fabehanaqvi@gmail.com</td>
                                    <td>Female</td>
                                    <td>Admin</td>
                                    <td>B-27 Karachi</td>
                                    <td>12/7/21</td>
                                    <td>0398438792</td>
                                    
                                    <td class="d-flex justify-content-between"><a class="btn btn-primary btn-sm">Edit</a><a class="btn btn-danger btn-sm">Delete</a></td>
                                    
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




@endsection()
