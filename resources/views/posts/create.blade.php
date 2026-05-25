<x-layout title="Create New Post">
    <div class="max-w-4xl mx-auto p-6 py-12">
        <a href="javascript:history.back()"
            class="hover:text-emerald-500 font-medium flex gap-1 items-center mb-3 w-fit">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                stroke="currentColor" class="size-3.5">
                <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" />
            </svg>
            <span class="tracking-tight">Back</span>
        </a>

        <div class="flex gap-4 items-center my-3">
            <div class="h-px w-full bg-emerald-200"></div>
            <h1 class="text-xl tracking-wider uppercase text-slate-700 font-medium text-nowrap">Create Post</h1>
            <div class="h-px w-full bg-emerald-200"></div>
        </div>

        <form action="/posts/store" method="POST">
            <x-forms.input label="Title" name="title" placeholder="Enter title for the post"></x-forms.input>
            <x-forms.input label="Author" name="author" placeholder="Enter author of the post"></x-forms.input>
            <x-forms.input label="Category" name="category" placeholder="Enter category of the post"></x-forms.input>
            <x-forms.input label="Poster URL" name="poster_url" placeholder="Enter poster url"></x-forms.input>
            <x-forms.textarea label="Content" name="body" placeholder="Enter post content" rows="8"></x-forms.textarea>

            <button type="submit" class="btn">Create Post</button>
        </form>
    </div>
</x-layout>