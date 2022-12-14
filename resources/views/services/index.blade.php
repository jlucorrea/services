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
							<h2 class="text-2xl font-bold leading-7 text-gray-900 sm:truncate sm:text-3xl sm:tracking-tight">Lista de Servicios</h2>
						</div>
						<div class="mt-5 flex lg:mt-0 lg:ml-4">
							<span class="sm:ml-3">
								<a href="{{ route('services.create') }}" type="button" class="inline-flex items-center rounded-md border border-transparent bg-indigo-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
									<svg class="-ml-1 mr-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
									<path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
									</svg>
									Nuevo
								</a>
							</span>
						</div>
					</div>

					<div class="flex flex-col">
						<div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
							<div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
							<div class="overflow-hidden">
								<table class="min-w-full">
								<thead class="border-b bg-gray-800">
									<tr>
									<th scope="col" class="text-sm font-medium text-white-900 text-white px-6 py-4 text-left">
										#
									</th>
									<th scope="col" class="text-sm font-medium text-white-900 text-white px-6 py-4 text-left">
										TITULO
									</th>
									<th scope="col" class="text-sm font-medium text-white-900 text-white px-6 py-4 text-left">
										DESCRIPCION
									</th>
									<th scope="col" class="text-sm font-medium text-white-900 text-white px-6 py-4 text-left">
										PRECIO
									</th>
									<th scope="col" class="text-sm font-medium text-white-900 text-white px-6 py-4 text-left">
										Opciones
									</th>
									</tr>
								</thead>
									<tbody>
										<?php
											$contador = 1;
										?>
										@foreach($services as $servis)
										<tr class="border-b">
											<td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{ $contador++ }}</td>
											<td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
												{{$servis->title}}
											</td>
											<td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
												{{$servis->description}}
											</td>
											<td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
												{{$servis->price}}
											</td>
											<td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
												<span class="sm:ml-3">
													<a href="{{ route('services.edit', $servis->id) }}" type="button" class="inline-flex items-center rounded-md border border-transparent bg-indigo-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
														<svg class="-ml-1 mr-2 h-5 w-5 text-gray-500" class="text-white-500 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
															<path d="M2.695 14.763l-1.262 3.154a.5.5 0 00.65.65l3.155-1.262a4 4 0 001.343-.885L17.5 5.5a2.121 2.121 0 00-3-3L3.58 13.42a4 4 0 00-.885 1.343z" />
														</svg>
														Editar
													</a>
													<a href="{{ route('services.destroy', $servis->id) }}" type="submit" class="inline-flex items-center rounded-md border border-transparent px-4 py-2 text-sm font-medium text-white shadow-sm  focus:outline-none focus:ring-2 focus:ring-indigo-500" style="background: #7D1109;">
														Eliminar
													</a>
												</span>
											</td>
										</tr>
										@endforeach
									</tbody>
								</table>
								<div class="flex justify-center">
									{{ $services->links()}}
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
