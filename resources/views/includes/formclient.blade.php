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
													<label class="form-label">Nom du client</label>
													<input type="text" name="nomcli" id="nomcli" value="{{ old('nomcli') ?? $client->nomcli }}" class="form-control @error('nomcli') is-invalid @enderror"  placeholder="Entrez.....">
                                                              @error('nomcli')
                                                                <div class="invalid-feedback">
                                                                {{ $errors->first('nomcli') }}
                                                                </div>
                                                            @enderror
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<label class="form-label">Contact</label>
														<input value="{{ old('contactcli') ?? $client->contactcli }}" class="form-control @error('contactcli') is-invalid @enderror" type="tel" placeholder="Entrez....." id="contactcli" name="contactcli">
                                                               @error('contactcli')
                                                                <div class="invalid-feedback">
                                                                {{ $errors->first('contactcli') }}
                                                                </div>
                                                                 @enderror
												</div>
											</div>
									<div class="col-md-12">
												<div class="form-group">
													<label class="form-label">Position</label>
														<input value="{{ old('sitgeocli') ?? $client->sitgeocli}}" class="form-control @error('sitgeocli') is-invalid @enderror" type="text" placeholder="Entrez....." id="sitgeocli" name="sitgeocli">
                                                              		 @error('sitgeocli')
                                                               			 <div class="invalid-feedback">
                                                               				 {{ $errors->first('sitgeocli') }}
                                                               			 </div>
                                                                	 @enderror
												</div>
									</div> 
										</div>
									</div>
								{{-- </div> --}}
							</div>				
						
						</div>
						
