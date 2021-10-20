@extends('layouts.master')
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>Appointment</h2>
            <small class="text-muted">Welcome to Good Health</small>
        </div>
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="header">
                        <h2>Patient Appointment</h2>
                    </div>
                    <div class="body table-responsive">
                        <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                            <thead>
                                <tr>
                                    <th>Appointment Id</th>
                                    <th>Patient Id</th>
                                    <th>Age</th>
                                    <th>Doctor Name</th>
                                    <th>Department</th>
                                    <th>Appointment Date</th>
                                    <th>Appointment Time</th>
                                    <th>Appointment Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1021</td>
                                    <td>200</td>
                                    <td>80</td>
                                    <td>Sheroz raees</td>
                                    <td>cardiology</td>
                                    <td>2011/04/25</td>
                                    <td>7:00</td>
                                    <td>Approved</td>
                                    <td class="d-flex justify-content-between"><a class="btn btn-primary btn-sm">Approve</a><a class="btn btn-danger btn-sm">Cancel</a></td>
                                    
                                </tr>
                                <tr>
                                    <td>1021</td>
                                    <td>200</td>
                                    <td>80</td>
                                    <td>Tania</td>
                                    <td>Child Specialist</td>
                                    <td>2011/04/25</td>
                                    <td>7:00</td>
                                    <td>Cancel</td>
                                    <td class="d-flex justify-content-between"><a class="btn btn-primary btn-sm">Approve</a><a class="btn btn-danger btn-sm">Cancel</a></td>
                                    
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="color-bg"></div>
@endsection()