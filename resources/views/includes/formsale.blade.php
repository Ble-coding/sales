        @csrf

    <div class="form-group row">
														<label class="col-md-3 form-label">Nom client</label>
														<div class="col-md-9">
															<input type="text" name="nom" id="nom" value="{{ old('nom') ?? $sale->nom }}" class="form-control @error('nom') is-invalid @enderror"  placeholder="Entrez.....">
                                                              @error('nom')
                                                                <div class="invalid-feedback">
                                                                {{ $errors->first('nom') }}
                                                                    {{-- <div class="alert alert-danger">{{ $message }}</div> --}}
                                                                </div>
                                                            @enderror
														</div>
													</div>
													{{-- <div class="form-group row">
														<label class="col-md-3 form-label" for="example-email">Email</label>
														<div class="col-md-9">
															<input type="email" id="example-email" name="example-email" class="form-control" placeholder="Email">
														</div>
													</div> --}}
													{{-- <div class="form-group row">
														<label class="col-md-3 form-label">Password</label>
														<div class="col-md-9">
															<input type="password" class="form-control" vvalue="password">
														</div>
													</div> --}}
														<div class="form-group row">
														<label class="col-md-3 form-label">Tel</label>
														<div class="col-md-9">
															<input value="{{ old('contact') ?? $sale->contact }}" class="form-control @error('contact') is-invalid @enderror" type="tel" placeholder="Entrez....." id="contact" name="contact">
                                                               @error('contact')
                                                                <div class="invalid-feedback">
                                                                {{ $errors->first('contact') }}
                                                                </div>
                                                                 @enderror
														</div>
													</div>
													<div class="form-group row">
														<label class="col-md-3 form-label">Situation géographique</label>
														<div class="col-md-9">
															<textarea class="form-control @error('sitgeo') is-invalid @enderror" id="sitgeo" name="sitgeo" placeholder="Entrez....." rows="3">{{ old('sitgeo') ?? $sale->sitgeo }}</textarea>
                                                               @error('sitgeo')
                                                                <div class="invalid-feedback">
                                                                {{ $errors->first('sitgeo') }}
                                                                </div>
                                                                 @enderror
														</div>
													</div>
                                                    <div class="form-group row">
														<label class="col-md-3 form-label">Nom du livreur</label>
														<div class="col-md-9">
															<input value="{{ old('livreur') ?? $sale->livreur }}" class="form-control @error('livreur') is-invalid @enderror" type="text" placeholder="Entrez....." id="livreur" name="livreur">
                                                               @error('livreur')
                                                                <div class="invalid-feedback">
                                                                {{ $errors->first('livreur') }}
                                                                </div>
                                                                 @enderror
														</div>
													</div>
													{{-- <div class="form-group row">
														<label class="col-md-3 form-label">Readonly</label>
														<div class="col-md-9">
															<input type="text" class="form-control" readonly="" value="Readonly value">
														</div>
													</div> --}}
													{{-- <div class="form-group row">
														<label class="col-md-3 form-label">Disabled</label>
														<div class="col-md-9">
															<input type="text" class="form-control" disabled="" value="Disabled value">
														</div>
													</div> --}}
{{-- 
													<div class="form-group row mb-0">
														<label class="col-md-3 form-label">Number</label>
														<div class="col-md-9">
															<input class="form-control" type="number" name="number">
														</div>
													</div> --}}
													
											</div>
											<div class="col-lg-6 col-md-12">
													<div class="form-group row">
														<label class="col-md-3 form-label">Téléphone</label>
														<div class="col-md-9">
															<select name="achat_id" id="achat_id" class="form-control custom-select select2">
																@foreach($achats as $achat)
																<option value="{{ $achat->id }}" {{ $achat->achat_id == $achat ? 'selected' : '' }}>Id:{{ $achat->id }} {{ $achat->marqueachat }}-{{ $achat->modelachat }}</option>
															   @endforeach
															</select>
															@error('achat_id')
																<div class="invalid-feedback">
																	{{ $errors->first('achat_id') }}
																</div>
															@enderror
													</div>
												</div>
												{{-- <div style="display:none;" class="form-group row">
														<label class="col-md-3 form-label">Status</label>
														<div class="col-md-9">
															<select name="status" id="status" class="form-control custom-select select2">
																@foreach($achats as $achat)
																<option value="0">En rupture</option>
																<option value="1">En stock</option>
																@endforeach
															</select>
															@error('status')
																<div class="invalid-feedback">
																	{{ $errors->first('status') }}
																</div>
															@enderror
													</div>
												</div> --}}
													<div class="form-group row">
														<label class="col-md-3 form-label">Nombre</label>
														<div class="col-md-9">
															<input value="{{ old('nombre') ?? $sale->nombre }}" class="form-control @error('nombre') is-invalid @enderror" type="number" id="nombre" name="nombre">
                                                               @error('nombre')
                                                                <div class="invalid-feedback">
                                                                {{ $errors->first('nombre') }}
                                                                </div>
                                                                 @enderror
														</div>
													</div>
													<div class="form-group row">
														<label class="col-md-3 form-label">Date</label>
														<div class="col-md-9">
															<input value="{{ old('date') ?? $sale->date }}" class="form-control @error('date') is-invalid @enderror" placeholder="Entrez....." type="date" id="date" name="date">
                                                               @error('date')
                                                                <div class="invalid-feedback">
                                                                {{ $errors->first('date') }}
                                                                </div>
                                                                 @enderror
														</div>
													</div>
                                                    		{{-- <div class="form-group row">
														<label class="col-md-3 form-label">Time</label>
														<div class="col-md-9">
															<input class="form-control" type="time" name="time">
														</div>
													</div> --}}
                                                    <div class="form-group row">
														<label class="col-md-3 form-label">Garantie</label>
														<div class="col-md-9">
															<input value="{{ old('garantie') ?? $sale->garantie }}" class="form-control @error('garantie') is-invalid @enderror" type="number" id="garantie" name="garantie">
                                                               @error('garantie')
                                                                <div class="invalid-feedback">
                                                                {{ $errors->first('garantie') }}
                                                                </div>
                                                                 @enderror
														</div>
													</div>
                                                      <div class="form-group row">
														<label class="col-md-3 form-label">Montant</label>
														<div class="col-md-9">
															<input value="{{ old('montant') ?? $sale->montant}}" class="form-control @error('montant') is-invalid @enderror" type="text" placeholder="Entrez....." id="montant" name="montant">
                                                               @error('montant')
                                                                <div class="invalid-feedback">
                                                                {{ $errors->first('montant') }}
                                                                </div>
                                                                 @enderror
														</div>
													</div>
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
                                                     