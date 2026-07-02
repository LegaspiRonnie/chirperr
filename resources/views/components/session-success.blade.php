@if (session('success'))
    <div class="fixed top-5 left-1/2 -translate-x-1/2 z-50">
        <div
            id="success-alert"
            class="alert alert-success w-fit max-w-md shadow-xl flex-nowrap transition-all duration-500 opacity-100"
        >
            <!-- Check Icon -->
            <svg xmlns="http://www.w3.org/2000/svg"
                class="w-5 h-5 shrink-0"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
                stroke-width="2">
                <path stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M5 13l4 4L19 7"/>
            </svg>

            <span class="whitespace-nowrap">
                {{ session('success') }}
            </span>
        </div>
    </div>

    <script>
        setTimeout(() => {
            const alert = document.getElementById('success-alert');

            if (alert) {
                alert.classList.add(
                    'opacity-0',
                    '-translate-y-5',
                    'scale-95'
                );

                setTimeout(() => {
                    alert.parentElement.remove();
                }, 500);
            }
        }, 4000);
    </script>
@endif