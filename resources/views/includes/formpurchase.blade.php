      

   											 {{-- <div class="form-group row">
														<label class="col-md-3 form-label">Nom client</label>
															<div class="col-md-9">
																	<select class="form-control custom-select select2  @error('client_id') is-invalid @enderror" name="client_id">					
																		
																		@foreach($clients as $client)														
																		<option value="{{$client->id}}" {{ $client->id ? 'selected' : '' }}>{{ $client->nomcli }}</option>
																		@endforeach
																	</select>	
															@error('client_id"')
																<div class="invalid-feedback">
																	{{ $errors->first('client_id"') }}
																</div>  
															@enderror
														</div>
												</div> --}}
												  @csrf
												<div class="form-group row">
													<label class="col-md-3 form-label">Nom client</label>
															<div class="col-md-9">
																<select class="form-control select2-show-search @error('client_id') is-invalid @enderror" name="client_id" data-placeholder="Choose one (with searchbox)">
																	<optgroup label="Client">
																		@foreach($clients as $client)														
																			<option value="{{$client->id}}" {{ $client->id ? 'selected' : '' }}>{{ $client->nomcli }}</option>
																		@endforeach
																	</optgroup>							
																</select>
																	@error('client_id"')
																		<div class="invalid-feedback">
																			{{ $errors->first('client_id"') }}
																		</div>  
															@enderror
															</div>
													</div>
													<div class="form-group row">
														<label class="col-md-3 form-label">Date</label>
														<div class="col-md-9">
															<input value="{{ old('datepurchase') ?? $purchase->datepurchase }}" class="form-control @error('datepurchase') is-invalid @enderror" type="date" placeholder="Entrez....." id="datepurchase" name="datepurchase">
                                                               @error('datepurchase')
                                                                <div class="invalid-feedback">
                                                                {{ $errors->first('datepurchase') }}
                                                                </div>
                                                                 @enderror
														</div>
													</div>
												
													{{-- <div class="form-group row">
														<label class="col-md-3 form-label">Password</label>
														<div class="col-md-9">
															<input type="password" class="form-control" vvalue="password">
														</div>
													</div> --}}
													{{-- <div class="form-group row">
														<label class="col-md-3 form-label">Stock</label>
														<div class="col-md-9">
															<select class="form-control custom-select select2" @error('stock_id') is-invalid @enderror name="stock_id">
																		@foreach($stocks as $stock)
																		<option value="{{$stock->id}}" {{ $stock->id ? 'selected' : '' }}>{{ $stock->libelle }}</option>
																		@endforeach
																	</select>
															@error('stock_id"')
																<div class="invalid-feedback">
																	{{ $errors->first('stock_id"') }}
																</div>
															@enderror
														</div>
													</div> --}}
												
													
													
											</div>
											 <div class="col-lg-6 col-md-12">
											 	<div class="form-group row">
														<label class="col-md-3 form-label">Ap_id</label>
														<div class="col-md-9">
															<select class="form-control custom-select select2" @error('appro_id') is-invalid @enderror name="appro_id">
																		@foreach($appros as $appro)
																		<option value="{{$appro->id}}" {{ $appro->id ? 'selected' : '' }}>Id: {{ $appro->id }}, {{ $appro->produit->marque }} {{ $appro->produit->marque }} {{ $appro->produit->model }}</option>
																		@endforeach
																	</select>
															@error('appro_id"')
																<div class="invalid-feedback">
																	{{ $errors->first('appro_id"') }}
																</div>
															@enderror
														</div>
													</div>
												{{--	<div class="form-group row">
														<label class="col-md-3 form-label">produit</label>
														<div class="col-md-9">
															<select class="form-control custom-select select2" @error('produit_id') is-invalid @enderror name="produit_id">
																		@foreach($produits as $produit)
																		<option value="{{$produit->id}}" {{ $produit->id ? 'selected' : '' }}>{{ $produit->marque }} - {{ $produit->model }} - {{ $produit->caractere }}</option>
																		@endforeach
																	</select>
															@error('produit_id"')
																<div class="invalid-feedback">
																	{{ $errors->first('produit_id"') }}
																</div>
															@enderror
														</div>
													</div> --}}
													@if(Route::is('purchases.create') )
                                                    	<div class="form-group row">
														<label class="col-md-3 form-label">quantités</label>
														<div class="col-md-9">
															<input value="{{ old('purchase_quantity') ?? $purchase->purchase_quantity }}" class="form-control @error('purchase_quantity') is-invalid @enderror" placeholder="Entrez....." type="number" id="purchase_quantity" name="purchase_quantity">
                                                               @error('purchase_quantity')
                                                                <div class="invalid-feedback">
                                                                {{ $errors->first('purchase_quantity') }}
                                                                </div>
                                                                 @enderror
														</div>
													</div>
									
                                                      <div class="form-group row">
														<label class="col-md-3 form-label">Prix unitaire</label>
														<div class="col-md-9">
															<input value="{{ old('montant') ?? $purchase->montant}}" class="form-control @error('montant') is-invalid @enderror" type="text" placeholder="Entrez....." id="montant" name="montant">
                                                               @error('montant')
                                                                <div class="invalid-feedback">
                                                                {{ $errors->first('montant') }}
                                                                </div>
                                                                 @enderror
														</div>
													</div>

													@else
<div class="form-group row">
														<label class="col-md-3 form-label">quantités</label>
														<div class="col-md-9">
															<input disabled value="{{ old('purchase_quantity') ?? $purchase->purchase_quantity }}" class="form-control @error('purchase_quantity') is-invalid @enderror" placeholder="Entrez....." type="number" id="purchase_quantity" name="purchase_quantity">
                                                               @error('purchase_quantity')
                                                                <div class="invalid-feedback">
                                                                {{ $errors->first('purchase_quantity') }}
                                                                </div>
                                                                 @enderror
														</div>
													</div>
									
                                                      <div class="form-group row">
														<label class="col-md-3 form-label">Prix unitaire</label>
														<div class="col-md-9">
															<input disabled value="{{ old('montant') ?? $purchase->montant}}" class="form-control @error('montant') is-invalid @enderror" type="text" placeholder="Entrez....." id="montant" name="montant">
                                                               @error('montant')
                                                                <div class="invalid-feedback">
                                                                {{ $errors->first('montant') }}
                                                                </div>
                                                                 @enderror
														</div>
													</div>
													@endif
													{{-- <div class="form-group row">
														<label class="col-md-3 form-label">Mois</label>
														<div class="col-md-9">
															<input class="form-control" type="month" name="month">
														</div>
													</div> --}}
													{{-- <div class="form-group row mb-0">
														<label class="col-md-3 form-label">Input Select</label>
														<div class="col-md-9">
															<select class="form-control select2">
																<option>Apple</option>
																<option>Orange</option>
																<option>Mango</option>
																<option>Grapes</option>
																<option>Banana</option>
															</select>
														</div>
													</div> --}}
                                                     