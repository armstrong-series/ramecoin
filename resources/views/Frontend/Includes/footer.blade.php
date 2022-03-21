
	
 <footer class="bg-footer">
	<div class="container-fluid px-0">
		<div class="py-5">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-md-8">
						<div class="section-title">
							<div class="d-flex">
								<i class="uil uil-envelope-star display-4 text-white title-dark"></i>
								<div class="flex-1 ms-md-4 ms-3">
									<h4 class="fw-medium text-light title-dark mb-1">Get the latest Cryptor news in your inbox.</h4>
									<p class="text-white-50 mb-0">Sign up and receive the latest tips via email.</p>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-4 mt-4 mt-sm-0">
						<div class="text-md-end ms-5 ms-sm-0">
							<a href="javascript:void(0)" class="btn btn-primary">Subscribe Now</a>
						</div>
					</div><!--end col-->
				</div><!--end row-->
			</div><!--end container-->
		</div><!--end div-->
	</div><!--end container-->

	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="footer-py-100 footer-border-top">
					<div class="row">
						<!-- <div class="col-lg-4 col-12 mb-0 mb-md-4 pb-0 pb-md-2">
							<a href="#" class="logo-footer">
								<img src="{{ asset('frontend/images/logo-light.png') }}" height="28" alt="">
							</a>
							<p class="text-foot mt-4">With Cryptor Trade, you can be sure your trading skills are matched with excellent service.</p>
							<ul class="list-unstyled social-icon foot-social-icon mb-0 mt-4">
								<li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="facebook" class="fea icon-sm fea-social"></i></a></li>
								<li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="instagram" class="fea icon-sm fea-social"></i></a></li>
								<li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="twitter" class="fea icon-sm fea-social"></i></a></li>
								<li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="linkedin" class="fea icon-sm fea-social"></i></a></li>
							</ul>
						</div> -->
						<!--end col-->

						<div class="col-lg-2 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
							<h5 class="text-light footer-head">Navigation</h5>
							<ul class="list-unstyled footer-list mt-4">
								<li><a href="{{ route('frontend.about') }}" class="text-foot"><i class="uil uil-angle-right-b me-1"></i>About</a></li>
								<li><a href="market-price.html" class="text-foot"><i class="uil uil-angle-right-b me-1"></i>Pricing</a></li>
			

							</ul>
						</div><!--end col-->
						
						<div class="col-lg-2 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
							<h5 class="text-light footer-head">Investment</h5>
							<ul class="list-unstyled footer-list mt-4">
								<li><a href="{{ route('frontend.faq') }}" class="text-foot"><i class="uil uil-angle-right-b me-1"></i>FAQ</a></li>
								<li><a href="nft-explore.html" class="text-foot"><i class="uil uil-angle-right-b me-1"></i>Explores</a></li>
							</ul>
						</div><!--end col-->
	
						<div class="col-lg-4 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
							<h5 class="text-light footer-head">Invest and Trade with Ramecoin</h5>

							<ul class="list-unstyled footer-list mt-4 mb-2">
								<li class="list-inline-item mx-1"><a href="{{ route('login') }}" class="btn btn-soft-primary">Signin</a></li>
								<li class="list-inline-item mx-1"><a href="{{ route('auth.register') }}" class="btn btn-primary">Signup</a></li>
							</ul>


							<img src="{{ asset('frontend/images/icon-gradient.png') }}" class="avatar avatar-medium mt-4" alt="">
						</div><!--end col-->
					</div><!--end row-->
				</div>
			</div><!--end col-->
		</div><!--end row-->
	</div><!--end container-->

	<div class="footer-py-30 footer-border-top">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-sm-8">
					<div class="text-sm-start text-center">
						<p class="mb-0 text-foot">All Right Reserved <i class="mdi mdi-heart text-danger"></i> by <a href="{{ route('frontend.home') }}" class="text-reset">Ramecoin</a> <?php echo date("Y");?></p>
					</div>
				</div><!--end col-->

				<div class="col-sm-4 mt-4 mt-sm-0">
					<div class="text-sm-end text-center">
						<a href="#" onclick="topFunction()" id="back-to-top" class="btn btn-pills btn-icon btn-primary back-to-top"><i data-feather="arrow-up" class="icons"></i></a>
					</div>                            
				</div><!--end col-->
			</div><!--end row-->
		</div><!--end container-->
	</div>
</footer>
	
<div class="offcanvas offcanvas-end bg-white shadow" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
	<div class="offcanvas-header p-4 border-bottom">
		<h6 id="offcanvasRightLabel" class="mb-0">
			Cryptor
		</h6>
		<button type="button" class="btn-close d-flex align-items-center text-dark" data-bs-dismiss="offcanvas" aria-label="Close"><i class="uil uil-times fs-4"></i></button>
	</div>
	<div class="offcanvas-body p-4">
		<div class="row">
			<div class="col-12">
				<div class="card border-0" style="z-index: 1">
					<div class="card-body p-0">
						<form class="login-form">
							<div class="row">
								<div class="col-12">
									<img src="{{ asset('frontend/images/icon-gradient.png') }}" class="avatar avatar-large d-block mx-auto my-5" alt="">
								</div><!--end col-->
								
								<div class="col-lg-12 mt-4">
									<div class="mb-3">
										<label class="form-label">Your Email <span class="text-danger">*</span></label>
										<div class="form-icon position-relative">
											<i data-feather="user" class="fea icon-sm icons"></i>
											<input type="email" class="form-control ps-5" placeholder="Email" name="email" required="">
										</div>
									</div>
								</div><!--end col-->

								<div class="col-lg-12">
									<div class="mb-3">
										<label class="form-label">Password <span class="text-danger">*</span></label>
										<div class="form-icon position-relative">
											<i data-feather="key" class="fea icon-sm icons"></i>
											<input type="password" class="form-control ps-5" placeholder="Password" required="">
										</div>
									</div>
								</div><!--end col-->

								<div class="col-lg-12">
									<div class="d-flex justify-content-between">
										<div class="mb-3">
											<div class="form-check">
												<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
												<label class="form-check-label" for="flexCheckDefault">Remember me</label>
											</div>
										</div>
										<small class="forgot-pass mb-0"><a href="reset-password.html" class="text-dark">Forgot password ?</a></small>
									</div>
								</div><!--end col-->

								<div class="col-lg-12 mb-0">
									<div class="d-grid">
										<button class="btn btn-primary">Sign in</button>
									</div>
								</div><!--end col-->

								<div class="col-12 text-center mt-3">
									<small><small class="text-dark me-2">Don't have an account ?</small> <a href="signup.html" class="text-dark">Sign Up</a></small>
								</div><!--end col-->
							</div><!--end row-->
						</form>
					</div>
				</div>
			</div><!--end col-->
		</div><!--end row-->
	</div>

	<div class="offcanvas-footer p-4 text-center">
		<ul class="list-unstyled social-icon social mb-0">
			<li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="facebook" class="fea icon-sm fea-social"></i></a></li>
			<li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="instagram" class="fea icon-sm fea-social"></i></a></li>
			<li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="twitter" class="fea icon-sm fea-social"></i></a></li>
			<li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="linkedin" class="fea icon-sm fea-social"></i></a></li>
		</ul><!--end icon-->
	</div>
</div>