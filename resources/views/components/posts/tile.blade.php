<a href="{{ '/posts/' . $post->id }}"
    class="border-b border-neutral-200 py-6 px-2 hover:translate-x-1 group duration-300 flex items-center justify-between gap-3">
    <div class="flex gap-5 items-center">
        <div class="h-28 aspect-video relative">
            <img src="{{ $post->poster_url }}"
                class="h-28 aspect-video rounded-lg object-cover object-center border border-neutral-200" />
            <div
                class="absolute top-2 right-2 bg-black/70 text-white font-semibold rounded py-0.5 px-1 text-xs capitalize">
                {{ $post->category }}
            </div>
        </div>
        <div>
            <h1
                class="text-xl font-bold underline-offset-3 tracking-tight decoration-emerald-200 group-hover:underline line-clamp-1 text-ellipsis">
                {{ $post->title }}
            </h1>
            <span class="text-emerald-500 text-[15px] font-medium">-{{ $post->author }}</span>
            <p class="mt-1 text-sm text-neutral-600 leading-normal tracking-normal line-clamp-2 text-ellipsis">
                {{ $post->body }}
            </p>
        </div>
    </div>

    <div class="size-5">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
            class="size-5 group-hover:text-emerald-500">
            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
        </svg>
    </div>
</a>