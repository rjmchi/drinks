<x-layouts.guest :title="__('Cocktails')">

    <div class="bg-teal-50 flex justify-end p-2">

        <div>
            <flux:dropdown>
                <flux:button icon:trailing="chevron-down">Select Category</flux:button>

                <flux:menu>
                    <flux:menu.item :href="route('home')">All Drinks</flux:menu.item>
                    @foreach ($catlist as $cat)
                        <flux:menu.item :href="route('home', $cat->slug)">{{ $cat->name }}</flux:menu.item>
                    @endforeach

                </flux:menu>
            </flux:dropdown>

        </div>

    </div>
    <div class="container">
        @if ($selected)
            <h1 class="text-3xl bold text-center text-teal-900">{{ $selected }}</h1>
        @endif

        @forelse ($drinks as $drink)
            <x-drink-card :drink="$drink" wire:key='$drink->id' />
        @empty
            <p class="mt-4 text-center">No Drinks Found</p>
        @endforelse

    </div>
</x-layouts.guest>
