@extends('layouts.master')
@section('content')
<!-- #Float icon -->
<ul id="f-menu" class="mfbc-br mfb-zoomin" data-mfb-toggle="hover">
    <li class="mfbc_wrap">
        <a href="{{ route('doctor.create')}}" class="mfbcb-main g-bg-cyan">
            <i class="mfbcm-icon-resting zmdi zmdi-plus"></i>
            <i class="mfbcm-icon-active zmdi zmdi-close"></i>
        </a>
    </li>
</ul>
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>Doctors Details</h2>
            <small class="text-muted">Welcome to Good Health</small>
        </div>
        <div class="row clearfix">
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                <div class="card">
                    <div class="header">
                        <ul class="header-dropdown m-r--5">
                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="zmdi zmdi-more-vert"></i></a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="javascript:void(0);" class=" waves-effect waves-block">Edit</a></li>
                                    <li><a href="javascript:void(0);" class=" waves-effect waves-block">Delete</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <div class="member-card verified">
                            <div class="thumb-xl member-thumb">
                                <img src="images/c.jpg" class="img-thumbnail rounded-circle" alt="profile-image">
                            </div>

                            <div class="">
                                <h4 class="m-b-5 m-t-20">Dr. Tania</h4>
                                <p class="text-muted">Dentist</p>
                            </div>

                            <p class="text-muted">Flat no 10 Gulistan e johar Karachi</p>
                            <ul class="social-links list-inline m-t-10">
                                <li><a title="facebook" href="javascript:void(0);"><i class="zmdi zmdi-facebook"></i></a></li>
                                <li><a title="twitter" href="javascript:void(0);"><i class="zmdi zmdi-twitter"></i></a></li>
                                <li><a title="instagram" href="javascript:void(0);"><i class="zmdi zmdi-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                <div class="card">
                    <div class="header">
                        <ul class="header-dropdown m-r--5">
                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="zmdi zmdi-more-vert"></i></a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="javascript:void(0);" class=" waves-effect waves-block">Edit</a></li>
                                    <li><a href="javascript:void(0);" class=" waves-effect waves-block">Delete</a></li>

                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <div class="member-card verified">
                            <div class="thumb-xl member-thumb">
                                <img src="images/c.jpg" class="img-thumbnail rounded-circle" alt="profile-image">
                            </div>

                            <div class="">
                                <h4 class="m-b-5 m-t-20">Dr. Tania</h4>
                                <p class="text-muted">Dentist</p>
                            </div>

                            <p class="text-muted">Flat no 10 Gulistan e johar Karachi</p>
                            <ul class="social-links list-inline m-t-10">
                                <li><a title="facebook" href="javascript:void(0);"><i class="zmdi zmdi-facebook"></i></a></li>
                                <li><a title="twitter" href="javascript:void(0);"><i class="zmdi zmdi-twitter"></i></a></li>
                                <li><a title="instagram" href="javascript:void(0);"><i class="zmdi zmdi-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                <div class="card">
                    <div class="header">
                        <ul class="header-dropdown m-r--5">
                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="zmdi zmdi-more-vert"></i></a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="javascript:void(0);" class=" waves-effect waves-block">Edit</a></li>
                                    <li><a href="javascript:void(0);" class=" waves-effect waves-block">Delete</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <div class="member-card verified">
                            <div class="thumb-xl member-thumb">
                                <img src="images/c.jpg" class="img-thumbnail rounded-circle" alt="profile-image">
                            </div>

                            <div class="">
                                <h4 class="m-b-5 m-t-20">Dr. Tania</h4>
                                <p class="text-muted">Dentist</p>
                            </div>

                            <p class="text-muted">Flat no 10 Gulistan e johar Karachi</p>
                            <ul class="social-links list-inline m-t-10">
                                <li><a title="facebook" href="javascript:void(0);"><i class="zmdi zmdi-facebook"></i></a></li>
                                <li><a title="twitter" href="javascript:void(0);"><i class="zmdi zmdi-twitter"></i></a></li>
                                <li><a title="instagram" href="javascript:void(0);"><i class="zmdi zmdi-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                <div class="card">
                    <div class="header">
                        <ul class="header-dropdown m-r--5">
                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="zmdi zmdi-more-vert"></i></a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="javascript:void(0);" class=" waves-effect waves-block">Edit</a></li>
                                    <li><a href="javascript:void(0);" class=" waves-effect waves-block">Delete</a></li>
                                
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <div class="member-card verified">
                            <div class="thumb-xl member-thumb">
                                <img src="images/c.jpg" class="img-thumbnail rounded-circle" alt="profile-image">
                            </div>

                            <div class="">
                                <h4 class="m-b-5 m-t-20">Dr. Tania</h4>
                                <p class="text-muted">Dentist</p>
                            </div>

                            <p class="text-muted">Flat no 10 Gulistan e johar Karachi</p>
                            <ul class="social-links list-inline m-t-10">
                                <li><a title="facebook" href="javascript:void(0);"><i class="zmdi zmdi-facebook"></i></a></li>
                                <li><a title="twitter" href="javascript:void(0);"><i class="zmdi zmdi-twitter"></i></a></li>
                                <li><a title="instagram" href="javascript:void(0);"><i class="zmdi zmdi-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                <div class="card">
                    <div class="header">
                        <ul class="header-dropdown m-r--5">
                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="zmdi zmdi-more-vert"></i></a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="javascript:void(0);" class=" waves-effect waves-block">Edit</a></li>
                                    <li><a href="javascript:void(0);" class=" waves-effect waves-block">Delete</a></li>
                                    
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <div class="member-card verified">
                            <div class="thumb-xl member-thumb">
                                <img src="images/c.jpg" class="img-thumbnail rounded-circle" alt="profile-image">
                            </div>

                            <div class="">
                                <h4 class="m-b-5 m-t-20">Dr. Tania</h4>
                                <p class="text-muted">Dentist</p>
                            </div>

                            <p class="text-muted">Flat no 10 Gulistan e johar Karachi</p>
                            <ul class="social-links list-inline m-t-10">
                                <li><a title="facebook" href="javascript:void(0);"><i class="zmdi zmdi-facebook"></i></a></li>
                                <li><a title="twitter" href="javascript:void(0);"><i class="zmdi zmdi-twitter"></i></a></li>
                                <li><a title="instagram" href="javascript:void(0);"><i class="zmdi zmdi-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                <div class="card">
                    <div class="header">
                        <ul class="header-dropdown m-r--5">
                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="zmdi zmdi-more-vert"></i></a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="javascript:void(0);" class=" waves-effect waves-block">Edit</a></li>
                                    <li><a href="javascript:void(0);" class=" waves-effect waves-block">Delete</a></li>
                                    
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <div class="member-card verified">
                            <div class="thumb-xl member-thumb">
                                <img src="images/c.jpg" class="img-thumbnail rounded-circle" alt="profile-image">
                            </div>

                            <div class="">
                                <h4 class="m-b-5 m-t-20">Dr. Tania</h4>
                                <p class="text-muted">Dentist</p>
                            </div>

                            <p class="text-muted">Flat no 10 Gulistan e johar Karachi</p>
                            <ul class="social-links list-inline m-t-10">
                                <li><a title="facebook" href="javascript:void(0);"><i class="zmdi zmdi-facebook"></i></a></li>
                                <li><a title="twitter" href="javascript:void(0);"><i class="zmdi zmdi-twitter"></i></a></li>
                                <li><a title="instagram" href="javascript:void(0);"><i class="zmdi zmdi-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                <div class="card">
                    <div class="header">
                        <ul class="header-dropdown m-r--5">
                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="zmdi zmdi-more-vert"></i></a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="javascript:void(0);" class=" waves-effect waves-block">Edit</a></li>
                                    <li><a href="javascript:void(0);" class=" waves-effect waves-block">Delete</a></li>
                                    
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <div class="member-card verified">
                            <div class="thumb-xl member-thumb">
                                <img src="images/c.jpg" class="img-thumbnail rounded-circle" alt="profile-image">
                            </div>

                            <div class="">
                                <h4 class="m-b-5 m-t-20">Dr. Tania</h4>
                                <p class="text-muted">Dentist</p>
                            </div>

                            <p class="text-muted">Flat no 10 Gulistan e johar Karachi</p>
                            <ul class="social-links list-inline m-t-10">
                                <li><a title="facebook" href="javascript:void(0);"><i class="zmdi zmdi-facebook"></i></a></li>
                                <li><a title="twitter" href="javascript:void(0);"><i class="zmdi zmdi-twitter"></i></a></li>
                                <li><a title="instagram" href="javascript:void(0);"><i class="zmdi zmdi-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                <div class="card">
                    <div class="header">
                        <ul class="header-dropdown m-r--5">
                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="zmdi zmdi-more-vert"></i></a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="javascript:void(0);" class=" waves-effect waves-block">Edit</a></li>
                                    <li><a href="javascript:void(0);" class=" waves-effect waves-block">Delete</a></li>
                                    <
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <div class="member-card verified">
                            <div class="thumb-xl member-thumb">
                                <img src="images/c.jpg" class="img-thumbnail rounded-circle" alt="profile-image">
                            </div>

                            <div class="">
                                <h4 class="m-b-5 m-t-20">Dr. Tania</h4>
                                <p class="text-muted">Dentist</p>
                            </div>

                            <p class="text-muted">Flat no 10 Gulistan e johar Karachi</p>
                            <ul class="social-links list-inline m-t-10">
                                <li><a title="facebook" href="javascript:void(0);"><i class="zmdi zmdi-facebook"></i></a></li>
                                <li><a title="twitter" href="javascript:void(0);"><i class="zmdi zmdi-twitter"></i></a></li>
                                <li><a title="instagram" href="javascript:void(0);"><i class="zmdi zmdi-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    </div>
</section>

@endsection()