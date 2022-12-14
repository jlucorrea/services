<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Servicios
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

					<div class="lg:flex lg:items-center lg:justify-between">
						<div class="min-w-0 flex-1">
							<h2 class="text-2xl font-bold leading-7 text-gray-900 sm:truncate sm:text-3xl sm:tracking-tight">Registrar Servicio</h2>
						</div>
						<div class="mt-5 flex lg:mt-0 lg:ml-4">
							<span class="ml-3 hidden sm:block">
							<a href="{{ route('services.index') }}" type="button" class="inline-flex items-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
								<svg class="-ml-1 mr-2 h-5 w-5 text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
								<path d="M12.232 4.232a2.5 2.5 0 013.536 3.536l-1.225 1.224a.75.75 0 001.061 1.06l1.224-1.224a4 4 0 00-5.656-5.656l-3 3a4 4 0 00.225 5.865.75.75 0 00.977-1.138 2.5 2.5 0 01-.142-3.667l3-3z" />
								<path d="M11.603 7.963a.75.75 0 00-.977 1.138 2.5 2.5 0 01.142 3.667l-3 3a2.5 2.5 0 01-3.536-3.536l1.225-1.224a.75.75 0 00-1.061-1.06l-1.224 1.224a4 4 0 105.656 5.656l3-3a4 4 0 00-.225-5.865z" />
								</svg>
								Usuarios
							</a>
							</span>
						</div>
					</div>

					<div class="flex flex-col">
						<div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
							<div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
								<div class="overflow-hidden">
									<div class="block p-6 rounded-lg shadow-lg bg-white max-w-md">
										<form method="POST" action="{{ route('services.register') }}">
											@csrf
											<div class="grid">
													<div>
														<x-input-label for="title" :value="__('Titulo')" />
														<x-text-input id="title" class="block mt-1 w-full" type="text" name="title" :value="old('title')" required autofocus />
														<x-input-error :messages="$errors->get('title')" class="mt-2" />
													</div>
													<br>
													<div >
														<x-input-label for="description" :value="__('Descripción')" />
														<x-text-input id="description" class="block mt-1 w-full" type="text" name="description" :value="old('description')" required />
														<x-input-error :messages="$errors->get('description')" class="mt-2" />
													</div>
												</div>
												<div >
													<x-input-label for="price" :value="__('Precio')" />
													<x-text-input id="price" class="block mt-1 w-full" type="number" name="price" :value="old('price')" required />
													<x-input-error :messages="$errors->get('price')" class="mt-2" />
												</div>
												<div class="flex items-center justify-end mt-4">
													<button type="submit" class="w-full px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Registrar</button>
												</div>
										</form>
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
