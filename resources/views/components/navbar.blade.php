
<nav class="navbar bg-base-100 shadow-sm px-6">
    <!-- Left -->
    <div class="flex-1">
        <a href="/" class="flex items-center gap-3">

            <!-- Logo -->
            <div class="w-10 h-10 rounded-xl bg-primary text-primary-content flex items-center justify-center text-xl font-bold">
                🐦
            </div>

            <!-- Title -->
            <div>
                <h1 class="text-xl font-bold">
                    Chirper
                </h1>
                <p class="text-xs text-base-content/60">
                    Share your thoughts
                </p>
            </div>

        </a>
    </div>

    <!-- Right -->
    <div class="flex items-center gap-2">
        @auth
            <span class="text-sm">{{ auth()->user()->name }}</span>
            <form action="{{ route('logout') }}" method="post" class="inline">
                @csrf
                <button type="submit" class="btn btn-ghost btn-sm">
                    Logout
                </button>
            </form>
        @else
            <a
            href="{{ route('login') }}"
            class="btn btn-ghost"
            >
                Sign In
            </a>

            <a
                href="{{ route('register') }}"
                class="btn btn-primary"
            >
                Sign Up
            </a>
        @endauth

        
    </div>
</nav>