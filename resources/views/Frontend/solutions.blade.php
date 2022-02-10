@extends('Frontend.Layout.master')
@section('title')
    <title>ClusterWink | About</title>
@endsection
	<!-- <div id="wrapper" class="wrapper"> -->
		

		@section('content')
		
			<div id="main_content">
				
				<!--=====================================-->
				<!--=            Navbar Start           =-->
				<!--=====================================-->
				@include('Frontend.Includes.navbar')
		

				@include('Frontend.Includes.banner')
				<div id="page"> 
				<!--=====================================-->
				<!--=====================================-->
				<!--=     Service Section Area Start    =-->
				<!--=====================================-->
			
				<!--=====================================-->
				<!--=      Service Section Area End     =-->
				<!--=====================================-->
				<!--=====================================-->
				
				
				<!--=====================================-->
				<!--=      About Section Area End       =-->
				<!--=====================================-->
				<!--=====================================-->
				<!--=    Feature Section Area Start     =-->
				<!--=====================================-->
					<section class="feature-wrap-layout9 section-padding-md-equal">
						<div class="container">
							<div class="section-heading heading-dark heading-layout4">
								<h2 class="heading-main-title">Incleair Ecosystem</h2>
							</div>
							<div class="row align-items-center">
								<div class="col-lg-6 col-12 has-animation">
									<div class="translate-left-75 opacity-animation transition-200 transition-delay-10">
										<div class="feature-box-layout9">
											<div class="item-figure">
												<img src="{{ asset('incleair.jpeg') }}" alt="Feature">
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-6 col-12 has-animation">
									<div class="translate-bottom-75 opacity-animation transition-200 transition-delay-10">
										<div class="feature-box-layout9">
											<div class="item-content">
												<!-- <h2 class="item-title">We run all kinds of IT services that vow your success</h2> -->
												<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed eiusmod is that a tempor 
													incididunt ut labore et dolore magna aliqua. Ut enim exercitation ullamco laboris aliquip.</p>
											
												<!-- <div class="translate-bottom-75 opacity-animation transition-150 transition-delay-1300">
													<a href="#" class="btn-fill btn-gradient">Read More</a>
												</div> -->
												<div class="text center">
													<a href="#" style="background: #3aeb34; color:white;" class="btn btn-md">Read More</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</section>
			
					</div>
				
			<!--=====================================-->
			<!--=       Blog Section Area End       =-->
			<!--=====================================-->
			</div>

			<textarea name="" id="solutions" style="display: none;" cols="30" rows="10">{{ json_encode($solutions) }}</textarea>
	
	@endsection

   
    @section('scripts')
		<script src="{{ asset('js/app/pages.js') }}"></script>
    @endsection
</body>
</html>