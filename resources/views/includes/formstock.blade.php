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
													<label class="form-label">Nom du stock</label>
													<input type="text" name="libelle" id="libelle" value="{{ old('libelle') ?? $stock->libelle }}" class="form-control @error('libelle') is-invalid @enderror"  placeholder="Entrez.....">
                                                              @error('libelle')
                                                                <div class="invalid-feedback">
                                                                {{ $errors->first('libelle') }}
                                                                </div>
                                                            @enderror
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<label class="form-label">Position</label>
														<input value="{{ old('position') ?? $stock->position }}" class="form-control @error('position') is-invalid @enderror" type="tel" placeholder="Entrez....." id="position" name="position">
                                                               @error('position')
                                                                <div class="invalid-feedback">
                                                                {{ $errors->first('position') }}
                                                                </div>
                                                                 @enderror
												</div>
											</div>
									{{-- <div class="col-md-12">
												<div class="form-group">
													<label class="form-label">Quantité</label>
														<input value="{{ old('quantity') ?? $stock->quantity}}" class="form-control @error('quantity') is-invalid @enderror" type="text" placeholder="Entrez....." id="quantity" name="quantity">
                                                              		 @error('quantity')
                                                               			 <div class="invalid-feedback">
                                                               				 {{ $errors->first('quantity') }}
                                                               			 </div>
                                                                	 @enderror
												</div>
									</div>  --}}
										</div>
									</div>
								{{-- </div> --}}
							</div>				
						
						</div>
						
