@extends('layouts.master')
@section('content')

<!-- #Float icon -->
<ul id="f-menu" class="mfbc-br mfb-zoomin" data-mfb-toggle="hover">
    <li class="mfbc_wrap">
        <a href="{{ route('department.create')}}" class="mfbcb-main g-bg-cyan">
            <i class="mfbcm-icon-resting zmdi zmdi-plus"></i>
            <i class="mfbcm-icon-active zmdi zmdi-close"></i>
        </a>
    </li>
</ul>
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>Department</h2>
            <small class="text-muted">Welcome to Good Health</small>
        </div>
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="header">
                        <h2>Department</h2>
                    </div>
                    <div class="body table-responsive">
                        <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                            <thead>
                                <tr>
                                    <th>Depart_id</th>
                                    <th>Depart_name</th>
                                    <th>Description</th>
                                    <th>Depart_status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Neurology</td>
                                    <td>THis is the description</td>
                                    <td>Active</td>
                                    <td class="d-flex justify-content-center"><a class="btn btn-primary btn-sm">Edit</a><a class="btn btn-danger btn-sm">Delete</a></td>
                                    
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>Neurology</td>
                                    <td>THis is the description</td>
                                    <td>Active</td>
                                    <td class="d-flex justify-content-center"><a class="btn btn-primary btn-sm">Edit</a><a class="btn btn-danger btn-sm">Delete</a></td>
                                    
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
