<div class="inline-block relative" x-data="{ open: true }">
	
	<input @click.away="{ open = false; @this.resetIndex(); }" @click="{ open = true }" class="bg-gray-200 text-gray-700 border-2 focus:outline-none placeholder-gray-500 px-2 py-1 rounded-full mr-3 w-56" placeholder="Rechercher une mission..." wire:model="query"

	wire:keydown.arrow-down.prevent="incrementIndex"
	wire:keydown.arrow-up.prevent="decrementIndex"
	wire:keydown.backscape="resetIndex"
	wire:keydown.enter.prevent="showJob"

	>

	<svg class="w-6 h-6 text-gray-500 absolute  top-0 right-0 mr-5 mt-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>

		
		@if (strlen($query) > 2 )

		<div  class="absolute border rounded bg-gray-100 text-md w-56 mt-1" 

		x-show="open">

				
	
		@if (count($jobs) > 0)

		@foreach($jobs as $index => $job)

		<p class="p-1 {{ $index === $selectedIndex ? 'text-green-500' :'' }}"  > {{ $job->title }} </p>

		@endforeach


	

	@else

	<span class="text-red-700 p-1"> 0 résultats pour "{{ $query }}" </span>

	@endif
</div>

	@endif

				
	</div>
