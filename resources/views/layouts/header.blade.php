<!-- Mobile Menu -->
<nav id="menu">
	<ul>
		<li class="{{ Route::currentRouteName() == 'home_path' ? 'active' : '' }}">
			<a href="{{route('home_path')}}">Home</a>
		</li>
		<li class="{{ Route::currentRouteName() == 'about_path' ? 'active' : '' }}">
			<a href="{{route('about_path')}}">About</a>
		</li>
		<li class="{{ Route::currentRouteName() == 'portfolio_path' ? 'active' : '' }}">
			<a href="{{route('portfolio_path')}}">Portfolio</a>
		</li>
		<li class="{{ Route::currentRouteName() == 'products_path' ? 'active' : '' }}">
			<a href="{{route('products_path')}}">Products</a>
		</li>
		<li class="{{ Route::currentRouteName() == 'quality_path' ? 'active' : '' }}">
			<a href="{{route('quality_path')}}">Quality</a>
		</li>
		<li class="{{ Route::currentRouteName() == 'contact_path' ? 'active' : '' }}">
			<a href="{{route('contact_path')}}">Contact</a>
		</li>
		<li>
			<a href="/isotech-profile.pdf" target="_blank"><span class="ot-btn border-dark">Company Profile</span></a>
		</li>
	</ul>
</nav>
<!-- /Mobile Menu -->

<header id="stick" class="header-home">
	<h1 class="logo">
		<a href="/" ><img src="/images/logo.svg" class="img-responsive" alt="Image" width="300"></a>
	</h1>
	
	<nav id="main-nav" class="main-nav">
		<ul>
			<li class="{{ Route::currentRouteName() == 'home_path' ? 'active' : '' }}">
				<a href="{{route('home_path')}}">Home</a>
			</li>
			<li class="{{ Route::currentRouteName() == 'about_path' ? 'active' : '' }}">
				<a href="{{route('about_path')}}">About</a>
			</li>
			<li class="{{ Route::currentRouteName() == 'portfolio_path' ? 'active' : '' }}">
				<a href="{{route('portfolio_path')}}">Portfolio</a>
			</li>
			<li class="{{ Route::currentRouteName() == 'products_path' ? 'active' : '' }}">
				<a href="{{route('products_path')}}">Products</a>
			</li>
			<li class="{{ Route::currentRouteName() == 'quality_path' ? 'active' : '' }}">
				<a href="{{route('quality_path')}}">Quality</a>
			</li>
			<li class="{{ Route::currentRouteName() == 'contact_path' ? 'active' : '' }}">
				<a href="{{route('contact_path')}}">Contact</a>
			</li>
			<li>
				<a href="/isotech-profile.pdf" target="_blank"><span class="ot-btn border-dark">Company Profile</span></a>
			</li>
			<li></li>
		</ul>
	</nav>
	<a href="#menu" class="btn-menu-mobile"><span class="lnr lnr-menu"></span></a>
</header>
<!-- /End Header 1 Warp -->