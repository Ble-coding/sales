        @csrf

   									
													@if(Route::is('appros.create') )
															 {{-- <div class="form-group row">
														<label class="col-md-3 form-label">Nom fournisseur</label>
														<div class="col-md-9">
															<select class="form-control custom-select select2  @error('fournisseur_id') is-invalid @enderror" name="fournisseur_id">					
																		@foreach($fournisseurs as $fournisseur)														
																			<option value="{{$fournisseur->id}}" {{ $fournisseur->id ? 'selected' : '' }}>{{ $fournisseur->nomfour }}</option>
																		@endforeach
																	</select>
															@error('fournisseur_id"')
																<div class="invalid-feedback">
																	{{ $errors->first('fournisseur_id"') }}
																</div>  
															@enderror
														</div>
													</div> --}}

														<div class="form-group row">
															<label class="col-md-3 form-label">Nom fournisseur</label>
															<div class="col-md-9">
																<select class="form-control select2-show-search @error('fournisseur_id') is-invalid @enderror" name="fournisseur_id"> data-placeholder="Choose one (with searchbox)">
																	<optgroup label="Fournisseur">
																		@foreach($fournisseurs as $fournisseur)														
																			<option value="{{$fournisseur->id}}" {{ $fournisseur->id ? 'selected' : '' }}>{{ $fournisseur->nomfour }}</option>
																		@endforeach						
																	</optgroup>							
																</select>
																	@error('fournisseur_id"')
																<div class="invalid-feedback">
																	{{ $errors->first('fournisseur_id"') }}
																</div>  
																@enderror
															</div>
													</div>
													 {{-- <div class="form-group row">
														<label class="col-md-3 form-label">Nom client</label>
														<div class="col-md-9">
															<select class="form-control custom-select select2 @error('fournisseur_id') is-invalid @enderror" name="client_id" >
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
													<div class="form-group row">
														<label class="col-md-3 form-label">Date</label>
														<div class="col-md-9">
															<input  value="{{ old('dateappro') ?? $appro->dateappro }}" class="form-control @error('dateappro') is-invalid @enderror" type="date" placeholder="Entrez....." id="dateappro" name="dateappro">
                                                               @error('dateappro')
                                                                <div class="invalid-feedback">
                                                                {{ $errors->first('dateappro') }}
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
														<label class="col-md-3 form-label">produit</label>
														<div class="col-md-9">
															<select  class="form-control custom-select select2" @error('produit_id') is-invalid @enderror name="produit_id">
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
													</div>
													{{-- <div class="col-lg-6 col-md-12">
													<div class="form-group row">
														<label class="col-md-3 form-label">produit</label>
														<div class="col-md-9">
																	<select class="form-control select2-show-search @error('produit_id') is-invalid @enderror" name="produit_id" data-placeholder="Choose one (with searchbox)">
																	<optgroup label="Produit">
																		@foreach($produits as $produit)
																		<option value="{{$produit->id}}" {{ $produit->id ? 'selected' : '' }}>{{ $produit->marque }} - {{ $produit->model }} - {{ $produit->caractere }}</option>
																		@endforeach
																	</optgroup>							
																</select>
															@error('produit_id"')
																<div class="invalid-feedback">
																	{{ $errors->first('produit_id"') }}
																</div>
															@enderror
														</div>
													</div> --}}
                                                    	<div class="form-group row">
														<label class="col-md-3 form-label">quantités</label>
														<div class="col-md-9">
															<input  value="{{ old('appro_quantity') ?? $appro->appro_quantity }}" class="form-control @error('appro_quantity') is-invalid @enderror" placeholder="Entrez....." type="number" id="appro_quantity" name="appro_quantity">
                                                               @error('appro_quantity')
                                                                <div class="invalid-feedback">
                                                                {{ $errors->first('appro_quantity') }}
                                                                </div>
                                                                 @enderror
														</div>
													</div>
									
                                                      <div class="form-group row">
														<label class="col-md-3 form-label">Prix unitaire</label>
														<div class="col-md-9">
															<input  value="{{ old('montant') ?? $appro->montant}}" class="form-control @error('montant') is-invalid @enderror" type="text" placeholder="Entrez....." id="montant" name="montant">
                                                               @error('montant')
                                                                <div class="invalid-feedback">
                                                                {{ $errors->first('montant') }}
                                                                </div>
                                                                 @enderror
														</div>
													</div>
												
                                     
													@else
									
														<div class="form-group row">
															<label class="col-md-3 form-label">Nom fournisseur</label>
															<div class="col-md-9">
																<select disabled class="form-control select2-show-search @error('fournisseur_id') is-invalid @enderror" name="fournisseur_id"> data-placeholder="Choose one (with searchbox)">
																	<optgroup label="Fournisseur">
																		{{-- @foreach($fournisseurs as $fournisseur)														
																			<option value="{{$fournisseur->id}}" {{ $fournisseur->id ? 'selected' : '' }}>{{ $fournisseur->nomfour }}</option>
																		@endforeach --}}
																		<option  value="{{$appro->fournisseur_id}}">{{$appro->fournisseur->nomfour}}</option>
																	</optgroup>							
																</select>
																	@error('fournisseur_id"')
																<div class="invalid-feedback">
																	{{ $errors->first('fournisseur_id"') }}
																</div>  
																@enderror
															</div>
													</div>
											
													<div class="form-group row">
														<label class="col-md-3 form-label">Date</label>
														<div class="col-md-9">
															<input disabled  value="{{ old('dateappro') ?? $appro->dateappro }}" class="form-control @error('dateappro') is-invalid @enderror" type="date" placeholder="Entrez....." id="dateappro" name="dateappro">
                                                               @error('dateappro')
                                                                <div class="invalid-feedback">
                                                                {{ $errors->first('dateappro') }}
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
														<label class="col-md-3 form-label">produit</label>
														<div class="col-md-9">
															<select disabled class="form-control custom-select select2" @error('produit_id') is-invalid @enderror name="produit_id">
																		{{-- @foreach($produits as $produit)
																		<option value="{{$produit->id}}" {{ $produit->id ? 'selected' : '' }}>{{ $produit->marque }} - {{ $produit->model }} - {{ $produit->caractere }}</option>
																		@endforeach --}}
																		<option value="{{$appro->id}}">{{$appro->produit->marque}} {{$appro->produit->model}} {{$appro->produit->caractere}}</option>
																	</select>
															@error('produit_id"')
																<div class="invalid-feedback">
																	{{ $errors->first('produit_id"') }}
																</div>
															@enderror
														</div>
													</div>
													{{-- <div class="col-lg-6 col-md-12">
													<div class="form-group row">
														<label class="col-md-3 form-label">produit</label>
														<div class="col-md-9">
																	<select class="form-control select2-show-search @error('produit_id') is-invalid @enderror" name="produit_id" data-placeholder="Choose one (with searchbox)">
																	<optgroup label="Produit">
																		@foreach($produits as $produit)
																		<option value="{{$produit->id}}" {{ $produit->id ? 'selected' : '' }}>{{ $produit->marque }} - {{ $produit->model }} - {{ $produit->caractere }}</option>
																		@endforeach
																	</optgroup>							
																</select>
															@error('produit_id"')
																<div class="invalid-feedback">
																	{{ $errors->first('produit_id"') }}
																</div>
															@enderror
														</div>
													</div> --}}
												
													<div class="form-group row">
														<label class="col-md-3 form-label">quantités</label>
														<div class="col-md-9">
															<input  disabled value="{{ old('appro_quantity') ?? $appro->appro_quantity }}" class="form-control @error('appro_quantity') is-invalid @enderror" placeholder="Entrez....." type="number" id="appro_quantity" name="appro_quantity">
                                                               @error('appro_quantity')
                                                                <div class="invalid-feedback">
                                                                {{ $errors->first('appro_quantity') }}
                                                                </div>
                                                                 @enderror
														</div>
													</div>
									
                                                      <div class="form-group row">
														<label class="col-md-3 form-label">Prix unitaire</label>
														<div class="col-md-9">
															<input disabled value="{{ old('montant') ?? $appro->montant}}" class="form-control @error('montant') is-invalid @enderror" type="text" placeholder="Entrez....." id="montant" name="montant">
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
                                                     