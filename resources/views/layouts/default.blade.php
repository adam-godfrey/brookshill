<!DOCTYPE html>
<html lang="en">
	@include('partials.head')
	<body>
	  	<h1 class="site-heading text-center text-white d-none d-lg-block">
			<img src="{{ asset('images/logo.png') }}" alt="Brookshill Farm logo">
	  	</h1>
	  	@include('partials.navbar')
	  	<div id="app">
		  	@yield('content')
		</div>
		@include('partials.footer')

	  	@include('partials.scripts')
  </body>
</html>