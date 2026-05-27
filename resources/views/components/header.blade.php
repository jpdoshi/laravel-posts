<header class="sticky top-0 z-40">
    <nav
        class="px-6 h-16 bg-white border-b border-slate-200 shadow-lg shadow-black/5 flex gap-5 items-center justify-between">
        <a href="{{ url('/posts') }}"
            class="text-xl font-bold border-b-2 text-slate-800 border-transparent border-dotted whitespace-nowrap hover:border-emerald-400">Laravel
            Posts</a>
        <form action="/posts/search" method="GET">
            <input name="q" required
                class="border border-slate-200 hover:border-slate-300 hover:bg-slate-50/50 duration-300 focus:border-emerald-500 focus:shadow-[0_0_0_3px_rgb(208,250,229)] rounded-lg h-9 px-3 outline-0 w-sm xl:w-md max-w-full font-medium text-[15px]"
                placeholder="Search Posts..." />
        </form>
        <div class="flex gap-3 items-center">
            @guest
                <a href="/login" class="btn" style="padding-left: 9px;">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                        stroke="currentColor" class="size-4 -translate-y-px">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M8.25 9V5.25A2.25 2.25 0 0 1 10.5 3h6a2.25 2.25 0 0 1 2.25 2.25v13.5A2.25 2.25 0 0 1 16.5 21h-6a2.25 2.25 0 0 1-2.25-2.25V15M12 9l3 3m0 0-3 3m3-3H2.25" />
                    </svg>
                    <span>
                        Login
                    </span>
                </a>
            @endguest
            @auth
                <a href="/posts/create" class="btn" style="padding-left: 9px;">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                        stroke="currentColor" class="size-4 -translate-y-px">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                    </svg>
                    <span>
                        Add Post
                    </span>
                </a>
                <form method="POST" action="/logout">
                    <button type="submit" class="btn btn-danger" style="padding-left: 9px;">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor" class="size-4 -translate-y-px">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15.75 9V5.25A2.25 2.25 0 0 0 13.5 3h-6a2.25 2.25 0 0 0-2.25 2.25v13.5A2.25 2.25 0 0 0 7.5 21h6a2.25 2.25 0 0 0 2.25-2.25V15m3 0 3-3m0 0-3-3m3 3H9" />
                        </svg>
                        <span>
                            Logout
                        </span>
                    </button>
                </form>
            @endauth
        </div>
    </nav>
</header>