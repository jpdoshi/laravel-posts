<header class="sticky top-0 z-40">
    <nav
        class="px-6 h-16 bg-white border-b border-slate-200 shadow-lg shadow-black/5 flex items-center justify-between">
        <a href="{{ url('/posts') }}"
            class="text-xl font-bold border-b-2 text-slate-800 border-transparent border-dotted hover:border-emerald-400">Laravel
            Posts</a>
        <div class="flex gap-3 items-center">
            <form action="/posts/search" method="GET">
                <input name="q" required
                    class="border border-slate-200 hover:border-slate-300 hover:bg-slate-50/50 duration-300 focus:border-emerald-500 focus:shadow-[0_0_0_3px_rgb(208,250,229)] rounded-lg h-9 px-3 outline-0 w-xs font-medium text-[15px]"
                    placeholder="Search Posts..." />
            </form>
            <a href="/posts/create" class="btn">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                    stroke="currentColor" class="size-4 -translate-y-px">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                </svg>
                <span>
                    Add Post
                </span>
            </a>
        </div>
    </nav>
</header>