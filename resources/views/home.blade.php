<x-layout>
    {{-- @if ($errors->any)
        {{ dd($errors->all()) }}
    @endif --}}
    <x-slot:title>
        Welcome
    </x-slot:title>
    <div class="card bg-base-100 shadow-md max-w-2xl mx-auto">
        <x-chirp-form />
    </div>

    <div class="max-w-2xl mx-auto">
        @forelse ($chirps as $chirp)
            <x-chirp :chirp="$chirp" />
        @empty
            <div>No Chirps yet. Be the first to chirp!</div>
        @endforelse
    </div>
</x-layout>
