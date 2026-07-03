<x-layout>
    <x-slot:title>
        Login
    </x-slot:title>

    <div class="min-h-[80vh] flex items-center justify-center px-4">
        <div class="card w-full max-w-md bg-base-100 shadow-2xl">
            <div class="card-body">

                <div class="text-center mb-4">
                    <h1 class="text-3xl font-bold">Welcome Back</h1>
                    <p class="text-base-content/60 mt-2">
                        Sign in to continue to Chirper.
                    </p>
                </div>

                <form action="{{ route('login-post') }}" method="POST" class="space-y-4">
                    @csrf

                    {{-- Email --}}
                    <div>
                        <label class="label">
                            <span class="label-text">Email</span>
                        </label>

                        <input
                            type="email"
                            name="email"
                            value="{{ old('email') }}"
                            placeholder="john@example.com"
                            class="input input-bordered w-full"
                            required
                        >
                        @error('email')
                            <label class="label">
                                <span class="label-text-alt text-error">
                                    {{ $message }}
                                </span>
                            </label>
                        @enderror
                    </div>

                    {{-- Password --}}
                    <div>
                        <label class="label">
                            <span class="label-text">Password</span>
                        </label>

                        <input
                            type="password"
                            name="password"
                            placeholder="••••••••"
                            class="input input-bordered w-full"
                            required
                        >
                        @error('password')
                            <label class="label">
                                <span class="label-text-alt text-error">
                                    {{ $message }}
                                </span>
                            </label>
                        @enderror
                    </div>

                    <div class="flex items-center justify-between">

                        <label class="label cursor-pointer gap-2">
                            <input
                                type="checkbox"
                                name="remember"
                                class="checkbox checkbox-sm"
                            >
                            <span class="label-text">Remember me</span>
                        </label>

                        <a
                            href="#"
                            class="link link-hover text-sm text-primary"
                        >
                            Forgot password?
                        </a>

                    </div>

                    <button
                        type="submit"
                        class="btn btn-primary w-full"
                    >
                        Sign In
                    </button>
                </form>

                <div class="divider">OR</div>

                {{-- Google Button (UI Only) --}}
                <button
                    type="button"
                    class="btn btn-outline w-full"
                >
                    <svg xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 48 48"
                        class="w-5 h-5">
                        <path fill="#FFC107" d="M43.611 20.083H42V20H24v8h11.303C33.651 32.657 29.201 36 24 36c-6.627 0-12-5.373-12-12S17.373 12 24 12c3.059 0 5.842 1.154 7.959 3.041l5.657-5.657C34.046 6.053 29.277 4 24 4 12.955 4 4 12.955 4 24s8.955 20 20 20 20-8.955 20-20c0-1.341-.138-2.651-.389-3.917z"/>
                        <path fill="#FF3D00" d="M6.306 14.691l6.571 4.819C14.655 15.108 18.961 12 24 12c3.059 0 5.842 1.154 7.959 3.041l5.657-5.657C34.046 6.053 29.277 4 24 4 16.318 4 9.656 8.337 6.306 14.691z"/>
                        <path fill="#4CAF50" d="M24 44c5.176 0 9.86-1.977 13.409-5.192l-6.19-5.238C29.146 35.091 26.695 36 24 36c-5.18 0-9.617-3.317-11.279-7.946l-6.522 5.025C9.505 39.556 16.227 44 24 44z"/>
                        <path fill="#1976D2" d="M43.611 20.083H42V20H24v8h11.303a12.038 12.038 0 01-4.084 5.57l.003-.002 6.19 5.238C36.971 39.205 44 34 44 24c0-1.341-.138-2.651-.389-3.917z"/>
                    </svg>

                    Continue with Google
                </button>

                <div class="text-center mt-6 text-sm">
                    Don't have an account?
                    <a href="/register" class="link link-primary font-medium">
                        Create one
                    </a>
                </div>

            </div>
        </div>
    </div>
</x-layout>