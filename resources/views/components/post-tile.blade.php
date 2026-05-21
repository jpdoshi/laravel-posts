<a href="{{ '/posts/' . $post->id }}"
    class="border-b border-neutral-200 py-6 px-2 hover:translate-x-1 group duration-300 flex items-center justify-between gap-3">
    <div class="flex gap-5 items-center">
        <img src="https://cdn3d.iconscout.com/3d/free/thumb/free-laravel-framework-logo-3d-icon-png-download-5453023.png"
            class="size-12" />
        <div>
            <h1
                class="text-xl font-bold mb-1 leading-snug underline-offset-3 tracking-tight decoration-rose-200 group-hover:underline">
                {{ $post->title }}
            </h1>
            <span>{{ $post->author }}</span>

            <p class="text-sm text-neutral-600 font-medium leading-normal tracking-normal">
                {{ $post->body }}
            </p>
        </div>
    </div>

    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
        class="size-5 group-hover:text-rose-500">
        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
    </svg>
</a>