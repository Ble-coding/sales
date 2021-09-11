@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title mb-0">informations sur la vente</h4>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="{{route('purchases.show', ['purchase' => $purchase->id] )}}"><i class="fe fe-server mr-2 fs-14"></i>infos</a></li>
									<li class="breadcrumb-item active" aria-current="page"><a href="{{route('purchases.show', ['purchase' => $purchase->id] )}}">{{$purchase->id}}</a></li>
								</ol>
							</div>
							<div class="page-rightheader">
								<div class="btn btn-list">
									{{-- <a href="{{url('/' . $page='#')}}" class="btn btn-info"><i class="fe fe-settings mr-1"></i> General Settings </a> --}}
									<a href="{{url('/' . $page='#')}}" class="btn btn-danger"><i class="fe fe-printer mr-1"></i> Print </a>
									{{-- <a href="{{url('/' . $page='#')}}" class="btn btn-warning"><i class="fe fe-shopping-cart mr-1"></i> Buy Now </a> --}}
								</div>
							</div>
						</div>
                        <!--End Page header-->
@endsection
@section('content')                       
						<!-- Row-->
						<div class="row">
							<div class="col-md-12 col-lg-4">
								{{-- <div class="card">
									<div class="card-header">
										<div class="card-title">
											Featured
										</div>
									</div>
									<div class="card-body">
										<h5 class="card-title">Special title treatment</h5>
										<p class="card-text">With supporting text below as a natural lead-in to additional content.</p><a class="btn btn-primary" href="{{url('/' . $page='#')}}">Go somewhere</a>
									</div>
								</div> --}}
							</div>

                            
							<div class="col-md-12 col-lg-4">
								<div class="card">
									<div class="card-header">
										<div class="card-title">
											{{$purchase->stock->id}}
										</div>
									</div>
                                    <div class="card-body">
										  <blockquote class="blockquote mb-0">
											<footer class="blockquote-footer">
												{{$purchase->stock->libelle}} - {{$purchase->purchase_quantity}}
											</footer>
										</blockquote>
									</div>
									<div class="card-body">
										<blockquote class="blockquote mb-0">
											<p>{{$purchase->client->nomcli}}</p>
										</blockquote>
									</div>
                                    <div class="card-body">
										<blockquote class="blockquote mb-0">
											<footer class="blockquote-footer">
												{{$purchase->produit->marque}} - {{$purchase->produit->model}} 
											</footer>
										</blockquote>
									</div>
                                       <div class="card-body">
										<blockquote class="blockquote mb-0">
											<footer class="blockquote-footer">
												{{$purchase->montant}} FCFA
											</footer>
										</blockquote>
									</div>
                                    <div class="card-footer text-muted">
										Le {{\Carbon\Carbon::parse($appro->date)->format('d/m/Y')}} 
									</div>
                                    {{-- <ul class="list-group list-group-flush">
										<li class="list-group-item"><div class="text-white">Garantie {{$appro->garantie}} an(s)</div> </li>
									</ul> --}}
								</div>
							</div>




							<div class="col-md-12 col-lg-4">
								{{-- <div class="card">
									<div class="card-body">
										<h5 class="card-title">Card title</h5>
										<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
										<p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
										<a class="btn btn-primary" href="{{url('/' . $page='#')}}">Button</a>
									</div>
								</div> --}}
							</div>

			
						</div>
						<!--End Row-->

	


					</div>
				</div><!-- end app-content-->
            </div>
@endsection
@section('js')
@endsection