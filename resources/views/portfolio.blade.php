@extends("layouts.app")

@section("content") 

	<section class="boxed no-padding bg-img " style="background-image: url(/images/bg/bg-portfolio.jpg);">
		<div class="sub-header depen-on-img">
			<img src="/images/bg/bg-portfolio.jpg" class="img-responsive" alt="Image">
			<div class="sub-header-inner center-center">
				<h2>PORTFOLIO</h2>
				<ol class="breadcrumb">
					<li>
						<a href="{{ route('home_path')}}">HOME</a>
					</li>
					<li class="active">PORTFOLIO</li>
				</ol>
			</div>
		</div>
	</section>
	<!-- /subheader -->

	<section class="boxed">
		<div class="projectFilter text-center">
            <a href="#" data-filter="*" class="current ">ALL</a>
            <a href="#" data-filter=".Commercial" class="">COMMERCIAL</a>
            <a href="#" data-filter=".Residential" class="">RESIDENTIAL</a>
            <a href="#" data-filter=".Villa" class="">VILLA</a>
  		</div> <!-- End Project Fillter -->
		<div class="row">
			<div class="list-portfolio-warp">
				<div class="grid-sizer col-sm-6 col-md-3"></div>
				@foreach($projects as $p)
					<div class="col-md-3 col-sm-6 col-xs-12 element-item {{$p->type}}">
						@include('layouts.project')
					</div>
				@endforeach
			</div>
		</div>
	</section>
	<!-- /portfolio warp -->

	@foreach($projects as $p)
		@include('layouts.project-details')
	@endforeach

@endsection