<x-layout :title="request()->routeIs('posts.search') ? 'Search Results' : 'All Posts'">
    <div class="max-w-4xl mx-auto p-6 py-12">
        @if (request()->routeIs('posts.index'))
            <div class="flex gap-4 items-center">
                <div class="h-px w-full bg-emerald-200"></div>
                <h1 class="text-xl tracking-wider uppercase text-slate-700 font-medium text-nowrap">All Posts</h1>
                <div class="h-px w-full bg-emerald-200"></div>
            </div>
        @elseif (request()->routeIs('posts.search'))
            <a href="javascript:history.back()"
                class="hover:text-emerald-500 font-medium flex gap-1 items-center mb-3 w-fit">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                    stroke="currentColor" class="size-3.5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" />
                </svg>
                <span class="tracking-tight">Back</span>
            </a>
            <h1 class="text-xl tracking-tight uppercase text-slate-700 font-medium">Search Results for:
                <span class="text-emerald-500">{{ request()->query('q') }}</span>
            </h1>
        @endif

        <div class="mt-3">
            @forelse ($posts as $post)
                <x-posts.tile :post="$post"></x-posts.tile>
            @empty
                <p class="text-slate-600">No results found.</p>
            @endforelse
        </div>

        {{ $posts->links() }}
    </div>
</x-layout>