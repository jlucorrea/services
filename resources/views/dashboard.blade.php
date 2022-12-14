<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Inicio
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="grid grid-cols-12 gap-6">
						<div class="col-span-12 2xl:col-span-12">
							<div class="grid grid-cols-12 gap-6">
								<div class="col-span-12">
									<div class="grid grid-cols-12 gap-6 mt-5">
										<div class="col-span-12 sm:col-span-6 xl:col-span-4 intro-y">
											<div class="report-box zoom-in bg-[#F58F00] rounded-lg">
												<div class="box p-5">
													<div class="flex">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" icon-name="shopping-cart" data-lucide="shopping-cart" class="lucide lucide-shopping-cart report-box__icon text-white-500 mt-1 text-white"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 002 1.61h9.72a2 2 0 002-1.61L23 6H6"></path></svg>
														<div class="ml-auto">
															<div class="report-box__indicator bg-success tooltip cursor-pointer">
																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" icon-name="chevron-up" data-lucide="chevron-up" class="lucide lucide-chevron-up w-4 h-4 ml-0.5"><polyline points="18 15 12 9 6 15"></polyline></svg>
															</div>
														</div>
													</div>
													<div class="text-3xl font-medium leading-8 mt-6 bg-midnight">
														<span class=" text-white">{{ $services }}</span>
													</div>
													<div class="text-white text-white-500 mt-1">Servicios</div>
												</div>
											</div>
										</div>
										<div class="col-span-12 sm:col-span-6 xl:col-span-4 intro-y">
											<div class="report-box zoom-in bg-[#32A56A] rounded-lg">
												<div class="box p-5">
													<div class="flex">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" icon-name="credit-card" data-lucide="credit-card" class="lucide lucide-credit-card report-box__icon text-white-500 mt-1 text-white"><rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect><line x1="1" y1="10" x2="23" y2="10"></line></svg>
														<div class="ml-auto">
															<div class="report-box__indicator bg-danger tooltip cursor-pointer">
																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" icon-name="chevron-down" data-lucide="chevron-down" class="lucide lucide-chevron-down w-4 h-4 ml-0.5"><polyline points="6 9 12 15 18 9"></polyline></svg>
															</div>
														</div>
													</div>
													<div class="text-3xl font-medium leading-8 mt-6 text-white">{{ $contact }}</div>
													<div class="text-white-500 mt-1 text-white">Solicitudes</div>
												</div>
											</div>
										</div>
										<div class="col-span-12 sm:col-span-6 xl:col-span-4 intro-y">
											<div class="report-box zoom-in bg-[#1da1f2] rounded-lg">
												<div class="box p-5">
													<div class="flex">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" icon-name="user" data-lucide="user" class="lucide lucide-user report-box__icon text-white-500 text-white"><path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
														<div class="ml-auto">
															<div class="report-box__indicator bg-success tooltip cursor-pointer">
																 <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" icon-name="chevron-up" data-lucide="chevron-up" class="lucide lucide-chevron-up w-4 h-4 ml-0.5"><polyline points="18 15 12 9 6 15"></polyline></svg>
															</div>
														</div>
													</div>
													<div class="text-3xl font-medium leading-8 mt-6 text-white">{{ $user }}</div>
													<div class="text-white text-white-500 mt-1">Usuarios</div>
												</div>
											</div>
										</div>
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
