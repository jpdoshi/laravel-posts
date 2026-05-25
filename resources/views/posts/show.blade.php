<x-layout title="{{ $post->title }}">
    <div class="max-w-4xl mx-auto p-6 py-12">
        <a href="javascript:history.back()"
            class="hover:text-emerald-500 font-medium flex gap-1 items-center mb-3 w-fit">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                stroke="currentColor" class="size-3.5">
                <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" />
            </svg>
            <span class="tracking-tight">Back</span>
        </a>

        <img src="{{ $post->poster_url }}"
            class="w-full aspect-video object-cover object-center rounded-2xl border border-neutral-300" />

        <h1 class="text-4xl font-black leading-snug tracking-tight mt-4">{{ $post->title }}</h1>

        <div class="mt-5 flex items-center justify-between">
            <span class="font-semibold text-white bg-black py-1 px-2 capitalize rounded-md">{{ $post->category }}</span>
            <div class="text-lg font-medium text-emerald-500">-{{ $post->author }}</div>
        </div>

        <div class="text-[17px] text-stone-700 mt-8">{!! nl2br($post->body) !!}</div>
    </div>
</x-layout>