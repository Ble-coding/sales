@extends('layouts.master')
@section('css')
		<!-- Data table css -->
		<link href="{{URL::asset('assets/plugins/datatable/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" />
		<link href="{{URL::asset('assets/plugins/datatable/css/buttons.bootstrap4.min.css')}}"  rel="stylesheet">
		<link href="{{URL::asset('assets/plugins/datatable/responsive.bootstrap4.min.css')}}" rel="stylesheet" />
		<!-- Slect2 css -->
		<link href="{{URL::asset('assets/plugins/select2/select2.min.css')}}" rel="stylesheet" />
		<style>
		@media print{
			#hidden{
				display : none;
			}
		}
	</style>
@endsection
@section('page-header')
							<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title mb-0">Caisse</h4>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#"><i class="fe fe-list mr-2 fs-14"></i>sales</a></li>
									<li class="breadcrumb-item active" aria-current="page"><a href="#">Liste</a></li>
								</ol>
							</div>
							<div class="page-rightheader">
								<div class="btn btn-list">
									{{-- <a href="#" class="btn btn-info"><i class="fe fe-settings mr-1"></i> General Settings </a> --}}
									<a href="#" id="hidden" onclick="window.print()" class="btn btn-danger"><i class="fe fe-printer mr-1"></i> Print </a>
									{{-- <a href="#" class="btn btn-warning"><i class="fe fe-shopping-cart mr-1"></i> Buy Now </a> --}}
								</div>
							</div>
						</div>
                        <!--End Page header-->
@endsection
@section('content')
					 @if(session()->has('message'))
								<div class="alert alert-success" role="alert">
								{{ session()->get('message') }}
							</div>
						@endif 	<!-- Row -->
						<div class="row">
							<div class="col-12">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Liste</div>
									</div>
									<div class="card-body">
										<div class="table-responsive">
											<table class="table table-bordered text-nowrap" id="example1">
												<thead>
													<tr>
															<th>Id</th>
															<th>Client</th>
															<th>Position</th>
															<th>Contact</th>
															<th>Téléphone</th>
															<th>Nombre</th>
															<th>Date</th>
															<th>Livreur</th>
															<th>Montant</th>
															<th>Statut</th>
													{{-- <th>Action</th> --}}
													</tr>
												</thead>
												<tbody>
														@if(!empty($sales) && $sales->count())
											   @foreach($sales as $sale)
												<tr>
												<th scope="row">{{$sale->id}}</th>
													<td>{{$sale->nom}}</td>
													<td>{{$sale->sitgeo}}</td>
													<td>{{$sale->contact}}</td>
													{{-- <td>{{$sale->marque}} - {{$sale->model}}</td> --}}
													<td>{{$sale->achat->marqueachat}} - {{$sale->achat->modelachat}}</td>
													<td>{{$sale->nombre}}</td>
													{{-- <td>{{$sale->total = $sale->achat->nombreachat - $sale->nombre}}</td> --}}
													<td>{{ \Carbon\Carbon::parse($sale->date)->format('d/m/Y')}}</td>
													<td>{{$sale->livreur}}</td>
													<td>{{ number_format($sale->montant, 0, ',', ' ') }}</td>
													
													@if ($sale->achat->nombreachat - $sale->nombre)
													<td><i class="fa fa-check text-success"></i> En Stock</td>
													
													@elseif($sale->achat->nombreachat = $sale->nombre)
													<td><i class="fa fa-exclamation-triangle text-danger"></i> En rupture</td>
													@endif
													{{-- <td> --}}
              											{{-- <a href="{{ route('sales.show', ['sale' => $sale->id])}}" class="btn btn-light">👁️</a> --}}
														  {{-- <a href="{{ route('sales.edit' , ['sale' => $sale->id]) }}" class="btn btn-light">✏️</a> --}}
            										{{-- </td> --}}

												</tr>
												    @endforeach
												@else
																	<tr>
																			<td colspan="10" class="text-center"><i style="color: white"><strong>Aucun enregistrements correspondants trouvés</strong></i></td>
																		</tr>
												@endif
											</tbody>
										</table>
										<div class="row d-flex justify-content-center">
               								 {{ $sales->links() }}
           								 </div>
												</tbody>
											</table>
										</div>
									</div>
								</div>
								<!--/div-->

							</div>
						</div>
						<!-- /Row -->

					</div>
				</div><!-- end app-content-->
            </div>
@endsection
@section('js')
		<!-- INTERNAL Data tables -->
		<script src="{{URL::asset('assets/plugins/datatable/js/jquery.dataTables.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/datatable/js/dataTables.bootstrap4.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/datatable/js/dataTables.buttons.min.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/datatable/js/buttons.bootstrap4.min.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/datatable/js/jszip.min.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/datatable/js/pdfmake.min.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/datatable/js/vfs_fonts.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/datatable/js/buttons.html5.min.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/datatable/js/buttons.print.min.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/datatable/js/buttons.colVis.min.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/datatable/dataTables.responsive.min.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/datatable/responsive.bootstrap4.min.js')}}"></script>
		<script src="{{URL::asset('assets/js/datatables.js')}}"></script>

		<!-- INTERNAL Select2 js -->
		<script src="{{URL::asset('assets/plugins/select2/select2.full.min.js')}}"></script>
@endsection