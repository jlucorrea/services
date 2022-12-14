<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Solicitudes de Contacto
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

					<div class="lg:flex lg:items-center lg:justify-between">
						<div class="min-w-0 flex-1">
							<h2 class="text-2xl font-bold leading-7 text-gray-900 sm:truncate sm:text-3xl sm:tracking-tight">Datos de Solicitud</h2>
						</div>
						<div class="mt-5 flex lg:mt-0 lg:ml-4">
							<span class="ml-3 hidden sm:block">
							<a href="{{ route('contactview.index') }}" type="button" class="inline-flex items-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
								<svg class="-ml-1 mr-2 h-5 w-5 text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
								<path d="M12.232 4.232a2.5 2.5 0 013.536 3.536l-1.225 1.224a.75.75 0 001.061 1.06l1.224-1.224a4 4 0 00-5.656-5.656l-3 3a4 4 0 00.225 5.865.75.75 0 00.977-1.138 2.5 2.5 0 01-.142-3.667l3-3z" />
								<path d="M11.603 7.963a.75.75 0 00-.977 1.138 2.5 2.5 0 01.142 3.667l-3 3a2.5 2.5 0 01-3.536-3.536l1.225-1.224a.75.75 0 00-1.061-1.06l-1.224 1.224a4 4 0 105.656 5.656l3-3a4 4 0 00-.225-5.865z" />
								</svg>
								Regresar
							</a>
							</span>
						</div>
					</div>

					<div class="py-12">
						<div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
							 <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                				<div class="max-w-xl">
										@php
											$contactview = \App\Models\Contact::find($contactview->id);
										@endphp
										<div class="grid">
											<div >
												<span style="font-weight: bold;" class="mt-2">Cliente</span>
												<br>
												<span class="mt-2">{{ $contactview->name }} {{ $contactview->last_name }}</span>
											</div>
											<br>
											<div >
												<span style="font-weight: bold;" class="mt-2">Fecha de Registro</span>
												<br>
												<span class="mt-2">{{ $contactview->created_at }}</span>
											</div>
										</div>
										<br>
										<div >
											<span style="font-weight: bold;" class="mt-2">MENSAJE</span>
											<br>
											<span class="mt-2">{{ $contactview->comment }}</span>
										</div>
								</div>
							</div>
						</div>
					</div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
