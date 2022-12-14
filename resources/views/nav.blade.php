<nav class="navbar navbar-expand-lg bg-nabvar bg-light">
	<div class="container-fluid">
		<a class="navbar-brand co-nav-link" href="{{route('index')}}">
		<img src="{{ asset('img/log.png') }}" alt="Logo" width="50" height="50" class="d-inline-block align-text-top">
		</a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav me-auto mb-2 mb-lg-0">
			<li class="nav-item">
			<a class="nav-link co-nav-link active" aria-current="page" href="{{route('index')}}">Inicio</a>
			</li>
			<li class="nav-item">
			<a class="nav-link co-nav-link active" aria-current="page" href="{{route('contact')}}">Nosotros</a>
			</li>
			<li class="nav-item">
				<a class="nav-link co-nav-link" aria-current="page" href="{{ route('servicesinfo')}}">
					Servicios
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link co-nav-link" aria-current="page" href="{{route('servicescontact')}}">Contactanos</a>
			</li>
		</ul>
		<form class="d-flex" role="search">
			@if (Route::has('login'))
				{{-- @auth
					<a href="{{ url('/dashboard') }}" class="btn btn-success">Inicio</a>
				@else --}}
					<a href="{{ route('login') }}" class="btn btn-dark" type="button">Iniciar Sesión</a>
				{{-- @endif --}}
			@endauth
		</form>
		</div>
	</div>
</nav>