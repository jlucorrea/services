@extends('welcome')
@section('content_section')
<div class="album py-5 bg-light">
	<div class="container">
		<section class="h-100 ">
			<div class="container h-100">
				<div class="row ">
				<div class="col">
					<div class="card card-registration">
					<div class="row">
						<div class="col-xl-6 d-none d-xl-block">
						<img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/img4.webp"
							alt="Sample photo" class="img-fluid"
							style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;" />
						</div>
						<div class="col-xl-6">
							<div class="card-body p-md-5 text-black">
								<h3 class="mb-5 text-uppercase">Contactanos</h3>
								<form method="POST" action="{{ route('contact.register') }}">
									@csrf
									<div class="row">
										<div class="col-md-6 mb-4">
											<div class="form-outline">
												<label class="form-label" for="name">Nombres</label>
												<input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" tabindex="1" value="{{ old('name') }}">
												<div class="invalid-feedback"> {{ $errors->first('name') }} </div>
											</div>
										</div>
										<div class="col-md-6 mb-4">
											<div class="form-outline">
												<label class="form-label" for="last_name">Apellidos</label>
												<input id="last_name" type="text" class="form-control{{ $errors->has('last_name') ? ' is-invalid' : '' }}" name="last_name" tabindex="1" value="{{ old('last_name') }}">
												<div class="invalid-feedback"> {{ $errors->first('last_name') }} </div>
											</div>
										</div>
									</div>

									<div class="form-outline mb-4">
										<label class="form-label" for="address">Direccion</label>
										<input id="address" type="text" class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}" name="address" tabindex="1" value="{{ old('address') }}">
										<div class="invalid-feedback"> {{ $errors->first('address') }} </div>
									</div>
									<div class="row">
										<div class="col-md-6 mb-4">
											<div class="form-outline mb-4">
												<label class="form-label" for="email">Email</label>
												<input id="firstName" type="text" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" tabindex="1" value="{{ old('email') }}">
												<div class="invalid-feedback"> {{ $errors->first('email') }} </div>
											</div>
										</div>
										<div class="col-md-6 mb-4">
											<div class="form-outline mb-4">
												<label class="form-label" for="telephone">Telefono</label>
												<input id="telephone" type="number" class="form-control{{ $errors->has('telephone') ? ' is-invalid' : '' }}" name="telephone" tabindex="1" value="{{ old('telephone') }}">
												<div class="invalid-feedback"> {{ $errors->first('telephone') }} </div>
											</div>
										</div>
									</div>
									<div class="form-outline mb-4">
										<label class="form-label" for="message">Mensaje</label>
										<textarea name="message" class="form-control{{ $errors->has('message') ? ' is-invalid' : '' }}" id="message" cols="30" rows="6" required="" value="{{ old('message') }}" data-error="Write your message"></textarea>
										<div class="invalid-feedback"> {{ $errors->first('message') }} </div>
									</div>
									<div class="d-flex justify-content-end pt-3">
										<button type="submit" class="btn btn-warning btn-lg ms-2">Enviar Mensaje</button>
									</div>
								</form>
							</div>
						</div>
					</div>
					</div>
				</div>
				</div>
			</div>
		</section> 
	</div>
</div>
@endsection