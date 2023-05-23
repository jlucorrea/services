@extends('welcome')
@section('content_section')
<div class="album py-5 bg-light">
	<div class="container">
		<div class="text-center bg-light">
			<h1 class="mb-5">Nuestros Servicios</h1>
		</div>
			<div class="row row-cols-1 row-cols-md-3 g-4">
			@foreach ($services as $service)
					<div class="col">
						<div class="card h-100">
						<img src="https://mdbcdn.b-cdn.net/img/new/standard/city/044.webp" class="card-img-top" alt="Skyscrapers"/>
						<div class="card-body">
							<h5 class="card-title">{{ $service->title }}</h5>
							<p class="card-text">
							{{ $service->description }}
							</p>
						</div>
						<div class="card-footer text-center">
							<strong class="text-success" style="font-size: 30px;">S/ {{ $service->price }}</strong>
						</div>
						</div>
					</div>
			@endforeach
			</div>
			{{-- <div class="mt-5 flex justify-center">
				
			</div> --}}
	</div>
</div>
@endsection