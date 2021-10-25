@extends('layouts.doctormaster')
@section('contentdoctor')

<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>Appointment List</h2>
            <small class="text-muted">Welcome to Good Health</small>
        </div>
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="header">
                        <h2>Appointment</h2>
                    </div>
                    <div class="body table-responsive">
                        <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                            <thead>
                                <tr>
                                    <th>Patient Id</th>
                                    <th>Patient Name</th>
                                    <th>Patient Category</th>
                                    <th>Appointment Date</th>
                                    <th>Appointment Time</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Ayaz channa</td>
                                    <td>In Patient</td>
                                    <td>12/10/21</td>
                                    <td>7:00 AM</td>
                                    <td>Active</td>
                                    <td class="d-flex justify-content-center"><a class="btn btn-primary btn-sm" href="{{ url('/writePrescription')}}">Prescribe</a>
                                    
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Rana Hamza Ali</td>
                                    <td>Out patient</td>
                                    <td>12/10/21</td>
                                    <td>7:00 AM</td>
                                    <td>Active</td>
                                    <td class="d-flex justify-content-center"><a class="btn btn-primary btn-sm" href="{{ url('/writePrescription')}}">Prescribe</a>
                                    
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
