        @csrf
						<div class="row">						
	
							<div class="col-xl-12 col-lg-12 col-md-12">
								{{-- <div class="card"> --}}
									<div class="card-header">
										<h3 class="card-title">Forms</h3>
									</div>
									<div class="card-body">
											<div class="col-md-12">
												<div class="form-group">
													<label class="form-label">Marque</label>
													<input type="text" name="marque" id="marque" value="{{ old('marque') ?? $produit->marque }}" class="form-control @error('marque') is-invalid @enderror"  placeholder="Entrez.....">
                                                              @error('marque')
                                                                <div class="invalid-feedback">
                                                                {{ $errors->first('marque') }}
                                                                </div>
                                                            @enderror
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<label class="form-label">Model</label>
														<input value="{{ old('model') ?? $produit->model }}" class="form-control @error('model') is-invalid @enderror" type="tel" placeholder="Entrez....." id="model" name="model">
                                                               @error('model')
                                                                <div class="invalid-feedback">
                                                                {{ $errors->first('model') }}
                                                                </div>
                                                                 @enderror
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<label class="form-label">Caracteristiques</label>
														<textarea class="form-control @error('caractere') is-invalid @enderror" id="caractere" name="caractere" placeholder="Entrez....." rows="3">{{ old('caractere') ?? $produit->caractere }}</textarea>
                                                               @error('caractere')
                                                                <div class="invalid-feedback">
                                                                {{ $errors->first('caractere') }}
                                                                </div>
                                                                 @enderror
												</div>
											</div>
								
										</div>
									</div>
								{{-- </div> --}}
							</div>				
						
						</div>
						
