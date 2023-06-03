<!-- tailwind css component category filter -->

<div class="bg-white">
	<div x-data="{ open: false }" @keydown.window.escape="open = false">
	  	<!-- Mobile filter dialog -->

		<div x-show="open" class="relative z-40 lg:hidden" x-ref="dialog" aria-modal="true" style="display: none;">

			<div x-show="open" x-transition:enter="transition-opacity ease-linear duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition-opacity ease-linear duration-300" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="fixed inset-0 bg-black/70" style="display: none;"></div>

		  	<div class="fixed inset-0 z-40 flex">

				<div x-show="open" x-transition:enter="transition ease-in-out duration-300 transform" x-transition:enter-start="translate-x-full" x-transition:enter-end="translate-x-0" x-transition:leave="transition ease-in-out duration-300 transform" x-transition:leave-start="translate-x-0" x-transition:leave-end="translate-x-full" class="relative ml-auto flex h-full w-full max-w-xs flex-col overflow-y-auto bg-white py-4 pb-12 shadow-xl" @click.away="open = false" style="display: none;">
					<!-- filter close -->
					<div class="flex items-center justify-between px-4">
						<h2 class="text-lg font-medium text-gray-900">Title Category</h2>
						<button type="button" class="-mr-2 flex h-10 w-10 items-center justify-center rounded-md bg-white p-2 text-gray-400" @click="open = false">
							<svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
								<path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
							</svg>
						</button>
					</div>
					<!-- end filter close -->

					<!-- Filters -->
					<form class="lg:hidden block lg:w-50 ">
						<!-- start acordion -->
						<!-- @click.away="storage = false" -->
						<!-- color -->
						<div x-data="{ color: false }" class=" mx-4 py-1 border-b border-gray-200 transition-all duration-400" :class="color? 'pb-3': ''" >
							<button type="button" class="flex w-full items-center justify-between bg-white py-3 text-sm text-gray-400 hover:text-gray-500" @click="color = !color" >
								<span class="font-medium text-gray-900">Color</span>
								<span class="ml-6 flex items-center">
									<svg class="h-5 w-5" x-show="!(color)" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
										<path d="M10.75 4.75a.75.75 0 00-1.5 0v4.5h-4.5a.75.75 0 000 1.5h4.5v4.5a.75.75 0 001.5 0v-4.5h4.5a.75.75 0 000-1.5h-4.5v-4.5z"></path>
									</svg>
									<svg class="h-5 w-5"  x-show="color" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" style="display: none;">
										<path fill-rule="evenodd" d="M4 10a.75.75 0 01.75-.75h10.5a.75.75 0 010 1.5H4.75A.75.75 0 014 10z" clip-rule="evenodd"></path>
									</svg>
								</span>
							</button>
							<div class="max-h-0 overflow-hidden transition-all duration-300" x-ref="color" :style="color = color ?  'max-height: '+ $refs.color.scrollHeight + 'px' :'' ">
								<div class="space-y-4">
									<div class="flex items-center">
										<input id="filter-color-0" name="color[]" value="white" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
										<label for="filter-color-0" class="ml-3 text-sm text-gray-600">White</label>
									</div>
									<div class="flex items-center">
										<input id="filter-color-1" name="color[]" value="beige" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
										<label for="filter-color-1" class="ml-3 text-sm text-gray-600">Beige</label>
									</div>
								</div>
							</div>
						</div>
						<!-- end color -->
						<!-- brand -->
						<div x-data="{ brand: false }" class=" mx-4 py-1 border-b border-gray-200 transition-all duration-400" :class="brand? 'pb-3': ''" >
							<button type="button" class="flex w-full items-center justify-between bg-white py-3 text-sm text-gray-400 hover:text-gray-500" @click="brand = !brand" >
								<span class="font-medium text-gray-900">brand</span>
								<span class="ml-6 flex items-center">
									<svg class="h-5 w-5" x-show="!(brand)" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
										<path d="M10.75 4.75a.75.75 0 00-1.5 0v4.5h-4.5a.75.75 0 000 1.5h4.5v4.5a.75.75 0 001.5 0v-4.5h4.5a.75.75 0 000-1.5h-4.5v-4.5z"></path>
									</svg>
									<svg class="h-5 w-5"  x-show="brand" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" style="display: none;">
										<path fill-rule="evenodd" d="M4 10a.75.75 0 01.75-.75h10.5a.75.75 0 010 1.5H4.75A.75.75 0 014 10z" clip-rule="evenodd"></path>
									</svg>
								</span>
							</button>
							<div class="max-h-0 overflow-hidden transition-all duration-300" x-ref="brand" :style="brand = brand ?  'max-height: '+ $refs.brand.scrollHeight + 'px' :'' ">
								<div class="space-y-4">
									<div class="flex items-center">
										<input id="filter-brand-0" name="brand[]" value="white" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
										<label for="filter-brand-0" class="ml-3 text-sm text-gray-600">White</label>
									</div>
									<div class="flex items-center">
										<input id="filter-brand-1" name="brand[]" value="beige" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
										<label for="filter-brand-1" class="ml-3 text-sm text-gray-600">Beige</label>
									</div>
								</div>
							</div>
						</div>
						<!-- end brand -->
						<!-- storage -->
						<div x-data="{ storage: false }" class=" mx-4 py-1 border-b border-gray-200 transition-all duration-400" :class="storage? 'pb-3': ''" @click.away="storage = false" >
							<button type="button" class="flex w-full items-center justify-between bg-white py-3 text-sm text-gray-400 hover:text-gray-500" @click="storage = !storage" >
								<span class="font-medium text-gray-900">storage</span>
								<span class="ml-6 flex items-center">
									<svg class="h-5 w-5" x-show="!(storage)" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
										<path d="M10.75 4.75a.75.75 0 00-1.5 0v4.5h-4.5a.75.75 0 000 1.5h4.5v4.5a.75.75 0 001.5 0v-4.5h4.5a.75.75 0 000-1.5h-4.5v-4.5z"></path>
									</svg>
									<svg class="h-5 w-5"  x-show="storage" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" style="display: none;">
										<path fill-rule="evenodd" d="M4 10a.75.75 0 01.75-.75h10.5a.75.75 0 010 1.5H4.75A.75.75 0 014 10z" clip-rule="evenodd"></path>
									</svg>
								</span>
							</button>
							<div class="max-h-0 overflow-hidden transition-all duration-300" x-ref="storage" :style="storage = storage ?  'max-height: '+ $refs.storage.scrollHeight + 'px' :'' ">
								<div class="space-y-4">
									<div class="flex items-center">
										<input id="filter-storage-0" name="storage[]" value="white" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
										<label for="filter-storage-0" class="ml-3 text-sm text-gray-600">White</label>
									</div>
									<div class="flex items-center">
										<input id="filter-storage-1" name="storage[]" value="beige" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
										<label for="filter-storage-1" class="ml-3 text-sm text-gray-600">Beige</label>
									</div>
								</div>
							</div>
						</div>
						<!-- end storage -->
					</form>

				</div>

			</div>
		</div>
		<!-- end Mobile filter dialog -->

	 	<div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

			<div class="pb-24 pt-6">
				<!-- nav bar -->
				<div class="flex items-center justify-between my-6">
					<h1 class="shrink text-2xl font-semibold">Title of Category</h1>
					<div class="flex items-center gap-x-4">
						<div class="shrink-0 hidden md:flex items-center">
							show <b>&nbsp; 30 &nbsp;</b> of <b> &nbsp;10&nbsp; </b> par page
						</div>

						<select name="" id="" class="form-input appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-300 focus:ring-0">
							<option value="" selected>Short By</option>
							<option value="">Popular</option>
							<option value="">Low Quality</option>
							<option value="">High Quality</option>
						</select>

						<!-- filter open button -->
						<div class="shrink-0 block lg:hidden">
							<button type="button" class="text-gray-400 hover:text-gray-500" @click="open = true">
								<span class="sr-only">Filters</span>
								<svg class="h-5 w-5" aria-hidden="true" viewBox="0 0 20 20" fill="currentColor">
									<path fill-rule="evenodd" d="M2.628 1.601C5.028 1.206 7.49 1 10 1s4.973.206 7.372.601a.75.75 0 01.628.74v2.288a2.25 2.25 0 01-.659 1.59l-4.682 4.683a2.25 2.25 0 00-.659 1.59v3.037c0 .684-.31 1.33-.844 1.757l-1.937 1.55A.75.75 0 018 18.25v-5.757a2.25 2.25 0 00-.659-1.591L2.659 6.22A2.25 2.25 0 012 4.629V2.34a.75.75 0 01.628-.74z" clip-rule="evenodd"></path>
								</svg>
							</button>
						</div>
						<!-- end filter open button -->
					</div>
				</div>
				<!-- nav bar -->
				<div class="grid grid-cols-1 gap-x-8 gap-y-10 lg:grid-cols-4">
					<!--desktop Filters -->
					<form class="hidden lg:block lg:w-50 ">
						<!-- start acordion -->
						<!-- @click.away="storage = false" -->
						<!-- color -->
						<div x-data="{ color: false }" class="py-1 border-b border-gray-200 transition-all duration-400" :class="color? 'pb-3': ''" >
							<button type="button" class="flex w-full items-center justify-between bg-white py-3 text-sm text-gray-400 hover:text-gray-500" @click="color = !color" >
								<span class="font-medium text-gray-900">Color</span>
								<span class="ml-6 flex items-center">
									<svg class="h-5 w-5" x-show="!(color)" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
										<path d="M10.75 4.75a.75.75 0 00-1.5 0v4.5h-4.5a.75.75 0 000 1.5h4.5v4.5a.75.75 0 001.5 0v-4.5h4.5a.75.75 0 000-1.5h-4.5v-4.5z"></path>
									</svg>
									<svg class="h-5 w-5"  x-show="color" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" style="display: none;">
										<path fill-rule="evenodd" d="M4 10a.75.75 0 01.75-.75h10.5a.75.75 0 010 1.5H4.75A.75.75 0 014 10z" clip-rule="evenodd"></path>
									</svg>
								</span>
							</button>
							<div class="max-h-0 overflow-hidden transition-all duration-300" x-ref="color" :style="color = color ?  'max-height: '+ $refs.color.scrollHeight + 'px' :'' ">
								<div class="space-y-4">
									<div class="flex items-center">
										<input id="filter-color-0" name="color[]" value="white" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
										<label for="filter-color-0" class="ml-3 text-sm text-gray-600">White</label>
									</div>
									<div class="flex items-center">
										<input id="filter-color-1" name="color[]" value="beige" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
										<label for="filter-color-1" class="ml-3 text-sm text-gray-600">Beige</label>
									</div>
								</div>
							</div>
						</div>
						<!-- end color -->
						<!-- brand -->
						<div x-data="{ brand: false }" class="py-1 border-b border-gray-200 transition-all duration-400" :class="brand? 'pb-3': ''" >
							<button type="button" class="flex w-full items-center justify-between bg-white py-3 text-sm text-gray-400 hover:text-gray-500" @click="brand = !brand" >
								<span class="font-medium text-gray-900">brand</span>
								<span class="ml-6 flex items-center">
									<svg class="h-5 w-5" x-show="!(brand)" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
										<path d="M10.75 4.75a.75.75 0 00-1.5 0v4.5h-4.5a.75.75 0 000 1.5h4.5v4.5a.75.75 0 001.5 0v-4.5h4.5a.75.75 0 000-1.5h-4.5v-4.5z"></path>
									</svg>
									<svg class="h-5 w-5"  x-show="brand" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" style="display: none;">
										<path fill-rule="evenodd" d="M4 10a.75.75 0 01.75-.75h10.5a.75.75 0 010 1.5H4.75A.75.75 0 014 10z" clip-rule="evenodd"></path>
									</svg>
								</span>
							</button>
							<div class="max-h-0 overflow-hidden transition-all duration-300" x-ref="brand" :style="brand = brand ?  'max-height: '+ $refs.brand.scrollHeight + 'px' :'' ">
								<div class="space-y-4">
									<div class="flex items-center">
										<input id="filter-brand-0" name="brand[]" value="white" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
										<label for="filter-brand-0" class="ml-3 text-sm text-gray-600">White</label>
									</div>
									<div class="flex items-center">
										<input id="filter-brand-1" name="brand[]" value="beige" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
										<label for="filter-brand-1" class="ml-3 text-sm text-gray-600">Beige</label>
									</div>
								</div>
							</div>
						</div>
						<!-- end brand -->
						<!-- storage -->
						<div x-data="{ storage: false }" class="py-1 border-b border-gray-200 transition-all duration-400" :class="storage? 'pb-3': ''" @click.away="storage = false" >
							<button type="button" class="flex w-full items-center justify-between bg-white py-3 text-sm text-gray-400 hover:text-gray-500" @click="storage = !storage" >
								<span class="font-medium text-gray-900">storage</span>
								<span class="ml-6 flex items-center">
									<svg class="h-5 w-5" x-show="!(storage)" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
										<path d="M10.75 4.75a.75.75 0 00-1.5 0v4.5h-4.5a.75.75 0 000 1.5h4.5v4.5a.75.75 0 001.5 0v-4.5h4.5a.75.75 0 000-1.5h-4.5v-4.5z"></path>
									</svg>
									<svg class="h-5 w-5"  x-show="storage" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" style="display: none;">
										<path fill-rule="evenodd" d="M4 10a.75.75 0 01.75-.75h10.5a.75.75 0 010 1.5H4.75A.75.75 0 014 10z" clip-rule="evenodd"></path>
									</svg>
								</span>
							</button>
							<div class="max-h-0 overflow-hidden transition-all duration-300" x-ref="storage" :style="storage = storage ?  'max-height: '+ $refs.storage.scrollHeight + 'px' :'' ">
								<div class="space-y-4">
									<div class="flex items-center">
										<input id="filter-storage-0" name="storage[]" value="white" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
										<label for="filter-storage-0" class="ml-3 text-sm text-gray-600">White</label>
									</div>
									<div class="flex items-center">
										<input id="filter-storage-1" name="storage[]" value="beige" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
										<label for="filter-storage-1" class="ml-3 text-sm text-gray-600">Beige</label>
									</div>
								</div>
							</div>
						</div>
						<!-- end storage -->
					</form>

					<!-- Product grid -->
					<div class="w-full lg:col-span-3 border">

					</div>
				</div>
			</div>

		</div>
  	</div>
</div>
