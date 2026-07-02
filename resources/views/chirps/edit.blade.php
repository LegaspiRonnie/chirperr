<x-layout>
    <x-slot:title>
        Edit 
    </x-slot:title>
    {{-- <div class="card bg-base-100 shadow-md max-w-2xl mx-auto">
        <x-chirp-form />
    </div> --}}

    <div class="max-w-2xl mx-auto">
        <div class="max-w-2xl mx-auto px-4 py-8">

    <div class="card bg-base-100 shadow-xl">
        <div class="card-body">

            <div class="mb-6">
                <h1 class="card-title text-3xl font-bold">
                    ✏️ Edit Chirp
                </h1>

                <p class="text-base-content/60 mt-1">
                    Update your message below.
                </p>
            </div>

            <form action="/chirps/{{ $chirp->id }}" method="POST" class="space-y-5">
                @csrf
                @method('PUT')

                <div>
                    <label class="label">
                        <span class="label-text font-medium">
                            Message
                        </span>
                    </label>

                    <textarea
                        name="message"
                        rows="6"
                        class="textarea textarea-bordered w-full"
                        placeholder="What's happening?"
                        required
                    >{{ old('message', $chirp->message) }}</textarea>

                    @error('message')
                        <label class="label">
                            <span class="label-text-alt text-error">
                                {{ $message }}
                            </span>
                        </label>
                    @enderror
                </div>

                <div class="card-actions justify-end gap-2">

                    <a href="javascript:history.back()" class="btn btn-ghost">
                        Cancel
                    </a>

                    <button
                        type="submit"
                        class="btn btn-primary"
                    >
                        💾 Save Changes
                    </button>

                </div>

            </form>

        </div>
    </div>

</div>

    </div>
</x-layout>

