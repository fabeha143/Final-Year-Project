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
                            
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




@endsection()
