
    <div class="card-body">
        <h2 class="card-title">Create a Chirp</h2>

        <form action="/chirps" method="POST" class="space-y-4">
            @csrf

            <div>
                <textarea
                    name="message"
                    rows="4"
                    class="textarea textarea-bordered w-full"
                    placeholder="What's happening?"
                    {{-- required --}}
                >{{ old('message') }}</textarea>

                @error('message')
                    <p class="mt-2 text-sm text-error">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex justify-end">
                <button type="submit" class="btn btn-primary">
                    Chirp
                </button>
            </div>
        </form>
    </div>
