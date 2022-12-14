@extends('welcome')
@section('content_section')    
	<section id="oneSection">
		<video src="{{asset('img/h.mp4')}}" class="sect" autoplay="true" muted="true" loop="true" poster=""></video>
	</section>
	<section class="sect-page">
		<h1>Safe Home</h1>
		<p class="sect-page-parr">Una empresa dedicada a las reparaciones del hogar</p>
		<div class="row">
		<div class="col-md-4">
				<div class="card" style="width: 18rem;">
					<img src="{{asset('img/Misión.png')}}" class="card-img-top" alt="...">
					<div class="card-body">
						<p class="card-text"> CONECTAR A LOS TRABAJADORES CON LOS CLIENTES Y GARANTIZAR SEGURIDAD Y CALIDAD DE SERVICIO.</p>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card" style="width: 18rem;">
					<img src="{{asset('img/visión.png')}}" class="card-img-top" alt="...">
					<div class="card-body">
						<p class="card-text"> GENERAR UN ESPACIO SEGURO PARA CONTRATAR PERSONAL CAPACITADO PARA LAS REPARACIONES DE TU HOGAR.</p>
					</div>
					</div>
			</div>
			<div class="col-md-4">
				<div class="card" style="width: 18rem;">
					<img src="{{asset('img/visión.png')}}" class="card-img-top" alt="...">
					<div class="card-body">
						<p class="card-text"> GENERAR UN ESPACIO SEGURO PARA CONTRATAR PERSONAL CAPACITADO PARA LAS REPARACIONES DE TU HOGAR.</p>
					</div>
					</div>
			</div>
		</div>
	</section>
	<br><br>
@endsection