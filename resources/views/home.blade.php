{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        <h1>Salut, {{Auth::user()->name}}, bienvenue sur ton dashboard</h1>
                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
						@extends('layouts.master')
						@section('page-header')
						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title mb-0">Hi!  {{ Auth::user()->name }}</h4>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#"><i class="fe fe-home mr-2 fs-14"></i>Home</a></li>
									<li class="breadcrumb-item active" aria-current="page"><a href="#">Sales Dashboard</a></li>
								</ol>
							</div>
							<div class="page-rightheader">
								<div class="btn btn-list">
									{{-- <a href="{{url('/' . $page='#')}}" class="btn btn-info"><i class="fe fe-settings mr-1"></i> General Settings </a> --}}
									{{-- <a href="{{url('#')}}" class="btn btn-danger"><i class="fe fe-printer mr-1"></i> Print </a> --}}
									{{-- <a href="{{url('/' . $page='#')}}" class="btn btn-warning"><i class="fe fe-shopping-cart mr-1"></i> Buy Now </a> --}}
								</div>
							</div>
						</div>
						<!--End Page header-->
						@endsection
						@section('content')						
						<!-- Row-1 -->
						<div class="row">
							<div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
								<div class="card overflow-hidden dash1-card border-0">
									<div class="card-body">
										<p class=" mb-1 ">Montant Total</p>
										<h2 class="mb-1 number-font">{{ number_format($sumMontant, 0, ',', ' ') }}</h2>
										<small class="fs-12 text-muted">Montant des ventes globales</small>
										{{-- <span class="">76%</span> --}}
										<span class="ratio bg-warning">FCFA</span>
									</div>
									<div id="spark1"></div>
								</div>
							</div>
							<div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
								<div class="card overflow-hidden dash1-card border-0">
									<div class="card-body">
										<p class=" mb-1 ">Ventes Mois</p>
										<h2 class="mb-1 number-font">{{ number_format($sumCurrentMonth, 0, ',', ' ') }}</h2>
										<small class="fs-12 text-muted">Le montant des ventes du mois</small>
										<span class="ratio bg-info">FCFA </span>
										{{-- <span class="ratio-text text-muted">Goals Reached</span> --}}
									</div>
									<div id="spark2"></div>
								</div>
							</div>
							<div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
								<div class="card overflow-hidden dash1-card border-0">
									<div class="card-body">
										<p class=" mb-1 ">Ventes Jour</p>
										<h2 class="mb-1 number-font">{{ number_format($sumDay, 0, ',', ' ') }}</h2>
										<small class="fs-12 text-muted">Ventes du jour pour <span class="text-success"> {{$count}}</span> produit @if($count > 1)s @endif  </small>
										{{-- <small class="fs-12 text-muted">Ventes du jour pour  produits  </small> --}}
										<span class="ratio bg-success">FCFA</span>
										{{-- <span class="ratio-text text-muted">Goals Reached</span> --}}
									</div>
									<div id="spark3"></div>
								</div>
							</div>
							<div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
								<div class="card overflow-hidden dash1-card border-0">
									<div class="card-body">
										<p class=" mb-1">Ventes Mois pass??</p>
										<h2 class="mb-1 number-font">{{ number_format($sumPreviousMonth, 0, ',', ' ') }}</h2>
										<small class="fs-12 text-muted">Le montant des ventes du mois pass??</small>
										<span class="ratio bg-primary">FCFA</span>
									</div>
									<div id="spark4"></div>
								</div>
							</div>
						</div>
						<!-- End Row-1 -->

						<!--Row 2-->
						<div class="row">
							<div class="col-xl-12 col-lg-12 col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Les 5 derni??res ventes</h3>
										{{-- <div class="card-options">
											<a href="{{url('/' . $page='#')}}" class="option-dots" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-horizontal fs-20"></i></a>
											<div class="dropdown-menu dropdown-menu-right">
												<a class="dropdown-item" href="{{url('/' . $page='#')}}">Today</a>
												<a class="dropdown-item" href="{{url('/' . $page='#')}}">Last Week</a>
												<a class="dropdown-item" href="{{url('/' . $page='#')}}">Last Month</a>
												<a class="dropdown-item" href="{{url('/' . $page='#')}}">Last Year</a>
											</div>
										</div> --}}
									</div>
									<div class="card-body">
										<div class="table-responsive">
											<table class="table table-vcenter text-nowrap mb-0 table-striped table-bordered border-top">
									<thead>
													<tr>
														<th>Id</th>
														<th>Date</th>
														<th>Client</th>
														<th>Produits</th>
														{{-- <th>Stock</th> --}}
														<th>Quantit??s</th>
														<th>PU</th>
														{{-- <th>Action</th> --}}
													</tr>
												</thead>
												<tbody>
														@if(!empty($purchases) && $purchases->count())
											  				   @foreach($purchases as $purchase)
												<tr>
												<th scope="row">{{$purchase->id}}</th>
												<td>{{ \Carbon\Carbon::parse($purchase->date)->format('d/m/Y')}}</td>
													<td>{{$purchase->client->nomcli}}</td>
													<td>{{$purchase->appro->produit->marque}} - {{$purchase->appro->produit->model}}</td>
													{{-- <td>{{$purchase->stock->libelle}}</td> --}}
													<td>{{$purchase->purchase_quantity}}</td>
													<td>{{ number_format($purchase->montant, 0, ',', ' ') }}</td>
												

												</tr>
												    @endforeach
												@else
																	<tr>
																			<td colspan="10" class="text-center"><i style="color: white"><strong>Aucun enregistrements correspondants trouv??s</strong></i></td>
																		</tr>
												@endif
										
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!--End row 2-->

					</div>
				</div>
				<!-- End app-content-->
			</div>
@endsection
@section('js')

<!--INTERNAL Peitychart js-->
<script src="{{URL::asset('assets/plugins/peitychart/jquery.peity.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/peitychart/peitychart.init.js')}}"></script>

<!--INTERNAL Apexchart js-->
<script src="{{URL::asset('assets/js/apexcharts.js')}}"></script>

<!--INTERNAL ECharts js-->
<script src="{{URL::asset('assets/plugins/echarts/echarts.js')}}"></script>

<!--INTERNAL Chart js -->
<script src="{{URL::asset('assets/plugins/chart/chart.bundle.js')}}"></script>
<script src="{{URL::asset('assets/plugins/chart/utils.js')}}"></script>

<!-- INTERNAL Select2 js -->
<script src="{{URL::asset('assets/plugins/select2/select2.full.min.js')}}"></script>
<script src="{{URL::asset('assets/js/select2.js')}}"></script>

<!--INTERNAL Moment js-->
<script src="{{URL::asset('assets/plugins/moment/moment.js')}}"></script>

<!--INTERNAL Index js-->
<script src="{{URL::asset('assets/js/index1.js')}}"></script>

@endsection