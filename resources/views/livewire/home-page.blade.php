<div>

    <div class="bg-teal-50 flex justify-end gap-4 mx-5 p-2">

        <livewire:search-bar />

        <flux:select wire:model.live="selected" placeholder="Select a Category...">
            <flux:select.option value='0'>All Drinks</flux:select.option>
            @foreach ($catlist as $cat)
                <flux:select.option :value='$cat->id'>{{ $cat->name }}</flux:select.option>
            @endforeach
        </flux:select>

    </div>
    <div class="container">
        @if ($select)
            <h1 class="text-3xl bold text-center text-teal-900">{{ $select }}</h1>
        @endif

        @forelse ($drinks as $drink)
            <x-drink-card :drink="$drink" wire:key='$drink->id' />
        @empty
            <p class="mt-4 text-center">No Drinks Found</p>
        @endforelse

        <div>
            {{ $drinks->links() }}
        </div>
    </div>
</div>
