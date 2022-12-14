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
							<h2 class="text-2xl font-bold leading-7 text-gray-900 sm:truncate sm:text-3xl sm:tracking-tight">Lista de Solicitudes</h2>
						</div>
					</div>

					<div class="flex flex-col">
						<div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
							<div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
							<div class="overflow-hidden">
								<table class="min-w-full">
								<thead class="border-b" style="background: #308C47 !important;">
									<tr>
									<th scope="col" class="text-sm font-medium text-white-900 text-white px-6 py-4 text-left">
										#
									</th>
									<th scope="col" class="text-sm font-medium text-white-900 text-white px-6 py-4 text-left">
										Cliente
									</th>
									<th scope="col" class="text-sm font-medium text-white-900 text-white px-6 py-4 text-left">
										Email
									</th>
									<th scope="col" class="text-sm font-medium text-white-900 text-white px-6 py-4 text-left">
										Dirección
									</th>
									<th scope="col" class="text-sm font-medium text-white-900 text-white px-6 py-4 text-left">
										Telefono
									</th>
									{{-- <th scope="col" class="text-sm font-medium text-white-900 text-white px-6 py-4 text-left">
										Estado
									</th> --}}
									<th scope="col" class="text-sm font-medium text-white-900 text-white px-6 py-4 text-left">
										Opciones
									</th>
									</tr>
								</thead>
									<tbody>
									<?php
										$contador = 1;
									?>
										@foreach($contactview as $contactv)
										@if ($contactv->status == 0)
											<tr class="border-b" style="background: #ffff !important">
										@else
											<tr class="border-b" style="background: #6CEE8D !important;">
										@endif
										
											<td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{ $contador++ }}</td>
											<td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
												{{$contactv->name}} {{$contactv->last_name}}
											</td>
											<td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
												{{$contactv->email}}
											</td>
											<td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
												{{$contactv->address}}
											</td>
											<td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
												{{$contactv->telephone}}
											</td>
											<td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
												<span class="sm:ml-3">
													<a href="{{ route('contactview.edit', $contactv->id) }}" type="button" class="inline-flex items-center rounded-md border border-transparent px-4 py-2 text-sm font-medium text-white shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2" style="background: #979B9B !important">
														Ver
													</a>
												</span>
											</td>
										</tr>
										@endforeach
									</tbody>
								</table>
								<div class="flex justify-center">
									{{ $contactview->links()}}
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
