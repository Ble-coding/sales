@extends('layouts.master')
@section('css')
		<!--INTERNAL Select2 css -->
		<link href="{{URL::asset('assets/plugins/select2/select2.min.css')}}" rel="stylesheet" />
@endsection
@section('page-header')
						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title mb-0">Ventes</h4>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#"><i class="fe fe-file-text mr-2 fs-14"></i>ventes</a></li>
									<li class="breadcrumb-item active" aria-current="page"><a href="#">Forms</a></li>
								</ol>
							</div>
						</div>
                        <!--End Page header-->
@endsection
@section('content')
					
	 {{-- @if(session()->has('message'))
								<div class="alert alert-success" role="alert">
								{{ session()->get('message') }}
							</div>
						@endif  --}}
						<!-- Row -->
            
						<div class="row">
							<div class="col-lg-12 col-xl-12 col-md-12 col-sm-12">
								<div class="card">
									<div class="card-header">
										<h4 class="card-title">Enregistrement</h4>
									</div>
									<div class="card-body">
										<div class="row">
											<div class="col-lg-6 col-md-12">
                                                 {{-- @if(!session()->has('message')) --}}
												<form class="form-horizontal" action="{{ route('purchases.store') }}" method="POST" enctype="multipart/form-data">                                    
												@include('includes.formpurchase')
                                                <div class="text-wrap">
	
		<div class="btn-list text-right">
			<button type="submit" class="btn btn-primary">Sauvegarder</button>
														{{-- <a class="btn btn-success" data-target="#modaldemo3" data-toggle="modal" href="">Nouveau client</a> --}}
			{{-- <button data-target="#modaldemo2" data-toggle="modal" href="" class="btn btn-secondary">Créer un nouveau client</button> --}}
			{{-- <a href="http://localhost:8000/#" class="btn btn-secondary">Save and continue</a>
			<a href="http://localhost:8000/#" class="btn btn-danger">Cancel</a> --}}
		</div>
												</form>
                                                  {{-- @endif --}}
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
	
					</div>
				</div><!-- end app-content-->
            </div>
@endsection
@section('js')
		<!--INTERNAL Select2 js -->
		<script src="{{URL::asset('assets/plugins/select2/select2.full.min.js')}}"></script>
		<script src="{{URL::asset('assets/js/select2.js')}}"></script>
@endsection