<x-guest-layout>
    <div class="bg-teal-50 flex justify-end p-2">

        <div>
            <x-dropdown align="right" width="48">
                <x-slot name="trigger">
                    <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-zinc-500 bg-teal-50 hover:text-zinc-700 focus:outline-none transition ease-in-out duration-150">
                        <div>Select Category</div>

                        <div class="ms-1">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </div>
                    </button>
                </x-slot>

                <x-slot name="content">
                    <x-dropdown-link :href="route('home')">All Drinks</x-dropdown-link>
                    @foreach ($catlist as $cat)
                        <x-dropdown-link :href="route('home',$cat->slug)">{{$cat->name}}</x-dropdown-link>
                    @endforeach

                </x-slot>
            </x-dropdown>
        </div>

    </div>
    <div class="container">
        @if ($selected)
        <h1 class="text-3xl bold text-center text-teal-900">{{$selected}}</h1>
        @endif

        @if(count($drinks) > 0)
        @foreach($drinks as $drink)
        <x-drink-card :drink="$drink" />

        @endforeach
        {!! $drinks->links() !!}
        @else
        <p class="mt-4 text-center">No Drinks Found</p>
        @endif
    </div>
</x-guest-layout>