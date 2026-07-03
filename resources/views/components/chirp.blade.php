@props(['chirp'])

<div class="card bg-base-100 shadow-md hover:shadow-xl transition-all duration-300 mt-6">
    <div class="card-body">

        <div class="flex items-start gap-4">

            {{-- Avatar --}}
            <img
                src="https://ui-avatars.com/api/?name={{ urlencode($chirp->user?->name ?? 'Anonymous') }}&background=random"
                alt="{{ $chirp->user?->name ?? 'Anonymous' }}"
                class="w-14 h-14 rounded-full border border-base-300 object-cover"
            >

            <div class="flex-1">

                {{-- Header --}}
                <div class="flex items-start justify-between">
                    <div>
                        <h2 class="text-lg font-bold">
                            {{ $chirp->user?->name ?? 'Anonymous' }}
                        </h2>

                        <p class="text-sm text-base-content/60">
                            {{ $chirp->user?->email }}
                        </p>
                    </div>

                    <span class="text-xs text-base-content/50 whitespace-nowrap">
                        {{ $chirp->created_at?->diffForHumans() ?? 'Unknown' }}
                        @if ($chirp->updated_at->gt($chirp->created_at->addSeconds(5)))
                            <span class="text-xs text-base-content/50 whitespace-nowrap">.</span>
                            <span class="text-sm tet-base-content/60">edited</span>
                        @endif
                    </span>
                    
                </div>

                {{-- Message --}}
                <p class="mt-4 whitespace-pre-wrap leading-relaxed text-base">
                    {{ $chirp->message }}
                </p>

                {{-- Footer --}}
                @can('update', $chirp)
                    <div class="mt-5 flex justify-end items-center gap-2 border-t border-base-200 pt-3">

                        <a
                            href="/chirps/{{ $chirp->id }}/edit"
                            class="btn btn-ghost btn-sm"
                        >
                            ✏️ Edit
                        </a>

                        <form
                            action="/chirps/{{ $chirp->id }}"
                            method="POST"
                            onsubmit="return confirm('Are you sure you want to delete this chirp?')"
                        >
                            @csrf
                            @method('DELETE')

                            <button
                                type="submit"
                                class="btn btn-error btn-sm btn-outline"
                            >
                                🗑 Delete
                            </button>
                        </form>

                    </div>
                @endcan

            </div>

        </div>

    </div>
</div>