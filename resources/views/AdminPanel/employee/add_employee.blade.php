@extends('layouts.master')
@section('content')
    
    

<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>Add Employee</h2>
            <small class="text-muted">Welcome to Good Health</small>
        </div>
        <div class="row clearfix">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<div class="card">
					<div class="header">
						<h2>Basic Information <small>Description text here...</small> </h2> 
					</div>
					{{ Form::open(array('route' => 'employee.store' , 'method' => 'POST' , 'class' => 'body')) }}
                        <div class="row clearfix">
                            <div class="col-lg-4 col-sm-12">
                                <div class="form-group">
                                    <div class="form-line">
                                    {{ Form::text('Fname','First Name',array('class' => 'form-control'))}}
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="col-lg-4 col-sm-12">
                                <div class="form-group">
                                    <div class="form-line">
                                    {{ Form::text('lname','Last Name',array('class' => 'form-control'))}}
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-12">
                                <div class="form-group">
                                    <div class="form-line">
                                    {{ Form::email('email','Email',array('class' => 'form-control'))}}
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <div class="row clearfix">                            <div class="col-lg-4 col-sm-12">
                                <div class="form-group">
                                    <div class="form-line">
                                        {{ Form::text('phone','Phone Number',array('class' => 'form-control'))}}
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <div class="form-line">
                                    {{ Form::text('joining_date','Joining Date',array('class' => 'form-control'))}}
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-lg-4">
                                <div class="form-group drop-custum">
                                {{ Form::select('gender',array('f' => 'Female' , 'm'=>'Male'),'null',['class'=> 'form-control' , 'placeholder' => 'Please Select' ] )}}
                                </div>
                            </div> -->
                            <!-- <div class="col-lg-4">
                                <div class="form-group drop-custum">
                                {!! Form::select('emp_role', $employee_role,'null',['class'=> 'form-control' , 'placeholder' => 'Please Select Role' ]) !!}
                                </div>
                            </div>  -->
                          <div>
                              <div>
                              <div class="form-group drop-custum">
                                {{ Form::select('emp_role',array('1' => 'admin' , '2'=>'doctor'),'null',['class'=> 'form-control' , 'placeholder' => 'Please Select' ] )}}
                                </div>
                              </div>
                          </div>
                        </div>
                        
                        <div class="row clearfix">                            
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <div class="form-line">
                                    {{ Form::textarea('address','Address',array('class' => 'form-control'))}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                       
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <div class="form-line">
                                    {{ Form::text('username','Username',array('class' => 'form-control', 'placeholder' => 'Username'))}}
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <div class="form-line">
                                    {{ Form::password('password',array('class' => 'form-control', 'placeholder' => 'Password'))}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <div class="form-line">
                                    {{ Form::password('password_confirmation',array('class' => 'form-control', 'placeholder' => 'Confirm Password'))}}
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">                                                             
                            </div>
                            <div class="col-sm-12">
                            {{ Form::submit('Submit',array('class' => 'btn btn-raised g-bg-cyan'))}}
                            {{ Form::submit('Cancel',array('class' => 'btn btn-danger'))}}
                            </div>
                        </div>
                    {{ Form::close() }}
				</div>
			</div>
		</div>        
    </div>
</section>
<div class="color-bg"></div>
@endsection()