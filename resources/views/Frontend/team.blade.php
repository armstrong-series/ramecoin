@extends('Frontend.Layout.master')
@section('title')
    <title>ClusterWink | Team</title>
@endsection
	<div id="wrapper" class="wrapper">
		<a href="#main_content" data-type="section-switch" class="return-to-top">
			<i class="fas fa-angle-double-up"></i>
		</a>

		@section('content')
        <div id="main_content">

<!--=====================================-->
<!--=            Navbar Start           =-->
<!--=====================================-->
@include('Frontend.Includes.navbar')
<!--=====================================-->
<!--=              Navbar End           =-->
<!--=====================================-->
<!--=====================================-->
<!--=          Main Banner Start        =-->
<!--=====================================-->

			<!--=====================================-->
			<!--=           Main Banner End         =-->

            <!-- @include('Frontend.Includes.banner') -->
			<!--=====================================-->
			<section id="team-wrap-layout1" class="team-wrap-layout1 section-padding-md">
				<div class="container">
					<div class="section-heading heading-dark heading-layout1">
						<h2 class="heading-main-title">Dedicated Team</h2>
						<p class="heading-paragraph">Lorem Ipsum is simply dummy text of the printing and typesetting has been the industry's standard dummy text ever since</p>
					</div>
					<div class="row">
						<div class="col-lg-4 col-sm-6 col-12 has-animation">
							<div class="translate-bottom-75 opacity-animation transition-150 transition-delay-1100">
								<div class="team-box-layout1">
									<div class="maks-item animted-bg-wrap">
										<span class="animted-bg"></span>
										<div class="item-figure">
											<img src="{{ asset('frontend/media/team/team6.jpg') }}" alt="Team">
										</div>
										<ul class="social-items">
											<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
											<li><a href="#"><i class="fab fa-twitter"></i></a></li>
											<li><a href="#"><i class="fab fa-instagram"></i></a></li>
											<li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
										</ul>
									</div>
									<div class="item-content">
										<h3 class="item-title"><a href="#">Tom Knolltonns</a></h3>
										<div class="sub-title">Photographer</div>
									</div>
								</div>
							</div>
						</div>
						
					</div>
				</div>
			</section>
		
@include('Frontend.Includes.footer')
<!--=====================================-->
<!--=       Blog Section Area End       =-->
<!--=====================================-->
@endsection
	</div>

   
    @section('scripts')
    @endsection
</body>
</html>