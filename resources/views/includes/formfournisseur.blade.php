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
													<label class="form-label">Nom du fournisseur</label>
													<input type="text" name="nomfour" id="nomfour" value="{{ old('nomfour') ?? $fournisseur->nomfour }}" class="form-control @error('nomfour') is-invalid @enderror"  placeholder="Entrez.....">
                                                              @error('nomfour')
                                                                <div class="invalid-feedback">
                                                                {{ $errors->first('nomfour') }}
                                                                </div>
                                                            @enderror
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<label class="form-label">Contact</label>
														<input value="{{ old('contactfour') ?? $fournisseur->contactfour }}" class="form-control @error('contactfour') is-invalid @enderror" type="tel" placeholder="Entrez....." id="contactfour" name="contactfour">
                                                               @error('contactfour')
                                                                <div class="invalid-feedback">
                                                                {{ $errors->first('contactfour') }}
                                                                </div>
                                                                 @enderror
												</div>
											</div>
									<div class="col-md-12">
												<div class="form-group">
													<label class="form-label">Position</label>
														<input value="{{ old('sitgeofour') ?? $fournisseur->sitgeofour}}" class="form-control @error('sitgeofour') is-invalid @enderror" type="text" placeholder="Entrez....." id="sitgeofour" name="sitgeofour">
                                                              		 @error('sitgeofour')
                                                               			 <div class="invalid-feedback">
                                                               				 {{ $errors->first('sitgeofour') }}
                                                               			 </div>
                                                                	 @enderror
												</div>
									</div> 
										</div>
									</div>
								{{-- </div> --}}
							</div>				
						
						</div>
						
