<x-layout title="All Posts">
    <div class="max-w-4xl mx-auto p-6 py-12">
        <div class="flex gap-4 items-center">
            <div class="h-px w-full bg-emerald-200"></div>
            <h1 class="text-xl tracking-wider uppercase text-slate-700 font-medium text-nowrap">All Posts</h1>
            <div class="h-px w-full bg-emerald-200"></div>
        </div>

        <div class="mt-3">
            @foreach ($posts as $post)
                <x-posts.post-tile :post="$post"></x-posts.post-tile>
            @endforeach
        </div>
    </div>
</x-layout>