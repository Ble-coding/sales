{{-- @extends('layouts.auth')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div> --}}
{{--                         
          <div class="form-group row">
                            <label for="tel" class="col-md-4 col-form-label text-md-right">{{ __('Téléphone') }}</label>

                            <div class="col-md-6">
                                <input id="tel" type="tel" class="form-control @error('tel') is-invalid @enderror" name="tel" required autocomplete="tel">

                                @error('tel')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
         </div> --}}

                        {{-- <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}

@extends('layouts.master2')
@section('css')
@endsection
@section('content')
<div class="page">
			<div class="page-single">
				<div class="container">
					<div class="row">
						<div class="col mx-auto">
							<div class="row justify-content-center">
								<div class="col-md-5">
									<div class="card">


										<div class="card-body">
											{{-- <div class="text-center title-style mb-6">
												<h1 class="mb-2">Boite de connexion</h1>
												<hr>
											</div> --}}
                                        <form method="POST" action="{{ route('login') }}">
                                                    @csrf 
											<div class="btn-list text-center title-style mb-6">
											<h1 class="mb-4">Boite de connexion</h1>
											</div>
											{{-- <hr class="divider my-6"> --}}
											<div class="input-group mb-4">
												<div class="input-group-prepend">
													<div class="input-group-text">
														<i class="fe fe-user"></i>
													</div>
												</div>
												<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="{{ __('Email') }}">
                                                     @error('email')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                     @enderror
										    </div>
                                            {{-- <div class="input-group mb-4">
												<div class="input-group-prepend">
													<div class="input-group-text">
														<i class="fe fe-tel"></i>
													</div>
												</div>
												<input id="tel" type="tel" class="form-control @error('tel') is-invalid @enderror" name="tel" value="{{ old('tel') }}" required autocomplete="tel" autofocus placeholder="{{ __('TELEPHONE') }}">
                                                     @error('tel')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                     @enderror
										    </div> --}}
											<div class="input-group mb-4">
												<div class="input-group-prepend">
													<div class="input-group-text">
														<i class="fe fe-lock"></i>
													</div>
												</div>
												<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required placeholder="{{ __('Mot de passe') }}" autocomplete="current-password">
                                                 @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror   
											</div>
											<div class="row">
												<div class="col-12">
													<button type="submit" class="btn  btn-primary btn-block px-4">{{ __('Connexion') }}</button>
												</div>
												{{-- <div class="col-12 text-center">
													<a href="{{url('/' . $page='forgot-password-1')}}" class="btn btn-link box-shadow-0 px-0">Forgot password?</a>
												</div> --}}
											</div>
											{{-- <div class="text-center pt-4">
												<div class="font-weight-normal fs-16">You Don't have an account <a class="btn-link font-weight-normal" href="#">Register Here</a></div>
											</div> --}}

                                        </form>

										</div>


									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
@endsection
@section('js')
@endsection