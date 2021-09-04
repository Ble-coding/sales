				<!--/Horizontal-main -->
				<div class="sticky">
					<div class="horizontal-main hor-menu clearfix">
						<div class="horizontal-mainwrapper container clearfix">
							<!--Nav-->
							<nav class="horizontalMenu clearfix">
								<ul class="horizontalMenu-list">
									<li aria-haspopup="true">
										<a href="{{ url('/home') }}" class="sub-icon">
											<svg class="hor-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 5v2h-4V5h4M9 5v6H5V5h4m10 8v6h-4v-6h4M9 17v2H5v-2h4M21 3h-8v6h8V3zM11 3H3v10h8V3zm10 8h-8v10h8V11zm-10 4H3v6h8v-6z"/></svg>
											Dashboard
										</a>
									</li>
									<li aria-haspopup="true">
										<a href="{{URL('/home#')}}" class="">
											<svg class="hor-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M16.66 4.52l2.83 2.83-2.83 2.83-2.83-2.83 2.83-2.83M9 5v4H5V5h4m10 10v4h-4v-4h4M9 15v4H5v-4h4m7.66-13.31L11 7.34 16.66 13l5.66-5.66-5.66-5.65zM11 3H3v8h8V3zm10 10h-8v8h8v-8zm-10 0H3v8h8v-8z"/></svg>
											Ventes <i class="fa fa-angle-down horizontal-icon"></i>
										</a>
										<ul class="sub-menu">
											<li aria-haspopup="true"><a href="{{ route('ventes.create') }}">Enregistrer</a></li>
											<li aria-haspopup="true"><a href="{{ route('ventes.index') }}">Liste</a></li>
										</ul>
									</li>
								</ul>
							</nav>
							<!--Nav-->
						</div>
					</div>
				</div>
				<!--/Horizontal-main -->