@extends('layouts.doctormaster')
@section('contentdoctor')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>Add Prescription</h2>
            <small class="text-muted">Welcome to Good Health application</small>
        </div>
        <div class="row clearfix">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<div class="card">
					<div class="header">
						<h2>Prescription <small>Description text here...</small> </h2> 
					</div>
					<div class="body">
                        <div class="row clearfix">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="Disease">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group drop-custum">
                                    <select class="form-control show-tick">
                                        <option value="">Medicines</option>
                                        <option value="10">Panadol</option>
                                        <option value="20">Panadol</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                              
                            
                            <div class="col-sm-6">
                                <div class="form-group drop-custum">
                                    <select class="form-control show-tick">
                                        <option value="">Weeks</option>
                                        <option value="10">1</option>
                                        <option value="20">2</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="datepicker form-control" placeholder="From Date">
                                    </div>
                                </div>
                            </div>  
                                                          
                        </div>
                        
                        <div class="row clearfix">                            
                        
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="datepicker form-control" placeholder="Till Date">
                                    </div>
                                </div>
                            </div>  
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="Medicine Dosage">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="">
                                <button type="submit" class="btn btn-raised g-bg-cyan">Submit</button>
                                <button type="submit" class="btn btn-danger">Cancel</button>
                            </div>
                        </div>
                       
                    </div>
				</div>
			</div>
		</div>
              
    </div>
</section>

@endsection()