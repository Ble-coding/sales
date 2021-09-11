        @csrf

    <div class="form-group row">
														<label class="col-md-3 form-label">Nom fournisseur</label>
														<div class="col-md-9">
															<input type="text" name="fournisseur" id="fournisseur" value="{{ old('fournisseur') ?? $achat->fournisseur }}" class="form-control @error('fournisseur') is-invalid @enderror"  placeholder="Entrez.....">
                                                              @error('fournisseur')
                                                                <div class="invalid-feedback">
                                                                {{ $errors->first('fournisseur') }}
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
															<input value="{{ old('contactachat') ?? $achat->contactachat }}" class="form-control @error('contactachat') is-invalid @enderror" type="tel" placeholder="Entrez....." id="contactachat" name="contactachat">
                                                               @error('contactachat')
                                                                <div class="invalid-feedback">
                                                                {{ $errors->first('contactachat') }}
                                                                </div>
                                                                 @enderror
														</div>
													</div>
													<div class="form-group row">
														<label class="col-md-3 form-label">Situation géographique</label>
														<div class="col-md-9">
															<textarea class="form-control @error('sitgeoachat') is-invalid @enderror" id="sitgeoachat" name="sitgeoachat" placeholder="Entrez....." rows="3">{{ old('sitgeoachat') ?? $achat->sitgeoachat }}</textarea>
                                                               @error('sitgeoachat')
                                                                <div class="invalid-feedback">
                                                                {{ $errors->first('sitgeoachat') }}
                                                                </div>
                                                                 @enderror
														</div>
													</div>
                                                    	<div class="form-group row">
														<label class="col-md-3 form-label">Depot</label>
														<div class="col-md-9">
															<input value="{{ old('depot') ?? $achat->depot }}" class="form-control @error('depot') is-invalid @enderror" type="text" placeholder="Entrez....." id="depot" name="depot">
                                                               @error('depot')
                                                                <div class="invalid-feedback">
                                                                {{ $errors->first('depot') }}
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
														<label class="col-md-3 form-label">Marque</label>
														<div class="col-md-9">
															<input value="{{ old('marqueachat') ?? $achat->marqueachat }}" class="form-control @error('marqueachat') is-invalid @enderror" placeholder="Entrez....." type="text" id="marqueachat" name="marqueachat">
                                                                @error('marqueachat')
                                                                <div class="invalid-feedback">
                                                                {{ $errors->first('marqueachat') }}
                                                                </div>
                                                            @enderror
														</div>
													</div>
                                                    	<div class="form-group row">
														<label class="col-md-3 form-label">Model</label>
														<div class="col-md-9">
															<input value="{{ old('modelachat') ?? $achat->modelachat }}" class="form-control @error('modelachat') is-invalid @enderror" placeholder="Entrez....." type="text" id="modelachat" name="modelachat">
                                                               @error('modelachat')
                                                                <div class="invalid-feedback">
                                                                {{ $errors->first('modelachat') }}
                                                                </div>
                                                                 @enderror
														</div>
													</div>
													<div style="display: none"  class="form-group row">
														<label class="col-md-3 form-label">Status</label>
														<div class="col-md-9">
															<select name="status" id="status" class="form-control custom-select select2">
																<option value="1">En stock</option>
																<option value="0">En rupture</option>
															</select>
															{{-- <input value="{{ old('status') ?? $achat->status }}" class="form-control @error('status') is-invalid @enderror" placeholder="Entrez....." type="text" id="status" name="status"> --}}
															@error('status')
																<div class="invalid-feedback">
																	{{ $errors->first('status') }}
																</div>
															@enderror
													</div>
												</div>
													<div class="form-group row">
														<label class="col-md-3 form-label">Nombre</label>
														<div class="col-md-9">
															<input value="{{ old('nombreachat') ?? $achat->nombreachat }}" class="form-control @error('nombreachat') is-invalid @enderror" type="number" id="nombreachat" name="nombreachat">
                                                               @error('nombreachat')
                                                                <div class="invalid-feedback">
                                                                {{ $errors->first('nombreachat') }}
                                                                </div>
                                                                 @enderror
														</div>
													</div>
													<div class="form-group row">
														<label class="col-md-3 form-label">Date</label>
														<div class="col-md-9">
															<input value="{{ old('dateachat') ?? $achat->dateachat }}" class="form-control @error('dateachat') is-invalid @enderror" placeholder="Entrez....." type="date" id="dateachat" name="dateachat">
                                                               @error('dateachat')
                                                                <div class="invalid-feedback">
                                                                {{ $errors->first('dateachat') }}
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
															<input value="{{ old('garantieachat') ?? $achat->garantieachat }}" class="form-control @error('garantieachat') is-invalid @enderror" type="number" id="garantieachat" name="garantieachat">
                                                               @error('garantieachat')
                                                                <div class="invalid-feedback">
                                                                {{ $errors->first('garantieachat') }}
                                                                </div>
                                                                 @enderror
														</div>
													</div>
                                                      <div class="form-group row">
														<label class="col-md-3 form-label">Montant</label>
														<div class="col-md-9">
															<input value="{{ old('montantachat') ?? $achat->montantachat}}" class="form-control @error('montantachat') is-invalid @enderror" type="text" placeholder="Entrez....." id="montantachat" name="montantachat">
                                                               @error('montantachat')
                                                                <div class="invalid-feedback">
                                                                {{ $errors->first('montantachat') }}
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
                                                     