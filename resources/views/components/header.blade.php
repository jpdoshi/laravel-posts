<header class="sticky top-0 z-40">
    <nav
        class="px-6 h-16 bg-white border-b border-slate-200 shadow-md shadow-slate-100 flex items-center justify-between">
        <a href="{{ url('/posts') }}"
            class="text-xl font-bold border-b-2 border-transparent border-dotted hover:border-emerald-400">Laravel
            Posts</a>
        <div class="flex gap-3 items-center">
            <input
                class="border border-stone-200 duration-300 focus:border-emerald-500 focus:shadow-[0_0_0_3px_rgb(208,250,229)] rounded-lg h-9 px-3 outline-0 w-sm font-medium text-[15px]"
                placeholder="Search Posts..." />
            <button>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                    stroke="currentColor" class="size-4 opacity-80">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                </svg>
                Add Post
            </button>
        </div>
    </nav>
</header>